<?php
include_once('../DBAccess/Database.inc.php');

//include_once('../routingpanel/ExcellReader.php');

include_once('../../Classes/simplexlsx.class.php');

ini_set('memory_limit', '500M');

ini_set('max_execution_time', 1000); //300 seconds = 5 minutes

$db = new Database;	

$db->connect();

$msgs   = '';

$errors = '';

$getWorksheetName = array();

function daystodate($days){

	return date('Y-m-d', strtotime('1970-01-01') + strtotime("+".($days-25569)." days",0));}

//return DateTime::createFromFormat('Y-m-d', '1900-01-01')->modify('+ '.$days.' days')->modify('-2 day')->format('Y-m-d');

function nameorder($name){$A=explode(",",$name); return trim($A[1]).' '.trim($A[0]);}

function address_formate($address){

	$A=explode(",",$address);

	$A0=$A[0];//address

	$city=$A[1];//city

	$A2=trim($A[2]);//State and zip

	$state=substr($A2, 0,2); //State

	$zip=substr($A2, 2); //Zip code

	$ADD=explode("-",$A0);

	$address=$ADD[0];

	if($ADD[1]){$room=$ADD[1];}

	return trim($address).','.trim($room).','.trim($city).','.trim($state).','.trim($zip); 

	}

function phone_format($number){

	$number = '('. substr($number,0,3) .') '.substr($number,3,3).'-'.substr($number,6);

	return $number;}	

function daystotime($day){ $total_seconds = $day*24*60*60;

$h= floor($total_seconds / (60*60));

$i= floor(($total_seconds%(60*60)) / 60);

//return $h.':'.$i.':00';

return  gmdate("H:i:s", $total_seconds);

}

function vehtype($vehtype,$db){

	 $Query = "SELECT id FROM  vehtype WHERE TRIM(LOWER(REPLACE(vehtype,' ','')))='".strtolower(trim(str_replace(' ','',$vehtype)))."' ";

	if($db->query($Query) && $db->get_num_rows() > 0){

	 $data = $db->fetch_one_assoc(); } return $data['id'];

	}	

function getIntegarVal($str){
	//$str = 'In My Cart : 11 12 items';
	preg_match_all('!\d+!', $str, $matches);
	return $matches;
}

function getPhone($str){
	$matches = array();
	// returns all results in array $matches
	preg_match_all('/[0-9]{3}[\-][0-9]{6}|[0-9]{3}[\s][0-9]{6}|[0-9]{3}[\s][0-9]{3}[\s][0-9]{4}|[0-9]{9}|[0-9]{3}[\-][0-9]{3}[\-][0-9]{4}/', $str, $matches);
	return $matches[0];	
}	

// Insert genral data from excel sheet

