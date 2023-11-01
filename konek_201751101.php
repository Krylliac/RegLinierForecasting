<?php
$con=mysqli_connect("localhost","root","","db201751101");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

mysqli_select_db($con,"db201751101");

?>