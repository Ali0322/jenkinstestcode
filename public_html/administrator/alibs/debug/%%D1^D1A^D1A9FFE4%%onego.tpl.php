<?php /* Smarty version 2.6.12, created on 2020-05-20 17:38:15
         compiled from reqtpls/onego.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'date_format', 'reqtpls/onego.tpl', 165, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "headerinner.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
  echo ' 
   <script language="JavaScript" type="text/javascript" src="suggest.js"></script>
<script type="text/javascript">
$(document).ready(function() {
	$("#search").validate();
	$("#returnpickupUSS").mask("29:59");
	$("#apptimeUSS").mask("29:59:59");
	$("#dobUSS").mask("99/99/9999");
	$("#phnumUSS").mask("(454) 654-6546");

    
	});	
function deleteRec(id)
		{ var ok;
		ok=confirm("Are you sure you want to delete this record");
		if (ok)
		{ $.post("delete.php", {id: id}, function(data)
			{ });
			$(\'#tr\'+id).hide();
			//location.reload();
			 //location.href="reqdetails.php?delId="+id;
		return true;}else{			
			return false;}
}
function stchange(val,req)
{
  if (val != \'\'){		
 	location.href="reqdetails.php?st="+val+"&req="+req;
	return true;}else{
			return false;
		}			
	}	
function ChangeStatus(val,st){
var ans= 1;
if(st == \'3\'){
     jPrompt(\'Specify the reason for disapproving:\', \'\', \' Medical Transportation\', function(r) {
	  if(typeof(r) == "undefined"){
	    Ask();
	  }else{
	  if(r == \'\' || r == null){ jAlert(\'You must Specify a reason for disapproving\'); return false; }	  	  else{
	    ans = r;  	
        AjaxSend(val,st,ans); }
	  }
	});
}
if(st == \'2\'){
   AjaxSend(val,st,ans);
  }
}	
function removeTr(val){
  $(\'#tr\'+val).remove();
}
function Ask(){
    jPrompt(\'Specify the reason for disapproving:\', \'\', \' Medical Transportation\', function(r) {
	  if(typeof(r) == "undefined"){
	  jAlert(\'You must Specify a reason for disapproving\'); 	  
	    Ask();
	  }else{
	  return r; }
	});
}	
function AjaxSend(val,st,ans){
   $.post("hosprequests.php", {queryString: ""+val, sta:""+st, rea: ""+ans}, function(data){
  if(data.length > 0) {   
        if(st == \'3\'){	
          if(data == \'Success\'){
            //var url = window.location;
            //location.href= url;
           removeTr(val); return false;
          }else{
            //var url = window.location;
            //location.href= url;
            removeTr(val); return false;
          }	
		}
		else if(st == \'2\'){ 
          if(data == \'Success\'){
           //var url = window.location;
           //location.href= url;
            removeTr(val); return false;
          }else{
           //var url = window.location;
           //location.href= url;
            removeTr(val); return false;
          }		
		} 
        else{
		return false;	
		} 		
      }
	 });
}
$(document).ready(function(){	
$("#startdate22").datepicker( {maxDate: \'-0\', dateFormat: \'mm/dd/yy\'} );
$("#enddate22").datepicker( {maxDate: \'-0\', dateFormat: \'mm/dd/yy\'} );
$("#startdate22,#enddate22").mask("99/99/9999");
});
</script> 
'; ?>


  <table width="80%" border="0" cellspacing="0" cellpadding="0" align="center" bgcolor="#FFFFFF">
    <tr>
      <td><table width="99%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td height="19" colspan="2" align="center" class="okmsg"><span class="okmsg"><?php if ($this->_tpl_vars['msgs'] != ''): ?> <?php echo $this->_tpl_vars['msgs']; ?>
 <?php endif; ?>
              
              <?php if ($this->_tpl_vars['errors'] != ''): ?> <?php echo $this->_tpl_vars['errors']; ?>
 <?php endif; ?></span></td>
          </tr>
          <tr>
            <td height="19" colspan="2" align="center"><div align="right" id="add_div" style="padding-right:40px; padding-bottom:5px;"> [<a href="javascript:history.back();">Back</a>]</div></td>
          </tr>
          <tr><td colspan="2"><form name="search" id="search" method="post" action="" >
          <table width="100%" border="0">
  	

 
  <tr>
    <td><strong>Start Date:</strong></td>
    <td><input type="text" name="startdate" id="startdate22" class="required"  size="32" value="<?php echo $this->_tpl_vars['post']['startdate']; ?>
"/></td>
   <td><strong>End Date:</strong></td>
    <td><input type="text" name="enddate" id="enddate22" class="required" size="32"  value="<?php echo $this->_tpl_vars['post']['enddate']; ?>
"/></td>
  </tr>
   <tr>
    <td><strong>Member/Patient:</strong></td>
    <td><input type="text" name="clientname" id="pname" value="<?php echo $this->_tpl_vars['post']['clientname']; ?>
"  class="required" size="32" onKeyUp="searchSuggest();"/><div id="layer1"></div></td>
    <td colspan="2"><span  style="font-size:9px; color:#F00;">Date format mm/dd/yyyy | Time format hh:mm:ss</span></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><input type="submit" value="Search" name="search" class="btn"/><input type="hidden" name="st" value="approved"  /></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table></form>

          </td></tr>
          
         
          <tr>
            <td height="19" align="left" class="admintopheading">
              </td>
            <td class="admintopheading" style="text-align:center;">REQUESTS DETAIL </td>
          </tr>
          <tr>
            <td height="44" colspan="2" align="center"  valign="top" style="padding-bottom:50px;">
            
            <?php if ($this->_tpl_vars['post']['st'] == 'approved'): ?>
                <table width="100%" border="0" class="main_table88">
                  <tr class="admintopheading" height="55">
                    <td align="center">S#</td>
                    <td align="center">Patient Name</td>
                    <td align="center">Apt. date</td>
                    <td align="center">Leg</td>
                    <td align="center">Pick Time</td>
                    <td align="center">Est. Drop Time</td>
                    <td align="center">Assign Driver</td>
                    
                  </tr>
                  <form name="updatenow" id="updatenow" action="updatenow2.php" method="post" >
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
           <tr valign="top" id="tr<?php echo $this->_tpl_vars['data'][$this->_sections['q']['index']]['id']; ?>
">
           <td align="left"><b><?php echo $this->_sections['q']['iteration']; ?>
</b></td>
           <td align="left"><b><?php echo $this->_tpl_vars['data'][$this->_sections['q']['index']]['trip_user']; ?>
<input type="hidden" name="tdid[]" value="<?php echo $this->_tpl_vars['data'][$this->_sections['q']['index']]['tdid']; ?>
"  /></b></td>
           <td align="center"><input type="text" name="date[]" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['data'][$this->_sections['q']['index']]['date'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%m/%d/%Y") : smarty_modifier_date_format($_tmp, "%m/%d/%Y")); ?>
" size="12" /></td>
           <td align="left"><?php if ($this->_tpl_vars['data'][$this->_sections['q']['index']]['type'] == 'AB'): ?>First<?php elseif ($this->_tpl_vars['data'][$this->_sections['q']['index']]['type'] == 'BC' || $this->_tpl_vars['data'][$this->_sections['q']['index']]['type'] == 'BF'): ?>Second<?php elseif ($this->_tpl_vars['data'][$this->_sections['q']['index']]['type'] == 'CD' || $this->_tpl_vars['data'][$this->_sections['q']['index']]['type'] == 'CF'): ?>Third<?php elseif ($this->_tpl_vars['data'][$this->_sections['q']['index']]['type'] == 'DE' || $this->_tpl_vars['data'][$this->_sections['q']['index']]['type'] == 'DF'): ?>Forth<?php elseif ($this->_tpl_vars['data'][$this->_sections['q']['index']]['type'] == 'EF'): ?>Fifth<?php endif; ?> Leg</td>
              <td align="center"><input type="text" name="pck_time[]" value="<?php echo $this->_tpl_vars['data'][$this->_sections['q']['index']]['pck_time']; ?>
"  size="10" /></td>
              <td align="center"><input type="text" name="drp_time[]" value="<?php echo $this->_tpl_vars['data'][$this->_sections['q']['index']]['drp_time']; ?>
" size="10"/></td>
              <td align="center"><select name="drv_id[]" style="width:auto;" > 
              <option value="">--Select--</option>
<?php unset($this->_sections['r']);
$this->_sections['r']['name'] = 'r';
$this->_sections['r']['loop'] = is_array($_loop=$this->_tpl_vars['drivers']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['r']['show'] = true;
$this->_sections['r']['max'] = $this->_sections['r']['loop'];
$this->_sections['r']['step'] = 1;
$this->_sections['r']['start'] = $this->_sections['r']['step'] > 0 ? 0 : $this->_sections['r']['loop']-1;
if ($this->_sections['r']['show']) {
    $this->_sections['r']['total'] = $this->_sections['r']['loop'];
    if ($this->_sections['r']['total'] == 0)
        $this->_sections['r']['show'] = false;
} else
    $this->_sections['r']['total'] = 0;
if ($this->_sections['r']['show']):

            for ($this->_sections['r']['index'] = $this->_sections['r']['start'], $this->_sections['r']['iteration'] = 1;
                 $this->_sections['r']['iteration'] <= $this->_sections['r']['total'];
                 $this->_sections['r']['index'] += $this->_sections['r']['step'], $this->_sections['r']['iteration']++):
$this->_sections['r']['rownum'] = $this->_sections['r']['iteration'];
$this->_sections['r']['index_prev'] = $this->_sections['r']['index'] - $this->_sections['r']['step'];
$this->_sections['r']['index_next'] = $this->_sections['r']['index'] + $this->_sections['r']['step'];
$this->_sections['r']['first']      = ($this->_sections['r']['iteration'] == 1);
$this->_sections['r']['last']       = ($this->_sections['r']['iteration'] == $this->_sections['r']['total']);
?>
<option value="<?php echo $this->_tpl_vars['drivers'][$this->_sections['r']['index']]['drv_code']; ?>
" <?php if ($this->_tpl_vars['drivers'][$this->_sections['r']['index']]['drv_code'] == $this->_tpl_vars['data'][$this->_sections['q']['index']]['drv_id']): ?>selected<?php endif; ?>><?php echo $this->_tpl_vars['drivers'][$this->_sections['r']['index']]['fname']; ?>
-<?php echo $this->_tpl_vars['drivers'][$this->_sections['r']['index']]['lname']; ?>
</option>
<?php endfor; endif; ?>
               </select></td>
            </tr>
                  <?php endfor; else: ?>
            <tr> <td colspan="7" align="center" class="labeltxt"><b>No Record Found</b></td> </tr>
                  <?php endif; ?>
                  <?php if ($this->_tpl_vars['data'] != ''): ?>
                  <tr>
                    <td colspan="7" ><input type="submit" name="updatenow" value=" Update ..." class="btn" /></td>
             </tr>    <?php endif; ?>
             </form>
            
                </table>
                <?php endif; ?>    
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
