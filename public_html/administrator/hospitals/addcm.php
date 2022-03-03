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
		
	$db->connect();
	$db2->connect();

//GET HOSPITALS LIST
    $gcont = "SELECT * FROM ".TBL_HOSPITALS;
		if($db->query($gcont) && $db->get_num_rows() > 0)
		 {
		   $hlist = $db->fetch_all_assoc();
		 }
		 

// Add Member

 if(isset($_POST['submit'])){

	  $hospid    = sql_replace($_POST['hosp_name']);
	  $fname     = sql_replace($_POST['fname']);	
      $lname     = sql_replace($_POST['lname']);
	  $phnum     = sql_replace($_POST['phnum']);	
      $email     = sql_replace($_POST['email']);
	  $username  = sql_replace($_POST['username']);		  
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

	      $chkEmail = "SELECT * FROM ".TBL_CM." WHERE email='".$email."'";
	        if($db->query($chkEmail) && $db->get_num_rows() > 0){
			  $error .= 'Email address already exist. Try another one.<br>  ';
			}

	      $chkUser = "SELECT * FROM ".TBL_CM." WHERE username='".$username."'";
	        if($db->query($chkUser) && $db->get_num_rows() > 0){
			  $error .= 'Username already exist. Try another one.<br>  ';
			}	
	
  if(!$error) {
		  //Add Case Manager
		 $Query  = "INSERT INTO ".TBL_CM." SET 
					hosp_id='$hospid',
					fname='$fname',
					lname='$lname',
					email='$email',
					phone='$phnum',
					username='$username',
					pwd='$pwd1',
					cm_status='$ustatus'";
					 	 
		  if($db->execute($Query))
		    { 
			  echo '<script>alert("Case Manager Added Successfully.");</script>';
                          echo '<script>location.href="casemanagers.php";</script>';
                          exit;
			}else{
			  $error .= 'Unable to add Case Manager <br />';			
			}
     }
  }}	
	$db->close();

    $pgTitle = "Admin Panel -- Hospital/Clinic [Add Case Manager]";	
	$smarty->assign("title",$title);
	$smarty->assign("pgname",$pgname);		
	$smarty->assign("msgs",$msgs);
	$smarty->assign("errors",$error);
	$smarty->assign("hospitals",$hlist);
    $smarty->assign("hospid",$hospid);		
    $smarty->assign("fname",$fname);	
	$smarty->assign("lname",$lname);
	$smarty->assign("phnum",$phnum);	
	$smarty->assign("email",$email);
	$smarty->assign("username",$username);	
	$smarty->assign("pwd1",$pwd1);
	$smarty->assign("pwd2",$pwd2);	
	$smarty->assign("ustatus",$ustatus);		
	$smarty->display('hosptpls/addcm.tpl');
		
?>