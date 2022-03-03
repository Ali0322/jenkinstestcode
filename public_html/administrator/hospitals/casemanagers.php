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
	
	if(!empty($_GET['Page']))
	{ $page = $_GET['Page']; }
	else
	{ $page = 1; }
	
	$limit = 20;
	$offset = (($page * $limit) - $limit);
	$maxRecord = 20; 


 if(isset($_GET['hosp']) && $_GET['hosp'] != ''){
    $hpage = "&hosp=".$_GET['hosp'];
    $st = " AND hosp.id='".$_GET['hosp']."'";
 }else{
    $st = '';
  } 


//GET HOSPITALS LIST
    $gcont = "SELECT * FROM ".TBL_HOSPITALS;
		if($db->query($gcont) && $db->get_num_rows() > 0)
		 {
		   $hlist = $db->fetch_all_assoc();
		 }

	
// Delete Category Script
    if(isset($_GET['delId']) && $_GET['delId'] != ''){
   		$QueryDel = "DELETE FROM ".TBL_CM." WHERE cm_id='".$_GET['delId']."'";
  		if($db->query($QueryDel))
		{
	   		header("Location:casemanagers.php");
	   		exit;
	  	   //Delete subcategories as wel
	 //$db2->query($QuerypicDel = "DELETE FROM `categories` WHERE id='".$_GET['delId']."'");	   		
		}else{
	   		header("Location:casemanagers.php");
	   		exit;	
		}  
  	}

// Fetch all categories list
	$QueryCounty = "SELECT COUNT(*) as rows FROM ".TBL_CM." as cs,".TBL_HOSPITALS." as hosp WHERE hosp.id=cs.hosp_id $st";
     if($db2->query($QueryCounty) && $db2->get_num_rows())
	  {
      $data = $db2->fetch_all_assoc();
      $totalRows = $data[0]['rows'];
	  }

	$Query = "SELECT id,hospname,cs.* FROM ".TBL_CM." as cs,".TBL_HOSPITALS." as hosp WHERE id=cs.hosp_id $st  ORDER BY `fname` ASC LIMIT $offset, $limit";
	$Query2 = "SELECT id,hospname,cs.* FROM ".TBL_CM." as cs,".TBL_HOSPITALS." as hosp WHERE id=cs.hosp_id $st  ORDER BY `fname` ASC";
	
   if($db->query($Query) && $db->get_num_rows() > 0)
	{
	   $cmdetail = $db->fetch_all_assoc();
	} else{
	   $noRec .=  "NO RECORD FOUND";	 
    }



   // Footer paging
      $show = ceil($totalRows/$maxRecord);

	   if($totalRows == 0){
		 }else{
       $paging1 = "Page : ";
		}
         for($line=1; $line<=$show; $line++) 
		  {
		   if($line == $_GET['Page']){
			$paging2 .= "$line &nbsp;";
			}
		   else{
			$paging2 .= "<a href=casemanagers.php?Page=$line$hpage>$line</a>&nbsp;";
			   }
		  }
       $paging = $paging1.$paging2;

	$db->close();
	$db2->close();
    $pgTitle = "Admin Panel -- Hospital/Clinic";
	$smarty->assign("pgTitle",$pgTitle);
	$smarty->assign("msgs",$msgs);
	$smarty->assign("NoRecord",$noRec);	
	$smarty->assign_by_ref('cm',$cmdetail);
	$smarty->assign("paging",$paging);	
	$smarty->assign("hospid",$_GET['hosp']);	
    $smarty->assign("hosp",$hlist);			
	$smarty->display('hosptpls/casemanagers.tpl');
		

?>