<?php
require_once "vendor/autoload.php";
use Twilio\TwiML\MessagingResponse;

// Set the content-type to XML to send back TwiML from the PHP Helper Library
header("content-type: text/xml");

$response = new MessagingResponse();
$response->message(
    "Hello I am the Symposia Bot. I can not do much more than say hello at this time. When my developer has more time perhaps he will add a some more functionality. Have a great day!"
);

echo $response;
