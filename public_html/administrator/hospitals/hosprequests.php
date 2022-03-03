<?php
   	/* *************************** *
	   * Date: 26-May-2008 
	   * categories/add_category.php
	   * Muhammad Sajid
	   *************************** */

   	include_once('../DBAccess/Database.inc.php');
   	include_once('../Classes/MyMailer.php');	
		
	$db = new Database;	
	$db2 = new Database;	
	$mail = new MyMailer;

	$db->connect();
	$db2->connect();

 if(isset($_POST['queryString']) && $_POST['sta']){

	     $hospQuery = "SELECT * FROM ".TBL_HOSPITALS." WHERE id='".$_POST['queryString']."'";
	       if($db->query($hospQuery) && $db->get_num_rows() > 0 ){
			 $hospinfo = $db->fetch_all_assoc(); 
			$found = 'yes';
			}else{
			$found = 'no';
			}

  $username = $hospinfo[0]['username'];
      $pwd1 = $hospinfo[0]['password'];
    $email = $hospinfo[0]['email_address'];

  if($found == 'yes'){
		if($_POST['sta'] == '3'){ $ustatus = 'disapproved'; }else { $ustatus = 'approved'; }
		
	$Query  = "UPDATE ".TBL_HOSPITALS." SET 
			 	   Status='$ustatus' WHERE id='".$_POST['queryString']."'";
   			 	 
	  if($db->execute($Query)){
	      $sent = '0';
     	  if($ustatus == 'disapproved'){
			   $from = 'support@midnimotransport.com';
			   $subject = 'Request for new account on MMT is diapproved';
    	       $body    = '<table width="90%" border="0" cellspacing="2" cellpadding="2">
						  <tr>
							<td width="63%"><a href="http://www.hybriditservices.com/demos/midnimo_transport"><img src=http://www.hybriditservices.com/demos/midnimo_transport/images/logo.png" border="0" /></a></td>
							<td width="37%"><strong>
							4040 E, McDowell Rd, Suite # 102, Phoenix<br>
							Ph # (602) 273-7000</strong></td>
						  </tr>
						  <tr>
							<td colspan="2" align="left">
							Dear '.$username.',<br>
							We are sorry to inform you that your subscription request has been disapproved <br><br>
							If you have any questions, contact us at <a href="mailto:support@midnimotransport.com">support@midnimotransport.com</a><br>
							</td>
						  </tr>
						  <tr>
							<td colspan="2" align="left">Regards! <br> MMT Support Team!</td>
						  </tr>
						</table>';
				    $sent = $mail->HtmlTxtMail($email,$from,$subject,$body);
                   if($sent){ $sending = '1' ;}						
			  }  

		if($ustatus == 'approved'){
			$from = 'support@midnimotransport.com';
			$subject = 'Congratulations, your request for new account is approved -- MMT';
			
			$body    = '<table width="90%" border="0" cellspacing="2" cellpadding="2">
						  <tr>
							<td width="63%"><a href="http://www.hybriditservices.com/demos/midnimo_transport"><img src="http://www.hybriditservices.com/demos/midnimo_transport/images/logo.png" border="0" /></a></td>
							<td width="37%"><strong>
							4040 E, McDowell Rd, Suite # 102, Phoenix<br>
							Ph # (602) 273-7000</strong></td>
						  </tr>
						  <tr>
							<td colspan="2" align="left">
							Congratulations '.$username.',<br>
							Your request for a new account on MMT has been approved successfully .<br>
							You can now <a href="http://www.hybriditservices.com/demos/midnimo_transport/login.php">login</a> to submit trip requests with following credentials:.<br> 
							Username: '.$username.'.<br> Password: '.$pwd1.'<br>.<br>
							if you have any questions, contact us at <a href="mailto:support@midnimotransport.com">support@midnimotransport.com</a>
							</td>
						  </tr>
						  <tr>
							<td colspan="2" align="left">Regards! <br> MMT Support Team!</td>
						  </tr>
						</table>';
			    
				    $sent = $mail->HtmlTxtMail($email,$from,$subject,$body);
                   if($sent){ $sending = '1' ;} 
			}
            
			if($sending == '1'){ echo 'Success'; }
		  }else{ echo 'Fail';	 }
        }else{ echo 'Fail'; }	
	 }else{ echo 'prob'; }

  $db->close();
  exit;
?>