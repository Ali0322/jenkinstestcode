<?php 
include_once('DatabaseUS.inc.php');
	$db = new Database;	
	$db->connect(); 
    if(isset($_POST['add_ride']) && $_POST['add_ride']!='')
  	{
 $ride='{
  "id": "SZvoYdEuwtcMqNOrPykX",
  "referenceId": "1-20200701-142513-A",
  "linkedRideIds": [
    "1-20200701-142513-B",
    "1-20200701-142513-C"
  ],
  "transportationProviderId": "provid123",
  "scheduledDate": "2020-06-22",
  "appointmentTime": "16:11:00",
  "additionalPassengers": {
    "attendants": 3,
    "condition": 3,
    "carseats": 3,
    "attendants": 3,
    "copay": 3,
    "member_number": 3,
    "escorts": 1
  },
  "willCall": true,
  "billableAmount": null,
  "billableMiles": null,
  "assistanceNeeds": [
  ],
  "billingRequired": true,
  "levelOfService": "BSTR",
  "levelOfServiceDescription": "Bariatric Stretcher",
  "levelOfServiceGroup": "Stretcher",
  "unableToSign": false,
  "signatureRequired": true,
  "additionalProperties": {
    "carseats": null,
    "member_number": "182-12-1234",
    "prior_auth_num": null
  },
  "rider": {
    "id": "2fbe1c703f6893c2bc5066fcbcaa2048",
    "firstName": "Artem",
    "middleName": "",
    "lastName": "Nykoriak",
    "dateOfBirth": "1990-01-01",
    "gender": "M",
    "weight": 200,
    "phone": 8881234567
  },
  "pickup": {
    "address": {
      "addressLine1": "330 SW 80th St",
      "addressLine2": "",
      "city": "Oklahoma City",
      "county": "Oklahoma",
      "state": "OK",
      "zipCode": "73139",
      "latitude": 35.38615,
      "longitude": -97.518722
    },
    "scheduledTime": "test",
    "name": "OK CTR FOR ORTH & MULTI-SP",
    "comments": "this is what you need to know for pickup",
    "phone": {
      "number": 5555555553,
      "ext": 1
    }
  },
  "dropoff": {
    "address": {
      "addressLine1": "331 SW 80th St",
      "addressLine2": "",
      "city": "Oklahoma City",
      "county": "Oklahoma",
      "state": "OK",
      "zipCode": "73139",
      "latitude": 35.38615,
      "longitude": -97.518722
    },
    "scheduledTime": "2020-09-03T18:19:27.160393+00:00",
    "name": "residence",
    "comments": "this is what you need to know for dropoff",
    "phone": {
      "number": 5555555553,
      "ext": 1
    }
  },
  "webhookURL": "https://uat-api.circulation.care/transit/webhook/vendorname/"
}';
	

 		$ride=json_decode($ride);
	  	$uuid = sql_replace($ride->id);	
	  	$referenceId = sql_replace($ride->referenceId);	
	  	$linkedRideIds = sql_replace($ride->linkedRideIds[0].','.$ride->linkedRideIds[1]);	
	  	$transportationProviderId = sql_replace($ride->transportationProviderId);	
	  	$scheduledDate = sql_replace($ride->scheduledDate);	
	  	$appointmentTime = sql_replace($ride->appointmentTime);	
	  	$attendants = sql_replace($ride->additionalPassengers->attendants);
	  	$escorts = sql_replace($ride->additionalPassengers->escorts);
	  	$willCall = sql_replace($ride->willCall);
	  	$billableAmount = sql_replace($ride->billableAmount);
	  	$billableMiles = sql_replace($ride->billableMiles);
	  	$assistanceNeeds = sql_replace($ride->assistanceNeeds);
	  	$billingRequired = sql_replace($ride->billingRequired);
	  	$levelOfService = sql_replace($ride->levelOfService);
	  	$levelOfServiceDescription = sql_replace($ride->levelOfServiceDescription);
	  	$levelOfServiceGroup = sql_replace($ride->levelOfServiceGroup);
	  	$unableToSign = sql_replace($ride->unableToSign);
	  	$signatureRequired = sql_replace($ride->signatureRequired);
	  	$tripComments = sql_replace($ride->tripComments);
	  	$condition = sql_replace($ride->additionalPassengers->condition);
	  	$carseats = sql_replace($ride->additionalPassengers->carseats);
	  	$copay = sql_replace($ride->additionalPassengers->copay);
	  	$member_number = sql_replace($ride->additionalPassengers->member_number);
	  	$ordering_medical_provider_name = sql_replace($ride->additionalPassengers->ordering_medical_provider_name);
	  	$ordering_medical_provider_npi = sql_replace($ride->additionalPassengers->ordering_medical_provider_npi);
	  	$prior_auth_num = sql_replace($ride->additionalPassengers->prior_auth_num);
	  	$rider_id = sql_replace($ride->rider->id);
	  	$firstName = sql_replace($ride->rider->firstName);
	  	$middleName = sql_replace($ride->rider->middleName);
	  	$lastName = sql_replace($ride->rider->lastName);
	  	$dateOfBirth = sql_replace($ride->rider->dateOfBirth);
	  	$gender = sql_replace($ride->rider->gender);
	  	$weight = sql_replace($ride->rider->weight);
	  	$phone = sql_replace($ride->rider->phone);
	  	$pk_addressLine1 = sql_replace($ride->pickup->address->addressLine1);
	  	$pk_addressLine2 = sql_replace($ride->pickup->address->addressLine2);
	  	$pk_city = sql_replace($ride->pickup->address->city);
	  	$pk_county = sql_replace($ride->pickup->address->county);
	  	$pk_state = sql_replace($ride->pickup->address->state);
	  	$pk_zipCode = sql_replace($ride->pickup->address->zipCode);
	  	$pk_c1 = sql_replace($ride->pickup->address->latitude).','.sql_replace($ride->pickup->address->longitude);
	  	$pk_scheduledTime = sql_replace($ride->pickup->scheduledTime);
	  	$pk_name = sql_replace($ride->pickup->name);
	  	$pk_comments = sql_replace($ride->pickup->comments);
	  	$pk_phone = sql_replace($ride->pickup->phone->number);
	  	$pk_ext = sql_replace($ride->pickup->phone->ext);
	  	$dp_addressLine1 = sql_replace($ride->dropoff->address->addressLine1);
	  	$dp_addressLine2 = sql_replace($ride->dropoff->address->addressLine2);
	  	$dp_city = sql_replace($ride->dropoff->address->city);
	  	$dp_county = sql_replace($ride->dropoff->address->county);
	  	$dp_state = sql_replace($ride->dropoff->address->state);
	  	$dp_zipCode = sql_replace($ride->dropoff->address->zipCode);
	  	$dp_c1 = sql_replace($ride->dropoff->address->latitude).','.sql_replace($ride->dropoff->address->longitude);
	  	$dp_scheduledTime = sql_replace($ride->dropoff->scheduledTime);
	  	$dp_name = sql_replace($ride->dropoff->name);
	  	$dp_comments = sql_replace($ride->dropoff->comments);
	  	$dp_phone = sql_replace($ride->dropoff->phone->number);
	  	$dp_ext = sql_replace($ride->dropoff->phone->ext);
	  	$webhookURL = sql_replace($ride->webhookURL);

	  	$pk_data=$pk_addressLine1.','.$pk_addressLine2.','.$pk_city.','.$pk_county.','.$pk_state.','.$pk_zipCode;
	  	$dp_data=$dp_addressLine1.','.$dp_addressLine2.','.$dp_city.','.$dp_county.','.$dp_state.','.$dp_zipCode;

		$ride_account='';
		$ride_vehicle='';

		 $Query = "SELECT id FROM  vehtype WHERE TRIM(LOWER(REPLACE(vehtype,' ','')))='".strtolower(trim(str_replace(' ','',$levelOfService)))."' ";
		if($db->query($Query) && $db->get_num_rows() > 0)
		{
			$data = $db->fetch_one_assoc(); 
			$ride_vehicle=$data['id'];
		} 

		$Qaccounts  = "SELECT id FROM " .  accounts ." WHERE TRIM(LOWER(account_name))='".strtolower(trim('Logistic Care'))."' " ;
		if($db->query($Qaccounts) && $db->get_num_rows() > 0) 
		{
			$accounts = $db->fetch_one_assoc();
			$ride_account=$accounts['id'];
		}

		$Query  = "INSERT INTO ".TBL_FORMS." SET 
		account		='".$ride_account."',
		vehtype		='".$ride_vehicle."',
		miles_string		='".$billableMiles."',
		milage		='".$billableMiles."',
		triptype		='One Way',
		vehtype		='".$vehtype."',
		patient_weight		='".$weight."',
		picklocation		='".$pk_addressLine1."',
		pickaddr		='".$pk_data."',
		pickup_instruction		='".$pk_comments."',
		droplocation		='".$dp_addressLine1."',
		destination_instruction		='".$dp_comments."',
		destination		='".$dp_data."',
		d_phnum		='".$dp_phone."',
		appdate		='".$scheduledDate."',
		apptime		='".$appointmentTime."',
		org_apptime		='".$scheduledTime."',
		clientname		='".$firstName.' '.$middleName.' '.$lastName."',
		phnum		='".$phone."',
		dob		='".$dateOfBirth."',
		sex		='".$gender."',
		comments		='".$pk_comments."',
		c1		='".$pk_c1."',
		c2		='".$dp_c1."',
		today_date		='".date('Y-m-d')."',
		uuid		='".$uuid."',
		referenceId		='".$referenceId."', 
		linkedRideIds		='".$linkedRideIds."',
		transportationProviderId ='".$transportationProviderId."',
		scheduledDate		='".$scheduledDate."',
		appointmentTime		='".$appointmentTime."',
		additionalPassengers		='".$additionalPassengers."',
		willCall		='".$willCall."',
		billableAmount		='".$billableAmount."',
		billableMiles		='".$billableMiles."',
		assistanceNeeds		='".$assistanceNeeds."',
		billingRequired		='".$billingRequired."',
		levelOfService		='".$levelOfService."',
		levelOfServiceDescription		='".$levelOfServiceDescription."',
		levelOfServiceGroup		='".$levelOfServiceGroup."',
		unableToSign		='".$unableToSign."',
		signatureRequired		='".$signatureRequired."',
		tripComments		='".$tripComments."',
		ride_condition		='".$condition."',
		carseats		='".$carseats."',
		copay		='".$copay."',
		member_number		='".$member_number."',
		ordering_medical_provider_name		='".$ordering_medical_provider_name."',
		ordering_medical_provider_npi		='".$ordering_medical_provider_npi."',
		prior_auth_num		='".$prior_auth_num."',
		rider_id		='".$rider_id."',
		firstName		='".$firstName."',
		middleName		='".$middleName."',
		lastName		='".$lastName."',
		dateOfBirth		='".$dateOfBirth."',
		gender		='".$gender."',
		weight		='".$weight."',
		phone		='".$phone."',
		pk_addressLine1		='".$pk_addressLine1."',
		pk_addressLine2		='".$pk_addressLine2."',
		pk_city		='".$pk_city."',
		pk_county		='".$pk_county."',
		pk_state		='".$pk_state."',
		pk_zipCode		='".$pk_zipCode."',
		pk_c1		='".$pk_c1."',
		pk_scheduledTime		='".$pk_scheduledTime."',
		pk_location		='".$pk_picklocation."',
		pk_instruction		='".$pk_pickup_instruction."',
		pk_phone		='".$pk_phone."',
		pk_ext		='".$dp_ext."',
		dp_addressLine1		='".$dp_addressLine1."',
		dp_addressLine2		='".$dp_addressLine2."',
		dp_city		='".$dp_city."',
		dp_county		='".$dp_county."',
		dp_state		='".$dp_state."',
		dp_zipCode		='".$dp_zipCode."',
		dp_c1		='".$dp_c1."',
		dp_scheduledTime		='".$dp_scheduledTime."',
		dp_location		='".$dp_picklocation."',
		dp_instruction		='".$pk_pickup_instruction."',
		dp_phone		='".$dp_phone."',
		dp_ext		='".$dp_ext."',
		webhookURL		='".$webhookURL."'";
		if($db->execute($Query))
	    {
	    	echo 1;
	    	exit();  
		} else {
	    	$response = array('message' =>'Error in adding ride','error' =>true,'success' =>false);
	        echo json_encode($response);
		 	exit();		  
		}
	} else if(isset($_POST['update_ride']) && $_POST['update_ride']!='')
	{
	} else if(isset($_POST['event_ride']) && $_POST['event_ride']!='')
	{
		$uuid= $_POST['uuid'];
  		$query = "SELECT * FROM  " . TBL_FORMS . "  WHERE uuid='$uuid'"; 
  		if($db->query($query) !=1)
		{
			$response = array('message' =>'ID not exist','error' =>true,'success' =>false);
	        echo json_encode($response);
		 	exit();
		}
    	if($db->query($query) && $db->get_num_rows())
		{
			$data->onTheWay->eventTime='2020-06-24T11:24:00-04:00';
			$data->onTheWay->latitude='33.472512';
			$data->onTheWay->longitude='-84.4955648';
			$data->pickupArrive->eventTime='2020-06-24T11:24:00-04:00';
			$data->pickupArrive->latitude='33.472512';
			$data->pickupArrive->longitude='-84.4955648';
			$data->rideCanceled->eventTime='2020-06-24T11:24:00-04:00';
			$data->rideCanceled->latitude='33.472512';
			$data->rideCanceled->longitude='-84.4955648';
			$data->pickupComplete->eventTime='2020-06-24T11:24:00-04:00';
			$data->pickupComplete->latitude='33.472512';
			$data->pickupComplete->longitude='-84.4955648';
			$data->dropoffArrive->eventTime='2020-06-24T11:24:00-04:00';
			$data->dropoffArrive->latitude='33.472512';
			$data->dropoffArrive->longitude='-84.4955648';
			$data->dropoffComplete->eventTime='2020-06-24T11:24:00-04:00';
			$data->dropoffComplete->latitude='33.472512';
			$data->dropoffComplete->longitude='-84.4955648';
			$data=json_encode($data);
			echo "<pre>";
			print_r($data);
			exit();
		} else {
	    	$response = array('message' =>'Error in getting event','error' =>true,'success' =>false);
	        echo json_encode($response);
		 	exit();		  
		}
	} else if(isset($_POST['cancel_ride']) && $_POST['cancel_ride']!='')
	{
	    $uuid= $_POST['uuid'];
  		$query = "SELECT * FROM  " . TBL_FORMS . "  WHERE uuid='$uuid'"; 
  		if($db->query($query) !=1)
		{
			$response = array('message' =>'ID not exist','error' =>true,'success' =>false);
	        echo json_encode($response);
		 	exit(); 
		}
		$Query  = "UPDATE ".TBL_FORMS." SET 
		referenceId		='".$referenceId."', 
		linkedRideIds		='".$linkedRideIds."',
		webhookURL		='".$webhookURL."' WHERE uuid='".$uuid."'";
    	if($db->query($query) && $db->get_num_rows())
		{
			$data=json_encode($data);
			echo $data;
			exit();
		} else { 
	    	$response = array('message' =>'Error in cancel event','error' =>true,'success' =>false);
	        echo json_encode($response);
		 	exit();		  
		}
	}	
	 	// $chkvtype = "SELECT * FROM  " . TBL_DRIVERS . "  WHERE uuid='$uuid'";
		// if($db->query($chkvtype) && $db->get_num_rows() > 0)
		// {
		//  	$response = array('message' =>'ID already exist','error' =>true,'success' =>false);
	 	//       echo json_encode($response);
		//  	exit();
		// }
			// account='".$account."',
			// unloadedmilage='".$unloadedmiles."',
			// miles_string = '".$miles_string."',
			// milage='".$miles."',
			// charges	= '".$totcharges."',	
			// triptype='".$triptype."',	
			// vehtype='".$vehtype."',	
			// appt_type='".$apptype."',					
			// po='".$po."',
			// patient_weight='".$patient_weight."',
			// bar_stretcher='".$bar_stretcher."',
			// req_id='".$req_id."',
			// pickaddr='".$pickadd."',
			// destination='".$destination_one."',
			// three_address='".$destination2."',
			// four_address='".$destination3."',
			// five_address='".$destination4."',
			// three_pickup 	= '".$three_pickup."',
			// four_pickup 	= '".$four_pickup."',
			// five_pickup 	= '".$five_pickup."',
			// backto='".$destination_last."',
			// appdate='".$appdate."',
