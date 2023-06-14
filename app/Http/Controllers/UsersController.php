<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{


public function profile(){
  return view('users.profile');
 }


public function profiledit(Request $request){
 $username =$request->input('username');
 $mail =$request->input('mail');
 $password=$request->input('password');
 $bio=$request->input('bio');
 $icon=$request->input('icon');
 return redirect('/top');
}
/*
public function index(){
     //   return view('users.search');
 $users = \DB::table('users')->get();
 return view('users.search',['users'=>$users]);
}
*/

public function search(Request $request){

 $users = \DB::table('users')->get();
$keyword=$request->input('keyword');
return view('users.search',['users'=>$users, 'keyword'=>$keyword]);

}




}

?>
