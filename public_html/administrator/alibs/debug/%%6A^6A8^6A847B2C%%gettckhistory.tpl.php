<?php /* Smarty version 2.6.12, created on 2021-02-08 15:13:59
         compiled from tkttpl/gettckhistory.tpl */ ?>
<?php echo '

<script>

  

function gotohistory(){

  val =  $(\'#veh\').val();

  if(val != \'\'){

  

     

     location.href= \'history.php?id=\'+val;

	 return true;

    }else{ 

	

	alert("Select Driver From List");

	return false; }

  }  

$(document).ready(function(){
    $(\'#vhistory\').validationEngine();
});
 

</script>

'; ?>


<table width="100%" border="0" align="center" cellpadding="4" cellspacing="0">

        

        <tr>

          <td class="admintopheading">Select Driver to find the Tickets History </td>

        </tr>

        <tr>

          <td align="left" valign="top">

		  <table width="650" border="0" cellspacing="0" cellpadding="0" align="center">

  <tr>

    <td width="17" align="left" valign="top"><img src="../images/1.jpg" alt="d" width="17" height="17" /></td>

    <td align="left" valign="top" background="../images/2.jpg">&nbsp;</td>

    <td width="17" align="left" valign="top"><img src="../images/3.jpg" alt="d" width="17" height="17" /></td>

  </tr>

  <tr>

    <td align="left" valign="top" background="../images/4.jpg">&nbsp;</td>

    <td align="left" valign="top" width="100%">

	<form name="vhistory" id="vhistory" method="post">

								<table width="650" border="0" cellspacing="2" cellpadding="2">

								  <tr>

									<td colspan="3"></td>

								  </tr>

								  <tr>

								    <td width="26%" height="25" align="right" class="labeltxt"><strong>Select Driver:</strong></td>

								    <td width="27%" height="25">

								  <select name="veh" id="veh" class="validate[required] inputTxtField">

									<option value="">Select</option>

									 <?php unset($this->_sections['n']);
$this->_sections['n']['name'] = 'n';
$this->_sections['n']['loop'] = is_array($_loop=$this->_tpl_vars['vlist']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['n']['show'] = true;
$this->_sections['n']['max'] = $this->_sections['n']['loop'];
$this->_sections['n']['step'] = 1;
$this->_sections['n']['start'] = $this->_sections['n']['step'] > 0 ? 0 : $this->_sections['n']['loop']-1;
if ($this->_sections['n']['show']) {
    $this->_sections['n']['total'] = $this->_sections['n']['loop'];
    if ($this->_sections['n']['total'] == 0)
        $this->_sections['n']['show'] = false;
} else
    $this->_sections['n']['total'] = 0;
if ($this->_sections['n']['show']):

            for ($this->_sections['n']['index'] = $this->_sections['n']['start'], $this->_sections['n']['iteration'] = 1;
                 $this->_sections['n']['iteration'] <= $this->_sections['n']['total'];
                 $this->_sections['n']['index'] += $this->_sections['n']['step'], $this->_sections['n']['iteration']++):
$this->_sections['n']['rownum'] = $this->_sections['n']['iteration'];
$this->_sections['n']['index_prev'] = $this->_sections['n']['index'] - $this->_sections['n']['step'];
$this->_sections['n']['index_next'] = $this->_sections['n']['index'] + $this->_sections['n']['step'];
$this->_sections['n']['first']      = ($this->_sections['n']['iteration'] == 1);
$this->_sections['n']['last']       = ($this->_sections['n']['iteration'] == $this->_sections['n']['total']);
?>

				<option value="<?php echo $this->_tpl_vars['vlist'][$this->_sections['n']['index']]['Drvid']; ?>
"><?php echo $this->_tpl_vars['vlist'][$this->_sections['n']['index']]['fname']; ?>
-<?php echo $this->_tpl_vars['vlist'][$this->_sections['n']['index']]['lname']; ?>
</option>

				                      <?php endfor; endif; ?>

									</select>

									</td>

							        <td width="47%"><input type="button" value="Show History" name="history" onclick="return gotohistory();" class="btn"/></td>

								  </tr>

			  </table>

			</form></td>

    <td align="left" valign="top" background="../images/5.jpg">&nbsp;</td>

  </tr>

  <tr>

    <td align="left" valign="top"><img src="../images/6.jpg" alt="d" width="17" height="17" /></td>

    <td align="left" valign="top" background="../images/7.jpg">&nbsp;</td>

    <td align="left" valign="top"><img src="../images/8.jpg" alt="d" width="17" height="17" /></td>

  </tr>

</table>		  </td>

        </tr>

      </table>
