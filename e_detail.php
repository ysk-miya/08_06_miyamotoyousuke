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
//event内容の反映部分
switch ($rs["event"]) {
    case "pilates":
        $checked0 = 'selected';
        $checked1 = '';
        $checked2 = '';
        $checked3 = '';
        break;
    case "yoga":
        $checked0 = '';
        $checked1 = 'selected';
        $checked2 = '';
        $checked3 = '';
        break;
    case "training":
        $checked0 = '';
        $checked1 = '';
        $checked2 = 'selected';
        $checked3 = '';
        break;
    case "course":
        $checked0 = '';
        $checked1 = '';
        $checked2 = '';
        $checked3 = 'selected';
}
//radioボタン(age)データの反映分
switch ($rs["age"]) {
    case "10代":
        $checked10 = 'checked';
        $checked20 = '';
        $checked30 = '';
        $checked40 = '';
        $checked50 = '';
        $checked60 = '';
        $checked70 = '';
        $checked80 = '';
        $checked90 = '';
        break;
    case "20代":
        $checked10 = '';
        $checked20 = 'checked';
        $checked30 = '';
        $checked40 = '';
        $checked50 = '';
        $checked60 = '';
        $checked70 = '';
        $checked80 = '';
        $checked90 = '';
        break;
    case "30代":
        $checked10 = '';
        $checked20 = '';
        $checked30 = 'checked';
        $checked40 = '';
        $checked50 = '';
        $checked60 = '';
        $checked70 = '';
        $checked80 = '';
        $checked90 = '';
        break;
    case "40代":
        $checked10 = '';
        $checked20 = '';
        $checked30 = '';
        $checked40 = 'checked';
        $checked50 = '';
        $checked60 = '';
        $checked70 = '';
        $checked80 = '';
        $checked90 = '';
        break;
    case "50代":
        $checked10 = '';
        $checked20 = '';
        $checked30 = '';
        $checked40 = '';
        $checked50 = 'checked';
        $checked60 = '';
        $checked70 = '';
        $checked80 = '';
        $checked90 = '';
        break;
    case "60代":
        $checked10 = '';
        $checked20 = '';
        $checked30 = '';
        $checked40 = '';
        $checked50 = '';
        $checked60 = 'checked';
        $checked70 = '';
        $checked80 = '';
        $checked90 = '';
        break;
    case "70代":
        $checked10 = '';
        $checked20 = '';
        $checked30 = '';
        $checked40 = '';
        $checked50 = '';
        $checked60 = '';
        $checked70 = 'checked';
        $checked80 = '';
        $checked90 = '';
        break;
    case "80代":
        $checked10 = '';
        $checked20 = '';
        $checked30 = '';
        $checked40 = '';
        $checked50 = '';
        $checked60 = '';
        $checked70 = '';
        $checked80 = 'checked';
        $checked90 = '';
        break;
    case "90代":
        $checked10 = '';
        $checked20 = '';
        $checked30 = '';
        $checked40 = '';
        $checked50 = '';
        $checked60 = '';
        $checked70 = '';
        $checked80 = '';
        $checked90 = 'checked';
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
                        <form method="post" action="e_select.php">
                            <div class="form-group">
                                <input type="text" class="form-control" name="name" value="<?= $rs['name'] ?>">
                            </div>
                            <div class="form-group">
                                <input type="email" class=" form-control" name="email" value="<?= $rs['email'] ?>">
                            </div>
                            <div class="form-group">
                                <select type="radio" class="form-control" name="subject">
                                    <option name="event" value="pilates" <?= $checked0 ?>>10/28 ピラティス</option>
                                    <option name="event" value="yoga" <?= $checked1 ?>>11/5 ヨガ</option>
                                    <option name="event" value="training" <?= $checked2 ?>>11/12 体幹トレーニング</option>
                                    <option name="event" value="course" <?= $checked3 ?>>11/22 健康講座</option>
                                </select>
                            </div>
                            <p>ご年齢<br>
                                <input type="radio" name="age" value="10代" <?= $checked10 ?>>１０代
                                <input type="radio" name="age" value="20代" <?= $checked20 ?>>２０代
                                <input type="radio" name="age" value="30代" <?= $checked30 ?>>３０代
                                <input type="radio" name="age" value="40代" <?= $checked40 ?>>４０代
                                <input type="radio" name="age" value="50代" <?= $checked50 ?>>５０代
                                <input type="radio" name="age" value="60代" <?= $checked60 ?>>６０代
                                <input type="radio" name="age" value="70代" <?= $checked70 ?>>７０代
                                <input type="radio" name="age" value="80代" <?= $checked80 ?>>８０代
                                <input type="radio" name="age" value="90代" <?= $checked90 ?>>９０代
                            </p>
                            <div class="form-group">
                                <textarea class="form-control" name="comment" rows="5"><?= $rs['comment'] ?></textarea>
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