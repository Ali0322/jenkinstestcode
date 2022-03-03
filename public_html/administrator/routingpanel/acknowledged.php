<?php

   	include_once('../DBAccess/Database.inc.php');
	$db = new Database;
	$db->connect();
	$id = $_POST['id'];
	$current_time=date("Y-m-d H:i:s");
	 $qry_st  = "UPDATE ".TBL_TRIP_DET." SET acknowledge_status = '1', status = '5',driverconfirm_time = '$current_time' WHERE tdid = '$id' " ;
					if($db->execute($qry_st))
					{
					echo $data['refresh']; }
						
	$db->close();	

?> 