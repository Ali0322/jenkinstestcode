<?php
   	/* *************************** *
	   * Date: 26-May-2008 
	   * categories/index.php
	   * Muhammad Sajid
	   *************************** */

   	include_once('../DBAccess/Database.inc.php');

	$db = new Database;	
    $msgs = '';
	$noRec = '';
	$msgs .= $_GET['msg'];
	$db2 = new Database;	
    	
	$db->connect();
	$db2->connect();

	/*************** Paging ************** */
	



	
   

// Fetch all categories list
$QueryDel = "Select * FROM ".TBL_TESTIMONIALS." WHERE id='".$_GET['eId']."'";
     if($db2->query($QueryDel) && $db2->get_num_rows())
	  {
      $data = $db2->fetch_all_assoc();
     
	  }

	
	
   
	$db->close();
	$db2->close();
    $pgTitle = "Admin Panel -- Testimonials";
	$smarty->assign("pgTitle",$pgTitle);
	$smarty->assign("msgs",$msgs);
	$smarty->assign("data",$data);	
	$smarty->assign_by_ref('testimonials',$testimonials);
	$smarty->assign_by_ref('messagetxt',$messagetxt);
	$smarty->assign_by_ref('hospitals',$hospitals);
	$smarty->assign("paging",$paging);		
	$smarty->display('testimonialstpl/details.tpl');
		

?>