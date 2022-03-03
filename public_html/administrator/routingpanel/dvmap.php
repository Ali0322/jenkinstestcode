<?php
   	include_once('../DBAccess/Database.inc.php');
//	include_once('../TextMarksV2APIClient.php');
	include_once('sendAPNS.php');
   $msgs = '';
	$noRec = '';
	$db = new Database;	
	$db->connect();
	$tid = $_POST['tid'];
	$did = $_POST['did'];
	$tdate = $_POST['tdate'];
	$ttime = $_POST['ttime'];
	$current_time=date("Y-m-d H:i:s");
	$acknowledge_status = $_POST['acknowledge_status'];
	$duplicate = $_POST['dup'];
	//CHECK IF EVERY POSTED DATA IS VALID AND SET
	if(!empty($tid)  && !empty($tdate) && !empty($ttime))//&& !empty($did)
	{
		//GET DRIVER DETAILS
		/*$drvQuery1 = "SELECT * FROM ".TBL_DRIVERS." WHERE Drvid='".$_POST['drv']."'";
		if($db->query($drvQuery1) && $db->get_num_rows() > 0){
			$drvdetails = $db->fetch_all_assoc();
		}*/ 
		function get_veh($drv)
			{

				$db = new Database;	

				$db->connect();

				$dQuery = "SELECT Drvid

										FROM ".TBL_DRIVERS."

										WHERE drv_code = '$drv'";

				if($db->query($dQuery) && $db->get_num_rows() > 0)

				{

					$drvs =  $db->fetch_row_assoc(); 

				}

				 $drv_id = $drvs['Drvid'];

				$vQuery = "SELECT  veh_id

										FROM ".TBL_DVMAPPING."

										WHERE  drv_id = '$drv_id'";

				if($db->query($vQuery) && $db->get_num_rows() > 0)

				{

					$vehs =  $db->fetch_row_assoc(); 

				}

				return ($vehs['veh_id'] > 0) ? $vehs['veh_id'] : '0';

			}
		function get_num($drv)
			{

				$db = new Database;	

				$db->connect();

				$dQuery = "SELECT cell_num

										FROM ".TBL_DRIVERS."

										WHERE drv_code = '$drv'";

				if($db->query($dQuery) && $db->get_num_rows() > 0)

				{

					$drvs =  $db->fetch_row_assoc(); 

				}

				$drv_id = $drvs['cell_num'];

				return $drv_id;

			}
		$chkQuery1 = "SELECT * FROM ".TBL_TRIP_DET." WHERE tdid='".$tid."'";
		if($db->query($chkQuery1) && $db->get_num_rows() > 0)
		{ 
			$d1 = $db->fetch_all_assoc(); 
			$pre_drv_id=$d1[0]['drv_id'];
	//		if($pre_drv_id!=''){
				
				$chkQuery2 = "SELECT trip_user FROM trips WHERE trip_id='".$d1[0]['trip_id']."'";
		if($db->query($chkQuery2) && $db->get_num_rows() > 0)
		{ 
			$d2 = $db->fetch_one_assoc(); }
				
				 $message_admin='Please Note: A trip assigned to you has been cancelled and reassigned to another driver by dispatcher. Detail is: Patient name: '.$d2['trip_user'].', Pick Address: '.$d1[0]['pck_add'].' And Drop Address: '.$d1[0]['drp_add'].' ';
	  $driver_code=$d1[0]['drv_id'];
	  $message_admin2='Please Note: A New trip assign to you. Detail is: Patient name: '.$d2['trip_user'].', Pick Address: '.$d1[0]['pck_add'].' And Drop Address: '.$d1[0]['drp_add'].' ';
	  $driver_code=$d1[0]['drv_id'];
	  
	  	  
   include_once 'gcm.php';
$Qsel="SELECT udid FROM drivers WHERE drv_code = '".$driver_code."' ";
if($db->query($Qsel) && $db->get_num_rows()>0){
    $data=$db->fetch_one_assoc();

$Qsel3="SELECT reg_id FROM registered_ids WHERE udid = '".$data['udid']."' ";
if($db->query($Qsel3) && $db->get_num_rows()>0){
    $data3=$db->fetch_one_assoc();
	$regId=$data3['reg_id'];
	//Send Push 
$title="Trip Cancelled";
$ch = curl_init("https://fcm.googleapis.com/fcm/send");
$header=array('Content-Type: application/json',
"Authorization: key=AIzaSyB8xQY8mQm_vGRF1VK-sJ2QIH1gdUqsc1s");
curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
curl_setopt( $ch,CURLOPT_SSL_VERIFYPEER, false );
curl_setopt($ch, CURLOPT_POST, 1);
//curl_setopt($ch, CURLOPT_POSTFIELDS, "{ \"notification\": {    \"title\": \"$title\",    \"text\": \"$message_admin\"  },    \"to\" : \"$regId\"}");
curl_setopt($ch, CURLOPT_POSTFIELDS, "{ \"data\": {    \"title\": \"$title\",    \"text\": \"$message_admin\", \"sound\": \"default\"  },    \"to\" : \"$regId\"}");

curl_exec($ch);
curl_close($ch);
//End of push	
}
}
//Message to driver on assignment trip
$Qsel2="SELECT udid FROM drivers WHERE drv_code = '".$did."' ";
if($db->query($Qsel2) && $db->get_num_rows()>0){
    $data2=$db->fetch_one_assoc();

$Qsel32="SELECT reg_id FROM registered_ids WHERE udid = '".$data2['udid']."' ";
if($db->query($Qsel32) && $db->get_num_rows()>0){
    $data32=$db->fetch_one_assoc();
	$regId2=$data32['reg_id'];
	//Send Push 
$title="Trip Assigned";
$ch = curl_init("https://fcm.googleapis.com/fcm/send");
$header=array('Content-Type: application/json',
"Authorization: key=AIzaSyB8xQY8mQm_vGRF1VK-sJ2QIH1gdUqsc1s");//AIzaSyB8xQY8mQm_vGRF1VK-sJ2QIH1gdUqsc1s
curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
curl_setopt( $ch,CURLOPT_SSL_VERIFYPEER, false );
curl_setopt($ch, CURLOPT_POST, 1);
//curl_setopt($ch, CURLOPT_POSTFIELDS, "{ \"notification\": {    \"title\": \"$title\",    \"text\": \"$message_admin2\"  },    \"to\" : \"$regId2\"}");
curl_setopt($ch, CURLOPT_POSTFIELDS, "{ \"data\": {    \"title\": \"$title\",    \"text\": \"$message_admin2\", \"sound\": \"default\"  },    \"to\" : \"$regId2\"}");

curl_exec($ch);
curl_close($ch);
//End of push
}
}
	  

	  
	  		
			$sql = "INSERT INTO alerts SET 		alerts.from 	=  'admin',
												alerts.to	 	=  '$did',
												message 		=  '$message_admin2',
												sent			= 	NOW(),
												recd			=   '0' "; 
				  $db->execute($sql);
			//	}
			$vehid = get_veh($did);
			$Query2 = "UPDATE ".TBL_TRIP_DET." SET 
				drv_id = '".$did."',
				tripassign_time = '$current_time',
				duplicate = '".$duplicate."'";
				if($acknowledge_status == '2')
				{ $Query2 .= ",acknowledge_status = '0' "; }
			$Query2 .="  WHERE tdid = '".$tid."'";
				if($db->execute($Query2))
				{ 
						
	$sql = "UPDATE ".TBL_DRIVERS." SET trip_assingment = '1',trip_status= '9' WHERE drv_code = '".$did."' "; 
					$db->execute($sql);
	$sq22 = "SELECT * FROM ".TBL_DRIVERS." WHERE drv_code = '".$did."' AND clockstatus = 'out' "; 
					if($db->query($sq22) && $db->get_num_rows() > 0){ $drdata= $db->fetch_one_assoc(); $yes = "This trip has been assigned to '".$drdata['fname'].' '.$drdata['lname']."' but '".$drdata['fname'].' '.$drdata['lname']."' is not Clocked-In";}else{$yes = " Assigned";}		
					
				//ADD DATA TO THE MAPPING LOG TABLE  
		$eQuery = "SELECT * FROM ".TBL_TRIP_DET." as td, ".TBL_TRIPS." as t WHERE td.trip_id=t.trip_id and td.tdid = '$tid'";
					if($db->query($eQuery) && $db->get_num_rows() > 0)
						{
							$to_email = $db->fetch_row_assoc();
						}
					 $to =  get_num($did);
					 /*if($to != ''){
						 $name=$to_email['trip_clinic'];
						 $phone=$to_email['trip_tel'];
						 $addr1=$to_email['pck_add'];		
						 $addr2=$to_email['drp_add'];
						 $ptime=$to_email['pck_time'];
						 $date=$to_email['date'];
						 $tipid=$to_email['tdid'];
						
						$sMyApiKey        = 'midnimomedtrans__13b1df9a';
						$sMyTextMarksUser = 'hybrid_dispatch';
						$sMyTextMarksPass = 'hybrid123';
						$sKeyword         = 'MIDNIMO';
						$sPhone           = $to;
						$tmapi = new TextMarksV2APIClient($sMyApiKey, $sMyTextMarksUser, $sMyTextMarksPass);
						$resp = $tmapi->call('GroupLeader', 'has_member', array(
						   'tm' => $sKeyword,
						   'user' => $sPhone
						));
						if($resp['body']['member'] == 1){
							$sMyApiKey        = 'midnimomedtrans__13b1df9a';
							$sMyTextMarksUser = 'hybrid_dispatch';
							$sMyTextMarksPass = 'hybrid123';
							$sKeyword         = 'MIDNIMO';
							$sPhone           = $to;
							$sMessage = "Tripid:$tipid\n-\nName:$name\n-\nPh#$phone\n-\nPick:$addr1\n-\nDrop:$addr2\n-\nTime:$ptime\n-\nDate:$date";
							$tmapi = new TextMarksV2APIClient($sMyApiKey, $sMyTextMarksUser, $sMyTextMarksPass);
							$resp = $tmapi->call('GroupLeader', 'send_one_message', array(
							   'tm' => $sKeyword,
							   'msg' => $sMessage,
							   'to' => $sPhone
							));	
						}
					}*/

				echo 'Record Updated^1^'.$yes.'^';
				sendAPNS(1,$driver_code,$message_admin);	
				$parameter = 2;
				sendAPNS($parameter,$did,$message_admin,$tid);
					//exit;

					/*}else{

					echo 'Unable to update vehicle^fail';

					exit;*/

				}    	

		}else{ 

			//IF THIS DRIVER IS NOT ASSIGNED ANY VEHICLE 

			/*$Query2 = "INSERT INTO ".TBL_DVMAPPING." SET 

					veh_id='".$_POST['veh']."',

					vehname='".$vehdetails[0]['vname']."',					

					veh_numplate='".$_POST['vehnp']."',

					drv_id='".$_POST['drv']."',

					drv_licnum='".$drvdetails[0]['license']."',

					drv_name='".$drvdetails[0]['fname'].' '.$drvdetails[0]['lname']."',

					dv_date=NOW()";	

			if($db->execute($Query2))

			{ */

				//ADD DATA TO THE MAPPING LOG TABLE  

				/*$logQuery =	"INSERT INTO ".TBL_MAPPINGLOG." SET 

					did='".$_POST['drv']."',

					vid='".$_POST['drv']."',

					drvname='".$drvdetails[0]['fname'].' '.$drvdetails[0]['lname']."',

					vnumplate='".$_POST['vehnp']."',

					vname='".$vehdetails[0]['fname']."',

					mapping_date=NOW()";	

					$db2->execute($logQuery);*/

				/*if(!isset($prid) && $prid == '')

					echo 'Record Updated^0';

				else

					echo 'Record Updated^'.$prid; 

				exit;

	

				}else{

					echo 'Unable to assign vehicle^fail';

					exit;			

				}*/

			}

			}else{

			//IF DATA IS NOT POSTED IN DESIRED FORM OR PAGE IS ACCESSSED DIRECTLY

			echo 'Oops! I guess you hit a wrong url';

		}



	$db->close();
?> 