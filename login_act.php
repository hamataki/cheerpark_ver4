<?php
session_start();
require_once('funcs.php');
$pdo = db_conn();

//POST値を受け取る
$lid = $_POST['lid'];
$lpw = $_POST['lpw'];



// データ登録SQL作成
// gs_user_tableに、IDとWPがあるか確認する。
$stmt = $pdo->prepare('SELECT * FROM cheerpark_user_table4 WHERE lid = :lid AND lpw = :lpw');
$stmt->bindValue(':lid', $lid, PDO::PARAM_STR);
$stmt->bindValue(':lpw', $lpw, PDO::PARAM_STR);
$status = $stmt->execute();

// SQL実行時にエラーがある場合STOP
if ($status === false) {
    sql_error($stmt);
}

// 抽出データ数を取得
$val = $stmt->fetch();

//if(password_verify($lpw, $val['lpw'])){ //* PasswordがHash化の場合はこっちのIFを使う
if ($val['id'] != '') {

    //Login成功時 該当レコードがあればSESSIONに値を代入
    $_SESSION['chk_ssid'] = session_id();
    $_SESSION['kanri'] = $val['kanri_flg'];

    header('Location: post.php');
} else {
    //Login失敗時(Logout経由)
    header('Location: login.php');
}
exit();
