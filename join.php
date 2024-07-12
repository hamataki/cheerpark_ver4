<?php
session_start();
require_once('funcs.php');
loginCheck();
?>

<?php
// POSTデータ取得
$name   = $_POST['name'];
$email  = $_POST['email'];
$lid = $_POST['lid'];
$lpw = $_POST['lpw'];
$kanri_flg = 0;
$life_flg = 0;

// DB接続します
require_once('funcs.php');
$pdo = db_conn();

// データ登録SQL作成
$stmt = $pdo->prepare('INSERT INTO cheerpark_user_table4(id, name, email, lid, lpw, kanri_flg, life_flg, date)
VALUES(NULL, :name, :email, :lid, :lpw, :kanri_flg, :life_flg, now())');
$stmt->bindValue(':name', $name, PDO::PARAM_STR);
$stmt->bindValue(':email', $email, PDO::PARAM_STR);
$stmt->bindValue(':lid', $lid, PDO::PARAM_STR);
$stmt->bindValue(':lpw', $lpw, PDO::PARAM_STR);
$stmt->bindValue(':kanri_flg', $kanri_flg, PDO::PARAM_INT);
$stmt->bindValue(':life_flg', $life_flg, PDO::PARAM_INT);
$status = $stmt->execute();

// データ登録処理後
if ($status == false) {
    sql_error($stmt);
} else {
    redirect('login.php');
};
