<?php /* Smarty version 2.6.12, created on 2020-01-07 21:51:21
         compiled from reportstpl/milagereport.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'cycle', 'reportstpl/milagereport.tpl', 142, false),array('modifier', 'date_format', 'reportstpl/milagereport.tpl', 144, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "headerinner.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>



<?php echo ' 
<script type="text/javascript">



$(document).ready(function(){



						   $(\'#searchReport\').validate();						   

						   $(\'#hosp\').attr(\'disabled\', true);



						   });







function other()



{



	val = document.getElementById(\'hospname\').value;



	if(val ==\'other\')



	{



		$(\'#hosp\').attr(\'disabled\', false);



	}



	else



	{



		 $(\'#hosp\').attr(\'disabled\', true);



	}



}

$(document).ready(function(){	

$("#appmiledate").datepicker( {yearRange:\'-120:00\', dateFormat: \'mm/dd/yy\'} );
});

</script> 
'; ?>

<table border="0" cellspacing="0" cellpadding="0" class="outer_table" align="right" bgcolor="#FFFFFF">
  <tr>
    <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
        <?php if ($this->_tpl_vars['errors'] != '' || $this->_tpl_vars['msgs'] != ''): ?><tr>
          <td height="19" colspan="2" align="center" class="okmsg"><span class="okmsg"><?php if ($this->_tpl_vars['msgs'] != ''): ?> <?php echo $this->_tpl_vars['msgs']; ?>
 <?php endif; ?>
            
            
            
            <?php if ($this->_tpl_vars['errors'] != ''): ?> <?php echo $this->_tpl_vars['errors']; ?>
 <?php endif; ?></span></td>
        </tr><?php endif; ?>
        <tr>
          <td height="19" colspan="2" align="center"><div align="right" id="add_div" style="padding-right:40px; padding-bottom:5px;"> <?php if ($this->_tpl_vars['noReq'] != '0'): ?>
              
              
              
              [<a href="javascript:history.back();">Back</a>]<?php endif; ?></div></td>
        </tr>
        <tr>
          <td height="19" colspan="2" align="center" class="admintopheading">UPDATE MILAGE</td>
        </tr>
        <tr>
          <td height="44" colspan="2" align="center"  valign="top"><form name="searchReport" action="milagereport.php" method="get" id="searchReport">
              <table   border="0" cellspacing="2" cellpadding="2" align="center" class="" style="width:100%;">
               <tr>
                  <td width="20%" align="left" valign="top" class="labeltxt"><strong>Appointment Date:</strong></td>
                  <td width="30%" align="left" valign="top"><input type="text" name="appmiledate" id="appmiledate" value="<?php echo $this->_tpl_vars['appmiledate']; ?>
" class="inputTxtField date required" /> (mm/dd/yyyy)</td><td></td> <td></td>
                 <!-- <td align="left" width="20" valign="top" class="labeltxt"><strong>Company Code :</strong></td>

              <td width="30%" align="left" valign="top"><select name="code" class=" txt_boxX" id="code"  >
                      <option value="">All</option>
                      			  <?php unset($this->_sections['q']);
$this->_sections['q']['name'] = 'q';
$this->_sections['q']['loop'] = is_array($_loop=$this->_tpl_vars['ccode']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
                 <option value="<?php echo $this->_tpl_vars['ccode'][$this->_sections['q']['index']]['code']; ?>
" <?php if ($this->_tpl_vars['ccode'][$this->_sections['q']['index']]['code'] == $this->_tpl_vars['code']): ?> selected="selected" <?php endif; ?>><?php echo $this->_tpl_vars['ccode'][$this->_sections['q']['index']]['code']; ?>
 - - <?php echo $this->_tpl_vars['ccode'][$this->_sections['q']['index']]['company']; ?>
</option>
                      <?php endfor; endif; ?>
                    </select></td>-->
                </tr>
                <tr>
                  <td align="left" valign="top">&nbsp;</td>
                  <td colspan="2" align="left" valign="top"><input type="submit" name="submit" id="submit" value='Report' class="inputButton btn"  />
                    &nbsp;
                    <input type="reset" name="reset" value='Reset' class="inputButton btn"  /></td>
                    <td colspan="2"><span style="color:#F00;" >Total Miles: &nbsp;&nbsp;&nbsp;<?php echo $this->_tpl_vars['totalmilage']; ?>
</span></td>
                </tr>
              </table>
            </form></td>
        </tr>
        
        <tr>
          <td height="44" colspan="2" align="center"  valign="top" style="padding-bottom:50px;"><table width="95%" border="0" class="main_table">
              <tr class="admintopheading">
                <td width="15%" align="center"><strong>Patient Name </strong></td>
                <td width="15%" align="center"><strong> Appointment Date/Time </strong></td>
                <td width="20%" align="center"><strong> Pick Address</strong></td>
                <td width="20%" align="center"><strong>Destination</strong></td>
                <td width="10%" align="center"><strong>Patient Phone #</strong></td>
                <td width="15%" align="center"><strong> Total Miles</strong></td>
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
              
              
              
              <?php if ($this->_tpl_vars['reqdetails'][$this->_sections['q']['index']]['rows'] != '0'): ?>
              <tr id="tr<?php echo $this->_tpl_vars['reqdetails'][$this->_sections['q']['index']]['id']; ?>
" bgcolor="<?php echo smarty_function_cycle(array('values' => "#ffffff,#dfedfa"), $this);?>
">
                <td align="center" valign="top"><p><?php echo $this->_tpl_vars['data'][$this->_sections['q']['index']]['clientname']; ?>
</p></td>
                <td align="center" valign="top"><p><?php echo ((is_array($_tmp=$this->_tpl_vars['data'][$this->_sections['q']['index']]['appdate'])) ? $this->_run_mod_handler('date_format', true, $_tmp) : smarty_modifier_date_format($_tmp)); ?>
 / <?php echo $this->_tpl_vars['data'][$this->_sections['q']['index']]['apptime']; ?>
</p></td>
                <td align="center" valign="top"><?php echo $this->_tpl_vars['data'][$this->_sections['q']['index']]['pickaddr']; ?>
</td>
                <td align="center" valign="top"><?php echo $this->_tpl_vars['data'][$this->_sections['q']['index']]['destination']; ?>
</td>
                <td align="center" valign="top"><?php echo $this->_tpl_vars['data'][$this->_sections['q']['index']]['phnum']; ?>
</td>
                
                <!--<td align="center" valign="top"><a href="javascript:popWind('details.php?id=<?php echo $this->_tpl_vars['data'][$this->_sections['q']['index']]['id']; ?>
');">View</a></td>-->
                
                <td align="center" valign="top"><?php if ($this->_tpl_vars['data'][$this->_sections['q']['index']]['totmilage'] != ''):  echo $this->_tpl_vars['data'][$this->_sections['q']['index']]['totmilage'];  else: ?>0.0<?php endif; ?>&nbsp;&nbsp;<!--|&nbsp;&nbsp;<a href="approve_request.php?tid=<?php echo $this->_tpl_vars['data'][$this->_sections['q']['index']]['id'];  if ($this->_tpl_vars['appmiledate'] != ''): ?>&date=<?php echo $this->_tpl_vars['appmiledate'];  endif; ?>" rel="facebox">Change</a>--></td>
              </tr>
              <?php endif; ?>
              <?php endfor; else: ?>
              <tr>
                <td colspan="7" align="center" ><b>No Record Found</b></td>
              </tr>
              <?php endif; ?>
            </table></td>
        </tr>
        <tr>
          <td colspan="2" align="center"><?php if ($this->_tpl_vars['totalRows'] > 0):  echo $this->_tpl_vars['pages'];  endif; ?></td>
        </tr>
      </table></td>
  </tr>
</table>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "innerfooter.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?> 