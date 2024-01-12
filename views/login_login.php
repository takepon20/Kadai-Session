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
  <h4>Please login</h4>
  <form name="form1" action="../controllers/login_act.php" method="post">
   Email Address：<input type="text" name="lid">
   Pass Word    ：<input type="text" name="lpw">
       <input type="submit"   value="LOGIN">
  </form>
 </main>

 <footer>© 2006-2023 Gs News Inc.</footer>
</body>
</html>