<?php
include 'includes/common.php';
$id=$_GET['id'];
$user_id=$_SESSION['id'];
$query="DELETE FROM users_items WHERE user_id='$user_id' AND item_id='$id'";
mysqli_query($con, $query);
header('location:cart.php');