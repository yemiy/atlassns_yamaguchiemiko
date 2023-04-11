<?php
require_once('common.php');

?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="css/reset.css">
  <link rel="stylesheet" href="css/style.css">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title>3章CRUD実装-課題-</title>
</head>

<body>
  <header>
    <div class="icon">
      <a href="list.php">
        <img src="./img/Atlas.png" alt="Atlas">
      </a>
    </div>
    <h1>新規登録<br><span class="sub">-create-</span></h1>
  </header>

  <div id="content">
    <form action="create.php" method="post" onsubmit="return check()" id="content">
      <h2><span class="strong orange">新しく登録する</span>ユーザーを<br class="sp">作成しましょう。</h2>
      <div class="form_input">
        <div class="username">
          <label>ユーザー名</label>
          <input type="text" name="username">
</div>
<div class="mail">
          <label>メールアドレス</label>
          <input type="mail" name="mail">
        </div>
      </div>
      <div class="form_btn">
        <div class="form_return_btn">
          <p class="return"><a href="list.php">リスト表に戻る</a></p>
        </div>
        <div class="form_create_btn">
          <input type="submit" value="新規登録">
        </div>
      </div>
    </form>
  </div>

  <script type="text/javascript">
    function check() {
      if (Window.confirm('登録をしてよろしいですか？')) {
        //[ok]時は送信を実行
      } else {//キャンセル時の処理
        window.alert('登録がキャンセルされました');//警告ダイアログを表示
        //送信を中止
        return false;
      }
    }
  </script>
</body>
</html>
