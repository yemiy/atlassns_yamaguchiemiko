<?php

namespace App\Http\Controllers\Auth;
use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
use App\Http\Requests\RegisterFormRequest;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    */
    use RegistersUsers;
    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data){
        return User::create([
            'username' => $data['username'],
            'mail' => $data['mail'],
            'password' => bcrypt($data['password']),
            //変数をデータベースのカラムに登録していく処理
        ]);
    }

public function register(Request $request){
if($request->isMethod('post')){
 //リクエストを受け取る。リクエストに内容が入っていたらここに入る。postで来ていたらtrueになる。
 //isMethodとは、指定したHTTP動詞（postやget）があっていたらtrueを返す。

 $data=$request->all();
$validated=$request->validate([
'username'=>'required|min:2|max:12',
'mail'=>'required|string|email|min:5|max:40',
'password'=>'required|alpha_num|min:3|max:20|confirmed',
'password_confirmation'=>'required|alpha_num|min:3|max:20'

]);


$username =$request->input('username');
$mail=$request->input('mail');
$password=$request->input('password');

User::create([
'username'=>$username,
'mail'=>$mail,
'password'=>bcrypt($password),
]);

$input =$request->session()->put('username',$username);
return redirect('added')->with($input,'username');
}

        return view('auth.register');
    }



    public function added(){
        return view('auth.added');
    }



}
