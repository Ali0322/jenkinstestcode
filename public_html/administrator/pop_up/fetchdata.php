<?php
 include_once('../DBAccess/Database.inc.php');
 
 
 $db = new Database;	
	$db->connect();
	$limit = "10";
		
	$data = get_server_time();
	$time = $data[0];
	$date = $data[1];
	
	echo"<br>";								  
	echo $curdate = $date;
	echo"<br>"; 
	echo $curtime =  $time; 
	echo"<br>"; 
//	echo $endtime = date("H:i:s", strtotime("+$limit minutes".$time));
  echo  $endtime =  date("H:i:s",strtotime("+10 minutes".$time));
	$str = '';
						$sQuery = "SELECT tdid 
						  FROM ".TBL_TRIP_DET." 
						  WHERE date = '$curdate' AND status IN ('6','2','0') AND pickStatus != '0' AND dropStatus='0' AND drp_time < '$endtime' AND wc='0' ORDER by drp_time";
	if($db->query($sQuery) && $db->get_num_rows() > 0)
	{
		echo $db->get_num_rows();
		$trips =  $db->fetch_all_assoc(); 
	}
	for($i = 0;$i<sizeof($trips);$i++)
	{
		$str  .= '^'.$trips[$i]['tdid'];
 	}
	echo $str;
?>
