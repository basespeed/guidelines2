<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class controllerLogout extends Controller
{
    public function getLogout(){
        Session::forget('session_guideline_fix_login');
        Session::forget('session_guideline_username');

        return redirect()->intended('login');
    }
}
