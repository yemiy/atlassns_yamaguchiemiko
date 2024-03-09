@extends('layouts.login')
@section('content')
<!DOCTYPE html>
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="css/reset.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/responsive.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<div class="search-y">
<form action="/search" method="post">
@csrf
<input type="text" name="keyword" placeholder="　ユーザー名" >
 <button type="submit" class="search-btn"><img src="images/search-icon.png" ></button>
<div class="keyword">
@if(!empty($keyword))
　　　　　　　　検索ワード：{{$keyword}}

@endif
</div>
</form>
</div>

<hr class="hr1"><!--ページ内ボーダー線-->

@foreach($users as $users)
@if(Auth::id() !=$users->id)

   <div class="icon_header">
    <div>
      <img src="images/{{$users->images}}" alt="icon" class="icon-space">
      <a href="{{ route('users.searchGet' ,$users) }}" ></a>
    </div>
      <div class="search_user_name"> {{$users->username}}</div>


<span class="search-follow-btn">
  @if (auth()->user()->isFollowing($users->id))
  <form action="{{ route('unfollow',['id'=> $users->id]) }}" method="POST">
    {{ csrf_field() }}
    {{ method_field('DELETE') }}
     <button type="submit" class="btn-danger2 follow">フォロー解除</button>
  </form>

  @else
  <form action="{{ route('follow',['id'=> $users->id]) }}" method="POST">
    {{ csrf_field() }}
   <button action="submit" class="btn btn-primary btn-sm">フォローする</button>
  </form>
  @endif
 </span>

</div>
@endif
@endforeach

</html>
@endsection
