<?php

$user = $_POST["username"];
$pass = $_POST["password"];
$firstname = $_POST["firstName"];
$lastname = $_POST["lastName"];
$email_address = $_POST["email_address"];
//hash the password
// $pass = password_hash($password, PASSWORD_BCRYPT); fix this after getting login sorted out without  password_verify

$conn = new mysqli($servername, $username, $password, $dbname);
$db = mysqli_connect("localhost","xxxx","xxxxx","xxxx");

if($db){
  $stmt = $db->prepare("INSERT INTO user_information (username, password, firstname,lastname,email_address) VALUES (?, ?, ?, ?, ?)");
  $stmt->bind_param("sssss", $user,$pass, $firstname, $lastname, $email_address);
  $stmt->execute();
  
}

else {
  echo "PLEASE TRY AGAIN";
  die("failed" . mysqli_error());
}
?>
