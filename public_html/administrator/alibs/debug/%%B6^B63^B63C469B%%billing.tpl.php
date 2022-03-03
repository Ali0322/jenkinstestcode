<?php /* Smarty version 2.6.12, created on 2022-02-23 14:58:09
         compiled from reportstpl/billing.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'cycle', 'reportstpl/billing.tpl', 402, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "headerinner.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<?php echo '

<script type="text/javascript">

function showgraph(val){



  if(val == \'1\'){

     $("#graph1").show("slow"); 

   }

  if(val == \'2\'){

     $("#graph2").show("slow");

	 	 

   }   

  if(val == \'3\'){

     $("#graph1").hide("slow");   

     $("#graph2").hide("slow");  	 

   }     

   

}



function selbox(val){



if(val == \'0\'){

if(document.getElementById(\'box\').checked == true)

   {

  $(\'#hospname\').attr("disabled", true);

  $(\'#address\').attr("disabled", true);

  $(\'#cisid\').attr("disabled", false);

  //$(\'#box2\').attr("disabled", true);   

  $(\'#box2\').attr("checked", false);  

  $(\'#ssn\').val("");   

  $(\'#ssn\').attr("disabled", true); 

  return true;  

  }

else if(document.getElementById(\'box\').checked == false){

  $(\'#hospname\').attr("disabled", false);

  $(\'#address\').attr("disabled", false);

  $(\'#ssn\').attr("disabled", true); 

  $(\'#box\').attr("disabled", false);

  $(\'#box2\').attr("disabled", false); 

  $(\'#box2\').attr("checked", false);     

  $(\'#cisid\').attr("disabled", true); 

  $(\'#cisid\').val(""); 

  return true;

  }else{

  return false;

    }

  }

 

if(val == \'1\'){

if(document.getElementById(\'box2\').checked == true)

   {

  $(\'#hospname\').attr("disabled", true);

  $(\'#address\').attr("disabled", true);

  $(\'#cisid\').val("");

  //$(\'#box\').attr("disabled", true); 

  $(\'#cisid\').attr("disabled", true);     

  $(\'#box\').attr("checked", false);   

  $(\'#ssn\').attr("disabled", false);  

  return true;  

  }

else if(document.getElementById(\'box2\').checked == false){

  $(\'#hospname\').attr("disabled", false);

  $(\'#address\').attr("disabled", false);

  $(\'#cisid\').attr("disabled", true); 

  $(\'#box\').attr("disabled", false);

  $(\'#box\').attr("checked", false); 

  $(\'#box2\').attr("disabled", false);     

  $(\'#ssn\').attr("disabled", true); 

  $(\'#ssn\').val("");    

  return true;

  }else{

  return false;

    }

  }  

}



</script>

'; ?>


<table id="table1" class="outer_table"   border="0" cellspacing="0" cellpadding="0" align="center" bgcolor="#FFFFFF" style="margin-bottom:10px;">

  <tr>

    <td>

<table width="100%" border="0" cellspacing="0" cellpadding="0">

                            <tr>

                              <td height="44" colspan="2" align="center" valign="top">  							  </td>

                            </tr>

                            

                            <tr>

                              <td height="19" colspan="2" align="center" class="okmsg"><span class="okmsg"><?php if ($this->_tpl_vars['msgs'] != ''): ?> <?php echo $this->_tpl_vars['msgs']; ?>
 <?php endif; ?>

		                    <?php if ($this->_tpl_vars['errors'] != ''): ?> <?php echo $this->_tpl_vars['errors']; ?>
 <?php endif; ?></span></td>

                            </tr>

<tr>

                              <td height="19" colspan="2" align="center">

							  <div align="right" id="add_div" style="padding-right:40px; padding-bottom:5px;">

							<?php if ($this->_tpl_vars['noReq'] != '0'): ?>

							[<a href="javascript:history.back();">Back</a>]<?php endif; ?></div>							  </td>

        </tr>							

                            <tr>

<td height="19" colspan="2" align="center" class="admintopheading">Billing Report </td>

                            </tr>

                            

                            <tr>

                              <td colspan="2" align="center"  valign="top">							  </td>

                            </tr>

                            <tr>

                              <td colspan="2" align="center"  valign="top">&nbsp;</td>

                            </tr>

                            <tr>

                              <td height="44" colspan="2" align="center"  valign="top">

							 <form name="searchReport" action="billing.php" method="post"> 

							  <table width="80%" border="0" cellspacing="2" cellpadding="2" align="center" class="">

            

           <tr>

              <td colspan="5" valign="top" class="admintopheading" align="left">SEARCH CRITERIA</td>

            </tr>

            <tr>

              <td width="21%" align="left" valign="top" class="labeltxt"><strong>From:</strong></td>

              <td width="31%" align="left" valign="top"><input type="text" name="startdate" id="startdate" value="<?php echo $this->_tpl_vars['startdate']; ?>
" class="inputTxtField date"/> <span style="color:#FF0000">   *</span>            &nbsp;

                <div class="suggestionsBox" id="suggestions1" style="display: none; position:absolute;">

                  <img src="images/upArrow.png" style="position: relative; top: 7px; left: -10px;" alt="upArrow" />

                  <div class="suggestionList" id="autoSuggestionsList1">

  &nbsp;				</div>

			      </div>

                (mm/dd/yyyy)</td>

              <td align="right" valign="top" class="labeltxt"><strong>To:</strong>&nbsp;</td>

              <td align="left" valign="top" class="labeltxt">&nbsp;</td>

              <td width="30%" align="left" valign="top"><input type="text" name="enddate" id="enddate" value="<?php echo $this->_tpl_vars['enddate']; ?>
" class="inputTxtField date" />

                <div class="suggestionsBox" id="layer" style="display: none; position:absolute;">

                  <div class="suggestionList" id="div">&nbsp; </div>

                </div>

                <span style="color:#FF0000">   *</span>       (mm/dd/yyyy)</td>

              </tr>

            <!--<tr>

              <td align="left" valign="top" class="labeltxt"><strong>Clininc Name:</strong></td>

              <td align="left" valign="top">

			  <select name="hospname" id="hospname">

			    <option value="0">All</option>

			   <?php unset($this->_sections['q']);
$this->_sections['q']['name'] = 'q';
$this->_sections['q']['loop'] = is_array($_loop=$this->_tpl_vars['hosp']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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

			    <option value="<?php echo $this->_tpl_vars['hosp'][$this->_sections['q']['index']]['id']; ?>
" <?php if ($this->_tpl_vars['hospname'] == $this->_tpl_vars['hosp'][$this->_sections['q']['index']]['id']): ?>selected="selected"<?php endif; ?>><?php echo $this->_tpl_vars['hosp'][$this->_sections['q']['index']]['hospname']; ?>
</option>

				<?php endfor; endif; ?>

			   </select>		  </td>

              <td width="16%" align="left" valign="top" class="labeltxt">&nbsp;</td>

              <td width="2%" align="right" valign="top" class="labeltxt">&nbsp;</td>

              <td align="left" valign="top">&nbsp;</td>
            </tr>-->

            <tr>

              <td align="left" valign="top" class="labeltxt"><strong>Address :</strong></td>

              <td align="left" valign="top"><input type="text" name="address" id="address" value="<?php echo $this->_tpl_vars['address']; ?>
" class="inputTxtField"/>			  </td>

              <td align="left" valign="top">&nbsp;</td>

              <td align="left" valign="top">&nbsp;</td>

              <td align="left" valign="top">&nbsp;</td>
            </tr>

			<tr>

              <td align="left" valign="top" class="labeltxt"><strong>Patient Name  :</strong></td>

              <td align="left" valign="top"><input type="text" name="pname" id="pname" value="<?php echo $this->_tpl_vars['pname']; ?>
" class="inputTxtField"/>			  </td>

              <td align="left" valign="top">&nbsp;</td>

              <td align="left" valign="top">&nbsp;</td>

              <td align="left" valign="top">&nbsp;</td>

			</tr>

            <tr>

              <td align="left" valign="top">&nbsp;</td>

              <td colspan="4" align="left" valign="top">

			  <font color="#FF0000">

   			     <b>Note:*</b>

				 <ol><li>Combination of all fields are not mandatory</li>

				 <li>Both Start and End date must be provided.</li>

				 </ol> </font>			  </td>

              </tr>

            

            <tr>

              <td align="left" valign="top">&nbsp;</td>

              <td colspan="4" align="left" valign="top">

			  <input type="submit" name="submit" value='Report' class="inputButton btn"  />&nbsp;

			  <input type="reset" name="reset" value='Reset' class="inputButton btn"  />			  </td>

              </tr>

          </table>	

		                     </form>		  	                  </td>

                            </tr>

                            <tr>

                              <td colspan="2" align="center"  valign="top">&nbsp;</td>

                            </tr>

                            <tr>

                              <td height="44" colspan="2" align="center"  valign="top" style="padding-bottom:50px;">

						   <?php if ($this->_tpl_vars['noReq'] != '0'): ?>

						   <br />

							  <table width="700" border="0" class="main_table">

							  <tr class="admintopheading">

								<td width="20%" align="center">

								<strong>Patient Name</strong>

								</td>

								<td width="15%" align="center">

								<strong>Requested Date</strong>

								</td>

								<td width="25%" align="center"><strong>App. Date</strong></td>

								<td width="15%" align="center">

								<strong>Pickup Address</strong>

								</td>

								<td align="center"><strong>Destination Address</strong></td>
								<td align="center"><strong><!--Traffic Delay-->Payment Status</strong></td>
								
								<td align="center"><strong>Options</strong></td>

								</tr>	   

							<?php unset($this->_sections['q']);
$this->_sections['q']['name'] = 'q';
$this->_sections['q']['loop'] = is_array($_loop=$this->_tpl_vars['reqdetails']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
								<td align="left" valign="middle">
								<?php echo $this->_tpl_vars['reqdetails'][$this->_sections['q']['index']]['clientname']; ?>

								</td>
								<td align="center" valign="middle">
								<?php echo $this->_tpl_vars['reqdetails'][$this->_sections['q']['index']]['appdate']; ?>

								</td>
								<td align="center" valign="middle">
									<?php echo $this->_tpl_vars['reqdetails'][$this->_sections['q']['index']]['today_date']; ?>

								</td>
								<td align="center" valign="middle">   
									<?php echo $this->_tpl_vars['reqdetails'][$this->_sections['q']['index']]['pickaddr']; ?>

								 </td>
								<td align="center" valign="middle">
									<?php echo $this->_tpl_vars['reqdetails'][$this->_sections['q']['index']]['destination']; ?>

								</td>
								<td>
                                	<!--<?php if ($this->_tpl_vars['reqdetails'][$this->_sections['q']['index']]['traffic_delay'] == ''): ?>N.A <a rel="facebox" href="trafficdelay.php">Update</a><?php else:  endif; ?>-->                                    
                                    <?php echo $this->_tpl_vars['reqdetails'][$this->_sections['q']['index']]['payment_status']; ?>

                                </td>
								<td>
                                <?php if ($this->_tpl_vars['reqdetails'][$this->_sections['q']['index']]['payment_status'] == 'Pending'): ?>
                                	<a href="#" style="font-weight:bold; font-size:10px;">Charge Now</a>
                                <?php else: ?>
									<!--<a rel="facebox" href="bill_details.php?id=<?php echo $this->_tpl_vars['reqdetails'][$this->_sections['q']['index']]['id']; ?>
">View</a>-->
                                <?php endif; ?>
								</td>
								</tr>
							 <?php else: ?>
							 <tr>
							  <td colspan="5" align="center" class="labeltxt"> <b>No Record Found</b></td>
							 </tr>
							 <?php endif; ?>
							 <?php endfor; endif; ?> 
							 <!--<tr>
							  <td colspan="5" align="center" class="labeltxt"> <b>No Record Found</b></td>
							 </tr>-->
							<?php endif; ?>
							</table>
						 </td>
                    </tr>
			    <tr>
			   		<td colspan="2" align="center"><?php echo $this->_tpl_vars['pages']; ?>
</td>

			</tr>			

      </table>

    </td>

  </tr>

</table>

<?php echo '

<script>selbox();</script>'; ?>
		 

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "innerfooter.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
