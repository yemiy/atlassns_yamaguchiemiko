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

// Route::get('/', function () {
//     return view('welcome');
// });
// Route::get('/home', 'HomeController@index')->name('home');

//Auth::routes();


//ログアウト中のページ
Route::get('/login', 'Auth\LoginController@login');
Route::post('/login', 'Auth\LoginController@login');

Route::get('/register', 'Auth\RegisterController@registerView')->name('register');
Route::post('/register', 'Auth\RegisterController@register');

Route::get('/added', 'Auth\RegisterController@added');
Route::post('/added', 'Auth\RegisterController@added');

//ログイン中のページ
Route::get('/logout','Auth\LoginController@logout');
//Route::post('/logout', 'Auth\LoginController@logout');

//TOPページ表示
Route::get('/top','PostsController@index');

//つぶやきの登録
//Route::get('/top','PostsController@create');
Route::post('/create','PostsController@create');

//つぶやき削除
Route::get('/post/{id}/delete','PostsController@delete');

//つぶやき編集
Route::post('/post/update','PostsController@update');

Route::get('/profile','UsersController@profile');
route::post('/profile,update','UsersController@profileup');


Route::get('/search','UsersController@search')->name('search');
Route::post('/search','UsersController@search')->name('users.search');

//フォロー、フォロワー数の表示
//Route::get('/top','FollowsController@show');



Route::get('/follow-list','FollowsController@followList');
Route::get('/follower-list','FollowsController@followerList');

//フォロー機能
Route::get('users/')
Route::post('/user/{users}/follow','FollowsController@follow')->name('follow');
//フォロー解除機能
Route::delete('/user/{users}/unfollow','FollowsController@unfollow')->name('unfollow');
