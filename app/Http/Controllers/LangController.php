<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LangController extends Controller
{
    public static function setLang(){
        if(!session('lang_id')){
            $lang_id = DB::table('p_lang')->where('id',1)->first()->id;
            if($lang_id){
                session(['lang_id' => $lang_id]);
            }
        }
    }
    
    public function changeLang(Request $request){
        if($request->id == null){
            return back();
        }
        else{
            $lang_id = DB::table('p_lang')->where('id',$request->id)->first();
            if($lang_id){
                $request->session()->put('lang_id',$lang_id->id);
                return redirect()->route('AppRoot');
            }
            else{
                return back();
            }
        }
    }
}
