<?php
/* *************************** *
	   * Created On : 21th August,2008 
	   * File : CMS/editpage.php
	   * Created By : Danish Ejaz Qureshi
	   * Modified On : 20th August,2008 
	   * Modified By : Danish Ejaz Qureshi
	   *************************** */

   	include_once('../DBAccess/Database.inc.php');
	include_once('../fckeditor/fckeditor.php');
	
	$db = new Database;	
		
	$msgs   = '';
	$errors = '';
		
	$db->connect();
    $vid = intval($_GET['id']);
	
 //if page is submitted
    if(isset($_POST['editvehtype']))
     {
	  $hidvehtype = sql_replace($_POST['vehtype']);	
	  $vehtype = sql_replace($_POST['vehtype']);
	  		 	
	   if(!$vehtype)
	    { $error .= "Type title Missing !<br>"; }

      if($vehtype != $hidvehtype){
        $chkvtype = "SELECT * FROM  " . TBL_VEHTYPES . "  WHERE vehtype='$vehtype'"; 
         if($db->query($chkvtype) && $db->get_num_rows() > 0)
		 {
		    $error .= 'Type already exist, Try another one.<br>';
			echo "<script>alert('Type already exist, Try another one');</script>";
            echo "<script>window.open('vehtypes.php','_parent');</script>";
			exit; 
		 }}

      if(!$error){	 
	 
       $Query = "UPDATE " . TBL_VEHTYPES . " SET 
	             vehtype = '$vehtype' WHERE id='".$vid."'";
				 
		  if($db->execute($Query))
		    { echo "<script>alert('Vehicle Type updated Successfully');</script>";			  
			  }else{ echo "<script>alert('Unable to update vehicle type');</script>";
			 }
             echo "<script>window.open('vehtypes.php','_parent');</script>";
			 exit;
	    }
    }

       else{
    $query = "SELECT * FROM ".TBL_VEHTYPES." WHERE id='".$vid."'";
       
	      if($db->query($query) && $db->get_num_rows())
			  {
			  $udata = $db->fetch_all_assoc();
			  }
  
	  $vehtype      = $udata[0]['vehtype'];	
	  $hidvehtype   = $udata[0]['vehtype'];		  
  	}
  
  


		
	$db->close();

    $pgTitle = "Admin Panel -- Vehicle Types [Edit]";
	$smarty->assign("pgTitle",$pgTitle);
	$smarty->assign("msgs",$msgs);
	$smarty->assign("errors",$error);
	$smarty->assign("id",$vid);
	$smarty->assign("vehtype",$vehtype);
	$smarty->assign("hidvehtype",$hidvehtype);				
	$smarty->display('vehtpl/editvehtype.tpl');
		
?>