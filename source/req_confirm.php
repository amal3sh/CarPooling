<?php
require "db.php";
require 'PHPMailerAutoload.php';
require 'credential.php';
$id = $_GET['id'];
$seat = $_GET['seat'];
$m = $_GET['mob'];
session_start();
$email = $_SESSION['email'];
$query = "SELECT * FROM pooling WHERE trip_id = '$id' ";
$result = mysqli_query($c,$query);
$value = mysqli_fetch_assoc($result);
$poolid = $value['pool_id'];


$query = "INSERT INTO pool_detail(pool_id, email) VALUES ('$poolid','$email')";
mysqli_query($c,$query);
$query = "SELECT * FROM user_reg WHERE mobile = $m";
$result = mysqli_query($c,$query);
$value = mysqli_fetch_assoc($result);
$mailid = $value['email'];

$query = "UPDATE trip SET seatno = seatno - $seat WHERE trip_id = '$id'";
mysqli_query($c,$query);
 $query = "UPDATE request SET flag = 1 WHERE trip_id = '$id' ";
 mysqli_query($c,$query);

$query = "SELECT (mobile) FROM user_reg WHERE email = '$email'";
$result = mysqli_query($c,$query);
$value = mysqli_fetch_assoc($result);
$mob=$value['mobile'];






 
include_once "PHPMailer/PHPMailer.php";
			 $mail = new PHPMailer;
                $mail->SMTPDebug = 2; 
                echo $mailid;
                $mail->isSMTP();
                $mail->Host = 'smtp.gmail.com';
                $mail->SMTPAuth = true;
                $mail->Username = EMAIL;
                $mail->Password = PASS;
                $mail->SMTPSecure = "tls";
                $mail->Port = 587;
                $mail->setFrom(EMAIL, 'Carpooling');
                $mail->addAddress($mailid);
                $mail->Subject = "Request Accepted";
                $mail->isHTML(true);
                $mail->Body = "
                   Trip Host Contact Number  : $mob
                ";

                header("Location:http://localhost/CarPool/source/userpanel_startpool.php");

?>