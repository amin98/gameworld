<?php  
    session_start();

    /*
    echo "<pre>";
    var_dump($_SESSION);
    echo "</pre>";
    die();*/
   
    if(!empty($_SESSION['selectedGames']))
    {
       // die("I'm in file " . __FILE__ . " on line " . __LINE__);    

    
        $host = "db";
        $user = "root";
        $pass = "secret";
        $database = "gameworld";

        $connection = new mysqli($host, $user, $pass, $database) or die ($connection->error);

        $selectedGamesQuery = 'SELECT * FROM `gamecategory2`, `games` WHERE `gamecategory2`.`gameCategoryId` = `games`.`gameCategoryId`';


        $selectedGamesQuery .= ' AND `gameId` IN (';

        /*
        echo "<pre>";
        var_dump($_SESSION);
        echo "</pre>";
        die();*/
        

        $n = 0;
        foreach($_SESSION['selectedGames'] as $index => $gameId)
        {
            $selectedGamesQuery .= $gameId;
            if($n < (count($_SESSION['selectedGames']) - 1))
                {
                    $selectedGamesQuery .= ',';
                }
                $n++;
        }

        $selectedGamesQuery .= ')';    

        $result = mysqli_query($connection, $selectedGamesQuery);

      // die($selectedGamesQuery);

        while ($row = mysqli_fetch_assoc($result)) {
                $games[] = $row;
        } 
    }

?>