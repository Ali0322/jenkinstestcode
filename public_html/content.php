<?php
 include_once('includefile.php');
$Qcontent="SELECT * FROM contents WHERE name='$pg'"; 
if($db->query($Qcontent) && $db->get_num_rows()>0){	$content=$db->fetch_one_assoc(); }
/*$services="SELECT * FROM services ORDER BY id "; 
if($db->query($services) && $db->get_num_rows()>0){	$servicesdata=$db->fetch_all_assoc(); }*/
//print_r($content);
	$db->close();
	//print_r($servicesdata);
	$smarty->assign("content",$content);
	//$smarty->assign("servicesdata",$servicesdata);
	//$smarty->assign("pg",$name);
	$smarty->assign("foot",$foot);			
    $smarty->display('content.tpl');	
?>