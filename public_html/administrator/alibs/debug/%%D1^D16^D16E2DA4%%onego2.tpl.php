<?php /* Smarty version 2.6.12, created on 2020-06-16 20:17:02
         compiled from reqtpls/onego2.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'date_format', 'reqtpls/onego2.tpl', 1963, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "headerinner.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&libraries=places&key=AIzaSyBBE53xDKH93kCWSWREyehlzH8N_t2R2lw"></script>

<?php echo ' 

<script language="JavaScript" type="text/javascript" src="suggest.js"></script> 

<script type="text/javascript">

$(document).ready(function() {

	$("#search").validate();

	$("#returnpickupUSS").mask("29:59");

	$("#apptimeUSS").mask("29:59:59");

	$("#dobUSS").mask("99/99/9999");

	$("#phnumUSS").mask("(454) 654-6546");

	});	



function deleteRec(id)

		{ var ok;

		ok=confirm("Are you sure you want to delete this record");

		if (ok)

		{ $.post("delete.php", {id: id}, function(data)

			{ });

			$(\'#tr\'+id).hide();

			//location.reload();

			 //location.href="reqdetails.php?delId="+id;

		return true;}else{			

			return false;}

}

function stchange(val,req)

{

  if (val != \'\'){		

 	location.href="reqdetails.php?st="+val+"&req="+req;

	return true;}else{

			return false;

		}			

	}	

function ChangeStatus(val,st){

var ans= 1;

if(st == \'3\'){

     jPrompt(\'Specify the reason for disapproving:\', \'\', \' Medical Transportation\', function(r) {

	  if(typeof(r) == "undefined"){

	    Ask();

	  }else{

	  if(r == \'\' || r == null){ jAlert(\'You must Specify a reason for disapproving\'); return false; }	  	  else{

	    ans = r;  	

        AjaxSend(val,st,ans); }

	  }

	});

}

if(st == \'2\'){

   AjaxSend(val,st,ans);

  }

}	

function removeTr(val){

  $(\'#tr\'+val).remove();

}

function Ask(){

    jPrompt(\'Specify the reason for disapproving:\', \'\', \' Medical Transportation\', function(r) {

	  if(typeof(r) == "undefined"){

	  jAlert(\'You must Specify a reason for disapproving\'); 	  

	    Ask();

	  }else{

	  return r; }

	});

}	

function AjaxSend(val,st,ans){

   $.post("hosprequests.php", {queryString: ""+val, sta:""+st, rea: ""+ans}, function(data){

  if(data.length > 0) {   

        if(st == \'3\'){	

          if(data == \'Success\'){

            //var url = window.location;

            //location.href= url;

           removeTr(val); return false;

          }else{

            //var url = window.location;

            //location.href= url;

            removeTr(val); return false;

          }	

		}

		else if(st == \'2\'){ 

          if(data == \'Success\'){

           //var url = window.location;

           //location.href= url;

            removeTr(val); return false;

          }else{

           //var url = window.location;

           //location.href= url;

            removeTr(val); return false;

          }		

		} 

        else{

		return false;	

		} 		

      }

	 });

}



</script> 

'; ?>


<?php echo ' 

<script type="text/javascript">

$(document).ready(function(){	

$("#dob1").datepicker( {yearRange:\'-120:00\'} );

$("#dob1").mask("9999-99-99");

$("#appdate").mask("9999-99-99");

$(\'#adduser\').validate();

});

function test(){

if($(\'#sameadd\').attr(\'checked\')){	

var v=$(\'#autocomplete\').val();

var z=$(\'#psuiteroom\').val();

var x=$(\'#picklocation\').val();

var y=$(\'#pickup_instruction\').val();

    $(\'#autocomplete3\').val(v);

	$(\'#bsuiteroom\').val(z);

    $(\'#backtolocation\').val(x);

	$(\'#backto_instruction\').val(y);

 } 

	else { 

	$(\'#autocomplete3\').val(\'\');

	$(\'#bsuiteroom\').val(\'\');

    $(\'#backtolocation\').val(\'\');

	$(\'#backto_instruction\').val(\'\');

 }}

$(document).ready(function (){

$(\'#org_apptime\').mask(\'29:59\');

$(\'#three_pickup\').mask(\'29:59\');

$(\'#four_pickup\').mask(\'29:59\');

$(\'#five_pickup\').mask(\'29:59\');

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

	$(\'#b5\').hide();

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

	$(\'#b5\').show();

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

	$(\'#b5\').show();

	

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

	}	

}

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

	}	

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

alert(\'Please enter correct Appointment/Pick Time!\');

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

/*function initialize() {

  autocomplete = new google.maps.places.Autocomplete(

(document.getElementById(\'autocomplete\')),

      { types: [\'geocode\'] });

}

function initialize2() {

  autocomplete = new google.maps.places.Autocomplete(

(document.getElementById(\'autocomplete2\')),

      { types: [\'geocode\'] });

}

function initialize3() {

  autocomplete = new google.maps.places.Autocomplete(

(document.getElementById(\'autocomplete3\')),

      { types: [\'geocode\'] });

}	 



function initialize() {

  autocomplete = new google.maps.places.Autocomplete(

(document.getElementById(\'autocomplete\')),

      { types: [\'geocode\'] });

      $.post("../google_api_log.php", {type: ""+\'Address Populate\'}, function(data2){ });

}

function initialize2() {

  autocomplete = new google.maps.places.Autocomplete(

(document.getElementById(\'autocomplete2\')),

      { types: [\'geocode\'] });

      $.post("../google_api_log.php", {type: ""+\'Address Populate\'}, function(data2){ });

}

function initialize3() {

  autocomplete = new google.maps.places.Autocomplete(

(document.getElementById(\'autocomplete3\')),

      { types: [\'geocode\'] });

      $.post("../google_api_log.php", {type: ""+\'Address Populate\'}, function(data2){ });

}*/
function googleapihandler(id,data){
	
		/*  $(\'#\'+id).blur(function(){
					   $(\'#div_\'+id).remove();
		 });*/
		  var str1 = document.getElementById(id);
		  var curLeft=0;
		  if (str1.offsetParent){
			  while (str1.offsetParent){
		   curLeft += str1.offsetLeft;
		   str1 = str1.offsetParent;
			  }
		  }
		  var str2 = document.getElementById(id);
		  var curTop=20;
		  if (str2.offsetParent){
			  while (str2.offsetParent){
		   curTop += str2.offsetTop;
		   str2 = str2.offsetParent;
			  }
		  }
		  $(\'#div_\'+id).remove();
		  $(\'#\'+id).parent().append(\'<div id="div_\'+id+\'"></div>\');
		  var ss = document.getElementById(\'div_\'+id);
		  var str =data
		  if(str.length < 1)
			  document.getElementById(\'div_\'+id).style.visibility = "hidden";
		  else
			  ss.setAttribute(\'style\',\'position:absolute;top:\'+curTop+\';left:\'+curLeft+\';width:250;z-index:1;padding:5px;border: 0px solid #000000; overflow:auto; height:105; background-color:#F5F5FF; z-index:9999;\');
		  ss.innerHTML = \'\';
  
		 // console.log(data);
		$(\'body\').click(function() {
       $(\'#div_\'+id).remove();
});
		  $.each(data,function(index,item){
			  
			   var suggest = \'<div  \';
            suggest += \' \';
            suggest += \'onclick="javascript:$(\\\'#\'+id+\'\\\').val(\\\'\'+item+\'\\\');$(\\\'#div_\'+id+\'\\\').remove();" \';
            suggest += \'class="small">\' + item + \'</div>\';
            ss.innerHTML += suggest;
			  
			  });
		   $.post("../google_api_log.php", {type: ""+\'Address Populate\'});
		  
		  
}
function initialize() {
 /* autocomplete = new google.maps.places.Autocomplete(
(document.getElementById(\'autocomplete\')),
      { types: [\'geocode\'] });*/
	  
	  $(\'#autocomplete\').keyup(function(e){
		  switch(e.keyCode) {

			case 38: // up
			case 37: // left
			case 39: // right
			case 40: // down	
			case 9:  // tab
			case 13: // return	
			case 17: // return	
			case 18: // return	
			case 27: // return	
			case 20: // return
			case 16: // return				
				break;
			default:
				
		  var myval = $(\'#autocomplete\').val(); 
		 if(myval.length > 5){ 
		  $.getJSON(\'../googleapi.php?input=\'+myval,function(data){
			  googleapihandler(\'autocomplete\',data);
			  
			  });	 
		 
		 }
		 	break;
		  }
	  
	  });
	 
     // 
}
function initialize2() {
 /* autocomplete = new google.maps.places.Autocomplete(
(document.getElementById(\'autocomplete2\')),
      { types: [\'geocode\'] });
        $(\'#autocomplete2\').keydown(function(){ $.post("../google_api_log.php", {type: ""+\'Address Populate\'}, function(data2){ });});*/
		
		 $(\'#autocomplete2\').keyup(function(e){
			 switch(e.keyCode) {

			case 38: // up
			case 37: // left
			case 39: // right
			case 40: // down	
			case 9:  // tab
			case 13: // return	
			case 17: // return	
			case 18: // return	
			case 27: // return	
			case 20: // return
			case 16: // return				
				break;
			default:
		  var myval = $(\'#autocomplete2\').val(); 
		 if(myval.length > 5){ 
		  $.getJSON(\'../googleapi.php?input=\'+myval,function(data){
			  googleapihandler(\'autocomplete2\',data);
			  
			  });	 
		 
		 }
		 
		 break;
		}
	  
	  });
	  	
}
function initialize3() {
 /* autocomplete = new google.maps.places.Autocomplete(
(document.getElementById(\'autocomplete3\')),
      { types: [\'geocode\'] });
        $(\'#autocomplete3\').keydown(function(){ $.post("../google_api_log.php", {type: ""+\'Address Populate\'}, function(data2){ });});*/
		
		$(\'#autocomplete3\').keyup(function(e){
			switch(e.keyCode) {

			case 38: // up
			case 37: // left
			case 39: // right
			case 40: // down	
			case 9:  // tab
			case 13: // return	
			case 17: // return	
			case 18: // return	
			case 27: // return	
			case 20: // return
			case 16: // return				
				break;
			default:
		  var myval = $(\'#autocomplete3\').val(); 
		 if(myval.length > 5){ 
		  $.getJSON(\'../googleapi.php?input=\'+myval,function(data){
			  googleapihandler(\'autocomplete3\',data);
			  
			  });	 
		 
		 }
		 	break;
			}
	  
	  });
}
function initialize4() {
 /* autocomplete = new google.maps.places.Autocomplete(
(document.getElementById(\'ins_billing_address\')),
      { types: [\'geocode\'] });
        $(\'#ins_billing_address\').keydown(function(){ $.post("../google_api_log.php", {type: ""+\'Address Populate\'}, function(data2){ });});
*/
$(\'#ins_billing_address\').keyup(function(e){
	switch(e.keyCode) {

			case 38: // up
			case 37: // left
			case 39: // right
			case 40: // down	
			case 9:  // tab
			case 13: // return	
			case 17: // return	
			case 18: // return	
			case 27: // return	
			case 20: // return
			case 16: // return				
				break;
			default:	
		  var myval = $(\'#ins_billing_address\').val(); 
		 if(myval.length > 5){ 
		  $.getJSON(\'../googleapi.php?input=\'+myval,function(data){
			  googleapihandler(\'ins_billing_address\',data);
			  
			  });	 
		 
		 }
		 break;
	}
	  
	  });
}
function initialize5() {
 /* autocomplete = new google.maps.places.Autocomplete(
(document.getElementById(\'pp_billing_address\')),
      { types: [\'geocode\'] });
       $(\'#pp_billing_address\').keydown(function(){ $.post("../google_api_log.php", {type: ""+\'Address Populate\'}, function(data2){ });});*/
	   
	$(\'#pp_billing_address\').keyup(function(e){
		switch(e.keyCode) {

			case 38: // up
			case 37: // left
			case 39: // right
			case 40: // down	
			case 9:  // tab
			case 13: // return	
			case 17: // return	
			case 18: // return	
			case 27: // return	
			case 20: // return
			case 16: // return				
				break;
			default:
		  var myval = $(\'#pp_billing_address\').val(); 
		 if(myval.length > 5){ 
		  $.getJSON(\'../googleapi.php?input=\'+myval,function(data){
			  googleapihandler(\'pp_billing_address\',data);
			  
			  });	 
		 
		 }
		 break;
		}
	  
	  });   
}
function initialize6() {
 /* autocomplete = new google.maps.places.Autocomplete(
(document.getElementById(\'autocomplete4\')),
      { types: [\'geocode\'] }); //alert(types);
      $(\'#autocomplete4\').keydown(function(){ $.post("../google_api_log.php", {type: ""+\'Address Populate\'}, function(data2){ });});*/
	
	$(\'#autocomplete4\').keyup(function(e){
		switch(e.keyCode) {

			case 38: // up
			case 37: // left
			case 39: // right
			case 40: // down	
			case 9:  // tab
			case 13: // return	
			case 17: // return	
			case 18: // return	
			case 27: // return	
			case 20: // return
			case 16: // return				
				break;
			default:
		  var myval = $(\'#autocomplete4\').val(); 
		 if(myval.length > 5){ 
		  $.getJSON(\'../googleapi.php?input=\'+myval,function(data){
			  googleapihandler(\'autocomplete4\',data);
			  
			  });	 
		 
		 }
		 	break;
		}
	  
	  });     
	  
}
function initialize7() {
 /* autocomplete = new google.maps.places.Autocomplete(
(document.getElementById(\'autocomplete5\')),
      { types: [\'geocode\'] });


 $(\'#autocomplete5\').keydown(function(){ $.post("../google_api_log.php", {type: ""+\'Address Populate\'}, function(data2){ });});
     // $.post("../google_api_log.php", {type: ""+\'Address Populate\'}, function(data2){ });*/
	 
	 $(\'#autocomplete5\').keyup(function(e){
		 switch(e.keyCode) {

			case 38: // up
			case 37: // left
			case 39: // right
			case 40: // down	
			case 9:  // tab
			case 13: // return	
			case 17: // return	
			case 18: // return	
			case 27: // return	
			case 20: // return
			case 16: // return				
				break;
			default:
		  var myval = $(\'#autocomplete5\').val(); 
		 if(myval.length > 5){ 
		  $.getJSON(\'../googleapi.php?input=\'+myval,function(data){
			  googleapihandler(\'autocomplete5\',data);
			  
			  });	 
		 
		 }
		 	break;
		 }
	  
	  });     
}


$(document).ready(function(){	

$("#startdate22").datepicker( {maxDate: \'-0\', dateFormat: \'mm/dd/yy\'} );

$("#enddate22").datepicker( {maxDate: \'-0\', dateFormat: \'mm/dd/yy\'} );

$("#startdate22,#enddate22").mask("99/99/9999");

});	

</script> 





'; ?>


<body onLoad="initialize(); initialize2(); initialize3();">

<div style="width:612px;  float:left;"></div>

  <table width="80%" border="0" cellspacing="0" cellpadding="0" align="center" bgcolor="#FFFFFF">

    <tr>

      <td><table width="100%" border="0" cellspacing="0" cellpadding="0">

          <tr>

            <td height="19" colspan="2" align="center" class="okmsg"><span class="okmsg"><?php if ($this->_tpl_vars['msgs'] != ''): ?> <?php echo $this->_tpl_vars['msgs']; ?>
 <?php endif; ?>

              

              <?php if ($this->_tpl_vars['errors'] != ''): ?> <?php echo $this->_tpl_vars['errors']; ?>
 <?php endif; ?></span></td>

          </tr>

          <tr>

            <td height="19" colspan="2" align="center"><div align="right" id="add_div" style="padding-right:40px; padding-bottom:5px;"> [<a href="javascript:history.back();">Back</a>]</div></td>

          </tr>

          <tr>

            <td colspan="2"><form name="search" id="search" method="post" action="" >

                <table width="100%" border="0">

                  <tr>

                    <td><strong>Patient:</strong></td>

                    <td><input type="text" name="clientname" id="pname" value="<?php echo $this->_tpl_vars['data']['0']['clientname']; ?>
"  class="required" onKeyUp="searchSuggest();" autocomplete="off"/>

                      <div id="layer1"></div></td>

                    <td><strong></strong></td>

                    <td></td>

                  </tr>

                  <tr>

                    <td><strong>Start Date:</strong></td>

                    <td><input type="text" name="startdate" id="startdate22" class="required" value="<?php echo $this->_tpl_vars['startdate']; ?>
"/></td>

                    <td><strong>Till Date:</strong></td>

                    <td><input type="text" name="enddate" id="enddate22" class="required" size="32"  value="<?php echo $this->_tpl_vars['enddate']; ?>
"/></td>

                  </tr>

                  <tr>

                    <td colspan="2"><span  style="font-size:9px; color:#F00;">Date format mm/dd/yyyy</span></td>

                  </tr>

                  <tr>

                    <td>&nbsp;</td>

                    <td><input type="submit" value="Search" name="search" class="btn"/></td>

                    <td>&nbsp;</td>

                    <td>&nbsp;</td>

                  </tr>

                </table>

              </form></td>

          </tr>

          <?php if ($this->_tpl_vars['pendingids'] != ''): ?>

          <tr ><td colspan="2" bgcolor="border-collapse:#000 1px solid;"><form name="search" id="search2" method="post" action="index33.php" >

                <table width="100%" border="0" >

                  <tr>

                    <td colspan="2"><span  style="font-size:11px; color:#F00;">&raquo; Please verify patient information from below form before deleting trips.</span></td>

                  </tr>

                  <tr>

                    

                    <td>&nbsp;<input type="submit" name="submit" value="Delete all searched trips" class="inputButton btn"  />

                        <input type="hidden" name="pendingids" value="<?php echo $this->_tpl_vars['pendingids']; ?>
"  /></td>

                  </tr>

                </table>

              </form></td></tr>

              <?php endif; ?>

          <?php if ($this->_tpl_vars['data'] != ''): ?>

          <tr>

            <td height="19" align="left" class="admintopheading"></td>

            <td class="admintopheading" style="text-align:center;">REQUESTS DETAIL <!--<?php if ($this->_tpl_vars['clinic'] != ''): ?>[<?php echo $this->_tpl_vars['clinic']; ?>
]<?php endif; ?>-->  .:||:.  Total Trips: <?php echo $this->_tpl_vars['c']; ?>
<br/>

              <span style=" color:#F00;" >Update All Information Along with Blanket Form.</span></td>

          </tr>

          <tr>

            <td height="44" colspan="2" align="center"  valign="top" style="padding-bottom:50px;"><div style="width:700px; border: #F00 0px solid; float:left;">

                <form name="adduser" id="adduser" method="post" action="index22.php" onSubmit="javascript:load();">

                  <table width="80%" border="0" cellspacing="2" cellpadding="2" align="center">

                    <tr>

                      <td colspan="3" valign="top" class="admintopheading" align="left"><strong><span class="form_heading">Member Information</span></strong></td>

                    </tr>

                    <tr>

                  <td align="left" valign="top" class="labels">Billing Account on File:</td>

                  <td colspan="2" align="left"><select name="account"  id="account"  class="txt_box required">

                    <option  value="">-- Select Billing Account --</option>

                      <?php unset($this->_sections['n']);
$this->_sections['n']['name'] = 'n';
$this->_sections['n']['loop'] = is_array($_loop=$this->_tpl_vars['accounts']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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

					<option value="<?php echo $this->_tpl_vars['accounts'][$this->_sections['n']['index']]['id']; ?>
" <?php if ($this->_tpl_vars['accounts'][$this->_sections['n']['index']]['id'] == $this->_tpl_vars['data']['0']['account']): ?>selected<?php endif; ?>> <?php echo $this->_tpl_vars['accounts'][$this->_sections['n']['index']]['account_name']; ?>
 </option>

                		<?php endfor; endif; ?>

				    </select></td>

                </tr>

                    <tr>

                      <td align="left" valign="top" class="labels"><strong><span class="label">Patient Name</span>:</strong></td>

                      <td colspan="2" align="left"><input name="pname" type="text" class="txt_box required" id="pname11"  value="<?php echo $this->_tpl_vars['data']['0']['clientname']; ?>
" maxlength="50" />

                        <input type="hidden" name="hos_is" value="<?php echo $this->_tpl_vars['data']['0']['userid']; ?>
"  /></td>

                    </tr>

                    <tr>

                      <td align="left" valign="top" class="labels"><span class="label">Patient Phone No: </span></td>

                      <td colspan="2" align="left"><input type="text" name="phnum" id="phnum" value="<?php echo $this->_tpl_vars['data']['0']['phnum']; ?>
" class="txt_box" maxlength="14" />

                        &nbsp;</td>

                    </tr>

                    <tr>

                      <td align="left" valign="top" class="labels"><span class="label">P.O #: </span></td>

                      <td colspan="2" align="left"><input type="text" name="po" id="po" value="<?php echo $this->_tpl_vars['data']['0']['po']; ?>
" class="txt_box" maxlength="14" />

                        &nbsp;</td>

                    </tr>

                    <tr>

                      <td align="left" valign="top" class="labels"><strong><span class="label">Member DOB </span>:</strong></td>

                      <td colspan="2" align="left"><input type="text" name="dob" id="dob1" value="<?php echo $this->_tpl_vars['data']['0']['dob']; ?>
" class="txt_box required" />

                        <span class="SmallnoteTxt">*</span>(yyyy-mm-dd)</td>

                    </tr>

                    <tr>

                      <td align="left" valign="top" class="labels"><span class="label">Patient Weight: </span></td>

                      <td colspan="2" align="left"><input type="text" name="patient_weight" id="patient_weight" value="<?php echo $this->_tpl_vars['data']['0']['patient_weight']; ?>
" class="txt_box required" maxlength="14" />

                        &nbsp;* (Lbs)</td>

                    </tr>

                    <tr>

                      <td colspan="3" valign="top" class="admintopheading"><strong><span class="form_heading">Trip Information</span></strong></td>

                    </tr>

                    <tr>

                      <td width="30%" align="left" valign="top" class="labels"><strong><span class="label">Select Trip Type</span>:</strong></td>

                      <td colspan="2" align="left"><select name="triptype"  class="txt_box required" id="triptype" onChange="return chTrip(this.value);" >

                          <option value="">--Select Trip Type--</option>

                          <option value="One Way" 	<?php if ($this->_tpl_vars['data']['0']['triptype'] == 'One Way'): ?>selected<?php endif; ?>>One Way--(1 Destination)</option>

                          <option value="Round Trip" 	<?php if ($this->_tpl_vars['data']['0']['triptype'] == 'Round Trip'): ?>selected<?php endif; ?>>Two Way--(2 Destinations)</option>

                          <!--  <option value="Three Way" 	<?php if ($this->_tpl_vars['data']['0']['triptype'] == 'Three Way'): ?>selected<?php endif; ?>>Three Way--(3 Destinations)</option>

                          <option value="Four Way" 	<?php if ($this->_tpl_vars['data']['0']['triptype'] == 'Four Way'): ?>selected<?php endif; ?>>Four Way--(4 Destinations)</option>

                          <option value="Five Way" 	<?php if ($this->_tpl_vars['data']['0']['triptype'] == 'Five Way'): ?>selected<?php endif; ?>>Five Way--(5 Destinations)</option>-->

                        </select>

                        &nbsp;<span class="SmallnoteTxt">*</span></td>

                    </tr>

                    <tr>

                      <td align="left" valign="top" class="labels"><strong><span class="label">Vehicle Preference:</span></strong></td>

                      <td colspan="2" align="left"><select name="vehtype" class="required txt_box" id="vehtype"  >

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
" <?php if ($this->_tpl_vars['data']['0']['vehtype'] == $this->_tpl_vars['vehiclepref'][$this->_sections['q']['index']]['id']): ?>selected<?php endif; ?>><?php echo $this->_tpl_vars['vehiclepref'][$this->_sections['q']['index']]['vehtype']; ?>
</option>

                          

                      <?php endfor; endif; ?>

                        

                        </select>

                        &nbsp;<span class="SmallnoteTxt">*</span></td>

                    </tr>

                    <tr>

                  <td width="30%" align="left" valign="top" class="labels"><strong><span class="label">Oxygen Required ?</span></strong></td>

                  <td colspan="2" align="left"><select name="oxygen"  class="txt_box required" id="oxygen" >

                      <option value="">Select Oxygen Option</option>

                      <option value="Yes" <?php if ($this->_tpl_vars['data']['0']['oxygen'] == 'Yes'): ?>selected<?php endif; ?>> Yes </option>

                      <option value="No" <?php if ($this->_tpl_vars['data']['0']['oxygen'] == 'No'): ?>selected<?php endif; ?>> No </option>                     

                    </select>

                    &nbsp;<span class="SmallnoteTxt">*</span></td>

                </tr>   

                    <tr>

                      <td colspan="3" valign="top" class="admintopheading"><strong><span class="form_heading">Appointment Information</span></strong></td>

                    </tr>

                    <tr>

                      <td align="left" valign="top" class="labels"><strong><span class="label">Appointment Date</span>:</strong></td>

                      <td colspan="2" align="left"><input type="text" name="appdate" id="appdate" value="<?php echo $this->_tpl_vars['data']['0']['appdate']; ?>
" class="required txt_box"  maxlength="15" />

                        &nbsp;<span class="SmallnoteTxt">*</span> <span class="SmallnoteTxt">(yyyy-mm-dd)</span></td>

                    </tr>

                    <tr>

                      <td colspan="3" height="3"></td>

                    </tr>

                    <tr>

                      <td align="left" valign="top" class="labels"><strong><span class="label">Appointment Time</span>:</strong></td>

                      <td colspan="2" align="left"><input type="text" name="org_apptime" id="org_apptime" value="<?php echo $this->_tpl_vars['data']['0']['org_apptime']; ?>
" class="required txt_box"  maxlength="5"  onblur="return time(this.id);"/>

                        &nbsp;<span class="SmallnoteTxt">* (e.g. 15:30 Hrs)</span></td>

                    </tr>

                    <tr>

                      <td align="left" valign="top" class="labels"><strong><span class="label">Pick Time</span>:</strong></td>

                      <td colspan="2" align="left"><input type="text" name="apptime" id="apptime" value="<?php echo $this->_tpl_vars['data']['0']['apptime']; ?>
" class="required txt_box"  maxlength="5"  onblur="return time(this.id);" onKeyUp="ptime(this.value);"/>

                        &nbsp;<span class="SmallnoteTxt">* (e.g. 15:30 Hrs)</span></td>

                    </tr>

                    <tr  id="rpu">

                      <td align="left" valign="top" class="labels"><strong><span class="label">Return Pickup</span>:</strong><br/>

                        <span style="color:#666; font-size:10px;">For last destination</span></td>

                      <td colspan="2" align="left"><select name="puchoice" id="puchoice" class="txt_box required" onChange="return pUchoice(this.value);" >

                          <option value="Time" <?php if ($this->_tpl_vars['data']['0']['pickupchoice'] == 'Time'): ?>selected<?php endif; ?>>Time</option>

                          <option value="Will Call" <?php if ($this->_tpl_vars['data']['0']['pickupchoice'] == 'Will Call'): ?>selected<?php endif; ?>>Will Call</option>

                        </select>

                        &nbsp;<span class="SmallnoteTxt">*</span></td>

                    </tr>

                    <tr id="rpTime" style="display:none;">

                      <td align="left" valign="top" class="labels"><span class="label">Return Pick Time</span>:</td>

                      <td colspan="2" align="left"><input type="text" name="returnpickup" id="returnpickup" value="<?php echo $this->_tpl_vars['data']['0']['returnpickup']; ?>
"  class="txt_box required " maxlength="5" onBlur="return time(this.id);" />

                        &nbsp;<span class="SmallnoteTxt">* (e.g. 15:30 Hrs)</span></td>

                    </tr>

                    <tr>

                      <td align="left" valign="top" class="labels"><span class="label">Today Date:</span></td>

                      <td colspan="2" align="left"><input type="text" name="todaydate" id="todaydate" value='<?php echo ((is_array($_tmp=time())) ? $this->_run_mod_handler('date_format', true, $_tmp) : smarty_modifier_date_format($_tmp)); ?>
' class="txt_box required" readonly  /></td>

                    </tr>

                    <tr align="left">

                      <td colspan="3" valign="top">&nbsp;</td>

                    </tr>

                    <tr>

                      <td colspan="2"><div class="admintopheading">General Options</div></td>

                    </tr>

                    <tr>

                      <td colspan="2"><table width="100%" border="0">

                          <tr>

                            <td height="4px" colspan="4"></td>

                          </tr>

                          <tr>

                            <!--<td class="labels">Stretcher :</td>

                            <td class="labels"><input type="checkbox" name="stretcher" value="Yes" <?php if ($this->_tpl_vars['data']['0']['stretcher'] == 'Yes'): ?> checked="checked"<?php endif; ?>/>

                              &nbsp;Yes </td>-->

                            <td class="labels">Bariatric Stretcher :</td>

                            <td class="labels"><input type="checkbox" name="bar_stretcher" value="Yes" <?php if ($this->_tpl_vars['data']['0']['bar_stretcher'] == 'Yes'): ?> checked="checked"<?php endif; ?>/>

                              &nbsp;Yes</td>

                          </tr>

                          <tr>

                            <td class="labels">2 Man Team :</td>

                            <td class="labels"><input type="checkbox" name="dstretcher" value="Yes" <?php if ($this->_tpl_vars['data']['0']['dstretcher'] == 'Yes'): ?> checked="checked"<?php endif; ?>/>

                              &nbsp;Yes </td>

                           <!-- <td class="labels">Escort :</td>

                            <td class="labels"><input type="checkbox" name="escort" value="Yes" <?php if ($this->_tpl_vars['data']['0']['escort'] == 'Yes'): ?> checked="checked"<?php endif; ?> />

                              &nbsp;Yes</td>-->

                          </tr>



                          <tr>

                            <!--<td class="labels">Wheel Chair :</td>

                            <td class="labels"><input type="checkbox" name="wchair" value="Yes" <?php if ($this->_tpl_vars['data']['0']['wchair'] == 'Yes'): ?> checked="checked"<?php endif; ?>/>

                              &nbsp;Yes</td>-->

                            <td class="labels">Wheel Chair Rental :</td>

                            <td class="labels"><input type="checkbox" name="dwchair" value="Yes" <?php if ($this->_tpl_vars['data']['0']['dwchair'] == 'Yes'): ?> checked="checked"<?php endif; ?>/>

                              &nbsp;Yes</td>

                          </tr>

                          <!--<tr>

                            <td class="labels">0xygen :</td>

                            <td class="labels"><input type="checkbox" name="oxygen" value="Yes" <?php if ($this->_tpl_vars['data']['0']['oxygen'] == 'Yes'): ?> checked="checked"<?php endif; ?>/>

                              &nbsp;Yes</td>

                            <td class="labels"></td>

                            <td class="labels"></td>

                          </tr>-->

                        </table></td>

                    </tr>

                    <tr>

                      <td colspan="3"><div class="admintopheading">Pick Up Information</div></td>

                    </tr>

                    <tr>

                      <td valign="top"   class="labelX" >Pick Up Location:</td>

                      <td><input type="text" name="picklocation" id="picklocation"  class="txt_box" value="<?php echo $this->_tpl_vars['data']['0']['picklocation']; ?>
" size="40" />

                        <span class="SmallnoteTxt"></span></td>

                      <td>&nbsp;</td>

                    </tr>

                    <tr>

                      <td valign="top"   class="labelX" ><strong>Pick up address:</strong></td>

                      <td width="47%"><input type="text" name="pickaddress" id="autocomplete" value="<?php echo $this->_tpl_vars['pckaddr']; ?>
" class="txt_box required" size="40" />

                        &nbsp;<span class="SmallnoteTxt">*</span></td>

                     

                    </tr>

                    <tr>

                      <td class="labelX">Suite #/Room #:</td>

                      <td><input type="text" name="psuiteroom" id="psuiteroom" value="<?php echo $this->_tpl_vars['psuiteroom']; ?>
"  class="txt_box"  maxlength="50" /></td>

                      <td></td>

                    </tr>

                    <tr>

                      <td valign="top" class="labelX" ><strong>Pick Up Instructions:</strong></td>

                      <td valign="top"><textarea name="pickup_instruction" cols="60" rows="5" id="pickup_instruction" tabindex="28" style="width:300px;"  ><?php echo $this->_tpl_vars['data']['0']['pickup_instruction']; ?>
</textarea></td>

                      <td valign="top">&nbsp;</td>

                    </tr>

                    <tr>

                      <td class="labelX">Pickup Phone #:</td>

                      <td><input type="text" name="p_phnum" id="p_phnum" value="<?php echo $this->_tpl_vars['data']['0']['p_phnum']; ?>
" class="txt_box " maxlength="14" />

                        &nbsp;<span class="SmallnoteTxt"></span></td>

                      <td></td>

                    </tr>

                    <tr>

                      <td colspan="3"><div class="admintopheading">Destination Address</div></td>

                    </tr>

                    <tr>

                      <td valign="top"   class="labelX" >Drop Location:</td>

                      <td><input type="text" name="droplocation" id="droplocation"  class="txt_box" value="<?php echo $this->_tpl_vars['data']['0']['droplocation']; ?>
" size="40" />

                        <span class="SmallnoteTxt"></span></td>

                      <td>&nbsp;</td>

                    </tr>

                    <tr>

                      <td width="37%" valign="top"  class="labelX" ><strong>Destination Address:<br/>

                        <span class="SmallnoteTxt"></span></strong></td>

                      <td colspan="2"><input type="text" name="destination" id="autocomplete2" value="<?php echo $this->_tpl_vars['drpaddr']; ?>
"  class="txt_box"  size="40" />

                        &nbsp;<span class="SmallnoteTxt">*</span></td>

                    </tr>

                    <tr>

                      <td class="labelX">Suite #/Room #:</td>

                      <td><input type="text" name="dsuiteroom" id="dsuiteroom" value="<?php echo $this->_tpl_vars['dsuiteroom']; ?>
"  class="txt_box"  maxlength="50" /></td>

                      <td></td>

                    </tr>

                    <tr>

                      <td class="labels">Destination Instructions: </td>

                      <td colspan="2"><textarea rows="3" cols="40" name="destination_instruction" id="destination_instruction"><?php echo $this->_tpl_vars['data']['0']['destination_instruction']; ?>
</textarea></td>

                    </tr>

                    <tr>

                      <td class="labelX">Destination Phone Number:</td>

                      <td><input type="text" name="d_phnum" id="d_phnum" value="<?php echo $this->_tpl_vars['data']['0']['d_phnum']; ?>
" class="txt_box " maxlength="14" tabindex="4"/>

                        &nbsp;<span class="SmallnoteTxt"></span></td>

                      <td></td>

                    </tr>

                    <?php if ($this->_tpl_vars['triptype'] == 'Four Way' || $this->_tpl_vars['triptype'] == 'Five Way' || $this->_tpl_vars['triptype'] == 'Three Way' || $this->_tpl_vars['triptype'] == ''): ?> <?php endif; ?>

                    <tr id="three0" style="display:none">

                      <td colspan="3"><div class="admintopheading">Second Destination Address</div></td>

                    </tr>

                    <tr id="three1" style="display:none">

                      <td class="labels">Pick Time: </td>

                      <td colspan="2"><input type="text" name="three_pickup" id="three_pickup" value="<?php echo $this->_tpl_vars['data']['0']['three_pickup']; ?>
"  class="txt_box " maxlength="5" onBlur="javascript:time(this.id);" />

                        

                        <!--&nbsp;&nbsp;

                    <select class="" name="am_pm3" id="am_pm3"  >

                      <option value="">--</option>

                      <option value="am">am</option>

                      <option value="pm">pm</option>

                    </select>--> 

                        <span class="SmallnoteTxt">*</span>&nbsp;Will Call&nbsp;

                        <input type="checkbox" name="three_will_call" id="three_will_call" onClick="check_check3();" <?php if ($this->_tpl_vars['data']['0']['three_will_call'] == 'on'): ?> checked="checked" <?php endif; ?> /></td>

                    </tr>

                    <!--<tr id="three6" style="display:none">

                  <td class="labels" >Destination (Place):<br/></td>

                  <td><input name="destination_place3" type="text"  class="txt_box " id="destination_place3" value="<?php echo $this->_tpl_vars['data']['0']['destination_place3']; ?>
" maxlength="150" />

                    &nbsp;</td>

                  <td></td>

                </tr>-->

                    <tr id="three2" style="display:none">

                      <td class="labels" >Address:<br/></td>

                      <td><input name="three_address" type="text"  class="txt_box " id="three_address" value="<?php echo $this->_tpl_vars['data']['0']['three_address']; ?>
" maxlength="150" />

                        &nbsp;</td>

                      <td></td>

                    </tr>

                    <!--<tr id="three7" style="display:none">

                  <td class="labels" >STE/BLDG:<br/></td>

                  <td><input name="stebldg3" type="text"  class="txt_box " id="stebldg3" value="<?php echo $this->_tpl_vars['data']['0']['stebldg3']; ?>
" maxlength="150" />

                    &nbsp;</td>

                  <td></td>

                </tr>-->

                    <tr id="three3" style="display:none" >

                      <td class="labels" >City:</td>

                      <td><input name="three_city" type="text"  class="txt_box" id="three_city" value="" maxlength="150"/>

                        &nbsp;<span class="SmallnoteTxt">*</span></td>

                      <td></td>

                    </tr>

                    <tr id="three4" style="display:none">

                      <td class="labels" >State:</td>

                      <td><select id="three_state" name="three_state"  class="txt_box " />

                        

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
"<?php if ($this->_tpl_vars['states'][$this->_sections['n']['index']]['abbr'] == $this->_tpl_vars['data']['0']['three_state']): ?> selected="selected" <?php else:  if ($this->_tpl_vars['states'][$this->_sections['n']['index']]['abbr'] == 'AZ'): ?> selected="selected" <?php endif;  endif; ?>>

                        <?php echo $this->_tpl_vars['states'][$this->_sections['n']['index']]['statename']; ?>


                        </option>

                        <?php endfor; endif; ?>

                        </select>

                        &nbsp;<span class="SmallnoteTxt">*</span></td>

                      <td></td>

                    </tr>

                    <tr id="three5" style="display:none" >

                      <td class="labels" >Zip Code:</td>

                      <td><input name="three_zip" type="text"  class="txt_box " id="three_zip" value="<?php echo $this->_tpl_vars['data']['0']['three_zip']; ?>
" maxlength="10" />

                        &nbsp;<span class="SmallnoteTxt">* e.g. 12345-6789</span></td>

                      <td></td>

                    </tr>

                    <?php if ($this->_tpl_vars['triptype'] == 'Four Way' || $this->_tpl_vars['triptype'] == 'Five Way' || $this->_tpl_vars['triptype'] == ''):  endif; ?>

                    <tr id="four0" style="display:none">

                      <td colspan="3"><div class="admintopheading">Third Destination Address</div></td>

                    </tr>

                    <tr id="four1" style="display:none">

                      <td class="labels">Pick Time: </td>

                      <td colspan="2"><input type="text" name="four_pickup" id="four_pickup" value="<?php echo $this->_tpl_vars['data']['0']['four_pickup']; ?>
"  class="txt_box " maxlength="5" onBlur="javascript: time(this.id);" />

                        

                        <!-- &nbsp;&nbsp;

                    <select class="" name="am_pm4" id="am_pm4"  >

                      <option value="">--</option>

                      <option value="am">am</option>

                      <option value="pm">pm</option>

                    </select>--> 

                        <span class="SmallnoteTxt">*</span>&nbsp;Will Call&nbsp;

                        <input type="checkbox" name="four_will_call" id="four_will_call" onClick="check_check4();" <?php if ($this->_tpl_vars['data']['0']['four_will_call'] == 'on'): ?> checked="checked" <?php endif; ?>/></td>

                    </tr>

                    <!--<tr id="four6" style="display:none">

                  <td class="labels" >Destination (Place):<br/></td>

                  <td><input name="destination_place4" type="text"  class="txt_box " id="destination_place4" value="<?php echo $this->_tpl_vars['data']['0']['destination_place4']; ?>
" maxlength="150" />

                    &nbsp;</td>

                  <td></td>

                </tr>-->

                    <tr id="four2" style="display:none">

                      <td class="labels" >Address:<br/></td>

                      <td><input name="four_address" type="text"  class="txt_box " id="four_address" value="<?php echo $this->_tpl_vars['data']['0']['four_address']; ?>
" maxlength="150" />

                        &nbsp;</td>

                      <td></td>

                    </tr>

                    <!--<tr id="four7" style="display:none">

                  <td class="labels" >STE/BLDG:<br/></td>

                  <td><input name="stebldg4" type="text"  class="txt_box " id="stebldg4" value="<?php echo $this->_tpl_vars['data']['0']['stebldg4']; ?>
" maxlength="150" />

                    &nbsp;</td>

                  <td></td>

                </tr>-->

                    <tr id="four3" style="display:none" >

                      <td class="labels" >City:</td>

                      <td><input name="four_city" type="text"  class="txt_box" id="four_city" value="" maxlength="150"/>

                        &nbsp;<span class="SmallnoteTxt">*</span></td>

                      <td></td>

                    </tr>

                    <tr id="four4" style="display:none">

                      <td class="labels" >State:</td>

                      <td><select id="four_state" name="four_state"  class="txt_box " />

                        

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
"<?php if ($this->_tpl_vars['states'][$this->_sections['n']['index']]['abbr'] == $this->_tpl_vars['data']['0']['four_state']): ?> selected="selected" <?php else:  if ($this->_tpl_vars['states'][$this->_sections['n']['index']]['abbr'] == 'AZ'): ?> selected="selected" <?php endif;  endif; ?>>

                        <?php echo $this->_tpl_vars['states'][$this->_sections['n']['index']]['statename']; ?>


                        </option>

                        <?php endfor; endif; ?>

                        </select>

                        &nbsp;<span class="SmallnoteTxt">*</span></td>

                      <td></td>

                    </tr>

                    <tr id="four5" style="display:none" >

                      <td class="labels" >Zip Code:</td>

                      <td><input name="four_zip" type="text"  class="txt_box " id="four_zip" value="<?php echo $this->_tpl_vars['data']['0']['four_zip']; ?>
" maxlength="10" />

                        &nbsp;<span class="SmallnoteTxt">* e.g. 12345-6789</span></td>

                      <td></td>

                    </tr>

                    <?php if ($this->_tpl_vars['triptype'] == 'Five Way' || $this->_tpl_vars['triptype'] == ''): ?> <?php endif; ?>

                    <tr id="five0" style="display:none">

                      <td colspan="3"><div class="admintopheading">Forth Destination Address</div></td>

                    </tr>

                    <tr id="five1" style="display:none">

                      <td class="labels">Pick Time: </td>

                      <td colspan="2"><input type="text" name="five_pickup" id="five_pickup" value="<?php echo $this->_tpl_vars['data']['0']['five_pickup']; ?>
"  class="txt_box " maxlength="5" onBlur="javascript: time(this.id);" />

                        

                        <!--&nbsp;&nbsp;

                    <select class="" name="am_pm5" id="am_pm5"  >

                      <option value="">--</option>

                      <option value="am">am</option>

                      <option value="pm">pm</option>

                    </select>--> 

                        <span class="SmallnoteTxt">*</span>&nbsp;Will Call&nbsp;

                        <input type="checkbox" name="five_will_call" id="five_will_call" onClick="check_check5();" <?php if ($this->_tpl_vars['data']['0']['five_will_call'] == 'on'): ?> checked="checked" <?php endif; ?> /></td>

                    </tr>

                    <!-- <tr id="five6" style="display:none">

                  <td class="labels" >Destination (Place):<br/></td>

                  <td><input name="destination_place5" type="text"  class="txt_box " id="destination_place5" value="<?php echo $this->_tpl_vars['data']['0']['destination_place5']; ?>
" maxlength="150" />

                    &nbsp;</td>

                  <td></td>

                </tr>-->

                    <tr id="five2" style="display:none">

                      <td class="labels" >Address:<br/></td>

                      <td><input name="five_address" type="text"  class="txt_box " id="five_address" value="<?php echo $this->_tpl_vars['data']['0']['five_address']; ?>
" maxlength="150" />

                        &nbsp;</td>

                      <td></td>

                    </tr>

                    <!--<tr id="five7" style="display:none">

                  <td class="labels" >STE/BLDG:<br/></td>

                  <td><input name="stebldg5" type="text"  class="txt_box " id="stebldg5" value="<?php echo $this->_tpl_vars['data']['0']['stebldg5']; ?>
" maxlength="150" />

                    &nbsp;</td>

                  <td></td>

                </tr>-->

                    <tr id="five3" style="display:none" >

                      <td class="labels" >City:</td>

                      <td><input name="five_city" type="text"  class="txt_box" id="five_city" value="" maxlength="150"/>

                        &nbsp;<span class="SmallnoteTxt">*</span></td>

                      <td></td>

                    </tr>

                    <tr id="five4" style="display:none">

                      <td class="labels" >State:</td>

                      <td><select id="five_state" name="five_state"  class="txt_box " />

                        

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
"<?php if ($this->_tpl_vars['states'][$this->_sections['n']['index']]['abbr'] == $this->_tpl_vars['data']['0']['five_state']): ?> selected="selected" <?php else:  if ($this->_tpl_vars['states'][$this->_sections['n']['index']]['abbr'] == 'AZ'): ?> selected="selected" <?php endif;  endif; ?>>

                        <?php echo $this->_tpl_vars['states'][$this->_sections['n']['index']]['statename']; ?>


                        </option>

                        <?php endfor; endif; ?>

                        </select>

                        &nbsp;<span class="SmallnoteTxt">*</span></td>

                      <td></td>

                    </tr>

                    <tr id="five5" style="display:none" >

                      <td class="labels" >Zip Code:</td>

                      <td><input name="five_zip" type="text"  class="txt_box " id="five_zip" value="<?php echo $this->_tpl_vars['data']['0']['five_zip']; ?>
" maxlength="10" />

                        &nbsp;<span class="SmallnoteTxt">* e.g. 12345-6789</span></td>

                      <td></td>

                    </tr>

                    <?php if ($this->_tpl_vars['triptype'] == 'Four Way' || $this->_tpl_vars['triptype'] == 'Five Way' || $this->_tpl_vars['triptype'] == 'Three Way' || $this->_tpl_vars['triptype'] == '' || $this->_tpl_vars['triptype'] == 'Round Trip'):  endif; ?>

                    <tr id="b0" style="display:none">

                      <td colspan="3"><div class="admintopheading">Last Destination Address</div>

                        <br/>

                        Use Same Pickup Information

                        <input type="checkbox" name="sameadd" id="sameadd" onClick="test();"/></td>

                    </tr>

                    <tr id="b2" style="display:none" > 

<td valign="top"   class="labelX" >Back To Location:</td>

<td><input type="text" name="backtolocation" id="backtolocation"  class="txt_box" value="<?php echo $this->_tpl_vars['data']['0']['backtolocation']; ?>
" size="40" />

                   <span class="SmallnoteTxt"></span></td>

<td>&nbsp;</td>

</tr>

            <tr id="b1" style="display:none" >

           	<td class="labelX"  >

                    Back To Address:<br/></td>

<td><input name="backto" type="text"  class="txt_box " id="autocomplete3" value="<?php echo $this->_tpl_vars['bck']; ?>
" maxlength="150" size="40" />&nbsp;<span class="SmallnoteTxt">*</span></td><td></td></tr>

  <tr id="b5" style="display:none;">

                  <td class="labels">Suite #/Room #:</td> 

               <td><input type="text" name="bsuiteroom" id="bsuiteroom" value="<?php echo $this->_tpl_vars['bsuiteroom']; ?>
"  class="txt_box"  maxlength="50" />

                 </td>

                  <td></td>

                </tr>

                <tr id="b3" style="display:none;">

                  <td class="labels">Back to Instructions: </td>

                  <td colspan="2"><textarea rows="3" cols="40" name="backto_instruction" id="backto_instruction"><?php echo $this->_tpl_vars['data']['0']['backto_instruction']; ?>
</textarea>

                    </td>

                </tr>

                    

                    

                    <?php echo ' 

                    <script type="text/javascript" language="javascript">

$(document).ready(function(){	$("#aptmonday, #retmonday, #apttuseday, #rettuseday, #aptwednesday, #retwednesday, #aptthirsday, #retthirsday, #aptfriday, #retfriday, #aptsaturday, #retsaturday, #aptsunday, #retsunday").mask("29:59");

	$("#tdmonday, #tdtuseday, #tdwednesday, #tdthirsday, #tdfriday, #tdsaturday, #tdsunday").mask("9999-19-39");

	$("#tdmonday, #tdtuseday, #tdwednesday, #tdthirsday, #tdfriday, #tdsaturday, #tdsunday").datepicker( {minDate: \'0\'} );});

function ptime(ptime){  

	var apptime = $(\'#apptime\').val(); // alert(apptime);

	$(\'#aptmonday\',\'#apttuseday\',\'#aptwednesday\',\'#aptthirsday\',\'#aptfriday\',\'#aptsaturday\',\'#aptsunday\').val(apptime);

	}	

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

</script> 

                    '; ?>


                    <tr>

                      <td colspan="3"><div class="admintopheading">Recurring (Blanket Orders)</div></td>

                    </tr>

                    <tr>

                      <td colspan="3"><table width="100%" border="0">

                          <tr>

                            <td>&nbsp;</td>

                            <td>Pick Time</td>

                            <td>ReturnPick Time</td>

                            <td>Till Date</td>

                          </tr>

                          <tr>

                            <td><input type="checkbox" id="monday" name="monday" onChange="checkrecday(this.id);" <?php if ($this->_tpl_vars['Mondaycheck'] == '1'): ?>checked<?php endif; ?>/>

                              &nbsp;Monday</td>

                            <td><input  name="aptmonday" id="aptmonday" type="text" class="appt_txtbox" size="15" maxlength="5" onBlur="return tValid(this.value,'aptmonday');" <?php if ($this->_tpl_vars['Mondaycheck'] == '1'): ?> value="<?php echo $this->_tpl_vars['data']['0']['apptime']; ?>
" <?php else: ?>disabled="disabled"<?php endif; ?>/></td>

                            <td><input  name="retmonday" id="retmonday" type="text" class="appt_txtbox" size="15" maxlength="5" onBlur="return tValid(this.value,'retmonday');" <?php if ($this->_tpl_vars['Mondaycheck'] == '1'): ?> value="<?php echo $this->_tpl_vars['data']['0']['returnpickup']; ?>
" <?php else: ?>disabled="disabled"<?php endif; ?>/></td>

                            <td><input name="tdmonday" id="tdmonday" type="text"  class="appt_txtbox" size="20" maxlength="10" <?php if ($this->_tpl_vars['Mondaycheck'] == '1'): ?> value="<?php echo $this->_tpl_vars['tdmonday']; ?>
" <?php else: ?>disabled="disabled"<?php endif; ?>/></td>

                          </tr>

                          <tr>

                            <td><input type="checkbox" id="tuseday" name="tuseday"  onchange="checkrecday(this.id);" <?php if ($this->_tpl_vars['Tuesdaycheck'] == '1'): ?>checked<?php endif; ?>/>

                              &nbsp;Tuesday</td>

                            <td><input  name="apttuseday" id="apttuseday" type="text" class="appt_txtbox" size="15" maxlength="5" onBlur="return tValid(this.value,'apttuseday');" <?php if ($this->_tpl_vars['Tuesdaycheck'] == '1'): ?> value="<?php echo $this->_tpl_vars['data']['0']['apptime']; ?>
" <?php else: ?>disabled="disabled"<?php endif; ?>/></td>

                            <td><input  name="rettuseday" id="rettuseday" type="text" class="appt_txtbox" size="15" maxlength="5" onBlur="return tValid(this.value,'rettuseday');" <?php if ($this->_tpl_vars['Tuesdaycheck'] == '1'): ?> value="<?php echo $this->_tpl_vars['data']['0']['returnpickup']; ?>
" <?php else: ?>disabled="disabled"<?php endif; ?>/></td>

                            <td><input name="tdtuseday" id="tdtuseday" type="text"  class="appt_txtbox" size="20" maxlength="10" <?php if ($this->_tpl_vars['Tuesdaycheck'] == '1'): ?> value="<?php echo $this->_tpl_vars['tdtuseday']; ?>
" <?php else: ?>disabled="disabled"<?php endif; ?>/></td>

                          </tr>

                          <tr>

                            <td><input type="checkbox" id="wednesday" name="wednesday"  onchange="checkrecday(this.id);" <?php if ($this->_tpl_vars['Wednesdaycheck'] == '1'): ?>checked<?php endif; ?>/>

                              &nbsp;Wednesday</td>

                            <td><input  name="aptwednesday" id="aptwednesday" type="text" class="appt_txtbox" size="15" maxlength="5" onBlur="return tValid(this.value,'aptwednesday');" <?php if ($this->_tpl_vars['Wednesdaycheck'] == '1'): ?> value="<?php echo $this->_tpl_vars['data']['0']['apptime']; ?>
" <?php else: ?>disabled="disabled"<?php endif; ?>/></td>

                            <td><input  name="retwednesday" id="retwednesday" type="text" class="appt_txtbox" size="15" maxlength="5" onBlur="return tValid(this.value,'retwednesday');" <?php if ($this->_tpl_vars['Wednesdaycheck'] == '1'): ?> value="<?php echo $this->_tpl_vars['data']['0']['returnpickup']; ?>
" <?php else: ?>disabled="disabled"<?php endif; ?>/></td>

                            <td><input name="tdwednesday" id="tdwednesday" type="text"  class="appt_txtbox" size="20" maxlength="10" <?php if ($this->_tpl_vars['Wednesdaycheck'] == '1'): ?> value="<?php echo $this->_tpl_vars['tdwednesday']; ?>
" <?php else: ?>disabled="disabled"<?php endif; ?>/></td>

                          </tr>

                          <tr>

                            <td><input type="checkbox" id="thirsday" name="thirsday"  onchange="checkrecday(this.id);" <?php if ($this->_tpl_vars['Thursdaycheck'] == '1'): ?>checked<?php endif; ?>/>

                              &nbsp;Thursday</td>

                            <td><input  name="aptthirsday" id="aptthirsday" type="text" class="appt_txtbox" size="15" maxlength="5" onBlur="return tValid(this.value,'aptthirsday');" <?php if ($this->_tpl_vars['Thursdaycheck'] == '1'): ?> value="<?php echo $this->_tpl_vars['data']['0']['apptime']; ?>
" <?php else: ?>disabled="disabled"<?php endif; ?>/></td>

                            <td><input  name="retthirsday" id="retthirsday" type="text" class="appt_txtbox" size="15" maxlength="5" onBlur="return tValid(this.value,'retthirsday');" <?php if ($this->_tpl_vars['Thursdaycheck'] == '1'): ?> value="<?php echo $this->_tpl_vars['data']['0']['returnpickup']; ?>
" <?php else: ?>disabled="disabled"<?php endif; ?>/></td>

                            <td><input name="tdthirsday" id="tdthirsday" type="text"  class="appt_txtbox" size="20" maxlength="10" <?php if ($this->_tpl_vars['Thursdaycheck'] == '1'): ?> value="<?php echo $this->_tpl_vars['tdthirsday']; ?>
" <?php else: ?>disabled="disabled"<?php endif; ?>/></td>

                          </tr>

                          <tr>

                            <td><input type="checkbox" id="friday" name="friday"  onchange="checkrecday(this.id);" <?php if ($this->_tpl_vars['Fridaycheck'] == '1'): ?>checked<?php endif; ?>/>

                              &nbsp;Friday</td>

                            <td><input  name="aptfriday" id="aptfriday" type="text" class="appt_txtbox" size="15" maxlength="5" onBlur="return tValid(this.value,'aptfriday');" <?php if ($this->_tpl_vars['Fridaycheck'] == '1'): ?> value="<?php echo $this->_tpl_vars['data']['0']['apptime']; ?>
" <?php else: ?>disabled="disabled"<?php endif; ?>/></td>

                            <td><input  name="retfriday" id="retfriday" type="text" class="appt_txtbox" size="15" maxlength="5" onBlur="return tValid(this.value,'retfriday');" <?php if ($this->_tpl_vars['Fridaycheck'] == '1'): ?> value="<?php echo $this->_tpl_vars['data']['0']['returnpickup']; ?>
" <?php else: ?>disabled="disabled"<?php endif; ?>/></td>

                            <td><input name="tdfriday" id="tdfriday" type="text"  class="appt_txtbox" size="20" maxlength="10" <?php if ($this->_tpl_vars['Fridaycheck'] == '1'): ?> value="<?php echo $this->_tpl_vars['tdfriday']; ?>
" <?php else: ?>disabled="disabled"<?php endif; ?>/></td>

                          </tr>

                          <tr>

                            <td><input type="checkbox" id="saturday" name="saturday"  onchange="checkrecday(this.id);" <?php if ($this->_tpl_vars['Saturdaycheck'] == '1'): ?>checked<?php endif; ?>/>

                              &nbsp;Saturday</td>

                            <td><input  name="aptsaturday" id="aptsaturday" type="text" class="appt_txtbox" size="15" maxlength="5" onBlur="return tValid(this.value,'aptsaturday');" <?php if ($this->_tpl_vars['Saturdaycheck'] == '1'): ?> value="<?php echo $this->_tpl_vars['data']['0']['apptime']; ?>
" <?php else: ?>disabled="disabled"<?php endif; ?>/></td>

                            <td><input  name="retsaturday" id="retsaturday" type="text" class="appt_txtbox" size="15" maxlength="5" onBlur="return tValid(this.value,'retsaturday');" <?php if ($this->_tpl_vars['Saturdaycheck'] == '1'): ?> value="<?php echo $this->_tpl_vars['data']['0']['returnpickup']; ?>
" <?php else: ?>disabled="disabled"<?php endif; ?>/></td>

                            <td><input name="tdsaturday" id="tdsaturday" type="text"  class="appt_txtbox" size="20" maxlength="10" <?php if ($this->_tpl_vars['Saturdaycheck'] == '1'): ?> value="<?php echo $this->_tpl_vars['tdsaturday']; ?>
" <?php else: ?>disabled="disabled"<?php endif; ?>/></td>

                          </tr>

                          <tr>

                            <td><input type="checkbox" id="sunday" name="sunday"  onchange="checkrecday(this.id);" <?php if ($this->_tpl_vars['Sundaycheck'] == '1'): ?>checked<?php endif; ?>/>

                              &nbsp;Sunday</td>

                            <td><input  name="aptsunday" id="aptsunday" type="text" class="appt_txtbox" size="15" maxlength="5" onBlur="return tValid(this.value,'aptsunday');" <?php if ($this->_tpl_vars['Sundaycheck'] == '1'): ?> value="<?php echo $this->_tpl_vars['data']['0']['apptime']; ?>
" <?php else: ?>disabled="disabled"<?php endif; ?>/></td>

                            <td><input  name="retsunday" id="retsunday" type="text" class="appt_txtbox" size="15" maxlength="5" onBlur="return tValid(this.value,'retsunday');" <?php if ($this->_tpl_vars['Sundaycheck'] == '1'): ?> value="<?php echo $this->_tpl_vars['data']['0']['returnpickup']; ?>
" <?php else: ?>disabled="disabled"<?php endif; ?>/></td>

                            <td><input name="tdsunday" id="tdsunday" type="text"  class="appt_txtbox" size="20" maxlength="10" <?php if ($this->_tpl_vars['Sundaycheck'] == '1'): ?> value="<?php echo $this->_tpl_vars['tdsunday']; ?>
" <?php else: ?>disabled="disabled"<?php endif; ?>/></td>

                          </tr>

                          <tr>

                            <td><input type="hidden" name="mon" value="monday" />

                              <input type="hidden" name="tus" value="tuesday" />

                              <input type="hidden" name="wed" value="wednesday" />

                              <input type="hidden" name="thi" value="thursday" />

                              <input type="hidden" name="fri" value="friday" />

                              <input type="hidden" name="sat" value="saturday" />

                               <input type="hidden" name="sun" value="sunday" /></td>

                          </tr>

                        </table></td>

                    </tr>

                    <tr align="left">

                      <td colspan="3" valign="top" class="admintopheading"><strong>Comments OR Notes</strong></td>

                    </tr>

                    <tr>

                      <td align="left" valign="top" class="labels">&nbsp;</td>

                      <td align="left" valign="top">&nbsp;</td>

                      <td valign="top">&nbsp;</td>

                    </tr>

                    <tr>

                      <td colspan="3" align="left" valign="top" class="labels"><textarea tabindex="50" name="comments" cols="74" rows="7" class="txtarea" id="comments"><?php echo $this->_tpl_vars['data']['0']['comments']; ?>
</textarea></td>

                    </tr>

                    <tr>

                      <td align="left" valign="top" class="labels">&nbsp;</td>

                      <td colspan="2" align="left" valign="top">&nbsp;</td>

                    </tr>

                    <tr>

                      <td valign="top">&nbsp;</td>

                      <td colspan="2" align="right"><input type="submit" name="submit" value="Update......" class="inputButton btn"  />

                        <input type="reset" name="reset" value="Reset" class="inputButton btn"  />

                        <input type="hidden" name="pendingids" value="<?php echo $this->_tpl_vars['pendingids']; ?>
"  /></td>

                    </tr>

                  </table>

                </form>

              </div></td>

          </tr>

          <?php endif; ?>

        </table></td>

    </tr>

  </table>

</body>

<?php echo '<script>chTrip(\'';  echo $this->_tpl_vars['data']['0']['triptype'];  echo '\');</script>'; ?>


<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "innerfooter.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?> 