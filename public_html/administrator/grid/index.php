<?php ob_start();
error_reporting(E_ALL & ~E_NOTICE);
// set up DB
$conn = mysql_connect("localhost", "midnimo_qts", "gn5E43w2Rg;?"); mysql_select_db("midnimo_qts");
//$conn = mysql_connect("localhost", "root", ""); mysql_select_db("qst");
$getuser2 ="SELECT id,account_name FROM accounts";
$clinicdata = array();
$clinicdata1 = mysql_query($getuser2) or die("Couldn't execute query. ".mysql_error());
while ($row = mysql_fetch_assoc($clinicdata1)) {
	array_push($clinicdata,$row);
}
$temp = array();
for($i=0; $i<count($clinicdata); $i++){
	array_push($temp, $clinicdata[$i]['id'].':'.$clinicdata[$i]['account_name']);
}
$clinicoptions = implode(';',$temp);
$getdriver ="SELECT * FROM drivers WHERE drvstatus='Active' AND del='0'";
$drvdata = array();
$drvdata1 = mysql_query($getdriver) or die("Couldn't execute query. ".mysql_error());
while ($row = mysql_fetch_assoc($drvdata1)) {
	array_push($drvdata,$row);
}
$temp1 = array();
array_push($temp1, ''.':'.'Select Driver');
for($i=0; $i<count($drvdata); $i++){
	array_push($temp1, $drvdata[$i]['fname'].' '.$drvdata[$i]['lname'].'--'.$drvdata[$i]['drv_code'].':'.$drvdata[$i]['drv_code'].'--'.$drvdata[$i]['fname'].' '.$drvdata[$i]['lname']);
}
$drvoptions = implode(';',$temp1);
include("inc/jqgrid_dist.php");
include_once('inc/TextMarksV2APIClient.php');
$col = array();
$col["title"] = "Id"; 
$col["name"] = "tdid"; 
$col["width"] = "20";
$col["hidden"] = true;
$col["editable"] = true;
$cols[] = $col;	
$col = array();
$col["title"] = "Trip ID"; 
$col["name"] = "trip_id"; 
$col["width"] = "20";
$col["hidden"] = true;
$col["editable"] = true;
$cols[] = $col;
$col = array();
$col["title"] = "Code"; 
$col["name"] = "trip_code"; 
$col["width"] = "20";
$col["editable"] = true;
$col["editrules"] = array("required"=>true);
$cols[] = $col;		
$col = array();
$col["title"] = "Client ID";
$col["name"] = "cisid";
$col["width"] = "40";
$col["editable"] = true;
$col["hidden"] = true; 
$col["editrules"] = array("edithidden"=>true);
$col["align"] = "center"; 
$cols[] = $col;
$col = array();
$col["title"] = "Client";
$col["name"] = "trip_user";
$col["width"] = "40";
$col["editable"] = true; 
$col["editrules"] = array("required"=>true);
$col["align"] = "center"; 
$cols[] = $col;
$col = array();
$col["title"] = "Account Name";
$col["name"] = "trip_clinic"; 
$col["width"] = "60";
$col["editable"] = true;
$col["editrules"] = array("required"=>true);
$col["edittype"] = "select"; // render as select
$col["editoptions"] = array("value"=>"$clinicoptions"); // with these values "key:value;key:value;key:value"
$cols[] = $col;
$col = array();
$col["title"] = "Trip Date";
$col["name"] = "trip_date";
$col["width"] = "20";
$col["editable"] = true; 
$col["editoptions"] = array("size"=>20,"defaultValue"=>'YYYY-MM-DD'); 
$col["hidden"] = true;
$col["editrules"] = array("required"=>true,"edithidden"=>true);
$col["align"] = "center";
$col["formatter"] = "date"; // format as date
$col["formatoptions"] = array("srcformat"=>'Y-m-d',"newformat"=>'Y-m-d'); // format as date
$cols[] = $col;
$col = array();
$col["title"] = "Telephone";
$col["name"] = "trip_tel";
$col["width"] = "20";
$col["editable"] = true; 
$col["hidden"] = true;
$col["editrules"] = array("required"=>false,"edithidden"=>true);
$col["align"] = "center"; 
$cols[] = $col;
$col = array();
$col["title"] = "Remarks";
$col["name"] = "trip_remarks";
$col["width"] = "20";
$col["editable"] = true; 
$col["hidden"] = true;
$col["editrules"] = array("required"=>false,"edithidden"=>true);
$col["edittype"] = "textarea";
$col["editoptions"] = array("rows"=>2, "cols"=>30);
$col["align"] = "center"; 
$cols[] = $col;
$col = array();
$col["title"] = "Driver";
$col["name"] = "driver";
$col["width"] = "60";
$col["search"] = true;
$col["editable"] = true;
//$col["editrules"] = array("required"=>true);
$col["edittype"] = "select"; // render as select
$col["editoptions"] = array("value"=>"$drvoptions"); // with these values "key:value;key:value;key:value"
$cols[] = $col;
/*$col = array();
$col["title"] = "Mobile #";
$col["name"] = "cell_num";
$col["width"] = "20";
$col["editable"] = true; 
$col["hidden"] = true;
$col["editrules"] = array("required"=>true,"edithidden"=>true);
$col["align"] = "center"; 
$cols[] = $col;*/
$col = array();
$col["title"] = "Pick Location";
$col["name"] = "picklocation";
$col["width"] = "20";
$col["editable"] = true; 
$col["hidden"] = true;
$col["editrules"] = array("edithidden"=>true);
$col["align"] = "center"; 
$cols[] = $col;
$col = array();
$col["title"] = "Pick Address";
$col["name"] = "pck_add";
$col["width"] = "80";
$col["editable"] = true;
$col["editrules"] = array("required"=>true);
$col["edittype"] = "textarea";
$col["editoptions"] = array("rows"=>2, "cols"=>30);
$cols[] = $col;
$col = array();
$col["title"] = "Drop Location";
$col["name"] = "droplocation";
$col["width"] = "20";
$col["editable"] = true; 
$col["hidden"] = true;
$col["editrules"] = array("edithidden"=>true);
$col["align"] = "center"; 
$cols[] = $col;
$col = array();
$col["title"] = "Drop Address";
$col["name"] = "drp_add";
$col["width"] = "80";
$col["editable"] = true;
$col["editrules"] = array("required"=>true);
$col["edittype"] = "textarea";
$col["editoptions"] = array("rows"=>2, "cols"=>30);
$cols[] = $col;
$col = array();
$col["title"] = "Pickup Time";
$col["name"] = "pck_time";
$col["width"] = "40";
$col["editable"] = true;
$col["editrules"] = array("required"=>true);
$col["editoptions"] = array("size"=>20,"defaultValue"=>'HH:MM');
$cols[] = $col;
$col = array();
$col["title"] = "Drop Time";
$col["name"] = "drp_time";
$col["width"] = "40";
$col["editable"] = true;
$col["editoptions"] = array("size"=>20);
$cols[] = $col;
$col = array();
$col["title"] = "Miles";
$col["name"] = "trip_miles";
$col["width"] = "25";
$col["editable"] = true;
$col["editrules"] = array("edithidden"=>true);
$col["editoptions"] = array("size"=>20);
$cols[] = $col;
$col = array();
$col["title"] = "Driver";
$col["name"] = "driver2";
$col["width"] = "20";
$col["search"] = true;
$col["editable"] = true;
$col["hidden"] = true;
$col["editrules"] = array("edithidden"=>true);
$col["edittype"] = "select"; // render as select
$col["editoptions"] = array("value"=>"$drvoptions"); // with these values "key:value;key:value;key:value"
$cols[] = $col;
$col = array();
$col["title"] = "Pick Address";
$col["name"] = "pck_add2";
$col["width"] = "40";
$col["editable"] = true;
$col["hidden"] = true;
$col["editrules"] = array("edithidden"=>true);
$col["edittype"] = "textarea";
$col["editoptions"] = array("rows"=>2, "cols"=>30);
$cols[] = $col;
$col = array();
$col["title"] = "Drop Address";
$col["name"] = "drp_add2";
$col["width"] = "40";
$col["editable"] = true;
$col["hidden"] = true;
$col["editrules"] = array("edithidden"=>true);
$col["edittype"] = "textarea";
$col["editoptions"] = array("rows"=>2, "cols"=>30);
$cols[] = $col;
$col = array();
$col["title"] = "Pickup Time";
$col["name"] = "pck_time2";
$col["width"] = "25";
$col["editable"] = true;
$col["hidden"] = true;
$col["editrules"] = array("edithidden"=>true);
$col["editoptions"] = array("size"=>20,"defaultValue"=>'HH:MM');
$cols[] = $col;
$col = array();
$col["title"] = "Drop Time";
$col["name"] = "drp_time2";
$col["width"] = "25";
$col["editable"] = true;
$col["hidden"] = true;
$col["editrules"] = array("edithidden"=>true);
$col["editoptions"] = array("size"=>20);
$cols[] = $col;
$g = new jqgrid();
// set few params
$grid["rowNum"] = 10; // by default 20
$grid["sortname"] = 'trip_code'; // by default sort grid by this field
$grid["sortorder"] = "desc"; // ASC or DESC
$grid["caption"] = "Scheduled Trips"; // caption of grid
$grid["autowidth"] = false; // expand grid to screen width
$grid["multiselect"] = false; // allow you to multi-select through checkboxes
$grid["export"] = array("filename"=>"my-file", "sheetname"=>"test");
$g->set_options($grid);
$g->set_actions(array(	
		"add"=>false, // allow/disallow add
		"edit"=>true, // allow/disallow edit
		"delete"=>true, // allow/disallow delete
		"rowactions"=>true, // show/hide row wise edit/del/save option
		"export"=>true, // show/hide export to excel option
		"autofilter" => false, // show/hide autofilter for search
		"search" => "simple" // show single/multi field search condition (e.g. simple or advance)
	) 
);
$e["on_insert"] = array("add_trip", null, false);
$e["on_update"] = array("update_trip", null, true);
$e["on_delete"] = array("delete_trip", null, true);
$g->set_events($e);
function get_sheet($tdate) {
	$dQuery = "SELECT sheet_id FROM trips WHERE trip_date = '".$tdate."'";
	$drvdata2 = mysql_query($dQuery) or die("Couldn't execute query. ".mysql_error());
	$row = mysql_fetch_array($drvdata2);
    return $row['sheet_id'];   }

