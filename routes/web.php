<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/','controllerBase@getBase');

Route::get('/getclear','controllerBase@getclear');
Route::get('/pdf','controllerBase@getpdf');

Route::group(['namespace'=>'admin'],function(){
    //login
    Route::group(['prefix'=>'login'],function(){
        Route::get('/','controllerLogin@getLogin')->name('login');
        Route::post('/','controllerLogin@postLogin')->name('login');
    });

    //logout
    Route::get('/checklogout', 'controllerLogout@getLogout')->name('checkLogout');

    //list project
    Route::group(['prefix'=>'admin'],function(){
        Route::get('/','controllerAdmin@getAdmin');
        Route::post('/','controllerAdmin@postAjaxSearchProject');
    });

    Route::get('guidelines/edit/{id}','controllerEditGuidelines@getEditGuidelines');

    //create guidelines
    Route::group(['prefix'=>'new'],function (){
        Route::post('/guidelines','controllerNewGuidelines@postNewGuidelines');
    });


    //edit guidelines
    Route::group(['prefix'=>'edit'],function (){
        Route::get('/guidelines/{slug}','controllerNewGuidelines@getEditGuidelines');
    });

    //create menu guidelines
    Route::group(['prefix'=>'create'],function (){
        Route::post('/menu','controllerMenuGuidelines@postMenuGuidelines');
    });
});

//view guidelines
Route::group(['namespace'=>'clients'],function (){
    Route::group(['prefix'=>'/'],function (){
        Route::get('/{slug}','controllerGuideline@getGuidelineEdit');
    });
});

//create table
Route::group(['namespace'=>'table'],function(){
    Route::group(['prefix'=>'create'],function(){
        Route::get('/project_sk','controllerCreateProject@getTable');
        Route::get('/menu_sk','controllerCreateProject@getTableCategory');
        Route::get('/menu_child_sk','controllerCreateProject@getTableCategoryChild');
        Route::get('/invite_sk','controllerCreateProject@getTableInvite');
        Route::get('/color_sk','controllerCreateProject@getTableColor');
        Route::get('/image_sk','controllerCreateProject@getTableImage');
        Route::get('/info_sk','controllerCreateProject@getTableInfo');
        Route::get('/font_sk','controllerCreateProject@getTableFont');
    });
});

//Ajax
Route::group(['prefix'=>'ajax'],function(){
    Route::post('/invite','AjaxController@postInvite')->name('ajax-invite');
    Route::post('/updateInvite','AjaxController@postUpdateInvite')->name('ajax-update-invite');
    Route::post('/searchProject','AjaxController@postSearchProject')->name('ajax-search-project');
});

//Insert Guidelines Details
Route::group(['namespace'=>'insert'],function (){
    Route::group(['prefix'=>'insert'],function (){
        Route::post('/guidelineDetails','insertController@postInsertGuidelinesDetails')->name('insertGuidelinesDetails');
    });
});

//Ajax Create guidelines
Route::group(['namespace'=>'ajax\create'],function (){
   Route::group(['prefix'=>'ajax/create'],function (){
        Route::post('/logo','ControllerAjaxCreate@getLogo')->name('logo');
        Route::post('/getLayout1','ControllerAjaxCreate@getLayout1')->name('getLayout1');
        Route::post('/getLayout3','ControllerAjaxCreate@getLayout3')->name('getLayout3');
        Route::post('/getLayout4','ControllerAjaxCreate@getLayout4')->name('getLayout4');
        Route::post('/getLayout5','ControllerAjaxCreate@getLayout5')->name('getLayout5');
        Route::post('/getLayout6','ControllerAjaxCreate@getLayout6')->name('getLayout6');
        Route::post('/getLayout7','ControllerAjaxCreate@getLayout7')->name('getLayout7');
        Route::post('/getLayout8','ControllerAjaxCreate@getLayout8')->name('getLayout8');
        Route::post('/getLayout9','ControllerAjaxCreate@getLayout9')->name('getLayout9');
        Route::post('/getLayout10','ControllerAjaxCreate@getLayout10')->name('getLayout10');
        Route::post('/getLayout11','ControllerAjaxCreate@getLayout11')->name('getLayout11');
        Route::post('/getLayout12','ControllerAjaxCreate@getLayout12')->name('getLayout12');
        Route::post('/getLayout13','ControllerAjaxCreate@getLayout13')->name('getLayout13');
        Route::post('/getLayout14','ControllerAjaxCreate@getLayout14')->name('getLayout14');
        Route::post('/getLayout15','ControllerAjaxCreate@getLayout15')->name('getLayout15');
        Route::post('/getLayout16','ControllerAjaxCreate@getLayout16')->name('getLayout16');
        Route::post('/getLayout17','ControllerAjaxCreate@getLayout17')->name('getLayout17');
        Route::post('/getLayout18','ControllerAjaxCreate@getLayout18')->name('getLayout18');
   });
});

Route::group(['namespace' => 'ajax\del'], function (){
    Route::group(['prefix'=>'ajax/del'],function (){
        Route::post('/delMenuLayout','ControllerAjaxDel@delMenuLayout')->name('delMenuLayout');
        Route::post('/dellogo','ControllerAjaxDel@dellogo')->name('dellogo');
    });
});

Route::any('/{page?}',function(){
    return View::make('errors.404');
})->where('page','.*');




