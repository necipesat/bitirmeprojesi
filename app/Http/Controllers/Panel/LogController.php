<?php

namespace App\Http\Controllers\Panel;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class LogController extends Controller {
    public function list(){
        return view('panel.log', [
            'logs' => DB::table('p_log')->get(),
        ]);
    }
}
