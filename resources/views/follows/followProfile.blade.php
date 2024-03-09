@extends('layouts.login')
@section('content')

<div class="follow-list-pro">
<p><img src="{{ asset('images/' .$user->images) }}" alt="フォローユーザーアイコン" class="follows-icon-p"></p>
<div class="pro">
<p>name　　　　　　{{ $user->username }}</p>
<p>bio　　　　　　　{{ $user->bio}}</p>

  @if (auth()->user()->isFollowing($user->id))
  <form action="{{ route('unfollow',['id'=> $user->id]) }}" method="POST">
    {{ csrf_field() }}
    {{ method_field('DELETE') }}
     <button type="submit" class="btn-danger2 follow">フォロー解除</button>
  </form>
  @else
  <form action="{{ route('follow',['id'=> $user->id]) }}" method="POST">
    {{ csrf_field() }}
   <button action="submit" class="btn btn-primary btn-sm">フォローする</button>
  </form>
  @endif
</div>
</div>
<hr class="hr1">
<br>


@foreach($post as $post)
<div class="follow-list2">
<img src="{{ asset('images/' .$user->images) }}" alt="フォローユーザーアイコン" class="follows-icon9">
<span class="article-title1">{{ $post->user->username}}</span>
<span class="article-post1">{{ $post->post}}</span>
<span class="article-day">{{ $post->updated_at}}</span>
</div>

@endforeach
@endsection
