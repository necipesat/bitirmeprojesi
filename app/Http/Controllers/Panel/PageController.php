<?php

namespace App\Http\Controllers\Panel;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class PageController extends Controller {
    
    public function list(){
        $turkish = DB::table('p_lang')->where(['short' => 'tr', 'deleted' => false])->first()->id;
        return view('panel.page.list', [
            'pages' => DB::table('p_page')->where(['lang_id' => $turkish, 'deleted' => false])->get()
        ]);   
    }

    public function add(){
        $turkish = DB::table('p_lang')->where(['short' => 'tr', 'deleted' => false])->first()->id;
        return view('panel.page.add', [
            'upperPages' => DB::table('p_page')->where(['deleted' => false, 'lang_id' => $turkish])->get(),
        ]);
    }

    public function edit($id, $lang){
        $item = DB::table('p_page')->where(['uid' => $id, 'lang_id' => $lang, 'deleted' => false])->first();
        return view('panel.page.edit', [
            'languages' => DB::table('p_lang')->where('deleted', false)->get(),
            'upperPages' => DB::table('p_page')->where(['deleted' => false, 'lang_id' => $lang])->get(),
            'item' => $item,
            'slug' => $item ? DB::table('p_slug')->where('id', $item->slug_id)->first()->name : '', 
            'id' => $id,
            'lang' => $lang
        ]);
    }

    public function action(Request $request){
        try {
            if($request->type == "add"){
                $entryId = DB::table('p_page')->insertGetId([
                    'name' => $request->name,
                    'lang_id' =>  $request->language ?? 1,
                    'seo_title' => $request->seoTitle,
                    'seo_description' => $request->seoDescription,
                    'short_description' => $request->shortDescription,
                    'content' => $request->content,
                    'root_id' => $request->upperPage,
                    'order_id' => $request->orderId,
                    'fixed' => $request->fixed == "on" ? true : false,
                    'publish' => $request->publish == "on" ? true : false,
                    'created_by' => session('panelUserId')
                ]);
                
                $slugId = DB::table('p_slug')->insertGetId([
                    'name' => $request->slug.(DB::table('p_slug')->where(['name' => $request->slug, 'deleted' => false])->first() ? "-".$entryId : ""),
                    'module_id' => 8
                ]);

                DB::table('p_page')->where('id', $entryId)->update([
                    'uid' => ($request->uid ? $request->uid : $entryId),
                    'slug_id' => $slugId
                ]);
                
                logActivity($request->name." isimli sayfayı ekledi");
                return redirect()->route('CMSPage')->with([
                    'title' => "Sayfa başarıyla eklenmiştir",
                    'icon' => "success",
                ]);
            } else if($request->type == "edit"){
                $entry = DB::table('p_page')->where(['uid' => $request->uid, 'lang_id' => $request->language, 'deleted' => false]);
                
                if($entry->first()->name != $request->name){
                    DB::table('p_slug')->where('id', $entry->first()->slug_id)->update([
                        'name' => $request->slug.(DB::table('p_slug')->where(['name' => $request->slug, 'deleted' => false])->first() ? "-".$entry->first()->id : ""),
                    ]);
                }

                $entry->update([
                    'name' => $request->name,
                    'seo_title' => $request->seoTitle,
                    'root_id' => $request->upperPage,
                    'seo_description' => $request->seoDescription,
                    'order_id' => $request->orderId,
                    'short_description' => $request->shortDescription,
                    'content' => $request->content,
                    'fixed' => $request->fixed == "on" ? true : false,
                    'publish' => $request->publish == "on" ? true : false,
                ]);
                
                logActivity($request->name." isimli sayfayı düzenledi");

                return back()->with([
                    'title' => "Sayfa başarıyla düzenlenmiştir",
                    'icon' => "success",
                ])->withInput();
            } else if($request->type == "delete"){
                $entry = DB::table('p_page')->where(['id' => $request->id, 'deleted' => false]);
                $err = "";

                foreach(DB::table('p_page')->where('deleted', false)->get() as $page){
                    if($page->root_id == $request->id){
                        $err .= "Sayfa -> ".$page->name."<br>";
                    }
                }
                
                if($err == ""){
                
                    logActivity($entry->first()->name." isimli sayfayı sildi");
                    
                    DB::table('p_slug')->where('id', $entry->first()->slug_id)->update([
                        'deleted' => true
                    ]);
                    
                    $entry->update([
                        'deleted' => true
                    ]);

                    return response()->json([
                        'title' => "Sayfa başarıyla silinmiştir",
                        'icon' => "success",
                    ]);
                } else {
                    return response()->json([
                        'error' => $err,
                    ]);
                }
            } else {
                return back()->with([
                    'title' => "Hatalı aksiyon",
                    'icon' => "error",                        
                ]);
            }
        } catch(\Illuminate\Database\QueryException $ex){
            return back()->with([
                'title' => $ex->getMessage(),
                'icon' => "error",
                'exception' => "a"
            ])->withInput();
        }
    }
}
