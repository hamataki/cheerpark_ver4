<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">

    <script src="https://cdn.tailwindcss.com"></script>
    <title>Post</title>

    <!-- Favicon -->
    <link rel="icon" href="img/hat.jpg" />

    <!-- 絵文字 -->
    <script src="https://kit.fontawesome.com/77e6d61b62.js" crossorigin="anonymous"></script>
</head>

<body>
    <div class="text-center">
        <header>
            <nav class="navbar navbar-default">今日はなにを伝えたい？</nav>
        </header>

        <div class="main">
            <form action="insert.php" method="post" enctype="multipart/form-data">
                <div class="input_file">
                    <label id="label_imgfile" for="imgfile">動画を選択</label>
                    <input accept="image/*" id="imgfile" type="file" name="imgfile" required>
                    <div class="preview"></div>
                </div>

                <div class="note-group">
                    <label for="note">Note</label>
                    <textarea id="note" class="note-control" name="note" required></textarea>
                </div>

                <div class="genre_group">
                    <select id="genre_select" name="genre" required>
                        <option value="">ジャンルを選択して下さい</option>
                        <option value="プレー集">プレー集</option>
                        <option value="トレーニング">トレーニング</option>
                        <option value="インタビュー">試合後インタビュー</option>
                        <option value="食">食</option>
                        <option value="海外文化">海外文化</option>
                        <option value="移籍関連">移籍関連</option>
                        <option value="その他">その他</option>
                    </select>
                </div>

                <div class="post-group">
                    <button type="post" class="btn_post">
                        <i class="fa-solid fa-circle-plus">投稿</i>
                    </button>
                </div>
            </form>
        </div>

        <?php include("html/base.html"); ?>
        <?php include("html/footer.html"); ?>

        <!-- <script src="js/jquery-2.1.3.min.js"></script>
        <script src="js/player-script.js"></script> -->
    </div>
</body>

</html>