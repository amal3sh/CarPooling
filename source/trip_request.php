<?php
include "db.php";
session_start();
$email = $_SESSION['email'];
$t_id = $_POST['tid'];
$seat = $_POST['seat'];

$query = "SELECT * FROM user_reg WHERE email = '$email' ";
$result = mysqli_query($c,$query);
$value = mysqli_fetch_assoc($result);
$name = $value['username'];
$mob=$value['mobile'];

$query = "INSERT INTO request(email,trip_id,seat_no,uname,mobile,flag) VALUES ('$email','$t_id',$seat,'$name',$mob,0)";
mysqli_query($c,$query);
header("location:http://localhost/CarPool/source/joinpool.php");
?> 