<?php
require "includes/common.php";
if(!isset($_SESSION['email'])){
    header('location:login.php');
}
$user_id=$_SESSION['id'];
$query="SELECT * FROM users_items INNER JOIN users ON users_items.user_id=users.id INNER JOIN items ON users_items.item_id=items.id";
$result=mysqli_query($con, $query);
$b=mysqli_num_rows($result);

$d=0;
$sum=0;
if ($b==0)
{
    echo 'Add items to the cart first!';
}
else{
    while($b){
       $row= mysqli_fetch_array($result);
       $cost=$row['price'];
       $sum=$sum+$cost;
       $b--;
    }
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
        <title>Cart</title>
         <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <script src="bootstrap/js/jquery-3.2.1.min.js" type="text/javascript"></script>
        <script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>  
          <link href="style.css" rel="stylesheet" type="text/css">
       
    </head>
    <body>
         <?php
 include 'includes/header.php';
       
        ?>
        <div class="col-lg-4 col-lg-offset-4 sign">
        <table class="table table-striped" type="">
            <tbody>
                <tr><th>Item Number</th><th>Item Name</th><th>Price</th><th></th></tr>
                <?php 
               $query1="SELECT * FROM users_items INNER JOIN users ON users_items.user_id=users.id INNER JOIN items ON users_items.item_id=items.id";
                $result1=mysqli_query($con, $query1);
                $c=mysqli_num_rows($result);
               while ($c){?>
               
                <tr><td><?php echo ++$d; ?></td><td><?php $row1= mysqli_fetch_array($result1); echo $row1['pname'];?></td><td><?php echo "RS.".$row1['price'];?></td><td><a href="cart-remove.php?id=<?php echo $row1['id'] ?>" class="btn btn-danger"> Remove</a></td></tr>
                <?php    
                $c--; } ?>
                <tr><th></th><th>Total</th><th>Rs.<?php echo $sum; ?></th><th ><a href="success.php" class="btn btn-primary">Confirm Order</a></th></tr>
            </tbody>
        </table>
        </div> <br><br>
       <?php
        include 'includes/footer.php';
        ?>
    </body>
</html>
