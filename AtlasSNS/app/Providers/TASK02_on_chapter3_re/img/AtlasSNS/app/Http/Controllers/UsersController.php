<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    //
    public function profile(){
        return view('users.profile');
    }
    public function index(){
     //   return view('users.search');


            $users = \DB::table('users')->get();

        return view('users.search',['users'=>$users]);
    }
}

?>
