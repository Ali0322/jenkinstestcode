<?php

/* *************************** *

	   * Created On : 31st March,2009 

	   * Coded By : Muhammad Sajid

	   * All Rights Reserved 2009 by : HITS (Hybrid IT Services) 

	   * http://www.hybriditservices.com/demos/httglobal-2/hybridTracktrans.com

	   *************************** */

	

require_once('../DBAccess/Database.inc.php');

	

	$db = new Database;	

	$db->connect();





	    $today= date('Y-m-d');

		$Querypg	="SELECT * FROM ".TBL_SHEET." where dated='$today' ";

		if($db->query($Querypg) && $db->get_num_rows() > 0)

		{

			$vehdetails = $db->fetch_all_assoc();

			$sheet_id=	$vehdetails[0]['sheet_id'];

		}

		

		if($sheet_id==''){

		

			$sheet_id = '0';

			

		}	

		

	    echo "<script>window.location='grid.php?st=11';</script>";

		exit;





	$db->close();



    $smarty->assign("pgTitle",$pgTitle);

    $smarty->assign("pgName",$name);	

	$smarty->assign("HeadingTitle",$contentDetails[0]['contTitle']);	

	//$smarty->assign("content",$pgContent);	

	$smarty->assign("testi",$testi);

    $smarty->assign("seokeywords",$seokeywords);

	$smarty->assign('seodescription',$seodescription);	

	$smarty->assign("foot",$foot);	

    $smarty->display('grid_date.tpl');	



?>