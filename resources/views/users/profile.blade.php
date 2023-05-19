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

<div class="card-body">

<form action="/profile" method="get">
@csrf

    <div class="form-group">
      <label for="subject"> user name </label>
      <input type="text" name="username" value="">
    </div>

    <div class="form-group">
      <label for="subject"> mail adress </label>
      <input type="text" name="mail" value="">
    </div>

     <div class="form-group">
      <label for="subject"> password </label>
      <input type="text" name="password" value="">
    </div>

    <div class="form-group">
      <label for="subject"> password comfirm</label>
      <input type="text" name="password-comfirm" value="">
    </div>

     <div class="form-group">
      <label for="subject"> bio </label>
      <input type="text" name="bio" value="">
    </div>

    <div class="form-group">
      <label for="subject"> icon image </label>
      <input type="text" name="icon-image" value="">
    </div>


</form>
</div>


@endsection
