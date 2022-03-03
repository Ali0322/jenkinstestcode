{literal}

<script>

   $(document).ready(function(){

    $('#addgrid').validate();

		$("#phone").mask("999-99-9999");

  });

</script>

{/literal}



<table width="100%" border="0" align="center" cellpadding="4" cellspacing="0">

        <tr>

          <td align="center" class="headingbg">{ if $msgs != ''} {$msgs} {/if}

		  { if $errors != ''} {$errors} {/if} </td>

        </tr>

        <tr>

          <td class="admintopheading">View Trip Details </td>

        </tr>

        <tr>

          <td align="left" valign="top">

		  <table width="650" border="0" cellspacing="0" cellpadding="0" align="center">

  <tr>

    <td width="17" align="left" valign="top"><img src="images/1.jpg" alt="d" width="17" height="17" /></td>

    <td align="left" valign="top" background="images/2.jpg">&nbsp;</td>

    <td width="17" align="left" valign="top"><img src="images/3.jpg" alt="d" width="17" height="17" /></td>

  </tr>

  <tr>

    <td align="left" valign="top" background="images/4.jpg">&nbsp;</td>

    <td align="left" valign="top" width="100%"><form name="addgrid" id="addgrid" method="post" action="editgrid.php" enctype="multipart/form-data" >

								<table width="650" border="0" cellspacing="2" cellpadding="2">			  

							

								  <tr>
								    <td height="25" align="right" class="labeltxt">Trip Code: </td>
								    <td height="25">&nbsp;&nbsp;&nbsp;{$trip_code}</td>
							      </tr>
								  <tr>

								    <td width="150" height="25" align="right" class="labeltxt">Patient Name: </td>

								    <td width="486" height="25">&nbsp;&nbsp;&nbsp;{$cname}</td>
							      </tr>

								  <tr>

								    <td height="25" align="right" class="labeltxt">Facility: </td>

								    <td height="25">&nbsp;&nbsp;&nbsp;{$clinic}</td>
							      </tr>

								  <tr>

								    <td height="25" align="right" class="labeltxt">Telephone:</td>

								    <td height="25">&nbsp;&nbsp;&nbsp;{$phone}</td>
							      </tr>

								 

								  <tr>

								    <td height="25" align="right" class="labeltxt">Pickup Address: </td>

								    <td height="25">&nbsp;&nbsp;&nbsp;{$addr1}</td>
							      </tr>

								  <tr>

								    <td height="25" align="right" class="labeltxt">Drop Address: </td>

								    <td height="25">&nbsp;&nbsp;&nbsp;{$drpadd}</td>
							      </tr>

								  <br>

								  <tr>

								    <td height="25" align="right" class="labeltxt">Pickup Time: </td>

								    <td height="25">&nbsp;&nbsp;&nbsp;{$ptime}</td>
							      </tr>
								  <tr>
                                    <td height="25" align="right" class="labeltxt">Actual Pickup Time: </td>
								    <td height="25">&nbsp;&nbsp;&nbsp;{$aptime}</td>
							      </tr>

								  <tr>

								    <td height="25" align="right" class="labeltxt">Drop Time: </td>

								    <td height="25">&nbsp;&nbsp;&nbsp;{$dtime}</td>
							      </tr>
								  <tr>
                                    <td height="25" align="right" class="labeltxt">Actual Drop Time: </td>
								    <td height="25">&nbsp;&nbsp;&nbsp;{$adtime}</td>
							      </tr>

								  <tr>

								    <td height="25" align="right" class="labeltxt">Miles:</td>

								    <td height="25">&nbsp;&nbsp;&nbsp;{$m1}</td>
							      </tr>

								  <tr>

								    <td height="25" align="right" class="labeltxt">Staff ID:</td>

								    <td height="25">&nbsp;&nbsp;&nbsp;{$staff1}</td>
							      </tr>

								  <tr>

								    <td height="25" align="right" class="labeltxt">Remarks:</td>

								    <td height="25">&nbsp;&nbsp;&nbsp;{$remarks}</td>
							      </tr>

								  <tr>

								    <td height="25" align="right" class="labeltxt">Status:</td>

								    <td height="25">&nbsp;&nbsp;&nbsp;
										 {if $status eq '4'}
											 Successful
									     {elseif $status eq '1'}
											 Successful
										 {elseif $status eq '3'}
										    Cancelled
										 {elseif $status eq '5'}
										     In Progress
										 {elseif $status eq '2'}
										     Rescheduled
										 {elseif $status eq '7'}
										     Not at Home
										 {elseif $status eq '8'}
										     Not Going		 							 											 										 {else}
										     In Progress
										 {/if}									 </td>
							      </tr>

								

								  

								  

								  <tr>

									<td height="25">&nbsp;</td>

									<td height="25">																</td>
								  </tr>
			  </table>          

			                    <input type="hidden" value="{$tripid}" name="tripid" id="tripid">  

								<input type="hidden" value="{$id}" name="id" id="id">

								</form></td>

    <td align="left" valign="top" background="images/5.jpg">&nbsp;</td>

  </tr>

  <tr>

    <td align="left" valign="top"><img src="images/6.jpg" alt="d" width="17" height="17" /></td>

    <td align="left" valign="top" background="images/7.jpg">&nbsp;</td>

    <td align="left" valign="top"><img src="images/8.jpg" alt="d" width="17" height="17" /></td>

  </tr>

</table>		  </td>

        </tr>

      </table>

