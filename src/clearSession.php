<?php
session_start();
if (isset($_POST['clearSession'])) {
    session_destroy();
    header("location:checkout.php");
    exit;
}
header('location:checkout.php');
?>