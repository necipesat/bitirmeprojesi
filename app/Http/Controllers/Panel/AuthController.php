<?php

namespace App\Http\Controllers\Panel;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class AuthController extends Controller{

    public function login(){
        if (!session()->has('panelUserId')){
            return view('panel.login');
        } else{
            return redirect()->route('CMSRoot');
        }
    }

    public function logout(){
        if (session()->has('panelUserId')){
            logActivity("Panelden çıkış yaptı");
            session()->pull('panelUserId');
            session()->pull('panelUserEmail');
            session()->pull('panelUserName');
            return redirect()->route('CMSLogin');
        }
        return redirect()->route('CMSLogin');
    }

    public function checkLogin(Request $request){
        $email = $request->email;
        $password = md5($request->password);
        $user = DB::table('p_users')->where(['email' => $email, 'password' => $password, 'deleted' => false])->first();
        if (DB::table('p_users')->where(['email' => $email, 'password' => $password, 'deleted' => false])->first()){
            $request->session()->put('panelUserId', $user->id);
            $request->session()->put('panelUserName', $user->name);
            $request->session()->put('panelUserEmail', $user->email);
            logActivity("Panele giriş yaptı");
            if(session('prevlinkpanel')){
                return redirect()->to(session('prevlinkpanel'));
            } else {
                return redirect()->route('CMSRoot');
            }
            print $user->email;

        } else{
            return back()->with([
                'title' => "Girmiş olduğunuz bilgilere ait kullanıcı bulunamadı",
                'icon' => "error",
            ]);
        }
    }

    public function sendMail(Request $request){
        $email = $request->email;
        $user = DB::table('p_users')->where(['email' => $email, 'deleted' => false])->first();
        if ($user){
            try{
                $oldToken = DB::table('p_tokens')->where(['user_id' => $user->id, 'user_type' => 'panel', 'deleted' => false])->first();

                if($oldToken){
                    if($oldToken->expire_date < strtotime("now")){
                        $token = uniqid().date("dmyhis");
                        $expireDate = strtotime("tomorrow");
                        DB::table('p_tokens')->where(['id' => $oldToken->id])->update(['token' => $token, 'expire_date' => $expireDate]);
                    } else{
                        $token = $oldToken->token;
                    }
                } else{
                    $token = uniqid().date("dmyhis");
                    $expireDate = strtotime("now + 1 day");
                    DB::table('p_tokens')->insert(['token' => $token, 'user_id' => $user->id, 'user_type' => 'panel', 'expire_date' => $expireDate]);
                }

                $subject = "Bitirme Projesi Şifre Sıfırlama";
                $view = "panel.email.mail";
                SendMail($subject,$user->name,$user->email,$view,$token);

                return back()->with([
                    'title' => "Girmiş olduğunuz maile sıfırlama linki gönderildi",
                    'icon' => "success",
                ]);
            } catch (\Throwable $th){
                return back()->with([
                    'title' => "Şifre sıfırlama işlemi başarısız",
                    'icon' => "error",
                ]);
            }
        } else {
            return back()->with([
                'title' => "Girmiş olduğunuz bilgilere ait kullanıcı bulunamadı",
                'icon' => "error",
            ]);
        }
    }

    public function reset($token = null){
        $findToken = DB::table('p_tokens')->where(['token' => $token, 'deleted' => false])->first();
        if($findToken){
            if($findToken->expire_date < strtotime("now")){
                DB::table('p_tokens')->where(['token' => $token])->update([
                    'deleted' => true
                ]);
                return redirect()->route('CMSLogin')->with([
                    'title' => "Girmiş olduğunuz bağlantı geçersiz",
                    'icon' => "error",
                ]);
            } else{
                return view("panel.email.reset",[
                    'token' => $token,
                ]);
            }
        }
        else{
            return redirect()->route('CMSLogin')->with([
                'title' => "Girmiş olduğunuz bağlantı geçersiz",
                'icon' => "error",
            ]);
        }
    }

    public function checkForgot(Request $request){
        $newPassword = md5($request->newPassword_1);
        $token = $request->token;

        try {
            $findUserId = DB::table('p_tokens')->where(['token' => $token])->first();
            DB::table('p_users')->where('id', $findUserId->user_id)->update(['password' => $newPassword]);

            return redirect()->route('CMSLogin')->with([
                'title' => "Şifre değişikliği başarılı",
                'icon' => "success"
            ]);
        } catch (\Throwable $th){
            return back()->with([
                'title' => "Şifre değişikliği başarısız lütfen tekrar deneyin",
                'icon' => "error"
            ]);
        }
    }
}
