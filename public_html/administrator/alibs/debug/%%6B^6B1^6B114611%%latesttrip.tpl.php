<?php /* Smarty version 2.6.12, created on 2022-02-23 15:02:35
         compiled from rpaneltpl/latesttrip.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'cycle', 'rpaneltpl/latesttrip.tpl', 96, false),)), $this); ?>
<?php echo '
<style>
.background-color-red { background-color: orange; }
</style>
<script language="javascript" type="text/javascript" src="../scripts/jquery-1.2.6.js"></script>
<script type="text/javascript">
$(document).ready(function(){ 
/*var ty = \'{/lietral}{$waqfa}{lietral}\';
 setInterval(ref,ty);
function ref(){
	var duration = \'';  echo $this->_tpl_vars['duration'];  echo '\';
	location.href="latesttrips.php?duration="+duration;
	}*/
 setInterval(findRed,1000);     
 function findRed(){ 
  $("tr.blinkRed").each(function(){ 
       $(this).toggleClass("background-color-red");
     })
    }
}); 
function deleteRec(id,id2)
		{
		var ok;
		ok=confirm("Are you sure you want to delete this record");
		if (ok)
		{		
			location.href="grid.php?delId="+id+"&id="+id2;
			return true;
			//document.delrecfrm.submit();
		}
		else
		{
			return false;
		}
	}
	//window.onload = self.focus();
</script>
'; ?>

<link href="../theme/style.css" rel="stylesheet" type="text/css">
<!----> <meta http-equiv="refresh" content="<?php echo $this->_tpl_vars['duration']; ?>
; URL=latesttrips.php?duration=<?php echo $this->_tpl_vars['duration']; ?>
">
<body onBlur="self.focus();">

<table width="100%" align="center">
<tr align="center"><td>
<table width="100%" border="0" align="center" cellpadding="3" cellspacing="1" class="main_table" >
					<tr>
                      <td colspan="11" align="left" >
                      	<table cellpadding="2" cellspacing="2" width="80%">
                        	<tr>
                            	<td><img src="../images/logo.png"></td>
                                <td><b>Date:</b><?php echo $this->_tpl_vars['today']; ?>
</td>
                                <td>
                                	<form method="post" action="latesttrips.php">
                     <b>Update Every :</b>
                     <select id="duration" name="duration" onChange="this.form.submit();" class=""> 
                     <option selected="selected">--Select--</option>
					  <option value="5"  <?php if ($this->_tpl_vars['duration'] == '5'): ?> selected="selected"  <?php endif; ?>>5 sec</option>
					  <option value="15" <?php if ($this->_tpl_vars['duration'] == '15'): ?> selected="selected" <?php endif; ?>>15 sec</option>
					  <option value="30" <?php if ($this->_tpl_vars['duration'] == '30'): ?> selected="selected" <?php endif; ?>>30 sec</option>
					  <option value="60" <?php if ($this->_tpl_vars['duration'] == '60'): ?> selected="selected" <?php endif; ?>>1 min</option>
                      <option value="300" <?php if ($this->_tpl_vars['duration'] == '300'): ?> selected="selected" <?php endif; ?>>5 min</option>
					  </select>
                    
					</form>
                                </td>
                                <td align="right"><a href="index.php"><img src="../images/home.png" alt="" border="0"></a></td>
                            </tr>
                        </table>
                      </td>
                    </tr>                   
                    <tr>
                      <td colspan="11" align="center" >&nbsp;</td>
                    </tr>
                    <tr>
                      <td colspan="11" align="left" style="font-size:14px; color:#000; font-weight:bold;" ><table width="100%" border="0" cellspacing="0" cellpadding="3">
                        <tr>
                          <td width="334" style="font-size:15px; color:#000; font-weight:bold; background:url(../images/adm_tab.png) no-repeat; text-align:center; width:200px; height:30px;">Online Trips </td>
                          <td>&nbsp;</td>
                        </tr>
                      </table></td>
                    </tr>
                    <tr>
                      <td width="10%" align="left" class="label_txt_heading"><strong>Trip ID </strong></td>
                      <!--<td width="13%" align="left" class="label_txt_heading"><strong>Facility Name </strong></td>-->
                      <td width="13%" align="left" class="label_txt_heading"><strong>Patient Name </strong></td>
                  <!-- <td width="15%" align="left" class="label_txt_heading"><strong>Driver</strong></td>-->
                      <td width="13%" align="left" class="label_txt_heading"><strong>Pick Address</strong></td>
                      <td width="13%" align="left" class="label_txt_heading"><strong>Drop Address</strong></td>
                      <td width="11%" align="left" class="label_txt_heading"><strong>Pickup Time</strong></td>
			<!--		    <td width="5%" align="left" class="label_txt_heading"><strong>Drop Time</strong></td>-->
					  <td width="8%" align="left" class="label_txt_heading"><strong>Miles</strong></td>
					   <td width="9%" align="left" class="label_txt_heading"><strong>Trip Type</strong></td>
                      <td width="10%" align="center" class="label_txt_heading"><strong>Status</strong></td>
                    </tr>
                    <?php unset($this->_sections['q']);
