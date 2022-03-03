<?php
 include_once('includefile.php');
$gall="SELECT * FROM gallery ORDER BY id "; 
if($db->query($gall) && $db->get_num_rows()>0){	$gallery=$db->fetch_all_assoc(); }$smarty->assign("ourgallery",$services);			
    $smarty->assign("pg",'gallery');
	$smarty->assign("gallery",$gallery);
	$smarty->display('ourgallery.tpl');
		
?>