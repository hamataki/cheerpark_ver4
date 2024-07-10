<?php
session_start();
require_once('funcs.php');
loginCheck();

// POSTデータ取得
$imgfile = $_FILES['imgfile'];
$note = $_POST['note'];
$genre = $_POST['genre'];

// DB接続します
$pdo = db_conn();

// ファイルが送信されているか、エラーがないかをチェック
if ($_SERVER['REQUEST_METHOD'] != 'POST') {
} else {
    if (isset($_FILES['imgfile']) && $_FILES['imgfile']['error'] === UPLOAD_ERR_OK) {

        //['imgfile']['tmp_name']は画像のパス
        //file_get_contents() は、指定したファイルの内容全体を文字列として読み込むPHP関数
        $content = file_get_contents($_FILES['imgfile']['tmp_name']);

        //データ登録SQL作成
        $stmt = $pdo->prepare('INSERT INTO
        cheerpark_an_table4( id, imgfile, note, genre, date )
        VALUES( NULL, :imgfile, :note, :genre, now() ) ');

        // バインド変数を用意
        // 画像データをバイナリ形式でデータベースに挿入
        $stmt->bindValue(':imgfile', $content, PDO::PARAM_LOB);
        $stmt->bindValue(':note', $note, PDO::PARAM_STR);
        $stmt->bindValue(':genre', $genre, PDO::PARAM_STR);

        // 実行
        $status = $stmt->execute(); //true or false

        // データ登録処理後
        if ($status === false) {
            sql_error($stmt);
        } else {
            //home.phpへリダイレクト
            redirect('home.php');
        };
    };
};
