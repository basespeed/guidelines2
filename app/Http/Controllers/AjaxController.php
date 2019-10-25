<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AjaxController extends Controller
{
    public function postInvite(Request $request){
        $id = $request->id;

        $projects = DB::table('sk_project')->where('id', $id)->get();

        foreach ($projects as $project){
            $str = $project->list_invite;
        }

        $array = explode(",", $str);

        $users = DB::table('dm_user')->whereIn('userid', $array)->get();

        $users_search = DB::table('dm_user')->whereNotIn('userid', $array)->skip(0)->take(5)->get();

        return response()->json(['success'=>$users,'users_search'=>$users_search,'list'=>array_reverse($array)]);
    }

    public function postUpdateInvite(Request $request){
        $arr = $request->arr;
        $arr = implode(",",$arr);
        $update = DB::table('sk_project')->where('id', $request->id)->update(['list_invite' => $arr]);

        return response()->json(['success'=>'true']);
    }

    public function postSearchProject(Request $request){
        $search = DB::table('dm_project')->join('sk_project', 'dm_project.project_id', '=', 'sk_project.name_project')->where('project_name', 'like', '%' . $request->keyword . '%')->get();

        return response()->json(['success'=>$search]);
    }
}
