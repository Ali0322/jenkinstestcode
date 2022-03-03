<?php
include_once('../DBAccess/Database.inc.php');
include_once('../routingpanel/parsecsv.lib.php');
//include_once('../../Classes/simplexlsx.class.php');
$csv = new parseCSV();
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
function nameorder($name){$A=explode(",",$name,2); return $A[1].' '.$A[0];}

function address_formate($address){

	$A=explode(",",$address,2);
return trim($A[0]).',,'.trim($A[1]); 
/*	$A0=$A[0];//address
	$city=$A[1];//city
	$A2=trim($A[2]);//State and zip
	$state=substr($A2, 0,2); //State
	$zip=substr($A2, 2); //Zip code
	$ADD=explode("-",$A0);
	$address=$ADD[0];
	if($ADD[1]){$room=$ADD[1];}
	return trim($address).','.trim($room).','.trim($city).','.trim($state).','.trim($zip); 
*/
	}

function phone_format($number){

	$number = '('. substr($number,0,3) .') '.substr($number,3,3).'-'.substr($number,6);

	return $number;}

function dateted_format($number){

	$number = substr($number,0,4) .'-'.substr($number,4,2).'-'.substr($number,6);

	return $number;}	

function time_format($number){

	$number = substr($number,0,2) .':'.substr($number,2,2);

	return $number;}

function pickuptime($number){

	$total_seconds = (substr($number,0,2))*3600 + (substr($number,2,2))*60;

	if($total_seconds > 60*60){$total_seconds =($total_seconds-(60*60));}

return  gmdate("H:i:s", $total_seconds);}				

function daystotime($day){ $total_seconds = $day*24*60*60;

$h= floor($total_seconds / (60*60));

$i= floor(($total_seconds%(60*60)) / 60);

return  gmdate("H:i:s", $total_seconds);

// return $h.':'.$i.':00';

}

function vehtype($vehtype,$db){

	 $Query = "SELECT id FROM  vehtype WHERE TRIM(LOWER(REPLACE(vehtype,' ','')))='".strtolower(trim(str_replace(' ','',$vehtype)))."' ";

	if($db->query($Query) && $db->get_num_rows() > 0){

	 $data = $db->fetch_one_assoc(); } return $data['id'];

	}	

	

// Insert genral data from excel sheet

