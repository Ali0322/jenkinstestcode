{literal}
<script language="javascript">
	$(document).ready(function(){
							   $('#add_men').validate();
							   $('#date').mask('19/39/9999');
							   })
</script>
{/literal}
<table width="500" border="0" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center">
  <tr>
    <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td height="19" align="center" class="admintopheading">Add Maintenance</td>
        </tr>
        <tr>
          <td height="19" align="center">&nbsp;</td>
        </tr>
        <tr>
          <td height="19" align="center"> { if $msgs != '' }<font color="#009966" style="font-weight:bold">{$msgs}</font>{/if}
            { if $errors != '' }<font color="#FF0000" style="font-weight:bold">{$errors}</font>{/if}</td>
        </tr>
        <tr>
          <td height="44" align="left"  valign="top" style="padding-bottom:50px;"><form name="add_men" id="add_men" method="post" action="add.php">
              <table width="105%" border="0" cellspacing="2" cellpadding="2" align="center" class="outer_table">
                <tr>
                  <td width="38%" align="left" valign="middle" class="labeltxt"><p><strong>Select Vehicle :</strong></p></td>
                  <td width="62%" colspan="2" align="left" valign="middle"><select name="veh_id" id="veh_id" class="required">
                    <option value="">Select Vehicle</option>
                    
                  {section name = q loop=$vehicles}
                  
                    <option value="{$vehicles[q].id}">{$vehicles[q].vname} - [{$vehicles[q].vnumber} ]</option>
                    
                  {/section}
                  
                  </select>
                    <span class="SmallnoteTxt">*</span></td>
                </tr>
                  <tr>
                  <td width="38%" align="left" valign="middle" class="labeltxt"><p><strong>Maintenance Date:</strong></p></td>
                  <td colspan="2" align="left" valign="middle"><span class="SmallnoteTxt">
                    <input name="date" type="text"  class="inputTxtField required" id="date" value="{$date}" />
                    (mm/dd/yyyy)*</span></td>
                </tr>
                <tr>
                  <td align="left" valign="middle" class="labeltxt"><strong>Maintenance Type:</strong></td>
                  <td colspan="2" align="left" valign="middle"><select name="type" id="type"  class="inputTxtField required">
                    <option value="">Select Maintnance Type</option>
                    
                  {section name = q loop=$types}
                  	
                    <option value="{$types[q].id}">{$types[q].mentype}</option>
                    
                  {/section}
                  
                  </select>                    &nbsp;<span class="SmallnoteTxt">*</span></td>
                </tr>
                <tr>
                  <td align="left" valign="middle" class="labeltxt"><strong>Maintenance Description:</strong></td>
                  <td colspan="2" align="left" valign="middle"><textarea name="desc" id="desc" class="inputTxtField required" ></textarea>                    &nbsp;<span class="SmallnoteTxt">*</span></td>
                </tr>
                <tr>
                  <td align="left" valign="middle" class="labeltxt"><strong>Maintenance Cost:</strong></td>
                  <td colspan="2" align="left" valign="middle"><input name="cost" type="text"  class="inputTxtField required" id="cost" value="{$cost}" maxlength="10"/>
                    (dollars)                    &nbsp;<span class="SmallnoteTxt">*</span></td>
                </tr>
                <!--<tr>
                  <td align="left" valign="middle" class="labeltxt"><strong>Status:</strong></td>
                  <td colspan="2" align="left" valign="middle"><select id="status" name="status"  class="inputTxtField required">
                  <option value="">Select Status</option>
                  <option value="1">Done</option>
                  <option value="0">Pending</option>
                  </select>&nbsp;<span class="SmallnoteTxt">*</span></td>
                </tr>-->
                <!--<tr>
              <td align="left" valign="top" class="labeltxt"><strong>Assigned to :</strong></td>
              <td colspan="2" align="left">
			  <select name="driver" id="driver" class="SelectBox required" >
                <option value="">Select Driver</option>
               {section name=n loop=$dlist}
			   <option value="{$dlist[n].drvid}" {if $dlist[n].drvid eq $driver}selected{/if}>{$dlist[n].fname} {$dlist[n].lname} </option>           
			   {/section}
		      </select>
                &nbsp;<span class="SmallnoteTxt">*</span> </td>
            </tr>-->

                <tr>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                </tr>
                <tr>
                  <td valign="top">&nbsp;</td>
                  <td colspan="2"><input type="submit" name="update" value="Add" class="inputButton" id="update"></td>
                </tr>
              </table>
          </form></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
        </tr>
      </table></td>
  </tr>
</table>
