<?php
//require 'db.php';
//include 'db.php';
require 'PHPMailerAutoload.php';

$c=mysqli_connect("localhost","root","");	
mysqli_select_db($c,"carpool");

require 'credential.php';
$name = $_POST['nam'];
$email = $_POST['email'];
$pass = $_POST['pass'];
$mob = $_POST['mobile'];
$gender = $_POST['gender'];
$house = $_POST['house'];
$district = $_POST['district'];
$state = $_POST['stat'];
$pin = $_POST['pin'];
$image = $_POST['image'];





$token = 'qwertzuiopasdfghjklyxcvbnmQWERTZUIOPASDFGHJKLYXCVBNM0123456789';
				$token = str_shuffle($token);
                $token = substr($token, 0, 6);
  


$query ="INSERT INTO user_reg(`username`, `email` , `mobile`, `house_name`, `district`, `userstate` , `pin`, `gender`, `flag` , `token` , `userimage`) VALUES ('$name', '$email', $mob, '$house', '$district', '$state', $pin, '$gender', 0, '$token', '$image')";
//$query ="INSERT INTO user_reg(`username`, `email` , `mobile`, `house_name`, `district`, `userstate` , `pin`, `gender`, `flag` , `token` , `userimage`) VALUES ('check', 'check@mail.com', 1234567890, 'checkhouse', 'district', 'state', 123456, 'mal', 0, 'token', 12121)";

mysqli_query($c,$query);
echo $mob;			
			



			include_once "PHPMailer/PHPMailer.php";
			 $mail = new PHPMailer;
                $mail->SMTPDebug = 2; 
                $mail->isSMTP();
                $mail->Host = 'smtp.gmail.com';
                $mail->SMTPAuth = true;
                $mail->Username = EMAIL;
                $mail->Password = PASS;
                $mail->SMTPSecure = "tls";
                $mail->Port = 587;
                $mail->setFrom(EMAIL, 'Carpooling');
                $mail->addAddress($_POST['email']);
                $mail->Subject = "Please verify email!";
                $mail->isHTML(true);
                $mail->Body = "
                    Your email verification : $token
                ";

              
        if ($mail->send())
                {
                    session_start();
                    $_SESSION['email'] = $email;
                    echo $_SESSION['email'];
                    
                   
                    $query = "INSERT INTO login(email,pass) VALUES ('$email', '$pass')";

                	
                    mysqli_query($c,$query);
                    header("Location:http://localhost/CarPool/source/enter_otp.php");
                }	
                else
                {
                    echo 'Error';
                }








 ?>
