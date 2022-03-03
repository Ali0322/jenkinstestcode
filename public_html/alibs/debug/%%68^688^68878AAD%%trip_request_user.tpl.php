<?php /* Smarty version 2.6.12, created on 2014-08-06 07:56:43
         compiled from trip_request_user.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'date_format', 'trip_request_user.tpl', 1007, false),)), $this); ?>
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
.form_heading_1{ background:#0397ff; color:#fff; height:20px; font-size:11px; font-weight:bold; padding-left:8px; width:auto; padding-top:5px;}
.grid_content{color:#333333; padding:2px;}
.grid_icon{color:#333333; padding:2px;}
.txt_boxX{ width:130px; border:#999 1px solid; height:15px; background:#f4f4f4; font-size:10px;}
.accesslable{ font-size:10px;}
.labelX{ color:#202020; font-size:10px; font-weight:bold; width:155px;}
.appt_txtbox{ width:95px; height:20px; border: #999 1px solid;}
.btn_2{font-size:12px; background-color:#3C3F43;  text-align:center; border:none; width:150px; height:32px;  font-weight:bold; color:#FFF; padding:5px 0 5px 0; cursor:pointer;} 
.error{ font-family:Verdana, Geneva, sans-serif; color:#F00; font-size:10px;}
</style>
<script type="text/javascript">
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
function test2(){
if($(\'#sameadd2\').attr(\'checked\')){	
var v=$(\'#pickaddress\').val();
var x=$(\'#pckcity\').val();
var y=$(\'#pckzip\').val();
var z=$(\'#pckstate\').val();
    $(\'#b_address\').val(v);
    $(\'#b_city\').val(x);
	$(\'#b_zip\').val(y);
	$(\'#b_state\').val(z); } 
	else { 
	$(\'#b_address\').val(\'\');
    $(\'#b_city\').val(\'\');
	$(\'#b_zip\').val(\'\'); }}		
$(document).ready(function (){
$(\'#three_pickup\').mask(\'29:59\');
$(\'#four_pickup\').mask(\'29:59\');
$(\'#five_pickup\').mask(\'29:59\');
$(\'#ssn\').mask(\'999-99-9999\');	
var v=$(\'#puchoice\').val();
if(v ==\'Time\'){ 
	$(\'#rpTime\').show();	
    }
});
function tValid(val,idv){
  var i = val.substr(0,1);
  var j = val.substr(1,1);
   if(i == \'2\'){
     if(j > 3){ $(\'#\'+idv).val(\'\'); return false; }else{ return true; }
    }
}
/*function chTrip(val){
    if(val == \'Round Trip\'){
    var pu=$(\'#puchoice\').val();
	if(pu==\'Will Call\'){
	$(\'#returnpickup\').removeAttr("class");	
	$(\'#rpTime\').hide();	
     $(\'#rpu\').show();	
	}else{
      $(\'#rpu\').show();	
      $(\'#rpTime\').show();	
	}
	$(\'#rpu\').attr("class","required");
	$(\'.backto_address_option\').show();	
	$(\'#puchoice\').attr("class","txt_boxX required");	
	 $(\'#backto\').attr("disabled",false);
	$(\'#backtocity\').attr("disabled",false);
	$(\'#backtostate\').attr("disabled",false);
	$(\'#backtozip\').attr("disabled",false);
	$(\'#puchoice\').attr("disabled",false);				  
	 return true;
    }
    else if(val == \'One Way\'){
	$(\'#puchoice\').removeAttr("class");
	$(\'#backto\').removeAttr("class");	
	$(\'#returnpickup\').removeAttr("class");	
	$(\'#rpu\').removeAttr("class");			
	$(\'#rpu\').hide();	
	$(\'#trBackTo\').hide();	
	$(\'#rpTime\').hide();	
	$(\'.backto_address_option\').hide();	
	$(\'#puchoice\').attr("disabled",true);	

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
	$(\'#backtozip\').addClass(\'required\');
	
	$(\'#three_pickup\').addClass(\'required\');
	$(\'#am_pm3\').addClass(\'required\');
	$(\'#three_address\').addClass(\'required\');
	$(\'#three_city\').addClass(\'required\');
	$(\'#three_state\').addClass(\'required\');
	$(\'#three_zip\').addClass(\'required\');
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
	$(\'#five_zip\').removeClass(\'required\');
	
	$(\'#four_pickup\').removeClass(\'required\');
	$(\'#am_pm4\').removeClass(\'required\');
	$(\'#four_address\').removeClass(\'required\');
	$(\'#four_city\').removeClass(\'required\');
	$(\'#four_state\').removeClass(\'required\');
	$(\'#four_zip\').removeClass(\'required\');
	
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
	$(\'#backtozip\').addClass(\'required\');
	
	$(\'#four_pickup\').addClass(\'required\');
	$(\'#am_pm4\').addClass(\'required\');
	$(\'#four_address\').addClass(\'required\');
	$(\'#four_city\').addClass(\'required\');
	$(\'#four_state\').addClass(\'required\');
	$(\'#four_zip\').addClass(\'required\');
	
	$(\'#three_pickup\').addClass(\'required\');
	$(\'#am_pm3\').addClass(\'required\');
	$(\'#three_address\').addClass(\'required\');
	$(\'#three_city\').addClass(\'required\');
	$(\'#three_state\').addClass(\'required\');
	$(\'#three_zip\').addClass(\'required\');
	//hide four attributes
	$(\'#five0\').hide();
	$(\'#five1\').hide();
	$("#five2").hide();
	$(\'#five3\').hide();
	$("#five4").hide();
	$(\'#five5\').hide();
	$("#five6").hide()
	$("#five7").hide();
	//remove required of five
	$(\'#five_pickup\').removeClass(\'required\');
	$(\'#am_pm5\').removeClass(\'required\');
	$(\'#five_address\').removeClass(\'required\');
	$(\'#five_city\').removeClass(\'required\');
	$(\'#five_state\').removeClass(\'required\');
	$(\'#five_zip\').removeClass(\'required\');
	
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
	$(\'#backtozip\').addClass(\'required\');
	
	$(\'#five_pickup\').addClass(\'required\');
	$(\'#am_pm5\').addClass(\'required\');
	$(\'#five_address\').addClass(\'required\');
	$(\'#five_city\').addClass(\'required\');
	$(\'#five_state\').addClass(\'required\');
	$(\'#five_zip\').addClass(\'required\');
	
	$(\'#four_pickup\').addClass(\'required\');
	$(\'#am_pm4\').addClass(\'required\');
	$(\'#four_address\').addClass(\'required\');
	$(\'#four_city\').addClass(\'required\');
	$(\'#four_state\').addClass(\'required\');
	$(\'#four_zip\').addClass(\'required\');
	
	$(\'#three_pickup\').addClass(\'required\');
	$(\'#am_pm3\').addClass(\'required\');
	$(\'#three_address\').addClass(\'required\');
	$(\'#three_city\').addClass(\'required\');
	$(\'#three_state\').addClass(\'required\');
	$(\'#three_zip\').addClass(\'required\');
    return true;
    }
	else{
	$(\'#backto\').attr("class","txt_boxX required");	
	$(\'#rpu\').attr("class","required");
	$(\'#rpu\').show();	
	$(\'#puchoice\').attr("class","txt_boxX required");	
	$(\'#puchoice\').attr("disabled",false);	
	return true; 	
	}	
}*/
function chTrip(val){
//$(\'#waitopt\').attr(\'checked\', false);
   	if(val == \'One Way\'){
	$(\'#hideno\').hide();
	$("#showno").hide();
	//$(\'#returnpickup\').attr("disabled",true);
	$(\'#puchoice\').removeAttr("class");
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
	$(\'#backtozip\').removeClass(\'required\');
	 	
	$(\'#five_pickup\').removeClass(\'required\');
	$(\'#am_pm5\').removeClass(\'required\');
	$(\'#five_address\').removeClass(\'required\');
	$(\'#five_city\').removeClass(\'required\');
	$(\'#five_state\').removeClass(\'required\');
	$(\'#five_zip\').removeClass(\'required\');
	
	$(\'#four_pickup\').removeClass(\'required\');
	$(\'#am_pm4\').removeClass(\'required\');
	$(\'#four_address\').removeClass(\'required\');
	$(\'#four_city\').removeClass(\'required\');
	$(\'#four_state\').removeClass(\'required\');
	$(\'#four_zip\').removeClass(\'required\');
	
	$(\'#three_pickup\').removeClass(\'required\');
	$(\'#am_pm3\').removeClass(\'required\');
	$(\'#three_address\').removeClass(\'required\');
	$(\'#three_city\').removeClass(\'required\');
	$(\'#three_state\').removeClass(\'required\');
	$(\'#three_zip\').removeClass(\'required\');

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
	$(\'#backtozip\').addClass(\'required\');
	//Remove required attributes 	
	$(\'#five_pickup\').removeClass(\'required\');
	$(\'#am_pm5\').removeClass(\'required\');
	$(\'#five_address\').removeClass(\'required\');
	$(\'#five_city\').removeClass(\'required\');
	$(\'#five_state\').removeClass(\'required\');
	$(\'#five_zip\').removeClass(\'required\');
	
	$(\'#four_pickup\').removeClass(\'required\');
	$(\'#am_pm4\').removeClass(\'required\');
	$(\'#four_address\').removeClass(\'required\');
	$(\'#four_city\').removeClass(\'required\');
	$(\'#four_state\').removeClass(\'required\');
	$(\'#four_zip\').removeClass(\'required\');
	
	$(\'#three_pickup\').removeClass(\'required\');
	$(\'#am_pm3\').removeClass(\'required\');
	$(\'#three_address\').removeClass(\'required\');
	$(\'#three_city\').removeClass(\'required\');
	$(\'#three_state\').removeClass(\'required\');
	$(\'#three_zip\').removeClass(\'required\');
				  
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
	$(\'#backtozip\').addClass(\'required\');
	
	$(\'#three_pickup\').addClass(\'required\');
	$(\'#am_pm3\').addClass(\'required\');
	$(\'#three_address\').addClass(\'required\');
	$(\'#three_city\').addClass(\'required\');
	$(\'#three_state\').addClass(\'required\');
	$(\'#three_zip\').addClass(\'required\');
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
	$(\'#five_zip\').removeClass(\'required\');
	
	$(\'#four_pickup\').removeClass(\'required\');
	$(\'#am_pm4\').removeClass(\'required\');
	$(\'#four_address\').removeClass(\'required\');
	$(\'#four_city\').removeClass(\'required\');
	$(\'#four_state\').removeClass(\'required\');
	$(\'#four_zip\').removeClass(\'required\');
	
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
	$(\'#backtozip\').addClass(\'required\');
	
	$(\'#four_pickup\').addClass(\'required\');
	$(\'#am_pm4\').addClass(\'required\');
	$(\'#four_address\').addClass(\'required\');
	$(\'#four_city\').addClass(\'required\');
	$(\'#four_state\').addClass(\'required\');
	$(\'#four_zip\').addClass(\'required\');
	
	$(\'#three_pickup\').addClass(\'required\');
	$(\'#am_pm3\').addClass(\'required\');
	$(\'#three_address\').addClass(\'required\');
	$(\'#three_city\').addClass(\'required\');
	$(\'#three_state\').addClass(\'required\');
	$(\'#three_zip\').addClass(\'required\');
	//hide four attributes
	$(\'#five0\').hide();
	$(\'#five1\').hide();
	$("#five2").hide();
	$(\'#five3\').hide();
	$("#five4").hide();
	$(\'#five5\').hide();
	$("#five6").hide()
	$("#five7").hide();
	//remove required of five
	$(\'#five_pickup\').removeClass(\'required\');
	$(\'#am_pm5\').removeClass(\'required\');
	$(\'#five_address\').removeClass(\'required\');
	$(\'#five_city\').removeClass(\'required\');
	$(\'#five_state\').removeClass(\'required\');
	$(\'#five_zip\').removeClass(\'required\');
	
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
	$(\'#backtozip\').addClass(\'required\');
	
	$(\'#five_pickup\').addClass(\'required\');
	$(\'#am_pm5\').addClass(\'required\');
	$(\'#five_address\').addClass(\'required\');
	$(\'#five_city\').addClass(\'required\');
	$(\'#five_state\').addClass(\'required\');
	$(\'#five_zip\').addClass(\'required\');
	
	$(\'#four_pickup\').addClass(\'required\');
	$(\'#am_pm4\').addClass(\'required\');
	$(\'#four_address\').addClass(\'required\');
	$(\'#four_city\').addClass(\'required\');
	$(\'#four_state\').addClass(\'required\');
	$(\'#four_zip\').addClass(\'required\');
	
	$(\'#three_pickup\').addClass(\'required\');
	$(\'#am_pm3\').addClass(\'required\');
	$(\'#three_address\').addClass(\'required\');
	$(\'#three_city\').addClass(\'required\');
	$(\'#three_state\').addClass(\'required\');
	$(\'#three_zip\').addClass(\'required\');
    return true;
    }
	else{
		//To hide
	/*$(\'#b1\').hide();
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
	
	$(\'#four0\').hide();
	$(\'#four1\').hide();
	$("#four2").hide();
	$(\'#four3\').hide();
	$("#four4").hide();
	$(\'#four5\').hide();
	$("#four6").hide();
	
	$(\'#five0\').hide();
	$(\'#five1\').hide();
	$("#five2").hide();
	$(\'#five3\').hide();
	$("#five4").hide();
	$(\'#five5\').hide();
	$("#five6").hide();
		
	$(\'#rpu\').hide();	
//Remove required attributes for second destination
	$(\'#backto\').removeClass(\'required\');
	$(\'#backtocity\').removeClass(\'required\');
	$(\'#backtostate\').removeClass(\'required\');
	$(\'#backtozip\').removeClass(\'required\');
	
	$(\'#three_pickup\').removeClass(\'required\');
	$(\'#am_pm3\').removeClass(\'required\');
	$(\'#three_address\').removeClass(\'required\');
	$(\'#three_city\').removeClass(\'required\');
	$(\'#three_state\').removeClass(\'required\');
	$(\'#three_zip\').removeClass(\'required\');
	
	$(\'#four_pickup\').removeClass(\'required\');
	$(\'#am_pm4\').removeClass(\'required\');
	$(\'#four_address\').removeClass(\'required\');
	$(\'#four_city\').removeClass(\'required\');
	$(\'#four_state\').removeClass(\'required\');
	$(\'#four_zip\').removeClass(\'required\');
	
	$(\'#five_pickup\').removeClass(\'required\');
	$(\'#am_pm5\').removeClass(\'required\');
	$(\'#five_address\').removeClass(\'required\');
	$(\'#five_city\').removeClass(\'required\');
	$(\'#five_state\').removeClass(\'required\');
	$(\'#five_zip\').removeClass(\'required\');
	


	$(\'#rpu\').attr("class","txt_box required");
	$(\'#rpu\').show();	*/
	
	return true; 	
	}	}
function pUchoice(val){
    if(val == \'\'){    
	 return false;
    }
    if(val == \'Will Call\'){ 
	$(\'#returnpickup\').removeAttr("class");	
	$(\'#rpTime\').hide();	
	  return true;
    }else{
	$(\'#returnpickup\').attr("class","txt_boxX required");	
	$(\'#rpTime\').show();
	return true; 	
	}	}
function chProg(val){
    if(val == \'0\'){
     $(\'#labelXid\').html(\'CIS ID\');	
     $(\'#cisidsp\').show();			     
     $(\'#ssnsp\').hide();
	 $(\'#ssn\').attr("class","txt_boxX");
	 $(\'#cisid\').attr("class","txt_boxX required");	 		 
	 return true;
    }
    if(val == \'1\'){
     $(\'#labelXid\').html(\'Social Security Number\');	
     $(\'#ssnsp\').show();	
     $(\'#cisidsp\').hide();	 
	 $(\'#cisid\').attr("class","txt_boxX");
	 $(\'#ssn\').attr("class","txt_boxX required");		  		
    return true;
    }else{
     $(\'#labelXid\').html(\'CIS ID\');	
     $(\'#cisidsp\').show();			     
     $(\'#ssnsp\').hide();
	 $(\'#ssn\').attr("class","txt_boxX");
	 $(\'#cisid\').attr("class","txt_boxX required");
    return true;	 		
	}	 }
function PerfromAutomation(){
		var shid =  $(\'#cisid\').val();
		if(shid != \'\'){ //alert(shid); 
		var code = \'\';
			$.post("fetchdata.php", {hid: ""+shid, id: ""+code}, function(data){
				if(data.length > 0) {
	            	var fetchedData = data;
					formSeprate = new Array();
					formSeprate = fetchedData.split(\'--Automation--\');			  
				    if(formSeprate.length > 0){ 
					    if(formSeprate[0] != \'\'){
					  		formvals = new Array();	 
						    formvals = formSeprate[0].split(\'^\'); 
						  	if(formvals.length > 0){
								if(formvals[0] != \'\')
								  $(\'#pname\').val(formvals[0]);
							  	if(formvals[1] != \'\')							  
								  $(\'#phnum\').val(formvals[1]);
						  	  	if(formvals[2] != \'\')						  
								  $(\'#email\').val(formvals[2]);
								if(formvals[3] != \'\')						  
								  $(\'#dob\').val(formvals[3]);
							  	if(formvals[5] != \'\')					  
								  $(\'#fname\').val(formvals[5]);
								if(formvals[6] != \'\')							  
								  $(\'#lname\').val(formvals[6]);
	                          	if(formvals[7] != \'\')
							  	  $(\'#clinic\').val(formvals[7]);
							  	if(formvals[8] != \'\')						  
								  $(\'#phyaddress\').val(formvals[8]);
							  	if(formvals[9] != \'\')							  
								  $(\'#phycity\').val(formvals[9]);
							  	if(formvals[10] != \'\')							  
							  	  $(\'#phystate\').val(formvals[10]);
						  		if(formvals[11] != \'\')							  
						  		  $(\'#phyzip\').val(formvals[11]);
						  	    if(formvals[12] != \'\')							  
						  		  $(\'#phyphone\').val(formvals[12]);
	                          	if(formvals[13] != \'\')
						  		  $(\'#phyfax\').val(formvals[13]);
							  	if(formvals[14] != \'\')						  
							  	  $(\'#reason\').val(formvals[14]);
							  	if(formvals[15] != \'\')							  
						  		  $(\'#pickaddress\').val(formvals[15]);
						  		if(formvals[16] != \'\')							  
						  		  $(\'#pckcity\').val(formvals[16]);
						  		if(formvals[17] != \'\')							  
						  		  $(\'#pckstate\').val(formvals[17]);
						  	    if(formvals[18] != \'\')							  
								  $(\'#pckzip\').val(formvals[18]);
						  	  	if(formvals[19] != \'\')							  
								  $(\'#destination\').val(formvals[19]);
						  		if(formvals[20] != \'\')							  
							  	  $(\'#drpcity\').val(formvals[20]);
								if(formvals[21] != \'\')							  
								  $(\'#drpstate\').val(formvals[21]);
						  	  	if(formvals[22] != \'\')						  
						  		  $(\'#drpzip\').val(formvals[22]);
						  		if(formvals[23] != \'\')						  
						  		  $(\'#backto\').val(formvals[23]); 
							  if(formvals[24] != \'\')		
								  $(\'#backtocity\').val(formvals[24]); 		
							  if(formvals[25] != \'\')				
								  $(\'#backtostate\').val(formvals[25]); 								  
							  if(formvals[26] != \'\')	
								  $(\'#backtozip\').val(formvals[26]); 
							  if(formvals[27] != \'\'){							  
								  $(\'#appdate\').val(formvals[27]); }
							  if(formvals[28] != \'\'){							  
								  $(\'#apptime\').val(formvals[28]); }
							  if(formvals[29] != \'\'){
										if(formvals[29] == \'00:00:00\'){
										   pUchoice(\'Will Call\');
										   $(\'#puchoice\').val(\'Will Call\');
										}else{					
										 $(\'#puchoice\').val(\'Time\');		  
										 $(\'#returnpickup\').val(formvals[29]); 
										 $(\'#returnpickup\').attr("class","txt_boxX required");	
										 $(\'#rpTime\').show();
										  }
									 }	
									 if(formvals[30] != \'\'){							  
								  		$(\'#casemanager1\').val(formvals[30]);
									 }					 
						 		}
							}				
					    }		 
			   }   
		   });
	  return true;
	  }
 }
function reoccur(){
	 $(\'#reoccur_a\').show();
	 $(\'#reoccur_b\').show();
	 $(\'#day1\').attr("class","appt_txtbox required");
	 $(\'#day2\').attr("class","appt_txtbox required");
	 $(\'#day3to\').attr("class","appt_txtbox required");
	 }
function non_reoccur(){
	 $(\'#reoccur_a\').hide();
	 $(\'#reoccur_b\').hide();
	 $(\'#day1\').attr("class","appt_txtbox");
	 $(\'#day2\').attr("class","appt_txtbox");
	 $(\'#day3to\').attr("class","appt_txtbox");
	 }	 
function app_type(type){ //alert(type);
	 if(type == \'specialist\'){
	 $(\'.spec\').show();
	 $(\'#fname\').attr("class","txt_boxX required chars");
	 $(\'#lname\').attr("class","txt_boxX required chars");
	 $(\'#phyaddress\').attr("class","txt_boxX required");
	 $(\'#phycity\').attr("class","txt_boxX required");
	 $(\'#phystate\').attr("class","txt_boxX required");
	 $(\'#phyzip\').attr("class","txt_boxX required digits");
	 $(\'#phyphone\').attr("class","txt_boxX required");
	 $(\'#reason\').attr("class","required");      }
	 else if(type == \'general\'){
	 $(\'.spec\').hide();
	 $(\'#fname\').attr("class","txt_boxX chars");
	 $(\'#lname\').attr("class","txt_boxX chars");
	 $(\'#phyaddress\').attr("class","txt_boxX");
	 $(\'#phycity\').attr("class","txt_boxX");
	 $(\'#phystate\').attr("class","txt_boxX");
	 $(\'#phyzip\').attr("class","txt_boxX digits");
	 $(\'#phyphone\').attr("class","txt_boxX");
	 $(\'#reason\').attr("class","");	 }
	  }	 
function back_address(val){
	  //alert(val);
	  if(val == \'0\'){
		$(\'.btaddress\').show();
		$(\'#backto\').attr("class","txt_boxX required");
		$(\'#backtocity\').attr("class","txt_boxX required");
		$(\'#backtostate\').attr("class","txt_boxX required");
		$(\'#backtozip\').attr("class","txt_boxX required digits");
		  }
	  else if(val == \'1\'){
		$(\'.btaddress\').hide();
		$(\'#backto\').attr("class","");
		$(\'#backtocity\').attr("class","");
		$(\'#backtostate\').attr("class","");
		$(\'#backtozip\').attr("class","");
		  }
	  }
function time(t){ 
//var atime = document.getElementById(\'t\').value; 
var atime = $(\'#\'+t).val();
//alert(atime);
var hours = atime.split(\':\');
var hour = hours[0];
var minut = hours[1]; 
if(hour >23 || minut >59) 
{
alert(\'Please enter correct Appointment Time!\');
$(\'#\'+t).val(\'\');
return false }}
function check_check3(){
	if($(\'#three_will_call\').attr(\'checked\')){
	$(\'#three_pickup\').attr("disabled",true);
	$(\'#am_pm3\').attr("disabled",true);
	$(\'#three_pickup\').removeClass(\'required\');
	$(\'#am_pm3\').removeClass(\'required\'); 
	$(\'#three_pickup\').val(\'\');   }
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
	$(\'#am_pm4\').removeClass(\'required\'); 
	$(\'#four_pickup\').val(\'\');    }
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
	$(\'#am_pm5\').removeClass(\'required\'); 
	$(\'#five_pickup\').val(\'\');   }
	else {
	$(\'#five_pickup\').attr(\'disabled\',false);
	$(\'#am_pm5\').attr(\'disabled\',false);
	$(\'#five_pickup\').addClass(\'required\');
	$(\'#am_pm5\').addClass(\'required\'); }
	 }
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
	return true;
   } 		 
</script>
'; ?>

<body>
<div id="main_container">
<div id="inner_container">
<table cellpadding="0" cellspacing="0"  width="100%">     	
<tr><td>  </td></tr>
<tr><td height="9"></td></tr>
<tr><td style="background-color:#FFF;">
<form name="updReq" id="updReq" action="trip_request_user.php" method="post">
<div style="width:98%; float:left; border: solid #F00 0px;" >
<div style="width:98%; margin:auto; border: solid #F00 0px;" >
<table width="100%" border="0" style="background-color:#eff7ff" cellpadding="0" cellspacing="0" >
  <tr>
    
    <td width="50%" valign="top" style="background-color:#FFD4D4;">                                   	
		<table cellpadding="1" cellspacing="5" border="0" width="100%"><tr>                                           	 
	<td colspan="2"><div class="form_heading_1">Patient Information</div></td></tr>  
	<!--<tr> <td class="labelX">Select Program:&nbsp;<span  style="color:#F00;"></span></td><td><select name="tripprog"  class="txt_boxX required" id="tripprog" onchange="return changelabel(this.value);">
			    <option value="">Select</option>
				<?php unset($this->_sections['q']);
$this->_sections['q']['name'] = 'q';
$this->_sections['q']['loop'] = is_array($_loop=$this->_tpl_vars['prgs']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
				<option value="<?php echo $this->_tpl_vars['prgs'][$this->_sections['q']['index']]['prgid']; ?>
"><?php echo $this->_tpl_vars['prgs'][$this->_sections['q']['index']]['prgtitle']; ?>
</option>
			<?php endfor; endif; ?></select></td></tr>
            <tr><td class="labelX">Insurance Type:&nbsp;<span  style="color:#F00;">*</span></td>
     <td><input type="text" name="insurance_name" id="insurance_name" value="<?php echo $this->_tpl_vars['post']['insurance_name']; ?>
" class="txt_boxX required" maxlength="14" /></td> </tr>  
            
            
            <tr class="labelX">
              <td class="labelX" >Insurance ID:&nbsp;<span  style="color:#F00;">*</span></td>
			  <td valign="top"><input type="text" name="cisid" id="cisid" value="<?php echo $this->_tpl_vars['post']['cisid']; ?>
" class="txt_boxX required" />
</td>		</tr>  -->
<tr><td class="labelX">Patient Name:&nbsp;<span  style="color:#F00;">*</span></td>
		<td><input name="pname" type="text" class="txt_boxX required chars" id="pname" value="<?php echo $this->_tpl_vars['post']['pname']; ?>
" maxlength="30" /></td> </tr>
       <!-- <tr> <td class="labelX">Select Status:&nbsp;<span  style="color:#F00;"></span></td><td><select name="status"  class="txt_boxX required" id="status">
			    <option value="">- Select Status -</option>
				<option value="current">Current</option>
                <option value="inactive">Inactive</option>
			</select></td></tr>                 
   -->
   <tr><td class="labelX">Patient Phone Number:&nbsp;<span  style="color:#F00;">*</span></td>
     <td><input type="text" name="phnum" id="phnum" value="<?php echo $this->_tpl_vars['post']['phnum']; ?>
" class="txt_boxX required" maxlength="14" /></td> </tr>                                          	
<!-- <tr><td class="labelX">S.S.N #:&nbsp;<span  style="color:#F00;">*</span></td>
     <td><input type="text" name="ssn" id="ssn" value="<?php echo $this->_tpl_vars['post']['ssn']; ?>
" class="txt_boxX required" maxlength="14" /></td> </tr>  
-->
<tr><td class="labelX">Date of Birth:&nbsp;<span  style="color:#F00;">*</span><img src="images\information.png" title="Date formate: yyyy-mm-dd " /></td>
		<td><input type="text" name="dob" id="dob" value="<?php echo $this->_tpl_vars['post']['dob']; ?>
" class="txt_boxX required" maxlength="15"/></td> </tr>


<tr><td class="labelX">PO #:&nbsp;<span  style="color:#F00;"></span></td>
		<td><input type="text" name="po" id="po" value="<?php echo $this->_tpl_vars['post']['po']; ?>
" class="txt_boxX" maxlength="55"/></td> </tr>
<tr><td class="labelX">Patient Weight:&nbsp;<span  style="color:#F00;">*</span><span  style="color:#F00; font-size:10px;">Lbs</span></td>
		<td><input type="text" name="patient_weight" id="patient_weight" value="<?php echo $this->_tpl_vars['post']['patient_weight']; ?>
" class="txt_boxX required" maxlength="8"/></td> </tr>


        
		<tr><td class="labelX">Today Date:</td>
<td><input type="text" name="todaydate" id="todaydate" value='<?php echo ((is_array($_tmp=time())) ? $this->_run_mod_handler('date_format', true, $_tmp) : smarty_modifier_date_format($_tmp)); ?>
' class="txt_boxX required" readonly /></td> </tr>
	<tr><td colspan="2"><div class="form_heading_1">Trip Information</div></td></tr>
     <tr><td class="labelX">Appointment Type:</td>
                  <td ><select name="type" class="required txt_boxX" id="type"  >
                      <option value="">Select</option>
                      			  <?php unset($this->_sections['q']);
$this->_sections['q']['name'] = 'q';
$this->_sections['q']['loop'] = is_array($_loop=$this->_tpl_vars['appdata']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
                 <option value="<?php echo $this->_tpl_vars['appdata'][$this->_sections['q']['index']]['type']; ?>
"><?php echo $this->_tpl_vars['appdata'][$this->_sections['q']['index']]['type']; ?>
</option>
                      <?php endfor; endif; ?>
                    </select>
                    &nbsp;<span class="SmallnoteTxt">*</span></td>
                </tr>
    
    
    <tr><td class="labelX">Appointment Nature:</td><td ><input type="radio" name="apptype" value="general" onchange="app_type(this.value);" <?php if ($this->_tpl_vars['post']['apptype'] == 'general'): ?> checked="checked" <?php endif; ?> checked="checked" />&nbsp;<span class="accesslable">General Medicine</span>&nbsp;<br/><input type="radio" name="apptype" value="specialist" onchange="app_type(this.value);" <?php if ($this->_tpl_vars['post']['apptype'] == 'specialist'): ?> checked="checked" <?php endif; ?>/>&nbsp;<span class="accesslable">Specialist</span></td></tr> 	
		<tr><td class="labelX">Select Trip Type:&nbsp;<span  style="color:#F00;">*</span></td>
		<td>
        <select name="triptype"  class="txt_boxX required" id="triptype" onchange="return chTrip(this.value);" >
<option value="">--Select Trip Type--</option>
<option value="One Way" 	<?php if ($this->_tpl_vars['post']['triptype'] == 'One Way'): ?>selected<?php endif; ?>>One Way--(1 Destination)</option>
<option value="Round Trip" 	<?php if ($this->_tpl_vars['post']['triptype'] == 'Round Trip'): ?>selected<?php endif; ?>>Two Way--(2 Destination)</option>
<option value="Three Way" 	<?php if ($this->_tpl_vars['post']['triptype'] == 'Three Way'): ?>selected<?php endif; ?>>Three Way--(3 Destination)</option>
<option value="Four Way" 	<?php if ($this->_tpl_vars['post']['triptype'] == 'Four Way'): ?>selected<?php endif; ?>>Four Way--(4 Destination)</option>
<option value="Five Way" 	<?php if ($this->_tpl_vars['post']['triptype'] == 'Five Way'): ?>selected<?php endif; ?>>Five Way--(5 Destination)</option>
</select><span class="SmallnoteTxt"></span>
  </td></tr>
          
       
<!--<tr class="backto_address_option" style="display:none;"><td class="labelX" colspan="2"><span  style="color:#F00;">Is the drop address for return trip is same of origin?</span></td></tr>   
<tr class="backto_address_option" style="display:none;"><td class="labelX"></td><td class="labelX"><input type="radio" name="backto_address_option" <?php if ($this->_tpl_vars['backto_address_option'] == '1' || $this->_tpl_vars['backto_address_option'] == ''): ?> checked="checked" <?php endif; ?> value="1" onchange="back_address(this.value);"/>&nbsp;YES&nbsp;<input type="radio" name="backto_address_option" value="0" <?php if ($this->_tpl_vars['backto_address_option'] == '0'): ?> checked="checked" <?php endif; ?> onchange="back_address(this.value);"/>&nbsp;NO</td></tr>   -->
          
                                                         
		<tr><td class="labelX">Vehicle Preference:&nbsp;<span  style="color:#F00;">*</span></td>
		<td><select  name="vehtype" class="txt_boxX required" id="vehtype"  >
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
" <?php if ($this->_tpl_vars['post']['vehtype'] == $this->_tpl_vars['vehiclepref'][$this->_sections['q']['index']]['id']): ?>selected<?php endif; ?>><?php echo $this->_tpl_vars['vehiclepref'][$this->_sections['q']['index']]['vehtype']; ?>
</option>
		<?php endfor; endif; ?>
		</select>&nbsp;<span class="SmallnoteTxt"></span> </td></tr> 
		<tr><td class="labelX">Case Manager:&nbsp;<span  style="color:#F00;"></span></td>
		<td><input name="casemanager1" type="text" class="txt_boxX chars" id="casemanager1"  value="<?php echo $this->_tpl_vars['casemanager1']; ?>
" maxlength="30" />&nbsp;<span class="SmallnoteTxt"></span></td></tr>                                                  
	<tr><td class="labelX">Service Date:&nbsp;<span  style="color:#F00;">*</span></td>
		<td><input type="text" readonly="true" name="appdate" id="appdate" value="<?php echo $this->_tpl_vars['post']['appdate']; ?>
" class="txt_boxX required"  maxlength="15" />                
		<span class="SmallnoteTxt"></span>	</td></tr>
        <tr><td class="labelX">Appointment Time:&nbsp;<span  style="color:#F00;"></span>&nbsp;<img src="images\information.png" title=" Time Formate: 15:30 " /></td>
         <td><input  type="text" name="org_apptime" id="org_apptime" value="<?php echo $this->_tpl_vars['post']['org_apptime']; ?>
" class="txt_boxX"  maxlength="7"  onblur="return time(this.id);"/>
              </td></tr>	
		<tr><td class="labelX">Pick up Time:&nbsp;<span  style="color:#F00;">*</span>&nbsp;<img src="images\information.png" title=" Time Formate: 15:30 " /></td>
         <td><input  type="text" name="apptime" id="apptime" value="<?php echo $this->_tpl_vars['post']['apptime']; ?>
" class="txt_boxX required"  maxlength="7"  onblur="return time(this.id);"/>
              </td></tr>                                        	
             <?php if ($this->_tpl_vars['triptype'] == 'roundtrip' || $this->_tpl_vars['triptype'] == 'Round Trip' || $this->_tpl_vars['triptype'] == ''): ?> <?php endif; ?>
            <tr id="rpu" style="display:none"><td class="labelX">Return Pickup:&nbsp;<span  style="color:#F00;">*</span>&nbsp;<img src="images\information.png" title=" Rerurn Pick Time for Last Destination" /></td>
          <td><select  name="puchoice" id="puchoice" class="txt_boxX required" onchange="return pUchoice(this.value);" >
			     <option value="" <?php if ($this->_tpl_vars['post']['puchoice'] == ''): ?>selected<?php endif; ?>>Select</option>
				 <option value="Will Call" <?php if ($this->_tpl_vars['post']['puchoice'] == 'Will Call'): ?>selected<?php endif; ?>>Will Call</option>
				 <option value="Time" <?php if ($this->_tpl_vars['post']['puchoice'] == 'Time'): ?>selected<?php endif; ?>>Time</option>
			   </select>&nbsp;</td></tr>  
          <tr id="rpTime" style="display:none;"><td class="labelX">Pickup Time:&nbsp;<span  style="color:#F00;">*</span>&nbsp;<img src="images\information.png" title=" Time Formate: 15:30 " /></td>
         <td colspan="2"><input  type="text" name="returnpickup" id="returnpickup" value="<?php echo $this->_tpl_vars['returnpickup']; ?>
"  class="txt_boxX required" maxlength="5" onblur="return time(this.id);" />
            </td></tr>  
			
            <?php if ($_SESSION['appnature'] == 'spec'):  endif; ?> 
	<tr class="spec" style="display:none;"><td colspan="3"><div class="form_heading_1">Physician Information</div></td></tr>
		<tr class="spec" style="display:none;"><td class="labelX">First Name:&nbsp;<span  style="color:#F00;">*</span></td>
		<td><input name="fname" type="text" id="fname"  value="<?php echo $this->_tpl_vars['post']['fname']; ?>
" maxlength="30" />&nbsp;<span class="SmallnoteTxt"></span></td></tr>
		<tr class="spec" style="display:none;"><td class="labelX">Last Name:&nbsp;<span  style="color:#F00;">*</span></td>
		<td><input name="lname" type="text" id="lname"  value="<?php echo $this->_tpl_vars['post']['lname']; ?>
" maxlength="30" />&nbsp;<span class="SmallnoteTxt"></span></td></tr>
		<tr class="spec" style="display:none;"><td class="labelX">Doctor's Facility:</td>
	<td><input name="clinic" type="text" class="txt_boxX" id="clinic"  value="<?php echo $this->_tpl_vars['post']['clinic']; ?>
" maxlength="100" /></td></tr>
		<tr  class="spec" style="display:none;"><td class="labelX">Address:&nbsp;<span  style="color:#F00;">*</span></td>
		<td><input type="text" name="phyaddress" id="phyaddress" value="<?php echo $this->_tpl_vars['post']['phyaddress']; ?>
" maxlength="150" />&nbsp;</td></tr>
		<tr class="spec" style="display:none;">
		<td class="labelX">City:&nbsp;<span  style="color:#F00;">*</span></td>
		<td  class="spec" style="display:none;"><input type="text" name="phycity" id="phycity" value="<?php echo $this->_tpl_vars['post']['phycity']; ?>
" maxlength="30" /></td>
		</tr>
		<tr class="spec" style="display:none;">
		<td class="labelX">State:&nbsp;<span  style="color:#F00;">*</span></td>
		<td><select  name="phystate" id="phystate" > 
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
" <?php if ($this->_tpl_vars['h_state'] != ''):  if ($this->_tpl_vars['states'][$this->_sections['n']['index']]['abbr'] == $this->_tpl_vars['h_state']): ?>selected<?php endif;  elseif ($this->_tpl_vars['states'][$this->_sections['n']['index']]['abbr'] == 'AZ'): ?>selected<?php endif; ?>><?php echo $this->_tpl_vars['states'][$this->_sections['n']['index']]['statename']; ?>
</option>
		<?php endfor; endif; ?></select><span class="SmallnoteTxt"></span></td></tr>
		<tr class="spec" style="display:none;"><td class="labelX">Zip Code:&nbsp;<span  style="color:#F00;">*</span> </td>
		<td><input   type="text" name="phyzip" id="phyzip" value="<?php echo $this->_tpl_vars['post']['phyzip']; ?>
" maxlength="5"/>
		<span class="SmallnoteTxt"></span></td></tr>
		<tr class="spec" style="display:none;"><td class="labelX">Phone:&nbsp;<span  style="color:#F00;">*</span></td>
		<td><input type="text" name="phyphone" id="phyphone" value="<?php echo $this->_tpl_vars['post']['phyphone']; ?>
" />&nbsp;<span class="SmallnoteTxt"></span></td></tr>
		<tr class="spec" style="display:none;"><td class="labelX">Fax:</td>
		<td><input  type="text" name="phyfax" value="<?php echo $this->_tpl_vars['post']['phyfax']; ?>
" id="phyfax" class="txt_boxX" maxlength="20" /></td></tr>
		<tr class="spec" style="display:none;"><td class="labelX">Reason for Visit:&nbsp;<span  style="color:#F00;">*</span></td>
		<td><textarea  name="reason" id="reason" cols="15" rows="3"><?php echo $this->_tpl_vars['post']['reason']; ?>
</textarea>&nbsp;<span class="SmallnoteTxt"></span></td></tr>
		
    <tr><td colspan="2"><div class="form_heading_1">General Options</div></td></tr>
    <tr><td colspan="2"><table width="100%" border="0">
  <!--<tr>
  <td class="labelX">Driver Preference :</td><td class="labelX"><input type="radio" name="driver" value="Male" <?php if ($this->_tpl_vars['post']['driver'] == 'Male'): ?> checked="checked" <?php endif; ?>/>&nbsp;Male</td>
  <td class="labelX"><input type="radio" name="driver" value="Female" <?php if ($this->_tpl_vars['post']['driver'] == 'Female'): ?> checked="checked" <?php endif; ?>/>&nbsp;Female</td>
  </tr>-->
  <!--<tr>
  <td class="labelX">Patient Driver Preference :</td><td class="labelX"><input type="radio" name="sex" value="Male" <?php if ($this->_tpl_vars['post']['sex'] == 'Male'): ?> checked="checked" <?php endif; ?>/>&nbsp;Male</td>
  <td class="labelX"><input type="radio" name="sex" value="Female" <?php if ($this->_tpl_vars['post']['sex'] == 'Female'): ?> checked="checked" <?php endif; ?>/>&nbsp;Female</td>
  </tr>-->
  <tr><td height="4px" colspan="4"></td></tr>
  <tr> <td class="labelX">Stretcher :</td><td class="labelX"><input type="checkbox" name="stretcher" value="Yes" <?php if ($this->_tpl_vars['post']['stretcher'] == 'Yes'): ?> checked="checked"<?php endif; ?>/>&nbsp;Yes</td>
  <tr> <td class="labelX">Double Stretcher :</td><td class="labelX"><input type="checkbox" name="dstretcher" value="Yes" <?php if ($this->_tpl_vars['post']['dstretcher'] == 'Yes'): ?> checked="checked"<?php endif; ?>/>&nbsp;Yes</td>
  </tr>
  <tr> <td class="labelX">Bariatric Stretcher :</td><td class="labelX"><input type="checkbox" name="bar_stretcher" value="Yes" <?php if ($this->_tpl_vars['post']['bar_stretcher'] == 'Yes'): ?> checked="checked"<?php endif; ?>/>&nbsp;Yes</td>
  </tr>
  <tr>
  <td class="labelX">Wheel Chair :</td><td class="labelX"><input type="checkbox" name="wchair" value="Yes" <?php if ($this->_tpl_vars['post']['wchair'] == 'Yes'): ?> checked="checked"<?php endif; ?>/>&nbsp;Yes</td>
  <td class="labelX">Escort :</td><td class="labelX"><input type="checkbox" name="escort" value="Yes" <?php if ($this->_tpl_vars['post']['escort'] == 'Yes'): ?> checked="checked"<?php endif; ?> />&nbsp;Yes</td>
  <!--<td class="labelX">&nbsp;Double Stretcher :</td><td class="labelX">&nbsp;Yes</td>-->
  </tr>
  <!--<tr>
 <td class="labelX">Child Seat :</td><td class="labelX"><input type="checkbox" name="childseat" value="Yes" <?php if ($this->_tpl_vars['post']['childseat'] == 'Yes'): ?> checked="checked"<?php endif; ?>/>&nbsp;Yes</td>
  <td class="labelX">Oxygen O<sub>2</sub> :</td><td class="labelX"><input type="checkbox" name="oxygen" value="Yes" <?php if ($this->_tpl_vars['post']['oxygen'] == 'Yes'): ?> checked="checked" <?php endif; ?> />&nbsp;Yes</td>
  </tr>-->
  </table></td></tr>		
		
		<td align="left" >
		</td>
		
		</tr>
		</table> </td>
		
	<td  width="50%" valign="top" style="background-color:#E0CCA8;"><table cellpadding="1" cellspacing="5" border="0" width="100%">                          	
       <tr><td colspan="2"><div class="form_heading_1">Pick Up Information</div></td>     </tr>
		<tr><td class="labelX">Pickup Address:&nbsp;<span  style="color:#F00;">*</span></td>
		<td><input type="text" name="pickaddress" id="pickaddress" value="<?php echo $this->_tpl_vars['post']['pickaddress']; ?>
" class="txt_boxX required"   maxlength="150"  />&nbsp;<span class="SmallnoteTxt"></span></td></tr>
		<tr><td class="labelX">City:&nbsp;<span  style="color:#F00;">*</span></td>
		<td><input  type="text" name="pckcity" id="pckcity"  class="txt_boxX  required chars" value="" maxlength="30" />
		<span class="SmallnoteTxt"></span></td></tr>
		<tr><td class="labelX">State:&nbsp;<span  style="color:#F00;">*</span></td>
		<td><select name="pckstate" id="pckstate"  class="txt_boxX required"> 
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
" <?php if ($this->_tpl_vars['post']['pckstate'] != ''):  if ($this->_tpl_vars['states'][$this->_sections['n']['index']]['abbr'] == $this->_tpl_vars['post']['pckstate']): ?>selected<?php endif;  elseif ($this->_tpl_vars['states'][$this->_sections['n']['index']]['abbr'] == 'AZ'): ?>selected<?php endif; ?>>
		<?php echo $this->_tpl_vars['states'][$this->_sections['n']['index']]['statename']; ?>

		</option><?php endfor; endif; ?></select><span class="SmallnoteTxt"></span></td></tr>
		<tr><td class="labelX">Zip Code:&nbsp;<span  style="color:#F00;">*</span> &nbsp;<img src="images\information.png" title="e.g. 12345 OR 12345-6789" /></td>
		<td><input type="text" name="pckzip" id="pckzip" class="txt_boxX required " value="<?php echo $this->_tpl_vars['post']['pckzip']; ?>
" maxlength="10" />
		<span class="SmallnoteTxt"></span></td></tr>
        <tr><td class="labelX">Pick Up Instructions:</td>
		<td><textarea rows="3" cols="15" name="pickup_instruction" id="pickup_instruction"><?php echo $this->_tpl_vars['post']['pickup_instruction']; ?>
</textarea></td></tr>
        <tr ><td colspan="2"><div class="form_heading_1">&nbsp;First Destination</div></td></tr>
		<tr><td class="labelX">Destination:&nbsp;<span  style="color:#F00;">*</span></td>
		<td><input  type="text" name="destination" id="destination" value="<?php echo $this->_tpl_vars['post']['destination']; ?>
"  class="txt_boxX required"  maxlength="150" />&nbsp;<span class="SmallnoteTxt"></span></td></tr>
		<tr><td class="labelX">City:&nbsp;<span  style="color:#F00;">*</span></td>
		<td><input type="text" name="drpcity" value="" id="drpcity" class="txt_boxX required chars" maxlength="20" />
		</td></tr>
		<tr>
		<td class="labelX">State:&nbsp;<span  style="color:#F00;">*</span></td>
		<td><select  name="drpstate" id="drpstate" class="txt_boxX required">
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
" <?php if ($this->_tpl_vars['post']['drpstate'] != ''):  if ($this->_tpl_vars['states'][$this->_sections['n']['index']]['abbr'] == $this->_tpl_vars['post']['drpstate']): ?>selected<?php endif;  elseif ($this->_tpl_vars['states'][$this->_sections['n']['index']]['abbr'] == 'AZ'): ?>selected<?php endif; ?>>
		<?php echo $this->_tpl_vars['states'][$this->_sections['n']['index']]['statename']; ?>

		</option><?php endfor; endif; ?></select><span class="SmallnoteTxt"></span></td></tr>
		<tr><td class="labelX">Zip Code:&nbsp;<span  style="color:#F00;">*</span>&nbsp;<img src="images\information.png" title="e.g. 12345 OR 12345-6789" /></td>
		<td><input  maxlength="10" type="text" name="drpzip" value="<?php echo $this->_tpl_vars['post']['drpzip']; ?>
" id="drpzip" class="txt_boxX required "/><span class="SmallnoteTxt"></span></td></tr>
 
 <!-- Usmania End of code start here from monday--->
 
 <tr id="three0" style="display:none"><td colspan="2"><div class="form_heading_1">&nbsp;Second Destination</div></td></tr>
   <tr id="three1" style="display:none">
   <td class="labelX">Pick Time: &nbsp;<img src="images\information.png" title=" Time Formate: 15:30 " /></td>
   <td ><input type="text" name="three_pickup" id="three_pickup" value="<?php echo $this->_tpl_vars['post']['three_pickup']; ?>
"  class="txt_boxX " maxlength="5" onblur="return time(this.id);" /><!--<select class="" name="am_pm3" id="am_pm3"  >
<option value="">--</option>
<option value="am">am</option>
<option value="pm">pm</option>
</select>--><br/>
&nbsp;<span class="labelX" >Will Call</span>&nbsp;<input type="checkbox" name="three_will_call" id="three_will_call" onclick="check_check3();" /></td></tr>
<!--<tr id="three6" style="display:none">
           	<td class="labelXX" >Destination (Place):<br/></td>
<td><input name="destination_place3" type="text"  class="txt_boxXX " id="destination_place3" value="<?php echo $_SESSION['step1']['destination_place3']; ?>
" maxlength="150" />&nbsp;</td>
</tr>
-->

            <tr id="three2" style="display:none">
           	<td class="labelX" >Address:</td>
<td><input name="three_address" type="text"  class="txt_boxX " id="three_address" value="<?php echo $this->_tpl_vars['post']['three_address']; ?>
" maxlength="150" /></td>
<td></td></tr>
<!--<tr id="three7" style="display:none">
           	<td class="labelXX" >STE/BLDG:<br/></td>
<td><input name="stebldg3" type="text"  class="txt_boxXX " id="stebldg3" value="<?php echo $_SESSION['step1']['stebldg3']; ?>
" maxlength="150" />&nbsp;</td>
</tr>-->
 <tr id="three3" style="display:none" ><td class="labelX" >City:</td>
  <td><input name="three_city" type="text"  class="txt_boxX" id="three_city" value="" maxlength="150"/></td></tr>
                                                    
    <tr id="three4" style="display:none"> 	<td class="labelX" >State:</td>
<td><select id="three_state" name="three_state"  class="txt_boxX " />
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
" <?php if ($this->_tpl_vars['h_state'] != ''):  if ($this->_tpl_vars['states'][$this->_sections['n']['index']]['abbr'] == $this->_tpl_vars['post']['three_state']): ?>selected<?php endif;  elseif ($this->_tpl_vars['states'][$this->_sections['n']['index']]['abbr'] == 'AZ'): ?>selected<?php endif; ?>>
			   <?php echo $this->_tpl_vars['states'][$this->_sections['n']['index']]['statename']; ?>
 </option> <?php endfor; endif; ?> </select></td></tr>								
     <tr id="three5" style="display:none" ><td class="labelX" >Zip Code: &nbsp;<img src="images\information.png" title="e.g. 12345 OR 12345-6789" /></td>
     <td><input name="three_zip" type="text"  class="txt_boxX" id="three_zip" value="<?php echo $this->_tpl_vars['post']['three_zip']; ?>
" maxlength="10" /></td></tr>
      
                                                    
                                              <?php if ($this->_tpl_vars['triptype'] == 'Four Way' || $this->_tpl_vars['triptype'] == 'Five Way' || $this->_tpl_vars['triptype'] == ''):  endif; ?> 
      <tr id="four0" style="display:none"><td colspan="2"><div class="form_heading_1">&nbsp;Third Destination</div></td></tr>
   <tr id="four1" style="display:none"><td class="labelX">Pick Time: &nbsp;<img src="images\information.png" title=" Time Formate: 15:30 " /></td><td colspan="2"><input type="text" name="four_pickup" id="four_pickup" value="<?php echo $this->_tpl_vars['post']['four_pickup']; ?>
"  class="txt_boxX " maxlength="5" onblur="return time(this.id);" /> <!--<select class="" name="am_pm4" id="am_pm4"  >
   <option value="">--</option>
<option value="am">am</option>
<option value="pm">pm</option>
</select>--><br/>
<span class="labelX" >Will Call</span>&nbsp;<input type="checkbox" name="four_will_call" id="four_will_call" onclick="check_check4();" /></td></tr>
<!--<tr id="four6" style="display:none">
           	<td class="labelX" >Destination (Place):<br/></td>
<td><input name="destination_place4" type="text"  class="txt_boxXX " id="destination_place4" value="<?php echo $_SESSION['step1']['destination_place4']; ?>
" maxlength="150" />&nbsp;</td>
</tr>-->

            <tr id="four2" style="display:none">
           	<td class="labelX" >Address:<br/></td>
<td><input name="four_address" type="text"  class="txt_boxX" id="four_address" value="<?php echo $this->_tpl_vars['post']['four_address']; ?>
" maxlength="150" /></td>
<td></td></tr>
<!--<tr id="four7" style="display:none">
           	<td class="labelXX" >STE/BLDG:<br/></td>
<td><input name="stebldg4" type="text"  class="txt_boxXX " id="stebldg4" value="<?php echo $_SESSION['step1']['stebldg4']; ?>
" maxlength="150" />&nbsp;</td>
</tr>-->
 <tr id="four3" style="display:none" ><td class="labelX" >City:</td>
  <td><input name="four_city" type="text"  class="txt_boxX" id="four_city" value="" maxlength="150"/></td></tr>
                                                    
    <tr id="four4" style="display:none"> 	<td class="labelX" >State:</td>
<td><select id="four_state" name="four_state"  class="txt_boxX " />
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
" <?php if ($this->_tpl_vars['h_state'] != ''):  if ($this->_tpl_vars['states'][$this->_sections['n']['index']]['abbr'] == $this->_tpl_vars['h_state']): ?>selected<?php endif;  elseif ($this->_tpl_vars['states'][$this->_sections['n']['index']]['abbr'] == 'AZ'): ?>selected<?php endif; ?>>
	<?php echo $this->_tpl_vars['states'][$this->_sections['n']['index']]['statename']; ?>
 </option> <?php endfor; endif; ?> </select> </td> </tr>								
     <tr id="four5" style="display:none" ><td class="labelX" >Zip Code: &nbsp;<img src="images\information.png" title="e.g. 12345 OR 12345-6789" /></td>
     <td><input name="four_zip" type="text"  class="txt_boxX " id="four_zip" value="<?php echo $this->_tpl_vars['post']['four_zip']; ?>
" maxlength="10" /></td></tr>
                                                    <?php if ($this->_tpl_vars['triptype'] == 'Five Way' || $this->_tpl_vars['triptype'] == ''): ?> <?php endif; ?>
            <tr id="five0" style="display:none"><td colspan="2"><div class="form_heading_1">&nbsp;Fourth Destination</div></td></tr>
   <tr id="five1" style="display:none"><td class="labelX">Pick Time: &nbsp;<img src="images\information.png" title=" Time Formate: 15:30 " /></td><td colspan="2"><input type="text" name="five_pickup" id="five_pickup" value="<?php echo $this->_tpl_vars['post']['five_pickup']; ?>
"  class="txt_boxX " maxlength="5" onblur="return time(this.id);" /><!--<select class="" name="am_pm5" id="am_pm5"  >
   <option value="">--</option>
<option value="am">am</option>
<option value="pm">pm</option>
</select>--><br/>
<span class="labelX" >Will Call</span>&nbsp;<input type="checkbox" name="five_will_call" id="five_will_call" onclick="check_check5();" /></td></tr>
<!--<tr id="five6" style="display:none">
           	<td class="labelXX" >Destination (Place):<br/></td>
<td><input name="destination_place5" type="text"  class="txt_boxXX " id="destination_place5" value="<?php echo $_SESSION['step1']['destination_place5']; ?>
" maxlength="150" />&nbsp;</td></tr>
-->
            <tr id="five2" style="display:none">
           	<td class="labelX" >Address:<br/></td>
<td><input name="five_address" type="text"  class="txt_boxX " id="five_address" value="<?php echo $this->_tpl_vars['post']['five_address']; ?>
" maxlength="150" /></td>
</tr>
<!--
<tr id="five7" style="display:none">
           	<td class="labelX" >STE/BLDG:<br/></td>
<td><input name="stebldg5" type="text"  class="txt_boxX " id="stebldg5" value="<?php echo $_SESSION['step1']['stebldg5']; ?>
" maxlength="150" />&nbsp;</td>
<td></td></tr>-->
 <tr id="five3" style="display:none" ><td class="labelX" >City:</td>
  <td><input name="five_city" type="text"  class="txt_boxX" id="five_city" value="" maxlength="150"/></td></tr>
                                                    
    <tr id="five4" style="display:none"> 	<td class="labelX" >State:</td>
<td><select id="five_state" name="five_state"  class="txt_boxX " />
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
" <?php if ($this->_tpl_vars['h_state'] != ''):  if ($this->_tpl_vars['states'][$this->_sections['n']['index']]['abbr'] == $this->_tpl_vars['h_state']): ?>selected<?php endif;  elseif ($this->_tpl_vars['states'][$this->_sections['n']['index']]['abbr'] == 'AZ'): ?>selected<?php endif; ?>>
			   <?php echo $this->_tpl_vars['states'][$this->_sections['n']['index']]['statename']; ?>
 </option> <?php endfor; endif; ?> </select></td></tr>								
     <tr id="five5" style="display:none" ><td class="labelX" >Zip Code: &nbsp;<img src="images\information.png" title="e.g. 12345 OR 12345-6789" /></td>
     <td><input name="five_zip" type="text"  class="txt_boxX " id="five_zip" value="<?php echo $this->_tpl_vars['post']['five_zip']; ?>
" maxlength="10" /><span class="SmallnoteTxt"> </span></td></tr>

<?php if ($this->_tpl_vars['triptype'] == 'Four Way' || $this->_tpl_vars['triptype'] == 'Five Way' || $this->_tpl_vars['triptype'] == 'Three Way' || $this->_tpl_vars['triptype'] == '' || $this->_tpl_vars['triptype'] == 'Round Trip'): ?> <tr id="b0" style="display:none"><td colspan="2"><div class="form_heading_1">&nbsp;Last Destination</div><br/><span class="labelX" >Use Same Pickup Information </span><input type="checkbox" name="sameadd" id="sameadd" onclick="test();"/></td></tr>
		<tr id="b1" style="display:none;"><td class="labelX" >Back To Address:&nbsp;<span  style="color:#F00;">*</span></td>
		<td><input name="backto" type="text"  id="backto" value="<?php echo $this->_tpl_vars['post']['backto']; ?>
" maxlength="150" class="txt_boxX" /></td></tr>
		<tr id="b2" style="display:none;"><td class="labelX" >Back To City:&nbsp;<span  style="color:#F00;">*</span></td>
		<td><input name="backtocity" type="text"  id="backtocity" value="" maxlength="150" class="txt_boxX"/></td>
		</tr>
		<tr id="b3" style="display:none;">
		<td class="labelX">Back To State:&nbsp;<span  style="color:#F00;">*</span></td>
		<td><select id="backtostate" name="backtostate"  />
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
" <?php if ($this->_tpl_vars['h_state'] != ''): ?> <?php if ($this->_tpl_vars['states'][$this->_sections['n']['index']]['abbr'] == $this->_tpl_vars['h_state']): ?> selected="selected" <?php endif;  elseif ($this->_tpl_vars['states'][$this->_sections['n']['index']]['abbr'] == 'AZ'): ?>selected<?php endif; ?>> <?php echo $this->_tpl_vars['states'][$this->_sections['n']['index']]['statename']; ?>
  </option><?php endfor; endif; ?> </select> </td></tr>
			  
        
		<tr id="b4" style="display:none;"><td class="labelX">Back To Zip Code:&nbsp;<span  style="color:#F00;">*</span>&nbsp;<img src="images\information.png" title="e.g. 12345-6789" /></td> 
		<td><input  name="backtozip" type="text"  id="backtozip" value="<?php echo $this->_tpl_vars['post']['backtozip']; ?>
" maxlength="5" class="txt_boxX"/></td></tr>
		<?php endif; ?>
       
      <!-- <tr><td colspan="2"><div class="form_heading_1">&nbsp;Billing Address</div><br/><span class="labelX" >Use Same Pickup Information </span><input type="checkbox" name="sameadd2" id="sameadd2" onclick="test2();"/></td></tr>
		<tr><td class="labelX" >Billing Address:&nbsp;<span  style="color:#F00;"></span></td>
		<td><input name="b_address" type="text"  id="b_address" value="<?php echo $this->_tpl_vars['post']['b_address']; ?>
" maxlength="150" class="txt_boxX" /></td></tr>
		<tr><td class="labelX" >Billing City:&nbsp;<span  style="color:#F00;"></span></td>
		<td><input name="b_city" type="text"  id="b_city" value="<?php echo $this->_tpl_vars['post']['b_city']; ?>
" maxlength="150" class="txt_boxX"/></td>
		</tr>
		<tr>
		<td class="labelX">Billing State:&nbsp;<span  style="color:#F00;"></span></td>
		<td><select id="b_state" name="b_state"  />
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
" <?php if ($this->_tpl_vars['h_state'] != ''): ?> <?php if ($this->_tpl_vars['states'][$this->_sections['n']['index']]['abbr'] == $this->_tpl_vars['post']['b_state']): ?> selected="selected" <?php endif;  elseif ($this->_tpl_vars['states'][$this->_sections['n']['index']]['abbr'] == 'AZ'): ?>selected<?php endif; ?>> <?php echo $this->_tpl_vars['states'][$this->_sections['n']['index']]['statename']; ?>
  </option><?php endfor; endif; ?> </select> </td></tr>
			  
        
		<tr><td class="labelX">Billing Zip Code:&nbsp;<span  style="color:#F00;"></span>&nbsp;<img src="images\information.png" title="e.g. 12345-6789" /></td> 
		<td><input  name="b_zip" type="text"  id="b_zip" value="<?php echo $this->_tpl_vars['post']['b_zip']; ?>
" class="txt_boxX"/></td></tr>-->
		
        
 <?php echo '
<script type="text/javascript" language="javascript">
$(document).ready(function(){
	$("#org_aptmonday").mask("29:59");
	$("#aptmonday").mask("29:59");
	$("#retmonday").mask("29:59");
	$("#org_apttuseday").mask("29:59");
	$("#apttuseday").mask("29:59");
	$("#rettuseday").mask("29:59");
	$("#org_aptwednesday").mask("29:59");
	$("#aptwednesday").mask("29:59");
	$("#retwednesday").mask("29:59");
	$("#org_aptthirsday").mask("29:59");
	$("#aptthirsday").mask("29:59");
	$("#retthirsday").mask("29:59");
	$("#org_aptfriday").mask("29:59");
	$("#aptfriday").mask("29:59");
	$("#retfriday").mask("29:59");
	$("#org_aptsaturday").mask("29:59");
	$("#aptsaturday").mask("29:59");
	$("#retsaturday").mask("29:59");
	
	$("#tdmonday").mask("9999-19-39");
	$("#tdtuseday").mask("9999-19-39");
	$("#tdwednesday").mask("9999-19-39");
	$("#tdthirsday").mask("9999-19-39");
	$("#tdfriday").mask("9999-19-39");
	$("#tdsaturday").mask("9999-19-39");	
		
	$("#tdmonday").datepicker( {minDate: \'0\'} );
	$("#tdtuseday").datepicker( {minDate: \'0\' } );
	$("#tdwednesday").datepicker( {minDate: \'0\' } );
	$("#tdthirsday").datepicker( {minDate: \'0\' } );
	$("#tdfriday").datepicker( {minDate: \'0\' } );
	$("#tdsaturday").datepicker( {minDate: \'0\' } );	
	});
function checkrecday(feildid){
	//alert(feildid);
	if($(\'#\'+feildid).attr(\'checked\')){
		$(\'#org_apt\'+feildid+\', #apt\'+feildid+\', #ret\'+feildid+\', #td\'+feildid).removeAttr(\'disabled\');
		var apptime = $(\'#apptime\').val();  			$(\'#apt\'+feildid).val(apptime); 
		var returnpickup = $(\'#returnpickup\').val(); 	$(\'#ret\'+feildid).val(returnpickup); 
		}
	else {
		$(\'#org_apt\'+feildid+\', #apt\'+feildid+\', #ret\'+feildid+\', #td\'+feildid).attr(\'disabled\',\'disabled\');
		$(\'#org_apt\'+feildid+\', #apt\'+feildid+\', #ret\'+feildid+\', #td\'+feildid).val(\'\');
		}
	
	}
/*function checkd(id){
	if($(\'#\'+id).attr(\'checked\')){ 
	$(\'#d1,#d2,#d3,#d4\').show();
	 } else {$(\'#d1,#d2,#d3,#d4\').hide(); } 
	}*/
</script>
'; ?>


<tr><td colspan="2"><div class="form_heading_1">Recurring (Blanket Orders)</div></td></tr>
<tr><td colspan="2"><table width="100%" border="0">
<tr>
<td class="form_heading_1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Day&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
<!--<td class="form_heading_1">App. Time</td>-->
<td class="form_heading_1">Pick Time</td>
<td class="form_heading_1">Return Time</td>
<td class="form_heading_1">Till Date</td></tr>
<tr><td><input type="checkbox" id="monday" name="monday" onchange="checkrecday(this.id);" /><span class="accesslable">Monday</span></td>
<!--<td><input  name="org_aptmonday" id="org_aptmonday" type="text" class="appt_txtbox" size="10" maxlength="5" onblur="return tValid(this.value,'org_aptmonday');" disabled="disabled"/></td>-->


<td><input  name="aptmonday" id="aptmonday" type="text" class="appt_txtbox" size="10" maxlength="5" onblur="return tValid(this.value,'aptmonday');" disabled="disabled"/></td>
<td><input  name="retmonday" id="retmonday" type="text" class="appt_txtbox" size="10" maxlength="5" onblur="return tValid(this.value,'retmonday');" disabled="disabled"/></td>
<td><input name="tdmonday" id="tdmonday" type="text"  class="appt_txtbox" size="15" maxlength="10" disabled="disabled"/></td></tr>

<tr><td><input type="checkbox" id="tuseday" name="tuseday"  onchange="checkrecday(this.id);" /><span class="accesslable">Tuesday</span></td>
<!--<td><input  name="org_apttuseday" id="org_apttuseday" type="text" class="appt_txtbox" size="10" maxlength="5" onblur="return tValid(this.value,'org_apttuseday');" disabled="disabled"/></td>
-->

<td><input  name="apttuseday" id="apttuseday" type="text" class="appt_txtbox" size="10" maxlength="5" onblur="return tValid(this.value,'apttuseday');" disabled="disabled"/></td>
<td><input  name="rettuseday" id="rettuseday" type="text" class="appt_txtbox" size="10" maxlength="5" onblur="return tValid(this.value,'rettuseday');" disabled="disabled"/></td>
<td><input name="tdtuseday" id="tdtuseday" type="text"  class="appt_txtbox" size="15" maxlength="10" disabled="disabled"/></td></tr>

<tr><td><input type="checkbox" id="wednesday" name="wednesday"  onchange="checkrecday(this.id);" /><span class="accesslable">Wednesday</span></td>
<!--<td><input  name="org_aptwednesday" id="org_aptwednesday" type="text" class="appt_txtbox" size="10" maxlength="5" onblur="return tValid(this.value,'org_aptwednesday');" disabled="disabled"/></td>-->


<td><input  name="aptwednesday" id="aptwednesday" type="text" class="appt_txtbox" size="10" maxlength="5" onblur="return tValid(this.value,'aptwednesday');" disabled="disabled"/></td>
<td><input  name="retwednesday" id="retwednesday" type="text" class="appt_txtbox" size="10" maxlength="5" onblur="return tValid(this.value,'retwednesday');" disabled="disabled"/></td>
<td><input name="tdwednesday" id="tdwednesday" type="text"  class="appt_txtbox" size="15" maxlength="10" disabled="disabled"/></td></tr>

<tr><td><input type="checkbox" id="thirsday" name="thirsday"  onchange="checkrecday(this.id);" /><span class="accesslable">Thursday</span></td>
<!--<td><input  name="org_aptthirsday" id="org_aptthirsday" type="text" class="appt_txtbox" size="10" maxlength="5" onblur="return tValid(this.value,'org_aptthirsday');" disabled="disabled"/></td>-->


<td><input  name="aptthirsday" id="aptthirsday" type="text" class="appt_txtbox" size="10" maxlength="5" onblur="return tValid(this.value,'aptthirsday');" disabled="disabled"/></td>
<td><input  name="retthirsday" id="retthirsday" type="text" class="appt_txtbox" size="10" maxlength="5" onblur="return tValid(this.value,'retthirsday');" disabled="disabled"/></td>
<td><input name="tdthirsday" id="tdthirsday" type="text"  class="appt_txtbox" size="15" maxlength="10" disabled="disabled"/></td></tr>

<tr><td><input type="checkbox" id="friday" name="friday"  onchange="checkrecday(this.id);" /><span class="accesslable">Friday</span></td>
<!--<td><input  name="org_aptfriday" id="org_aptfriday" type="text" class="appt_txtbox" size="10" maxlength="5" onblur="return tValid(this.value,'org_aptfriday');" disabled="disabled"/></td>
-->
<td><input  name="aptfriday" id="aptfriday" type="text" class="appt_txtbox" size="10" maxlength="5" onblur="return tValid(this.value,'aptfriday');" disabled="disabled"/></td>
<td><input  name="retfriday" id="retfriday" type="text" class="appt_txtbox" size="10" maxlength="5" onblur="return tValid(this.value,'retfriday');" disabled="disabled"/></td>
<td><input name="tdfriday" id="tdfriday" type="text"  class="appt_txtbox" size="15" maxlength="10" disabled="disabled"/></td></tr>


<tr><td><input type="checkbox" id="saturday" name="saturday"  onchange="checkrecday(this.id);" /><span class="accesslable">Saturday</span></td>
<!--<td><input  name="org_aptsaturday" id="org_aptsaturday" type="text" class="appt_txtbox" size="10" maxlength="5" onblur="return tValid(this.value,'org_aptsaturday');" disabled="disabled"/></td>
-->
<td><input  name="aptsaturday" id="aptsaturday" type="text" class="appt_txtbox" size="10" maxlength="5" onblur="return tValid(this.value,'aptsaturday');" disabled="disabled"/></td>
<td><input  name="retsaturday" id="retsaturday" type="text" class="appt_txtbox" size="10" maxlength="5" onblur="return tValid(this.value,'retsaturday');" disabled="disabled"/></td>
<td><input name="tdsaturday" id="tdsaturday" type="text"  class="appt_txtbox" size="15" maxlength="10" disabled="disabled"/></td></tr>
<tr><td>
<input type="hidden" name="mon" value="monday" />
<input type="hidden" name="tus" value="tuesday" />
<input type="hidden" name="wed" value="wednesday" />
<input type="hidden" name="thi" value="thursday" />
<input type="hidden" name="fri" value="friday" />
<input type="hidden" name="sat" value="saturday" />
</td></tr>
</table>
</td></tr>
<tr><td colspan="2"><div class="form_heading_1">Comments</div></td></tr> 
<tr><td colspan="2"><textarea name="comments" cols="45" rows="2" class="txtarea" id="comments"><?php echo $this->_tpl_vars['comments']; ?>
</textarea></td></tr> 
     </table> 	</td>
    </tr>
  <tr style="background-color:#eff7ff">

    <td align="right"><input  type="submit" value="Submit" id="submit" name="triprequest" class="btn_2" /></td>
    <td align="left">&nbsp;<input type="reset" value="Reset" class="btn_2"/>&nbsp;</td>
  </tr>
  <tr>

    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table></div></div>
</form>
</td></tr>
<tr><td>  <div class="content_bottom_img"> </div> </td></tr>
<tr><td height="9"></td></tr>
<tr><td><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?></td></tr>
 </table>
            	


</div>
</div>
<?php echo '
<script type="text/javascript">
$(document).ready(function(){
	chTrip(\'';  echo $this->_tpl_vars['post']['triptype'];  echo '\');
	app_type(\'';  echo $this->_tpl_vars['post']['apptype'];  echo '\');
	});
</script>
'; ?>

</body>
</html>