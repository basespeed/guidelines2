<?php

namespace App\Http\Controllers\ajax\del;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class ControllerAjaxDel extends Controller
{
    function delMenuLayout(Request $request){
        if($request->check_menu == 'child'){
            DB::table('sk_menu_child')->where('id_menu_child',$request->id_menu)->delete();
        }else{
            DB::table('sk_menu')->where('id_menu',$request->id_menu)->delete();
            DB::table('sk_menu_child')->where('id_menu_menu_child',$request->id_menu)->delete();
        }

        DB::table('sk_info')->where('info_menu',$request->id_menu)->orWhere('info_menu_child',$request->id_menu)->delete();
        DB::table('sk_image')->where('image_menu',$request->id_menu)->orWhere('image_menu_child',$request->id_menu)->delete();
        DB::table('sk_font')->where('font_menu',$request->id_menu)->orWhere('font_menu_child',$request->id_menu)->delete();
        DB::table('sk_color')->where('color_menu',$request->id_menu)->orWhere('color_menu_child',$request->id_menu)->delete();

        return response()->json(['success'=>$request->id_menu]);
    }

    public function dellogo(Request $request){
        $id = $request->id;
        $current = $request->baseUrl;
        $current = $current.'/public';

        $images = DB::table('sk_image')->select('image_url')->where('id_image',$id)->get();

        foreach ($images as $image){
            $path = $image->image_url;
        }

        $path = str_replace($current, '', $path);

        if(File::delete('public/'.$path)){
            $current = "has file";
        }else{
            $current = 'not file';
        }
        return response()->json(['success'=>$current]);
        //DB::table('sk_menu')->where('id_menu',$request->id_menu)->delete();
    }
}
