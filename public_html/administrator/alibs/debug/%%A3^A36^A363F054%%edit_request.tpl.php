<?php /* Smarty version 2.6.12, created on 2019-12-16 15:02:41
         compiled from reportstpl/edit_request.tpl */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<head>
<link rel="stylesheet" href="../theme/style.css" type="text/css">
<link rel="stylesheet" type="text/css" href="../theme/chromestyle.css" />
<link href="../theme/styles.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="../theme/validationEngine.jquery.css" type="text/css" media="screen" title="no title" charset="utf-8" />
<script language="javascript" type="text/javascript" src="../scripts/jquery-1.2.6.js"></script>
<script language="javascript" type="text/javascript" src="../scripts/jquery.validate.js"></script>
<script language="javascript" type="text/javascript" src="../scripts/ui.datepicker.js"></script>
<!--<script src="../scripts/jquery.jmap.min.js" type="text/javascript"></script>-->
<link href="../theme/flora.datepicker.css" rel="stylesheet" type="text/css" />
<script language="javascript" type="text/javascript" src="../scripts/jquery.maskedinput-1.2.2.js"></script>

<?php echo '
<script>
$(document).ready(function(){					  
	 
	 $("#dob").mask("19/39/9999");
	 $("#ar").validate();
	 //$("#dob").datepicker( {yearRange:\'-120:00\'} );
    });		
</script>
'; ?>

<link href="../theme/style.css" rel="stylesheet" type="text/css">
<table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td height="44" align="center"  valign="top" style="padding-bottom:50px;"><form name="ar" id="ar" method="post" action="edit_request.php">
        <table width="100%" border="0" cellspacing="4" cellpadding="2" align="center" class="">
          <tr>
            <td colspan="4" valign="top" style="text-align:center;" class="admintopheading"><strong>Update Request & Invoice Information</strong></td>
          </tr>
          <tr>
             <td colspan="4"><input type="hidden" name="id" value="<?php echo $this->_tpl_vars['id']; ?>
"></td>
          </tr>
			<tr> 
			  <td width="18%" align="left" valign="top" class="labeltxt"><strong>Patient Name:</strong>&nbsp;&nbsp;</td>
              <td width="30%" align="left"><input type="text" name="clientname" value="<?php echo $this->_tpl_vars['dt']['clientname']; ?>
"  /></td>
              <td width="32%" align="left" valign="top" class="labeltxt"><strong>Patient Phone #:</strong>&nbsp;&nbsp;</td>
              <td width="20%" align="left"><input type="text" name="phnum" value="<?php echo $this->_tpl_vars['dt']['phnum']; ?>
"  /></td>
            </tr>
            <tr> 
			  <td  align="left" valign="top" class="labeltxt"><strong>Vehicle Preference:</strong>&nbsp;&nbsp;</td>
              <td   align="left"><select name="vehtype" ><option value="" >Select Vehicle Preference</option>
	             <?php unset($this->_sections['q']);
