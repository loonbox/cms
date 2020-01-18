<?php
session_start();    // if session exists you can view this page.. If not bye bye back to login..
session_destroy();
header('Location: index.php');
?>
