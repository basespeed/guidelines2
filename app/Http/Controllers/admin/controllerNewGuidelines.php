<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Carbon\Carbon;

class controllerNewGuidelines extends Controller
{
    public function getEditGuidelines($slug){
        $projects = DB::table('sk_project')->where('slug',$slug)->get();
        foreach ($projects as $project){
            $id_project = $project->id;
            $slug = $project->slug;
        }

        //menu
        $project_menu = DB::table('sk_project')
            ->join('dm_project', 'sk_project.name_project', '=', 'dm_project.project_id')
            ->join('sk_menu', 'sk_project.id', '=', 'sk_menu.id_project_menu')
            ->where('sk_project.slug',$slug)->get();

        $project_menu_child = DB::table('sk_menu_child')->get();

        //data guideline
        $data_image = DB::table('sk_image')->where('id_project_image',$id_project)->get();
        $data_info = DB::table('sk_info')->where('id_project_info',$id_project)->get();
        $data_color = DB::table('sk_color')->where('id_project_color',$id_project)->get();
        $data_font = DB::table('sk_font')->where('id_project_font',$id_project)->get();

        return view('backend.editGuidelines',[
            'id'=>$id_project,
            'slug'=>$slug,
            'id_project'=>$id_project,
            'data_menu'=>$project_menu,
            'data_menu_child'=>$project_menu_child,
            'data_image'=>$data_image,
            'data_info'=>$data_info,
            'data_color'=>$data_color,
            'data_font'=>$data_font,
        ]);
    }

