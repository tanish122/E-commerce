<?php
require "includes/common.php";
if(!isset($_SESSION['email'])){
    header('location:index.php');
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
        <title>Settings</title>
         <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <script src="bootstrap/js/jquery-3.2.1.min.js" type="text/javascript"></script>
        <script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>  
          <link href="style.css" rel="stylesheet" type="text/css">
    </head>
    <body>
       <?php
    
        ?>
        <div class="container sign">
            <div class="col-lg-6 col-lg-offset-3">
                <h1>Change Password</h1>
                <form method="POST" action="setting_script.php">
                    <div class="form-group">
                        <input type="password" class="form-control" name="old" placeholder="Old Password">
                        
                            
                    </div>
                     <div class="form-group">
                         <input type="password" class="form-control" name="new" placeholder="New Password">
                        
                            
                    </div>
                     <div class="form-group">
                         <input type="password" class="form-control" name="confirm" placeholder="Confirm Password">
                        
                            
                    </div>
                    <div class="form-group">
                        <input type="submit" value="Change" class="btn btn-primary"> 
                    </div>
                </form>
            </div>
        </div>
        <?php
        include 'includes/footer.php';
        ?>
    </body>
</html>

