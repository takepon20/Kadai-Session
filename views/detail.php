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
            <li><a href="home.php"        >home</a></li>
            <li><a href="follow.php"      >follow</a></li>
            <li><a href="post.php"        >post</a></li>
            <li><a href="profile.php"     >profile</a></li>
            <li><a href="register.php">registration</a></li>
            <li><a href="login.php"       >login</a></li>
            <li><a href="logout.php"      >logout</a></li>
        </ul>
    </nav>
 </header> 

<main>
 <iframe src=" <?= $result['url']  ?>" width="90%" height="700" frameborder="0" allowfullscreen></iframe>
</main>

<footer>© 2006-2023 Gs News Inc.</footer>

</body>
</html>