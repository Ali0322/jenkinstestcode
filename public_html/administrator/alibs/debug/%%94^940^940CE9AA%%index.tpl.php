<?php /* Smarty version 2.6.12, created on 2019-12-23 17:22:47
         compiled from logtpl/index.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'cycle', 'logtpl/index.tpl', 391, false),)), $this); ?>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "headerinner.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<?php echo '
<style type="text/css">
<!--
.sterick {
	color: #F00;
}
-->
</style>
<script type="text/javascript">

function verify()

{

	var ok;

		ok=confirm("Are you sure you want to delete this record?");

		if (ok)

		{ 
            location.href="index.php?clear=clear"; 
			return true;

		}

		else

		{			
           location.href="index.php"; 
			return false;

		}

}





$(document).ready(function(){



    $(\'#searchReport\').validationEngine();

	

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

		ok=confirm("Are you sure you want to delete this record");

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





function compare()

{

	var date1 = $(\'#startdate\').val();

	var date2 = $(\'#enddate\').val();

	

	if(date1 > date2){

	alert("From: Date cannot be greater then To: Date");

	return false;

	}

	return true;

	

}



</script>

'; ?>


<table border="0" cellspacing="0" cellpadding="0" class="outer_table" align="center" bgcolor="#FFFFFF" style="margin-bottom:10px;">

  <tr>

    <td><table width="100%" border="0" cellspacing="0" cellpadding="0">

       

        <tr>

          <td height="19" align="center" class="okmsg"><?php if ($this->_tpl_vars['msgs'] != ''): ?> <?php echo $this->_tpl_vars['msgs']; ?>
 <?php endif; ?>

            <?php if ($this->_tpl_vars['errors'] != ''): ?> <?php echo $this->_tpl_vars['errors']; ?>
 <?php endif; ?></td>

        </tr>

        <tr>

          <td height="19" align="center">
		  <div align="right" id="add_div" style="padding-right:20px; padding-bottom:5px;">

            [<a href="javascript:history.back();">Back</a>]&nbsp;|&nbsp; 

            [<a   href="javascript:verify();" >Clear Records</a>]&nbsp;|&nbsp; 

            <!--[<a href="index.php?state = trash">Trash Can</a>]&nbsp;|&nbsp; -->

            [<span id="show_search"><a href="#" onclick="showsearch();"> Show Search</a></span><span id="hide_search"><a href="#" onclick="hidesearch();"> Hide Search</a></span>]&nbsp;

            <a title="Add Vehicle" href="timein.php" rel="facebox"><!--<img alt="Add Time In" border="0" src="../graphics/add_12.gif">--></a></div></td>

        </tr>

        <tr>

          <td></td>

        </tr>

        <tr>

          <td height="19" align="center"><div id="search_form">

              <form name="searchReport" id="searchReport" action="index.php" method="get" >

                <table width="80%" border="0" cellspacing="2" cellpadding="2" align="center" class="">

                  <tr>

                    <td colspan="4" valign="top" class="admintopheading" align="left">SEARCH CRITERIA</td>

                  </tr>

                  <tr>

                    <td align="left" valign="top" class="labeltxt"><strong>From:</strong></td>

                    <td align="left" valign="top"><input type="text" name="startdate" id="startdate" value="<?php echo $this->_tpl_vars['sdate']; ?>
" class="validate[required] inputTxtField date"/>

                      <span class="sterick">*</span>&nbsp;

                      <div class="suggestionsBox" id="suggestions1" style="display: none; position:absolute;"> <img src="images/upArrow.png" style="position: relative; top: 7px; left: -10px;" alt="upArrow" />

                        <div class="suggestionList" id="autoSuggestionsList1"> &nbsp; </div>

                      </div>

                    (mm/dd/yyyy)</td>

                    <td align="right" valign="top" class="labeltxt"><strong>To:</strong>&nbsp;</td>

                    <td align="left" valign="top" class="date required"><input type="text" name="enddate" id="enddate" value="<?php echo $this->_tpl_vars['edate']; ?>
" class="validate[required] inputTxtField date" /> 
                      <span class="sterick">*</span>

                      <div class="suggestionsBox" id="layer" style="display: none; position:absolute;">

                        <div class="suggestionList" id="div">&nbsp; </div>

                      </div>

                    (mm/dd/yyyy)</td>

                  </tr>

                  <tr>

                    <td align="left" valign="top" class="labeltxt"><strong>User:</strong></td>

                    <td align="left" valign="top"> <select name="user">

                    <option value="">Select User</option>

                    <?php unset($this->_sections['d']);
$this->_sections['d']['name'] = 'd';
$this->_sections['d']['loop'] = is_array($_loop=$this->_tpl_vars['users']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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

                      <option value="<?php echo $this->_tpl_vars['users'][$this->_sections['d']['index']]['admin_id']; ?>
" <?php if ($this->_tpl_vars['users'][$this->_sections['d']['index']]['admin_id'] == $this->_tpl_vars['user_id']): ?> selected="selected" <?php endif; ?>><?php echo $this->_tpl_vars['users'][$this->_sections['d']['index']]['admin_name']; ?>
 <?php echo $this->_tpl_vars['users'][$this->_sections['d']['index']]['admin_lname']; ?>
</option>

                    <?php endfor; endif; ?>

                    </select> 
                      <span class="sterick">*</span></td>

                    <!--<input type="text" name="drv_id" id="drv_id" value="<?php echo $this->_tpl_vars['drv_id']; ?>
" class="inputTxtField" />-->

                    <td width="16%" align="left" valign="top" class="labeltxt">&nbsp;</td>

                    <td align="right" valign="top" class="labeltxt">&nbsp;</td>

                  </tr>

                  <tr>

                    <td align="left" valign="top">&nbsp;</td>

                    <td colspan="3" align="left" valign="top"><font color="#FF0000"> <b>Note:*</b>

                      <ol>

                        <li>Combination of all fields are not mandatory</li>

                        <li>Both Start and End date must be provided.</li>

                      </ol>

                      </font></td>

                  </tr>

                  <tr>

                    <td align="left" valign="top"><?php if ($this->_tpl_vars['uid'] != ''): ?><input name="uid" type="hidden" id="uid" value="<?php echo $this->_tpl_vars['uid']; ?>
" /><?php endif; ?></td>

                    <td colspan="3" align="center" valign="top"><input type="submit" name="search" value='Search' class="inputButton btn" id="search" onclick="return compare();"  />

                      &nbsp;

                    <input type="reset" name="reset" value='Reset' class="inputButton btn"  /></td>

                  </tr>

                </table>

              </form>

            </div> </td>

        </tr>

        <tr>

          <td height="19" align="left" style="padding-bottom:10px;"><br />

			<select name="q_date" id="q_date" onchange="quicksearch();">

             <option value="">Select Month</option>

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

        </tr>

        <tr>

          <td height="19" align="center" class="admintopheading">LOG MANAGEMENT</td>

        </tr>

        <tr>

          <td height="44" align="center"  valign="top" style="padding-bottom:50px;"><table width="100%" border="0" class="main_table">

              <tr>

                <td width="5%" align="center" class="label_txt_heading"><strong>S.No.</strong></td>

                <td width="10%" align="center" class="label_txt_heading"><strong>User Name</strong></td>

                 <td width="10%" align="center" class="label_txt_heading"><strong>Date</strong></td>

              <!--  <td width="10%" align="center" class="label_txt_heading"><strong>Time</strong></td>-->

                <td align="center" class="label_txt_heading"><strong>link</strong></td>

              </tr>

              <?php unset($this->_sections['q']);
$this->_sections['q']['name'] = 'q';
$this->_sections['q']['loop'] = is_array($_loop=$this->_tpl_vars['log']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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

                <td align="center" valign="middle"><?php echo $this->_tpl_vars['log'][$this->_sections['q']['index']]['user']; ?>
</td>

                <td align="center" valign="middle"><?php echo $this->_tpl_vars['log'][$this->_sections['q']['index']]['date']; ?>
</td>

              <!--  <td align="center" valign="middle"><?php echo $this->_tpl_vars['log'][$this->_sections['q']['index']]['time']; ?>
</td>-->

                <td align="left" valign="middle"><?php echo $this->_tpl_vars['log'][$this->_sections['q']['index']]['link']; ?>
</td>

              </tr>

              <?php endfor; else: ?>

              <tr>

                <td colspan="5" align="center"><b>No Record Found</b></td>

              </tr>

              <?php endif; ?>

            </table></td>

        </tr>

        <tr>

          <td align="center"><?php echo $this->_tpl_vars['pages']; ?>
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