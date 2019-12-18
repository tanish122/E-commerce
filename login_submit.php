<?php
require 'includes/common.php';
$email= mysqli_real_escape_string($con, $_POST['email']);
$a= mysqli_real_escape_string($con, $_POST['password']);
$password=md5($a);
$query= "SELECT email,id FROM users WHERE email='$email' AND password='$password'";
$result= mysqli_query($con, $query);
if (mysqli_num_rows($result)==0)
    {
    echo "No user Exist";
}
else 
{   
    $row=mysqli_fetch_array($result);
    $_SESSION['email']=$row['email'];
    $_SESSION['id']= $row['id'];
    $_SESSION['password']=$password;
    header('location:product.php');
    
}
 
