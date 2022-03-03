<?php 
include_once('DatabaseUS.inc.php');
	$db = new Database;	
	$db->connect(); 

    if(isset($_POST['add_vehicle']) && $_POST['add_vehicle']!='')
  	{

	  	$uuid = sql_replace($_POST['id']);	
	  	$transportationProviderId = sql_replace($_POST['transportationProviderId']);	
	  	$vname = sql_replace($_POST['name']);	
	  	$vehmake = sql_replace($_POST['make']);	
	  	$vehmodel = sql_replace($_POST['model']);	
	  	$vehcolor = sql_replace($_POST['color']);	
	  	$year = sql_replace($_POST['year']);
	  	$vin = sql_replace($_POST['vin']);
	  	$licensePlate = sql_replace($_POST['licensePlate']);
	  	$licensePlateState = sql_replace($_POST['licensePlateState']);
	  	$credentialingStatus = sql_replace($_POST['credentialingStatus']);
	  	$webhookURL = sql_replace($_POST['webhookURL']);

	    $chkvtype = "SELECT * FROM  " . TBL_VEHICLES . "  WHERE uuid='$uuid'"; 

		if($db->query($chkvtype) && $db->get_num_rows() > 0)
		{
		 	$response = array('message' =>'ID already exist','error' =>true,'success' =>false);
	        echo json_encode($response);
		 	exit();  
		}
	   	   $Query = "INSERT INTO " . TBL_VEHICLES . " SET
			uuid='$uuid',
	        transportationProviderId = '$transportationProviderId',
			vname 		=  '$vname',
			vehmake 		=  '$vehmake',
			vehmodel 	=  '$vehmodel',
			vehcolor 		=  '$vehcolor',
			year 	=  '$year',
			vin 	=  '$vin',
			licensePlate 	=  '$licensePlate',
			licensePlateState 	=  '$licensePlateState',
			webhookURL = '$webhookURL',
			modiv_flage = '1',
			credentialingStatus = '$credentialingStatus'";

	  	if($db->execute($Query))
	    {
	    	echo 1;
	    	exit();
		} else {
	    	$response = array('message' =>'Error in adding vehicle','error' =>true,'success' =>false);
	        echo json_encode($response);
		 	exit();		  
		}
	} else if(isset($_POST['update_vehicle']) && $_POST['update_vehicle']!='')
	{
		$uuid = sql_replace($_POST['id']);	
	  	$transportationProviderId = sql_replace($_POST['transportationProviderId']);	
	  	$vname = sql_replace($_POST['name']);	
	  	$vehmake = sql_replace($_POST['make']);	
	  	$vehmodel = sql_replace($_POST['model']);	
	  	$vehcolor = sql_replace($_POST['color']);	
	  	$year = sql_replace($_POST['year']);
	  	$vin = sql_replace($_POST['vin']);
	  	$licensePlate = sql_replace($_POST['licensePlate']);
	  	$licensePlateState = sql_replace($_POST['licensePlateState']);
	  	$credentialingStatus = sql_replace($_POST['credentialingStatus']);

	   	$chkvehicle = "SELECT * FROM  " . TBL_VEHICLES . "  WHERE uuid='$uuid'"; 

		if($db->query($chkvehicle) !=1)
		{
			$response = array('message' =>'ID not exist','error' =>true,'success' =>false);
	        echo json_encode($response);
		 	exit();
		}
   	   	$Query = "UPDATE " . TBL_VEHICLES . " SET
        transportationProviderId = '$transportationProviderId',
		vname 		=  '$vname',
		vehmake 		=  '$vehmake',
		vehmodel 	=  '$vehmodel',
		vehcolor 		=  '$vehcolor',
		year 	=  '$year',
		vin 	=  '$vin',
		licensePlate 	=  '$licensePlate',
		licensePlateState 	=  '$licensePlateState',
		modiv_updated = '1',
		credentialingStatus = '$credentialingStatus' WHERE uuid='".$uuid."'";

	  	if($db->execute($Query))
	    {
	    	echo 1;
	    	exit();	  
		} else {
	    	$response = array('message' =>'Error in adding vehicle','error' =>true,'success' =>false);
	        echo json_encode($response);
		 	exit();		  
		}
	} else if(isset($_POST['get_vehicle']) && $_POST['get_vehicle']!='')
	{
		$uuid=$_POST['uuid']; 
  		$query = "SELECT uuid, vname, vehmake, vehmodel, vehcolor, year, vin, licensePlate, licensePlateState, credentialingStatus, transportationProviderId FROM ".TBL_VEHICLES." WHERE uuid='".$uuid."'";
  		
      	if($db->query($query) && $db->get_num_rows())
		{
		  	$udata = $db->fetch_one_assoc();
		  	
		  	$data['uuid']=$udata['uuid'];
		  	$data['name']=$udata['vname'];
		  	$data['make']=$udata['vehmake'];
		  	$data['model']=$udata['vehmodel'];
		  	$data['color']=$udata['vehcolor'];
		  	$data['year']=$udata['year'];
		  	$data['vin']=$udata['vin'];
		  	$data['licensePlate']=$udata['licensePlate'];
		  	$data['licensePlateState']=$udata['licensePlateState'];
		  	$data['credentialingStatus']=$udata['credentialingStatus'];
		  	$data['transportationProviderId']=$udata['transportationProviderId'];

		  	$response = array('data' =>$data,'error' =>false,'success' =>true);
	        echo json_encode($response);
		 	exit();

		} else {
			$response = array('message' =>'Vehicle not found','error' =>true,'success' =>false);
	        echo json_encode($response);
		 	exit();
		}
	}
?>