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
                         <a class="nav-link" href="login.php">SignIn</a>
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
<form style="width:500px; margin:auto" method = 'POST' action = 'user_verification.php'>
<br><br>
<br>
<div class="form-floating mb-3">
  <input type="email" class="form-control" id="floatingInput" name ="email" placeholder="name@example.com">
  <label for="floatingInput">Email address</label>
</div>
<div class="form-floating mb-3">
  <input type="password" class="form-control" id="floatingPassword" name ="pass" placeholder="Password">
  <label for="floatingPassword">Password</label>
</div>
<br>
<center>
<button type="submit" class="btn btn-warning">Log In</button>
</center>
<br><br><br>



</form>
</main>

<footer>
<br><br><br><br><br><br>
        <?php
        include "footer.php";?>
</footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script> 
</body>
</html>