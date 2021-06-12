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
    $dbh = new PDO('mysql:host=localhost;dbname=db2;charset=utf8', $user, $pass);
    // PDO実行時のエラーモードを設定
    $dbh ->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
    $dbh ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // 受け取ったidのレコードを取得して配列する
    $sql = "SELECT * FROM recipes WHERE id = ?";
    $stmt = $dbh->prepare($sql);
    $stmt->bindValue(1, $id, PDO::PARAM_INT);
    // 指定したSQLを実行する
    $stmt->execute();
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    //  データベースとの接続を終了する
    $dbh = null;
    // 画面にメッセージを表示する
    echo "レシピの登録が完了しました。<br>";
    echo "<a href='index.php'>トップページへ戻る</a>";
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
    レシピの投稿<br>
    <form method="post" action="update.php">
        <!-- テキストのフォームに入力した項目を表示する -->
        料理：<input type="text" name= "recipe_name" value="<?php
        echo htmlspecialchars($result['recipe_name'], ENT_QUOTES, 'UTF-8'); ?>"><br>
        <!-- セレクトメニューで選択した項目を表示する -->
        カテゴリ：
        <select name="category" id="">
            <option value="">選択してください</option>
            <option value="1" <?php if ($result['category'] === 1) 
            echo "selected"?>>和食</option>
            <option value="2" <?php if ($result['category'] === 2) 
            echo "selected"?>>中華</option>
            <option value="3" <?php if ($result['category'] === 3) 
            echo "selected"?>>洋食</option>
        </select>
        <br>
        <!-- ラジオボタンの項目を表示する -->
        難易度：
        <input type="radio" name="difficulty" value="1" <?php
        if ($result['difficulty']===1) echo "checked" ?>>簡単
        <input type="radio" name="difficulty" value="2" <?php
        if ($result['difficulty']===2) echo "checked" ?>>普通
        <input type="radio" name="difficulty" value="3" <?php
        if ($result['difficulty']===3) echo "checked" ?>>難しい
        <!-- 予算の項目を表示する -->
        予算：
        <input type="number" name="budget" value="<?php echo
        htmlspecialchars($result['budget'], ENT_QUOTES, 'UTF-8')?>">円
        <br>
        <!-- テキストエリアの項目を表示する -->
        作り方：
        <textarea name="howto" id="" cols="40" rows="4" maxlength="150"<?php echo
        htmlspecialchars($result['howto'], ENT_QUOTES, 'UTF-8')?>></textarea>
        <br>
        <!-- hiddenでidの値を受け渡す -->
        <input type="hidden" name="id" value="<?php echo
        htmlspecialchars($result['id'],ENT_QUOTES, 'UTF-8');?>">
        <!-- 送信ボタンを作成して入力フォームを終了する -->
        <input type="submit" value="送信">

        
    </form>
</body>
</html>
