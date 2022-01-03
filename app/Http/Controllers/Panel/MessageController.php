<?php

namespace App\Http\Controllers\Panel;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MessageController extends Controller {
    
    public function list(){
        return view('panel.message.list', [
            'messages' => DB::table('p_message')->where('deleted', false)->get()
        ]);   
    }

    public function browse($id){
        return view('panel.message.browse', [
            'message' => DB::table('p_message')->where(['id' => $id, 'deleted' => false])->first(),
            'content' => json_decode(DB::table('p_message')->where(['id' => $id, 'deleted' => false])->first()->content, true)
        ]);
    }

    public function send(Request $request){
            if($request->type == "contact"){
                $content = array(
                    'name' => $request->name,
                    'email' => $request->email,
                    'subject' => $request->subject,
                    'content' => $request->content
                );
                DB::table('p_message')->insert([
                    'type' => 'contact',
                    'email' => $request->email,
                    'content' => json_encode($content),
                    'ip_address' => $request->ip(),
                ]);

                Mail::send('app.mail.send-mail',$content,function($mail) use ($content){
                    $mail->from('necip.ozturk@ogr.sakarya.edu.tr', 'Sakarya Üniversitesi Bitirme Projesi');
                    $mail->to($content['email']);
                    $mail->subject('Sakarya Üniversitesi Bitirme Projesi');
                });

                return back()->with([
                    'title' => "Mesajınız gönderilmiştir",
                    'icon' => "success",
                ]);
            } else if($request->type == "newsletter"){
                if(DB::table('p_message')->where(['email' => $request->email, 'deleted' => false])->first()){
                    return back()->with([
                        'title' => "Bu maille kayıt bulunmaktadır",
                        'icon' => "error",  
                    ]);
                } else {
                    DB::table('p_message')->insert([
                        'type' => 'newsletter',
                        'email' => $request->email,
                        'ip_address' => $request->ip(),
                    ]);
                    return back()->with([
                        'title' => "Kaydınız tamamlanmıştır",
                        'icon' => "success",
                    ]);
                }
            } else if($request->type == "comment"){
                $content = array(
                    'content' => $request->content,
                    'name' => $request->name,
                    'email' => $request->email
                );
                DB::table('p_message')->insert([
                    'blog_id' => $request->blog,
                    'type' => 'comment',
                    'email' => $request->email,
                    'content' => json_encode($content),
                    'ip_address' => $request->ip(),
                ]);
                return back()->with([
                    'title' => "Yorumunuz gönderilmiştir",
                    'icon' => "success",
                ]);
            } else if($request->type == "replies"){
                $content = array(
                    'content' => $request->content,
                    'name' => $request->name,
                    'email' => $request->email
                );
                DB::table('p_message')->insert([
                    'reply_id' => $request->reply,
                    'blog_id' => $request->blog,
                    'type' => 'comment_reply',
                    'email' => $request->email,
                    'content' => json_encode($content),
                    'ip_address' => $request->ip(),
                ]);
                return back()->with([
                    'title' => "Yorumunuz gönderilmiştir",
                    'icon' => "success",
                ]);
            } else {
                return back()->with([
                    'title' => "Tanımlanamayan yorum türü",
                    'icon' => "error",
                ]);
            }
        /*} else{
            return back()->with([
                'title' => "Kimliğiniz Doğrulanamadı",
                'icon' => "error",
            ]);
        }*/
    }

    public function action(Request $request){
        try {
            if($request->type == "delete"){
                $entry = DB::table('p_message')->where(['id' => $request->id, 'deleted' => false]);
                $err = "";

                if($err == ""){
                    logActivity(json_decode($entry->first()->content)->name." isimli mesajı sildi");
                    
                    $entry->update([
                        'deleted' => true
                    ]);

                    return response()->json([
                        'title' => "Mesaj başarıyla silinmiştir",
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