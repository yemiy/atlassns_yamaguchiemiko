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

<form action="{{url('/profile')}}" method="POST" enctype="multipart/form-data">
@csrf
<div class="form-group3">
  <div class="profile-icon"><img width="32" src="{{ asset('images/'.Auth::user()->images ) }}"></div>
  <?php $users=Auth::user(); ?>

    <div class="form-group mb-3">
      <label for="subject"> user name </label>
      <input type="text" name="username" value="{{ Auth::user()->username}}">
    </div><br>

    <div class="form-group mb-3">
      <label for="subject"> メールアドレス</label>
      <input type="text" name="mail" value="{{ Auth::user()->mail}}">
    </div><br>

     <div class="form-group mb-3">
      <label for="subject"> パスワード </label>
      <input type="password" name="password" value="">
    </div><br>

    <div class="form-group mb-3">
      <label for="subject">パスワード
        （確認）</label>
      <input type="password" name="password_confirmation" value="">
    </div><br>

     <div class="form-group mb-3">
      <label for="subject"> bio </label>
      <input type="text" name="bio" value="{{ Auth::user()->bio}}">
    </div><br>

    <div class="form-group mb-3">
      <label for="subject"> icon image </label>
      <input type="file" name="images" value="">
    </div>
    <br>
@if (isset($imageName))
<img src="{{ asset('images/'.$imageName ) }}" alt="Uploaded Image">
@endif

    <div class="form-group-btn">
     <button type="submit" class="btn-danger2 follow">更新</button>
     </div><br>
</form>
</div>




<div class="">
@if($errors->any())

@foreach($errors->all() as$error)
{{$error}}
@endforeach

@endif
</div>

@endsection
