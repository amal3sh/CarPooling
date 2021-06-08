<?php
require 'db.php';
$id = $_GET['tid'];

$m = $_GET['tmob'];
$query = "DELETE FROM request WHERE trip_id = '$id' AND mobile = $m";
mysqli_query($c,$query);
header("Location:http://localhost/CarPool/source/userpanel_startpool.php");
?>