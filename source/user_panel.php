<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel ="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel = "stylesheet" href = '../css/style.css'>
</head>

<body>
    <header>
   
    <div class ="container-fluid p-0">
            <nav class="navbar navbar-expand-lg bg-dark ">
                <div class="container-fluid">
                  <a class="navbar-brand" href="#">CarPool</a>
                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <div class="navbar-nav ms-auto"></div>
                        <ul class="navbar-nav">
                        <li class="nav-item">
                         <a class="nav-link "  href="index.php">Home</a>
                        </li>
                        <li class="nav-item">
                         <a class="nav-link" href="signout.php">SignOut</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="#">Contact</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link " href="#" >AboutUs</a>
                        </li>
                        </ul>
                    
                    </div>
                </div>
            </nav>
        </div>
      

    </header>
  
<main>
<?php
    require 'db.php';
    session_start();
    $email = $_SESSION['email'];
    $query = "SELECT * FROM user_reg WHERE email = '$email'";
    $result = mysqli_query($c,$query);
    $value = mysqli_fetch_assoc($result);
    ?>
<div class="d-flex flex-column">
            <div class="p-3 bg-dark text-white">
                <div class="d-flex flex-row">
                    <center><h1 class="display-4"><?php
                    echo($value["username"]);
                    ?> </h1></center>
                </div>
            </div>
        </div>
        <br>
        <br><br><br>
        <center>
<button type="button" class="btn  btn-lg btn-warning" onclick= "location.href='userpanel_startpool.php'">Start Pooling</button>
<button type="button" class="btn  btn-lg btn-warning"  onclick= "location.href='joinpool.php'">Join Pool</button>
</center>
       


     




<footer><br><br><br><br><br><br><br><br><br><br><br><br>
<?php
        include "footer.php";?>

    </footer>
    

   
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script> 
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
</body>
</html>
