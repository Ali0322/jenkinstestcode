<?php
/* *************************** *
	   * Created On : 21th August,2008 
	   * File : cms/addpage.php
	   * Created By : Danish Ejaz Qureshi
	   * Modified On : 20th August,2008 
	   * Modified By : Danish Ejaz Qureshi
	   *************************** */
   	

   	include_once('../DBAccess/Database.inc.php');
	
	$db = new Database;	
		
	$msgs   = '';
	$errors = '';
		
	$db->connect();

 //if page is submitted
    if(isset($_POST['Addvehtype']))
     {
	  $vehtype = sql_replace($_POST['vehtype']);	
		 	
	   if(!$vehtype)
	    { $error .= "Type title Missing !<br>"; }

        $chkvtype = "SELECT * FROM  " . TBL_ACCNTTYPES . "  WHERE accnttype='$vehtype'"; 
         
		if($db->query($chkvtype) && $db->get_num_rows() > 0)
		 {
		    $error .= 'Type already exist, Try another one.<br>';
			echo "<script>alert('Type already exist, Try another one');</script>";
            echo "<script>window.open('accnttypes.php','_parent');</script>";
			exit; 
		 }

      if(!$error){	 
	 
       $Query = "INSERT INTO  " . TBL_ACCNTTYPES . " SET 
	             accnttype = '$vehtype'";
				 
		  if($db->execute($Query))
		    { echo "<script>alert('Account Type added Successfully');</script>";			  
			  }else{ echo "<script>alert('Unable to add account type');</script>";
			 }
             echo "<script>window.open('accnttypes.php','_parent');</script>";
			 exit;
		    }
          }
		
	$db->close();

    $pgTitle = "Admin Panel -- ACCOUNT MANAGMENT [Add Vehicle Type]";
	$smarty->assign("pgTitle",$pgTitle);
	$smarty->assign("msgs",$msgs);
	$smarty->assign("errors",$error);
	$smarty->assign("vehtype",$vehtype);		

	$smarty->display('hosptpls/addaccnttypes.tpl');

		
?>