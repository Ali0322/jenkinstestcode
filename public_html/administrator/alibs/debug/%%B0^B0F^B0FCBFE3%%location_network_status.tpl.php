<?php /* Smarty version 2.6.12, created on 2022-02-24 10:14:14
         compiled from rpaneltpl/location_network_status.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'cycle', 'rpaneltpl/location_network_status.tpl', 43, false),)), $this); ?>
<head>
<meta http-equiv="refresh" content="30">
</head>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header_buzzer3.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<?php echo ' 
<script type="text/javascript">
 $(document).ready(function() { 
});
refreshed();
</script>
'; ?>


<table  width="100%" border="0" cellspacing="0" cellpadding="0"  align="left" bgcolor="#FFFFFF">
<tr><td style="background-color:#09F;"><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "menu.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?></td></tr>

  <tr>
    <td><table width="100%" border="0" cellspacing="0" cellpadding="0" >
        <tr>
          <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td  align="center" class="okmsg"><span class="okmsg"><?php if ($this->_tpl_vars['msgs'] != ''): ?> <?php echo $this->_tpl_vars['msgs']; ?>
 <?php endif; ?>
                  
                  
                  
                  <?php if ($this->_tpl_vars['errors'] != ''): ?> <?php echo $this->_tpl_vars['errors']; ?>
 <?php endif; ?></span></td>
              </tr>
              <tr>
                <td height="19" align="center" class="admintopheading">Drivers Location Network Status</td>
              </tr>
              <tr>
                <td height="44" align="center"  valign="top" style="padding-bottom:50px;"><table width="100%" border="0" class="main_table" cellpadding="0" cellspacing="0" >
                    <tr>
                      <td align="left" class="label_txt_heading"><strong>#</strong></td>
                      <td align="left" class="label_txt_heading"><strong>Driver Name</strong></td>
                      <td align="left" class="label_txt_heading"><strong>Driver Code</strong></td>
                      <td align="left" class="label_txt_heading"><strong>LogIn Status</strong></td>
                      <td align="left" class="label_txt_heading"><strong>Last Updated</strong></td>
                      <td align="left" class="label_txt_heading"><strong>Location Method</strong></td>
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
                    <tr valign="top" id="<?php echo $this->_tpl_vars['data'][$this->_sections['q']['index']]['tdid']; ?>
"  bgcolor="<?php echo smarty_function_cycle(array('values' => "#eeeeee,#d0d0d0"), $this);?>
">
                      <td ><?php echo $this->_sections['q']['iteration']; ?>
</td>
                      <td ><?php echo $this->_tpl_vars['data'][$this->_sections['q']['index']]['fname']; ?>
 <?php echo $this->_tpl_vars['data'][$this->_sections['q']['index']]['lname']; ?>
</td>
                      <td ><?php echo $this->_tpl_vars['data'][$this->_sections['q']['index']]['drv_code']; ?>
</td>
                      <td ><?php if ($this->_tpl_vars['data'][$this->_sections['q']['index']]['login_status'] == '1'): ?> LogIn <?php else: ?><span style="color:#F00;">LogOut</span><?php endif; ?></td>
                      <td ><?php echo $this->_tpl_vars['data'][$this->_sections['q']['index']]['last_updated']; ?>
</td>
                      <td ><?php echo $this->_tpl_vars['data'][$this->_sections['q']['index']]['location_method']; ?>
</td>
                    </tr>
                    <?php endfor; else: ?>
                    <tr>
                      <td colspan="7" align="center" valign="top" class="grid_content"><strong>No Record Found!</strong></td>
                    </tr>
                    <?php endif; ?>
                  </table></td>
              </tr>
              <tr>
                <td><?php echo $this->_tpl_vars['paging']; ?>
</td>
              </tr>
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