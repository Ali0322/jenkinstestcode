<link rel="stylesheet" href="grid_style.css" type="text/css">
<link rel="stylesheet" href="grid_styles.css" type="text/css">
<link href="facebox/facebox.css" media="screen" rel="stylesheet" type="text/css"/>
{literal} 
<script language="javascript" src="scripts/jquery-1.4.2.min.js"></script>
<script language="javascript" src="facebox/facebox.js" type="text/javascript" ></script>
<script type="text/javascript">
 $(document).ready(function() { 
refreshed();
 $('a[rel*=facebox]').facebox({
				loading_image : 'loading.gif',
				close_image   : 'closelabel.gif'
				
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
		if (did != '' && tid != '' && tdate != '' && ttime != '')
		{
			//brk = val1.split('^');
			//alert("cnfrm.php"+did+" - "+tid+" - "+tdate+" - "+ttime);
		   	$.post("cnfrm.php", {drv_id: did, trp_id: tid, trp_date: tdate, trp_time:ttime}, function(cnfrm)
			{ //alert(acknowledge_status);
				//alert('Confirm Return : '+ cnfrm);
				/*if(cnfrm == 0)
				{
					//alert('i got 0 now');
					alert('This Driver is already assign to another trip. \nPlease select different driver?');
					if(cfm)
					{
						$.post("dvmap.php", {did: did, tid: tid, tdate: tdate, ttime: ttime}, function(data)
						{
							if(data.length > 0)
							{
								msg = data.split('^');
								if(msg[1] == '0')
									alert("Not Assigned Yet");
								else
									alert("Assigned");

								$(	"#msg").html(msg[0]);
								if(msg[1] == '0')
								{
									$("#dv"+msg[1]).html('Not assigned Yet');
									$("#dv"+val2).html(brk[1]);
								}
								if(msg[1] != '0' || msg[1] != 'fail'  )
								{
									$("#dv"+msg[1]).html('Not assigned Yet');
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
					//alert('i got 1 now');
					//$.post("dvmap.php", {drv: ""+val2, veh:""+brk[0], vehnp:""+brk[1]}, function(data)
					$.post("dvmap.php", {did: did, tid: tid, tdate: tdate, ttime: ttime, acknowledge_status: acknowledge_status}, function(data)
					{
						if(data.length > 0)
						{
							msg = data.split('^');
							if(msg[1] == '0')
								alert("Not Assigned Yet");
							else
								alert("Assigned");
							/*$(	"#msg").html(msg[0]);
							if(msg[1] == '0')
							{
								$("#dv"+msg[1]).html('Not assigned Yet');
								$("#dv"+val2).html(brk[1]);
							}
							if(msg[1] != '0' || msg[1] != 'fail'  )
							{
								$("#dv"+msg[1]).html('Not assigned Yet');
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
	 if(drv_id != ''){
	var message = prompt("Send Message to : "+drv_id);
		if(message !== ''){	 
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
			 UsmaniaA = Usmania.split('@');
			 if(UsmaniaA.length > 1){
				id 		= UsmaniaA[0];
				from 	= UsmaniaA[1];
				message	= UsmaniaA[2];
				senttime= UsmaniaA[3];
				var ok;
		ok=confirm('From: '+from+'      Sent: '+senttime+'\n\nMessage: '+message);
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
	 var value = 'refresh';
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
	 var value = 'refreshed';
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
		 $('#'+id).hide();
		 }
	});
 }
</script> 
{/literal}
<table  width="100%" border="0" cellspacing="0" cellpadding="0"  align="left" bgcolor="#FFFFFF">
  <tr>
    <td><table width="100%" border="0" cellspacing="0" cellpadding="0" >
        <tr>
          <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td  align="center" class="okmsg"><span class="okmsg">{ if $msgs != ''} {$msgs} {/if}
                  
                  { if $errors != ''} {$errors} {/if}</span></td>
              </tr>
              <tr>
                <td height="19" align="center"><div id="search_form">
                    <form name="searchReport" action="grid.php?id={$id}&st={$st}&ad={$ad}" method="post">
                      <table width="100%" border="0" cellspacing="2" cellpadding="2" align="center" >
                        <tr>
                          <td colspan="8" align="left" valign="middle" class="labeltxt"><table border="0" width="100%">
                          
           <tr><td colspan="9" height="19" align="center" style="background-color:#A5B7CD; font-weight:bold; font-size:18px;">
       <img src="images/van.png" alt="Trans" width="90" height="50" /> Trips Schedule For {$smarty.session.vehicle_no}-{$smarty.session.driver.fname} 
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
                    <li {if $st== '5'}style="display:block; float:left; background: url(images/tabs_hover.png) no-repeat; width:96px; height:18px; color:#FFF; padding-left: 0px; padding-top: 5px; text-align:center;" class="selected1"{/if}><a href="grid.php?show={$show}&st=5">Acknowledged</a></li>
                    <li {if $st== '4'}  style="display:block; float:left; background: url(images/tabs_hover.png) no-repeat; width:96px; height:20px; color:#FFF; padding-left: 0px; padding-top: 5px; text-align:center;" class="selected1"{/if}><a href="grid.php?show={$show}&st=4">Completed</a></li>
                    <li {if $st== '3'}  style="display:block; float:left; background: url(images/tabs_hover.png) no-repeat; width:96px; height:20px; color:#FFF; padding-left: 0px; padding-top: 5px; text-align:center;" class="selected1"{/if}><a href="grid.php?show={$show}&st=3">Cancelled</a></li>
                    <li {if $st== '2'} style="display:block; float:left; background: url(images/tabs_hover.png) no-repeat; width:96px; height:20px; color:#FFF; padding-left: 0px; padding-top: 5px; text-align:center;" class="selected1"{/if}><a  href="grid.php?show={$show}&st=2">Rescheduled</a></li>
                    <li {if $st== '8'}style="display:block; float:left; background: url(images/tabs_hover.png) no-repeat; width:96px; height:20px; color:#FFF; padding-left: 0px; padding-top: 5px; text-align:center;" class="selected1"{/if}><a href="grid.php?show={$show}&st=8&ad=0">Not Going</a></li>
                    <li {if $st== '7'}style="display:block; float:left; background: url(images/tabs_hover.png) no-repeat; width:96px; height:20px; color:#FFF; padding-left: 0px; padding-top: 5px; text-align:center;" class="selected1"{/if}><a href="grid.php?show={$show}&st=7&ad=0">Not at Home</a></li>
                    <li {if $st eq '0' || $acknowledge_status eq '0'}style="display:block; float:left; background: url(images/pendingselect.png) no-repeat; width:108px; height:20px; color:#FFF; padding-left: 0px; padding-top: 5px; text-align:center;" class="selected1" {else}style="display:block; float:left; background: url(images/pending.png) no-repeat; width:108px; height:20px; color:#FFF; padding-left: 0px; padding-top: 5px; text-align:center;" class="selected1"{/if}><a href="grid.php?show={$show}&st=9&acknowledge_status=0">Check Schedule</a></li>
 <!--<li {if $st== '9'}style="display:block; float:left; background: url(images/tabs_hover.png) no-repeat; width:105px; height:18px; color:#FFF; padding-left: 0px; padding-top: 5px; text-align:center;" class="selected1"{/if}><a rel="facebox" href="add-sheet.php">Upload Sheet</a></li>
 <li class="small"><a  title="Add" href="#" onclick="popWind2('addgrid.php?id={$id}');" > <img alt="Add" border="0" src="../graphics/add_12.gif"></a></li>-->
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
                      <td align="left" class="label_txt_heading"><strong>{if $st== '9'}Status{else}Location{/if}</strong></td>
                    <!--  <td align="left" class="label_txt_heading"><strong>Call</strong></td>-->
                    </tr>
                    <div id="sc"></div>
                    {section name=q loop=$membdetail}
                    <tr  valign="top" id="{$membdetail[q].tdid}"  bgcolor="{cycle values="#eeeeee,#d0d0d0"}"><!---->
                      <td >{$membdetail[q].trip_id}</td>
                      <!--<td align="left" valign="top" class="grid_content"></td>-->
                      <td align="left" valign="top" class="grid_content"><b>{$membdetail[q].trip_clinic}</b></td>
                      <td align="left" valign="top" class="grid_content">{$membdetail[q].trip_user}</td>
                      <!--<td align="left" valign="top" class="grid_content"> 
                      {if $st neq '9'}
{$membdetail[q].driver}-[{$membdetail[q].drv_id}]
{else}

<select name="staff1" id="staff1" class="required" onchange="return dvmap(this.value,'{$membdetail[q].tdid}','{$membdetail[q].trip_date}','{$membdetail[q].pck_time}','{$membdetail[q].acknowledge_status}')">
<option value="">--Select--</option>
{section name=r loop=$driverdata}
<option value="{$driverdata[r].drv_code}" {if $driverdata[r].drv_code eq $membdetail[q].drv_id}selected{/if}>{$driverdata[r].fname} {$driverdata[r].lname}</option>
{/section}
</select>
{/if} </td>-->
<td align="left" valign="top" class="grid_content"> 
{$smarty.session.vehicle_no}-{$smarty.session.driver.fname} {$smarty.session.driver.lname}
</td>
<!--<td align="left" valign="top" class="grid_content"> {if $membdetail[q].drv_id neq ''}
{$membdetail[q].driver}-[{$membdetail[q].drv_id}]
{else}
{if $st== '5' || $st== '9'}
<select name="staff1" id="staff1" class="required" onchange="return dvmap(this.value,'{$membdetail[q].tdid}','{$membdetail[q].trip_date}','{$membdetail[q].pck_time}')">
<option value="">--Select--</option>
{section name=r loop=$driverdata}
<option value="{$driverdata[r].drv_code}" {if $driverdata[r].drv_code eq $staff1}selected{/if}>{$driverdata[r].fname} {$driverdata[r].lname}</option>
{/section}
</select>
{/if}
{/if} </td>
-->                      <td align="left" valign="top" class="grid_content">{$membdetail[q].pck_add}</td>
                      
                      <td align="left" valign="top" class="grid_content">{$membdetail[q].drp_add}<!--<br/>
<a href="#" onclick="findcoord('drop','{$membdetail[q].drp_add}','{$membdetail[q].tdid}');" >{if $membdetail[q].drop_latlong eq '' || $membdetail[q].drop_latlong eq 'NULL'}<img src="images/icons/null_cord.png" title="Find Coordinate" >{else}<img src="images/icons/yes_cord.png" title="Find Updated Coordinate" >{/if}</a>--></td>

                      <td align="left" valign="top" class="grid_content">{if $membdetail[q].wc eq '1'} W/C{else} {$membdetail[q].pck_time|date_format:"%H:%M"}{/if}</td>
                      <td align="left" valign="top" class="grid_content">{if $membdetail[q].wc eq '1'} --:--{else}{$membdetail[q].drp_time|date_format:"%H:%M"}{/if}</td>
                      <td align="left" valign="top" class="grid_content">{$membdetail[q].trip_miles}</td>
                      <td align="left" valign="top" class="grid_content">{$membdetail[q].type}</td>
                      <td align="left" valign="top" class="grid_icon">		  
                        {if $st eq 4} <a rel="facebox" href="viewgrid.php?id={$membdetail[q].tdid}" title="View"> {if $membdetail[q].status eq '4'}
                        Successful
                        {/if}	 
                        {if $membdetail[q].status eq '1'}
                        Delayed
                        {/if} </a>&nbsp;&nbsp;
                        {else} <a rel="facebox" href="viewgrid.php?id={$membdetail[q].tdid}" title="View"> View</a>&nbsp;&nbsp;
                        {/if}
                        <!--<a href="#" onclick="alerts('{$membdetail[q].drv_id}')" ><img src="../graphics/alert.png" height="20px" width="20px" /></a>-->
                        </td>
<td >
{if $st eq '9' }
{if $membdetail[q].acknowledge_status eq '0'}Pending{/if}<br/>
<!--{if $membdetail[q].acknowledge_status eq '0'}<span style="color:#66F; font-weight:bold;"><a href="#" onclick="acknowled('{$membdetail[q].tdid}')">Confirm this!</a></span>{/if}-->
{if $membdetail[q].acknowledge_status eq '2'}<span style="color:#F00; font-weight:bold;">Denied</span>{/if}
{else}

<a title="[{$membdetail[q].drv_id}]" href="driver.php?dri_code={$membdetail[q].drv_id}&a={$membdetail[q].pck_add}&b={$membdetail[q].drp_add}" target="_blank"><img alt="Track" border="0" src="graphics/gps.png"></a>
{/if}
<!--{if $membdetail[q].gps neq ''} <a title="GPS" href="{$membdetail[q].gps}"><img alt="GPS" border="0"  src="../graphics/gps.png"></a>{else}<img alt="GPS Not Installed" border="0"  src="../graphics/dgps.png">{/if}&nbsp;&nbsp;
-->
</td>
                     <!-- <td class="grid_content">{if $membdetail[q].sip neq ''}<a href="sip:{$membdetail[q].sip}" title="Call"><img alt="Call" border="0"  src="../graphics/call_driver.png"></a>{else}<img alt="Call Not Configured" border="0"  src="../graphics/dcall.png">{/if}</td>-->
                    </tr>
                    {sectionelse}
                    <tr>
                      <td colspan="12" align="center" valign="top" class="grid_content"><strong>No Record Found!</strong></td>
                    </tr>
                    {/section}
                  </table></td>
              </tr>
              <tr>
                <td>{$paging}</td>
              </tr>
            </table></td>
        </tr>
      </table></td>
  </tr>
</table>
