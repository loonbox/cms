<?php
session_start();
?>

<?php

if (isset($_POST['theMessage'])){
      // removes backslashes
$theMessage = stripslashes($_REQUEST['theMessage']);

}
?>

<?php

if (isset($_POST['phoneNumberTo'])){
      // removes backslashes
$phoneNumberTo = stripslashes($_REQUEST['phoneNumberTo']);

}
?>
<?php
// Required if your environment does not handle autoloading
require __DIR__ . '/vendor/autoload.php';

// Use the REST API Client to make requests to the Twilio REST API
use Twilio\Rest\Client;

// Your Account SID and Auth Token from twilio.com/console
$sid = 'AC280689689ede3dd48a2d451ea3f60092';
$token = 'b175402da861561c1650f0cedc6a4f83';
$client = new Client($sid, $token);

// Use the client to do fun stuff like send text messages!

$client->messages->create(
    // the number you'd like to send the message to
    $phoneNumberTo,
    array(
        // A Twilio phone number you purchased at twilio.com/console
        'from' => '+16168181380',
        // the body of the text message you'd like to send
        'body' => $theMessage
    )
);
echo "You have successfully sent an sms message to $phoneNumberTo"
?>

<?php header('Location: '.'make_sms_form.php'); ?>
