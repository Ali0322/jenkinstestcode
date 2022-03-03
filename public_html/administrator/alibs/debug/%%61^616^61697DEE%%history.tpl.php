<?php /* Smarty version 2.6.12, created on 2021-02-08 15:14:05
         compiled from tkttpl/history.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'cycle', 'tkttpl/history.tpl', 91, false),)), $this); ?>
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

		{ location.href="history.php?id=';  echo $this->_tpl_vars['id'];  echo '&delId="+id;

		return true;}else{			

			return false;}

	}

	

function stchange(val)

{

  if (val != \'\'){		

 	location.href="index.php?st="+val;

	return true;}else{

			return false;

		}			

	}	

</script>

'; ?>


<table id="table1" class="outer_table"   border="0" cellspacing="0" cellpadding="0" align="center" bgcolor="#FFFFFF" style="margin-bottom:10px;">

  <tr>

    <td><table width="100%" border="0" cellspacing="0" cellpadding="0">    

      <tr>

        <td height="19" align="center" class="okmsg"><?php if ($this->_tpl_vars['msgs'] != ''): ?> <?php echo $this->_tpl_vars['msgs']; ?>
 <?php endif; ?>

          <?php if ($this->_tpl_vars['errors'] != ''): ?> <?php echo $this->_tpl_vars['errors']; ?>
 <?php endif; ?></td>

      </tr>

      <tr>

        <td height="19" align="center"><div align="right" id="add_div" style="padding-right:40px; padding-bottom:5px;"> [<a href="javascript:history.back();">Back</a>]&nbsp;</div></td>

      </tr>

      <tr>

        <td height="19" align="center" class="admintopheading">TICKETS HISTORY- [<?php echo $this->_tpl_vars['driver']['fname'];  echo $this->_tpl_vars['driver']['lname']; ?>
]</td>

        </tr>

      <tr>

        <td height="44" align="center"  valign="top" style="padding-bottom:50px;"><table width="100%" border="0" class="main_table">

                  <tr>

                    <td width="5%" align="center" class="label_txt_heading"><strong>S.No.</strong></td>
                    <td align="center" class="label_txt_heading"><strong>Driver </strong></td>
					<td width="15%" align="center" class="label_txt_heading"><strong>Date </strong></td>
					<td width="15%" align="center" class="label_txt_heading"><strong>Ticket Number</strong></td>
                    <td width="20%" align="center" class="label_txt_heading"><p><strong>Reason</strong><strong></strong></p></td>
                    <td width="10%" align="center" class="label_txt_heading"><strong>Cost</strong></td>
					<td width="8%" align="center" class="label_txt_heading"><strong>Options</strong></td>

                  </tr>

                <?php unset($this->_sections['q']);
$this->_sections['q']['name'] = 'q';
$this->_sections['q']['loop'] = is_array($_loop=$this->_tpl_vars['tdetails']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
.</b></td>
                    <td align="left" valign="middle"><?php echo $this->_tpl_vars['tdetails'][$this->_sections['q']['index']]['driver']; ?>
</td>
					<td align="left" valign="middle"><?php echo $this->_tpl_vars['tdetails'][$this->_sections['q']['index']]['date']; ?>
</td>
                    <td align="left" valign="middle"><strong><?php echo $this->_tpl_vars['tdetails'][$this->_sections['q']['index']]['tck_num']; ?>
</strong></td>
                    <td align="left" valign="middle"><?php echo $this->_tpl_vars['tdetails'][$this->_sections['q']['index']]['reason']; ?>
 </td>
                    <td align="left" valign="middle">
                   <?php echo $this->_tpl_vars['tdetails'][$this->_sections['q']['index']]['cost']; ?>
</td>
					<td align="left" valign="middle">
                  <a href="#" onclick="return deleteRec('<?php echo $this->_tpl_vars['tdetails'][$this->_sections['q']['index']]['id']; ?>
');" title="Remove"> <img alt="Remove" border="0"  src="../graphics/delete.png" /></a>	                    </td>
                  </tr>
				  <?php endfor; else: ?>
				  <tr>

				    <td colspan="7" align="center"><b>No Record Found</b></td>

				  </tr>

				 <?php endif; ?> 

                  <?php if ($_SESSION['admuser']['admin_level'] != '0'): ?>

                  <tr>

				    <td colspan="7" align="center"><b>Only Super Admin is Allowed to Remove Record from this Module!</b></td>

				  </tr> <?php endif; ?>

                </table></td>

      </tr>

      <tr>

        <td align="center"><?php echo $this->_tpl_vars['paging']; ?>
</td>

      </tr>

    </table></td>

  </tr>

</table>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "innerfooter.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
