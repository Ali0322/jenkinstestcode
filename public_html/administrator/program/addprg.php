<?php

   	/* *************************** *

	   * Date: 26-Jan-2010 

	   * Admin User/adduser.php

	   * Muhammad Sajid

	   *************************** */



   	include_once('../DBAccess/Database.inc.php');

   include_once('../Classes/MyMailer.php');	

		

	$db = new Database;	

	$db2 = new Database;	

	$mail = new MyMailer;

	

	$msgs   = '';

	$errors = '';

		

	$db->connect();

	$db2->connect();





// Add User



  if(isset($_POST['admusersub']))

	   {

	   $prgtitle	    = sql_replace($_POST['prgtitle']);	
	   $prgassoctitle   = sql_replace($_POST['prgassoctitle']);	

	   if(!$prgtitle)

	    { $error .= "<img src='../images/arrow.jpg'>&nbsp;&nbsp;Program Title Missing !<br>"; }



	   if(!$prgassoctitle)

	    { $error .= "<img src='../images/arrow.jpg'>&nbsp;&nbsp;Program Associated Label Missing !<br>"; }		
	

 if(!$error){



     $chkEmail = "SELECT * FROM ".TBL_PROGRAM." WHERE prgtitle='$prgtitle'"; 

         

		if($db->query($chkEmail) && $db->get_num_rows() > 0)

		 {

		    $error .= "<img src='../images/arrow.jpg'>&nbsp;&nbsp;Program Title already exists, Try another one.<br>";    

		 }		 

    if($error == '')

         {

		  $Query3  = "INSERT INTO ".TBL_PROGRAM." SET 

					prgtitle='$prgtitle',

					prgassoctitle='$prgassoctitle'";

					 	 

		  if($db->execute($Query3))

		    {			  		   


			  echo '<script>alert("Program Type added Successfully");</script>';

			  echo '<script>window.open("index.php","_parent");</script>';			  

			  exit;
			 

			}else{

			  echo '<script>alert("Unable to add Program Type");</script>';

			  echo '<script>window.open("index.php","_parent");</script>';			  

			  exit;

			}

		}

	}

}		

	$db->close();

    $pgTitle = "Admin Panel -- Program Type [Add]";	

	$smarty->assign("title",$title);

	$smarty->assign("pgname",$pgname);		

	$smarty->assign("msgs",$msgs);

	$smarty->assign("errors",$error);

	$smarty->assign("prgtitle",$prgtitle);

	$smarty->assign("prgassoctitle",$prgassoctitle);

	$smarty->display('prgtpl/addprg.tpl');	

?>