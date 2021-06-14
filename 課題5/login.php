<?php
session_start();
require_once 'db_config.php';
$mail = $_POST['mail'];
$passone = $_POST['passone'];
var_dump($mail);
var_dump($passone);

try {
  $pdh = new PDO('mysql:host=localhost;dbname=db5;charset=utf8', $user, $pass);
} catch (PDOException $e) {
  $msg = $e->getMessage();
}

$stmt = $pdh->prepare('SELECT * from logins where mail = :mail');
$stmt->bindValue(':mail', $mail);
$stmt->execute();
$member = $stmt->fetch();
var_dump($member);

//指定したハッシュがパスワードにマッチしているかチェック

if ($_POST['passone'] == $member['passone']) {
  //DBのユーザー情報をセッションに保存
  $_SESSION['id'] = $member['id'];
  $_SESSION['nameone'] = $member['nameone'];
  echo 'ログインしました。';
  echo '<a href="mypage.php">マイページへ</a>';
} else {
  echo 'メールアドレスもしくはパスワードが間違っています。';
  echo '<a href="index.html">戻る</a>';
}

?>

