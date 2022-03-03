<?php /* Smarty version 2.6.12, created on 2014-07-26 19:41:38
         compiled from myreports.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'cycle', 'myreports.tpl', 254, false),array('modifier', 'date_format', 'myreports.tpl', 255, false),)), $this); ?>
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
 <?php echo ' 
 <script type="text/javascript">

function deleteRec(val)

{

  var ok;

  ok=confirm("Are you sure you want to delete this record?");

  if (ok){		

 	location.href="myreports.php?"+val;

	return true;}else{

			return false;

		}			

	}

</script> 
 <script type="text/javascript">

	function lookup(inputString,val) {

		if(inputString.length == 0) {

			// Hide the suggestion box.

		   if(val == \'1\'){	

			$(\'#suggestions1\').hide();

		    }

		   if(val == \'2\'){	

			$(\'#suggestions2\').hide();

		    }

		   if(val == \'3\'){	

			$(\'#suggestions3\').hide();

		    }	

		} else {

			$.post("rpc.php", {queryString: ""+inputString, val:""+val}, function(data){

				if(data.length >0) {

				   if(val == \'1\'){

					$(\'#suggestions1\').show();

					$(\'#autoSuggestionsList1\').html(data);

					}

				   if(val == \'2\'){

					$(\'#suggestions2\').show();

					$(\'#autoSuggestionsList2\').html(data);

					}

				   if(val == \'3\'){

					$(\'#suggestions3\').show();

					$(\'#autoSuggestionsList3\').html(data);

					}											

				}

			});

		}

	} // lookup

	

	function fill(thisValue,val) {

		   if(val == \'1\'){

		      if(thisValue != \'\'){

		      $(\'#pname\').val(thisValue);

              }

		    setTimeout("$(\'#suggestions1\').hide();", 200);			

		    }

		   if(val == \'2\'){	

		   if(thisValue != \'\'){

		      $(\'#phnum\').val(thisValue);

		    setTimeout("$(\'#suggestions2\').hide();", 200);	

		    }

			}

		   if(val == \'3\'){	

		   if(thisValue != \'\'){

		      $(\'#dob\').val(thisValue);

		    setTimeout("$(\'#suggestions3\').hide();", 200);	

		    }

			}

			

  }

</script> 
 '; ?>

 <div style="padding-left:30px;">
  <div id="left_panel">
     <form name="tripReq" id="tripReq" action="myreports.php" method="post">
      <div class="form_panel">
         <div class="heading">My Reports</div>
         <div class="form_bg">
          <div class="form_top_curve"></div>
          <div class="form">
             <table cellpadding="1" cellspacing="0" width="100%" border="0"  style="float:left;">
              <tr>
                 <td align="left" valign="top">&nbsp;</td>
               </tr>
              <tr>
                 <td align="left" valign="top"><?php echo $this->_tpl_vars['content']; ?>
</td>
               </tr>
              <tr>
                 <td align="left" valign="top"> <?php if ($this->_tpl_vars['error'] != ''): ?>
                  <table width="50%"  cellpadding="0" cellspacing="0">
                     <tr>
                      <td width="14" valign="bottom"><img src="images/error_01.gif" width=14 height=14 ALT=""></td>
                      <td colspan=2 style="background-image:url(images/error_02.gif); background-repeat:repeat-x; height:13px; background-position:bottom;">&nbsp;</td>
                      <td width="13" valign="bottom"><img src="images/error_03.gif" width=13 height=14 ALT=""></td>
                    </tr>
                     <tr>
                      <td style="background-image:url(images/error_04.gif); background-repeat:repeat-y;">&nbsp;</td>
                      <td width="60" bgcolor="#FFFFFF" valign="top"><img src="images/error_05.gif" width=60 height=57 ALT=""></td>
                      <td  valign="top" bgcolor="#FFFFFF"><b><?php echo $this->_tpl_vars['error']; ?>
</b></td>
                      <td style="background-image:url(images/error_07.gif); background-repeat:repeat-y;">&nbsp;</td>
                    </tr>
                     <tr>
                      <td valign="top"><img src="images/error_08.gif" width=14 height=14 ALT=""></td>
                      <td colspan=2 style="background-image:url(images/error_09.gif); background-repeat:repeat-x;height:14px;">&nbsp;</td>
                      <td valign="top"><img src="images/error_10.gif" width=13 height=14 ALT=""></td>
                    </tr>
                   </table>
                  <?php endif; ?>
                  
                  <?php if ($this->_tpl_vars['msg'] != ''): ?>
                  <table width="50%" cellpadding="0" cellspacing="0">
                     <tr>
                      <td width="14" valign="bottom"><img src="images/error_01.gif" width=14 height=14 ALT=""></td>
                      <td colspan=2 style="background-image:url(images/error_02.gif); background-repeat:repeat-x; height:13px; background-position:bottom;">&nbsp;</td>
                      <td width="13" valign="bottom"><img src="images/error_03.gif" width=13 height=14 ALT=""></td>
                    </tr>
                     <tr>
                      <td style="background-image:url(images/error_04.gif); background-repeat:repeat-y;">&nbsp;</td>
                      <td width="60" bgcolor="#FFFFFF" valign="top"><img src="images/okgreen.gif" width=60 height=57 ALT=""></td>
                      <td valign="top" bgcolor="#FFFFFF"><b><?php echo $this->_tpl_vars['msg']; ?>
</b></td>
                      <td style="background-image:url(images/error_07.gif); background-repeat:repeat-y;">&nbsp;</td>
                    </tr>
                     <tr>
                      <td valign="top"><img src="images/error_08.gif" width=14 height=14 ALT=""></td>
                      <td colspan=2 style="background-image:url(images/error_09.gif); background-repeat:repeat-x;height:14px;">&nbsp;</td>
                      <td valign="top"><img src="images/error_10.gif" width=13 height=14 ALT=""></td>
                    </tr>
                   </table>
                  <?php endif; ?> </td>
               </tr>
              <tr>
                 <td align="left" valign="top"><table width="90%" cellspacing="2" cellpadding="2">
                     <tr>
                      <td valign="top" class="label">From:</td>
                      <td valign="top"><input type="text" name="startdate" id="startdate" value="<?php echo $this->_tpl_vars['startdate']; ?>
" class="txt_box required" maxlength="10" />
                         &nbsp;<font color="#FF0000"> * </font>
                         <div class="suggestionsBox" id="suggestions1" style="display: none; position:absolute;"> <img src="images/upArrow.png" style="position: relative; top: 7px; left: -10px;" alt="upArrow" />
                          <div class="suggestionList" id="autoSuggestionsList1"> &nbsp; </div>
                        </div></td>
                      <td valign="top" class="label">To:</td>
                      <td valign="top"><input type="text" name="enddate" id="enddate" value="<?php echo $this->_tpl_vars['enddate']; ?>
" class="txt_box required" maxlength="10"/>
                         &nbsp;<font color="#FF0000"> * </font></td>
                    </tr>
                     <tr>
                      <td valign="top" class="label">Patient Name:</td>
                      <td valign="top"><input type="text" name="pname" id="pname" value="<?php echo $this->_tpl_vars['pname']; ?>
" class="txt_box chars"/></td>
                      <td valign="top" class="label">Patient Phone Number :</td>
                      <td valign="top"><input type="text" name="phnum" id="phnum" value="<?php echo $this->_tpl_vars['phnum']; ?>
" class="txt_box"/></td>
                    </tr>
                     <tr>
                      <td valign="top" class="label"><strong>Filter:</strong>&nbsp;</td>
                      <td  valign="top"><select  name="by_date" >
                          <option value="reqdate" <?php if ($this->_tpl_vars['by_date'] == 'reqdate'): ?> selected="selected" <?php endif; ?>>By Request date</option>
                          <option value="appdate" <?php if ($this->_tpl_vars['by_date'] == 'appdate'): ?> selected="selected" <?php endif; ?>>By Appointment Date</option>
                        </select>
                         </span></td>
                         <td valign="top" class="label"><strong><!--Filter by Type:--></strong></td>
                      <td valign="top"><!--<select name="type" class="txt_boxX" id="type"  >
                      <option value="">Select</option>
                      			  <?php unset($this->_sections['q']);
$this->_sections['q']['name'] = 'q';
$this->_sections['q']['loop'] = is_array($_loop=$this->_tpl_vars['appdata']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
                 <option value="<?php echo $this->_tpl_vars['appdata'][$this->_sections['q']['index']]['type']; ?>
" <?php if ($this->_tpl_vars['appdata'][$this->_sections['q']['index']]['type'] == $this->_tpl_vars['type']): ?> selected="selected" <?php endif; ?> ><?php echo $this->_tpl_vars['appdata'][$this->_sections['q']['index']]['type']; ?>
</option>
                      <?php endfor; endif; ?>
                    </select>-->
                         &nbsp;</td>
                    </tr>
                     <tr>
                      <td valign="top">&nbsp;</td>
                      <td colspan="3" valign="top"><input type="submit" name="submit" value='Report'  class="btn" />
                         &nbsp;
                         <input type="reset" name="reset" value='Reset'   class="btn"/></td>
                    </tr>
                   </table></td>
               </tr>
              <tr>
                 <td align="left" valign="top">&nbsp;</td>
               </tr>
              <tr>
                 <td align="left" valign="top"> <?php if ($this->_tpl_vars['noReq'] != '0'): ?>
                  <table width="100%" border="0" cellspacing="1" cellpadding="1"  class="outer_table">
                     <tr class="form_heading1">
                      <td>Req. date </td>
                      <td>Patient</td>
                      <td>Patient Phone # </td>
                      <td>Appt. date/time </td>
                      <td>Pick - Destination Address </td>
                      <td>Status</td>
                      <td>Action</td>
                    </tr>
                     <?php unset($this->_sections['a']);
$this->_sections['a']['name'] = 'a';
$this->_sections['a']['loop'] = is_array($_loop=$this->_tpl_vars['Requests']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
                      <td align="center" valign="top"><?php echo ((is_array($_tmp=$this->_tpl_vars['Requests'][$this->_sections['a']['index']]['today_date'])) ? $this->_run_mod_handler('date_format', true, $_tmp) : smarty_modifier_date_format($_tmp)); ?>
</td>
                      <td align="center" valign="top"><a href="javascript:popWind('reqpreview.php?reqid=<?php echo $this->_tpl_vars['Requests'][$this->_sections['a']['index']]['reqid']; ?>
&id=<?php echo $this->_tpl_vars['Requests'][$this->_sections['a']['index']]['id']; ?>
');" class="SignUp" ><?php echo $this->_tpl_vars['Requests'][$this->_sections['a']['index']]['clientname']; ?>
</a></td>
                      <td align="center" valign="top"><?php echo $this->_tpl_vars['Requests'][$this->_sections['a']['index']]['phnum']; ?>
</td>
                      <td valign="top"><span class="SmallgreenTxt">Date:</span> <?php echo ((is_array($_tmp=$this->_tpl_vars['Requests'][$this->_sections['a']['index']]['appdate'])) ? $this->_run_mod_handler('date_format', true, $_tmp) : smarty_modifier_date_format($_tmp)); ?>
<br />
                         <span class="SmallgreenTxt">Time:</span> <?php echo $this->_tpl_vars['Requests'][$this->_sections['a']['index']]['apptime']; ?>
</td>
                      <td valign="top"><span class="SmallgreenTxt">Pick:</span> <?php echo $this->_tpl_vars['Requests'][$this->_sections['a']['index']]['pickaddr']; ?>
<br />
                         <span class="SmallgreenTxt">Dest.:</span> <?php echo $this->_tpl_vars['Requests'][$this->_sections['a']['index']]['destination']; ?>
</td>
                      <td align="center" valign="top"> <?php if ($this->_tpl_vars['Requests'][$this->_sections['a']['index']]['reqstatus'] == 'active'): ?>Pending<?php else:  echo $this->_tpl_vars['Requests'][$this->_sections['a']['index']]['reqstatus'];  endif; ?> </td>
                      <td align="center" valign="top"><a href="editrequest.php?reqid=<?php echo $this->_tpl_vars['Requests'][$this->_sections['a']['index']]['reqid']; ?>
&id=<?php echo $this->_tpl_vars['Requests'][$this->_sections['a']['index']]['id']; ?>
"><img src="images/edit.png" border="0" alt="Edit" title="Edit Request" /></a> 			  
                         
                         | <a href="#" onClick="return deleteRec('act=del&reqid=<?php echo $this->_tpl_vars['Requests'][$this->_sections['a']['index']]['reqid']; ?>
&id=<?php echo $this->_tpl_vars['Requests'][$this->_sections['a']['index']]['id']; ?>
&st=<?php echo $this->_tpl_vars['st']; ?>
');"><img src="images/delete.png" border="0" alt="Delete" title="Delete Request" /></a> </td>
                    </tr>
                     <?php endfor; else: ?>
                     <tr class="form_heading1">
                      <td colspan="7"><strong>No Request Found</strong></td>
                    </tr>
                     <?php endif; ?>
                     <tr>
                      <td colspan="7" align="center">&nbsp;</td>
                    </tr>
                     <tr class="form_heading1">
                      <td colspan="7"><b><?php echo $this->_tpl_vars['pages']; ?>
</b></td>
                    </tr>
                   </table>
                  <?php endif; ?> </td>
               </tr>
              <tr>
                 <td align="left" valign="top">&nbsp;</td>
               </tr>
              <tr>
                 <td><!--  CONTENT DETAIL --></td>
               </tr>
            </table>
           </div>
          <div class="form_bottom_curve"></div>
        </div>
       </div>
    </form>
     <!--Request a trip Panel End Here--> 
   </div>
</div>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>