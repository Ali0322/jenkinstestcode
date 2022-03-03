<?php
include_once('DatabaseUS.inc.php');
	$db = new Database;	
	$db->connect();
	if(isset($_GET['action']) && isset($_GET['driverID']) && $_GET['action'] == 'updateCurrentUserLocation'){
if (isset($_GET['latitude']) && isset($_GET['longitude'])) {
	$lat 		= sql_replace($_GET['latitude']);
	$long 		= sql_replace($_GET['longitude']);
	$speed 		= sql_replace($_GET['speed']);
	$driverID 	= sql_replace($_GET['driverID']);
	$plat 				= sql_replace($_GET['plat']);
	$plong 				= sql_replace($_GET['plong']);
	$location_method 	= sql_replace($_GET['location_method']);
	$accuracy 			= sql_replace($_GET['accuracy']);
	$direction 			= sql_replace($_GET['direction']);
	//$location_network_status 	= sql_replace($_GET['location_network_status']);
	$last_updated=date("Y-m-d H:i:s");
	$query = "UPDATE drivers SET 	lat 				= '$lat',
					 				longt 				= '$long',
									speed 				= '$speed',
									last_updated 		= '$last_updated',
									plat 				= '$plat',
									plong 				= '$plong',
									location_method 	= '$location_method',
									accuracy			='$accuracy',
									direction			='$direction' WHERE drv_code='$driverID' "; 
	if($db->execute($query));// echo 'ok'; else echo 'not ok';
}
//Inserting data for tracking history
	$qtime = $db->query('SELECT NOW() AS tym');
	$get = $db->fetch_one_assoc();
	$currenttime = $get['tym'];
 $time1 = strtotime($currenttime); // it is big one
 $query = "SELECT datetime FROM trackinghistory WHERE driver_code = '$driverID' ORDER BY id DESC LIMIT 1 ";
 if($db->query($query) && $db->get_num_rows()> 0) { $timearray = $db->fetch_one_assoc(); }
  $time2 = strtotime($timearray['datetime']);// it is less one
if(($time1 - $time2) > 60){
	$queryA = "INSERT  trackinghistory SET lat = '$lat', lang = '$long', driver_code ='$driverID' "; 
	$db->execute($queryA);
	}
 
//End of tracking history
  $jsonarray['status'] = 'true';
  } echo json_encode($jsonarray);
$db->close();
?>