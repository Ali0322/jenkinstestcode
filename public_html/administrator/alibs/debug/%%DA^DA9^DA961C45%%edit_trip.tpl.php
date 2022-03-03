<?php /* Smarty version 2.6.12, created on 2019-12-16 15:04:01
         compiled from reportstpl/edit_trip.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'date_format', 'reportstpl/edit_trip.tpl', 33, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "headerinner.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<link href="../theme/style.css" rel="stylesheet" type="text/css">
<?php echo '
<script type="text/javascript">
$(document).ready(function(){	
$("#tripdate").datepicker();
$("#tripassign_time").mask("29:59:59");
$("#driverconfirm_time").mask("29:59:59");
$("#arrived_time").mask("29:59:59");
$("#pck_time").mask("29:59:59");
$("#aptime").mask("29:59:59");
$("#drp_time").mask("29:59:59");
$("#drp_atime").mask("29:59:59");

//$("#drp_time").mask("24:59:59");

});
</script>
'; ?>

<table width="800" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td height="44" align="center"  valign="top" style="padding-bottom:50px;"><form name="ar" id="ar" method="post" action="edit_trip.php">
        <table width="100%" border="0" cellspacing="2" cellpadding="2">
           
            <tr>
              <td height="25" colspan="4" class="admintopheading">Update Trip Information</td>
            </tr>

	<tr><td height="25"  align="left" class="labeltxt">Schedule Date: </td>
              <td height="25"  align="left" class="labeltxt"><input type="text" name="date" id="tripdate" value="<?php echo $this->_tpl_vars['dt']['date']; ?>
"  /></td>
              <td height="25"  align="left" class="labeltxt">Trip Assign Time: </td>
              <td height="25"  align="left" class="labeltxt">
              <input type="text" name="tripassign_time" id="tripassign_time" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['dt']['tripassign_time'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%H:%M:%S") : smarty_modifier_date_format($_tmp, "%H:%M:%S")); ?>
" />
              <input type="hidden" name="tripassign_date" id="tripassign_date" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['dt']['tripassign_time'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%Y-%m-%d") : smarty_modifier_date_format($_tmp, "%Y-%m-%d")); ?>
" /></td>
              
            </tr>
            <tr>
            <td height="25"  align="left" class="labeltxt">Driver Confirmation Time: </td>
              <td height="25"  align="left" class="labeltxt">
              <input type="text" name="driverconfirm_time" id="driverconfirm_time" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['dt']['driverconfirm_time'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%H:%M:%S") : smarty_modifier_date_format($_tmp, "%H:%M:%S")); ?>
"  />
              <input type="hidden" name="driverconfirm_date" id="driverconfirm_date" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['dt']['driverconfirm_time'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%Y-%m-%d") : smarty_modifier_date_format($_tmp, "%Y-%m-%d")); ?>
" /></td>
              <td height="25"  align="left" class="labeltxt">Driver Arrival Time: </td>
              <td height="25"  align="left" class="labeltxt">
              <input type="text" name="arrived_time" id="arrived_time" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['dt']['arrived_time'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%H:%M:%S") : smarty_modifier_date_format($_tmp, "%H:%M:%S")); ?>
" />
              <input type="hidden" name="arrived_date" id="arrived_date" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['dt']['arrived_time'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%Y-%m-%d") : smarty_modifier_date_format($_tmp, "%Y-%m-%d")); ?>
" /></td>
              
              </tr>
            <tr>
              <td height="25"  align="left" class="labeltxt">Schedule Time: </td>
              <td height="25"  align="left" class="labeltxt"><input type="text" name="pck_time" id="pck_time" value="<?php echo $this->_tpl_vars['dt']['pck_time']; ?>
"  /></td>
              <td height="25"  align="left" class="labeltxt">Actual Picked Time: </td>
              <td height="25"  align="left" class="labeltxt"><input type="text" name="aptime" id="aptime" value="<?php echo $this->_tpl_vars['dt']['aptime']; ?>
"  /></td>
            </tr>
            <tr>
              <td height="25"  align="left" class="labeltxt">Drop Time: </td>
              <td height="25"   align="left" class="labeltxt"><input type="text" name="drp_time" id="drp_time" value="<?php echo $this->_tpl_vars['dt']['drp_time']; ?>
" /></td>
              <td height="25"   align="left" class="labeltxt">Actual Dropped Time: </td>
              <td height="25"  align="left" class="labeltxt"><input type="text" name="drp_atime" id="drp_atime" value="<?php echo $this->_tpl_vars['dt']['drp_atime']; ?>
" /></td>
            </tr>
            <tr>
              <td height="25"  align="left" class="labeltxt">Driver:</td>
              <td height="25"   align="left" class="labeltxt"><select name="driver_id" id="driver">
                      <option value="">Select Driver</option>                      
            <?php unset($this->_sections['q']);
$this->_sections['q']['name'] = 'q';
$this->_sections['q']['loop'] = is_array($_loop=$this->_tpl_vars['driver']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
                      <option value="<?php echo $this->_tpl_vars['driver'][$this->_sections['q']['index']]['drv_code']; ?>
" <?php if ($this->_tpl_vars['driver'][$this->_sections['q']['index']]['drv_code'] == $this->_tpl_vars['dt']['drv_id']): ?> selected<?php endif; ?>><?php echo $this->_tpl_vars['driver'][$this->_sections['q']['index']]['fname']; ?>
 <?php echo $this->_tpl_vars['driver'][$this->_sections['q']['index']]['lname']; ?>
  - [ <?php echo $this->_tpl_vars['driver'][$this->_sections['q']['index']]['drv_code']; ?>
 ]</option>
                      
            <?php endfor; endif; ?>
              
                    </select></td>
            
              <td height="25"   align="left" class="labeltxt">Trip Status:</td>
              <td height="25"   align="left" class="labeltxt" ><select name="status" id="status" style="width:150px;" >
                 		 <option value="9" 	<?php if ($this->_tpl_vars['dt']['status'] == '9'): ?> selected="selected"<?php endif; ?>>Pending</option>
                          <option value="5" <?php if ($this->_tpl_vars['dt']['status'] == '5'): ?> selected="selected"<?php endif; ?>>Scheduled</option>
                          <option value="10"<?php if ($this->_tpl_vars['dt']['status'] == '10'): ?> selected="selected"<?php endif; ?>>Arrived</option>
                          <option value="6" <?php if ($this->_tpl_vars['dt']['status'] == '6'): ?> selected="selected"<?php endif; ?>>Picked Up</option>
                          <option value="4" <?php if ($this->_tpl_vars['dt']['status'] == '4'): ?> selected="selected"<?php endif; ?>>Dropped</option>
                          <option value="1" <?php if ($this->_tpl_vars['dt']['status'] == '1'): ?> selected="selected"<?php endif; ?>>Dropped</option>
                          <option value="3" <?php if ($this->_tpl_vars['dt']['status'] == '3'): ?> selected="selected"<?php endif; ?>>Cancelled</option>
                          <option value="7" <?php if ($this->_tpl_vars['dt']['status'] == '7'): ?> selected="selected"<?php endif; ?>>Billable No-Show</option>
                          <option value="8" <?php if ($this->_tpl_vars['dt']['status'] == '8'): ?> selected="selected"<?php endif; ?>>non-Billable No-Show</option>
					 </select></td>
           </tr>
           <tr> 
			   <td  align="left" valign="top" class="labeltxt"><strong></strong>&nbsp;&nbsp;</td>
              <td   align="left"></td>
              <td  align="left" valign="top" class="labeltxt"><br/><strong>
              <input type="submit" name="submit" value="Update Information" style="background-color: #0397ff;
border: 1px solid #06447d;
font-family: verdana;
height: 20px;
font-size: 13px;
font-weight: bold;
color: #FFF;
vertical-align: middle;
padding-bottom: 4px;
cursor: pointer;"  /></strong>&nbsp;&nbsp;<input type="hidden" name="tdid" value="<?php echo $this->_tpl_vars['dt']['tdid']; ?>
" />
											<input type="hidden" name="trip_id" value="<?php echo $this->_tpl_vars['dt']['trip_id']; ?>
" /></td>
              <td  align="left"></td>
            </tr>
          </table>
      </form></td>
  </tr>
 
</table>
<!--<script language="javascript" type="text/javascript" src="../scripts/jquery-1.2.6.js"></script>
<script language="javascript" type="text/javascript" src="../scripts/jquery.maskedinput-1.2.2.js"></script>-->
<script>
$('#wait_time').mask('29:59:59');
</script>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "innerfooter.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>