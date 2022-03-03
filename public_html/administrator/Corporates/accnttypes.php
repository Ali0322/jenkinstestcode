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





// Delete Account Script

    if(isset($_GET['delId']) && $_GET['delId'] != '')

	{

		$date = date('Y-m-d',time());

		$del_by = $_SESSION['admuser']['admin_id'];

   		$QueryDel = "Update  ".TBL_ACCNTTYPES."  SET del = '1', del_date = '$date', del_by = '$del_by'

									WHERE id='".$_GET['delId']."'";

  		if($db->query($QueryDel))

		{  

		  $QueryDel2 = "Update ".TBL_HOSPITALS." SET atype = '' WHERE atype='".$_GET['delId']."'";

		     if($db2->query($QueryDel2))

			 {				

       			  $msgs .= 'Record Removed Successfully<br>';

		 	}

			 else

			 {

		 	$error .= 'Account Type removed Successfully but Error occured while removing the account types under that account type.<br>';		   

		  	}

		}

		else

		{

		 $error .= 'Error occured while removing the record<br>';		

		} 

		echo "<script>location.href= 'accnttypes.php';</script>";

  	}





	/*************** Paging ************** */

	

	if(!empty($_GET['Page']))

	{ $page = $_GET['Page']; }

	else

	{ $page = 1; }

	

	$limit = 20;

	$offset = (($page * $limit) - $limit);

	$maxRecord = 20; 





	 $Querypg = "SELECT COUNT(*) FROM ".TBL_ACCNTTYPES;	

	 $totalRows = $db->executeScalar($Querypg);

 

     if(isset($_GET['pageNum'])){

	   $page_no = $_GET['pageNum'];

	 }else{

	   $page_no = '1';	 

	 }

	 

   	 $pagination = new pagination($_GET['pageNum'],$maxRows=10,$totalRows); 

	  

	  

	$Query2 = "SELECT * FROM ".TBL_ACCNTTYPES."  Where del = '0' LIMIT ".$pagination->startRow . ",".$pagination->maxRows;

	  if($db->query($Query2) && $db->get_num_rows() > 0)

	   {

	   $vehdetails = $db->fetch_all_assoc();

	  } 



$vehqdetails = array();



 for($i=0; $i<sizeof($vehdetails); $i++){

	$Query3 = "SELECT COUNT(*) AS trows FROM ".TBL_ACCNTTYPES.",".TBL_HOSPITALS." WHERE atype=".TBL_ACCNTTYPES.".id AND ".TBL_ACCNTTYPES.".id='".$vehdetails[$i]['id']."' GROUP BY ".TBL_ACCNTTYPES.".id";

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

    $pgTitle = "Admin Panel -- Account Types";

	$smarty->assign("pgTitle",$pgTitle);

	$smarty->assign("msgs",$msgs);

	$smarty->assign("errors",$error);	

	$smarty->assign_by_ref('vehtypedetails',$vehdetails);

	$smarty->assign_by_ref('vehqdetails',$vehqdetails);	

	$smarty->assign("pages",$pages);	

	$smarty->display('hosptpls/accnttypes.tpl');

		

?> 