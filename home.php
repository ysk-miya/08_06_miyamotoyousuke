    <!DOCTYPE html>
    <html lang="ja">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />
        <link rel="stylesheet" href="style.css" />
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
                    <h1 class="card-text midashi display-4">メディカルフィットネススタジオ</h1>
                    <p class="sub">あなたのためのオーダーメイドトレーニング</p>
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
                <a class="eventButton" href="e_index.php">イベント予約</a>
            </button>
            <button class="manage"><a href="e_select.php">管理者ページ</a></button>
            <h1 class="display-4 text-center">イベント一覧</h1>
            <div class="card-deck">

                <div class="card">
                    <img class="card-img-top" src="img/pilates2.jpeg" alt="Card image cap" width="200" height="250" />
                    <div class="card-body">
                        <h3 class="card-title">Pilates</h3>
                        <h5 class="card-title">ピラティス</h5>
                        <p class="card-text">胸式呼吸を行いながら体の奥の筋肉を鍛えます。負担が少なく、ゆっくりとした動作を行います。体の奥の筋肉を意識して綺麗な姿勢を作りましょう！</p>
                        <a href="#!" class="btn btn-secondary">Pilatesとは？</a>
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
                        <a href="#!" class="btn btn-secondary">Yogaとは？</a>
                    </div>
                </div>

                <div class="card">
                    <img class="card-img-top" src="img/corecon.jpeg" alt="Card image cap" width="200" height="250" />
                    <div class="card-body">
                        <h3 class="card-title">Coreconditioning</h3>
                        <h4 class="card-title">コアコンディショニング</h4>
                        <p class="card-text">
                            お店はイエローを基調とした華やかな装飾で、まさに黄金のお店（！）です
                        </p>
                        <a href="#!" class="btn btn-secondary">黄金のお店</a>
                    </div>
                </div>
            </div>


            <h1 class="display-4 text-center">Access & Map</h1>
            <div class="card">
                <div class="card-body">アクセス</br>福岡県福岡市中央区大名一丁目XXXXXXXX</div>
                <img class="card-img-bottom" src="./images/map.png" alt="Card image cap" />
            </div>
            <h1 class="display-4 text-center">Golden Baumkuchen</h1>
            <p class="text-center">Created and maintained by Maki Mochizuki.</p>
            <p class="text-center">Please send feedback via email.</p>
            <p class="text-center">Check out my Blog and Facebook or Twitter.</p>
        </div>
        </div>


    </html>
    </body>

    </html>