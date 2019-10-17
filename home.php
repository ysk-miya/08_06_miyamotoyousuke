    <!DOCTYPE html>
    <html lang="ja">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />
        <link rel="stylesheet" href="style.css" />
        <link rel="stylesheet" href="slick-theme.css" type="text/css">
        <link rel="stylesheet" href="slick.css" type="text/css">
        <link rel="stylesheet" href="sample.css" type="text/css">
        <script type="text/javascript" src="http://code.jquery.com/jquery-3.1.0.min.js"></script>
        <script src="slick.js" type="text/javascript"></script>
        <script src="sample.js" type="text/javascript"></script>
        <title>スタジオHOME</title>
        <style>
            .eventButton {
                background-color: gray;
                color: white;
            }

            .manage {
                float: right;
                background-color: white;
                color: blue;
            }
        </style>
    </head>

    <body>
        <div class="container">
            <div class="card">
                <img class="card-img" src="img/DT3Q1042.jpg" alt="Card image" width="960px" height="500px" />
                <div class="card-img-overlay">
                    <h1 class="card-text font-italic display-4">メディカルフィットネススタジオ</h1>
                    <h3 class="sub">あなたのためのオーダーメイドトレーニング</h3>
                </div>
            </div>
            <button type="button" class="btn btn-secondary" data-container="body" data-toggle="popover" data-placement="top" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">
                パーソナルメニュー
            </button>

            <button type="button" class="btn btn-secondary" data-container="body" data-toggle="popover" data-placement="right" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">
                グループメニュー
            </button>

            <button type="button" class="btn btn-secondary" data-container="body" data-toggle="popover" data-placement="bottom" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">
                料金表
            </button>

            <button type="button" class="btn btn-secondary" data-container="body" data-toggle="popover" data-placement="left" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">
                <a class="eventButton" href="e_index.php">イベント予約</a></button>
            <input type="button" class="manage btn btn-danger" value="管理者ページ" onclick="gate();">
            <h1 class=" display-4 text-center">イベント一覧</h1>
            <div class="card-deck">

                <div class="card">
                    <img class="card-img-top" src="img/pilates2.jpeg" alt="Card image cap" width="200" height="250" />
                    <div class="card-body">
                        <h3 class="card-title">Pilates</h3>
                        <h5 class="card-title">ピラティス</h5>
                        <p class="card-text">胸式呼吸を行いながら体の奥の筋肉を鍛えます。体幹やインナーマッスルを鍛えてバランスのとれた体にすることを目的としているため、高齢者や体に不調のある人でも無理なく取り組めるエクササイズです。体の奥の筋肉を意識して綺麗な姿勢を作りましょう！</p>
                        <a href="https://www.studio-yoggy.com/welcome/pilates/" class="btn btn-secondary">
                            Pilatesとは？</a>
                    </div>
                </div>

                <div class="card">
                    <img class="card-img-top" src="img/yoga.jpeg" alt="Card image cap" width="200" height="250" />
                    <div class="card-body">
                        <h3 class="card-title">Yoga</h3>
                        <h5 class="card-title">ヨガ</h5>
                        <p class="card-text">
                            ヨガの目的は「苦痛からの解放＝快適で安定した心を作ること」にあります。ポーズでは体の歪みが矯正され、柔軟性や体力が向上するなどの効果がありますが、そこにゆったりした呼吸や瞑想を組み合わせることで、集中力が高まり、おだやかで揺るぎない精神状態を作りだすことができます。
                        </p>
                        <a href="https://www.npo-yoga.com/about_yoga/mokuteki.html" class="btn btn-secondary">Yogaとは？</a>
                    </div>
                </div>

                <div class="card">
                    <img class="card-img-top" src="img/corecon.jpeg" alt="Card image cap" width="200" height="250" />
                    <div class="card-body">
                        <h3 class="card-title">Coreconditioning</h3>
                        <h4 class="card-title">コアコンディショニング</h4>
                        <p class="card-text">
                            コアコンディショニング(コアコン)は、姿勢や動きの要であるコア(体幹)の機能を発育発達過程にそって再学習していくプログラムである。 誰もが赤ちゃんの時に一度は経験している動作をもとにした無理なく自分で行える理にかなったエクササイズである。
                        </p>
                        <a href="http://jcca-net.com/corecon/hatsuhatsu.html" class="btn btn-secondary">コアコンディショニングとは？</a>
                    </div>
                </div>
            </div>


            <h1 class="display-4 text-center">Access & Map</h1>
            <div class="card">
                <div class="card-body">アクセス<br>福岡県福岡市中央区大名2丁目5-31<br>☎︎０９２-１２３４-５６７８</div>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3323.6130749464155!2d130.39083441511335!3d33.58939408073435!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x35419187b6ad6417%3A0x9b8b619adc53b86f!2z56aP5bKh5biC5Lit5aSu5Yy65b255omA!5e0!3m2!1sja!2sjp!4v1571244295983!5m2!1sja!2sjp" width="auto" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
            </div>
            <h3 class="display-4 text-center">メディカルフィットネススタジオ</h3>
            <p class="text-center">パーソナルトレーニング</p>
            <p class="text-center">グループセッション</p>
            <p class="text-center">健康講座など</p>
        </div>
        </div>


    </html>
    <!-- 管理者ページにアクセスするパスワード部分 -->
    <script type="text/javascript">
        function gate() {
            let UserInput = prompt("パスワードを入力して下さい:", "");
            location.href = UserInput + ".php";
        }
    </script>
    </body>

    </html>