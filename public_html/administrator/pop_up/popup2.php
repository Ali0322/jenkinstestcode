<?php
include_once('../DBAccess/Database.inc.php');
 $db = new Database;	
	$db->connect();
if(isset($_GET))
{
	$qtime = $db->query('SELECT NOW() AS tym');
	$get = $db->fetch_one_assoc();
	$xp = explode(' ',$get['tym']);
	$time = $xp[1];
	
	$id = $_GET['id'];
	$limit = 10;
	$curdate = date("Y-m-d",time()); 
	$curtime =  date("H:i:s",strtotime($time)); 
	$endtime = date("H:i:s", strtotime("+$limit minutes".$curtime));
	
	/*$shQuery = "SELECT a.trip_id, a.trip_user, a.trip_clinic, b.pck_time, b.drp_time, b.drv_id 
							 From ".TBL_TRIPS." as a , ".TBL_TRIP_DET." as b
							 WHERE  a.trip_id = '$id' ";*/
	
	$shQuery = "SELECT trip_id, pck_time, drp_time, drv_id, tdid 
							 From ".TBL_TRIP_DET." 
							 WHERE  tdid = '$id' ";
	if($db->query($shQuery) && $db->get_num_rows() > 0)
	{
		$trips =  $db->fetch_row_assoc(); 
	}

	$trip_id = $trips['trip_id'];

	$trQuery = "SELECT trip_user, trip_clinic
							 From ".TBL_TRIPS." 
							 WHERE  trip_id = '$trip_id' ";
	if($db->query($trQuery) && $db->get_num_rows() > 0)
	{
		$data =  $db->fetch_row_assoc(); 
	}	
	
	$drv_code = $trips['drv_id'];
	$drvQuery = "SELECT fname, lname
							 FROM ".TBL_DRIVERS." 
							 WHERE  drv_code = '$drv_code'";
	if($db->query($drvQuery) && $db->get_num_rows() > 0)
	{
		$driver =  $db->fetch_row_assoc(); 
	}
	$trips['driver'] = $driver['fname']." ".$driver['lname'];
	$trips['user'] = $data['trip_user'];
	$trips['clinic'] = $data['trip_clinic'];
}

$smarty->assign("trip",$trips);
$smarty->display("popup2.tpl");
?>