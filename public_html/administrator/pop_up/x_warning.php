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
		
	#Insets the trip rating 
	$drv_id = $trip['drv_id'];
	$rate = '0';
	$rQuery = "INSERT INTO ".TBL_RATING." 
	 						SET  drv_id = '$drv_id', drv_rating = '$rate',  trp_id = '$tdid'";
	 
	 if($db->execute($rQuery))
	 {
		 
		$sQuery = "UPDATE ".TBL_TRIP_DET." 
								SET  status = '1'
								WHERE tdid = '$tdid'";
		 $db->execute($sQuery);
		
		
		
		$email = 'agent@hybridtracktrans.com';
		$from    = $email;
		$subject = 'Auto-Generated Trip Request Notification!';
		$to = 'admin@hybridtracktrans.com';	
		
		$body    = '<table width="90%" border="0" cellspacing="2" cellpadding="2">
					  <tr>
						<td width="63%"><a href="http://www.hybriditservices.com/demos/httglobal-2/hybridtracktrans.com"><img src="http://www.hybriditservices.com/demos/httglobal-2/hybridtracktrans.com/images/HTTlogo.jpg" border="0" /></a></td>
						<td width="37%"><strong>
						VALLEY MEDTRANS<br>
						2201 S McClintock Dr, Suite 3,<br>
						Tempe, AZ , 85282<br>
						Ph # 480-478-3877</strong></td>
					  </tr>
					  <tr>
						<td colspan="2" align="left">
						Dear Admin,<br><br>
						Trip with ID # '.$trip['tdid'].' have been, over with no responce from the staff!
						
						'.$admin.' has been contacted, and the buzzer rings for 5 min, but got no responce!<br><br>
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
	 @header("location:../routingpanel/");
}
?>