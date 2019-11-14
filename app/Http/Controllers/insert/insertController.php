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
        $id_projects = DB::table('sk_project')->select('slug')->where('id',$request->id_project)->get();

        foreach ($id_projects as $item){
            $slug_project_name = $item->slug;
        }

        $name_menu = $request->get_menu_name;
        $menu_parent = $request->get_menu_parent;
        $layout = $request->get_layout;

        if($request->save_new_guide != 'true'){
            if(empty($menu_parent)){
                $insert_menu = DB::table('sk_menu')->insertGetId(array('name_menu' => $name_menu,
                        'id_project_menu' => $request->id_project,
                        'id_layout_menu'=>$layout,
                        'created_at' => \Carbon\Carbon::now('Asia/Ho_Chi_Minh'),
                    )
                );
                $menu_check = 'image_menu';
            }else{
                $insert_menu = DB::table('sk_menu_child')->insertGetId(array(
                        'name_menu_child' => $name_menu,
                        'id_project_menu_child' => $request->id_project,
                        'id_menu_menu_child'=>$menu_parent,
                        'id_layout_menu_child'=>$layout,
                        'created_at' => Carbon::now('Asia/Ho_Chi_Minh'),
                    )
                );
                $menu_check = 'image_menu_child';
            }

            if($layout == 1){
                //layout1
                if($menu_check == 'image_menu'){
                    $id_background_layout1 = DB::table('sk_image')->insertGetId(
                        array(
                            'id_project_image' => $request->id_project,
                            'layout_image' => 1,
                            'image_type' => 2,
                            'image_menu' => $insert_menu,
                            'created_at' => Carbon::now('Asia/Ho_Chi_Minh'),
                        )
                    );
                }else{
                    $id_background_layout1 = DB::table('sk_image')->insertGetId(
                        array(
                            'id_project_image' => $request->id_project,
                            'layout_image' => 1,
                            'image_type' => 2,
                            'image_menu_child' => $insert_menu,
                            'created_at' => Carbon::now('Asia/Ho_Chi_Minh'),
                        )
                    );
                }
            }elseif($layout == 3){
                //layout3
                if($menu_check == 'image_menu'){
                    $id_background_layout3 = DB::table('sk_image')->insertGetId(
                        array(
                            'id_project_image' => $request->id_project,
                            'layout_image' => 3,
                            'image_type' => 2,
                            'image_menu' => $insert_menu,
                            'created_at' => Carbon::now('Asia/Ho_Chi_Minh'),
                        )
                    );
                }else{
                    $id_background_layout3 = DB::table('sk_image')->insertGetId(
                        array(
                            'id_project_image' => $request->id_project,
                            'layout_image' => 3,
                            'image_type' => 2,
                            'image_menu_child' => $insert_menu,
                            'created_at' => Carbon::now('Asia/Ho_Chi_Minh'),
                        )
                    );
                }
            }elseif ($layout == 4){
                //layout4
                if($menu_check == 'image_menu'){
                    $id_logo1_layout4 = DB::table('sk_image')->insertGetId(
                        array(
                            'id_project_image' => $request->id_project,
                            'layout_image' => 4,
                            'image_type' => 1,
                            'image_order' => 1,
                            'image_menu' => $insert_menu,
                            'created_at' => Carbon::now('Asia/Ho_Chi_Minh'),
                        )
                    );

                    $id_vector1_layout4 = DB::table('sk_image')->insertGetId(
                        array(
                            'id_project_image' => $request->id_project,
                            'layout_image' => 4,
                            'image_type' => 4,
                            'image_order' => 2,
                            'image_menu' => $insert_menu,
                            'created_at' => Carbon::now('Asia/Ho_Chi_Minh'),
                        )
                    );

                    $id_zip_img1 = DB::table('sk_image')->insertGetId(
                        array(
                            'id_project_image' => $request->id_project,
                            'layout_image' => 4,
                            'image_type' => 4,
                            'image_order' => 3,
                            'image_menu' => $insert_menu,
                            'created_at' => Carbon::now('Asia/Ho_Chi_Minh'),
                        )
                    );

                    $id_logo2_layout4 = DB::table('sk_image')->insertGetId(
                        array(
                            'id_project_image' => $request->id_project,
                            'layout_image' => 4,
                            'image_type' => 1,
                            'image_order' => 4,
                            'image_menu' => $insert_menu,
                            'created_at' => Carbon::now('Asia/Ho_Chi_Minh'),
                        )
                    );

                    $id_vector2_layout4 = DB::table('sk_image')->insertGetId(
                        array(
                            'id_project_image' => $request->id_project,
                            'layout_image' => 4,
                            'image_type' => 4,
                            'image_order' => 5,
                            'image_menu' => $insert_menu,
                            'created_at' => Carbon::now('Asia/Ho_Chi_Minh'),
                        )
                    );

                    $id_zip_img2_layout4 = DB::table('sk_image')->insertGetId(
                        array(
                            'id_project_image' => $request->id_project,
                            'layout_image' => 4,
                            'image_type' => 4,
                            'image_order' => 6,
                            'image_menu' => $insert_menu,
                            'created_at' => Carbon::now('Asia/Ho_Chi_Minh'),
                        )
                    );
                }else{
                    $id_logo1_layout4 = DB::table('sk_image')->insertGetId(
                        array(
                            'id_project_image' => $request->id_project,
                            'layout_image' => 4,
                            'image_type' => 1,
                            'image_order' => 1,
                            'image_menu_child' => $insert_menu,
                            'created_at' => Carbon::now('Asia/Ho_Chi_Minh'),
                        )
                    );

                    $id_vector1_layout4 = DB::table('sk_image')->insertGetId(
                        array(
                            'id_project_image' => $request->id_project,
                            'layout_image' => 4,
                            'image_type' => 4,
                            'image_order' => 2,
                            'image_menu_child' => $insert_menu,
                            'created_at' => Carbon::now('Asia/Ho_Chi_Minh'),
                        )
                    );

                    $id_zip_img1 = DB::table('sk_image')->insertGetId(
                        array(
                            'id_project_image' => $request->id_project,
                            'layout_image' => 4,
                            'image_type' => 4,
                            'image_order' => 3,
                            'image_menu_child' => $insert_menu,
                            'created_at' => Carbon::now('Asia/Ho_Chi_Minh'),
                        )
                    );

                    $id_logo2_layout4 = DB::table('sk_image')->insertGetId(
                        array(
                            'id_project_image' => $request->id_project,
                            'layout_image' => 4,
                            'image_type' => 1,
                            'image_order' => 4,
                            'image_menu_child' => $insert_menu,
                            'created_at' => Carbon::now('Asia/Ho_Chi_Minh'),
                        )
                    );

                    $id_vector2_layout4 = DB::table('sk_image')->insertGetId(
                        array(
                            'id_project_image' => $request->id_project,
                            'layout_image' => 4,
                            'image_type' => 4,
                            'image_order' => 5,
                            'image_menu_child' => $insert_menu,
                            'created_at' => Carbon::now('Asia/Ho_Chi_Minh'),
                        )
                    );

                    $id_zip_img2_layout4 = DB::table('sk_image')->insertGetId(
                        array(
                            'id_project_image' => $request->id_project,
                            'layout_image' => 4,
                            'image_type' => 4,
                            'image_order' => 6,
                            'image_menu_child' => $insert_menu,
                            'created_at' => Carbon::now('Asia/Ho_Chi_Minh'),
                        )
                    );
                }
            }elseif ($layout == 5){
                //layout5
                if($menu_check == 'image_menu'){
                    $id_logo_layout5 = DB::table('sk_image')->insertGetId(
                        array(
                            'id_project_image' => $request->id_project,
                            'layout_image' => 5,
                            'image_type' => 1,
                            'image_menu' => $insert_menu,
                            'created_at' => Carbon::now('Asia/Ho_Chi_Minh'),
                        )
                    );

                    $insert_info = DB::table('sk_info')->insertGetId(
                        array(
                            'id_project_info' => $request->id_project,
                            'layout_info' => 5,
                            'info_menu' => $insert_menu,
                            'created_at' => Carbon::now('Asia/Ho_Chi_Minh'),
                        )
                    );
                }else{
                    $id_logo_layout5 = DB::table('sk_image')->insertGetId(
                        array(
                            'id_project_image' => $request->id_project,
                            'layout_image' => 5,
                            'image_type' => 1,
                            'image_menu_child' => $insert_menu,
                            'created_at' => Carbon::now('Asia/Ho_Chi_Minh'),
                        )
                    );

                    $insert_info = DB::table('sk_info')->insertGetId(
                        array(
                            'id_project_info' => $request->id_project,
                            'layout_info' => 5,
                            'info_menu_child' => $insert_menu,
                            'created_at' => Carbon::now('Asia/Ho_Chi_Minh'),
                        )
                    );
                }
            }elseif ($layout == 6){
                //layout6
                if($menu_check == 'image_menu'){
                    $id_logo_layout6 = DB::table('sk_image')->insertGetId(
                        array(
                            'id_project_image' => $request->id_project,
                            'layout_image' => 6,
                            'image_type' => 1,
                            'image_menu' => $insert_menu,
                            'created_at' => Carbon::now('Asia/Ho_Chi_Minh'),
                        )
                    );
                }else{
                    $id_logo_layout6 = DB::table('sk_image')->insertGetId(
                        array(
                            'id_project_image' => $request->id_project,
                            'layout_image' => 6,
                            'image_type' => 1,
                            'image_menu_child' => $insert_menu,
                            'created_at' => Carbon::now('Asia/Ho_Chi_Minh'),
                        )
                    );
                }
            }elseif ($layout == 7){
                //layout7

                if($menu_check == 'image_menu'){
                    $id_color1_layout7 = DB::table('sk_color')->insertGetId(
                        array(
                            'id_project_color' => $request->id_project,
                            'layout_color' => 7,
                            'order_color' => 1,
                            'color_menu' => $insert_menu,
                            'created_at' => Carbon::now('Asia/Ho_Chi_Minh'),
                        )
                    );

                    $id_color2_layout7 = DB::table('sk_color')->insertGetId(
                        array(
                            'id_project_color' => $request->id_project,
                            'layout_color' => 7,
                            'order_color' => 2,
                            'color_menu' => $insert_menu,
                            'created_at' => Carbon::now('Asia/Ho_Chi_Minh'),
                        )
                    );
                }else{
                    $id_color1_layout7 = DB::table('sk_color')->insertGetId(
                        array(
                            'id_project_color' => $request->id_project,
                            'layout_color' => 7,
                            'order_color' => 1,
                            'color_menu_child' => $insert_menu,
                            'created_at' => Carbon::now('Asia/Ho_Chi_Minh'),
                        )
                    );

                    $id_color2_layout7 = DB::table('sk_color')->insertGetId(
                        array(
                            'id_project_color' => $request->id_project,
                            'layout_color' => 7,
                            'order_color' => 2,
                            'color_menu_child' => $insert_menu,
                            'created_at' => Carbon::now('Asia/Ho_Chi_Minh'),
                        )
                    );
                }
            }elseif ($layout == 8){
                //layout8

                if($menu_check == 'image_menu'){
                    $insert_color1 = DB::table('sk_color')->insertGetId(
                        array(
                            'id_project_color' => $request->id_project,
                            'layout_color' => 8,
                            'order_color' => 1,
                            'color_menu' => $insert_menu,
                            'created_at' => Carbon::now('Asia/Ho_Chi_Minh'),
                        )
                    );

                    $insert_color2 = DB::table('sk_color')->insertGetId(
                        array(
                            'id_project_color' => $request->id_project,
                            'layout_color' => 8,
                            'order_color' => 2,
                            'color_menu' => $insert_menu,
                            'created_at' => Carbon::now('Asia/Ho_Chi_Minh'),
                        )
                    );
                }else{
                    $insert_color1 = DB::table('sk_color')->insertGetId(
                        array(
                            'id_project_color' => $request->id_project,
                            'layout_color' => 8,
                            'order_color' => 1,
                            'color_menu_child' => $insert_menu,
                            'created_at' => Carbon::now('Asia/Ho_Chi_Minh'),
                        )
                    );

                    $insert_color2 = DB::table('sk_color')->insertGetId(
                        array(
                            'id_project_color' => $request->id_project,
                            'layout_color' => 8,
                            'order_color' => 2,
                            'color_menu_child' => $insert_menu,
                            'created_at' => Carbon::now('Asia/Ho_Chi_Minh'),
                        )
                    );
                }
            }elseif($layout == 9){
                //layout9
                if($menu_check == 'image_menu'){
                    $id_font1_layout9 = DB::table('sk_font')->insertGetId(
                        array(
                            'id_project_font' => $request->id_project,
                            'layout_font' => 9,
                            'order_font' => 1,
                            'font_menu' => $insert_menu,
                            'created_at' => Carbon::now('Asia/Ho_Chi_Minh'),
                        )
                    );

                    $id_font2_layout9 = DB::table('sk_font')->insertGetId(
                        array(
                            'id_project_font' => $request->id_project,
                            'layout_font' => 9,
                            'order_font' => 2,
                            'font_menu' => $insert_menu,
                            'created_at' => Carbon::now('Asia/Ho_Chi_Minh'),
                        )
                    );

                    $id_font3_layout9 = DB::table('sk_font')->insertGetId(
                        array(
                            'id_project_font' => $request->id_project,
                            'layout_font' => 9,
                            'order_font' => 3,
                            'font_menu' => $insert_menu,
                            'created_at' => Carbon::now('Asia/Ho_Chi_Minh'),
                        )
                    );
                }else{
                    $id_font1_layout9 = DB::table('sk_font')->insertGetId(
                        array(
                            'id_project_font' => $request->id_project,
                            'layout_font' => 9,
                            'order_font' => 1,
                            'font_menu_child' => $insert_menu,
                            'created_at' => Carbon::now('Asia/Ho_Chi_Minh'),
                        )
                    );

                    $id_font2_layout9 = DB::table('sk_font')->insertGetId(
                        array(
                            'id_project_font' => $request->id_project,
                            'layout_font' => 9,
                            'order_font' => 2,
                            'font_menu_child' => $insert_menu,
                            'created_at' => Carbon::now('Asia/Ho_Chi_Minh'),
                        )
                    );

                    $id_font3_layout9 = DB::table('sk_font')->insertGetId(
                        array(
                            'id_project_font' => $request->id_project,
                            'layout_font' => 9,
                            'order_font' => 3,
                            'font_menu_child' => $insert_menu,
                            'created_at' => Carbon::now('Asia/Ho_Chi_Minh'),
                        )
                    );
                }
            }elseif($layout == 10){
                //layout10
                if($menu_check == 'image_menu'){
                    $id_logo_layout10 = DB::table('sk_image')->insertGetId(
                        array(
                            'id_project_image' => $request->id_project,
                            'layout_image' => 10,
                            'image_type' => 1,
                            'image_menu' => $insert_menu,
                            'created_at' => Carbon::now('Asia/Ho_Chi_Minh'),
                        )
                    );
                }else{
                    $id_logo_layout10 = DB::table('sk_image')->insertGetId(
                        array(
                            'id_project_image' => $request->id_project,
                            'layout_image' => 10,
                            'image_type' => 1,
                            'image_menu_child' => $insert_menu,
                            'created_at' => Carbon::now('Asia/Ho_Chi_Minh'),
                        )
                    );
                }
            }elseif($layout == 11){
                //layout11
                if($menu_check == 'image_menu'){
                    $id_logo1_layout11 = DB::table('sk_image')->insertGetId(
                        array(
                            'id_project_image' => $request->id_project,
                            'layout_image' => 11,
                            'image_type' => 1,
                            'image_order' => 1,
                            'image_menu' => $insert_menu,
                            'created_at' => Carbon::now('Asia/Ho_Chi_Minh'),
                        )
                    );
                    $id_logo2_layout11 = DB::table('sk_image')->insertGetId(
                        array(
                            'id_project_image' => $request->id_project,
                            'layout_image' => 11,
                            'image_type' => 1,
                            'image_order' => 2,
                            'image_menu' => $insert_menu,
                            'created_at' => Carbon::now('Asia/Ho_Chi_Minh'),
                        )
                    );
                }else{
                    $id_logo1_layout11 = DB::table('sk_image')->insertGetId(
                        array(
                            'id_project_image' => $request->id_project,
                            'layout_image' => 11,
                            'image_type' => 1,
                            'image_order' => 1,
                            'image_menu_child' => $insert_menu,
                            'created_at' => Carbon::now('Asia/Ho_Chi_Minh'),
                        )
                    );
                    $id_logo2_layout11 = DB::table('sk_image')->insertGetId(
                        array(
                            'id_project_image' => $request->id_project,
                            'layout_image' => 11,
                            'image_type' => 1,
                            'image_order' => 2,
                            'image_menu_child' => $insert_menu,
                            'created_at' => Carbon::now('Asia/Ho_Chi_Minh'),
                        )
                    );
                }
            }elseif($layout == 12){
                //layout12

                if($menu_check == 'image_menu'){
                    $id_logo1_layout12 = DB::table('sk_image')->insertGetId(
                        array(
                            'id_project_image' => $request->id_project,
                            'layout_image' => 12,
                            'image_type' => 1,
                            'image_order' => 1,
                            'image_menu' => $insert_menu,
                            'created_at' => Carbon::now('Asia/Ho_Chi_Minh'),
                        )
                    );
                    $id_logo2_layout12 = DB::table('sk_image')->insertGetId(
                        array(
                            'id_project_image' => $request->id_project,
                            'layout_image' => 12,
                            'image_type' => 1,
                            'image_order' => 2,
                            'image_menu' => $insert_menu,
                            'created_at' => Carbon::now('Asia/Ho_Chi_Minh'),
                        )
                    );
                }else{
                    $id_logo1_layout12 = DB::table('sk_image')->insertGetId(
                        array(
                            'id_project_image' => $request->id_project,
                            'layout_image' => 12,
                            'image_type' => 1,
                            'image_order' => 1,
                            'image_menu_child' => $insert_menu,
                            'created_at' => Carbon::now('Asia/Ho_Chi_Minh'),
                        )
                    );
                    $id_logo2_layout12 = DB::table('sk_image')->insertGetId(
                        array(
                            'id_project_image' => $request->id_project,
                            'layout_image' => 12,
                            'image_type' => 1,
                            'image_order' => 2,
                            'image_menu_child' => $insert_menu,
                            'created_at' => Carbon::now('Asia/Ho_Chi_Minh'),
                        )
                    );
                }
            }elseif ($layout == 13){
                //layout13

                if($menu_check == 'image_menu'){
                    $id_vector1_layout13 = DB::table('sk_image')->insertGetId(
                        array(
                            'id_project_image' => $request->id_project,
                            'layout_image' => 13,
                            'image_type' => 1,
                            'image_order' => 1,
                            'image_menu' => $insert_menu,
                            'created_at' => Carbon::now('Asia/Ho_Chi_Minh'),
                        )
                    );
                    $id_image1_layout13 = DB::table('sk_image')->insertGetId(
                        array(
                            'id_project_image' => $request->id_project,
                            'layout_image' => 13,
                            'image_type' => 2,
                            'image_order' => 2,
                            'image_menu' => $insert_menu,
                            'created_at' => Carbon::now('Asia/Ho_Chi_Minh'),
                        )
                    );
                    $id_vector2_layout13 = DB::table('sk_image')->insertGetId(
                        array(
                            'id_project_image' => $request->id_project,
                            'layout_image' => 13,
                            'image_type' => 1,
                            'image_order' => 3,
                            'image_menu' => $insert_menu,
                            'created_at' => Carbon::now('Asia/Ho_Chi_Minh'),
                        )
                    );
                    $id_image2_layout13 = DB::table('sk_image')->insertGetId(
                        array(
                            'id_project_image' => $request->id_project,
                            'layout_image' => 13,
                            'image_type' => 2,
                            'image_order' => 4,
                            'image_menu' => $insert_menu,
                            'created_at' => Carbon::now('Asia/Ho_Chi_Minh'),
                        )
                    );
                    $id_vector3_layout13 = DB::table('sk_image')->insertGetId(
                        array(
                            'id_project_image' => $request->id_project,
                            'layout_image' => 13,
                            'image_type' => 1,
                            'image_order' => 5,
                            'image_menu' => $insert_menu,
                            'created_at' => Carbon::now('Asia/Ho_Chi_Minh'),
                        )
                    );
                    $id_image3_layout13 = DB::table('sk_image')->insertGetId(
                        array(
                            'id_project_image' => $request->id_project,
                            'layout_image' => 13,
                            'image_type' => 2,
                            'image_order' => 6,
                            'image_menu' => $insert_menu,
                            'created_at' => Carbon::now('Asia/Ho_Chi_Minh'),
                        )
                    );
                    $id_vector4_layout13 = DB::table('sk_image')->insertGetId(
                        array(
                            'id_project_image' => $request->id_project,
                            'layout_image' => 13,
                            'image_type' => 1,
                            'image_order' => 7,
                            'image_menu' => $insert_menu,
                            'created_at' => Carbon::now('Asia/Ho_Chi_Minh'),
                        )
                    );
                    $id_image4_layout13 = DB::table('sk_image')->insertGetId(
                        array(
                            'id_project_image' => $request->id_project,
                            'layout_image' => 13,
                            'image_type' => 2,
                            'image_order' => 8,
                            'image_menu' => $insert_menu,
                            'created_at' => Carbon::now('Asia/Ho_Chi_Minh'),
                        )
                    );
                }else{
                    $id_vector1_layout13 = DB::table('sk_image')->insertGetId(
                        array(
                            'id_project_image' => $request->id_project,
                            'layout_image' => 13,
                            'image_type' => 1,
                            'image_order' => 1,
                            'image_menu_child' => $insert_menu,
                            'created_at' => Carbon::now('Asia/Ho_Chi_Minh'),
                        )
                    );
                    $id_image1_layout13 = DB::table('sk_image')->insertGetId(
                        array(
                            'id_project_image' => $request->id_project,
                            'layout_image' => 13,
                            'image_type' => 2,
                            'image_order' => 2,
                            'image_menu_child' => $insert_menu,
                            'created_at' => Carbon::now('Asia/Ho_Chi_Minh'),
                        )
                    );
                    $id_vector2_layout13 = DB::table('sk_image')->insertGetId(
                        array(
                            'id_project_image' => $request->id_project,
                            'layout_image' => 13,
                            'image_type' => 1,
                            'image_order' => 3,
                            'image_menu_child' => $insert_menu,
                            'created_at' => Carbon::now('Asia/Ho_Chi_Minh'),
                        )
                    );
                    $id_image2_layout13 = DB::table('sk_image')->insertGetId(
                        array(
                            'id_project_image' => $request->id_project,
                            'layout_image' => 13,
                            'image_type' => 2,
                            'image_order' => 4,
                            'image_menu_child' => $insert_menu,
                            'created_at' => Carbon::now('Asia/Ho_Chi_Minh'),
                        )
                    );
                    $id_vector3_layout13 = DB::table('sk_image')->insertGetId(
                        array(
                            'id_project_image' => $request->id_project,
                            'layout_image' => 13,
                            'image_type' => 1,
                            'image_order' => 5,
                            'image_menu_child' => $insert_menu,
                            'created_at' => Carbon::now('Asia/Ho_Chi_Minh'),
                        )
                    );
                    $id_image3_layout13 = DB::table('sk_image')->insertGetId(
                        array(
                            'id_project_image' => $request->id_project,
                            'layout_image' => 13,
                            'image_type' => 2,
                            'image_order' => 6,
                            'image_menu_child' => $insert_menu,
                            'created_at' => Carbon::now('Asia/Ho_Chi_Minh'),
                        )
                    );
                    $id_vector4_layout13 = DB::table('sk_image')->insertGetId(
                        array(
                            'id_project_image' => $request->id_project,
                            'layout_image' => 13,
                            'image_type' => 1,
                            'image_order' => 7,
                            'image_menu_child' => $insert_menu,
                            'created_at' => Carbon::now('Asia/Ho_Chi_Minh'),
                        )
                    );
                    $id_image4_layout13 = DB::table('sk_image')->insertGetId(
                        array(
                            'id_project_image' => $request->id_project,
                            'layout_image' => 13,
                            'image_type' => 2,
                            'image_order' => 8,
                            'image_menu_child' => $insert_menu,
                            'created_at' => Carbon::now('Asia/Ho_Chi_Minh'),
                        )
                    );
                }
            }elseif ($layout == 14){
                //layout14

                if($menu_check == 'image_menu'){
                    $id_logo_layout14 = DB::table('sk_image')->insertGetId(
                        array(
                            'id_project_image' => $request->id_project,
                            'layout_image' => 14,
                            'image_type' => 1,
                            'image_menu' => $insert_menu,
                            'created_at' => Carbon::now('Asia/Ho_Chi_Minh'),
                        )
                    );
                }else{
                    $id_logo_layout14 = DB::table('sk_image')->insertGetId(
                        array(
                            'id_project_image' => $request->id_project,
                            'layout_image' => 14,
                            'image_type' => 1,
                            'image_menu_child' => $insert_menu,
                            'created_at' => Carbon::now('Asia/Ho_Chi_Minh'),
                        )
                    );
                }
            }elseif ($layout == 15){
                //layout15

                if($menu_check == 'image_menu'){
                    $id_logo1_layout15 = DB::table('sk_image')->insertGetId(
                        array(
                            'id_project_image' => $request->id_project,
                            'layout_image' => 15,
                            'image_type' => 1,
                            'image_order' => 1,
                            'image_menu' => $insert_menu,
                            'created_at' => Carbon::now('Asia/Ho_Chi_Minh'),
                        )
                    );
                    $id_logo2_layout15 = DB::table('sk_image')->insertGetId(
                        array(
                            'id_project_image' => $request->id_project,
                            'layout_image' => 15,
                            'image_type' => 1,
                            'image_order' => 2,
                            'image_menu' => $insert_menu,
                            'created_at' => Carbon::now('Asia/Ho_Chi_Minh'),
                        )
                    );
                    $id_logo3_layout15 = DB::table('sk_image')->insertGetId(
                        array(
                            'id_project_image' => $request->id_project,
                            'layout_image' => 15,
                            'image_type' => 1,
                            'image_order' => 3,
                            'image_menu' => $insert_menu,
                            'created_at' => Carbon::now('Asia/Ho_Chi_Minh'),
                        )
                    );
                }else{
                    $id_logo1_layout15 = DB::table('sk_image')->insertGetId(
                        array(
                            'id_project_image' => $request->id_project,
                            'layout_image' => 15,
                            'image_type' => 1,
                            'image_order' => 1,
                            'image_menu_child' => $insert_menu,
                            'created_at' => Carbon::now('Asia/Ho_Chi_Minh'),
                        )
                    );
                    $id_logo2_layout15 = DB::table('sk_image')->insertGetId(
                        array(
                            'id_project_image' => $request->id_project,
                            'layout_image' => 15,
                            'image_type' => 1,
                            'image_order' => 2,
                            'image_menu_child' => $insert_menu,
                            'created_at' => Carbon::now('Asia/Ho_Chi_Minh'),
                        )
                    );
                    $id_logo3_layout15 = DB::table('sk_image')->insertGetId(
                        array(
                            'id_project_image' => $request->id_project,
                            'layout_image' => 15,
                            'image_type' => 1,
                            'image_order' => 3,
                            'image_menu_child' => $insert_menu,
                            'created_at' => Carbon::now('Asia/Ho_Chi_Minh'),
                        )
                    );
                }
            }elseif ($layout == 16){
                //layout16

                if($menu_check == 'image_menu'){
                    $id_logo_layout16 = DB::table('sk_image')->insertGetId(
                        array(
                            'id_project_image' => $request->id_project,
                            'layout_image' => 16,
                            'image_type' => 1,
                            'image_menu' => $insert_menu,
                            'created_at' => Carbon::now('Asia/Ho_Chi_Minh'),
                        )
                    );
                }else{
                    $id_logo_layout16 = DB::table('sk_image')->insertGetId(
                        array(
                            'id_project_image' => $request->id_project,
                            'layout_image' => 16,
                            'image_type' => 1,
                            'image_menu_child' => $insert_menu,
                            'created_at' => Carbon::now('Asia/Ho_Chi_Minh'),
                        )
                    );
                }
            }elseif ($layout == 17){
                //layout17

                if($menu_check == 'image_menu'){
                    $id_logo_layout17 = DB::table('sk_image')->insertGetId(
                        array(
                            'id_project_image' => $request->id_project,
                            'layout_image' => 17,
                            'image_type' => 1,
                            'image_menu' => $insert_menu,
                            'created_at' => Carbon::now('Asia/Ho_Chi_Minh'),
                        )
                    );
                }else{
                    $id_logo_layout17 = DB::table('sk_image')->insertGetId(
                        array(
                            'id_project_image' => $request->id_project,
                            'layout_image' => 17,
                            'image_type' => 1,
                            'image_menu_child' => $insert_menu,
                            'created_at' => Carbon::now('Asia/Ho_Chi_Minh'),
                        )
                    );
                }

            }elseif ($layout == 18){
                //layout18

                if($menu_check == 'image_menu'){
                    $id_zip_layout18 = DB::table('sk_image')->insertGetId(
                        array(
                            'id_project_image' => $request->id_project,
                            'layout_image' => 18,
                            'image_type' => 4,
                            'image_menu' => $insert_menu,
                            'created_at' => Carbon::now('Asia/Ho_Chi_Minh'),
                        )
                    );
                    $id_img1_layout18 = DB::table('sk_image')->insertGetId(
                        array(
                            'id_project_image' => $request->id_project,
                            'layout_image' => 18,
                            'image_type' => 1,
                            'image_order'=>1,
                            'image_menu' => $insert_menu,
                            'created_at' => Carbon::now('Asia/Ho_Chi_Minh'),
                        )
                    );
                    $id_img2_layout18 = DB::table('sk_image')->insertGetId(
                        array(
                            'id_project_image' => $request->id_project,
                            'layout_image' => 18,
                            'image_type' => 1,
                            'image_order'=>2,
                            'image_menu' => $insert_menu,
                            'created_at' => Carbon::now('Asia/Ho_Chi_Minh'),
                        )
                    );
                    $id_img3_layout18 = DB::table('sk_image')->insertGetId(
                        array(
                            'id_project_image' => $request->id_project,
                            'layout_image' => 18,
                            'image_type' => 1,
                            'image_order'=>3,
                            'image_menu' => $insert_menu,
                            'created_at' => Carbon::now('Asia/Ho_Chi_Minh'),
                        )
                    );
                    $id_img4_layout18 = DB::table('sk_image')->insertGetId(
                        array(
                            'id_project_image' => $request->id_project,
                            'layout_image' => 18,
                            'image_type' => 1,
                            'image_order'=>4,
                            'image_menu' => $insert_menu,
                            'created_at' => Carbon::now('Asia/Ho_Chi_Minh'),
                        )
                    );
                }else{
                    $id_zip_layout18 = DB::table('sk_image')->insertGetId(
                        array(
                            'id_project_image' => $request->id_project,
                            'layout_image' => 18,
                            'image_type' => 4,
                            'image_menu_child' => $insert_menu,
                            'created_at' => Carbon::now('Asia/Ho_Chi_Minh'),
                        )
                    );
                    $id_img1_layout18 = DB::table('sk_image')->insertGetId(
                        array(
                            'id_project_image' => $request->id_project,
                            'layout_image' => 18,
                            'image_type' => 1,
                            'image_order'=>1,
                            'image_menu_child' => $insert_menu,
                            'created_at' => Carbon::now('Asia/Ho_Chi_Minh'),
                        )
                    );
                    $id_img2_layout18 = DB::table('sk_image')->insertGetId(
                        array(
                            'id_project_image' => $request->id_project,
                            'layout_image' => 18,
                            'image_type' => 1,
                            'image_order'=>2,
                            'image_menu_child' => $insert_menu,
                            'created_at' => Carbon::now('Asia/Ho_Chi_Minh'),
                        )
                    );
                    $id_img3_layout18 = DB::table('sk_image')->insertGetId(
                        array(
                            'id_project_image' => $request->id_project,
                            'layout_image' => 18,
                            'image_type' => 1,
                            'image_order'=>3,
                            'image_menu_child' => $insert_menu,
                            'created_at' => Carbon::now('Asia/Ho_Chi_Minh'),
                        )
                    );
                    $id_img4_layout18 = DB::table('sk_image')->insertGetId(
                        array(
                            'id_project_image' => $request->id_project,
                            'layout_image' => 18,
                            'image_type' => 1,
                            'image_order'=>4,
                            'image_menu_child' => $insert_menu,
                            'created_at' => Carbon::now('Asia/Ho_Chi_Minh'),
                        )
                    );
                }
            }
        }

        return redirect()->intended('/edit/guidelines/'.$slug_project_name);
    }
}
