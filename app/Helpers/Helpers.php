<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;


if(!function_exists('logActivity')){
    function logActivity($text){
        DB::table('p_log')->insert([
            'text' => $text,
            'user_id' => session('panelUserId'),
            'ip_address' => request()->ip(),
        ]);
    }
}

