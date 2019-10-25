<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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
}
