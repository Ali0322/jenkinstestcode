 {include file="top.tpl"}
 {include file="header.tpl"}
 <div style="padding-left:20px;">
  <div id="left_panel">
                                        <div class="form_panel2">
                                    <form name="tripReq" id="tripReq" action="myrequests.php" method="post">    
                                  		<table  width="100%" border="0" cellspacing="0" cellpadding="0"  align="center" >

  <tr>

    <td><table width="100%" border="0" cellspacing="0" cellpadding="0" class="outer_table" align="center">

        <tr>

          <td><table width="961" border="0" cellspacing="0" cellpadding="0" >

              
				<tr><td><div class="heading">Facility Trips</div></td></tr>
              <tr>

                <td height="19" align="center" class="okmsg"><span class="okmsg">{ if $msgs != ''} {$msgs} {/if}

                  { if $errors != ''} {$errors} {/if}</span></td>

              </tr>
			<tr>

                <td height="19" align="center" class="form_heading1">ROUTING SHEET DETAILS </td>

              </tr>
              <tr>

                <td height="19" align="center"><div align="right" id="add_div" style="padding-right:40px; padding-bottom:5px;"> [<a href="index.php">Home</a>]</div></td>

              </tr>

              <tr>

                <td class="tabs"><ul>
		
                                      <li {if $st== '5'}style="display:block; float:left; background: url(images/tabs_hover.png) no-repeat; width:95px; height:20px; color:#FFF; padding-left: 0px; padding-top: 5px; text-align:center;" class="selected1"{/if}><a href="clinictrip.php?st=5">In Progress</a></li>

				    <li {if $st== '4'}  style="display:block; float:left; background: url(images/tabs_hover.png) no-repeat; color:#FFF; padding-left: 0px; padding-top: 5px; text-align:center;" class="selected1"{/if}><a href="clinictrip.php?st=4">Completed</a></li>

                    <li {if $st== '3'}  style="display:block; float:left; background: url(images/tabs_hover.png) no-repeat; color:#FFF; padding-left: 0px; padding-top: 5px; text-align:center;" class="selected1"{/if}><a href="clinictrip.php?st=3">Cancelled</a></li>

                    <li {if $st== '2'} style="display:block; float:left; background: url(images/tabs_hover.png) no-repeat; color:#FFF; padding-left: 0px; padding-top: 5px; text-align:center;" class="selected1"{/if}><a  href="clinictrip.php?st=2">Rescheduled</a></li>

                    <li {if $st== '8'} style="display:block; float:left; background: url(images/tabs_hover.png) no-repeat; color:#FFF; padding-left: 0px; padding-top: 5px; text-align:center;" class="selected1"{/if}><a href="clinictrip.php?st=8&ad=0">Not Going</a></li>
					
					  <li {if $st== '7'} style="display:block; float:left; background: url(images/tabs_hover.png) no-repeat;color:#FFF; padding-left: 0px; padding-top: 5px; text-align:center;" class="selected1"{/if}><a href="clinictrip.php?st=7&ad=0">Not at Home</a></li>



                    <li {if $st== '0'} style="display:block; float:left; background: url(images/tabs_hover.png) no-repeat;  color:#FFF; padding-left: 0px; padding-top: 5px; text-align:center;" class="selected1"{/if}><a href="clinictrip.php?st=0">Addons</a></li>
                  </ul>

				  </td>

              </tr>
              <tr class="form_heading1">

                <td height="44" align="center"  valign="top" style="padding-bottom:50px;"><table width="100%" border="1" style="border-color:#FFFFFF;" class="main_table" cellpadding="0" cellspacing="0" >

                    <tr>
                      <td align="left" width="5%" ><strong>Code</strong></td>

                      <td align="left" width="12%" ><strong>Facility</strong></td>

                      <td align="left" width="10%" ><strong>Patient  Name </strong></td>

                       <td  align="left" width="10%"><strong>Driver</strong></td>

                      <td  align="left" width="18%" ><strong>Pick Address</strong></td>

                      <td align="left" width="18%" ><strong>Drop Address</strong></td>

                      <td align="left" width="5%" ><strong>Pickup Time</strong></td>

					    <td align="left" width="5%" ><strong>Drop Time</strong></td>

						<td align="left" width="5%" ><strong>Miles</strong></td>

					   <td align="left" width="5%"><strong>Trip Type</strong></td>

                      <td align="left" width="7%"><strong>Status</strong></td>
                    </tr>

                    {section name=q loop=$membdetail}

<tr class="SmallgridTxt" bgcolor="{cycle values="#eeeeee,#d0d0d0"}">
                      <td align="left" valign="top" class="grid_content">{$membdetail[q].trip_id}</td>

                      <td align="left" valign="top" class="grid_content">{$membdetail[q].trip_clinic}</td>

                      <td align="left" valign="top" class="grid_content">{$membdetail[q].trip_user}</td>

                      <td align="left" valign="top" class="grid_content">{$membdetail[q].driver}</td>

                      <td align="left" valign="top" class="grid_content">{$membdetail[q].pck_add}</td>
                      <td align="left" valign="top" class="grid_content">{$membdetail[q].drp_add}</td>
					    <td align="left" valign="top" class="grid_content">{if $membdetail[q].wc eq '1'} W/C{else} {$membdetail[q].pck_time|date_format:"%H:%M"}{/if}</td>

						

						  <td align="left" valign="top" class="grid_content">{if $membdetail[q].wc eq '1'} --:--{else}{$membdetail[q].drp_time|date_format:"%H:%M"}{/if}</td>

					  

                      <td align="left" valign="top" class="grid_content">{$membdetail[q].trip_miles}</td>

					  

                       <td align="left" valign="top" class="grid_content">{if $membdetail[q].type == '1'}<img src="images/one-way.png" title="A to B Trip" width="30" height="15">{else}<img  title="Return Trip B to A" src="images/two-way.png" width="30" height="15">{/if}</td>

					   

					  <td align="left" valign="top" class="grid_icon">

				                 
					  {if $membdetail[q].status  =='5' || $membdetail[q].status  =='0'}
				     	 Not-Picked
					  {/if}	 
					   {if $membdetail[q].status  == '6' || $membdetail[q].status  == '4'}
				     	 Picked
					  {/if}	 
					 				  </a>&nbsp;&nbsp;
			
					  <a rel="facebox" href="viewgrid.php?id={$membdetail[q].tdid}" title="View"> View</a>&nbsp;&nbsp;
			
				</td>
                    </tr>

                    {sectionelse}

                    <tr>

                      <td colspan="11" align="center" valign="top" class="grid_content"><strong>No Record Found!</strong></td>

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

</table></form>
                                </div>
                                <!--Request a trip Panel End Here-->
                            </div>   </div>
  {include file="footer.tpl"}