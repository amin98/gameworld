<?php
session_start();

/*
echo "<pre>";
var_dump($_POST);
echo "</pre>";
die();
*/
/*
echo "<pre>";
var_dump($_SESSION);
echo "</pre>";
//die();*/

if(!empty($_POST['game']))  
{   
    $_SESSION['selectedGames'][] .= $_POST['game'];
}

if(!empty($_POST['games']))  
{   
    foreach($_POST['games'] as $key => $id)
    {
        $_SESSION['selectedGames'][] = $id;
    }
}


/*
echo "<pre>";
var_dump($_SESSION);
echo "</pre>";
//die();*/

/*if (isset($_POST['clearSession'])) {
    session_destroy();
    header("location:products.php");
    exit;
}*/

header("location:checkout.php");

?>