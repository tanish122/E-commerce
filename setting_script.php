<?php
include 'includes/common.php';
if(!isset($_SESSION['email'])){
    header('location:index.php');
}
$password1=$_POST['old'];
$password=$_POST['new'];
$password2=$_POST['confirm'];
$p=$_SESSION['password'];
 if(strlen($password)<6){
     echo "Password should have at-least 6 characters.";
 }
 elseif ($password!=$password2) {
     echo "Entered Passwords are different. ";
 
}
elseif (md5($password1)!=$p){
    echo 'Incorrect Password.';
    
}
 else {
     $p2= md5($p);
    $query="UPDATE users SET password='$p2'";
    mysqli_query($con, $query);
    $_SESSION['password']=$p2;
    header('location:settings.php');
}
 
 
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

