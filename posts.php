<?php
session_start();    // if session exists you can view this page.. If not bye bye back to login..
if(!isset($_SESSION['username'])){
   header("Location:index.php");
}


include "db_connect.php";




include "header.php";
?>

<main role="main" class="container">

  <div class="starter-template">
    <h1 class="mySimpleCms">My Simple CMS</h1>
    <p class="lead">Here are the latest posts:  <?php echo $_SESSION["username"];?> </p>

<?php


    $sql = "SELECT * FROM user_posts ORDER BY uid DESC LIMIT 10 ";

    $result = mysqli_query($conn,$sql)or die(mysqli_error());

    echo "<table class='table'>";

    echo "<tr><th>User</th><th>Post</th></tr>";


    while($row = mysqli_fetch_array($result)) {
        $username = $row['username'];
        $post = $row['post'];

        echo "<tr><td>".$username."</td><td>".$post."</td></tr>";

    }

    echo "</table>";

    mysqli_close($conn);
    ?>


 <div class="postButton"><a  href="make_post_form.php" class="btn btn-primary btn-sm " role="button"">Post</a> </div>'
  </div>

</main><!-- /.container -->
<?php
include "footer.php";



?>
