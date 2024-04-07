<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\User;
use App\Follow;
use App\Post;
use Auth;

class UsersController extends Controller
{
public function profile(Request $request){
  return view('users.profile');
 }

public function profiledit(Request $request){
  $id = Auth::id();
  $username = $request->input('username');
  $mail = $request->input('mail');
  $password =$request->input('password');
  $bio = $request->input('bio');
$images=$request->file('images');

$request->validate([
'username'=>'required|min:2|max:12',
'mail'=>'required|string|email|min:5|max:40',
'bio'=>'max:150',
'password'=>'required|alpha_num|min:8|max:20|confirmed',
'password_confirmation'=>'required|alpha_num|min:8|max:20',
'images'=>'image|mimes:jpeg,png,jpg,gif'
]);

if($images !=null){
   \DB::table('users')
  ->where('id',$id)
  ->update([
        'images' => $request->file('images')->getClientOriginalName(),
  ]);

  return redirect('/top');
}

 \DB::table('users')
  ->where('id',$id)
  ->update([
    'username' => $username,
    'mail' => $mail,
    'password' =>bcrypt($password),
    'bio' => $bio,
  ]);

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
 $users = User::get();
$keyword=$request->input('keyword');
return view('users.search',['users'=>$users, 'keyword'=>$keyword]);
}

public function searchGet(Request $request){
  $keyword =$request->input('keyword');
  $query=User::query();
  if(!empty($keyword)){
    $query->where('username','LIKE', "%{$keyword}%");
  }
  $users=$query->get();

  return view('users.search',compact('users','keyword'));
}


}

?>
