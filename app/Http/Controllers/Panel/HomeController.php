<?php

namespace App\Http\Controllers\Panel;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller {

    public function dashboard(){
        return view('panel.home', [
            'logs' => DB::table('p_log')->whereBetween('create_date', [date('Y-m-d 00:00:00'), date('Y-m-d 23:59:59')])->orderBy('create_date', 'desc')->limit(7)->get(),
            'messages' => DB::table('p_message')->orderBy('id', 'desc')->limit(10)->get()
        ]);
    }
}