<?php /* Smarty version 2.6.12, created on 2020-03-09 12:48:07
         compiled from drvtpl/editdrvtype.tpl */ ?>
<?php echo '

<style type="text/css">

<!--

.estaric {

	color: #F00;

}

-->

</style>

<script>

   $(document).ready(function(){
    $(\'#editdrvtype\').validationEngine();
	$(\'#drvduration\').mask(\'19\');
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

          <td class="admintopheading">Edit Driver Type </td>

        </tr>

        <tr>

          <td align="left" valign="top">

		  <table width="650" border="0" cellspacing="0" cellpadding="0" align="center">

  <tr>

    <td width="17" align="left" valign="top"><img src="../images/1.jpg" alt="d" width="17" height="17" /></td>

    <td align="left" valign="top" background="../images/2.jpg">&nbsp;</td>

    <td width="17" align="left" valign="top"><img src="../images/3.jpg" alt="d" width="17" height="17" /></td>

  </tr>

  <tr>

    <td align="left" valign="top" background="../images/4.jpg">&nbsp;</td>

    <td align="left" valign="top" width="100%">

	<form name="editdrvtype" id="editdrvtype" method="post" action="editdrvtype.php?id=<?php echo $this->_tpl_vars['id']; ?>
">

								<table width="650" border="0" cellspacing="2" cellpadding="2">

								  <tr>

									<td colspan="2"></td>

								  </tr>

								  <tr>

									<td width="26%" height="25" align="right" class="labeltxt"><strong>Driver type: </strong></td>
									<td width="74%" height="25"><input name="drvtype" type="text" class="validate[required,custom[onlyLetter]]" id="drvtype" value="<?php echo $this->_tpl_vars['drvtype']; ?>
" maxlength="15"  />

								    <span class="estaric">*</span>									  <input type="hidden" name="hiddrvtype" id="hiddrvtype" value="<?php echo $this->_tpl_vars['hiddrvtype']; ?>
" /></td>

								  </tr>

								 <tr>

								    <td height="25" align="right" class="labeltxt"><strong>Job Duration:</strong></td>

								    <td height="25"><input type="text" name="drvduration" id="drvduration" value="<?php echo $this->_tpl_vars['drvduration']; ?>
" class="validate[required,custom[onlyNumber]] inputTxtField digits" maxlength="2" />

								      <span class="estaric">*</span>hours</td>

							      </tr> 

								  <tr>

									<td height="25">&nbsp;</td>

									<td height="25">

									<input type="submit" value="Save Changes" name="editvehtype" class="btn"/></td>

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