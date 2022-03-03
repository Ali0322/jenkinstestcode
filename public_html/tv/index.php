<?php
require_once 'twilio/Twilio/autoload.php'; // Loads the library
use Twilio\Rest\Client;

// Your Account Sid and Auth Token from twilio.com/user/account
$sid = "ACf1449cf4e1795e14ea66d166fea72772";
$token = "56bb8e552c5dc8e2b0a8d383a580fae4";
$client = new Client($sid, $token);

$call = $client->calls->create(
    "+14802692931", "+14802759047",
    array("url" => "http://demo.twilio.com/docs/voice.xml")
);

echo $call->sid;
echo '-----';
echo $call->id;
