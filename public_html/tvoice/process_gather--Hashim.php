<?php
require __DIR__ . '/vendor/autoload.php';
use Twilio\TwiML;

// Start our TwiML response
$response = new TwiML;

// Read a message aloud to the caller
$response->say(
    "Thank you for calling! Have a great day.", 
    array("voice" => "alice")
);

$myfile = fopen("file.txt", "w") or die("Unable to open file!");
$txt = "John Doe\n";
fwrite($myfile, $response);
$txt = "Jane Doe\n";
fwrite($myfile, $txt);
fclose($myfile);


echo $response;