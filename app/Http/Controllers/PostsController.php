<?php

namespace App\Http\Controllers;
use App\Post;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class PostsController extends Controller
{

public function __construct(){
  $this->middleware('auth');//auth認証
}

//投稿表示
public function index(){
$posts=Post::where('user_id', \Auth::user()->id)->get();
return view('posts.index',['posts'=>$posts]);

}

//投稿登録機能
 public function create(Request $request){
if($request->isMethod('post')){
$request->validate([
'newPost'=>'required|min:3|max:150'
]);
    $post=$request->newPost;
    $user_id=Auth::id();
    Post::create([
'user_id' => Auth::user()->id,
'post' =>$post,
    ]);

return redirect('/top');
}
}




  //投稿編集機能
public function update(Request $request){
 $id = $request->input('id');
 $up_post= $request->input('upPost');
 Post::where('id',$id)->update(['post'=>$up_post]);
 return redirect('/top');
}

//投稿削除機能
  public function delete($id){
    Post::where('id',$id)->delete();
    return redirect('/top');
  }
}
?>
