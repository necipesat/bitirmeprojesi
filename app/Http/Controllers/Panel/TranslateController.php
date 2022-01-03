<?php

namespace App\Http\Controllers\Panel;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class TranslateController extends Controller{

    public function list(){
        return view('panel.translate.list', [
            'translations' => DB::table('p_translate')->where('deleted', false)->get()
        ]);   
    }

    public function add(){
        return view('panel.translate.add');
    }

    public function edit($id){
        return view('panel.translate.edit', [
            'translate' => DB::table('p_translate')->where(['id' => $id])->first()
        ]);
    }

    public function action(Request $request){
        try {
            if($request->type == "add"){
                if($request->turkish && $request->english){
                    if(DB::table('p_translate')->where(['language' => 'tr', 'key' => $request->key, 'deleted' => false])->first() &&
                        DB::table('p_translate')->where(['language' => 'en', 'key' => $request->key, 'deleted' => false])->first()){
                        return back()->with([
                            'icon' => 'error', 
                            'title' => 'Bu çevirinin türkçe ve ingilizce kaydı zaten mevcut.'
                        ]);
                    }
                }

                if($request->turkish){
                    if(DB::table('p_translate')->where(['language' => 'tr', 'key' => $request->key, 'deleted' => false])->first()){
                        return back()->with([
                            'icon' => 'error', 
                            'title' => 'Bu çevirinin türkçe kaydı zaten mevcut.'
                        ]);
                    } else {
                        DB::table('p_translate')->insert([
                            'language' => 'tr',
                            'key' => $request->key,
                            'value' => $request->turkish,
                            'created_by' => session('panelUserId')
                        ]);
                    }
                }

                if($request->english){
                    if(DB::table('p_translate')->where(['language' => 'en', 'key' => $request->key, 'deleted' => false])->first()){
                        return back()->with([
                            'icon' => 'error', 
                            'title' => 'Bu çevirinin ingilizce kaydı zaten mevcut.'
                        ]);
                    } else {
                        DB::table('p_translate')->insert([
                            'language' => 'en',
                            'key' => $request->key,
                            'value' => $request->english,
                            'created_by' => session('panelUserId')
                        ]);
                    }
                }

                logActivity($request->key." çevirisini ekledi");
                
                return redirect()->route('CMSTranslate')->with([
                    'title' => "Çeviri başarıyla eklenmiştir",
                    'icon' => "success",
                ]);
            } else if($request->type == "edit"){
                DB::table('p_translate')->where(['id' => $request->id])->update([
                    'key' => $request->key,
                    'value' => $request->value,
                ]);
                logActivity($request->key." çevirisini düzenledi");
                return back()->with([
                    'title' => "Çeviri başarıyla düzenlenmiştir",
                    'icon' => "success",
                ])->withInput();
            } else if($request->type == "delete"){
                $entry = DB::table('p_translate')->where(['id' => $request->id]);
                $entry->update([
                    'deleted' => true
                ]);
                logActivity($entry->first()->key." çevirisini sildi");

                return response()->json([
                    'title' => "Çeviri başarıyla silinmiştir",
                    'icon' => "success",
                ]);
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