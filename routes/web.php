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
Route::get('/communauté','CategoryController@index1')->name('category.index1');
Route::get('/cours','CategoryController@index2')->name('category.index2');
Route::get('/Achat & Vente','CategoryController@index3')->name('category.index3');
Route::get('/Rencontres','CategoryController@index4')->name('category.index4');
Route::get('/Services','CategoryController@index5')->name('category.index5');
Route::get('/Immobilier','CategoryController@index6')->name('category.index6');
Route::get('/Emploi','CategoryController@index7')->name('category.index7');
Route::get('/Véhicules','CategoryController@index8')->name('category.index8');
Route::get('/Évènement','CategoryController@index9')->name('category.index9');





Route::group(['middleware' => 'auth'], function(){
    Route::get('/home', 'HomeController@index')->name('home');
    Route::resource('/category','CategoryController');
    Route::resource('/tag','TagController');

    Route::get('/post/supp','PostController@semble_supprime')->name('post.semble_supprime');
    Route::get('/annonce','PostController@create_post')->name('post.create_post');
    Route::get('/post/restore/{id}','PostController@restore')->name('post.restore');
    Route::delete('/post/kill/{id}','PostController@kill')->name('post.kill');
    Route::resource('/post','PostController');
    Route::resource('/user','UserController');
    Route::resource('/region', 'RegionController');
    Route::resource('/ville', 'VilleController');
    Route::resource('/message', 'MessageController');
    Route::resource('image/upload','UploadController');
    
});  






