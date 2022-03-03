<?php
   	include_once('../DBAccess/Database.inc.php');
	include_once('../Classes/imgUploader.php');
	$image = new imgUploader; 
	$db = new Database;	
	$msgs   = '';
	$errors = '';
	$db->connect();
    $eId = intval($_REQUEST['eId']);
if(isset($_POST['admusersub']))
{
   		$title	 	= sql_replace($_POST['title']);
	   	//$content	= sql_replace($_POST['content']);
		//$excerpt	= sql_replace($_POST['excerpt']);
	if(isset($_FILES['dimage']['name'][0]) && $_FILES['dimage']['name'][0] != '') { 
	        $filename = 'dimage';
			$updFile = $filename;
            $big_path   = '../../images/';
            $thumb_path = '../../images/';
			$w = '50';
			$h = '50';
           $imgUp = $image->uploadImgwithThumbnail($filename,$big_path,$thumb_path,$w,$h,0); 
         	$xp = explode(',',$imgUp);
			$thumb = str_replace('../','',urldecode($xp[1]));
			$image = str_replace('../','',urldecode($xp[0]));
	 }else{
		$thumb	 	= sql_replace($_POST['thumb']);
	   	$image		= ($_POST['image']);}
		if($error == '')
			 {
			  			$Query3  = "UPDATE ".gallery." SET 
						 				title		='$title',
										thumb		='$thumb',
										image		='$image'  WHERE id='$eId'";
			if($db->execute($Query3))
				{
					  echo '<script>alert("Updated Successfully!");</script>';
					  echo '<script>window.open("index.php","_parent");</script>';			  
					  exit;
				}
				else
				{
					  echo '<script>alert("Unable to Update!");</script>';
					  echo '<script>window.open("index.php","_parent");</script>';			  
					  exit;
				}
				}
	}
else
{	$gallDetails = "SELECT * FROM ".gallery." WHERE id='$eId'"; 
	if($db->query($gallDetails) && $db->get_num_rows() > 0)	{	$gallery = $db->fetch_one_assoc();  	}  }
$db->close();
//print_r($gallery); die;
$pgTitle = "Admin Panel -- [Edit]";	
$smarty->assign("title",$title);
$smarty->assign("pgname",$pgname);		
$smarty->assign("msgs",$msgs);
$smarty->assign("errors",$error);
$smarty->assign("gallery",$gallery);
$smarty->assign("eId",$eId);
 	
$smarty->display('gallery/edit.tpl');
?>