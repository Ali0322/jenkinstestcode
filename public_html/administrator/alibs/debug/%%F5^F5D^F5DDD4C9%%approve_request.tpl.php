<?php /* Smarty version 2.6.12, created on 2022-02-24 09:20:27
         compiled from reportstpl/approve_request.tpl */ ?>
<table width="700px" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td height="25" align="left" valign="top">&nbsp;</td>
  </tr>
  <tr>
    <td height="19" align="center">&nbsp;</td>
  </tr>
  <tr>
    <td height="44" align="center"  valign="top" style="padding-bottom:50px;"><form name="ar" id="ar" method="post" action="approve_request.php">
        <table width="100%" border="0" cellspacing="4" cellpadding="2" align="center" class="outer_table">
          <tr>
            <td colspan="3" valign="top" class="admintopheading"><strong>Update Trip Milage </strong></td>
          </tr>
          <tr>
            <td valign="top" class="labeltxt">&nbsp;</td>
            <td colspan="2"><input type="hidden" name="tid" value="<?php echo $this->_tpl_vars['tid']; ?>
"></td>
          </tr>
          <tr>
	   <td width="38%" align="right" valign="top" class="labeltxt"><strong>Trip Type:</strong>&nbsp;&nbsp;</td>	               <td width="62%" colspan="2" align="left"><?php echo $this->_tpl_vars['dt']['0']['triptype']; ?>
</td>
		</tr>
        <tr>
	   <td width="38%" align="right" valign="top" class="labeltxt">&nbsp;&nbsp;</td>
       <td width="62%" colspan="2" align="left"></td>
		</tr>
			<tr> 
			  <td width="38%" align="right" valign="top" class="labeltxt"><strong>Pick Up Address:</strong>&nbsp;&nbsp;</td>              <td width="62%" colspan="2" align="left"><?php echo $this->_tpl_vars['dt']['0']['pickaddr']; ?>
</td>
            </tr>
			<tr>
	   <td width="38%" align="right" valign="top" class="labeltxt"><strong>Destination Address:</strong>&nbsp;&nbsp;</td>	               <td width="62%" colspan="2" align="left"><?php echo $this->_tpl_vars['dt']['0']['destination']; ?>
</td>
            </tr>
<?php if ($this->_tpl_vars['dt']['0']['triptype'] == 'Three Way' || $this->_tpl_vars['dt']['0']['triptype'] == 'Four Way' || $this->_tpl_vars['dt']['0']['triptype'] == 'Five Way'): ?><tr>
<td width="38%" align="right" valign="top" class="labeltxt"><strong>Second Destination Address:</strong>&nbsp;&nbsp;</td>	           <td width="62%" colspan="2" align="left"><?php echo $this->_tpl_vars['dt']['0']['three_address']; ?>
</td>
</tr>
<?php endif; ?>
<?php if ($this->_tpl_vars['dt']['0']['triptype'] == 'Four Way' || $this->_tpl_vars['dt']['0']['triptype'] == 'Five Way'): ?><tr>
<td width="38%" align="right" valign="top" class="labeltxt"><strong>Third Destination Address:</strong>&nbsp;&nbsp;</td>	           <td width="62%" colspan="2" align="left"><?php echo $this->_tpl_vars['dt']['0']['four_address']; ?>
</td>
</tr>
<?php endif; ?>
<?php if ($this->_tpl_vars['dt']['0']['triptype'] == 'Five Way'): ?><tr>
<td width="38%" align="right" valign="top" class="labeltxt"><strong>Forth Destination Address:</strong>&nbsp;&nbsp;</td>	           <td width="62%" colspan="2" align="left"><?php echo $this->_tpl_vars['dt']['0']['five_address']; ?>
</td>
</tr>
<?php endif; ?>

<?php if ($this->_tpl_vars['dt']['0']['triptype'] == 'Round Trip' || $this->_tpl_vars['dt']['0']['triptype'] == 'Three Way' || $this->_tpl_vars['dt']['0']['triptype'] == 'Four Way' || $this->_tpl_vars['dt']['0']['triptype'] == 'Five Way'): ?><tr>
<td width="38%" align="right" valign="top" class="labeltxt"><strong>Last Destination Address:</strong>&nbsp;&nbsp;</td>	           <td width="62%" colspan="2" align="left"><?php echo $this->_tpl_vars['dt']['0']['backto']; ?>
</td>
</tr>
<?php endif; ?>
          <tr>
	   <td width="38%" align="right" valign="top" class="labeltxt"><strong>Miles String:</strong>&nbsp;&nbsp;</td>	               <td width="62%" colspan="2" align="left">
       <input name="miles1" id="miles1" value="<?php echo $this->_tpl_vars['miles1']; ?>
" size="6" maxlength="7" onkeyup="totalmiles();" />
       <?php if ($this->_tpl_vars['dt']['0']['triptype'] == 'Round Trip' || $this->_tpl_vars['dt']['0']['triptype'] == 'Three Way' || $this->_tpl_vars['dt']['0']['triptype'] == 'Four Way' || $this->_tpl_vars['dt']['0']['triptype'] == 'Five Way'): ?>
       <input name="miles2" id="miles2" value="<?php echo $this->_tpl_vars['miles2']; ?>
