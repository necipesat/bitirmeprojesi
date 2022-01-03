<?php

namespace App\Http\Controllers\Panel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MenuController extends Controller {

    public function list(){
        $turkish = DB::table('p_lang')->where(['short' => 'tr', 'deleted' => false])->first()->id;
        return view('panel.menu.list', [
            'menus' => DB::table('p_menu')->where(['lang_id' => $turkish, 'deleted' => false])->get()
        ]);   
    }

    public function add(){
        $turkish = DB::table('p_lang')->where(['short' => 'tr', 'deleted' => false])->first()->id;
        return view('panel.menu.add', [
            'slugs' => DB::table('p_slug')->where('deleted', false)->get(),
            'upperMenus' => DB::table('p_menu')->where(['deleted' => false, 'lang_id' => $turkish])->get(),
        ]);
    }

    public function edit($id, $lang){
        $item = DB::table('p_menu')->where(['uid' => $id, 'lang_id' => $lang, 'deleted' => false])->first();
        return view('panel.menu.edit', [
            'languages' => DB::table('p_lang')->where('deleted', false)->get(),
            'item' => $item,
            'id' => $id,
            'lang' => $lang,
            'slugs' => DB::table('p_slug')->where('deleted', false)->get(),
            'upperMenus' => DB::table('p_menu')->where(['deleted' => false, 'lang_id' => $lang])->get(),
        ]);
    }

    public function action(Request $request){
        try {
            if($request->type == "add"){
                DB::table('p_menu')->insert([
                    'name' => $request->name,
                    'slug_id' => $request->slugId,
                    'new_window' => $request->newWindow == "on" ? true : false,
                    'position' => $request->position,
                    'lang_id' => $request->language ?? 1,
                    'created_by' => session('panelUserId'),
                    'order_id' => $request->orderId,
                    'root_id' => $request->upperMenu
                ]);
                DB::table('p_menu')->where('id', DB::getPdo()->lastInsertId())->update([
                    'uid' => ($request->uid ? $request->uid : DB::getPdo()->lastInsertId())
                ]);
                logActivity($request->name." isimli menüyü ekledi");

                return redirect()->route('CMSMenu')->with([
                    'title' => "Menu başarıyla eklenmiştir",
                    'icon' => "success",
                ]);
            } else if($request->type == "edit"){
                DB::table('p_menu')->where(['uid' => $request->uid, 'lang_id' => $request->language, 'deleted' => false])->update([
                    'name' => $request->name,
                    'slug_id' => $request->slugId,
                    'position' => $request->position,
                    'new_window' => $request->newWindow == "on" ? true : false,
                    'lang_id' => $request->language ?? 1,
                    'order_id' => $request->orderId,
                    'root_id' => $request->upperMenu
                ]);
                logActivity($request->name." isimli menüyü düzenledi");

                return back()->with([
                    'title' => "Menu başarıyla düzenlenmiştir",
                    'icon' => "success",
                ])->withInput();
            } else if($request->type == "delete"){
                $entry = DB::table('p_menu')->where(['id' => $request->id, 'deleted' => false]);
                $err = "";

                foreach(DB::table('p_menu')->where('deleted', false)->get() as $menu){
                    if($menu->root_id == $request->id){
                        $err .= "Menü -> ".$menu->name."<br>";
                    }
                }
                
                if($err == ""){
                    logActivity($entry->first()->name." isimli menüyü sildi");
                    
                    DB::table('p_slug')->where('id', $entry->first()->slug_id)->update([
                        'deleted' => true
                    ]);
                    
                    $entry->update([
                        'deleted' => true
                    ]);

                    return response()->json([
                        'title' => "Menü başarıyla silinmiştir",
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
