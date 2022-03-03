 {include file="top.tpl"}
 {include file="header.tpl"}
 {literal} 
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

		   if(val == '1'){	

			$('#suggestions1').hide();

		    }

		   if(val == '2'){	

			$('#suggestions2').hide();

		    }

		   if(val == '3'){	

			$('#suggestions3').hide();

		    }	

		} else {

			$.post("rpc.php", {queryString: ""+inputString, val:""+val}, function(data){

				if(data.length >0) {

				   if(val == '1'){

					$('#suggestions1').show();

					$('#autoSuggestionsList1').html(data);

					}

				   if(val == '2'){

					$('#suggestions2').show();

					$('#autoSuggestionsList2').html(data);

					}

				   if(val == '3'){

					$('#suggestions3').show();

					$('#autoSuggestionsList3').html(data);

					}											

				}

			});

		}

	} // lookup

	

	function fill(thisValue,val) {

		   if(val == '1'){

		      if(thisValue != ''){

		      $('#pname').val(thisValue);

              }

		    setTimeout("$('#suggestions1').hide();", 200);			

		    }

		   if(val == '2'){	

		   if(thisValue != ''){

		      $('#phnum').val(thisValue);

		    setTimeout("$('#suggestions2').hide();", 200);	

		    }

			}

		   if(val == '3'){	

		   if(thisValue != ''){

		      $('#dob').val(thisValue);

		    setTimeout("$('#suggestions3').hide();", 200);	

		    }

			}

			

  }

