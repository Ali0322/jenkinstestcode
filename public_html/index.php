<?php //echo $_SERVER['HTTP_HOST']; exit;

echo '<script>window.open("http://demo5.nemtclouddispatch.com/administrator","_parent");</script>'; exit; 



 include_once('includefile.php');

$Qhomecontent="SELECT * FROM contents WHERE name='$pg'"; 

if($db->query($Qhomecontent) && $db->get_num_rows()>0){	$homecontent=$db->fetch_all_assoc(); }

$Qhomecontent2="SELECT * FROM contents WHERE name='request'"; 

if($db->query($Qhomecontent2) && $db->get_num_rows()>0){	$homecontent2=$db->fetch_one_assoc(); }

$services="SELECT * FROM services ORDER BY id "; 

if($db->query($services) && $db->get_num_rows()>0){	$servicesdata=$db->fetch_all_assoc(); }

$gall="SELECT * FROM gallery ORDER BY id "; 

if($db->query($gall) && $db->get_num_rows()>0){	$gallery=$db->fetch_all_assoc(); }

	$db->close();

	//print_r($gallery); die;

	$smarty->assign("contentdata",$homecontent);

	$smarty->assign("contentdata2",$homecontent2);

	$smarty->assign("servicesdata",$servicesdata);

	$smarty->assign("gallery",$gallery);

//	$smarty->assign("pg",$name);

	$smarty->assign("foot",$foot);

	$smarty->assign("pg",'index');

    $smarty->display('index.tpl');	

?>