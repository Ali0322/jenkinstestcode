<?php /* Smarty version 2.6.12, created on 2014-07-11 19:53:27
         compiled from signup.tpl */ ?>
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
 <div class="left_panel">
 <div class="welcome_panel">
              <div class="heading"><?php if ($this->_tpl_vars['HeadingTitle'] == ''): ?>Facility Registration<?php else:  echo $this->_tpl_vars['HeadingTitle'];  endif; ?></div>
              <div class="text"><?php echo $this->_tpl_vars['content']; ?>
</div>
              </div> 
 <div class="form_baground"></div> 
  <div class="form_bg">                               	
	                                	
      <div class="form1">                                        	
      <table width="500px" align="center" style="border: solid 0px #F00; float:left;">
      <tr>
      <td align="left" valign="top"> <?php if ($this->_tpl_vars['error'] != ''): ?>
      <table width="95%"  align="center" cellpadding="0" cellspacing="0" style="border: solid 0px #F00; float:left;">
      <tr>
      <td width="14" valign="bottom"><img src="images/error_01.gif" width=14 height=14 alt="" /></td>
      <td colspan=2 style="background-image:url(images/error_02.gif); background-repeat:repeat-x; height:13px; background-position:bottom;">&nbsp;</td>
      <td width="13" valign="bottom"><img src="images/error_03.gif" width=13 height=14 alt="" /></td>
      </tr>
      <tr>
      <td style="background-image:url(images/error_04.gif); background-repeat:repeat-y;">&nbsp;</td>
      <td width="60" bgcolor="#FFFFFF" valign="top"><img src="images/error_05.gif" width=60 height=57 alt="" /></td>
      <td  valign="top" bgcolor="#FFFFFF"><b><?php echo $this->_tpl_vars['error']; ?>
</b></td>
      <td style="background-image:url(images/error_07.gif); background-repeat:repeat-y;">&nbsp;</td>
      </tr>
      <tr>
      <td valign="top"><img src="images/error_08.gif" width=14 height=14 alt="" /></td>
      <td colspan=2 style="background-image:url(images/error_09.gif); background-repeat:repeat-x;height:14px;">&nbsp;</td>
      <td valign="top"><img src="images/error_10.gif" width=13 height=14 alt="" /></td>
      </tr>
      </table>
      <?php endif; ?>
      
      <?php if ($this->_tpl_vars['msg'] != ''): ?>
      <table width="95%" align="center" cellpadding="0" cellspacing="0" style="border: solid 0px #F00; float:left;">
      <tr>
      <td width="14" valign="bottom"><img src="images/error_01.gif" width=14 height=14 alt="" /></td>
      <td colspan=2 style="background-image:url(images/error_02.gif); background-repeat:repeat-x; height:13px; background-position:bottom;">&nbsp;</td>
      <td width="13" valign="bottom"><img src="images/error_03.gif" width=13 height=14 alt="" /></td>
      </tr>
      <tr>
      <td style="background-image:url(images/error_04.gif); background-repeat:repeat-y;">&nbsp;</td>
      <td width="60" bgcolor="#FFFFFF" valign="top"><img src="images/okgreen.gif" width=60 height=57 alt="" /></td>
      <td valign="top" bgcolor="#FFFFFF"><b><?php echo $this->_tpl_vars['msg']; ?>
</b></td>
      <td style="background-image:url(images/error_07.gif); background-repeat:repeat-y;">&nbsp;</td>
      </tr>
      <tr>
      <td valign="top"><img src="images/error_08.gif" width=14 height=14 alt="" /></td>
      <td colspan=2 style="background-image:url(images/error_09.gif); background-repeat:repeat-x;height:14px;">&nbsp;</td>
      <td valign="top"><img src="images/error_10.gif" width=13 height=14 alt="" /></td>
      </tr>
      </table>
      <?php endif; ?> </td>
      </tr>
      </table><form name="updReq" id="updReq" action="signup_1.php" method="post">
      <table cellpadding="1" cellspacing="5" width="80%" style="border: solid 0px #F00; float:left;">     <tr>
      <td colspan="3"><div class="form_heading1">Facility Information</div></td>                                                 </tr>  
      <input type="hidden" name="progtype" id="progtype" value="0">
      <tr>
      <td class="label">Facility Name:</td>
      <td><input type="text" name="hosp_name" id="hosp_name" value="<?php echo $this->_tpl_vars['hosp_name']; ?>
