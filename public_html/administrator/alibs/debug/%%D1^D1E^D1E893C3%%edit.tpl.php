<?php /* Smarty version 2.6.12, created on 2019-12-20 17:53:06
         compiled from patientstpls/edit.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'date_format', 'patientstpls/edit.tpl', 78, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "headerinner.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php echo ' 
<script language="javascript" type="text/javascript">
$(document).ready(function() {
	$("#add-admuser").validationEngine()
});
function age_calc(objx)
{
obj = objx.value;
	$.post("age_calc.php", {dob:obj}, function(data){
		if(data.length > 0)
		{
			$(\'#p_age\').val(data) ;
		} else{
		$(\'#p_age\').val(\'\') ;
		}  
	});
}
</script> 
'; ?>

<table id="table1" class="outer_table"   border="0" cellspacing="0" cellpadding="0" align="center" bgcolor="#FFFFFF" style="margin-bottom:10px;">
  <tr>
    <td valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0" align="center" bgcolor="#FFFFFF">
        <tr>
          <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td height="25" align="right" valign="top">[<a href="javascript:history.back()">Back</a>]</td>
              </tr>
              <tr>
                <td height="19" align="center" class="admintopheading">EDIT PATIENT</td>
              </tr>
              <tr>
                <td height="44" align="center"  valign="top" style="padding-bottom:20px; color: #F00;"><form name="add-admuser" id="add-admuser" method="post" action="edit.php">
                    <table width="800" border="0" cellspacing="2" cellpadding="2">
                      <tr>
                        <td colspan="3" align="center" valign="top"><?php if ($this->_tpl_vars['msgs'] != ''): ?><font color="#009966" style="font-weight:bold"><?php echo $this->_tpl_vars['msgs']; ?>
</font><?php endif; ?>
                          
                          <?php if ($this->_tpl_vars['errors'] != ''): ?><font color="#FF0000" style="font-weight:bold"><?php echo $this->_tpl_vars['errors']; ?>
</font><?php endif; ?> </td>
                      </tr>
                      <tr>
                        <td colspan="3" align="center" valign="top"><table width="90%" border="0" cellspacing="0" cellpadding="0">
                            <tr>
                              <td width="17" align="left"><img src="../images/1.jpg" alt="d" width="17" height="17" /></td>
                              <td align="left" background="../images/2.jpg"></td>
                              <td width="17" align="left"><img src="../images/3.jpg" alt="d" width="17" height="17" /></td>
                            </tr>
                            <tr>
                              <td align="left" valign="top" background="../images/4.jpg">&nbsp;</td>
                              <td align="left" valign="top"><table width="100%" border="0" cellspacing="2" cellpadding="2">
                                  <tr>
                                    <td colspan="2"></td>
                                  </tr>
                                  <tr>
                                    <td width="30%" height="25" align="right" class="labeltxt">Patient Name: </td>
                                    <td width="70%" height="25"><input name="name" type="text" class="validate[required]" id="name" value="<?php echo $this->_tpl_vars['data']['name']; ?>
" maxlength="60" />                                      *</td>
                                  </tr>
                                  <tr>
                                    <td width="30%" height="25" align="right" class="labeltxt"> Sex: </td>
                                    <td width="70%" height="25"><select name="sex" >
                                    <option value="Male" <?php if ($this->_tpl_vars['data']['sex'] == 'Male'): ?> selected="selected" <?php endif; ?>>Male</option>
                                    <option value="Female" <?php if ($this->_tpl_vars['data']['sex'] == 'Female'): ?> selected="selected" <?php endif; ?>>Female</option>
                                    </select>
                                      *</td>
                                  </tr>
                               <!--   
                                   <tr>
                                    <td width="30%" height="25" align="right" class="labeltxt"> Insurance ID: </td>
                                    <td width="70%" height="25"><input name="insurance" type="text" class="validate[required]" id="insurance" value="<?php echo $this->_tpl_vars['data']['insurance']; ?>
" maxlength="30" />
                                      *</td>
                                  </tr>
                                   <tr>
                                    <td width="30%" height="25" align="right" class="labeltxt"> SSN: </td>
                                    <td width="70%" height="25"><input name="ssn" type="text" class="validate[required]" id="ssn" value="<?php echo $this->_tpl_vars['data']['ssn']; ?>
" maxlength="20" />
                                      *</td>
                                  </tr>-->
                                     <tr>
                                    <td width="30%" height="25" align="right" class="labeltxt">DOB: </td>
                                    <td width="70%" height="25"><input name="dob" type="text" class="validate[]" id="dob" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['data']['dob'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%m/%d/%Y") : smarty_modifier_date_format($_tmp, "%m/%d/%Y")); ?>
" maxlength="10" onblur="age_calc(this);"  /> mm/dd/yyyy</td>
                                  </tr>                                 
                                  <tr>
                                    <td width="30%" height="25" align="right" class="labeltxt">Address: </td>
                                    <td width="70%" height="25"><input name="address" type="text" class="validate[required]" id="address" value="<?php echo $this->_tpl_vars['data']['address']; ?>
" maxlength="150" />
                                      *</td>
                                  </tr>
                                  <tr>
                                    <td width="30%" height="25" align="right" class="labeltxt">Room #/Site #: </td>
                                    <td width="70%" height="25"><input name="roomsite" type="text" class="validate[]" id="roomsite" value="<?php echo $this->_tpl_vars['data']['roomsite']; ?>
" maxlength="100" />
                                      </td>
                                  </tr>
                                <!--  <tr>
                                    <td width="30%" height="25" align="right" class="labeltxt">City: </td>
                                    <td width="70%" height="25"><input name="city" type="text" class="validate[required]" id="city" value="<?php echo $this->_tpl_vars['data']['city']; ?>
" maxlength="50" />
                                      *</td>
                                  </tr>
                                  <tr>
                                    <td width="30%" height="25" align="right" class="labeltxt">State: </td>
                                    <td width="70%" height="25"><select name="state" id="state"  class="validate[required]">
                      <option value="">Select</option>
			   <?php unset($this->_sections['n']);
$this->_sections['n']['name'] = 'n';
$this->_sections['n']['loop'] = is_array($_loop=$this->_tpl_vars['slist']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
                     <option value="<?php echo $this->_tpl_vars['slist'][$this->_sections['n']['index']]['abbr']; ?>
"<?php if ($this->_tpl_vars['slist'][$this->_sections['n']['index']]['abbr'] == $this->_tpl_vars['data']['state']): ?> selected="selected" <?php else:  if ($this->_tpl_vars['slist'][$this->_sections['n']['index']]['abbr'] == 'AZ'): ?> selected="selected" <?php endif;  endif; ?>>
	   <?php echo $this->_tpl_vars['slist'][$this->_sections['n']['index']]['statename']; ?>

                     </option>
			  <?php endfor; endif; ?>
                    </select>
                                      *</td>
                                  </tr>
                                  <tr>
                                    <td width="30%" height="25" align="right" class="labeltxt">Zip: </td>
                                    <td width="70%" height="25"><input name="zip" type="text" class="validate[required]" id="zip" value="<?php echo $this->_tpl_vars['data']['zip']; ?>
" maxlength="10" />
                                      *</td>
                                  </tr>-->
                                 
                                
                                  
                                  <tr>
                                    <td width="30%" height="25" align="right" class="labeltxt">Patient Phone: </td>
                                    <td width="70%" height="25"><input name="phone" type="text" class="validate[required]" id="phnum" value="<?php echo $this->_tpl_vars['data']['phone']; ?>
" maxlength="15" />
                                    *</td>
                                  </tr>
                                  <tr>
                                    <td width="30%" height="25" align="right" class="labeltxt">Special Comments: </td>
                                    <td width="70%" height="25"><textarea name="comments" rows="5" ><?php echo $this->_tpl_vars['data']['comments']; ?>
</textarea></td>
                                  </tr>
                                </table></td>
                              <td align="left" valign="top" background="../images/5.jpg">&nbsp;</td>
                            </tr>
                            <tr>
                              <td align="left" valign="top"><img src="../images/6.jpg" alt="d" width="17" height="17" /></td>
                              <td align="left" valign="top" background="../images/7.jpg">&nbsp;</td>
                              <td align="left" valign="top"><img src="../images/8.jpg" alt="d" width="17" height="17" /></td>
                            </tr>
                          </table></td>
                      </tr>
                      <tr>
                        <td colspan="3" align="center" valign="top"><input type="submit" name="admusersub" id="admusersub" value=" Update " class="btn" />
                          <input type="reset" name="reset" id="reset" value="Reset" class="btn" />
                          <input type="hidden" name="id" value="<?php echo $this->_tpl_vars['id']; ?>
" />
                          <input type="hidden" name="pre_name" value="<?php echo $this->_tpl_vars['data']['name']; ?>
" /></td>
                      </tr>
                      <tr>
                        <td align="right" valign="top">&nbsp;</td>
                        <td colspan="2" align="left" valign="top">&nbsp;</td>
                      </tr>
                      <tr>
                        <td colspan="3"></td>
                      </tr>
                    </table>
                  </form></td>
              </tr>
              <tr>
                <td>&nbsp;</td>
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