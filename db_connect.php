<?php
$servername = "localhost";
$username = "root";
$password = "phpwork";
$dbname = "cms";

$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  $connected_no = "not connnected to db";
  echo "<script type='text/javascript'>console.log('$connected_no');</script>";
}

else {
  $connected_yes = "connnected to db";
  echo "<script type='text/javascript'>console.log('$connected_yes');</script>";
}
?>
