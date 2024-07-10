<?php
session_start();
require_once('funcs.php');
loginCheck();

// DB接続します
$pdo = db_conn();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $note = $_POST['note'];
    $genre = $_POST['genre'];
    $id = $_POST['id'];

    if (isset($_FILES['imgfile']) && $_FILES['imgfile']['error'] === UPLOAD_ERR_OK) {

        // ['imgfile']['tmp_name']は画像のパス  // file_get_contents() は、指定したファイルの内容全体を文字列として読み込むPHP関数
        $content = file_get_contents($_FILES['imgfile']['tmp_name']);

        //データ登録SQL作成
        $stmt = $pdo->prepare('UPDATE cheerpark_an_table4 SET imgfile = :imgfile, note = :note, genre = :genre, date = now() WHERE id = :id');
        // 画像データをバイナリ形式でデータベースに挿入
        $stmt->bindValue(':imgfile', $content, PDO::PARAM_LOB);

    } else {
        $stmt = $pdo->prepare('UPDATE cheerpark_an_table4 SET note = :note, genre = :genre WHERE id = :id');
        
    }
    // バインド変数を用意
    $stmt->bindValue(':note', $note, PDO::PARAM_STR);
    $stmt->bindValue(':genre', $genre, PDO::PARAM_STR);
    $stmt->bindValue(':id',     $id,     PDO::PARAM_INT);

    // 実行
    $status = $stmt->execute(); //true or false

    // データ登録処理後
    if ($status === false) {
        sql_error($stmt);
    } else {
        redirect('home.php');
    };
};