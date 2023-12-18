<html lang="en">
<!--header file-->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <title>Homepage Gameworld</title>
</head>


<body>
   

    <a id="logo" href="index.php">
        Gameworld
    </a>
    <?php

    $catname = "";

    if(!isset($_GET['catname']))
    {
        $catname = "";
    }
    else
    {
        $catname = $_GET['catname'];
    }
    ?>

    <header id="header">
        <nav id="main-nav">
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="products.php?catname=Products">Products</a></li>
                <li><a href="checkout.php?catname=Shopping Cart">Checkout</a></li>
                <li><a href="contact.php?catname=Contact Us">Contact Us</a></li>
                <li><a href="about.php?catname=About Us">About Us</a></li>
            </ul>
        </nav>
        <h1 class="category-logo"><?php echo $catname; ?></h1>
    </header>