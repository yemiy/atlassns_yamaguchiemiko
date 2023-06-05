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

<body>




<form action="/home" method="get">
      <img src="images/icon2.png"  height="30px">
  <input type="text" name="search" placeholder="投稿内容を入力してください。">
<a href="/home"><img src="images/post.png" height="50"></a>


</form>


@if(!empty($users))
@foreach ($users as $user)
@csrf

 <div>
 ・  {{ $user->username}}
 </div>
@endforeach
@endif

@endsection
</body>
       </html>