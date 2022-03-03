<?php

	require_once('DBAccess/Database.inc.php');
	include_once('configuration/site_functions.php');
	$db = new Database;	
	$db1 = new Database;	
    
	$error = '';
		
	$db->connect();
	$db1->connect();
	
	if(count($_POST)){



	$admin_user = sql_replace($_POST['adminname']);

		$password1 = sql_replace($_POST['adminpass']);

		$secode = sql_replace($_POST['pincode']);
if(!$admin_user){

		  $msg .= "Username Missing !<br>";

		}

		

		if(!$password1){

		  $msg .= "Password Missing !<br>";

		}

		

		if(!$secode){

		  $msg .= "Security Code Missing !<br>";

		}else{		

		if($_SESSION['security_code'] != $secode){

		  $msg .= "Invalid Security Code !<br>";

		}}				



if(strstr($password," ")){
	 $msg = 'Spaces not allowed in password'; 
}  

if($msg == ''){	

$status='Active';
	  $hashpwd = "";

			$hashpwd = $password1;

		   $status='Active';
	$validateqry = "SELECT * FROM ".TBL_ADMIN." WHERE admin_status='$status' AND admin_uname='".$admin_user."' AND admin_password='".$hashpwd."'";
	if($db1->query($validateqry) && $db1->get_num_rows() > 0){
		$userdet = $db1->fetch_all_assoc();
   	    $_SESSION['allow_print'] = 'accessInFileAllowed';	  
		$_SESSION['adminuser']   = $userdet[0]['admin_uname'];
		$_SESSION['adminname']   = $userdet[0]['admin_name'];
		$_SESSION['userid']      = $userdet[0]['admin_id'];
		$_SESSION['admuser']     = $userdet[0];
		echo '<script>window.open("index.php","_parent");</script>';
		exit;	
  
  }
  
   else{

		     $msg .= "Invalid Username/Password<br>";

		  

		  } 
  }
}  

	if(!isset($_SESSION['footer'])){
		// Footer
		$qry_footer  = "SELECT * FROM " .  TBL_COPY_RIGHTS ;
	if($db->query($qry_footer) && $db->get_num_rows() > 0){
		$footer = $db->fetch_all_assoc();
		
	 }
	 $foot = $footer[0]['description'];
	 $_SESSION['footer'] =  $foot;
    }
	
		
	$db->close();
	$db1->close();
	
    $pgTitle = "Admin Panel -- Login";
	$smarty->assign("pgTitle",$pgTitle);
	$smarty->assign("msg",$msg);
	$smarty->assign("adminname",$adminname);
    $smarty->assign("adminpass",$adminpass);	
	$smarty->display('login.tpl');
		
?>