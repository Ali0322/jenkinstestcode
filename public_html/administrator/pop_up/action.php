<?php
include_once('../DBAccess/Database.inc.php');
$db = new Database;	
$db->connect();
$db2 = new Database;	
$db2->connect();
include_once('../routingpanel/rating.php');
if(count($_POST) > 0){
     $tdid   = sql_replace($_POST['trip_id']);
	 $status = sql_replace($_POST['status']);
	 $drv_id = sql_replace($_POST['drv_id']);
     $st = sql_replace($_POST['status']);	
	//Admin Info Used for Emailing
 	 $admin = $_SESSION['admuser']['admin_name']." " .$_SESSION['admuser']['admin_lname'];
	//Get Server Time
	 $time_data = get_server_time();
     $time = $time_data[0]; //Time
	//If Status is In Progress
	switch($status){
	  //In Progress
	  case '5':
				echo "<script>location.href='../routingpanel/grid.php';</script>";	
				exit;
	  //Dropped		
	  case '4':
	        $rating = dropRating($tdid,$time,$drv_id,4,'Dropped',$db,$db2);		
			break;	  
	  }
	        if($rating){
			    $sid = getSheetId($tdid,$db);
				if($st == '2'){ $st = '4'; }
				echo "<script>alert('Trip Record has been updated successfully!');</script>";
				echo "<script>location.href='../routingpanel/grid.php?st=".$st."&ad=0&id=".$sid."';</script>";	
				exit;			
			}
}	   
?>