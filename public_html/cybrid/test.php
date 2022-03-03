<?php 
function HtmlTxtMail($to,$from,$subject,$message)
{     require_once (__DIR__ . DIRECTORY_SEPARATOR .'/swift/lib/swift_required.php');
    $emailUsername='mujtaba765@gmail.com';
    $emailPass='Mujtaba@123456789?';
    
    //'smtp.office365.com', 587, 'tls'
    //'smtp.mail.yahoo.com', 587, 'tls'
    $transport = Swift_SmtpTransport::newInstance('smtp.gmail.com', 587, 'tls')
                 ->setUsername($emailUsername)
                 ->setPassword($emailPass) ;
$mailer = Swift_Mailer::newInstance($transport);
//$to = "hashimramzan86@gmail.com";
$message = Swift_Message::newInstance($subject)
 ->setFrom(array('mujtaba765@gmail.com' => 'Cybridllc'))
 ->setTo(array($to))
 ->setBody($message, 'text/html');
//echo "here after sadsad";exit;
$result = $mailer->send($message);
return true;
}

?>