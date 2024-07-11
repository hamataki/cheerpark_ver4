<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">

    <script src="https://cdn.tailwindcss.com"></script>
    <title>Start画面</title>

    <!-- Favicon -->
    <link rel="icon" href="img/hat.jpg" />

    <!-- 絵文字 -->
    <script src="https://kit.fontawesome.com/77e6d61b62.js" crossorigin="anonymous"></script>
</head>

<body>
    <div class="text-center">
        <header>
            <nav class="navbar navbar-default">START</nav>
        </header>

        <div class="main">
            <div class="button-area">
                <a href="./signup.php"><button type="submit" class="m-1 p-0.5 border rounded-md">Plaeyer</button></a>
                <a onclick="location.href='./.php'"><button type="submit" class="m-1 p-0.5 border rounded-md">Sporter</button></a>
            </div>
        </div>
        
        <?php include("html/footer.html"); ?>

        <!-- <script src="js/jquery-2.1.3.min.js"></script>
        <script src="js/player-script.js"></script> -->
    </div>
</body>

</html>