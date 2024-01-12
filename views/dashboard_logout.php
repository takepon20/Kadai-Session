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
 <h4>Do you want to log out?</h4>
 <form method="POST" action="../controllers/logout_act.php">
    <div class="jumbotron">
     <input type="submit" value="LOGOUT">
    </div>
 </form>
</main>
<footer>© 2006-2023 Gs News Inc.</footer>
</body>
</html>