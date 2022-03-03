<?php
 include_once('includefile.php');
$Qhomecontent="SELECT * FROM contents WHERE name='$pg'"; 

$services="SELECT * FROM services ORDER BY id "; 
if($db->query($services) && $db->get_num_rows()>0){	$servicesdata=$db->fetch_all_assoc(); }
	$db->close();
	//print_r($homecontent);
	$smarty->assign("contentdata",$homecontent);
	$smarty->assign("contentdata2",$homecontent2);
	$smarty->assign("servicesdata",$servicesdata);
//	$smarty->assign("pg",$name);
	$smarty->assign("foot",$foot);
	$smarty->assign("pg",'contactus');			
    $smarty->display('contactus.tpl');	
?>