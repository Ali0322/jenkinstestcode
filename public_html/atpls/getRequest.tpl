{literal}
<script language="javascript">
 function validateRequest(){
	  var val =  $('#requests').val();	  
	  if(isNaN(val)){
	   alert('Positive digits allowed only');
	   $('#requests').val('');
	   return false;
	  }	  
	  else if(val < 1){
	   alert('Positive digits allowed only');
	   $('#requests').val('');
	   return false;
	  }
  /*else if(!$("input[@name='appointment']:checked").val()){
	   alert('Please Choose Appointment Nature');
	   return false;
	  }*/
	  else{
	  return true;
	  }
   }
</script>
{/literal}
<form name="getRequest" id="getRequests" method="post" action="getrequests.php?id={$formid}">
<table width="500" border="0" cellspacing="2" cellpadding="2" align="center">
  <tr>
    <td colspan="2" class="mainHeadingTxt"><strong>Trip Request</strong></td>
  </tr>
  <tr>
    <td colspan="2">&nbsp;</td>
  </tr>
  {if $formid eq '0'}{/if}
  <tr>
    <td width="250"><strong>How many requests you want to put?</strong> </td>
    <td width="236"><input type="text" name="requests" id="requests" class="inputTxtField required digits" maxlength="2"/></td>
  </tr>
  <tr style="height:5px;"><td></td><td></td></tr>
    <tr>
    <td>&nbsp;</td>
   <td><input type="submit" value="Apply" name="totreqs" class="btn" {if $formid eq '0'}onClick="return validateRequest();"{/if} />
	<input type="reset" value="Reset" class="btn"  /></td>
  </tr>
  </table>
</form>