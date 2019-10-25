<?php

namespace App\Http\Controllers\clients;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class controllerGuideline extends Controller
{
    public function getGuideline($slug){
        if(Session::get('session_guideline_fix_login_clients')){
            //id project
            $id_project = DB::table('sk_project')->select('id')->where('slug',$slug)->get();
            foreach ($id_project as $project){
                $id = $project->id;
            }

            if(isset($id)){
                //menu
                $project_menu = DB::table('sk_project')
                    ->join('dm_project', 'sk_project.name_project', '=', 'dm_project.project_id')
                    ->join('sk_menu', 'sk_project.id', '=', 'sk_menu.id_project_menu')
                    ->where('sk_project.slug',$slug)->get();

                $project_menu_child = DB::table('sk_menu_child')->get();

                //data guideline
                $data_image = DB::table('sk_image')->where('id_project_image',$id)->get();
                $data_info = DB::table('sk_info')->where('id_project_info',$id)->get();
                $data_color = DB::table('sk_color')->where('id_project_color',$id)->get();
                $data_font = DB::table('sk_font')->where('id_project_font',$id)->get();

                return view('frontend.gs',[
                    'slug'=>$slug,
                    'data_menu'=>$project_menu,
                    'data_menu_child'=>$project_menu_child,
                    'data_image'=>$data_image,
                    'data_info'=>$data_info,
                    'data_color'=>$data_color,
                    'data_font'=>$data_font,
                ]);
            }else{
                return view('errors.404');
            }

        }else{
            return redirect()->intended('login');
        }
    }
}
