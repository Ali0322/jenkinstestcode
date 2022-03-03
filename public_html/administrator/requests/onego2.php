<?php
   	include_once('../DBAccess/Database.inc.php');
	$db = new Database;	
   $msgs = '';
	$noRec = '';
	$msgs .= $_GET['msg'];
	$db->connect();
	$c=0;
	$chkDate=date('Y-m-d');
	$dt1=date("m/d/Y",strtotime("+1 day"));
	$dt=date("m/d/Y",strtotime("+1 year"));
if($_POST['search']){ //print_r($_POST);
	$hostpital_id 		= $_POST['hostpital_id'];
	$startdate 			= convertDateToMySQL($_POST['startdate']);
	if($startdate<$chkDate){
		$startdate=$chkDate;
	}
	$enddate 			= convertDateToMySQL($_POST['enddate']);
	$dob 				= $_POST['dob'];
	$dt 				= $_POST['enddate'];
	$clientname 		= str_replace('\'','`',$_POST['clientname']);
	$Query2 = "SELECT f.*,r.hospname,r.userid FROM ".TBL_FORMS." as f 
	left join ".TBL_REQUESTS." as r on r.reqid=f.req_id 
	WHERE LTRIM(LOWER(f.clientname))='".strtolower(trim(mysql_real_escape_string($clientname)))."' 
	AND appdate BETWEEN '".$startdate." 00:00:00' AND '".$enddate." 23:59:59' AND rec_ind = 'rec'   
	 ORDER BY f.appdate ASC ";
	/* $Query2 = "SELECT f.*,r.hospname FROM ".TBL_FORMS." as f 
	left join ".TBL_REQUESTS." as r on r.reqid=f.req_id 
	WHERE f.dob='".convertDateToMySQL($dob)."' 
	AND LTRIM(LOWER(f.clientname))='".strtolower(trim($clientname))."' 
	AND r.userid = '$hostpital_id'
	AND appdate BETWEEN '".$startdate." 00:00:00' AND '".$enddate." 23:59:59'   
	 ORDER BY f.appdate ASC ";*/
		if($db->query($Query2) && $db->get_num_rows()){ $data = $db->fetch_all_assoc(); 
		$clinic = $data[0]['hospname'];
	$dates = array();
	$Monday=array();
	$Tuesday=array();
	$Wednesday=array();
	$Thursday=array();
	$Friday=array();
	$Saturday=array();
	$Sunday=array();
	for($i=0;$i<sizeof($data);$i++){$pendingids.=$data[$i]['id'].'@'; $c++;
	$s=explode('-',$data[$i]['appdate']);
	$ss=$data[$i]['appdate'].'#'.date("l", mktime(0,0,0,$s[1],$s[2],$s[0]));
	
	if(preg_match('/Monday/', $ss )){ 	array_push($Monday,str_replace('#Monday','',$ss));} 
	if(preg_match('/Tuesday/', $ss )){ 	array_push($Tuesday,str_replace('#Tuesday','',$ss));} 
	if(preg_match('/Wednesday/', $ss )){array_push($Wednesday,str_replace('#Wednesday','',$ss));} 
	if(preg_match('/Thursday/', $ss )){ array_push($Thursday,str_replace('#Thursday','',$ss));} 
	if(preg_match('/Friday/', $ss )){ 	array_push($Friday,str_replace('#Friday','',$ss));} 
	if(preg_match('/Saturday/', $ss )){ array_push($Saturday,str_replace('#Saturday','',$ss));}
	if(preg_match('/Sunday/', $ss )){ 	array_push($Sunday,str_replace('#Sunday','',$ss));}  
	array_push($dates,$ss);
	} $pendingids = substr($pendingids, 0, -1); }
//print_r($Monday);
if($Monday)		{	$Mondaycheck=1;		$tdmonday=@end(array_values($Monday));	}
if($Tuesday)	{	$Tuesdaycheck=1;	$tdtuseday=@end(array_values($Tuesday));	}
if($Wednesday)	{	$Wednesdaycheck=1;	$tdwednesday=@end(array_values($Wednesday));}
if($Thursday)	{	$Thursdaycheck=1;	$tdthirsday=@end(array_values($Thursday));	}
if($Friday)		{	$Fridaycheck=1;		$tdfriday=@end(array_values($Friday));	}
if($Saturday)	{	$Saturdaycheck=1;	$tdsaturday=@end(array_values($Saturday));	}
if($Sunday)		{	$Sundaycheck=1;	$tdsunday=@end(array_values($Sunday));	}
//echo $Tuesdaycheck;
 //if(preg_match('/Distance/', $result[$i] )){ $required = $result[$i];} 
//print_r($data);// exit;

	 $paddr=explode(',',$data[0]['pickaddr'],3);
	  $daddr=explode(',',$data[0]['destination'],3);
	  $backaddr=explode(',',$data[0]['backto'],3);
	  $bck=$backaddr[0].','.$backaddr[2];
	  $bsuiteroom=$backaddr[1];
	  $pckaddr=$paddr[0].','.$paddr[2];
	  $psuiteroom=$paddr[1];
	  $drpaddr=$daddr[0].','.$daddr[2];
	  $dsuiteroom=$daddr[1];

}
   $Qaccounts  = "SELECT * FROM " .  accounts ." ORDER BY account_name ASC " ;
	if($db->query($Qaccounts) && $db->get_num_rows() > 0){
		$accounts = $db->fetch_all_assoc();
	 }
 $drvQuery = "SELECT  d.fname, d.lname, d.drv_code FROM ".TBL_DRIVERS." as d WHERE d.drvstatus !='Suspended' ORDER BY d.fname ASC";
	if($db->query($drvQuery) && $db->get_num_rows() > 0)
		$drivers = $db->fetch_all_assoc();
		
	//Admin level division
