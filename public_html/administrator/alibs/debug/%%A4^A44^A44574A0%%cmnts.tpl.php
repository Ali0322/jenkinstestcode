<?php /* Smarty version 2.6.12, created on 2022-02-23 16:16:56
         compiled from drvtpl/cmnts.tpl */ ?>
<table width="600" border="0">

  <tr>

    <td colspan="3" align="center" class="admintopheading"><strong>COMMENTS</strong></td>

  </tr>

  <tr>

    <td width="28%" height="26" align="right" class="labeltxt"><strong>Driver Name :</strong></td>

    <td width="1%">&nbsp;</td>

    <td width="71%"><b><?php echo $this->_tpl_vars['trips']['drv_name']; ?>
</b></td>

  </tr>

  <tr>

    <td align="right" valign="top"  class="labeltxt"><strong>Trip Details :</strong></td>

    <td>&nbsp;</td>

    <td><b><?php echo $this->_tpl_vars['trips']['trip_user']; ?>
 - </b><b><?php echo $this->_tpl_vars['trips']['trip_clinic']; ?>
</b><br />
      <strong>From :</strong> <?php echo $this->_tpl_vars['trips']['pck_add']; ?>
<br />
      <strong>To :</strong> <?php echo $this->_tpl_vars['trips']['drp_add']; ?>
</td>

  </tr>

  <tr>

    <td height="25" align="right" class="labeltxt"><strong>Trip Status :</strong></td>

    <td>&nbsp;</td>

    <td><?php if ($this->_tpl_vars['trips']['status'] == '4'): ?>
											 Successful
									     <?php elseif ($this->_tpl_vars['trips']['status'] == '1'): ?>
											 Delayed
										 <?php elseif ($this->_tpl_vars['trips']['status'] == '3'): ?>
										    Cancelled
										 <?php elseif ($this->_tpl_vars['trips']['status'] == '5'): ?>
										     In Progress
										 <?php elseif ($this->_tpl_vars['trips']['status'] == '2'): ?>
										     Rescheduled
										 <?php elseif ($this->_tpl_vars['trips']['status'] == '7'): ?>
										     Not at Home
										 <?php elseif ($this->_tpl_vars['trips']['status'] == '8'): ?>
										     Not Going		 							 											 										 <?php else: ?>
										     In Progress
    <?php endif; ?> </td>

  </tr>

  <tr>
    <td height="25" align="right" class="labeltxt"><strong>User Comments:</strong></td>
    <td>&nbsp;</td>
    <td><?php echo $this->_tpl_vars['trips']['trip_remarks']; ?>
</td>
  </tr>
  <tr>
    <td height="25" align="right" class="labeltxt"><strong>Trip Comments:</strong></td>
    <td>&nbsp;</td>
    <td><?php echo $this->_tpl_vars['data_comments'][0]['comments']; ?>
 / <?php echo $this->_tpl_vars['data_comments'][1]['comments']; ?>
</td>
  </tr>

  <tr>

    <td height="25" align="right" class="labeltxt">&nbsp;</td>

    <td>&nbsp;</td>

    <td>&nbsp;</td>

  </tr>

</table>
