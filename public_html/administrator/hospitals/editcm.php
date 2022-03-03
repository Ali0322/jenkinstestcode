<?php
   	/* *************************** *
	   * Date: 26-May-2008 
	   * categories/add_category.php
	   * Muhammad Sajid
	   *************************** */

   	include_once('../DBAccess/Database.inc.php');
   	include_once('../Classes/MyMailer.php');	
		
	$db = new Database;	
	$db2 = new Database;	
	$mail = new MyMailer;
	
	$msgs   = '';
	$errors = '';
	$id = $_GET['id'];	
	$db->connect();
	$db2->connect();

    $id = intval($_GET['id']);
	 if($id == ''){
	   echo '<script>alert("Invalid URL");</script>';
	   echo '<script>location.href="casemanagers.php";</script>';
	   exit;
	 }

//GET HOSPITALS LIST
    $gcont = "SELECT * FROM ".TBL_HOSPITALS;
		if($db->query($gcont) && $db->get_num_rows() > 0)
		 {
		   $hlist = $db->fetch_all_assoc();
		 }


  //UPDATE CASE MANAGER
      if(isset($_POST['submit'])){
	  $hospid    = sql_replace($_POST['hosp_name']);
	  $fname     = sql_replace($_POST['fname']);	
      $lname     = sql_replace($_POST['lname']);
	  $phnum     = sql_replace($_POST['phnum']);	
      $email     = sql_replace($_POST['email']);
      $hidemail  = sql_replace($_POST['hidemail']);	  
	  $username  = sql_replace($_POST['username']);	
	  $hiduname  = sql_replace($_POST['hiduname']);		  	  
	  $pwd1      = sql_replace($_POST['pwd1']);		  
	  $pwd2      = sql_replace($_POST['pwd2']);		  
	  $ustatus   = sql_replace($_POST['ustatus']);	

   

       if(!isset($hospid) || $hospid == ''){
		   $error .= "<img src='images/bulit.gif'> Hospital/Clinic not selected!</img><br>";
		   }

	   if(!$fname)
	    { $error .= "<img src='images/bulit.gif'> First Name Missing !</img><br>"; }
	    else{
           if(eregi(' ', $fname)){
		   $error .= "<img src='images/bulit.gif'> Spaces not allowed in First name!</img><br>";
           }else{
		   if(!ctype_alpha($fname)){
		   $error .= "<img src='images/bulit.gif'> Digits not allowed in First name!</img><br>";
		   }
          }           
         }		
	   if(!$lname)
	    { $error .= "<img src='images/bulit.gif'> Last Name Missing !</img><br>"; }
	    else{
           if(eregi(' ', $lname)){
		   $error .= "<img src='images/bulit.gif'> Spaces not allowed in Last name!</img><br>";
           }else{
		   if(!ctype_alpha($lname)){
		   $error .= "<img src='images/bulit.gif'> Digits not allowed in Last name!</img><br>";
		   }
         }
        }  
	   if(!$phnum)
	    { $error .= "<img src='images/bulit.gif'> Phone Number Missing!</img><br>"; }
        
	   if(!$email)
	    { $error .= "<img src='images/bulit.gif'> Email Address Missing !</img><br>"; }
        else{
		   if(!checkEmail($email)){
		   $error .= "<img src='images/bulit.gif'> Invalid Email address. !</img><br>";
		   }
		}
		
	   if(!$username)
	    { $error .= "<img src='images/bulit.gif'> Username Missing !</img><br>"; }
		else{
		   if(eregi(' ', $username))
			{ $error .= "<img src='images/bulit.gif'> Spaces not allowed in username!</img><br>"; }	
        }

	   if(!$pwd1)
	    { $error .= "<img src='images/bulit.gif'> Password Missing !</img><br>"; }
		else{
		   if(eregi(' ', $pwd1))
			{ $error .= "<img src='images/bulit.gif'> Spaces not allowed in username!</img><br>"; }		  
		  }
				
	   if(!$pwd2)
	    { $error .= "<img src='images/bulit.gif'> Confirm Password Missing !</img><br>"; }
       else{
		   if(eregi(' ', $pwd2))
			{ $error .= "<img src='images/bulit.gif'> Spaces not allowed in username!</img><br>"; }		  
		  }

		
	   if($pwd1 != '' && $pwd2 != '')
	    { 
		  if($pwd1 != $pwd2)
		$error .= "<img src='images/bulit.gif'> Passwords mismatched!</img><br>"; }

       if(!isset($ustatus) || $ustatus == ''){
		   $error .= "<img src='images/bulit.gif'> Status not selected!</img><br>";
		   }


      if(!$error){
         
		 if($hidemail != $email){
	      $chkEmail = "SELECT * FROM ".TBL_CM." WHERE email='".$email."'";
	        if($db->query($chkEmail) && $db->get_num_rows() > 0){
			  $error .= 'Email address already exist. Try another one.<br>  ';
			}
          }
		  
		 if($hiduname != $username){		  
	      $chkUser = "SELECT * FROM ".TBL_CM." WHERE username='".$username."'";
	        if($db->query($chkUser) && $db->get_num_rows() > 0){
			  $error .= 'Username already exist. Try another one.<br>  ';
			}	
	      }
	
  if(!$error) {
		  //Add Case Manager
		 $Query  = "UPDATE ".TBL_CM." SET 
					hosp_id='$hospid',
					fname='$fname',
					lname='$lname',
					email='$email',
					phone='$phnum',
					username='$username',
					pwd='$pwd1',
					cm_status='$ustatus' WHERE cm_id='".$id."'";
					 	 
		  if($db->execute($Query))
		    { 

			  echo '<script>alert("Case Manager Updated Successfully.");</script>';
                          echo '<script>location.href="casemanagers.php";</script>';
                          exit;
			}else{
			  $error .= 'Unable to Update Case Manager <br />';			
			}
     }
  }
   }else{
		$qry_cm  = "SELECT * FROM " .  TBL_CM. " WHERE cm_id='".$id."'" ;
	if($db->query($qry_cm) && $db->get_num_rows() > 0){
		$cm = $db->fetch_all_assoc();
	 } 
	 
	  $fname     = $cm[0]['fname'];	
      $lname     = $cm[0]['lname'];
	  $phnum     = $cm[0]['phone'];	
      $email     = $cm[0]['email'];
	  $hidemail  = $cm[0]['email'];
	  $username  = $cm[0]['username'];		  
	  $hiduname  = $cm[0]['username'];	
	  $hospid    = $cm[0]['hosp_id'];
	  $pwd1      = $cm[0]['pwd'];
	  $pwd2      = $cm[0]['pwd'];
	  $ustatus   = $cm[0]['cm_status'];	  	  	  		  
   }
	
		
	$db->close();
	
    $pgTitle = "Admin Panel -- Hospital/Clinic [Edit - Case Manager]";
	$smarty->assign("pgTitle",$pgTitle);
	$smarty->assign("pgname",$pgname);		
	$smarty->assign("msgs",$msgs);
	$smarty->assign("errors",$error);
		
	$smarty->assign("id",$id);	
    $smarty->assign("hosp",$hlist);	
    $smarty->assign("hospid",$hospid);		
    $smarty->assign("fname",$fname);	
	$smarty->assign("lname",$lname);
	$smarty->assign("phnum",$phnum);	
	$smarty->assign("email",$email);
	$smarty->assign("hidemail",$hidemail);	
	$smarty->assign("username",$username);
	$smarty->assign("hiduname",$hiduname);		
	$smarty->assign("pwd1",$pwd1);
	$smarty->assign("pwd2",$pwd2);
	$smarty->assign("ustatus",$ustatus);
	$smarty->display('hosptpls/editcm.tpl');
		
?>