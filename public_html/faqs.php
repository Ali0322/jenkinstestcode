<?php
 include_once('includefile.php');
$Qservices="SELECT * FROM faqs ORDER BY id ASC";
if($db->query($Qservices) && $db->get_num_rows()>0){	$services=$db->fetch_all_assoc();} 

	$smarty->assign("services",$services);			
    $smarty->assign("pg",'faqs');
	$smarty->display('faqs.tpl');
		
?>