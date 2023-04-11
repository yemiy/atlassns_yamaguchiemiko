<?php
require_once('common.php');
$name=$_GET['name'];

$sql ="SELECT * from users WHERE name= :name";  //データベースからデータ取得
$stmt =$pdo->prepare($sql) ;//　用意
$stmt-> bindValue(":name", $name, PDO::PARAM_INT);//id変換
$stmt->execute();//実行
$result = $stmt -> fetch (PDO::FETCH_ASSOC);






?>

<!DOCTYPE html>

<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="css/reset.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/responsive.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>3章CRUD実装-課題-</title>
</head>

<body>
  <header>
    <div class="icon">
      <a href="list.php">
        <a href="#"><img src="./img/atlas.png" alt="Atlas"> </a>
</div>

<h1>リストの表示<br><span class="sub">-list-</span></h1>
</header>


<?php
header("X-FRAME-OPTIONS: DENY");
?>

  <p class="return_empty"><a href="list.php"><i class="fa fa-angle-double-left"></i>一覧表示に戻る</a></p>





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




</table>
</div>


</body>
</html>
