<?php
session_start();
include "header.php";
include "sign_up_process.php";
?>

<!DOCTYPE html>
<html>
  <head>
    <title>Sign Up!</title>
    <link rel="stylesheet" type="text/css" href="bootstrap/css/sign_up_styles.css">
  </head>

<body>
  <div class="header">
  	<h2 class="registerHeading">Sign Up</h2>
  </div>

  <form method="post" action="">  <!--yes or do I have to direct it towards the included file-->

    <div class="input-group">
  	  <label>Username</label>
  	  <input type="text" name="username">
  	</div>

    <div class="input-group">
  	  <label>Password</label>
  	  <input type="password" name="password">
  	</div>

    <div class="input-group">
  	  <label>First Name</label>
  	  <input type="text" name="firstName">
  	</div>

    <div class="input-group">
  	  <label>Last Name</label>
  	  <input type="text" name="lastName">
  	</div>

    <div class="input-group">
  	  <label>Email</label>
  	  <input type="email" name="email_address">
  	</div>

  	<div class="input-group">
  	  <button type="submit" class="btn" name="submit">Register</button>
  	</div>

  </form>

</body>
</html>
