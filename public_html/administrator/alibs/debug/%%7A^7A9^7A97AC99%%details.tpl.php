<?php /* Smarty version 2.6.12, created on 2019-12-29 15:22:37
         compiled from atdncetpl/details.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'date_format', 'atdncetpl/details.tpl', 29, false),array('function', 'cycle', 'atdncetpl/details.tpl', 39, false),)), $this); ?>
<link rel="stylesheet" href="../theme/style.css" type="text/css">
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
<style type="text/css">
#printable {
	display: block;
}
 @media print {
#non-printable {
	display: none;
}
#printable {
	display: block;
}
}
</style>

'; ?>

<div align="left">
  <!----><div align="right" id="non-printable" style="width:100%; background-color:#FFFFFF"><a href="javascript:window.print();"><img src="../images/print.gif" border="0" /></a>&nbsp;&nbsp;&nbsp;</div>
  <div align="center" id="printable">
    <table width="100%" border="0" align="left" cellpadding="3" cellspacing="2" bgcolor="#FFFFFF">
                 <tr>
              <td height="25" colspan="4" class="admintopheading">Clock In/Out Information [<?php echo ((is_array($_tmp=$this->_tpl_vars['date'])) ? $this->_run_mod_handler('date_format', true, $_tmp) : smarty_modifier_date_format($_tmp)); ?>
]</td>
            </tr>
           <tr>
                <td width="5%" align="center" class="label_txt_heading"><strong>S.No.</strong></td>
                <td width="10%" align="center" class="label_txt_heading"><strong>Clock In Time<!-- [Date]--></strong></td>
                <td width="10%" align="center" class="label_txt_heading"><strong>Clock Out Time</strong></td>
                <td width="6%" align="center" class="label_txt_heading"><strong>Duration</strong></td>
              </tr>
              <form action="" method="post" id="adduser" >
              <?php unset($this->_sections['q']);
$this->_sections['q']['name'] = 'q';
$this->_sections['q']['loop'] = is_array($_loop=$this->_tpl_vars['data']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
              <tr bgcolor="<?php echo smarty_function_cycle(array('values' => "#eeeeee,#d0d0d0"), $this);?>
">
                <td height="25" align="center" valign="middle"><b><?php echo $this->_sections['q']['iteration']; ?>
.<input type="hidden" name="atid[]" value="<?php echo $this->_tpl_vars['data'][$this->_sections['q']['index']]['id']; ?>
"  /></b></td>
                <td align="center" valign="middle"><input type="text" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['data'][$this->_sections['q']['index']]['clockin'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%H:%M") : smarty_modifier_date_format($_tmp, "%H:%M")); ?>
" class="clin" name="clockin[]"  maxlength="5" />&nbsp; HH:MM </td>
                <td align="center" valign="middle"><input type="text" value="<?php if ($this->_tpl_vars['data'][$this->_sections['q']['index']]['clockstatus'] == 'in'): ?>--:--<?php else:  echo ((is_array($_tmp=$this->_tpl_vars['data'][$this->_sections['q']['index']]['clockout'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%H:%M") : smarty_modifier_date_format($_tmp, "%H:%M"));  endif; ?>" name="clockout[]"  maxlength="5"  class="clout"/>&nbsp; HH:MM</td>
                <td align="center" valign="middle"><?php echo $this->_tpl_vars['data'][$this->_sections['q']['index']]['duration1']; ?>
</td>
              </tr>
             <?php endfor; else: ?>
             
             <tr>
                <td colspan="4" align="center"><b><!--No Record Found--></b></td>
              </tr>
              <?php endif; ?>
             <tr bgcolor="<?php echo smarty_function_cycle(array('values' => "#eeeeee,#d0d0d0"), $this);?>
">
                <td height="25" align="center" valign="middle" colspan="3"><b>Total Time</b></td>
                <td align="center" valign="middle"><?php echo $this->_tpl_vars['totalduration']; ?>
</td>
              </tr>
             
             <?php if ($this->_tpl_vars['date'] == $this->_tpl_vars['today'] && $this->_tpl_vars['driversdata']['clockstatus'] == 'in'): ?>
              <tr bgcolor="<?php echo smarty_function_cycle(array('values' => "#eeeeee,#d0d0d0"), $this);?>
" >
              <td height="25" align="center" valign="middle"><b></td>
              <td align="center" valign="middle" colspan="3" style="color:#F00; font-size:14px;">Last Clock In Time: <input type="text" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['driversdata']['clockin'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%H:%M") : smarty_modifier_date_format($_tmp, "%H:%M")); ?>
" id="drclockin" name="drclockin"  maxlength="5" />&nbsp; HH:MM </td>
              </tr>
             <?php endif; ?>
             
             
              
              
              
              <tr><td><input type="hidden" name="date" value="<?php echo $this->_tpl_vars['date']; ?>
"  />
              <input type="hidden" name="id" value="<?php echo $this->_tpl_vars['id']; ?>
"  />
              <input type="hidden" name="date2" value="<?php echo $this->_tpl_vars['date']; ?>
"  />
              <input type="hidden" name="clockstatus" value="<?php echo $this->_tpl_vars['driversdata']['clockstatus']; ?>
"  /></td><td></td><td  >
              <input type="submit" name="updatetimes" value=" Update " class="btn"  />
             </form></td></tr>
           
    </table>
  </div>
</div>