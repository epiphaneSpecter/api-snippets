<?php
// Get the PHP helper library from https://twilio.com/docs/libraries/php

// this line loads the library 
require('vendor/autoload.php'); 
use Twilio\TwiML;

$response = new TwiML;
$response->say("Thanks for calling!");
echo $response;