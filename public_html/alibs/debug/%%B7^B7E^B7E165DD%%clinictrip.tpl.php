<?php /* Smarty version 2.6.12, created on 2014-07-26 20:25:12
         compiled from clinictrip.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'cycle', 'clinictrip.tpl', 91, false),array('modifier', 'date_format', 'clinictrip.tpl', 102, false),)), $this); ?>
 <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "top.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
 <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
 <div style="padding-left:20px;">
  <div id="left_panel">
                                        <div class="form_panel2">
                                    <form name="tripReq" id="tripReq" action="myrequests.php" method="post">    
                                  		<table  width="100%" border="0" cellspacing="0" cellpadding="0"  align="center" >

  <tr>

    <td><table width="100%" border="0" cellspacing="0" cellpadding="0" class="outer_table" align="center">

        <tr>

          <td><table width="961" border="0" cellspacing="0" cellpadding="0" >

              
				<tr><td><div class="heading">Facility Trips</div></td></tr>
              <tr>

                <td height="19" align="center" class="okmsg"><span class="okmsg"><?php if ($this->_tpl_vars['msgs'] != ''): ?> <?php echo $this->_tpl_vars['msgs']; ?>
 <?php endif; ?>

                  <?php if ($this->_tpl_vars['errors'] != ''): ?> <?php echo $this->_tpl_vars['errors']; ?>
 <?php endif; ?></span></td>

              </tr>
			<tr>

                <td height="19" align="center" class="form_heading1">ROUTING SHEET DETAILS </td>

              </tr>
              <tr>

                <td height="19" align="center"><div align="right" id="add_div" style="padding-right:40px; padding-bottom:5px;"> [<a href="index.php">Home</a>]</div></td>

              </tr>

              <tr>

                <td class="tabs"><ul>
		
                                      <li <?php if ($this->_tpl_vars['st'] == '5'): ?>style="display:block; float:left; background: url(images/tabs_hover.png) no-repeat; width:95px; height:20px; color:#FFF; padding-left: 0px; padding-top: 5px; text-align:center;" class="selected1"<?php endif; ?>><a href="clinictrip.php?st=5">In Progress</a></li>

				    <li <?php if ($this->_tpl_vars['st'] == '4'): ?>  style="display:block; float:left; background: url(images/tabs_hover.png) no-repeat; color:#FFF; padding-left: 0px; padding-top: 5px; text-align:center;" class="selected1"<?php endif; ?>><a href="clinictrip.php?st=4">Completed</a></li>

                    <li <?php if ($this->_tpl_vars['st'] == '3'): ?>  style="display:block; float:left; background: url(images/tabs_hover.png) no-repeat; color:#FFF; padding-left: 0px; padding-top: 5px; text-align:center;" class="selected1"<?php endif; ?>><a href="clinictrip.php?st=3">Cancelled</a></li>

                    <li <?php if ($this->_tpl_vars['st'] == '2'): ?> style="display:block; float:left; background: url(images/tabs_hover.png) no-repeat; color:#FFF; padding-left: 0px; padding-top: 5px; text-align:center;" class="selected1"<?php endif; ?>><a  href="clinictrip.php?st=2">Rescheduled</a></li>

                    <li <?php if ($this->_tpl_vars['st'] == '8'): ?> style="display:block; float:left; background: url(images/tabs_hover.png) no-repeat; color:#FFF; padding-left: 0px; padding-top: 5px; text-align:center;" class="selected1"<?php endif; ?>><a href="clinictrip.php?st=8&ad=0">Not Going</a></li>
					
					  <li <?php if ($this->_tpl_vars['st'] == '7'): ?> style="display:block; float:left; background: url(images/tabs_hover.png) no-repeat;color:#FFF; padding-left: 0px; padding-top: 5px; text-align:center;" class="selected1"<?php endif; ?>><a href="clinictrip.php?st=7&ad=0">Not at Home</a></li>



                    <li <?php if ($this->_tpl_vars['st'] == '0'): ?> style="display:block; float:left; background: url(images/tabs_hover.png) no-repeat;  color:#FFF; padding-left: 0px; padding-top: 5px; text-align:center;" class="selected1"<?php endif; ?>><a href="clinictrip.php?st=0">Addons</a></li>
                  </ul>

				  </td>

              </tr>
              <tr class="form_heading1">

                <td height="44" align="center"  valign="top" style="padding-bottom:50px;"><table width="100%" border="1" style="border-color:#FFFFFF;" class="main_table" cellpadding="0" cellspacing="0" >

                    <tr>
                      <td align="left" width="5%" ><strong>Code</strong></td>

                      <td align="left" width="12%" ><strong>Facility</strong></td>

                      <td align="left" width="10%" ><strong>Patient  Name </strong></td>

                       <td  align="left" width="10%"><strong>Driver</strong></td>

                      <td  align="left" width="18%" ><strong>Pick Address</strong></td>

                      <td align="left" width="18%" ><strong>Drop Address</strong></td>

                      <td align="left" width="5%" ><strong>Pickup Time</strong></td>

					    <td align="left" width="5%" ><strong>Drop Time</strong></td>

						<td align="left" width="5%" ><strong>Miles</strong></td>

					   <td align="left" width="5%"><strong>Trip Type</strong></td>

                      <td align="left" width="7%"><strong>Status</strong></td>
                    </tr>

                    <?php unset($this->_sections['q']);
$this->_sections['q']['name'] = 'q';
$this->_sections['q']['loop'] = is_array($_loop=$this->_tpl_vars['membdetail']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['q']['show'] = true;
$this->_sections['q']['max'] = $this->_sections['q']['loop'];
$this->_sections['q']['step'] = 1;
$this->_sections['q']['start'] = $this->_sections['q']['step'] > 0 ? 0 : $this->_sections['q']['loop']-1;
if ($this->_sections['q']['show']) {
    $this->_sections['q']['total'] = $this->_sections['q']['loop'];
    if ($this->_sections['q']['total'] == 0)
        $this->_sections['q']['show'] = false;
} else
    $this->_sections['q']['total'] = 0;
if ($this->_sections['q']['show']):

            for ($this->_sections['q']['index'] = $this->_sections['q']['start'], $this->_sections['q']['iteration'] = 1;
                 $this->_sections['q']['iteration'] <= $this->_sections['q']['total'];
                 $this->_sections['q']['index'] += $this->_sections['q']['step'], $this->_sections['q']['iteration']++):
$this->_sections['q']['rownum'] = $this->_sections['q']['iteration'];
$this->_sections['q']['index_prev'] = $this->_sections['q']['index'] - $this->_sections['q']['step'];
$this->_sections['q']['index_next'] = $this->_sections['q']['index'] + $this->_sections['q']['step'];
$this->_sections['q']['first']      = ($this->_sections['q']['iteration'] == 1);
$this->_sections['q']['last']       = ($this->_sections['q']['iteration'] == $this->_sections['q']['total']);
?>

<tr class="SmallgridTxt" bgcolor="<?php echo smarty_function_cycle(array('values' => "#eeeeee,#d0d0d0"), $this);?>
">
                      <td align="left" valign="top" class="grid_content"><?php echo $this->_tpl_vars['membdetail'][$this->_sections['q']['index']]['trip_id']; ?>
</td>

                      <td align="left" valign="top" class="grid_content"><?php echo $this->_tpl_vars['membdetail'][$this->_sections['q']['index']]['trip_clinic']; ?>
</td>

                      <td align="left" valign="top" class="grid_content"><?php echo $this->_tpl_vars['membdetail'][$this->_sections['q']['index']]['trip_user']; ?>
</td>

                      <td align="left" valign="top" class="grid_content"><?php echo $this->_tpl_vars['membdetail'][$this->_sections['q']['index']]['driver']; ?>
</td>

                      <td align="left" valign="top" class="grid_content"><?php echo $this->_tpl_vars['membdetail'][$this->_sections['q']['index']]['pck_add']; ?>
</td>
                      <td align="left" valign="top" class="grid_content"><?php echo $this->_tpl_vars['membdetail'][$this->_sections['q']['index']]['drp_add']; ?>
</td>
					    <td align="left" valign="top" class="grid_content"><?php if ($this->_tpl_vars['membdetail'][$this->_sections['q']['index']]['wc'] == '1'): ?> W/C<?php else: ?> <?php echo ((is_array($_tmp=$this->_tpl_vars['membdetail'][$this->_sections['q']['index']]['pck_time'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%H:%M") : smarty_modifier_date_format($_tmp, "%H:%M"));  endif; ?></td>

						

						  <td align="left" valign="top" class="grid_content"><?php if ($this->_tpl_vars['membdetail'][$this->_sections['q']['index']]['wc'] == '1'): ?> --:--<?php else:  echo ((is_array($_tmp=$this->_tpl_vars['membdetail'][$this->_sections['q']['index']]['drp_time'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%H:%M") : smarty_modifier_date_format($_tmp, "%H:%M"));  endif; ?></td>

					  

                      <td align="left" valign="top" class="grid_content"><?php echo $this->_tpl_vars['membdetail'][$this->_sections['q']['index']]['trip_miles']; ?>
</td>

					  

                       <td align="left" valign="top" class="grid_content"><?php if ($this->_tpl_vars['membdetail'][$this->_sections['q']['index']]['type'] == '1'): ?><img src="images/one-way.png" title="A to B Trip" width="30" height="15"><?php else: ?><img  title="Return Trip B to A" src="images/two-way.png" width="30" height="15"><?php endif; ?></td>

					   

					  <td align="left" valign="top" class="grid_icon">

				                 
					  <?php if ($this->_tpl_vars['membdetail'][$this->_sections['q']['index']]['status'] == '5' || $this->_tpl_vars['membdetail'][$this->_sections['q']['index']]['status'] == '0'): ?>
				     	 Not-Picked
					  <?php endif; ?>	 
					   <?php if ($this->_tpl_vars['membdetail'][$this->_sections['q']['index']]['status'] == '6' || $this->_tpl_vars['membdetail'][$this->_sections['q']['index']]['status'] == '4'): ?>
				     	 Picked
					  <?php endif; ?>	 
					 				  </a>&nbsp;&nbsp;
			
					  <a rel="facebox" href="viewgrid.php?id=<?php echo $this->_tpl_vars['membdetail'][$this->_sections['q']['index']]['tdid']; ?>
" title="View"> View</a>&nbsp;&nbsp;
			
				</td>
                    </tr>

                    <?php endfor; else: ?>

                    <tr>

                      <td colspan="11" align="center" valign="top" class="grid_content"><strong>No Record Found!</strong></td>

                    </tr>

                    <?php endif; ?>

                  </table></td>

              </tr>

              <tr>

                <td><?php echo $this->_tpl_vars['paging']; ?>
</td>

              </tr>

            </table></td>

        </tr>

      </table></td>

  </tr>

</table></form>
                                </div>
                                <!--Request a trip Panel End Here-->
                            </div>   </div>
  <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>