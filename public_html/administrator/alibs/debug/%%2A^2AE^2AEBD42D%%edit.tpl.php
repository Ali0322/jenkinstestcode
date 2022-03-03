<?php /* Smarty version 2.6.12, created on 2019-12-20 17:52:22
         compiled from atdncetpl/edit.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'date_format', 'atdncetpl/edit.tpl', 32, false),)), $this); ?>
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
          <td height="19" align="center" class="admintopheading">Update Timing Info For [ <?php echo $this->_tpl_vars['driver']['fname']; ?>
 <?php echo $this->_tpl_vars['driver']['lname']; ?>
 ]</td>
        </tr>
        <tr><td><hr/></td></tr>
        <tr>
          <td height="44" align="left"  valign="top" style="padding-bottom:50px;"><form name="edit" id="adduser" method="post" action="edit.php"> <input type="hidden" name="id" value="<?php echo $this->_tpl_vars['id']; ?>
" />
            <input type="hidden" name="drvid" value="<?php echo $this->_tpl_vars['drvid']; ?>
" />
            <input type="hidden" name="startdate" value="<?php echo $this->_tpl_vars['startdate']; ?>
" />
            <input type="hidden" name="enddate" value="<?php echo $this->_tpl_vars['enddate']; ?>
" />
            <input type="hidden" name="drv_id" value="<?php echo $this->_tpl_vars['drv_id']; ?>
" />
            <input type="hidden" name="dated" value="<?php echo $this->_tpl_vars['dated']; ?>
" />
              <table width="100%" border="0" cellspacing="2" cellpadding="2" align="center" class="">
                <tr>
                  <td class="admintopheading">Day</td>
                  <td class="admintopheading">Clock In</td>
                  <td class="admintopheading">Clock Out</td>
                  <!--<td class="admintopheading">Total Time</td>
                  <td class="admintopheading">Over Time</td> -->                  
                </tr>
                  <tr><td></td></tr>
                <tr>
                  <td ><select name="dayonoff" ><option value="on" <?php if ($this->_tpl_vars['data']['dayonoff'] == 'on'): ?> selected="selected" <?php endif; ?> >On</option><option value="off" <?php if ($this->_tpl_vars['data']['dayonoff'] == 'off'): ?> selected="selected" <?php endif; ?> >Off</option></select></td>
                  <td ><input size="10" class="required" name="clockin" id="in" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['data']['clockin'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%H:%M") : smarty_modifier_date_format($_tmp, "%H:%M")); ?>
"  />HH:MM</td>
                  <td ><input size="10" class="required" name="clockout" id="out" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['data']['clockout'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%H:%M") : smarty_modifier_date_format($_tmp, "%H:%M")); ?>
"  />HH:MM</td>
                 <!-- <td ><input size="10" name="total_time" value="<?php echo $this->_tpl_vars['data']['total_time']; ?>
"  />HH:MM</td>
                  <td ><input size="10" name="over_time" value="<?php echo $this->_tpl_vars['data']['over_time']; ?>
"  />HH:MM</td>-->
                </tr>
                  <tr><td colspan="3"><hr/><br/></td></tr>
               <tr>
                  <td colspan="3" align="center">&nbsp;&nbsp;&nbsp;<input type="submit" name="timein" value="&nbsp;&nbsp;&nbsp;Update&nbsp;&nbsp;&nbsp;" class="inputButton btn"></td>
                </tr>
              </table>
            </form></td>
        </tr>
        
      </table>