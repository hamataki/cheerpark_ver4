<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">
    <!-- <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/player-style.css">
    <link href="css/bootstrap.min.css" rel="stylesheet"> -->
    <title>Login</title>

    <!-- Favicon -->
    <link rel="icon" href="img/hat.jpg" />

    <!-- 絵文字 -->
    <script src="https://kit.fontawesome.com/77e6d61b62.js" crossorigin="anonymous"></script>
</head>

<body>
    <div class="wrapper">
        <header>
            <nav class="navbar navbar-default">LOGIN</nav>
        </header>

        <div class="main">
            <!-- lLOGINogin_act.php は認証処理用のPHPです。 -->
            <form name="form1" action="login_act.php" method="post">
                <input type="text" placeholder="ID" name="lid" />
                <input type="password" placeholder="PW" name="lpw" />
                <input type="submit" value="LOGIN" />
            </form>
        </div>

        <?php include("footer.html"); ?>

        <!-- <script src="js/jquery-2.1.3.min.js"></script>
        <script src="js/player-script.js"></script> -->
    </div>
</body>

</html>