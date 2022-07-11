<?php

namespace App\Http\Controllers;

use App\Models\sdb_users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AuthController extends Controller
{
    public function logout(Request $request){
        session(['login'=>'']);
        session(['password'=>'']);
        return view('mainpage');
    }

    public function login_check(Request $request){
        $login = $request['login'];
        $password = $request['password'];

        $all_users = DB::selectOne("SELECT count(*) as usrs,id,role_id FROM usrs WHERE login_i = '".$login."' AND password_i = '".$password."' GROUP BY id,role_id");
        if($all_users->usrs>0){
            session(['login'=>$login]);
            session(['password'=>$password]);
            session(['usr_id'=>$all_users->id]);
            session(['usr_role_id'=>$all_users->role_id]);
            return redirect()->route('mainpage');
        }
        $errors['wrong_data'] = 'You have entered wrong data';
        return back()->withErrors($errors)->withInput();
    }

    public function register_check(Request $request){
        $users = DB::select("SELECT * FROM sdb_users");
        if(empty($users)){
            $sql = DB::insert("INSERT INTO sdb_users (email, name, login, password, phone_number) VALUES ('".
                $request['email']."','".
                $request['name']."','".
                $request['login']."','".
                $request['password']."','".
                $request['phone_number']."')");

//            $request->session()->put('login',$request['login']);
//            $request->session()->put('login',md5($request['login']));
            session('login',$request['login']);
            session('passeord',md5($request['password']));
        }else{
            foreach ($users as $user){
                $errors = array();
                if($request['email']==''){
                    $errors['emailNull']='You did not enter the email';
                }

                if($request['password']==''){
                    $errors['passwordNull']='You did not enter the password';
                }

                if($request['login']==''){
                    $errors['loginNull']='You did not enter the login';
                }

                if($request['email']==$user->email){
                    $errors['emailExists']='User with same email exists';
                }

                if(($request['login']==$user->login)){
                    $errors['loginExists']='User with same login exists';
                }

                if(count($errors)>0){
                    return back()->withErrors($errors)->withInput();
                }

                $sql = DB::insert("INSERT INTO sdb_users (email, name, login, password, phone_number) VALUES ('".
                    $request['email']."','".
                    $request['name']."','".
                    $request['login']."','".
                    $request['password']."','".
                    $request['phone_number']."')");
                session(['login' => 'value']);
                session(['password' => md5($request['login'])]);
            }
        }
        return redirect()->route('mainpage');
    }
}
