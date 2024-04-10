@extends('layouts.login')

@section('content')


<!DOCTYPE html>
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="css/reset.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/responsive.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>

<div class="post-form">
{!! Form::open(['url'=>'/create','method'=>'Post']) !!}

 <div>
  <img src="{{ asset('images/'.Auth::user()->images) }}" alt="フォローユーザーアイコン" class="follows-icon" >

  <input name="newPost" placeholder="投稿内容を入力してください。" required="true">
       @if($errors->any())
 <p class="error-mg">{{ $errors->first('newPost' )}}</p>
@endif
 </div>
 <button type="submit" class="btn btn-post"><img src="images/post.png" ></button>

</div>
{!! Form::close() !!}
<hr class="hr1"><!--ページ内ボーダー線-->

<div class="index-post">
<h2 class="page-header"></h2>


<main class="table-hover">
@foreach($posts as $post)
<article class="article-item">

 <span><img src="{{ asset('images/' .$post->user->images) }}" alt="フォローユーザーアイコン" class="icon2" ></span>
  <span class="article-title" >{{ $post->user->username }}</span>
  <span class="article-post">{{ $post->post }}</span>
  <span class="article-day">{{ $post->created_at }}</span>

  <!--更新-->
<div class="t-icon">
  <a class="js-modal-open" href="" post="{{ $post->post }}" post_id="{{ $post->id }}"><img src="./images/edit.png" alt="編集" width=40 height=40></a>
</div>
<div class="k-icon">
  <!--削除-->
  <a class="delete"href="/post/{{$post->id}}/delete" onclick="return confirm('この投稿を削除します。よろしいでしょか？')">
<img src="./images/trash.png" alt="削除後のボタン" width=38 height=38>
<img src="./images/trash-h.png" alt="消去前のボタン" width=51 height=51>
</a>
</div>

<!--モーダル作成-->
<div class="modal js-modal">
  <div class="modal__bg js-modal-close"></div>
  <div class="modal__content">
    <form action="/post/update" method="post">
      <textarea name="upPost" class="modal_post" required="true" ></textarea >


          @if($errors->any())
 <p class="error-mg">{{ $errors->first('upPost')}}</p>
@endif


<br>
       <button type="submit" class="modal_id" name="id"><img src="./images/edit.png" width=40 height=40></button>

      {{ csrf_field() }}
    </form>

  </div>
</div>

</article>
  @endforeach
</main>

</div>
@endsection
</body>
       </html>
