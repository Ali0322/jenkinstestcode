<?php /* Smarty version 2.6.12, created on 2019-12-26 20:01:35
         compiled from admtpl/adduser.tpl */ ?>
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

     <td valign="top">

     <table width="100%" border="0" cellspacing="0" cellpadding="0" align="center" bgcolor="#FFFFFF">

  <tr>

    <td>

<table width="100%" border="0" cellspacing="0" cellpadding="0">

                            <tr>

                              <td height="25" align="right" valign="top">[<a href="javascript:history.back();">Back</a>]</td>

                            </tr>

                            

                            <tr>

                              <td height="19" align="center" class="admintopheading">Add Admin User </td>

                            </tr>

							

                         

                            <tr>

                              <td height="44" align="center"  valign="top" style="padding-bottom:20px; color: #F00;">

							  <form name="add-admuser" id="add-admuser" method="post" action="adduser.php">

	  <table width="600" border="0" cellspacing="2" cellpadding="2">

        <tr>

          <td colspan="3" align="center" valign="top"><?php if ($this->_tpl_vars['msgs'] != ''): ?><font color="#009966" style="font-weight:bold"><?php echo $this->_tpl_vars['msgs']; ?>
</font><?php endif; ?>

		    <?php if ($this->_tpl_vars['errors'] != ''): ?><font color="#FF0000" style="font-weight:bold"><?php echo $this->_tpl_vars['errors']; ?>
</font><?php endif; ?>		  </td>

        </tr>

        <tr>

          <td colspan="3" align="left" valign="top" class="admintopheading"><strong>Admin Details:</strong></td>

          </tr>

        <tr>

          <td colspan="3" align="center" valign="top">

        <table width="90%" border="0" cellspacing="0" cellpadding="0">

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

    <td width="30%" height="25" align="right" class="labeltxt">First Name: </td>

    <td width="70%" height="25"><input name="admname" type="text" class="validate[required,custom[onlyLetter]]" id="admname" value="<?php echo $this->_tpl_vars['admname']; ?>
" maxlength="50" /> 

    *</td>

  </tr>

  <tr>

    <td width="30%" height="25" align="right" class="labeltxt">Last Name: </td>

    <td width="70%" height="25"><input name="lname" type="text" class="validate[required,custom[onlyLetter]]" id="lname" value="<?php echo $this->_tpl_vars['lname']; ?>
" maxlength="50" /> 

    *</td>

  </tr>

  <tr>

    <td height="25" align="right" class="labeltxt">Username : </td>

    <td height="25"><input name="admuname" type="text" class="validate[required,custom[noSpecialCaracters]]" id="admuname" value="<?php echo $this->_tpl_vars['admuname']; ?>
" maxlength="15" /> 

    *</td>

  </tr>

  <tr>

    <td height="25" align="right" class="labeltxt">Email Address: </td>

    <td height="25"><input name="admemail" type="text" class="validate[required,custom[email]] email" id="admemail" value="<?php echo $this->_tpl_vars['admemail']; ?>
" maxlength="100" /> 

    *</td>

  </tr>

</table>		</td>

        <td align="left" valign="top" background="../images/5.jpg">&nbsp;</td>

      </tr>

      <tr>

        <td align="left" valign="top"><img src="../images/6.jpg" alt="d" width="17" height="17" /></td>

        <td align="left" valign="top" background="../images/7.jpg">&nbsp;</td>

        <td align="left" valign="top"><img src="../images/8.jpg" alt="d" width="17" height="17" /></td>

      </tr>

    </table>    	</td>

        </tr>

        

        <tr>

          <td colspan="3" align="left" valign="top" class="admintopheading"><strong>Your Password :</strong></td>

          </tr>

        <tr>

          <td colspan="3" align="center" valign="top">

		  <table width="90%" border="0" cellspacing="0" cellpadding="0">

      <tr>

        <td width="17" align="left" ><img src="../images/1.jpg" alt="d" width="17" height="17" /></td>

        <td align="left" background="../images/2.jpg"></td>

        <td width="17" align="left" ><img src="../images/3.jpg" alt="d" width="17" height="17" /></td>

      </tr>

      <tr>

        <td align="left" valign="top" background="../images/4.jpg">&nbsp;</td>

        <td align="left" valign="top">

		<table width="100%" border="0" cellspacing="2" cellpadding="2">

		  

		  <tr>

			<td width="31%" height="25" align="right" class="labeltxt">Password:</td>

			<td width="69%" height="25"><input name="admpwd1" type="text" class="validate[required,length[5,15]]" id="admpwd1" value="<?php echo $this->_tpl_vars['admpwd1']; ?>
" maxlength="20" /> 

			*</td>

		  </tr>

		  <tr>

			<td height="25" align="right" class="labeltxt">Confirm Password: </td>

			<td height="25"><input name="admpwd2" type="text" class="validate[required,confirm[admpwd1],length[5,15]]" id="admpwd2" value="<?php echo $this->_tpl_vars['admpwd2']; ?>
" maxlength="20" /> 

			*</td>

		  </tr>

		</table>		</td>

        <td align="left" valign="top" background="../images/5.jpg">&nbsp;</td>

      </tr>

      <tr>

        <td align="left" valign="top"><img src="../images/6.jpg" alt="d" width="17" height="17" /></td>

        <td align="left" valign="top" background="../images/7.jpg">&nbsp;</td>

        <td align="left" valign="top"><img src="../images/8.jpg" alt="d" width="17" height="17" /></td>

      </tr>

    </table>		  </td>

        </tr>

        <tr>

          <td width="48" align="left" valign="top">&nbsp;</td>

          <td colspan="2" align="left" valign="top">&nbsp;</td>

        </tr>

        

        <!--<tr>

          <td align="right" valign="top">&nbsp;</td>

          <td width="145" align="right" valign="top" class="labeltxt">Status:</td>

          <td width="387" align="left" valign="top">

		  <select name="status" id="status" class="required">

		    <option value="" <?php if ($this->_tpl_vars['status'] == ''): ?>selected<?php endif; ?>>Select</option>

			<option value="Inactive" <?php if ($this->_tpl_vars['status'] == 'Inactive'): ?>selected<?php endif; ?>>Inactive</option>

			<option value="Active" <?php if ($this->_tpl_vars['status'] == 'Active'): ?>selected<?php endif; ?>>Active</option>

			<option value="Blocked" <?php if ($this->_tpl_vars['status'] == 'Blocked'): ?>selected<?php endif; ?>>Blocked</option>

		  </select>		  </td>

        </tr>-->

        <tr>

          <td align="right" valign="top">&nbsp;</td>

          <td colspan="2" align="left" valign="top">&nbsp;</td>

        </tr>

        <tr>

          <td colspan="3" align="center" valign="top">

		  <input type="submit" name="admusersub" id="admusersub" value="Add User" class="btn" />

		  <input type="reset" name="reset" id="reset" value="Reset" class="btn" />		  </td>

          </tr>

        <tr>

          <td align="right" valign="top">&nbsp;</td>

          <td colspan="2" align="left" valign="top">&nbsp;</td>

        </tr>

		<tr>

		  <td colspan="3"><!--  CONTENT DETAIL --></td>

		</tr>

      </table>

	      </form>							  </td>

            </tr>

			<tr>

			   <td>&nbsp;</td>

			</tr>			

      </table>

    </td>

  </tr>

</table>		 

   </td>

  </tr>

</table>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "innerfooter.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
