<?php /* Smarty version 2.6.12, created on 2020-06-08 22:48:59
         compiled from contact_details.tpl */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "mainhead.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php echo '
<script type="text/javascript">
$(document).ready(function() {
	$("#phone").mask("(***) ***-****");
	$("#fax").mask("(***) ***-****");
	$("#add_user").validationEngine();
});
</script>
'; ?>

<table id="table1" class="outer_table"   border="0" cellspacing="0" cellpadding="0" align="center" bgcolor="#FFFFFF" style="margin-bottom:10px;">
  <tr>
    <td>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
                            <tr>
                              <td height="25" align="right" valign="top">[<a href="javascript:history.back();">Back</a>]</td>
                            </tr>
                            
                            <tr>
                              <td height="19" align="center" class="admintopheading"> Contact Details</td>
                            </tr>


							
                            <tr>
<td height="19" align="center">&nbsp;</td>
                            </tr>
                            <tr>
                              <td height="44" align="center"  valign="top" style="padding-bottom:50px;">
						  <form name="add_user" id="add_user" method="post" action="contact_details.php">
	  <table width="700" border="0" cellspacing="2" cellpadding="2">
        <tr>
          <td colspan="3" align="center" valign="top"><?php if ($this->_tpl_vars['msgs'] != ''): ?><font color="#FF0000" style="font-weight:bold"><?php echo $this->_tpl_vars['msgs']; ?>
</font><?php endif; ?></td>
        </tr>       
        <tr>
          <td colspan="3" align="center" valign="top">
          <table width="90%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="17" align="left" valign="top"><img src="images/1.jpg" width="17" height="17" /></td>
        <td align="left" valign="top" background="images/2.jpg">&nbsp;</td>
        <td width="17" align="left" valign="top"><img src="images/3.jpg" width="17" height="17" /></td>
      </tr>
      <tr>
        <td align="left" valign="top" background="images/4.jpg">&nbsp;</td>
        <td align="left" valign="top"><table width="100%" border="0" cellspacing="2" cellpadding="2">
  <tr>
    <td colspan="2">&nbsp;</td>
    </tr>
  <tr>
    <td colspan="2" height="25" align="left" class="labeltxt adjust"><b>Title : </b><span style="color:#FF0000">*</span><br /><input name="title" type="text" id="title" value="<?php echo $this->_tpl_vars['udata'][0]['title']; ?>
" size="40" maxlength="50" class="validate[required,custom[],length[0,50]]" /></td>    
  </tr>
  <tr>
    <td colspan="2" width="29%" height="25" align="left" class="labeltxt adjust"><b>Address : </b><span style="color:#FF0000">*</span><br /><input name="address" type="text" class="validate[required,length[0,100]]" id="address" value="<?php echo $this->_tpl_vars['udata'][0]['address']; ?>
" size="40" maxlength="100" /></td>
  </tr>
 <tr>
    <td colspan="2" width="29%" height="25" align="left" class="labeltxt adjust"><b>Address 2: </b><span style="color:#FF0000">*</span><br /><input name="address2" type="text" class="validate[length[0,100]]" id="address2" value="<?php echo $this->_tpl_vars['udata'][0]['address2']; ?>
" size="40" maxlength="100" /></td>
  </tr> 
    <tr>
    <td colspan="2" width="29%" height="25" align="left" class="labeltxt adjust"><b>City :</b><span style="color:#FF0000">*</span><br /><input name="city" type="text" class="validate[required,custom[onlyLetter],length[0,50]]" id="city" value="<?php echo $this->_tpl_vars['udata'][0]['city']; ?>
" size="40" maxlength="50" /></td>
  </tr>
    <tr>
    <td colspan="2" width="29%" height="25" align="left" class="labeltxt adjust"><b>State/Province :</b> <span style="color:#FF0000">*</span><br /><input name="state" type="text" class="validate[required,custom[],length[0,50]]" id="state" value="<?php echo $this->_tpl_vars['udata'][0]['state']; ?>
" size="40" maxlength="50" /></td>
  </tr>
    <tr>
    <td colspan="2" width="29%" height="25" align="left" class="labeltxt adjust"><b>ZIP : </b><span style="color:#FF0000">*</span><br /><input name="zip" type="text" class="validate[required,length[0,12]]" id="zip" value="<?php echo $this->_tpl_vars['udata'][0]['zip']; ?>
