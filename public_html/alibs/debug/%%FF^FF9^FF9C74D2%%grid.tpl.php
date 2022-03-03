<?php /* Smarty version 2.6.12, created on 2014-09-19 07:46:12
         compiled from grid.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'cycle', 'grid.tpl', 294, false),array('modifier', 'date_format', 'grid.tpl', 331, false),)), $this); ?>
<link rel="stylesheet" href="grid_style.css" type="text/css">
<link rel="stylesheet" href="grid_styles.css" type="text/css">
<link href="facebox/facebox.css" media="screen" rel="stylesheet" type="text/css"/>
<?php echo ' 
<script language="javascript" src="scripts/jquery-1.4.2.min.js"></script>
<script language="javascript" src="facebox/facebox.js" type="text/javascript" ></script>
<script type="text/javascript">
 $(document).ready(function() { 
refreshed();
 $(\'a[rel*=facebox]\').facebox({
				loading_image : \'loading.gif\',
				close_image   : \'closelabel.gif\'
				
			  });
});
//setInterval(getalerts(),10000);
	function deleteRec(id,id2)
		{
		var ok;
		ok=confirm("Are you sure you want to delete this record");
		if (ok)
		{		
			location.href="grid.php?delId="+id+"&id="+id2;
			return true;
			//document.delrecfrm.submit();
		}
		else
		{
			return false;
		}
	}
	//function dvmap(val1,val2)
	function dvmap(did,tid,tdate,ttime,acknowledge_status)
	{
		//alert(did+" -- "+tid+" -- "+tdate+" -- "+ttime);
		var brk =  Array();
		var msg =  Array();
		if (did != \'\' && tid != \'\' && tdate != \'\' && ttime != \'\')
		{
			//brk = val1.split(\'^\');
			//alert("cnfrm.php"+did+" - "+tid+" - "+tdate+" - "+ttime);
		   	$.post("cnfrm.php", {drv_id: did, trp_id: tid, trp_date: tdate, trp_time:ttime}, function(cnfrm)
			{ //alert(acknowledge_status);
				//alert(\'Confirm Return : \'+ cnfrm);
				/*if(cnfrm == 0)
				{
					//alert(\'i got 0 now\');
					alert(\'This Driver is already assign to another trip. \\nPlease select different driver?\');
					if(cfm)
					{
						$.post("dvmap.php", {did: did, tid: tid, tdate: tdate, ttime: ttime}, function(data)
						{
							if(data.length > 0)
							{
								msg = data.split(\'^\');
								if(msg[1] == \'0\')
									alert("Not Assigned Yet");
								else
									alert("Assigned");

								$(	"#msg").html(msg[0]);
								if(msg[1] == \'0\')
								{
									$("#dv"+msg[1]).html(\'Not assigned Yet\');
									$("#dv"+val2).html(brk[1]);
								}
								if(msg[1] != \'0\' || msg[1] != \'fail\'  )
								{
									$("#dv"+msg[1]).html(\'Not assigned Yet\');
									$("#dv"+val2).html(brk[1]);			 
								}

								return true;
							}
						});
					}
					else
					{
						return false;
					}
				}
				else
				{*/
					//alert(\'i got 1 now\');
					//$.post("dvmap.php", {drv: ""+val2, veh:""+brk[0], vehnp:""+brk[1]}, function(data)
					$.post("dvmap.php", {did: did, tid: tid, tdate: tdate, ttime: ttime, acknowledge_status: acknowledge_status}, function(data)
					{
						if(data.length > 0)
						{
							msg = data.split(\'^\');
							if(msg[1] == \'0\')
								alert("Not Assigned Yet");
							else
								alert("Assigned");
							/*$(	"#msg").html(msg[0]);
							if(msg[1] == \'0\')
							{
								$("#dv"+msg[1]).html(\'Not assigned Yet\');
								$("#dv"+val2).html(brk[1]);
							}
							if(msg[1] != \'0\' || msg[1] != \'fail\'  )
							{
								$("#dv"+msg[1]).html(\'Not assigned Yet\');
								$("#dv"+val2).html(brk[1]);			 
		
							}*/
							return true;
						}
					});
				//}	
			});
		}
		else
		{
			return false;
		}	
	}
   function popWind(url){
   myWindow1 = window.open( url, "myWindow1", 
"status = 1, height = 600, width = 715, scrollbars=0, resizable = 0" );
   myWindow1.moveTo(40,50);
   myWindow1.focus();
   }
    function popWind2(url){
   myWindow1 = window.open( url, "myWindow1", 
"status = 1, height = 800, width = 1000, scrollbars=1, resizable = 1" );
   myWindow1.moveTo(40,50);
   myWindow1.focus();
   }