function gen_data($data,$db,$dated){
	$pickTime = trim($data[0]);
	$vtype = trim($data[1]);
	$midID=$patientName='';
	$dob = date('Y-m-d');
	$uInfo = getIntegarVal($data[3]);
	if((count($uInfo[0])>0)){
		$midID = $uInfo[0][0];	
		$dob = $uInfo[0][3].'-'.$uInfo[0][1].'-'.$uInfo[0][2];
		$dobChk = $uInfo[0][1].'/'.$uInfo[0][2].'/'.$uInfo[0][3];
		$patientName = str_replace(array($dobChk,$midID),'',$data[3]);
	}
	
	$pickPhone = getPhone($data[4]);
	$userPickPhone = '';
	if(count($pickPhone[0]>0)){
		$userPickPhone = $pickPhone[0];
		$pickAddress = str_replace($userPickPhone,'',$data[4]);
	}
	
	
	$dropPhone = getPhone($data[7]);
	$userDropPhone = '';
	if(count($dropPhone[0]>0)){
		$userDropPhone = $dropPhone[0];
		$dropAddress = str_replace(array($userDropPhone,'  '),'',$data[7]);
	}
	$miles = $data[9]; 
	$bookingComments=$data[10];
	
	
//$stripped = preg_replace('/\s/', '', $sentence);	 
//Pick time   ClientName/MidId/DOB FromAdd/Comm/Phone Miles      BookingComments  
//echo 'Pick time:'.trim($pickTime).' ClientName:'.$patientName.' MidId:'.$midID.' DOB:'.$dob.' FromAdd'.$pickAddress.' Phone'.$userPickPhone.' DropAddress:'.$dropAddress.' DropPhone:'.$userDropPhone.'.\ Miles:'.$data[9].' BookingComments:'.$data[10].'<br>';

	//echo '<pre>';
	//	print_r($data);
	//return true;
	//exit;
	


	 	$legid	 	  				= (trim($midID)); 

	 	$appdate 	  				= date('Y-m-d');

	 $vehicle_abbr 	  			= substr($vtype,0,1); 

	if($vehicle_abbr=='A'){$vehicle='Ambulatory';}

	if($vehicle_abbr=='W'){$vehicle='Wheel Chair';}

	if($vehicle_abbr=='VS'){$vehicle='Regular Stretcher';}

	if($vehicle_abbr=='BS'){$vehicle='Bariatric Stretcher';}

	if($vehicle_abbr=='BW'){$vehicle='Bariatric Wheel Chair';}

	

		$vehtype  					= vehtype($vehicle,$db);

   		$pname 	  					= nameorder(str_replace(array("'",","),array("`"," "),trim($patientName)));//str_replace('\'','`',

    	$picklocation				= ''; 

		$pickaddress  				= trim(str_replace("'"," ",$pickAddress));

		$pickup_instruction 	  	= '';

		$p_phnum					= trim($userPickPhone);

		

		if($pickTime<1){$apptime  	= daystotime($pickTime);}else{    	

		$apptime  					= $pickTime; //daystotime($data[14]); 

		}

		$droplocation				= ''; 

		$dropaddress  				= trim(str_replace("'"," ",$dropAddress));

		$destination_instruction 	= $bookingComments;

		$d_phnum					= trim($userDropPhone); 

		

		if($pickTime<1){    	$org_apptime  				= daystotime(trim($pickTime));  }else{

		

		$org_apptime  				= (trim($pickTime)); }

		

		

		$dob 	  					= $dob;//daystodate(trim($data[25]));

		$sex 	  					= '';

		$phnum						= trim($userPickPhone); 

		$mile 	  					= $miles; 

		$comments 	  				= trim($bookingComments); 

	if($_SESSION['leg_id']!=$legid){
		$_SESSION['leg_id']=$legid;	
	}

	$Q33="SELECT * FROM ".TBL_FORMS." WHERE 
	appdate = '".$appdate."' AND legaid='".$_SESSION['leg_id']."' AND reqstatus !='disapproved' ||
	appdate = '".$appdate."' AND legaid='$legid' AND reqstatus !='disapproved' || 
	appdate = '".$appdate."' AND legbid='$legid' AND reqstatus !='disapproved' || 
	appdate = '".$appdate."' AND legcid='$legid' AND reqstatus !='disapproved' ||
	appdate = '".$appdate."' AND legdid='$legid' AND reqstatus !='disapproved' 
	ORDER BY id DESC LIMIT 1";

	if($db->query($Q33) && $db->get_num_rows() > 0){
		$d5 = $db->fetch_one_assoc();
		$Q5="UPDATE ".TBL_FORMS." SET
				phnum='".$phnum."',
				d_phnum='".$d_phnum."'
				WHERE id = '".$d5['id']."'";
		$db->execute($Q5);	
	}else{

	$Q4="SELECT * FROM ".TBL_FORMS." WHERE appdate = '".$appdate."' AND clientname = '".$pname."' ORDER BY id DESC LIMIT 1 ";

	if($db->query($Q4) && $db->get_num_rows() > 0){
		$d5 = $db->fetch_one_assoc();
		/*$Q5="UPDATE ".TBL_FORMS." SET
				miles_string 		=	'".$d5['miles_string'].','.$mile."',
				milage				=	'".$totalmile."'
				WHERE id = '".$d5['id']."'";
		$db->execute($Q5);
*/
	}else{

		

	 $Qaccounts  = "SELECT id FROM " .  accounts ." WHERE TRIM(LOWER(account_name))='".strtolower(trim('Virg Premier'))."' " ;

	if($db->query($Qaccounts) && $db->get_num_rows() > 0){	$accounts = $db->fetch_one_assoc();

	$Q3  = "INSERT INTO ".TBL_FORMS." SET 
		account='".$accounts['id']."',
		miles_string = '".$mile."',
		milage='".$mile."',
		triptype='One Way',	
		vehtype='".$vehtype."',
		req_id='".$req_id."',
		pickaddr='".$pickaddress."',
		destination='".$dropaddress."',
		appdate='".$appdate."',
		apptime='".$apptime."',
		today_date=NOW(),
		clientname='".str_replace("'"," ",$pname)."',
		phnum='".$phnum."',
		legaid='".$legid."',
		picklocation='".str_replace("'"," ",$picklocation)."',
		pickup_instruction='".str_replace("'"," ",$pickup_instruction)."',
		p_phnum='".$p_phnum."',
		droplocation='".str_replace("'"," ",$droplocation)."',
		destination_instruction='".str_replace("'"," ",$destination_instruction)."',
		d_phnum='".$d_phnum."',
		org_apptime='".$org_apptime."',
		dob='".$dob."',
		sex='".$sex."',
		comments='".str_replace("'"," ",$comments)."'";
	 $db->execute($Q3);

	 

	 

	 $Qfind="SELECT name FROM patient WHERE LTRIM(LOWER(name)) = '".strtolower(trim(sql_replace($pname)))."' ";

		if($db->query($Qfind) && $db->get_num_rows()>0){}else{

			$Qinsert="INSERT INTO patient SET 

					name			=	'".sql_replace($pname)."',

					dob				=	'$dob',

					address			=	'".str_replace(',','',sql_replace($pickaddress))."',

					phone			=	'$phnum'"; 

					$db->execute($Qinsert);

			}

	 

	       }		

	}

	}

	

	}

