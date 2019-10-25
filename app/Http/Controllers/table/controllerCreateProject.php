<?php

namespace App\Http\Controllers\table;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;

class controllerCreateProject extends Controller
{
    public function getTable(){
        if(!Schema::hasTable('sk_project')){
            Schema::create('sk_project', function (Blueprint $table){
                $table->bigIncrements('id');
                $table->bigInteger('id_layout')->nullable();
                $table->string('list_invite')->nullable();
                $table->string('list_category')->nullable();
                $table->string('name_project')->nullable();
                $table->string('name_create')->nullable();
                $table->bigInteger('status')->nullable();
                $table->string('security')->nullable();
                $table->string('slug')->nullable();
                $table->timestamps();
            });

            dd('Đã tạo bảng sk_project !');
        }else{
            return view('errors.404');
        }
    }

    public function getTableCategory(){
        if(!Schema::hasTable('sk_menu')){
            Schema::create('sk_menu', function (Blueprint $table){
                $table->bigIncrements('id_menu');
                $table->bigInteger('id_project_menu')->nullable();
                $table->bigInteger('id_layout_menu')->nullable();
                $table->string('name_menu')->nullable();
                $table->timestamps();
            });

            dd('Đã tạo bảng menu_sk !');
        }else{
            return view('errors.404');
        }
    }

    public function getTableCategoryChild(){
        if(!Schema::hasTable('sk_menu_child')){
            Schema::create('sk_menu_child', function (Blueprint $table){
                $table->bigIncrements('id_menu_child');
                $table->bigInteger('id_project_menu_child')->nullable();
                $table->bigInteger('id_layout_menu_child')->nullable();
                $table->bigInteger('id_menu_menu_child')->nullable();
                $table->string('name_menu_child')->nullable();
                $table->timestamps();
            });

            dd('Đã tạo bảng menu_child_sk !');
        }else{
            return view('errors.404');
        }
    }

    public function getTableInvite(){
        if(!Schema::hasTable('sk_invite')){
            Schema::create('sk_invite', function (Blueprint $table){
                $table->bigIncrements('id');
                $table->bigInteger('id_project')->nullable();
                $table->string('email')->nullable();
                $table->string('name')->nullable();
                $table->timestamps();
            });

            dd('Đã tạo bảng sk_invite !');
        }else{
            return view('errors.404');
        }
    }

    public function getTableImage(){
        if(!Schema::hasTable('sk_image')){
            Schema::create('sk_image', function (Blueprint $table){
                $table->bigIncrements('id_image');
                $table->bigInteger('id_project_image')->nullable();
                $table->bigInteger('layout_image')->nullable();
                $table->string('image_name')->nullable();
                $table->string('image_mime')->nullable();
                $table->string('image_url')->nullable();
                $table->string('image_zip')->nullable();
                $table->bigInteger('image_type')->nullable();
                $table->timestamps();
            });

            dd('Đã tạo bảng sk_image !');
        }else{
            return view('errors.404');
        }
    }

    public function getTableInfo(){
        if(!Schema::hasTable('sk_info')){
            Schema::create('sk_info', function (Blueprint $table){
                $table->bigIncrements('id_info');
                $table->bigInteger('id_project_info')->nullable();
                $table->bigInteger('layout_info')->nullable();
                $table->string('title_info')->nullable();
                $table->string('des_info')->nullable();
                $table->string('content_info')->nullable();
                $table->timestamps();
            });

            dd('Đã tạo bảng sk_info !');
        }else{
            return view('errors.404');
        }
    }

    public function getTableFont(){
        if(!Schema::hasTable('sk_font')){
            Schema::create('sk_font', function (Blueprint $table){
                $table->bigIncrements('id_font');
                $table->bigInteger('id_project_font')->nullable();
                $table->bigInteger('layout_font')->nullable();
                $table->string('font')->nullable();
                $table->timestamps();
            });

            dd('Đã tạo bảng sk_info !');
        }else{
            return view('errors.404');
        }
    }

    public function getTableColor(){
        if(!Schema::hasTable('sk_color')){
            Schema::create('sk_color', function (Blueprint $table){
                $table->bigIncrements('id_color');
                $table->bigInteger('id_project_color')->nullable();
                $table->bigInteger('layout_color')->nullable();
                $table->string('hex')->nullable();
                $table->string('rgb')->nullable();
                $table->string('cmyk')->nullable();
                $table->string('hex2')->nullable();
                $table->string('rgb2')->nullable();
                $table->string('cmyk2')->nullable();
                $table->timestamps();
            });

            dd('Đã tạo bảng sk_color !');
        }else{
            return view('errors.404');
        }
    }
}

