<?php

namespace App\Http\Controllers\ajax\create;

use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class ControllerAjaxCreate extends Controller
{
    //insert new logo
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
        $update = DB::table('sk_image')->where('id_image', $request->id_logo)->update([
            'layout_image' => 0,
            'image_name' => $file_name,
            'image_mime' => $mime_file,
            'image_url' => $folder_image,
            'image_type' => 0,
            'updated_at' => \Carbon\Carbon::now('Asia/Ho_Chi_Minh'),
        ]);


        return response()->json(['success'=>$id]);
    }


    //insert new layout1
    public function getLayout1(Request $request){
        //insert logo sidebar project
        $id = $request->id;
        $slug = $request->slug;
        $file = $request->file;
        $id_back = $request->id_back;

        /*layout1*/
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
         * 4 - zip
         * */
        $update = DB::table('sk_image')->where('id_image', $id_back)->update([
            'image_name' => $file_name,
            'image_mime' => $mime_file,
            'image_url' => $folder_image,
            'image_menu' => $request->id_menu,
            'updated_at' => \Carbon\Carbon::now('Asia/Ho_Chi_Minh'),
        ]);

        return response()->json(['success'=>$id]);
    }

    //insert new layout3
    public function getLayout3(Request $request){
        //insert logo sidebar project
        $id = $request->id;
        $slug = $request->slug;
        $file = $request->file;

        /*layout3*/
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
         * 1 - images
         * 2 - background
         * 3 - vector
         * 4 - zip
         * */
        $update = DB::table('sk_image')->where('id_image', $request->id_back)->update([
            'image_name' => $file_name,
            'image_mime' => $mime_file,
            'image_url' => $folder_image,
            'image_menu' => $request->id_menu,
            'updated_at' => \Carbon\Carbon::now('Asia/Ho_Chi_Minh'),
        ]);

        return response()->json(['success'=>$id]);
    }

    //insert new layout4
    public function getLayout4(Request $request){
        //insert logo sidebar project
        $id = $request->id;
        $slug = $request->slug;

        /*layout4*/
        //img1
        if(isset($request->section4_upload_background1)){
            if ($request->hasFile('section4_upload_background1')) {
                $file = $request->section4_upload_background1;
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
                 * 1 - image
                 * 2 - background
                 * 3 - vector
                 * 4 - zip
                 * */
                 $update = DB::table('sk_image')->where('id_image', $request->id_logo)->update([
                     'image_name' => $file_name,
                     'image_mime' => $mime_file,
                     'image_url' => $folder_image,
                     'image_menu_child' => $request->id_menu,
                     'updated_at' => \Carbon\Carbon::now('Asia/Ho_Chi_Minh'),
                 ]);
            }
        }

        if(isset($request->section4_file_vector1)){
            $file = $request->section4_file_vector1;
            //name file
            $file_name = uniqid() . '_' . $file->getClientOriginalName();
            //mime file
            $mime_file = $file->getClientOriginalExtension();
            //folder save image
            $folder_image = '/zip/' . $slug.'/'.$file_name;
            //url file
            $url_file = $file->getRealPath();
            //size file
            $size_file = $file->getSize();
            //type file
            $type_file = $file->getMimeType();

            //create folder save images
            $path = public_path('/zip/' . $slug);

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
             * 1 - image
             * 2 - background
             * 3 - vector
             * 4 - zip
             * */
            $update = DB::table('sk_image')->where('id_image', $request->id_vector1)->update([
                'image_name' => $file_name,
                'image_mime' => $mime_file,
                'image_url' => $folder_image,
                'image_menu_child' => $request->id_menu,
                'updated_at' => \Carbon\Carbon::now('Asia/Ho_Chi_Minh'),
            ]);
        }


        //zip image1
        if(isset($request->section4_file_img1)){
            $file = $request->section4_file_img1;
            //name file
            $file_name = uniqid() . '_' . $file->getClientOriginalName();
            //mime file
            $mime_file = $file->getClientOriginalExtension();
            //folder save image
            $folder_image = '/zip/' . $slug.'/'.$file_name;
            //url file
            $url_file = $file->getRealPath();
            //size file
            $size_file = $file->getSize();
            //type file
            $type_file = $file->getMimeType();

            //create folder save images
            $path = public_path('/zip/' . $slug);

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
             * 1 - image
             * 2 - background
             * 3 - vector
             * 4 - zip
             * */
            $update = DB::table('sk_image')->where('id_image', $request->id_zip_image1)->update([
                'image_name' => $file_name,
                'image_mime' => $mime_file,
                'image_url' => $folder_image,
                'image_menu_child' => $request->id_menu,
                'updated_at' => \Carbon\Carbon::now('Asia/Ho_Chi_Minh'),
            ]);
        }

        //img2
        if(isset($request->section4_upload_background2)){
            $file = $request->section4_upload_background2;
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
             * 1 - image
             * 2 - background
             * 3 - vector
             * 4 - zip
             * */
            $update = DB::table('sk_image')->where('id_image', $request->id_logo2)->update([
                'image_name' => $file_name,
                'image_mime' => $mime_file,
                'image_url' => $folder_image,
                'image_menu_child' => $request->id_menu,
                'updated_at' => \Carbon\Carbon::now('Asia/Ho_Chi_Minh'),
            ]);
        }

        //zip vector
        if(isset($request->section4_file_vector2)){
            $file = $request->section4_file_vector2;
            //name file
            $file_name = uniqid() . '_' . $file->getClientOriginalName();
            //mime file
            $mime_file = $file->getClientOriginalExtension();
            //folder save image
            $folder_image = '/zip/' . $slug.'/'.$file_name;
            //url file
            $url_file = $file->getRealPath();
            //size file
            $size_file = $file->getSize();
            //type file
            $type_file = $file->getMimeType();

            //create folder save images
            $path = public_path('/zip/' . $slug);

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
             * 1 - image
             * 2 - background
             * 3 - vector
             * 4 - zip
             * */
            $update = DB::table('sk_image')->where('id_image', $request->id_vector2)->update([
                'image_name' => $file_name,
                'image_mime' => $mime_file,
                'image_url' => $folder_image,
                'image_menu_child' => $request->id_menu,
                'updated_at' => \Carbon\Carbon::now('Asia/Ho_Chi_Minh'),
            ]);
        }

        //zip image
        if(isset($request->section4_file_img2)){
            $file = $request->section4_file_img2;
            //name file
            $file_name = uniqid() . '_' . $file->getClientOriginalName();
            //mime file
            $mime_file = $file->getClientOriginalExtension();
            //folder save image
            $folder_image = '/zip/' . $slug.'/'.$file_name;
            //url file
            $url_file = $file->getRealPath();
            //size file
            $size_file = $file->getSize();
            //type file
            $type_file = $file->getMimeType();

            //create folder save images
            $path = public_path('/zip/' . $slug);

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
             * 1 - image
             * 2 - background
             * 3 - vector
             * 4 - zip
             * */
            $update = DB::table('sk_image')->where('id_image', $request->id_image_zip2)->update([
                'image_name' => $file_name,
                'image_mime' => $mime_file,
                'image_url' => $folder_image,
                'image_menu_child' => $request->id_menu,
                'updated_at' => \Carbon\Carbon::now('Asia/Ho_Chi_Minh'),
            ]);
        }

        return response()->json(['success'=>$id]);
    }

    //insert new layout5
    public function getLayout5(Request $request){
        $id = $request->id;
        $slug = $request->slug;

        /*layout5*/
        if(isset($request->section5_upload_background2)){
            $file = $request->section5_upload_background2;
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
             * 1 - images
             * 2 - background
             * 3 - vector
             * 4 - zip
             * */
            $update = DB::table('sk_image')->where('id_image', $request->id_logo)->update([
                'image_name' => $file_name,
                'image_mime' => $mime_file,
                'image_url' => $folder_image,
                'image_menu_child' => $request->id_menu,
                'updated_at' => \Carbon\Carbon::now('Asia/Ho_Chi_Minh'),
            ]);
        }elseif(isset($request->section5_text)){
            $update = DB::table('sk_info')->where('id_project_info', $id)->update([
                'layout_info' => 5,
                'content_info' => $request->section5_text,
                'updated_at' => \Carbon\Carbon::now('Asia/Ho_Chi_Minh'),
            ]);
        }
    }


    //insert new layout6
    public function getLayout6(Request $request){
        $id = $request->id;
        $slug = $request->slug;

        /*layout6*/
        $file = $request->section6_upload_background2;
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
         * 1 - images
         * 2 - background
         * 3 - vector
         * 4 - zip
         * */
        $update = DB::table('sk_image')->where('id_image', $request->id_logo)->update([
            'image_name' => $file_name,
            'image_mime' => $mime_file,
            'image_url' => $folder_image,
            'image_menu_child' => $request->id_menu,
            'updated_at' => \Carbon\Carbon::now('Asia/Ho_Chi_Minh'),
        ]);
    }

    //insert new layout7
    public function getLayout7(Request $request){
        $id = $request->id;
        $slug = $request->slug;

        /*layout7*/
        if(isset($request->section7_color1)){
            $update = DB::table('sk_color')->where('id_color', $request->id_color1)->update([
                'hex' => $request->section7_color1,
                'rgb' => $request->rgb,
                'cmyk' => $request->cmyk,
                'color_menu_child' => $request->id_menu,
                'updated_at' => \Carbon\Carbon::now('Asia/Ho_Chi_Minh'),
            ]);
        }

        if(isset($request->section7_color2)){
            $update = DB::table('sk_color')->where('id_color', $request->id_color2)->update([
                'hex' => $request->section7_color2,
                'rgb' => $request->rgb,
                'cmyk' => $request->cmyk,
                'color_menu_child' => $request->id_menu,
                'updated_at' => \Carbon\Carbon::now('Asia/Ho_Chi_Minh'),
            ]);
        }
    }

    //insert new layout8
    public function getLayout8(Request $request){
        $id = $request->id;
        $id_color1 = $request->id_color1;
        $id_color2 = $request->id_color2;
        $slug = $request->slug;

        /*layout8*/
        if(isset($request->section8_ga1)){
            $update = DB::table('sk_color')->where('id_color',$id_color1)->update([
                'hex' => $request->section8_ga1,
                'rgb' => $request->rgb,
                'cmyk' => $request->cmyk,
                'color_menu_child' => $request->id_menu,
                'updated_at' => \Carbon\Carbon::now('Asia/Ho_Chi_Minh'),
            ]);
        }elseif(isset($request->section8_ga2)){
            $update = DB::table('sk_color')->where('id_color',$id_color1)->update([
                'hex2' => $request->section8_ga2,
                'rgb2' => $request->rgb,
                'cmyk2' => $request->cmyk,
                'color_menu_child' => $request->id_menu,
                'updated_at' => \Carbon\Carbon::now('Asia/Ho_Chi_Minh'),
            ]);
        }

        if(isset($request->section8_ga3)){
            $update = DB::table('sk_color')->where('id_color',$id_color2)->update([
                'hex' => $request->section8_ga3,
                'rgb' => $request->rgb,
                'cmyk' => $request->cmyk,
                'color_menu_child' => $request->id_menu,
                'updated_at' => \Carbon\Carbon::now('Asia/Ho_Chi_Minh'),
            ]);
        }elseif(isset($request->section8_ga4)){
            $update = DB::table('sk_color')->where('id_color',$id_color2)->update([
                'hex2' => $request->section8_ga4,
                'rgb2' => $request->rgb,
                'cmyk2' => $request->cmyk,
                'color_menu_child' => $request->id_menu,
                'updated_at' => \Carbon\Carbon::now('Asia/Ho_Chi_Minh'),
            ]);
        }

        return response()->json(['success'=>$id_color1.'-'.$id_color2]);
    }

    //insert new layout9
    public function getLayout9(Request $request){
        $id = $request->id;
        $slug = $request->slug;

        /*layout9*/
        if (isset($request->section9_upload_font_th)) {
            $file = $request->section9_upload_font_th;
            //name file
            $file_name = uniqid() . '_' . $file->getClientOriginalName();
            //mime file
            $mime_file = $file->getClientOriginalExtension();
            //folder save image
            $folder_image = '/fonts/' . $slug.'/'.$file_name;
            //url file
            $url_file = $file->getRealPath();
            //size file
            $size_file = $file->getSize();
            //type file
            $type_file = $file->getMimeType();

            //create folder save images
            $path = public_path('/fonts/' . $slug);

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
             * 1 - image
             * 2 - background
             * 3 - vector
             * 4 - zip
             * */
            $update = DB::table('sk_font')->where('id_font',$request->id_font)->update([
                'font' => $folder_image,
                'font_menu_child' => $request->id_menu,
                'updated_at' => \Carbon\Carbon::now('Asia/Ho_Chi_Minh'),
            ]);
        }

        if ($request->hasFile('section9_upload_font_bt')) {
            $file = $request->section9_upload_font_bt;
            //name file
            $file_name = uniqid() . '_' . $file->getClientOriginalName();
            //mime file
            $mime_file = $file->getClientOriginalExtension();
            //folder save image
            $folder_image = '/fonts/' . $slug.'/'.$file_name;
            //url file
            $url_file = $file->getRealPath();
            //size file
            $size_file = $file->getSize();
            //type file
            $type_file = $file->getMimeType();

            //create folder save images
            $path = public_path('/fonts/' . $slug);

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
             * 1 - image
             * 2 - background
             * 3 - vector
             * 4 - zip
             * */
            $update = DB::table('sk_font')->where('id_font',$request->id_font)->update([
                'font' => $folder_image,
                'font_menu_child' => $request->id_menu,
                'updated_at' => \Carbon\Carbon::now('Asia/Ho_Chi_Minh'),
            ]);
        }

        if ($request->hasFile('section9_upload_font_vb')) {
            $file = $request->section9_upload_font_vb;
            //name file
            $file_name = uniqid() . '_' . $file->getClientOriginalName();
            //mime file
            $mime_file = $file->getClientOriginalExtension();
            //folder save image
            $folder_image = '/fonts/' . $slug.'/'.$file_name;
            //url file
            $url_file = $file->getRealPath();
            //size file
            $size_file = $file->getSize();
            //type file
            $type_file = $file->getMimeType();

            //create folder save images
            $path = public_path('/fonts/' . $slug);

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
             * 1 - image
             * 2 - background
             * 3 - vector
             * 4 - zip
             * */
            $update = DB::table('sk_font')->where('id_font',$request->id_font)->update([
                'font' => $folder_image,
                'font_menu_child' => $request->id_menu,
                'updated_at' => \Carbon\Carbon::now('Asia/Ho_Chi_Minh'),
            ]);
        }
    }

    //insert new layout10
    public function getLayout10(Request $request)
    {
        $id = $request->id;
        $slug = $request->slug;

        /*layout6*/
        $file = $request->section10_upload_background2;
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
         * 1 - images
         * 2 - background
         * 3 - vector
         * 4 - zip
         * */
        $update = DB::table('sk_image')->where('id_image', $request->id_logo)->update([
            'image_name' => $file_name,
            'image_mime' => $mime_file,
            'image_url' => $folder_image,
            'image_menu_child' => $request->id_menu,
            'updated_at' => \Carbon\Carbon::now('Asia/Ho_Chi_Minh'),
        ]);
    }

    //insert new layout11
    public function getLayout11(Request $request)
    {
        $id = $request->id;
        $slug = $request->slug;

        /*layout11*/
        if(isset($request->section11_upload_background2)){
            $file = $request->section11_upload_background2;
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
             * 1 - images
             * 2 - background
             * 3 - vector
             * 4 - zip
             * */
            $update = DB::table('sk_image')->where('id_image', $request->id_logo)->update([
                'image_name' => $file_name,
                'image_mime' => $mime_file,
                'image_url' => $folder_image,
                'image_menu_child' => $request->id_menu,
                'updated_at' => \Carbon\Carbon::now('Asia/Ho_Chi_Minh'),
            ]);
        }elseif(isset($request->section11_upload_background22)){
            $file = $request->section11_upload_background22;
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
             * 1 - images
             * 2 - background
             * 3 - vector
             * 4 - zip
             * */
            $update = DB::table('sk_image')->where('id_image', $request->id_logo)->update([
                'image_name' => $file_name,
                'image_mime' => $mime_file,
                'image_url' => $folder_image,
                'image_menu_child' => $request->id_menu,
                'updated_at' => \Carbon\Carbon::now('Asia/Ho_Chi_Minh'),
            ]);
        }

    }

    //insert new layout12
    public function getLayout12(Request $request)
    {
        $id = $request->id;
        $slug = $request->slug;

        /*layout11*/
        if(isset($request->section12_upload_background2)){
            $file = $request->section12_upload_background2;
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
             * 1 - images
             * 2 - background
             * 3 - vector
             * 4 - zip
             * */
            $update = DB::table('sk_image')->where('id_image', $request->id_logo)->update([
                'image_name' => $file_name,
                'image_mime' => $mime_file,
                'image_url' => $folder_image,
                'image_menu_child' => $request->id_menu,
                'updated_at' => \Carbon\Carbon::now('Asia/Ho_Chi_Minh'),
            ]);
        }elseif(isset($request->section12_upload_background22)){
            $file = $request->section12_upload_background22;
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
             * 1 - images
             * 2 - background
             * 3 - vector
             * 4 - zip
             * */
            $update = DB::table('sk_image')->where('id_image', $request->id_logo)->update([
                'image_name' => $file_name,
                'image_mime' => $mime_file,
                'image_url' => $folder_image,
                'image_menu_child' => $request->id_menu,
                'updated_at' => \Carbon\Carbon::now('Asia/Ho_Chi_Minh'),
            ]);
        }

    }

    //insert new layout13
    public function getLayout13(Request $request)
    {
        $id = $request->id;
        $slug = $request->slug;

        /*layout11*/
        if(isset($request->section13_upload_vector)){
            $file = $request->section13_upload_vector;
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
             * 1 - images
             * 2 - background
             * 3 - vector
             * 4 - zip
             * */
            $update = DB::table('sk_image')->where('id_image', $request->id_logo)->update([
                'image_name' => $file_name,
                'image_mime' => $mime_file,
                'image_url' => $folder_image,
                'image_menu_child' => $request->id_menu,
                'updated_at' => \Carbon\Carbon::now('Asia/Ho_Chi_Minh'),
            ]);
        }elseif(isset($request->section13_upload_img)){
            $file = $request->section13_upload_img;
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
             * 1 - images
             * 2 - background
             * 3 - vector
             * 4 - zip
             * */
            $update = DB::table('sk_image')->where('id_image', $request->id_logo)->update([
                'image_name' => $file_name,
                'image_mime' => $mime_file,
                'image_url' => $folder_image,
                'image_menu_child' => $request->id_menu,
                'updated_at' => \Carbon\Carbon::now('Asia/Ho_Chi_Minh'),
            ]);
        }

        if(isset($request->section13_upload_vector2)){
            $file = $request->section13_upload_vector2;
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
             * 1 - images
             * 2 - background
             * 3 - vector
             * 4 - zip
             * */
            $update = DB::table('sk_image')->where('id_image', $request->id_logo)->update([
                'image_name' => $file_name,
                'image_mime' => $mime_file,
                'image_url' => $folder_image,
                'image_menu_child' => $request->id_menu,
                'updated_at' => \Carbon\Carbon::now('Asia/Ho_Chi_Minh'),
            ]);
        }elseif(isset($request->section13_upload_img2)){
            $file = $request->section13_upload_img2;
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
             * 1 - images
             * 2 - background
             * 3 - vector
             * 4 - zip
             * */
            $update = DB::table('sk_image')->where('id_image', $request->id_logo)->update([
                'image_name' => $file_name,
                'image_mime' => $mime_file,
                'image_url' => $folder_image,
                'image_menu_child' => $request->id_menu,
                'updated_at' => \Carbon\Carbon::now('Asia/Ho_Chi_Minh'),
            ]);
        }

        if(isset($request->section13_upload_vector3)){
            $file = $request->section13_upload_vector3;
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
             * 1 - images
             * 2 - background
             * 3 - vector
             * 4 - zip
             * */
            $update = DB::table('sk_image')->where('id_image', $request->id_logo)->update([
                'image_name' => $file_name,
                'image_mime' => $mime_file,
                'image_url' => $folder_image,
                'image_menu_child' => $request->id_menu,
                'updated_at' => \Carbon\Carbon::now('Asia/Ho_Chi_Minh'),
            ]);
        }elseif(isset($request->section13_upload_img3)){
            $file = $request->section13_upload_img3;
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
             * 1 - images
             * 2 - background
             * 3 - vector
             * 4 - zip
             * */
            $update = DB::table('sk_image')->where('id_image', $request->id_logo)->update([
                'image_name' => $file_name,
                'image_mime' => $mime_file,
                'image_url' => $folder_image,
                'image_menu_child' => $request->id_menu,
                'updated_at' => \Carbon\Carbon::now('Asia/Ho_Chi_Minh'),
            ]);
        }

        if(isset($request->section13_upload_vector4)){
            $file = $request->section13_upload_vector4;
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
             * 1 - images
             * 2 - background
             * 3 - vector
             * 4 - zip
             * */
            $update = DB::table('sk_image')->where('id_image', $request->id_logo)->update([
                'image_name' => $file_name,
                'image_mime' => $mime_file,
                'image_url' => $folder_image,
                'image_menu_child' => $request->id_menu,
                'updated_at' => \Carbon\Carbon::now('Asia/Ho_Chi_Minh'),
            ]);
        }elseif(isset($request->section13_upload_img4)){
            $file = $request->section13_upload_img4;
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
             * 1 - images
             * 2 - background
             * 3 - vector
             * 4 - zip
             * */
            $update = DB::table('sk_image')->where('id_image', $request->id_logo)->update([
                'image_name' => $file_name,
                'image_mime' => $mime_file,
                'image_url' => $folder_image,
                'image_menu_child' => $request->id_menu,
                'updated_at' => \Carbon\Carbon::now('Asia/Ho_Chi_Minh'),
            ]);
        }
    }

    //insert new layout14
    public function getLayout14(Request $request)
    {
        $id = $request->id;
        $slug = $request->slug;

        if (isset($request->section14_upload_background2)) {
            $file = $request->section14_upload_background2;
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
             * 1 - images
             * 2 - background
             * 3 - vector
             * 4 - zip
             * */
            $update = DB::table('sk_image')->where('id_image', $request->id_logo)->update([
                'image_name' => $file_name,
                'image_mime' => $mime_file,
                'image_url' => $folder_image,
                'image_menu_child' => $request->id_menu,
                'updated_at' => \Carbon\Carbon::now('Asia/Ho_Chi_Minh'),
            ]);
        }
    }

    //insert new layout15
    public function getLayout15(Request $request)
    {
        $id = $request->id;
        $slug = $request->slug;

        if (isset($request->section15_upload_background1)) {
            $file = $request->section15_upload_background1;
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
             * 1 - images
             * 2 - background
             * 3 - vector
             * 4 - zip
             * */
            $update = DB::table('sk_image')->where('id_image', $request->id_logo)->update([
                'image_name' => $file_name,
                'image_mime' => $mime_file,
                'image_url' => $folder_image,
                'image_menu_child' => $request->id_menu,
                'updated_at' => \Carbon\Carbon::now('Asia/Ho_Chi_Minh'),
            ]);
        }

        if (isset($request->section15_upload_background2)) {
            $file = $request->section15_upload_background2;
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
             * 1 - images
             * 2 - background
             * 3 - vector
             * 4 - zip
             * */
            $update = DB::table('sk_image')->where('id_image', $request->id_logo)->update([
                'image_name' => $file_name,
                'image_mime' => $mime_file,
                'image_url' => $folder_image,
                'image_menu_child' => $request->id_menu,
                'updated_at' => \Carbon\Carbon::now('Asia/Ho_Chi_Minh'),
            ]);
        }

        if (isset($request->section15_upload_background3)) {
            $file = $request->section15_upload_background3;
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
             * 1 - images
             * 2 - background
             * 3 - vector
             * 4 - zip
             * */
            $update = DB::table('sk_image')->where('id_image', $request->id_logo)->update([
                'image_name' => $file_name,
                'image_mime' => $mime_file,
                'image_url' => $folder_image,
                'image_menu_child' => $request->id_menu,
                'updated_at' => \Carbon\Carbon::now('Asia/Ho_Chi_Minh'),
            ]);
        }
    }

    //insert new layout16
    public function getLayout16(Request $request)
    {
        $id = $request->id;
        $slug = $request->slug;

        if (isset($request->section16_upload_background1)) {
            $file = $request->section16_upload_background1;
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
             * 1 - images
             * 2 - background
             * 3 - vector
             * 4 - zip
             * */
            $update = DB::table('sk_image')->where('id_image', $request->id_logo)->update([
                'image_name' => $file_name,
                'image_mime' => $mime_file,
                'image_url' => $folder_image,
                'image_menu_child' => $request->id_menu,
                'updated_at' => \Carbon\Carbon::now('Asia/Ho_Chi_Minh'),
            ]);
        }
    }

    //insert new layout17
    public function getLayout17(Request $request)
    {
        $id = $request->id;
        $slug = $request->slug;

        if (isset($request->section17_upload_background2)) {
            $file = $request->section17_upload_background2;
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
             * 1 - images
             * 2 - background
             * 3 - vector
             * 4 - zip
             * */
            $update = DB::table('sk_image')->where('id_image', $request->id_logo)->update([
                'image_name' => $file_name,
                'image_mime' => $mime_file,
                'image_url' => $folder_image,
                'image_menu_child' => $request->id_menu,
                'updated_at' => \Carbon\Carbon::now('Asia/Ho_Chi_Minh'),
            ]);
        }
    }

    //insert new layout18
    public function getLayout18(Request $request)
    {
        $id = $request->id;
        $slug = $request->slug;

        if (isset($request->section18_upload_img)) {
            $file = $request->section18_upload_img;
            //name file
            $file_name = uniqid() . '_' . $file->getClientOriginalName();
            //mime file
            $mime_file = $file->getClientOriginalExtension();
            //folder save image
            $folder_image = '/zip/' . $slug.'/'.$file_name;
            //url file
            $url_file = $file->getRealPath();
            //size file
            $size_file = $file->getSize();
            //type file
            $type_file = $file->getMimeType();

            //create folder save images
            $path = public_path('/zip/' . $slug);

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
             * 1 - images
             * 2 - background
             * 3 - vector
             * 4 - zip
             * */
            $update = DB::table('sk_image')->where('id_image', $request->id_logo)->update([
                'image_name' => $file_name,
                'image_mime' => $mime_file,
                'image_zip' => $folder_image,
                'image_menu_child' => $request->id_menu,
                'updated_at' => \Carbon\Carbon::now('Asia/Ho_Chi_Minh'),
            ]);
        }

        if (isset($request->section18_upload_background1)) {
            $file = $request->section18_upload_background1;
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
             * 1 - images
             * 2 - background
             * 3 - vector
             * 4 - zip
             * */
            $update = DB::table('sk_image')->where('id_image', $request->id_logo)->update([
                'image_name' => $file_name,
                'image_mime' => $mime_file,
                'image_url' => $folder_image,
                'image_menu_child' => $request->id_menu,
                'updated_at' => \Carbon\Carbon::now('Asia/Ho_Chi_Minh'),
            ]);
        }

        if (isset($request->section18_upload_background2)) {
            $file = $request->section18_upload_background2;
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
             * 1 - images
             * 2 - background
             * 3 - vector
             * 4 - zip
             * */
            $update = DB::table('sk_image')->where('id_image', $request->id_logo)->update([
                'image_name' => $file_name,
                'image_mime' => $mime_file,
                'image_url' => $folder_image,
                'image_menu_child' => $request->id_menu,
                'updated_at' => \Carbon\Carbon::now('Asia/Ho_Chi_Minh'),
            ]);
        }

        if (isset($request->section18_upload_background3)) {
            $file = $request->section18_upload_background3;
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
             * 1 - images
             * 2 - background
             * 3 - vector
             * 4 - zip
             * */
            $update = DB::table('sk_image')->where('id_image', $request->id_logo)->update([
                'image_name' => $file_name,
                'image_mime' => $mime_file,
                'image_url' => $folder_image,
                'image_menu_child' => $request->id_menu,
                'updated_at' => \Carbon\Carbon::now('Asia/Ho_Chi_Minh'),
            ]);
        }

        if (isset($request->section18_upload_background4)) {
            $file = $request->section18_upload_background4;
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
             * 1 - images
             * 2 - background
             * 3 - vector
             * 4 - zip
             * */
            $update = DB::table('sk_image')->where('id_image', $request->id_logo)->update([
                'image_name' => $file_name,
                'image_mime' => $mime_file,
                'image_url' => $folder_image,
                'image_menu_child' => $request->id_menu,
                'updated_at' => \Carbon\Carbon::now('Asia/Ho_Chi_Minh'),
            ]);
        }
    }
}
