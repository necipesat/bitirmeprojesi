<?php

namespace App\Http\Controllers\Panel;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class UserController extends Controller{

    public function list(){
        return view('panel.users.list', [
            'users' => DB::table('p_users')->where('deleted', false)->get()
        ]);   
    }

    public function add(){
        return view('panel.users.add');
    }

    public function edit($id){
        return view('panel.users.edit', [
            'user' => DB::table('p_users')->where(['id' => $id, 'deleted' => false])->first()
        ]);
    }
    
    public function action(Request $request){
        try {
            if($request->type == "add"){
                if(!DB::table('p_users')->where(['email' => $request->email, 'deleted' => false])->first()){
                    DB::table('p_users')->insert([
                        'name' => $request->name,
                        'email' => $request->email,
                        'password' => md5($request->password),
                        'created_by' => session('panelUserId')
                    ]);
                    logActivity($request->name." isimli kullanıcıyı ekledi");
                } else {
                    return back()->with([
                        'title' => "Girdiğiniz Email ile sistemlerde kullanıcı kayıtlıdır",
                        'icon' => "error",
                    ])->withInput();
                }
                return redirect()->action(
                    [CMSUserController::class, 'list'], [
                        'title' => "Kullanıcı başarıyla eklenmiştir",
                        'icon' => "success",
                    ]
                );
            } else if($request->type == "edit"){
                DB::table('p_users')->where(['id' => $request->id, 'deleted' => false])->update([
                    'name' => $request->name,
                    'email' => $request->email,
                ]);
                logActivity($request->name." isimli kullanıcıyı düzenledi");
                return back()->with([
                    'title' => "Kullanıcı başarıyla düzenlenmiştir",
                    'icon' => "success",
                ])->withInput();
            } else if($request->type == "delete"){
                $entry = DB::table('p_users')->where(['id' => $request->id, 'deleted' => false]);
                logActivity($entry->first()->name." isimli kullanıcıyı sildi");
                $entry->update([
                    'deleted' => true
                ]);

                return response()->json([
                    'location' => route('CMSUser', [
                        'title' => "Kullanıcı başarıyla silinmiştir",
                        'icon' => "success",
                    ])
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