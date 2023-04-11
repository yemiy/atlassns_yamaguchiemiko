<?php
require_once('common.php');
$id=$_GET['id'];

$sql ="SELECT * from users WHERE id= :id";  //データベースからデータ取得
$stmt =$pdo->prepare($sql) ;//　用意
$stmt-> bindValue(":id", $id, PDO::PARAM_INT);//id変換
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

<h1>リストの更新<br><span class="sub">-update-</span></h1>
</header>

<div id="content">
  <form action="update.php" method="post" onsubmit="return check()" id="content">
  <h2><span class="strong">「ID:<span class="orange"><?php echo $id;?></span></span>の登録情報を以下に変更します。」</h2>

  <div class="form_input">
    <div class="username">
      <label for="name">ユーザー名</label>
      <input type="text"  name="username" value="<?php echo $result["username"];?>">
    </div>






    <div class="mail">
      <label for="mail">メールアドレス</label>
      <input type="text" name="mail" value="<?php echo $result["mail"];?>">
      <input type="hidden" name="id" value="<?php echo $id;?>">
    </div>


  </div>

  <div class="form_btn">
    <div class="form_return_btn">
      <p class="return"><a href="list.php">リスト表へ戻る</a></p>
    </div>

    <div class="form_create_btn">
      <a href="update_form.php">
      <input  type="submit" value="更新する"></a>




    </div>
  </div>
</form>
</div>


<script type="text/javascript">
  function check(){
    if(window.confirm('更新をしてよろしいですか？')){
      return true;
    }else{
      window.alert('更新がキャンセルされました');
      return false;
    }

  }
</script>
</body>
</html>
