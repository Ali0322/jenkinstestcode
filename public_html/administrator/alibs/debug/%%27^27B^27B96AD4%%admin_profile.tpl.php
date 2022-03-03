<?php /* Smarty version 2.6.12, created on 2020-06-16 18:00:39
         compiled from admin_profile.tpl */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "mainhead.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php echo '
<script type="text/javascript">
$(document).ready(function() {
	$("#adminprof").validationEngine();
});
</script>
'; ?>

<form name="adminprof" id="adminprof" action="admin_profile.php" method="post">
<table id="table1" class="outer_table"   border="0" cellspacing="0" cellpadding="0" align="center" bgcolor="#FFFFFF" style="margin-bottom:10px;">
	<tr>
	<tr>
 			   <td height="19" colspan="3" align="right" style="padding-right:40px">[<a href="javascript:history.back();">Back</a>]</td>
    </tr>
		<td colspan="20" valign="top">
			<table width="100%"  align="center" height="53" border="0" cellpadding="2" cellspacing="2">
 			 <?php if ($this->_tpl_vars['msgs'] != '' || $this->_tpl_vars['errors'] != ''): ?>
 			 <tr>
			   <td height="19" class="okmsg" colspan="2" align="center" style="color:#FF0000; font-weight:bold;">
			<?php if ($this->_tpl_vars['msgs'] != ''): ?> <?php echo $this->_tpl_vars['msgs']; ?>
 <?php endif; ?>
		    <?php if ($this->_tpl_vars['errors'] != ''): ?> <?php echo $this->_tpl_vars['errors']; ?>
 <?php endif; ?>			   </td>
			 </tr>
             <?php endif; ?>
			 <tr>
			   <td height="19" class="admintopheading" colspan="3" align="center"> MANAGE ADMIN PROFILE </td>			
			 </tr> 
			 <tr>
			   <td class="add_titles" width="47%" align="right">Admin Username:</td>
			   <td  width="53%" align="left"><input name="admin_user" type="text" class="validate[required,custom[noSpecialCaracters],length[0,50]]" id="admin_user" value="<?php echo $this->_tpl_vars['admin_user']; ?>
" maxlength="50">
			   <span style="color:#F00">*</span></td>
			  </tr>	
			<tr>
			  <td align="right" class="add_titles">Admin Name: </td>
			  <td align="left"><input name="admin_name" type="text" class="validate[required,custom[onlyLetter],length[0,50]]" id="admin_name" value="<?php echo $this->_tpl_vars['admin_name']; ?>
" maxlength="50">
			  <span style="color:#F00">*</span></td>
			  </tr>	
			
			<tr>
			  
				<td colspan="2" align="center" style="padding-left:50px"><input type="submit" name="submitAdmin" value="Update" class="btn">&nbsp;<input type="reset" name="reset" value=" Reset " class="btn"></td>
			</tr>
		  </table> 
	</td>
  </tr>
</table>																				
</form>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>