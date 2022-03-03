<?php /* Smarty version 2.6.12, created on 2019-12-16 16:25:02
         compiled from atdncetpl/index.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'cycle', 'atdncetpl/index.tpl', 98, false),array('modifier', 'date_format', 'atdncetpl/index.tpl', 101, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "headerinner.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php echo ' 
<script type="text/javascript">
$(document).ready(function(){
$("#startdate").datepicker( {maxDate: \'-1\', dateFormat: \'mm/dd/yy\'} );
$("#enddate").datepicker( {maxDate: \'-1\', dateFormat: \'mm/dd/yy\'} );
  });
function changeapproval(val,id)
{ 
  if (val != \'\' && id != \'\'){		
	{ 	
	 $.post("changeapproval.php", {id: ""+id,val: ""+val}, function(data){
	 if(data.length > 0 ){  
		 }
	});
	}
	}	}

</script> 
'; ?>

<table id="table1" class="outer_table"   border="0" cellspacing="0" cellpadding="0" align="center" bgcolor="#FFFFFF" style="margin-bottom:10px;">
  <tr>
    <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td height="19" align="center" class="okmsg"><?php if ($this->_tpl_vars['msgs'] != ''): ?> <?php echo $this->_tpl_vars['msgs']; ?>
 <?php endif; ?>
            
            <?php if ($this->_tpl_vars['errors'] != ''): ?> <?php echo $this->_tpl_vars['errors']; ?>
 <?php endif; ?></td>
        </tr>
        <tr>
          <td height="19" align="center"><div align="right" id="add_div" style="padding-right:20px; padding-bottom:5px;"> [<a href="javascript:history.back();">Back</a></div></td>
        </tr>
        <tr>
          <td></td>
        </tr>
        <tr>
          <td height="19" align="center"><div id="search_form">
              <form name="searchReport" action="index.php" method="post" id="searchReport">
                <table width="100%" border="0" cellspacing="2" cellpadding="2" align="center" class="">
                  <tr>
                    <td colspan="8" valign="top" class="admintopheading" align="left">SEARCH CRITERIA</td>
                  </tr>
                  <tr>
                    <td align="left" valign="top" class="labeltxt"><strong>From:</strong></td>
                    <td align="left" valign="top"><input type="text" name="startdate" id="startdate" value="<?php echo $this->_tpl_vars['startdate']; ?>
" class="required"/>
                      &nbsp;<span style="color:#FF0000">*</span>
                      <div class="suggestionsBox" id="suggestions1" style="display: none; position:absolute;"> <img src="images/upArrow.png" style="position: relative; top: 7px; left: -10px;" alt="upArrow" />
                        <div class="suggestionList" id="autoSuggestionsList1"> &nbsp; </div>
                      </div>
                      (mm/dd/yyyy)</td>
                    <td align="right" valign="top" class="labeltxt"><strong>To:</strong>&nbsp;</td>
                    <td align="left" valign="top"><input type="text" name="enddate" id="enddate" value="<?php echo $this->_tpl_vars['enddate']; ?>
" class="required" />
                      <span style="color:#FF0000">*</span>
                      <div class="suggestionsBox" id="layer" style="display: none; position:absolute;">
                        <div class="suggestionList" id="div">&nbsp; </div>
                      </div>
                      (mm/dd/yyyy)</td>
                             <td align="left" valign="top" class="labeltxt"><strong>Driver :</strong></td>
                    <td align="left" valign="top"><select name="drv_id" id="drv_id" >
                        <option value="">Select Driver</option>
                    <?php unset($this->_sections['d']);
$this->_sections['d']['name'] = 'd';
$this->_sections['d']['loop'] = is_array($_loop=$this->_tpl_vars['datadr']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['d']['show'] = true;
$this->_sections['d']['max'] = $this->_sections['d']['loop'];
$this->_sections['d']['step'] = 1;
$this->_sections['d']['start'] = $this->_sections['d']['step'] > 0 ? 0 : $this->_sections['d']['loop']-1;
if ($this->_sections['d']['show']) {
    $this->_sections['d']['total'] = $this->_sections['d']['loop'];
    if ($this->_sections['d']['total'] == 0)
        $this->_sections['d']['show'] = false;
} else
    $this->_sections['d']['total'] = 0;
if ($this->_sections['d']['show']):

            for ($this->_sections['d']['index'] = $this->_sections['d']['start'], $this->_sections['d']['iteration'] = 1;
                 $this->_sections['d']['iteration'] <= $this->_sections['d']['total'];
                 $this->_sections['d']['index'] += $this->_sections['d']['step'], $this->_sections['d']['iteration']++):
$this->_sections['d']['rownum'] = $this->_sections['d']['iteration'];
$this->_sections['d']['index_prev'] = $this->_sections['d']['index'] - $this->_sections['d']['step'];
$this->_sections['d']['index_next'] = $this->_sections['d']['index'] + $this->_sections['d']['step'];
$this->_sections['d']['first']      = ($this->_sections['d']['iteration'] == 1);
$this->_sections['d']['last']       = ($this->_sections['d']['iteration'] == $this->_sections['d']['total']);
?>
                     <option value="<?php echo $this->_tpl_vars['datadr'][$this->_sections['d']['index']]['Drvid']; ?>
" <?php if ($this->_tpl_vars['datadr'][$this->_sections['d']['index']]['Drvid'] == $this->_tpl_vars['drv_id']): ?> selected="selected" <?php endif; ?>><?php echo $this->_tpl_vars['datadr'][$this->_sections['d']['index']]['fname']; ?>
 <?php echo $this->_tpl_vars['datadr'][$this->_sections['d']['index']]['lname']; ?>
</option>
                    <?php endfor; endif; ?>
                      </select></td>
                    <td width="16%" align="left" valign="top" class="labeltxt">&nbsp;</td>
                    <td align="right" valign="top" class="labeltxt">&nbsp;</td>
                  </tr>
                  <tr>
                    <td align="left" valign="top">&nbsp;</td>
                    <td colspan="3" align="center" valign="top"><input type="submit" name="search" value='&nbsp;&nbsp;Search&nbsp;&nbsp;' class="inputButton btn" id="search"  />
                      &nbsp;
                      <input type="reset" name="reset" value='&nbsp;&nbsp;Reset&nbsp;&nbsp;' class="inputButton btn"  /></td>
                      <td></td>
                      <td><!--<?php if ($this->_tpl_vars['drv_id'] != ''): ?><input type="button" onclick="javascript:popWind('paydetails.php?id=<?php echo $this->_tpl_vars['data']['0']['driver_id']; ?>
&startdate=<?php echo $this->_tpl_vars['startdate']; ?>
&enddate=<?php echo $this->_tpl_vars['enddate']; ?>
');" value="Show Pay Summary" class="inputButton btn"  /><?php endif; ?>--></td>
                  </tr>
                </table>
              </form>
            </div></td>
        </tr>
        <tr>
          <td height="19" align="center" class="admintopheading">ATTENDANCE MANAGEMENT</td>
        </tr>
        <tr>
          <td height="44" align="center"  valign="top" style="padding-bottom:50px;"><table width="100%" border="0" class="main_table">
              <tr>
                <td width="5%" align="center" class="label_txt_heading"><strong>S.No.</strong></td>
                <td  width="15%" class="label_txt_heading"><strong>Driver Name</strong></td>
                <td width="13%" align="center" class="label_txt_heading"><strong>Dated</strong></td>
                <td width="10%" align="center" class="label_txt_heading"><strong>Duty</strong></td>
                <td width="7%" align="center" class="label_txt_heading"><strong>Clock In</strong></td>
                <td width="10%" align="center" class="label_txt_heading"><strong>Clock Out</strong></td>
                <td width="10%" align="center" class="label_txt_heading"><strong>Total Time</strong></td>
                <!--<td width="10%" align="center" class="label_txt_heading"><strong>Duty Hour</strong></td>
                <td width="10%" align="center" class="label_txt_heading"><strong>Over Time</strong></td>-->
                <td width="10%" align="center" class="label_txt_heading"><strong>Approval</strong></td>
                <td width="6%" align="center" class="label_txt_heading"><strong>Options</strong></td>
              </tr>
              <?php unset($this->_sections['q']);
$this->_sections['q']['name'] = 'q';
$this->_sections['q']['loop'] = is_array($_loop=$this->_tpl_vars['data']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
              <tr bgcolor="<?php echo smarty_function_cycle(array('values' => "#eeeeee,#d0d0d0"), $this);?>
" height="25">
                <td align="center" valign="middle"><b>&nbsp;<?php echo $this->_sections['q']['iteration']; ?>
.</b></td>
                <td align="left" valign="middle">&nbsp;<?php echo $this->_tpl_vars['data'][$this->_sections['q']['index']]['fname']; ?>
 <?php echo $this->_tpl_vars['data'][$this->_sections['q']['index']]['lname']; ?>
</td>
                <td align="center" valign="middle"><?php echo ((is_array($_tmp=$this->_tpl_vars['data'][$this->_sections['q']['index']]['dated'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%A") : smarty_modifier_date_format($_tmp, "%A")); ?>
<br/><?php echo ((is_array($_tmp=$this->_tpl_vars['data'][$this->_sections['q']['index']]['dated'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%D") : smarty_modifier_date_format($_tmp, "%D")); ?>
</td>
                <td align="center" valign="middle"><?php echo $this->_tpl_vars['data'][$this->_sections['q']['index']]['dayonoff']; ?>
</td>
                <td align="center" valign="middle"><?php if ($this->_tpl_vars['data'][$this->_sections['q']['index']]['dayonoff'] == 'on'):  echo ((is_array($_tmp=$this->_tpl_vars['data'][$this->_sections['q']['index']]['clockin'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%H:%M") : smarty_modifier_date_format($_tmp, "%H:%M"));  else: ?>--:--<?php endif; ?></td>
                <td align="center" valign="middle"><?php if ($this->_tpl_vars['data'][$this->_sections['q']['index']]['dayonoff'] == 'on'):  echo ((is_array($_tmp=$this->_tpl_vars['data'][$this->_sections['q']['index']]['clockout'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%H:%M") : smarty_modifier_date_format($_tmp, "%H:%M"));  else: ?>--:--<?php endif; ?></td>
                <td align="center" valign="middle"><?php if ($this->_tpl_vars['data'][$this->_sections['q']['index']]['dayonoff'] == 'on'):  echo $this->_tpl_vars['data'][$this->_sections['q']['index']]['totaltime'];  else:  endif; ?></td>
                <!--<td align="center" valign="middle"><?php if ($this->_tpl_vars['data'][$this->_sections['q']['index']]['dayonoff'] == 'on'):  echo $this->_tpl_vars['data'][$this->_sections['q']['index']]['dutty_hour'];  else:  endif; ?></td>
                <td align="center" valign="middle"><?php if ($this->_tpl_vars['data'][$this->_sections['q']['index']]['dayonoff'] == 'on'):  echo $this->_tpl_vars['data'][$this->_sections['q']['index']]['overtime'];  else:  endif; ?></td>-->
                <td align="left" valign="middle">
                <select style="width:90px" onchange="changeapproval(this.value,'<?php echo $this->_tpl_vars['data'][$this->_sections['q']['index']]['id']; ?>
')" ><option value="pending" <?php if ($this->_tpl_vars['data'][$this->_sections['q']['index']]['approval'] == 'pending'): ?> selected="selected"<?php endif; ?>>Pending</option><option value="approved" <?php if ($this->_tpl_vars['data'][$this->_sections['q']['index']]['approval'] == 'approved'): ?> selected="selected"<?php endif; ?>>Approved</option></select></td>
                <td align="center" valign="top">&nbsp;<a  href="edit.php?id=<?php echo $this->_tpl_vars['data'][$this->_sections['q']['index']]['id']; ?>
&drvid=<?php echo $this->_tpl_vars['data'][$this->_sections['q']['index']]['driver_id']; ?>
&startdate=<?php echo $this->_tpl_vars['startdate']; ?>
&enddate=<?php echo $this->_tpl_vars['enddate']; ?>
&drv_id=<?php echo $this->_tpl_vars['drv_id']; ?>
&dated=<?php echo $this->_tpl_vars['data'][$this->_sections['q']['index']]['dated']; ?>
" rel="facebox" title="Edit" target="_blank"> <img border="0" alt="Edit" src="../graphics/edit.png"></a>&nbsp;<?php if ($this->_tpl_vars['data'][$this->_sections['q']['index']]['dayonoff'] == 'on'): ?>&nbsp;&nbsp; <a href="javascript:popWind('details.php?id=<?php echo $this->_tpl_vars['data'][$this->_sections['q']['index']]['driver_id']; ?>
&date=<?php echo $this->_tpl_vars['data'][$this->_sections['q']['index']]['dated']; ?>
');">  Detail </a><?php endif; ?></td>
              </tr>
              <?php endfor; else: ?>
              <tr>
                <td colspan="9" align="center"><b>No Record Found</b></td>
              </tr>
              <?php endif; ?>
            </table></td>
        </tr>
        <tr>
          <td align="center"><?php echo $this->_tpl_vars['paging']; ?>
</td>
        </tr>
      </table></td>
  </tr>
</table>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "innerfooter.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?> 