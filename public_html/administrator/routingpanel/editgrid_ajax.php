<?php
   	include_once('../DBAccess/Database.inc.php');
    include_once("../Classes/MyMailer.php");
	include_once('sendAPNS.php');
	//include_once('../TextMarksV2APIClient.php');	
	$db  = new Database;	
	$msgs   = '';
	$errors = '';
	$db->connect();
   $id = $_REQUEST['id'];
   $type = $_REQUEST['type'];
	 $time_data = get_server_time();
	 $datime = $time_data[0];	
	 $patime = $time_data[0];	
include_once('rating.php');
 //if page is submitted
if(count($_POST) > 0){
       if(isset($_POST['id']) && isset($_POST['st'])){
		   $id=$_POST['id']; $st=$_POST['st'];
           $updated = updateTrip($st,$id,$db);
	   //$st  = sql_replace($_POST['status']);
		   if($updated){
		   		if($st == '6'){ $st = '5'; }
				echo "<script>alert('Trip Record has been successfully updated!');</script>";
				echo "<script>location.href='grid.php?st=".$st."&ad=0&id=".$sid."';</script>";	
			/*echo "<script>this.close();</script>";	*/
				exit;	
		   }
       }
     }
//Get Trip Information
function getTripInformation($id,$db){	 
	$db->connect();
	 $Query = "SELECT td.cellalertoption,td.cellalert,td.trip_id, td.date, t.trip_code, t.trip_user, t.trip_clinic,t.trip_clinicemail, t.trip_tel, td.pck_add, td.drp_add, td.pck_time,
	                  td.aptime, td.drp_time, td.drp_atime,td.trip_miles, td.drv_id, td.status, td.pickStatus, 
					  td.trip_remarks FROM trip_details td, trips t  
			   WHERE  t.trip_id=td.trip_id AND td.tdid='$id'";
		 if($db->query($Query) && $db->get_num_rows()){
				  $udata = $db->fetch_one_assoc();
				  }
                  return $udata;}
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
	return ($vehs['veh_id'] > 0) ? $vehs['veh_id'] : '0';        }
