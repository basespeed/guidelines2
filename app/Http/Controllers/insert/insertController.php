<?php

namespace App\Http\Controllers\insert;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Session;

class insertController extends Controller
{
    public function postInsertGuidelinesDetails(Request $request){
        //convert string to slug
        $slug_project_name = $request->slug_project;

        return redirect()->intended($slug_project_name);
    }
}
