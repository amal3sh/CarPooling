<?php
include 'db.php';
$c=mysqli_connect("localhost","root","");	
mysqli_select_db($c,"carpool");
$otp = $_POST['otp'];
session_start();
$email = $_SESSION['email'];

$query = "SELECT token FROM user_reg WHERE email = '$email' ";
$result = mysqli_query($c,$query);
$value = mysqli_fetch_assoc($result);
//echo $value['token'];
if($value['token'] == $otp)
{
    $query = "UPDATE user_reg SET flag = 1 WHERE email = '$email' ";
    mysqli_query($c,$query);
    header("location:http://localhost/CarPool/source/user_panel.php");
    
}
else
{
    echo "invalid id";
}