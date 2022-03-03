<?php /* Smarty version 2.6.12, created on 2014-07-26 19:45:59
         compiled from myaccount.tpl */ ?>
 <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "top.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
 <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
 <div style="padding-left:100px;">
  <div class="form_panel">
                                	<div class="heading">Edit Account</div>
                                    <div class="form_bg">                               	
	    	                                <div class="form">
                                             <form name="loginform" id="loginform" action="myaccount.php" method="post">
                                        	<table cellpadding="5" cellspacing="10" width="100%"  style="float:left;">                              

            <tr>

              <td colspan="3" valign="top" class="form_heading1">Facility Information </td>

              </tr>

            <tr>

              <td class="label">Facility Name:</td>

              <td colspan="2" class="MediumnoteTxt"><?php echo $this->_tpl_vars['hosp_name']; ?>
<input type="hidden" name="hosp_name" value="<?php echo $this->_tpl_vars['hosp_name']; ?>
" class="txt_box"/></td>

            </tr>

            <tr>

              <td class="label">Address:</td>

              <td colspan="2"><input type="text" name="h_address" id="h_address" value="<?php echo $this->_tpl_vars['h_address']; ?>
" class="txt_box required"/>&nbsp;<span class="MediumnoteTxt">

                <input type="hidden" name="oh_address" value="<?php echo $this->_tpl_vars['oh_address']; ?>
" />

              </span><span class="SmallnoteTxt">*</span></td>

            </tr>

            <tr>

              <td class="label">City:</td>

              <td colspan="2"><input type="text" name="h_city" id="h_city" value="<?php echo $this->_tpl_vars['h_city']; ?>
"  class="txt_box required chars"/>&nbsp;<span class="SmallnoteTxt">*</span></td>

            </tr>

            <tr>

              <td class="label">State:</td>

              <td colspan="2">

			  <select name="h_state" id="h_state" class="txt_box required">

			   <option value="">Select</option>

			   <?php unset($this->_sections['n']);
$this->_sections['n']['name'] = 'n';
$this->_sections['n']['loop'] = is_array($_loop=$this->_tpl_vars['states']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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

			   <option value="<?php echo $this->_tpl_vars['states'][$this->_sections['n']['index']]['abbr']; ?>
" <?php if ($this->_tpl_vars['h_state'] != ''):  if ($this->_tpl_vars['states'][$this->_sections['n']['index']]['abbr'] == $this->_tpl_vars['h_state']): ?>selected<?php endif;  elseif ($this->_tpl_vars['states'][$this->_sections['n']['index']]['abbr'] == 'AZ'): ?>selected<?php endif; ?>>

			   <?php echo $this->_tpl_vars['states'][$this->_sections['n']['index']]['statename']; ?>


			   </option>

			   <?php endfor; endif; ?>

			  </select> &nbsp;<span class="SmallnoteTxt">*</span> 

			  </td>

            </tr>

            <tr>

              <td class="label">Zipcode:</td>

              <td colspan="2"><input type="text" name="h_zip" id="h_zip" value="<?php echo $this->_tpl_vars['h_zip']; ?>
" maxlength="10"  class="txt_box required digits"/>&nbsp;<span class="SmallnoteTxt">*</span> </td>

            </tr>

            <tr>

              <td class="label">Phone:</td>

              <td colspan="2"><input type="text" name="h_phone" id="h_phone" value="<?php echo $this->_tpl_vars['h_phone']; ?>
" class="txt_box required" maxlength="14" />&nbsp;<span class="MediumnoteTxt">

                <input type="hidden" name="oh_phone" value="<?php echo $this->_tpl_vars['oh_phone']; ?>
" />

              </span><span class="SmallnoteTxt">*</span> </td>

            </tr>

            <tr>

              <td colspan="3" valign="top">&nbsp;</td>

            </tr>

            <tr>

              <td colspan="3" valign="top" class="form_heading1">Contact Person Information </td>

              </tr>

            <tr>

              <td class="label">First Name:</td>

              <td colspan="2"><input type="text" name="fname" id="fname" value="<?php echo $this->_tpl_vars['fname']; ?>
" class="txt_box required chars" />&nbsp;<span class="SmallnoteTxt">*</span> </td>

            </tr>

            <tr>

              <td class="label">Last Name:</td>

              <td colspan="2"><input type="text" name="lname" id="lname" value="<?php echo $this->_tpl_vars['lname']; ?>
" class="txt_box required chars" />&nbsp;<span class="SmallnoteTxt">*</span> </td>

            </tr>

            <tr>

              <td class="label">Phone:</td>

              <td colspan="2"><input type="text" name="phnum" id="phnum" maxlength="14" value="<?php echo $this->_tpl_vars['phnum']; ?>
" class="txt_box required" />&nbsp;<span class="SmallnoteTxt">*</span> </td>

            </tr>

            <tr>

              <td class="label">Email Address:</td>

              <td colspan="2"><?php echo $this->_tpl_vars['email']; ?>
<input type="hidden" name="email" id="email" value="<?php echo $this->_tpl_vars['email']; ?>
"  class="txt_box required email"/>&nbsp;<span class="SmallnoteTxt">*</span> </td>

            </tr>

            <tr>

              <td colspan="3" valign="top">&nbsp;</td>

              </tr>

            <tr>

              <td colspan="3" valign="top" class="form_heading1">Account Information </td>

            </tr>

            <tr>

              <td class="label">Username:</td>

              <td valign="top" class="MediumnoteTxt"><?php echo $this->_tpl_vars['username']; ?>
<input type="hidden" name="username" value="<?php echo $this->_tpl_vars['username']; ?>
" /></td>

              <td valign="top">&nbsp;</td>

            </tr>

            <tr>

              <td class="label">Password:</td>

              <td colspan="2" valign="top"><input type="password" name="pwd1" id="pwd1"  class="txt_box required"/></td>

            </tr>

            <tr>

              <td class="label">Confirm Password :</td>

              <td colspan="2" valign="top"><input type="password" name="pwd2" id="pwd2" class="txt_box required" /></td>

            </tr>

            <tr>

              <td colspan="3" valign="top">&nbsp;</td>

            </tr>

            <tr>

              <td colspan="3" valign="top">&nbsp;</td>

            </tr>

            <tr>

              <td valign="top">&nbsp;</td>

              <td colspan="2">

			  <input type="submit" name="submit" value="Update" class="inputButton btn"  />

			  <input type="reset" name="reset" value="Reset" class="inputButton btn"  />			  </td>

            </tr>

          </table></form>
											
											
											
											
											
       	                              </div>
            	    
                                    </div>
                             </div>   </div>
  <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>