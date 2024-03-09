<?php
namespace App;
use App\Post;
use App\User;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;
    /**
     * The attributes that are mass assignable.
     * @var array
     */
    protected $fillable = [
        'username', 'mail', 'password',
    ];
    /** * The attributes that should be hidden for arrays.
     * @var array*/
       protected $hidden = [
        'password', 'remember_token',
    ];

     //つぶやき投稿
    public function posts(){
        return $this-> hasMary('App\Post');
    }

    //フォローする
public function follow($users_id){
    return $this->follower()->attach($users->id);
}

//フォローを解除
public function unfollow( Int $users_id){
    return $this->follows()->detach($users->id);
}

    //フォローしているユーザー
public function follows(){
    return $this->belongsToMany(User::class,'follows','following_id','followed_id');
}

//フォローされてるユーザー
public function follower(){
    return $this->belongsToMany(User::class,'follows','followed_id','following_id');
}



//フォローしているか
public function isFollowing(Int $users_id){
    return(bool) $this->follows()->where('followed_id', $users_id)->exists();
}

//フォローされているか
public function isFollowed(Int  $users_id){
    return(bool) $this->follower()->where('following_id',$users_id)->first();
}


}