//Update Trip Information
function updateTrip($st,$id,$db){
/*$key="Fmjtd%7Cluub29ur25%2Crl%3Do5-96z254";
require('../../twilio/Services/Twilio.php'); 
$account_sid= 'ACf1449cf4e1795e14ea66d166fea72772'; 
$auth_token = '56bb8e552c5dc8e2b0a8d383a580fae4'; 
$client 	= new Services_Twilio($account_sid, $auth_token); */

	$db->connect();
	$data = getTripInformation($id,$db);
		$prop    = 10;
		$current_time=date("Y-m-d H:i:s");
		$drv_id = $data['drv_id'];
		$wcall 	= $data['wc'];
		$tdid = $id;
	   $time_data = get_server_time();		
	   $time = 	$time_data[0];
	   $qudrst = "UPDATE drivers SET trip_status = '$st',trip_assingment='1'  WHERE drv_code = '$drv_id'";
	$db->execute($qudrst);
/*//---------------------- check for pick time ---------------------------------//
			if(isset($post['pu1'])){
				$ptime=$post['pu1'].':00';
				$pck_ptime = date("H:i:s", strtotime("-$prop minutes".$ptime)); 
				$wc = '0';
			}
			else
			{
				$ptime = '00:00:00';
				$pck_ptime = '00:00:00';
				$wc = '1';
			}
		//---------------------- check for drop time ---------------------------------//
			if(isset($post['dt1'])){
				$dtime= $post['dt1'].':00';
				$drp_ptime =  date("H:i:s", strtotime("-$prop minutes".$dtime));
				$wc = '0';
			}
			else{
				$dtime = '00:00:00';
				$drp_ptime = '00:00:00';
				$wc = '1';
			}
		//----------------------------------------------------------------------------------//
		$set = '';
		$type = $post['type'];
		  if($type == '1'){
			   if($aptime == '00:00:00' || $aptime == ''){
				 $aptime = $post['apu1'];
			   }
			   if($adtime == '00:00:00' || $adtime == '' ){
				 $adtime = $post['adt1'];	   
			   }
			   $set = ",aptime = '$aptime', drp_atime='$adtime'";
			   $status = '6';
		 }*/
    	//If Status is In Progress
	switch($st){
	  //Cancelled
	  case '3':
	  $message_admin='Please Note: A trip assign to you has been cancelled by dispatcher. Detail is: Patient name: '.$data['trip_user'].', Pick Address: '.$data['pck_add'].' And Drop Address: '.$data['drp_add'].' ';
	  $driver_code=$data['drv_id'];
   
$Qsel="SELECT udid FROM drivers WHERE drv_code = '".$driver_code."' ";
if($db->query($Qsel) && $db->get_num_rows()>0){
    $data2=$db->fetch_one_assoc();

$Qsel3="SELECT reg_id FROM registered_ids WHERE udid = '".$data2['udid']."' ";
if($db->query($Qsel3) && $db->get_num_rows()>0){
    $data3=$db->fetch_one_assoc();
	$regId=$data3['reg_id'];
	//Send Push 
$title="Trip Cancelled";
$ch = curl_init("https://fcm.googleapis.com/fcm/send");
$header=array('Content-Type: application/json',
"Authorization: key=AIzaSyB8xQY8mQm_vGRF1VK-sJ2QIH1gdUqsc1s");//AIzaSyB8xQY8mQm_vGRF1VK-sJ2QIH1gdUqsc1s
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
	  
	  
	  		
			$sql = "INSERT INTO alerts SET 		alerts.from 	=  'admin',
												alerts.to	 	=  '$driver_code',
												message 		=  '$message_admin',
												sent			= 	NOW(),
												recd			=   '0' "; 
			$db->execute($sql);
	        if($wcall == '0'){
	          $rating = puRating($tdid,$time,$drv_id,3,'Cancelled',$db,$db,$t_comments);
			}else{
			    blastEmail($tdid,'Cancelled',$db);
			}
			break;		
	  //Dropped		
	  case '4':
	        $rating = dropRating($id,$time,$drv_id,4,'Dropped',$db,$db,$t_comments);		
			break;	 
      //Picked		
	  case '6':
	        $rating = puRating($id,$time,$drv_id,6,'Picked',$db,$db,$t_comments);		
			break;	  
	  //Not at home		
	  case '7':	
        if($wcall == '0'){	    	  	  
	        $rating = puRating($id,$time,$drv_id,7,'Not at Home',$db,$db,$t_comments);	
			}else{
			   blastEmail($tdid,'Not at Home',$db);
			}	
			break;
	  //Not Going		
	  case '8':
        if($wcall == '0'){	  
	        $rating = puRating($id,$time,$drv_id,8,'Not Going',$db,$db,$t_comments);	
			}else{
			   blastEmail($tdid,'Not Going',$db);
			}	
			break;	
	} 
    //If Reschedule
	if($st == '2'){
	   $reschedule = " status = '".$st."', pickStatus = '0', dropStatus='0', aptime='', drp_atime = '', ac_noshowcancell = '$time' ";
	   //Delete Rescheduled Trip Rating
	   $qdel = "DELETE FROM ".TBL_RATING." WHERE trp_id='$id'";
	   $db->execute($qdel);
	}
	//If Arrived
	if($st == '10'){ 
		/*if($data['cellalertoption']=='Yes'){
	$message='The driver from Medstar Medical Transport has arrived to pick up '.$data['trip_user'].'.
			
Thank you for choosing Medstar -we appreciate your business.';	
			
	$client->account->messages->create(array( 
    'To' 	=> "+1".$data['cellalert'], 
    'From' 	=> "+14802692931", 
    'Body' 	=> $message));  }*/
	$reschedule = " status = '".$st."', arrived_time = '$current_time' ";
	}
    //If Cancelled
	if($st == '3'){
		   $reschedule = " status = '".$st."', pickStatus = '0', dropStatus='0', aptime='', drp_atime = '', ac_noshowcancell = '$time'  ";
	   //Delete Cancelled Trip Rating
	   $qdel = "DELETE FROM ".TBL_RATING." WHERE trp_id='$id'";
	   $db->execute($qdel);
	}
	   //If Not going
	if($st == '8'){
	   $reschedule = " status = '".$st."', pickStatus = '0', dropStatus='0', aptime='', drp_atime = '', ac_noshowcancell = '$time' ";
	   //Delete Cancelled Trip Rating
	   $qdel = "DELETE FROM ".TBL_RATING." WHERE trp_id='$id'";
	   $db->execute($qdel);
	}  
	  //If Inprogress
	  	if($st == '5'){
	   $reschedule = " status = '".$st."' ";
	   //Delete Cancelled Trip Rating
	   $qdel = "DELETE FROM ".TBL_RATING." WHERE trp_id='$id'";
	   $db->execute($qdel);
	}  
	   //If Not at home
	if($st == '7'){
	   $reschedule = " status = '".$st."', pickStatus = '0', dropStatus='0', aptime='', drp_atime = '', ac_noshowcancell = '$time' ";
	   //Delete Cancelled Trip Rating
	   $qdel = "DELETE FROM ".TBL_RATING." WHERE trp_id='$id'";
	   $db->execute($qdel);
	} 	
   //If Will call & status is set
	if($wcall == '1'){
	  	if($st == '3' || $st == '7' || $st == '8' ){
	      $reschedule = " status = '".$st."', pickStatus = '0', dropStatus='0', aptime='', drp_atime = '', ac_noshowcancell = '$time' ";
	   }
	}    	
	  $query_u = "UPDATE ".TBL_TRIP_DET." SET 
					$reschedule
					Where tdid = '$id'"; 
	if($db->execute($query_u) ){}	
	
///
if($st==3){	sendAPNS(1,$driver_code,$message_admin); }
				   
}	$db->close();
?>