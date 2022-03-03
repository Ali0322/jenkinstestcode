<?php
/* *************************** *
	   * Created On : 31st March,2009 
	   * Coded By : Muhammad Sajid
	   * All Rights Reserved 2009 by : HITS (Hybrid IT Services) 
	   * MMTp://www.hybridTracktrans.com
	   *************************** */
	
   require_once('DBAccess/Database.inc.php');
	include_once('configuration/site_functions.php');
	
	
	$db = new Database;	
	$db->connect();

		// Is there a posted query string?
		if(isset($_GET)) {
				 
			//$clientname = sql_replace($_POST['clientname']);
			//$fone = sql_replace($_POST['fone']);	
			//$dateofbirth = sql_replace($_POST['dateofbirth']);
			$drv = $_GET['driver'];
			
			//$casemanager = sql_replace($_POST['casemanager']);
								
			if($drv  != '') {
			
		   
		
		       
		        if($_GET['driver'] != '' ){
		
							if ($drv!='')
						{
							$whr .=" AND td.drv_id = '$drv'";
						}
													if(isset($_GET['id']))
								{
									$sheet = $_SESSION['sheet'] = $_GET['id'];
								}
								else
								{
									$sheet = $_SESSION['sheet'] ;
								}
						
							if($st =='' || $st == '5' )
							{
								$st=5;
								$cond = " AND td.status IN ('6','5','2','0')";
							}
							else
							{
							   if($st == '4'){ $cond = " AND td.status IN ('1','4')"; }
							   else{
								   $cond = " AND td.status = '".$st."' "; 
								}
							}
												
							if($pg==''){
							$Query = "SELECT t.sheet_id, td.veh_id,  t.trip_code, t.trip_id,  t.trip_user,  t.trip_clinic,  t.trip_date, 
							  t.trip_tel, td.tdid, td.type, td.pck_add,td.aptime,td.pck_time,td.aptime, td.drp_atime, 
							  td.drp_add,  td.drp_time,  td.trip_miles,td.wc,   td.trip_remarks,  td.drv_id, td.status 
							  FROM trips as t,  trip_details as td 
							  WHERE t.trip_id=td.trip_id AND t.sheet_id=$sheet $cond $whr ORDER by td.pck_time ASC";
							  }else{
							  
							  $today=date('Y-m-d');
							  $Query = "SELECT t.sheet_id, td.veh_id,  t.trip_code, t.trip_id,  t.trip_user,  t.trip_clinic,  t.trip_date, 
							  t.trip_tel, td.tdid, td.type, td.pck_add,td.aptime,td.pck_time,td.aptime, td.drp_atime, 
							  td.drp_add,  td.drp_time,  td.trip_miles,td.wc,   td.trip_remarks,  td.drv_id, td.status 
							  FROM trips as t,  trip_details as td 
							  WHERE t.trip_id=td.trip_id AND t.trip_date='$today' AND t.sheet_id=$sheet $cond $whr ORDER by td.pck_time ASC";
							  
							  
							  }
							  if($db->query($Query) && $db->get_num_rows() > 0)
								{
									$trips = $db->fetch_all_assoc();
								   for ($i = 0;$i<sizeof($trips);$i++)
								   {
									 $did = $trips[$i]['drv_id'];
							
										$drvQuery = "SELECT  fname, lname, drv_code,sip
																	FROM ".TBL_DRIVERS."
																	WHERE  drv_code = '$did'";
										if($db->query($drvQuery) && $db->get_num_rows() > 0)
										 {
											 $drv = $db->fetch_row_assoc();
											 $trips[$i]['driver'] = $drv['fname']." ".$drv['lname'];
											  $trips[$i]['sip'] = $drv['sip'];
										 }
								   }
								   for ($i = 0;$i<sizeof($trips);$i++)
								   {
								   
									 $vid = $trips[$i]['veh_id'];
							
										$drvQuery2 = "SELECT gpsurl,id
																	FROM ".TBL_VEHICLES."
																	WHERE  id  = '$vid'";
										if($db->query($drvQuery2) && $db->get_num_rows() > 0)
										 {
											 $vh = $db->fetch_row_assoc();
											 $trips[$i]['gps'] = $vh['gpsurl'];
										 }
								   }
							   
								}
		  
                }	
				
                  
			$divElem =	'<tr valign="top"  bgcolor="{cycle values="#eeeeee,#d0d0d0"}">
                      <td align="left" valign="top" class="grid_content"><b>{$membdetail[q].trip_code}</b></td>

                      <td align="left" valign="top" class="grid_content"><b>{$membdetail[q].trip_clinic}</b></td>

                      <td align="left" valign="top" class="grid_content">{$membdetail[q].trip_user}</td>

                      <td align="left" valign="top" class="grid_content">
                      	{if $membdetail[q].drv_id neq ''}
                      		{$membdetail[q].driver} - [ {$membdetail[q].drv_id} ]
						{else}
                        	{if $st== '5'}
                        	<select name="staff1" id="staff1" class="required" onchange="return dvmap(this.value,'{$membdetail[q].tdid}','{$membdetail[q].trip_date}','{$membdetail[q].pck_time}')">
								<option value="">--Select--</option>
								{section name=r loop=$driverdata}
								<option value="{$driverdata[r].drv_code}" {if $driverdata[r].drv_code eq $staff1}selected{/if}>{$driverdata[r].drv_code}--{$driverdata[r].fname} {$driverdata[r].lname}</option>
								{/section}
							</select>
                            {/if}
                        {/if}
                      </td>

                      <td align="left" valign="top" class="grid_content">{$membdetail[q].pck_add}</td>

					  

                      <td align="left" valign="top" class="grid_content">{$membdetail[q].drp_add}</td>

					  

					    <td align="left" valign="top" class="grid_content">{if $membdetail[q].wc eq '1'} W/C{else} {$membdetail[q].pck_time}{/if}</td>

						

						  <td align="left" valign="top" class="grid_content">{if $membdetail[q].wc eq '1'} --:--{else}{$membdetail[q].drp_time}{/if}</td>

					  

                      <td align="left" valign="top" class="grid_content">{$membdetail[q].trip_miles}</td>

					  

                       <td align="left" valign="top" class="grid_content">{if $membdetail[q].type == '1'}<img src="../images/one-way.png" title="One-Way Trip">{else}<img  title="Two-Way Trip" src="../images/two-way.png">{/if}</td>

					   

					  <td align="left" valign="top" class="grid_icon">
<a  href="#" onclick="popWind('editgrid-new.php?id={$membdetail[q].tdid}&type={if $st eq 6}1{else}2{/if}');" title="Edit"> <img border="0" alt="Edit" src="../graphics/edit.png"></a>&nbsp;&nbsp;		  
				{if $st eq 4} 	
					  <a rel="facebox" href="viewgrid.php?id={$membdetail[q].tdid}" title="View">                     
					  {if $membdetail[q].status eq '4'}
				     	 Successful
					  {/if}	 
					  {if $membdetail[q].status eq '1'}
					     Delayed
					  {/if}					  </a>&nbsp;&nbsp;
				{else}
					  <a rel="facebox" href="viewgrid.php?id={$membdetail[q].tdid}" title="View"> View</a>&nbsp;&nbsp;
				{/if}
				{if $smarty.session.admuser.admin_level eq '0'}	 <a href="#"  onclick="return deleteRec('{$membdetail[q].tdid}','{$id}');"  title="Remove"> <img alt="Remove" border="0"  src="../graphics/delete.png"></a>
				{/if}&nbsp;</td>
                <td >{if $membdetail[q].gps neq ''} <a title="GPS" href="{$membdetail[q].gps}"><img alt="GPS" border="0"  src="../graphics/gps.png"></a>{else}<img alt="GPS Not Installed" border="0"  src="../graphics/dgps.png">{/if}&nbsp;&nbsp;</td>
				
				<td class="grid_content">{if $membdetail[q].sip neq ''}<a href="sip:{$membdetail[q].sip}" title="Call"><img alt="Call" border="0"  src="../graphics/call_driver.png"></a>{else}<img alt="Call" border="0"  src="../graphics/dcall.png">{/if}</td>
                    </tr>';
				
			
				echo $divElem;
				
					
				//echo $hid;	
					
					
				} else {
					echo '';
				}
		} else {
			echo 'There should be no direct access to this script!';
		}

?>