function gen_data($data,$db,$dated=''){ 
			  $pname 	  				= nameorder(str_replace("'"," ",trim($data['textBox24'])));
			  //$dob 	  					= dateted_format(trim($data[3]));
			  $phnum					= ($data['textBox9']); 
			  $legid	 	  			= (trim($data['textBox4']));
			  $date_time 				=	explode(' ',trim($data['textBox11']));
			  $appdate 	  				= convertDateToMySQL($date_time[0]);
			  //$time						= sprintf("%04d", $data[10]);
			  $apptime 					= $date_time[1];
			  $date_time2 				=	explode(' ',trim($data['textBox10']));
			 $org_apptime  				= $date_time2[1];
			   $mile 	  				= trim($data['textBox40']);
			  // $cost 	  				= trim($data[22]);
			  $pickaddress  			= @address_formate(str_replace("'"," ",$data['textBox3']));
			  $picklocation				= trim(str_replace("'","",$data['textBox21']));
			  $dropaddress  			= @address_formate(str_replace("'"," ",$data['textBox51'])); 
			$d_phnum					= trim($data['textBox32']);
			  $comments 	  			= trim(str_replace("'\'"," ",(($data['textBox15']))));   
		 	  $today_date 				= date('Y-m-d');//dateted_format(trim($data[38])); 
			 //  echo exit;  
		//	   $vehicle_abbr 	  			= (trim($data[13])); 
	/*if($vehicle_abbr=='P'){$vehicle='Wheelchair';}
	if($vehicle_abbr=='C'){$vehicle='Ambulatory';}
	if($vehicle_abbr=='ParaTran / WC Van'){$vehicle='Wheel Chair Van';}*/
		$vehtype  					= vehtype($data['textBox22'],$db);
		$pickup_instruction 	  	= '';//($data[9]);

		$destination_instruction 	= '';//($data[18]);

		$sex 	  					= '';//trim($data[27]);

		//$phnum						= trim($data[28]); 





$Q444="SELECT * FROM ".TBL_FORMS." WHERE legaid = '".$legid."' AND appdate = '".$appdate."' OR legbid = '".$legid."' AND appdate = '".$appdate."' OR legcid = '".$legid."' AND appdate = '".$appdate."' OR legdid = '".$legid."' AND appdate = '".$appdate."'  ";

if($db->query($Q444) && $db->get_num_rows() > 0){}else{

	

	$Q4="SELECT * FROM ".TBL_FORMS." WHERE appdate = '".$appdate."' AND clientname = '".$pname."' ORDER BY id DESC LIMIT 1 ";

	if($db->query($Q4) && $db->get_num_rows() > 0){$d5 = $db->fetch_one_assoc();

	$totalmile=$d5['milage']+$mile;

	$pickup_instruction 	  	= $d5['pickup_instruction'];

	$destination_instruction 	= $d5['destination_instruction'];

	if($apptime=='00:00' || $apptime=='00:00:00'){$apptime='Will Call';}

	

	switch($d5['triptype']){

						case ('One Way') :

							$QR=", triptype				=	'Round Trip',

								  droplocation			=	'".str_replace("'"," ",$picklocation)."',

								  backtolocation		=	'".str_replace("'"," ",$droplocation)."',

								  backto				=	'".str_replace("'"," ",$dropaddress)."',

								  returnpickup			=	'".$apptime."',

								  pickup_instruction	=	'".str_replace("'"," ",$pickup_instruction)."',

								  destination_instruction='".str_replace("'"," ",$destination_instruction)."',

								  legbid='".$legid."'";

							break;

						case ('Round Trip') :

							$QR=", triptype				=	'Three Way',

								  droplocation2			=	'".str_replace("'"," ",$picklocation)."',

								  backtolocation		=	'".str_replace("'"," ",$droplocation)."',

								  three_address			=	'".str_replace("'"," ",$pickaddress)."',

								  backto				=	'".str_replace("'"," ",$dropaddress)."',

								  three_pickup			=	'".$d5['returnpickup']."',

								  returnpickup			=	'".$apptime."',

								  destination_instruction2='".str_replace("'"," ",$pickup_instruction)."',

								  legcid='".$legid."'";

							break;	

						case ('Three Way') :

							$QR=", triptype				=	'Four Way',

								  droplocation3			=	'".str_replace("'"," ",$picklocation)."',

								  backtolocation		=	'".str_replace("'"," ",$droplocation)."',

								  four_address			=	'".str_replace("'"," ",$pickaddress)."',

								  backto				=	'".str_replace("'"," ",$dropaddress)."',

								  four_pickup			=	'".$d5['returnpickup']."',

								  returnpickup			=	'".$apptime."',

								  destination_instruction3='".str_replace("'"," ",$pickup_instruction)."',

								  legdid='".$legid."'";

							break;		

						default :

							break;	}

	$Q5="UPDATE ".TBL_FORMS." SET

				miles_string 		=	'".$d5['miles_string'].','.$mile."',

				milage				=	'".$totalmile."'

				

				$QR

				WHERE id = '".$d5['id']."'"; //legcharges		 		=	'".$d5['legcharges'].','.$cost."'

	$db->execute($Q5);

	

	

	}else{

		

	 $Qaccounts  = "SELECT id FROM " .  accounts ." WHERE TRIM(LOWER(account_name))='".strtolower(trim('South East Trans'))."' " ;

	if($db->query($Qaccounts) && $db->get_num_rows() > 0){	$accounts = $db->fetch_one_assoc();	

	
//legcharges	=	'".$cost."',
	 

	  $Q3  = "INSERT INTO ".TBL_FORMS." SET 

	   				account='".$accounts['id']."',

						miles_string = '".$mile."',

						

						milage='".$mile."',

						triptype='One Way',	

						vehtype='".$vehtype."',	

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

						p_phnum='".$phnum."',

						droplocation='".str_replace("'"," ",$droplocation)."',

						destination_instruction='".str_replace("'"," ",$destination_instruction)."',

						d_phnum='".$d_phnum."',

						org_apptime='".$org_apptime."',

						dob='".$dob."',

						sex='".$sex."',

						comments='".str_replace("'"," ",$comments)."'";

	 $db->execute($Q3);

	 

	 	 $Qfind="SELECT name FROM patient WHERE  LTRIM(LOWER(name)) = '".strtolower(trim(sql_replace($pname)))."' ";

		if($db->query($Qfind) && $db->get_num_rows()>0){}else{

			$Qinsert="INSERT INTO patient SET 

					name			=	'".sql_replace($pname)."',

					

					dob				=	'$dob',

					address			=	'".$pickaddress."',

					phone			=	'$phnum'"; $db->execute($Qinsert);

			}

	       }	}

}

		   

		   	}

	

	

if((!empty($_FILES["file_csv"])) && ($_FILES['file_csv']['error'] == 0)) {
	$limitSize	= 150000000; //(150000 kb) - Maximum size of uploaded file, t
	$fileName	= basename($_FILES['file_csv']['name']);
	$fileSize	= $_FILES["file_csv"]["size"];
	//$dated		= $_POST['dated'];
	$fileExt	= substr($fileName, strrpos($fileName, '.') + 1);
	if (($fileExt == "csv") && ($fileSize < $limitSize)) {
		$csv->auto( $_FILES['file_csv']['tmp_name']);
		 $data=$csv->data;   //       echo '<pre>';  print_r($data);exit;
			 for($k=0; $k<sizeof($data); $k++)
			 {   gen_data($data[$k],$db);  } 
	echo '<script>alert("Trip Sheet Uploaded Successfully");</script>'; // exit;
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
			$smarty->display('mercytpl/southeast.tpl'); 
/*
[4] => Array
        (
            [﻿textBox41] => Scheduled
            	[textBox3] => 70355 Simmons Rd Kentwood, LA 70444
            	[textBox9] => (985) 222-0503
            	[textBox11] => 6/30/2018 10:00
            [textBox6] => 
            	[textBox4] => 1056684-A
            	[textBox10] => 6/30/2018 10:30
            	[textBox21] => Healthy Blue
            	[textBox24] => Johnson, George R
            [textBox26] => 60
            [textBox27] => 4.64E+11
            	[textBox32] => (985) 225-8018
            [textBox15] => 
            [textBox18] => Subscription
           	 	[textBox22] => Ambulatory
            [textBox34] => 0
            [textBox36] => 0
            [textBox38] => 0
            	[textBox40] => 9.51
            	[textBox51] => Fresenius kentwood Diaysis, 916 Ave G Kentwood, LA 70444
            [textBox52] => 
            [textBox53] => 
        )
*/

?>