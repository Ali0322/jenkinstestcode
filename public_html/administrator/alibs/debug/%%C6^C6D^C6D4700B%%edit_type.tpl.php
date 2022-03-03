<?php /* Smarty version 2.6.12, created on 2021-08-03 17:59:08
         compiled from mntncetpl/edit_type.tpl */ ?>
<?php echo '

<script>

   $(document).ready(function(){

    $(\'#editmentype\').validationEngine();

  });

</script>

'; ?>


<table width="100%" border="0" align="center" cellpadding="4" cellspacing="0">

        <tr>

          <td align="center" class="headingbg"><?php if ($this->_tpl_vars['msgs'] != ''): ?> <?php echo $this->_tpl_vars['msgs']; ?>
 <?php endif; ?>

		  <?php if ($this->_tpl_vars['errors'] != ''): ?> <?php echo $this->_tpl_vars['errors']; ?>
 <?php endif; ?> </td>

        </tr>

        <tr>

          <td class="admintopheading">Edit Maintenance Type </td>

        </tr>

        <tr>

          <td align="left" valign="top">

		  <table width="650" border="0" cellspacing="0" cellpadding="0" align="center">

  <tr>

    <td width="17" align="left"><img src="../images/1.jpg" alt="d" width="17" height="17" /></td>

    <td align="left" background="../images/2.jpg"></td>

    <td width="17" align="left"><img src="../images/3.jpg" alt="d" width="17" height="17" /></td>

  </tr>

  <tr>

    <td align="left" valign="top" background="../images/4.jpg">&nbsp;</td>

    <td align="left" valign="top" width="100%">

	<form name="editmentype" id="editmentype" method="post" action="edit_type.php">

								<table width="650" border="0" cellspacing="2" cellpadding="2">

								  <tr>

									<td colspan="2"></td>

								  </tr>

								  <tr>

									<td width="26%" height="25" align="right" class="labeltxt"><strong>Type Name:</strong></td>

									<td width="74%" height="25"><input name="mentype" type="text" class="validate[required,custom[onlyLetter]] inputTxtField" id="mentype" value="<?php echo $this->_tpl_vars['mentype']; ?>
" maxlength="50"  />

								    *

								    <input type="hidden" name="hidmentype" id="hidmentype" value="<?php echo $this->_tpl_vars['hidmentype']; ?>
" />

								    <input type="hidden" name="id" id="id" value="<?php echo $this->_tpl_vars['id']; ?>
" /></td>

								  </tr>

								  <tr>

									<td height="25">&nbsp;</td>

									<td height="25">

									<input type="submit" value="Save Changes" name="editmentype" id="editmentype" class="btn" /></td>

								  </tr>

			  </table>

								</form></td>

    <td align="left" valign="top" background="../images/5.jpg">&nbsp;</td>

  </tr>

  <tr>

    <td align="left" valign="top"><img src="../images/6.jpg" alt="d" width="17" height="17" /></td>

    <td align="left" valign="top" background="../images/7.jpg">&nbsp;</td>

    <td align="left" valign="top"><img src="../images/8.jpg" alt="d" width="17" height="17" /></td>

  </tr>

</table>		  </td>

        </tr>

      </table>