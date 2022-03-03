<?php /* Smarty version 2.6.12, created on 2022-02-24 09:27:10
         compiled from vehtpl/mil_history.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'cycle', 'vehtpl/mil_history.tpl', 439, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "headerinner.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>



<?php echo '



<script type="text/javascript">



function chk_date(date)



{



	



}











$(document).ready(function(){



	var sdate = $(\'#startdate\').val();	



	if(sdate!=\'\' )



	{



		showsearch();



	}



	else



	{



		hidesearch();



	}



	$(\'#pub_date\').datepicker();







		//hidesearch();



  });



function quicksearch()



{



	var date = $(\'#q_date\').val();



	//alert("This is date "+date);



	location.href="index.php?q_date="+date;



}



function showsearch()



{



		$(\'#search_form\').show();



			$(\'#hide_search\').show();



				$(\'#show_search\').hide();



}



function hidesearch()



{



	$(\'#search_form\').hide();



	$(\'#hide_search\').hide();



				$(\'#show_search\').show();



}



function Search()



{



	var date = $(\'#pub_date\').val();



	//alert("This is date "+date);



	location.href="index.php?date="+date;



}







function deleteRec(id)



		{



		var ok;



		ok=confirm("Are you sure you want to delete this record?");



		if (ok)



		{ location.href="index.php?del_id="+id;



		return true;}else{			



			return false;}



	}



	



function stchange(val)



{



  if (val != \'\'){		



 	location.href="index.php?st="+val;



	return true;}else{



			return false;



		}			



	}	







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



          <td height="19" align="center"><div align="right" id="add_div" style="padding-right:20px; padding-bottom:5px;">



          [<a href="javascript:history.back();">Back</a>]</div></td>



        </tr>



        



        <!--<tr>



          <td height="19" align="left" ><br />



			<select name="q_date" id="q_date" onchange="quicksearch();">



             <option value="">Select Month </option>



            <?php unset($this->_sections['dt']);
$this->_sections['dt']['name'] = 'dt';
$this->_sections['dt']['loop'] = is_array($_loop=$this->_tpl_vars['dates']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['dt']['show'] = true;
$this->_sections['dt']['max'] = $this->_sections['dt']['loop'];
$this->_sections['dt']['step'] = 1;
$this->_sections['dt']['start'] = $this->_sections['dt']['step'] > 0 ? 0 : $this->_sections['dt']['loop']-1;
if ($this->_sections['dt']['show']) {
    $this->_sections['dt']['total'] = $this->_sections['dt']['loop'];
    if ($this->_sections['dt']['total'] == 0)
        $this->_sections['dt']['show'] = false;
} else
    $this->_sections['dt']['total'] = 0;
if ($this->_sections['dt']['show']):

            for ($this->_sections['dt']['index'] = $this->_sections['dt']['start'], $this->_sections['dt']['iteration'] = 1;
                 $this->_sections['dt']['iteration'] <= $this->_sections['dt']['total'];
                 $this->_sections['dt']['index'] += $this->_sections['dt']['step'], $this->_sections['dt']['iteration']++):
$this->_sections['dt']['rownum'] = $this->_sections['dt']['iteration'];
$this->_sections['dt']['index_prev'] = $this->_sections['dt']['index'] - $this->_sections['dt']['step'];
$this->_sections['dt']['index_next'] = $this->_sections['dt']['index'] + $this->_sections['dt']['step'];
$this->_sections['dt']['first']      = ($this->_sections['dt']['iteration'] == 1);
$this->_sections['dt']['last']       = ($this->_sections['dt']['iteration'] == $this->_sections['dt']['total']);
?>



            	<option value="<?php echo $this->_tpl_vars['dates'][$this->_sections['dt']['index']]['date']; ?>
" <?php if ($this->_tpl_vars['dates'][$this->_sections['dt']['index']]['date'] == $this->_tpl_vars['month']): ?> selected="selected" <?php endif; ?>><?php echo $this->_tpl_vars['dates'][$this->_sections['dt']['index']]['name']; ?>
</option>



             <?php endfor; endif; ?>



            </select>



            </td>



        </tr>-->



        <tr>



          <td height="19" align="center" class="admintopheading">MILAGE HISTORY - [<?php echo $this->_tpl_vars['vehicle']['vname']; ?>
 - <?php echo $this->_tpl_vars['vehicle']['vnumber']; ?>
 ]</td>



        </tr>



        <tr>



          <td height="44" align="center"  valign="top" style="padding-bottom:20px;"><table width="100%" border="0" class="main_table">



              <tr>



                <td width="5%" align="center" class="label_txt_heading"><strong>S.No.</strong></td>



<!--                <td width="20%" align="center" class="labeltxt"><strong>Vehicle Number</strong></td>



                <td width="20%" align="center" class="labeltxt"><strong>Vehivle Name</strong></td>-->



                <td width="25%" align="center" class="label_txt_heading"><strong>Trip Consumer</strong></td>



                <td width="20%" align="center" class="label_txt_heading"><strong>Trip Corporation</strong></td>



                <td width="15%" align="center" class="label_txt_heading"><strong>Pick up Address</strong></td>



                <td width="15%" align="center" class="label_txt_heading"><strong>Drop Address</strong></td>



                <td width="15%" align="center" class="label_txt_heading"><strong>Total Miles</strong></td>



                <!--<td width="15%" align="center" class="labeltxt"><strong>Remarks</strong></td>-->



               <!-- <td width="15%" align="center" class="labeltxt"><strong>Options</strong></td>-->



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
">



                <td align="center" valign="middle"><b><?php echo $this->_sections['q']['iteration']; ?>
.</b></td>



                <!--<td align="center" valign="middle"><?php echo $this->_tpl_vars['data'][$this->_sections['q']['index']]['vnumber']; ?>
</td>



                <td align="center" valign="middle"><?php echo $this->_tpl_vars['data'][$this->_sections['q']['index']]['vname']; ?>
</td>-->



                <td align="center" valign="middle"><?php echo $this->_tpl_vars['data'][$this->_sections['q']['index']]['trip_user']; ?>
</td>



                <td align="center" valign="middle"><?php echo $this->_tpl_vars['data'][$this->_sections['q']['index']]['trip_clinic']; ?>
</td>



                <td align="center" valign="middle"><?php echo $this->_tpl_vars['data'][$this->_sections['q']['index']]['pck_add']; ?>
</td>



                <td align="center" valign="middle"><?php echo $this->_tpl_vars['data'][$this->_sections['q']['index']]['drp_add']; ?>
 </td>



                <td align="center" valign="middle"><?php echo $this->_tpl_vars['data'][$this->_sections['q']['index']]['trip_miles']; ?>
 </td>



                <!--<td align="center" valign="middle"><?php echo $this->_tpl_vars['data'][$this->_sections['q']['index']]['remarks']; ?>
 </td>-->



                <!--<td align="center" valign="middle"><strong><?php echo $this->_tpl_vars['vehdetails'][$this->_sections['q']['index']]['refildate']; ?>
</strong></td>-->



               <!-- <td align="center" valign="top"><a href="edit.php?id=<?php echo $this->_tpl_vars['data'][$this->_sections['q']['index']]['id']; ?>
" title="Edit Record" rel="facebox"> <img border="0" alt="Edit" src="../graphics/edit.png" /></a>&nbsp;&nbsp; <a href="#" onclick="return deleteRec('<?php echo $this->_tpl_vars['drvdetails'][$this->_sections['q']['index']]['Drvid']; ?>
');" title="Remove"> <img alt="Remove" border="0"  src="../graphics/delete.png" /></a></td>-->



              </tr>



              <?php endfor; else: ?>



              <tr>



                <td colspan="7" align="center"><b>No Record Found</b></td>



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