"  class="txt_box required chars" maxlength="75"/>&nbsp;<span class="SmallnoteTxt">*</span></td>
      <td></td>
      </tr>
      <!--<tr>
      <td class="label">Programe Type:</td>
           <td> <select name="progtype" id="progtype" class="txt_box required" >
			   <option value="">Select</option>
			   <?php unset($this->_sections['n']);
$this->_sections['n']['name'] = 'n';
$this->_sections['n']['loop'] = is_array($_loop=$this->_tpl_vars['prgs']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
			   <option value="<?php echo $this->_tpl_vars['prgs'][$this->_sections['n']['index']]['prgid']; ?>
" <?php if ($this->_tpl_vars['progtype'] == $this->_tpl_vars['prgs'][$this->_sections['n']['index']]['prgid']): ?>selected<?php endif; ?> >
			   <?php echo $this->_tpl_vars['prgs'][$this->_sections['n']['index']]['prgtitle']; ?>

			   </option>
			   <?php endfor; endif; ?>
			  </select>&nbsp;<span class="SmallnoteTxt">*</span>  </td>
                                                    <td></td>
                                                  </tr>-->
       <tr>
      <td class="label">Address:</td>
      <td><input type="text" name="h_address" id="h_address" value="<?php echo $this->_tpl_vars['h_address']; ?>
"  class="txt_box required"/>&nbsp;<span class="SmallnoteTxt">*</span></td>
      <td></td>
      </tr>
      <tr>
      <td class="label">City:</td>
      <td><input type="text" name="h_city" id="h_city" value="<?php echo $this->_tpl_vars['h_city']; ?>
" class="txt_box required chars" autocomplete="off" />&nbsp;<span class="SmallnoteTxt">*</span></td>
      <td></td>
      </tr>
      <tr>
      <td class="label">State:</td>
      <td>
       <select name="h_state" id="h_state" class="txt_box required" >
      
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
      
      </select>&nbsp;<span class="SmallnoteTxt">*</span>                                                    </td>
      <td></td>
      </tr>    
      <tr>
      <td class="label">Zip Code:</td>
      <td><input type="text" name="h_zip" id="h_zip" value="<?php echo $this->_tpl_vars['h_zip']; ?>
" maxlength="5" class="txt_box required digits" /></td>
      <td></td>
      </tr>                                                  
      <tr>
      <td class="label">Phone:</td>
      <td><input type="text" name="h_phone" id="h_phone" value="<?php echo $this->_tpl_vars['h_phone']; ?>
" class="txt_box required" maxlength="14"/>&nbsp;<span class="SmallnoteTxt">*</span></td>
      <td></td>
      </tr>                
      <tr>
      <td colspan="3"><div class="form_heading1">Contact Person Information</div></td>                                                 </tr>     
      <tr>
      <td class="label">First Name:</td>
      <td><input type="text" name="fname" id="fname" value="<?php echo $this->_tpl_vars['fname']; ?>
" class="txt_box required chars" maxlength="30" />&nbsp;<span class="SmallnoteTxt">*</span></td>
      <td></td>
      </tr>
      <tr>
      <td class="label">Last Name:</td>
      <td><input type="text" name="lname" id="lname" value="<?php echo $this->_tpl_vars['lname']; ?>
" class="txt_box required chars" maxlength="30" />&nbsp;<span class="SmallnoteTxt">*</span></td>
      <td></td>
      </tr>
      <tr>
      <td class="label">Phone:</td>
      <td><input type="text" name="phnum" id="phnum" value="<?php echo $this->_tpl_vars['phnum']; ?>
" class="txt_box required" maxlength="14" />&nbsp;<span class="SmallnoteTxt">*</span></td>
      <td></td>
      </tr>                                              
      <tr>
      <td class="label">Email Address:</td>
      <td><input type="text" name="email" id="email" value="<?php echo $this->_tpl_vars['email']; ?>
" class="txt_box required email" />&nbsp;<span class="SmallnoteTxt">*</span></td>
      <td></td>
      </tr>      
      <tr>
      <td ></td>
      <td style="text-align:left;"><input type="submit" value="Proceed" id="submit" name="submit" class="btn">&nbsp;&nbsp;<input type="reset" value="Reset" id="reset" name="reset" class="btn"></td>
      <td></td>
      </tr>      </table></form>
      </div>
      </div>
                   
  </div>
 <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "body_right.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
 <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>