<?php



	

require_once('../DBAccess/Database.inc.php');

	

	$db = new Database;	

	$db->connect();







				function calculate_trips($date){

				

								$db = new Database;	

								$db->connect();

								

								if(strlen($i)==1){

								

								$ia="0".$i;

								

								}else{

								

								$ia=$i;

								

								}

				

				

					

								 //$date="$year-"."$month-"."$ia"; 

					 

				

								// $today= date('Y-m-d');

										$Querypg	="SELECT * FROM ".TBL_SHEET." where dated='$date' ";

										if($db->query($Querypg) && $db->get_num_rows() > 0)

										{

											$vehdetails = $db->fetch_all_assoc();

											$sheet_id=	$vehdetails[0]['sheet_id'];

										}

										

										if($sheet_id==''){

										

											$sheet_id = '0';

											

										}	

										//$st=5;

										

										$ad=0;

										

										$cond = " AND td.status IN ('1','4','6','5','2','0')";

										

										

										  

										  

										$Query2 = "SELECT t.sheet_id,  t.trip_code, t.trip_id,  t.trip_user,  t.trip_clinic,t.trip_miles,t.trip_date, t.trip_tel, td.tdid, td.type, td.pck_add,td.aptime,td.pck_time,td.aptime, td.drp_atime, td.drp_add,  td.drp_time,td.wc,   td.trip_remarks,  td.drv_id, td.status, CONCAT(dr.fname,' ',dr.lname,'--',dr.drv_code) AS driver 

FROM trips as t INNER JOIN trip_details as td ON t.trip_id=td.trip_id LEFT JOIN drivers as dr ON td.drv_id = dr.drv_code WHERE t.trip_date='$date' ORDER by td.pck_time ASC";

										  

										   if($db->query($Query2) && $db->get_num_rows() > 0)

										{

										

										 $trips = $db->fetch_all_assoc(); 

										 

										}

								 //$date="$year-"."$month-"."$ia"; 	

								

								$trip=$db->get_num_rows();

								

								

							    $sid=$trips[0]['sheet_id'];

								$trp['id']=$trips[$i]['trip_id'];

								if($trip ==0){

								$trp['title']="Trips:".""."$trip";

								}else{

								$trp['title']="Trips:$trip";

								}

								$trp['start']="$date";

								$trp['url']="nextdaygrid.php?date=$date&st=9";

								

								return $trp;

				}

  

   

    	            $year = date('Y');

					$month = date('m');

					$day = date('d');

     

	  $num = cal_days_in_month(CAL_GREGORIAN, $month, $year); // 31

       $num=30;

	      $total = $num;



		  for ($i = 0;$i<=$num;$i++){

		  

		  

		$data=calculate_trips(date("Y-m-d",strtotime("+".$i." day")));

		  

		   if($total == $i){

		   echo json_encode($data);

		   echo ']';

		   }else{

		   if($i == 0){ echo '['; }

		   echo json_encode($data).',';			   

			   }

		  }



         

		

	

	

				  

		 

	



		

		

//print_r($trips);

	$db->close();






?>