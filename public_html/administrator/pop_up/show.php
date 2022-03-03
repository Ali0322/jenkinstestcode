<?php
 include_once('../DBAccess/Database.inc.php');
 
 
 $db = new Database;	
	$db->connect();
	$limit = "10";
		
	$qtime = $db->query('SELECT NOW() AS tym');
	$get = $db->fetch_one_assoc();
	$xp = explode(' ',$get['tym']);
	 $date = $xp[0];
    $time = $xp[1];
		
							  
									  
	echo $curdate = $date;
	echo"<br>"; 
	 echo $curtime =  $time; 
		echo"<br>"; 
//	echo $endtime = date("H:i:s", strtotime("+$limit minutes".$time));
  echo  $endtime =  date("H:i:s",strtotime("+10 minutes".$time));
	
	$str = '';
	/*$sQuery = "SELECT tdid 
						  FROM ".TBL_TRIP_DET." 
						  WHERE date = '$curdate' AND status = '5' AND drp_ptime  BETWEEN '$curtime'                          AND '$endtime' ORDER by drp_ptime";*/
						  
					echo $sQuery = "SELECT * 
						  FROM ".TBL_TRIP_DET." 
						  WHERE date = '$curdate' AND status IN ('5','2','0')  AND drp_ptime < '$curtime' ORDER by drp_ptime";
						  	  
	/*$sQuery = "SELECT tdid 
						  FROM ".TBL_TRIP_DET." 
						  WHERE date = '$curdate' AND status = '0' ORDER by drp_ptime";*/
	if($db->query($sQuery) && $db->get_num_rows() > 0)
	{
		//echo $db->get_num_rows();
		$trips =  $db->fetch_all_assoc(); 
	}
	debug($trips);
	/*for($i = 0;$i<sizeof($trips);$i++)
	{
		$str  .= '^'.$trips[$i]['tdid'];
 	}
	echo $str;*/
?>
