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
                         <a class="nav-link" href="signout.php">SignIn</a>
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
        <br>
        <center>
       
<div class="container">
<div class="row">
     <div class = "col-md-4 col-sm-12">
        <form style="width:300px; margin:auto" method = 'POST' action = 'userpool.php'>



    <div class="form-floating mb-3">
    <input type="text" class="form-control" name = "start" placeholder="Your Name">
    <label for="floatingPassword">Leaving From</label>
    </div> 
    <div class="form-floating mb-3">
    <input type="text" class="form-control" name = "destination" placeholder="Your Name">
    <label for="floatingPassword">Going To</label>
    </div> 
    <div class = "form-floating mb-3">
    <input type="date" class = "form-control" name = "date">

    <label for="floatingPassword">When You Want To Go?</label>
    </div>
    <br>
    <div class ="form-floating mb-3">
    <input type="text" class="form-control" name = "seat" placeholder="Your Name">
    <label for="floatingPassword">Free Seats</label> 
    </div> 
    <center>
    <button type="submit" class="btn btn-warning btn-lg">Pool</button>
    <button type="reset" class="btn btn-outline-warning btn-lg">Reset</button>
    </center>
    </form>
    </div>
    <?php
    require "db.php";
    
    
   //$query = "SELECT (trip_id,starts,destination,dates,seatno) FROM trip ";
   $query = "SELECT * FROM trip where flag=0 and email='$email'";
   $result = mysqli_query($c,$query);



?>
<div class ="col-md-8 col-sm-12">
<div class="container">
  <div class="row">
    <div class="col-12">
      <table class="table table-bordered">
        <thead>
          <tr>
            <th scope="col">Trip ID</th>
            <th scope="col">Destination</th>
            <th scope="col">Date</th>
            <th scope="col">No: Of Seats</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
            <?php include "db.php";
            if(mysqli_num_rows($result) >= 1)
            {
            while($rows = mysqli_fetch_assoc($result))
            {
                
            ?>
          <tr>
            
            <td><?php echo $rows['trip_id'];?></td>
            <td><?php echo $rows['destination'];?></td>
            <td><?php echo $rows['dates'];?></td>
            <td><?php echo $rows['seatno'];?></td>
            <td>
              
            <button type="button" class="btn btn-danger" ><a href="trip_delete.php?id=<?php echo $rows['trip_id']; ?>" style =text-decoration:none color:inherit>Delete </button>
            </td>
          </tr>
          <?php 
            }
        }
       
            ?>
          
        </tbody>
      </table>
    </div>
  </div>
</div>





<div class="container">
  <div class="row">
    <div class="col-12">
      <table class="table table-bordered">
        <thead>
          <tr>
            <th scope="col">Trip ID</th>
            <th scope="col">Name</th>
            <th scope="col">Contact</th>
            <th scope="col">Seats</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <?php
        $query= "SELECT trip_id FROM request WHERE flag= 0";
        $result  = mysqli_query($c,$query);
        

        if(mysqli_num_rows($result) >= 1)
        {
        while($rows = mysqli_fetch_assoc($result))
        {
          
          
          $query = "SELECT * FROM request WHERE  flag = 0";
          $result = mysqli_query($c,$query);
          while($value = mysqli_fetch_assoc($result))
          {

        ?>
        <tbody>
          <tr>
            <td><?php 
            echo $value['trip_id'] ?></td>
            <td><?php
            echo $value['uname'];
            ?>
          
            
            </td>
            <td><?php echo $value['mobile']; ?> </td>
            <td><?php echo $value['seat_no']; ?></td>
            <td>
              <button type="button" class="btn btn-success"><a href="req_confirm.php?id=<?php echo $rows['trip_id']; ?>&seat=<?php echo $value['seat_no']; ?>&mob=<?php echo $value['mobile']; ?>" style =text-decoration:none color:inherit>Accept</button>
              <button type="button" class="btn btn-warning"><a href="req_delete.php?tid=<?php echo $rows['trip_id']; ?>&tmob=<?php echo $value['mobile']; ?>" style =text-decoration:none color:inherit>Ignore</button>
            
            </td>
          </tr>
          <?php 
          }
          }
          } ?>
        
        </tbody>
      </table>
    </div>
  </div>
</div>

</div>
<footer>
  <br><br><br><br><br><br><br><br><br>
<?php
        include "footer.php";?>

    </footer>
    

   
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script> 
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
</body>
</html>
