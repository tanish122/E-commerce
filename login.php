<?php
require "includes/common.php";
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Signup</title>
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
            <center>
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h2 class="text-warning">Login to make a purchase</h2>
            </div>
            <div class="panel-body">
                <form method="POST" action="login_submit.php">
                    <div class="form-group">
                        <label for="email">E-mail</label>
                        <input type="email" class="form-control" name="email">
                         <label for="password">Password</label>
                         <input type="password" class="form-control" name="password"><br>
                        
                         <input type="submit" value="Login" class="btn btn-primary">
                        
                       </div> 
                </form>
                </div>
            
            <div class="panel-footer>">
                <p>Don't have an account? Register</p>
               
            </div>
        
            </div>
                </center>
            </div>
        <?php
        include 'includes/footer.php';
        ?>
    </body>
</html>
