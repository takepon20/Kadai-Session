<?php
// newsDBに接続する
function news_conn(){
    try {
        $db_name = 'gs_db'; //データベース名
        $db_id   = 'root'; //アカウント名
        $db_pw   = ''; //パスワード：MAMPは'root'
        $db_host = 'localhost'; //DBホスト
     return $pdo = new PDO('mysql:dbname=' . $db_name . ';charset=utf8;host=' . $db_host, $db_id, $db_pw);
    } catch (PDOException $e) {
    exit('DB Connection Error:' . $e->getMessage());
    }
}

//personDBに接続する
function person_conn(){
    try {
        $db_name = 'gs_db'; //データベース名
        $db_id   = 'root'; //アカウント名
        $db_pw   = ''; //パスワード：MAMPは'root'
        $db_host = 'localhost'; //DBホスト
     return $pdo = new PDO('mysql:dbname=' . $db_name . ';charset=utf8;host=' . $db_host, $db_id, $db_pw);
    } catch (PDOException $e) {
    exit('DB Connection Error:' . $e->getMessage());
    }
}

function redirect($file_name)
{
    header('Location: $file_name');
    exit();
}


// ログインチェク処理 loginCheck()
function loginCheck(){
    if (  !isset($_SESSION['chk_ssid'])  ||  $_SESSION['chk_ssid']  !==  session_id()  ) {
        exit('LOGIN ERROR');
    } else {
        // ログイン済み処理
        session_regenerate_id(true);
        $_SESSION['chk_ssid'] = session_id();
    }
}
?>