" size="40" maxlength="10" /></td>
  </tr>
  <tr>
    <td colspan="2" height="25" align="left" class="labeltxt adjust"><b>Phone : </b><span style="color:#FF0000">*</span><br /><input name="phone" type="text" class="validate[required]" id="phone" value="<?php echo $this->_tpl_vars['udata'][0]['phone']; ?>
" size="40" /></td>
  </tr>
  <tr>
    <td colspan="2" height="25" align="left" class="labeltxt adjust"><b>Fax : </b><span style="color:#FF0000">*</span><br /><input name="fax" type="text" class="validate[required]" id="fax" value="<?php echo $this->_tpl_vars['udata'][0]['fax']; ?>
" size="40" /></td>
  </tr>
  <tr>
    <td colspan="2" height="25" align="left" class="labeltxt adjust"><b>Email : </b><span style="color:#FF0000">*</span><br /><input name="email" type="text" class="validate[required,custom[email],length[0,100]]" id="email" value="<?php echo $this->_tpl_vars['udata'][0]['email']; ?>
" size="40" maxlength="100" /></td>
  </tr>
  <tr>
    <td colspan="2" height="25" align="left" class="labeltxt adjust"><b>Email (Spc): </b><span style="color:#FF0000">*</span><br /><input name="email2" type="text" class="validate[]" id="email2" value="<?php echo $this->_tpl_vars['udata'][0]['email2']; ?>
" size="40" maxlength="200" /></td>
  </tr>
  <tr>
    <td colspan="2" height="25" align="left" class="labeltxt adjust"><b>URL : </b><span style="color:#FF0000">*</span><br /><input name="url" type="text" id="url" value="<?php echo $this->_tpl_vars['udata'][0]['url']; ?>
" size="40" maxlength="100" class="validate[required]" /></td>
  </tr>
   <tr>
    <td colspan="2" height="25" align="left" class="labeltxt adjust"><b>Capped Miles : </b><span style="color:#FF0000">*</span><br /><input name="capped_miles" type="text" id="capped_miles" value="<?php echo $this->_tpl_vars['udata'][0]['capped_miles']; ?>
" size="40" maxlength="100" class="validate[required]" /></td>
  </tr>

   <tr>
    <td colspan="2" height="25" align="left" class="labeltxt adjust"><b>Time Zone : </b><span style="color:#FF0000">*</span>   Format  e.g. America/Chicago<br /><input name="time_zone" type="text" id="time_zone" value="<?php echo $this->_tpl_vars['udata'][0]['time_zone']; ?>
" size="40" maxlength="100" class="validate[required]" /></td>
  </tr>
   <tr>
    <td colspan="2" height="25" align="left" class="labeltxt adjust"><b>Geo Coordinates : </b><span style="color:#FF0000">*</span>   Format e.g 42.0058862,-88.1714097<br /><input name="google_coordinates" type="text" id="google_coordinates" value="<?php echo $this->_tpl_vars['udata'][0]['google_coordinates']; ?>
" size="40" maxlength="100" class="validate[required]" /></td>
  </tr>




</table>		</td>
        <td align="left" valign="top" background="images/5.jpg">&nbsp;</td>
      </tr>
      <tr>
        <td align="left" valign="top"><img src="images/6.jpg" width="17" height="17" /></td>
        <td align="left" valign="top" background="images/7.jpg">&nbsp;</td>
        <td align="left" valign="top"><img src="images/8.jpg" width="17" height="17" /></td>
      </tr>
    </table>    	</td>
        </tr>
        <tr>
          <td width="48" align="right" valign="top">&nbsp;</td>
          <td width="532" colspan="2" align="left" valign="top">&nbsp;</td>
        </tr>
        <tr>
          <td align="right" valign="top">&nbsp;</td>
          <td colspan="2" align="center" valign="top">
		  <input type="submit" name="add_user" id="add_user" value="Update Contact Details" class="btn" />
		  <input type="reset" name="reset" id="reset" value="   Reset   " class="btn"  />		  </td>
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
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "innerfooter.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>