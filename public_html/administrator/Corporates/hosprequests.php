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
		  $qemail = "SELECT * FROM ".TBL_EMAIL;	
		  if($db->query($qemail) && $db->get_num_rows() > 0)
		  {
		     $emaildata = $db->fetch_all_assoc();
		  }
     	  if($ustatus == 'disapproved'){
			   $from = $emaildata[0]['email'];
			   $subject = 'Request for new account on '.$emaildata[0]['cname'].' is diapproved';
    	       $body    = '<table width="90%" border="0" cellspacing="2" cellpadding="2">
						  <tr>
							<td width="63%"><a href="http://'.$emaildata[0]['url'].'"><img src="http://'.$emaildata[0]['url'].'/'.$emaildata[0]['image'].'" border="0" /></a></td>
							<td width="37%"><strong>
						<font color="#000000" size="1px" >'.$emaildata[0]['cname'].',<br />
        '.$emaildata[0]['address'].',<br />
		'.$emaildata[0]['city'].', '.$emaildata[0]['state'].', '.$emaildata[0]['zip'].'
        TEL:'.$emaildata[0]['phone'].'</font></strong></td>
						  </tr>
						  <tr>
							<td colspan="2" align="left">
							Dear '.$username.',<br>
							We are sorry to inform you that your subscription request has been disapproved <br><br>
							If you have any questions, contact us at <a href="mailto:'.$emaildata[0]['email'].'">'.$emaildata[0]['email'].'</a><br>
							</td>
						  </tr>
						  <tr>
							<td colspan="2" align="left">Regards! <br> '.$emaildata[0]['cname'].' Support Team!</td>
						  </tr>
						</table>';
				    $sent = $mail->HtmlTxtMail($email,$from,$subject,$body);
                   if($sent){ $sending = '1' ;}						
			  }  

		if($ustatus == 'approved'){
			$from = $emaildata[0]['email'];
			$subject = 'Congratulations, your request for new account is approved -- '.$emaildata[0]['cname'].'';
			
			$body    = '<table width="90%" border="0" cellspacing="2" cellpadding="2">
						  <tr>
							<td width="63%"><a href="http://'.$emaildata[0]['url'].'"><img src="http://'.$emaildata[0]['url'].'/'.$emaildata[0]['image'].'" border="0" /></a></td>
							<td width="37%"><strong>
						<font color="#000000" size="1px" >'.$emaildata[0]['cname'].',<br />
        '.$emaildata[0]['address'].',<br />
		'.$emaildata[0]['city'].', '.$emaildata[0]['state'].', '.$emaildata[0]['zip'].'
        TEL:'.$emaildata[0]['phone'].'</font></strong></td>
						  </tr>
						  <tr>
							<td colspan="2" align="left">
							Congratulations '.$username.',<br>
							Your request for a new account on '.$emaildata[0]['cname'].' has been approved successfully .<br>
							You can now <a href="http://'.$emaildata[0]['url'].'/login.php">login</a> to submit trip requests with following credentials:.<br> 
							Username: '.$username.'.<br> Password: '.$pwd1.'<br><br>
							if you have any questions, contact us at <a href="mailto:'.$emaildata[0]['email'].'">'.$emaildata[0]['email'].'</a>
							</td>
						  </tr>
						  <tr>
							<td colspan="2" align="left">Regards! <br> '.$emaildata[0]['cname'].' Support Team!</td>
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