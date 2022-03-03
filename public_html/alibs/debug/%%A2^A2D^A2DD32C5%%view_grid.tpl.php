<?php /* Smarty version 2.6.12, created on 2014-09-19 14:54:45
         compiled from view_grid.tpl */ ?>
<?php echo '

<script>

   $(document).ready(function(){

    $(\'#addgrid\').validate();

		$("#phone").mask("999-99-9999");

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

          <td class="admintopheading">View Trip Details </td>

        </tr>

        <tr>

          <td align="left" valign="top">

		  <table width="650" border="0" cellspacing="0" cellpadding="0" align="center">

  <tr>

    <td width="17" align="left" valign="top"><img src="images/1.jpg" alt="d" width="17" height="17" /></td>

    <td align="left" valign="top" background="images/2.jpg">&nbsp;</td>

    <td width="17" align="left" valign="top"><img src="images/3.jpg" alt="d" width="17" height="17" /></td>

  </tr>

  <tr>

    <td align="left" valign="top" background="images/4.jpg">&nbsp;</td>

    <td align="left" valign="top" width="100%"><form name="addgrid" id="addgrid" method="post" action="editgrid.php" enctype="multipart/form-data" >

								<table width="650" border="0" cellspacing="2" cellpadding="2">			  

							

								  <tr>
								    <td height="25" align="right" class="labeltxt">Trip Code: </td>
								    <td height="25">&nbsp;&nbsp;&nbsp;<?php echo $this->_tpl_vars['trip_code']; ?>
</td>
							      </tr>
								  <tr>

								    <td width="150" height="25" align="right" class="labeltxt">Patient Name: </td>

								    <td width="486" height="25">&nbsp;&nbsp;&nbsp;<?php echo $this->_tpl_vars['cname']; ?>
</td>
							      </tr>

								  <tr>

								    <td height="25" align="right" class="labeltxt">Facility: </td>

								    <td height="25">&nbsp;&nbsp;&nbsp;<?php echo $this->_tpl_vars['clinic']; ?>
</td>
							      </tr>

								  <tr>

								    <td height="25" align="right" class="labeltxt">Telephone:</td>

								    <td height="25">&nbsp;&nbsp;&nbsp;<?php echo $this->_tpl_vars['phone']; ?>
</td>
							      </tr>

								 

								  <tr>

								    <td height="25" align="right" class="labeltxt">Pickup Address: </td>

								    <td height="25">&nbsp;&nbsp;&nbsp;<?php echo $this->_tpl_vars['addr1']; ?>
</td>
							      </tr>

								  <tr>

								    <td height="25" align="right" class="labeltxt">Drop Address: </td>

								    <td height="25">&nbsp;&nbsp;&nbsp;<?php echo $this->_tpl_vars['drpadd']; ?>
</td>
							      </tr>

								  <br>

								  <tr>

								    <td height="25" align="right" class="labeltxt">Pickup Time: </td>

								    <td height="25">&nbsp;&nbsp;&nbsp;<?php echo $this->_tpl_vars['ptime']; ?>
</td>
							      </tr>
								  <tr>
                                    <td height="25" align="right" class="labeltxt">Actual Pickup Time: </td>
								    <td height="25">&nbsp;&nbsp;&nbsp;<?php echo $this->_tpl_vars['aptime']; ?>
</td>
							      </tr>

								  <tr>

								    <td height="25" align="right" class="labeltxt">Drop Time: </td>

								    <td height="25">&nbsp;&nbsp;&nbsp;<?php echo $this->_tpl_vars['dtime']; ?>
</td>
							      </tr>
								  <tr>
                                    <td height="25" align="right" class="labeltxt">Actual Drop Time: </td>
								    <td height="25">&nbsp;&nbsp;&nbsp;<?php echo $this->_tpl_vars['adtime']; ?>
</td>
							      </tr>

								  <tr>

								    <td height="25" align="right" class="labeltxt">Miles:</td>

								    <td height="25">&nbsp;&nbsp;&nbsp;<?php echo $this->_tpl_vars['m1']; ?>
</td>
							      </tr>

								  <tr>

								    <td height="25" align="right" class="labeltxt">Staff ID:</td>

								    <td height="25">&nbsp;&nbsp;&nbsp;<?php echo $this->_tpl_vars['staff1']; ?>
</td>
							      </tr>

								  <tr>

								    <td height="25" align="right" class="labeltxt">Remarks:</td>

								    <td height="25">&nbsp;&nbsp;&nbsp;<?php echo $this->_tpl_vars['remarks']; ?>
</td>
							      </tr>

								  <tr>

								    <td height="25" align="right" class="labeltxt">Status:</td>

								    <td height="25">&nbsp;&nbsp;&nbsp;
										 <?php if ($this->_tpl_vars['status'] == '4'): ?>
											 Successful
									     <?php elseif ($this->_tpl_vars['status'] == '1'): ?>
											 Successful
										 <?php elseif ($this->_tpl_vars['status'] == '3'): ?>
										    Cancelled
										 <?php elseif ($this->_tpl_vars['status'] == '5'): ?>
										     In Progress
										 <?php elseif ($this->_tpl_vars['status'] == '2'): ?>
										     Rescheduled
										 <?php elseif ($this->_tpl_vars['status'] == '7'): ?>
										     Not at Home
										 <?php elseif ($this->_tpl_vars['status'] == '8'): ?>
										     Not Going		 							 											 										 <?php else: ?>
										     In Progress
										 <?php endif; ?>									 </td>
							      </tr>

								

								  

								  

								  <tr>

									<td height="25">&nbsp;</td>

									<td height="25">																</td>
								  </tr>
			  </table>          

			                    <input type="hidden" value="<?php echo $this->_tpl_vars['tripid']; ?>
" name="tripid" id="tripid">  

								<input type="hidden" value="<?php echo $this->_tpl_vars['id']; ?>
" name="id" id="id">

								</form></td>

    <td align="left" valign="top" background="images/5.jpg">&nbsp;</td>

  </tr>

  <tr>

    <td align="left" valign="top"><img src="images/6.jpg" alt="d" width="17" height="17" /></td>

    <td align="left" valign="top" background="images/7.jpg">&nbsp;</td>

    <td align="left" valign="top"><img src="images/8.jpg" alt="d" width="17" height="17" /></td>

  </tr>

</table>		  </td>

        </tr>

      </table>
