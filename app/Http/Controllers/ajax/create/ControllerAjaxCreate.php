<?php

namespace App\Http\Controllers\ajax\create;

use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class ControllerAjaxCreate extends Controller
{
    public function getLogo(Request $request){
        //insert logo sidebar project
        $id = $request->id;
        $slug = $request->slug;
        $file = $request->file;

        //name file
        $file_name = uniqid() . '_' . $file->getClientOriginalName();
        //mime file
        $mime_file = $file->getClientOriginalExtension();
        //folder save image
        $folder_image = '/images/' . $slug.'/'.$file_name;
        //url file
        $url_file = $file->getRealPath();
        //size file
        $size_file = $file->getSize();
        //type file
        $type_file = $file->getMimeType();

        //create folder save images
        $path = public_path('/images/' . $slug);

        //check isset folder
        if (!File::isDirectory($path)) {
            File::makeDirectory($path, 0777, true, true);
        }

        //move images to folder
        $file->move($path, $file_name);

        //query insert
        /*
         * Type image
         * 0 - default
         * 1 - logo
         * 2 - background
         * 3 - vector
         * */
        $insert = DB::table('sk_image')->insert(
            array(
                'id_project_image' => $id,
                'layout_image' => 0,
                'image_name' => $file_name,
                'image_mime' => $mime_file,
                'image_url' => $folder_image,
                'image_type' => 0,
                'created_at' => Carbon::now('Asia/Ho_Chi_Minh'),
            )
        );

        return response()->json(['success'=>$id]);
    }
}
