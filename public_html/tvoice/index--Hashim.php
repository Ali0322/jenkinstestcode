<?php
require __DIR__ . '/vendor/autoload.php';
/**///include_once('vendor/autoload.php');
use Twilio\Rest\Client;
//	use Twilio\TwiML;
// Your Account SID and Auth Token from twilio.com/console
$account_sid = 'ACf1449cf4e1795e14ea66d166fea72772';
$auth_token = '56bb8e552c5dc8e2b0a8d383a580fae4';
// In production, these should be environment variables. E.g.:
// $auth_token = $_ENV["TWILIO_ACCOUNT_SID"]
// A Twilio number you own with SMS capabilities
$twilio_number = "+14802692931";
// Where to make a voice call (your cell phone?)
$to_number = "+14802759047";
//$client = new Client($account_sid, $auth_token);
$client = new Client($account_sid, $auth_token);
$client->account->calls->create($to_number,$twilio_number,array("url" => "http://voice.hybriditservices.com/demo/responce.php"));
// print($client->sid);


?>