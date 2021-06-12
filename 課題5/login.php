<?php
require_once '/Applications/MAMP/db_config.php';
session_start();
//POSTのvalidate
if (!filter_var($_POST['mail'], FILTER_VALIDATE_EMAIL)) {
  echo '入力された値が不正です。';
  return false;
}
//DB内でPOSTされたメールアドレスを検索
try {
  $pdh = new PDO('mysql:host=localhost;dbname=db5;charset=utf8', $user, $pass);
  $stmt = $pdh->prepare('SELECT * from logins where mail = ?');
  $stmt->execute([$_POST['mail']]);
  $row = $stmt->fetch(PDO::FETCH_ASSOC);
  print_r($row);
} catch (\Exception $e) {
  echo $e->getMessage() . PHP_EOL;
}
//emailがDB内に存在しているか確認
if (!isset($row['mail'])) {
  echo 'メールアドレス又はパスワードが間違っています。';
  return false;
}
//パスワード確認後sessionにメールアドレスを渡す
print_r($row);
print_r($_POST[passone]);


if (password_verify($_POST['passone'], $row['passone'])) {
  session_regenerate_id(true); //session_idを新しく生成し、置き換える
  $_SESSION['mail'] = $row['mail'];
  echo 'ログインしました';
} else {
  echo 'メールアドレス又はパスワードが間違っています。';
  return false;
}
