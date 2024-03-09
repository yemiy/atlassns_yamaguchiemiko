<?php
namespace App\Http\Controllers\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Auth;
//use App\User;
//use App\Post;
//use App\Http\Requests\PostRequest;
class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    */
    use AuthenticatesUsers;
    /**
     * Where to redirect users after login.
     * @var string
     */
    protected $redirectTo = '/home';
    /**
     * Create a new controller instance.
     * @return void
     */

    public function login(Request $request){
        if($request->isMethod('post')){
            $data=$request->only('mail','password');
            // ログインが成功したら、トップページへ
            //↓ログイン条件は公開時には消すこと
            if(Auth::attempt($data)){
                return redirect('/top');
            }
        }
        return view("auth.login");
    }

    public function logout(){
        Auth::logout();
       return redirect("/login");
    }
}
