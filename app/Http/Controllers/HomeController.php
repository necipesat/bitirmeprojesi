<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;
use Illuminate\Pagination\Paginator;
use App\Http\Controllers\TranslateController;
use App\Http\Controllers\LangController;
use Illuminate\Http\Request;
use Session;
use Carbon\Carbon;

setlocale(LC_TIME,'turkish');

class HomeController extends Controller {

    public function __construct()
    {
        LangController::setLang();

        View::share('home', 0);
    }
    public function index($slug = null){
        if($slug == null || $slug == 'home-page'){
            return view('app.home', [
                'home' => $home = 1,
            ]);
        } else {
            $entry = DB::table('p_slug')->where('name', $slug)->first();
            if($entry){
                $module = DB::table('p_modules')->where('id', $entry->module_id)->first();
                if($module){
                        if($module->id == 8){
                            if($slug == "iletisim" || $slug == "contact"){
                                return view("app.contact", [
                                    'page' => DB::table($module->schema_name)->where(['slug_id' => $entry->id, 'deleted' => false, 'publish' => true])->first(),
                                ]);
                            } else if ($slug == "hakkımda" || $slug == "about-me") {
                                return view("app.about", [
                                    'page' => DB::table($module->schema_name)->where(['slug_id' => $entry->id, 'deleted' => false, 'publish' => true])->first(),
                                ]);
                            } else {
                                return view("app.blog.list", [
                                    'page' => DB::table($module->schema_name)->where(['slug_id' => $entry->id, 'deleted' => false, 'publish' => true])->first(),
                                ]);                            
                            }
                        } else if($module->id == 1) {
                            return view("app.blog.detail", [
                                'page' => DB::table($module->schema_name)->where(['slug_id' => $entry->id, 'deleted' => false, 'publish' => true])->first(),
                            ]);
                        } else {
                            return view('app.404');
                        }
                    }
                } else {
                    return view('app.404');
                }
            } /* else {
                return view('404');
            } */
        }
    }