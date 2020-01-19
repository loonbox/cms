<?php
session_start();    // if session exists you can view this page.. If not bye bye back to login..
if(!isset($_SESSION['username'])){
   header("Location:index.php");
}

$user = $_SESSION["username"];
$post = $_POST["post"];

//xss protection
$user = htmlspecialchars($user);
$post = htmlspecialchars($post);

echo $user;
echo $post;

// take this out later and include db_connnect.php
$db = mysqli_connect("localhost","xxx","xxx","xxx");

if($db){
  $stmt = $db->prepare("INSERT INTO user_posts (username, post) VALUES (?, ?)");
  $stmt->bind_param("ss", $user,$post);
  $stmt->execute();
  header('Location: posts.php');
}

else {
  echo "PLEASE TRY AGAIN";
  die("failed" . mysqli_error());
}
?>
