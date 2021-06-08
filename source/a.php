<?php
$mysqli = new mysqli("localhost","root","","carpool");

// Check connection
if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  
}
else
{
echo "set";
}
?>