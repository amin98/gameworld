<?php
session_start();

  include('include/dBconnection.php');

    if(empty($_SESSION['selectedGames']))
    {
        $_SESSION['selectedGames'] = array();
    }
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <title>Products Page</title>

</head>
<body>
    <form action="addtocart.php" method="POST">
    <?php


        include('include/header.php'); 

    foreach($games as $game) {

        if(in_array($game['gameId'], $_SESSION['selectedGames']))
        {
            $checked = " checked=\"checked\"";
        }
        else
        {
            $checked = "";
        }
    ?>
    <div id="main-container">
        <div class="product-item">
            <h2 title="gameId = <?php echo $game['gameId'];?>">
                <?php echo $game['gameTitle'];?>
            </h2>
            <img src="<?php echo $game['gameImage'];?>"/>
            <p class="game-priceTag">&euro;
                <?php echo $game['gamePrice'];?>
            </p>

            <input type='hidden' name='game' value='<?php echo $game['gameId']; ?>' />
            <?php 
            echo "<input type='submit' name='mySubmit' value='Order'/>";
            echo "<input type='checkbox' name='games[]' value='" . $game['gameId'] . "'" . $checked . " />"; 
                ?>
            <?php
        echo "</div>";
        echo "</div>";
}      
?>
        <input id="order-button" type='submit' name='mySubmit' value='Order'/>
        <!--<input id="clear-button" type='submit' name="clearSession" value="Clear"/> -->
    
    </form>
     
      <?php include('include/footer.php'); ?>
</body>

</html>