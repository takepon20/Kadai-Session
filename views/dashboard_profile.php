<?php
// 指定のIDでデータに接続
$id = $_GET['id'];
require_once('../controllers/funcs.php');
$pdo = person_conn();
// データ登録SQL作成
$stmt = $pdo->prepare('SELECT * FROM kadai_person WHERE id = :id;');
$stmt->bindValue(':id', $id, PDO::PARAM_INT);
$status = $stmt->execute();
// データを表示
$view = '';
if ($status === false) {
    $error = $stmt->errorInfo();
    exit('SQLError:' . print_r($error, true));
} else {
    // 成功した場合
    $result = $stmt->fetch();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <title>Document</title>
</head>
<body>

<header>
    <h2>News Post</h2>
    <!-- グローバルメニュー -->
    <nav>
        <ul>
            <li><a href="dashboard_home.php"    >home</a></li>
            <li><a href="dashboard_follow.php"  >follow</a></li>
            <li><a href="dashboard_post.php"    >post</a></li>
            <li><a href="dashboard_profile.php" >profile</a></li>
            <li><a href="dashboard_logout.php"  >logout</a></li>
        </ul>
    </nav>
</header> 

<main>
 <h4>Please enter your profile</h4>
 <form method="POST" action="insert_person.php">
    <label>name       ：<input type="text"   name="name"         value="<?= $result['name']        ?>"></label>
    <label>nationality：<input type="text"   name="nationality"  value="<?= $result['nationality'] ?>"></label>
    <label>residence  ：<input type="text"   name="residence"    value="<?= $result['residence']   ?>"></label>
    <label>sex        ：<input type="text"   name="sex"          value="<?= $result['sex']         ?>"></label>
    <label>age        ：<input type="number" name="age"          value="<?= $result['age']         ?>"></label>
    <label>introduction：<input type="text"  name="introduction" value="<?= $result['introduction']?>"></label>
   <input type="submit" value="save">
 </form>
</main>

<footer>© 2006-2023 Gs News Inc.</footer>

</body>
</html>