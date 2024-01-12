<?php
// 会員登録を行う
// POSTデータを取得
$name = $_POST['name'];
$lid  = $_POST['lid'];
$lpw  = $_POST['lpw'];

// DBに接続する関数
require_once('../controllers/funcs.php');
$pdo = news_conn();

// データ登録SQL作成
$stmt = $pdo->prepare(
    'INSERT INTO
        kadai_person(name,lid,lpw,date)
     VALUES (:name,:lid,:lpw,sysdate());'
);

// 数字の場合INT 文字の場合STR
$stmt->bindValue(':name',$name,PDO::PARAM_STR);
$stmt->bindValue(':lid', $lid, PDO::PARAM_STR);
$stmt->bindValue(':lpw', $lpw, PDO::PARAM_STR);

$status = $stmt->execute(); //実行

// データ登録処理後
if ($status === false) {
    //*** function化する！******\
    $error = $stmt->errorInfo();
    exit('SQLError:' . print_r($error, true));
} else {
    //*** function化する！*****************
    header('Location: ../views/login_login.php');
    exit();
}
?>