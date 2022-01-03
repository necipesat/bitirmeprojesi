<?php

namespace App\Http\Controllers\Panel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller {

    public function list(){
        $turkish = DB::table('p_lang')->where(['short' => 'tr', 'deleted' => false])->first()->id;
        return view('panel.category.list', [
            'categories' => DB::table('p_category')->where(['lang_id' => $turkish, 'deleted' => false])->get()
        ]);   
    }

    public function add(){
        $turkish = DB::table('p_lang')->where(['short' => 'tr', 'deleted' => false])->first()->id;
        return view('panel.category.add', [
            'upperCategories' => DB::table('p_category')->where(['deleted' => false, 'lang_id' => $turkish])->get(),
            'modules' => DB::table('p_modules')->where(['active' => true, 'categorizable' => true])->get(),
        ]);
    }

    public function edit($id, $lang){
        $item = DB::table('p_category')->where(['uid' => $id, 'lang_id' => $lang, 'deleted' => false])->first();
        $keywordStr = "";
        if(isset($item->keywords)){
            foreach(json_decode($item->keywords, true) as $keyword){
                $keywordStr .= $keyword['value'].',';
            }
        }
        return view('panel.category.edit', [
            'upperCategories' => DB::table('p_category')->where(['deleted' => false, 'lang_id' => $lang])->get(),
            'languages' => DB::table('p_lang')->where('deleted', false)->get(),
            'item' => $item,
            'slug' => $item ? DB::table('p_slug')->where('id', $item->slug_id)->first()->name : '', 
            'id' => $id,
            'lang' => $lang,
            'modules' => DB::table('p_modules')->where(['active' => true, 'categorizable' => true])->get(),
            'keywords' => $keywordStr
        ]);
    }

    public function action(Request $request){
        try {
            if($request->type == "add"){
                $entryId = DB::table('p_category')->insertGetId([
                    'module_id' => $request->module,
                    'name' => $request->name,
                    'root_id' => $request->upperCategory,
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
                    'module_id' => 3
                ]);

                DB::table('p_category')->where('id', $entryId)->update([
                    'uid' => ($request->uid ? $request->uid : $entryId),
                    'slug_id' => $slugId
                ]);

                logActivity($request->name." isimli kategoriyi ekledi");

                return redirect()->route('CMSCategory')->with([
                    'title' => "Kategori başarıyla eklenmiştir",
                    'icon' => "success",
                ]);
            } else if($request->type == "edit"){
                $entry = DB::table('p_category')->where(['uid' => $request->uid, 'lang_id' => $request->language, 'deleted' => false]);
                
                if($entry->first()->name != $request->name){
                    DB::table('p_slug')->where('id', $entry->first()->slug_id)->update([
                        'name' => $request->slug.(DB::table('p_slug')->where(['name' => $request->slug, 'deleted' => false])->first() ? "-".$entry->first()->id : ""),
                    ]);
                }

                $entry->update([
                    'module_id' => $request->module,
                    'name' => $request->name,
                    'root_id' => $request->upperCategory,
                    'seo_title' => $request->seoTitle,
                    'seo_description' => $request->seoDescription,
                    'keywords' => $request->keywords,
                    'content' => $request->content,
                    'publish' => $request->publish == "on" ? true : false,
                    'order_id' => $request->orderId
                ]);
                
                logActivity($request->name." isimli kategoriyi düzenledi");

                return back()->with([
                    'title' => "Kategori başarıyla düzenlenmiştir",
                    'icon' => "success",
                ])->withInput();
            } else if($request->type == "delete"){
                $entry = DB::table('p_category')->where(['id' => $request->id, 'deleted' => false]);
                $err = "";

                foreach(DB::table('p_blog')->where('deleted', false)->get() as $blog){
                    if($blog->category_id == $request->id){
                        $err .= "Blog -> ".$blog->name."<br>";
                    }
                }

                foreach(DB::table('p_product')->where('deleted', false)->get() as $product){
                    if($product->category_id == $request->id){
                        $err .= "Ürün -> ".$product->name."<br>";
                    }
                }

                foreach(DB::table('p_service')->where('deleted', false)->get() as $service){
                    if($service->category_id == $request->id){
                        $err .= "Hizmet -> ".$service->name."<br>";
                    }
                }

                foreach(DB::table('p_category')->where('deleted', false)->get() as $category){
                    if($category->root_id == $request->id){
                        $err .= "Kategori -> ".$category->name."<br>";
                    }
                }

                if($err == ""){
                    logActivity($entry->first()->name." isimli kategoriyi sildi");
                
                    DB::table('p_slug')->where('id', $entry->first()->slug_id)->update([
                        'deleted' => true
                    ]);
                    
                    $entry->update([
                        'deleted' => true
                    ]);
    
                    return response()->json([
                        'title' => "Kategori başarıyla silinmiştir",
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
