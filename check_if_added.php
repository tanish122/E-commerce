<?php
function check_if_added_to_cart($item_id){
    
    $con= mysqli_connect("localhost","root", "" , "store") or die(mysqli_errno($con));
$user_id=$_SESSION['id'];
$query="SELECT * FROM users_items WHERE item_id='$item_id' AND user_id ='$user_id' and status='Added to cart'";
$result= mysqli_query($con, $query);
if(mysqli_num_rows($result)>=1){
    return 1;
}
else    {
    return 0;

}
}
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

