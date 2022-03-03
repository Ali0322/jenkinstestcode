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
	$uid = $_GET['id'];	
	$db->connect();
	$db2->connect();


    $hosp = "SELECT hospname FROM ".TBL_HOSPITALS;
		if($db->query($hosp) && $db->get_num_rows() > 0)
		 {
		   $slist = $db->fetch_all_assoc();		
		   
		 }


// Update Testimonials

 	  if(isset($_POST['regaff']))
	    {

	   $fname       = sql_replace($_POST['fname']);	
	   $lname		= sql_replace($_POST['lname']);	
   
	   $hosp      	= sql_replace($_POST['hosp']);	
	   $content  			= $_POST['editor1'];
	   $status      = sql_replace($_POST['status']);	
	   $uid1		= $_POST['uid1'];
	 
	   
	
	 
		

	
	
	   if(!$fname)
	    { $errors .= "<img src='../images/arrow.jpg'>&nbsp;&nbsp;First Name Missing !<br>"; }

	    if(!$lname)
	    { $errors .= "<img src='../images/arrow.jpg'>&nbsp;&nbsp;Last Name Missing !<br>"; }

		if(!$hosp)
		{ $errors .= "<img src='../images/arrow.jpg'>&nbsp;&nbsp; Select Hospital !<br>"; }
	
		if(!$addmessage)
		{ $errors .= "<img src='../images/arrow.jpg'>&nbsp;&nbsp; Message? <br>"; }
		
		
					
 if(!$errors){
 
         $chkHosp = "SELECT id FROM ".TBL_HOSPITALS." WHERE hospname='$hosp'"; 
         
		if($db->query($chkHosp) && $db->get_num_rows() > 0)
		 {
		 $data = $db->fetch_all_assoc();
		$hospid = $data[0]['id'];
	
		 }
		 
		 if($msgs == '')
         {
	 
		$Query3  = "UPDATE ".TBL_TESTIMONIALS." SET 
					uid='$hospid',
					fname='$fname',
					lname='$lname',
					message='$content',
					publish='$status'
					WHERE id='$uid1'";
			
		  if($db->execute($Query3))
		    {
			  echo '<script>alert("Testimonial edit Successfully");</script>';
			  echo '<script>window.open("index.php","_parent");</script>';			  
			  exit;
			}else{
			  echo '<script>alert("Unable to edit Testimonial");</script>';
			  echo '<script>window.open("index.php","_parent");</script>';			  
			  exit;
			}
		}
	}
	}
  else{

      $query = "SELECT * FROM ".TBL_TESTIMONIALS." WHERE id='".$uid."'";
       
	      if($db->query($query) && $db->get_num_rows())
			  {
			  $udata = $db->fetch_all_assoc();
			  }
              $fname = $udata[0]['fname'];
              $lname = $udata[0]['lname'];
	          $hosp  = $udata[0]['uid'];	
	   		  $content	= $udata[0]['message'];
	  	      $status      = $udata[0]['publish'];
			  
		
			  
	$query2 = "SELECT * FROM ".TBL_HOSPITALS." WHERE id='".$hosp."'";
       
	      if($db->query($query2) && $db->get_num_rows())
			  {
			  $udata1 = $db->fetch_all_assoc();
			  }

	          $hosp1  = $udata1[0]['hospname'];	
			

		  			  		  
      }	
	
		
	$db->close();
	
    $pgTitle = "Admin Panel -- Testimonials [Edit]";
	$smarty->assign("pgTitle",$pgTitle);
	$smarty->assign("title",$title);
	$smarty->assign("pgname",$pgname);		
	$smarty->assign("msgs",$msgs);
	$smarty->assign("errors",$errors);
	$smarty->assign("fname",$fname);
	$smarty->assign("lname",$lname);
	$smarty->assign("hosp",$hosp);
	$smarty->assign("content",$content);
	$smarty->assign("status",$status);
	$smarty->assign("hosp1",$hosp1);		
	$smarty->assign("slist",$slist);			
    $smarty->assign("uid",$uid);			
	$smarty->display('testimonialstpl/edittestimonials.tpl');
		
?>