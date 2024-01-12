<?php

session_start();
$lid = $_POST['lid'];
$lpw = $_POST['lpw'];

require_once('funcs.php');
$pdo = person_conn();

// kadai_personに、IDとWPがあるか確認する。
$stmt = $pdo->prepare('SELECT * FROM kadai_person WHERE lid = :lid AND lpw = :lpw; ');
$stmt ->bindValue(':lid', $lid, PDO::PARAM_STR);
$stmt ->bindValue(':lpw', $lpw, PDO::PARAM_STR);
$status = $stmt->execute();

//3. SQL実行時にエラーがある場合STOP
if($status === false) {
    sql_error($stmt);
}

//4. 抽出データ数を取得
$val = $stmt->fetch();

//if(password_verify($lpw, $val['lpw'])){ //* PasswordがHash化の場合はこっちのIFを使う
if($val['id'] != '') {
    //Login成功時 該当レコードがあればSESSIONに値を代入
    $_SESSION['chk_ssid'] = session_id();
    $_SESSION['name']     = $val['name'];
    header('Location: ../views/dashboard_home.php');
} else {
    //Login失敗時(Logout経由)
    header('Location: ../views/login_login.php');
}
exit();

?>