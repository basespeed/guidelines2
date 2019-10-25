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

        return view('backend.editGuidelines',['id'=>$slug]);
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

            return view('backend.newGuidelines',['id'=>$project_id,'slug_project_name'=>$slug_project_name]);

        }else{
            return redirect()->intended('admin')->with([
                'errors' => 'Project đã tồn tại !',
            ]);
        }
    }
}
