<?php
session_start();
require_once('funcs.php');
loginCheck();

$id = $_GET['id']; //?id~**を受け取る
$pdo = db_conn();

// データ登録SQL作成
$stmt = $pdo->prepare('SELECT * FROM cheerpark_an_table4 WHERE id=:id;');
$stmt->bindValue(':id', $id, PDO::PARAM_INT);
$status = $stmt->execute();

// データ表示
if ($status == false) {
    sql_error($stmt);
} else {
    $row = $stmt->fetch();
}
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">
    <!-- <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/player-style.css">
    <link href="css/bootstrap.min.css" rel="stylesheet"> -->
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Edit</title>

    <!-- Favicon -->
    <link rel="icon" href="img/hat.jpg" />

    <!-- 絵文字 -->
    <script src="https://kit.fontawesome.com/77e6d61b62.js" crossorigin="anonymous"></script>
</head>

<body>
    <div class="wrapper">
        <header>
            <div class="navbar-header"><a class="navbar-brand" href="home.php">ホーム</a></div>
        </header>

        <div class="main">
            <form method="POST" action="update.php" enctype="multipart/form-data">
                <legend>[編集]</legend>

                <div class="input_file">
                    <label id="label_imgfile" for="imgfile">動画を選択</label>
                    <input type="file" name="imgfile" id="picture" accept="image/*" class="">
                </div>

                <div class="output_file">
                    <?php if (!empty($row['imgfile'])) : ?> <!-- データに画像があればエンコードしたものを表示 -->
                        <img src="data:image/jpeg;base64,<?= base64_encode($row['imgfile']) ?>" alt="image" id="preview" class="">
                    <?php else : ?> <!-- データに画像がなければ空のsrcを持つimg要素を作成 -->
                        <img src="" id="preview" class="" alt="image">
                    <?php endif; ?>
                    <!-- else追加→既存画像なしでもimg要素を作成→jsでpreviewを操作できる -->
                </div>

                <div class="note-group">
                    <label>Note</label>
                    <textArea name="note" rows="4" cols="40"><?= $row['note'] ?></textArea><br>
                </div>

                <div class="genre_group">
                    <select id="genre" name="genre" required>
                        <option value="">ジャンルを選択して下さい</option>
                        <!-- ジャンルリスト -->
                        <?php
                        $genres = ["プレー集", "トレーニング", "試合後インタビュー", "食", "海外文化", "移籍関連", "その他"];
                        foreach ($genres as $genre) {
                            $selected = $row['genre'] == $genre ? 'selected' : '';
                            echo "<option value='$genre' $selected>$genre</option>";
                        } ?>
                    </select><br>
                </div>
                <input type="submit" value="送信">
                <input type="hidden" name="id" value="<?= $id ?>">
            </form>
        </div>

        <?php include("html/base.html"); ?>
        <?php include("html/footer.html"); ?>

        <!-- <script src="js/jquery-2.1.3.min.js"></script>
        <script src="js/player-script.js"></script> -->
    </div>
</body>

</html>