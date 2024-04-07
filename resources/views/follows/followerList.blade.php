@extends('layouts.login')
@section('content')

<div class="follow-list">
<h1>Follower List</h1>
<!--フォロワーのアイコン表示-->
@foreach($users as $user)
<p>
<a href=" {{ route('followProfile',['id' =>$user->id])}}"> <img src="{{ asset('images/' .$user->images) }}" class="follows-icon-f"></a></p>

@endforeach

</div>

<hr class="hr1">

<!---フォロワーの投稿表示-->
<div class="followsList">
@foreach($posts as $post)
<div class="follow-list2">

<a href="{{  route('followProfile',['id'=>$post->user_id]) }}" ><img src="{{ asset('images/' .$post->user->images) }}" alt="フォローユーザーアイコン" class="follows-icon9"></a>


<span class="article-title1">{{ $post->user->username }}</span>
<span class="article-post1">{{ $post->post}}</span>
<span class="article-day">{{ $post->updated_at}}</span>
</div>
@endforeach
</div>


@endsection