" size="6" maxlength="7" onkeyup="totalmiles();" />
       <?php endif; ?>
       <?php if ($this->_tpl_vars['dt']['0']['triptype'] == 'Three Way' || $this->_tpl_vars['dt']['0']['triptype'] == 'Four Way' || $this->_tpl_vars['dt']['0']['triptype'] == 'Five Way'): ?>
       <input name="miles3" id="miles3" value="<?php echo $this->_tpl_vars['miles3']; ?>
" size="6" maxlength="7" onkeyup="totalmiles();" />
       <?php endif; ?>
       <?php if ($this->_tpl_vars['dt']['0']['triptype'] == 'Four Way' || $this->_tpl_vars['dt']['0']['triptype'] == 'Five Way'): ?>
       <input name="miles4" id="miles4" value="<?php echo $this->_tpl_vars['miles4']; ?>
" size="6" maxlength="7" onkeyup="totalmiles();" />
       <?php endif; ?>
       <?php if ($this->_tpl_vars['dt']['0']['triptype'] == 'Five Way'): ?>
       <input name="miles5" id="miles5" value="<?php echo $this->_tpl_vars['miles5']; ?>
" size="6" maxlength="7" onkeyup="totalmiles();" />
       <?php endif; ?> (You can change these miles.)
 </td>
		</tr>
        <tr>
<td width="38%" align="right" valign="top" class="labeltxt"><strong>Loaded Miles:</strong></td>
<td width="62%" colspan="2" align="left"><input type="text" name="loadedmilage" id="loadedmilage" size="10" value="<?php echo $this->_tpl_vars['loadedmilage']; ?>
" class="inputTxtField" readonly="readonly" /></td>
          </tr>
          <tr>
<td width="38%" align="right" valign="top" class="labeltxt"><strong>UnLoaded Miles:</strong></td>
<td width="62%" colspan="2" align="left"><input type="text" name="unloadmilage" id="unloadmilage" size="10" value="<?php echo $this->_tpl_vars['unloadmilage']; ?>
" class="inputTxtField" /></td>
          </tr>
           <tr>
<td width="38%" align="right" valign="top" class="labeltxt"><strong>Total Miles:</strong></td>
<td width="62%" colspan="2" align="left"><input type="text" name="totmilages" id="totmilages" size="10" readonly="readonly" value="<?php echo $this->_tpl_vars['totmilages']; ?>
" class="inputTxtField" /></td>
          </tr>
          <tr>
<td width="38%" align="right" valign="top" class="labeltxt"><strong>Free Miles:</strong></td>
<td width="62%" colspan="2" align="left"><input type="text" name="freemiles" id="freemiles" size="10" readonly="readonly" value="<?php echo $this->_tpl_vars['freemiles']; ?>
" class="inputTxtField" /></td>
          </tr>
         
          <tr>
            <td width="38%" align="right" valign="top" class="labeltxt"><strong>Wait Time?:</strong>&nbsp;&nbsp;</td>
            <td width="62%" colspan="2" align="left"><input type="text" name="wait_time" id="wait_time" value="<?php echo $this->_tpl_vars['dt']['0']['wait_time']; ?>
