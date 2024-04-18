@extends('layouts.logout')

@section('content')

{!! Form::open() !!}

{{Form::token()}}

<div class="login-page2">

<div class="log-title2">新規ユーザー登録</div>

<p>{{ Form::label('ユーザー名') }}<br>
{{ Form::text('username',null,['class' => 'input']) }}
 @if($errors->any())
 <p class="error-mg">{{ $errors->first('username' )}}</p>
@endif
</p>

<p>{{ Form::label('メールアドレス') }}<br>
{{ Form::text('mail',null,['class' => 'input']) }}
 @if($errors->any())
 <p class="error-mg">{{ $errors->first('mail' )}}</p>
@endif
</p>

<p>{{ Form::label('パスワード') }}<br>
{{ Form::password('password',null,['class' => 'input']) }}
 @if($errors->any())
 <p class="error-mg">{{ $errors->first('password' )}}</p>
@endif
</p>

<p>{{ Form::label('パスワード確認') }}<br>
{{ Form::password('password_confirmation',null,['class' => 'input']) }}
 @if($errors->any())
 <p class="error-mg">{{ $errors->first('password_confirmation' )}}</p>
@endif
</p>


   <div class="log-ok2">
     <button type="submit" class="">新規登録</button>
     </div><br><br>


<div class="log-plus"><a href="/login">ログイン画面へ戻る</a></div>


</div>




{!! Form::close() !!}



@endsection
