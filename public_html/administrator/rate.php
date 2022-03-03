<?php

   	/* *************************** *
	   * Date: 14-Jan-2011 
	   * changepass.php
	   * Saqib Shafiq
	   *************************** */

	include_once('DBAccess/Database.inc.php');

	$db = new Database;	
	$db->connect();

	$error = '';
	$msg   = '';

	$id = $_REQUEST['id'];

	if(count($_POST))
	{
		$rid = $id;
		$pickupcharges = sql_replace($_POST['pickupcharges']);
		$traffic_delay = sql_replace($_POST['traffic_delay']);
		$price_per_mile = sql_replace($_POST['price_per_mile']);

		if(!$pickupcharges){
		  $error .= "Pickup Charges Missing!<br>";		
		}
		if(!$traffic_delay){
		  $error .= "Traffic Delay Missing!<br>";		
		}
		if(!$price_per_mile){
		  $error .= "Price Per Mile Missing!<br>";		
		}

		if(!$error)
		{
		 	$Query  = "UPDATE " . TBL_RATES . " SET pickup_charges='$pickupcharges',
			traffic_delay = '$traffic_delay',price_per_mile='$price_per_mile' WHERE rate_id ='" . $id. "'";

			if($db->query($Query))
		    {
				$msg .= "Rates Changed Successfully<br>";
			}
		  	else
			{
		      $msg .= "Unable to update rates<br>";
			}
    	}
	}
	else
	{
		$query = "SELECT * FROM ".TBL_RATES;
		if($db->query($query) && $db->get_num_rows() > 0)
		{
			$r = $db->fetch_all_assoc();
			$rid = $r[0]['rate_id'];
		}
		$pickupcharges = $r[0]['pickup_charges'];
		$traffic_delay = $r[0]['traffic_delay'];
		$price_per_mile = $r[0]['price_per_mile'];
	}

	$db->close();
    $pgTitle = "Admin Panel -- Change Password";
	$smarty->assign("pgTitle",$pgTitle);
	$smarty->assign("errors",$error);
	$smarty->assign("msgs",$msg);
	$smarty->assign("rid",$rid);
	$smarty->assign("pickup_charges",$pickupcharges);
    $smarty->assign("traffic_delay",$traffic_delay);	
	$smarty->assign("price_per_mile",$price_per_mile);	
	$smarty->display('rate.tpl');
		
?>