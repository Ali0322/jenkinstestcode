<?php /* Smarty version 2.6.12, created on 2022-02-24 09:33:38
         compiled from ccode/edit.tpl */ ?>
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
</script> 
'; ?>

<table id="table1" class="outer_table"   border="0" cellspacing="0" cellpadding="0" align="center" bgcolor="#FFFFFF" style="margin-bottom:10px;">
  <tr>
    <td valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0" align="center" bgcolor="#FFFFFF">
        <tr>
          <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td height="25" align="right" valign="top">[<a href="javascript:history.back();">Back</a>]</td>
              </tr>
              <tr>
                <td height="19" align="center" class="admintopheading">Update Company Code</td>
              </tr>
              <tr>
                <td height="44" align="center"  valign="top" style="padding-bottom:20px; color: #F00;"><form name="add-admuser" id="add-admuser" method="post" action="">
                    <table width="700" border="0" cellspacing="2" cellpadding="2">
                      <tr>
                        <td colspan="3" align="center" valign="top"><?php if ($this->_tpl_vars['msgs'] != ''): ?><font color="#009966" style="font-weight:bold"><?php echo $this->_tpl_vars['msgs']; ?>
</font><?php endif; ?>
                          <?php if ($this->_tpl_vars['errors'] != ''): ?><font color="#FF0000" style="font-weight:bold"><?php echo $this->_tpl_vars['errors']; ?>
</font><?php endif; ?> </td>
                      </tr>
                      <tr>
                    <td colspan="3" align="center" valign="top"><table width="90%" border="0" cellspacing="0" cellpadding="0">                           <tr>
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
                      <td width="20%" height="25" align="right" class="labeltxt"><b>Company:</b></td>
                      <td width="80%" height="25"><input name="company" type="text" class="validate[required]" id="company" value="<?php echo $this->_tpl_vars['data']['company']; ?>
" maxlength="200" size="50" />*<br/><div id='dupcode'></div></td>
                    </tr>
                     <tr>
                      <td  height="25" align="right" class="labeltxt"><b>Code:</b></td>
                      <td  height="25"><input name="code" type="text" class="validate[required]" id="code" value="<?php echo $this->_tpl_vars['data']['code']; ?>
" maxlength="350"  size="50" />*</td>
                    </tr>
                     <tr>
                      <td  height="25" align="right" class="labeltxt"><b></b></td>
                      <td  height="25"></td>
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
                      <?php if ($_SESSION['admuser']['admin_level'] == '0' || $_SESSION['adminpermission']['m13m_up'] == 'on'):  endif; ?>
                      <tr>
                      <td colspan="3" align="center" valign="top">
                        <input type="submit" name="admusersub" id="admusersub" value=" Update " class="btn" />
                        <input type="reset" name="reset" id="reset" value="Reset" class="btn" />
                        <input type="hidden" name="eId" value="<?php echo $this->_tpl_vars['eId']; ?>
"  /></td>
                      </tr>
                      <tr>
                        <td align="right" valign="top">&nbsp;</td>
                        <td colspan="2" align="left" valign="top">&nbsp;</td>
                      </tr>
                      <tr>
                        <td colspan="3"><!--  CONTENT DETAIL --></td>
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