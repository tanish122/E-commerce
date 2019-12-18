<?php
require "includes/common.php";
if (!isset($_SESSION['email']))
{
    header('location:product.php');
}
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Success</title>
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <script src="bootstrap/js/jquery-3.2.1.min.js" type="text/javascript"></script>
        <script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>  
          <link href="style.css" rel="stylesheet" type="text/css">
       
    </head>
    <body>
       <?php
        include 'includes/header.php';
        ?>
        <div class="container sign">
            <div class="jumbotron">
                <center>
                <h2>Your order is confirmed. Thank you for shopping
                    with us.<a href="product.php">Click here</a> to purchase any other item.</h2>
                    </center>
            </div>
        </div>
        <?php
        include 'includes/footer.php';
        ?>
    </body>
</html>
