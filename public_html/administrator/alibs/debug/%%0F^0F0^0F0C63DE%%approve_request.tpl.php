<?php /* Smarty version 2.6.12, created on 2020-06-16 19:53:39
         compiled from reqtpls/approve_request.tpl */ ?>
<?php echo ' 
		<script language="javascript" type="text/javascript" src="../scripts/jquery-1.2.6.js"></script>
		<script language="javascript" type="text/javascript" src="../scripts/jquery.validate.js"></script>
			  <script type="text/javascript"> 
				   function totalmiles(){
				    var m1 = parseFloat($(\'#miles1\').val());
				    var m2 = parseFloat($(\'#miles2\').val());
				    var m3 = parseFloat($(\'#miles3\').val());
				    var m4 = parseFloat($(\'#miles4\').val());
				    var m5 = parseFloat($(\'#miles5\').val());
				    //var tot = (m1+m2+m3+m4+m5);
				   //$(\'#calcmiles\').val(tot)
				   
				   //alert(m1);
				   
				   }
              </script>'; ?>


<table width="600" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td height="25" align="left" valign="top">&nbsp;</td>
  </tr>
  <tr>
    <td height="19" align="center">&nbsp;</td>
  </tr>
  <tr>
    <td height="44" align="center"  valign="top" style="padding-bottom:50px;"><form name="ar" id="ar" method="post" action="approve_request.php">
        <table width="100%" border="0" cellspacing="4" cellpadding="2" align="center">
          <tr>
            <td colspan="3" valign="top" class="admintopheading"><strong>Approve Trip Request</strong></td>
          </tr>
          <tr>
            <td valign="top" class="labeltxt">&nbsp;</td>
            <td colspan="2"><input type="hidden" name="id" value="<?php echo $this->_tpl_vars['id']; ?>
">
              <input type="hidden" name="rqid" value="<?php echo $this->_tpl_vars['rqid']; ?>
"></td>
          </tr>
          <?php if ($this->_tpl_vars['appdate'] == $this->_tpl_vars['currdate']): ?>
   <!--       <tr>
            <td width="38%" align="right" valign="top" class="labeltxt"><strong>Assign Driver:</strong>&nbsp;&nbsp;</td>
            <td width="62%" colspan="2" align="left"><select name="driver" id="driver" class="SelectBox" >
                <option value="">Select</option>
			   <?php unset($this->_sections['n']);
$this->_sections['n']['name'] = 'n';
$this->_sections['n']['loop'] = is_array($_loop=$this->_tpl_vars['drivers']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
                <option value="<?php echo $this->_tpl_vars['drivers'][$this->_sections['n']['index']]['drv_code']; ?>
" > <?php echo $this->_tpl_vars['drivers'][$this->_sections['n']['index']]['fname']; ?>
&nbsp;<?php echo $this->_tpl_vars['drivers'][$this->_sections['n']['index']]['lname']; ?>
 </option>
			   <?php endfor; endif; ?>
              </select>
              &nbsp;<span class="SmallnoteTxt">*</span></td>
          </tr>--><?php else:  endif; ?>
          <tr>
            <td align="right" valign="top" class="labeltxt">&nbsp;</td>
            <td colspan="2" align="left"><?php if ($this->_tpl_vars['msg'] != ''):  echo $this->_tpl_vars['msg'];  endif; ?></td>
          </tr>
          
          
          
          <tr>
	   <td width="38%" align="right" valign="top" class="labeltxt"><strong>Trip Type:</strong>&nbsp;&nbsp;</td>	               <td width="62%" colspan="2" align="left"><?php echo $this->_tpl_vars['ttype']; ?>
</td>
		</tr>
        <tr>
	   <td width="38%" align="right" valign="top" class="labeltxt">&nbsp;&nbsp;</td>	               <td width="62%" colspan="2" align="left"></td>
		</tr>
			<tr> 
			  <td width="38%" align="right" valign="top" class="labeltxt"><strong>Pick Up Address:</strong>&nbsp;&nbsp;</td>              <td width="62%" colspan="2" align="left"><?php echo $this->_tpl_vars['pickaddrmiles']; ?>
</td>
            </tr>
			<tr>
	   <td width="38%" align="right" valign="top" class="labeltxt"><strong>Destination Address:</strong>&nbsp;&nbsp;</td>	               <td width="62%" colspan="2" align="left"><?php echo $this->_tpl_vars['destinationmiles']; ?>
</td>
            </tr>
<?php if ($this->_tpl_vars['ttype'] == 'Three Way' || $this->_tpl_vars['ttype'] == 'Four Way' || $this->_tpl_vars['ttype'] == 'Five Way'): ?><tr>
<td width="38%" align="right" valign="top" class="labeltxt"><strong>Second Destination Address:</strong>&nbsp;&nbsp;</td>	           <td width="62%" colspan="2" align="left"><?php echo $this->_tpl_vars['three_address']; ?>
</td>
</tr>
<?php endif;  if ($this->_tpl_vars['ttype'] == 'Four Way' || $this->_tpl_vars['ttype'] == 'Five Way'): ?><tr>
<td width="38%" align="right" valign="top" class="labeltxt"><strong>Third Destination Address:</strong>&nbsp;&nbsp;</td>	           <td width="62%" colspan="2" align="left"><?php echo $this->_tpl_vars['four_address']; ?>
</td>
</tr>
<?php endif;  if ($this->_tpl_vars['ttype'] == 'Five Way'): ?><tr>
<td width="38%" align="right" valign="top" class="labeltxt"><strong>Forth Destination Address:</strong>&nbsp;&nbsp;</td>	           <td width="62%" colspan="2" align="left"><?php echo $this->_tpl_vars['five_address']; ?>
</td>
</tr>
<?php endif; ?>

<?php if ($this->_tpl_vars['ttype'] == 'Round Trip' || $this->_tpl_vars['ttype'] == 'Three Way' || $this->_tpl_vars['ttype'] == 'Four Way' || $this->_tpl_vars['ttype'] == 'Five Way'): ?><tr>
<td width="38%" align="right" valign="top" class="labeltxt"><strong>Last Destination Address:</strong>&nbsp;&nbsp;</td>	           <td width="62%" colspan="2" align="left"><?php echo $this->_tpl_vars['backto']; ?>
</td>
</tr>
<?php endif; ?>
<tr>
            <td colspan="3" valign="top">You can change below miles before actually going to approve this trip request
              </td>
          </tr>            
 <tr>
	   <td width="38%" align="right" valign="top" class="labeltxt"><strong>Miles String:</strong>&nbsp;&nbsp;</td>	               <td width="62%" colspan="2" align="left">
       <input name="miles1" id="miles1" value="<?php echo $this->_tpl_vars['miles1']; ?>
" size="6" maxlength="7" onkeyup="totalmiles();" />
       <?php if ($this->_tpl_vars['ttype'] == 'Round Trip' || $this->_tpl_vars['ttype'] == 'Three Way' || $this->_tpl_vars['ttype'] == 'Four Way' || $this->_tpl_vars['ttype'] == 'Five Way'): ?>
       <input name="miles2" id="miles2" value="<?php echo $this->_tpl_vars['miles2']; ?>
" size="6" maxlength="7" onkeyup="totalmiles();" />
       <?php endif; ?>
       <?php if ($this->_tpl_vars['ttype'] == 'Three Way' || $this->_tpl_vars['ttype'] == 'Four Way' || $this->_tpl_vars['ttype'] == 'Five Way'): ?>
       <input name="miles3" id="miles3" value="<?php echo $this->_tpl_vars['miles3']; ?>
" size="6" maxlength="7" onkeyup="totalmiles();" />
       <?php endif; ?>
       <?php if ($this->_tpl_vars['ttype'] == 'Four Way' || $this->_tpl_vars['ttype'] == 'Five Way'): ?>
       <input name="miles4" id="miles4" value="<?php echo $this->_tpl_vars['miles4']; ?>
" size="6" maxlength="7" onkeyup="totalmiles();" />
       <?php endif; ?>
       <?php if ($this->_tpl_vars['ttype'] == 'Five Way'): ?>
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
<td width="62%" colspan="2" align="left"><input type="text" name="unloadedmilage" id="unloadedmilage" size="10" value="<?php echo $this->_tpl_vars['unloadedmilage']; ?>
" class="inputTxtField" />(You can change these miles.)</td>
          </tr>
<tr>
<td width="38%" align="right" valign="top" class="labeltxt"><strong>Total Miles:</strong></td>
<td width="62%" colspan="2" align="left"><input type="text" name="totmilages" id="totmilages" size="10" value="<?php echo $this->_tpl_vars['totmilages']; ?>
" class="inputTxtField" readonly="readonly" /></td>
          </tr>
 <?php if ($this->_tpl_vars['detail']['capped_miles'] == '1'): ?>
 <tr><td></td><td colspan="2"><span style="color:#F00; font-size:14px; padding:5 5 5 5px; text-align:center;">&raquo; CAPPED MILES OSERVED</span></td></tr>
 <?php endif; ?>
 <?php if ($this->_tpl_vars['detail']['after_hours'] == '1'): ?>
 <tr><td></td><td colspan="2"><span style="color:#F00; font-size:14px; padding:5 5 5 5px; text-align:center;">&raquo; AFTER HOURS OSERVED</span></td></tr>
 <?php endif; ?>           
          

          <tr>
            <td valign="top">&nbsp;</td>
            <td colspan="2"><input type="submit" name="submit" value="Submit" class="btn"  />
              <input type="reset" name="reset" value="Reset" class="btn"  /></td>
          </tr>
        </table>
      </form></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
</table>