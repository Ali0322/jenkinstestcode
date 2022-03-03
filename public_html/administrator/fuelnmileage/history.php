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
    $fuels = array();



	/*************** Paging ************** */
	
	if(!empty($_GET['Page']))
	{ $page = $_GET['Page']; }
	else
	{ $page = 1; }
	
	$limit = 20;
	$offset = (($page * $limit) - $limit);
	$maxRecord = 20; 


if(isset($_POST['veh']) && $_POST['startdate'] && $_POST['enddate'] && $_POST['veh'] != '' && $_POST['startdate'] != '' && $_POST['enddate'] != ''){

    $sd = convertDateToMySQL($_POST['startdate']);
	$ed = convertDateToMySQL($_POST['enddate']);


     if($sd <= $ed){
	     $d1 = $sd;
		 $d2 = $ed;
	    }else{
	     $d1 = $ed;
		 $d2 = $sd;		
		}


	$Querypg = "SELECT COUNT(*) FROM ".TBL_FUELLOG." WHERE veh_id='".$_POST['veh']."' AND refil_date BETWEEN '".$d1."' AND '".$d2."'";	
	 $totalRows = $db->executeScalar($Querypg);
 
     if(isset($_GET['pageNum'])){
	   $page_no = $_GET['pageNum'];
	 }else{
	   $page_no = '1';	 
	 }
	 
   	 $pagination = new pagination($_GET['pageNum'],$maxRows=10,$totalRows); 
	  
	$Query2 = "SELECT * FROM ".TBL_FUELLOG." WHERE veh_id='".$_POST['veh']."' AND refil_date BETWEEN '".$d1."' AND '".$d2."' LIMIT ".$pagination->startRow . ",".$pagination->maxRows;
	
   if($db->query($Query2) && $db->get_num_rows() > 0)
	{
	   $fdetails = $db->fetch_all_assoc();
	}



	$Query22 = "SELECT * FROM ".TBL_FUELLOG." WHERE veh_id='".$_POST['veh']."' AND refil_date BETWEEN '".$d1."' AND '".$d2."' GROUP BY veh_id DESC";
	
   if($db->query($Query22) && $db->get_num_rows() > 0)
	{
	   $vhdetails = $db->fetch_all_assoc();
       $ct = $db->get_num_rows();
	}else{
	   $ct=0;
	} 

  if($ct != 0){

 $Query3 = "SELECT * FROM ".TBL_FUELLOG." WHERE veh_id='".$_POST['veh']."' AND refil_date BETWEEN '".$d1."' AND '".$d2."'  GROUP BY fid ORDER BY fid DESC";	
	  if($db->query($Query3) && $db->get_num_rows() > 0)
      	{
	     $vdetails = $db->fetch_all_assoc();
		 $bt = $db->get_num_rows();
		   }else{ $bt = '0'; }	 


 if($bt != '0'){
	for($j=0; $j<$bt; $j++){

  	if($j == '0'){
		$Query4 = "SELECT SUM(trip_distance) AS tot FROM ".TBL_TRIPLOG." WHERE trip_veh='".$vdetails[$j]['veh_id']."' AND trip_date  BETWEEN '".$vdetails[$j]['refil_date']."' AND '".date('Y-m-d')."'";	
		  }
  	else{
	    $Query4 = "SELECT SUM(trip_distance) AS tot FROM ".TBL_TRIPLOG." WHERE trip_veh='".$vdetails[$j]['veh_id']."' AND trip_date  BETWEEN '".$vdetails[$j]['refil_date']."' AND '".$vdetails[$j-1]['refil_date']."'";				
		  }	 
	    
	 if($db2->query($Query4) && $db2->get_num_rows() > 0)
	      {
	    $fueldetails = $db2->fetch_all_assoc();
			if($fueldetails[0]['tot'] != ''){
			array_push($fuels,$fueldetails[0]['tot']);
		      }else{
			array_push($fuels,'0');		  
		      }
		   }	 
     }
  }}
}

    $pages =  $pagination->display_pagination();	
	  	  
	$db->close();
	$db2->close();
    $pgTitle = "Admin Panel -- Fuel & Mileage Managment";
	$smarty->assign("pgTitle",$pgTitle);
	$smarty->assign("msgs",$msgs);
	$smarty->assign("errors",$error);	
	$smarty->assign_by_ref('fdetails',$fdetails);
	$smarty->assign_by_ref('fuels',$fuels);	
	$smarty->assign("pages",$pages);
	
	$smarty->assign("veh",$_POST['veh']);
	$smarty->assign("startdate",$_POST['startdate']);
	$smarty->assign("enddate",$_POST['enddate']);				
	$smarty->display('fnmtpl/history.tpl');
		
?> 