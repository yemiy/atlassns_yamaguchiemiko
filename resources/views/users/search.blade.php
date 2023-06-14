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

<form action="/search" method="post">
@csrf
<input type="text" name="keyword" placeholder="ユーザー名" >
<input type="submit"  value="検索">
@if(!empty($keyword))
<div class="search-word">
{{$keyword}}
</div>
@endif
</form>

@foreach ($users as $users)
<div>
@if()
<tr><td><img src="images/icon2.png"  height="30px">
<td>{{ $users->username }}</td>
</td></tr>

</div>
@endforeach
@endif
</html>
@endsection
