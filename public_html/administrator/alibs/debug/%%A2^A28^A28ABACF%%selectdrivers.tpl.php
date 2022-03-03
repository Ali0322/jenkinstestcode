<?php /* Smarty version 2.6.12, created on 2020-06-22 23:11:03
         compiled from rpaneltpl/selectdrivers.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'math', 'rpaneltpl/selectdrivers.tpl', 55, false),)), $this); ?>
<?php echo '
<script type="text/javascript">
$(document).ready(function() {
	$("#addPage").validationEngine();
	$("#free_from").mask("24:59:59");
});
function checkspace(){
	var pg = $("#pgName").val();
	var trimpg = jQuery.trim(pg);
	if(trimpg.indexOf(\' \') != -1){
		alert("Space is not allowed in page name!");
		event.returnValue = false;
		return false;
	}	
}
</script>
'; ?>

<table width="100%" border="0" align="center" cellpadding="4" cellspacing="0">
  <tr>
    <td class="admintopheading"></td>
  </tr>
  <tr>
    <td align="left" valign="top"><table width="650" border="0" cellspacing="0" cellpadding="0" align="center">
        <tr>
          <td width="17" align="left"><img src="../images/1.jpg" width="17" height="17" /></td>
          <td align="left" background="../images/2.jpg"></td>
          <td width="17" align="left"><img src="../images/3.jpg" width="17" height="17" /></td>
        </tr>
        <tr>
          <td align="left" valign="top" background="../images/4.jpg">&nbsp;</td>
          <td align="left" valign="top" width="100%"><form name="addPage" id="addPage" method="post" action="selectdrivers.php" enctype="multipart/form-data" onsubmit="javascript:checkspace();" >
              <table width="650" border="0" cellspacing="2" cellpadding="2">
                <tr>
                  <td height="25" class="labeltxt" align="right">&nbsp;</td>
                  <td height="25" align="right" class="labeltxt">Press 'Esc' to Close </td>
                </tr>
                <tr>
      <td colspan="2" height="25" align="center" class="labeltxt"><strong>
	  Check required drivers and select their start location
	  </strong></td>
                  </tr>
				  <tr>
      <td height="25" align="center" class="labeltxt"><strong>
	 Day Start Time:
	  </strong></td><td><input type="text" name="free_from" value="<?php echo $this->_tpl_vars['starttime']; ?>
" id="free_from"  /> HH:MM:SS</td>
                  </tr>
				  <tr>
      <td colspan="2" height="25" align="center" class="labeltxt"><strong>
	 
	  </strong></td>
                  </tr>
				  
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
				<tr><!--checked="checked"-->
                  <td height="25" align="left" class="labeltxt" <?php if ($this->_tpl_vars['driverdata'][$this->_sections['q']['index']]['selected'] == 'yes'): ?>  style="color:#999;"  <?php endif; ?>><input type="checkbox" name="att[<?php echo smarty_function_math(array('equation' => "(x-1)",'x' => $this->_sections['q']['iteration']), $this);?>
]" <?php if ($this->_tpl_vars['driverdata'][$this->_sections['q']['index']]['selected'] == 'yes'): ?> disabled="disabled"  <?php endif; ?> />&nbsp;&nbsp;<strong><?php echo $this->_tpl_vars['driverdata'][$this->_sections['q']['index']]['fname']; ?>
 <?php echo $this->_tpl_vars['driverdata'][$this->_sections['q']['index']]['lname']; ?>
 [<?php echo $this->_tpl_vars['driverdata'][$this->_sections['q']['index']]['drv_code']; ?>
]</strong></td>
                  <td height="25"><select name="loc[]" >
				  <option value="<?php echo $this->_tpl_vars['corpo_latlong']; ?>
" <?php if ($this->_tpl_vars['setupdata']['start_location'] == 'office'): ?> selected="selected" <?php endif; ?> >From Office</option>
				  <option value="<?php echo $this->_tpl_vars['driverdata'][$this->_sections['q']['index']]['addr']; ?>
,<?php echo $this->_tpl_vars['driverdata'][$this->_sections['q']['index']]['city']; ?>
,<?php echo $this->_tpl_vars['driverdata'][$this->_sections['q']['index']]['state']; ?>
 <?php echo $this->_tpl_vars['driverdata'][$this->_sections['q']['index']]['zip']; ?>
" <?php if ($this->_tpl_vars['setupdata']['start_location'] == 'home'): ?> selected="selected" <?php endif; ?> >From Home</option></select>
				  <input type="hidden" name="drv_code[]" value="<?php echo $this->_tpl_vars['driverdata'][$this->_sections['q']['index']]['drv_code']; ?>
" /></td>
                </tr><?php endfor; endif; ?>
				
                <tr>
                  <td width="40%" height="25" align="right" class="labeltxt"></td>
                  <td width="60%" height="25"></td>
                </tr>
                <tr>
                  <td height="25">&nbsp;</td>
                  <td height="25"><input type="submit" value=" Update Drivers " name="add" class="btn"/>
                  <input type="hidden" name="date" value="<?php echo $this->_tpl_vars['date']; ?>
"  />
                    <input type="reset" value="Reset" name="reset" class="btn" onclick="$.validationEngine.closePrompt('.formError',true)" />
                  </td>
                </tr>
              </table>
            </form></td>
          <td align="left" valign="top" background="../images/5.jpg">&nbsp;</td>
        </tr>
        <tr>
          <td align="left" valign="top"><img src="../images/6.jpg" width="17" height="17" /></td>
          <td align="left" valign="top" background="../images/7.jpg">&nbsp;</td>
          <td align="left" valign="top"><img src="../images/8.jpg" width="17" height="17" /></td>
        </tr>
      </table></td>
  </tr>
</table>