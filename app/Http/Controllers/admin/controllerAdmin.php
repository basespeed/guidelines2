<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;

class controllerAdmin extends Controller
{
    public function getAdmin(){
        if(Session::get('session_guideline_fix_login')){
            $projects = DB::table('dm_project')->orderBy('project_name', 'desc')->get();
            $users = DB::table('dm_user')->orderBy('username', 'desc')->get();
            $category = DB::table('dm_category')->orderBy('category_name', 'desc')->get();

            $projects_sk = DB::table('sk_project')->orderBy('created_at', 'desc')->skip(0)->take(10)->get();
            $projects_sk_count = DB::table('sk_project')->orderBy('created_at', 'desc')->skip(0)->take(10)->count();


            return view('backend.admin',['projects_sk'=>$projects_sk,'projects'=>$projects,'users'=>$users,'category'=>$category,'projects_sk_count'=>$projects_sk_count]);
        }else{
            return redirect()->intended('login');
        }
    }

    public function postAjaxSearchProject(Request $request){
        if(isset($request->length)){
            $projects_sk = DB::table('sk_project')
                ->join('dm_project', 'sk_project.name_project', '=', 'dm_project.project_id')
                ->orderBy('created_at', 'desc')->skip($request->length)->take(10)->get();

            return response()->json(['success'=>$projects_sk]);
        }else{
            $projects = DB::table($request->db)->Where($request->col, 'like', '%' . $request->keyword . '%')->get();
            return response()->json(['success'=>$projects]);
        }
    }
}