function get_drv($drv) {
	$dQuery = "SELECT cell_num FROM drivers WHERE drv_code = '".$drv."'";
	$drvdata2 = mysql_query($dQuery) or die("Couldn't execute query. ".mysql_error());
	$row1 = mysql_fetch_array($drvdata2);
    return $row1['cell_num']; }

function get_veh($drv){
	$dQuery = "SELECT Drvid FROM drivers WHERE drv_code = '".$drv."'";
	$drvdata2 = mysql_query($dQuery) or die("Couldn't execute query. ".mysql_error());
	$row1 = mysql_fetch_array($drvdata2);
    $drv_id = $row1['Drvid'];
	$vQuery = "SELECT veh_id FROM dv_mapping WHERE drv_id = '".$drv_id."'";
	$drvdata3 = mysql_query($vQuery) or die("Couldn't execute query. ".mysql_error());
	$row2 = mysql_fetch_array($drvdata3);
	return $row2['veh_id']; }

function distance($lat1, $lon1, $lat2, $lon2, $unit) {
	$theta = $lon1 - $lon2; 
	$dist = sin(deg2rad($lat1)) * sin(deg2rad($lat2)) + cos(deg2rad($lat1)) * cos(deg2rad($lat2)) * cos(deg2rad($theta)); 
	$dist = acos($dist); 
	$dist = rad2deg($dist); 
	$miles = $dist * 60 * 1.1515;
	$unit = strtoupper($unit);	
	if ($unit == "K") {
	return ($miles * 1.609344); 
	} else if ($unit == "N") {
	return ($miles * 0.8684);
	} else {
	$dist = 'http://maps.google.com/maps/nav?q=from:'.$lat1.','.$lon1.'%20to:'.$lat2.','.$lon2.'';
	$data = @file_get_contents($dist);
	$result = explode(',', $data);
	//print_r($result);
	$uff = array();
	for($i=0; $i<count($result); $i++){
		if (preg_match('/Distance/', $result[$i] )){
			 array_push($uff, $result[$i]); 
			  }
	}
	$required  = $uff[0];
	$kholo =explode(':',$required);
	$mile_hisa = $kholo[2];
	$miles2 = round(($mile_hisa * 0.000621371192), 2);
	return $miles2;
	} }

