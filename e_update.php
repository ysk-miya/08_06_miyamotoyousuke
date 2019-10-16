<?php
// exit('error');   //これを色々な箇所に入れてみてどこまで動いているのかを見るのも手

// 関数ファイル読み込み
// var_dump($_POST);
include('e_functions.php'); //追加
//入力チェック(受信確認処理追加)
if (
    !isset($_POST['name']) || $_POST['name'] == '' || //空っぽでは困るのでチェック
    !isset($_POST['email']) || $_POST['email'] == '' ||
    !isset($_POST['event']) || $_POST['event'] == '' ||
    !isset($_POST['age']) || $_POST['age'] == ''
    // !isset($_POST['comment']) || $_POST['comment'] == ''
) {
    exit('ParamError');
}

//POSTデータ取得
$name = $_POST['name'];
$email = $_POST['email'];
$event = $_POST['event'];
$age = $_POST['age'];
$comment = $_POST['comment'];
$id = $_POST['id'];       //追加

//DB接続します(エラー処理追加)
$pdo = connectToDb();  //functionに置いているDB接続の関数

//データ登録SQL作成
$sql = 'UPDATE event_table SET name=:a1,email=:a2,event=:a3,age=:a4,comment=:a5 WHERE id=:id'; //何番目？を指定する**WHEREを忘れると全て更新される！！
$stmt = $pdo->prepare($sql);
$stmt->bindValue(':a1', $name, PDO::PARAM_STR);
$stmt->bindValue(':a2', $email, PDO::PARAM_STR);
$stmt->bindValue(':a3', $event, PDO::PARAM_STR);
$stmt->bindValue(':a4', $age, PDO::PARAM_STR);
$stmt->bindValue(':a5', $comment, PDO::PARAM_STR);
$stmt->bindValue(':id', $id, PDO::PARAM_INT);
$status = $stmt->execute();

//4．データ登録処理後
if ($status == false) {
    showSqlErrorMsg($stmt);
} else {
    header('Location: e_select.php'); //ここに戻る
    exit;
}
