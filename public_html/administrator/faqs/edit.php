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
{  		$question	 	= sql_replace($_POST['question']);
	   	$answer			= sql_replace($_POST['answer']);
		if($error == '')
			 {
			  			$Query3  = "UPDATE ".faqs." SET 
						 				question	='$question',
										answer		='$answer'  WHERE id='$eId'";
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
{	$getDetails = "SELECT * FROM ".faqs." WHERE id='$eId'"; 
	if($db->query($getDetails) && $db->get_num_rows() > 0)	{	$data = $db->fetch_one_assoc();  	}  }
$db->close();
$pgTitle = "Admin Panel -- [Edit]";	
$smarty->assign("title",$title);
$smarty->assign("pgname",$pgname);		
$smarty->assign("msgs",$msgs);
$smarty->assign("errors",$error);
$smarty->assign("data",$data);
$smarty->assign("eId",$eId);
$smarty->display('faqs/edit.tpl');
?>