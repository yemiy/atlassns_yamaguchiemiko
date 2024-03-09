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

//新規ユーザー登録画面
Route::get('/register', 'Auth\RegisterController@register');
Route::post('/register', 'Auth\RegisterController@register');

Route::get('/added', 'Auth\RegisterController@added');
Route::post('/added', 'Auth\RegisterController@added');


Route::get('/logout','Auth\LoginController@logout');
//Route::post('/logout', 'Auth\LoginController@logout');

//TOPページ表示
Route::get('/top','PostsController@index');

//つぶやきの登録
//Route::get('/top','PostsController@create');
Route::post('/create','PostsController@create')->name('posts.create');
//つぶやき削除
Route::get('/post/{id}/delete','PostsController@delete');
//つぶやき編集
Route::post('/post/update','PostsController@update');

//プロフィール
Route::get('/profile','UsersController@profile');
route::post('/profile','UsersController@profiledit');

//検索機能
Route::get('/search','UsersController@search')->name('search');
Route::post('/search','UsersController@searchGet')->name('users.searchGet');

//フォロー
Route::post('/search/{id}/follow','FollowsController@follow')->name('follow');
//フォロー解除
Route::delete('/search/{id}/unfollow','FollowsController@unfollow')->name('unfollow');

//フォロー、フォロワー数の表示
Route::get('/follow-list','FollowsController@followList');
Route::get('/follower-list','FollowsController@followerList');

//他ユーザープロフィール
Route::get('/followProfile/{id}','FollowsController@followProfile')->name('followProfile');
Route::post('/followProfile/{id}/follow','FollowsController@follow')->name('follow');
Route::delete('/followProfile/{id}/unfollow','FollowsController@unfollow')->name('unfollow');
//フォロ
