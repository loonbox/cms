<?php
session_start();    // if session exists you can view this page.. If not bye bye back to login..
if(!isset($_SESSION['username'])){
   header("Location:index.php");
}
include "header.php";

 ?>

<div class="container">
  <br>
  <h1 class="makeAPost"> Make A Post </h1>
 <form action="process_post.php" method="post" name="make_post">
  <textarea name = "post" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
  <br>
 <button type="submit" name="submit" class="btn btn-primary mb-2" value="post">Submit</button>
</form>
</div>
