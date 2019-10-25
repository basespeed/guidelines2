<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;

class controllerLogin extends Controller
{
    public function getLogin(){
        if(Session::forget('session_guideline_fix_login')){
            return redirect()->intended('admin');
        }else{
            return view('backend.login');
        }
    }

    public function postLogin(Request $request){
        function to_slug($str)
        {
            $str = trim(mb_strtolower($str));
            $str = preg_replace('/(à|á|ạ|ả|ã|â|ầ|ấ|ậ|ẩ|ẫ|ă|ằ|ắ|ặ|ẳ|ẵ)/', 'a', $str);
            $str = preg_replace('/(è|é|ẹ|ẻ|ẽ|ê|ề|ế|ệ|ể|ễ)/', 'e', $str);
            $str = preg_replace('/(ì|í|ị|ỉ|ĩ)/', 'i', $str);
            $str = preg_replace('/(ò|ó|ọ|ỏ|õ|ô|ồ|ố|ộ|ổ|ỗ|ơ|ờ|ớ|ợ|ở|ỡ)/', 'o', $str);
            $str = preg_replace('/(ù|ú|ụ|ủ|ũ|ư|ừ|ứ|ự|ử|ữ)/', 'u', $str);
            $str = preg_replace('/(ỳ|ý|ỵ|ỷ|ỹ)/', 'y', $str);
            $str = preg_replace('/(đ)/', 'd', $str);
            $str = preg_replace('/[^a-z0-9-\s]/', '', $str);
            $str = preg_replace('/([\s]+)/', '-', $str);
            return $str;
        }

        if($request->frm_check === 'clients'){
            $users = DB::table('dm_customer')->get();
            $email = $request->email;
            $password = md5($request->password);

            if(!empty($email) && !empty($password)){
                $success = true;
                foreach ($users as $user){
                    if($user->cust_email == $email && $user->cust_password == $password || $user->cust_user == $email && $user->cust_password == $password){
                        $success = true;
                        break;
                    }else{
                        $success = false;
                    }
                }
                if ($success == true) {
                    Session::put('session_guideline_fix_login_clients', 'succes_clients');
                    $users = DB::table('dm_customer')->Where('cust_email', $email)->orWhere('cust_user',$email)->get();

                    foreach ($users as $user){
                        $cust_id = $user->cust_id;
                    }


                    $check_project = DB::table('dm_project')->where('cust_id', $cust_id)->get();

                    foreach ($check_project as $project){
                        $slug_project = to_slug($project->project_name);
                    }

                    return redirect()->intended($slug_project);
                }else {
                    return redirect()->intended('login');
                }
            }else{
                $error = 'Tài khoản mật khẩu sai !';
                return view('backend.login', compact('error'));
            }
        }elseif($request->frm_check === 'admin'){
            $users = DB::table('dm_user')->get();
            $email = $request->email;
            $password = md5($request->password);

            if(!empty($email) && !empty($password)){
                $success = true;
                foreach ($users as $user){
                    if($user->email == $email && $user->password == $password || $user->username == $email && $user->password == $password){
                        $success = true;
                        break;
                    }else{
                        $success = false;
                    }
                }
                if ($success == true) {
                    Session::put('session_guideline_fix_login', 'succes');
                    $users = DB::table('dm_user')->Where('email', $email)->orWhere('username',$email)->get();
                    foreach ($users as $user){
                        Session::put('session_guideline_username', $user->username);
                    }
                    return redirect()->intended('admin');
                }
                else {
                    return redirect()->intended('login');
                }
            }else{
                $error = 'Tài khoản mật khẩu sai !';
                return view('backend.login', compact('error'));
            }
        }else{
            return view('backend.login');
        }
    }
}
