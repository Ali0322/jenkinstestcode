<?php
   	include_once('../DBAccess/Database.inc.php');
    //include('../Classes/pagination-class.php');	
	$msgs = '';
	$noRec = '';
    $error = '';
	$db = new Database;	
	$db->connect();
	if(isset($_GET['submit']))
	{ 
		$stdate = sql_replace($_GET['startdate']);
		$enddate   = sql_replace($_GET['enddate']);
        $hospname   = sql_replace($_GET['hospname']);
		$pname    = sql_replace($_GET['pname']);
		$whr = '';
		if($stdate!= '' && $enddate!='')
		{
			$stdate = convertDateToMySQL($stdate);
			$enddate = convertDateToMySQL($enddate);
			$whr = " ri.appdate BETWEEN '$stdate 00:00:00' AND '$enddate 23:59:59'";
		}
		if($hospname != '' && $hospname != '0'){
              $whr .= "  AND ri.account = '".$hospname."'";   		  
		  }		
		if($pname!= '')
		{
			$whr .= "AND LOWER(ri.clientname) = '".strtolower($pname)."'"; 
		}
     $query = "SELECT ri.clientname,ri.pickaddr,ri.appdate,ri.milage,ri.charges,ri.id,ac.account_name FROM request_info ri LEFT JOIN accounts ac on ri.account=ac.id WHERE $whr ORDER BY ri.appdate DESC LIMIT 500";		
		if($db->query($query) && $db->get_num_rows() > 0)
		{
			$data = $db->fetch_all_assoc();
		}
	}
	 $Queryhosp1 = "SELECT id,account_name FROM ".accounts." WHERE 1=1  ORDER BY `account_name` ASC";
   if($db->query($Queryhosp1) && $db->get_num_rows() > 0)
	{	   $hosp = $db->fetch_all_assoc();    }					
		$db->close();
	$stdate = convertDateFromMySQL($stdate);
	$enddate = convertDateFromMySQL($enddate);
	$pgTitle = "Admin Panel -- ";
	$smarty->assign("hosp",$hosp);
	$smarty->assign("hospname",$hospname);
	$smarty->assign("msgs",$msgs);
	$smarty->assign("errors",$error);	
	$smarty->assign("data",$data);	
	$smarty->assign('stdate',$stdate);	
	$smarty->assign("enddate",$enddate);		
	$smarty->assign("pname",$pname);		
	$smarty->assign("hosp",$hosp);	
	$smarty->assign("totalRows",$totalRows);
	$smarty->display('reportstpl/edi.tpl');
?>