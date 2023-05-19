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

    public function createForm()
    {
        return view('posts.index');
    }


    public function create(Request $request){
$users =$request ->input('search');

\DB::table('users')->insert(['users' =>$users ]);
return redirect('top');
    }


}
