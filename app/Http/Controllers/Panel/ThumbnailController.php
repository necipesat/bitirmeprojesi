<?php

namespace App\Http\Controllers\Panel;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ThumbnailController extends Controller {

    public function thumbnail($module, $id){
        $module = DB::table('p_modules')->where(['url' => '/'.$module, 'active' => true])->first();
        return view('panel.thumbnail', [
            'item' => DB::table($module->schema_name)->where(['id' => $id, 'deleted' => false])->first(),
            'settings' => json_decode($module->thumbnail_settings, true),
            'module' => $module,
            'id' => $id
        ]);
    }

    public function submit(Request $request){
        try {
            DB::table($request->schema)->where(['id' => $request->id, 'uid' => $request->id, 'deleted' => false])->update([
                'thumbnails' => $request->thumbnails
            ]);
            logActivity(DB::table($request->schema)->where(['id' => $request->id, 'uid' => $request->id, 'deleted' => false])->first()->name." isimli kaydın fotoğraflarını düzenledi");
            return back()->with([
                'title' => "Fotoğraflar başarıyla düzenlenmiştir",
                'icon' => "success",
            ])->withInput();

        } catch(\Illuminate\Database\QueryException $ex){
            return back()->with([
                'title' => "Fotoğrafı düzenlerken hata oluştu",
                'icon' => "error",
                'exception' => $ex->getMessage()
            ])->withInput();
        }
    }
}