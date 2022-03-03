<?php
   	include_once('../DBAccess/Database.inc.php');
	function getfreemiles($ac_id,$db){$Q="SELECT freemiles FROM accounts WHERE id = '$ac_id'";
	if($db->query($Q) && $db->get_num_rows() > 0){	$dt=$db->fetch_one_assoc(); return $dt['freemiles'];}else{return '0';}}
	function chargeablemile($totmilages,$freemiles){
		$df=$totmilages-$freemiles;
		if($df>0) return $df; else return 0;
		//return (($totmilages-$freemiles)>0)?($totmilages-$freemiles):0;
		}
  	function invoice_calculation($id){
	$db = new Database;	
	$db->connect();
		$re="SELECT ac.id,ac.freemiles as frmiles,ac.account_name,tr.* FROM ".accounts." as ac,request_info as tr WHERE tr.account = ac.id  AND tr.id= '$id'";
				if($db->query($re) && $db->get_num_rows() > 0){
				 $dt=$db->fetch_one_assoc();
				}
			  //$rate_type	=	$dt['rate_type'];
			  $ratequery = "SELECT * FROM ".clinic_rates." WHERE vehtype_id= ".$dt['vehtype']." AND clinic_id= ".$dt['account']." ";
			  if($db->query($ratequery) && $db->get_num_rows() > 0){	$r = $db->fetch_one_assoc();	}
			  if($r==''){ $ratequery55 = "SELECT * FROM ".vehtype." WHERE id= ".$dt['vehtype'];
			  if($db->query($ratequery55) && $db->get_num_rows() > 0){	$r = $db->fetch_one_assoc();	}}
			$freemiles = $dt['frmiles'];
	 if($dt['custom_rates']=='1'){ $freemiles = $dt['freemiles']; $r = $dt;}
		  $wait_time = $dt['wait_time'];
		  sscanf($wait_time, "%d:%d:%d", $hours, $minutes, $seconds);
		  $time_seconds =  $hours * 3600 + $minutes * 60 + $seconds;
		  $extra_time = ($time_seconds - (30*60));
		  if($extra_time > 60){
		  $times_units	=	(int)($extra_time)/(30*60); 
		  $wait_time_charges = $times_units * $r['waittime_ch']; 	  }
		  $totmilages 	= $dt['milage'];
		  if($dt['triptype'] == 'One Way')		{ $base = 1;}
		  if($dt['triptype'] == 'Round Trip') 	{ $base = 1;}
		  if($dt['triptype'] == 'Three Way') 	{ $base = 2;}
		  if($dt['triptype'] == 'Four Way') 	{ $base = 3;}
		  if($dt['triptype'] == 'Five Way') 	{ $base = 4;}
/*		if($dt['stretcher']=='Yes'){		$str_charges	=	$r['stretcher_ch'];}*/
		if($dt['bar_stretcher']=='Yes'){	$bstr_charges 	=	$r['bstretcher_ch'];}
		if($dt['dstretcher']=='Yes'){	    $dstr_charges 	=	$r['dstretcher_ch'];}
		if($dt['oxygen']=='Yes'){	$oxygen_charges 		=	$r['oxygen_ch'];}
		if($dt['dwchair']=='Yes'){	$dwchair_charges 		=	$r['doublewheel_ch'];}
		$chargeablemile = chargeablemile($totmilages,$freemiles);
		$totcharges = round((($base 	  *	 $r['pickup_ch']) + 
						($chargeablemile  *  $r['permile_ch']) +
						($dt['after_hours'] *  $r['afterhour_ch'])+
						($dt['noshow'] 	  *  $r['noshow_ch'])+
						$dt['miscellaneous_charges']+ $str_charges + $bstr_charges + $dstr_charges + $wait_time_charges+$oxygen_charges+$dwchair_charges),2);
		$query = "UPDATE ".TBL_FORMS." SET  charges = '".$totcharges."' WHERE id = '".$id."'";
		$db->query($query);
			}
	function invoice_generation($id){
	$db = new Database;	
	$db->connect();
		$re="SELECT ac.id,ac.freemiles as frmiles,ac.account_name,tr.* FROM request_info as tr LEFT JOIN ".accounts." as ac on tr.account=ac.id WHERE tr.id= '$id'";
			if($db->query($re) && $db->get_num_rows() > 0){
			$dt=$db->fetch_one_assoc();
			$milearry=explode(',',$dt['miles_string']);
			if($milearry[0]){$miles1=$milearry[0];}
			if($milearry[1]){$miles2=$milearry[1];}
			if($milearry[2]){$miles3=$milearry[2];}
			if($milearry[3]){$miles4=$milearry[3];}
		  $Qdelete="DELETE FROM billing_info WHERE trip_id = '".$dt['id']."' "; 
		$db->execute($Qdelete); 
		$Qselect_contactinfo="SELECT * FROM contact_info ";
		if($db->query($Qselect_contactinfo) && $db->get_num_rows() > 0){ $contactinfo = $db->fetch_one_assoc();	
		//print_r($contactinfo);
		$starttime=timetoseconds($contactinfo['starttime']);
		$endtime=timetoseconds($contactinfo['endtime']);
		
		 } 
		switch($dt['triptype']){
			case 'One Way':
			insert_billing($db,$dt,'AB',$miles1,'1',$starttime,$endtime,$dt['ccodea']);
			break;
			case 'Round Trip':
			 insert_billing($db,$dt,'AB',$miles1,'1',$starttime,$endtime,$dt['ccodea']);
			 insert_billing($db,$dt,'BF',$miles2,'2',$starttime,$endtime,$dt['ccodeb']);
			break;
			case 'Three Way':
			 insert_billing($db,$dt,'AB',$miles1,'1',$starttime,$endtime,$dt['ccodea']);
			 insert_billing($db,$dt,'BC',$miles2,'2',$starttime,$endtime,$dt['ccodeb']);
			 insert_billing($db,$dt,'CF',$miles3,'3',$starttime,$endtime,$dt['ccodec']);
			break;
			case 'Four Way':
			 insert_billing($db,$dt,'AB',$miles1,'1',$starttime,$endtime,$dt['ccodea']);
			 insert_billing($db,$dt,'BC',$miles2,'2',$starttime,$endtime,$dt['ccodeb']);
			 insert_billing($db,$dt,'CD',$miles3,'3',$starttime,$endtime,$dt['ccodec']);
			 insert_billing($db,$dt,'DF',$miles4,'4',$starttime,$endtime,$dt['ccoded']);
			break;
			default:
			break;
		} $totcharges=($ch1+$ch2+$ch3+$ch4);
		$Qselect="SELECT * FROM trip_details  WHERE reqid ='".$dt['id']."' AND status IN ('5','6','9','10')";
		if($db->query($Qselect) && $db->get_num_rows() > 0){	$invoice_gen_q =",invoice_gen='0'";	}else{$invoice_gen_q =",invoice_gen='1'";}
			$query = "UPDATE ".TBL_FORMS." SET  charges = '".$totcharges."' $invoice_gen_q  WHERE id = '".$dt['id']."'";
			$db->query($query);	 
				}
			}	
	function insert_billing($db,$dt,$type,$miles,$leg,$starttime,$endtime,$ccode){		  
		//$rate_type	=	$dt['rate_type'];
			  $ratequery = "SELECT * FROM ".clinic_rates." WHERE vehtype_id= ".$dt['vehtype']." AND clinic_id= ".$dt['account']." ";
			  if($db->query($ratequery) && $db->get_num_rows() > 0){	$r = $db->fetch_one_assoc();	}
			  if($r==''){ $ratequery55 = "SELECT * FROM ".vehtype." WHERE id= ".$dt['vehtype'];
			  if($db->query($ratequery55) && $db->get_num_rows() > 0){	$r = $db->fetch_one_assoc();	}}
			$freemiles = $dt['frmiles'];
		  
		$Qselect_status="SELECT status,arrived_time,picked_time,pck_time,drp_time FROM trip_details WHERE reqid ='".$dt['id']."' AND type = '$type' ";
		if($db->query($Qselect_status) && $db->get_num_rows() > 0){	$statusdata = $db->fetch_one_assoc();	
		$status1=$statusdata['status'];
		//echo $statusdata['arrived_time'].'mmmmm'.date("H:i:s",$statusdata['arrived_time']); exit;
		if($statusdata['arrived_time']=='00:00:00' || $statusdata['arrived_time']==''){ $statusdata['arrived_time'] = $statusdata['picked_time']; }
		$time_seconds= (strtotime(date("H:i:s",$statusdata['picked_time'])) - strtotime(date("H:i:s",$statusdata['arrived_time'])));
		  $wait_time = gmdate("H:i:s", $time_seconds);
		  $extra_time = ($time_seconds - (5*60));
		  if($extra_time > 60){
		  $times_units	=	(int)($extra_time)/(15*60); 
		  if($times_units > .99999)
		  $wait_time_charges = $times_units * 0;//$r['waittime_ch']; 
		  	  }
		}else{ $status1='3';}
		 $pck_timeinseconds = timetoseconds($statusdata['pck_time']);
		if($starttime > $pck_timeinseconds || $pck_timeinseconds > $endtime) {$dt['p_after_hours'] = 1;}else{$dt['p_after_hours']=0;}
		//exit;
		  if($status1=='7' ){$dt['noshow']=1;}else{$dt['noshow']=0;}
		  if($status1=='3' || $status1=='8'){$cancel=1;}else{$cancel=0;}
		if($dt['bar_stretcher']=='Yes'){	$bstr_charges 	=	$r['bstretcher_ch'];}
		if($dt['dstretcher']=='Yes'){	    $dstr_charges 	=	$r['dstretcher_ch'];}
		if($dt['oxygen']=='Yes'){			$oxygen_charges =	$r['oxygen_ch'];}
		if($dt['dwchair']=='Yes'){			$dwchair_charges=	$r['doublewheel_ch'];}
		$chargeablemile = chargeablemile($miles,$freemiles);
		$totcharges = round((( $r['pickup_ch']) + 
						($chargeablemile  *  $r['permile_ch']) +
						($dt['p_after_hours'] *  $r['afterhour_ch'])+
						($dt['noshow'] 	  *  $r['noshow_ch'])+
						$dt['miscellaneous_charges']+ $str_charges + $bstr_charges + $dstr_charges + $wait_time_charges+$oxygen_charges+$dwchair_charges),2);
						if($status1=='7' ){$totcharges =$r['noshow_ch'];}
		$Qinsert1="INSERT INTO billing_info SET
					trip_id				=	'".$dt['id']."',
					leg					=	'$leg',
					cancel				=	'".$cancel."',
					status				=	'".$status1."',
					charges				=	'".$totcharges."',
					pickup_ch			=	'".$r['pickup_ch']."',
					permile_ch			=	'".$r['permile_ch']."',
					waittime			=	'".$wait_time."',
					waittime_unit		=	'".$times_units."',
					waittime_rate		=	'".$r['waittime_ch']."',
					noshow				=	'".$dt['noshow']."',
					noshow_rate			=	'".$r['noshow_ch']."',	
					dstretcher			=	'".$dt['dstretcher']."',
					dstretcher_rate		=	'".$r['dstretcher_ch']."',				
					bstretcher			=	'".$dt['bar_stretcher']."',
					bstretcher_rate		=	'".$r['bstretcher_ch']."',
					afterhour			=	'".$dt['p_after_hours']."',
					afterhour_rate		=	'".$r['afterhour_ch']."',
					oxygen				=	'".$dt['oxygen']."',
					oxygen_rate			=	'".$r['oxygen_ch']."',
					doublewheel			=	'".$dt['dwchair']."',
					doublewheel_rate	=	'".$r['doublewheel_ch']."',
					freemiles			=	'".$freemiles."',
					ccode				=	'".$ccode."',
					miles				=	'".$miles."'";
		$db->execute($Qinsert1); 		return $totcharges; }			
?>