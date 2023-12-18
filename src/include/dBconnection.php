<?php

    $host = "db";
    $user = "root";
    $pass = "secret";
    $database = "gameworld";

    $connection = new mysqli($host, $user, $pass, $database) or die ($connection->error);

    if (isset($_GET['catid'])) {
        $categoryId = $_GET['catid'];
    }
    else {
        $categoryId = "";
    }

    $selectedGamesQuery = 'SELECT * FROM `gamecategory2`, `games` WHERE `gamecategory2`.`gameCategoryId` = `games`.`gameCategoryId`';

    if (isset($categoryId) && $categoryId !="") {
        $selectedGamesQuery .=  ' AND `gamecategory2` . `gameCategoryId` = "'.$categoryId.'"';
    }
    
    $selectedGamesQuery .= "ORDER BY `games`.`gamePrice` ASC";

    $result = mysqli_query($connection, $selectedGamesQuery);

    while ($row = mysqli_fetch_assoc($result)) {

        $games[] = $row;
    }    

?>
