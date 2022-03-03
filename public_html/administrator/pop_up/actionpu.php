<?php
include_once('../DBAccess/Database.inc.php');
include_once("../Classes/MyMailer.php");
$mail = new MyMailer;
$db = new Database;	
$db->connect();
$db2 = new Database;	
$db2->connect();
$db3 = new Database;	
$db3->connect();
$db4 = new Database;	
$db4->connect();
include_once('../routingpanel/rating.php');
/********************************************************************************************************/
/*
/*  BUSINESS LOGIC ACTIONPU.PHP
/*  
/*  If $_POST Isset that means C.M has performed any action on the request.
/*
/*     1. Get details of the trip
/*     2. If Status is not In Progress Perform rating
/*     3. If Status is In Progress don't do anything and dispose off the buzzer by redirecting to grid.php
/*  
/*     4. Rating function puRating(trip id, current time of system, driver id, current Status)
/*     5. If Status is 'Not Going' or 'Not at home' updated Trip detail table field Status and get time difference
/*        to mark trip as Success or Delayed
/*        
/*     6. Shot Email if C.M has not performed any action.
/*     7. Do not perform any rating on warning script.
/* 
/*     
/********************************************************************************************************/
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
	  //Cancelled
	  case '3':
	        $rating = puRating($tdid,$time,$drv_id,3,'Cancelled',$db,$db2);
			break;		
	  //Picked		
	  case '6':
	        $rating = puRating($tdid,$time,$drv_id,6,'Picked',$db,$db2);		
			break;	   
	  //Not at home		
	  case '7':	  	  	  
	        $rating = puRating($tdid,$time,$drv_id,7,'Not at Home',$db,$db2);		
			break;
	  //Not Going		
	  case '8':
	        $rating = puRating($tdid,$time,$drv_id,8,'Not Going',$db,$db2);		
			break;
	}
	        if($rating){
			    $sid = getSheetId($tdid,$db);
				if($st == '6'){ $st = '5'; }
				echo "<script>alert('Trip Record has been successfully updated!');</script>";
				echo "<script>location.href='../routingpanel/grid.php?st=".$st."&ad=0&id=".$sid."';</script>";	
				exit;		
			}
}	 
?>