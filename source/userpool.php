<?php
session_start();
$email=$_SESSION['email'];
include "db.php";
$start = $_POST['start'];
$dest = $_POST['destination'];
$dat=$_POST['date'];
$seat=$_POST['seat'];
$token = 'qwertzuiopasdfghjklyxcvbnmQWERTZUIOPASDFGHJKLYXCVBNM0123456789';
				$token = str_shuffle($token);
                $token = substr($token, 0, 4);


$query="INSERT INTO trip (trip_id,starts,destination,dates,seatno,email,flag) VALUES ('$token','$start','$dest','$dat',$seat,'$email',0                  )";
mysqli_query($c,$query);


$query = "INSERT INTO pooling(trip_id) VALUES ('$token')";
mysqli_query($c,$query);
header("location:http://localhost/CarPool/source/user_panel.php");
?>