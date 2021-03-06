 {literal}
 <style type="text/css">
 .bg_col {  background-color:#ffe5d8; !important;
 background-image: none !important;
}
   #printable { display: block; }
    @media print
    {
      #non-printable { display: none; }
      #printable { display: block; }
    }
table { font-family:"Arial"}
table td { font-size:12px; color:#000;}
table td b { font-size:8px; font-weight:bold; padding-left:3px; color:#fb070e;}
    </style>
{/literal}
<table width="1000" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td><div style="width:1030px; margin:auto;" ><table width="1030px" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td height="20"><table width="795" border="0" cellspacing="0" cellpadding="0" id="non-printable">
      <tr>
        <td width="572"><span style="color:#F00; font-size:12px;" >{if $sra eq '1'}Special Rates Authorized{/if}</span>
        </td>
        <td width="26" align="center" valign="middle"></td>
       <td width="27" align="left" valign="middle"><a href="javascript:window.print();"><img src="../images/print.gif" width="16" height="16" border="0" /></a></td>
      </tr>
    </table></td>
    </tr>
       <tr>
        <td>
        <table width="100%" border="0" style="font-family:Verdana, Geneva, sans-serif; font-size:7px;">
 <tr>
<td width="28%" align="center">&nbsp;<img src="../images/logo.png" alt="" width="250px;" height="100px;" /><br/>
<strong><span style="font-size:15px;" ><!--EIN : 46-4816250--></span></strong>
</td>
<td align="center" width="28%"><strong>
{$cdata.title}<br/>
{$cdata.address}<br/>
{$cdata.city}, {$cdata.state} {$cdata.zip}<br/>
Phone#: {$cdata.phone}<br/>
Fax#: {$cdata.fax}<br/>
<!--Email: billing@medstarmedicaltransport.com--></strong></td>
 <td width="38%" align="center"><span style="font-weight:bold; text-decoration:underline;"><table width="100%" border="0" align="right" cellpadding="0" cellspacing="0">
          <tr>
            <td width="100%" align="center" style="font-family:Arial, Helvetica, sans-serif; font-size:30px; font-weight:bold; color:#000000; padding-left:5px;">Invoice</td>
          </tr>
          
          <tr>
            <td ><table width="100%" border="0" align="center" cellpadding="0" cellspacing="0"  style="border: solid #000000 1px;">
              <tr>
                <td width="122" height="22" align="center" style="font-family:Verdana, Arial, Helvetica, sans-serif; font-size:10px; font-weight:bold; color:#000000; border-bottom: solid #000000 1px; border-right: solid #000000 1px;">DATE</td>
                {if $data.gen_date neq $data.last_updated}
                <td width="122" height="22" align="center" style="font-family:Verdana, Arial, Helvetica, sans-serif; font-size:10px; font-weight:bold; color:#000000; border-bottom: solid #000000 1px; border-right: solid #000000 1px;">Last Updated</td>
                {/if}
                <td width="122" height="22" align="center" style="font-family:Verdana, Arial, Helvetica, sans-serif; font-size:10px; font-weight:bold; color:#000000; border-bottom: solid #000000 1px;">INV{counter start=0}ICE # </td>
              </tr>
              <tr>
                <td height="22" align="center" style="font-family:Verdana, Arial, Helvetica, sans-serif; font-size:10px; font-weight:normal; color:#000000; border-right: solid #000000 1px;">{$tdata.appdate|date_format}</td>
                {if $data.gen_date neq $data.last_updated}
                 <td height="22" align="center" style="font-family:Verdana, Arial, Helvetica, sans-serif; font-size:10px; font-weight:normal; color:#000000; border-right: solid #000000 1px;">{$data.last_updated|date_format}</td>
                 {/if}
                
                <td height="22" align="center" style="font-family:Verdana, Arial, Helvetica, sans-serif; font-size:10px; font-weight:normal; color:#000000;">{$tdata.id}{$totals}</td>
              </tr>
            </table></td>
          </tr>
         </table>      
        </td>
  </tr>       
    <tr>
        <td colspan="3">
        <table width="100%" border="1" align="center">
  <tr>
    <td width="50%" style="text-align:center"><strong>BILL TO</strong></td>
    <td width="50%" style="text-align:center"><strong>CLIENT INFORMATION</strong></td>
  </tr>
  <tr>
    <td><strong>Account Name:</strong> {$tdata.account_name}<br/>
        <strong>Billing address:</strong> {$tdata.address}, {$tdata.city}, {$tdata.state} {$tdata.zip}</td>
    <td valign="top"><strong>{$tdata.clientname}</strong><br/><br/>
    {if $tdata.account_name|lower eq 'mercy care' || $tdata.account_name|lower eq 'mercycare'}
        {if $tdata.dob neq '0000-00-00'}<strong>DOB:</strong> {$tdata.dob|date_format:"%m-%d-%Y"}<br/><br/>{/if}
        {/if}
    <strong>Address:</strong><br/>
    {$tdata.pickaddr}<br/><br/><!--<strong>Phone:</strong> {$tdata.0.phnum}<br/><br/>--></td>
  </tr>
</table>
  <tr>
    <td colspan="3">
    <table width="100%" border="1">
  <tr>
    <td width="10%">Pickup<br/>Charges</td>
    <td width="10%">Per Mile<br/>Charges</td>
    <td width="10%">Wait Time<br/>Charges</td>
    <td width="10%">No Show<br/>Fee</td>
    <td width="10%">After<br/>Hours<br/>Fee</td>
    <td width="10%">2 Man Team<br/>Charges</td>
    <td width="10%">Bariatric<br/>Stretcher<br/>Charges</td>
    <td width="10%">Oxygen<br/>Charges</td>
    <td width="10%">Wheel Chair <br/>Rental<br/>Charges</td>
  </tr>
  <tr>
     <td>$ {$rates.pickup_ch}</td>
     <td>$ {$rates.permile_ch}</td>
     <td>$ {$rates.waittime_ch}</td>
     <td>$ {$rates.noshow_ch}</td>
     <td>$ {$rates.afterhour_ch}</td>
     <td>$ {$rates.dstretcher_ch}</td>
     <td>$ {$rates.bstretcher_ch}</td>
     <td>$ {$rates.oxygen_ch}</td>
     <td>$ {$rates.doublewheel_ch}</td>
  </tr>
   <tr>
    <td colspan="10" height="30"  style="border: solid #000000 0px;">&nbsp;</td>
  </tr>
</table>
</td>
  </tr>
  <tr>
    <td colspan="3">
    	<table width="100%" border="1"  align="center">
 <tr>
            <td width="40%" height="20" align="center" valign="middle" style="font-family:Verdana, Arial, Helvetica, sans-serif; font-size:12px; font-weight:bold; color:#000000; padding-bottom:5px; border-right: solid #000000 1px; border-bottom: solid #000000 1px;">DESCRIPTION</td>
            <td width="15%" height="20" align="center" valign="middle" style="font-family:Verdana, Arial, Helvetica, sans-serif; font-size:12px; font-weight:bold; color:#000000; padding-bottom:5px; border-bottom: solid #000000 1px;">AMOUNT</td>
          </tr>
          {section name=q loop=$tdataB}
          <tr>
    <td  width="85%">&nbsp;
    <strong> Leg {if $tdataB[q].leg eq '1'}A{elseif $tdataB[q].leg eq '2'}B{elseif $tdataB[q].leg eq '3'}C{elseif $tdataB[q].leg eq '4'}D{/if} - {$tdataB[q].appdate|date_format} 
    {if $tdataB[q].triptype eq 'One Way'}
    &nbsp;{$tdataB[q].apptime}
    {/if}
    {if $tdataB[q].triptype eq 'Round Trip'}
    {if $tdataB[q].leg eq '1'}&nbsp;{$tdataB[q].apptime}{/if}
    {if $tdataB[q].leg eq '2'}&nbsp;{$tdataB[q].returnpickup}{/if}
    {/if}
    {if $tdataB[q].triptype eq 'Three Way'}
    {if $tdataB[q].leg eq '1'}&nbsp;{$tdataB[q].apptime}{/if}
    {if $tdataB[q].leg eq '2'}&nbsp;{$tdataB[q].three_pickup}{/if}
    {if $tdataB[q].leg eq '3'}&nbsp;{$tdataB[q].returnpickup}{/if}
    {/if}
    {if $tdataB[q].triptype eq 'Four Way'}
    {if $tdataB[q].leg eq '1'}&nbsp;{$tdataB[q].apptime} {/if}
    {if $tdataB[q].leg eq '2'}&nbsp;{$tdataB[q].three_pickup} {/if}
    {if $tdataB[q].leg eq '3'}&nbsp;{$tdataB[q].four_pickup} {/if}
    {if $tdataB[q].leg eq '4'}&nbsp;{$tdataB[q].returnpickup} {/if}
    {/if}    
    <!--/ {if $tdataB[q].leg eq '1'}{$tdataB[q].apptime}{else}{$tdataB[q].returnpickup}{/if}--></strong>
    
    <br/>
    <table width="100%" border="0" style="padding-left:10px;">
    <tr>
    <td><strong>&nbsp;PO#:</strong>&nbsp; {$tdataB[q].po} / 
    {if $tdataB[q].leg eq '1'}{$tdataB[q].legaid}{elseif $tdataB[q].leg eq '2'}{$tdataB[q].legbid}{elseif $tdataB[q].leg eq '3'}{$tdataB[q].legcid}{elseif $tdataB[q].leg eq '4'}{$tdataB[q].legdid}{/if}</td>
    <td><strong>&nbsp;Account Name:</strong>&nbsp; {$tdata.account_name}</td>
    <td><strong>&nbsp;Vehicle Service: </strong> {$vdata.vehtype}</td>
    <td><strong>Pickup Charges:</strong> {$tdataB[q].pickup_ch}<br /><strong>Price Per Mile:</strong> {$tdataB[q].permile_ch}<br/></td>
    </tr>
 <!-- <tr>
    <td><strong>&nbsp;Pick Address:</strong><br/></td>
    <td><strong>&nbsp;Drop Address:</strong><br/></td>-->
    <!--<td>&nbsp;{$tdataB[q].vehicle}</td>-->
    <!--<td>&nbsp;<strong>Wait Time Charges: </strong>{if $tdataB[q].waittime neq '00:00:00'} $ {$tdataB[q].waittime_rate}{else} $ 0 {/if}--></td>
  <!--</tr>-->
  <tr>
  	{if $tdataB[q].triptype eq 'One Way'}
    <td valign="top"><strong>&nbsp;Pick Address:</strong><br/>{$tdataB[q].pickaddr|replace:', United States':''}</td>
    <td valign="top"><strong>&nbsp;Drop Address:</strong><br/>{$tdataB[q].destination|replace:', United States':''}</td>
    {/if}
    {if $tdataB[q].triptype eq 'Round Trip'}
    {if $tdataB[q].leg eq '1'}<td valign="top"><strong>&nbsp;Pick Address:</strong><br/>{$tdataB[q].pickaddr|replace:', United States':''}</td><td valign="top"><strong>&nbsp;Drop Address:</strong><br/>{$tdataB[q].destination|replace:', United States':''}</td> {/if}
    {if $tdataB[q].leg eq '2'}<td valign="top"><strong>&nbsp;Pick Address:</strong><br/>{$tdataB[q].destination|replace:', United States':''}</td><td valign="top"><strong>&nbsp;Drop Address:</strong><br/>{$tdataB[q].backto|replace:', United States':''}</td> {/if}
    {/if}
    {if $tdataB[q].triptype eq 'Three Way'}
    {if $tdataB[q].leg eq '1'}<td valign="top"><strong>&nbsp;Pick Address:</strong><br/>{$tdataB[q].pickaddr|replace:', United States':''}</td><td valign="top"><strong>&nbsp;Drop Address:</strong><br/>{$tdataB[q].destination|replace:', United States':''}</td> {/if}
    {if $tdataB[q].leg eq '2'}<td valign="top"><strong>&nbsp;Pick Address:</strong><br/>{$tdataB[q].destination|replace:', United States':''}</td><td valign="top"><strong>&nbsp;Drop Address:</strong><br/>{$tdataB[q].three_address|replace:', United States':''}</td> {/if}
    {if $tdataB[q].leg eq '3'}<td valign="top"><strong>&nbsp;Pick Address:</strong><br/>{$tdataB[q].three_address|replace:', United States':''}</td><td valign="top"><strong>&nbsp;Drop Address:</strong><br/>{$tdataB[q].backto|replace:', United States':''}</td> {/if}
    {/if}
    {if $tdataB[q].triptype eq 'Four Way'}
    {if $tdataB[q].leg eq '1'}<td valign="top"><strong>&nbsp;Pick Address:</strong><br/>{$tdataB[q].pickaddr|replace:', United States':''}</td><td valign="top"><strong>&nbsp;Drop Address:</strong><br/>{$tdataB[q].destination|replace:', United States':''}</td> {/if}
    {if $tdataB[q].leg eq '2'}<td valign="top"><strong>&nbsp;Pick Address:</strong><br/>{$tdataB[q].destination|replace:', United States':''}</td><td valign="top"><strong>&nbsp;Drop Address:</strong><br/>{$tdataB[q].three_address|replace:', United States':''}</td> {/if}
    {if $tdataB[q].leg eq '3'}<td valign="top"><strong>&nbsp;Pick Address:</strong><br/>{$tdataB[q].three_address|replace:', United States':''}</td><td valign="top"><strong>&nbsp;Drop Address:</strong><br/>{$tdataB[q].four_address|replace:', United States':''}</td> {/if}
    {if $tdataB[q].leg eq '4'}<td valign="top"><strong>&nbsp;Pick Address:</strong><br/>{$tdataB[q].four_address|replace:', United States':''}</td><td valign="top"><strong>&nbsp;Drop Address:</strong><br/>{$tdataB[q].backto|replace:', United States':''}</td> {/if}
    {/if}
    <td  valign="top"><strong>Total Miles =</strong> {$tdataB[q].miles}<br/><strong>Free Miles =</strong> {$tdataB[q].freemiles}<br/><strong>Billable Miles =</strong> {$tdataB[q].chargeablemile}</td>
    <td>

{if $tdataB[q].miscellaneous_charges neq '0'}Misc. Chrg: {$tdataB[q].miscellaneous_charges}<br/>{/if}
{if $tdataB[q].dstretcher eq 'Yes'}2ManTeam Chrg: {$tdataB[q].dstretcher_rate}<br/>{/if}
{if $tdataB[q].oxygen eq 'Yes'}Oxg. Chrg: {$tdataB[q].oxygen_rate}<br/>{/if}
{if $tdataB[q].bstretcher eq 'Yes'}Bariatric Str. Chrg: {$tdataB[q].bstretcher_rate}<br/>{/if}
{if $tdataB[q].doublewheel eq 'Yes'}WC Rental Chrg: {$tdataB[q].doublewheel_rate}<br/>{/if}
{if $tdataB[q].afterhour eq '1'}After Hour Fee: {$tdataB[q].afterhour_rate}<br/>{/if}
{if $tdataB[q].noshow eq '1'}No Show Fee: {$tdataB[q].noshow_rate}<br/>{/if}
{if $tdataB[q].waittime_unit neq '0'}Wait Time Chrg: {$tdataB[q].waittime_rate}<br/>{/if}
</td>
  </tr>
</table>
    </td>
    <td  width="15%" style="text-align:center;"><strong>$ {$tdataB[q].charges|string_format:"%.2f"}</strong></td>
  </tr>
          {/section}
 <!-- <tr>
  
    <td>  <table width="100%" border="0" style="padding-left:10px;">
  <tr>
    <td colspan="2"  style="text-align:right;"><strong>&nbsp;Total Amount:</strong></td>
    </tr>
  
</table></td>
<td style="text-align:center;"><strong>$ {$totalammount}<input type="hidden" id="totalammount" value="{$totalammount}"  /></strong></td>
      </tr>-->
   <tr>
    <td ><strong>Thank You For Using {$cdata.title}</strong>	<div style="text-align:right;" ><strong>Grand Total</strong></div></td>
    <td style="text-align:center;"> 	
					<strong>$ {$gtotal|string_format:"%.2f"}</strong>
    </td>
  </tr>
  <tr><td colspan="4"><strong><ul>
  <li>MAKE ALL CHECKS PAYABLE TO {$cdata.title|upper}, TOTAL DUE IN 30 DAYS UPON RECEIPT.</li>
 <!-- <li>OVERDUE ACCOUNTS SUBJECT TO A CHARGE OF 12% PER MONTH</li>-->
  <li>TOTAL CHARGES INCLUDE DISPATCH AND PICK-UP, DRIVER WAITING TIME AND ON-SITE CANCELLATION FEES</li>
  </ul></strong></td></tr>
          
          </table>
    <!--<table width="100%" border="1">
  	<tr style="background-color:#CCC;">
    <td align="center" width="4%"><strong>#</strong></td>
    <td align="center" width="8%"><strong>Date</strong></td>
    <td align="center" width="10%"><strong>Customer Name</strong></td>
    <td align="center" width="5%"><strong>PO#</strong></td>
    <td align="center" width="8%"><strong>Account</strong></td>
    <td align="center" width="13%"><strong>Pick Up Address</strong></td>
    <td align="center" width="13%"><strong>Delivery Address</strong></td>
    <td align="center" width="5%"><strong>Time</strong></td>
    <td align="center" width="10%"><strong>Vehicle Service</strong></td>
    <td align="center" width="10%"><strong>Miles</strong></td>
    <td align="center" width="18%"><strong>Out of Area / Misc Fee</strong></td>
    <td align="center" width="12%"><strong>Total $</strong></td>
  </tr>
 <tr>
    <td>Leg A</td>
    <td>{$tdata.appdate|date_format}</td>
    <td>{$tdata.clientname}</td>
	<td>{$tdata.po}<br/>{$tdata.legaid}</td>
    <td>{$tdata.account_name}</td>
    <td>{$tdata.pickaddr}</td>
    <td>{$tdata.destination}</td>
    <td>{$tdata.apptime|truncate:5:""}</td>
    <td>{$vdata.vehtype}<br />Pickup Charges: {$legA.pickup_ch}<br />Price Per Mile: {$legA.permile_ch}</td>
    <td>Total Miles = {$legA.miles}<br/>Free Miles = {$legA.freemiles}<br/>Billable Miles = {$chargeablemile1}</td>
    <td>
{if $legA.miscellaneous_charges neq '0'}Misc. Chrg: {$legA.miscellaneous_charges}<br/>{/if}
{if $legA.dstretcher eq 'Yes'}2ManTeam Chrg: {$legA.dstretcher_rate}<br/>{/if}
{if $legA.oxygen eq 'Yes'}Oxg. Chrg: {$legA.oxygen_rate}<br/>{/if}
{if $legA.bstretcher eq 'Yes'}Bariatric Str. Chrg: {$legA.bstretcher_rate}<br/>{/if}
{if $legA.doublewheel eq 'Yes'}WheelChair Rental Chrg: {$legA.doublewheel_rate}<br/>{/if}
{if $legA.afterhour eq '1'}After Hour Fee: {$legA.afterhour_rate}<br/>{/if}
{if $legA.noshow eq '1'}No Show Fee: {$legA.noshow_rate}<br/>{/if}
{if $legA.waittime_unit neq '0'}Wait Time Charges: {$legA.waittime_rate}<br/>{/if}
    </td>
    <td>$&nbsp;{$legA.charges}</td>
 </tr>
 {if $tdata.triptype eq 'Round Trip'}
 <tr>
     <td>Leg B</td>
    <td>{$tdata.appdate|date_format}</td>
    <td>{$tdata.clientname}</td>
    <td>{$tdata.po}<br/>{$tdata.legbid}</td>
	<td>{$tdata.account_name}</td>
    <td>{$tdata.destination}</td>
    <td>{$tdata.backto}</td>
    <td>{$tdata.returnpickup|truncate:5:""}</td>
    <td>{$vdata.vehtype}<br />Pickup Charges: {$legB.pickup_ch}<br />Price Per Mile: {$legB.permile_ch}</td>
    <td>Total Miles = {$legB.miles}<br/>Free Miles = {$legB.freemiles}<br/>Billable Miles = {$chargeablemile2}</td>
    <td>
{if $legB.miscellaneous_charges neq '0'}Misc. Chrg: {$legB.miscellaneous_charges}<br/>{/if}
{if $legB.dstretcher eq 'Yes'}2ManTeam Chrg: {$legB.dstretcher_rate}<br/>{/if}
{if $legB.oxygen eq 'Yes'}Oxg. Chrg: {$legB.oxygen_rate}<br/>{/if}
{if $legB.bstretcher eq 'Yes'}Bariatric Str. Chrg: {$legB.bstretcher_rate}<br/>{/if}
{if $legB.doublewheel eq 'Yes'}WheelChair Rental Chrg: {$legB.doublewheel_rate}<br/>{/if}
{if $legB.afterhour eq '1'}After Hour Fee: {$legB.afterhour_rate}<br/>{/if}
{if $legB.noshow eq '1'}No Show Fee: {$legB.noshow_rate}<br/>{/if}
{if $legB.waittime_unit neq '0'}Wait Time Charges: {$legB.waittime_rate}<br/>{/if}
    </td>
    <td>$&nbsp;{$legB.charges}</td>
 </tr>{/if}
 <tr>
 <td></td>
 <td colspan="9"> Grand Total: </td>
 <td>{$total_charges}</td>
 </tr>
  
  </table>-->
  </td></tr></table>
  </td>
      </tr>
    </table></div></td>
  </tr>
</table>