<?php /* Smarty version 2.6.12, created on 2020-06-01 19:57:42
         compiled from vehtpl/editvehicle.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'date_format', 'vehtpl/editvehicle.tpl', 187, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "headerinner.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>



<?php echo ' 
<script>



function chk_date()



{



	date = $(\'#vpurchasedon\').val();



	cdate =new Date();



	day = cdate.getDate();



	month = cdate.getMonth();



	year = cdate.getFullYear();



	//curdate = month + \'/\'+day + \'/\' + year;



	curdate = new Date(year, month, day);



	Ardate = date.split(\'/\');



	entdate = new Date (Ardate[2], Ardate[0],Ardate[1]);



	//alert(entdate + \' and \' + curdate  + \' diference :\' + dif);



	if(entdate > curdate)



	{



		//alert(date + \' and \' + curdate);



		alert(\'Future date is not allowed!\');



	}



}



$(document).ready(function() {

	$("#editvehicle").validationEngine();
	$("#expireon").mask("19/39/9999");

});



function check(){





	a = $(\'#a\').show();

$(\'#b\').show();



}

function check2(){





	a = $(\'#a\').hide();

    $(\'#b\').hide();

}



</script> 
'; ?>

<table border="0" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" class="outer_table" style="margin-bottom:10px;">
  <tr>
    <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td height="25" align="right" valign="top">[<a href="javascript:history.back();">Back</a>]</td>
        </tr>
        <tr>
          <td height="19" align="center" class="admintopheading">Edit Vehicle </td>
        </tr>
        
        <tr>
          <td height="19" align="center"> <?php if ($this->_tpl_vars['msgs'] != ''): ?><font color="#009966" style="font-weight:bold"><?php echo $this->_tpl_vars['msgs']; ?>
</font><?php endif; ?>
            
            
            
            <?php if ($this->_tpl_vars['errors'] != ''): ?><font color="#FF0000" style="font-weight:bold"><?php echo $this->_tpl_vars['errors']; ?>
</font><?php endif; ?></td>
        </tr>
        <tr>
          <td height="44" align="center"  valign="top"><form name="editvehicle" id="editvehicle" method="post" action="editvehicle.php?id=<?php echo $this->_tpl_vars['id']; ?>
">
              <table width="80%" border="0" cellspacing="2" cellpadding="2" align="center" style="border:#999999 1px solid;">
                <tr>
                  <td colspan="3" valign="top" class="admintopheading"><strong>Vehicle Information</strong></td>
                </tr>
                <tr>
                  <td width="38%" align="left" valign="top" class="labels"><strong>Plat Number :</strong></td>
                  <td colspan="2" align="left"><input name="vnum" type="text"  class="validate[required] inputTxtField" id="vnum" value="<?php echo $this->_tpl_vars['vnum']; ?>
" maxlength="15"/>
                    &nbsp;<span class="SmallnoteTxt">*</span>
                    <input type="hidden" name="hidvnum" id="hidvnum" value="<?php echo $this->_tpl_vars['hidvnum']; ?>
"/></td>
                </tr>
                <tr>
                  <td width="38%" align="left" valign="top" class="labels"><strong>VIN Number :</strong></td>
                  <td colspan="2" align="left"><input name="vin" type="text"  class="validate[required] inputTxtField" id="vin" value="<?php echo $this->_tpl_vars['data']['vin']; ?>
" maxlength="30"/>
                    &nbsp;<span class="SmallnoteTxt">*</span></td>
                </tr>
                <tr>
                  <td align="left" valign="top" class="labels"><strong>Name :</strong></td>
                  <td colspan="2" align="left"><input name="vname" type="text"  class="validate[required] inputTxtField" id="vname" value="<?php echo $this->_tpl_vars['vname']; ?>
" maxlength="50"/>
                    &nbsp;<span class="SmallnoteTxt">*</span></td>
                </tr>
                <tr>
                  <td align="left" valign="top" class="labels"><strong>Type:</strong></td>
                  <td colspan="2" align="left"><select name="vtype" id="vtype" class="validate[required] SelectBox" >
                      <option value="">Select</option>
               <?php unset($this->_sections['n']);
$this->_sections['n']['name'] = 'n';
$this->_sections['n']['loop'] = is_array($_loop=$this->_tpl_vars['tlist']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
                      <option value="<?php echo $this->_tpl_vars['tlist'][$this->_sections['n']['index']]['id']; ?>
" <?php if ($this->_tpl_vars['tlist'][$this->_sections['n']['index']]['id'] == $this->_tpl_vars['vtype']): ?>selected<?php endif; ?>><?php echo $this->_tpl_vars['tlist'][$this->_sections['n']['index']]['vehtype']; ?>
</option>
			   <?php endfor; endif; ?>
                    </select>
                    &nbsp;<span class="SmallnoteTxt">*</span></td>
                </tr>
                <tr>
                  <td align="left" valign="top" class="labels"><strong>Model:</strong></td>
                  <td colspan="2" align="left"><input type="text" name="vmodel" id="vmodel" value="<?php echo $this->_tpl_vars['vmodel']; ?>
" maxlength="15" class="validate[required] inputTxtField" />
                    &nbsp;<span class="SmallnoteTxt">*</span></td>
                </tr>
               <!-- <tr>
                  <td align="left" valign="top" class="labels"><strong>Purchased on:</strong></td>
                  <td colspan="2" align="left"><input type="text" name="vpurchasedon" id="vpurchasedon" value="<?php echo $this->_tpl_vars['vpurchasedon']; ?>
" class="validate[required] inputTxtField date"  onblur="chk_date();"/>
                    &nbsp;<span class="SmallnoteTxt">* (mm/dd/yyyy)</span></td>
                </tr>-->
                 <tr>
                  <td width="38%" align="left" valign="top" class="labels"><strong>Registration Number :</strong></td>
                  <td colspan="2" align="left"><input name="regno" type="text"  class="validate[required] inputTxtField" id="regno" value="<?php echo $this->_tpl_vars['data']['regno']; ?>
" maxlength="30"/>
                    &nbsp;<span class="SmallnoteTxt">*</span></td>
                </tr>
                <tr>
                  <td align="left" valign="top" class="labels"><strong>Registration Expiration Date:</strong></td>
                  <td colspan="2" align="left"><input type="text" name="expireon" id="expireon" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['data']['expireon'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%m/%d/%Y") : smarty_modifier_date_format($_tmp, "%m/%d/%Y")); ?>
" class="validate[required] inputTxtField date"  />
                    &nbsp;<span class="SmallnoteTxt">* (mm/dd/yyyy)</span></td>
                </tr>
                <tr>
                  <td align="left" valign="top" class="labels"><strong>Capacity:</strong></td>
                  <td colspan="2" align="left"><input type="text" name="vcapacity" id="vcapacity" value="<?php echo $this->_tpl_vars['vcapacity']; ?>
" class="validate[required,custom[onlyNumber]] inputTxtField digits" maxlength="2" />
                    &nbsp;<span class="SmallnoteTxt">* Seater</span></td>
                </tr>
                <tr>
                  <td align="left" valign="top" class="labels"><strong>Make:</strong></td>
                  <td colspan="2" align="left"><input name="vmake" type="text" class="validate[required] inputTxtField" id="vmake" value="<?php echo $this->_tpl_vars['vmake']; ?>
" maxlength="50" />
                    &nbsp;<span class="SmallnoteTxt">*</span></td>
                </tr>
                <tr>
                  <td align="left" valign="top" class="labels"><strong>Milage: </strong></td>
                  <td colspan="2" align="left"><input name="vmileage" type="text" class="validate[required,custom[onlyNumber]] inputTxtField digits" id="vmileage" value="<?php echo $this->_tpl_vars['vmileage']; ?>
" maxlength="15" />
                    &nbsp;<span class="SmallnoteTxt">*</span></td>
                </tr>
                <tr>
                  <td align="left" valign="top" class="labels"><strong>GPS Enabled?: </strong></td>
                  <td colspan="2" align="left"><input onclick="check();" type="radio" name="gps" id="gps1" value="1" <?php if ($this->_tpl_vars['gps'] == '1'): ?> checked="checked"<?php endif; ?> />
                    Yes &nbsp;&nbsp;
                    <input onclick="check2();" type="radio" name="gps" id="gps2" value="0" <?php if ($this->_tpl_vars['gps'] == '0'): ?> checked="checked"<?php endif; ?> />
                    No
                    
                    
                    
                    &nbsp;<span class="SmallnoteTxt">*</span></td>
                </tr>
                <tr id="a" <?php if ($this->_tpl_vars['gpsurl'] == ''): ?> style="display:none"<?php endif; ?>>
                  <td align="left" valign="top" class="labels"><strong>GPS: </strong></td>
                  <td colspan="2" align="left"><input type="text" name="gpsurl" id="gpsurl" value="<?php echo $this->_tpl_vars['gpsurl']; ?>
" class="inputTxtField digits" />
                    </td>
                </tr>
                <!--  <tr>
                  <td align="left" valign="top" class="labels"><strong>Vehicle Color :</strong></td>
                  <td align="left" valign="top"><input name="vcolor" type="text" class="validate[required,custom[onlyLetter]] inputTxtField" id="vcolor" value="<?php echo $this->_tpl_vars['vcolor']; ?>
" maxlength="20" />
                    &nbsp;<span class="SmallnoteTxt">* </span></td>
                  <td valign="top">&nbsp;</td>
                </tr>
                         <tr>
              <td align="left" valign="top" class="labeltxt"><strong>Transmission:</strong></td>
              <td colspan="2" align="left" valign="top">
			  <select name="vtransmission" id="vtransmission" class="SelectBox required" >
               <option value="">Select</option>
			   <option value="Auto" <?php if ($this->_tpl_vars['vtransmission'] == 'Auto'): ?>selected<?php endif; ?>>Auto</option>           
			   <option value="Manual" <?php if ($this->_tpl_vars['vtransmission'] == 'Manual'): ?>selected<?php endif; ?>>Manual</option>  
		      </select>
			  &nbsp;<span class="SmallnoteTxt">*</span></td>
            </tr>-->
                <tr align="left">
                  <td colspan="3" valign="top">&nbsp;</td>
                </tr>
                <tr>
                  <td align="left" valign="top" class="labels"><strong>Status :</strong></td>
                  <td align="left" valign="top"><select name="vstatus" id="vstatus" class="validate[required] SelectBox">
                      <option value="">Select</option>
                      <option value="Open" <?php if ($this->_tpl_vars['vstatus'] == 'Open'): ?>selected<?php endif; ?>>Open</option>
                      <option value="Suspended" <?php if ($this->_tpl_vars['vstatus'] == 'Suspended'): ?>selected<?php endif; ?>>Suspended</option>
                      <option value="Expired" <?php if ($this->_tpl_vars['vstatus'] == 'Expired'): ?>selected<?php endif; ?>>Expired</option>
                      <option value="Sold" <?php if ($this->_tpl_vars['vstatus'] == 'Sold'): ?>selected<?php endif; ?>>Sold</option>
                    </select>
                    &nbsp;<span class="SmallnoteTxt">*</span></td>
                  <td valign="top">&nbsp;</td>
                </tr>
                <tr>
                  <td colspan="3" valign="top">&nbsp;</td>
                </tr>
                <tr>
                  <td valign="top">&nbsp;</td>
                  <td colspan="2"><input type="submit" name="submit" value="Save Changes" class="inputButton btn"></td>
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
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "innerfooter.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?> 