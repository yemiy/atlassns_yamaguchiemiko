<?php
$name = $_POST["username"];
$mail = $_POST["mail"];

require_once('common.php');

try{
  $sql = "INSERT INTO users(username,mail) VALUES(:name, :mail)";

  $stmt = $pdo->prepare($sql);
$stmt->bindValue(":name",$name, PDO::PARAM_STR);
$stmt->bindValue(":mail",$mail, PDO::PARAM_STR);

$stmt->execute();

  header("Location: list.php");
  exit;
} catch(Exception $e){
  echo $e->getMessage();
}