$this->_sections['q']['name'] = 'q';
$this->_sections['q']['loop'] = is_array($_loop=$this->_tpl_vars['req']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
<tr valign="top"  bgcolor="<?php echo smarty_function_cycle(array('values' => "#eeeeee,#d0d0d0"), $this);?>
" class="blinkRed"  >
                      <td align="left" valign="top" class="grid_content"><?php echo $this->_tpl_vars['req'][$this->_sections['q']['index']]['reqid']; ?>
</td>
                      <!--<td align="left" valign="top" class="grid_content"><b><?php echo $this->_tpl_vars['req'][$this->_sections['q']['index']]['hospname']; ?>
</b></td>-->
                      <td align="left" valign="top" class="grid_content"><?php echo $this->_tpl_vars['req'][$this->_sections['q']['index']]['clientname']; ?>
</td>
            <!--   <td align="left" valign="top" class="grid_content"><?php echo $this->_tpl_vars['req'][$this->_sections['q']['index']]['driver']; ?>
 - [ <?php echo $this->_tpl_vars['membdetail'][$this->_sections['q']['index']]['drv_code']; ?>
 ]</td>-->
                      <td align="left" valign="top" class="grid_content"><?php echo $this->_tpl_vars['req'][$this->_sections['q']['index']]['pickaddr']; ?>
</td>
                      <td align="left" valign="top" class="grid_content"><?php echo $this->_tpl_vars['req'][$this->_sections['q']['index']]['destination']; ?>
</td>
			    <td align="left" valign="top" class="grid_content"><?php if ($this->_tpl_vars['req'][$this->_sections['q']['index']]['wc'] == '1'): ?> W/C<?php else: ?> <?php echo $this->_tpl_vars['req'][$this->_sections['q']['index']]['apptime'];  endif; ?></td>
			<!--			  <td align="left" valign="top" class="grid_content"><?php if ($this->_tpl_vars['req'][$this->_sections['q']['index']]['wc'] == '1'): ?> --:--<?php else:  echo $this->_tpl_vars['req'][$this->_sections['q']['index']]['drp_time'];  endif; ?></td>-->
                      <td align="left" valign="top" class="grid_content"><?php echo $this->_tpl_vars['req'][$this->_sections['q']['index']]['milage']; ?>
</td>
             <td align="left" valign="top" class="grid_content"><?php if ($this->_tpl_vars['req'][$this->_sections['q']['index']]['triptype'] == 'RW'): ?>Round Trip<?php else: ?>One Way<?php endif; ?></td>
					  <td align="left" valign="top" class="grid_icon">
				Req Recvd
  <?php endfor; else: ?>
        <tr>
                     <td colspan="7" align="center" valign="top" class="grid_content"><strong>No Record Found!</strong></td>
      </tr>
                    <?php endif; ?>
     </table>
<table>
            <tr><td>&nbsp;</td></tr>
</table>
<table width="100%" border="0" align="center" cellpadding="3" cellspacing="1" class="main_table" >
                    <tr>
                      <td colspan="11" align="left"style="font-size:14px; color:#000; font-weight:bold;"  ><table width="100%" border="0" cellspacing="1" cellpadding="3">
                        <tr>
						<td width="334" style="font-size:15px; color:#000; font-weight:bold; background:url(../images/adm_tab.png) no-repeat; text-align:center; width:200px; height:30px;">In Process Trips </td>
                          <td>&nbsp;</td>
                        </tr>
                      </table></td>
                    </tr>
                   <tr>
                      <td width="10%" align="left" class="label_txt_heading"><strong>Code</strong></td>
                      <td width="10%" align="left" class="label_txt_heading"><strong>Patient Name </strong></td>
                     <!-- <td width="10%" align="left" class="label_txt_heading"><strong>Facility Name </strong></td>-->
                       <td width="15%" align="left" class="label_txt_heading"><strong>Driver</strong></td>
                      <td width="10%" align="left" class="label_txt_heading"><strong>Pick Address</strong></td>
                      <td width="10%" align="left" class="label_txt_heading"><strong>Drop Address</strong></td>
                      <td width="5%" align="left" class="label_txt_heading"><strong>Pickup Time</strong></td>
					    <td width="5%" align="left" class="label_txt_heading"><strong>Drop Time</strong></td>
					  <td width="5%" align="left" class="label_txt_heading"><strong>Miles</strong></td>
					   <td width="5%" align="left" class="label_txt_heading"><strong>Trip Type</strong></td>
                      <td width="7%" align="center" class="label_txt_heading"><strong>Status</strong></td>
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
<tr valign="top"  bgcolor="<?php echo smarty_function_cycle(array('values' => "#eeeeee,#d0d0d0"), $this);?>
">
                      <td align="left" valign="top" class="grid_content"><b><?php echo $this->_tpl_vars['membdetail'][$this->_sections['q']['index']]['trip_code']; ?>
</b></td>
                      <td align="left" valign="top" class="grid_content"><b><?php echo $this->_tpl_vars['membdetail'][$this->_sections['q']['index']]['trip_user']; ?>
</b></td>
                      <!--<td align="left" valign="top" class="grid_content"><?php echo $this->_tpl_vars['membdetail'][$this->_sections['q']['index']]['trip_clinic']; ?>
</td>-->
                  <td align="left" valign="top" class="grid_content"><?php echo $this->_tpl_vars['membdetail'][$this->_sections['q']['index']]['driver']; ?>
 - [ <?php echo $this->_tpl_vars['membdetail'][$this->_sections['q']['index']]['drv_id']; ?>
 ]</td>
                      <td align="left" valign="top" class="grid_content"><?php echo $this->_tpl_vars['membdetail'][$this->_sections['q']['index']]['pck_add']; ?>
</td>
                      <td align="left" valign="top" class="grid_content"><?php echo $this->_tpl_vars['membdetail'][$this->_sections['q']['index']]['drp_add']; ?>
</td>
		    <td align="left" valign="top" class="grid_content"><?php if ($this->_tpl_vars['membdetail'][$this->_sections['q']['index']]['wc'] == '1'): ?> W/C<?php else: ?> <?php echo $this->_tpl_vars['membdetail'][$this->_sections['q']['index']]['pck_time'];  endif; ?></td>
				  <td align="left" valign="top" class="grid_content"><?php if ($this->_tpl_vars['membdetail'][$this->_sections['q']['index']]['wc'] == '1'): ?> --:--<?php else:  echo $this->_tpl_vars['membdetail'][$this->_sections['q']['index']]['drp_time'];  endif; ?></td>
                      <td align="left" valign="top" class="grid_content"><?php echo $this->_tpl_vars['membdetail'][$this->_sections['q']['index']]['trip_miles']; ?>
</td>
                       <td align="left" valign="top" class="grid_content"><?php if ($this->_tpl_vars['membdetail'][$this->_sections['q']['index']]['type'] == '1'): ?><img src="../images/one-way.png" title="One-Way Trip"><?php else: ?><img  title="Two-Way Trip" src="../images/two-way.png"><?php endif; ?></td>
					  <td align="left" valign="top" class="grid_icon">
				<?php if ($this->_tpl_vars['membdetail'][$this->_sections['q']['index']]['status'] == '0'): ?>
				Add-On	
				<?php endif; ?>	 
				<?php if ($this->_tpl_vars['membdetail'][$this->_sections['q']['index']]['status'] == '1'): ?>
				Completed with Delay 	
				<?php endif; ?>	 
				<?php if ($this->_tpl_vars['membdetail'][$this->_sections['q']['index']]['status'] == '5'): ?>
				In Progress	
				<?php endif; ?>	 
				<?php if ($this->_tpl_vars['membdetail'][$this->_sections['q']['index']]['status'] == '6'): ?>
			    Picked
				<?php endif; ?>	 
				<?php if ($this->_tpl_vars['membdetail'][$this->_sections['q']['index']]['status'] == '2'): ?>
			   Rescheduled
				<?php endif; ?>	 
				<?php if ($this->_tpl_vars['membdetail'][$this->_sections['q']['index']]['status'] == '4'): ?>
			   Dropped
				<?php endif; ?>				</td>
        </tr>
                    <?php endfor; else: ?>
                    <tr>
                      <td colspan="7" align="center" valign="top" class="grid_content"><strong>No Record Found!</strong></td>
                   </tr>
                    <?php endif; ?>
      </table>
</td></tr></table>
</body>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>