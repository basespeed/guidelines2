<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class controllerEditGuidelines extends Controller
{
    public function getEditGuidelines($id){
        return view('backend.editGuidelines',['id'=>$id]);
    }
}
