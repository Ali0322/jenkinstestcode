<?php
   	include_once('../DBAccess/Database.inc.php');
   	include_once('../Classes/MyMailer.php');	
	$db = new Database;	
	$db2 = new Database;	
	$mail = new MyMailer;
	$msgs   = '';
	$errors = '';
	$uid = $_GET['id'];	
	$db->connect();
	$db2->connect();
//GET COUNTRY LIST
    $gcont = "SELECT * FROM ".TBL_COUNTRIES;
		if($db->query($gcont) && $db->get_num_rows() > 0)
		 {
		   $clist = $db->fetch_all_assoc();
		 }
//GET STATES LIST
    $gstat = "SELECT * FROM ".TBL_STATES;
		if($db->query($gstat) && $db->get_num_rows() > 0)
		 {
		   $slist = $db->fetch_all_assoc();		 
		 }
// Add Member
 if(isset($_POST['submit'])){
      $rate_type       = sql_replace($_POST['rate_type']);
	  $hosp_name = sql_replace($_POST['hosp_name']);
      $progtype= sql_replace($_POST['progtype']);
      $ohid       = sql_replace($_POST['ohid']);
	  $ohosp_name = sql_replace($_POST['ohosp_name']);
      $h_address = sql_replace($_POST['h_address']);
	  $h_city    = sql_replace($_POST['h_city']);		  
      $h_state   = sql_replace($_POST['h_state']);
	  $h_zip     = sql_replace($_POST['h_zip']);	
      $h_phone   = sql_replace($_POST['h_phone']);
	  $fname     = sql_replace($_POST['fname']);	
      $lname     = sql_replace($_POST['lname']);
	  $phnum     = sql_replace($_POST['phnum']);	
      $email     = sql_replace($_POST['email']);
      $oemail     = sql_replace($_POST['oemail']);
	  $username  = sql_replace($_POST['username']);	
	  $ousername = sql_replace($_POST['ousername']);		  	  
	  $pwd1      = sql_replace($_POST['pwd1']);		  
	  $pwd2      = sql_replace($_POST['pwd2']);		  
	  $ustatus   = sql_replace($_POST['ustatus']);
	  $oustatus  = sql_replace($_POST['oustatus']);	  
	  $reason    = sql_replace($_POST['reason']);	
      $atype    = sql_replace($_POST['atype']);	
	  
	  $b_aname    = sql_replace($_POST['b_aname']);	
	  $b_address  = sql_replace($_POST['b_address']);	
	  $b_city     = sql_replace($_POST['b_city']);	
	  $b_state    = sql_replace($_POST['b_state']);	
	  $b_zip      = sql_replace($_POST['b_zip']);		  	
/*	   if(!$hid)
	    { $error .= "Hospital ID Missing !<br>"; }
		else{
		   if(!ctype_alnum($hid)){
		   $error .= "Hospital ID Should be alphanumeric!<br>";
		   }
		}*/
	   if(!$hosp_name)
	    { $error .= "Hospital Name Missing !<br>"; }
	   if(!$h_address)
	    { $error .= "Hospital Address Missing !<br>"; }
	   if(!$h_city)
	    { $error .= "City Missing !<br>"; }
	   if(!$h_state || $h_state == '')
	    { $error .= "State not selected!<br>"; }
	   if(!$h_zip)
	    { $error .= "Zip code Missing !<br>"; }
	  if(!$h_phone)
	    { $error .= "Hospital Phone Number Missing !<br>"; }
	  /* if(!$fname)
	    { $error .= "Contact Person First Name Missing !<br>"; }
	   if(!$lname)
	    { $error .= "Contact Person Last Name Missing !<br>"; }
	   if(!$phnum)
	    { $error .= "Contact Person Phone Number Missing!<br>"; }
	   if(!$email)
	    { $error .= "Contact Person Email Address Missing !<br>"; }
        else{
		   if(!checkEmail($email)){
		   $error .= "Invalid Email address. !<br>";
		   }
		}
	   if(!$username)
	    { $error .= "Username Missing !<br>"; }
		else{
		   if(eregi(' ', $username))
			{ $error .= "Spaces not allowed in username!<br>"; }	
        }
	   if(!$pwd1)
	    { $error .= "Password Missing !<br>"; }
		else{
		   if(eregi(' ', $pwd1))
			{ $error .= "Spaces not allowed in username!<br>"; }		  
		  }
	   if(!$pwd2)
	    { $error .= "Confirm Password Missing !<br>"; }
       else{
		   if(eregi(' ', $pwd2))
			{ $error .= "Spaces not allowed in username!<br>"; }		  
		  }
	   if($pwd1 != '' && $pwd2 != '')
	    { 
		  if($pwd1 != $pwd2)
		$error .= "Passwords mismatched!<br>"; }*/
	   if($ustatus == '')
	    { $error .= "Status Missing!<br>"; }else{
		 if($ustatus == 'disapproved'){
		   if(!$reason || $reason == ''){ $error .= "Reason not mentioned for disapproving!<br>";  }
		   }
		}
      if(!$error){ 
        if($ohosp_name != $hosp_name){
	      $chkHospName = "SELECT * FROM ".TBL_HOSPITALS." WHERE hospname='".$hosp_name."'";
	        if($db->query($chkHospName) && $db->get_num_rows() > 0 ){
			  $error .= 'Hosptial already exist. Try another one.<br>  ';
		}
      }
        if($ohid != $hid){		 
	      $chkHosp = "SELECT * FROM ".TBL_HOSPITALS." WHERE cis='".$hid."'";
	        if($db->query($chkHosp) && $db->get_num_rows() > 0){
			  $error .= 'Hosptial ID already exist. Try another one.<br>  ';
			}
         }	
    /*    if($ousername != $username){		 
	      $chkUser = "SELECT * FROM ".TBL_HOSPITALS." WHERE username='".$username."'";
	        if($db->query($chkUser) && $db->get_num_rows() > 0){
			  $error .= 'Username already exist. Try another one.<br>  ';
			}	
	     }
        if($oemail != $email){		 
	      $chkEmail = "SELECT * FROM ".TBL_HOSPITALS." WHERE email_address='".$email."'";
	        if($db->query($chkEmail) && $db->get_num_rows() > 0){
			  $error .= 'Email Address already exist. Try another one.<br>  ';
			}	
	     }*/
  if(!$error) {
		  //Edit Hospital
		$Query  = "UPDATE ".TBL_HOSPITALS." SET 
					hospname='$hosp_name',
					prog_type='$progtype',
					atype='$atype',
					rate_type='$rate_type',
					cis='$hid',
					hosp_phnum='$h_phone',
					firstname='$fname',
					lastname='$lname',
					email_address='$email',
					telephone='$phnum',
					username='$username',
					password='$pwd1',
					street_address='$h_address',
					city='$h_city',
					postcode='$h_zip', 
					state='$h_state',
					b_aname='$b_aname',
					b_address='$b_address',
					b_city='$b_city',
					b_state='$b_state',
					b_zip='$b_zip',
					Status='$ustatus', reason= '$reason' WHERE id='$uid'";
		  if($db->execute($Query))
		    {
			$qemail = "SELECT * FROM ".TBL_EMAIL;	
		  if($db->query($qemail) && $db->get_num_rows() > 0)
		  {
		     $emaildata = $db->fetch_all_assoc();
		  }
		 if($oustatus == 'inactive' || $oustatus == 'disapproved'){
	         if($ustatus == 'approved'){
			   //EMAIL SCRIPT FOR SIGNED UP USER
			$from = $emaildata[0]['email'];
			$subject = 'Congratulations, your request for new account is approved -- '.$emaildata[0]['cname'].'';
			$body    = '<table width="50%" border="0" cellspacing="2" cellpadding="2">
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
							Your request for a new account on '.$emaildata[0]['cname'].'
							 has been approved successfully .<br>
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
			  }
			}  
		 if($oustatus == 'inactive' || $oustatus == 'approved'){
			  if($ustatus == 'disapproved'){
			   //EMAIL SCRIPT FOR SIGNED UP USER
			   $from = $emaildata[0]['email'];
			   $subject = 'Request for new account on '.$emaildata[0]['cname'].' is diapproved';
    	       $body    = '<table width="50%" border="0" cellspacing="2" cellpadding="2">
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
							We are sorry to inform you that your subscription request has been disapproved <br>';
                if($reason != ''){          
				$body    .= 'due to the following reason: .<br>
							"'.$reason.' "<br><br>';
                             }
				$body    .= 'if you have any questions, contact us at <a href="mailto:'.$emaildata[0]['email'].'">'.$emaildata[0]['email'].'</a>
							</td>
						  </tr>
						  <tr>
							<td colspan="2" align="left">Regards! <br> '.$emaildata[0]['cname'].' Support Team!</td>
						  </tr>
						</table>';
			   $sent = $mail->HtmlTxtMail($email,$from,$subject,$body);
			  }
			}			  
		 if($oustatus == 'disapproved' || $oustatus == 'approved'){
			  if($ustatus == 'inactive'){
			   //EMAIL SCRIPT FOR SIGNED UP USER
			   $from = $emaildata[0]['email'];
			   $subject = 'Your account on '.$emaildata[0]['cname'].' is Inactive now';
    	       $body    = '<table width="50%" border="0" cellspacing="2" cellpadding="2">
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
							We are sorry to inform you that your account has been inactivated by admin <br>
							if you have any questions, contact us at <a href="mailto:'.$emaildata[0]['email'].'">'.$emaildata[0]['email'].'</a>
							</td>
						  </tr>
						  <tr>
							<td colspan="2" align="left">Regards! <br> '.$emaildata[0]['cname'].' Support Team!</td>
						  </tr>
						</table>';
			   $sent = $mail->HtmlTxtMail($email,$from,$subject,$body);
			  }
			}
			 echo '<script>alert("You have successfully updated the record");</script>';
			 echo '<script>location.href="index.php";</script>';
			 exit;
			}else{
           	 echo '<script>alert("Unable to update the record.");</script>';
			 echo '<script>location.href="edit.php?id='.$uid.'";</script>';
			 exit;
			}
		  } 
	  //End Add
     }
  }	
  else{
      $query = "SELECT * FROM ".TBL_HOSPITALS." WHERE id='".$uid."'";
	      if($db->query($query) && $db->get_num_rows())
			  {
			  $udata = $db->fetch_all_assoc();
			  }
			  $rate_type        = $udata[0]['rate_type'];
			  $hosp_name  = $udata[0]['hospname'];
			  $ohid       = $udata[0]['cis'];
			  $ohosp_name = $udata[0]['hospname'];			  
			  $progtype=$udata[0]['prog_type'];	
			  $h_address = $udata[0]['street_address'];
			  $h_city    = $udata[0]['city'];		  
			  $h_state   = $udata[0]['state'];
			  $h_zip     = $udata[0]['postcode'];	
			  $h_phone   = $udata[0]['hosp_phnum'];
			  $fname     = $udata[0]['firstname'];	
			  $lname     = $udata[0]['lastname'];
			  $phnum     = $udata[0]['telephone'];	
			  $email     = $udata[0]['email_address'];
			  $oemail     = $udata[0]['email_address'];
			  $username  = $udata[0]['username'];	
			  $ousername = $udata[0]['username'];				  	  
			  $pwd1      = $udata[0]['password'];		  
			  $pwd2      = $udata[0]['password'];	
			  $ustatus   = $udata[0]['Status'];	
			  $oustatus  = $udata[0]['Status'];	
			  $reason    = $udata[0]['reason'];			
			   $atype    = $udata[0]['atype'];				  			  			  			  			  		  
     }	
	 $accnt= "SELECT * FROM ".TBL_ACCNTTYPES;
	if($db->query($accnt) && $db->get_num_rows() > 0)
	 {
		   $alist = $db->fetch_all_assoc();		 
	 }
		 $prgQuery = "SELECT * FROM  ".TBL_PROGRAM." WHERE prgstatus = '1'";
	if($db->query($prgQuery) && $db->get_num_rows() > 0){
		$prgs = $db->fetch_all_assoc();
	} 
	$Qaccountnames=" SELECT DISTINCT(CONCAT(b_aname,'^',b_address,'^',b_city,'^',b_state,'^',b_zip)) as alldata FROM ".TBL_HOSPITALS." WHERE b_aname !='' ";  
	if($db->query($Qaccountnames) && $db->get_num_rows() > 0){
		$accountnames = $db->fetch_all_assoc();
	} //print_r($accountnames);
	$db->close();
    $pgTitle = "Admin Panel -- Corporation [Edit]";
	$smarty->assign("pgTitle",$pgTitle);
	$smarty->assign("pgname",$pgname);		
	$smarty->assign("msgs",$msgs);
	$smarty->assign("errors",$error);
	$smarty->assign("states",$slist);
	$smarty->assign("alist",$alist);
	$smarty->assign("prgs",$prgs);
	$smarty->assign("rate_type",$rate_type);
	$smarty->assign("ohosp_name",$ohosp_name);
	$smarty->assign("data",$udata);
	$smarty->assign("hosp_name",$hosp_name);	
	$smarty->assign("h_address",$h_address);
	$smarty->assign("h_city",$h_city);	
	$smarty->assign("h_state",$h_state);
	$smarty->assign("h_zip",$h_zip);	
	$smarty->assign("h_phone",$h_phone);
	$smarty->assign("fname",$fname);	
	$smarty->assign("lname",$lname);
	$smarty->assign("phnum",$phnum);	
	$smarty->assign("email",$email);
	$smarty->assign("oemail",$oemail);
	$smarty->assign("username",$username);
	$smarty->assign("ousername",$ousername);	
	$smarty->assign("reason",$reason);			
	$smarty->assign("pwd1",$pwd1);
	$smarty->assign("pwd2",$pwd2);
	$smarty->assign("ustatus",$ustatus);
	$smarty->assign("oustatus",$oustatus);	
	$smarty->assign("progtype",$progtype);	
	$smarty->assign("atype",$atype);	
    $smarty->assign("id",$uid);		
	$smarty->assign("accountnames",$accountnames);			
	$smarty->display('hosptpls/edit.tpl');
?>