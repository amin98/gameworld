<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <title>Homepage Gameworld</title>
</head>

<body>

    <?php include('include/header.php'); ?>

    <div id="bannerHomePage">
        <div class="image-text">Welcome on Gameworld!<br><br> Buy the best games right here!</div>
        <img id="dragonBallZpic" src="images/gamingGif.gif">
    </div>

    <div id="platform-container">
        <ul>
            <li><a href="products.php?catid=1&catname=PS4">Playstation 4</a></li>
            <li><a href="products.php?catid=2&catname=Xbox One">Xbox One</a></li>
            <li><a href="products.php?catid=3&catname=PC">PC</a></li>
        </ul>
    </div>

    <?php include('include/footer.php'); ?>

</body>
</html>