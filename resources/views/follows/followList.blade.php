@extends('layouts.login')
@section('content')

<!--フォローユーザーのつぶやき-->
<div class="f-title">
<h1>Follow List</h1>

<div class="follow-list">
<!--フォロワーのアイコン表示-->
@foreach($users as $user)
<a href=" {{ route('followProfile',['id' =>$user->id])}}"> <img src="{{ asset('storage/images/' .$user->images) }}" class="follows-icon-f"></a>

@endforeach
</div></div>

<hr class="hr1">

<div class="followsList">
@foreach($posts as $post)
<div class="follow-list2">

<a href="{{ route('followProfile',['id'=>$post->user_id])}}" ><img src="{{ asset('storage/images/' .$post->user->images) }}" alt="フォローユーザーアイコン" class="follows-icon9"></a>

<span class="article-title1">{{ $post->user->username }}</span>
<span class="article-post1"> {!! nl2br(htmlspecialchars($post->post)) !!}</span>
<span class="article-day ">
  {{ $post->updated_at}}</span>
</div>
@endforeach

<!--
  @foreach ($posts as $post)
<a href="{{  route('followProfile',['id'=>$post->user_id])}}" ><img src="{{ asset('images/' .$post->user->images) }}" alt="フォローユーザーアイコン" class="follows-icon"></a>

 {{ $post->username}}
  {{ $post->post }}

  @endforeach
-->
</div>








@endsection
