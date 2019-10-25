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
        $slug_project_name = $request->slug_project;

        //insert logo sidebar project
        if ($request->hasFile('upload_logo_menu')) {
            $file = $request->upload_logo_menu;
            //name file
            $file_name = uniqid() . '_' . $file->getClientOriginalName();
            //mime file
            $mime_file = $file->getClientOriginalExtension();
            //folder save image
            $folder_image = '/images/' . $slug_project_name.'/'.$file_name;
            //url file
            $url_file = $file->getRealPath();
            //size file
            $size_file = $file->getSize();
            //type file
            $type_file = $file->getMimeType();

            //create folder save images
            $path = public_path('/images/' . $slug_project_name);

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
                    'id_project_image' => $request->id_project,
                    'layout_image' => 0,
                    'image_name' => $file_name,
                    'image_mime' => $mime_file,
                    'image_url' => $folder_image,
                    'image_type' => 0,
                    'created_at' => Carbon::now('Asia/Ho_Chi_Minh'),
                )
            );

        }


        /*layout1*/
        if ($request->hasFile('section1_upload_background')) {
            $file = $request->section1_upload_background;
            //name file
            $file_name = uniqid() . '_' . $file->getClientOriginalName();
            //mime file
            $mime_file = $file->getClientOriginalExtension();
            //folder save image
            $folder_image = '/images/' . $slug_project_name.'/'.$file_name;
            //url file
            $url_file = $file->getRealPath();
            //size file
            $size_file = $file->getSize();
            //type file
            $type_file = $file->getMimeType();

            //create folder save images
            $path = public_path('/images/' . $slug_project_name);

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
            $insert = DB::table('sk_image')->insert(
                array(
                    'id_project_image' => $request->id_project,
                    'layout_image' => 1,
                    'image_name' => $file_name,
                    'image_mime' => $mime_file,
                    'image_url' => $folder_image,
                    'image_type' => 2,
                    'created_at' => Carbon::now('Asia/Ho_Chi_Minh'),
                )
            );
        }
        /*layout3*/
        if ($request->hasFile('section3_upload_background')) {
            $file = $request->section3_upload_background;
            //name file
            $file_name = uniqid() . '_' . $file->getClientOriginalName();
            //mime file
            $mime_file = $file->getClientOriginalExtension();
            //folder save image
            $folder_image = '/images/' . $slug_project_name.'/'.$file_name;
            //url file
            $url_file = $file->getRealPath();
            //size file
            $size_file = $file->getSize();
            //type file
            $type_file = $file->getMimeType();

            //create folder save images
            $path = public_path('/images/' . $slug_project_name);

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
            $insert = DB::table('sk_image')->insert(
                array(
                    'id_project_image' => $request->id_project,
                    'layout_image' => 3,
                    'image_name' => $file_name,
                    'image_mime' => $mime_file,
                    'image_url' => $folder_image,
                    'image_type' => 2,
                    'created_at' => Carbon::now('Asia/Ho_Chi_Minh'),
                )
            );
        }

        /*layout4*/
        //img1
        if ($request->hasFile('section4_upload_background1')) {
            $file = $request->section4_upload_background1;
            //name file
            $file_name = uniqid() . '_' . $file->getClientOriginalName();
            //mime file
            $mime_file = $file->getClientOriginalExtension();
            //folder save image
            $folder_image = '/images/' . $slug_project_name.'/'.$file_name;
            //url file
            $url_file = $file->getRealPath();
            //size file
            $size_file = $file->getSize();
            //type file
            $type_file = $file->getMimeType();

            //create folder save images
            $path = public_path('/images/' . $slug_project_name);

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
            $insert = DB::table('sk_image')->insert(
                array(
                    'id_project_image' => $request->id_project,
                    'layout_image' => 4,
                    'image_name' => $file_name,
                    'image_mime' => $mime_file,
                    'image_url' => $folder_image,
                    'image_type' => 1,
                    'created_at' => Carbon::now('Asia/Ho_Chi_Minh'),
                )
            );
        }
        //zip vector
        if ($request->hasFile('section4_file_vector1')) {
            $file = $request->section4_file_vector1;
            //name file
            $file_name = uniqid() . '_' . $file->getClientOriginalName();
            //mime file
            $mime_file = $file->getClientOriginalExtension();
            //folder save image
            $folder_image = '/zip/' . $slug_project_name.'/'.$file_name;
            //url file
            $url_file = $file->getRealPath();
            //size file
            $size_file = $file->getSize();
            //type file
            $type_file = $file->getMimeType();

            //create folder save images
            $path = public_path('/zip/' . $slug_project_name);

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
            $insert = DB::table('sk_image')->insert(
                array(
                    'id_project_image' => $request->id_project,
                    'layout_image' => 4,
                    'image_name' => $file_name,
                    'image_mime' => $mime_file,
                    'image_zip' => $folder_image,
                    'image_type' => 4,
                    'created_at' => Carbon::now('Asia/Ho_Chi_Minh'),
                )
            );
        }
        //zip image1
        if ($request->hasFile('section4_file_img1')) {
            $file = $request->section4_file_img1;
            //name file
            $file_name = uniqid() . '_' . $file->getClientOriginalName();
            //mime file
            $mime_file = $file->getClientOriginalExtension();
            //folder save image
            $folder_image = '/zip/' . $slug_project_name.'/'.$file_name;
            //url file
            $url_file = $file->getRealPath();
            //size file
            $size_file = $file->getSize();
            //type file
            $type_file = $file->getMimeType();

            //create folder save images
            $path = public_path('/zip/' . $slug_project_name);

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
            $insert = DB::table('sk_image')->insert(
                array(
                    'id_project_image' => $request->id_project,
                    'layout_image' => 4,
                    'image_name' => $file_name,
                    'image_mime' => $mime_file,
                    'image_zip' => $folder_image,
                    'image_type' => 4,
                    'created_at' => Carbon::now('Asia/Ho_Chi_Minh'),
                )
            );
        }

        //img2
        if ($request->hasFile('section4_upload_background2')) {
            $file = $request->section4_upload_background2;
            //name file
            $file_name = uniqid() . '_' . $file->getClientOriginalName();
            //mime file
            $mime_file = $file->getClientOriginalExtension();
            //folder save image
            $folder_image = '/images/' . $slug_project_name.'/'.$file_name;
            //url file
            $url_file = $file->getRealPath();
            //size file
            $size_file = $file->getSize();
            //type file
            $type_file = $file->getMimeType();

            //create folder save images
            $path = public_path('/images/' . $slug_project_name);

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
            $insert = DB::table('sk_image')->insert(
                array(
                    'id_project_image' => $request->id_project,
                    'layout_image' => 4,
                    'image_name' => $file_name,
                    'image_mime' => $mime_file,
                    'image_url' => $folder_image,
                    'image_type' => 1,
                    'created_at' => Carbon::now('Asia/Ho_Chi_Minh'),
                )
            );
        }

        //zip vector
        if ($request->hasFile('section4_file_vector2')) {
            $file = $request->section4_file_vector2;
            //name file
            $file_name = uniqid() . '_' . $file->getClientOriginalName();
            //mime file
            $mime_file = $file->getClientOriginalExtension();
            //folder save image
            $folder_image = '/zip/' . $slug_project_name.'/'.$file_name;
            //url file
            $url_file = $file->getRealPath();
            //size file
            $size_file = $file->getSize();
            //type file
            $type_file = $file->getMimeType();

            //create folder save images
            $path = public_path('/zip/' . $slug_project_name);

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
            $insert = DB::table('sk_image')->insert(
                array(
                    'id_project_image' => $request->id_project,
                    'layout_image' => 4,
                    'image_name' => $file_name,
                    'image_mime' => $mime_file,
                    'image_zip' => $folder_image,
                    'image_type' => 4,
                    'created_at' => Carbon::now('Asia/Ho_Chi_Minh'),
                )
            );
        }

        //zip image
        if ($request->hasFile('section4_file_img2')) {
            $file = $request->section4_file_img2;
            //name file
            $file_name = uniqid() . '_' . $file->getClientOriginalName();
            //mime file
            $mime_file = $file->getClientOriginalExtension();
            //folder save image
            $folder_image = '/zip/' . $slug_project_name.'/'.$file_name;
            //url file
            $url_file = $file->getRealPath();
            //size file
            $size_file = $file->getSize();
            //type file
            $type_file = $file->getMimeType();

            //create folder save images
            $path = public_path('/zip/' . $slug_project_name);

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
            $insert = DB::table('sk_image')->insert(
                array(
                    'id_project_image' => $request->id_project,
                    'layout_image' => 4,
                    'image_name' => $file_name,
                    'image_mime' => $mime_file,
                    'image_zip' => $folder_image,
                    'image_type' => 4,
                    'created_at' => Carbon::now('Asia/Ho_Chi_Minh'),
                )
            );
        }

        /*layout5*/
        if ($request->hasFile('section5_upload_background2')) {
            $file = $request->section5_upload_background2;
            //name file
            $file_name = uniqid() . '_' . $file->getClientOriginalName();
            //mime file
            $mime_file = $file->getClientOriginalExtension();
            //folder save image
            $folder_image = '/images/' . $slug_project_name.'/'.$file_name;
            //url file
            $url_file = $file->getRealPath();
            //size file
            $size_file = $file->getSize();
            //type file
            $type_file = $file->getMimeType();

            //create folder save images
            $path = public_path('/images/' . $slug_project_name);

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
            $insert = DB::table('sk_image')->insert(
                array(
                    'id_project_image' => $request->id_project,
                    'layout_image' => 5,
                    'image_name' => $file_name,
                    'image_mime' => $mime_file,
                    'image_url' => $folder_image,
                    'image_type' => 1,
                    'created_at' => Carbon::now('Asia/Ho_Chi_Minh'),
                )
            );

            $insert_info = DB::table('sk_info')->insert(
                array(
                    'id_project_info' => $request->id_project,
                    'layout_info' => 5,
                    'content_info' => $request->section5_text,
                    'created_at' => Carbon::now('Asia/Ho_Chi_Minh'),
                )
            );
        }

        /*layout6*/
        if ($request->hasFile('section6_upload_background2')) {
            $file = $request->section6_upload_background2;
            //name file
            $file_name = uniqid() . '_' . $file->getClientOriginalName();
            //mime file
            $mime_file = $file->getClientOriginalExtension();
            //folder save image
            $folder_image = '/images/' . $slug_project_name.'/'.$file_name;
            //url file
            $url_file = $file->getRealPath();
            //size file
            $size_file = $file->getSize();
            //type file
            $type_file = $file->getMimeType();

            //create folder save images
            $path = public_path('/images/' . $slug_project_name);

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
            $insert = DB::table('sk_image')->insert(
                array(
                    'id_project_image' => $request->id_project,
                    'layout_image' => 6,
                    'image_name' => $file_name,
                    'image_mime' => $mime_file,
                    'image_url' => $folder_image,
                    'image_type' => 1,
                    'created_at' => Carbon::now('Asia/Ho_Chi_Minh'),
                )
            );
        }

        /*layout7*/
        $insert_color = DB::table('sk_color')->insert(
            array(
                'id_project_color' => $request->id_project,
                'layout_color' => 7,
                'hex' => $request->section7_color1,
                'rgb' => $request->section7_rgb1,
                'cmyk' => $request->section7_cmyk1,
                'created_at' => Carbon::now('Asia/Ho_Chi_Minh'),
            )
        );
        $insert_color = DB::table('sk_color')->insert(
            array(
                'id_project_color' => $request->id_project,
                'layout_color' => 7,
                'hex' => $request->section7_color2,
                'rgb' => $request->section7_rgb2,
                'cmyk' => $request->section7_cmyk2,
                'created_at' => Carbon::now('Asia/Ho_Chi_Minh'),
            )
        );

        /*layout8*/
        $insert_color = DB::table('sk_color')->insert(
            array(
                'id_project_color' => $request->id_project,
                'layout_color' => 8,
                'hex' => $request->section8_ga1,
                'rgb' => $request->section8_rgb1,
                'cmyk' => $request->section8_cmyk1,
                'hex2' => $request->section8_ga2,
                'rgb2' => $request->section8_rgb2,
                'cmyk2' => $request->section8_cmyk2,
                'created_at' => Carbon::now('Asia/Ho_Chi_Minh'),
            )
        );
        $insert_color = DB::table('sk_color')->insert(
            array(
                'id_project_color' => $request->id_project,
                'layout_color' => 8,
                'hex' => $request->section8_ga3,
                'rgb' => $request->section8_rgb3,
                'cmyk' => $request->section8_cmyk3,
                'hex2' => $request->section8_ga4,
                'rgb2' => $request->section8_rgb4,
                'cmyk2' => $request->section8_cmyk4,
                'created_at' => Carbon::now('Asia/Ho_Chi_Minh'),
            )
        );

        /*layout9*/
        if ($request->hasFile('section9_upload_font_th')) {
            $file = $request->section9_upload_font_th;
            //name file
            $file_name = uniqid() . '_' . $file->getClientOriginalName();
            //mime file
            $mime_file = $file->getClientOriginalExtension();
            //folder save image
            $folder_image = '/zip/' . $slug_project_name.'/'.$file_name;
            //url file
            $url_file = $file->getRealPath();
            //size file
            $size_file = $file->getSize();
            //type file
            $type_file = $file->getMimeType();

            //create folder save images
            $path = public_path('/zip/' . $slug_project_name);

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
            $insert_font = DB::table('sk_font')->insert(
                array(
                    'id_project_font' => $request->id_project,
                    'layout_font' => 9,
                    'font' => $folder_image,
                    'created_at' => Carbon::now('Asia/Ho_Chi_Minh'),
                )
            );
        }

        if ($request->hasFile('section9_upload_font_bt')) {
            $file = $request->section9_upload_font_bt;
            //name file
            $file_name = uniqid() . '_' . $file->getClientOriginalName();
            //mime file
            $mime_file = $file->getClientOriginalExtension();
            //folder save image
            $folder_image = '/zip/' . $slug_project_name.'/'.$file_name;
            //url file
            $url_file = $file->getRealPath();
            //size file
            $size_file = $file->getSize();
            //type file
            $type_file = $file->getMimeType();

            //create folder save images
            $path = public_path('/zip/' . $slug_project_name);

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
            $insert_font = DB::table('sk_font')->insert(
                array(
                    'id_project_font' => $request->id_project,
                    'layout_font' => 9,
                    'font' => $folder_image,
                    'created_at' => Carbon::now('Asia/Ho_Chi_Minh'),
                )
            );
        }

        if ($request->hasFile('section9_upload_font_vb')) {
            $file = $request->section9_upload_font_vb;
            //name file
            $file_name = uniqid() . '_' . $file->getClientOriginalName();
            //mime file
            $mime_file = $file->getClientOriginalExtension();
            //folder save image
            $folder_image = '/zip/' . $slug_project_name.'/'.$file_name;
            //url file
            $url_file = $file->getRealPath();
            //size file
            $size_file = $file->getSize();
            //type file
            $type_file = $file->getMimeType();

            //create folder save images
            $path = public_path('/zip/' . $slug_project_name);

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
            $insert_font = DB::table('sk_font')->insert(
                array(
                    'id_project_font' => $request->id_project,
                    'layout_font' => 9,
                    'font' => $folder_image,
                    'created_at' => Carbon::now('Asia/Ho_Chi_Minh'),
                )
            );
        }

        /*layout10*/
        if ($request->hasFile('section10_upload_font_th')) {
            $file = $request->section10_upload_font_th;
            //name file
            $file_name = uniqid() . '_' . $file->getClientOriginalName();
            //mime file
            $mime_file = $file->getClientOriginalExtension();
            //folder save image
            $folder_image = '/zip/' . $slug_project_name.'/'.$file_name;
            //url file
            $url_file = $file->getRealPath();
            //size file
            $size_file = $file->getSize();
            //type file
            $type_file = $file->getMimeType();

            //create folder save images
            $path = public_path('/zip/' . $slug_project_name);

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
            $insert_font = DB::table('sk_font')->insert(
                array(
                    'id_project_font' => $request->id_project,
                    'layout_font' => 10,
                    'font' => $folder_image,
                    'created_at' => Carbon::now('Asia/Ho_Chi_Minh'),
                )
            );
        }

        if ($request->hasFile('section10_upload_font_bt')) {
            $file = $request->section10_upload_font_bt;
            //name file
            $file_name = uniqid() . '_' . $file->getClientOriginalName();
            //mime file
            $mime_file = $file->getClientOriginalExtension();
            //folder save image
            $folder_image = '/zip/' . $slug_project_name.'/'.$file_name;
            //url file
            $url_file = $file->getRealPath();
            //size file
            $size_file = $file->getSize();
            //type file
            $type_file = $file->getMimeType();

            //create folder save images
            $path = public_path('/zip/' . $slug_project_name);

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
            $insert_font = DB::table('sk_font')->insert(
                array(
                    'id_project_font' => $request->id_project,
                    'layout_font' => 10,
                    'font' => $folder_image,
                    'created_at' => Carbon::now('Asia/Ho_Chi_Minh'),
                )
            );
        }

        if ($request->hasFile('section10_upload_font_vb')) {
            $file = $request->section10_upload_font_vb;
            //name file
            $file_name = uniqid() . '_' . $file->getClientOriginalName();
            //mime file
            $mime_file = $file->getClientOriginalExtension();
            //folder save image
            $folder_image = '/zip/' . $slug_project_name.'/'.$file_name;
            //url file
            $url_file = $file->getRealPath();
            //size file
            $size_file = $file->getSize();
            //type file
            $type_file = $file->getMimeType();

            //create folder save images
            $path = public_path('/zip/' . $slug_project_name);

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
            $insert_font = DB::table('sk_font')->insert(
                array(
                    'id_project_font' => $request->id_project,
                    'layout_font' => 10,
                    'font' => $folder_image,
                    'created_at' => Carbon::now('Asia/Ho_Chi_Minh'),
                )
            );
        }

        /*layout11*/
        if ($request->hasFile('section11_upload_background2')) {
            $file = $request->section11_upload_background2;
            //name file
            $file_name = uniqid() . '_' . $file->getClientOriginalName();
            //mime file
            $mime_file = $file->getClientOriginalExtension();
            //folder save image
            $folder_image = '/images/' . $slug_project_name.'/'.$file_name;
            //url file
            $url_file = $file->getRealPath();
            //size file
            $size_file = $file->getSize();
            //type file
            $type_file = $file->getMimeType();

            //create folder save images
            $path = public_path('/images/' . $slug_project_name);

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
            $insert = DB::table('sk_image')->insert(
                array(
                    'id_project_image' => $request->id_project,
                    'layout_image' => 11,
                    'image_name' => $file_name,
                    'image_mime' => $mime_file,
                    'image_url' => $folder_image,
                    'image_type' => 1,
                    'created_at' => Carbon::now('Asia/Ho_Chi_Minh'),
                )
            );
        }

        if ($request->hasFile('section11_upload_background22')) {
            $file = $request->section11_upload_background22;
            //name file
            $file_name = uniqid() . '_' . $file->getClientOriginalName();
            //mime file
            $mime_file = $file->getClientOriginalExtension();
            //folder save image
            $folder_image = '/images/' . $slug_project_name.'/'.$file_name;
            //url file
            $url_file = $file->getRealPath();
            //size file
            $size_file = $file->getSize();
            //type file
            $type_file = $file->getMimeType();

            //create folder save images
            $path = public_path('/images/' . $slug_project_name);

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
            $insert = DB::table('sk_image')->insert(
                array(
                    'id_project_image' => $request->id_project,
                    'layout_image' => 11,
                    'image_name' => $file_name,
                    'image_mime' => $mime_file,
                    'image_url' => $folder_image,
                    'image_type' => 1,
                    'created_at' => Carbon::now('Asia/Ho_Chi_Minh'),
                )
            );
        }

        /*layout12*/
        if ($request->hasFile('section12_upload_background2')) {
            $file = $request->section12_upload_background2;
            //name file
            $file_name = uniqid() . '_' . $file->getClientOriginalName();
            //mime file
            $mime_file = $file->getClientOriginalExtension();
            //folder save image
            $folder_image = '/images/' . $slug_project_name.'/'.$file_name;
            //url file
            $url_file = $file->getRealPath();
            //size file
            $size_file = $file->getSize();
            //type file
            $type_file = $file->getMimeType();

            //create folder save images
            $path = public_path('/images/' . $slug_project_name);

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
            $insert = DB::table('sk_image')->insert(
                array(
                    'id_project_image' => $request->id_project,
                    'layout_image' => 12,
                    'image_name' => $file_name,
                    'image_mime' => $mime_file,
                    'image_url' => $folder_image,
                    'image_type' => 1,
                    'created_at' => Carbon::now('Asia/Ho_Chi_Minh'),
                )
            );
        }

        if ($request->hasFile('section12_upload_background22')) {
            $file = $request->section12_upload_background22;
            //name file
            $file_name = uniqid() . '_' . $file->getClientOriginalName();
            //mime file
            $mime_file = $file->getClientOriginalExtension();
            //folder save image
            $folder_image = '/images/' . $slug_project_name.'/'.$file_name;
            //url file
            $url_file = $file->getRealPath();
            //size file
            $size_file = $file->getSize();
            //type file
            $type_file = $file->getMimeType();

            //create folder save images
            $path = public_path('/images/' . $slug_project_name);

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
            $insert = DB::table('sk_image')->insert(
                array(
                    'id_project_image' => $request->id_project,
                    'layout_image' => 12,
                    'image_name' => $file_name,
                    'image_mime' => $mime_file,
                    'image_url' => $folder_image,
                    'image_type' => 1,
                    'created_at' => Carbon::now('Asia/Ho_Chi_Minh'),
                )
            );
        }

        /*layout13*/
        if ($request->hasFile('section13_upload_vector')) {
            $file = $request->section13_upload_vector;
            //name file
            $file_name = uniqid() . '_' . $file->getClientOriginalName();
            //mime file
            $mime_file = $file->getClientOriginalExtension();
            //folder save image
            $folder_image = '/zip/' . $slug_project_name.'/'.$file_name;
            //url file
            $url_file = $file->getRealPath();
            //size file
            $size_file = $file->getSize();
            //type file
            $type_file = $file->getMimeType();

            //create folder save images
            $path = public_path('/zip/' . $slug_project_name);

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
            $insert = DB::table('sk_image')->insert(
                array(
                    'id_project_image' => $request->id_project,
                    'layout_image' => 13,
                    'image_name' => $file_name,
                    'image_mime' => $mime_file,
                    'image_zip' => $folder_image,
                    'image_type' => 1,
                    'created_at' => Carbon::now('Asia/Ho_Chi_Minh'),
                )
            );
        }elseif($request->hasFile('section13_upload_img')){
            $file = $request->section13_upload_img;
            //name file
            $file_name = uniqid() . '_' . $file->getClientOriginalName();
            //mime file
            $mime_file = $file->getClientOriginalExtension();
            //folder save image
            $folder_image = '/images/' . $slug_project_name.'/'.$file_name;
            //url file
            $url_file = $file->getRealPath();
            //size file
            $size_file = $file->getSize();
            //type file
            $type_file = $file->getMimeType();

            //create folder save images
            $path = public_path('/images/' . $slug_project_name);

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
            $insert = DB::table('sk_image')->insert(
                array(
                    'id_project_image' => $request->id_project,
                    'layout_image' => 13,
                    'image_name' => $file_name,
                    'image_mime' => $mime_file,
                    'image_url' => $folder_image,
                    'image_type' => 1,
                    'created_at' => Carbon::now('Asia/Ho_Chi_Minh'),
                )
            );
        }

        if ($request->hasFile('section13_upload_vector2')) {
            $file = $request->section13_upload_vector2;
            //name file
            $file_name = uniqid() . '_' . $file->getClientOriginalName();
            //mime file
            $mime_file = $file->getClientOriginalExtension();
            //folder save image
            $folder_image = '/zip/' . $slug_project_name.'/'.$file_name;
            //url file
            $url_file = $file->getRealPath();
            //size file
            $size_file = $file->getSize();
            //type file
            $type_file = $file->getMimeType();

            //create folder save images
            $path = public_path('/zip/' . $slug_project_name);

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
            $insert = DB::table('sk_image')->insert(
                array(
                    'id_project_image' => $request->id_project,
                    'layout_image' => 13,
                    'image_name' => $file_name,
                    'image_mime' => $mime_file,
                    'image_zip' => $folder_image,
                    'image_type' => 1,
                    'created_at' => Carbon::now('Asia/Ho_Chi_Minh'),
                )
            );
        }elseif($request->hasFile('section13_upload_img2')){
            $file = $request->section13_upload_img2;
            //name file
            $file_name = uniqid() . '_' . $file->getClientOriginalName();
            //mime file
            $mime_file = $file->getClientOriginalExtension();
            //folder save image
            $folder_image = '/images/' . $slug_project_name.'/'.$file_name;
            //url file
            $url_file = $file->getRealPath();
            //size file
            $size_file = $file->getSize();
            //type file
            $type_file = $file->getMimeType();

            //create folder save images
            $path = public_path('/images/' . $slug_project_name);

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
            $insert = DB::table('sk_image')->insert(
                array(
                    'id_project_image' => $request->id_project,
                    'layout_image' => 13,
                    'image_name' => $file_name,
                    'image_mime' => $mime_file,
                    'image_url' => $folder_image,
                    'image_type' => 1,
                    'created_at' => Carbon::now('Asia/Ho_Chi_Minh'),
                )
            );
        }

        if ($request->hasFile('section13_upload_vector3')) {
            $file = $request->section13_upload_vector3;
            //name file
            $file_name = uniqid() . '_' . $file->getClientOriginalName();
            //mime file
            $mime_file = $file->getClientOriginalExtension();
            //folder save image
            $folder_image = '/zip/' . $slug_project_name.'/'.$file_name;
            //url file
            $url_file = $file->getRealPath();
            //size file
            $size_file = $file->getSize();
            //type file
            $type_file = $file->getMimeType();

            //create folder save images
            $path = public_path('/zip/' . $slug_project_name);

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
            $insert = DB::table('sk_image')->insert(
                array(
                    'id_project_image' => $request->id_project,
                    'layout_image' => 13,
                    'image_name' => $file_name,
                    'image_mime' => $mime_file,
                    'image_zip' => $folder_image,
                    'image_type' => 1,
                    'created_at' => Carbon::now('Asia/Ho_Chi_Minh'),
                )
            );
        }elseif($request->hasFile('section13_upload_img3')){
            $file = $request->section13_upload_img3;
            //name file
            $file_name = uniqid() . '_' . $file->getClientOriginalName();
            //mime file
            $mime_file = $file->getClientOriginalExtension();
            //folder save image
            $folder_image = '/images/' . $slug_project_name.'/'.$file_name;
            //url file
            $url_file = $file->getRealPath();
            //size file
            $size_file = $file->getSize();
            //type file
            $type_file = $file->getMimeType();

            //create folder save images
            $path = public_path('/images/' . $slug_project_name);

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
            $insert = DB::table('sk_image')->insert(
                array(
                    'id_project_image' => $request->id_project,
                    'layout_image' => 13,
                    'image_name' => $file_name,
                    'image_mime' => $mime_file,
                    'image_url' => $folder_image,
                    'image_type' => 1,
                    'created_at' => Carbon::now('Asia/Ho_Chi_Minh'),
                )
            );
        }

        if ($request->hasFile('section13_upload_vector4')) {
            $file = $request->section13_upload_vector4;
            //name file
            $file_name = uniqid() . '_' . $file->getClientOriginalName();
            //mime file
            $mime_file = $file->getClientOriginalExtension();
            //folder save image
            $folder_image = '/zip/' . $slug_project_name.'/'.$file_name;
            //url file
            $url_file = $file->getRealPath();
            //size file
            $size_file = $file->getSize();
            //type file
            $type_file = $file->getMimeType();

            //create folder save images
            $path = public_path('/zip/' . $slug_project_name);

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
            $insert = DB::table('sk_image')->insert(
                array(
                    'id_project_image' => $request->id_project,
                    'layout_image' => 13,
                    'image_name' => $file_name,
                    'image_mime' => $mime_file,
                    'image_zip' => $folder_image,
                    'image_type' => 1,
                    'created_at' => Carbon::now('Asia/Ho_Chi_Minh'),
                )
            );
        }elseif($request->hasFile('section13_upload_img4')){
            $file = $request->section13_upload_img4;
            //name file
            $file_name = uniqid() . '_' . $file->getClientOriginalName();
            //mime file
            $mime_file = $file->getClientOriginalExtension();
            //folder save image
            $folder_image = '/images/' . $slug_project_name.'/'.$file_name;
            //url file
            $url_file = $file->getRealPath();
            //size file
            $size_file = $file->getSize();
            //type file
            $type_file = $file->getMimeType();

            //create folder save images
            $path = public_path('/images/' . $slug_project_name);

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
            $insert = DB::table('sk_image')->insert(
                array(
                    'id_project_image' => $request->id_project,
                    'layout_image' => 13,
                    'image_name' => $file_name,
                    'image_mime' => $mime_file,
                    'image_url' => $folder_image,
                    'image_type' => 1,
                    'created_at' => Carbon::now('Asia/Ho_Chi_Minh'),
                )
            );
        }

        /*layout14*/
        if ($request->hasFile('section14_upload_background2')) {
            $file = $request->section14_upload_background2;
            //name file
            $file_name = uniqid() . '_' . $file->getClientOriginalName();
            //mime file
            $mime_file = $file->getClientOriginalExtension();
            //folder save image
            $folder_image = '/images/' . $slug_project_name.'/'.$file_name;
            //url file
            $url_file = $file->getRealPath();
            //size file
            $size_file = $file->getSize();
            //type file
            $type_file = $file->getMimeType();

            //create folder save images
            $path = public_path('/images/' . $slug_project_name);

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
            $insert = DB::table('sk_image')->insert(
                array(
                    'id_project_image' => $request->id_project,
                    'layout_image' => 14,
                    'image_name' => $file_name,
                    'image_mime' => $mime_file,
                    'image_url' => $folder_image,
                    'image_type' => 1,
                    'created_at' => Carbon::now('Asia/Ho_Chi_Minh'),
                )
            );
        }

        /*layout15*/
        if ($request->hasFile('section15_upload_background1')) {
            $file = $request->section15_upload_background1;
            //name file
            $file_name = uniqid() . '_' . $file->getClientOriginalName();
            //mime file
            $mime_file = $file->getClientOriginalExtension();
            //folder save image
            $folder_image = '/images/' . $slug_project_name.'/'.$file_name;
            //url file
            $url_file = $file->getRealPath();
            //size file
            $size_file = $file->getSize();
            //type file
            $type_file = $file->getMimeType();

            //create folder save images
            $path = public_path('/images/' . $slug_project_name);

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
            $insert = DB::table('sk_image')->insert(
                array(
                    'id_project_image' => $request->id_project,
                    'layout_image' => 15,
                    'image_name' => $file_name,
                    'image_mime' => $mime_file,
                    'image_url' => $folder_image,
                    'image_type' => 1,
                    'created_at' => Carbon::now('Asia/Ho_Chi_Minh'),
                )
            );
        }

        if ($request->hasFile('section15_upload_background2')) {
            $file = $request->section15_upload_background2;
            //name file
            $file_name = uniqid() . '_' . $file->getClientOriginalName();
            //mime file
            $mime_file = $file->getClientOriginalExtension();
            //folder save image
            $folder_image = '/images/' . $slug_project_name.'/'.$file_name;
            //url file
            $url_file = $file->getRealPath();
            //size file
            $size_file = $file->getSize();
            //type file
            $type_file = $file->getMimeType();

            //create folder save images
            $path = public_path('/images/' . $slug_project_name);

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
            $insert = DB::table('sk_image')->insert(
                array(
                    'id_project_image' => $request->id_project,
                    'layout_image' => 15,
                    'image_name' => $file_name,
                    'image_mime' => $mime_file,
                    'image_url' => $folder_image,
                    'image_type' => 1,
                    'created_at' => Carbon::now('Asia/Ho_Chi_Minh'),
                )
            );
        }

        if ($request->hasFile('section15_upload_background3')) {
            $file = $request->section15_upload_background3;
            //name file
            $file_name = uniqid() . '_' . $file->getClientOriginalName();
            //mime file
            $mime_file = $file->getClientOriginalExtension();
            //folder save image
            $folder_image = '/images/' . $slug_project_name.'/'.$file_name;
            //url file
            $url_file = $file->getRealPath();
            //size file
            $size_file = $file->getSize();
            //type file
            $type_file = $file->getMimeType();

            //create folder save images
            $path = public_path('/images/' . $slug_project_name);

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
            $insert = DB::table('sk_image')->insert(
                array(
                    'id_project_image' => $request->id_project,
                    'layout_image' => 15,
                    'image_name' => $file_name,
                    'image_mime' => $mime_file,
                    'image_url' => $folder_image,
                    'image_type' => 1,
                    'created_at' => Carbon::now('Asia/Ho_Chi_Minh'),
                )
            );
        }

        /*layout16*/
        if ($request->hasFile('section16_upload_background1')) {
            $file = $request->section16_upload_background1;
            //name file
            $file_name = uniqid() . '_' . $file->getClientOriginalName();
            //mime file
            $mime_file = $file->getClientOriginalExtension();
            //folder save image
            $folder_image = '/images/' . $slug_project_name.'/'.$file_name;
            //url file
            $url_file = $file->getRealPath();
            //size file
            $size_file = $file->getSize();
            //type file
            $type_file = $file->getMimeType();

            //create folder save images
            $path = public_path('/images/' . $slug_project_name);

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
            $insert = DB::table('sk_image')->insert(
                array(
                    'id_project_image' => $request->id_project,
                    'layout_image' => 16,
                    'image_name' => $file_name,
                    'image_mime' => $mime_file,
                    'image_url' => $folder_image,
                    'image_type' => 1,
                    'created_at' => Carbon::now('Asia/Ho_Chi_Minh'),
                )
            );
        }

        /*layout17*/
        if ($request->hasFile('section17_upload_background2')) {
            $file = $request->section17_upload_background2;
            //name file
            $file_name = uniqid() . '_' . $file->getClientOriginalName();
            //mime file
            $mime_file = $file->getClientOriginalExtension();
            //folder save image
            $folder_image = '/images/' . $slug_project_name.'/'.$file_name;
            //url file
            $url_file = $file->getRealPath();
            //size file
            $size_file = $file->getSize();
            //type file
            $type_file = $file->getMimeType();

            //create folder save images
            $path = public_path('/images/' . $slug_project_name);

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
            $insert = DB::table('sk_image')->insert(
                array(
                    'id_project_image' => $request->id_project,
                    'layout_image' => 17,
                    'image_name' => $file_name,
                    'image_mime' => $mime_file,
                    'image_url' => $folder_image,
                    'image_type' => 1,
                    'created_at' => Carbon::now('Asia/Ho_Chi_Minh'),
                )
            );
        }

        /*layout17*/
        if ($request->hasFile('section18_upload_background1')) {
            $file = $request->section18_upload_background1;
            //name file
            $file_name = uniqid() . '_' . $file->getClientOriginalName();
            //mime file
            $mime_file = $file->getClientOriginalExtension();
            //folder save image
            $folder_image = '/images/' . $slug_project_name.'/'.$file_name;
            //url file
            $url_file = $file->getRealPath();
            //size file
            $size_file = $file->getSize();
            //type file
            $type_file = $file->getMimeType();

            //create folder save images
            $path = public_path('/images/' . $slug_project_name);

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
            $insert = DB::table('sk_image')->insert(
                array(
                    'id_project_image' => $request->id_project,
                    'layout_image' => 18,
                    'image_name' => $file_name,
                    'image_mime' => $mime_file,
                    'image_url' => $folder_image,
                    'image_type' => 1,
                    'created_at' => Carbon::now('Asia/Ho_Chi_Minh'),
                )
            );
        }

        if ($request->hasFile('section18_upload_background2')) {
            $file = $request->section18_upload_background2;
            //name file
            $file_name = uniqid() . '_' . $file->getClientOriginalName();
            //mime file
            $mime_file = $file->getClientOriginalExtension();
            //folder save image
            $folder_image = '/images/' . $slug_project_name.'/'.$file_name;
            //url file
            $url_file = $file->getRealPath();
            //size file
            $size_file = $file->getSize();
            //type file
            $type_file = $file->getMimeType();

            //create folder save images
            $path = public_path('/images/' . $slug_project_name);

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
            $insert = DB::table('sk_image')->insert(
                array(
                    'id_project_image' => $request->id_project,
                    'layout_image' => 18,
                    'image_name' => $file_name,
                    'image_mime' => $mime_file,
                    'image_url' => $folder_image,
                    'image_type' => 1,
                    'created_at' => Carbon::now('Asia/Ho_Chi_Minh'),
                )
            );
        }

        if ($request->hasFile('section18_upload_background3')) {
            $file = $request->section18_upload_background3;
            //name file
            $file_name = uniqid() . '_' . $file->getClientOriginalName();
            //mime file
            $mime_file = $file->getClientOriginalExtension();
            //folder save image
            $folder_image = '/images/' . $slug_project_name.'/'.$file_name;
            //url file
            $url_file = $file->getRealPath();
            //size file
            $size_file = $file->getSize();
            //type file
            $type_file = $file->getMimeType();

            //create folder save images
            $path = public_path('/images/' . $slug_project_name);

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
            $insert = DB::table('sk_image')->insert(
                array(
                    'id_project_image' => $request->id_project,
                    'layout_image' => 18,
                    'image_name' => $file_name,
                    'image_mime' => $mime_file,
                    'image_url' => $folder_image,
                    'image_type' => 1,
                    'created_at' => Carbon::now('Asia/Ho_Chi_Minh'),
                )
            );
        }

        if ($request->hasFile('section18_upload_background4')) {
            $file = $request->section18_upload_background4;
            //name file
            $file_name = uniqid() . '_' . $file->getClientOriginalName();
            //mime file
            $mime_file = $file->getClientOriginalExtension();
            //folder save image
            $folder_image = '/images/' . $slug_project_name.'/'.$file_name;
            //url file
            $url_file = $file->getRealPath();
            //size file
            $size_file = $file->getSize();
            //type file
            $type_file = $file->getMimeType();

            //create folder save images
            $path = public_path('/images/' . $slug_project_name);

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
            $insert = DB::table('sk_image')->insert(
                array(
                    'id_project_image' => $request->id_project,
                    'layout_image' => 18,
                    'image_name' => $file_name,
                    'image_mime' => $mime_file,
                    'image_url' => $folder_image,
                    'image_type' => 1,
                    'created_at' => Carbon::now('Asia/Ho_Chi_Minh'),
                )
            );
        }

        if ($request->hasFile('section18_upload_img')) {
            $file = $request->section18_upload_img;
            //name file
            $file_name = uniqid() . '_' . $file->getClientOriginalName();
            //mime file
            $mime_file = $file->getClientOriginalExtension();
            //folder save image
            $folder_image = '/zip/' . $slug_project_name.'/'.$file_name;
            //url file
            $url_file = $file->getRealPath();
            //size file
            $size_file = $file->getSize();
            //type file
            $type_file = $file->getMimeType();

            //create folder save images
            $path = public_path('/zip/' . $slug_project_name);

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
            $insert = DB::table('sk_image')->insert(
                array(
                    'id_project_image' => $request->id_project,
                    'layout_image' => 18,
                    'image_name' => $file_name,
                    'image_mime' => $mime_file,
                    'image_url' => $folder_image,
                    'image_type' => 4,
                    'created_at' => Carbon::now('Asia/Ho_Chi_Minh'),
                )
            );
        }

        return redirect()->intended($slug_project_name);
    }
}
