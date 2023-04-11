<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class PostsController extends Controller
{

    //
    public function index(){
   //     $login_user = \DB::table('users')->get();
        return view('posts.index'//['users'=>$users]
    );
    }

}
