<?php /* Smarty version 2.6.12, created on 2021-10-13 21:55:21
         compiled from reportstpl/edit_reciept.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'date_format', 'reportstpl/edit_reciept.tpl', 26, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "includeinner.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php echo ' 
<script>
   $(document).ready(function(){
    $(\'#adduser\').validate();

 });
</script> 
'; ?>

<table width="900" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td height="19" align="center" class="admintopheading">Update Gas Receipt Information</td>
        </tr>
        <tr><td><hr/></td></tr>
        <tr>
          <td height="44" align="left"  valign="top" style="padding-bottom:50px;"><form name="edit" id="adduser" method="post" action="edit_receipt.php">
            <input type="hidden" name="id" value="<?php echo $this->_tpl_vars['id']; ?>
" />
            <input type="hidden" name="startdate" value="<?php echo $this->_tpl_vars['startdate']; ?>
" />
            <input type="hidden" name="enddate" value="<?php echo $this->_tpl_vars['enddate']; ?>
" />
            <input type="hidden" name="reportby" value="<?php echo $this->_tpl_vars['reportby']; ?>
" />
            <input type="hidden" name="driver_id" value="<?php echo $this->_tpl_vars['driver_id']; ?>
" />
            <input type="hidden" name="veh_id" value="<?php echo $this->_tpl_vars['veh_id']; ?>
" />
              <table width="100%" border="0" cellspacing="2" cellpadding="2" align="center" class="">
                <tr>
                  <td width="15%"><strong>Date</strong>(mm/dd/yyy)</td>
                  <td width="35%"><input type="text" name="uploadedon" id="uploadedon" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['receiptinfo']['uploadedon'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%m/%d/%Y") : smarty_modifier_date_format($_tmp, "%m/%d/%Y")); ?>
"  size="34" /></td>
                  <td width="15%"><strong>V.Crnt Mileage</strong></td>
                  <td width="35%"><input type="text" name="current_vehicle_milage" id="current_vehicle_milage" value="<?php echo $this->_tpl_vars['receiptinfo']['current_vehicle_milage']; ?>
" maxlength="12"  size="34"/></td>
                </tr>
                <tr><td colspan="4"></td></tr>
                <tr>
                  <td ><strong>Driver</strong></td>
                  <td > <select name="driver_code" style="width:255px">
                      <option value="">Select Driver</option>
            <?php unset($this->_sections['q']);
$this->_sections['q']['name'] = 'q';
$this->_sections['q']['loop'] = is_array($_loop=$this->_tpl_vars['driverdata']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
                      <option value="<?php echo $this->_tpl_vars['driverdata'][$this->_sections['q']['index']]['drv_code']; ?>
" <?php if ($this->_tpl_vars['driverdata'][$this->_sections['q']['index']]['drv_code'] == $this->_tpl_vars['receiptinfo']['driver_code']): ?> selected<?php endif; ?>><?php echo $this->_tpl_vars['driverdata'][$this->_sections['q']['index']]['fname']; ?>
 <?php echo $this->_tpl_vars['driverdata'][$this->_sections['q']['index']]['lname']; ?>
  - [ <?php echo $this->_tpl_vars['driverdata'][$this->_sections['q']['index']]['drv_code']; ?>
 ]</option>
            <?php endfor; endif; ?>
                    </select></td>
                  <td ><strong>Vehicle</strong></td>
                  <td ><select name="vehicle_id" style="width:255px">
                      <option value="">Select Vehicle</option>
            <?php unset($this->_sections['q']);
$this->_sections['q']['name'] = 'q';
$this->_sections['q']['loop'] = is_array($_loop=$this->_tpl_vars['vehicledata']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
                      <option value="<?php echo $this->_tpl_vars['vehicledata'][$this->_sections['q']['index']]['id']; ?>
" <?php if ($this->_tpl_vars['vehicledata'][$this->_sections['q']['index']]['id'] == $this->_tpl_vars['receiptinfo']['vehicle_id']): ?> selected<?php endif; ?>><?php echo $this->_tpl_vars['vehicledata'][$this->_sections['q']['index']]['vname']; ?>
 - [ <?php echo $this->_tpl_vars['vehicledata'][$this->_sections['q']['index']]['vnumber']; ?>
 ]</option>
            <?php endfor; endif; ?>
                    </select></td>
                </tr>
                                <tr><td colspan="4"></td></tr>
                        
               <tr>
                  <td ><strong>Total Gallon</strong></td>
                  <td ><input type="text" name="total_galon" id="total_galon" value="<?php echo $this->_tpl_vars['receiptinfo']['total_galon']; ?>
" maxlength="6"  size="34"/></td>
                  <td ><strong>Price Per Gallon ($)</strong></td>
                  <td ><input type="text" name="price_per_galon" id="price_per_galon" value="<?php echo $this->_tpl_vars['receiptinfo']['price_per_galon']; ?>
" maxlength="6"  size="34"/></td>
                </tr>                   
                  <tr><td colspan="4"><hr/><br/></td></tr>
               <tr>
                  <td colspan="4" align="center">&nbsp;&nbsp;&nbsp;<input type="submit" name="update" value="&nbsp;&nbsp;&nbsp;Update&nbsp;&nbsp;&nbsp;" class="inputButton btn"></td>
                </tr>
              </table>
            </form></td>
        </tr>
      </table>