$QueryH="SELECT id,hospname FROM ".TBL_HOSPITALS;
   if($db->query($QueryH) && $db->get_num_rows() > 0){$hospitals=$db->fetch_all_assoc();}
 $qv="SELECT * FROM " .TBL_VEHTYPES;if($db->query($qv)&&$db->get_num_rows()>0){$vehiclepref=$db->fetch_all_assoc();}
 //GET STATES LIST
 $gstat = "SELECT * FROM ".TBL_STATES; if($db->query($gstat) && $db->get_num_rows() > 0){$slist=$db->fetch_all_assoc();}
//GET App types
$gappt="SELECT * FROM ".appointment_type; if($db->query($gappt) && $db->get_num_rows() >0){$appdata = $db->fetch_all_assoc();}		 	
 	//print_r($data);
	//End of admin level devision	
	$db->close();
    $pgTitle = "Admin Panel -- ";
	$smarty->assign("pgTitle",$pgTitle);
	$smarty->assign("msgs",$msgs);
	$smarty->assign("st",$st);
	$smarty->assign("accounts",$accounts);
	$smarty->assign("req",$uid);
	$smarty->assign("data",$data);
	$smarty->assign("post",$_POST);	
	$smarty->assign("clinic",$clinic);	
	$smarty->assign("drivers",$drivers);	
	$smarty->assign("hospitals",$hospitals);	
	$smarty->assign("hostpital_id",$_POST['hostpital_id']);		
	$smarty->assign("pendingids",$pendingids);
	$smarty->assign("vehiclepref",$vehiclepref);
	$smarty->assign("c",$c);
	$smarty->assign("dob",$_POST['dob']);
	$smarty->assign("enddate",$dt);	
	$smarty->assign("startdate",$dt1);	
	$smarty->assign("states",$slist);	
	$smarty->assign("appdata",$appdata);

	$smarty->assign("bck",$bck);
	$smarty->assign("bsuiteroom",$bsuiteroom);
	$smarty->assign("pckaddr",$pckaddr);
	$smarty->assign("psuiteroom",$psuiteroom);
	$smarty->assign("drpaddr",$drpaddr);
	$smarty->assign("dsuiteroom",$dsuiteroom);


	
	$smarty->assign("Mondaycheck",$Mondaycheck);	
	$smarty->assign("Tuesdaycheck",$Tuesdaycheck);
	$smarty->assign("Wednesdaycheck",$Wednesdaycheck);
	$smarty->assign("Thursdaycheck",$Thursdaycheck);
	$smarty->assign("Fridaycheck",$Fridaycheck);
	$smarty->assign("Saturdaycheck",$Saturdaycheck);
	$smarty->assign("Sundaycheck",$Sundaycheck);
	
	$smarty->assign("tdmonday",$tdmonday);
	$smarty->assign("tdtuseday",$tdtuseday);	
    $smarty->assign("tdwednesday",$tdwednesday);	
    $smarty->assign("tdthirsday",$tdthirsday);
	$smarty->assign("tdfriday",$tdfriday);
	$smarty->assign("tdsaturday",$tdsaturday);
	$smarty->assign("tdsunday",$tdsunday);
				
	$smarty->display('reqtpls/onego2.tpl');
?>