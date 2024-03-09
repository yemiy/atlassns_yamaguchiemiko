@extends('layouts.logout')

@section('content')

{!! Form::open() !!}

{{Form::token()}}

<div class="login-page2">

<div class="log-title2">新規ユーザー登録</div>

@if ($errors->any())
@foreach($errors->all() as $error)
{{$error}}
@endforeach
@endif

<p>{{ Form::label('ユーザー名') }}<br>
{{ Form::text('username',null,['class' => 'input']) }}</p>

<p>{{ Form::label('メールアドレス') }}<br>
{{ Form::text('mail',null,['class' => 'input']) }}</p>

<p>{{ Form::label('パスワード') }}<br>
{{ Form::text('password',null,['class' => 'input']) }}</p>

<p>{{ Form::label('パスワード確認') }}<br>
{{ Form::text('password_confirmation',null,['class' => 'input']) }}</p>


   <div class="log-ok2">
     <button type="submit" class="">登録</button>
     </div><br><br>


<div class="log-plus"><a href="/login">ログイン画面へ戻る</a></div>


</div>




{!! Form::close() !!}



@endsection
