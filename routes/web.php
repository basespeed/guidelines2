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

Route::group(['namespace'=>'admin'],function(){
    //login
    Route::group(['prefix'=>'login'],function(){
        Route::get('/','controllerLogin@getLogin')->name('login');
        Route::post('/','controllerLogin@postLogin')->name('login');
    });

    //logout
    Route::get('/logout', 'controllerLogout@getLogout');

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
        Route::get('/{slug}','controllerGuideline@getGuideline');
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
        Route::post('/logo','ControllerAjaxCreate@getLogo')->name('test');
   });
});

Route::any('/{page?}',function(){
    return View::make('errors.404');
})->where('page','.*');




