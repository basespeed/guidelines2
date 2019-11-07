<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class controllerBase extends Controller
{
    public function getBase(){
        if(Session::get('session_guideline_fix_login')){
            return redirect()->intended('admin');
        }else{
            return redirect()->intended('login');
        }
    }

    public function getclear(){
        DB::table('sk_project')->delete();
        DB::table('sk_menu_child')->delete();
        DB::table('sk_menu')->delete();
        DB::table('sk_invite')->delete();
        DB::table('sk_info')->delete();
        DB::table('sk_image')->delete();
        DB::table('sk_font')->delete();
        DB::table('sk_color')->delete();
        return 'clear';
    }
}