//                org_apptime='".$org_apptime."',
			// apptime='".$apptime."',
			// returnpickup='".$returnpickup."',
			// casemanager='".$casemanager1."',
			// today_date=NOW(),
			// clientname='".$pname."',
//                phnum='".$phnum."',
			// dob='".$dob."',
			// email='',
			// clientcasemanager='".$casemanager2."',
			// cisid='".$cisid."',
			// insurance_name='".$insurance_name."',
			// driver='".$driver."',
			// sex='".$sex."',
			// childseat='".$childseat."',
			// escort='".$escort."',
			// wchair='".$wchair."',
			// dwchair='".$dwchair."',
			// stretcher='".$stretcher."',
			// dstretcher='".$dstretcher."',
			// oxygen='".$oxygen."',
			// ftof='".$ftof."',
			// status='".$status."',
			// b_accountname='".$b_accountname."',
			// pickup_instruction='".$pickup_instruction."',
			// destination_instruction='".$destination_instruction."',
			// destination_instruction2='".$destination_instruction2."',
			// destination_instruction3='".$destination_instruction3."',
			// backto_instruction='".$backto_instruction."',
			// d_phnum='".$d_phnum."',
			// d_phnum2='".$d_phnum2."',
			// d_phnum3='".$d_phnum3."',
			// p_phnum='".$p_phnum."',
			// billing_address='".$billing_address."',
			// c1='".$c1."',
			// c2='".$c2."',
			// c3='".$c3."',
			// c4='".$c4."',
			// c5='".$c5."',
			// c6='".$c6."',
			// picklocation	='".$picklocation."',
			// droplocation	='".$droplocation."',
			// droplocation2	='".$droplocation2."',
			// droplocation3	='".$droplocation3."',
			// backtolocation	='".$backtolocation."',
			// capped_miles	='".$capped_miles."',
			// after_hours 	='".$after_hours."',
			// p_after_hours 	='".$p_after_hours."',
			// r_after_hours 	='".$r_after_hours."',
			// passenger		='".$_POST['passenger']."',
			// cellalert 		='".$cellalert."',
			// cellalertoption ='".$cellalertoption."',
			// trigerfor 		='".$trigerfor."',
			// comments		='".$comments."'
?>