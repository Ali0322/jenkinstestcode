 {include file="top.tpl"}
 {include file="header.tpl"}
 <div style="padding-left:100px;">
  <div id="left_panel">
                            	<!--Request a trip Panel Starts Here-->
                                <div class="form_panel">
                                	<div class="heading">Edit Account Coordinator</div>
                                    <div class="form_bg">                               	
	                                	<div class="form_top_curve"></div>
    	                                <div class="form">
                                        <form name="addcmform" id="addcmform" action="editcm.php?id={$id}" method="post">
                                        	<table width="500px" align="center">
    	                                <tr>
                                            <td align="left" valign="top">&nbsp;</td>
                                          </tr>
                                          <tr>
                                            <td align="left" valign="top">{$content}</td>
                                          </tr>
                                          <tr>
                                            <td align="left" valign="top"> {if $error neq ''}
                                              <table width="95%"  align="center" cellpadding="0" cellspacing="0">
                                                  <tr>
                                                    <td width="14" valign="bottom"><img src="images/error_01.gif" width=14 height=14 alt="" /></td>
                                                    <td colspan=2 style="background-image:url(images/error_02.gif); background-repeat:repeat-x; height:13px; background-position:bottom;">&nbsp;</td>
                                                    <td width="13" valign="bottom"><img src="images/error_03.gif" width=13 height=14 alt="" /></td>
                                                  </tr>
                                                  <tr>
                                                    <td style="background-image:url(images/error_04.gif); background-repeat:repeat-y;">&nbsp;</td>
                                                    <td width="60" bgcolor="#FFFFFF" valign="top"><img src="images/error_05.gif" width=60 height=57 alt="" /></td>
                                                    <td  valign="top" bgcolor="#FFFFFF"><b>{$error}</b></td>
                                                    <td style="background-image:url(images/error_07.gif); background-repeat:repeat-y;">&nbsp;</td>
                                                  </tr>
                                                  <tr>
                                                    <td valign="top"><img src="images/error_08.gif" width=14 height=14 alt="" /></td>
                                                    <td colspan=2 style="background-image:url(images/error_09.gif); background-repeat:repeat-x;height:14px;">&nbsp;</td>
                                                    <td valign="top"><img src="images/error_10.gif" width=13 height=14 alt="" /></td>
                                                  </tr>
                                                </table>
                                              {/if}
                                              
                                              {if $msg neq ''}
                                              <table width="95%" align="center" cellpadding="0" cellspacing="0">
                                                  <tr>
                                                    <td width="14" valign="bottom"><img src="images/error_01.gif" width=14 height=14 alt="" /></td>
                                                    <td colspan=2 style="background-image:url(images/error_02.gif); background-repeat:repeat-x; height:13px; background-position:bottom;">&nbsp;</td>
                                                    <td width="13" valign="bottom"><img src="images/error_03.gif" width=13 height=14 alt="" /></td>
                                                  </tr>
                                                  <tr>
                                                    <td style="background-image:url(images/error_04.gif); background-repeat:repeat-y;">&nbsp;</td>
                                                    <td width="60" bgcolor="#FFFFFF" valign="top"><img src="images/okgreen.gif" width=60 height=57 alt="" /></td>
                                                    <td valign="top" bgcolor="#FFFFFF"><b>{$msg}</b></td>
                                                    <td style="background-image:url(images/error_07.gif); background-repeat:repeat-y;">&nbsp;</td>
                                                  </tr>
                                                  <tr>
                                                    <td valign="top"><img src="images/error_08.gif" width=14 height=14 alt="" /></td>
                                                    <td colspan=2 style="background-image:url(images/error_09.gif); background-repeat:repeat-x;height:14px;">&nbsp;</td>
                                                    <td valign="top"><img src="images/error_10.gif" width=13 height=14 alt="" /></td>
                                                  </tr>
                                                </table>
                                              {/if} </td>
                                          </tr>
										 </table>
								     		<table width="100%" border="0" cellspacing="2" cellpadding="2" align="center">

            <tr>

              <td colspan="3" valign="top" class="form_heading1"><strong>Case Manager   Information </strong></td>

              </tr>

           <tr>

              <td width="38%" valign="top"><strong>First Name:</strong></td>

              <td colspan="2"><input type="text" name="fname" id="fname" value="{$fname}" class="inputTxtField required chars" />&nbsp;<span class="SmallnoteTxt">*</span></td>

            </tr>

            <tr>

              <td valign="top"><strong>Last Name: </strong></td>

              <td colspan="2"><input type="text" name="lname" id="lname" value="{$lname}" class="inputTxtField required" />&nbsp;<span class="SmallnoteTxt">*</span></td>

            </tr>

            <tr>

              <td valign="top"><strong>Phone: </strong></td>

              <td colspan="2"><input type="text" name="phnum" id="phnum" value="{$phnum}" class="inputTxtField required" maxlength="14" />&nbsp;<span class="SmallnoteTxt">*</span></td>

            </tr>

            <tr>

              <td valign="top"><strong>Email Address: </strong></td>

              <td colspan="2"><input type="text" name="email" id="email" value="{$email}" class="inputTxtField required email" />&nbsp;<span class="SmallnoteTxt">*</span><input type="hidden" name="hidemail" value="{$hidemail}" /></td>

            </tr>

            <tr>

              <td colspan="3" valign="top">&nbsp;</td>

              </tr>

            <tr>

              <td colspan="3" valign="top" class="form_heading1"><strong>Account Information</strong> </td>

            </tr>

            <tr>

              <td valign="top"><strong>Username:</strong></td>

              <td valign="top"><input type="text" name="username" id="username" value="{$username}" class="inputTxtField required" />&nbsp;<span class="SmallnoteTxt">*</span><input type="hidden" name="hiduname" value="{$hiduname}" /></td>

              <td valign="top">&nbsp;</td>

            </tr>

            <tr>

              <td valign="top"><strong>Password:</strong></td>

              <td colspan="2" valign="top"><input type="password" name="pwd1" id="pwd1" onblur="return chkPass();" class="inputTxtField required" maxlength="15" />&nbsp;<span class="SmallnoteTxt">*</span></td>

            </tr>

            <tr>

              <td valign="top"><strong>Confirm Password :</strong></td>

              <td colspan="2" valign="top"><input type="password" name="pwd2" id="pwd2" onblur="return chkPass();"  class="inputTxtField required" maxlength="15" />&nbsp;<span class="SmallnoteTxt">*</span></td>

            </tr>

            <tr>

              <td colspan="3" valign="top">&nbsp;</td>

            </tr>

            <tr>

              <td colspan="3" valign="top">&nbsp;</td>

            </tr>

            <tr>

              <td valign="top">&nbsp;</td>

              <td colspan="2">

			  <input type="submit" name="submit" value="Submit" class="btn"  />

			  <input type="reset" name="reset" value="Reset" class="btn"  />			  </td>

            </tr>

          </table></form>
											
											
											
											
											
       	                              </div>
            	                        <div class="form_bottom_curve"></div>
                                    </div>
                                </div>
                                <!--Request a trip Panel End Here-->
                            </div>   </div>
  {include file="footer.tpl"}