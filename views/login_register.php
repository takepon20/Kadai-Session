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
            <li><a href="login_home.php"    >home</a></li>
            <li><a href="login_follow.php"  >follow</a></li>
            <li><a href="login_register.php">register</a></li>
            <li><a href="login_login.php"   >login</a></li>
        </ul>
    </nav>
</header> 

<main>
  <h4>Please enter your email address</h4>
  <form method="POST" action="../models/insert_register.php">
    <label>Nickname：     <input type="text" name="name" value=""></label>
    <label>Email Address：<input type="text" name="lid"  value=""></label>
    <label>Pass Word：    <input type="text" name="lpw"  value=""></label>
    <input type="submit" value="Register">
  </form>
</main>

<footer>© 2006-2023 Gs News Inc.</footer>

</body>
</html>