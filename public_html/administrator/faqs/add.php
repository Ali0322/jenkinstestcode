<?php
   	include_once('../DBAccess/Database.inc.php');
	include_once('../Classes/imgUploader.php');
	$image = new imgUploader; 
	$db = new Database;	
	$msgs   = '';
	$errors = '';
	$db->connect();
  if(isset($_POST['admusersub']))
	   {
	   	$question	 	= sql_replace($_POST['question']);
	   	$answer			= sql_replace($_POST['answer']);	    
if($error == '')
         {
		  $Query3  = "INSERT INTO ".faqs." SET 
		  					question		='$question',
							answer			='$answer'	";
		  if($db->execute($Query3))
		    {			  		   
		  echo '<script>alert("Record added Successfully");</script>';
		  echo '<script>window.open("index.php","_parent");</script>';			  
			  exit;
			}else{
			  echo '<script>alert("Unable to add Record");</script>';
			  echo '<script>window.open("index.php","_parent");</script>';			  
			  exit;
			}
		}
	}
	
	$db->close();
    $pgTitle = "Admin Panel --[Add]";	
	$smarty->assign("title",$title);
	$smarty->assign("pgname",$pgname);		
	$smarty->assign("msgs",$msgs);
	$smarty->assign("errors",$error);
	$smarty->assign("post",$_POST);
	$smarty->display('faqs/add.tpl');	
?>