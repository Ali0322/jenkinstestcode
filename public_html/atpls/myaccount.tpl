 {include file="top.tpl"}
 {include file="header.tpl"}
 <div style="padding-left:100px;">
  <div class="form_panel">
                                	<div class="heading">Edit Account</div>
                                    <div class="form_bg">                               	
	    	                                <div class="form">
                                             <form name="loginform" id="loginform" action="myaccount.php" method="post">
                                        	<table cellpadding="5" cellspacing="10" width="100%"  style="float:left;">                              

            <tr>

              <td colspan="3" valign="top" class="form_heading1">Facility Information </td>

              </tr>

            <tr>

              <td class="label">Facility Name:</td>

              <td colspan="2" class="MediumnoteTxt">{$hosp_name}<input type="hidden" name="hosp_name" value="{$hosp_name}" class="txt_box"/></td>

            </tr>

            <tr>

              <td class="label">Address:</td>

              <td colspan="2"><input type="text" name="h_address" id="h_address" value="{$h_address}" class="txt_box required"/>&nbsp;<span class="MediumnoteTxt">

                <input type="hidden" name="oh_address" value="{$oh_address}" />

              </span><span class="SmallnoteTxt">*</span></td>

            </tr>

            <tr>

              <td class="label">City:</td>

              <td colspan="2"><input type="text" name="h_city" id="h_city" value="{$h_city}"  class="txt_box required chars"/>&nbsp;<span class="SmallnoteTxt">*</span></td>

            </tr>

            <tr>

              <td class="label">State:</td>

              <td colspan="2">

			  <select name="h_state" id="h_state" class="txt_box required">

			   <option value="">Select</option>

			   {section name=n loop=$states}

			   <option value="{$states[n].abbr}" {if $h_state neq ''}{if $states[n].abbr eq $h_state}selected{/if}{elseif $states[n].abbr eq 'AZ'}selected{/if}>

			   {$states[n].statename}

			   </option>

			   {/section}

			  </select> &nbsp;<span class="SmallnoteTxt">*</span> 

			  </td>

            </tr>

            <tr>

              <td class="label">Zipcode:</td>

              <td colspan="2"><input type="text" name="h_zip" id="h_zip" value="{$h_zip}" maxlength="10"  class="txt_box required digits"/>&nbsp;<span class="SmallnoteTxt">*</span> </td>

            </tr>

            <tr>

              <td class="label">Phone:</td>

              <td colspan="2"><input type="text" name="h_phone" id="h_phone" value="{$h_phone}" class="txt_box required" maxlength="14" />&nbsp;<span class="MediumnoteTxt">

                <input type="hidden" name="oh_phone" value="{$oh_phone}" />

              </span><span class="SmallnoteTxt">*</span> </td>

            </tr>

            <tr>

              <td colspan="3" valign="top">&nbsp;</td>

            </tr>

            <tr>

              <td colspan="3" valign="top" class="form_heading1">Contact Person Information </td>

              </tr>

            <tr>

              <td class="label">First Name:</td>

              <td colspan="2"><input type="text" name="fname" id="fname" value="{$fname}" class="txt_box required chars" />&nbsp;<span class="SmallnoteTxt">*</span> </td>

            </tr>

            <tr>

              <td class="label">Last Name:</td>

              <td colspan="2"><input type="text" name="lname" id="lname" value="{$lname}" class="txt_box required chars" />&nbsp;<span class="SmallnoteTxt">*</span> </td>

            </tr>

            <tr>

              <td class="label">Phone:</td>

              <td colspan="2"><input type="text" name="phnum" id="phnum" maxlength="14" value="{$phnum}" class="txt_box required" />&nbsp;<span class="SmallnoteTxt">*</span> </td>

            </tr>

            <tr>

              <td class="label">Email Address:</td>

              <td colspan="2">{$email}<input type="hidden" name="email" id="email" value="{$email}"  class="txt_box required email"/>&nbsp;<span class="SmallnoteTxt">*</span> </td>

            </tr>

            <tr>

              <td colspan="3" valign="top">&nbsp;</td>

              </tr>

            <tr>

              <td colspan="3" valign="top" class="form_heading1">Account Information </td>

            </tr>

            <tr>

              <td class="label">Username:</td>

              <td valign="top" class="MediumnoteTxt">{$username}<input type="hidden" name="username" value="{$username}" /></td>

              <td valign="top">&nbsp;</td>

            </tr>

            <tr>

              <td class="label">Password:</td>

              <td colspan="2" valign="top"><input type="password" name="pwd1" id="pwd1"  class="txt_box required"/></td>

            </tr>

            <tr>

              <td class="label">Confirm Password :</td>

              <td colspan="2" valign="top"><input type="password" name="pwd2" id="pwd2" class="txt_box required" /></td>

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

			  <input type="submit" name="submit" value="Update" class="inputButton btn"  />

			  <input type="reset" name="reset" value="Reset" class="inputButton btn"  />			  </td>

            </tr>

          </table></form>
											
											
											
											
											
       	                              </div>
            	    
                                    </div>
                             </div>   </div>
  {include file="footer.tpl"}