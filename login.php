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
                ID:<input type="text" name="lid" />
                PW:<input type="password" name="lpw" />
                <input type="submit" value="LOGIN" />
            </form>
        </div>

        <footer>
            Copyright © 2024 CheerParK
            <i class="fa-brands fa-x-twitter"></i>
            <!-- <a href="https://gsacademy.jp/"><img src="img/hat.jpg" class="aicon" alt=""></a> -->
        </footer>
        <!-- <script src="js/jquery-2.1.3.min.js"></script>
        <script src="js/player-script.js"></script> -->
    </div>
</body>

</html>