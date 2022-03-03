<?php
include_once('../DBAccess/Database.inc.php');
//include_once('../routingpanel/ExcellReader.php');
//include_once('../../Classes/simplexlsx.class.php');
ini_set('memory_limit', '500M');
ini_set('max_execution_time', 1000); //300 seconds = 5 minutes
$db = new Database;	
$db->connect();
$msgs   = '';
$errors = '';

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
	
// Insert genral data from excel sheet
function gen_data($data,$db,$dated){ 
	 	$legid	 	  				= (trim($data[1])); 
		$pname 	  					= (str_replace("'","`",(trim($data[3]).' '.trim($data[4]).' '.trim($data[2]))));
		
		$vtypeinsheet = $data[6];
		
		if($vtypeinsheet=='Stretcher Car/Prone-Gurney'){$vtypeinsheet = 'Gurney';}
		
		$vehtype  					= vehtype(trim($vtypeinsheet),$db);
		$appdate 	  				= convertDateToMySQL(trim($data[7]));
		$org_apptime  				= (trim($data[8]));
		$apptime  					= trim($data[9]); 
		$p_phnum					= trim($data[13]);
	 	$d_phnum					= trim($data[22]); 
		$picklocation				= trim($data[11]);
   		$pickaddress  				= trim(str_replace("'"," ",$data[12])).', '.trim(str_replace("'"," ",$data[14])).', '.trim(str_replace("'"," ",$data[15])).' '.trim(str_replace("'"," ",$data[16]));
		$pickup_instruction 	  	= trim(str_replace("'"," ",$data[17]));
		$droplocation				= trim($data[20]); 
		$dropaddress  				= trim(str_replace("'"," ",$data[21])).', '.trim(str_replace("'"," ",$data[23])).', '.trim(str_replace("'"," ",$data[24])).' '.trim(str_replace("'"," ",$data[25]));
		
		$destination_instruction 	= trim(str_replace("'"," ",$data[26]));
		
		//$phnum						= trim($data[28]); 
		$mile 	  					= trim($data[39]); 
		//$comments 	  				= trim($data[34]).' - '.trim($data[35]).' - '.trim($data[36]); 
	$Q33="SELECT * FROM ".TBL_FORMS." WHERE appdate = '".$appdate."' AND legaid='$legid' AND reqstatus !='disapproved' || 
											appdate = '".$appdate."' AND legbid='$legid' AND reqstatus !='disapproved' || 
											appdate = '".$appdate."' AND legcid='$legid' AND reqstatus !='disapproved' ||
											appdate = '".$appdate."' AND legdid='$legid' AND reqstatus !='disapproved' ORDER BY id DESC LIMIT 1";
	if($db->query($Q33) && $db->get_num_rows() > 0){}else{
	$Q4="SELECT * FROM ".TBL_FORMS." WHERE appdate = '".$appdate."' AND clientname = '".$pname."' ORDER BY id DESC LIMIT 1 ";
	if($db->query($Q4) && $db->get_num_rows() > 0){$d5 = $db->fetch_one_assoc();
	$totalmile=$d5['milage']+$mile;
	$pickup_instruction 	  	= $d5['pickup_instruction'].' - '.$destination_instruction;
	$destination_instruction 	= $d5['destination_instruction'].' - '.$pickup_instruction;
	
	if($apptime=='' || $apptime=='CALL' || $apptime=='00:00'|| $apptime=='00:00:00'|| $apptime=='00'|| $apptime=='0'|| $apptime==' '){$apptime='Will Call';}
	
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
				WHERE id = '".$d5['id']."'";
	$db->execute($Q5);
	}else{
		
	 $Qaccounts  = "SELECT id FROM " .  accounts ." WHERE TRIM(LOWER(REPLACE(account_name,' ','')))='".strtolower(trim(str_replace(' ','','Trans Link')))."' " ;
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
	if (($fileExt == "xls") && ($fileSize < $limitSize)) {
	require_once 'excel_reader2.php';

$data = new Spreadsheet_Excel_Reader($_FILES['file_csv']['tmp_name']);

for($i=0;$i<count($data->sheets);$i++) // Loop to get all sheets in a file.
{	
	if(count($data->sheets[$i]['cells'])>0) // checking sheet not empty
	{
		for($j=3;$j<=count($data->sheets[$i]['cells']);$j++) // loop used to get each row of the sheet
		{ 
		//	print_r($data->sheets[$i]['cells'][$j]); echo '<br/><br/><br/>'; exit;
			 if($data->sheets[$i]['cells'][$j][12]){
			 gen_data($data->sheets[$i]['cells'][$j],$db,$dated);  }
		}
	}
}
		//print_r($data); exit;
	/*	for($j=1; $j<=$count; $j++){
			$sheetdata = $xlsx->rows($j);
			 for($k=0; $k<sizeof($sheetdata); $k++)
			 { print_r($sheetdata[$k] ); exit;
			  gen_data($sheetdata[$k],$db,$dated); 
			  } 
		}*/
		echo '<script>alert("Trips Uploaded Successfully");</script>';
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
			$smarty->display('mercytpl/translink.tpl'); 

?>