<!DOCTYPE html>
<html>
<body>
<!--  //Starting the session to get the session variable from last page-->

<?php

session_start();
$totalValue = $_POST('txtTotal');

echo "The total value is ".$totalValue.".";
?>

</body>
</html>

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

