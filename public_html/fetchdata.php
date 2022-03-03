<?php
   	include_once('DBAccess/Database2.inc.php');
	$db = new Database;	
	$db->connect();
		if(isset($_POST['hid'])) {
			$hid = sql_replace($_POST['hid']);	
			if($hid != '') {
		      $returnedData = '';
				 if($_POST['hid'] != ''){
				$Query = "SELECT userid,reqid,".TBL_FORMS.".* FROM ".TBL_FORMS.", ".TBL_REQUESTS." 
				          WHERE cisid='$hid' AND reqid=req_id 
						  ORDER BY id DESC LIMIT 1";
                }
                  if($db->query($Query) && $db->get_num_rows() > 0)
	                 {
					 $Details = $db->fetch_all_assoc();     			
	         		 }
				$phyaddr = explode(",",$Details[0]['phyaddress']);
				$ind = count($phyaddr);
				$phyzip = trim($phyaddr[$ind-1]);
				$phystate = trim($phyaddr[$ind-2]);
				$phycity = trim($phyaddr[$ind-3]);
				$phyaddress1 = array_slice($phyaddr,0,$ind-3);
				$phyaddress = implode(",",$phyaddress1);
				$pickaddr = explode(",",$Details[0]['pickaddr']);
				$indp = count($pickaddr);
				$pickzip = trim($pickaddr[$indp-1]);
				$pickstate = trim($pickaddr[$indp-2]);
				$pickcity = trim($pickaddr[$indp-3]);
				$pickaddress1 = array_slice($pickaddr,0,$indp-3);
				$pickaddress = implode(",",$pickaddress1);
				$destaddr = explode(",",$Details[0]['destination']);
				$indd = count($destaddr);
				$destzip = trim($destaddr[$indd-1]);
				$deststate = trim($destaddr[$indd-2]);
				$destcity = trim($destaddr[$indd-3]);
				$destaddress1 = array_slice($destaddr,0,$indd-3);
				$destaddress = implode(",",$destaddress1);
				$backaddr = explode(",",$Details[0]['backto']);
				$indb = count($backaddr);
				$backzip = trim($backaddr[$indb-1]);
				$backstate = trim($backaddr[$indb-2]);
				$backcity = trim($backaddr[$indb-3]);
				$backaddress1 = array_slice($backaddr,0,$indb-3);
				$backaddress = implode(",",$backaddress1);
				$returnedData .= $Details[0]['clientname'].'^'.$Details[0]['phnum'].'^'.$Details[0]['email'];
				$returnedData .= '^'.$Details[0]['dob'].'^'.$Details[0]['clientcasemanager'];	
				$returnedData .= '^'.$Details[0]['fname'].'^'.$Details[0]['lname'].'^'.$Details[0]['clinic'];
				$returnedData .= '^'.$phyaddress.'^'.$phycity.'^'.$phystate;
$returnedData .= '^'.$phyzip.'^'.$Details[0]['phyphone'].'^'.$Details[0]['phyfax'].'^'.$Details[0]['reason'];
			$returnedData .= '^'.$pickaddress.'^'.$pickcity.'^'.$pickstate.'^'.$pickzip;
				$returnedData .= '^'.$destaddress.'^'.$destcity.'^'.$deststate.'^'.$destzip;
				$returnedData .= '^'.$backaddress.'^'.$backcity.'^'.$backstate.'^'.$backzip;				
				$returnedData .= '^'.$Details[0]['appdate'];				
				$returnedData .= '^'.substr($Details[0]['apptime'],0,-3).'^'.$Details[0]['returnpickup'];
				$returnedData .= '^'.$Details[0]['casemanager'].'^'.$Details[0]['comments'];					
				$returnedData .= '^'.'--Automation--';
				echo $returnedData;	
				} else {
					echo 'ERROR: There was a problem with the query.';
				}
		} else {
			echo 'There should be no direct access to this script!';
		}
?>