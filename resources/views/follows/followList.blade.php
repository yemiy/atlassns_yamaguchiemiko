@extends('layouts.login')
@section('content')

<!--フォローユーザーのつぶやき-->
<div class="follow-list">
<h1>Follow List</h1>
<!--フォロワーのアイコン表示-->
@foreach($images as $images)
@if($images->id !==Auth::user()->id)
<p><img src="{{ asset('images/' .$images->images )}}" class="follows-icon-f"></p>
@endif
@endforeach
</div>
<hr class="hr1">

<div class="followsList">
@foreach($posts as $post)
<div class="follow-list2">

<a href="{{ route('followProfile',['id'=>$post->user_id])}}" ><img src="{{ asset('images/' .$post->user->images) }}" alt="フォローユーザーアイコン" class="follows-icon9"></a>

<span class="article-title1">{{ $post->user->username }}</span>
<span class="article-post1">{{ $post->post}}</span>
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
