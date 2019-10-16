<!DOCTYPE html>
<html lang="jp">

<head>
    <meta charset="utf-8">
    <title>イベント予約</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Noto+Sans+JP" rel="stylesheet">
    <style>
        body {
            background: #f3f3f3;
        }

        .container {
            font-family: "Noto Sans JP";
            margin-top: 60px;
        }

        h1 {
            margin-bottom: 50px;
            text-align: center;
        }

        button {
            margin-top: 30px;
        }

        p input {
            margin: 5px;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-xs-offset-4 col-xs-4">
                <h1>イベント予約</h1>
                <form method="post" action="e_insert.php">
                    <div class="form-group">
                        <input type="text" class="form-control" id="name" name="name" placeholder="お名前">
                    </div>
                    <div class="form-group">
                        <input type="email" class=" form-control" id="email" name="email" placeholder="メールアドレス">
                    </div>
                    <div class="form-group">
                        <select type="radio" class="form-control" id="event" name="event">
                            <option id="event" value="pilates">10/28 ピラティス</option>
                            <option id="event" value="yoga">11/5 ヨガ</option>
                            <option id="event" value="training">11/12 体幹トレーニング</option>
                            <option id="event" value="course">11/22 健康講座</option>
                        </select>
                    </div>
                    <p class="radio">ご年齢<br>
                        <input type="radio" name="age" value="10代">１０代
                        <input type="radio" name="age" value="20代">２０代
                        <input type="radio" name="age" value="30代">３０代
                        <input type="radio" name="age" value="40代">４０代
                        <input type="radio" name="age" value="50代">５０代
                        <input type="radio" name="age" value="60代">６０代
                        <input type="radio" name="age" value="70代">７０代
                        <input type="radio" name="age" value="80代">８０代
                        <input type="radio" name="age" value="90代">９０代
                    </p>
                    <div class="form-group">
                        <textarea class="form-control" name="comment" rows="5" placeholder="ご質問等"></textarea>
                    </div>
                    <button type="submit" class="btn btn-success btn-block">送信</button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>