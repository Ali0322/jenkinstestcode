<?php
include_once("../DBAccess/Database.inc.php");
 include_once("../Classes/MyMailer.php");

$mail = new MyMailer;
 $db = new Database;	
	$db->connect();
if(isset($_GET))
{
	$tdid = $_GET['tdid'];
	$admin = $_SESSION['admuser']['admin_name']." " .$_SESSION['admuser']['admin_lname'];
	# Fetch the Trip details 
	$tripQuery  = "SELECT * 
								 FROM ".TBL_TRIP_DET."
								 WHERE tdid = '$tdid'";
								 
	if($db->query($tripQuery) && $db->get_num_rows() > 0)
	{
		$trip =  $db->fetch_row_assoc(); 
	}
	
	$cquery = "SELECT  * FROM ".TBL_RATING." WHERE trp_id = '$tdid'";
	if($db->query($cquery) && $db->get_num_rows() > 0)
	{
		@header("location:../routingpanel/grid.php");
		echo "<script> location.href = '../routingpanel/grid.php';</script>";
	}
	else
	{
	#Insets the trip rating 
		$drv_id = $trip[0]['drv_id'];
	 
		 if($db->execute($rQuery))
		 {
		 
		 	 $q = "SELECT * FROM ".TBL_CONTACT;
	
    if($db->query($q) && $db->get_num_rows() > 0)
	{
	   $d = $db->fetch_all_assoc();
		$tos           = $d[0]['email'];
	
	}
	
		 	 $qemail = "SELECT * FROM ".TBL_EMAIL;	
	if($db->query($qemail) && $db->get_num_rows() > 0)
	{
	   $emaildata = $db->fetch_all_assoc();
	}
			$email = $emaildata[0]['email'];
			$from    = $email;
			$subject = 'Auto-Generated Trip Request Notification!';
			$to = $tos;	
			
			$body    = '<table width="90%" border="0" cellspacing="2" cellpadding="2">
						  <tr>
							<td width="63%"><a href="http://'.$emaildata[0]['url'].'"><img src="http://'.$emaildata[0]['url'].'/'.$emaildata[0]['image'].'" border="0" /></a></td>
					<td width="37%"><strong>
					<font color="#000000" size="1px" >'.$emaildata[0]['cname'].',<br />
        '.$emaildata[0]['address'].',<br />
		'.$emaildata[0]['city'].', '.$emaildata[0]['state'].', '.$emaildata[0]['zip'].'<br />
        TEL:'.$emaildata[0]['phone'].'</font></strong></td>
						  </tr>
						  <tr>
							<td colspan="2" align="left">
							Dear Admin,<br><br>
							Trip with ID # '.$trip['tdid'].' have been, over with no response from the staff!
							
							'.$admin.' has been contacted, and the buzzer rings for 5 min, but got no response!<br><br>
							</td>
						  </tr>
						  
						</table>';			
						
			# send e-mail
			$sent = $mail->HtmlTxtMail($to,$from,$subject,$body);
			
			   if($sent)
			   {
				  $msg .= "Your request has been successfully sent to concerned representative.";
				  $msg .= "<br>Thank you!.";				  
			   }
			   else
			   {
				  $error .= "<img src='images/bulit.gif'> Sorry! We are unable to process your request. Please contact admin</img>";
				  $error .= "<br>Thank you!.";			   
			   }
		 }
		 else
	 {
		 }
		 @header("location:../routingpanel/grid.php");
		 echo "<script> location.href = '../routingpanel/grid.php';</script>";
	}
}
?>