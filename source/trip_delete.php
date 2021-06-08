<?php
include "db.php";
$t_id = $_GET['id'];
$query = "DELETE FROM trip WHERE trip_id = '$t_id' ";
mysqli_query($c,$query);
$query = "DELETE FROM pooling WHERE trip_id = '$t_id' ";
mysqli_query($c,$query);
$query = "DELETE FROM request WHERE trip_id = '$t_id' ";
mysqli_query($c,$query);
 header("location:http://localhost/CarPool/source/userpanel_startpool.php");
?>