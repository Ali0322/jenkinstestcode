<?php /* Smarty version 2.6.12, created on 2020-05-20 18:28:13
         compiled from tkttpl/add.tpl */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "headerinner.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<?php echo '

<script type="text/javascript">

$(document).ready(function($){
   $(\'#addvehicle\').validationEngine();
			  
});

function deleteRec(id)

		{

		var ok;

		ok=confirm("Are you sure you want to delete this record");

		if (ok)

		{		

			

			location.href="index.php?delId="+id;

			return true;

			//document.delrecfrm.submit();

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

    <td><table width="100%" border="0" cellspacing="0" cellpadding="0">

      <tr>

        <td height="25" align="right" valign="top">[<a href="javascript:history.back();">Back</a>]</td>

      </tr>

      <tr>

        <td height="19" align="center" class="admintopheading">Add Ticket </td>

      </tr>

      <tr>

        <td height="19" align="center"><?php if ($this->_tpl_vars['msgs'] != ''): ?><font color="#009966" style="font-weight:bold"><?php echo $this->_tpl_vars['msgs']; ?>
</font><?php endif; ?>

          <?php if ($this->_tpl_vars['errors'] != ''): ?><font color="#FF0000" style="font-weight:bold"><?php echo $this->_tpl_vars['errors']; ?>
</font><?php endif; ?></td>

      </tr>

      <tr>

        <td height="44" align="center"  valign="top" style="padding-bottom:50px;"><form name="addvehicle" id="addvehicle" method="post" action="add.php">

          <table width="80%" border="0" cellspacing="2" cellpadding="2" align="center">

            <tr>

              <td colspan="3" valign="top" class="admintopheading"><strong>Ticket Information </strong></td>

            </tr>
			<tr>
			<td colspan="3" height="5"></td>
			</tr>

            <tr>

              <td width="38%" align="left" valign="top" class="labeltxt"><strong>Ticket Number :</strong></td>

              <td colspan="2" align="left"><input type="text" name="tck_num" id="tck_num" value="<?php echo $this->_tpl_vars['tck_num']; ?>
"  class="validate[required] inputTxtField"/>

                &nbsp;<span class="SmallnoteTxt">*</span></td>

            </tr>

            <tr>

              <td align="left" valign="top" class="labeltxt"><strong>Driver :</strong></td>

              <td colspan="2" align="left"><select name="drv_id" id="drv_id" class="validate[required] SelectBox" >

                <option value="">Select</option>

              <?php unset($this->_sections['n']);
$this->_sections['n']['name'] = 'n';
$this->_sections['n']['loop'] = is_array($_loop=$this->_tpl_vars['dlist']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['n']['show'] = true;
$this->_sections['n']['max'] = $this->_sections['n']['loop'];
$this->_sections['n']['step'] = 1;
$this->_sections['n']['start'] = $this->_sections['n']['step'] > 0 ? 0 : $this->_sections['n']['loop']-1;
if ($this->_sections['n']['show']) {
    $this->_sections['n']['total'] = $this->_sections['n']['loop'];
    if ($this->_sections['n']['total'] == 0)
        $this->_sections['n']['show'] = false;
} else
    $this->_sections['n']['total'] = 0;
if ($this->_sections['n']['show']):

            for ($this->_sections['n']['index'] = $this->_sections['n']['start'], $this->_sections['n']['iteration'] = 1;
                 $this->_sections['n']['iteration'] <= $this->_sections['n']['total'];
                 $this->_sections['n']['index'] += $this->_sections['n']['step'], $this->_sections['n']['iteration']++):
$this->_sections['n']['rownum'] = $this->_sections['n']['iteration'];
$this->_sections['n']['index_prev'] = $this->_sections['n']['index'] - $this->_sections['n']['step'];
$this->_sections['n']['index_next'] = $this->_sections['n']['index'] + $this->_sections['n']['step'];
$this->_sections['n']['first']      = ($this->_sections['n']['iteration'] == 1);
$this->_sections['n']['last']       = ($this->_sections['n']['iteration'] == $this->_sections['n']['total']);
?>

                <option value="<?php echo $this->_tpl_vars['dlist'][$this->_sections['n']['index']]['Drvid']; ?>
"><?php echo $this->_tpl_vars['dlist'][$this->_sections['n']['index']]['fname']; ?>
 <?php echo $this->_tpl_vars['dlist'][$this->_sections['n']['index']]['lname']; ?>
</option>

			  <?php endfor; endif; ?>

              </select>                &nbsp;<span class="SmallnoteTxt">*</span></td>

            </tr>
			<tr>
			<td colspan="3" height="5"></td>
			</tr>
            <!--<tr>

              <td align="left" valign="top" class="labeltxt"><strong>Assigned to :</strong></td>

              <td colspan="2" align="left">

			  <select name="driver" id="driver" class="SelectBox required" >

                <option value="">Select Driver</option>

               <?php unset($this->_sections['n']);
$this->_sections['n']['name'] = 'n';
$this->_sections['n']['loop'] = is_array($_loop=$this->_tpl_vars['dlist']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['n']['show'] = true;
$this->_sections['n']['max'] = $this->_sections['n']['loop'];
$this->_sections['n']['step'] = 1;
$this->_sections['n']['start'] = $this->_sections['n']['step'] > 0 ? 0 : $this->_sections['n']['loop']-1;
if ($this->_sections['n']['show']) {
    $this->_sections['n']['total'] = $this->_sections['n']['loop'];
    if ($this->_sections['n']['total'] == 0)
        $this->_sections['n']['show'] = false;
} else
    $this->_sections['n']['total'] = 0;
if ($this->_sections['n']['show']):

            for ($this->_sections['n']['index'] = $this->_sections['n']['start'], $this->_sections['n']['iteration'] = 1;
                 $this->_sections['n']['iteration'] <= $this->_sections['n']['total'];
                 $this->_sections['n']['index'] += $this->_sections['n']['step'], $this->_sections['n']['iteration']++):
$this->_sections['n']['rownum'] = $this->_sections['n']['iteration'];
$this->_sections['n']['index_prev'] = $this->_sections['n']['index'] - $this->_sections['n']['step'];
$this->_sections['n']['index_next'] = $this->_sections['n']['index'] + $this->_sections['n']['step'];
$this->_sections['n']['first']      = ($this->_sections['n']['iteration'] == 1);
$this->_sections['n']['last']       = ($this->_sections['n']['iteration'] == $this->_sections['n']['total']);
?>

			   <option value="<?php echo $this->_tpl_vars['dlist'][$this->_sections['n']['index']]['drvid']; ?>
" <?php if ($this->_tpl_vars['dlist'][$this->_sections['n']['index']]['drvid'] == $this->_tpl_vars['driver']): ?>selected<?php endif; ?>><?php echo $this->_tpl_vars['dlist'][$this->_sections['n']['index']]['fname']; ?>
 <?php echo $this->_tpl_vars['dlist'][$this->_sections['n']['index']]['lname']; ?>
 </option>           

			   <?php endfor; endif; ?>

		      </select>

                &nbsp;<span class="SmallnoteTxt">*</span> </td>

            </tr>-->

            <tr>

              <td align="left" valign="top" class="labeltxt"><strong>Vehicle:</strong></td>

              <td colspan="2" align="left">			  

			  <select name="veh_id" id="veh_id" class="validate[required] SelectBox" >

                <option value="">Select</option>

               <?php unset($this->_sections['n']);
$this->_sections['n']['name'] = 'n';
$this->_sections['n']['loop'] = is_array($_loop=$this->_tpl_vars['vlist']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['n']['show'] = true;
$this->_sections['n']['max'] = $this->_sections['n']['loop'];
$this->_sections['n']['step'] = 1;
$this->_sections['n']['start'] = $this->_sections['n']['step'] > 0 ? 0 : $this->_sections['n']['loop']-1;
if ($this->_sections['n']['show']) {
    $this->_sections['n']['total'] = $this->_sections['n']['loop'];
    if ($this->_sections['n']['total'] == 0)
        $this->_sections['n']['show'] = false;
} else
    $this->_sections['n']['total'] = 0;
if ($this->_sections['n']['show']):

            for ($this->_sections['n']['index'] = $this->_sections['n']['start'], $this->_sections['n']['iteration'] = 1;
                 $this->_sections['n']['iteration'] <= $this->_sections['n']['total'];
                 $this->_sections['n']['index'] += $this->_sections['n']['step'], $this->_sections['n']['iteration']++):
$this->_sections['n']['rownum'] = $this->_sections['n']['iteration'];
$this->_sections['n']['index_prev'] = $this->_sections['n']['index'] - $this->_sections['n']['step'];
$this->_sections['n']['index_next'] = $this->_sections['n']['index'] + $this->_sections['n']['step'];
$this->_sections['n']['first']      = ($this->_sections['n']['iteration'] == 1);
$this->_sections['n']['last']       = ($this->_sections['n']['iteration'] == $this->_sections['n']['total']);
?>

			   <option value="<?php echo $this->_tpl_vars['vlist'][$this->_sections['n']['index']]['id']; ?>
" <?php if ($this->_tpl_vars['vlist'][$this->_sections['n']['index']]['id'] == $this->_tpl_vars['veh_id']): ?>selected<?php endif; ?>><?php echo $this->_tpl_vars['vlist'][$this->_sections['n']['index']]['vname']; ?>
 - [ <?php echo $this->_tpl_vars['vlist'][$this->_sections['n']['index']]['vnumber']; ?>
]</option>           

			   <?php endfor; endif; ?>

		      </select>&nbsp;<span class="SmallnoteTxt">*</span> </td>

            </tr>
			<tr>
			<td colspan="3" height="5"></td>
			</tr>
            <tr>

              <td align="left" valign="top" class="labeltxt"><strong>Date:</strong></td>

              <td colspan="2" align="left"><input type="text" name="date" id="date" value="<?php echo $this->_tpl_vars['date']; ?>
" maxlength="15" class="validate[required] inputTxtField" />

                &nbsp;<span class="SmallnoteTxt">* (mm/dd/yyyy)</span></td>

            </tr>

            <tr>

              <td align="left" valign="top" class="labeltxt"><strong>Reason:</strong></td>

              <td colspan="2" align="left"><input type="text" name="reason" id="reason" value="<?php echo $this->_tpl_vars['reason']; ?>
" class="validate[required] inputTxtField" maxlength="200" />

                &nbsp;<span class="SmallnoteTxt">*</span></td>

            </tr>

            <tr>

              <td align="left" valign="top" class="labeltxt"><strong>Cost:</strong></td>

              <td colspan="2" align="left"><input type="text" name="cost" id="cost" value="<?php echo $this->_tpl_vars['cost']; ?>
" class="validate[required,custom[onlyNumber]] inputTxtField digit" maxlength="5" />

                $&nbsp;<span class="SmallnoteTxt">*</span></td>

            </tr>

            

            <tr>

              <td align="left" valign="top" class="labeltxt">&nbsp;</td>

              <td align="left" valign="top">&nbsp;</td>

              <td valign="top">&nbsp;</td>

            </tr>

 <!--           <tr>

              <td align="left" valign="top" class="labeltxt"><strong>Transmission:</strong></td>

              <td colspan="2" align="left" valign="top">

			  <select name="vtransmission" id="vtransmission" class="SelectBox required" >

               <option value="">Select</option>

			   <option value="Auto" <?php if ($this->_tpl_vars['vtransmission'] == 'Auto'): ?>selected<?php endif; ?>>Auto</option>           

			   <option value="Manual" <?php if ($this->_tpl_vars['vtransmission'] == 'Manual'): ?>selected<?php endif; ?>>Manual</option>  

		      </select>

			  &nbsp;<span class="SmallnoteTxt">*</span></td>

            </tr>-->

            

            <tr>

              <td valign="top">&nbsp;</td>

              <td colspan="2"><input type="submit" name="submit" value="Add Ticket" class="inputButton btn"></td>

            </tr>

          </table>

        </form></td>

      </tr>

      <tr>

        <td>&nbsp;</td>

      </tr>

    </table></td>

  </tr>

</table>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "innerfooter.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
