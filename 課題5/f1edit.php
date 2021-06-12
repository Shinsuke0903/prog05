<?php
// データベースのユーザー名とパスワードを変数に保存する
require_once '/Applications/MAMP/db_config.php';
try{
    //URLのIDを受け取る:$_GET['id']
    // もしIDの値が空ならエラーを表示する
    if (empty($_GET['id'])) throw new Exception('ID不正');
    // 得た値を数値に変換
    $id = (int) $_GET['id'];
    // データベースの接続
    $dbh = new PDO('mysql:host=localhost;dbname=db3;charset=utf8', $user, $pass);
    // PDO実行時のエラーモードを設定
    $dbh ->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
    $dbh ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // 受け取ったidのレコードを取得して配列する
    $sql = "SELECT * FROM forms WHERE id = ?";
    $stmt = $dbh->prepare($sql);
    $stmt->bindValue(1, $id, PDO::PARAM_INT);
    // 指定したSQLを実行する
    $stmt->execute();
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    //  データベースとの接続を終了する
    $dbh = null;
    // 画面にメッセージを表示する
    echo "お問い合わせ内容の登録が完了しました。<br>";
    echo "<a href='f1index.php'>トップページへ戻る</a>";
}catch (Exception $e) {
    echo "エラー発生:" . htmlspecialchars($e->getMessage(),ENT_QUOTES, 'UTF-8') . "<br>";
    die();
}?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>入力フォーム</title>
</head>
<body>
    <!-- データの送信方法と送信先を入力する -->
    お問い合わせ内容の送信<br>
    <form method="post" action="update.php">
        <!-- 会社名、テキストのフォームに入力した項目を表示する -->
        会社名：<input type="text" name= "entity" value="<?php
        echo htmlspecialchars($result['entity'], ENT_QUOTES, 'UTF-8'); ?>"><br>
        <!-- 氏名、テキストのフォームに入力した項目を表示する -->
        氏名：<input type="text" name= "myname" value="<?php
        echo htmlspecialchars($result['myname'], ENT_QUOTES, 'UTF-8'); ?>"><br>
        <!-- 電話番号、テキストのフォームに入力した項目を表示する -->
        電話番号：<input type="text" name= "tell" value="<?php
        echo htmlspecialchars($result['tell'], ENT_QUOTES, 'UTF-8'); ?>"><br>
        <!-- メールアドレス、テキストのフォームに入力した項目を表示する -->
        メールアドレス：<input type="address1" name= "entity" value="<?php
        echo htmlspecialchars($result['address1'], ENT_QUOTES, 'UTF-8'); ?>"><br>
        <!-- お問い合わせ内容、テキストエリアのフォームに入力した項目を表示する -->
        お問い合わせ内容：
        <textarea name="ask" id="" cols="40" rows="4" maxlength="150"<?php echo
        htmlspecialchars($result['ask'], ENT_QUOTES, 'UTF-8')?>></textarea>
        <br>        
    </form>
</body>
</html>
