<?php /* Smarty version 2.6.12, created on 2014-06-05 11:51:51
         compiled from top.tpl */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo @SITE_TITLE; ?>
 | <?php echo $this->_tpl_vars['page_title']; ?>
</title>
<meta name="keywords" content="<?php echo $this->_tpl_vars['seokeywords']; ?>
" />
<meta name="description" content="<?php echo $this->_tpl_vars['seodescription']; ?>
" />
<link href="style/style.css" type="text/css" rel="stylesheet" />
<link href="css/flora.datepicker.css" rel="stylesheet" type="text/css" />
<link href="facebox/facebox.css" media="screen" rel="stylesheet" type="text/css"/>
<link href="style/chat.css" type="text/css" rel="stylesheet" />
<?php echo '
<script language="javascript" src="scripts/jquery-1.2.6.js"></script>
<script language="javascript" src="facebox/facebox.js" type="text/javascript" ></script>
<script language="javascript" type="text/javascript" src="scripts/jquery.alerts.js"></script>
<script language="javascript" type="text/javascript" src="scripts/ui.datepicker.js"></script>
<script language="javascript" type="text/javascript" src="scripts/jquery.validate.js"></script>
<script language="javascript" type="text/javascript" src="scripts/jquery.maskedinput-1.2.2.js"></script>
<script type="text/javascript" src="scripts/chat.js"></script>
<script language="javascript" type="text/javascript">
$(document).ready(function($) {
	$("#updReq").validate();
	$("#contactform").validate();
	$("#testimonialform").validate();
	//$("#testimonialform").validate();
});
$(document).ready(function($) {
	//alert(\'this is the point\');
			  $(\'a[rel*=facebox]\').facebox({
				loading_image : \'loading.gif\',
				close_image   : \'closelabel.gif\'
			  }); 
		});
 
$(document).ready(function() {
$("#phnum").mask("(999) 999-9999");
$("#d_phnum").mask("(999) 999-9999");
$("#phyphone").mask("(999) 999-9999");
$("#phyfax").mask("(999) 999-9999");
$("#h_phone").mask("(999) 999-9999");
$("#dob").mask("9999-99-99");
//$("#ssn").mask("999-99-9999");
$("#appdate").datepicker({ minDate: \'0\' });
$("#calcdate").datepicker();
$("#dob").datepicker({ yearRange: "-131:00" });
$("#day1to").datepicker();
$("#day3to").datepicker();
$("#day5to").datepicker();
$("#day7to").datepicker();
$("#day9to").datepicker();
$("#day11to").datepicker();
$("#day13to").datepicker();
$("#startdate").datepicker();
$("#enddate").datepicker();


$("#dob").datepicker();
$("#apptime").mask("29:59");
$("#org_apptime").mask("29:59");
$("#picktime").mask("19:59");

$("#calctime").mask("29:59");

$(\'#returnpickup\').mask("29:59");

$(\'#day1\').mask("29:59");

$(\'#day2\').mask("29:59");

$(\'#day3\').mask("29:59");

$(\'#day4\').mask("29:59");

$(\'#day5\').mask("29:59");

$(\'#day6\').mask("29:59");

$(\'#day7\').mask("29:59");

$(\'#day8\').mask("29:59");

$(\'#day9\').mask("29:59");

$(\'#day10\').mask("29:59");

$(\'#day11\').mask("29:59");

$(\'#day12\').mask("29:59");

$(\'#day13\').mask("29:59");

$(\'#day14\').mask("29:59");



     $("#calc").validate();

	$("#rate").validate();

	$("#careerform").validate();

	$("#contactform").validate();

	$("#tripReq").validate();

	$("#Req").validate();

	$("#patientform").validate();

		$("#addcmform").validate();

	

	$("#loginform").validate();	

	$("#signupform").validate({

	  rules: {

		h_zip: {

		  digits: true,

          minlength: 5

		}						

	  }

	});



$("#updReq").validate({

	  rules: {

		requests: {

		  digits: true,

          minlength: 1

		}						

	  }

	});



	$("#testimonialform").validate();

	$("#getRequests").validate({

	  rules: {

		requests: {

		  digits: true,

          minlength: 1

		}						

	  }

	});	

	$("#myaccountform").validate({

	  rules: {

		h_zip: {

		  digits: true,

          minlength: 5

		}						

	  }

	});						

});		
function show_gallery(url){

   window.open(url,\'mywindow\',\'width=850,height=650,resizable=1,scrollbars=yes\')

}
   function popWind(url){

   myWindow1 = window.open( url, "myWindow1", 

"status = 1, height = 650, width = 840, scrollbars=1, resizable = 1" );

   myWindow1.moveTo(0,0);

   }  
</script>
'; ?>

<?php if ($this->_tpl_vars['pgName'] != 'index.php'): ?>
		<?php if ($_SESSION['user'] != ''): ?>
		<?php echo '
		<SCRIPT SRC="scripts/ssm.js" language="JavaScript1.2"></SCRIPT>
		';  if ($_SESSION['allowUser'] != '0'):  echo '
		<SCRIPT SRC="scripts/ssmItems.js" language="JavaScript1.2"></SCRIPT>
		';  else:  echo '<SCRIPT SRC="scripts/ssmItems2.js" language="JavaScript1.2"></SCRIPT>';  endif;  echo '
		'; ?>

		<?php endif; ?>
<?php endif; ?>

</head>

<body>
	<div id="main_container" >
    	<div id="main_inner_container">
        	<div id="inner_container"> 