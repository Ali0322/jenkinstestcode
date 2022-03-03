{ include file = headerinner.tpl}
{literal}
<script type="text/javascript">
$(document).ready(function() {
	$("#adminprof").validationEngine();
});
</script>
{/literal}

<table id="table1" class="outer_table"   border="0" cellspacing="0" cellpadding="0" align="center" bgcolor="#FFFFFF" style="margin-bottom:10px;">
	
	<tr>
 			   <td height="19" colspan="3" align="right" style="padding-right:40px">[<a href="javascript:history.back();">Back</a>]</td>
    </tr>
    <tr>
		<td colspan="20" valign="top">
			<table width="100%"  align="center" height="53" border="0" cellpadding="2" cellspacing="2">
 			 { if $msgs != '' or $errors != ''}
 			 <tr>
			   <td height="19" class="okmsg" colspan="2" align="center" style="color:#FF0000; font-weight:bold;">
			{ if $msgs != ''} {$msgs} {/if}
		    { if $errors != ''} {$errors} {/if}			   </td>
			 </tr>
             {/if}
			 <tr>
			   <td height="19" class="admintopheading" colspan="3" align="center"> EDI CONSTANT </td>			
			 </tr> 
             <form name="adminprof" id="adminprof" action="" method="post">
			 <tr>
			   <td  width="20%" align="left"><strong>senderId:</strong></td>
			   <td  width="30%" align="left"><input name="senderId" type="text" class="" id="senderId" value="{$data.senderId}" maxlength="50"></td>
               <td  width="50%" align="left">e.g: </td>
			  </tr>
              <tr>
			   <td  width="20%" align="left"><strong>Environment :</strong></td>
			   <td  width="30%" align="left"><select name="indicator" >
               <option value="P" {if $data.indicator eq 'P'} selected="selected"{/if}>Production</option>
               <option value="T" {if $data.indicator eq 'T'} selected="selected"{/if}>Testing</option> </select></td>
               <td  width="50%" align="left">e.g: </td>
			  </tr>
              <tr>
			   <td  width="20%" align="left"><strong>refIdentification:</strong></td>
			   <td  width="30%" align="left"><input name="refIdentification" type="text" class="" id="refIdentification" value="{$data.refIdentification}" maxlength="100"></td>
               <td  width="50%" align="left">e.g: </td>
			  </tr>
              <tr>
			   <td  width="20%" align="left"><strong>orgName:</strong></td>
			   <td  width="30%" align="left"><input name="orgName" type="text" class="" id="orgName" value="{$data.orgName}" maxlength="100"></td>
               <td  width="50%" align="left">e.g: </td>
			  </tr>
              <tr>
			   <td  width="20%" align="left"><strong>insuranceCName:</strong></td>
			   <td  width="30%" align="left"><input name="insuranceCName" type="text" class="" id="insuranceCName" value="{$data.insuranceCName}" maxlength="100"></td>
               <td  width="50%" align="left">e.g: </td>
			  </tr>
              <tr>
			   <td  width="20%" align="left"><strong>insuranceCEDI:</strong></td>
			   <td  width="30%" align="left"><input name="insuranceCEDI" type="text" class="" id="insuranceCEDI" value="{$data.insuranceCEDI}" maxlength="100"></td>
               <td  width="50%" align="left">e.g: </td>
			  </tr>
              <tr>
			   <td  width="20%" align="left"><strong>providerSpecialyCode:</strong></td>
			   <td  width="30%" align="left"><input name="providerSpecialyCode" type="text" class="" id="providerSpecialyCode" value="{$data.providerSpecialyCode}" maxlength="100"></td>
               <td  width="50%" align="left">taxomony code </td>
			  </tr>
              <tr>
			   <td  width="20%" align="left"><strong>billingProviderNPI:</strong></td>
			   <td  width="30%" align="left"><input name="billingProviderNPI" type="text" class="" id="billingProviderNPI" value="{$data.billingProviderNPI}" maxlength="50"></td>
               <td  width="50%" align="left">e.g: </td>
			  </tr>
              <tr>
			   <td  width="20%" align="left"><strong>TINNumber:</strong></td>
			   <td  width="30%" align="left"><input name="TINNumber" type="text" class="" id="TINNumber" value="{$data.TINNumber}" maxlength="50"></td>
               <td  width="50%" align="left">e.g: </td>
			  </tr>	
			<tr>
<td colspan="2" align="center" style="padding-top:20px"><input type="submit" name="submitAdmin" value="Update" class="btn">&nbsp;<input type="reset" name="reset" value=" Reset " class="btn"></td>
			</tr>
            </form>
		  </table> 
	</td>
  </tr>
</table>																				
{ include file = footer.tpl}