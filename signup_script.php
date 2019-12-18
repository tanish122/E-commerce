<?php

require 'includes/common.php';
 $em= $_POST['email'];
 $regrex_email="/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/";
 if (preg_match($regrex_email, $em)){
     echo "Incorrect email.";
 
 }
 $password=$_POST['password'];
 if(strlen($password)<6){
     echo "Password should have at-least 6 characters.";
 }
 $email= mysqli_real_escape_string($con,$em);
 $a= mysqli_real_escape_string($con,$password);
 $pass=md5($a);
 $query_2="SELECT id FROM users WHERE email='$em'";
 $result= mysqli_query($con, $query_2);
 if(mysqli_num_rows($result)>0){
     die(mysqli_error('User already exist'));
 }
 else {
     $name= mysqli_real_escape_string($con,$_POST['name']);
     $contact=mysqli_real_escape_string($con,$_POST['contact']);
     $city=mysqli_real_escape_string($con,$_POST['city']);
     $address=mysqli_real_escape_string($con,$_POST['add']);
     $query_1="insert into users(name,email,password,contact,city,address) values('$name','$em','$pass','$contact','$city','$address')";
     mysqli_query($con, $query_1) or die(mysqli_error($con));
     $_SESSION['id']=mysqli_insert_id($con);
     $_SESSION['email']=$email;
     header('location:product.php');
 }
 
