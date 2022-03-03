<?php

   	/* *************************** *

	   * Created On : 27th May,2010 

	   * File : contact_details.php

	   * Created By : Muhammad Rizwan

	   *************************** */



include_once('DBAccess/Database.inc.php');



$db = new Database;	

$db2 = new Database;	

	

$msgs   = '';



if(isset($_GET['sub']) && $_GET['sub'] == 'success'){

	$msgs = "HIC Form Details Updated Successfully";

}

if(isset($_GET['sub']) && $_GET['sub'] == 'failure'){

	$msgs = "Unable to Update HIC Form Details";

}



$db->connect();

$db2->connect();



$id = 1;



// update Contact Details

if(count($_POST) > 0)

{

	$program     = sql_replace($_POST['program']);
	$condemp     = sql_replace($_POST['condemp']);
	$condauto    = sql_replace($_POST['condauto']);	
	$condother   = sql_replace($_POST['condother']);		
	$diagnosis	 = sql_replace($_POST['diagnosis']);
	$service1	 = sql_replace($_POST['service1']);
	$service2	 = sql_replace($_POST['service2']);
	$cpt1		 = sql_replace($_POST['cpt1']);
	$cpt2		 = sql_replace($_POST['cpt2']);
	$scharges	 = sql_replace($_POST['scharges']);
	$units		 = sql_replace($_POST['units']);
	$provider	 = sql_replace($_POST['provider']);
	$tax		 = sql_replace($_POST['tax']);	
	$ssn         = (isset($_POST['ssn']) && $_POST['ssn'] == '1') ? '1' : '0';
	$ein         = (isset($_POST['ein']) && $_POST['ein'] == '1') ? '1' : '0';
	$signed		 = sql_replace($_POST['signed']);
	$billingaddr = sql_replace($_POST['billingaddr']);
	$billingphone = sql_replace($_POST['billingphone']);
	$deptstamp 		= sql_replace($_POST['deptstamp']);
	$resubmission = sql_replace($_POST['resubmission']);
	
	$Query3  = "UPDATE ".TBL_CONTACT." SET 
				program='$program',
				condemp='$condemp',
				condauto='$condauto',
				condother='$condother',
				diagnosis='$diagnosis',
				service1='$service1',
				service2='$service2',
				cpt1='$cpt1',
				cpt2='$cpt2',
				scharges = '$scharges',
				units = '$units',
				provider = '$provider',
				tax='$tax',
				ssn='$ssn',
				ein='$ein',
				signed='$signed',
				billingaddr='$billingaddr',
				billingphone='$billingphone',
				deptstamp='$deptstamp',
				resubmission='$resubmission'
				WHERE c_id='$id'";

						

					  	if($db->execute($Query3))

						{

								echo '<script>location.href="hic_info.php?sub=success";</script>';

								exit;

						}

						else

						{

								echo '<script>location.href="index.php?sub=failure";</script>';

								exit;

						}

}else{



	$query = "SELECT * FROM ".TBL_CONTACT."  WHERE c_id='".$id."'";

    if($db->query($query) && $db->get_num_rows() > 0)

		{

			$udata = $db->fetch_all_assoc();

		}

}	



$db->close();

$db2->close();

	

$pgTitle='Admin Panel | HIC Details';

$smarty->assign("pgTitle",$pgTitle);

$smarty->assign("title",$title);

$smarty->assign("pgname",$pgname);		

$smarty->assign("msgs",$msgs);

$smarty->assign("stat",$stat);

$smarty->assign("page",$pageno);

$smarty->assign("udata",$udata);			

$smarty->display('hic_info.tpl');

		

?>