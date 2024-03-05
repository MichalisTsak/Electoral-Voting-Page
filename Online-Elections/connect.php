<?php

$conn = mysqli_connect("localhost","name","password","database_name"); // Make the proper changes

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
?>
