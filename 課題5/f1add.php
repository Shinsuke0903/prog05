<?php
// データベースのユーザー名とパスワードを変数に保存する
require_once '/Applications/MAMP/db_config.php';
// form.htmlから送られてくる値を変数に置き換える
// 文字列の項目を変数に代入する
$entity = $_POST['entity'];
$myname = $_POST['myname'];
$address1 = $_POST['address1'];
$ask = $_POST['ask'];
// 数値型に変換して変数に代入する
$tell = (int) $_POST['tell'];
try{
// データベースに接続する
$dbh = new PDO('mysql:host=localhost;dbname=db3;charset=utf8', $user, $pass);
// PDO実行時のエラーモードを設定
$dbh ->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
$dbh ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
// データベースにSQLをセットする
$sql = "INSERT INTO forms (entity, myname, tell, address1, ask) VALUE (?, ?, ?, ?, ?)";
$stmt = $dbh->prepare($sql);
// プレースホルダーの値を指定する
$stmt->bindValue(1, $entity, PDO::PARAM_STR);
$stmt->bindValue(2, $myname, PDO::PARAM_INT);
$stmt->bindValue(3, $tell, PDO::PARAM_INT);
$stmt->bindValue(4, $address1, PDO::PARAM_INT);
$stmt->bindValue(5, $ask, PDO::PARAM_STR);
// 指定したSQLを実行する
$stmt->execute();
//  データベースとの接続を終了する
$dbh = null;
// 画面にメッセージを表示する
echo "お問い合わせ内容の登録が完了しました。<br>";
echo "<a href='f1index.php'>トップページへ戻る</a>";
}catch (Exception $e) {
    echo "エラー発生:" . htmlspecialchars($e->getMessage(),ENT_QUOTES, 'UTF-8') . "<br>";
    die();

}