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
Auth::routes();

Route::get('/', 'WebappController@index');


Route::group(['middleware' => 'auth'], function(){
    Route::get('/home', 'HomeController@index')->name('home');
    Route::resource('/category','CategoryController');
    Route::resource('/tag','TagController');

    Route::get('/post/supp','PostController@semble_supprime')->name('post.semble_supprime');
    Route::Post('/annonce','PostController@create_post')->name('post.create_post');
    Route::get('/post/restore/{id}','PostController@restore')->name('post.restore');
    Route::delete('/post/kill/{id}','PostController@kill')->name('post.kill');
    Route::resource('/post','PostController');
    Route::resource('/user','UserController');
    Route::resource('/region', 'RegionController');
    Route::resource('/ville', 'VilleController');
    Route::resource('/message', 'MessageController');
    Route::resource('image/upload','UploadController');
    
});  






