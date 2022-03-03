<?php /* Smarty version 2.6.12, created on 2019-12-16 16:25:16
         compiled from atdncetpl/clockinout.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'date_format', 'atdncetpl/clockinout.tpl', 20, false),array('function', 'cycle', 'atdncetpl/clockinout.tpl', 36, false),)), $this); ?>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "headerinner.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<meta http-equiv="refresh" content="30">
<?php echo ' 
<script type="text/javascript">
$(document).ready(function(){
	$(\'#searchReport\').validationEngine();
  });
function clockinout(id,option){ //alert(id);
	 $.post("timeinout.php", {id: ""+id,option: ""+option}, function(data){ //alert(data);
	 if(data.length > 0 ){  location.reload();
		 }});
	}
</script> 
'; ?>

<table id="table1" class="outer_table"   border="0" cellspacing="0" cellpadding="0" align="center" bgcolor="#FFFFFF" style="margin-bottom:10px;">
  <tr>
    <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td height="19" align="center" class="admintopheading">CLOCK IN/OUT MANAGEMENT [ <?php echo ((is_array($_tmp=$this->_tpl_vars['today'])) ? $this->_run_mod_handler('date_format', true, $_tmp) : smarty_modifier_date_format($_tmp)); ?>
 ]</td>
        </tr>
        <tr>
          <td height="44" align="center"  valign="top" style="padding-bottom:50px;"><table width="100%" border="0" class="main_table">
              <tr>
                <!--<td width="5%" align="center" class="label_txt_heading"><strong>S.No.</strong></td>-->
                <td width="20%" class="label_txt_heading"><strong>Driver Name</strong></td>
                <td width="8%" class="label_txt_heading"><strong>Driver Code</strong></td>
                <td width="10%" align="center" class="label_txt_heading"><strong>Date</strong></td>
                <td width="15%" align="center" class="label_txt_heading"><strong>Clock In Time<!-- [Date]--></strong></td>
                <td width="15%" align="center" class="label_txt_heading"><strong>Clock Out Time</strong></td>
                <td width="6%" align="center" class="label_txt_heading"><strong>Status</strong></td>
                <td width="10%" align="center" class="label_txt_heading"><strong>Option</strong></td>
              </tr>
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
              <?php if ($this->_tpl_vars['data'][$this->_sections['q']['index']]['clockstatus'] == 'in'): ?>
              <tr bgcolor="<?php echo smarty_function_cycle(array('values' => "#d0d0d0"), $this);?>
">
                <!--<td align="center" valign="middle"><b><?php echo $this->_sections['q']['iteration']; ?>
.</b></td>-->
                <td align="left" valign="middle">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $this->_tpl_vars['data'][$this->_sections['q']['index']]['fname']; ?>
 <?php echo $this->_tpl_vars['data'][$this->_sections['q']['index']]['lname']; ?>
</td>
                <td align="left" valign="middle">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $this->_tpl_vars['data'][$this->_sections['q']['index']]['drv_code']; ?>
</td>
                <td align="center" valign="middle"><?php echo ((is_array($_tmp=$this->_tpl_vars['date'])) ? $this->_run_mod_handler('date_format', true, $_tmp) : smarty_modifier_date_format($_tmp)); ?>
</td>
                <td align="center" valign="middle">
                <?php if ($this->_tpl_vars['data'][$this->_sections['q']['index']]['clockin'] != '0000-00-00 00:00:00'): ?>
                <?php if (((is_array($_tmp=$this->_tpl_vars['data'][$this->_sections['q']['index']]['clockin'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%Y-%m-%d") : smarty_modifier_date_format($_tmp, "%Y-%m-%d")) == $this->_tpl_vars['today']): ?> <?php echo ((is_array($_tmp=$this->_tpl_vars['data'][$this->_sections['q']['index']]['clockin'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%H:%M") : smarty_modifier_date_format($_tmp, "%H:%M"));  else: ?>
                <span style="color:#F00; font-weight:bold;"><?php echo ((is_array($_tmp=$this->_tpl_vars['data'][$this->_sections['q']['index']]['clockin'])) ? $this->_run_mod_handler('date_format', true, $_tmp) : smarty_modifier_date_format($_tmp)); ?>
  &nbsp;&nbsp;&nbsp;&nbsp;<?php echo ((is_array($_tmp=$this->_tpl_vars['data'][$this->_sections['q']['index']]['clockin'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%H:%M") : smarty_modifier_date_format($_tmp, "%H:%M")); ?>
</span><?php endif; ?>
                <?php else: ?>--:--<?php endif; ?><!-- [<?php echo ((is_array($_tmp=$this->_tpl_vars['data'][$this->_sections['q']['index']]['clockin'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%m/%d/%Y") : smarty_modifier_date_format($_tmp, "%m/%d/%Y")); ?>
]--></td>
                <td align="center" valign="middle">
                <?php if ($this->_tpl_vars['data'][$this->_sections['q']['index']]['clockstatus'] == 'in' || $this->_tpl_vars['data'][$this->_sections['q']['index']]['clockout'] == '0000-00-00 00:00:00' || ((is_array($_tmp=$this->_tpl_vars['data'][$this->_sections['q']['index']]['clockout'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%Y-%m-%d") : smarty_modifier_date_format($_tmp, "%Y-%m-%d")) != $this->_tpl_vars['today']): ?>--:--<?php else: ?> <?php echo ((is_array($_tmp=$this->_tpl_vars['data'][$this->_sections['q']['index']]['clockout'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%H:%M") : smarty_modifier_date_format($_tmp, "%H:%M"));  endif; ?></td>
                <td align="center" valign="middle"><?php if ($this->_tpl_vars['data'][$this->_sections['q']['index']]['clockstatus'] == 'in'): ?><span style="color:#063; font-weight:bold;">Clock In</span><?php else: ?><span style="color:#F00; font-weight:bold;">Clock Out</span><?php endif; ?></td>
                <td align="center" valign="top"><?php if ($this->_tpl_vars['data'][$this->_sections['q']['index']]['clockstatus'] == 'out'): ?> <a href="#" onclick="clockinout('<?php echo $this->_tpl_vars['data'][$this->_sections['q']['index']]['Drvid']; ?>
','in')" > <img src="../graphics/clockin.png" height="20px" width="20px" /></a><?php else: ?><a href="#" onclick="clockinout('<?php echo $this->_tpl_vars['data'][$this->_sections['q']['index']]['Drvid']; ?>
','out')" > <img src="../graphics/clockout.png" height="20px" width="20px" /></a><?php endif; ?> &nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp; <a href="javascript:popWind('details.php?id=<?php echo $this->_tpl_vars['data'][$this->_sections['q']['index']]['Drvid']; ?>
&date=<?php echo $this->_tpl_vars['date']; ?>
');">Detail</a></td>
              </tr>
              <?php endif; ?>
              <?php endfor; endif; ?>
              <tr><td colspan="8"><hr/></td></tr>
              <tr><td colspan="8"><hr/></td></tr>
              <tr><td colspan="8"><hr/></td></tr>
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
              <?php if ($this->_tpl_vars['data'][$this->_sections['q']['index']]['clockstatus'] == 'out'): ?>
              <tr bgcolor="<?php echo smarty_function_cycle(array('values' => "#eeeeee"), $this);?>
">
                <!--<td align="center" valign="middle"><b><?php echo $this->_sections['q']['iteration']; ?>
.</b></td>-->
                <td align="left" valign="middle">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $this->_tpl_vars['data'][$this->_sections['q']['index']]['fname']; ?>
 <?php echo $this->_tpl_vars['data'][$this->_sections['q']['index']]['lname']; ?>
</td>
                <td align="left" valign="middle">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $this->_tpl_vars['data'][$this->_sections['q']['index']]['drv_code']; ?>
</td>
                <td align="center" valign="middle"><?php echo ((is_array($_tmp=$this->_tpl_vars['date'])) ? $this->_run_mod_handler('date_format', true, $_tmp) : smarty_modifier_date_format($_tmp)); ?>
</td>
                <td align="center" valign="middle">
                <?php if ($this->_tpl_vars['data'][$this->_sections['q']['index']]['clockin'] != '0000-00-00 00:00:00'): ?>
                <?php if (((is_array($_tmp=$this->_tpl_vars['data'][$this->_sections['q']['index']]['clockin'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%Y-%m-%d") : smarty_modifier_date_format($_tmp, "%Y-%m-%d")) == $this->_tpl_vars['today']): ?> <?php echo ((is_array($_tmp=$this->_tpl_vars['data'][$this->_sections['q']['index']]['clockin'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%H:%M") : smarty_modifier_date_format($_tmp, "%H:%M"));  else: ?>
                <span style="color:#F00; font-weight:bold;"><?php echo ((is_array($_tmp=$this->_tpl_vars['data'][$this->_sections['q']['index']]['clockin'])) ? $this->_run_mod_handler('date_format', true, $_tmp) : smarty_modifier_date_format($_tmp)); ?>
  &nbsp;&nbsp;&nbsp;&nbsp;<?php echo ((is_array($_tmp=$this->_tpl_vars['data'][$this->_sections['q']['index']]['clockin'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%H:%M") : smarty_modifier_date_format($_tmp, "%H:%M")); ?>
</span><?php endif; ?>
                <?php else: ?>--:--<?php endif; ?><!-- [<?php echo ((is_array($_tmp=$this->_tpl_vars['data'][$this->_sections['q']['index']]['clockin'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%m/%d/%Y") : smarty_modifier_date_format($_tmp, "%m/%d/%Y")); ?>
]--></td>
                <td align="center" valign="middle">
                <?php if ($this->_tpl_vars['data'][$this->_sections['q']['index']]['clockout'] == '0000-00-00 00:00:00'): ?>--:--<?php else: ?>
                <?php if (((is_array($_tmp=$this->_tpl_vars['data'][$this->_sections['q']['index']]['clockout'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%Y-%m-%d") : smarty_modifier_date_format($_tmp, "%Y-%m-%d")) == $this->_tpl_vars['today']): ?> <?php echo ((is_array($_tmp=$this->_tpl_vars['data'][$this->_sections['q']['index']]['clockout'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%H:%M") : smarty_modifier_date_format($_tmp, "%H:%M"));  else: ?>
                <?php echo ((is_array($_tmp=$this->_tpl_vars['data'][$this->_sections['q']['index']]['clockout'])) ? $this->_run_mod_handler('date_format', true, $_tmp) : smarty_modifier_date_format($_tmp)); ?>
  &nbsp;&nbsp;&nbsp;&nbsp;<?php echo ((is_array($_tmp=$this->_tpl_vars['data'][$this->_sections['q']['index']]['clockout'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%H:%M") : smarty_modifier_date_format($_tmp, "%H:%M"));  endif;  endif; ?></td>
                <td align="center" valign="middle"><?php if ($this->_tpl_vars['data'][$this->_sections['q']['index']]['clockstatus'] == 'in'): ?><span style="color:#063; font-weight:bold;">Clock In</span><?php else: ?><span style="color:#F00; font-weight:bold;">Clock Out</span><?php endif; ?></td>
                <td align="center" valign="top"><?php if ($this->_tpl_vars['data'][$this->_sections['q']['index']]['clockstatus'] == 'out'): ?> <a href="#" onclick="clockinout('<?php echo $this->_tpl_vars['data'][$this->_sections['q']['index']]['Drvid']; ?>
','in')" > <img src="../graphics/clockin.png" height="20px" width="20px" /></a><?php else: ?><a href="#" onclick="clockinout('<?php echo $this->_tpl_vars['data'][$this->_sections['q']['index']]['Drvid']; ?>
','out')" > <img src="../graphics/clockout.png" height="20px" width="20px" /></a><?php endif; ?> &nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp; <a href="javascript:popWind('details.php?id=<?php echo $this->_tpl_vars['data'][$this->_sections['q']['index']]['Drvid']; ?>
&date=<?php echo $this->_tpl_vars['date']; ?>
');">Detail</a></td>
              </tr>
              <?php endif; ?>
              <?php endfor; endif; ?>
            </table></td>
        </tr>
      </table></td>
  </tr>
</table>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "innerfooter.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?> 