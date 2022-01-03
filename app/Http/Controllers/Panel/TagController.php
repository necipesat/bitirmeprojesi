<?php

namespace App\Http\Controllers\Panel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TagController extends Controller {

    public function list(){
        $turkish = DB::table('p_lang')->where(['short' => 'tr', 'deleted' => false])->first()->id;
        return view('panel.tag.list', [
            'tags' => DB::table('p_tag')->where(['lang_id' => $turkish, 'deleted' => false])->get()
        ]);   
    }

    public function add(){
        return view('panel.tag.add');
    }

    public function edit($id, $lang){
        $item = DB::table('p_tag')->where(['uid' => $id, 'lang_id' => $lang, 'deleted' => false])->first();
        $keywordStr = "";
        if(isset($item->keywords)){
            foreach(json_decode($item->keywords, true) as $keyword){
                $keywordStr .= $keyword['value'].',';
            }
        }
        return view('panel.tag.edit', [
            'languages' => DB::table('p_lang')->where('deleted', false)->get(),
            'item' => $item,
            'slug' => $item ? DB::table('p_slug')->where('id', $item->slug_id)->first()->name : '', 
            'id' => $id,
            'lang' => $lang,
            'keywords' => $keywordStr
        ]);
    }

    public function action(Request $request){
        try {
            if($request->type == "add"){
                $entryId = DB::table('p_tag')->insertGetId([
                    'name' => $request->name,
                    'seo_title' => $request->seoTitle,
                    'lang_id' => $request->language ?? 1,
                    'seo_description' => $request->seoDescription,
                    'keywords' => $request->keywords,
                    'content' => $request->content,
                    'publish' => $request->publish == "on" ? true : false,
                    'created_by' => session('panelUserId'),
                    'order_id' => $request->orderId
                ]);
                
                $slugId = DB::table('p_slug')->insertGetId([
                    'name' => $request->slug.(DB::table('p_slug')->where(['name' => $request->slug, 'deleted' => false])->first() ? "-".$entryId : ""),
                    'module_id' => 4
                ]);

                DB::table('p_tag')->where('id', $entryId)->update([
                    'uid' => ($request->uid ? $request->uid : $entryId),
                    'slug_id' => $slugId
                ]);
                
                logActivity($request->name." isimli etiketi ekledi");
                return redirect()->route('CMSTag')->with([
                    'title' => "Etiket başarıyla eklenmiştir",
                    'icon' => "success",
                ]);
            } else if($request->type == "edit"){
                $entry = DB::table('p_tag')->where(['uid' => $request->uid, 'lang_id' => $request->language, 'deleted' => false]);
                
                if($entry->first()->name != $request->name){
                    DB::table('p_slug')->where('id', $entry->first()->slug_id)->update([
                        'name' => $request->slug.(DB::table('p_slug')->where(['name' => $request->slug, 'deleted' => false])->first() ? "-".$entry->first()->id : ""),
                    ]);
                }

                $entry->update([
                    'name' => $request->name,
                    'seo_title' => $request->seoTitle,
                    'seo_description' => $request->seoDescription,
                    'keywords' => $request->keywords,
                    'content' => $request->content,
                    'publish' => $request->publish == "on" ? true : false,
                    'order_id' => $request->orderId
                ]);

                logActivity($request->name." isimli etiketi düzenledi");
                return back()->with([
                    'title' => "Etiket başarıyla düzenlenmiştir",
                    'icon' => "success",
                ])->withInput();
            } else if($request->type == "delete"){
                $entry = DB::table('p_tag')->where(['id' => $request->id, 'deleted' => false]);
                $err = "";

                foreach(DB::table('p_blog')->where('deleted', false)->get() as $blog){
                    if($blog->tag != "null"){
                        foreach(json_decode($blog->tag, true) as $tag){
                            if($tag == $request->id){
                                $err .= "Blog -> ".$blog->name."<br>";
                            }
                        }
                    }
                }
                
                foreach(DB::table('p_product')->where('deleted', false)->get() as $product){
                    if($product->tag != "null"){
                        foreach(json_decode($product->tag, true) as $tag){
                            if($tag == $request->id){
                                $err .= "Ürün -> ".$product->name."<br>";
                            }
                        }
                    }
                }

                if($err == ""){
                    logActivity($entry->first()->name." isimli etiketi sildi");
                    
                    DB::table('p_slug')->where('id', $entry->first()->slug_id)->update([
                        'deleted' => true
                    ]);

                    $entry->update([
                        'deleted' => true
                    ]);

                    return response()->json([
                        'title' => "Etiket başarıyla silinmiştir",
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
            ])->withInput();
        }
    }
}
