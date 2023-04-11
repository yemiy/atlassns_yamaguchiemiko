<?php


require_once('common.php');


   //  $id = isset($_GET['id'])? htmlspecialchars($_GET['id'], ENT_QUOTES, 'utf-8'):'';
 //    $name = isset($_POST['username'])? htmlspecialchars($_POST['username'], ENT_QUOTES, 'utf-8'):'';
//     $mail = isset($_POST['mail'])? htmlspecialchars($_POST['mail'], ENT_QUOTES, 'utf-8'):'';

$id=$_POST['id'];
$name=$_POST['username'];
$mail=$_POST['mail'];


try{

  session_start();



 $sql="UPDATE users SET username=:name, mail =:mail WHERE id=:id ";
 $stmt = $pdo->prepare($sql);
$stmt->bindValue(":name",$name, PDO::PARAM_STR);
$stmt->bindValue(":mail",$mail, PDO::PARAM_STR);
  $stmt-> bindValue(":id", $id, PDO::PARAM_INT);


$stmt->execute();

   header("Location: list.php");
    exit;






   } catch(Exception $e){
  echo $e->getMessage();
}

?>
