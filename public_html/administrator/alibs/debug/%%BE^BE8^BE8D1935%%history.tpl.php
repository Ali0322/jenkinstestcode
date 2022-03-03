<?php /* Smarty version 2.6.12, created on 2022-02-23 16:15:41
         compiled from drvtpl/history.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'cycle', 'drvtpl/history.tpl', 122, false),array('modifier', 'date_format', 'drvtpl/history.tpl', 130, false),)), $this); ?>
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

		{ location.href="index.php?delId="+id;

		return true;}else{			

			return false;}

	}

function rate_it(id, rate)

{

	$(\'input\',id).rating(\'select\',rate);

	//$(\'input\',id).rating(\'disable\')

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

          <td height="44" colspan="2" align="center" valign="top"></td>

        </tr>

        <tr>

          <td height="19" colspan="2" align="center" class="okmsg"><?php if ($this->_tpl_vars['msgs'] != ''): ?> <?php echo $this->_tpl_vars['msgs']; ?>
 <?php endif; ?>

            <?php if ($this->_tpl_vars['errors'] != ''): ?> <?php echo $this->_tpl_vars['errors']; ?>
 <?php endif; ?></td>

        </tr>

        <tr>

          <td height="19" colspan="2" align="center"><div align="right" id="add_div" style="padding-right:40px; padding-bottom:5px;"> [<a href="javascript:history.back();">Back</a>]</div></td>

        </tr>

        <tr>

          <td width="11%" height="19" align="center" class="admintopheading">&nbsp;</td>

          <td width="89%" align="center" class="admintopheading">DRIVER TRIPS HISTORY <br/>[PT: Propse Pick/Drop Time]<br/>[AT: Actual Pick/Drop Time]</td>

        </tr>

        <tr>

          <td height="44" colspan="2" align="center"  valign="top" style="padding-bottom:50px;"><table width="100%" border="0" class="main_table">

              <tr>

                <td  align="center" class="label_txt_heading"><strong>Hospital</strong></td>

                <td  align="center" class="label_txt_heading"><strong>From</strong></td>

                <td  align="center" width="80px" class="label_txt_heading"><strong>To</strong></td>

                <td align="center" class="label_txt_heading"><strong>Date</strong></td>

                <td  align="center" class="label_txt_heading"><strong>Pick Times</strong></td>
                <td  align="center" class="label_txt_heading"><strong>Drop Times</strong></td>

                 <!--<td  align="center" class="labeltxt"><strong>Actual App <br />Date/Time</strong></td>-->

                  <td align="center" class="label_txt_heading"><strong>Miles </strong></td>

                   <td align="center" class="label_txt_heading"><strong>Comnt.</strong></td>

                <!--<td align="center" class="label_txt_heading"><strong>Rating</strong></td>-->

                <td align="center" class="label_txt_heading"><strong>Status</strong></td>

              </tr>

              <?php unset($this->_sections['q']);
$this->_sections['q']['name'] = 'q';
$this->_sections['q']['loop'] = is_array($_loop=$this->_tpl_vars['trips']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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

              <tr valign="top" bgcolor="<?php echo smarty_function_cycle(array('values' => "#eeeeee,#d0d0d0"), $this);?>
">

                <td align="center"><b><?php echo $this->_tpl_vars['trips'][$this->_sections['q']['index']]['trip_clinic']; ?>
</b></td>

                <td align="center"><?php echo $this->_tpl_vars['trips'][$this->_sections['q']['index']]['pck_add']; ?>
</td>

                <td align="center"><?php echo $this->_tpl_vars['trips'][$this->_sections['q']['index']]['drp_add']; ?>
</td>

                <td align="center"><?php echo ((is_array($_tmp=$this->_tpl_vars['trips'][$this->_sections['q']['index']]['date'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%m/%d/%Y") : smarty_modifier_date_format($_tmp, "%m/%d/%Y")); ?>
</td>

                <td align="center">PT <?php echo ((is_array($_tmp=$this->_tpl_vars['trips'][$this->_sections['q']['index']]['pck_time'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%H:%M") : smarty_modifier_date_format($_tmp, "%H:%M")); ?>
<br/>AT <?php echo ((is_array($_tmp=$this->_tpl_vars['trips'][$this->_sections['q']['index']]['aptime'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%H:%M") : smarty_modifier_date_format($_tmp, "%H:%M")); ?>
</td>
                <td align="center">PT <?php echo ((is_array($_tmp=$this->_tpl_vars['trips'][$this->_sections['q']['index']]['drp_time'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%H:%M") : smarty_modifier_date_format($_tmp, "%H:%M")); ?>
<br/>AT <?php echo ((is_array($_tmp=$this->_tpl_vars['trips'][$this->_sections['q']['index']]['drp_atime'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%H:%M") : smarty_modifier_date_format($_tmp, "%H:%M")); ?>
</td>

                  

                 <!-- <td align="center"><?php echo $this->_tpl_vars['trips'][$this->_sections['q']['index']]['drp_atime']; ?>
</td>-->

                  <td align="center"><?php echo $this->_tpl_vars['trips'][$this->_sections['q']['index']]['trip_miles']; ?>
</td>

                  <td align="center"><a href="cmnts.php?trip_id=<?php echo $this->_tpl_vars['trips'][$this->_sections['q']['index']]['tdid']; ?>
" rel = "facebox">Read </a></td>

               <!-- <td>

                <div class="rating">

              <?php unset($this->_sections['r']);
$this->_sections['r']['name'] = 'r';
$this->_sections['r']['loop'] = is_array($_loop=$this->_tpl_vars['trips'][$this->_sections['q']['index']]['drv_rating']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['r']['show'] = true;
$this->_sections['r']['max'] = $this->_sections['r']['loop'];
$this->_sections['r']['step'] = 1;
$this->_sections['r']['start'] = $this->_sections['r']['step'] > 0 ? 0 : $this->_sections['r']['loop']-1;
if ($this->_sections['r']['show']) {
    $this->_sections['r']['total'] = $this->_sections['r']['loop'];
    if ($this->_sections['r']['total'] == 0)
        $this->_sections['r']['show'] = false;
} else
    $this->_sections['r']['total'] = 0;
if ($this->_sections['r']['show']):

            for ($this->_sections['r']['index'] = $this->_sections['r']['start'], $this->_sections['r']['iteration'] = 1;
                 $this->_sections['r']['iteration'] <= $this->_sections['r']['total'];
                 $this->_sections['r']['index'] += $this->_sections['r']['step'], $this->_sections['r']['iteration']++):
$this->_sections['r']['rownum'] = $this->_sections['r']['iteration'];
$this->_sections['r']['index_prev'] = $this->_sections['r']['index'] - $this->_sections['r']['step'];
$this->_sections['r']['index_next'] = $this->_sections['r']['index'] + $this->_sections['r']['step'];
$this->_sections['r']['first']      = ($this->_sections['r']['iteration'] == 1);
$this->_sections['r']['last']       = ($this->_sections['r']['iteration'] == $this->_sections['r']['total']);
?>

                <img src="../theme/rate.png"/>

                <?php endfor; endif; ?>

                </div>

                </td>-->

                <td align="center"><?php if ($this->_tpl_vars['trips'][$this->_sections['q']['index']]['drv_rating'] < '2'): ?>Poor <?php elseif ($this->_tpl_vars['trips'][$this->_sections['q']['index']]['drv_rating'] > '4'): ?>Excellent<?php else: ?>Fair<?php endif; ?></td>

              </tr>

              <?php endfor; else: ?>

              <tr>

                <td colspan="10" align="center"><b>No Record Found</b></td>

              </tr>

              <?php endif; ?>

            </table></td>

        </tr>

        <tr>

          <td colspan="2" align="center"><?php echo $this->_tpl_vars['pages']; ?>
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