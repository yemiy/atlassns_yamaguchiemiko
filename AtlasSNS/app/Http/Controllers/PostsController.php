<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostsController extends Controller
{

    public function register(){
        return view('posts.register');
    }
    //
    public function index(){
        return view('posts.index');
    }
}