function update_trip($data){
	$trip_code 		= $data["params"]["trip_code"];
	$trip_clinic 	= $data["params"]["trip_clinic"];
	$trip_user 		= $data["params"]["trip_user"];
	$trip_tel 		= $data["params"]["trip_tel"];
	$trip_date 		= $data["params"]["trip_date"];
	$trip_id		= $data["params"]["trip_id"];
	mysql_query("UPDATE trips SET 
				trip_code = '$trip_code',
				account = '$trip_clinic',
				trip_user = '$trip_user',
				trip_tel = '$trip_tel',
				trip_date = '$trip_date'
				WHERE trip_id = '$trip_id'");
	$drvcode = explode("--","{$data['params']['driver']}");	
	$letters1 = array(' ',',');	
	$replace1 = array('+','');
		
	$add3 = str_replace($letters1,$replace1,$data['params']['pck_add']);
	$add4 = str_replace($letters1,$replace1,$data['params']['drp_add']);
	$geocode3=file_get_contents('http://maps.google.com/maps/api/geocode/json?address='.$add3.'&sensor=false'); 
	$output3= json_decode($geocode3);  
	$lat3 = $output3->results[0]->geometry->location->lat;  
	$long3 = $output3->results[0]->geometry->location->lng; 	
	$geocode4=file_get_contents('http://maps.google.com/maps/api/geocode/json?address='.$add4.'&sensor=false'); 
	$output4= json_decode($geocode4);  
	$lat4 = $output4->results[0]->geometry->location->lat;  
	$long4 = $output4->results[0]->geometry->location->lng; 
//Miles calulcation through Google
	/*$dist = 'http://maps.google.com/maps/nav?q=from:'.$lat3.','.$long3.'%20to:'.$lat4.','.$long4.'';
	$data = @file_get_contents($dist);
	$result = explode(',', $data);
	//print_r($result);
	$uff = array();
	for($i=0; $i<count($result); $i++){
		if (preg_match('/Distance/', $result[$i] )){
			 array_push($uff, $result[$i]); 
			  }
	}
	$required  = $uff[0];
	$kholo =explode(':',$required);
	$mile_hisa = $kholo[2];
	$miles2 = round(($mile_hisa * 0.000621371192), 2);*/
	//End of miles calculation		
	//$miles2 = distance($lat3, $long3, $lat4, $long4, "m");
	$miles2 =	"{$data['params']['trip_miles']}";
	$pckmin3 = explode(":","{$data['params']['pck_time']}");
	$pckhr2  = $pckmin3[0];
	$pckmin2 = $pckmin3[1];
	if( $miles2 >= 0 && $miles2 <= 10 ){
		$drpmin2 = $pckmin2+20;		
	}else if( $miles2 >= 10 && $miles2 <= 15 ){
		$drpmin2 = $pckmin2+30;		
	}else if( $miles2 >= 15 && $miles2 <= 20 ){
		$drpmin2 = $pckmin2+40;		
	}else if( $miles2 >= 20 && $miles2 <= 25 ){
		$drpmin2 = $pckmin2+45;		
	}else if( $miles2 >= 25 && $miles2 <= 30 ){
		$drpmin2 = $pckmin2+50;		
	}else if( $miles2 >= 30 && $miles2 <= 35 ){
		$drpmin2 = $pckmin2+55;		
	}else if( $miles2 >= 35 && $miles2 <= 40 ){
		$drpmin2 = $pckmin2+60;		
	}else if( $miles2 >= 40 && $miles2 <= 45 ){
		$drpmin2 = $pckmin2+65;		
	}else if( $miles2 >= 45 && $miles2 <= 50 ){
		$drpmin2 = $pckmin2+70;		
	}else if( $miles2 >= 50  ){
		$drpmin2 = $pckmin2+120;		
	}else{
		$drpmin2 = 0;
	}
	$drptime2 = date("H:i",mktime($pckhr2,$drpmin2,0));
	
			mysql_query("UPDATE trip_details SET 					                       
				drv_id 		=		'$drvcode[1]',
				picklocation= 		'{$data["params"]["picklocation"]}',
				pck_add 	= 		'{$data["params"]["pck_add"]}',
				pck_time 	= 		'{$data["params"]["pck_time"]}',
				droplocation= 		'{$data["params"]["droplocation"]}',
				drp_add 	= 		'{$data["params"]["drp_add"]}',
				drp_time 	= 		'$drptime2',
				trip_miles 	= 		'{$data["params"]["trip_miles"]}',
				trip_remarks	= 	'{$data["params"]["trip_remarks"]}'
				WHERE tdid = '{$data["params"]["tdid"]}'"); 
				
			$dQuery = "SELECT reqid,trip_id FROM trip_details WHERE tdid = '{$data["params"]["tdid"]}'";
	$drvdata2 = mysql_query($dQuery) or die("Couldn't execute query. ".mysql_error());
	$row1 = mysql_fetch_array($drvdata2);
    $reqid 		= $row1['reqid'];
	$trip_id	= $row1['trip_id'];	
					mysql_query("UPDATE request_info SET 	appdate	=	'$trip_date'		WHERE id = '$reqid'");		
					mysql_query("UPDATE  trip_details SET 	date	=	'$trip_date'		WHERE trip_id = '$trip_id'");		}		                       
							
						
			



function delete_trip($data){
	mysql_query("DELETE FROM trip_details
				WHERE tdid = '{$data["params"]["tdid"]}'"); }

function add_trip($data){
	$dQuery = "SELECT id FROM hospitals WHERE hospname ='{$data["params"]["trip_clinic"]}'";
	$drvdata2 = mysql_query($dQuery) or die("Couldn't execute query. ".mysql_error());
	$row = mysql_fetch_array($drvdata2);
    $userid = $row['id'];
	mysql_query("INSERT INTO requests SET 
				userid = '".$userid."',
				hospname = '{$data["params"]["trip_clinic"]}',
				reqdate = NOW(),
				sessionn_id = '0',
				req_status = 'active'");
	$req_id = mysql_insert_id();
	$sheet = get_sheet("{$data['params']['trip_date']}");
	mysql_query("INSERT INTO trips SET 
				trip_code = '{$data["params"]["trip_code"]}',
				trip_clinic = '{$data["params"]["trip_clinic"]}',
				trip_user = '{$data["params"]["trip_user"]}',
				trip_tel = '{$data["params"]["trip_tel"]}',
				trip_date = '{$data["params"]["trip_date"]}',
				sheet_id = '$sheet',
				status = '0',
				trip_miles = '0'");
	$trip_id = mysql_insert_id();	
	$drvcode = explode("--","{$data['params']['driver']}");	
	$veh_id = get_veh($drvcode[1]);
	$letters = array(' ',',');	
	$replace = array('+','');	
	$add1 = str_replace($letters,$replace,"{$data['params']['pck_add']}");
	$add2 = str_replace($letters,$replace,"{$data['params']['drp_add']}");
	$geocode1=file_get_contents('http://maps.google.com/maps/api/geocode/json?address='.$add1.'&sensor=false'); 
	$output1= json_decode($geocode1);  
	$lat1 = $output1->results[0]->geometry->location->lat;  
	$long1 = $output1->results[0]->geometry->location->lng; 	
	$geocode2=file_get_contents('http://maps.google.com/maps/api/geocode/json?address='.$add2.'&sensor=false'); 
	$output2= json_decode($geocode2);  
	$lat2 = $output2->results[0]->geometry->location->lat;  
	$long2 = $output2->results[0]->geometry->location->lng; 
//Miles calulcation through Google
	$dist = 'http://maps.google.com/maps/nav?q=from:'.$lat1.','.$long1.'%20to:'.$lat2.','.$long2.'';
	$data1 = @file_get_contents($dist);
	$result1 = explode(',', $data1);
	//print_r($result);
	for($i=0; $i<count($result1); $i++){
		if (preg_match('/Distance/', $result1[$i] )){
			 $required1 = $result1[$i]; break; 
			 }
	}
	$required1; 
	$kholo1 =explode(':',$required1);
	$mile_hisa1 = $kholo1[2];
	$miles1 = round(($mile_hisa1 * 0.000621371192), 2);
//End of miles calculation		
	//$miles1 = distance($lat1, $long1, $lat2, $long2, "m");
	$pckmin1 = explode(":","{$data['params']['pck_time']}");
	$pckhr  = $pckmin1[0];
	$pckmin = $pckmin1[1];
	if( $miles1 >= 0 && $miles1 <= 10 ){
		$drpmin = $pckmin+20;		
	}else if( $miles1 >= 10 && $miles1 <= 15 ){
		$drpmin = $pckmin+30;		
	}else if( $miles1 >= 15 && $miles1 <= 20 ){
		$drpmin = $pckmin+40;		
	}else if( $miles1 >= 20 && $miles1 <= 25 ){
		$drpmin = $pckmin+45;		
	}else if( $miles1 >= 25 && $miles1 <= 30 ){
		$drpmin = $pckmin+50;		
	}else if( $miles1 >= 30 && $miles1 <= 35 ){
		$drpmin = $pckmin+55;		
	}else if( $miles1 >= 35 && $miles1 <= 40 ){
		$drpmin = $pckmin+60;		
	}else if( $miles1 >= 40 && $miles1 <= 45 ){
		$drpmin = $pckmin+65;		
	}else if( $miles1 >= 45 && $miles1 <= 50 ){
		$drpmin = $pckmin+70;		
	}else if( $miles1 >= 50  ){
		$drpmin = $pckmin+120;		
	}else{
		$drpmin = 0;
	}
	$drptime = date("H:i",mktime($pckhr,$drpmin,0));
	mysql_query("INSERT INTO trip_details SET 					                       
				trip_id 	=	 	'$trip_id',
				drv_id 		=		'$drvcode[1]',
				veh_id 		= 		'$veh_id',
				date		= 		'{$data["params"]["trip_date"]}',
				pck_add 	= 		'{$data["params"]["pck_add"]}',
				pck_time 	= 		'{$data["params"]["pck_time"]}',
				pck_ptime 	= 		'',
				pck_atime 	= 		'',
				drp_add 	= 		'{$data["params"]["drp_add"]}',
				drp_time 	= 		'$drptime',
				drp_ptime 	= 		'',
				drp_atime 	= 		'',
				trip_miles 	= 		'".intval($miles1)."',
				type 		= 		'1',
				wc 			= 		'0',
				status		=  		'0',
				trip_remarks	= 	'{$data["params"]["trip_remarks"]}'");
	$tipid = mysql_insert_id();
	$to = get_drv($drvcode[1]);
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
		$sMessage ="Tripid:$tipid\n-\nName:{$data['params']['trip_user']}\n-\nPh:{$data['params']['trip_tel']}\n-\nPickupAddress:{$data['params']['pck_add']}\n-\nDropAddress:{$data['params']['drp_add']}\n-\nTime:{$data['params']['pck_time']}\n-\nDate:{$data['params']['trip_date']}";
		$tmapi = new TextMarksV2APIClient($sMyApiKey, $sMyTextMarksUser, $sMyTextMarksPass);
		$resp = $tmapi->call('GroupLeader', 'send_one_message', array(
		   'tm' => $sKeyword,
		   'msg' => $sMessage,
		   'to' => $sPhone
		));	
	}
	if("{$data['params']['pck_add2']}" != ''){
		$wc = ("{$data['params']['pck_time2']}" != '') ? '0' : '1';		
		$drvcode2 = explode("--","{$data['params']['driver2']}");
		$veh_id2 = get_veh($drvcode2[1]);
		$letters1 = array(' ',',');	
		$replace1 = array('+','');	
		$add3 = str_replace($letters1,$replace1,"{$data['params']['pck_add2']}");
		$add4 = str_replace($letters1,$replace1,"{$data['params']['drp_add2']}");
		$geocode3=file_get_contents('http://maps.google.com/maps/api/geocode/json?address='.$add3.'&sensor=false'); 
		$output3= json_decode($geocode3);  
		$lat3 = $output3->results[0]->geometry->location->lat;  
		$long3 = $output3->results[0]->geometry->location->lng; 	
		$geocode4=file_get_contents('http://maps.google.com/maps/api/geocode/json?address='.$add4.'&sensor=false'); 
		$output4= json_decode($geocode4);  
		$lat4 = $output4->results[0]->geometry->location->lat;  
		$long4 = $output4->results[0]->geometry->location->lng; 
		$miles2 = distance($lat3, $long3, $lat4, $long4, "m");
		$pckmin3 = explode(":","{$data['params']['pck_time2']}");
		$pckhr2  = $pckmin3[0];
		$pckmin2 = $pckmin3[1];
		if( $miles2 >= 0 && $miles2 <= 10 ){
			$drpmin2 = $pckmin2+20;		
		}else if( $miles2 >= 10 && $miles2 <= 15 ){
			$drpmin2 = $pckmin2+30;		
		}else if( $miles2 >= 15 && $miles2 <= 20 ){
			$drpmin2 = $pckmin2+40;		
		}else if( $miles2 >= 20 && $miles2 <= 25 ){
			$drpmin2 = $pckmin2+45;		
		}else if( $miles2 >= 25 && $miles2 <= 30 ){
			$drpmin2 = $pckmin2+50;		
		}else if( $miles2 >= 30 && $miles2 <= 35 ){
			$drpmin2 = $pckmin2+55;		
		}else if( $miles2 >= 35 && $miles2 <= 40 ){
			$drpmin2 = $pckmin2+60;		
		}else if( $miles2 >= 40 && $miles2 <= 45 ){
			$drpmin2 = $pckmin2+65;		
		}else if( $miles2 >= 45 && $miles2 <= 50 ){
			$drpmin2 = $pckmin2+70;		
		}else if( $miles2 >= 50  ){
			$drpmin2 = $pckmin2+120;		
		}else{
			$drpmin2 = 0;
		}
		$drptime2 = date("H:i",mktime($pckhr2,$drpmin2,0));
		mysql_query("INSERT INTO trip_details SET 					                       
					trip_id 	=	 	'$trip_id',
					drv_id 		=		'$drvcode2[1]',
					veh_id 		= 		'$veh_id2',
					date		= 		'{$data["params"]["trip_date"]}',
					pck_add 	= 		'{$data["params"]["pck_add2"]}',
					pck_time 	= 		'{$data["params"]["pck_time2"]}',
					pck_ptime 	= 		'',
					pck_atime 	= 		'',
					drp_add 	= 		'{$data["params"]["drp_add2"]}',
					drp_time 	= 		'$drptime2',
					drp_ptime 	= 		'',
					drp_atime 	= 		'',
					trip_miles 	= 		'".intval($miles2)."',
					type 		= 		'1',
					wc 			= 		'$wc',
					status		=  		'0',
					trip_remarks	= 	'{$data["params"]["trip_remarks"]}'");	
	}
	$tippid = mysql_insert_id();
	$to = get_drv($drvcode2[1]);
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
		$sMessage ="Tripid:$tippid\n-\nName:{$data['params']['trip_user']}\n-\nPh:{$data['params']['trip_tel']}\n-\nPickupAddress:{$data['params']['pck_add2']}\n-\nDropAddress:{$data['params']['drp_add2']}\n-\nTime:{$data['params']['pck_time2']}\n-\nDate:{$data['params']['trip_date']}";
		$tmapi = new TextMarksV2APIClient($sMyApiKey, $sMyTextMarksUser, $sMyTextMarksPass);
		$resp = $tmapi->call('GroupLeader', 'send_one_message', array(
		   'tm' => $sKeyword,
		   'msg' => $sMessage,
		   'to' => $sPhone
		));	
	}
	if("{$data['params']['pck_add2']}" != ''){
		$miles = intval($miles1) + intval($miles2);
		$ttype = 'RW';
		$back_address = "{$data['params']['drp_add2']}";
		$returnpickup = "{$data['params']['pck_time2']}".':00';
	}else{
		$miles = intval($miles1);
		$ttype = 'OW';
		$returnpickup = '00:00:00';
	}
	$pck_address = "{$data['params']['pck_add']}";
	$dst_address = "{$data['params']['drp_add']}";
	$appdate=date("Y-m-d",mktime(0,0,0));
	$apptime = "{$data['params']['pck_time']}".':00';
	$pname = "{$data['params']['trip_user']}";
	$phnum = "{$data['params']['trip_tel']}";
	$cisid = "{$data['params']['cisid']}";
	mysql_query("INSERT INTO request_info SET 
					prog='1',
					total='0',	
					milage='".$miles."',	
					triptype='".$ttype."',	
					vehtype='',					
					ssn='',
					req_id='".$req_id."',
					pickaddr='".$pck_address."',
					destination='".$dst_address."',
					backto='".$back_address."',
					appdate='".$appdate."',
                    apptime='".$apptime."',
					returnpickup='".$returnpickup."',
					casemanager='',
					today_date=NOW(),
					clientname='".$pname."',
                    phnum='".$phnum."',
					dob='',
					email='',
					clientcasemanager='',
					cisid='".$cisid."',
					comments='',
					appt_type='0',
					reqstatus='approved',
					confirmation_type='Cash'"); }

$today = $_GET['dt'];
// you can provide custom SQL query to display data
$g->select_command = "SELECT * FROM (SELECT t.sheet_id, td.veh_id, t.trip_code, t.trip_id, t.trip_user, t.trip_date, t.trip_tel, td.tdid, td.type,td.picklocation, td.pck_add, td.aptime, td.pck_time, td.drp_atime,td.droplocation, td.drp_add, td.drp_time, td.trip_miles,td.wc, td.trip_remarks, td.status, CONCAT(dr.fname,' ',dr.lname,'--',dr.drv_code) AS driver,ac.account_name as trip_clinic  FROM trips as t INNER JOIN trip_details as td ON t.trip_id=td.trip_id LEFT JOIN drivers as dr ON td.drv_id = dr.drv_code LEFT JOIN accounts as ac ON t.account=ac.id WHERE t.trip_date='".$today."') o";
$g->export_command = "SELECT * FROM (SELECT t.trip_code, t.trip_user,ac.account_name as trip_clinic,t.trip_date, t.trip_tel,td.picklocation, td.pck_add,td.droplocation, td.drp_add, td.pck_time, td.drp_time, td.trip_miles, CONCAT(dr.fname,' ',dr.lname,'--',dr.drv_code) AS driver, td.trip_remarks FROM trips as t INNER JOIN trip_details as td ON t.trip_id=td.trip_id LEFT JOIN drivers as dr ON td.drv_id = dr.drv_code LEFT JOIN accounts as ac ON t.account=ac.id WHERE t.trip_date='".$today."') o";
// this db table will be used for add,edit,delete
$g->table = "trip_details";
// default render is textbox
//$col["editoptions"] = array("value"=>'10');
$g->set_columns($cols);
// can be switched to select (dropdown)
# $col["edittype"] = "select"; // render as select
# $col["editoptions"] = array("value"=>'10:$10;20:$20;30:$30;40:$40;50:$50'); // with these values "key:value;key:value;key:value"
/*$col = array();
$col["title"] = "Closed";
$col["name"] = "closed";
$col["width"] = "50";
$col["editable"] = true;
$col["edittype"] = "checkbox"; // render as checkbox
$col["editoptions"] = array("value"=>"Yes:No"); // with these values "checked_value:unchecked_value"
$cols[] = $col;*/
// set database table for CRUD operations
//$g->table = "invheader";
// subqueries are also supported now (v1.2)
// $g->select_command = "select * from (select * from invheader) as o";
// render grid
$out = $g->render("list1");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html>
<head>
	<link rel="stylesheet" type="text/css" media="screen" href="js/themes/redmond/jquery-ui-1.8.2.custom.css"></link>	
	<link rel="stylesheet" type="text/css" media="screen" href="js/jqgrid/css/ui.jqgrid.css"></link>
	<link rel="stylesheet" href="../theme/style.css" type="text/css">
	<link rel="stylesheet" type="text/css" href="../theme/chromestyle.css" />
	<link href="../theme/styles.css" rel="stylesheet" type="text/css">
	<link href="../facebox/facebox.css" rel="stylesheet" type="text/css">		
	<script src="js/jquery-1.4.2.min.js" type="text/javascript"></script>
	<script src="js/jqgrid/js/i18n/grid.locale-en.js" type="text/javascript"></script>
	<script src="js/jqgrid/js/jquery.jqGrid.min.js" type="text/javascript"></script>	
	<script src="js/themes/jquery-ui-1.8.2.custom.min.js" type="text/javascript"></script>
	<script language="javascript" type="text/javascript" src="../facebox/facebox.js"></script>
	<script language="javascript" type="text/javascript" src="js/jquery.maskedinput-1.2.2.js"></script>
	<script>
	 $(document).ready(function($) {
			  $('a[rel*=facebox]').facebox({
				loading_image : 'loading.gif',
				close_image   : 'closelabel.gif'
			  }) 
	});
	</script>
</head>
<body>
	<div id="wrapper_outer">
	<!-- start of inter container -->
    <div id="wrapper_inner">
        <!-- start of top banner -->
        <div id="banner">        	        	
<div class="banner_menu float_right">
            	<ul>
  <li>Date: <?php echo $_GET['dt'];?></li>
  <li><a href="../routingpanel/index.php"><img src="../images/home.png" alt="" border="0" /></a></li>
  <li><a rel="facebox" href="../routingpanel/scheduletrips.php"><img src="../images/calender.png" alt="" border="0" /></a></li>
                </ul>
            </div>
            <!-- start of logo-->
            <div class="logo float_left">
				<img src="../images/logo.png" alt="" height="65" width="100" />
            </div><!-- end of logo-->
        </div> <!-- end of top banner -->
<div >
<!-- start of left side bar -->
             <!-- end of left side bar -->
		<table  width="100%" border="0" cellspacing="0" cellpadding="0"  align="left" bgcolor="#FFFFFF">
  <tr>
    <td><table width="100%" border="0" cellspacing="0" cellpadding="0" class="outer_table1">
        <tr>
          <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td><div align="center">
					<?php echo $out ?>
					</div>
					<div style="text-align:right">
					<div style="padding-top:10px; padding-right:10px;">
					<a href="generate.php?dt=<?php echo $_GET['dt'];?>"><img src="../images/export_btn.jpg" /></a>
					</div>
					</div></td>
              </tr>
           </table></td>
        </tr>
      </table>
</td>
  </tr>
</table>	
<div id="footer" align="left"><?php echo  $t=$_SESSION['footer']; ?><br />
      <a class="hybrid_link" href="http://www.hybriditservices.com" target="_blank">A Product of Hybrid IT Services Inc. </a> </div><a href="http://www.hybriditservices.com" target="_blank"/>
</div>
</div> <!-- end of body container -->
	<div class="margin_bottom_10"></div>        
    </div>
</body>
</html>