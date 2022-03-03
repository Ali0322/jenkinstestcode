<?php /* Smarty version 2.6.12, created on 2019-12-16 15:49:42
         compiled from locations/index.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'cycle', 'locations/index.tpl', 42, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "headerinner.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php echo ' 
<script type="text/javascript">
function deleteRec(id)
		{
		var ok;
		ok=confirm("Are you sure you want to delete this record?");
		if (ok)
		{		
			location.href="index.php?delId="+id;
			return true;
		}
		else
		{
			return false;
		}
	}
</script> 
'; ?>

<table id="table1" class="outer_table"   border="0" cellspacing="0" cellpadding="0" align="center" bgcolor="#FFFFFF" style="margin-bottom:10px;">
  <tr>
    <td valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0" align="center">
        <tr>
          <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td height="19" align="center" class="okmsg"><span class="okmsg"><?php if ($this->_tpl_vars['msgs'] != ''): ?> <?php echo $this->_tpl_vars['msgs']; ?>
 <?php endif; ?>
                  <?php if ($this->_tpl_vars['errors'] != ''): ?> <?php echo $this->_tpl_vars['errors']; ?>
 <?php endif; ?></span></td>
              </tr>
              <tr>
                <td height="19" align="center"><div align="right" id="add_div" style="padding-right:20px; padding-bottom:5px;"> [<a href="../index.php">Back</a>]<?php if ($_SESSION['admuser']['admin_level'] == '0' || $_SESSION['adminpermission']['m13m_cr'] == 'on'): ?>| <a title="Add" href="add.php"> <img alt="Add" border="0" src="../graphics/add_12.gif"></a><?php endif; ?></div></td>
              </tr>
              <tr>  <td height="19" align="center" class="admintopheading">LOCATIONS MANAGEMENT </td>   </tr>
              <tr>
                <td height="44" align="center"  valign="top" style="padding-bottom:20px;"><table width="100%" border="0" class="main_table">
                    <tr>
                      <td width="5%" align="left" class="label_txt_heading"><strong>#</strong></td>
                      <td width="30%" align="left" class="label_txt_heading"><strong>Location</strong></td>
                      <td width="55%" align="left" class="label_txt_heading"><strong>Address</strong></td>
                      <td width="10%" align="center" class="label_txt_heading"><strong>Options</strong></td>
                    </tr>
                    <?php unset($this->_sections['q']);
$this->_sections['q']['name'] = 'q';
$this->_sections['q']['loop'] = is_array($_loop=$this->_tpl_vars['admdetail']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
                      <td align="left" valign="middle"><b><?php echo $this->_sections['q']['iteration']; ?>
</b></td>
                      <td align="left" valign="middle"><?php echo $this->_tpl_vars['admdetail'][$this->_sections['q']['index']]['location']; ?>
</td>
                      <td align="left" valign="middle"><?php echo $this->_tpl_vars['admdetail'][$this->_sections['q']['index']]['address']; ?>
</td>
                      <td align="center" valign="middle">
                     <?php if ($_SESSION['admuser']['admin_level'] == '0' || $_SESSION['adminpermission']['m13m_dl'] == 'on'):  endif; ?>
                      <a href="edit.php?eId=<?php echo $this->_tpl_vars['admdetail'][$this->_sections['q']['index']]['id']; ?>
" title="Edit"> <img border="0" alt="Edit" src="../graphics/edit.png"></a>&nbsp;&nbsp;<a href="#" onclick="return deleteRec('<?php echo $this->_tpl_vars['admdetail'][$this->_sections['q']['index']]['id']; ?>
');" title="Remove"> <img alt="Remove" border="0"  src="../graphics/delete.png"></a></td>
                    </tr><?php endfor; else: ?>
                    <tr><td colspan="4" align="center">No Records found!</td></tr>
                    <?php endif; ?>
                  </table></td>
              </tr>
              <tr>
                <td align="center"><?php echo $this->_tpl_vars['paging']; ?>
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