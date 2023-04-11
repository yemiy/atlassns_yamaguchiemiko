@extends('layouts.login')

@section('content')

<?php


    //DBに接続
    $dsn = 'mysql:dbname=atlassns1; host=localhost';
    $username= 'root';
    $password= '';
    $pdo = new PDO($dsn, $username, $password);


    if(!empty($_GET['search'])){
$search=$_GET["search"];
$sql ="SELECT * from users where username like '%$search%';";
$stmt =$pdo->query($sql) ;
$result = $stmt -> fetchAll (PDO::FETCH_ASSOC);

         /*   $stmt = $pdo -> query(" SELECT * FROM users    "); //SQL文を実行して、結果を$stmtに代入する。*/
}else{
$sql ="SELECT * from users ORDER BY id ASC;";
$stmt =$pdo->query($sql) ;
$result = $stmt -> fetchAll (PDO::FETCH_ASSOC);
}


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
  <input type="text" name="search" placeholder="ユーザー名">
  <input type="submit" name="submit" value="検索">
</form>


 <table class='search list'>
 @foreach ($users as $user)
            <tr>

 <td>
                 <img src="images/icon2.png"  height="30px">
                <td>{{ $user->username }}</td>
      </td></tr>



            <?php foreach ($stmt as $row){?>
 <tr><td><?php echo $row[0]?></td><td><?php echo $row[1]?></td></tr>
            <?php  }?>



        </table>

   @endforeach
@endsection

</body>
       </html>
