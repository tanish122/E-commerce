<?php
require "includes/common.php";
if (isset($_SESSION['email']))
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
        <title>Lifestyle</title>
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <script src="bootstrap/js/jquery-3.2.1.min.js" type="text/javascript"></script>
        <script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>  
          <link href="style.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        <?php
        include 'includes/header.php';
        ?>
             <div class="content">
            <div class="banner">
                 <center>
                <div class="innerban">
                    <div class="bancontent">
                        <h1>We sell Lifestyle</h1>
                        <p>Flat 40% OFF on premium brands</p>
                        <a class="btn btn-danger active" href="product.php">Shop Now</a>
                    </div>
                </div>
                    </center>
               
                
            </div>
            
        </div>
        <?php
        include 'includes/footer.php';
        ?>
            
        
    </body>
</html>

