<?php
   	include_once('../DBAccess/Database.inc.php');
	$db = new Database;	
    $msgs = '';
	$noRec = '';
	
	$msgs .= $_GET['msg'];
	$db2 = new Database;	
    $sheet=$_GET['id'];
	$acknowledge_status = $_GET['acknowledge_status'];
	$st=$_GET['st'];
	if(!$st) { $st=9; } 
	$pg=$_GET['pg'];
	//$st=9;
	$yes=0;
	$db->connect();
	$db2->connect();
	include_once('../include_file.php');
	 $Qup="UPDATE trip_details SET drv_id = '' WHERE date = '$today' AND drv_id = '000000' "; $db->execute($Qup);
	//$today = $_REQUEST['date'];
	if($today==''){ $today = date("Y-m-d",strtotime("+1 day")); }
	if($today==date("Y-m-d",strtotime("+1 day")) || $today==date("Y-m-d",strtotime("+2 day")) || $today==date("Y-m-d",strtotime("+3 day")) || $today==date("Y-m-d",strtotime("+4 day"))){	$yes=1;	}
	if(isset($_GET['acknowledge_status'])) { $acknowledge_status = $_GET['acknowledge_status']; }
	//$ad=$_GET['ad'];
	
	
	/*************** Paging ************** */
	// Delete Category Script
    if(isset($_GET['delId']) && $_GET['delId'] != '')
	{   
   		$QueryDel = "update ".TBL_TRIP_DET." set status='3' WHERE tdid='".$_GET['delId']."'";
  		if($db->query($QueryDel))
		{
		echo "<script>location.href='nextdaygrid.php?st=9&date=".$_GET['dt']."'";
		echo "</script>";
   		exit;
	  	//Delete subcategories as wel
	 	//$db2->query($QuerypicDel = "DELETE FROM `categories` WHERE id='".$_GET['delId']."'");	   		
		}else{
	   		 header("Location: grid.php?id=".$sheet);
	   		exit;	
		}  
 	}
	// 	S E A R C H    C O D E  ///
		if(isset($_POST))
		{
			$drv = $_POST['driver'];
			$drv = $_GET['driver'];
			$usr = $_POST['user'];
			$usr = $_GET['user'];
			$user = $_POST['user'];
			$user = $_GET['user'];
			$account = $_POST['account'];
			$account = $_GET['account'];
			//$sheet = $_POST['id'];
				$whr = '';
			if ($drv!='')
			{
				$whr .=" AND td.drv_id = '$drv'";
			}
			if ($user!='')
			{
				$whr .=" AND t.trip_user LIKE '%$user%'";
			}
			if ($account!='')
			{
				$whr .=" AND t.account = '$account'";
			}
	}
		// S E A R  C  H    C O D I T I O N   E N D  //
		if(isset($_GET['id']))
		{
			$sheet = $_SESSION['sheet'] = $_GET['id'];
		}
		else
		{
			$sheet = $_SESSION['sheet'] ;
		}
		//$st=$_GET['st'];
		if($st =='' || $st == '5' )
		{
			$st=5;
			$cond = " AND td.status IN ('6','5','2','0')";
		}
		else
		{
		   if($st == '4'){ $cond = " AND td.status IN ('1','4')"; }
		   else{
		       $cond = " AND td.status = '".$st."' "; 
			}
		}
				
		if($pg==''){
		 $Query = "SELECT t.sheet_id, td.veh_id,td.acknowledge_status,  t.trip_code, t.trip_id,  t.trip_user,  t.trip_clinic,  t.trip_date, 
		  t.trip_tel, td.tdid, td.trip_id, td.type, td.pck_add,td.aptime,td.pck_time,td.aptime, td.drp_atime,td.reqid, 
		  td.drp_add,  td.drp_time,  td.trip_miles,td.wc,t.account,td.trip_remarks,  td.drv_id, td.status,td.duplicate,td.picklocation, td.pickup_instruction, td.droplocation, td.destination_instruction,td.p_phnum,td.d_phnum,td.ccode, ri.org_apptime
		  FROM trips as t 
		  INNER JOIN trip_details as td ON t.trip_id=td.trip_id 
		  LEFT JOIN drivers as dr ON td.drv_id = dr.drv_code 
		  left join request_info ri on ri.id=td.reqid 
		  WHERE t.trip_date='$today' $cond $whr ORDER by td.pck_time ASC,td.tdid ASC";
		  }else{
		   $Query = "SELECT t.sheet_id, td.veh_id,td.acknowledge_status, t.trip_code, t.trip_id,  t.trip_user,  t.trip_clinic,  t.trip_date, 
		  t.trip_tel, td.tdid, td.trip_id, td.type, td.pck_add,td.aptime,td.pck_time,td.aptime, td.drp_atime,td.reqid, 
		  td.drp_add,  td.drp_time,  td.trip_miles,td.wc,t.account,td.trip_remarks,  td.drv_id, td.status,td.duplicate, td.picklocation, td.pickup_instruction, td.droplocation, td.destination_instruction,td.p_phnum,td.d_phnum,td.ccode, ri.org_apptime  
		  FROM trips as t 
		  INNER JOIN trip_details as td ON t.trip_id=td.trip_id 
		  LEFT JOIN drivers as dr ON td.drv_id = dr.drv_code 
		  left join request_info ri on ri.id=td.reqid 
		  WHERE t.trip_date='$today' $cond $whr ORDER by td.pck_time ASC,td.tdid ASC";
		  }
		// print($Query." >> ");
		if($db->query($Query) && $db->get_num_rows() > 0)
		{
			$trips = $db->fetch_all_assoc();
		   for ($i = 0;$i<sizeof($trips);$i++)
		   {$trip_user = $trips[$i]['trip_user'];
		   	$Qcomments="SELECT * FROM patient WHERE LTRIM(LOWER(name)) = '".strtolower(trim(($trip_user)))."'";
			if($db->query($Qcomments) && $db->get_num_rows() > 0)
				 {	 $dc = $db->fetch_one_assoc();  $trips[$i]['pcomments'] = $dc['comments']; }
			 $did = $trips[$i]['drv_id'];
			$drvQuery = "SELECT  fname, lname, drv_code,sip
										FROM ".TBL_DRIVERS."
											WHERE  drv_code  = '$did'";
				if($db->query($drvQuery) && $db->get_num_rows() > 0)
				 {
					 $drv = $db->fetch_row_assoc();
					 $trips[$i]['driver'] = $drv['fname']." ".$drv['lname'];
					 // $trips[$i]['sip'] = $drv['sip'];
				 }
				 		//to get vehicle type
		$Q="SELECT vt.vehtype FROM vehtype as vt,request_info as ri 
			WHERE ri.vehtype=vt.id AND
			ri.id='".$trips[$i]['reqid']."'";		 
			if($db->query($Q) && $db->get_num_rows() > 0) {$ata=$db->fetch_one_assoc(); }	 
				 
				 // $tripdata[$i]['oxygen'] 	=	$ata['oxygen'];
				 $trips[$i]['vehtype'] 			= 	$ata['vehtype'];
		   }
		  /* for ($i = 0;$i<sizeof($trips);$i++)
		   {
		 $vid = $trips[$i]['veh_id'];
				$drvQuery2 = "SELECT gpsurl,id
											FROM ".TBL_VEHICLES."
											WHERE  id  = '$vid'";
				if($db->query($drvQuery2) && $db->get_num_rows() > 0)
				 {
					 $vh = $db->fetch_row_assoc();
					 $trips[$i]['gps'] = $vh['gpsurl'];
				 }
		   }*/
		}
	//debug($trips);  
	$drvQuery = "SELECT  fname, lname, drv_code FROM ".TBL_DRIVERS." WHERE del = '0' and drvstatus !='Suspended' ORDER BY  fname ASC";
	if($db->query($drvQuery) && $db->get_num_rows() > 0)
		$drivers = $db->fetch_all_assoc();
	$getDriver = "SELECT * FROM ".TBL_DRIVERS." WHERE drvstatus='Active' AND del='0' ORDER BY  fname ASC";
 	if($db->query($getDriver) && $db->get_num_rows())
	{
		$driverdata = $db->fetch_all_assoc();
	}
	$ad='0';
	$getuser = "SELECT trip_user FROM trips WHERE trip_date = '$today' ORDER BY trip_user ASC";
 	if($db->query($getuser) && $db->get_num_rows())
	{
		$userdata = $db->fetch_all_assoc();
	}
	$getuser2 = "SELECT distinct(trip_clinic)  FROM trips WHERE trip_date = '$today' ORDER BY trip_clinic ASC";
 	if($db->query($getuser2) && $db->get_num_rows())
	{
		$userdata2 = $db->fetch_all_assoc();
	}
		$g2 = "SELECT id,account_name  FROM accounts ORDER BY account_name ASC";
 	if($db->query($g2) && $db->get_num_rows() > 0)
	{	$accounts = $db->fetch_all_assoc();	}
	$db->close();
	$db2->close();
    $pgTitle = "Admin Panel -- Routing Panel";
	$smarty ->assign("id",$sheet);
	$smarty ->assign("user",$user);
	$smarty ->assign("clinic",$clinic);
	$smarty ->assign("drv",$drv);
	$smarty ->assign("usr",$usr);
	$smarty->assign("userdata2",$userdata2);
	$smarty->assign("accounts",$accounts);
	$smarty->assign("pgTitle",$pgTitle);
	$smarty->assign("st",$st);
	$smarty->assign("ad",$ad);
	$smarty ->assign("drivers",$drivers);
	$smarty ->assign("users",$users);
	$smarty ->assign("clinic",$clinic);
	$smarty->assign("driverdata",$driverdata);
	$smarty->assign("userdata",$userdata);
	$smarty->assign("msgs",$msgs);
	$smarty->assign("NoRecord",$noRec);	
	$smarty->assign_by_ref('membdetail',$trips);
	$smarty->assign("paging",$paging);
	$smarty->assign("acknowledge_status",$acknowledge_status);
	$smarty->assign("date",$today);
	$smarty->assign("date0",date('Y-m-d'));
	$smarty->assign("yes",$yes);
	$smarty->display('rpaneltpl/nextdaygrid.tpl');
?>