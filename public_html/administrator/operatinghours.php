<?php
	include_once('DBAccess/Database.inc.php');
	$db = new Database;	
	$error = '';
	$msg   = '';
	$db->connect();
	if(count($_POST)){
		$ts=$_POST['ts'];
		$te=$_POST['te'];
		 $Query  = "UPDATE ".contact_info." SET 
		           endtime 		=	'$te',
				   starttime 	=	'$ts' 
				   WHERE c_id  	=	'1'";
		  if($db->query($Query))  {  echo 1;	}else {echo '';}
	 exit; }
	 
	$qry ="SELECT starttime,endtime FROM ".contact_info;
	if($db->query($qry) && $db->get_num_rows() > 0){
		$timing = $db->fetch_all_assoc();
 }	
    $db->close();
    $pgTitle = "Admin Panel -- Manage Timing";
	$smarty->assign("pgTitle",$pgTitle);
	$smarty->assign("errors",$error);
	$smarty->assign("msgs",$msg);	
	$smarty->assign("timing",$timing);		
	$smarty->display('operatinghours.tpl');
?>