//function fsubmit(url,id){location.href=url+"&driver="+id; }
//function fsubmit2(url,id){location.href=url+"&user="+id;   }
//function fsubmit3(url,id){location.href=url+"&clinic="+id; }
//function changeloc(url,id){	location.href=url+"&branch_location="+id; }
//Alerts code for 		
function alerts(drv_id){ 
	 if(drv_id != \'\'){
	var message = prompt("Send Message to : "+drv_id);
		if(message !== \'\'){	 
		$.post("sendalert.php", {messag: ""+message, driver_code:""+drv_id}, function(data){
  				if(data.length > 0) { //alert(data);
				}
	 }); return true; }
	 	 else {return false; }
	   	}
 	 else { return false; }
	 }
var Usmania; 
var UsmaniaA = new Array();	   
function getalerts(){
		$.post("getalerts.php", {}, function(data){
  				if(data.length > 0) {
				var alerts = data;
				Usmania = alerts;
				sadigalliaga();
			 } });
	}	 
function sadigalliaga(){ //alert(Usmania);
			 UsmaniaA = Usmania.split(\'@\');
			 if(UsmaniaA.length > 1){
				id 		= UsmaniaA[0];
				from 	= UsmaniaA[1];
				message	= UsmaniaA[2];
				senttime= UsmaniaA[3];
				var ok;
		ok=confirm(\'From: \'+from+\'      Sent: \'+senttime+\'\\n\\nMessage: \'+message);
		if (ok)
		{		
			$.post("getalerts.php", {recid: ""+id}, function(data){
			});
			return true;
		}
		else
		{
			return false;
		}
	}   }
	setInterval ( "getalerts()", 2000);
 //End of alert
 //Page refresh code
 function refreshpagejana(){
	 var value = \'refresh\';
 $.post("refreshpage.php", {action: ""+value}, function(data){
	 if(data.length > 0) { 
		 var laylay = data;
		 if(laylay == 0){
		 return false;
		  }
		 else if(laylay == 1){  location.reload();   }
		  }
	});
 }
 function refreshed(){
	 var value = \'refreshed\';
 $.post("refreshpage.php", {action: ""+value}, function(data){
			});
 }
 setInterval ( "refreshpagejana()", 10000);
 //Page refresh code

 //end of acknowledge
 //start of finding coordinates from google
 function findcoord(addtype,add,id){
	 //alert(id);
	 $.post("add_cordinates.php", {id: ""+id, addtype: ""+addtype}, function(data){
		 if(data.length > 0 ){
			 if(data == 1){ location.reload();   }
			 else if(data !== 1){ return false; }
			 }
			});
	 }
 //End of finding google coordinates
//Acknowledge by admin
function acknowled(id){
 $.post("ussack.php", {id: ""+id}, function(data){
	 if(data.length > 0 ){ 
		 $(\'#\'+id).hide();
		 }
	});
 }
</script> 
'; ?>

<table  width="100%" border="0" cellspacing="0" cellpadding="0"  align="left" bgcolor="#FFFFFF">
  <tr>
    <td><table width="100%" border="0" cellspacing="0" cellpadding="0" >
        <tr>
          <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td  align="center" class="okmsg"><span class="okmsg"><?php if ($this->_tpl_vars['msgs'] != ''): ?> <?php echo $this->_tpl_vars['msgs']; ?>
 <?php endif; ?>
                  
                  <?php if ($this->_tpl_vars['errors'] != ''): ?> <?php echo $this->_tpl_vars['errors']; ?>
 <?php endif; ?></span></td>
              </tr>
              <tr>
                <td height="19" align="center"><div id="search_form">
                    <form name="searchReport" action="grid.php?id=<?php echo $this->_tpl_vars['id']; ?>
&st=<?php echo $this->_tpl_vars['st']; ?>
&ad=<?php echo $this->_tpl_vars['ad']; ?>
" method="post">
                      <table width="100%" border="0" cellspacing="2" cellpadding="2" align="center" >
                        <tr>
                          <td colspan="8" align="left" valign="middle" class="labeltxt"><table border="0" width="100%">
                          
           <tr><td colspan="9" height="19" align="center" style="background-color:#A5B7CD; font-weight:bold; font-size:18px;">
       <img src="images/van.png" alt="Trans" width="90" height="50" /> Trips Schedual For <?php echo $_SESSION['vehicle_no']; ?>
-<?php echo $_SESSION['driver']['fname']; ?>
 
          </td></tr>
          <tr><td colspan="9" height="19" align="center" style="background-color:#A5B7CD; font-weight:bold; font-size:18px;">
        <a href="grid.php?show=1">Current Day</a>&nbsp;&nbsp;&nbsp;<a href="grid.php?show=2" >Next Day</a></td></tr>
<tr>
<td rowspan="2"  align="right" valign="top" class="labeltxt">
<a href="logout_driver.php"><img alt="" width="62" height="33" src="images/logout.png"></a>&nbsp;&nbsp;&nbsp;<a href="javascript:window.print();"><img src="images/print.gif"></a>

</td>
</tr>


                            </table></td>
                        </tr>
                      </table>
                    </form>
                  </div></td>
              </tr>
              <tr>
                <td class="tabs"><ul>
                    <li <?php if ($this->_tpl_vars['st'] == '5'): ?>style="display:block; float:left; background: url(images/tabs_hover.png) no-repeat; width:96px; height:18px; color:#FFF; padding-left: 0px; padding-top: 5px; text-align:center;" class="selected1"<?php endif; ?>><a href="grid.php?show=<?php echo $this->_tpl_vars['show']; ?>
&st=5">Acknowledged</a></li>
                    <li <?php if ($this->_tpl_vars['st'] == '4'): ?>  style="display:block; float:left; background: url(images/tabs_hover.png) no-repeat; width:96px; height:20px; color:#FFF; padding-left: 0px; padding-top: 5px; text-align:center;" class="selected1"<?php endif; ?>><a href="grid.php?show=<?php echo $this->_tpl_vars['show']; ?>
&st=4">Completed</a></li>
                    <li <?php if ($this->_tpl_vars['st'] == '3'): ?>  style="display:block; float:left; background: url(images/tabs_hover.png) no-repeat; width:96px; height:20px; color:#FFF; padding-left: 0px; padding-top: 5px; text-align:center;" class="selected1"<?php endif; ?>><a href="grid.php?show=<?php echo $this->_tpl_vars['show']; ?>
&st=3">Cancelled</a></li>
                    <li <?php if ($this->_tpl_vars['st'] == '2'): ?> style="display:block; float:left; background: url(images/tabs_hover.png) no-repeat; width:96px; height:20px; color:#FFF; padding-left: 0px; padding-top: 5px; text-align:center;" class="selected1"<?php endif; ?>><a  href="grid.php?show=<?php echo $this->_tpl_vars['show']; ?>
&st=2">Rescheduled</a></li>
                    <li <?php if ($this->_tpl_vars['st'] == '8'): ?>style="display:block; float:left; background: url(images/tabs_hover.png) no-repeat; width:96px; height:20px; color:#FFF; padding-left: 0px; padding-top: 5px; text-align:center;" class="selected1"<?php endif; ?>><a href="grid.php?show=<?php echo $this->_tpl_vars['show']; ?>
&st=8&ad=0">Not Going</a></li>
                    <li <?php if ($this->_tpl_vars['st'] == '7'): ?>style="display:block; float:left; background: url(images/tabs_hover.png) no-repeat; width:96px; height:20px; color:#FFF; padding-left: 0px; padding-top: 5px; text-align:center;" class="selected1"<?php endif; ?>><a href="grid.php?show=<?php echo $this->_tpl_vars['show']; ?>
&st=7&ad=0">Not at Home</a></li>
                    <li <?php if ($this->_tpl_vars['st'] == '0' || $this->_tpl_vars['acknowledge_status'] == '0'): ?>style="display:block; float:left; background: url(images/pendingselect.png) no-repeat; width:108px; height:20px; color:#FFF; padding-left: 0px; padding-top: 5px; text-align:center;" class="selected1" <?php else: ?>style="display:block; float:left; background: url(images/pending.png) no-repeat; width:108px; height:20px; color:#FFF; padding-left: 0px; padding-top: 5px; text-align:center;" class="selected1"<?php endif; ?>><a href="grid.php?show=<?php echo $this->_tpl_vars['show']; ?>
&st=9&acknowledge_status=0">Check Schedule</a></li>
 <!--<li <?php if ($this->_tpl_vars['st'] == '9'): ?>style="display:block; float:left; background: url(images/tabs_hover.png) no-repeat; width:105px; height:18px; color:#FFF; padding-left: 0px; padding-top: 5px; text-align:center;" class="selected1"<?php endif; ?>><a rel="facebox" href="add-sheet.php">Upload Sheet</a></li>
 <li class="small"><a  title="Add" href="#" onclick="popWind2('addgrid.php?id=<?php echo $this->_tpl_vars['id']; ?>
');" > <img alt="Add" border="0" src="../graphics/add_12.gif"></a></li>-->
                  <!--<li><input type="button" value="GET" onclick="getalerts()" /></li>--></ul></td>
              </tr>
              <tr>
                <td height="19" align="center" class="admintopheading">ROUTING SHEET DETAILS </td>
              </tr>
              <tr>
                <td height="44" align="center"  valign="top" style="padding-bottom:50px;"><table width="100%" border="0" class="main_table" cellpadding="0" cellspacing="0" >
                    <tr>
                      <td align="left" class="label_txt_heading"><strong>Code</strong></td>
                      <!-- <td align="left" class="label_txt_heading"><strong>Group Tag</strong></td>-->
                      <td align="left" class="label_txt_heading"><strong>LOB </strong></td>
                      <td align="left" class="label_txt_heading"><strong>LOBName </strong></td>
                      <td align="left" class="label_txt_heading"><strong>Driver</strong></td>
                      <td align="left" class="label_txt_heading"><strong>Pick Address</strong></td>
                      <td align="left" class="label_txt_heading"><strong>Drop Address</strong></td>
                      <td align="left" class="label_txt_heading"><strong>Pickup Time</strong></td>
                      <td align="left" class="label_txt_heading"><strong>Drop Time</strong></td>
                      <td align="left" class="label_txt_heading"><strong>Miles</strong></td>
                      <td align="left" class="label_txt_heading"><strong>Trip Type</strong></td>
                      <td align="center" class="label_txt_heading"><strong>Options</strong></td>
                      <td align="left" class="label_txt_heading"><strong><?php if ($this->_tpl_vars['st'] == '9'): ?>Status<?php else: ?>Location<?php endif; ?></strong></td>
                    <!--  <td align="left" class="label_txt_heading"><strong>Call</strong></td>-->
                    </tr>
                    <div id="sc"></div>
                    <?php unset($this->_sections['q']);
$this->_sections['q']['name'] = 'q';
$this->_sections['q']['loop'] = is_array($_loop=$this->_tpl_vars['membdetail']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
                    <tr  valign="top" id="<?php echo $this->_tpl_vars['membdetail'][$this->_sections['q']['index']]['tdid']; ?>
"  bgcolor="<?php echo smarty_function_cycle(array('values' => "#eeeeee,#d0d0d0"), $this);?>
"><!---->
                      <td ><?php echo $this->_tpl_vars['membdetail'][$this->_sections['q']['index']]['trip_id']; ?>
</td>
                      <!--<td align="left" valign="top" class="grid_content"></td>-->
                      <td align="left" valign="top" class="grid_content"><b><?php echo $this->_tpl_vars['membdetail'][$this->_sections['q']['index']]['trip_clinic']; ?>
</b></td>
                      <td align="left" valign="top" class="grid_content"><?php echo $this->_tpl_vars['membdetail'][$this->_sections['q']['index']]['trip_user']; ?>
</td>
                      <!--<td align="left" valign="top" class="grid_content"> 
                      <?php if ($this->_tpl_vars['st'] != '9'): ?>
<?php echo $this->_tpl_vars['membdetail'][$this->_sections['q']['index']]['driver']; ?>
-[<?php echo $this->_tpl_vars['membdetail'][$this->_sections['q']['index']]['drv_id']; ?>
]
<?php else: ?>

<select name="staff1" id="staff1" class="required" onchange="return dvmap(this.value,'<?php echo $this->_tpl_vars['membdetail'][$this->_sections['q']['index']]['tdid']; ?>
','<?php echo $this->_tpl_vars['membdetail'][$this->_sections['q']['index']]['trip_date']; ?>
','<?php echo $this->_tpl_vars['membdetail'][$this->_sections['q']['index']]['pck_time']; ?>
','<?php echo $this->_tpl_vars['membdetail'][$this->_sections['q']['index']]['acknowledge_status']; ?>
')">
<option value="">--Select--</option>
<?php unset($this->_sections['r']);
$this->_sections['r']['name'] = 'r';
$this->_sections['r']['loop'] = is_array($_loop=$this->_tpl_vars['driverdata']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['r']['show'] = true;
$this->_sections['r']['max'] = $this->_sections['r']['loop'];
$this->_sections['r']['step'] = 1;
$this->_sections['r']['start'] = $this->_sections['r']['step'] > 0 ? 0 : $this->_sections['r']['loop']-1;
if ($this->_sections['r']['show']) {
    $this->_sections['r']['total'] = $this->_sections['r']['loop'];
    if ($this->_sections['r']['total'] == 0)
        $this->_sections['r']['show'] = false;
} else
    $this->_sections['r']['total'] = 0;
if ($this->_sections['r']['show']):

            for ($this->_sections['r']['index'] = $this->_sections['r']['start'], $this->_sections['r']['iteration'] = 1;
                 $this->_sections['r']['iteration'] <= $this->_sections['r']['total'];
                 $this->_sections['r']['index'] += $this->_sections['r']['step'], $this->_sections['r']['iteration']++):
$this->_sections['r']['rownum'] = $this->_sections['r']['iteration'];
$this->_sections['r']['index_prev'] = $this->_sections['r']['index'] - $this->_sections['r']['step'];
$this->_sections['r']['index_next'] = $this->_sections['r']['index'] + $this->_sections['r']['step'];
$this->_sections['r']['first']      = ($this->_sections['r']['iteration'] == 1);
$this->_sections['r']['last']       = ($this->_sections['r']['iteration'] == $this->_sections['r']['total']);
?>
<option value="<?php echo $this->_tpl_vars['driverdata'][$this->_sections['r']['index']]['drv_code']; ?>
" <?php if ($this->_tpl_vars['driverdata'][$this->_sections['r']['index']]['drv_code'] == $this->_tpl_vars['membdetail'][$this->_sections['q']['index']]['drv_id']): ?>selected<?php endif; ?>><?php echo $this->_tpl_vars['driverdata'][$this->_sections['r']['index']]['fname']; ?>
 <?php echo $this->_tpl_vars['driverdata'][$this->_sections['r']['index']]['lname']; ?>
</option>
<?php endfor; endif; ?>
</select>
<?php endif; ?> </td>-->
<td align="left" valign="top" class="grid_content"> 
<?php echo $_SESSION['vehicle_no']; ?>
-<?php echo $_SESSION['driver']['fname']; ?>
 <?php echo $_SESSION['driver']['lname']; ?>

</td>
<!--<td align="left" valign="top" class="grid_content"> <?php if ($this->_tpl_vars['membdetail'][$this->_sections['q']['index']]['drv_id'] != ''): ?>
<?php echo $this->_tpl_vars['membdetail'][$this->_sections['q']['index']]['driver']; ?>
-[<?php echo $this->_tpl_vars['membdetail'][$this->_sections['q']['index']]['drv_id']; ?>
]
<?php else: ?>
<?php if ($this->_tpl_vars['st'] == '5' || $this->_tpl_vars['st'] == '9'): ?>
<select name="staff1" id="staff1" class="required" onchange="return dvmap(this.value,'<?php echo $this->_tpl_vars['membdetail'][$this->_sections['q']['index']]['tdid']; ?>
','<?php echo $this->_tpl_vars['membdetail'][$this->_sections['q']['index']]['trip_date']; ?>
','<?php echo $this->_tpl_vars['membdetail'][$this->_sections['q']['index']]['pck_time']; ?>
')">
<option value="">--Select--</option>
<?php unset($this->_sections['r']);
$this->_sections['r']['name'] = 'r';
$this->_sections['r']['loop'] = is_array($_loop=$this->_tpl_vars['driverdata']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['r']['show'] = true;
$this->_sections['r']['max'] = $this->_sections['r']['loop'];
$this->_sections['r']['step'] = 1;
$this->_sections['r']['start'] = $this->_sections['r']['step'] > 0 ? 0 : $this->_sections['r']['loop']-1;
if ($this->_sections['r']['show']) {
    $this->_sections['r']['total'] = $this->_sections['r']['loop'];
    if ($this->_sections['r']['total'] == 0)
        $this->_sections['r']['show'] = false;
} else
    $this->_sections['r']['total'] = 0;
if ($this->_sections['r']['show']):

            for ($this->_sections['r']['index'] = $this->_sections['r']['start'], $this->_sections['r']['iteration'] = 1;
                 $this->_sections['r']['iteration'] <= $this->_sections['r']['total'];
                 $this->_sections['r']['index'] += $this->_sections['r']['step'], $this->_sections['r']['iteration']++):
$this->_sections['r']['rownum'] = $this->_sections['r']['iteration'];
$this->_sections['r']['index_prev'] = $this->_sections['r']['index'] - $this->_sections['r']['step'];
$this->_sections['r']['index_next'] = $this->_sections['r']['index'] + $this->_sections['r']['step'];
$this->_sections['r']['first']      = ($this->_sections['r']['iteration'] == 1);
$this->_sections['r']['last']       = ($this->_sections['r']['iteration'] == $this->_sections['r']['total']);
?>
<option value="<?php echo $this->_tpl_vars['driverdata'][$this->_sections['r']['index']]['drv_code']; ?>
" <?php if ($this->_tpl_vars['driverdata'][$this->_sections['r']['index']]['drv_code'] == $this->_tpl_vars['staff1']): ?>selected<?php endif; ?>><?php echo $this->_tpl_vars['driverdata'][$this->_sections['r']['index']]['fname']; ?>
 <?php echo $this->_tpl_vars['driverdata'][$this->_sections['r']['index']]['lname']; ?>
</option>
<?php endfor; endif; ?>
</select>
<?php endif; ?>
<?php endif; ?> </td>
-->                      <td align="left" valign="top" class="grid_content"><?php echo $this->_tpl_vars['membdetail'][$this->_sections['q']['index']]['pck_add']; ?>
</td>
                      
                      <td align="left" valign="top" class="grid_content"><?php echo $this->_tpl_vars['membdetail'][$this->_sections['q']['index']]['drp_add']; ?>
<!--<br/>
<a href="#" onclick="findcoord('drop','<?php echo $this->_tpl_vars['membdetail'][$this->_sections['q']['index']]['drp_add']; ?>
','<?php echo $this->_tpl_vars['membdetail'][$this->_sections['q']['index']]['tdid']; ?>
');" ><?php if ($this->_tpl_vars['membdetail'][$this->_sections['q']['index']]['drop_latlong'] == '' || $this->_tpl_vars['membdetail'][$this->_sections['q']['index']]['drop_latlong'] == 'NULL'): ?><img src="images/icons/null_cord.png" title="Find Coordinate" ><?php else: ?><img src="images/icons/yes_cord.png" title="Find Updated Coordinate" ><?php endif; ?></a>--></td>

                      <td align="left" valign="top" class="grid_content"><?php if ($this->_tpl_vars['membdetail'][$this->_sections['q']['index']]['wc'] == '1'): ?> W/C<?php else: ?> <?php echo ((is_array($_tmp=$this->_tpl_vars['membdetail'][$this->_sections['q']['index']]['pck_time'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%H:%M") : smarty_modifier_date_format($_tmp, "%H:%M"));  endif; ?></td>
                      <td align="left" valign="top" class="grid_content"><?php if ($this->_tpl_vars['membdetail'][$this->_sections['q']['index']]['wc'] == '1'): ?> --:--<?php else:  echo ((is_array($_tmp=$this->_tpl_vars['membdetail'][$this->_sections['q']['index']]['drp_time'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%H:%M") : smarty_modifier_date_format($_tmp, "%H:%M"));  endif; ?></td>
                      <td align="left" valign="top" class="grid_content"><?php echo $this->_tpl_vars['membdetail'][$this->_sections['q']['index']]['trip_miles']; ?>
</td>
                      <td align="left" valign="top" class="grid_content"><?php echo $this->_tpl_vars['membdetail'][$this->_sections['q']['index']]['type']; ?>
</td>
                      <td align="left" valign="top" class="grid_icon">		  
                        <?php if ($this->_tpl_vars['st'] == 4): ?> <a rel="facebox" href="viewgrid.php?id=<?php echo $this->_tpl_vars['membdetail'][$this->_sections['q']['index']]['tdid']; ?>
" title="View"> <?php if ($this->_tpl_vars['membdetail'][$this->_sections['q']['index']]['status'] == '4'): ?>
                        Successful
                        <?php endif; ?>	 
                        <?php if ($this->_tpl_vars['membdetail'][$this->_sections['q']['index']]['status'] == '1'): ?>
                        Delayed
                        <?php endif; ?> </a>&nbsp;&nbsp;
                        <?php else: ?> <a rel="facebox" href="viewgrid.php?id=<?php echo $this->_tpl_vars['membdetail'][$this->_sections['q']['index']]['tdid']; ?>
" title="View"> View</a>&nbsp;&nbsp;
                        <?php endif; ?>
                        <!--<a href="#" onclick="alerts('<?php echo $this->_tpl_vars['membdetail'][$this->_sections['q']['index']]['drv_id']; ?>
')" ><img src="../graphics/alert.png" height="20px" width="20px" /></a>-->
                        </td>
<td >
<?php if ($this->_tpl_vars['st'] == '9'): ?>
<?php if ($this->_tpl_vars['membdetail'][$this->_sections['q']['index']]['acknowledge_status'] == '0'): ?>Pending<?php endif; ?><br/>
<!--<?php if ($this->_tpl_vars['membdetail'][$this->_sections['q']['index']]['acknowledge_status'] == '0'): ?><span style="color:#66F; font-weight:bold;"><a href="#" onclick="acknowled('<?php echo $this->_tpl_vars['membdetail'][$this->_sections['q']['index']]['tdid']; ?>
')">Confirm this!</a></span><?php endif; ?>-->
<?php if ($this->_tpl_vars['membdetail'][$this->_sections['q']['index']]['acknowledge_status'] == '2'): ?><span style="color:#F00; font-weight:bold;">Denied</span><?php endif; ?>
<?php else: ?>

<a title="[<?php echo $this->_tpl_vars['membdetail'][$this->_sections['q']['index']]['drv_id']; ?>
]" href="driver.php?dri_code=<?php echo $this->_tpl_vars['membdetail'][$this->_sections['q']['index']]['drv_id']; ?>
&a=<?php echo $this->_tpl_vars['membdetail'][$this->_sections['q']['index']]['pck_add']; ?>
&b=<?php echo $this->_tpl_vars['membdetail'][$this->_sections['q']['index']]['drp_add']; ?>
" target="_blank"><img alt="Track" border="0" src="graphics/gps.png"></a>
<?php endif; ?>
<!--<?php if ($this->_tpl_vars['membdetail'][$this->_sections['q']['index']]['gps'] != ''): ?> <a title="GPS" href="<?php echo $this->_tpl_vars['membdetail'][$this->_sections['q']['index']]['gps']; ?>
"><img alt="GPS" border="0"  src="../graphics/gps.png"></a><?php else: ?><img alt="GPS Not Installed" border="0"  src="../graphics/dgps.png"><?php endif; ?>&nbsp;&nbsp;
-->
</td>
                     <!-- <td class="grid_content"><?php if ($this->_tpl_vars['membdetail'][$this->_sections['q']['index']]['sip'] != ''): ?><a href="sip:<?php echo $this->_tpl_vars['membdetail'][$this->_sections['q']['index']]['sip']; ?>
" title="Call"><img alt="Call" border="0"  src="../graphics/call_driver.png"></a><?php else: ?><img alt="Call Not Configured" border="0"  src="../graphics/dcall.png"><?php endif; ?></td>-->
                    </tr>
                    <?php endfor; else: ?>
                    <tr>
                      <td colspan="7" align="center" valign="top" class="grid_content"><strong>No Record Found!</strong></td>
                    </tr>
                    <?php endif; ?>
                  </table></td>
              </tr>
              <tr>
                <td><?php echo $this->_tpl_vars['paging']; ?>
</td>
              </tr>
            </table></td>
        </tr>
      </table></td>
  </tr>
</table>