    public function postNewGuidelines(Request $request){
        $projects_search = DB::table('sk_project')->Where('name_project', 'like', '%' . $request->get_invite_user_slt_project . '%')->count();
        if($request->checkbox_project == true){
            $check = 1;
        }else{
            $check = 0;
        }
        if($projects_search < 1){
            $project_id = DB::table('sk_project')->insertGetId(
                array(
                    'id_layout' => 1,
                    'list_invite' => $request->get_invite_user_slt_user,
                    'list_category' => $request->get_invite_user_slt_cate,
                    'name_project' => $request->get_invite_user_slt_project,
                    'name_create' => Session::get('session_guideline_username'),
                    'status' => 1,
                    'security' => $check,
                    'created_at' => \Carbon\Carbon::now('Asia/Ho_Chi_Minh'),
                )
            );

            //insert logo
            $id_logo = DB::table('sk_image')->insertGetId(
                array(
                    'id_project_image' => $project_id,
                    'layout_image' => 0,
                    'image_type' => 0,
                    'created_at' => Carbon::now('Asia/Ho_Chi_Minh'),
                )
            );

            //layout1
            $id_background_layout1 = DB::table('sk_image')->insertGetId(
                array(
                    'id_project_image' => $project_id,
                    'layout_image' => 1,
                    'image_type' => 2,
                    'created_at' => Carbon::now('Asia/Ho_Chi_Minh'),
                )
            );

            //layout3
            $id_background_layout3 = DB::table('sk_image')->insertGetId(
                array(
                    'id_project_image' => $project_id,
                    'layout_image' => 3,
                    'image_type' => 2,
                    'created_at' => Carbon::now('Asia/Ho_Chi_Minh'),
                )
            );

            //layout4
            $id_logo1_layout4 = DB::table('sk_image')->insertGetId(
                array(
                    'id_project_image' => $project_id,
                    'layout_image' => 4,
                    'image_type' => 1,
                    'image_order' => 1,
                    'created_at' => Carbon::now('Asia/Ho_Chi_Minh'),
                )
            );

            $id_vector1_layout4 = DB::table('sk_image')->insertGetId(
                array(
                    'id_project_image' => $project_id,
                    'layout_image' => 4,
                    'image_type' => 4,
                    'image_order' => 2,
                    'created_at' => Carbon::now('Asia/Ho_Chi_Minh'),
                )
            );

            $id_zip_img1 = DB::table('sk_image')->insertGetId(
                array(
                    'id_project_image' => $project_id,
                    'layout_image' => 4,
                    'image_type' => 4,
                    'image_order' => 3,
                    'created_at' => Carbon::now('Asia/Ho_Chi_Minh'),
                )
            );

            $id_logo2_layout4 = DB::table('sk_image')->insertGetId(
                array(
                    'id_project_image' => $project_id,
                    'layout_image' => 4,
                    'image_type' => 1,
                    'image_order' => 4,
                    'created_at' => Carbon::now('Asia/Ho_Chi_Minh'),
                )
            );

            $id_vector2_layout4 = DB::table('sk_image')->insertGetId(
                array(
                    'id_project_image' => $project_id,
                    'layout_image' => 4,
                    'image_type' => 4,
                    'image_order' => 5,
                    'created_at' => Carbon::now('Asia/Ho_Chi_Minh'),
                )
            );

            $id_zip_img2_layout4 = DB::table('sk_image')->insertGetId(
                array(
                    'id_project_image' => $project_id,
                    'layout_image' => 4,
                    'image_type' => 4,
                    'image_order' => 6,
                    'created_at' => Carbon::now('Asia/Ho_Chi_Minh'),
                )
            );

            //layout5
            $id_logo_layout5 = DB::table('sk_image')->insertGetId(
                array(
                    'id_project_image' => $project_id,
                    'layout_image' => 5,
                    'image_type' => 1,
                    'created_at' => Carbon::now('Asia/Ho_Chi_Minh'),
                )
            );

            $insert_info = DB::table('sk_info')->insertGetId(
                array(
                    'id_project_info' => $project_id,
                    'created_at' => Carbon::now('Asia/Ho_Chi_Minh'),
                )
            );

            //layout6
            $id_logo_layout6 = DB::table('sk_image')->insertGetId(
                array(
                    'id_project_image' => $project_id,
                    'layout_image' => 6,
                    'image_type' => 1,
                    'created_at' => Carbon::now('Asia/Ho_Chi_Minh'),
                )
            );

            //layout7
            $id_color1_layout7 = DB::table('sk_color')->insertGetId(
                array(
                    'id_project_color' => $project_id,
                    'layout_color' => 7,
                    'order_color' => 1,
                    'created_at' => Carbon::now('Asia/Ho_Chi_Minh'),
                )
            );

            $id_color2_layout7 = DB::table('sk_color')->insertGetId(
                array(
                    'id_project_color' => $project_id,
                    'layout_color' => 7,
                    'order_color' => 2,
                    'created_at' => Carbon::now('Asia/Ho_Chi_Minh'),
                )
            );


            //layout8
            $insert_color1 = DB::table('sk_color')->insertGetId(
                array(
                    'id_project_color' => $project_id,
                    'layout_color' => 8,
                    'order_color' => 1,
                    'created_at' => Carbon::now('Asia/Ho_Chi_Minh'),
                )
            );

            $insert_color2 = DB::table('sk_color')->insertGetId(
                array(
                    'id_project_color' => $project_id,
                    'layout_color' => 8,
                    'order_color' => 2,
                    'created_at' => Carbon::now('Asia/Ho_Chi_Minh'),
                )
            );

            //layout9
            $id_font1_layout9 = DB::table('sk_font')->insertGetId(
                array(
                    'id_project_font' => $project_id,
                    'layout_font' => 9,
                    'order_font' => 1,
                    'created_at' => Carbon::now('Asia/Ho_Chi_Minh'),
                )
            );

            $id_font2_layout9 = DB::table('sk_font')->insertGetId(
                array(
                    'id_project_font' => $project_id,
                    'layout_font' => 9,
                    'order_font' => 2,
                    'created_at' => Carbon::now('Asia/Ho_Chi_Minh'),
                )
            );

            $id_font3_layout9 = DB::table('sk_font')->insertGetId(
                array(
                    'id_project_font' => $project_id,
                    'layout_font' => 9,
                    'order_font' => 3,
                    'created_at' => Carbon::now('Asia/Ho_Chi_Minh'),
                )
            );

            //layout10
            $id_logo_layout10 = DB::table('sk_image')->insertGetId(
                array(
                    'id_project_image' => $project_id,
                    'layout_image' => 10,
                    'image_type' => 1,
                    'created_at' => Carbon::now('Asia/Ho_Chi_Minh'),
                )
            );

            //layout11
            $id_logo1_layout11 = DB::table('sk_image')->insertGetId(
                array(
                    'id_project_image' => $project_id,
                    'layout_image' => 11,
                    'image_type' => 1,
                    'image_order' => 1,
                    'created_at' => Carbon::now('Asia/Ho_Chi_Minh'),
                )
            );
            $id_logo2_layout11 = DB::table('sk_image')->insertGetId(
                array(
                    'id_project_image' => $project_id,
                    'layout_image' => 11,
                    'image_type' => 1,
                    'image_order' => 2,
                    'created_at' => Carbon::now('Asia/Ho_Chi_Minh'),
                )
            );

            //layout12
            $id_logo1_layout12 = DB::table('sk_image')->insertGetId(
                array(
                    'id_project_image' => $project_id,
                    'layout_image' => 12,
                    'image_type' => 1,
                    'image_order' => 1,
                    'created_at' => Carbon::now('Asia/Ho_Chi_Minh'),
                )
            );
            $id_logo2_layout12 = DB::table('sk_image')->insertGetId(
                array(
                    'id_project_image' => $project_id,
                    'layout_image' => 12,
                    'image_type' => 1,
                    'image_order' => 2,
                    'created_at' => Carbon::now('Asia/Ho_Chi_Minh'),
                )
            );

            //layout13
            $id_vector1_layout13 = DB::table('sk_image')->insertGetId(
                array(
                    'id_project_image' => $project_id,
                    'layout_image' => 13,
                    'image_type' => 1,
                    'image_order' => 1,
                    'created_at' => Carbon::now('Asia/Ho_Chi_Minh'),
                )
            );
            $id_image1_layout13 = DB::table('sk_image')->insertGetId(
                array(
                    'id_project_image' => $project_id,
                    'layout_image' => 13,
                    'image_type' => 2,
                    'image_order' => 2,
                    'created_at' => Carbon::now('Asia/Ho_Chi_Minh'),
                )
            );
            $id_vector2_layout13 = DB::table('sk_image')->insertGetId(
                array(
                    'id_project_image' => $project_id,
                    'layout_image' => 13,
                    'image_type' => 1,
                    'image_order' => 3,
                    'created_at' => Carbon::now('Asia/Ho_Chi_Minh'),
                )
            );
            $id_image2_layout13 = DB::table('sk_image')->insertGetId(
                array(
                    'id_project_image' => $project_id,
                    'layout_image' => 13,
                    'image_type' => 2,
                    'image_order' => 4,
                    'created_at' => Carbon::now('Asia/Ho_Chi_Minh'),
                )
            );
            $id_vector3_layout13 = DB::table('sk_image')->insertGetId(
                array(
                    'id_project_image' => $project_id,
                    'layout_image' => 13,
                    'image_type' => 1,
                    'image_order' => 5,
                    'created_at' => Carbon::now('Asia/Ho_Chi_Minh'),
                )
            );
            $id_image3_layout13 = DB::table('sk_image')->insertGetId(
                array(
                    'id_project_image' => $project_id,
                    'layout_image' => 13,
                    'image_type' => 2,
                    'image_order' => 6,
                    'created_at' => Carbon::now('Asia/Ho_Chi_Minh'),
                )
            );
            $id_vector4_layout13 = DB::table('sk_image')->insertGetId(
                array(
                    'id_project_image' => $project_id,
                    'layout_image' => 13,
                    'image_type' => 1,
                    'image_order' => 7,
                    'created_at' => Carbon::now('Asia/Ho_Chi_Minh'),
                )
            );
            $id_image4_layout13 = DB::table('sk_image')->insertGetId(
                array(
                    'id_project_image' => $project_id,
                    'layout_image' => 13,
                    'image_type' => 2,
                    'image_order' => 8,
                    'created_at' => Carbon::now('Asia/Ho_Chi_Minh'),
                )
            );

            //layout14
            $id_logo_layout14 = DB::table('sk_image')->insertGetId(
                array(
                    'id_project_image' => $project_id,
                    'layout_image' => 14,
                    'image_type' => 1,
                    'created_at' => Carbon::now('Asia/Ho_Chi_Minh'),
                )
            );

            //layout15
            $id_logo1_layout15 = DB::table('sk_image')->insertGetId(
                array(
                    'id_project_image' => $project_id,
                    'layout_image' => 15,
                    'image_type' => 1,
                    'image_order' => 1,
                    'created_at' => Carbon::now('Asia/Ho_Chi_Minh'),
                )
            );
            $id_logo2_layout15 = DB::table('sk_image')->insertGetId(
                array(
                    'id_project_image' => $project_id,
                    'layout_image' => 15,
                    'image_type' => 1,
                    'image_order' => 2,
                    'created_at' => Carbon::now('Asia/Ho_Chi_Minh'),
                )
            );
            $id_logo3_layout15 = DB::table('sk_image')->insertGetId(
                array(
                    'id_project_image' => $project_id,
                    'layout_image' => 15,
                    'image_type' => 1,
                    'image_order' => 3,
                    'created_at' => Carbon::now('Asia/Ho_Chi_Minh'),
                )
            );

            //layout16
            $id_logo_layout16 = DB::table('sk_image')->insertGetId(
                array(
                    'id_project_image' => $project_id,
                    'layout_image' => 16,
                    'image_type' => 1,
                    'created_at' => Carbon::now('Asia/Ho_Chi_Minh'),
                )
            );

            //layout17
            $id_logo_layout17 = DB::table('sk_image')->insertGetId(
                array(
                    'id_project_image' => $project_id,
                    'layout_image' => 17,
                    'image_type' => 1,
                    'created_at' => Carbon::now('Asia/Ho_Chi_Minh'),
                )
            );

            //layout17
            $id_zip_layout18 = DB::table('sk_image')->insertGetId(
                array(
                    'id_project_image' => $project_id,
                    'layout_image' => 18,
                    'image_type' => 4,
                    'created_at' => Carbon::now('Asia/Ho_Chi_Minh'),
                )
            );
            $id_img1_layout18 = DB::table('sk_image')->insertGetId(
                array(
                    'id_project_image' => $project_id,
                    'layout_image' => 18,
                    'image_type' => 1,
                    'image_order'=>1,
                    'created_at' => Carbon::now('Asia/Ho_Chi_Minh'),
                )
            );
            $id_img2_layout18 = DB::table('sk_image')->insertGetId(
                array(
                    'id_project_image' => $project_id,
                    'layout_image' => 18,
                    'image_type' => 1,
                    'image_order'=>2,
                    'created_at' => Carbon::now('Asia/Ho_Chi_Minh'),
                )
            );
            $id_img3_layout18 = DB::table('sk_image')->insertGetId(
                array(
                    'id_project_image' => $project_id,
                    'layout_image' => 18,
                    'image_type' => 1,
                    'image_order'=>3,
                    'created_at' => Carbon::now('Asia/Ho_Chi_Minh'),
                )
            );
            $id_img4_layout18 = DB::table('sk_image')->insertGetId(
                array(
                    'id_project_image' => $project_id,
                    'layout_image' => 18,
                    'image_type' => 1,
                    'image_order'=>4,
                    'created_at' => Carbon::now('Asia/Ho_Chi_Minh'),
                )
            );

            //convert string to slug
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

            //get slug project
            $get_slug_project = DB::table('dm_project')->where('project_id', $request->get_invite_user_slt_project)->get();

            foreach ($get_slug_project as $get_project) {
                $name_project = $get_project->project_name;
            }


            $slug_project_name = to_slug($name_project);
            $update = DB::table('sk_project')->where('name_project', $request->get_invite_user_slt_project)->update(['slug' => to_slug($name_project)]);

            //insert menu default

            $insert_default = DB::table('sk_menu')->insertGetId(array('name_menu' => 'Giới thiệu', 'id_project_menu' => $project_id, 'created_at' => \Carbon\Carbon::now('Asia/Ho_Chi_Minh'),));
            $insert_default = DB::table('sk_menu')->insertGetId(array('name_menu' => 'Thông tin quan trọng', 'id_project_menu' => $project_id, 'created_at' => Carbon::now('Asia/Ho_Chi_Minh'),));
            $insert_default_parent = DB::table('sk_menu')->insertGetId(array('name_menu' => 'Logo guidelines', 'id_project_menu' => $project_id, 'created_at' => Carbon::now('Asia/Ho_Chi_Minh'),));

            $insert_default_child = DB::table('sk_menu_child')->insertGetId(array('name_menu_child' => 'Logo', 'id_project_menu_child' => $project_id,'id_menu_menu_child'=>$insert_default_parent, 'created_at' => Carbon::now('Asia/Ho_Chi_Minh'),));
            $insert_default_child = DB::table('sk_menu_child')->insertGetId(array('name_menu_child' => 'Ý nghĩa logo', 'id_project_menu_child' => $project_id,'id_menu_menu_child'=>$insert_default_parent, 'created_at' => Carbon::now('Asia/Ho_Chi_Minh'),));
            $insert_default_child = DB::table('sk_menu_child')->insertGetId(array('name_menu_child' => 'Tỷ lệ đồ họa', 'id_project_menu_child' => $project_id,'id_menu_menu_child'=>$insert_default_parent, 'created_at' => Carbon::now('Asia/Ho_Chi_Minh'),));
            $insert_default_child = DB::table('sk_menu_child')->insertGetId(array('name_menu_child' => 'Màu sắc', 'id_project_menu_child' => $project_id,'id_menu_menu_child'=>$insert_default_parent, 'created_at' => Carbon::now('Asia/Ho_Chi_Minh'),));
            $insert_default_child = DB::table('sk_menu_child')->insertGetId(array('name_menu_child' => 'Màu hạn chế', 'id_project_menu_child' => $project_id,'id_menu_menu_child'=>$insert_default_parent, 'created_at' => Carbon::now('Asia/Ho_Chi_Minh'),));
            $insert_default_child = DB::table('sk_menu_child')->insertGetId(array('name_menu_child' => 'Dải màu hỗ trợ', 'id_project_menu_child' => $project_id,'id_menu_menu_child'=>$insert_default_parent, 'created_at' => Carbon::now('Asia/Ho_Chi_Minh'),));
            $insert_default_child = DB::table('sk_menu_child')->insertGetId(array('name_menu_child' => 'Font chữ sử dụng', 'id_project_menu_child' => $project_id,'id_menu_menu_child'=>$insert_default_parent, 'created_at' => Carbon::now('Asia/Ho_Chi_Minh'),));
            $insert_default_child = DB::table('sk_menu_child')->insertGetId(array('name_menu_child' => 'Không gian trống tối thiểu', 'id_project_menu_child' => $project_id,'id_menu_menu_child'=>$insert_default_parent, 'created_at' => Carbon::now('Asia/Ho_Chi_Minh'),));
            $insert_default_child = DB::table('sk_menu_child')->insertGetId(array('name_menu_child' => 'Các dạng thức sử dụng logo', 'id_project_menu_child' => $project_id,'id_menu_menu_child'=>$insert_default_parent, 'created_at' => Carbon::now('Asia/Ho_Chi_Minh'),));
            $insert_default_child = DB::table('sk_menu_child')->insertGetId(array('name_menu_child' => 'Kích thước logo tối thiểu', 'id_project_menu_child' => $project_id,'id_menu_menu_child'=>$insert_default_parent, 'created_at' => Carbon::now('Asia/Ho_Chi_Minh'),));
            $insert_default_child = DB::table('sk_menu_child')->insertGetId(array('name_menu_child' => 'Thi công dạng nổi, dạng chìm', 'id_project_menu_child' => $project_id,'id_menu_menu_child'=>$insert_default_parent, 'created_at' => Carbon::now('Asia/Ho_Chi_Minh'),));
            $insert_default_child = DB::table('sk_menu_child')->insertGetId(array('name_menu_child' => 'Đặt trên nền ảnh', 'id_project_menu_child' => $project_id,'id_menu_menu_child'=>$insert_default_parent, 'created_at' => Carbon::now('Asia/Ho_Chi_Minh'),));
            $insert_default_child = DB::table('sk_menu_child')->insertGetId(array('name_menu_child' => 'Trường hợp tránh sử dụng', 'id_project_menu_child' => $project_id,'id_menu_menu_child'=>$insert_default_parent, 'created_at' => Carbon::now('Asia/Ho_Chi_Minh'),));
            $insert_default_child = DB::table('sk_menu_child')->insertGetId(array('name_menu_child' => 'Phối cảnh logo', 'id_project_menu_child' => $project_id,'id_menu_menu_child'=>$insert_default_parent, 'created_at' => Carbon::now('Asia/Ho_Chi_Minh'),));

            return view('backend.newGuidelines',[
                'id'=>$project_id,
                'slug_project_name'=>$slug_project_name,
                'insert_color1'=>$insert_color1,
                'insert_color2'=>$insert_color2,
                'id_logo' => $id_logo,
                'id_background_layout1' => $id_background_layout1,
                'id_background_layout3' => $id_background_layout3,
                'id_logo1_layout4' => $id_logo1_layout4,
                'id_vector1_layout4' => $id_vector1_layout4,
                'id_zip_img1' => $id_zip_img1,
                'id_logo2_layout4' => $id_logo2_layout4,
                'id_vector2_layout4' => $id_vector2_layout4,
                'id_zip_img2_layout4' => $id_zip_img2_layout4,
                'id_logo_layout5' => $id_logo_layout5,
                'id_logo_layout6' => $id_logo_layout6,
                'id_color1_layout7' => $id_color1_layout7,
                'id_color2_layout7' => $id_color2_layout7,
                'id_font1_layout9' => $id_font1_layout9,
                'id_font2_layout9' => $id_font2_layout9,
                'id_font3_layout9' => $id_font3_layout9,
                'id_logo_layout10' => $id_logo_layout10,
                'id_logo1_layout11' => $id_logo1_layout11,
                'id_logo2_layout11' => $id_logo2_layout11,
                'id_logo1_layout12' => $id_logo1_layout12,
                'id_logo2_layout12' => $id_logo2_layout12,
                'id_vector1_layout13' => $id_vector1_layout13,
                'id_image1_layout13' => $id_image1_layout13,
                'id_vector2_layout13' => $id_vector2_layout13,
                'id_image2_layout13' => $id_image2_layout13,
                'id_vector3_layout13' => $id_vector3_layout13,
                'id_image3_layout13' => $id_image3_layout13,
                'id_vector4_layout13' => $id_vector4_layout13,
                'id_image4_layout13' => $id_image4_layout13,
                'id_logo_layout14' => $id_logo_layout14,
                'id_logo1_layout15' => $id_logo1_layout15,
                'id_logo2_layout15' => $id_logo2_layout15,
                'id_logo3_layout15' => $id_logo3_layout15,
                'id_logo_layout16' => $id_logo_layout16,
                'id_logo_layout17' => $id_logo_layout17,
                'id_zip_layout18' => $id_zip_layout18,
                'id_img1_layout18' => $id_img1_layout18,
                'id_img2_layout18' => $id_img2_layout18,
                'id_img3_layout18' => $id_img3_layout18,
                'id_img4_layout18' => $id_img4_layout18,
            ]);

        }else{
            return redirect()->intended('admin')->with([
                'errors' => 'Project đã tồn tại !',
            ]);
        }
    }
}
