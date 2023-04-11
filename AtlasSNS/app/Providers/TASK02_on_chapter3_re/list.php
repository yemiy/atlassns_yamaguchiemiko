<?php


require_once('common.php');

if(!empty($_POST['search'])){
$search=$_POST["search"];
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



<!-- ここから、ページに表示するフロントです -->
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="css/reset.css">
  <link rel="stylesheet" href="css/style.css">
      <meta name="viewport" content="width=device-width,initial-scale=1">

          <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">

              <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>

                  <script src="js/base.js"></script>

  <title>3章CRUD実装-課題-</title>
</head>

<body>
 <header>
  <div class ="icon">
    <a href="#">
      <img src="./img/Atlas.png" alt="Atlas">
    </a>
  </div>
     <h1>リストの表示 <br> <span class="sub">-list-</span></h1>
 </header>

<div id="content">
 <div class="create_btn">
  <button>
    <a href="create_form.php"><i class="fas fa-plus-circle">新規登録はこちら</i></a>
   </button>
 </div>

 <?php
header("X-FRAME-OPTIONS: DENY");
?>
<?php if(!empty($_POST['search'])){ ?>
  <p class="return_empty"><a href="list.php"><i class="fa fa-angle-double-left"></i>一覧表示に戻る</a></p>


<?php } ?>




  <div id="search">
    <form action="list.php" method="post">
      <input type="text" name="search" value="" placeholder="ユーザー名で検索">
      <button id="btn"  type="submit">
        <i class="fa fa-search"></i>
      </button>


</form>

  </div>



<table style="border-collapse: separate">
 <tr>
  <td class ="id">ID</td>
  <td class="name">NAME</td>
  <td class="mail">MAIL</td>
  <td class="up">EDIT</td>
  <td class="dele">DELETE</td>
 </tr>

<?php foreach ($result as $list) {?>






<tr>
 <td class="id"><?php echo htmlspecialchars($list ["id"]); ?></td>
 <td class="name"><?php echo htmlspecialchars($list["username"]);?></td>

 <td class="mail"><?php echo htmlspecialchars($list["mail"]);?></td>
 <td class="up">
   <a href="update_form.php?id=<?php echo htmlspecialchars($list["id"]);?>">
       <i class="fas fa-file-alt"></i></a></td>
 <td class="dele">
  <a href="delete.php?id=<?php echo htmlspecialchars($list["id"]); ?>"onclick="return confirm('このレコードを削除します。よろしいでしょうか？')">
    <i class="fas fa-trash-alt"></i></a></td>
</tr>



<?php }?>
            <?php foreach ($stmt as $row){?>
 <tr><td><?php echo $row[0]?></td><td><?php echo $row[1]?></td></tr>
            <?php  }?>
        </table>



</table>


<?php
$atlas = 2020;
if ($atlas === 2019){

var_dump("値が間違っている");
}else{
  echo $atlas;
}
?>

</div>
</body>
</html>
