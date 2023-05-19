@extends('layouts.login')
@section('content')

<?php
    //DBに接続
    $dsn = 'mysql:dbname=atlassns1; host=localhost';
    $username= 'root';
    $password= '';
    $pdo = new PDO($dsn, $username, $password);
?>

<!DOCTYPE html>
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="css/reset.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/responsive.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
<form action="/search" method="get">
@csrf
<input type="text" name="keyword" placeholder="ユーザー名" >
<input type="submit"  value="検索">
</form>

 <table class='search list'>
@if(!empty($users))
@foreach ($users as $user)
@csrf
<tr>
<td><img src="images/icon2.png"  height="30px">
<td>{{ $user->username }}</td></a>
</td></tr>

@endforeach
</table>
@endif
</body>
</html>
@endsection
