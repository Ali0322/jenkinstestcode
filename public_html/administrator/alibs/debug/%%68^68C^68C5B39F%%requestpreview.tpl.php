<?php /* Smarty version 2.6.12, created on 2020-01-03 20:03:09
         compiled from reportstpl/requestpreview.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'date_format', 'reportstpl/requestpreview.tpl', 150, false),)), $this); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<?php echo '
<script language="javascript" type="text/javascript" src="../facebox/facebox.js"></script>
<script language="javascript" type="text/javascript" src="../scripts/jquery-1.2.6.js"></script>
<script language="javascript" type="text/javascript" src="../scripts/jquery.alerts.js"></script>
<link href="../theme/jquery.alerts.css" rel="stylesheet" type="text/css">
'; ?>

<?php echo '
<script type="text/javascript">
function addunit(id,reqid,units){
var ans= 1;
if(id > 0){
    jPrompt(\'Enter No. of Units (Only positive intiger e.g. 1,2 OR 3):\',units, \'Add Number Of Units\', function(r) { //alert(\'In\');
	  if(typeof(r) == "undefined"){
	   // Ask();
	  }else{
	  if(r == \'\' || r == \'0\' || r == null){ jAlert(\'You must Enter units for HIC form\'); return false; } else{
	    ans = r;  	
       AjaxSend(id,reqid,ans); }
	  }
	});
}
}	
function Ask(){
    jPrompt(\'Enter No. of Units (Only positive intiger e.g. 1,2 OR 3):\', \'\', \'Add Number Of Units\', function(r) {
	  if(typeof(r) == "undefined"){
	  jAlert(\'You must Enter units for HIC form\'); 	  
	    Ask();
	  }else{
	  return r; }
	});
}	
function AjaxSend(id,reqid,units){
   location.href="genreport.php?id="+id+"&reqid="+reqid+"&units="+units+"&charges="+1;
}
</script>
'; ?>

</head>

<body>
</body>
</html>
 <?php echo '
 <link href="../facebox/facebox.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="../theme/style.css" type="text/css">
 <style type="text/css">
  #printable { display: block; }
    @media print
    {
        #non-printable { display: none; }
        #printable { display: block; }
    }
.tdheight { height:21px; vertical-align:bottom; }
.tde { border-bottom:1px solid #666; }	
.p { width:140px; line-height:14px; text-align:justify; height:auto; margin:0; padding:0; float:left;}
.headus { font-family:Verdana, Geneva, sans-serif; font-size:12px; font-weight:bold; color:#000;}
.val {font-family:Verdana, Geneva, sans-serif; font-size:12px; color: #333;}	
    </style>
   

'; ?>

<!--<a rel="facebox" href="genreport.php?id=<?php echo $this->_tpl_vars['id']; ?>
&reqid=<?php echo $this->_tpl_vars['reqid']; ?>
"><img src="../images/export.png" border="0" /></a>-->

<div align="left">
<div align="right" id="non-printable" style="width:700px; background-color:#FFFFFF"><!--<?php if ($this->_tpl_vars['prog'] == '2'): ?><a href="upload_signature.php?id=<?php echo $this->_tpl_vars['id']; ?>
&reqid=<?php echo $this->_tpl_vars['reqid']; ?>
" rel="facebox" >Upload Signature</a><?php endif; ?>&nbsp;&nbsp;&nbsp; <a href="upload_file.php?id=<?php echo $this->_tpl_vars['id']; ?>
&reqid=<?php echo $this->_tpl_vars['reqid']; ?>
" rel="facebox" >Upload Transportation Log</a>--><!--<?php if ($this->_tpl_vars['st'] == 'approved'):  if ($this->_tpl_vars['hic'] != 1):  endif; ?><a href="javascript:addunit('<?php echo $this->_tpl_vars['id']; ?>
','<?php echo $this->_tpl_vars['reqid']; ?>
','<?php echo $this->_tpl_vars['units']; ?>
');"><img src="../images/export.png" border="0" /></a><?php endif; ?>-->&nbsp;&nbsp;<a href="javascript:window.print();"><img src="../images/print.gif" border="0" /></a></div>
<div align="center" id="printable">

<table border="0" cellspacing="1" cellpadding="1" width="810">
      <tr >
        <td class="tde" colspan="2"  valign="top"><p class="style4">&nbsp; <a href="http://<?php echo $this->_tpl_vars['contact']['0']['url']; ?>
"><img src="../images/logo.png" border="0" height="60px" width="100px"></a></td>
        <td class="tde" valign="top" colspan="2"><p align="center" class="style4"><em><b></b></em> </td>
        <td class="tde" valign="top" colspan="2"><strong> <font color="#000000" size="1px" ><?php echo $this->_tpl_vars['contact']['0']['title']; ?>
,<br />
          <?php echo $this->_tpl_vars['contact']['0']['address']; ?>
, <br />
          <?php echo $this->_tpl_vars['contact']['0']['city']; ?>
, <?php echo $this->_tpl_vars['contact']['0']['state']; ?>
, <?php echo $this->_tpl_vars['contact']['0']['zip']; ?>
 <br />
          TEL:<?php echo $this->_tpl_vars['contact']['0']['phone']; ?>
</font></strong></td>
      </tr>
 <tr><td colspan="6" style="height:20px;"></td></tr>
 <tr><td colspan="6">
 <table width="98%" border="0"  style=" outline-style:ridge; margin-left:10px; padding-left:10px;" >
  <!--<tr>
    <td colspan="2" style="height:21px; text-align:center;"><strong>Pickup Remarks</strong></td>
    
    <td colspan="2" style="height:21px; text-align:center;"><strong>Drop Remarks</strong></td>
  
  </tr>
  <tr>
    <td  class="tdheight">Driver Name:</td>
    <td class="tdheight">.................................</td>
    <td class="tdheight">Driver Name:</td>
    <td class="tdheight">.................................</td>
  </tr>
  <tr>
    <td class="tdheight">Driver Sig.:</td>
    <td class="tdheight">.................................</td>
    <td class="tdheight">Driver Sig.:</td>
    <td class="tdheight">.................................</td>
  </tr>
  <tr>
    <td class="tdheight">Relationship:</td>
    <td class="tdheight">.................................</td>
    <td class="tdheight">Relationship:</td>
    <td class="tdheight">.................................</td>
  </tr>
  
    <tr>
    <td class="tdheight"></td>
    <td class="tdheight">&nbsp;</td>
    <td class="tdheight"></td>
    <td class="tdheight">&nbsp;</td>
  </tr>-->
  <tr>
    <td class="tdheight" colspan="4"><?php unset($this->_sections['q']);
$this->_sections['q']['name'] = 'q';
$this->_sections['q']['loop'] = is_array($_loop=$this->_tpl_vars['signatures']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
    <div style="float:left; padding-left:10px;">

<?php if ($this->_sections['q']['iteration'] == '1'): ?><strong><u>First Destination</u></strong><br/><?php endif; ?>    
<?php if ($this->_sections['q']['iteration'] == '2'): ?><strong><u>Second Destination</u></strong><br/><?php endif; ?>    
<?php if ($this->_sections['q']['iteration'] == '3'): ?><strong><u>Third Destination</u></strong><br/><?php endif; ?>    
<?php if ($this->_sections['q']['iteration'] == '4'): ?><strong><u>Forth Destination</u></strong><br/><?php endif; ?>    
<?php if ($this->_sections['q']['iteration'] == '5'): ?><strong><u>Fifth Destination</u></strong><br/><?php endif; ?>    

    
<!--<?php if ($this->_tpl_vars['signatures'][$this->_sections['q']['index']]['startmilage'] != ''): ?><strong>Start Miles:</strong><?php echo $this->_tpl_vars['signatures'][$this->_sections['q']['index']]['startmilage']; ?>
<br/><?php endif; ?>
<?php if ($this->_tpl_vars['signatures'][$this->_sections['q']['index']]['endmilage'] != ''): ?><strong>End Miles&nbsp;&nbsp;&nbsp;:</strong><?php echo $this->_tpl_vars['signatures'][$this->_sections['q']['index']]['endmilage']; ?>
<br/><?php endif; ?>

<?php if ($this->_tpl_vars['signatures'][$this->_sections['q']['index']]['paperwork'] != ''): ?><strong>Is there any paper work?&nbsp;&nbsp;&nbsp;:</strong><?php echo $this->_tpl_vars['signatures'][$this->_sections['q']['index']]['paperwork']; ?>
<br/><?php endif; ?>
<?php if ($this->_tpl_vars['signatures'][$this->_sections['q']['index']]['personal_belonging'] != ''): ?><strong>Are there any personal belongings?&nbsp;&nbsp;&nbsp;:</strong><?php echo $this->_tpl_vars['signatures'][$this->_sections['q']['index']]['personal_belonging']; ?>
<br/><?php endif; ?>
<?php if ($this->_tpl_vars['signatures'][$this->_sections['q']['index']]['medication'] != ''): ?><strong>Are there any medication?&nbsp;&nbsp;&nbsp;:</strong><?php echo $this->_tpl_vars['signatures'][$this->_sections['q']['index']]['medication']; ?>
<br/><?php endif; ?>-->
<?php if ($this->_tpl_vars['signatures'][$this->_sections['q']['index']]['signature'] != ''): ?><img src="../../iphone/signature/<?php echo $this->_tpl_vars['signatures'][$this->_sections['q']['index']]['signature']; ?>
" width="140" height="140" /><?php endif; ?>
<?php if ($this->_tpl_vars['signatures'][$this->_sections['q']['index']]['signature2'] != ''): ?><img src="../../iphone/signature/<?php echo $this->_tpl_vars['signatures'][$this->_sections['q']['index']]['signature2']; ?>
" width="140" height="140" /><?php endif; ?>
    </div> <?php endfor; endif; ?>
    </td>
  </tr>
</table>
 </td></tr>     
<tr><td colspan="6" style="height:20px;"></td></tr>
<tr><td colspan="6" style="text-align:center;"><h3><b>Transportation Log</b></h3>&nbsp;</td></tr>
<tr><!--<td width="140" class="headus">Facility:</td><td width="140" class="val"><?php echo $this->_tpl_vars['clinic']; ?>
</td><td width="140" class="headus">Insurance Type:</td><td width="140" class="val"><?php echo $this->_tpl_vars['RequestDetail']['0']['insurance_name']; ?>
</td><td width="140" class="headus">Insurance ID:</td><td width="140" class="val"><?php echo $this->_tpl_vars['RequestDetail']['0']['cisid']; ?>
</td>--></tr>

<tr><td width="140" class="headus">PO #:</td><td width="140" class="val"><?php echo $this->_tpl_vars['RequestDetail']['0']['po']; ?>
</td><!--<td width="140" class="headus">S.S.N #:</td><td width="140" class="val"><?php echo $this->_tpl_vars['RequestDetail']['0']['ssn']; ?>
</td>--><td width="140" class="headus"></td><td width="140" class="val"></td></tr>

<tr><td width="140" class="headus">Client Name:</td><td colspan="2" class="val"><?php echo $this->_tpl_vars['RequestDetail']['0']['clientname']; ?>
</td><td width="140" class="headus"></td><td  colspan="2" class="val"></td></tr>
<!--<tr><td width="140" class="headus">Appointment Type:</td><td colspan="2" class="val"><?php echo $this->_tpl_vars['RequestDetail']['0']['appt_type']; ?>
</td><td width="140" class="headus"></td><td  colspan="2" class="val"></td></tr>-->

<tr><td width="140"><p class="p"></p></td><td width="140"></td><td width="140"></td><td width="140"></td><td width="140"></td><td width="140"></td></tr>

<tr><td width="140" class="headus">Requested Date:</td><td width="140" class="val"><?php echo ((is_array($_tmp=$this->_tpl_vars['RequestDetail']['0']['today_date'])) ? $this->_run_mod_handler('date_format', true, $_tmp) : smarty_modifier_date_format($_tmp)); ?>
</td><td width="140"  class="headus">Appointment Date:</td><td width="140" class="val"><?php echo ((is_array($_tmp=$this->_tpl_vars['RequestDetail']['0']['appdate'])) ? $this->_run_mod_handler('date_format', true, $_tmp) : smarty_modifier_date_format($_tmp)); ?>
</td><td width="140" class="headus">D.O.B:</td><td width="140" class="val"><?php if ($this->_tpl_vars['RequestDetail']['0']['dob'] != '0000-00-00'):  echo ((is_array($_tmp=$this->_tpl_vars['RequestDetail']['0']['dob'])) ? $this->_run_mod_handler('date_format', true, $_tmp) : smarty_modifier_date_format($_tmp));  endif; ?></td></tr>

<tr><td width="140" class="headus">Patient Weight:</td><td width="140" class="val"><?php echo $this->_tpl_vars['RequestDetail']['0']['patient_weight']; ?>
 Lbs</td><td width="140"  class="headus">PO #:</td><td width="140" class="val"><?php echo $this->_tpl_vars['RequestDetail']['0']['po']; ?>
</td><td width="140" class="headus"></td><td width="140" class="val"></td></tr>


<tr><td width="140" class="headus">Patient Phone #:</td><td width="140" class="val"><?php echo $this->_tpl_vars['RequestDetail']['0']['phnum']; ?>
</td><td width="140" class="headus">Service Needed:</td><td width="140" class="val"><?php echo $this->_tpl_vars['vehtype']; ?>
</td><td width="140" class="headus">Trip Type:</td><td width="140" class="val"><?php echo $this->_tpl_vars['RequestDetail']['0']['triptype']; ?>
</td></tr>
  
    <tr><td width="140"><p class="p"></p></td><td width="140"></td><td width="140"></td><td width="140"></td><td width="140"></td><td width="140"></td></tr>
  
  
<tr><td width="140" class="headus">Pick Up Phone#:</td><td width="140" colspan="3" class="val"><?php echo $this->_tpl_vars['RequestDetail']['0']['p_phnum']; ?>
</td><td width="140" class="headus">Pickup Location:</td>
<td width="140" class="val"><?php echo $this->_tpl_vars['RequestDetail']['0']['picklocation']; ?>
</td></tr>

 
<tr><td width="140" class="headus"></td><td width="140" colspan="3" class="val"></td><td width="140" class="headus">Appointment Time:</td>
<td width="140" class="val"><?php echo $this->_tpl_vars['RequestDetail']['0']['org_apptime']; ?>
</td></tr>

<tr><td width="140" class="headus">Pick Address:</td><td width="140" colspan="3" class="val"><?php echo $this->_tpl_vars['RequestDetail']['0']['roomapt']; ?>
 <?php echo $this->_tpl_vars['RequestDetail']['0']['pickaddr']; ?>
</td><td width="140" class="headus">Pick Time(1):</td><td width="140" class="val"><?php echo $this->_tpl_vars['apptime']; ?>
</td></tr>
<tr><td width="140" class="headus">Pick Instructions:</td><td colspan="4" class="val"><?php echo $this->_tpl_vars['RequestDetail']['0']['pickup_instruction']; ?>
</td></tr>

<tr><td width="140" class="headus">Destination Phone#:</td><td width="140" colspan="3" class="val"><?php echo $this->_tpl_vars['RequestDetail']['0']['d_phnum']; ?>
</td><td width="140" class="headus">Drop Location:</td>
<td width="140" class="val"><?php echo $this->_tpl_vars['RequestDetail']['0']['droplocation']; ?>
</td></tr>

<tr><td width="140" class="headus">Destination:</td><td width="140" colspan="3" class="val"><?php echo $this->_tpl_vars['RequestDetail']['0']['stebldg']; ?>
 <?php echo $this->_tpl_vars['RequestDetail']['0']['destination_place']; ?>
 <?php echo $this->_tpl_vars['RequestDetail']['0']['destination']; ?>
</td><td width="140" class="headus">Pick Time(2):</td><td width="140" class="val"><?php if ($this->_tpl_vars['RequestDetail']['0']['triptype'] == 'Round Trip'):  if ($this->_tpl_vars['returnpickup'] == '00:00'): ?>--:--<?php else:  echo $this->_tpl_vars['returnpickup'];  endif;  endif; ?>
<?php if ($this->_tpl_vars['RequestDetail']['0']['triptype'] == 'Three Way' || $this->_tpl_vars['RequestDetail']['0']['triptype'] == 'Four Way' || $this->_tpl_vars['RequestDetail']['0']['triptype'] == 'Five Way'):  if ($this->_tpl_vars['RequestDetail']['0']['three_pickup'] == '00:00:00'): ?>--:--<?php else:  echo $this->_tpl_vars['RequestDetail']['0']['three_pickup'];  endif;  endif; ?></td></tr>
<tr><td width="140" class="headus" colspan="2">Destination Instructions:</td><td colspan="3" class="val"><?php echo $this->_tpl_vars['RequestDetail']['0']['destination_instruction']; ?>
</td></tr>

<?php if ($this->_tpl_vars['RequestDetail']['0']['triptype'] == 'Three Way' || $this->_tpl_vars['RequestDetail']['0']['triptype'] == 'Four Way' || $this->_tpl_vars['RequestDetail']['0']['triptype'] == 'Five Way'): ?>
<tr><td width="140" class="headus">Second Destination:</td><td width="140" colspan="3" class="val"><?php echo $this->_tpl_vars['RequestDetail']['0']['stebldg3']; ?>
 <?php echo $this->_tpl_vars['RequestDetail']['0']['destination_place3']; ?>
 <?php echo $this->_tpl_vars['RequestDetail']['0']['three_address']; ?>
</td><td width="140" class="headus">Pick Time(3):</td><td width="140" class="val"><?php if ($this->_tpl_vars['RequestDetail']['0']['triptype'] == 'Three Way'):  if ($this->_tpl_vars['returnpickup'] == '00:00'): ?>--:--<?php else:  echo $this->_tpl_vars['returnpickup'];  endif;  endif; ?>
<?php if ($this->_tpl_vars['RequestDetail']['0']['triptype'] == 'Four Way' || $this->_tpl_vars['RequestDetail']['0']['triptype'] == 'Five Way'):  if ($this->_tpl_vars['RequestDetail']['0']['four_pickup'] == '00:00:00'): ?>--:--<?php else:  echo $this->_tpl_vars['RequestDetail']['0']['four_pickup'];  endif;  endif; ?></td></tr><?php endif; ?>

<?php if ($this->_tpl_vars['RequestDetail']['0']['triptype'] == 'Four Way' || $this->_tpl_vars['RequestDetail']['0']['triptype'] == 'Five Way'): ?>
<tr><td width="140" class="headus">Third Destination:</td><td width="140" colspan="3" class="val"><?php echo $this->_tpl_vars['RequestDetail']['0']['stebldg4']; ?>
 <?php echo $this->_tpl_vars['RequestDetail']['0']['destination_place4']; ?>
 <?php echo $this->_tpl_vars['RequestDetail']['0']['four_address']; ?>
</td><td width="140" class="headus">Pick Time(4):</td><td width="140" class="val"><?php if ($this->_tpl_vars['RequestDetail']['0']['triptype'] == 'Four Way'):  if ($this->_tpl_vars['returnpickup'] == '00:00'): ?>--:--<?php else:  echo $this->_tpl_vars['returnpickup'];  endif;  endif; ?>
<?php if ($this->_tpl_vars['RequestDetail']['0']['triptype'] == 'Five Way'):  if ($this->_tpl_vars['RequestDetail']['0']['five_pickup'] == '00:00:00'): ?>--:--<?php else:  echo $this->_tpl_vars['RequestDetail']['0']['five_pickup'];  endif;  endif; ?></td></tr><?php endif; ?>

<?php if ($this->_tpl_vars['RequestDetail']['0']['triptype'] == 'Five Way'): ?>
<tr><td width="140" class="headus">Fourth Destination:</td><td width="140" colspan="3" class="val"><?php echo $this->_tpl_vars['RequestDetail']['0']['stebldg5']; ?>
 <?php echo $this->_tpl_vars['RequestDetail']['0']['destination_place5']; ?>
 <?php echo $this->_tpl_vars['RequestDetail']['0']['five_address']; ?>
</td><td width="140" class="headus">Pick Time(Last):</td><td width="140" class="val"><?php if ($this->_tpl_vars['RequestDetail']['0']['triptype'] == 'Five Way'):  if ($this->_tpl_vars['returnpickup'] == '00:00'): ?>--:--<?php else:  echo $this->_tpl_vars['returnpickup'];  endif;  endif; ?></td></tr><?php endif; ?>

<?php if ($this->_tpl_vars['RequestDetail']['0']['triptype'] == 'Round Trip' || $this->_tpl_vars['RequestDetail']['0']['triptype'] == 'Three Way' || $this->_tpl_vars['RequestDetail']['0']['triptype'] == 'Four Way' || $this->_tpl_vars['RequestDetail']['0']['triptype'] == 'Five Way'): ?>
<tr><td width="140" class="headus">Back To Location:</td>
<td width="140" class="val"><?php echo $this->_tpl_vars['RequestDetail']['0']['backtolocation']; ?>
</td></tr>
<tr><td width="140" class="headus">Last Destination:</td><td width="140" colspan="3" class="val"><?php echo $this->_tpl_vars['RequestDetail']['0']['backto']; ?>
</td><td width="140"></td><td width="140"></td></tr> <?php endif; ?>

<tr>

<td width="140" class="headus">Bariatric Stretcher:</td><td width="140" class="val"><?php echo $this->_tpl_vars['RequestDetail']['0']['bar_stretcher']; ?>
</td>
<td width="140" class="headus">2 Man Team:</td><td width="140" class="val"><?php echo $this->_tpl_vars['RequestDetail']['0']['dstretcher']; ?>
</td>
</tr>
<tr>
<td width="140" class="headus">Wheel Chair Rental:</td><td width="140" class="val"><?php echo $this->_tpl_vars['RequestDetail']['0']['dwchair']; ?>
</td>
<td width="140" class="headus">0xygen:</td><td width="140" class="val"><?php echo $this->_tpl_vars['RequestDetail']['0']['oxygen']; ?>
</td>
</tr>

  <tr><td width="140"><p class="p"></p></td><td width="140"></td><td width="140"></td><td width="140"></td><td width="140"></td><td width="140"></td></tr>

  <tr><td width="140"><p class="p"></p></td><td width="140"></td><td width="140"></td><td width="140"></td><td width="140"></td><td width="140"></td></tr>

<tr>
<td width="140" class="headus"><?php echo $this->_tpl_vars['RequestDetail']['0']['dci1'];  if ($this->_tpl_vars['RequestDetail']['0']['dci1'] != ''): ?>:<?php endif; ?></td><td width="140" class="val"><?php echo $this->_tpl_vars['RequestDetail']['0']['dcc1']; ?>
</td>
<td width="140" class="headus"><?php echo $this->_tpl_vars['RequestDetail']['0']['dci2'];  if ($this->_tpl_vars['RequestDetail']['0']['dci2'] != ''): ?>:<?php endif; ?></td><td width="140" class="val"><?php echo $this->_tpl_vars['RequestDetail']['0']['dcc2']; ?>
</td>
<td width="140" class="headus"><?php echo $this->_tpl_vars['RequestDetail']['0']['dci3'];  if ($this->_tpl_vars['RequestDetail']['0']['dci3'] != ''): ?>:<?php endif; ?></td><td width="140" class="val"><?php echo $this->_tpl_vars['RequestDetail']['0']['dcc3']; ?>
</td></tr>
<tr>
<td width="140" class="headus"><?php echo $this->_tpl_vars['RequestDetail']['0']['dci4'];  if ($this->_tpl_vars['RequestDetail']['0']['dci4'] != ''): ?>:<?php endif; ?></td><td width="140" class="val"><?php echo $this->_tpl_vars['RequestDetail']['0']['dcc4']; ?>
</td>
<td width="140" class="headus"></td><td width="140" class="val"></td>
<td width="140" class="headus"></td><td width="140" class="val"></td></tr>

<!--<tr>
<td width="140" class="headus">Passengers Info:</td><td colspan="4" width="400" class="val"><?php echo $this->_tpl_vars['RequestDetail']['0']['passenger1']; ?>
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $this->_tpl_vars['RequestDetail']['0']['passenger2']; ?>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $this->_tpl_vars['RequestDetail']['0']['passenger3']; ?>
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $this->_tpl_vars['RequestDetail']['0']['passenger4']; ?>
</td>
</tr>-->


<?php if ($this->_tpl_vars['RequestDetail']['0']['phyaddress'] != ''): ?>
<tr><td width="140" class="headus">Physician Name:</td><td width="140" class="val"><?php echo $this->_tpl_vars['RequestDetail']['0']['fname']; ?>
 <?php echo $this->_tpl_vars['RequestDetail']['0']['lname']; ?>
</td><td width="140" class="headus">Physician Hospital:</td><td width="140" class="val"><?php echo $this->_tpl_vars['RequestDetail']['0']['clinic']; ?>
</td><td width="140" class="headus">Physician Phone/Fax:</td><td width="140" class="val"><?php echo $this->_tpl_vars['RequestDetail']['0']['phyphone']; ?>
 / <?php echo $this->_tpl_vars['RequestDetail']['0']['phyfax']; ?>
</td></tr>
<tr><td width="140" class="headus">Physician Address:</td><td width="140" class="val" colspan="2"><?php echo $this->_tpl_vars['RequestDetail']['0']['phyaddress']; ?>
</td><td width="140" class="headus">Reason for Visit:</td><td width="140" class="val" colspan="2"><?php echo $this->_tpl_vars['RequestDetail']['0']['reason']; ?>
</td></tr>
<?php endif; ?>

  <tr><td width="140" class="headus">Comments:</td><td width="140" class="val" colspan="5"><?php echo $this->_tpl_vars['RequestDetail']['0']['comments']; ?>
</td></tr>
      
      <tr valign="middle" class="pheading" height="35"> </tr>
    </table>

</div>
</div>