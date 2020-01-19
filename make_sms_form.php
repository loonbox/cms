<?php
session_start();
include "header.php";
if(!isset($_SESSION['username'])){
   header("Location:index.php");
};
?>

<div class="container">
  <br>
  <h1 class="makeAPost"> SEND SMS </h1>
  <form action="send_sms.php" method="post" name="make_post">
    <p>Phone Number</p>
    <input type="tel" id="phone" placeholder="6166171894" name="phoneNumberTo"
      pattern="[0-9]{3}[0-9]{3}[0-9]{4}" required>
      <small>Format: 6166171894</small>
      <br><br>
    <textarea name = "theMessage" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
    <br>
    <button onclick="alert('Message Sent')" type="submit" name="submit" class="btn btn-primary mb-2" value="post">Submit</button>
  </form>
</div>
