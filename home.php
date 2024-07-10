<?php
require_once('funcs.php');

// DB接続します
$pdo = db_conn();

// データ取得SQL作成
$stmt = $pdo->prepare("SELECT * FROM cheerpark_an_table4");
$status = $stmt->execute();

// データ表示
$view = "";
if ($status == false) {
    //execute（SQL実行時にエラーがある場合）
    $error = $stmt->errorInfo();
    exit("ErrorQuery:" . $error[2]);
} else {
    //Selectデータの数だけ自動でループしてくれる
    //FETCH_ASSOC=http://php.net/manual/ja/pdostatement.fetch.php
    while ($result = $stmt->fetch(PDO::FETCH_ASSOC)) {

        // 取得した画像バイナリデータをbase64で変換!!!
        $imgfile = "data:image/jpeg;base64," . base64_encode($result["imgfile"]);

        $view .= '<ul>';
        $view .= '<li>';
        $view .= '<a href="edit.php?id=' . $result['id'] . '">';
        $view .= $result['date'] . ' # ' . $result['genre'];
        $view .= '<img src="' . $imgfile . '" alt="uploaded image">';
        $view .= '</a>';

        $view .= '<a href="delete.php?id=' . $result['id'] . '">';
        $view .= '<i class="fa-solid fa-trash"></i>';
        $view .= '</a>';
        $view .= '</li>';
        $view .= '</ul>';
        $view .= '<br>';
    };
};
?>


<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">
    <!-- <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/player-style.css">
    <link href="css/bootstrap.min.css" rel="stylesheet"> -->
    <title>投稿一覧</title>

    <!-- Favicon -->
    <link rel="icon" href="img/hat.jpg" />

    <!-- 絵文字 -->
    <script src="https://kit.fontawesome.com/77e6d61b62.js" crossorigin="anonymous"></script>
</head>

<body>
    <div class="wrapper">
        <header>
            <nav class="navbar navbar-default">投稿一覧</nav>
            <div class="search_group">
                <select id="genre_select">
                    <option value="all">ALL</option>
                    <option value="プレー集">プレー集</option>
                    <option value="トレーニング">トレーニング</option>
                    <option value="インタビュー">試合後インタビュー</option>
                    <option value="食">食</option>
                    <option value="海外文化">海外文化</option>
                    <option value="移籍関連">移籍関連</option>
                    <option value="その他">その他</option>
                </select>
            </div>
        </header>

        <div class="main">
            <div>
                <div class="list_view"><?= $view ?></div>
            </div>
        </div>

        <?php include("base.html"); ?>
        <?php include("footer.html"); ?>

        <!-- <script src="js/jquery-2.1.3.min.js"></script>
        <script src="js/player-script.js"></script> -->
    </div>
</body>

</html>