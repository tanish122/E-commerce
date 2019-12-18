<?php
require "includes/common.php";
if(isset($_SESSION['email'])){
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
        <title>SignUp</title>
         <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <script src="bootstrap/js/jquery-3.2.1.min.js" type="text/javascript"></script>
        <script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>  
          <link href="style.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        <?php
        include 'includes/header.php';
        ?>
        <div class="row">
            <div class="col-lg-6 col-lg-offset-3">
           
                
                <div class="sign">
                    
                   
                <h1>SIGN UP</h1>
                 </div>
                <form method="POST" action="signup_script.php">
                <div class="form-group">
                    <input type="text" class="form-control" name="name" placeholder="Name"required="true">
                    
                </div>
                    <div class="form-group">
                        <input type="email" class="form-control" name="email" placeholder="Email" required="true">
                    
                </div>
                    <div class="form-group">
                        <input type="password" class="form-control" name="password" placeholder="Password" required="true">
                    
                </div>
                    <div class="form-group">
                        <input type="tel" class="form-control" name="contact" placeholder="Contact" required="true">
                    
                </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="city" placeholder="City" required="true">
                    
                </div>
                    <div class="form-group">
                    <input type="text" class="form-control" name="add" placeholder="Address" required="true">
                    
                </div>
                    <div class="form-group">
                        <input type="submit" value="Submit" class="btn btn-primary">    
                    </div>
                    </form>
                 </div>
            </div>
           <?php
        include 'includes/footer.php';
        ?>
            
        
       
    </body>
</html>

