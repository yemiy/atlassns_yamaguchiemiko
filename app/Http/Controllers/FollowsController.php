<?php

namespace App\Http\Controllers;

use App\User;
use App\Post;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Auth;

class FollowsController extends Controller
{
    public function followList(){
        $following_id=Auth::user()->follows()->pluck('followed_id');
        $posts=Post::with('user')->whereIn('user_id',$following_id)->get();
        $images = \DB::table('users')->get();
        $images = auth()->user()->follows()->get();
        return view('follows.followList',compact('posts'))->with(['images'=>$images,'following_id'=>$following_id]);
    }

    public function followerList(){
        $followed_id = Auth::user()->follower()->pluck('following_id');
        $posts = Post::orderBy('updated_at','desc')->whereIn('user_id',$followed_id)->get();

        $images=\DB::table('users')->get();
        $images=auth()->user()->follower()->get();

        return view('follows.followerList',compact('followed_id','posts'))->with(['images'=>$images]);
    }

    //フォロー機能
    public function follow($id){
        $follows= Auth::user()->id;
        $request = request('id');
        \DB::table('follows')->insert([
            'following_id'=>$follows,
            'followed_id' => $id,
        ]);
        return back();
    }

    //フォロー解除機能
    public function unfollow($id){
        \DB::table('follows')->where(['followed_id'=>$id,'following_id'=>Auth::user()->id])->delete();
        return back();
    }

public function followProfile($id){
$user=User::find($id);
$post=Post::with('user')->whereIn('posts.user_id',[$id])->get();

return view('follows.followProfile',compact('user','post'));
}



/*
public function followProfile(Request $request){
    $followName=$request->input('user_id');

    $followUser=\DB::table('users')->select('id','username','images','bio')->where('id',$followName)->first();
     return view('follows.followProfile',compact('followUser'));
}

*/

}
