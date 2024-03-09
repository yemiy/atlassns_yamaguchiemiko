<?php

namespace App;
use Illuminate\Database\Eloquent\Model;
use App\User;

class Follow extends Model
{
    //中間テーブルでフォロー機能
    protected $fillable =['following_id','followed_id'];

    public function getFollowCount($users_id){
        return $this->where('following_id',$users_id)->count();
    }

    public function getFollowerCount($users_id){
        return $this->where('followed_id',$users_id)->count();
    }

    public function followingIds(Int $users_id){
        return $this->where('following_id',$user_id)->get();
    }
}
