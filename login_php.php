<?php
session_start();
include "db_connect.php";
?>
<!-- <!doctype html>
<html>
</head>
<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
</html> -->
<?php


// If form submitted, insert values into the database.
if (isset($_POST['username'])){
      // removes backslashes
$user = stripslashes($_REQUEST['username']);

}
      //escapes special characters in a string
$user= mysqli_real_escape_string($conn,$user);
$pass = stripslashes($_REQUEST['password']);
$pass = mysqli_real_escape_string($conn,$pass);

//Checking is user existing in the database or not
$query = "SELECT * FROM `user_information` WHERE username='$user' and password='$pass'"; //this needs to change and we need to add   password_verify() to the login
$result = mysqli_query($conn,$query) or die(mysql_error());
$rows = mysqli_num_rows($result);


if($rows==1){
        $_SESSION['username'] = $user;

        header("Location: posts.php");
}
else {



  header("Location: posts.php");


}
?>
