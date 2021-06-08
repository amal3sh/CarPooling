<?php
require 'db.php';
$email = $_POST['email'];
$pass = $_POST['pass'];
$query = "SELECT * FROM login WHERE email = '$email' AND pass = '$pass'";
$result = mysqli_query($c,$query);
$row=mysqli_fetch_array($result,MYSQLI_ASSOC);

      
    $count = mysqli_num_rows($result);
    
    $row=mysqli_fetch_assoc($result);

    if($count == 1)
      {
         session_start();
         $_SESSION['email'] = $email;
          
          $query=" SELECT flag FROM user_reg WHERE email = '$email'  ";
          $result = mysqli_query($c, $query);
          $value = mysqli_fetch_assoc($result);
          

         
        
         if($value["flag"]==0)
         {

        header("location:http://localhost/CarPool/source/enter_otp.php");
         }
      	else
      	 {
      	 	
       header("location:http://localhost/CarPool/source/user_panel.php");
     	 }
    }
    else
    echo("invalid userid or password"); 	 

