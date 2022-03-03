<?php /* Smarty version 2.6.12, created on 2021-09-08 17:57:44
         compiled from mntncetpl/edit.tpl */ ?>
<?php echo '

<script language="javascript">

	$(document).ready(function(){

							   $(\'#edit_men\').validationEngine();

							    $(\'#date\').mask(\'19/39/9999\');

							   })

</script>

'; ?>


<table width="500" border="0" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center">

  <tr>

    <td><table width="100%" border="0" cellspacing="0" cellpadding="0">

        <tr>

          <td height="19" align="center" class="admintopheading">Edit Maintenance </td>

        </tr>

        <tr>

          <td height="19" align="center">&nbsp;</td>

        </tr>

        <tr>

          <td height="19" align="center"> <?php if ($this->_tpl_vars['msgs'] != ''): ?><font color="#009966" style="font-weight:bold"><?php echo $this->_tpl_vars['msgs']; ?>
</font><?php endif; ?>

            <?php if ($this->_tpl_vars['errors'] != ''): ?><font color="#FF0000" style="font-weight:bold"><?php echo $this->_tpl_vars['errors']; ?>
</font><?php endif; ?></td>

        </tr>

        <tr>

          <td height="44" align="center" valign="top" style="padding-bottom:50px;"><form name="editvehicle" id="edit_men" method="post" action="edit.php">

              <table width="80%" border="0" cellspacing="2" cellpadding="2" align="center" style="border:#999999 1px solid;">
 <tr>
			  	<td height="5" colspan="3"></td>
			  </tr>	
                <tr>

                  <td width="38%" align="left" valign="middle" class="labeltxt"><p><strong>Select Vehicle :</strong><span class="admintopheading">

                    <input name="r_id" type="hidden" id="r_id" value="<?php echo $this->_tpl_vars['data']['id']; ?>
" />

                  </span></p></td>

                  <td width="62%" colspan="2" align="left" valign="middle"><select name="veh_id" id="veh_id" class="validate[required]">

                    <option value="">Select Vehicle</option>

                    

                  <?php unset($this->_sections['q']);
$this->_sections['q']['name'] = 'q';
$this->_sections['q']['loop'] = is_array($_loop=$this->_tpl_vars['vehicles']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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

                  

                    <option value="<?php echo $this->_tpl_vars['vehicles'][$this->_sections['q']['index']]['id']; ?>
" <?php if ($this->_tpl_vars['data']['veh_id'] == $this->_tpl_vars['vehicles'][$this->_sections['q']['index']]['id']): ?> selected="selected"<?php endif; ?>><?php echo $this->_tpl_vars['vehicles'][$this->_sections['q']['index']]['vname']; ?>
 - [<?php echo $this->_tpl_vars['vehicles'][$this->_sections['q']['index']]['vnumber']; ?>
 ]</option>

                    

                  <?php endfor; endif; ?>

                  

                  </select>

                    <span class="SmallnoteTxt">*</span></td>

                </tr>
 <tr>
			  	<td height="5" colspan="3"></td>
			  </tr>	
                  <tr>

                  <td width="38%" align="left" valign="middle" class="labeltxt"><p><strong>Maintenance Date:</strong></p></td>

                  <td colspan="2" align="left" valign="middle"><span class="SmallnoteTxt">

                    <input name="date" type="text"  class="validate[required] inputTxtField" id="date" value="<?php echo $this->_tpl_vars['data']['date']; ?>
"/>

                    (mm/dd/yyyy)

                    *</span></td>

                </tr>
 <tr>
			  	<td height="5" colspan="3"></td>
			  </tr>	
                <tr>

                  <td align="left" valign="middle" class="labeltxt"><strong>Maintenance Type:</strong></td>

                  <td colspan="2" align="left" valign="middle">

                  <select name="type" id="type"  class="validate[required] inputTxtField">

                  <option value="">Select Maintnance Type</option>

                  <?php unset($this->_sections['q']);
$this->_sections['q']['name'] = 'q';
$this->_sections['q']['loop'] = is_array($_loop=$this->_tpl_vars['types']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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

                  	<option value="<?php echo $this->_tpl_vars['types'][$this->_sections['q']['index']]['id']; ?>
" <?php if ($this->_tpl_vars['types'][$this->_sections['q']['index']]['id'] == $this->_tpl_vars['data']['m_type']): ?> selected="selected" <?php endif; ?>><?php echo $this->_tpl_vars['types'][$this->_sections['q']['index']]['mentype']; ?>
</option>

                  <?php endfor; endif; ?>

                  </select>

                  <span class="SmallnoteTxt">*</span></td>

                </tr>
 <tr>
			  	<td height="5" colspan="3"></td>
			  </tr>	
                <tr>

                  <td align="left" valign="middle" class="labeltxt"><strong>Maintenance Description:</strong></td>

                  <td colspan="2" align="left" valign="middle"><textarea name="desc" id="desc" class="validate[required,length[6,200]]"><?php echo $this->_tpl_vars['data']['m_description']; ?>
</textarea> 

                  &nbsp;<span class="SmallnoteTxt">*</span></td>

                </tr>
 <tr>
			  	<td height="5" colspan="3"></td>
			  </tr>	
                <tr>

                  <td align="left" valign="middle" class="labeltxt"><strong>Maintenance Cost:</strong></td>

                  <td colspan="2" align="left" valign="middle"><input name="cost" type="text"  class="validate[required,custom[onlyNumber]] inputTxtField" id="cost" value="<?php echo $this->_tpl_vars['data']['cost']; ?>
" maxlength="6"/>

                  (dollars)                     &nbsp;<span class="SmallnoteTxt">*</span></td>

         <!--       </tr>

                <tr>

                  <td align="left" valign="middle" class="labeltxt"><strong>Status:</strong></td>

                  <td colspan="2" align="left" valign="middle"><select id="status" name="status">

                  <option value="">Select Status</option>

                  <option value="1">Done</option>

                  <option value="0">Pending</option>

                  </select>&nbsp;<span class="SmallnoteTxt">*</span></td>

                </tr>-->

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

                  <td>&nbsp;</td>

                  <td>&nbsp;</td>

                </tr>

                <tr>

                  <td valign="top">&nbsp;</td>

                  <td colspan="2" align="center"><input type="submit" name="update" value="Update" class="inputButton btn" id="update"></td>

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