" size="10" maxlength="8" class="inputTxtField" />HH:MM:SS 
            </td>
          </tr>
          <tr>
            <td width="38%" align="right" valign="top" class="labeltxt"><strong>No Show Apply?:</strong>&nbsp;&nbsp;</td>
            <td width="62%" colspan="2" align="left"><select name="noshow">
            										<option value="0" <?php if ($this->_tpl_vars['dt']['0']['noshow'] == '0'): ?>selected<?php endif; ?>>No</option>
                                                    <option value="1" <?php if ($this->_tpl_vars['dt']['0']['noshow'] == '1'): ?>selected<?php endif; ?>>Yes</option>
                                                    </select> Auto apply
            </td>
          </tr>
         <!-- <tr>
            <td width="38%" align="right" valign="top" class="labeltxt"><strong>Stretcher Used?:</strong>&nbsp;&nbsp;</td>
            <td width="62%" colspan="2" align="left"><select name="stretcher">
            										<option value="No" <?php if ($this->_tpl_vars['dt']['0']['stretcher'] == 'No'): ?>selected<?php endif; ?>>No</option>
                                                    <option value="Yes" <?php if ($this->_tpl_vars['dt']['0']['stretcher'] == 'Yes'): ?>selected<?php endif; ?>>Yes</option>
                                                    </select> Auto apply
            </td>
          </tr>-->
           <tr>
            <td width="38%" align="right" valign="top" class="labeltxt"><strong>Bariatric Stretcher Used?:</strong>&nbsp;&nbsp;</td>
            <td width="62%" colspan="2" align="left"><select name="bar_stretcher">
            										<option value="No" <?php if ($this->_tpl_vars['dt']['0']['bar_stretcher'] == 'No'): ?>selected<?php endif; ?>>No</option>
                                                    <option value="Yes" <?php if ($this->_tpl_vars['dt']['0']['bar_stretcher'] == 'Yes'): ?>selected<?php endif; ?>>Yes</option>
                                                    </select> Auto apply
            </td>
          </tr>
           <tr>
            <td width="38%" align="right" valign="top" class="labeltxt"><strong>2 Man Team Used?:</strong>&nbsp;&nbsp;</td>
            <td width="62%" colspan="2" align="left"><select name="dstretcher">
            										<option value="No" <?php if ($this->_tpl_vars['dt']['0']['dstretcher'] == 'No'): ?>selected<?php endif; ?>>No</option>
                                                    <option value="Yes" <?php if ($this->_tpl_vars['dt']['0']['dstretcher'] == 'Yes'): ?>selected<?php endif; ?>>Yes</option>
                                                    </select> Auto apply
            </td>
          </tr>
           <tr>
            <td width="38%" align="right" valign="top" class="labeltxt"><strong>0xygen Charges Apply?:</strong>&nbsp;&nbsp;</td>
            <td width="62%" colspan="2" align="left"><select name="oxygen">
            										<option value="No" <?php if ($this->_tpl_vars['dt']['0']['oxygen'] == 'No'): ?>selected<?php endif; ?>>No</option>
                                                    <option value="Yes" <?php if ($this->_tpl_vars['dt']['0']['oxygen'] == 'Yes'): ?>selected<?php endif; ?>>Yes</option>
                                                    </select> Auto apply
            </td>
          </tr>
          <tr>
            <td width="38%" align="right" valign="top" class="labeltxt"><strong>Wheel Chair Rental Fee Apply?:</strong>&nbsp;&nbsp;</td>
            <td width="62%" colspan="2" align="left"><select name="dwchair">
            										<option value="No" <?php if ($this->_tpl_vars['dt']['0']['dwchair'] == 'No'): ?>selected<?php endif; ?>>No</option>
                                                    <option value="Yes" <?php if ($this->_tpl_vars['dt']['0']['dwchair'] == 'Yes'): ?>selected<?php endif; ?>>Yes</option>
                                                    </select> Auto apply
            </td>
          </tr>
          <tr>
            <td width="38%" align="right" valign="top" class="labeltxt"><strong>After Hours Fee Apply?:</strong>&nbsp;&nbsp;</td>
            <td width="62%" colspan="2" align="left"><select name="after_hours">
            										<option value="0" <?php if ($this->_tpl_vars['dt']['0']['after_hours'] == '0'): ?>selected<?php endif; ?>>No</option>
                                                    <option value="1" <?php if ($this->_tpl_vars['dt']['0']['after_hours'] == '1'): ?>selected<?php endif; ?>>Yes</option>
                                                    </select> Auto apply
            </td>
          </tr>
         
         
          
          
           <?php if ($this->_tpl_vars['dt']['0']['capped_miles'] == '1'): ?>
 <tr><td></td><td colspan="2"><span style="color:#F00; font-size:14px; padding:5 5 5 5px; text-align:center;">&raquo; CAPPED MILES OSERVED</span></td></tr>
 <input type="hidden" name="capped_miles" value="<?php echo $this->_tpl_vars['dt']['0']['capped_miles']; ?>
"  />
 <?php endif; ?>
           <tr>
            <td width="38%" align="right" valign="top" class="labeltxt"><strong>Miscellaneous Charges:</strong>&nbsp;&nbsp;</td>
            <td width="62%" colspan="2" align="left"><input type="text" name="miscellaneous_charges" id="miscellaneous_charges" value="<?php echo $this->_tpl_vars['dt']['0']['miscellaneous_charges']; ?>
" size="10" maxlength="8" class="inputTxtField" /> $ 
            </td>
          </tr>
           <tr>
            <td width="38%" align="right" valign="top" class="labeltxt"><strong>Total Charges:</strong>&nbsp;&nbsp;</td>
            <td width="62%" colspan="2" align="left"><input type="text" name="totcharges" id="totcharges" size="10" value="<?php echo $this->_tpl_vars['dt']['0']['charges']; ?>
" class="inputTxtField" readonly="true" /> 
              $</td>
          </tr>
          <tr>
            <td valign="top">&nbsp;</td>
            <td colspan="2"><input type="submit" name="submit" value="Submit" class="btn"  />
              <input type="hidden" name="date" id="date" value="<?php echo $this->_tpl_vars['tdate']; ?>
" />
            
              
             <!-- <input type="hidden" name="afterhfee" value="<?php echo $this->_tpl_vars['dt']['0']['afterhfee']; ?>
" />-->
              <input type="reset" name="reset" value="Reset" class="btn"  /></td>
          </tr>
        </table>
      </form></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
</table>
<script>
$('#wait_time').mask('29:59:59');
</script>