if((!empty($_FILES["file_csv"])) && ($_FILES['file_csv']['error'] == 0)) { // print_r($_FILES); exit;

	$limitSize	= 150000000; //(150000 kb) - Maximum size of uploaded file, t

	$fileName	= basename($_FILES['file_csv']['name']);

	$fileSize	= $_FILES["file_csv"]["size"];

		$dated		= $_POST['dated'];



	$fileExt	= substr($fileName, strrpos($fileName, '.') + 1);

	if (($fileExt == "xlsx") || ($fileExt == "csv") && ($fileSize < $limitSize)) {

		$getWorksheetName = array();

		$xlsx = new SimpleXLSX( $_FILES['file_csv']['tmp_name'] );

		$getWorksheetName = $xlsx->getWorksheetName();

		$count = $xlsx->sheetsCount(); //print_r($xlsx->rows); exit;
		for($j=1; $j<=$count; $j++){

			$sheetdata = $xlsx->rows($j);

			 for($k=1; $k<sizeof($sheetdata); $k++)

			 { //print_r($sheetdata[$k] ); exit;

			  gen_data($sheetdata[$k],$db,$dated); 

			  } 

		}

		echo '<script>alert("Virg Trips Uploaded Successfully");</script>';

				echo '<script>javascript:history.back();</script>';

				exit;

	}

	else{ echo "<script>alert('The Selected file is not supported!');</script>";

	      echo '<script>javascript:history.back();</script>'; exit; }

}

$db->close();

$pgname="add sheet"; 

$smarty->assign("pgTitle",'Add Trips Sheet');

$smarty->assign("pgname",$pgname);	

$smarty->display('mercytpl/virg_trip_sheet.tpl'); 
?>