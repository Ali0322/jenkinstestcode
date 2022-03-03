<?php
// load composer packages
require __DIR__ . '/vendor/autoload.php';
 // load swift mailer 
require_once __DIR__ . '/vendor/swiftmailer/swiftmailer/lib/swift_required.php';
 
// SMTP server configuration
$smtp_server = 'smtp.gmail.com';
$username = 'mujtaba765@gmail.com';
$password = 'Mujtaba@123456789?';
$port = '587'; 
$encryption = 'tls';
 
// create message
$message = Swift_Message::newInstance()
    ->setSubject('Test Message Using SMTP Protocol!')
    ->setFrom(['mujtaba765@gmail.com' => 'Admin'])
    ->setTo(['mujtaba765@gmail.com' => 'Normal User'])
    ->setBody('This is Message body from Swift mailer SMTP test script!');
 
// create transport
$transport = Swift_SmtpTransport::newInstance($smtp_server, $port, $encryption)
    ->setUsername($username)
    ->setPassword($password);
 
// pass transport to the swift mailer
$mailer = Swift_Mailer::newInstance($transport);
 
// send email
$result = $mailer->send($message);
 
if ($result) {
    echo "Message has been successfully sent!";
	
}
 
?>