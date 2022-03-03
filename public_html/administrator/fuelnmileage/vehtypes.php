<?php
   	/* *************************** *
	   * Date: 29-May-2008 
	   * CMS/index.php
	   * Muhammad Sajid
	   *************************** */

   	include_once('../DBAccess/Database.inc.php');
    include('../Classes/pagination-class.php');	


	$db = new Database;	
    $msgs = '';
	$noRec = '';
	$msgs .= $_GET['msg'];
	$db2 = new Database;	
    	
	$db->connect();
	$db2->connect();


// Delete Vehicle Script
    if(isset($_GET['delId']) && $_GET['delId'] != ''){
   		$QueryDel = "DELETE FROM ".TBL_VEHTYPES." WHERE id='".$_GET['delId']."'";
  		if($db->query($QueryDel))
		{  
		   $QueryDel2 = "DELETE FROM ".TBL_VEHICLES." WHERE vtype='".$_GET['delId']."'";
		     if($db2->query($QueryDel2)){				
         $msgs .= 'Record Removed Successfully<br>';}else{
		 $error .= 'Vehicle Type removed Successfully but Error occured while removing the vehicles under that vehicle type.<br>';		   
		  }
		}else{
		 $error .= 'Error occured while removing the record<br>';		
		}  
  	}


	/*************** Paging ************** */
	
	if(!empty($_GET['Page']))
	{ $page = $_GET['Page']; }
	else
	{ $page = 1; }
	
	$limit = 20;
	$offset = (($page * $limit) - $limit);
	$maxRecord = 20; 


	 $Querypg = "SELECT COUNT(*) FROM ".TBL_VEHTYPES;	
	 $totalRows = $db->executeScalar($Querypg);
 
     if(isset($_GET['pageNum'])){
	   $page_no = $_GET['pageNum'];
	 }else{
	   $page_no = '1';	 
	 }
	 
   	 $pagination = new pagination($_GET['pageNum'],$maxRows=10,$totalRows); 
	  
	  
	$Query2 = "SELECT * FROM ".TBL_VEHTYPES." LIMIT ".$pagination->startRow . ",".$pagination->maxRows;
	  if($db->query($Query2) && $db->get_num_rows() > 0)
	   {
	   $vehdetails = $db->fetch_all_assoc();
	  } 

$vehqdetails = array();

 for($i=0; $i<sizeof($vehdetails); $i++){
	$Query3 = "SELECT COUNT(*) AS trows FROM ".TBL_VEHTYPES.",".TBL_VEHICLES." WHERE vtype=".TBL_VEHTYPES.".id AND ".TBL_VEHTYPES.".id='".$vehdetails[$i]['id']."' GROUP BY ".TBL_VEHICLES.".id";
	  if($db->query($Query3) && $db->get_num_rows() > 0)
	   {
	     array_push($vehqdetails,$db->get_num_rows());
	   }else{
	     array_push($vehqdetails,$db->get_num_rows());	   
	   } 
    }
	      $pages =  $pagination->display_pagination();	
	  
	$db->close();
	$db2->close();
    $pgTitle = "Admin Panel -- Vehicle Types";
	$smarty->assign("pgTitle",$pgTitle);
	$smarty->assign("msgs",$msgs);
	$smarty->assign("errors",$error);	
	$smarty->assign_by_ref('vehtypedetails',$vehdetails);
	$smarty->assign_by_ref('vehqdetails',$vehqdetails);	
	$smarty->assign("pages",$pages);	
	$smarty->display('vehtpl/vehtypes.tpl');
		
?> 