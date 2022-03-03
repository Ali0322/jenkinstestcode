<?php



error_reporting(E_ALL & ~E_NOTICE);



// set up DB
$conn = mysql_connect("localhost", "midnimo_qts", "gn5E43w2Rg;?"); mysql_select_db("midnimo_qts");
//$conn = mysql_connect("localhost", "root", ""); mysql_select_db("qst");
$today = $_GET['dt'];
$getuser2 ="SELECT t.trip_code, t.trip_user,ac.account_name as trip_clinic, t.trip_date, t.trip_tel,td.picklocation,td.pck_add,td.droplocation,td.drp_add, td.pck_time, td.drp_time, td.trip_miles, CONCAT(dr.fname,' ',dr.lname,'--',dr.drv_code) AS driver, td.trip_remarks FROM trips as t INNER JOIN trip_details as td ON t.trip_id=td.trip_id LEFT JOIN drivers as dr ON td.drv_id = dr.drv_code LEFT JOIN accounts as ac ON t.account=ac.id WHERE t.trip_date='".$today."'";



$pdfdata = array();

$clinicdata1 = mysql_query($getuser2) or die("Couldn't execute query. ".mysql_error());

while ($row = mysql_fetch_assoc($clinicdata1)) {

	array_push($pdfdata,$row);

}

include('inc/tcpdf/config/lang/eng.php');

include('inc/tcpdf/tcpdf.php');

$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

$pdf->SetCreator(PDF_CREATOR);

$pdf->SetAuthor('Muhammad Rizwan');

$pdf->SetTitle('AZ Secure Trans');

$pdf->SetSubject('AZ Secure Trans PDF Generation');

$pdf->SetKeywords('TCPDF, PDF, example, test, guide');

$pdf->SetPrintHeader(false);

$pdf->SetPrintFooter(false);

$pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

$pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);

$pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

$pdf->setLanguageArray($l);		

$pdf->SetFont('helvetica', '', 9);

$pdf->AddPage();



$html = '<table width="100%" border="1" cellspacing="0" cellpadding="0" align="center">

	  <tr>

		<td class="tableBorder">

		  <table width="100%" border="0" cellspacing="0" cellpadding="0">				  	

			<tr>

			  <td colspan="5" class="tableTitle">

				Scheduled Trips ('.$today.')

			  </td>          			  

			</tr>

		  </table>

		  <div style="display:block">

			  <table width="100%" border="0" cellspacing="1" cellpadding="0">

				<tr class="rowHeaders">

				  <td width="5%" style="text-align:center; background-color:#d5e5f2;">Code</td>	

				  <td width="10%" style="background-color:#d5e5f2; color:#222222; font-size:11px; font-family:Verdana, Geneva, sans-serif;">Client</td>

				  <td width="10%" style="background-color:#d5e5f2;">Account</td>

				  <td width="15%" style="background-color:#d5e5f2;">Driver</td>

				  <td width="18%" style="background-color:#d5e5f2;">Pick Location/Address</td>

				  <td width="18%" style="background-color:#d5e5f2;">Drop Location/Address</td>

				  <td width="8%" style="background-color:#d5e5f2;">Pickup Time</td>

				  <td width="8%" style="background-color:#d5e5f2;">Drop Time</td>

				  <td width="8%"style="background-color:#d5e5f2;">Miles</td>          

				</tr>';

for($i=0; $i<count($pdfdata); $i++){

	$k = $i%2;

	$html .= '<tr class="cellColor'.$k.'" align="center">

				  <td style="text-align:center; background-color:#eaeaea;">'.$pdfdata[$i]['trip_code'].'</td>	

				  <td style="text-align:left; background-color:#eaeaea; ">'.$pdfdata[$i]['trip_user'].'</td>

				  <td style="text-align:left; background-color:#eaeaea;">'.$pdfdata[$i]['trip_clinic'].'</td>

				  <td style="text-align:left; background-color:#eaeaea;">'.$pdfdata[$i]['driver'].'</td> 

				  <td style="text-align:left; background-color:#eaeaea;">';
				  if($pdfdata[$i]['picklocation'] !='') { $html .= $pdfdata[$i]['picklocation'].' / '; } 
				  $html .= $pdfdata[$i]['pck_add'].'</td>

				  <td style="text-align:left; background-color:#eaeaea;">';
				  if($pdfdata[$i]['droplocation'] !='') { $html .= $pdfdata[$i]['droplocation'].' / '; } 
				  $html .= $pdfdata[$i]['drp_add'].'</td>

				  <td style="text-align:left;background-color:#eaeaea;">'.$pdfdata[$i]['pck_time'].'</td>

				  <td style="text-align:left;background-color:#eaeaea;">'.$pdfdata[$i]['drp_time'].'</td>

				  <td style="text-align:left;background-color:#eaeaea;">'.$pdfdata[$i]['trip_miles'].'</td>

			  </tr>';

}

	$html .= '</table>

		  </div>

		</td>

	  </tr>

	</table>';

$pdf->writeHTML($html, true, false, true, false, '');
$pdf->Output('scheduletrips.pdf', 'I');
?>