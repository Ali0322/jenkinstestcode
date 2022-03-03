<?php
   	/* *************************** *
	   * Date: 26-May-2008 
	   * categories/add_category.php
	   * Muhammad Sajid
	   *************************** */

   	include_once('../DBAccess/Database.inc.php');
	
	$db = new Database;	
	$db2 = new Database;	

	
	$msgs   = '';
	$errors = '';
		
	$db->connect();
	$db2->connect();

// Select Hospitals
    $hosp = "SELECT hospname FROM ".TBL_HOSPITALS;
		if($db->query($hosp) && $db->get_num_rows() > 0)
		 {
		   $slist = $db->fetch_all_assoc();		
		   
		 }
		 



// Add Testimonials

	  if(isset($_POST['addtestimonials']))
	    {

	   $fname       = sql_replace($_POST['fname']);	
	   $lname		= sql_replace($_POST['lname']);	
   
	   $hosp      	= sql_replace($_POST['hosp']);	
	   $content  			= $_POST['editor1'];
	   $status      = sql_replace($_POST['status']);	
	   
	 
	
	
	
	   if(!$fname)
	    { $errors .= "<img src='../images/arrow.jpg'>&nbsp;&nbsp;First Name Missing !<br>"; }

	    if(!$lname)
	    { $errors .= "<img src='../images/arrow.jpg'>&nbsp;&nbsp;Last Name Missing !<br>"; }

		if(!$hosp)
		{ $errors .= "<img src='../images/arrow.jpg'>&nbsp;&nbsp; Select Hospital !<br>"; }
	
		if(!$content)
		{ $errors .= "<img src='../images/arrow.jpg'>&nbsp;&nbsp; Message is missing <br>"; }
		
		
					
 if(!$errors){
 
         $chkHosp = "SELECT id FROM ".TBL_HOSPITALS." WHERE hospname='$hosp'"; 
         
		if($db->query($chkHosp) && $db->get_num_rows() > 0)
		 {
		 $data = $db->fetch_all_assoc();
		$hospid = $data[0]['id'];
		
		 }
		 
        if($msgs == '')
         {
		 
		    // Random verification key
/* 		
				function RandomName( $nameLength ) 
				{
				 $NameChars = 'abcdefghijklmnopqrstuvwxyz0123456789';
				 $Vouel = 'aeiou';
				 $keyval = "";
				 for ($index = 1; $index <= $nameLength; $index++) 
				 { 
					if ($index % 3 == 0)
					{
					  $randomNumber = rand(1,strlen($Vouel));
					  $keyval .= substr($Vouel,$randomNumber-1,1); 
					}else
					  {
						$randomNumber = rand(1,strlen($NameChars));
						$keyval .= substr($NameChars,$randomNumber-1,1);
					  } 
				 }
				 return $keyval;
				}
		
               $key = ucfirst(RandomName(rand(12,64)));*/
		 
	 
		 $Query3  = "INSERT INTO ".TBL_TESTIMONIALS." SET 
					uid='$hospid',
					fname='$fname',
					lname='$lname',
					message='$content',
					publish='$status'";
					 	 
		  if($db->execute($Query3))
		    {
			  echo '<script>alert("Testimonial Added Successfully");</script>';
			  echo '<script>window.open("index.php","_parent");</script>';			  
			  exit;
			}else{
			  echo '<script>alert("Unable to add Member");</script>';
			  echo '<script>window.open("index.php","_parent");</script>';			  
			  exit;
			}
		}
	}
}		
	$db->close();

    $pgTitle = "Admin Panel -- Testimonial [Add]";	
	$smarty->assign("title",$title);
	$smarty->assign("pgname",$pgname);		
	$smarty->assign("msgs",$msgs);
	$smarty->assign("errors",$errors);
	$smarty->assign("fname",$fname);
	$smarty->assign("lname",$lname);
	$smarty->assign("hosp",$hosp);
	$smarty->assign("addmessage",$addmessage);
	$smarty->assign("status",$Status);		
	$smarty->assign("slist",$slist);	
	
	$smarty->display('testimonialstpl/addtestimonials.tpl');
		
?>