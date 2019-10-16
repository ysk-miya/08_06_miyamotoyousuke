<?php
// 関数ファイルの読み込み
include('e_functions.php'); //function.php に置いている関数を呼び出す

// getで送信されたidを取得
$id = $_GET['id']; //送られてきたid番号

//DB接続します
$pdo = connectToDb(); //関数

//データ登録SQL作成，指定したidのみ表示する
$sql = 'SELECT*FROM event_table WHERE id=:id'; //追加、ここスペルミス注意！！
$stmt = $pdo->prepare($sql);
$stmt->bindValue(':id', $id, PDO::PARAM_INT);
$status = $stmt->execute();

//データ表示
if ($status == false) {
    // エラーのとき
    showSqlErrorMsg($stmt);
} else {
    // エラーでないとき
    $rs = $stmt->fetch(); // fetch()で1レコードを取得して$rsに入れる
    // $rsは配列で返ってくる．$rs["id"], $rs["task"]などで値をとれる
    // var_dump()で見てみよう
    // var_dump($rs);

    //データを取れたらinputタグの中にvalueで入れる。入れるのはすでにDBに入っている内容。
}
?>


<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>todo更新ページ</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <style>
        div {
            padding: 10px;
            font-size: 16px;
        }
    </style>
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#">予約情報更新</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="home.php">ホーム</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="e_select.php">予約一覧</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>

    <div class="container">
        <div class="row">
            <div class="col-xs-offset-4 col-xs-4">
                <h1>予約情報変更</h1>
                <form method="post" action="e_insert.php">
                    <div class="form-group">
                        <input type="text" class="form-control" id="name" name="name" value="<?= $rs['name'] ?>">
                    </div>
                    <div class="form-group">
                        <input type="email" class=" form-control" id="email" name="email" value="<?= $rs['emeil'] ?>">
                    </div>
                    <div class="form-group">
                        <select type="radio" class="form-control" id="event" name="subject">
                            <option id="event" value="pilates">10/28 ピラティス</option>
                            <option id="event" value="yoga">11/5 ヨガ</option>
                            <option id="event" value="training">11/12 体幹トレーニング</option>
                            <option id="event" value="course">11/22 健康講座</option>
                        </select>
                    </div>
                    <p>ご年齢<br>
                        <input type="radio" id="age" name="age" value="<?= $rs[''] ?>">１０代
                        <input type="radio" id="age" name="age">２０代
                        <input type="radio" id="age" name="age">３０代
                        <input type="radio" id="age" name="age">４０代
                        <input type="radio" id="age" name="age">５０代
                        <input type="radio" id="age" name="age">６０代
                        <input type="radio" id="age" name="age">７０代
                        <input type="radio" id="age" name="age">８０代
                        <input type="radio" id="age" name="age">９０代
                    </p>
                    <div class="form-group">
                        <textarea class="form-control" name="message" rows="5"><?= $rs['comment'] ?></textarea>
                    </div>
                    <button type="submit" class="btn btn-success btn-block">送信</button>
                    <!-- idは変えたくない = ユーザーから見えないようにする-->
                    <!-- 実は一番下に出ているがユーザーに見えないようにhidden.-->
                    <input type="hidden" name="id" value="<?= $rs['id'] ?>">
                </form>
            </div>
        </div>
    </div>
</body>

</html>