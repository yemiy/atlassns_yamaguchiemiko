@extends('layouts.logout')
@section('content')

<div class="login-page">
{!! Form::open() !!}


<div class="log-title">AtlasSNSへようこそ</div>

@csrf
   <div class="form-group mb-3">
      <label for="e-mail"> メールアドレス</label>
      <input type="text" name="mail">
       @if($errors->any())
 <p class="error-mg">{{ $errors->first('mail' )}}</p>
@endif
    </div><br><br>

     <div class="form-group mb-3">
      <label for="subject"> パスワード </label>
      <input type="password" name="password" >
       @if($errors->any())
 <p class="error-mg">{{ $errors->first('password' )}}</p>
@endif
    </div><br>

    <div class="log-ok">
     <button type="submit" class="">LOGIN</button>
     </div><br><br>





<div class="log-plus"><a href="/register">新規ユーザーの方はこちら</a></div>

{!! Form::close() !!}
</div>
@endsection
