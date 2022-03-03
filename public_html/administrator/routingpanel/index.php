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

	 

	$qtime = $db->query('SELECT NOW() AS tym');

	$get = $db->fetch_one_assoc();

	$xp = explode(' ',$get['tym']);

	$date = $xp[0];

	$time=$xp[1];		

	 

	$curtime= $time;

	$curdate = $date;

	 $start_time=STIME;

	 $end_time=ETIME; 



	 $sheet_id=$_GET['delId'];

		 //Deleting tracking history more than 0 days.
	 $beforetenday = date('Y-m-d h:i:s', strtotime($Date. ' - 11 day'));
	 $qdelete = "DELETE FROM trackinghistory WHERE datetime < '$beforetenday' ";
	 $db->execute($qdelete);
	 //End of Deleting tracking history more than 0 days.

// D E L E T E     T R I P S   F R O  M    D AT A B A S E  ///

	function delete_trips($sheet_id)

	{

		$db = new Database;	

		$db->connect();

		

		$sQuery = "SELECT trip_id FROM ".TBL_TRIPS." 

								WHERE sheet_id = '$sheet_id'";

		if($db->query($sQuery) && $db->get_num_rows() > 0)

		{

			$trips =  $db->fetch_all_assoc(); 

		}

		

		$fQuery = "SELECT sheet_id FROM ".TBL_SHEET." 

								WHERE sheet_id = '$sheet_id'";

		if($db->query($fQuery) && $db->get_num_rows() > 0)

		{

			$sheet =  $db->fetch_all_assoc(); 

		}

		

		

		$nQuery = "DELETE  FROM ".TBL_SHEET." 

								WHERE sheet_id = '$sheet_id'";

		

		$dQuery = "DELETE  FROM ".TBL_TRIPS." 

								WHERE sheet_id = '$sheet_id'";

		if($db->execute($dQuery))

		{

			for($t = 0;$t<sizeof($trips);$t++)

			{

				$trip_id = $trips[$t]['trip_id'];

				$dQuery = "DELETE FROM ".TBL_TRIP_DET." 

										WHERE trip_id = '$trip_id'";

				$db->execute($dQuery);

			}

			

			if($db->execute($nQuery))

			{

			  

			  echo"<script>alert('Sheet Record Deleted Successfully')</script>";

			  echo "<script>location.href='index.php'";

		echo "</script>";

	   

	

			

			}

			return true;

		}

		else

		{

			return false;

		}

		$db ->close();

	}

// E N D     O F     F U N C T I O N   ///	 

	 

if(isset($_GET['delId']) && $_GET['delId'] != '')

{

	delete_trips($sheet_id);

}





	if(!empty($_GET['Page']))

	{ $page = $_GET['Page']; }

	else

	{ $page = 1; }

	

	$limit = 10;

	$offset = (($page * $limit) - $limit);

	$maxRecord = 10; 

	



if (verify($_POST['search'],'index.php'))

{

	$sdate =sql_replace($_POST['sdate']);

	$edate =convertDateToMySQL($_POST['enddate']);

	

	

	if(verify($sdate,'index.php'))

	{

		$whr = "Where date = $sdate";

		if($edate != '')

			$whr = "Where dated BETWEEN '$sdate' and '$sdate'";

	

	

	 $Querypg	="SELECT COUNT(*) FROM ".TBL_SHEET." $whr ";

	

	 $totalRows = $db->executeScalar($Querypg);

	 $pagination = new pagination($_GET['pageNum'],$maxRows=10,$totalRows); 

	 $s_query="SELECT * FROM ".TBL_SHEET." $whr LIMIT ".$pagination->startRow . ",".$pagination->maxRows;

	

	$sdate = convertDateFromMySQL($_POST['startdate']);

	$edate =convertDateFromMySQL($_POST['enddate']);

	

	$smarty->assign('sdate',$sdate);

	 $smarty->assign('edate', $edate);

	 }

	 else

	 {

		 $s_query = "SELECT sum(dated)  FROM ".TBL_SHEET;

	 }

}

else

{

	$Querypg	="SELECT COUNT(*) FROM ".TBL_SHEET;

	$totalRows = $db->executeScalar($Querypg);

	$pagination = new pagination($_GET['pageNum'],$maxRows=10,$totalRows); 

	$s_query = "SELECT *  FROM ".TBL_SHEET." ORDER BY dated DESC LIMIT ".$pagination->startRow.",".$pagination->maxRows;

}

	/*************** Paging ************** */



	// Fetch all vehicles list



	//$Querypg = "SELECT COUNT(*) FROM ".TBL_VEHICLES.",".TBL_VEHTYPES." WHERE vtype=".TBL_VEHTYPES.".id $whr_clz";	

	/*$Querypg = "SELECT COUNT(*) FROM ".TBL_SHEET;	

	$totalRows = $db->executeScalar($Querypg);*/

 

	/*$Query2 = "SELECT ".TBL_VEHICLES.".*,".TBL_VEHTYPES.".id AS vtid,".TBL_VEHTYPES.".vehtype FROM ".TBL_VEHICLES.",".TBL_VEHTYPES." WHERE vtype=".TBL_VEHTYPES.".id $whr_clz LIMIT ".$pagination->startRow . ",".$pagination->maxRows;*/

	

	// ------------------------------- main query to fetch vehicles ---------------------------------------------//

	//$Query2 = "SELECT *  FROM ".TBL_SHEET." LIMIT ".$pagination->startRow . ",".$pagination->maxRows;

	

	

	if($db->query($s_query) && $db->get_num_rows() > 0)

	{

		$vehdetails = $db->fetch_all_assoc();

	} 



//debug($vehdetails);

for($i=0; $i<sizeof($vehdetails); $i++)

{

	$rQuery = "SELECT * FROM ".TBL_ADMIN." WHERE admin_id=".$vehdetails[$i]['upload_by']." ORDER BY admin_id DESC LIMIT 1";	

	if($db->query($rQuery) && $db->get_num_rows() > 0)

	{

		$rf = $db->fetch_all_assoc();

		$vehdetails[$i]['admin_name'] = $rf[0]['admin_name']; 

	}

	if(!is_file("../routing-sheets/".$vehdetails[$i]['dated']."_".$vehdetails[$i]['file_name']))

	{

		$vehdetails[$i]['file_name'] = "";

	}



	if($vehdetails[$i]['dated'] == $curdate)

	{

			$vehdetails[$i]['state'] = '1';			

	}else{

	

	$vehdetails[$i]['state'] = '0';	

	}

}

//echo $curdate."<br/>";

//debug($vehdetails);  

  

 		

  

    $pages =  $pagination->display_pagination();	

	  

	$db->close();

	$db2->close();

    $pgTitle = "Admin Panel -- Routing Panel Management";

	$smarty->assign("pgTitle",$pgTitle);

	$smarty->assign("msgs",$msgs);

	$smarty->assign("errors",$error);

	$smarty->assign("sdate",$sdate);	

	$smarty->assign_by_ref('vehdetail',$vehdetails);

	$smarty->assign("pages",$pages);

	$smarty->assign("st",$st);			

	$smarty->display('rpaneltpl/index.tpl');

		

?> 