$this->_sections['q']['name'] = 'q';
$this->_sections['q']['loop'] = is_array($_loop=$this->_tpl_vars['vehiclepref']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
?> <option value="<?php echo $this->_tpl_vars['vehiclepref'][$this->_sections['q']['index']]['id']; ?>
" <?php if ($this->_tpl_vars['vehiclepref'][$this->_sections['q']['index']]['id'] == $this->_tpl_vars['dt']['vehtype']): ?> selected="selected" <?php endif; ?> ><?php echo $this->_tpl_vars['vehiclepref'][$this->_sections['q']['index']]['vehtype']; ?>
</option><?php endfor; endif; ?>
              </select></td>
              <td  align="left" valign="top" class="labeltxt"><strong>Account Name:</strong>&nbsp;&nbsp;</td>
              <td  align="left"><select name="account" class=" txt_boxX" id="account"  >
             			  <?php unset($this->_sections['q']);
$this->_sections['q']['name'] = 'q';
$this->_sections['q']['loop'] = is_array($_loop=$this->_tpl_vars['accounts']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
                 <option value="<?php echo $this->_tpl_vars['accounts'][$this->_sections['q']['index']]['id']; ?>
" <?php if ($this->_tpl_vars['accounts'][$this->_sections['q']['index']]['id'] == $this->_tpl_vars['dt']['account']): ?> selected="selected" <?php endif; ?>><?php echo $this->_tpl_vars['accounts'][$this->_sections['q']['index']]['account_name']; ?>
</option>
                      <?php endfor; endif; ?>
                    </select></td>
            </tr>
            <tr> 
			  <td  align="left" valign="top" class="labeltxt"><strong>PO#: </strong>&nbsp;&nbsp;</td>
              <td  align="left"><input type="text" name="po" value="<?php echo $this->_tpl_vars['dt']['po']; ?>
"  /></td>
              <td  align="left" valign="top" class="labeltxt"><strong>DOB: </strong>&nbsp;&nbsp;</td>
              <td  align="left"><input type="text" name="dob" id="dob" value="<?php echo $this->_tpl_vars['dob']; ?>
" />(mm/dd/yyyy)</td>
            </tr>
           
            <tr> 
			  <td  align="left" valign="top" class="labeltxt"><strong>Pick Location:</strong>&nbsp;&nbsp;</td>
              <td  align="left"><input type="text" name="picklocation" value="<?php echo $this->_tpl_vars['dt']['picklocation']; ?>
"  /></td>
              <td  align="left" valign="top" class="labeltxt"><strong>Pick Address with Suite#/Room #:</strong>&nbsp;&nbsp;</td>
              <td  align="left"><input type="text" name="pickaddr" value="<?php echo $this->_tpl_vars['dt']['pickaddr']; ?>
" size="40" /></td>
            </tr>
            <tr> 
			  <td  align="left" valign="top" class="labeltxt"><strong>Drop Location:</strong>&nbsp;&nbsp;</td>
              <td  align="left"><input type="text" name="droplocation" value="<?php echo $this->_tpl_vars['dt']['droplocation']; ?>
"  /></td>
              <td  align="left" valign="top" class="labeltxt"><strong>Drop Address with Suite#/Room #:</strong>&nbsp;&nbsp;</td>
              <td  align="left"><input type="text" name="destination" value="<?php echo $this->_tpl_vars['dt']['destination']; ?>
" size="40"  /></td>
            </tr>
            <?php if ($this->_tpl_vars['dt']['triptype'] == 'Four Way' || $this->_tpl_vars['dt']['triptype'] == 'Three Way'): ?>
             <tr> 
			  <td  align="left" valign="top" class="labeltxt"><strong>2nd Location:</strong>&nbsp;&nbsp;</td>
              <td  align="left"><input type="text" name="droplocation2" value="<?php echo $this->_tpl_vars['dt']['droplocation2']; ?>
"  /></td>
              <td  align="left" valign="top" class="labeltxt"><strong>2nd Address with Suite#/Room #:</strong>&nbsp;&nbsp;</td>
              <td  align="left"><input type="text" name="three_address" value="<?php echo $this->_tpl_vars['dt']['three_address']; ?>
"  size="40"/></td>
            </tr>
            <?php endif; ?>
            <?php if ($this->_tpl_vars['dt']['triptype'] == 'Four Way'): ?>
             <tr> 
			  <td  align="left" valign="top" class="labeltxt"><strong>3rd Location:</strong>&nbsp;&nbsp;</td>
              <td  align="left"><input type="text" name="droplocation3" value="<?php echo $this->_tpl_vars['dt']['droplocation3']; ?>
"  /></td>
              <td  align="left" valign="top" class="labeltxt"><strong>3rd Address with Suite#/Room #:</strong>&nbsp;&nbsp;</td>
              <td  align="left"><input type="text" name="four_address" value="<?php echo $this->_tpl_vars['dt']['four_address']; ?>
"  size="40"/></td>
            </tr>
            <?php endif; ?>
            <?php if ($this->_tpl_vars['dt']['triptype'] == 'Four Way' || $this->_tpl_vars['dt']['triptype'] == 'Three Way' || $this->_tpl_vars['dt']['triptype'] == 'Round Trip'): ?>
             <tr> 
			  <td  align="left" valign="top" class="labeltxt"><strong>Backto Location:</strong>&nbsp;&nbsp;</td>
              <td  align="left"><input type="text" name="backtolocation" value="<?php echo $this->_tpl_vars['dt']['backtolocation']; ?>
"  /></td>
              <td  align="left" valign="top" class="labeltxt"><strong>Backto Address with Suite#/Room #:</strong>&nbsp;&nbsp;</td>
              <td  align="left"><input type="text" name="backto" value="<?php echo $this->_tpl_vars['dt']['backto']; ?>
"  size="40"/></td>
            </tr>
            <?php endif; ?>
            
             
             <tr> 
			  <td  align="left" valign="top" class="labeltxt"><strong>Trip # for Leg A:</strong>&nbsp;&nbsp;</td>
              <td  align="left"><input type="text" name="legaid" value="<?php echo $this->_tpl_vars['dt']['legaid']; ?>
"  /></td>
             </tr>
         
            <?php if ($this->_tpl_vars['dt']['triptype'] == 'Four Way' || $this->_tpl_vars['dt']['triptype'] == 'Three Way' || $this->_tpl_vars['dt']['triptype'] == 'Round Trip'): ?>
             <tr> 
			  <td  align="left" valign="top" class="labeltxt"><strong>Trip # for Leg B:</strong>&nbsp;&nbsp;</td>
              <td  align="left"><input type="text" name="legbid" value="<?php echo $this->_tpl_vars['dt']['legbid']; ?>
"  /></td>
             </tr>
            <?php endif; ?>
            <?php if ($this->_tpl_vars['dt']['triptype'] == 'Four Way' || $this->_tpl_vars['dt']['triptype'] == 'Three Way'): ?>
             <tr> 
			  <td  align="left" valign="top" class="labeltxt"><strong>Trip # for Leg C:</strong>&nbsp;&nbsp;</td>
              <td  align="left"><input type="text" name="legcid" value="<?php echo $this->_tpl_vars['dt']['legcid']; ?>
"  /></td>
             </tr>
            <?php endif; ?>
            <?php if ($this->_tpl_vars['dt']['triptype'] == 'Four Way'): ?>
             <tr> 
			  <td  align="left" valign="top" class="labeltxt"><strong>Trip # for Leg D:</strong>&nbsp;&nbsp;</td>
              <td  align="left"><input type="text" name="legdid" value="<?php echo $this->_tpl_vars['dt']['legdid']; ?>
"  /></td>
             </tr>
            <?php endif; ?>
            <tr><td colspan="4" ><hr/></td></tr>
            
            <tr><td></td><td colspan="3" class="labeltxt"><input type="checkbox" name="regenrate" /> <span style="color:#F00;"><strong>Regenerate invoice correspond to above changes</strong></span></td></tr>
            <?php unset($this->_sections['q']);
$this->_sections['q']['name'] = 'q';
$this->_sections['q']['loop'] = is_array($_loop=$this->_tpl_vars['billingdata']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
            <tr><td colspan="4" style="text-align:center;"><strong>Leg <?php if ($this->_tpl_vars['billingdata'][$this->_sections['q']['index']]['leg'] == '1'): ?>A<?php elseif ($this->_tpl_vars['billingdata'][$this->_sections['q']['index']]['leg'] == '2'): ?>B<?php elseif ($this->_tpl_vars['billingdata'][$this->_sections['q']['index']]['leg'] == '3'): ?>C<?php elseif ($this->_tpl_vars['billingdata'][$this->_sections['q']['index']]['leg'] == '4'): ?>D<?php endif; ?></strong></td></tr>
            <tr><td colspan="4"><hr /></td></tr>
             <tr> 
		      <td  align="left" valign="top" class="labeltxt"><strong>2 Man Team:</strong>&nbsp;&nbsp;</td>
              <td  align="left"><input type="checkbox" name="dstretcher[]" value="Yes" <?php if ($this->_tpl_vars['billingdata'][$this->_sections['q']['index']]['dstretcher'] == 'Yes'): ?> checked="checked"<?php endif; ?>/>&nbsp;Yes&nbsp;&nbsp;@&nbsp;<input type="text" name="dstretcher_rate[]" value="<?php echo $this->_tpl_vars['billingdata'][$this->_sections['q']['index']]['dstretcher_rate']; ?>
" size="5"/></td>
              <td  align="left" valign="top" class="labeltxt"><strong>Bariatric Stretcher:</strong>&nbsp;&nbsp;</td>
              <td  align="left"><input type="checkbox" name="bstretcher[]" value="Yes" <?php if ($this->_tpl_vars['billingdata'][$this->_sections['q']['index']]['bstretcher'] == 'Yes'): ?> checked="checked"<?php endif; ?>/>&nbsp;Yes&nbsp;&nbsp;@&nbsp;<input type="text" name="bstretcher_rate[]" value="<?php echo $this->_tpl_vars['billingdata'][$this->_sections['q']['index']]['bstretcher_rate']; ?>
" size="5"/></td>
            </tr>            
             <tr>			  
              <td  align="left" valign="top" class="labeltxt"><strong>Wheel Chair Rental:</strong>&nbsp;&nbsp;</td>
              <td  align="left"><input type="checkbox" name="doublewheel[]" id="doublewheel" value="Yes" <?php if ($this->_tpl_vars['billingdata'][$this->_sections['q']['index']]['doublewheel'] == 'Yes'): ?> checked="checked"<?php endif; ?>/>&nbsp;Yes &nbsp;&nbsp;@&nbsp;<input type="text" name="doublewheel_rate[]" value="<?php echo $this->_tpl_vars['billingdata'][$this->_sections['q']['index']]['doublewheel_rate']; ?>
" size="5"/></td>
              <td  align="left" valign="top" class="labeltxt"><strong>0xygen:</strong>&nbsp;&nbsp;</td>
              <td   align="left"><input type="checkbox" name="oxygen[]" value="Yes" <?php if ($this->_tpl_vars['billingdata'][$this->_sections['q']['index']]['oxygen'] == 'Yes'): ?> checked="checked"<?php endif; ?>/>
              &nbsp;Yes&nbsp;&nbsp;@&nbsp;<input type="text" name="oxygen_rate[]" value="<?php echo $this->_tpl_vars['billingdata'][$this->_sections['q']['index']]['oxygen_rate']; ?>
" size="5"/></td>
            </tr>
             <tr>
              <td  align="left" valign="top" class="labeltxt"><strong>Wait Time?:</strong>&nbsp;&nbsp;</td>
              <td  align="left"><input type="text" name="waittime[]" id="waittime" value="<?php echo $this->_tpl_vars['billingdata'][$this->_sections['q']['index']]['waittime']; ?>
" size="7" maxlength="8" class="inputTxtField" />&nbsp;&nbsp;@&nbsp;<input type="text" name="waittime_rate[]" value="<?php echo $this->_tpl_vars['billingdata'][$this->_sections['q']['index']]['waittime_rate']; ?>
" size="5"/> 
              per minute </td>
               <td  align="left" valign="top" class="labeltxt"><strong>No Show Apply?:</strong>&nbsp;&nbsp;</td>
              <td   align="left"><select name="noshow[]">
            										<option value="0" <?php if ($this->_tpl_vars['billingdata'][$this->_sections['q']['index']]['noshow'] == '0'): ?>selected<?php endif; ?>>No</option>
                                                    <option value="1" <?php if ($this->_tpl_vars['billingdata'][$this->_sections['q']['index']]['noshow'] == '1'): ?>selected<?php endif; ?>>Yes</option>
                                                    </select>&nbsp;&nbsp;&nbsp;@&nbsp;<input type="text" name="noshow_rate[]" value="<?php echo $this->_tpl_vars['billingdata'][$this->_sections['q']['index']]['noshow_rate']; ?>
" size="5"/></td>
      
            </tr>
             <tr>
              <td  align="left" valign="top" class="labeltxt"><strong>Free Miles:</strong>&nbsp;&nbsp;</td>
              <td  align="left"><input type="text" name="freemiles[]" id="freemiles" value="<?php echo $this->_tpl_vars['billingdata'][$this->_sections['q']['index']]['freemiles']; ?>
" size="10" maxlength="8" class="inputTxtField" /></td>
               <td  align="left" valign="top" class="labeltxt"><strong>After Hours Fee Apply?:</strong>&nbsp;&nbsp;</td>
              <td   align="left"><select name="afterhour[]">
            										<option value="0" <?php if ($this->_tpl_vars['billingdata'][$this->_sections['q']['index']]['afterhour'] == '0'): ?>selected<?php endif; ?>>No</option>
                                                    <option value="1" <?php if ($this->_tpl_vars['billingdata'][$this->_sections['q']['index']]['afterhour'] == '1'): ?>selected<?php endif; ?>>Yes</option>
                                                    </select>&nbsp;&nbsp;&nbsp;@&nbsp;<input type="text" name="afterhour_rate[]" value="<?php echo $this->_tpl_vars['billingdata'][$this->_sections['q']['index']]['afterhour_rate']; ?>
" size="5"/></td>
            </tr>
            <tr> 
			   <td  align="left" valign="top" class="labeltxt"><strong>Total Miles:</strong>&nbsp;&nbsp;</td>
              <td   align="left"><input type="text" name="miles[]" value="<?php echo $this->_tpl_vars['billingdata'][$this->_sections['q']['index']]['miles']; ?>
" size="5"/>&nbsp;Billable:&nbsp;<?php echo $this->_tpl_vars['billingdata'][$this->_sections['q']['index']]['chargeablemile']; ?>
&nbsp;&nbsp;@&nbsp;<input type="text" name="permile_ch[]" value="<?php echo $this->_tpl_vars['billingdata'][$this->_sections['q']['index']]['permile_ch']; ?>
" size="5"/></td>
              <td  align="left" valign="top" class="labeltxt"><strong>Miscellaneous Charges:</strong>&nbsp;&nbsp;</td>
              <td  align="left"><input type="text" name="miscellaneous_charges[]" value="<?php echo $this->_tpl_vars['billingdata'][$this->_sections['q']['index']]['miscellaneous_charges']; ?>
" size="10" maxlength="8" class="inputTxtField" /> $ </td>
            </tr>
             <tr> 
			  <td  align="left" valign="top" class="labeltxt"><strong>Pickup Charges:</strong>&nbsp;&nbsp;</td>
              <td  align="left"><input type="text" name="pickup_ch[]" value="<?php echo $this->_tpl_vars['billingdata'][$this->_sections['q']['index']]['pickup_ch']; ?>
"  /></td>
             <td  align="left" valign="top" class="labeltxt"><strong>Total Charges:</strong>&nbsp;&nbsp;</td>
             <td  align="left"><input type="text" name="charges[]" value="<?php echo $this->_tpl_vars['billingdata'][$this->_sections['q']['index']]['charges']; ?>
"/>
             <input type="hidden" name="leg_id[]" value="<?php echo $this->_tpl_vars['billingdata'][$this->_sections['q']['index']]['id']; ?>
" /></td>
            </tr>
        <?php endfor; endif; ?>    
            
        <!--<?php if ($this->_tpl_vars['dt']['triptype'] == 'Round Trip'): ?>
        <tr><td colspan="4" style="text-align:center;"><strong>Leg B</strong></td></tr>
            <tr><td colspan="4"><hr /></td></tr>
        <tr> 
		
              <td  align="left" valign="top" class="labeltxt"><strong>2 Man Team:</strong>&nbsp;&nbsp;</td>
              <td  align="left"><input type="checkbox" name="dstretcher2" value="Yes" <?php if ($this->_tpl_vars['legB']['dstretcher'] == 'Yes'): ?> checked="checked"<?php endif; ?>/>&nbsp;Yes&nbsp;&nbsp;@&nbsp;<input type="text" name="dstretcher_rate2" value="<?php echo $this->_tpl_vars['legB']['dstretcher_rate']; ?>
" size="5"/></td>
              <td  align="left" valign="top" class="labeltxt"><strong>Bariatric Stretcher:</strong>&nbsp;&nbsp;</td>
              <td  align="left"><input type="checkbox" name="bstretcher2" value="Yes" <?php if ($this->_tpl_vars['legB']['bstretcher'] == 'Yes'): ?> checked="checked"<?php endif; ?>/>&nbsp;Yes&nbsp;&nbsp;@&nbsp;<input type="text" name="bstretcher_rate2" value="<?php echo $this->_tpl_vars['legB']['bstretcher_rate']; ?>
" size="5"/></td>
            </tr>
            
             <tr> 
			  
              <td  align="left" valign="top" class="labeltxt"><strong>Wheel Chair Rental:</strong>&nbsp;&nbsp;</td>
              <td  align="left"><input type="checkbox" name="doublewheel2" id="doublewheel2" value="Yes" <?php if ($this->_tpl_vars['legB']['doublewheel'] == 'Yes'): ?> checked="checked"<?php endif; ?>/>&nbsp;Yes &nbsp;&nbsp;@&nbsp;<input type="text" name="doublewheel_rate2" value="<?php echo $this->_tpl_vars['legB']['doublewheel_rate']; ?>
" size="5"/></td>
              <td  align="left" valign="top" class="labeltxt"><strong>0xygen:</strong>&nbsp;&nbsp;</td>
              <td   align="left"><input type="checkbox" name="oxygen2" value="Yes" <?php if ($this->_tpl_vars['legB']['oxygen'] == 'Yes'): ?> checked="checked"<?php endif; ?>/>
              &nbsp;Yes&nbsp;&nbsp;@&nbsp;<input type="text" name="oxygen_rate2" value="<?php echo $this->_tpl_vars['legB']['oxygen_rate']; ?>
" size="5"/></td>
            </tr>
             <tr>
              <td  align="left" valign="top" class="labeltxt"><strong>Wait Time?:</strong>&nbsp;&nbsp;</td>
              <td  align="left"><input type="text" name="waittime2" id="waittime2" value="<?php echo $this->_tpl_vars['legB']['waittime']; ?>
" size="7" maxlength="8" class="inputTxtField" />&nbsp;&nbsp;@&nbsp;<input type="text" name="waittime_rate2" value="<?php echo $this->_tpl_vars['legB']['waittime_rate']; ?>
" size="5"/> per 30 minute unit </td>
               <td  align="left" valign="top" class="labeltxt"><strong>No Show Apply?:</strong>&nbsp;&nbsp;</td>
              <td   align="left"><select name="noshow2">
            										<option value="0" <?php if ($this->_tpl_vars['legB']['noshow'] == '0'): ?>selected<?php endif; ?>>No</option>
                                                    <option value="1" <?php if ($this->_tpl_vars['legB']['noshow'] == '1'): ?>selected<?php endif; ?>>Yes</option>
                                                    </select>&nbsp;&nbsp;&nbsp;@&nbsp;<input type="text" name="noshow_rate2" value="<?php echo $this->_tpl_vars['legB']['noshow_rate']; ?>
" size="5"/></td>
      
            </tr>
             <tr>
              <td  align="left" valign="top" class="labeltxt"><strong>Free Miles:</strong>&nbsp;&nbsp;</td>
              <td  align="left"><input type="text" name="freemiles2" id="freemiles2" value="<?php echo $this->_tpl_vars['legB']['freemiles']; ?>
" size="10" maxlength="8" class="inputTxtField" /></td>
               <td  align="left" valign="top" class="labeltxt"><strong>After Hours Fee Apply?:</strong>&nbsp;&nbsp;</td>
              <td   align="left"><select name="afterhour2">
            										<option value="0" <?php if ($this->_tpl_vars['legB']['afterhour'] == '0'): ?>selected<?php endif; ?>>No</option>
                                                    <option value="1" <?php if ($this->_tpl_vars['legB']['afterhour'] == '1'): ?>selected<?php endif; ?>>Yes</option>
                                                    </select>&nbsp;&nbsp;&nbsp;@&nbsp;<input type="text" name="afterhour_rate2" value="<?php echo $this->_tpl_vars['legB']['afterhour_rate']; ?>
" size="5"/></td>
            </tr>
            <tr> 
			   <td  align="left" valign="top" class="labeltxt"><strong>Total Miles:</strong>&nbsp;&nbsp;</td>
              <td   align="left"><input type="text" name="miles2" value="<?php echo $this->_tpl_vars['legB']['miles']; ?>
" size="5"/>&nbsp;Billable:&nbsp;<?php echo $this->_tpl_vars['chargeablemile2']; ?>
&nbsp;&nbsp;@&nbsp;<input type="text" name="permile_ch2" value="<?php echo $this->_tpl_vars['legB']['permile_ch']; ?>
" size="5"/></td>
              <td  align="left" valign="top" class="labeltxt"><strong>Miscellaneous Charges:</strong>&nbsp;&nbsp;</td>
              <td  align="left"><input type="text" name="miscellaneous_charges2" value="<?php echo $this->_tpl_vars['legB']['miscellaneous_charges']; ?>
" size="10" maxlength="8" class="inputTxtField" /> $ </td>
            </tr>
             <tr> 
			  <td  align="left" valign="top" class="labeltxt"><strong>Pickup Charges:</strong>&nbsp;&nbsp;</td>
              <td  align="left"><input type="text" name="pickup_ch2" value="<?php echo $this->_tpl_vars['legB']['pickup_ch']; ?>
"  /></td>
             <td  align="left" valign="top" class="labeltxt"><strong>Total Charges:</strong>&nbsp;&nbsp;</td>
             <td  align="left"><input type="text" name="charges2" value="<?php echo $this->_tpl_vars['legB']['charges']; ?>
"  /><input type="hidden" name="legB_id" value="<?php echo $this->_tpl_vars['legB']['id']; ?>
" /></td>
            </tr>
        <tr><td colspan="4"><hr /></td></tr>
        <?php endif; ?>    -->
             <tr> 
			   <td  align="left" valign="top" class="labeltxt"><strong></strong>&nbsp;&nbsp;</td>
              <td   align="left"></td>
              <td  align="left" valign="top" class="labeltxt"><strong><input type="submit" name="submit" value="Update Billing Information" style="background-color: #0397ff;
border: 1px solid #06447d;
font-family: verdana;
height: 20px;
font-size: 13px;
font-weight: bold;
color: #FFF;
vertical-align: middle;
padding-bottom: 4px;
cursor: pointer;"  /></strong>&nbsp;&nbsp;<input type="hidden" name="triptype" value="<?php echo $this->_tpl_vars['dt']['triptype']; ?>
" /></td>
              <td  align="left"></td>
            </tr>
        </table>
      </form></td>
  </tr>
 
</table>
<script language="javascript" type="text/javascript" src="../scripts/jquery-1.2.6.js"></script>
<script language="javascript" type="text/javascript" src="../scripts/jquery.maskedinput-1.2.2.js"></script>
<script>
$('#wait_time').mask('29:59:59');
</script>