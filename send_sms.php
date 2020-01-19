<?php
session_start();
?>

<?php
if (isset($_POST['theMessage'])){
  $theMessage = stripslashes($_REQUEST['theMessage']);
}
?>

<?php

if (isset($_POST['phoneNumberTo'])){
  $phoneNumberTo = stripslashes($_REQUEST['phoneNumberTo']);
}
?>

<?php
require __DIR__ . '/vendor/autoload.php';
use Twilio\Rest\Client;
//my account information
$sid = 'xxxxx';
$token = 'xxxxxx';
$client = new Client($sid, $token);

// set up the message and fire the message

$client->messages->create(
    // the number you'd like to send the message to
    $phoneNumberTo,
    array(
        //my server phone number
        'from' => '+16168181380',
        // the body of the text message you'd like to send input from user post
        'body' => $theMessage
    )
);
//for testing
echo "You have successfully sent an sms message to $phoneNumberTo"
?>

<?php header('Location: '.'make_sms_form.php'); ?> 
