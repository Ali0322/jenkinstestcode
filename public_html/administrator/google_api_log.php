<?php 
$type = $_REQUEST['type'];
		try{	$url = 'https://voice.hybriditservices.com/googleapi.php';
     		   	$clienttoken_post = array('strSource'=> 'Demo 5','SourceType'=> $type,'apikeyused'=> 'AIzaSyBBE53xDKH93kCWSWREyehlzH8N_t2R2lw');
           		$curl = curl_init($url);
            	curl_setopt($curl, CURLOPT_POST, true);
           		curl_setopt($curl, CURLOPT_POSTFIELDS, $clienttoken_post);
            	curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_ANY);
            	curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
            	curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
            	$json_response = curl_exec($curl);
            	curl_close($curl);
			 }
			catch (Exception $e) { } 
	?>
	
    