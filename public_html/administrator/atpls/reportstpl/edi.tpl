{ include file = headerinner.tpl}
{literal} 
<script language="JavaScript" type="text/javascript" src="../mercy/suggest.js"></script>
<script type="text/javascript">
$(document).ready(function(){
						   $('#searchReport').validate();
						   $('#hosp').attr('disabled', true);
						   });
function other()
{
	val = document.getElementById('hospname').value;
	if(val =='other')
	{
	$('#hosp').attr('disabled', false);
	}
	else
	{
	 $('#hosp').attr('disabled', true);
	}
}
$(document).ready(function(){	

$("#startdate").datepicker( {maxDate:'0', dateFormat: 'mm/dd/yy'} );
$("#enddate").datepicker( {maxDate:'0', dateFormat: 'mm/dd/yy'} );
});
</script> 
{/literal}
<table width="80%" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td height="19" colspan="2" align="center" class="okmsg"><span class="okmsg">{ if $msgs != ''} {$msgs} {/if}
            { if $errors != ''} {$errors} {/if}</span></td>
        </tr>
        <tr>
          <td height="19" colspan="2" align="center"><div align="right" id="add_div" style="padding-right:40px; padding-bottom:5px;"> {if $noReq neq '0'}
              [<a href="javascript:history.back();">Back</a>]{/if}</div></td>
        </tr>
        <tr>
          <td height="19" colspan="2" align="center" class="admintopheading">CLAIM  REPORT</td>
        </tr>
           <tr>
          <td height="44" colspan="2" align="center"  valign="top"><form name="searchReport" action="" method="get" id="searchReport">
              <table   border="0" cellspacing="2" cellpadding="2" align="center" class="" width="100%">
                  <tr>
                  <td width="5%" align="left" valign="top" class="labeltxt"><strong>From:</strong></td>
                  <td width="20%" align="left" valign="top"><input type="text" name="startdate" id="startdate" value="{$stdate}" class="required" size="10"/>     (mm/dd/yyyy)</td>
                  <td width="5%"  align="left" valign="top" class="labeltxt"><strong>To:</strong>&nbsp;</td>
                  <td width="20%"  align="left" valign="top" ><input type="text" name="enddate" id="enddate" value="{$enddate}" class="required" size="10" />       (mm/dd/yyyy)</td>
                 <td align="left"  class="labeltxt" valign="top"><strong>Account:</strong>&nbsp;</td>
             <td align="left" valign="top">
                <select name="hospname" class=" txt_boxX" id="hospname"  >
                      <option value="">Select Account</option>
                      			  {section name=q loop=$hosp}	
                 <option value="{$hosp[q].id}" {if $hosp[q].id eq $hospname} selected="selected" {/if}>{$hosp[q].account_name}</option>
                      {/section}
                    </select>
              </td>
              <td align="left" valign="top" class="labeltxt"><strong><strong>Patient Name:</strong></strong></td>
                  <td align="left" valign="top"><input type="text" name="pname" id="pname" value="{$pname}" class="inputTxtField" autocomplete="off"  onKeyUp="searchSuggest();" /><div id="layer1"></div> </td>
                </tr>
                <tr>
                  <td align="left" colspan="1" valign="top">&nbsp;</td>
                  <td colspan="3" align="left" valign="top"><input type="submit" name="submit" id="submit" value='&nbsp;&nbsp;Show Report&nbsp;&nbsp;' class="inputButton btn"  />                </td>
                </tr>
              </table>
            </form></td>
        </tr>
        <tr>
          <td height="44" colspan="2" align="center"  valign="top" style="padding-bottom:50px;"><table width="100%" border="0" class="main_table11">
              <tr class="admintopheading">
               
                <td width="10%" align="center"><strong>Patient Name </strong></td>
                <td width="7%" align="center"><strong> Date</strong></td>
                <td width="15%" align="center"><strong>Account Name</strong></td>
                <td width="15%" align="center"><strong> Pick Address</strong></td>
                <td width="5%" align="center"><strong> Miles</strong></td>
                <td width="10%" align="center"><strong> Amount </strong></td>
                <td width="10%" align="center">Option</td>
              </tr>
              {section name=q loop=$data}
              {if $reqdetails[q].rows neq '0'}
              <tr id="tr{$reqdetails[q].id}" bgcolor="{cycle values="#ffffff,#dfedfa"}">
              	<td align="center" valign="top"><p>{$data[q].clientname}</p></td>
                <td align="center" valign="top">{$data[q].appdate|date_format}</td>
                <td align="center" valign="top">{$data[q].account_name} </td>
                <td align="center" valign="top">{$data[q].pickaddr}</td>
                <td align="center" valign="top">{$data[q].milage}</td>
                <td align="center" valign="top">{$data[q].charges}</td>
                <td align="center" valign="top">
                <a href="../edi/index.php?ids={$data[q].id}" title="Edit" target="_blank">Create EDI Form</a></td>
              </tr>
              {/if}
              {sectionelse}
              <tr>
                <td colspan="7" align="center" ><b>No Record Found</b></td>
              </tr>
              {/section}
            </table></td>
        </tr>
       
      </table>
{ include file = innerfooter.tpl} 