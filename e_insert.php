<?php
include('e_functions.php'); //e_functions.php に置いている関数をこの２行で呼び出す
$pdo = connectToDb();
// 入力チェック
if (
    !isset($_POST['name']) || $_POST['name'] == '' || //空っぽでは困るのでチェック
    !isset($_POST['email']) || $_POST['email'] == '' ||
    !isset($_POST['event']) || $_POST['event'] == '' ||
    !isset($_POST['age']) || $_POST['age'] == '' ||
    !isset($_POST['comment']) || $_POST['comment'] == ''
) {
    exit('ParamError');
}

//POSTデータ取得
$name = $_POST['name'];
$email = $_POST['email'];
$event = $_POST['event'];
$age = $_POST['age'];
$comment = $_POST['comment'];

var_dump($_POST);

// ↓ 下の処理はfunction.phpに関数として置いておく

//DB接続
// $dbn = 'mysql:dbname=YOUR_DB_NAME;charset=utf8;port=3306;host=localhost';
// $user = 'root';
// $pwd = '';

// try {
//   $pdo = new PDO($dbn, $user, $pwd);
// } catch (PDOException $e) {
//   exit('dbError:' . $e->getMessage());
// }

//データ登録SQL作成
$sql = 'INSERT INTO event_table(id, name, email, event, age, comment, indate)
VALUES(NULL, :a1, :a2, :a3, :a4, :a5, sysdate())';

$stmt = $pdo->prepare($sql);
$stmt->bindValue(':a1', $name, PDO::PARAM_STR);    //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':a2', $email, PDO::PARAM_STR);   //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':a3', $event, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':a4', $age, PDO::PARAM_STR);
$stmt->bindValue(':a5', $comment, PDO::PARAM_STR);
$status = $stmt->execute();

//データ登録処理後
if ($status == false) {
    //SQL実行時にエラーがある場合（エラーオブジェクト取得して表示）
    $error = $stmt->errorInfo();
    exit('sqlError:' . $error[2]);
} else {
    //index.phpへリダイレクト
    header('Location: submit.html');
}
