<?php
 /* *************************** *
	   * Created On : 14th october,2009 
	   * File : configuration/database_tables.php
	   * Created By : Muhammad Sajid
	   * Modified On : 14th october,2009 
	   * Modified By : Muhammad Sajid
	   *************************** */

   	//include_once('DBAccess/Database.inc.php');
	include('include_file.php');
	//$user_name = $_SESSION['adminuser'];
	$user_name = 'ADMIN';
	$db = new Database;	

	$error = '';
	$msg   = '';
		
	$db->connect();
	
	if(count($_POST)){
		$st = sql_replace($_POST['status']);
	
				
		if(!$st){
		  $error .= "Status not selected!<br>";
		}
		
		
		
	
		if(!$error){
		 $Query  = "UPDATE ".TBL_CONTACT." SET 
		                  st ='$st' 
				    WHERE c_id  ='1'";
		 	 
		  if($db->query($Query))
		    {			
			  $msg .= "Live Support status updated Successfully<br>";
			}
		  	else{
		      $msg .= "Updating Failed<br>";
		  
		  } // end if
    	}
	 }else{
	$qry_st  = "SELECT * FROM ".TBL_CONTACT." WHERE c_id='1'" ;
	if($db->query($qry_st) && $db->get_num_rows() > 0){
		$status = $db->fetch_all_assoc();
		
	   }
	      $st = $status[0]['st'];		 
   }

		
	// Footer
	
	$qry_footer  = "SELECT * FROM " .  TBL_COPY_RIGHTS ;
	if($db->query($qry_footer) && $db->get_num_rows() > 0){
		$footer = $db->fetch_all_assoc();
		
	 }
	 $copyright = html_entity_decode($footer[0]['description']);	
	 $foot = html_entity_decode($footer[0]['description']);
	 

	
    $db->close();

	
	
	
	
	
    $pgTitle = "Admin Panel -- Live Support";
	$smarty->assign("pgTitle",$pgTitle);
	$smarty->assign("errors",$error);
	$smarty->assign("msgs",$msg);	
	$smarty->assign("st",$st);
	$smarty->assign("copyright",$copyright);		
	$smarty->assign("foot",$foot);		
	$smarty->display('live.tpl');
		
?>