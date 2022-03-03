<?php 
include_once('DatabaseUS.inc.php');
	$db = new Database;	
	$db->connect();

	if(isset($_POST['add_driver']) && $_POST['add_driver']!='')
    {
	  	$uuid = sql_replace($_POST['id']);	
	  	$transportationProviderId = sql_replace($_POST['transportationProviderId']);	
	  	$fname = sql_replace($_POST['firstName']);	
	  	$lname = sql_replace($_POST['lastName']);	
	  	$cell_num = sql_replace($_POST['phone']);	
	  	$email = sql_replace($_POST['email']);	
	  	$licenseId = sql_replace($_POST['licenseId']);
	  	$licenseState = sql_replace($_POST['licenseState']);
	  	$licenseExpiration = sql_replace($_POST['licenseExpiration']);
	  	$credentialingStatus = sql_replace($_POST['credentialingStatus']);
	  	$dob = sql_replace($_POST['dob']);

	    $chkvtype = "SELECT * FROM  " . TBL_DRIVERS . "  WHERE uuid='$uuid'";
		if($db->query($chkvtype) && $db->get_num_rows() > 0)
		{
		 	$response = array('message' =>'ID already exist','error' =>true,'success' =>false);
	        echo json_encode($response);
		 	exit();
		}
   	  	$Query = "INSERT INTO " . TBL_DRIVERS . " SET
		uuid='$uuid',
        transportationProviderId = '$transportationProviderId',
		fname 		=  '$fname',
		lname 		=  '$lname',
		cell_num 	=  '$cell_num',
		email 		=  '$email',
		licenseId 	=  '$licenseId',
		licenseState 	=  '$licenseState',
		licenseExpiration 	=  '$licenseExpiration',
		credentialingStatus = '$credentialingStatus',
		modiv_falge = '1',
		dob = '$dob'";

	  	if($db->execute($Query))
	    {
	    	echo 1;
	    	exit();
		} else {
	    	$response = array('message' =>'Error in adding driver','error' =>true,'success' =>false);
	        echo json_encode($response);
		 	exit();		  
		}
	} else if(isset($_POST['update_driver']) && $_POST['update_driver']!='')
    {
	  	$uuid = sql_replace($_POST['id']);	
	  	$transportationProviderId = sql_replace($_POST['transportationProviderId']);	
	  	$fname = sql_replace($_POST['firstName']);	
	  	$lname = sql_replace($_POST['lastName']);	
	  	$cell_num = sql_replace($_POST['phone']);	
	  	$email = sql_replace($_POST['email']);	
	  	$licenseId = sql_replace($_POST['licenseId']);
	  	$licenseState = sql_replace($_POST['licenseState']);
	  	$licenseExpiration = sql_replace($_POST['licenseExpiration']);
	  	$credentialingStatus = sql_replace($_POST['credentialingStatus']);
	  	$dob = sql_replace($_POST['dob']);
 
	    $chkvtype = "SELECT * FROM  " . TBL_DRIVERS . "  WHERE uuid='$uuid'"; 
		if($db->query($chkvtype) !=1)
		{
			$response = array('message' =>'ID not exist','error' =>true,'success' =>false);
	        echo json_encode($response);
		 	exit();
		}
   	   	$Query = "UPDATE " . TBL_DRIVERS . " SET
        transportationProviderId = '$transportationProviderId',
		fname 		=  '$fname',
		lname 		=  '$lname',
		cell_num 	=  '$cell_num',
		email 		=  '$email',
		licenseId 	=  '$licenseId',
		licenseState 	=  '$licenseState',
		licenseExpiration 	=  '$licenseExpiration',
		credentialingStatus = '$credentialingStatus',
		modiv_updated = '1',
		dob = '$dob' WHERE uuid='".$uuid."'";

	  	if($db->execute($Query))
	    {
	    	echo 1;
	    	exit();
		} else {
	    	$response = array('message' =>'Error in adding driver','error' =>true,'success' =>false);
	        echo json_encode($response);
		 	exit();		  
		}

    }  else if(isset($_POST['get_driver']) && $_POST['get_driver']!='')
    {
    	$uuid=$_POST['uuid'];
  		$query = "SELECT uuid, transportationProviderId, fname, lname, cell_num, email, licenseId, licenseState, licenseExpiration, credentialingStatus, dob FROM ".TBL_DRIVERS." WHERE uuid='".$uuid."'";
  		
      	if($db->query($query) && $db->get_num_rows())
		{

		  	$udata = $db->fetch_one_assoc();
		  	$data['id']=$udata['uuid'];
		  	$data['transportationProviderId']=$udata['transportationProviderId'];
		  	$data['firstName']=$udata['fname'];
		  	$data['lastName']=$udata['lname'];
		  	$data['phone']=$udata['cell_num'];
		  	$data['email']=$udata['email'];
		  	$data['licenseId']=$udata['licenseId'];
		  	$data['licenseState']=$udata['licenseState'];
		  	$data['licenseExpiration']=$udata['licenseExpiration'];
		  	$data['credentialingStatus']=$udata['credentialingStatus'];
		  	$data['dob']=$udata['dob'];
		  	$response = array('data' =>$data,'error' =>false,'success' =>true);
	        echo json_encode($response);
		 	exit();

		} else {
			$response = array('message' =>'Driver not found','error' =>true,'success' =>false);
	        echo json_encode($response);
		 	exit();
		}
  	}
?>