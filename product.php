<?php
include "includes/common.php";

?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Welcome</title>
         <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <script src="bootstrap/js/jquery-3.2.1.min.js" type="text/javascript"></script>
        <script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>  
          <link href="style.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        <?php
 include 'includes/header.php';
        include 'check_if_added.php';
        ?>
        <div class="container sign">
            <div class="jumbotron">
                <h1>Welcome to our Lifestyle Store!</h1><br><p>We have the best cameras, watches and shirts for you. No need to hunt
around, we have all in one place.</p>
            </div>
            <div class="row text-center">
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <img src="img/d1.jpg" alt="d1">
                        <div class="caption">
                            <h3>Nikon</h3>
                            
                            <p>Price: Rs.36,000.00</p>
                               <?php if(!isset($_SESSION['email'])) {?>
                            <a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a>
                               <?php } else { 
                                   if(check_if_added_to_cart(1)){?>
                                       <a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>
                                       <?php
                                   }
                                else {
                                   ?>
                            <a href="cart-add.php?id=1" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                               <?php }
                            } ?>
 
                            
                                    
                        </div>
                        
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <img src="img/camera.jpg" alt="d1">
                        <div class="caption">
                            <h3>Camera</h3>
                            <p>Price: Rs.46,000.00</p>
                            <?php if(!isset($_SESSION['email'])) {?>
                            <a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a>
                               <?php } else { 
                                   if(check_if_added_to_cart(2)){?>
                                       <a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>
                                       <?php
                                   }
                                else {
                                   ?>
                            <a href="cart-add.php?id=2" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                               <?php }
                            } ?>
                        </div>
                        
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <img src="img/d2.jpg" alt="d1">
                        <div class="caption">
                            <h3>Sony</h3>
                            <p>Price: Rs.56,000.00</p>
                             <?php if(!isset($_SESSION['email'])) {?>
                            <a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a>
                               <?php } else { 
                                   if(check_if_added_to_cart(3)){?>
                                       <a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>
                                       <?php
                                   }
                                else {
                                   ?>
                            <a href="cart-add.php?id=3" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                               <?php }
                            } ?>
                        </div>
                        
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <img src="img/d3.jpg" alt="d1">
                        <div class="caption">
                            <h3>Sony Coolpix</h3>
                            <p>Price: Rs.36,000.00</p>
                             <?php if(!isset($_SESSION['email'])) {?>
                            <a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a>
                               <?php } else { 
                                   if(check_if_added_to_cart(4)){?>
                                       <a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>
                                       <?php
                                   }
                                else {
                                   ?>
                            <a href="cart-add.php?id=4" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                               <?php }
                            } ?>
                        </div>
                        
                    </div>
                </div>
            
            </div>
            <div class="row text-center">
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <img src="img/1.jpg" alt="d1">
                        <div class="caption">
                            <h3>Titan #1</h3>
                            <p>Price: Rs.6,000.00</p>
                           <?php if(!isset($_SESSION['email'])) {?>
                            <a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a>
                               <?php } else { 
                                   if(check_if_added_to_cart(5)){?>
                                       <a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>
                                       <?php
                                   }
                                else {
                                   ?>
                            <a href="cart-add.php?id=5" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                               <?php }
                            } ?>
                        </div>
                        
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <img src="img/2.jpg" alt="d1">
                        <div class="caption">
                            <h3>Titan #2</h3>
                            <p>Price: Rs.46,000.00</p>
                            <?php if(!isset($_SESSION['email'])) {?>
                            <a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a>
                               <?php } else { 
                                   if(check_if_added_to_cart(6)){?>
                                       <a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>
                                       <?php
                                   }
                                else {
                                   ?>
                            <a href="cart-add.php?id=6" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                               <?php }
                            } ?>
                        </div>
                        
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <img src="img/watch.jpg" alt="d1">
                        <div class="caption">
                            <h3>Titan #3</h3>
                            <p>Price: Rs.5,600.00</p>
                            <?php if(!isset($_SESSION['email'])) {?>
                            <a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a>
                               <?php } else { 
                                   if(check_if_added_to_cart(7)){?>
                                       <a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>
                                       <?php
                                   }
                                else {
                                   ?>
                            <a href="cart-add.php?id=7" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                               <?php }
                            } ?>
                        </div>
                        
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <img src="img/3.jpg" alt="d1">
                        <div class="caption">
                            <h3>Titan #4</h3>
                            <p>Price: Rs.36,000.00</p>
                             <?php if(!isset($_SESSION['email'])) {?>
                            <a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a>
                               <?php } else { 
                                   if(check_if_added_to_cart(8)){?>
                                       <a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>
                                       <?php
                                   }
                                else {
                                   ?>
                            <a href="cart-add.php?id=8" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                               <?php }
                            } ?>
                        </div>
                        
                    </div>
                </div>
            
            </div>
            <div class="row text-center">
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <img src="img/shirt.jpg" alt="d1">
                        <div class="caption">
                            <h3>Shirt #1</h3>
                            <p>Price: Rs.3,000.00</p>
                            <?php if(!isset($_SESSION['email'])) {?>
                            <a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a>
                               <?php } else { 
                                   if(check_if_added_to_cart(9)){?>
                                       <a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>
                                       <?php
                                   }
                                else {
                                   ?>
                            <a href="cart-add.php?id=9" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                               <?php }
                            } ?>
                        </div>
                        
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <img src="img/s2.jpg" alt="d1">
                        <div class="caption">
                            <h3>Shirt #1</h3>
                            <p>Price: Rs.6,000.00</p>
                            <?php if(!isset($_SESSION['email'])) {?>
                            <a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a>
                               <?php } else { 
                                   if(check_if_added_to_cart(10)){?>
                                       <a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>
                                       <?php
                                   }
                                else {
                                   ?>
                            <a href="cart-add.php?id=10" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                               <?php }
                            } ?>
                        </div>
                        
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <img src="img/s1.jpg" alt="d1">
                        <div class="caption">
                            <h3>Shirt #2</h3>
                            <p>Price: Rs.5,000.00</p>
                           <?php if(!isset($_SESSION['email'])) {?>
                            <a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a>
                               <?php } else { 
                                   if(check_if_added_to_cart(11)){?>
                                       <a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>
                                       <?php
                                   }
                                else {
                                   ?>
                            <a href="cart-add.php?id=11" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                               <?php }
                            } ?>
                        </div>
                        
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <img src="img/s3.jpeg" alt="d1">
                        <div class="caption">
                            <h3>Shirt #3</h3>
                            <p>Price: Rs.3,000.00</p>
                             <?php if(!isset($_SESSION['email'])) {?>
                            <a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a>
                               <?php } else { 
                                   if(check_if_added_to_cart(12)){?>
                                       <a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>
                                       <?php
                                   }
                                else {
                                   ?>
                            <a href="cart-add.php?id=12" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                               <?php }
                            } ?>
                        </div>
                        
                    </div>
                </div>
            
            </div>
            
           
            
        </div>
        <?php
        include 'includes/footer.php';
        ?>
    </body>
</html>
