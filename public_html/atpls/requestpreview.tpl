<link href="css/preview.css" rel="stylesheet" type="text/css">
{literal}
<style>
.ptxt{
  font-family:Arial, Helvetica, sans-serif;
  font-weight:bold;
  font-size:11px;
}
    #printable { display: block; }
    @media print
    {
        #non-printable { display: none; }
        #printable { display: block; }
    }
.tde { border-bottom:1px solid #666; }	
.p { width:140px; line-height:14px; text-align:justify; height:auto; margin:0; padding:0; float:left;}
.headus { font-family:Verdana, Geneva, sans-serif; font-size:12px; font-weight:bold; color:#000;}
.val {font-family:Verdana, Geneva, sans-serif; font-size:12px; color: #333;}
</style>
{/literal}
<div align="left">
  <div align="right" id="non-printable" style="width:840px; background-color:#FFFFFF"><a href="javascript:window.print();"><img src="images/print.gif" border="0" /></a></div>
  <div align="center" id="printable">
    <table border="0" cellspacing="1" cellpadding="1" width="840">
      <tr >
        <td class="tde" colspan="2"  valign="top"><p class="style4">&nbsp; <a href="http://{$eurl}"><img src="images/van.png" border="0" height="60px" width="100px"></a></td>
        <td class="tde" valign="top" colspan="2"><p align="center" class="style4"><em><b>TRANSPORTATION ORDER</b></em> </td>
        <td class="tde" valign="top" colspan="2"><strong> <font color="#000000" size="1px" >{$contact.0.title},<br />
          {$contact.0.address}, <br />
          {$contact.0.city}, {$contact.0.state}, {$contact.0.zip} <br />
          TEL:{$contact.0.phone}</font></strong></td>
      </tr>

{if $RequestDetail.0.ftof eq '1'} <tr><td colspan="4"><span style="color:#F00;">Facility to Facility</span></td></tr>  {/if}
      
<tr><!--<td width="140" class="headus">Facility: </td>
<td width="140" class="val">{$RequestDetail.0.hospname}</td>
<td width="140" class="headus">Insurance Type:</td><td width="140" class="val"></td>
<td width="140" class="val">{$RequestDetail.0.insurance_name}</td><td width="140" class="val"></td>--></tr>

<tr><!--<td width="140" class="headus">Insurance ID:</td><td width="140" class="val">{$RequestDetail.0.cisid}</td><td width="140" class="headus">S.S.N #:</td><td width="140" class="val">{$RequestDetail.0.ssn}</td>
<td width="140" class="headus">Appointment Type:</td><td width="140" class="val">{$RequestDetail.0.appt_type}</td></tr>-->

<tr><td width="140" class="headus">Patient Name:</td><td colspan="2" class="val">{$RequestDetail.0.clientname}</td><td width="140" class="headus"></td><td  colspan="2" class="val"></td></tr>

  <tr><td width="140"><p class="p"></p></td><td width="140"></td><td width="140"></td><td width="140"></td><td width="140"></td><td width="140"></td></tr>

<tr><td width="140" class="headus">Requested Date:</td><td width="140" class="val">{$RequestDetail.0.today_date|date_format}</td><td width="140"  class="headus">Appointment Date:</td><td width="140" class="val">{$RequestDetail.0.appdate|date_format}</td><td width="140" class="headus">D.O.B:</td><td width="140" class="val">{if $RequestDetail.0.dob neq '0000-00-00'}{$RequestDetail.0.dob|date_format}{/if}</td></tr>


<tr><td width="140" class="headus">Patient Weight:</td><td width="140" class="val">{$RequestDetail.0.patient_weight} Lbs</td><td width="140"  class="headus">PO #:</td><td width="140" class="val">{$RequestDetail.0.po}</td><td width="140" class="headus"></td><td width="140" class="val"></td></tr>


<tr><td width="140" class="headus">Patient Phone #:</td><td width="140" class="val">{$RequestDetail.0.phnum}</td><td width="140" class="headus">Service Needed:</td><td width="140" class="val">{$vehtype}</td><td width="140" class="headus">Trip Type:</td><td width="140" class="val">{$RequestDetail.0.triptype}</td></tr>
  
    <tr><td width="140"><p class="p"></p><br/></td><td width="140" class="val"></td><td width="140"></td><td width="140"></td><td width="140"></td><td width="140"></td></tr>
  
<tr><td width="140" class="headus">Pick Up Phone#:</td><td width="140" colspan="3" class="val">{$RequestDetail.0.p_phnum}</td><td width="140" class="headus">Pickup Location:</td>
<td width="140" class="val">{$RequestDetail.0.picklocation}</td></tr>

 
<tr><td width="140" class="headus"></td><td width="140" colspan="3" class="val"></td><td width="140" class="headus">Appointment Time:</td>
<td width="140" class="val">{$RequestDetail.0.org_apptime}</td></tr>

<tr><td width="140" class="headus">Pick Address:</td><td width="140" colspan="3" class="val">{$RequestDetail.0.roomapt} {$RequestDetail.0.pickaddr}</td><td width="140" class="headus">Pick Time(1):</td><td width="140" class="val">{$RequestDetail.0.apptime}</td></tr>

<tr><td width="140" class="headus">Pick Instructions:</td><td colspan="4" class="val">{$RequestDetail.0.pickup_instruction}</td></tr>

<tr><td width="140" class="headus">Destination Phone#:</td><td width="140" colspan="3" class="val">{$RequestDetail.0.d_phnum}</td><td width="140" class="headus">Drop Location:</td>
<td width="140" class="val">{$RequestDetail.0.droplocation}</td></tr>
<tr><td width="140" class="headus">Destination:</td><td width="140" colspan="3" class="val">{$RequestDetail.0.stebldg} {$RequestDetail.0.destination_place} {$RequestDetail.0.destination}</td><td width="140" class="headus">Pick Time(2):</td><td width="140" class="val">{if $RequestDetail.0.triptype eq 'Round Trip'}{$RequestDetail.0.returnpickup}{/if}
{if $RequestDetail.0.triptype eq 'Three Way' || $RequestDetail.0.triptype eq 'Four Way' || $RequestDetail.0.triptype eq 'Five Way'}{$RequestDetail.0.three_pickup}{/if}</td></tr>
<tr><td width="140" class="headus" colspan="2">Destination Instructions:</td><td colspan="3" class="val">{$RequestDetail.0.destination_instruction}</td></tr>

{if $RequestDetail.0.triptype eq 'Three Way' || $RequestDetail.0.triptype eq 'Four Way' || $RequestDetail.0.triptype eq 'Five Way'}
<tr><td width="140" class="headus">Second Destination:</td><td width="140" colspan="3" class="val">{$RequestDetail.0.stebldg3} {$RequestDetail.0.destination_place3} {$RequestDetail.0.three_address}</td><td width="140" class="headus">Pick Time(3):</td><td width="140" class="val">{if $RequestDetail.0.triptype eq 'Three Way'}{$returnpickup}{/if}
{if $RequestDetail.0.triptype eq 'Four Way' || $RequestDetail.0.triptype eq 'Five Way'}{$RequestDetail.0.four_pickup}{/if}</td></tr>{/if}

{if $RequestDetail.0.triptype eq 'Four Way' || $RequestDetail.0.triptype eq 'Five Way'}
<tr><td width="140" class="headus">Third Destination:</td><td width="140" colspan="3" class="val">{$RequestDetail.0.stebldg4} {$RequestDetail.0.destination_place4} {$RequestDetail.0.four_address}</td><td width="140" class="headus">Pick Time(4):</td><td width="140" class="val">{if $RequestDetail.0.triptype eq 'Four Way'}{$returnpickup}{/if}
{if $RequestDetail.0.triptype eq 'Five Way'}{$RequestDetail.0.five_pickup}{/if}</td></tr>{/if}

{if $RequestDetail.0.triptype eq 'Five Way'}
<tr><td width="140" class="headus">Fourth Destination:</td><td width="140" colspan="3" class="val">{$RequestDetail.0.stebldg5} {$RequestDetail.0.destination_place5} {$RequestDetail.0.five_address}</td><td width="140" class="headus">Pick Time(Last):</td><td width="140" class="val">{if $RequestDetail.0.triptype eq 'Five Way'}{$RequestDetail.0.returnpickup}{/if}</td></tr>{/if}

{if $RequestDetail.0.triptype eq 'Round Trip' || $RequestDetail.0.triptype eq 'Three Way' || $RequestDetail.0.triptype eq 'Four Way' || $RequestDetail.0.triptype eq 'Five Way'}

<tr><td width="140" class="headus">Back To Location:</td>
<td width="140" class="val">{$RequestDetail.0.backtolocation}</td></tr>
<tr><td width="140" class="headus">Last Destination:</td><td width="140" colspan="3" class="val">{$RequestDetail.0.backto}</td><td width="140"></td><td width="140"></td></tr> {/if}
  <tr><td width="140"><p class="p"></p></td><td width="140"></td><td width="140"></td><td width="140"></td><td width="140"></td><td width="140"></td></tr>

  <tr><td width="140"><p class="p"></p></td><td width="140"></td><td width="140"></td><td width="140"></td><td width="140"></td><td width="140"></td></tr>

<!--<tr>
<td width="140" class="headus">Driver:</td><td width="140" class="val">{$RequestDetail.0.driver}</td>
<td width="140" class="headus">Oxygen:</td><td width="140" class="val">{$RequestDetail.0.oxygen}</td>
<td width="140" class="headus">Child Seats:</td><td width="140" class="val">{$RequestDetail.0.childseat}</td></tr>-->
<tr>

<td width="140" class="headus">Bariatric Stretcher:</td><td width="140" class="val">{$RequestDetail.0.bar_stretcher}</td>
<td width="140" class="headus">2 Man Team:</td><td width="140" class="val">{$RequestDetail.0.dstretcher}</td>
</tr>
<tr>
<td width="140" class="headus">Wheel Chair Rental:</td><td width="140" class="val">{$RequestDetail.0.dwchair}</td>
<td width="140" class="headus">0xygen:</td><td width="140" class="val">{$RequestDetail.0.oxygen}</td>
</tr>

{if $RequestDetail.0.phyaddress neq '' }
<tr><td width="140" class="headus">Physician Name:</td><td width="140" class="val">{$RequestDetail.0.fname} {$RequestDetail.0.lname}</td><td width="140" class="headus">Physician Hospital:</td><td width="140" class="val">{$RequestDetail.0.clinic}</td><td width="140" class="headus">Physician Phone/Fax:</td><td width="140" class="val">{$RequestDetail.0.phyphone} / {$RequestDetail.0.phyfax}</td></tr>
<tr><td width="140" class="headus">Physician Address:</td><td width="140" class="val" colspan="2">{$RequestDetail.0.phyaddress}</td><td width="140" class="headus">Reason for Visit:</td><td width="140" class="val" colspan="2">{$RequestDetail.0.reason}</td></tr>
{/if}

  <tr><td width="140" class="headus">Comments:</td><td width="140" class="val" colspan="5">{$RequestDetail.0.comments}</td></tr>
      
      <tr valign="middle" class="pheading" height="35"> </tr>
    </table>
  </div>
</div>
