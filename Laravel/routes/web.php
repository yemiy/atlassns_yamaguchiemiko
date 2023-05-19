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

Route::get('/', function () {
    return view('welcome');
});

//追加するルーティング
// Route::get('hello' , function(){
  //  echo 'Hello World !';
// });

//Route::get('/', 'App\Http\Controllers\PostController@index');

Route::get('hello', 'PostsController@hello');
//この下に自身でページ設定を記述

Route::get('/index','PostsController@index');

Route::get('post/create-form','PostsController@createForm');

Route::post('post/create','PostsController@create');

Route::get('post/{id}/update-form', 'PostsController@updateForm');

Route::post('post/update','PostsController@update');

Route::get('post/{id}/delete','PostsController@delete');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
