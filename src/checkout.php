<?php  
    include('include/dBconnectionCheckout.php');
?>
<html lang="en">

<body>
    <?php include('include/header.php');?>

    <table id="checkout-table">
        <thead>
            <tr>
                <th>Image</th>
                <th>Game</th>
                <th>Description</th>
                <th>Price</th>
            </tr>
        </thead>
        <tbody>
            <form action="clearSession.php" method="POST">
                <input id="clear-button" type='submit' name="clearSession" value="Clear" />
            </form>
            <?php
                if(!empty($_SESSION['selectedGames']))   
                {
                    foreach ($games as $key => $checkoutValue)
                    {
                        //$games[] = $checkoutValue; 
                        echo "<tr>";
                        echo "<td>";
                        echo "<img src='" . $checkoutValue['gameImage'] . "'width='145' height='190'";
                        echo "</td>";
                        echo "<td>";
                        echo $checkoutValue['gameTitle'];
                        echo "</td>";
                        echo "<td>";
                        echo $checkoutValue['gameDescription'];
                        echo "</td>";
                        echo "<td>";
                        ?>
            &euro;
            <?php
                        echo $checkoutValue['gamePrice'];
                        echo "</td>";
                        echo "</tr>";
                        
                    }
                }
            ?>
        </tbody>
        <tfoot>
            <tr>
                <td colspan="4">
                    TOTAL: &nbsp; &euro;240
                </td>
            </tr>
        </tfoot>
    </table>


    <?php include('include/footer.php');?>

</body>

</html>