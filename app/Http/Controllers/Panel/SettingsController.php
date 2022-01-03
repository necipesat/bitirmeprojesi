<?php

namespace App\Http\Controllers\Panel;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class SettingsController extends Controller {

    public function index(){
        return view('panel.settings', [
            'site_settings' => json_decode(DB::table('p_settings')->where('group_name', 'site_config')->first()->content),
            'site_social' => json_decode(DB::table('p_settings')->where('group_name', 'site_social')->first()->content),
            'site_contact' => json_decode(DB::table('p_settings')->where('group_name', 'site_contact')->first()->content),
        ]);
    }
 
    public function action(Request $request){
        try {
            $content = $request->all();
            unset($content['_token']);
            unset($content['group']);
            DB::table('p_settings')->where(['group_name' => $request->group, 'deleted' => false])->update([
                'content' => json_encode($content),
            ]);
            logActivity("ayarları düzenledi");
            return back()->with([
                'title' => "Ayarlar başarıyla düzenlenmiştir",
                'icon' => "success",
            ])->withInput();
        } catch(\Illuminate\Database\QueryException $ex){
            return back()->with([
                'title' => "İşlem sırasında hata medyana geldi",
                'icon' => "error",
                'exception' => $ex->getMessage()
            ])->withInput();
        }
    }
}
