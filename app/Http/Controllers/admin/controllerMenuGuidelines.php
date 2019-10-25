<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

class controllerMenuGuidelines extends Controller
{
    public function postMenuGuidelines(Request $request){
        /*$menu_id = DB::table('sk_menu')->insertGetId(
            array(
                'id_project_menu' => $request->get_id,
                'id_detail_menu' => '123',
                'id_layout_menu' => $request->get_layout,
                'name_menu' => $request->get_menu_name,
                'slug_menu' => 'abc',
                'created_at' => Carbon::now('Asia/Ho_Chi_Minh'),
            )
        );*/

        $insert_default_child = DB::table('sk_menu_child')->insertGetId(array('name_menu_child' => $request->get_menu_name, 'id_detail_menu_child' => $request->get_id_details,'id_menu_menu_child'=>$request->get_id_menu_parent, 'created_at' => Carbon::now('Asia/Ho_Chi_Minh'),));

        return view('backend.createMenuGuidelines',['menu_id'=>1]);
    }
}
