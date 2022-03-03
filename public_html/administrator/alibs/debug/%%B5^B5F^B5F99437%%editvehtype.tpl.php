<?php /* Smarty version 2.6.12, created on 2020-06-18 15:47:43
         compiled from vehtpl/editvehtype.tpl */ ?>
<?php echo '
<style type="text/css">



<!--



.est {



	color: #F00;



}



-->



</style>
<script>



   $(document).ready(function(){

    $(\'#editvehtype\').validationEngine();

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
    <td class="admintopheading">Edit Vehicle Type </td>
  </tr>
  <tr>
    <td align="left" valign="top"><table width="650" border="0" cellspacing="0" cellpadding="0" align="center">
        <tr>
          <td width="17" align="left"><img src="../images/1.jpg" alt="d" width="17" height="17" /></td>
          <td align="left" background="../images/2.jpg"></td>
          <td width="17" align="left" ><img src="../images/3.jpg" alt="d" width="17" height="17" /></td>
        </tr>
        <tr>
          <td align="left" valign="top" background="../images/4.jpg">&nbsp;</td>
          <td align="left" valign="top" width="100%"><form name="editvehtype" id="editvehtype" method="post" action="editvehtype.php?id=<?php echo $this->_tpl_vars['id']; ?>
">
              <table width="650" border="0" cellspacing="2" cellpadding="2">
                <tr>
                  <td colspan="2"></td>
                </tr>
                <tr>
                  <td width="26%" height="25" align="right" class="labeltxt"><strong>Vehicle Code:</strong></td>
                  <td width="74%" height="25"><input name="vcode" type="text"  class="validate[required] inputTxtField" id="vcode" value="<?php echo $this->_tpl_vars['vcode']; ?>
" maxlength="20"/>
                    <span class="est">*</span></td>
                </tr>
                <tr>
                  <td width="26%" height="25" align="right" class="labeltxt"><strong>Vehicle type:</strong></td>
                  <td width="74%" height="25"><input name="vehtype" type="text" class="validate[required] inputTxtField" id="vehtype" value="<?php echo $this->_tpl_vars['vehtype']; ?>
" maxlength="200"  />
                    <span class="est">*</span>
                    <input type="hidden" name="hidvehtype" id="hidvehtype" value="<?php echo $this->_tpl_vars['hidvehtype']; ?>
" /></td>
                </tr>
                <tr>
                  <td width="26%" height="25" align="right" class="labeltxt"><strong>Pickup Charges:</strong></td>
                  <td width="74%" height="25"><input name="pickup_ch" type="text" class=" inputTxtField" id="pickup_ch" value="<?php echo $this->_tpl_vars['pickup_ch']; ?>
" maxlength="200"  />
                    <span class="est">*</span></td>
                </tr>
                 <tr>
                  <td width="26%" height="25" align="right" class="labeltxt"><strong>Mile Charges:</strong></td>
                  <td width="74%" height="25"><input name="permile_ch" type="text" class=" inputTxtField" id="permile_ch" value="<?php echo $this->_tpl_vars['permile_ch']; ?>
" maxlength="200"  />
                    <span class="est">*</span></td>
                </tr>
                <tr>
                  <td width="26%" height="25" align="right" class="labeltxt"><strong>Wait Time Charges(per minute):</strong></td>
                  <td width="74%" height="25"><input name="waittime_ch" type="text" class=" inputTxtField" id="waittime_ch" value="<?php echo $this->_tpl_vars['waittime_ch']; ?>
" maxlength="200"  />
                    <span class="est">*</span></td>
                </tr>
                <tr>
                  <td width="26%" height="25" align="right" class="labeltxt"><strong>No Show Fee:</strong></td>
                  <td width="74%" height="25"><input name="noshow_ch" type="text" class=" inputTxtField" id="noshow_ch" value="<?php echo $this->_tpl_vars['noshow_ch']; ?>
" maxlength="200"  />
                    <span class="est">*</span></td>
                </tr>
                <tr>
                  <td width="26%" height="25" align="right" class="labeltxt"><strong>After Hours Fee:</strong></td>
                  <td width="74%" height="25"><input name="afterhour_ch" type="text" class=" inputTxtField" id="afterhour_ch" value="<?php echo $this->_tpl_vars['afterhour_ch']; ?>
" maxlength="200"  />
                    <span class="est">*</span></td>
                </tr>
                <!--<tr>
                  <td width="26%" height="25" align="right" class="labeltxt"><strong>Strecher Charges:</strong></td>
                  <td width="74%" height="25"><input name="stretcher_ch" type="text" class=" inputTxtField" id="stretcher_ch" value="<?php echo $this->_tpl_vars['stretcher_ch']; ?>
" maxlength="200"  />
                    <span class="est">*</span></td>
                </tr>-->
                <tr>
                  <td width="26%" height="25" align="right" class="labeltxt"><strong>2 Man Team:</strong></td>
                  <td width="74%" height="25"><input name="dstretcher_ch" type="text" class=" inputTxtField" id="dstretcher_ch" value="<?php echo $this->_tpl_vars['dstretcher_ch']; ?>
" maxlength="200"  />
                    <span class="est">*</span></td>
                </tr>
                <tr>
                  <td width="26%" height="25" align="right" class="labeltxt"><strong>Bariatric Strecher Charges:</strong></td>
                  <td width="74%" height="25"><input name="bstretcher_ch" type="text" class=" inputTxtField" id="bstretcher_ch" value="<?php echo $this->_tpl_vars['bstretcher_ch']; ?>
" maxlength="200"  />
                    <span class="est">*</span></td>
                </tr>
                <tr>
                  <td width="26%" height="25" align="right" class="labeltxt"><strong>Oxygen Charges:</strong></td>
                  <td width="74%" height="25"><input name="oxygen_ch" type="text" class=" inputTxtField" id="oxygen_ch" value="<?php echo $this->_tpl_vars['oxygen_ch']; ?>
" maxlength="200"  />
                    <span class="est">*</span></td>
                </tr>
                <tr>
                  <td width="36%" height="25" align="right" class="labeltxt"><strong>Wheel Chair Rental Charges:</strong></td>
                  <td width="74%" height="25"><input name="doublewheel_ch" type="text" class=" inputTxtField" id="doublewheel_ch" value="<?php echo $this->_tpl_vars['doublewheel_ch']; ?>
" maxlength="200"  />
                    <span class="est">*</span></td>
                </tr>
                
                <!--	  <tr>



									<td width="26%" height="25" align="right" class="labeltxt"><strong>Base Charges:</strong></td>



									<td width="74%" height="25"><input name="bcharges" type="text" class="validate[required] inputTxtField" id="bcharges" value="<?php if ($this->_tpl_vars['bcharges'] != ''):  echo $this->_tpl_vars['bcharges'];  else: ?>0.0<?php endif; ?>" maxlength="10" size="8" />&nbsp;<span class="SmallnoteTxt">* </span>&nbsp;(<b>per trip</b>)



								    <span class="est">*</span></td>



								  </tr>
								  
								   <tr>



									<td width="26%" height="25" align="right" class="labeltxt"><strong>Mile Charges:</strong></td>



									<td width="74%" height="25"><input name="mcharges" type="text" class="validate[required] inputTxtField" id="mcharges" value="<?php if ($this->_tpl_vars['mcharges'] != ''):  echo $this->_tpl_vars['mcharges'];  else: ?>0.0<?php endif; ?>" maxlength="10" size="8" />&nbsp;<span class="SmallnoteTxt">* </span>&nbsp;(<b>per mile</b>)



								    <span class="est">*</span></td>



								  </tr>
								  
								   <tr>



									<td width="26%" height="25" align="right" class="labeltxt"><strong>Wait Time Charges:</strong></td>



									<td width="74%" height="25"><input name="wtcharges" type="text" class="validate[required] inputTxtField" id="wtcharges" value="<?php if ($this->_tpl_vars['wtcharges'] != ''):  echo $this->_tpl_vars['wtcharges'];  else: ?>0.0<?php endif; ?>" maxlength="10" size="8" />&nbsp;<span class="SmallnoteTxt">* </span>&nbsp;(<b>per hour</b>)



								    <span class="est">*</span></td>



								  </tr>
								  
								   <tr>



									<td width="26%" height="25" align="right" class="labeltxt"><strong>Additional Charges:</strong></td>



									<td width="74%" height="25"><input name="acharges" type="text" class="inputTxtField" id="acharges" value="<?php if ($this->_tpl_vars['acharges'] != ''):  echo $this->_tpl_vars['acharges'];  else: ?>0.0<?php endif; ?>" maxlength="10" size="8" />&nbsp;<span class="SmallnoteTxt">* </span>&nbsp;(<b>per trip</b>)



								    <span class="est">*</span></td>



								  </tr>-->
                
                <tr>
                  <td height="25">&nbsp;</td>
                  <td height="25"><input type="submit" value="Save Changes" name="editvehtype" class="btn"/></td>
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
      </table></td>
  </tr>
</table>