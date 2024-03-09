@extends('layouts.logout')

@section('content')


<div class="login-page3">
<div id="clear">
  <div class="log-title">  {{ session('username')}}さん
  <br><br>ようこそ！AtlasSNSへ！</div>


  <p>ユーザー登録が完了しました。<br>早速ログインをしてみましょう。</p>


  <div class="log-ok3"><a href="/login">ログイン画面へ</a></div>
</div>
</div>

@endsection
