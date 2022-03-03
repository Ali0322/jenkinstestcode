<?php /* Smarty version 2.6.12, created on 2014-07-26 20:25:04
         compiled from casemanagers.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'cycle', 'casemanagers.tpl', 180, false),)), $this); ?>
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
 <div style="padding-left:30px;">
  <div id="left_panel">
                            	<!--Request a trip Panel Starts Here-->
                                <div class="form_panel">
                                	<div class="heading">Case Manager</div>
                                    <div class="form_bg">                               	
	                                	<div class="form_top_curve"></div>
    	                                <div class="form">
                                     <table cellpadding="5" cellspacing="10" width="100%" style="margin:auto;" align="left">

      
      <tr>

        <td valign="top" >&nbsp;</td>

        <td  valign="top"><table width="100%" border="0" cellspacing="2" cellpadding="2">

          <tr>

            <td align="left" valign="top">

		</td>

          </tr>

          <tr>

            <td align="left" valign="top">&nbsp;</td>

          </tr>			

        <tr>

          <td width="500" align="left" valign="top"><?php echo $this->_tpl_vars['content']; ?>
</td>

        </tr>

        <tr>

          <td align="left" valign="top">

          <?php if ($this->_tpl_vars['error'] != ''): ?>

		  <table width=100% border=0 align="center" cellpadding=0 cellspacing=0>

			<tr>

				<td width="14" valign="bottom">

					<img src="images/error_01.gif" width=14 height=14 ALT=""></td>

				<td colspan=2 style="background-image:url(images/error_02.gif); background-repeat:repeat-x; height:13px; background-position:bottom;">&nbsp;</td>

				<td width="13" valign="bottom">

					<img src="images/error_03.gif" width=13 height=14 ALT=""></td>

			</tr>

			<tr>

				<td style="background-image:url(images/error_04.gif); background-repeat:repeat-y;">&nbsp;</td>

				<td width="60"  valign="top">

					<img src="images/error_05.gif" width=60 height=57 ALT=""></td>

				<td width="612" valign="top"><b><?php echo $this->_tpl_vars['error']; ?>
</b></td>

				<td style="background-image:url(images/error_07.gif); background-repeat:repeat-y;">&nbsp;			  </td>

			</tr>

			<tr>

				<td valign="top">

					<img src="images/error_08.gif" width=14 height=14 ALT=""></td>

				<td colspan=2 style="background-image:url(images/error_09.gif); background-repeat:repeat-x;height:14px;">&nbsp;</td>

				<td valign="top">

					<img src="images/error_10.gif" width=13 height=14 ALT=""></td>

			</tr>

		</table>

 		   <?php endif; ?>

          <?php if ($this->_tpl_vars['msg'] != ''): ?>

		  <table width=100% border=0 align="center" cellpadding=0 cellspacing=0>

			<tr>

				<td width="14" valign="bottom">

					<img src="images/error_01.gif" width=14 height=14 ALT=""></td>

				<td colspan=2 style="background-image:url(images/error_02.gif); background-repeat:repeat-x; height:13px; background-position:bottom;">&nbsp;</td>

				<td width="13" valign="bottom">

					<img src="images/error_03.gif" width=13 height=14 ALT=""></td>

			</tr>

			<tr>

				<td style="background-image:url(images/error_04.gif); background-repeat:repeat-y;">&nbsp;</td>

				<td width="60" bgcolor="#FFFFFF" valign="top">

					<img src="images/okgreen.gif" width=60 height=57 ALT=""></td>

				<td width="612" valign="top" bgcolor="#FFFFFF"><b><?php echo $this->_tpl_vars['msg']; ?>
</b></td>

				<td style="background-image:url(images/error_07.gif); background-repeat:repeat-y;">&nbsp;			  </td>

			</tr>

			<tr>

				<td valign="top">

					<img src="images/error_08.gif" width=14 height=14 ALT=""></td>

				<td colspan=2 style="background-image:url(images/error_09.gif); background-repeat:repeat-x;height:14px;">&nbsp;</td>

				<td valign="top">

					<img src="images/error_10.gif" width=13 height=14 ALT=""></td>

			</tr>

		</table>

 		   <?php endif; ?>		  </td>

        </tr>

        

        <tr>

          <td align="right" valign="top">(<a href="addcm.php">Add Case Manager</a>)</td>

        </tr>

        <tr>

          <td align="left" valign="top">

		  <?php if ($this->_tpl_vars['noReq'] != '0'): ?>

		  <table width="100%" border="0" cellspacing="1" cellpadding="1" class="outer_table">

            <tr class="form_heading1">

              <td width="13%" align="center"><strong>Case Manager</strong></td>

              <td width="18%" align="center"><strong>User name</strong></td>

              <td width="18%" align="center"><strong>Email</strong></td>

              <td width="11%" align="center"><strong>Phone#</strong></td>

              <td width="8%" align="center"><strong>Status</strong></td>

              <td width="8%" align="center"><strong>Options</strong></td>

            </tr>

          <?php unset($this->_sections['a']);
$this->_sections['a']['name'] = 'a';
$this->_sections['a']['loop'] = is_array($_loop=$this->_tpl_vars['cm']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['a']['show'] = true;
$this->_sections['a']['max'] = $this->_sections['a']['loop'];
$this->_sections['a']['step'] = 1;
$this->_sections['a']['start'] = $this->_sections['a']['step'] > 0 ? 0 : $this->_sections['a']['loop']-1;
if ($this->_sections['a']['show']) {
    $this->_sections['a']['total'] = $this->_sections['a']['loop'];
    if ($this->_sections['a']['total'] == 0)
        $this->_sections['a']['show'] = false;
} else
    $this->_sections['a']['total'] = 0;
if ($this->_sections['a']['show']):

            for ($this->_sections['a']['index'] = $this->_sections['a']['start'], $this->_sections['a']['iteration'] = 1;
                 $this->_sections['a']['iteration'] <= $this->_sections['a']['total'];
                 $this->_sections['a']['index'] += $this->_sections['a']['step'], $this->_sections['a']['iteration']++):
$this->_sections['a']['rownum'] = $this->_sections['a']['iteration'];
$this->_sections['a']['index_prev'] = $this->_sections['a']['index'] - $this->_sections['a']['step'];
$this->_sections['a']['index_next'] = $this->_sections['a']['index'] + $this->_sections['a']['step'];
$this->_sections['a']['first']      = ($this->_sections['a']['iteration'] == 1);
$this->_sections['a']['last']       = ($this->_sections['a']['iteration'] == $this->_sections['a']['total']);
?>

		    <tr class="SmallgridTxt" bgcolor="<?php echo smarty_function_cycle(array('values' => "#eeeeee,#d0d0d0"), $this);?>
">

              <td align="center" valign="top"><?php echo $this->_tpl_vars['cm'][$this->_sections['a']['index']]['fname']; ?>
 <?php echo $this->_tpl_vars['cm'][$this->_sections['a']['index']]['lname']; ?>
</td>

              <td align="center" valign="top"><?php echo $this->_tpl_vars['cm'][$this->_sections['a']['index']]['username']; ?>
</td>

              <td align="center" valign="top"><a href="mailto:<?php echo $this->_tpl_vars['cm'][$this->_sections['a']['index']]['email']; ?>
" class="SignUp" ><?php echo $this->_tpl_vars['cm'][$this->_sections['a']['index']]['email']; ?>
</a></td>

              <td align="center" valign="top"><?php echo $this->_tpl_vars['cm'][$this->_sections['a']['index']]['phone']; ?>
</td>

              <td align="center" valign="top">

              <?php if ($this->_tpl_vars['cm'][$this->_sections['a']['index']]['cm_status'] == '0'): ?>Disabled<?php else: ?>Active<?php endif; ?></td>

              <td align="center" valign="top"><a href="editcm.php?id=<?php echo $this->_tpl_vars['cm'][$this->_sections['a']['index']]['cm_id']; ?>
"><img src="images/edit.png" border="0" /></a> | <a href="casemanagers.php?cmid=<?php echo $this->_tpl_vars['cm'][$this->_sections['a']['index']]['cm_id']; ?>
&act=del"><img src="images/delete.png" border="0" /></a></td>

		    </tr>

          <?php endfor; else: ?>

		    <tr class="smallHeadingTxt">

              <td colspan="6"><strong>No Request Found</strong></td>

            </tr>

		  <?php endif; ?>	

            <tr>

              <td colspan="6" align="center">&nbsp;</td>

            </tr>			

            <tr class="form_heading1">

              <td colspan="6" align="center"><b><?php echo $this->_tpl_vars['pages']; ?>
</b></td>

            </tr>

          </table>

		  <?php endif; ?>		  </td>

        </tr>

        <tr>

          <td align="left" valign="top">&nbsp;</td>

        </tr>	

		<tr>

		  <td><!--  CONTENT DETAIL --></td>

		</tr>

        

      </table></td>

        <td valign="top" style="background-image:url(images/center_06.gif); background-repeat:repeat-y; width:28px;">&nbsp;</td>

      </tr>

      <tr>

        <td></td>

        <td style="background-image:url(images/center_08.gif); background-repeat:repeat-x; height:28px;">&nbsp;</td>

        <td></td>

      </tr>

      <tr>

        <td colspan=3>&nbsp;</td>

      </tr>

    </table>
											
											
											
											
											
       	                              </div>
            	                        <div class="form_bottom_curve"></div>
                                    </div>
                                </div>
                                <!--Request a trip Panel End Here-->
                            </div>   </div>
  <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>