<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// use Illuminate\Support\Facades\Validator;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

use Illuminate\Support\Facades\DB;

use App\Models\User;

class PageController extends Controller
{
    //
    public function login () {
        return view('login');
    }
    public function login_db (Request $request) {
       $check = User::where('login','=', $request->login)->exists();
       if(strlen(strip_tags(trim($request->password))) != 0 && strlen(strip_tags(trim($request->login))) != 0){
            if($check == true){
                $user = User::select('id','login','password','role')->where('login', '=', $request->login)->get();
                foreach($user as $u){
                    $password = $u->password;
                    $id = $u->id;
                    $role = $u->role;
                }
                if (Hash::check($request->password, $password)) {
                    Auth::login( User::find($id));
                    if ($role == 0) {
                        return redirect()->route('login')->withErrors(['message'=>'Вы вошли в профиль!']);
                    }
                    else if ($role == 1) {
                        return redirect()->route('admin/index')->withErrors(['message'=>'Вы вошли в профиль как админ!']);
                    }
                } else {
                    return back()->withErrors(['message'=>'Неверные данные!'])->withInput();
            }
           }
           else{
                return back()->withErrors(['message'=>'Нет такого пользователя!'])->withInput();
           }
       }
       else{
            return back()->withErrors(['message'=>'Заполните все поля'])->withInput();
       }
       
    }

}
