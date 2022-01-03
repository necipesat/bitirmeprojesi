<?php

namespace App\Http\Controllers\Panel;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class BlogController extends Controller {
    
    public function list(){
        $turkish = DB::table('p_lang')->where(['short' => 'tr', 'deleted' => false])->first()->id;
        return view('panel.blog.list', [
            'blogs' => DB::table('p_blog')->where(['lang_id' => $turkish, 'deleted' => false])->get()
        ]);   
    }

    public function add(){
        $turkish = DB::table('p_lang')->where(['short' => 'tr', 'deleted' => false])->first()->id;
        $module = DB::table('p_modules')->where('id', 1)->first();
        return view('panel.blog.add', [
            'categories' => DB::table('p_category')->where(['module_id' => $module->id, 'lang_id' => $turkish, 'publish' => true, 'deleted' => false])->get(),
            'oldBlogs' => DB::table('p_blog')->where(['publish' => true, 'deleted' => false])->get(),
        ]);
    }

    public function edit($id, $lang){
        $item = DB::table('p_blog')->where(['uid' => $id, 'lang_id' => $lang, 'deleted' => false])->first();
        $module = DB::table('p_modules')->where('id', 1)->first();
        $keywordStr = "";
        if(isset($item->keywords)){
            foreach(json_decode($item->keywords, true) as $keyword){
                $keywordStr .= $keyword['value'].',';
            }
        }
        return view('panel.blog.edit', [
            'languages' => DB::table('p_lang')->where('deleted', false)->get(),
            'categories' => DB::table('p_category')->where(['module_id' => $module->id, 'lang_id' => $lang, 'publish' => true, 'deleted' => false])->get(),
            'oldBlogs' => DB::table('p_blog')->where(['publish' => true, 'deleted' => false])->get(),
            'item' => $item,
            'slug' => $item ? DB::table('p_slug')->where('id', $item->slug_id)->first()->name : '', 
            'id' => $id,
            'lang' => $lang,
            'keywords' => $keywordStr
        ]);
    }

    public function actionLike(Request $request){
        try {
            if($request->type == "likes"){
                
                if(DB::table('like_button')->where('blog_id',$request->blogID)->first()){
                    DB::table('like_button')->where('blog_id',$request->blogID)->update([
                        'total_like' => $request->likescore,
                    ]);
                    return response()->json([
                        'title' => "Beğeniniz eklendi",
                        'icon' => "success",
                    ]);
                } else {
                    DB::table('like_button')->insert([
                        'blog_id' => $request->blogID,
                        'total_like' => $request->likescore,
                    ]);
                    return response()->json([
                        'title' => "Beğeniniz eklendi",
                        'icon' => "success",
                    ]);
                }
            } else {
                return back()->with([
                    'title' => "Hatalı aksiyon",
                    'icon' => "error",                        
                ]);
            }
        }

            catch(\Illuminate\Database\QueryException $ex){
                return back()->with([
                    'title' => "İşlem sırasında hata medyana geldi",
                    'icon' => "error",
                    'exception' => $ex->getMessage()
                ])->withInput();
            }
    }

    public function action(Request $request){
        try {
            if($request->type == "add"){
                $entryId = DB::table('p_blog')->insertGetId([
                    'name' => $request->name,
                    'category_id' => $request->category,
                    'tag' => json_encode($request->tag),
                    'more_link' => json_encode($request->moreBlogs),
                    'author' => $request->author,
                    'lang_id' =>  $request->language ?? 1,
                    'seo_title' => $request->seoTitle,
                    'seo_description' => $request->seoDescription,
                    'keywords' => $request->keywords,
                    'short_description' => $request->shortDescription,
                    'content' => $request->content,
                    'order_id' => $request->orderId,
                    'publish' => $request->publish == "on" ? true : false,
                    'created_by' => session('panelUserId')
                ]);

                $slugId = DB::table('p_slug')->insertGetId([
                    'name' => $request->slug.(DB::table('p_slug')->where(['name' => $request->slug, 'deleted' => false])->first() ? "-".$entryId : ""),
                    'module_id' => 1
                ]);

                DB::table('p_blog')->where('id', $entryId)->update([
                    'uid' => ($request->uid ? $request->uid : $entryId),
                    'slug_id' => $slugId
                ]);

                logActivity($request->name." isimli yazıyı ekledi");

                return redirect()->route('CMSBlog')->with([
                    'title' => "Yazı başarıyla eklenmiştir",
                    'icon' => "success",
                ]);
            } else if($request->type == "edit"){
                $entry = DB::table('p_blog')->where(['uid' => $request->uid, 'lang_id' => $request->language, 'deleted' => false]);
                
                if($entry->first()->name != $request->name){
                    DB::table('p_slug')->where('id', $entry->first()->slug_id)->update([
                        'name' => $request->slug.(DB::table('p_slug')->where(['name' => $request->slug, 'deleted' => false])->first() ? "-".$entry->first()->id : ""),
                    ]);
                } 

                $entry->update([
                    'name' => $request->name,
                    'category_id' => $request->category,
                    'tag' => json_encode($request->tag),
                    'more_link' => json_encode($request->moreBlogs),
                    'author' => $request->author,
                    'seo_title' => $request->seoTitle,
                    'seo_description' => $request->seoDescription,
                    'keywords' => $request->keywords,
                    'order_id' => $request->orderId,
                    'short_description' => $request->shortDescription,
                    'content' => $request->content,
                    'publish' => $request->publish == "on" ? true : false,
                ]);

                logActivity($request->name." isimli yazıyı düzenledi");

                return back()->with([
                    'title' => "Yazı başarıyla düzenlenmiştir",
                    'icon' => "success",
                ])->withInput();
            } else if($request->type == "delete"){
                $entry = DB::table('p_blog')->where(['id' => $request->id, 'deleted' => false]);
                $err = "";

                foreach(DB::table('p_blog')->where('deleted', false)->get() as $blog){
                    if($blog->more_link != "null"){
                        foreach(json_decode($blog->more_link, true) as $link){
                            if($link == $request->id){
                                $err .= "Yazı -> ".$blog->name."<br>";
                            }
                        }
                    }
                }
                
                if($err == ""){
                    logActivity($entry->first()->name." isimli yazıyı sildi");

                    DB::table('p_slug')->where('id', $entry->first()->slug_id)->update([
                        'deleted' => true
                    ]);

                    $entry->update([
                        'deleted' => true
                    ]);

                    return response()->json([
                        'title' => "Yazı başarıyla silinmiştir",
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
                'title' => "İşlem sırasında hata medyana geldi",
                'icon' => "error",
                'exception' => $ex->getMessage()
            ])->withInput();
        }
    }
}
