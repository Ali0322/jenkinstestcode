<?php /* Smarty version 2.6.12, created on 2014-07-26 20:14:21
         compiled from editrequest.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'date_format', 'editrequest.tpl', 771, false),)), $this); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
 <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "top.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
 <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php echo '
<style>
.form_heading_1{ background:#333; color:#fff; height:20px; font-size:11px; font-weight:bold; padding-left:8px; width:auto; padding-top:5px;}
.grid_content{color:#333333; padding:2px;}
.grid_icon{color:#333333; padding:2px;}
.txt_boxX{ width:130px; border:#999 1px solid; height:15px; background:#f4f4f4; font-size:10px;}
.accesslable{ font-size:10px;}
.labelX{ color:#202020; font-size:10px; font-weight:bold; width:155px;}
.appt_txtbox{ width:95px; height:20px; border: #999 1px solid;}
.btn_2{font-size:12px; background-color:#3C3F43;  text-align:center; border:none; width:150px; height:32px;  font-weight:bold; color:#FFF; padding:5px 0 5px 0; cursor:pointer; } 
.error{ font-family:Verdana, Geneva, sans-serif; color:#F00; font-size:10px; }
</style>
<script type="text/javascript">
$(document).ready(function (){
$(\'#ssn\').mask(\'999-99-9999\');		
$(\'#hidme\').hide();
var v=$(\'#puchoice\').val();
if(v ==\'Time\'){ 
$(\'#rpTime\').show();	
}});
$(document).ready(function(){
	$("#picktime").mask("29:59");
	$("#three_pickup").mask(\'29:59\');
	$("#four_pickup").mask(\'29:59\');
	$("#five_pickup").mask(\'29:59\');
$("#d_phnum").mask("(999) 999-9999");
 });
function tValid(val,idv){
var i = val.substr(0,1);
var j = val.substr(1,1);
if(i == \'2\'){
if(j > 3){ $(\'#\'+idv).val(\'\'); return false; }else{ return true; }
}}
function check_check3(){
	if($(\'#three_will_call\').attr(\'checked\')){
	$(\'#three_pickup\').attr("disabled",true);
	$(\'#am_pm3\').attr("disabled",true);
	$(\'#three_pickup\').removeClass(\'required\');
	$(\'#am_pm3\').removeClass(\'required\'); }
	else {
	$(\'#three_pickup\').attr("disabled",false);
	$(\'#am_pm3\').attr(\'disabled\',false);
	$(\'#three_pickup\').addClass(\'required\');
	$(\'#am_pm3\').addClass(\'required\'); }
	 }	
function check_check4(){
	if($(\'#four_will_call\').attr(\'checked\')){ 
	$(\'#four_pickup\').attr(\'disabled\',true);
	$(\'#am_pm4\').attr(\'disabled\',true);
	$(\'#four_pickup\').removeClass(\'required\');
	$(\'#am_pm4\').removeClass(\'required\'); }
	else {
	$(\'#four_pickup\').attr(\'disabled\',false);
	$(\'#am_pm4\').attr(\'disabled\',false);
	$(\'#four_pickup\').addClass(\'required\');
	$(\'#am_pm4\').addClass(\'required\'); }
	 }		
function check_check5(){
	if($(\'#five_will_call\').attr(\'checked\')){ 
	$(\'#five_pickup\').attr(\'disabled\',true);
	$(\'#am_pm5\').attr(\'disabled\',true);
	$(\'#five_pickup\').removeClass(\'required\');
	$(\'#am_pm5\').removeClass(\'required\'); }
	else {
	$(\'#five_pickup\').attr(\'disabled\',false);
	$(\'#am_pm5\').attr(\'disabled\',false);
	$(\'#five_pickup\').addClass(\'required\');
	$(\'#am_pm5\').addClass(\'required\'); }
	 }	
function chTrip(val){
$(\'#waitopt\').attr(\'checked\', false);
    if(val == \'One Way\'){
	$(\'#hideno\').hide();
	$("#showno").hide();
	//$(\'#returnpickup\').attr("disabled",true);
	//$(\'#backto\').removeAttr("class");	
	$(\'#returnpickup\').removeAttr("class");	
	$(\'#rpu\').removeAttr("class");			
	$(\'#rpu\').hide();	
	//$(\'#trBackTo\').hide();	
	$(\'#rpTime\').hide();	
	
	$(\'#trBackTo3\').hide();	
	
	$(\'#trBackTo4\').hide();	
	
	//$(\'#backto\').hide();	
	//To hide
  	$(\'#b0\').hide();
	$(\'#b1\').hide();	
	$(\'#b2\').hide();
	$(\'#b3\').hide();
	$(\'#b4\').hide();
		
	$(\'#three0\').hide();
	$(\'#three1\').hide();
	$("#three2").hide();
	$(\'#three3\').hide();
	$("#three4").hide();
	$(\'#three5\').hide();
	$("#three6").hide();
	$("#three7").hide();
	
	$(\'#five0\').hide();
	$(\'#five1\').hide();
	$("#five2").hide();
	$(\'#five3\').hide();
	$("#five4").hide();
	$(\'#five5\').hide();
	$("#five6").hide();
	$("#five7").hide();
	
	$(\'#four0\').hide();
	$(\'#four1\').hide();
	$("#four2").hide();
	$(\'#four3\').hide();
	$("#four4").hide();
	$(\'#four5\').hide();
	$("#four6").hide();
	$("#four7").hide();		
	//Remove required attributes
	$(\'#backto\').removeClass(\'required\');
	$(\'#backtocity\').removeClass(\'required\');
	$(\'#backtostate\').removeClass(\'required\');
	//$(\'#backtozip\').removeClass(\'required\');
	
	$(\'#puchoice\').removeClass(\'required\');
	 	
	$(\'#five_pickup\').removeClass(\'required\');
	$(\'#am_pm5\').removeClass(\'required\');
	$(\'#five_address\').removeClass(\'required\');
	$(\'#five_city\').removeClass(\'required\');
	$(\'#five_state\').removeClass(\'required\');
	//$(\'#five_zip\').removeClass(\'required\');
	
	$(\'#four_pickup\').removeClass(\'required\');
	$(\'#am_pm4\').removeClass(\'required\');
	$(\'#four_address\').removeClass(\'required\');
	$(\'#four_city\').removeClass(\'required\');
	$(\'#four_state\').removeClass(\'required\');
	//$(\'#four_zip\').removeClass(\'required\');
	
	$(\'#three_pickup\').removeClass(\'required\');
	$(\'#am_pm3\').removeClass(\'required\');
	$(\'#three_address\').removeClass(\'required\');
	$(\'#three_city\').removeClass(\'required\');
	$(\'#three_state\').removeClass(\'required\');
	//$(\'#three_zip\').removeClass(\'required\');

    return true;
    }
    else  if(val == \'Round Trip\'){
    var pu=$(\'#puchoice\').val();
	if(pu==\'Will Call\'){
	$(\'#returnpickup\').removeAttr("class");	
	$(\'#rpTime\').hide();	
    $(\'#rpu\').show();	
 	}else{
	    $(\'#rpu\').show();	
		$(\'#rpTime\').show();	
	}
	/*$(\'#rpu\').attr("class","txt_box required");
	$(\'#hideno\').show();
	$(\'#trBackTo\').show();	
    $(\'#backto\').show();
	$(\'#backto\').attr("class","txt_box required");
	$(\'#trBackTo2\').show();
	$(\'#backtocity\').show();
	$(\'#backtocity\').attr("class","txt_box required");
	$(\'#trBackTo3\').show();	
	$(\'#backtostate\').show();
	$(\'#backtostate\').attr("class","txt_box required");
	$(\'#trBackTo4\').show();	
	$(\'#backtozip\').show();	
	$(\'#backtozip\').attr("class","txt_box required");
	
	$(\'#bb1\').show();	
	$(\'#bb2\').show();
	$(\'#bb3\').show();
	$(\'#bb4\').show();
	$(\'#puchoice\').attr("class","txt_box required");	
	$(\'#backto\').attr("disabled",false);
	$(\'#backtocity\').attr("disabled",false);
	$(\'#backtostate\').attr("disabled",false);
	$(\'#backtozip\').attr("disabled",false);
	$(\'#puchoice\').attr("disabled",false);*/
	//hide four and five attributes
		//To show feilds
	
	$(\'#b0\').show();
	$(\'#b1\').show();	
	$(\'#b2\').show();
	$(\'#b3\').show();
	$(\'#b4\').show();
	//To hide
	$(\'#three0\').hide();
	$(\'#three1\').hide();
	$("#three2").hide();
	$(\'#three3\').hide();
	$("#three4").hide();
	$(\'#three5\').hide();
	$("#three6").hide();
	$("#three7").hide();
	
	$(\'#five0\').hide();
	$(\'#five1\').hide();
	$("#five2").hide();
	$(\'#five3\').hide();
	$("#five4").hide();
	$(\'#five5\').hide();
	$("#five6").hide();
	$("#five7").hide();
	
	$(\'#four0\').hide();
	$(\'#four1\').hide();
	$("#four2").hide();
	$(\'#four3\').hide();
	$("#four4").hide();
	$(\'#four5\').hide();
	$("#four6").hide();
	$("#four7").hide();	
	//Add required attributes to second destination 
	$(\'#backto\').addClass(\'required\');
	$(\'#backtocity\').addClass(\'required\');
	$(\'#backtostate\').addClass(\'required\');
	//$(\'#backtozip\').addClass(\'required\');
	$(\'#puchoice\').addClass(\'required\');
	//Remove required attributes 	
	$(\'#five_pickup\').removeClass(\'required\');
	$(\'#am_pm5\').removeClass(\'required\');
	$(\'#five_address\').removeClass(\'required\');
	$(\'#five_city\').removeClass(\'required\');
	$(\'#five_state\').removeClass(\'required\');
	//$(\'#five_zip\').removeClass(\'required\');
	
	$(\'#four_pickup\').removeClass(\'required\');
	$(\'#am_pm4\').removeClass(\'required\');
	$(\'#four_address\').removeClass(\'required\');
	$(\'#four_city\').removeClass(\'required\');
	$(\'#four_state\').removeClass(\'required\');
	//$(\'#four_zip\').removeClass(\'required\');
	
	$(\'#three_pickup\').removeClass(\'required\');
	$(\'#am_pm3\').removeClass(\'required\');
	$(\'#three_address\').removeClass(\'required\');
	$(\'#three_city\').removeClass(\'required\');
	$(\'#three_state\').removeClass(\'required\');
	//$(\'#three_zip\').removeClass(\'required\');
				  
	 return true;
    }
	else if(val == \'Three Way\'){
	//To show feilds
	$(\'#three0\').show();
	$(\'#three1\').show();
	$("#three2").show();
	$(\'#three3\').show();
	$("#three4").show();
	$(\'#three5\').show();
	$("#three6").show();
	$("#three7").show();
	
	$(\'#rpu\').show();
	$(\'#b0\').show();
	$(\'#b1\').show();
	$(\'#b2\').show();
	$(\'#b3\').show();
	$(\'#b4\').show();
	
	//Add required attributes 
	$(\'#backto\').addClass(\'required\');
	$(\'#backtocity\').addClass(\'required\');
	$(\'#backtostate\').addClass(\'required\');
	//$(\'#backtozip\').addClass(\'required\');
	
	$(\'#puchoice\').addClass(\'required\');
	
	$(\'#three_pickup\').addClass(\'required\');
	$(\'#am_pm3\').addClass(\'required\');
	$(\'#three_address\').addClass(\'required\');
	$(\'#three_city\').addClass(\'required\');
	$(\'#three_state\').addClass(\'required\');
	//$(\'#three_zip\').addClass(\'required\');
	//hide four and five attributes
	$(\'#five0\').hide();
	$(\'#five1\').hide();
	$("#five2").hide();
	$(\'#five3\').hide();
	$("#five4").hide();
	$(\'#five5\').hide();
	$("#five6").hide();
	$("#five7").hide();
	
	$(\'#four0\').hide();
	$(\'#four1\').hide();
	$("#four2").hide();
	$(\'#four3\').hide();
	$("#four4").hide();
	$(\'#four5\').hide();
	$("#four6").hide();
	$("#four7").hide();
	//remove required of four and five
	$(\'#five_pickup\').removeClass(\'required\');
	$(\'#am_pm5\').removeClass(\'required\');
	$(\'#five_address\').removeClass(\'required\');
	$(\'#five_city\').removeClass(\'required\');
	$(\'#five_state\').removeClass(\'required\');
	//$(\'#five_zip\').removeClass(\'required\');
	
	$(\'#four_pickup\').removeClass(\'required\');
	$(\'#am_pm4\').removeClass(\'required\');
	$(\'#four_address\').removeClass(\'required\');
	$(\'#four_city\').removeClass(\'required\');
	$(\'#four_state\').removeClass(\'required\');
	//$(\'#four_zip\').removeClass(\'required\');
	
	return true;
    } 
	else if(val == \'Four Way\'){
//To show feilds
	$(\'#four0\').show();
	$(\'#four1\').show();
	$("#four2").show();
	$(\'#four3\').show();
	$("#four4").show();
	$(\'#four5\').show();
	$("#four6").show();
	$("#four7").show();
	
	$(\'#three0\').show();
	$(\'#three1\').show();
	$("#three2").show();
	$(\'#three3\').show();
	$("#three4").show();
	$(\'#three5\').show();
	$("#three6").show();
	$("#three7").show();
	
	$(\'#rpu\').show();
	$(\'#b0\').show();
	$(\'#b1\').show();
	$(\'#b2\').show();
	$(\'#b3\').show();
	$(\'#b4\').show();	
	//Add required attributes 	
	$(\'#backto\').addClass(\'required\');
	$(\'#backtocity\').addClass(\'required\');
	$(\'#backtostate\').addClass(\'required\');
	//$(\'#backtozip\').addClass(\'required\');
	
	$(\'#puchoice\').addClass(\'required\');
	
	$(\'#four_pickup\').addClass(\'required\');
	$(\'#am_pm4\').addClass(\'required\');
	$(\'#four_address\').addClass(\'required\');
	$(\'#four_city\').addClass(\'required\');
	$(\'#four_state\').addClass(\'required\');
	//$(\'#four_zip\').addClass(\'required\');
	
	$(\'#three_pickup\').addClass(\'required\');
	$(\'#am_pm3\').addClass(\'required\');
	$(\'#three_address\').addClass(\'required\');
	$(\'#three_city\').addClass(\'required\');
	$(\'#three_state\').addClass(\'required\');
	//$(\'#three_zip\').addClass(\'required\');
	//hide four attributes
	$(\'#five0\').hide();
	$(\'#five1\').hide();
	$("#five2").hide();
	$(\'#five3\').hide();
	$("#five4").hide();
	$(\'#five5\').hide();
	$("#five6").hide();
	$("#five7").hide();
	//remove required of five
	$(\'#five_pickup\').removeClass(\'required\');
	$(\'#am_pm5\').removeClass(\'required\');
	$(\'#five_address\').removeClass(\'required\');
	$(\'#five_city\').removeClass(\'required\');
	$(\'#five_state\').removeClass(\'required\');
	//$(\'#five_zip\').removeClass(\'required\');
	
    return true;
    } 
	else if(val == \'Five Way\'){
//To show feilds		
	$(\'#five0\').show();
	$(\'#five1\').show();
	$("#five2").show();
	$(\'#five3\').show();
	$("#five4").show();
	$(\'#five5\').show();
	$("#five6").show();
	$("#five7").show();
	
	$(\'#four0\').show();
	$(\'#four1\').show();
	$("#four2").show();
	$(\'#four3\').show();
	$("#four4").show();
	$(\'#four5\').show();
	$("#four6").show();
	$("#four7").show();
	
	$(\'#three0\').show();
	$(\'#three1\').show();
	$("#three2").show();
	$(\'#three3\').show();
	$("#three4").show();
	$(\'#three5\').show();
	$("#three6").show();
	$("#three7").show();
	
	$(\'#rpu\').show();
	$(\'#b0\').show();
	$(\'#b1\').show();
	$(\'#b2\').show();
	$(\'#b3\').show();
	$(\'#b4\').show();
	//Add required attributes 	
	$(\'#backto\').addClass(\'required\');
	$(\'#backtocity\').addClass(\'required\');
	$(\'#backtostate\').addClass(\'required\');
	//$(\'#backtozip\').addClass(\'required\');
	
	$(\'#puchoice\').addClass(\'required\');
	
	$(\'#five_pickup\').addClass(\'required\');
	$(\'#am_pm5\').addClass(\'required\');
	$(\'#five_address\').addClass(\'required\');
	$(\'#five_city\').addClass(\'required\');
	$(\'#five_state\').addClass(\'required\');
	//$(\'#five_zip\').addClass(\'required\');
	
	$(\'#four_pickup\').addClass(\'required\');
	$(\'#am_pm4\').addClass(\'required\');
	$(\'#four_address\').addClass(\'required\');
	$(\'#four_city\').addClass(\'required\');
	$(\'#four_state\').addClass(\'required\');
	//$(\'#four_zip\').addClass(\'required\');
	
	$(\'#three_pickup\').addClass(\'required\');
	$(\'#am_pm3\').addClass(\'required\');
	$(\'#three_address\').addClass(\'required\');
	$(\'#three_city\').addClass(\'required\');
	$(\'#three_state\').addClass(\'required\');
	//$(\'#three_zip\').addClass(\'required\');
    return true;
    }
	else{
	return true; 	
	}	}
function test(){
if($(\'#sameadd\').attr(\'checked\')){	
var v=$(\'#pickaddress\').val();
var x=$(\'#pckcity\').val();
var y=$(\'#pckzip\').val();
    $(\'#backto\').val(v);
    $(\'#backtocity\').val(x);
	$(\'#backtozip\').val(y); } 
	else { 
	$(\'#backto\').val(\'\');
    $(\'#backtocity\').val(\'\');
	$(\'#backtozip\').val(\'\'); }}		 
function pUchoice(val){
if(val == \'\'){    
return false;
}
if(val == \'Will Call\'){ 
$(\'#returnpickup\').removeAttr("class");	
$(\'#rpTime\').hide();	
return true;
}else{
$(\'#returnpickup\').attr("class","txt_box required");	
$(\'#rpTime\').show();
return true; 	
}	}
function chProg(val){
if(val == \'0\'){
$(\'#labelid\').html(\'CIS ID\');	
$(\'#cisidsp\').show();			     
$(\'#ssnsp\').hide();
$(\'#ssn\').attr("class","txt_box");
$(\'#cisid\').attr("class","txt_box required");	 		 
return true;
}
if(val == \'1\'){
$(\'#labelid\').html(\'A.H.C.C.C.S\');	
$(\'#ssnsp\').show();	
$(\'#cisidsp\').hide();	 
$(\'#cisid\').attr("class","txt_box");
$(\'#ssn\').attr("class","txt_box required");		  		
return true;
}else{
$(\'#labelid\').html(\'CIS ID\');	
$(\'#cisidsp\').show();			     
$(\'#ssnsp\').hide();
$(\'#ssn\').attr("class","txt_box");
$(\'#cisid\').attr("class","txt_box required");
return true;	 		
}	}
function changelabel(id){
$.post("fetchlabel.php", {id: ""+id}, function(data){
data = data.replace(/(\\r\\n|\\n|\\r)/gm,"");
if(data != \'\'){
$("#changeit").html(data+\':\');
$(\'#hidme\').show();
}else{
$(\'#hidme\').hide();
}
});
return true;}
</script>
'; ?>

<?php if ($this->_tpl_vars['progtype'] != ''): ?>
<?php echo '<script>chProg(\'';  echo $this->_tpl_vars['progtype'];  echo '\');</script>'; ?>

<?php else: ?>
<?php echo '<script>chProg(\'0\');</script>'; ?>

<?php endif; ?>
<body>
<form name="tripReq" id="tripReq"  action="editrequest.php?id=<?php echo $this->_tpl_vars['id']; ?>
&reqid=<?php echo $this->_tpl_vars['reqid']; ?>
" method="post">
<input type="hidden" name="reqid" value="<?php echo $this->_tpl_vars['reqid']; ?>
" /><input type="hidden" name="id" value="<?php echo $this->_tpl_vars['id']; ?>
" />
<!--Main Container Starts Here-->
<div id="main_container">
<!--Inner Container Starts Here-->
<div id="inner_container">
<table cellpadding="0" cellspacing="0"  width="100%" style="float:left;">
<tr>
<td>
<!--Body Container Starts Here-->
<div class="body_container">
<?php if ($_SESSION['user'] == ''): ?> 
<div class="banner"></div>
<?php endif; ?>	<div class="banners" style="margin-top:10px;"><div class="banners"> <ul>
<?php if ($_SESSION['user'] == ''): ?>
<li style="background-image:url(images/case_manager.jpg);">
<div class="case_btn"><a href="login.php">Click Here</a></div></li>
<li style="background-image:url(images/clicnic.jpg);"><div class="clinic_btn"><a href="login.php">Click Here</a></div></li>
<li style="background-image:url(images/request.jpg);"><div class="request_btn">
<?php if ($_SESSION['user'] == ''): ?> <a href="confirm.php" rel="facebox">Click Here</a> <?php elseif ($_SESSION['totrequest'] != ''): ?> <a href="triprequest.php">Click Here</a> <?php else: ?> <a href="getrequests.php" rel="facebox">Click Here</a> <?php endif; ?> 
</div></li>
<?php endif; ?>
</ul></div></div>
<!--Left Panel Starts Here-->
<div class="login_inner">
<div id="left_panel">
  <!--Request a trip Panel Starts Here-->
  <div class="form_panel" style="padding-left:40px;">
      <div class="heading">Edit Requests</div>
      <div class="form_bg">                               	
          <div class="form_top_curve"></div>
          <div class="form">
<?php if ($this->_tpl_vars['error'] != ''): ?>				
      <table width="50%"  align="center" cellpadding="0" cellspacing="0" style="float:left;">
<tr>
<td width="14" valign="bottom">
<img src="images/error_01.gif" width=14 height=14 ALT=""></td>
<td colspan=2 style="background-image:url(images/error_02.gif); background-repeat:repeat-x; height:13px; background-position:bottom;">&nbsp;</td>
<td width="13" valign="bottom">
<img src="images/error_03.gif" width=13 height=14 ALT=""></td>
</tr>
<tr>
<td style="background-image:url(images/error_04.gif); background-repeat:repeat-y;">&nbsp;</td>
<td width="60" bgcolor="#FFFFFF" valign="top">
<img src="images/error_05.gif" width=60 height=57 ALT=""></td>
<td  valign="top" bgcolor="#FFFFFF"><b><?php echo $this->_tpl_vars['error']; ?>
</b></td>
<td style="background-image:url(images/error_07.gif); background-repeat:repeat-y;">&nbsp;			  </td>
</tr>
<tr>
<td valign="top">
<img src="images/error_08.gif" width=14 height=14 ALT=""></td>
<td colspan=2 style="background-image:url(images/error_09.gif); background-repeat:repeat-x;height:14px;">&nbsp;</td>
<td valign="top">
<img src="images/error_10.gif" width=13 height=14 ALT=""></td>
</tr>
</table><?php endif; ?>
<?php if ($this->_tpl_vars['msg'] != ''): ?>
<table width="50%" align="center" cellpadding="0" cellspacing="0" style="float:left;">
<tr>
<td width="14" valign="bottom">
<img src="images/error_01.gif" width=14 height=14 ALT=""></td>
<td colspan=2 style="background-image:url(images/error_02.gif); background-repeat:repeat-x; height:13px; background-position:bottom;">&nbsp;</td>
<td width="13" valign="bottom">
<img src="images/error_03.gif" width=13 height=14 ALT=""></td>
</tr>
<tr>
<td style="background-image:url(images/error_04.gif); background-repeat:repeat-y;">&nbsp;</td>
<td width="60" bgcolor="#FFFFFF" valign="top">
<img src="images/okgreen.gif" width=60 height=57 ALT=""></td>
<td valign="top" bgcolor="#FFFFFF"><b><?php echo $this->_tpl_vars['msg']; ?>
</b></td>
<td style="background-image:url(images/error_07.gif); background-repeat:repeat-y;">&nbsp;			  </td>
</tr>
<tr>
<td valign="top">
<img src="images/error_08.gif" width=14 height=14 ALT=""></td>
<td colspan=2 style="background-image:url(images/error_09.gif); background-repeat:repeat-x;height:14px;">&nbsp;</td>
<td valign="top">
<img src="images/error_10.gif" width=13 height=14 ALT=""></td>
</tr>
</table><?php endif; ?>
<table width="100%" border="0" cellspacing="2" cellpadding="2" align="center"  style="float:left;">
<tr>
<td colspan="3" valign="top" class="mainHeadingTxt"><strong><div class="form_heading_1">Trip Information</div></strong></td>
</tr>
<tr>
<td valign="top" class="labelX"><strong>Select Trip type :</strong></td>
<td valign="top">
<select name="triptype"  class="txt_box required" id="triptype" onchange="return chTrip(this.value);" >
<option value="One Way" 	<?php if ($this->_tpl_vars['triptype'] == 'One Way'): ?>selected<?php endif; ?>>One Way--(1 Destination)</option>
<option value="Round Trip" 	<?php if ($this->_tpl_vars['triptype'] == 'Round Trip'): ?>selected<?php endif; ?>>Two Way--(2 Destinations)</option>
<option value="Three Way" 	<?php if ($this->_tpl_vars['triptype'] == 'Three Way'): ?>selected<?php endif; ?>>Three Way--(3 Destinations)</option>
<option value="Four Way" 	<?php if ($this->_tpl_vars['triptype'] == 'Four Way'): ?>selected<?php endif; ?>>Four Way--(4 Destinations)</option>
<option value="Five Way" 	<?php if ($this->_tpl_vars['triptype'] == 'Five Way'): ?>selected<?php endif; ?>>Five Way--(5 Destinations)</option>
</select>			  </td>
<td valign="top">&nbsp;</td>
</tr>  
<tr>
<td valign="top" class="labelX" ><strong>Vehicle Preferences  :</strong></td>
<td colspan="2" valign="top">
<select name="vehtype" class="txt_box" id="vehtype" tabindex="2" >
<option value="">Select</option>
<?php unset($this->_sections['q']);
$this->_sections['q']['name'] = 'q';
$this->_sections['q']['loop'] = is_array($_loop=$this->_tpl_vars['vehiclepref']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['q']['show'] = true;
$this->_sections['q']['max'] = $this->_sections['q']['loop'];
$this->_sections['q']['step'] = 1;
$this->_sections['q']['start'] = $this->_sections['q']['step'] > 0 ? 0 : $this->_sections['q']['loop']-1;
if ($this->_sections['q']['show']) {
    $this->_sections['q']['total'] = $this->_sections['q']['loop'];
    if ($this->_sections['q']['total'] == 0)
        $this->_sections['q']['show'] = false;
} else
    $this->_sections['q']['total'] = 0;
if ($this->_sections['q']['show']):

            for ($this->_sections['q']['index'] = $this->_sections['q']['start'], $this->_sections['q']['iteration'] = 1;
                 $this->_sections['q']['iteration'] <= $this->_sections['q']['total'];
                 $this->_sections['q']['index'] += $this->_sections['q']['step'], $this->_sections['q']['iteration']++):
$this->_sections['q']['rownum'] = $this->_sections['q']['iteration'];
$this->_sections['q']['index_prev'] = $this->_sections['q']['index'] - $this->_sections['q']['step'];
$this->_sections['q']['index_next'] = $this->_sections['q']['index'] + $this->_sections['q']['step'];
$this->_sections['q']['first']      = ($this->_sections['q']['iteration'] == 1);
$this->_sections['q']['last']       = ($this->_sections['q']['iteration'] == $this->_sections['q']['total']);
?>	
<option value="<?php echo $this->_tpl_vars['vehiclepref'][$this->_sections['q']['index']]['id']; ?>
" <?php if ($this->_tpl_vars['vehtype'] == $this->_tpl_vars['vehiclepref'][$this->_sections['q']['index']]['id']): ?>selected<?php endif; ?>><?php echo $this->_tpl_vars['vehiclepref'][$this->_sections['q']['index']]['vehtype']; ?>
</option>
<?php endfor; endif; ?>
</select>            </td>
</tr>	
<!--<tr>
<td valign="top" class="labelX" ><strong>Case Manager:</strong></td>
<td colspan="2" valign="top"><input name="casemanager1" type="text" class="txt_box chars" id="casemanager1" tabindex="3" value="<?php echo $this->_tpl_vars['casemanager1']; ?>
" maxlength="30" />&nbsp;<span class="SmallnoteTxt"></span></td>
<td></td>
</tr>		-->
<tr>
<td colspan="3" valign="top">&nbsp;</td>
</tr>         
<tr>
<td colspan="3" valign="top" ><strong><div class="form_heading_1">Patient Information</div></strong> </td>
</tr>
<tr>
<td valign="top"  class="labelX" ><strong>Patient Name:</strong></td>
<td valign="top"><input type="text" name="pname" id="pname" value="<?php echo $this->_tpl_vars['pname']; ?>
" class="txt_box required chars" tabindex="4" />&nbsp;<span class="SmallnoteTxt">*</span>           		  </td>
<td valign="top">&nbsp;</td>
</tr>
<!--<tr>
<td valign="top"  class="labelX" ><strong>Status:</strong></td>
<td valign="top"><select name="status"  class="txt_box required" id="status">
			    <option value="">- Select Status -</option>
				<option value="current" <?php if ($this->_tpl_vars['tripdata']['0']['status'] == 'current'): ?> selected="selected"<?php endif; ?>>Current</option>
                <option value="inactive" <?php if ($this->_tpl_vars['tripdata']['0']['status'] == 'inactive'): ?> selected="selected"<?php endif; ?>>Inactive</option>
			</select>&nbsp;<span class="SmallnoteTxt">*</span>           		  </td>
<td valign="top">&nbsp;</td>
</tr>-->
<tr>
<td valign="top"   class="labelX" ><strong>Date of Birth:</strong></td>
<td colspan="2" valign="top"><input type="text" name="dob" id="dob" value="<?php echo $this->_tpl_vars['dob']; ?>
" class="txt_box" tabindex="6" maxlength="15" /><span class="SmallnoteTxt">  e.g. yyyy-mm-dd</span>	</td>
<td></td>
</tr>
<tr>
<td valign="top"   class="labelX" ><strong>Patient Phone #:</strong></td>
<td colspan="2" valign="top"><input type="text" name="phnum" id="phnum" value="<?php echo $this->_tpl_vars['tripdata']['0']['phnum']; ?>
" class="txt_box required" maxlength="14" /></td>
<td></td>
</tr>
<tr>
<td valign="top"   class="labelX" ><strong>PO #:</strong></td>
<td colspan="2" valign="top"><input type="text" name="po" id="po" value="<?php echo $this->_tpl_vars['tripdata']['0']['po']; ?>
" class="txt_box " maxlength="54" /></td>
<td></td>
</tr>
<tr>
<td valign="top"   class="labelX" ><strong>Patient Weight:</strong></td>
<td colspan="2" valign="top"><input type="text" name="patient_weight" id="patient_weight" value="<?php echo $this->_tpl_vars['tripdata']['0']['patient_weight']; ?>
" class="txt_box required" maxlength="54" /> <span class="SmallnoteTxt">(Lbs)</span></td>
<td></td>
</tr>
<tr>
<tr>
<td colspan="3" valign="top" class="mainHeadingTxt"><strong><div class="form_heading_1">Appointment Information</div> </strong></td>
</tr>

<tr>
<td valign="top" class="labelX" ><strong>Appointment Type:</strong></td>
<td colspan="2">
<input type="text" name="appt_type" id="appt_type" value="<?php echo $this->_tpl_vars['tripdata']['0']['appt_type']; ?>
" />  &nbsp;<span class="SmallnoteTxt"></span></td>
<td></td></tr>
<tr>
<td valign="top" class="labelX" ><strong>Insurance Type:</strong></td>
<td colspan="2">
<input type="text" name="insurance_name" id="insurance_name" value="<?php echo $this->_tpl_vars['tripdata']['0']['insurance_name']; ?>
"  readonly="true"/>  &nbsp;<span class="SmallnoteTxt"></span>                                                </td>
<td></td></tr>



<tr>
<td valign="top" class="labelX" ><strong>Insurance ID:</strong></td>
<td colspan="2"> <input type="text" name="cisid" id="cisid" value="<?php echo $this->_tpl_vars['cisid']; ?>
" /> </td>
<td></td>
</tr>
<tr id="hidme">
<td  class="label" id="changeit"></td>	
<td colspan="2">
<input tabindex="21" type="text" name="cisid" id="cisid" value="<?php echo $this->_tpl_vars['cisid']; ?>
" class="txt_box required" />&nbsp;<span class="SmallnoteTxt">*</span>  
</td>
<input type="hidden" id="progtype" name="progtype" value="<?php echo $this->_tpl_vars['progtype']; ?>
">
</tr>
<tr>
<td valign="top" class="labelX" ><strong>Service Date:</strong></td>
<td colspan="2"><input type="text" readonly="true" name="appdate" id="appdate" value="<?php echo $this->_tpl_vars['appdate']; ?>
" class="txt_box required" tabindex="23"   />                
<span class="SmallnoteTxt">*  e.g. yyyy-mm-dd</span></td>
</tr>
<?php echo '<script>
function time(id){
var ptime = document.getElementById(id).value;
var hours = ptime.split(\':\');
var hour = hours[0];
var minut = hours[1];
if(hour >23 || minut >59) 
{
alert(\'Please enter correct Pick Up Time!\');
apptime =document.getElementById(id);
apptime.value = "";	
return false }
}
function time1(){
var ptime = document.getElementById("returnpickup").value;
//var mad = document.getElementById("am_pm1").value;
var hours = ptime.split(\':\');
var hour = hours[0];
var minut = hours[1];
if(hour >12 || minut >59) 
{
alert(\'Please enter correct Return Pick Up Time!\');
returnpickup =document.getElementById("returnpickup");
returnpickup.value = "";	
return false }
}
</script>'; ?>

<tr><td valign="top" class="labelX" ><strong>Appointment Time: </strong></td>
<td colspan="2"><input type="text" name="org_apptime" id="org_apptime" value="<?php echo $this->_tpl_vars['tripdata']['0']['org_apptime']; ?>
" class="txt_box" maxlength="5" tabindex="24" onblur="javascript:time(this.id)" />&nbsp;&nbsp;
<span class="SmallnoteTxt">&nbsp;</span></td></tr>

<tr><td valign="top" class="labelX" ><strong>Pick up Time: </strong></td>
<td colspan="2"><input type="text" name="apptime" id="apptime" value="<?php echo $this->_tpl_vars['apptime']; ?>
" class="txt_box required" maxlength="5" tabindex="24" onblur="javascript:time(this.id)" />&nbsp;&nbsp;
<!--<select class="required" name="p_mad" id="p_mad" tabindex="" >
<option value="<?php echo $this->_tpl_vars['p_mad']; ?>
" <?php if ($this->_tpl_vars['p_mad'] == 'am'): ?> selected <?php endif; ?> >am</option>
<option value="<?php echo $this->_tpl_vars['p_mad']; ?>
" <?php if ($this->_tpl_vars['p_mad'] == 'pm'): ?> selected <?php endif; ?> >pm</option>
</select>--><span class="SmallnoteTxt">&nbsp;*</span></td></tr>
<?php if ($this->_tpl_vars['triptype'] == 'Four Way' || $this->_tpl_vars['triptype'] == 'Five Way' || $this->_tpl_vars['triptype'] == 'Three Way' || $this->_tpl_vars['triptype'] == 'Round Trip'): ?>
<tr id="rpu">
<td valign="top" class="labelX" ><strong>Return Pickup Option:</br> <span class="SmallnoteTxt"> (For Last Destination)</span></strong></td>
<td colspan="2">
<select name="puchoice" id="puchoice" class="SelectBox required" onchange="return pUchoice(this.value);" tabindex="25">
<option value="" <?php if ($this->_tpl_vars['pickupchoice'] == ''): ?>selected<?php endif; ?>>Select</option>
<option value="Will Call" <?php if ($this->_tpl_vars['pickupchoice'] == 'Will Call'): ?>selected<?php endif; ?>>Will Call</option>
<option value="Time" <?php if ($this->_tpl_vars['pickupchoice'] == 'Time'): ?>selected<?php endif; ?>>Time</option>
</select>	 
&nbsp;<span class="SmallnoteTxt">*</span></span></td>
</tr>
<tr id="rpTime" <?php if ($this->_tpl_vars['pickupchoice'] != 'Time' || $this->_tpl_vars['pickupchoice'] == 'Will Call'): ?> style="display:none;" <?php endif; ?>>
<td valign="top" class="labelX" ><strong>Return Pickup Time: </strong></td>
<td colspan="2"><input type="text" name="returnpickup" id="returnpickup" value="<?php echo $this->_tpl_vars['returnpickup']; ?>
" tabindex="26" class="txt_box required" maxlength="5" onblur="javascript:time(this.id)" />&nbsp;&nbsp;
<!--<select class="required" name="r_mad" id="r_mad" tabindex="" >
<option value="<?php echo $this->_tpl_vars['r_mad']; ?>
" <?php if ($this->_tpl_vars['r_mad'] == 'am'): ?> selected <?php endif; ?> >am</option>
<option value="<?php echo $this->_tpl_vars['r_mad']; ?>
" <?php if ($this->_tpl_vars['r_mad'] == 'pm'): ?> selected <?php endif; ?> >pm</option>
</select>--><span class="SmallnoteTxt">&nbsp;*</span>
</td>
</tr>	
<?php endif; ?>
<tr>
<td valign="top" class="labelX" ><strong>Today Date:</strong></td>
<td valign="top"><input type="text" name="todaydate" id="todaydate" value='<?php echo ((is_array($_tmp=time())) ? $this->_run_mod_handler('date_format', true, $_tmp) : smarty_modifier_date_format($_tmp)); ?>
' class="txt_box required" readonly  tabindex="27"  /></td>
<td valign="top">&nbsp;</td>
</tr>
<tr>
<td valign="top" class="labelX" ><strong>Comments:</strong></td>
<td valign="top"><textarea name="comments" cols="60" rows="5" id="comments" tabindex="28" style="width:300px;"  ><?php echo $this->_tpl_vars['comments']; ?>
</textarea></td>
<td valign="top">&nbsp;</td>
</tr>
<tr>
<td colspan="3" valign="top"><strong><div class="form_heading_1">Pick Address</div> </strong></td>
</tr>
<tr>
<td valign="top"   class="labelX" ><strong>Pick up address:</strong></td>
<td width="47%"><input type="text" name="pickaddress" id="pickaddress" value="<?php echo $this->_tpl_vars['pickaddress']; ?>
" class="txt_box required"  tabindex="8" onfocus="$('#casemanager1').val($('#casemanager2').val());"    />&nbsp;<span class="SmallnoteTxt">*</span></td>
<td width="16%">&nbsp;</td>
</tr>
<!--<tr><td class="labelX">ROOM/APT:</td>
<td><input type="text" name="roomapt" id="roomapt" value="<?php echo $this->_tpl_vars['roomapt']; ?>
"  class="txt_box"  maxlength="150" />&nbsp;<span class="SmallnoteTxt"></span></td>
<td></td>
</tr>-->
<tr>
<td valign="top"   class="labelX" ><span class="label">City:</span></td>
<td><input type="text" name="pckcity" id="pckcity"  class="txt_box  required chars" value="<?php echo $this->_tpl_vars['pckcity']; ?>
" maxlength="20" tabindex="9" />
                   <span class="SmallnoteTxt">*</span></td>
<td>&nbsp;</td>
</tr>
<tr>
<td valign="top"   class="labelX" ><span >State:</span></td>
<td><select name="pckstate" id="pckstate"  class="txt_box required" tabindex="10"> 
<option value="">Select</option>
<?php unset($this->_sections['n']);
$this->_sections['n']['name'] = 'n';
$this->_sections['n']['loop'] = is_array($_loop=$this->_tpl_vars['states']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['n']['show'] = true;
$this->_sections['n']['max'] = $this->_sections['n']['loop'];
$this->_sections['n']['step'] = 1;
$this->_sections['n']['start'] = $this->_sections['n']['step'] > 0 ? 0 : $this->_sections['n']['loop']-1;
if ($this->_sections['n']['show']) {
    $this->_sections['n']['total'] = $this->_sections['n']['loop'];
    if ($this->_sections['n']['total'] == 0)
        $this->_sections['n']['show'] = false;
} else
    $this->_sections['n']['total'] = 0;
if ($this->_sections['n']['show']):

            for ($this->_sections['n']['index'] = $this->_sections['n']['start'], $this->_sections['n']['iteration'] = 1;
                 $this->_sections['n']['iteration'] <= $this->_sections['n']['total'];
                 $this->_sections['n']['index'] += $this->_sections['n']['step'], $this->_sections['n']['iteration']++):
$this->_sections['n']['rownum'] = $this->_sections['n']['iteration'];
$this->_sections['n']['index_prev'] = $this->_sections['n']['index'] - $this->_sections['n']['step'];
$this->_sections['n']['index_next'] = $this->_sections['n']['index'] + $this->_sections['n']['step'];
$this->_sections['n']['first']      = ($this->_sections['n']['iteration'] == 1);
$this->_sections['n']['last']       = ($this->_sections['n']['iteration'] == $this->_sections['n']['total']);
?>
<option value="<?php echo $this->_tpl_vars['states'][$this->_sections['n']['index']]['abbr']; ?>
" <?php if ($this->_tpl_vars['states'][$this->_sections['n']['index']]['abbr'] == $this->_tpl_vars['pckstate']): ?> selected="selected"<?php endif; ?> >
<?php echo $this->_tpl_vars['states'][$this->_sections['n']['index']]['statename']; ?>

</option>
<?php endfor; endif; ?>
</select>
                  <span class="SmallnoteTxt">*</span></td>
<td>&nbsp;</td>
</tr>
<tr>
<td valign="top"  class="labelX" ><span class="label">Zip Code:</span></td>
<td><input type="text" name="pckzip" id="pckzip" class="txt_box" value="<?php echo $this->_tpl_vars['pckzip']; ?>
" maxlength="10"   tabindex="11"/>
                     <span class="SmallnoteTxt">*</span></td>
<td>&nbsp;</td>
</tr>
<tr>
<td valign="top" class="labelX" ><strong>Pick Up Instructions:</strong></td>
<td valign="top"><textarea name="pickup_instruction" cols="60" rows="5" id="pickup_instruction" tabindex="28" style="width:300px;"  ><?php echo $this->_tpl_vars['tripdata']['0']['pickup_instruction']; ?>
</textarea></td>
<td valign="top">&nbsp;</td>
</tr>

<tr>
<td colspan="3" valign="top"><strong><div class="form_heading_1">First Destination Address</div> </strong></td>
</tr>

<tr>
<td width="37%" valign="top"  class="labelX" ><strong>Destination Address:<br/><span class="SmallnoteTxt"></span></strong></td>
<td colspan="2"><input type="text" name="destination" id="destination" value="<?php echo $this->_tpl_vars['destination']; ?>
"  class="txt_box" tabindex="12"  />&nbsp;<span class="SmallnoteTxt">*</span></td>
</tr>
<!--<tr>
<td class="labelX">STE/BLDG:</td>
<td><input  type="text" name="stebldg" id="stebldg" value="<?php echo $this->_tpl_vars['stebldg']; ?>
"  class="txt_box"  maxlength="150" />&nbsp;<span class="SmallnoteTxt"></span></td>
<td></td>
</tr>
--><tr>
<td valign="top"  class="labelX" ><span class="label">City:</span></td>
<td colspan="2"><input type="text" name="drpcity" value="<?php echo $this->_tpl_vars['drpcity']; ?>
" id="drpcity" class="txt_box required chars" maxlength="20" tabindex="13" />
                    <span class="SmallnoteTxt">*</span></td>
</tr>
<tr>
<td valign="top"  class="labelX" ><span class="label">State:</span></td>
<td colspan="2"><select name="drpstate" id="drpstate" class="txt_box required" tabindex="14">
<option value="">Select</option>
<?php unset($this->_sections['n']);
$this->_sections['n']['name'] = 'n';
$this->_sections['n']['loop'] = is_array($_loop=$this->_tpl_vars['states']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['n']['show'] = true;
$this->_sections['n']['max'] = $this->_sections['n']['loop'];
$this->_sections['n']['step'] = 1;
$this->_sections['n']['start'] = $this->_sections['n']['step'] > 0 ? 0 : $this->_sections['n']['loop']-1;
if ($this->_sections['n']['show']) {
    $this->_sections['n']['total'] = $this->_sections['n']['loop'];
    if ($this->_sections['n']['total'] == 0)
        $this->_sections['n']['show'] = false;
} else
    $this->_sections['n']['total'] = 0;
if ($this->_sections['n']['show']):

            for ($this->_sections['n']['index'] = $this->_sections['n']['start'], $this->_sections['n']['iteration'] = 1;
                 $this->_sections['n']['iteration'] <= $this->_sections['n']['total'];
                 $this->_sections['n']['index'] += $this->_sections['n']['step'], $this->_sections['n']['iteration']++):
$this->_sections['n']['rownum'] = $this->_sections['n']['iteration'];
$this->_sections['n']['index_prev'] = $this->_sections['n']['index'] - $this->_sections['n']['step'];
$this->_sections['n']['index_next'] = $this->_sections['n']['index'] + $this->_sections['n']['step'];
$this->_sections['n']['first']      = ($this->_sections['n']['iteration'] == 1);
$this->_sections['n']['last']       = ($this->_sections['n']['iteration'] == $this->_sections['n']['total']);
?>
<option value="<?php echo $this->_tpl_vars['states'][$this->_sections['n']['index']]['abbr']; ?>
" <?php if ($this->_tpl_vars['states'][$this->_sections['n']['index']]['abbr'] == $this->_tpl_vars['drpstate']): ?> selected="selected"<?php endif; ?>>
<?php echo $this->_tpl_vars['states'][$this->_sections['n']['index']]['statename']; ?>

</option>
<?php endfor; endif; ?>
</select>
                    <span class="SmallnoteTxt">*</span></td>
</tr>
<tr>
<td valign="top"  class="labelX" ><span class="label">Zip Code: </span></td>
<td colspan="2"><input maxlength="10" tabindex="15" type="text" name="drpzip" value="<?php echo $this->_tpl_vars['drpzip']; ?>
" id="drpzip" class="txt_box"/>
                   <span class="SmallnoteTxt">*</span></td>
</tr>
<!--<tr>
                      <td class="labelX">Patient Phone Number:</td>
<td><input type="text" name="d_phnum" id="d_phnum" value="<?php echo $this->_tpl_vars['d_phnum']; ?>
" class="txt_box " maxlength="14" tabindex="4"/>&nbsp;<span class="SmallnoteTxt"></span></td>
                      <td></td>
                  </tr>-->
                  
<?php if ($this->_tpl_vars['triptype'] == 'Four Way' || $this->_tpl_vars['triptype'] == 'Five Way' || $this->_tpl_vars['triptype'] == 'Three Way' || $this->_tpl_vars['triptype'] == ''): ?> <?php endif; ?>
            <tr id="three0" style="display:none"><td class="form_heading_1" colspan="3">Second Destination</td></tr>
  <tr id="three1" style="display:none"><td class="labelX">Pick Time:</td><td colspan="2"><input type="text" name="three_pickup" id="three_pickup" value="<?php echo $this->_tpl_vars['three_pickup']; ?>
"  class="txt_box " maxlength="5" onblur="javascript:time(this.id)" />&nbsp;&nbsp;<!--<select class="" name="am_pm3" id="am_pm3"  >
<option value="">--</option>
<option value="am" <?php if ($this->_tpl_vars['am_pm3'] == 'am'): ?> selected="selected" <?php endif; ?>>am</option>
<option value="pm" <?php if ($this->_tpl_vars['am_pm3'] == 'pm'): ?> selected="selected" <?php endif; ?>>pm</option>
</select>
<span class="SmallnoteTxt">*</span>-->&nbsp;Will Call&nbsp;<input type="checkbox" name="three_will_call" id="three_will_call" onclick="check_check3();" <?php if ($this->_tpl_vars['three_will_call'] == 'on'): ?> checked="checked" <?php endif; ?> /></td></tr>

<!--<tr id="three6" style="display:none">
           	<td class="labelX" >Destination (Place):<br/></td>
<td><input name="destination_place3" type="text"  class="txt_box " id="destination_place3" value="<?php echo $this->_tpl_vars['destination_place3']; ?>
" maxlength="150" />&nbsp;</td>
<td></td></tr>
<tr id="three7" style="display:none">
           	<td class="labelX" >STE/BLDG:<br/></td>
<td><input name="stebldg3" type="text"  class="txt_box " id="stebldg3" value="<?php echo $this->_tpl_vars['stebldg3']; ?>
" maxlength="150" />&nbsp;</td>
<td></td></tr>-->

            <tr id="three2" style="display:none">
           	<td class="labelX"   class="labelX" >Address:<br/></td>
<td><input name="three_address" type="text"  class="txt_box " id="three_address" value="<?php echo $this->_tpl_vars['three_address']; ?>
" maxlength="150" />&nbsp;</td>
<td></td></tr>
 <tr id="three3" style="display:none" ><td class="labelX" >City:</td>
  <td><input name="three_city" type="text"  class="txt_box" id="three_city" value="<?php echo $this->_tpl_vars['three_city']; ?>
" maxlength="150"/>&nbsp;<span class="SmallnoteTxt">*</span></td><td></td></tr>
                                                    
    <tr id="three4" style="display:none"> 	<td class="labelX" >State:</td>
<td><select id="three_state" name="three_state"  class="txt_box " />
   <option value="">Select</option><?php unset($this->_sections['n']);
$this->_sections['n']['name'] = 'n';
$this->_sections['n']['loop'] = is_array($_loop=$this->_tpl_vars['states']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['n']['show'] = true;
$this->_sections['n']['max'] = $this->_sections['n']['loop'];
$this->_sections['n']['step'] = 1;
$this->_sections['n']['start'] = $this->_sections['n']['step'] > 0 ? 0 : $this->_sections['n']['loop']-1;
if ($this->_sections['n']['show']) {
    $this->_sections['n']['total'] = $this->_sections['n']['loop'];
    if ($this->_sections['n']['total'] == 0)
        $this->_sections['n']['show'] = false;
} else
    $this->_sections['n']['total'] = 0;
if ($this->_sections['n']['show']):

            for ($this->_sections['n']['index'] = $this->_sections['n']['start'], $this->_sections['n']['iteration'] = 1;
                 $this->_sections['n']['iteration'] <= $this->_sections['n']['total'];
                 $this->_sections['n']['index'] += $this->_sections['n']['step'], $this->_sections['n']['iteration']++):
$this->_sections['n']['rownum'] = $this->_sections['n']['iteration'];
$this->_sections['n']['index_prev'] = $this->_sections['n']['index'] - $this->_sections['n']['step'];
$this->_sections['n']['index_next'] = $this->_sections['n']['index'] + $this->_sections['n']['step'];
$this->_sections['n']['first']      = ($this->_sections['n']['iteration'] == 1);
$this->_sections['n']['last']       = ($this->_sections['n']['iteration'] == $this->_sections['n']['total']);
?>
   <option value="<?php echo $this->_tpl_vars['states'][$this->_sections['n']['index']]['abbr']; ?>
" <?php if ($this->_tpl_vars['states'][$this->_sections['n']['index']]['abbr'] == $this->_tpl_vars['three_state']): ?> selected="selected" <?php endif; ?>>
			   <?php echo $this->_tpl_vars['states'][$this->_sections['n']['index']]['statename']; ?>
 </option> <?php endfor; endif; ?> </select> &nbsp;<span class="SmallnoteTxt">*</span></td><td></td> </tr>								
     <tr id="three5" style="display:none" ><td class="labelX" >Zip Code:</td>
     <td><input name="three_zip" type="text"  class="txt_box " id="three_zip" value="<?php echo $this->_tpl_vars['three_zip']; ?>
" maxlength="10" />&nbsp;<span class="SmallnoteTxt">* e.g. 12345-6789</span></td><td></td></tr>
      
                                                    
                       <?php if ($this->_tpl_vars['triptype'] == 'Four Way' || $this->_tpl_vars['triptype'] == 'Five Way' || $this->_tpl_vars['triptype'] == ''):  endif; ?> 
   <tr id="four0" style="display:none"><td class="form_heading_1" colspan="3">Third Destination</td></tr>
   <tr id="four1" style="display:none"><td class="labelX">Pick Time: </td><td colspan="2"><input type="text" name="four_pickup" id="four_pickup" value="<?php echo $this->_tpl_vars['four_pickup']; ?>
"  class="txt_box " maxlength="5" onblur="javascript:time(this.id)" />&nbsp;&nbsp;<!--<select class="" name="am_pm4" id="am_pm4"  >
   <option value="">--</option>
<option value="am" <?php if ($this->_tpl_vars['am_pm4'] == 'am'): ?> selected="selected" <?php endif; ?>>am</option>
<option value="pm" <?php if ($this->_tpl_vars['am_pm4'] == 'pm'): ?> selected="selected" <?php endif; ?>>pm</option>
</select>
<span class="SmallnoteTxt">*</span>&nbsp;-->Will Call&nbsp;<input type="checkbox" name="four_will_call" id="four_will_call" onclick="check_check4();" <?php if ($this->_tpl_vars['four_will_call'] == 'on'): ?> checked="checked" <?php endif; ?>/></td></tr>
<!--
<tr id="four6" style="display:none">
           	<td class="labelX" >Destination (Place):<br/></td>
<td><input name="destination_place4" type="text"  class="txt_box " id="destination_place4" value="<?php echo $this->_tpl_vars['destination_place4']; ?>
" maxlength="150" />&nbsp;</td>
<td></td></tr>
<tr id="four7" style="display:none">
           	<td class="labelX" >STE/BLDG:<br/></td>
<td><input name="stebldg4" type="text"  class="txt_box " id="stebldg4" value="<?php echo $this->_tpl_vars['stebldg4']; ?>
" maxlength="150" />&nbsp;</td>
<td></td></tr>-->


            <tr id="four2" style="display:none">
           	<td class="labelX" >Address:<br/></td>
<td><input name="four_address" type="text"  class="txt_box " id="four_address" value="<?php echo $this->_tpl_vars['four_address']; ?>
" maxlength="150" />&nbsp;</td>
<td></td></tr>
 <tr id="four3" style="display:none" ><td class="labelX" >City:</td>
  <td><input name="four_city" type="text"  class="txt_box" id="four_city" value="<?php echo $this->_tpl_vars['four_city']; ?>
" maxlength="150"/>&nbsp;<span class="SmallnoteTxt">*</span></td><td></td></tr>
                                                    
    <tr id="four4" style="display:none"> 	<td class="labelX" >State:</td>
<td><select id="four_state" name="four_state"  class="txt_box " />
   <option value="">Select</option><?php unset($this->_sections['n']);
$this->_sections['n']['name'] = 'n';
$this->_sections['n']['loop'] = is_array($_loop=$this->_tpl_vars['states']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['n']['show'] = true;
$this->_sections['n']['max'] = $this->_sections['n']['loop'];
$this->_sections['n']['step'] = 1;
$this->_sections['n']['start'] = $this->_sections['n']['step'] > 0 ? 0 : $this->_sections['n']['loop']-1;
if ($this->_sections['n']['show']) {
    $this->_sections['n']['total'] = $this->_sections['n']['loop'];
    if ($this->_sections['n']['total'] == 0)
        $this->_sections['n']['show'] = false;
} else
    $this->_sections['n']['total'] = 0;
if ($this->_sections['n']['show']):

            for ($this->_sections['n']['index'] = $this->_sections['n']['start'], $this->_sections['n']['iteration'] = 1;
                 $this->_sections['n']['iteration'] <= $this->_sections['n']['total'];
                 $this->_sections['n']['index'] += $this->_sections['n']['step'], $this->_sections['n']['iteration']++):
$this->_sections['n']['rownum'] = $this->_sections['n']['iteration'];
$this->_sections['n']['index_prev'] = $this->_sections['n']['index'] - $this->_sections['n']['step'];
$this->_sections['n']['index_next'] = $this->_sections['n']['index'] + $this->_sections['n']['step'];
$this->_sections['n']['first']      = ($this->_sections['n']['iteration'] == 1);
$this->_sections['n']['last']       = ($this->_sections['n']['iteration'] == $this->_sections['n']['total']);
?>         
         <option value="<?php echo $this->_tpl_vars['states'][$this->_sections['n']['index']]['abbr']; ?>
" <?php if ($this->_tpl_vars['states'][$this->_sections['n']['index']]['abbr'] == $this->_tpl_vars['four_state']): ?>selected<?php endif; ?>>
	<?php echo $this->_tpl_vars['states'][$this->_sections['n']['index']]['statename']; ?>
 </option> <?php endfor; endif; ?> </select> &nbsp;<span class="SmallnoteTxt">*</span></td><td></td> </tr>								
     <tr id="four5" style="display:none" ><td class="labelX" >Zip Code:</td>
     <td><input name="four_zip" type="text"  class="txt_box " id="four_zip" value="<?php echo $this->_tpl_vars['four_zip']; ?>
" maxlength="10" />&nbsp;<span class="SmallnoteTxt">* e.g. 12345-6789</span></td><td></td></tr>
      
                                                    
                                                    <?php if ($this->_tpl_vars['triptype'] == 'Five Way' || $this->_tpl_vars['triptype'] == ''): ?> <?php endif; ?>
            <tr id="five0" style="display:none"><td class="form_heading_1" colspan="3">Fourth Destination</td></tr>
   <tr id="five1" style="display:none"><td class="labelX">Pick Time: </td><td colspan="2"><input type="text" name="five_pickup" id="five_pickup" value="<?php echo $this->_tpl_vars['five_pickup']; ?>
"  class="txt_box " maxlength="5" onblur="javascript:time(this.id)" />&nbsp;&nbsp;<!--<select class="" name="am_pm5" id="am_pm5"  >
   <option value="">--</option>
<option value="am" <?php if ($this->_tpl_vars['am_pm5'] == 'am'): ?> selected="selected" <?php endif; ?>>am</option>
<option value="pm" <?php if ($this->_tpl_vars['am_pm5'] == 'pm'): ?> selected="selected" <?php endif; ?>>pm</option>
</select>
<span class="SmallnoteTxt">*</span>&nbsp;-->Will Call&nbsp;<input type="checkbox" name="five_will_call" id="five_will_call" onclick="check_check5();" <?php if ($this->_tpl_vars['five_will_call'] == 'on'): ?> checked="checked" <?php endif; ?> /></td></tr>
<!--
<tr id="five6" style="display:none">
           	<td class="labelX" >Destination (Place):<br/></td>
<td><input name="destination_place5" type="text"  class="txt_box " id="destination_place5" value="<?php echo $this->_tpl_vars['destination_place5']; ?>
" maxlength="150" />&nbsp;</td>
<td></td></tr>
<tr id="five7" style="display:none">
           	<td class="labelX" >STE/BLDG:<br/></td>
<td><input name="stebldg5" type="text"  class="txt_box " id="stebldg5" value="<?php echo $this->_tpl_vars['stebldg5']; ?>
" maxlength="150" />&nbsp;</td>
<td></td></tr>
-->
            <tr id="five2" style="display:none">
           	<td class="labelX" >Address:<br/></td>
<td><input name="five_address" type="text"  class="txt_box " id="five_address" value="<?php echo $this->_tpl_vars['five_address']; ?>
" maxlength="150" />&nbsp;</td>
<td></td></tr>
 <tr id="five3" style="display:none" ><td class="labelX" >City:</td>
  <td><input name="five_city" type="text"  class="txt_box" id="five_city" value="<?php echo $this->_tpl_vars['five_city']; ?>
" maxlength="150"/>&nbsp;<span class="SmallnoteTxt">*</span></td><td></td></tr>
                                                    
    <tr id="five4" style="display:none"> 	<td class="labelX" >State:</td>
<td><select id="five_state" name="five_state"  class="txt_box " />
   <option value="">Select</option><?php unset($this->_sections['n']);
$this->_sections['n']['name'] = 'n';
$this->_sections['n']['loop'] = is_array($_loop=$this->_tpl_vars['states']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['n']['show'] = true;
$this->_sections['n']['max'] = $this->_sections['n']['loop'];
$this->_sections['n']['step'] = 1;
$this->_sections['n']['start'] = $this->_sections['n']['step'] > 0 ? 0 : $this->_sections['n']['loop']-1;
if ($this->_sections['n']['show']) {
    $this->_sections['n']['total'] = $this->_sections['n']['loop'];
    if ($this->_sections['n']['total'] == 0)
        $this->_sections['n']['show'] = false;
} else
    $this->_sections['n']['total'] = 0;
if ($this->_sections['n']['show']):

            for ($this->_sections['n']['index'] = $this->_sections['n']['start'], $this->_sections['n']['iteration'] = 1;
                 $this->_sections['n']['iteration'] <= $this->_sections['n']['total'];
                 $this->_sections['n']['index'] += $this->_sections['n']['step'], $this->_sections['n']['iteration']++):
$this->_sections['n']['rownum'] = $this->_sections['n']['iteration'];
$this->_sections['n']['index_prev'] = $this->_sections['n']['index'] - $this->_sections['n']['step'];
$this->_sections['n']['index_next'] = $this->_sections['n']['index'] + $this->_sections['n']['step'];
$this->_sections['n']['first']      = ($this->_sections['n']['iteration'] == 1);
$this->_sections['n']['last']       = ($this->_sections['n']['iteration'] == $this->_sections['n']['total']);
?>
   <option value="<?php echo $this->_tpl_vars['states'][$this->_sections['n']['index']]['abbr']; ?>
" <?php if ($this->_tpl_vars['states'][$this->_sections['n']['index']]['abbr'] == $this->_tpl_vars['five_state']): ?>selected<?php endif; ?>>
			   <?php echo $this->_tpl_vars['states'][$this->_sections['n']['index']]['statename']; ?>
 </option>
   
   <?php endfor; endif; ?> </select>&nbsp;<span class="SmallnoteTxt">*</span></td><td></td> </tr>								
     <tr id="five5" style="display:none" ><td class="labelX" >Zip Code:</td>
     <td><input name="five_zip" type="text"  class="txt_box " id="five_zip" value="<?php echo $this->_tpl_vars['five_zip']; ?>
" maxlength="10" />&nbsp;<span class="SmallnoteTxt">* e.g. 12345-6789</span></td><td></td></tr>
 						
 <?php if ($this->_tpl_vars['triptype'] == 'Four Way' || $this->_tpl_vars['triptype'] == 'Five Way' || $this->_tpl_vars['triptype'] == 'Three Way' || $this->_tpl_vars['triptype'] == '' || $this->_tpl_vars['triptype'] == 'Round Trip'): ?> 
                 <tr id="b0" style="display:none"><td class="form_heading_1" colspan="3">Last Destination</td></tr>
            <tr id="b1" style="display:none" >
           	<td class="labelX"  >Back To Address:<br/></td>
<td><input name="backto" type="text"  class="txt_box " id="backto" value="<?php echo $this->_tpl_vars['backto']; ?>
" maxlength="150" />&nbsp;<span class="SmallnoteTxt">*</span></td><td></td></tr>
 <tr id="b2" style="display:none" >    	<td class="labelX" >Back To City:</td>
            <td><input name="backtocity" type="text"  class="txt_box " id="backtocity" value="<?php echo $this->_tpl_vars['backtocity']; ?>
" maxlength="150"/>&nbsp;<span class="SmallnoteTxt">*</span></td>
                                                    <td></td></tr>
    <tr id="b3" style="display:none"> 	<td class="labelX" >Back To State:</td>
<td><select id="backtostate" name="backtostate"  class="txt_box" />
   <option value="">Select</option><?php unset($this->_sections['n']);
$this->_sections['n']['name'] = 'n';
$this->_sections['n']['loop'] = is_array($_loop=$this->_tpl_vars['states']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['n']['show'] = true;
$this->_sections['n']['max'] = $this->_sections['n']['loop'];
$this->_sections['n']['step'] = 1;
$this->_sections['n']['start'] = $this->_sections['n']['step'] > 0 ? 0 : $this->_sections['n']['loop']-1;
if ($this->_sections['n']['show']) {
    $this->_sections['n']['total'] = $this->_sections['n']['loop'];
    if ($this->_sections['n']['total'] == 0)
        $this->_sections['n']['show'] = false;
} else
    $this->_sections['n']['total'] = 0;
if ($this->_sections['n']['show']):

            for ($this->_sections['n']['index'] = $this->_sections['n']['start'], $this->_sections['n']['iteration'] = 1;
                 $this->_sections['n']['iteration'] <= $this->_sections['n']['total'];
                 $this->_sections['n']['index'] += $this->_sections['n']['step'], $this->_sections['n']['iteration']++):
$this->_sections['n']['rownum'] = $this->_sections['n']['iteration'];
$this->_sections['n']['index_prev'] = $this->_sections['n']['index'] - $this->_sections['n']['step'];
$this->_sections['n']['index_next'] = $this->_sections['n']['index'] + $this->_sections['n']['step'];
$this->_sections['n']['first']      = ($this->_sections['n']['iteration'] == 1);
$this->_sections['n']['last']       = ($this->_sections['n']['iteration'] == $this->_sections['n']['total']);
?>
   <option value="<?php echo $this->_tpl_vars['states'][$this->_sections['n']['index']]['abbr']; ?>
" <?php if ($this->_tpl_vars['states'][$this->_sections['n']['index']]['abbr'] == $this->_tpl_vars['backtostate']): ?>selected<?php endif; ?>>
			   <?php echo $this->_tpl_vars['states'][$this->_sections['n']['index']]['statename']; ?>
 </option>
   
   <?php endfor; endif; ?> </select>
                                                      <span class="SmallnoteTxt" >*</span></td><td></td> </tr>
			<tr id="b4" style="display:none" >
            <td class="labelX" >Back To Zip Code:</td>
     <td><input name="backtozip" type="text"  class="txt_box" id="backtozip" value="<?php echo $this->_tpl_vars['backtozip']; ?>
" maxlength="10" />&nbsp;<span class="SmallnoteTxt">* e.g. 12345-6789</span></td>
                                                    <td></td>
                                                </tr>
						<?php endif; ?>
                        
<tr>
            <td colspan="3" valign="top" class="form_heading_1"><strong>General Options</strong></td>
            </tr>
<!--<tr><td valign="top" class="labelX" ><strong>Driver Preference :</strong></td>
<td colspan="2"><input type="radio" name="driver" value="Male" <?php if ($this->_tpl_vars['tripdata']['0']['driver'] == 'Male'): ?> checked="checked"  <?php endif; ?>/>&nbsp;Male
<input type="radio" name="driver" value="Female" <?php if ($this->_tpl_vars['tripdata']['0']['driver'] == 'Female'): ?> checked="checked" <?php endif; ?>/>&nbsp;Female</td><td></td></tr>-->
<!--<tr><td valign="top" class="labelX" ><strong>Patient Sex :</strong></td>
<td colspan="2"><input type="radio" name="sex" value="Male" <?php if ($this->_tpl_vars['tripdata']['0']['sex'] == 'Male'): ?> checked="checked" <?php endif; ?>/>&nbsp;Male
<input type="radio" name="sex" value="Female" <?php if ($this->_tpl_vars['tripdata']['0']['sex'] == 'Female'): ?> checked="checked" <?php endif; ?>/>&nbsp;Female</td><td></td></tr>-->
<!--<tr><td valign="top" class="labelX" ><strong>Child Seat :</strong></td>
<td colspan="2"><input type="checkbox" name="childseat" value="Yes" <?php if ($this->_tpl_vars['tripdata']['0']['childseat'] == 'Yes'): ?> checked="checked" <?php endif; ?>/>&nbsp;Yes</td><td></td></tr>-->
<tr><td valign="top" class="labelX" ><strong>Escort :</strong></td>
<td colspan="2"><input type="checkbox" name="escort" value="Yes" <?php if ($this->_tpl_vars['tripdata']['0']['escort'] == 'Yes'): ?> checked="checked" <?php endif; ?>/>&nbsp;Yes</td><td></td></tr>
<tr><td valign="top" class="labelX" ><strong>Wheel Chair :</strong></td>
<td colspan="2"><input type="checkbox" name="wchair" value="Yes" <?php if ($this->_tpl_vars['tripdata']['0']['wchair'] == 'Yes'): ?> checked="checked" <?php endif; ?>/>&nbsp;Yes</td><td></td></tr>
<tr><td valign="top" class="labelX" ><strong>Stretcher :</strong></td>
<td colspan="2"><input type="checkbox" name="stretcher" value="Yes" <?php if ($this->_tpl_vars['tripdata']['0']['stretcher'] == 'Yes'): ?> checked="checked" <?php endif; ?>/>&nbsp;Yes</td><td></td></tr>
<tr><td valign="top" class="labelX" ><strong>Double Stretcher :</strong></td>
<td colspan="2"><input type="checkbox" name="dstretcher" value="Yes" <?php if ($this->_tpl_vars['tripdata']['0']['dstretcher'] == 'Yes'): ?> checked="checked" <?php endif; ?>/>&nbsp;Yes</td><td></td></tr>
<tr><td valign="top" class="labelX" ><strong>Bariatric Stretcher :</strong></td>
<td colspan="2"><input type="checkbox" name="bar_stretcher" value="Yes" <?php if ($this->_tpl_vars['tripdata']['0']['bar_stretcher'] == 'Yes'): ?> checked="checked" <?php endif; ?>/>&nbsp;Yes</td><td></td></tr>
<tr><td valign="top" class="labelX" ><strong>Double Wheel Chair :</strong></td>
<td colspan="2"><input type="checkbox" name="dwchair" value="Yes" <?php if ($this->_tpl_vars['tripdata']['0']['dwchair'] == 'Yes'): ?> checked="checked" <?php endif; ?>/>&nbsp;Yes</td><td></td></tr>
<tr><td valign="top" class="labelX" ><strong>Oxygen :</strong></td>
<td colspan="2"><input type="checkbox" name="oxygen" value="Yes" <?php if ($this->_tpl_vars['tripdata']['0']['oxygen'] == 'Yes'): ?> checked="checked" <?php endif; ?>/>&nbsp;Yes</td><td></td></tr>
<!--<tr><td valign="top" class="labelX" ><strong>Oxygen O<sub>2</sub> :</strong></td>
<td colspan="2"><input type="checkbox" name="oxygen" value="Yes" <?php if ($this->_tpl_vars['tripdata']['0']['oxygen'] == 'Yes'): ?> checked="checked" <?php endif; ?>/>&nbsp;Yes</td><td></td></tr>-->
              
      
<!--<tr>
<td valign="top"><strong>Services Required:</strong></td>
<td valign="top"><input type="checkbox" name="wcs" id="wcs" value="1" <?php if ($this->_tpl_vars['wcs'] > '0'): ?> checked="checked" <?php endif; ?> />&nbsp;Wheel Chair Standard<br /><input type="checkbox" name="sts" id="sts" value="2" <?php if ($this->_tpl_vars['sts'] > '0'): ?> checked="checked" <?php endif; ?> />&nbsp;Stretcher Standard<br /><input type="checkbox" name="stp" id="stp" value="3" <?php if ($this->_tpl_vars['stp'] > '0'): ?> checked="checked" <?php endif; ?> />&nbsp;Stretcher Special<br /><input type="checkbox" name="oxy" id="oxy" value="4" <?php if ($this->_tpl_vars['oxy'] > '0'): ?> checked="checked" <?php endif; ?> />&nbsp;Oxygen<br /><input type="checkbox" name="wcr" id="wcr" value="5" <?php if ($this->_tpl_vars['wcr'] > '0'): ?> checked="checked" <?php endif; ?> />&nbsp;Wheel Chair Rental</td>
<td valign="top">&nbsp;</td>
</tr>-->
<tr>
<td colspan="3" valign="top">&nbsp;</td>
</tr>	
<tr>
<td valign="top">&nbsp;</td>
<td colspan="2">
<input type="hidden" name="reqstatus" id="reqstatus" value="<?php echo $this->_tpl_vars['reqstatus']; ?>
" />	
<input type="submit" name="submit" value='Update' class="btn" tabindex="29"    />
<input type="reset" name="reset" value="Reset" class="btn"  tabindex="30"   />			  </td>
</tr>
</table>
        </div>
          <div class="form_bottom_curve"></div>
      </div>
  </div>
  <!--Request a trip Panel End Here-->
</div>
<!--Left panel End Here-->
</div></div>
<!--Body Container End Here-->
<!----></td>
</tr>
<tr><td>  <div class="content_bottom_img"> </div> </td></tr>
<tr><td height="9"></td></tr>
<tr>
<td>
<!--Footer Starts Here-->
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<!--Footer End Here-->
</td>
</tr>
</table>
</div>
<!--Inner Container End Here-->
</div>
</form>	
<?php echo '<script>chTrip(\'';  echo $this->_tpl_vars['triptype'];  echo '\'); check_check3(); check_check4(); check_check5();</script>'; ?>

<!--Main Container End Here-->
</body>
</html>