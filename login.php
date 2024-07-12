<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/login.css" rel="stylesheet">
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
                <input type="text" placeholder="ユーザーID" name="lid" class="input_lid" /><br>
                <input type="password" placeholder="PW" name="lpw" class="input_lpw" /><br>
                <input type="submit" value="LOGIN" class="btn_login" />
            </form>
            <a href="start.php"><button type="submit" class="btn_signup">Sign Up</button></a>
        </div>

        <?php include("html/footer.html"); ?>

        <!-- <script src="js/jquery-2.1.3.min.js"></script>
        <script src="js/player-script.js"></script> -->
    </div>
</body>

</html>