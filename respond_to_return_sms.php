<?php

require_once 'vendor/autoload.php'; // Loads the library
use Twilio\Twiml\MessagingResponse;

$response = new MessagingResponse();
$response->message("This is the Symposia Bot. I cannot respond to you at this time. As soon as my developer gets a little more time he might add some functionality to me. Have a great day!");
print $response;
