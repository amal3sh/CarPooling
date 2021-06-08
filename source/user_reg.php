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
      

    </header>
  
<main>


<form style="width:500px; margin:auto" method = 'POST' action = 'user_insert.php'>

<br><br><br>

<div class="form-floating mb-3">
<input type="text" class="form-control" name = "nam" placeholder="Your Name">
  <label for="floatingPassword" required>Name</label>
</div>    
<div class="form-floating mb-3">
  <input type="email" class="form-control" id="floatingInput" name ="email" placeholder="name@example.com">
  <label for="floatingInput" required  pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$">Email address</label>
</div>
<div class="form-floating mb-3">
  <input type="password" class="form-control" id="floatingPassword" name ="pass" placeholder="Password">
  <label for="floatingPassword" required pattern=".{8,}" title="Eight or more characters">Password</label>
</div>
<div class="form-floating mb-3">
  <input type="password" class="form-control" id="floatingPassword" name ="passc" placeholder="Password">
  <label for="floatingPassword" required pattern=".{8,}" title="Eight or more characters">Confirm Password</label>
</div>
<div class="form-floating mb-3">
<input type="text" required class="form-control" name = "mobile" placeholder="Your Name">
  <label for="floatingInput">Mobile</label>
</div>
<div class="form-check form-check-inline mb-3">
  <input class="form-check-input" type="radio" name="gender" id="inlineRadio1" value="male">
  <label class="form-check-label" for="inlineRadio1">Male</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="gender" id="inlineRadio2" value="female">
  <label class="form-check-label" for="inlineRadio2">Female</label>
</div>
<div class="form-floating mb-3">
<input type="text" required class="form-control" name = "house" placeholder="Your Name">
  <label for="floatingInput">House Name</label>
</div>
<div class="form-floating mb-3">
<input type="text" required class="form-control" name = "district" placeholder="Your Name">
  <label for="floatingInput">District</label>
</div>
<div class="form-floating mb-3">
<input type="text" required class="form-control" name = "stat" placeholder="Your Name">
  <label for="floatingInput">State</label>
</div>
<div class="form-floating mb-3">
<input type="text" required class="form-control" name = "pin" placeholder="Your Name">
  <label for="floatingInput">Pincode</label>
</div>
<div class="mb-3">
  <label for="formFile" class="form-label">Upload Image</label>
  <input class="form-control" type="file" id="formFile" name="image" value="">
</div>
<br>
<center>
<button type="submit" class="btn btn-warning">Sign Up</button>
</center>
<br><br><br>


</form>









</main><footer><br><br><br>
<?php
        include "footer.php";?>

    </footer>

   
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script> 
</body>
</html>