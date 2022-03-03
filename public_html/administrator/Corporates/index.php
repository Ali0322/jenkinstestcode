<?php
   	include_once('../DBAccess/Database.inc.php');
	include('../Classes/pagination-class.php');	
	$db = new Database;	
    $msgs = '';
	$noRec = '';
	$msgs .= $_GET['msg'];
	$whr_name ='';
	$db->connect();
 if(isset($_GET['st']) && $_GET['st'] != ''){
    $st = $_GET['st'];
 }else{
    $st = 'approved';
  } 
 if(isset($_GET['name']) && $_GET['name'] !=''){
		$whr_name .= " AND LOWER(hospname) LIKE '%".strtolower($_GET['name'])."%' ";
		} 
// Delete Category Script
    if(isset($_GET['delId']) && $_GET['delId'] != ''){
   		$QueryDel = "DELETE FROM ".TBL_HOSPITALS." WHERE id='".$_GET['delId']."'";
  		if($db->query($QueryDel))
		{
	   		header("Location: index.php");
	   		exit;
	  	   //Delete subcategories as wel
	 //$db->query($QuerypicDel = "DELETE FROM `categories` WHERE id='".$_GET['delId']."'");	   		
		}else{
	   		header("Location: index.php");
	   		exit;	
		}  
  	}
// Fetch all categories list
	$QueryCounty = "SELECT COUNT(*) AS rows FROM ".TBL_HOSPITALS." WHERE Status = '$st' $whr_name";
     if($db->query($QueryCounty) && $db->get_num_rows())
	  {
      $data = $db->fetch_all_assoc();
      $totalRows = $data[0]['rows'];
	  }
if(isset($_GET['pageNum'])){   $page_no = $_GET['pageNum']; }else{ $page_no = '1';	 }
 $pagination = new pagination($_GET['pageNum'],$maxRows=40,$totalRows);	  
	$Query = "SELECT * FROM ".TBL_HOSPITALS." WHERE `Status`='".$st."' $whr_name ORDER BY `firstname` ASC LIMIT ".$pagination->startRow . ",".$pagination->maxRows;
	$Query2 = "SELECT * FROM ".TBL_HOSPITALS." WHERE `Status`='".$st."' $whr_name ORDER BY `firstname` ASC";
   if($db->query($Query) && $db->get_num_rows() > 0)
	{
	   $membdetail = $db->fetch_all_assoc();
	} else{
	   $noRec .=  "NO RECORD FOUND";	 
    }
	$pages =  $pagination->display_pagination();
	$db->close();
    $pgTitle = "Admin Panel -- Corporation";
	$smarty->assign("pgTitle",$pgTitle);
	$smarty->assign("msgs",$msgs);
	$smarty->assign("NoRecord",$noRec);	
	$smarty->assign_by_ref('membdetail',$membdetail);
	$smarty->assign("paging",$pages);	
	$smarty->assign("st",$st);	
	$smarty->assign("byname",$_GET['name']);		
	$smarty->display('corptpls/index.tpl');
?>