</script> 
 {/literal}
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
                 <td align="left" valign="top">{$content}</td>
               </tr>
              <tr>
                 <td align="left" valign="top"> {if $error neq ''}
                  <table width="50%"  cellpadding="0" cellspacing="0">
                     <tr>
                      <td width="14" valign="bottom"><img src="images/error_01.gif" width=14 height=14 ALT=""></td>
                      <td colspan=2 style="background-image:url(images/error_02.gif); background-repeat:repeat-x; height:13px; background-position:bottom;">&nbsp;</td>
                      <td width="13" valign="bottom"><img src="images/error_03.gif" width=13 height=14 ALT=""></td>
                    </tr>
                     <tr>
                      <td style="background-image:url(images/error_04.gif); background-repeat:repeat-y;">&nbsp;</td>
                      <td width="60" bgcolor="#FFFFFF" valign="top"><img src="images/error_05.gif" width=60 height=57 ALT=""></td>
                      <td  valign="top" bgcolor="#FFFFFF"><b>{$error}</b></td>
                      <td style="background-image:url(images/error_07.gif); background-repeat:repeat-y;">&nbsp;</td>
                    </tr>
                     <tr>
                      <td valign="top"><img src="images/error_08.gif" width=14 height=14 ALT=""></td>
                      <td colspan=2 style="background-image:url(images/error_09.gif); background-repeat:repeat-x;height:14px;">&nbsp;</td>
                      <td valign="top"><img src="images/error_10.gif" width=13 height=14 ALT=""></td>
                    </tr>
                   </table>
                  {/if}
                  
                  {if $msg neq ''}
                  <table width="50%" cellpadding="0" cellspacing="0">
                     <tr>
                      <td width="14" valign="bottom"><img src="images/error_01.gif" width=14 height=14 ALT=""></td>
                      <td colspan=2 style="background-image:url(images/error_02.gif); background-repeat:repeat-x; height:13px; background-position:bottom;">&nbsp;</td>
                      <td width="13" valign="bottom"><img src="images/error_03.gif" width=13 height=14 ALT=""></td>
                    </tr>
                     <tr>
                      <td style="background-image:url(images/error_04.gif); background-repeat:repeat-y;">&nbsp;</td>
                      <td width="60" bgcolor="#FFFFFF" valign="top"><img src="images/okgreen.gif" width=60 height=57 ALT=""></td>
                      <td valign="top" bgcolor="#FFFFFF"><b>{$msg}</b></td>
                      <td style="background-image:url(images/error_07.gif); background-repeat:repeat-y;">&nbsp;</td>
                    </tr>
                     <tr>
                      <td valign="top"><img src="images/error_08.gif" width=14 height=14 ALT=""></td>
                      <td colspan=2 style="background-image:url(images/error_09.gif); background-repeat:repeat-x;height:14px;">&nbsp;</td>
                      <td valign="top"><img src="images/error_10.gif" width=13 height=14 ALT=""></td>
                    </tr>
                   </table>
                  {/if} </td>
               </tr>
              <tr>
                 <td align="left" valign="top"><table width="90%" cellspacing="2" cellpadding="2">
                     <tr>
                      <td valign="top" class="label">From:</td>
                      <td valign="top"><input type="text" name="startdate" id="startdate" value="{$startdate}" class="txt_box required" maxlength="10" />
                         &nbsp;<font color="#FF0000"> * </font>
                         <div class="suggestionsBox" id="suggestions1" style="display: none; position:absolute;"> <img src="images/upArrow.png" style="position: relative; top: 7px; left: -10px;" alt="upArrow" />
                          <div class="suggestionList" id="autoSuggestionsList1"> &nbsp; </div>
                        </div></td>
                      <td valign="top" class="label">To:</td>
                      <td valign="top"><input type="text" name="enddate" id="enddate" value="{$enddate}" class="txt_box required" maxlength="10"/>
                         &nbsp;<font color="#FF0000"> * </font></td>
                    </tr>
                     <tr>
                      <td valign="top" class="label">Patient Name:</td>
                      <td valign="top"><input type="text" name="pname" id="pname" value="{$pname}" class="txt_box chars"/></td>
                      <td valign="top" class="label">Patient Phone Number :</td>
                      <td valign="top"><input type="text" name="phnum" id="phnum" value="{$phnum}" class="txt_box"/></td>
                    </tr>
                     <tr>
                      <td valign="top" class="label"><strong>Filter:</strong>&nbsp;</td>
                      <td  valign="top"><select  name="by_date" >
                          <option value="reqdate" {if $by_date eq 'reqdate'} selected="selected" {/if}>By Request date</option>
                          <option value="appdate" {if $by_date eq 'appdate'} selected="selected" {/if}>By Appointment Date</option>
                        </select>
                         </span></td>
                         <td valign="top" class="label"><strong><!--Filter by Type:--></strong></td>
                      <td valign="top"><!--<select name="type" class="txt_boxX" id="type"  >
                      <option value="">Select</option>
                      			  {section name=q loop=$appdata}	
                 <option value="{$appdata[q].type}" {if $appdata[q].type eq  $type} selected="selected" {/if} >{$appdata[q].type}</option>
                      {/section}
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
                 <td align="left" valign="top"> {if $noReq neq '0'}
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
                     {section name=a loop=$Requests}
                     <tr class="SmallgridTxt" bgcolor="{cycle values="#eeeeee,#d0d0d0"}">
                      <td align="center" valign="top">{$Requests[a].today_date|date_format}</td>
                      <td align="center" valign="top"><a href="javascript:popWind('reqpreview.php?reqid={$Requests[a].reqid}&id={$Requests[a].id}');" class="SignUp" >{$Requests[a].clientname}</a></td>
                      <td align="center" valign="top">{$Requests[a].phnum}</td>
                      <td valign="top"><span class="SmallgreenTxt">Date:</span> {$Requests[a].appdate|date_format}<br />
                         <span class="SmallgreenTxt">Time:</span> {$Requests[a].apptime}</td>
                      <td valign="top"><span class="SmallgreenTxt">Pick:</span> {$Requests[a].pickaddr}<br />
                         <span class="SmallgreenTxt">Dest.:</span> {$Requests[a].destination}</td>
                      <td align="center" valign="top"> {if $Requests[a].reqstatus eq 'active'}Pending{else}{$Requests[a].reqstatus}{/if} </td>
                      <td align="center" valign="top"><a href="editrequest.php?reqid={$Requests[a].reqid}&id={$Requests[a].id}"><img src="images/edit.png" border="0" alt="Edit" title="Edit Request" /></a> {*if $Requests[a].reqstatus neq 'approved'*}			  
                         
                         | <a href="#" onClick="return deleteRec('act=del&reqid={$Requests[a].reqid}&id={$Requests[a].id}&st={$st}');"><img src="images/delete.png" border="0" alt="Delete" title="Delete Request" /></a> {*/if*}</td>
                    </tr>
                     {sectionelse}
                     <tr class="form_heading1">
                      <td colspan="7"><strong>No Request Found</strong></td>
                    </tr>
                     {/section}
                     <tr>
                      <td colspan="7" align="center">&nbsp;</td>
                    </tr>
                     <tr class="form_heading1">
                      <td colspan="7"><b>{$pages}</b></td>
                    </tr>
                   </table>
                  {/if} </td>
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
{include file="footer.tpl"}