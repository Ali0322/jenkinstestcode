<?php /* Smarty version 2.6.12, created on 2019-12-13 18:01:07
         compiled from rate_management/index.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'cycle', 'rate_management/index.tpl', 100, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "headerinner.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php echo ' 
<script type="text/javascript">
function deleteRec(id)
		{
		var ok;
		ok=confirm("Are you sure you want to delete this record");
		if (ok)
		{ location.href="index.php?del_id="+id;
		return true;}else{			
			return false;}
	}
function add_form(val){
	if (val != \'\'){		
	$(\'#add_rates\').show();
 	//location.href="index.php?st="+val;
	}else{
		$(\'#add_rates\').hide();
			}			
	}
function add_rates2(){
	var pickup_ch 		= $(\'#pickup_ch\').val();
	var permile_ch 		= $(\'#permile_ch\').val();
	var waittime_ch 	= $(\'#waittime_ch\').val();
	var noshow_ch 		= $(\'#noshow_ch\').val();
	var afterhour_ch 	= $(\'#afterhour_ch\').val();
	//var stretcher_ch 	= $(\'#stretcher_ch\').val();
	var dstretcher_ch 	= $(\'#dstretcher_ch\').val();
	var bstretcher_ch 	= $(\'#bstretcher_ch\').val();
	var oxygen_ch 	= $(\'#oxygen_ch\').val();
	var doublewheel_ch 	= $(\'#doublewheel_ch\').val();
	
	var v_type 		= $(\'#v_type\').val();
	var id 			= $(\'#id\').val();
	//alert(id+\'b\'+v_type+\'b\'+acharges+\'b\'+wtcharges+\'b\'+mcharges+\'b\'+bcharges); return false;
  $.post("addrate.php", {pickup_ch: ""+pickup_ch, permile_ch: ""+permile_ch, waittime_ch: ""+waittime_ch, noshow_ch: ""+noshow_ch, afterhour_ch: ""+afterhour_ch,  dstretcher_ch: ""+dstretcher_ch, bstretcher_ch: ""+bstretcher_ch, oxygen_ch: ""+oxygen_ch, doublewheel_ch: ""+doublewheel_ch, v_type: ""+v_type, id: ""+id}, function(data){
				if(data.length > 0) { 
				//alert(data);
				//alert(\'Updated!\');
				location.reload(); } }); 
	}	
function update_rate(val){
	var pickup_ch 		= $(\'#pickup_ch\'+val).val();
	var permile_ch 		= $(\'#permile_ch\'+val).val();
	var waittime_ch 	= $(\'#waittime_ch\'+val).val();
	var noshow_ch 		= $(\'#noshow_ch\'+val).val();
	var afterhour_ch 	= $(\'#afterhour_ch\'+val).val();
	//var stretcher_ch 	= $(\'#stretcher_ch\'+val).val();
	var dstretcher_ch 	= $(\'#dstretcher_ch\'+val).val();
	var bstretcher_ch 	= $(\'#bstretcher_ch\'+val).val();
	var oxygen_ch 	= $(\'#oxygen_ch\'+val).val();
	var doublewheel_ch 	= $(\'#doublewheel_ch\'+val).val();
	//alert(bcharges+mcharges+wtcharges+acharges);
	
	$.post("updaterate.php", {pickup_ch: ""+pickup_ch, permile_ch: ""+permile_ch, waittime_ch: ""+waittime_ch, noshow_ch: ""+noshow_ch, afterhour_ch: ""+afterhour_ch, dstretcher_ch: ""+dstretcher_ch, bstretcher_ch: ""+bstretcher_ch, oxygen_ch: ""+oxygen_ch, doublewheel_ch: ""+doublewheel_ch, id: ""+val}, function(data){
				if(data.length > 0) { alert(\'Updated!\');
				//location.reload(); 
				} }); 
	
	}
function deleteit(val){
	$.post("delete.php", {id: ""+val}, function(data){
				if(data.length > 0) { location.reload(); } }); 
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
          <td height="19" align="center"><div align="right" id="add_div" style="padding-right:20px; padding-bottom:5px;"> [<a href="javascript:history.back();">Back</a>] </div></td>
        </tr>
        <tr>
          <td height="19" align="center" class="admintopheading">RATES MANAGEMENT FOR [ <?php echo $this->_tpl_vars['host_info']['account_name']; ?>
 ] </td>
        </tr>
        <tr>
          <td height="44" align="center"  valign="top"><table width="100%" border="0" class="main_table">
              <tr>
                <td width="5%" align="center" class="label_txt_heading"><strong>#.</strong></td>
                <td width="20%" align="center" class="label_txt_heading"><strong>Vehicle Type</strong></td>
                <td width="11%" align="center" class="label_txt_heading"><strong>Pickup<br/>Charges (per trip)</strong></td>
                <td width="11%" align="center" class="label_txt_heading"><strong>Mile Charges<br/>(per mile)</strong></td>
                <td width="11%" align="center" class="label_txt_heading"><strong>Wait Time Charges<br/>(per minute)</strong></td>
               <td width="11%" align="center" class="label_txt_heading"><strong>No Show Fee<br/>(per trip)</strong></td>
               <td width="11%" align="center" class="label_txt_heading"><strong>After Hours Fee<br/>(per trip)</strong></td>
              <!-- <td width="11%" align="center" class="label_txt_heading"><strong>Stretcher Charges<br/>(per trip)</strong></td>-->
               <td width="10%" align="center" class="label_txt_heading"><strong>2 Man Team Charges<br/>(per trip)</strong></td>
               <td width="10%" align="center" class="label_txt_heading"><strong>Bariatric Stretcher Charges<br/>(per trip)</strong></td>
               <td width="10%" align="center" class="label_txt_heading"><strong>0xygen charges<br/>(per trip)</strong></td>
				<td width="10%" align="center" class="label_txt_heading"><strong>Wheel Chair Rental<br/>(per trip)</strong></td>
               <td width="20%" align="center" class="label_txt_heading"><strong>Options</strong></td>
              </tr>
              <?php unset($this->_sections['q']);
$this->_sections['q']['name'] = 'q';
$this->_sections['q']['loop'] = is_array($_loop=$this->_tpl_vars['v_rates']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
                <td align="left" valign="middle"><b><?php echo $this->_sections['q']['iteration']; ?>
.</b></td>
                <td align="left" valign="middle"><?php echo $this->_tpl_vars['v_rates'][$this->_sections['q']['index']]['vehtype']; ?>
</td>
                <td align="left" valign="middle"><input type="text" id="pickup_ch<?php echo $this->_tpl_vars['v_rates'][$this->_sections['q']['index']]['id']; ?>
" value="<?php echo $this->_tpl_vars['v_rates'][$this->_sections['q']['index']]['pickup_ch']; ?>
"  size="5" /></td>
                <td align="left" valign="middle"><input type="text" id="permile_ch<?php echo $this->_tpl_vars['v_rates'][$this->_sections['q']['index']]['id']; ?>
" value="<?php echo $this->_tpl_vars['v_rates'][$this->_sections['q']['index']]['permile_ch']; ?>
"  size="5"  /></td>
                <td align="left" valign="middle"><input type="text" id="waittime_ch<?php echo $this->_tpl_vars['v_rates'][$this->_sections['q']['index']]['id']; ?>
" value="<?php echo $this->_tpl_vars['v_rates'][$this->_sections['q']['index']]['waittime_ch']; ?>
"  size="5"  /></td>
                <td align="left" valign="middle"><input type="text" id="noshow_ch<?php echo $this->_tpl_vars['v_rates'][$this->_sections['q']['index']]['id']; ?>
" value="<?php echo $this->_tpl_vars['v_rates'][$this->_sections['q']['index']]['noshow_ch']; ?>
"  size="5"  /></td>
                <td align="left" valign="middle"><input type="text" id="afterhour_ch<?php echo $this->_tpl_vars['v_rates'][$this->_sections['q']['index']]['id']; ?>
" value="<?php echo $this->_tpl_vars['v_rates'][$this->_sections['q']['index']]['afterhour_ch']; ?>
"  size="5"  /></td>
    <!--            <td align="left" valign="middle"><input type="text" id="stretcher_ch<?php echo $this->_tpl_vars['v_rates'][$this->_sections['q']['index']]['id']; ?>
" value="<?php echo $this->_tpl_vars['v_rates'][$this->_sections['q']['index']]['stretcher_ch']; ?>
"  size="5"  /></td>-->
                <td align="left" valign="middle"><input type="text" id="dstretcher_ch<?php echo $this->_tpl_vars['v_rates'][$this->_sections['q']['index']]['id']; ?>
" value="<?php echo $this->_tpl_vars['v_rates'][$this->_sections['q']['index']]['dstretcher_ch']; ?>
"  size="5"  /></td>
				<td align="left" valign="middle"><input type="text" id="bstretcher_ch<?php echo $this->_tpl_vars['v_rates'][$this->_sections['q']['index']]['id']; ?>
" value="<?php echo $this->_tpl_vars['v_rates'][$this->_sections['q']['index']]['bstretcher_ch']; ?>
"  size="5"  /></td>
                <td align="left" valign="middle"><input type="text" id="oxygen_ch<?php echo $this->_tpl_vars['v_rates'][$this->_sections['q']['index']]['id']; ?>
" value="<?php echo $this->_tpl_vars['v_rates'][$this->_sections['q']['index']]['oxygen_ch']; ?>
"  size="5"  /></td>
                <td align="left" valign="middle"><input type="text" id="doublewheel_ch<?php echo $this->_tpl_vars['v_rates'][$this->_sections['q']['index']]['id']; ?>
" value="<?php echo $this->_tpl_vars['v_rates'][$this->_sections['q']['index']]['doublewheel_ch']; ?>
"  size="5"  /></td>
                <td align="center" valign="minddle">&nbsp;<a href="#" onclick="deleteit('<?php echo $this->_tpl_vars['v_rates'][$this->_sections['q']['index']]['id']; ?>
');">Delete</a>&nbsp;<input type="button" value="Update" id="X" onclick="update_rate('<?php echo $this->_tpl_vars['v_rates'][$this->_sections['q']['index']]['id']; ?>
');" class="btn"/></td>
              </tr>
              <?php endfor; else: ?>
              <tr>
                <td colspan="7" align="center"><b>No Record Found</b></td>
              </tr>
              <?php endif; ?>
            </table></td>
        </tr>
        <tr>
          <td style="border: solid 0px #F00; padding-left:80px; padding-top:40px;">Add Rates for New Vehicle Type (Service): <select name="v_type" id="v_type" onchange="add_form(this.value);" >
              <option value="">Select Vehicle Type</option>
         <?php unset($this->_sections['q']);
$this->_sections['q']['name'] = 'q';
$this->_sections['q']['loop'] = is_array($_loop=$this->_tpl_vars['v_types']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
              <option value="<?php echo $this->_tpl_vars['v_types'][$this->_sections['q']['index']]['id']; ?>
"><?php echo $this->_tpl_vars['v_types'][$this->_sections['q']['index']]['vehtype']; ?>
</option>
        <?php endfor; endif; ?>
            </select></td>
        </tr>
        <tr>
          <td><table width="650" border="0" cellspacing="2" cellpadding="2" id="add_rates" style="display:none; padding-left:100px;">
              <tr>
                <td colspan="2"></td>
              </tr>
              <tr>
            <td width="40%" height="25" align="left" class="labeltxt"><strong>Pickup Charges:</strong></td>
                <td width="60%" height="25"><input name="pickup_ch" type="text" class="" id="pickup_ch" value="0.0" maxlength="10" size="8" />
                  &nbsp;<span class="SmallnoteTxt">* </span>&nbsp;(<b>per trip</b>)</td>
              </tr>
              <tr>
                <td width="40%" height="25" align="left" class="labeltxt"><strong>Mile Charges:</strong></td>
                <td width="60%" height="25"><input name="permile_ch" type="text" class="" id="permile_ch" value="0.0" maxlength="10" size="8" />
                  &nbsp;<span class="SmallnoteTxt">* </span>&nbsp;(<b>per mile</b>)</td>
              </tr>
              <tr>
                <td width="40%" height="25" align="left" class="labeltxt"><strong>Wait Time Charges:</strong></td>
                <td width="60%" height="25"><input name="waittime_ch" type="text" class="" id="waittime_ch" value="0.0" maxlength="10" size="8" />
                  &nbsp;<span class="SmallnoteTxt">* </span>&nbsp;(<b>per hour</b>) </td>
              </tr>
              <tr>
                <td width="40%" height="25" align="left" class="labeltxt"><strong>No Show Fee:</strong></td>
                <td width="60%" height="25"><input name="noshow_ch" type="text" class="" id="noshow_ch" value="0.0" maxlength="10" size="8" />
                  &nbsp;<span class="SmallnoteTxt">* </span>&nbsp;(<b>per trip</b>)</td>
              </tr>
              <tr>
                <td width="40%" height="25" align="left" class="labeltxt"><strong>After Hours Fee:</strong></td>
                <td width="60%" height="25"><input name="afterhour_ch" type="text" class="" id="afterhour_ch" value="0.0" maxlength="10" size="8" />
                  &nbsp;<span class="SmallnoteTxt">* </span>&nbsp;(<b>per trip</b>)</td>
              </tr>
               <!--<tr>
                <td width="40%" height="25" align="left" class="labeltxt"><strong>Stretcher Charges:</strong></td>
                <td width="60%" height="25"><input name="stretcher_ch" type="text" class="" id="stretcher_ch" value="0.0" maxlength="10" size="8" />
                  &nbsp;<span class="SmallnoteTxt">* </span>&nbsp;(<b>per trip</b>)</td>
              </tr>-->
               <tr>
                <td width="40%" height="25" align="left" class="labeltxt"><strong>2 Man Team Charges:</strong></td>
                <td width="60%" height="25"><input name="dstretcher_ch" type="text" class="" id="dstretcher_ch" value="0.0" maxlength="10" size="8" />
                  &nbsp;<span class="SmallnoteTxt">* </span>&nbsp;(<b>per trip</b>)</td>
              </tr>
               <tr>
                <td width="40%" height="25" align="left" class="labeltxt"><strong>Bariatric Stretcher Charges:</strong></td>
                <td width="60%" height="25"><input name="bstretcher_ch" type="text" class="" id="bstretcher_ch" value="0.0" maxlength="10" size="8" />
                  &nbsp;<span class="SmallnoteTxt">* </span>&nbsp;(<b>per trip</b>)</td>
              </tr>
              <tr>
                <td width="40%" height="25" align="left" class="labeltxt"><strong>Oxygen Charges:</strong></td>
                <td width="60%" height="25"><input name="oxygen_ch" type="text" class="" id="oxygen_ch" value="0.0" maxlength="10" size="8" />
                  &nbsp;<span class="SmallnoteTxt">* </span>&nbsp;(<b>per trip</b>)</td>
              </tr>
              <tr>
                <td width="40%" height="25" align="left" class="labeltxt"><strong>Wheel Chair Rental:</strong></td>
                <td width="60%" height="25"><input name="doublewheel_ch" type="text" class="" id="doublewheel_ch" value="0.0" maxlength="10" size="8" />
                  &nbsp;<span class="SmallnoteTxt">* </span>&nbsp;(<b>per trip</b>)</td>
              </tr>
              <tr>
                <td height="25">&nbsp;</td>
                <td height="25"><input type="button" value="Add Rates" id="ddd" onclick="add_rates2();"  class="btn"/></td>
              </tr>
            </table></td>
        </tr>
        <tr>
          <td align="center"><?php echo $this->_tpl_vars['paging']; ?>
<input type="hidden" value="<?php echo $this->_tpl_vars['id']; ?>
" id="id" name="id"  /></td>
        </tr>
      </table></td>
  </tr>
</table>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "innerfooter.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?> 