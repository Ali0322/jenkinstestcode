<?php
   	include_once('DBAccess/Database2.inc.php');
	$db = new Database;	
	$db->connect();
	$Qcontactinfo="SELECT * FROM contact_info WHERE c_id = '1'";
	if($db->query($Qcontactinfo) && $db->get_num_rows()>0){	$contactinfo=$db->fetch_one_assoc();}
    $name = @trim(stripslashes($_POST['name'])); 
    $email = @trim(stripslashes($_POST['email'])); 
   //	$subject = @trim(stripslashes($_POST['subject'])); 
    $message = @trim(stripslashes($_POST['message'])); 
	$subject = 'Contact Email From '.$contactinfo['title'];
    $email_from = $email;
    $email_to = $contactinfo['email'];
    $body = 'Dear Admin,'."\n\n". 'One new user contact you through '.$contactinfo['title'].'. '."\n\n".' Information are given below: '."\n\n". 'Name: ' . $name . "\n\n" . 'Email: ' . $email . "\n\n" . 'Message: ' . $message;

    $success = @mail($email_to, $subject, $body, 'From: <'.$email_from.'>');
if($success){
	echo '<script>alert("Contact form submitted successfully. Thank You for Contact Us. ");</script>'; 
			echo "<script>location.href='contactus.php';</script>"; exit;}
else{
	echo '<script>alert("Unable to Send Email. Please Try Again!");</script>'; 
			echo "<script>location.href='contactus.php';</script>"; exit;}
