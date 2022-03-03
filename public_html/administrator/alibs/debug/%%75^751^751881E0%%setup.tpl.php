<?php /* Smarty version 2.6.12, created on 2020-05-20 18:54:35
         compiled from setup.tpl */ ?>
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
$(document).ready(function() {
	$("#ts,#te").mask("29:59:59");
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
                              <td height="19" align="center" class="admintopheading">Setup Basic Setting</td>
                            </tr>
                            <tr>
<td height="19" align="center">&nbsp;</td>
                            </tr>
                            <tr>
                              <td height="44" align="center"  valign="top" style="padding-bottom:50px;">
						  <form name="add_user" id="add_user" method="post" action="" enctype="multipart/form-data">
	  <table width="90%" border="0" cellspacing="2" cellpadding="2">
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
<td height="25" align="left" class="labeltxt adjust"><strong>Day Start Time: </strong></td><td>	
<input type="text" name="starttime" value="<?php echo $this->_tpl_vars['udata2']['starttime']; ?>
" id="ts" maxlength="8"  /></td>
</tr>
<tr>
<td height="25" align="left" class="labeltxt adjust"><strong>Select Driver: </strong></td><td>	
<input type="radio" name="select_all_dv" value="yes" <?php if ($this->_tpl_vars['udata']['select_all_dv'] == 'yes'): ?> checked="checked" <?php endif; ?> />All 
<input type="radio" name="select_all_dv" value="no" <?php if ($this->_tpl_vars['udata']['select_all_dv'] == 'no'): ?> checked="checked" <?php endif; ?> />Desirable</td>
</tr>
<tr>
<td height="25" align="left" class="labeltxt adjust"><strong>Start Location: </strong></td><td>	
<select name="start_location" >
				  <option <?php if ($this->_tpl_vars['udata']['start_location'] == 'office'): ?> selected="selected" <?php endif; ?> value="office" >From Office</option>
				  <option <?php if ($this->_tpl_vars['udata']['start_location'] == 'home'): ?> selected="selected" <?php endif; ?> value="home" >From Home</option></select>
				  </td>
</tr>
<tr>
<td height="25" align="left" class="labeltxt adjust"><strong>Enable Multiple Run &amp; Route to Same Distination: </strong></td><td>	
<input type="radio" name="multi_run_same_loc" value="yes" <?php if ($this->_tpl_vars['udata']['multi_run_same_loc'] == 'yes'): ?> checked="checked" <?php endif; ?> />Yes 
<input type="radio" name="multi_run_same_loc" value="no" <?php if ($this->_tpl_vars['udata']['multi_run_same_loc'] == 'no'): ?> checked="checked" <?php endif; ?> />No</td>
</tr>

<tr>
<td height="25" align="left" class="labeltxt adjust"><strong>Enable Multiple Run &amp; Route to Different Distination:</strong> </td><td>	
<input type="radio" name="multi_run_diff_loc" value="yes" <?php if ($this->_tpl_vars['udata']['multi_run_diff_loc'] == 'yes'): ?> checked="checked" <?php endif; ?> />Yes 
<input type="radio" name="multi_run_diff_loc" value="no" <?php if ($this->_tpl_vars['udata']['multi_run_diff_loc'] == 'no'): ?> checked="checked" <?php endif; ?> />No</td>
</tr>
<tr>
<td height="25" align="left" class="labeltxt adjust"><strong>Consider Live Trafic Google API:</strong> </td><td>	
<input type="radio" name="live_trafic_ip" value="yes" <?php if ($this->_tpl_vars['udata']['live_trafic_ip'] == 'yes'): ?> checked="checked" <?php endif; ?> />Yes 
<input type="radio" name="live_trafic_ip" value="no" <?php if ($this->_tpl_vars['udata']['live_trafic_ip'] == 'no'): ?> checked="checked" <?php endif; ?> />No</td>
</tr>
<tr>
<td height="25" align="left" class="labeltxt adjust"><strong>Time Cap Window: </strong></td><td>	
<input type="text" name="time_cap_window" value="<?php echo $this->_tpl_vars['udata']['time_cap_window']; ?>
" maxlength="2" size="3"  /> Time in Minutes</td>
</tr>
<tr>
<td height="25" align="left" class="labeltxt adjust"><strong>Mile Cap Window:</strong> </td><td>	
<input type="text" name="mile_cap_window" value="<?php echo $this->_tpl_vars['udata']['mile_cap_window']; ?>
" maxlength="2" size="3"  /></td>
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
		  <input type="submit" name="add_user" id="add_user" value="Update Setting" class="btn" />
		  <input type="reset" name="reset" id="reset" value="   Reset   " class="btn"  />
 </td>
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