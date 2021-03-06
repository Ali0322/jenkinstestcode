<?php
//============================================================+
// File name   : example_006.php
// Begin       : 2008-03-04
// Last Update : 2010-11-20
//
// Description : Example 006 for TCPDF class
//               WriteHTML and RTL support
//
// Author: Nicola Asuni
//
// (c) Copyright:
//               Nicola Asuni
//               Tecnick.com s.r.l.
//               Via Della Pace, 11
//               09044 Quartucciu (CA)
//               ITALY
//               www.tecnick.com
//               info@tecnick.com
//============================================================+

/**
 * Creates an example PDF TEST document using TCPDF
 * @package com.tecnick.tcpdf
 * @abstract TCPDF - Example: WriteHTML and RTL support
 * @author Nicola Asuni
 * @since 2008-03-04
 */

require_once('../config/lang/eng.php');
require_once('../tcpdf.php');

// create new PDF document
$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

// set document information
$pdf->SetCreator(PDF_CREATOR);
$pdf->SetAuthor('Nicola Asuni');
$pdf->SetTitle('TCPDF Example 006');
$pdf->SetSubject('TCPDF Tutorial');
$pdf->SetKeywords('TCPDF, PDF, example, test, guide');

// set default header data
//$pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, PDF_HEADER_TITLE.' 006', PDF_HEADER_STRING);

// set header and footer fonts
$pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
$pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));

// set default monospaced font
$pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

//set margins
$pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
$pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
$pdf->SetFooterMargin(PDF_MARGIN_FOOTER);

//set auto page breaks
$pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

//set image scale factor
$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

//set some language-dependent strings
$pdf->setLanguageArray($l);

// ---------------------------------------------------------

// set font
$pdf->SetFont('dejavusans', '', 10);

// add a page
$pdf->AddPage();

// writeHTML($html, $ln=true, $fill=false, $reseth=false, $cell=false, $align='')
// writeHTMLCell($w, $h, $x, $y, $html='', $border=0, $ln=0, $fill=0, $reseth=true, $align='', $autopadding=true)

// create some HTML content
$html = '<h1>HTML Example</h1>
Some special characters: &lt; ??? &euro; &#8364; &amp; ?? &egrave; &copy; &gt; \\slash \\\\double-slash \\\\\\triple-slash
<h2>List</h2>
List example:
<ol>
	<li><img src="../images/logo_example.png" alt="test alt attribute" width="30" height="30" border="0" /> test image</li>
	<li><b>bold text</b></li>
	<li><i>italic text</i></li>
	<li><u>underlined text</u></li>
	<li><b>b<i>bi<u>biu</u>bi</i>b</b></li>
	<li><a href="http://www.tecnick.com" dir="ltr">link to http://www.tecnick.com</a></li>
	<li>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.<br />Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</li>
	<li>SUBLIST
		<ol>
			<li>row one
				<ul>
					<li>sublist</li>
				</ul>
			</li>
			<li>row two</li>
		</ol>
	</li>
	<li><b>T</b>E<i>S</i><u>T</u> <del>line through</del></li>
	<li><font size="+3">font + 3</font></li>
	<li><small>small text</small> normal <small>small text</small> normal <sub>subscript</sub> normal <sup>superscript</sup> normal</li>
</ol>
<dl>
	<dt>Coffee</dt>
	<dd>Black hot drink</dd>
	<dt>Milk</dt>
	<dd>White cold drink</dd>
</dl>
<div style="text-align:center">IMAGES<br />
<img src="../images/logo_example.png" alt="test alt attribute" width="100" height="100" border="0" /><img src="../images/tiger.ai" alt="test alt attribute" width="100" height="100" border="0" /><img src="../images/logo_example.jpg" alt="test alt attribute" width="100" height="100" border="0" />
</div>';

// output the HTML content
$pdf->writeHTML($html, true, false, true, false, '');


// output some RTL HTML content
$html = '<div style="text-align:center">The words &#8220;<span dir="rtl">&#1502;&#1494;&#1500; [mazel] &#1496;&#1493;&#1489; [tov]</span>&#8221; mean &#8220;Congratulations!&#8221;</div>';
$pdf->writeHTML($html, true, false, true, false, '');

// test some inline CSS
$html = '<p>This is just an example of html code to demonstrate some supported CSS inline styles.
<span style="font-weight: bold;">bold text</span>
<span style="text-decoration: line-through;">line-trough</span>
<span style="text-decoration: underline line-through;">underline and line-trough</span>
<span style="color: rgb(0, 128, 64);">color</span>
<span style="background-color: rgb(255, 0, 0); color: rgb(255, 255, 255);">background color</span>
<span style="font-weight: bold;">bold</span>
<span style="font-size: xx-small;">xx-small</span>
<span style="font-size: x-small;">x-small</span>
<span style="font-size: small;">small</span>
<span style="font-size: medium;">medium</span>
<span style="font-size: large;">large</span>
<span style="font-size: x-large;">x-large</span>
<span style="font-size: xx-large;">xx-large</span>
</p>';

$pdf->writeHTML($html, true, false, true, false, '');

// reset pointer to the last page
$pdf->lastPage();

// - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
// Print a table

// add a page
$pdf->AddPage();

// create some HTML content
$subtable = '<table border="1" cellspacing="6" cellpadding="4"><tr><td>a</td><td>b</td></tr><tr><td>c</td><td>d</td></tr></table>';

$html = '<h2>HTML TABLE:</h2>
<table border="1" cellspacing="3" cellpadding="4">
	<tr>
		<th>#</th>
		<th align="right">RIGHT align</th>
		<th align="left">LEFT align</th>
		<th>4A</th>
	</tr>
	<tr>
		<td>1</td>
		<td bgcolor="#cccccc" align="center" colspan="2">A1 ex<i>amp</i>le <a href="http://www.tcpdf.org">link</a> column span. One two tree four five six seven eight nine ten.<br />line after br<br /><small>small text</small> normal <sub>subscript</sub> normal <sup>superscript</sup> normal  bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla<ol><li>first<ol><li>sublist</li><li>sublist</li></ol></li><li>second</li></ol><small color="#FF0000" bgcolor="#FFFF00">small small small small small small small small small small small small small small small small small small small small</small></td>
		<td>4B</td>
	</tr>
	<tr>
		<td>'.$subtable.'</td>
		<td bgcolor="#0000FF" color="yellow" align="center">A2 ??? &euro; &#8364; &amp; ?? &egrave;<br/>A2 ??? &euro; &#8364; &amp; ?? &egrave;</td>
		<td bgcolor="#FFFF00" align="left"><font color="#FF0000">Red</font> Yellow BG</td>
		<td>4C</td>
	</tr>
	<tr>
		<td>1A</td>
		<td rowspan="2" colspan="2" bgcolor="#FFFFCC">2AA<br />2AB<br />2AC</td>
		<td bgcolor="#FF0000">4D</td>
	</tr>
	<tr>
		<td>1B</td>
		<td>4E</td>
	</tr>
	<tr>
		<td>1C</td>
		<td>2C</td>
		<td>3C</td>
		<td>4F</td>
	</tr>
</table>';

// output the HTML content
$pdf->writeHTML($html, true, false, true, false, '');

// Print some HTML Cells

$html = '<span color="red">red</span> <span color="green">green</span> <span color="blue">blue</span><br /><span color="red">red</span> <span color="green">green</span> <span color="blue">blue</span>';

$pdf->SetFillColor(255,255,0);

$pdf->writeHTMLCell(0, 0, '', '', $html, 'LRTB', 1, 0, true, 'L', true);
$pdf->writeHTMLCell(0, 0, '', '', $html, 'LRTB', 1, 1, true, 'C', true);
$pdf->writeHTMLCell(0, 0, '', '', $html, 'LRTB', 1, 0, true, 'R', true);

// reset pointer to the last page
$pdf->lastPage();

// - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
// Print a table

// add a page
$pdf->AddPage();

// create some HTML content
$html = '<p><img alt="" src="http://www.hybriditservices.com/images/special.png" style="width: 850px; height: 154px" /></p>
<h1 style="text-align: center">
	<span style="color: rgb(255,255,0)"><em><strong><span style="font-family: arial, helvetica, sans-serif">Package: HITS-STATIC-A</span></strong></em></span></h1>
<h3>
	Now you can own the power of dynamic websites with elegant and professional designs aiming to maximise your exposure in the world of internet just @$399. Through attractive designs you can not only virtually create image of your business online but also advertise your services all over internet. You can also use its powerful features to help facilitate your business needs with help of forms and databases. Below are the features included with this package.</h3>
<p>&nbsp;</p>
<table align="center" border="1" cellpadding="1" cellspacing="1" style="width: 201px; height: 284px">
	<tbody>
		<tr>
			<td style="text-align: center">
				<span style="color: rgb(255,255,0)">No.</span></td>
			<td style="text-align: center">
				<span style="color: rgb(255,255,0)">Features</span></td>
		</tr>
		<tr>
			<td style="text-align: center">
				1</td>
			<td style="text-align: center">
				5 page static website.<br />
				&nbsp;</td>
		</tr>
		<tr>
			<td style="text-align: center">
				2</td>
			<td style="text-align: center">
				Graphics use as provided by client if any OR Graphic designing<br />
				&nbsp;</td>
		</tr>
		<tr>
			<td style="text-align: center">
				3</td>
			<td style="text-align: center">
				Flash components for menu<br />
				&nbsp;</td>
		</tr>
		<tr>
			<td style="text-align: center">
				4</td>
			<td style="text-align: center">
				Logo provided by Client.<br />
				&nbsp;</td>
		</tr>
		<tr>
			<td style="text-align: center">
				5</td>
			<td style="text-align: center">
				Logo designing cost: $25<br />
				&nbsp;</td>
		</tr>
		<tr>
			<td style="text-align: center">
				6</td>
			<td style="text-align: center">
				Technology Platform: HTML, DHTML, XML, php<br />
				&nbsp;</td>
		</tr>
	</tbody>
</table>
<h3>
	Here are few of our premium clients who are enjoying our services to its best.<br />
	&nbsp;</h3>
<table align="center" border="0" cellpadding="1" cellspacing="1" style="width: 900px; height: 300px">
	<tbody>
		<tr>
			<td>
				<span style="color: rgb(255,0,0)"><span style="font-size: 16px"><strong>Valley Medical Transport:</strong></span></span><br />
				<span style="color: rgb(230,230,250)">Medical transport service provider in Arizona, a well recognized and up to mark service provider for mankind</span><a href="http://www.valleymedtrans.com"><br />
				<span style="color: rgb(169,169,169)">http://www.valleymedtrans.com</span></a></td>
			<td>
				<img alt="" src="http://www.hybriditservices.com/images/18.jpg" style="width: 223px; height: 100px" /></td>
		</tr>
		<tr>
			<td>
				<span style="color: rgb(255,0,0)"><span style="font-size: 16px"><strong>Chandler Cardiology Associates:</strong></span></span><br />
				<span style="color: rgb(230,230,250)">One of the largest setup for cardiology, association of competent, kind and well versed doctors in USA.</span><a href="http://www.hybriditservices.com/demos/sahi"><br />
				<span style="color: rgb(169,169,169)">http://www.hybriditservices.com/demos/cca </span></a></td>
			<td style="text-align: right">
				<img alt="" src="http://www.hybriditservices.com/images/4.jpg" style="width: 224px; height: 100px" /></td>
		</tr>
		<tr>
			<td>
				<span style="color: rgb(255,0,0)"><span style="font-size: 16px"><strong>South Asia Heart Institute:</strong></span></span><br />
				<span style="color: rgb(230,230,250)">South Asian institute for heart diseases in Arizona</span><a href="http://www.hybriditservices.com/demos/sahi"><br />
				<span style="color: rgb(169,169,169)">http://www.hybriditservices.com/demos/sahi</span></a></td>
			<td style="text-align: right">
				<a href="http://www.hybriditservices.com/demos/sahi"><img alt="" src="http://www.hybriditservices.com/images/12.jpg" style="width: 220px; height: 100px" /></a></td>
		</tr>
		<tr>
			<td>
				<span style="color: rgb(255,0,0)"><span style="font-size: 16px"><strong>Alumni Association of Pakistan:</strong></span></span><br />
				<span style="color: rgb(230,230,250)">Association of Pakistani scholars and people living in USA</span><a href="http://www.hybriditservices.com/demos/alumni/"><br />
				<span style="color: rgb(169,169,169)">http://www.hybriditservices.com/demos/alumni/</span></a></td>
			<td style="text-align: right">
				<a href="http://www.hybriditservices.com/demos/alumni/"><img alt="" src="http://www.hybriditservices.com/images/2.jpg" style="width: 220px; height: 100px" /></a></td>
		</tr>
		<tr>
			<td>
				<span style="color: rgb(255,0,0)"><strong><span style="font-size: 16px">India Shaan:</span></strong></span><br />
				<span style="color: rgb(230,230,250)">Business portal in AZ, having large number of businesses at its floor, aim is to assist business and social community in AZ.</span><a href="http://www.indiashaan.com"><br />
				<span style="color: rgb(169,169,169)">http://www.indiashaan.com</span></a></td>
			<td style="text-align: right">
				<a href="http://www.indiashaan.com"><img alt="" src="http://www.hybriditservices.com/images/5.jpg" style="width: 220px; height: 100px" /></a></td>
		</tr>
		<tr>
			<td>
				<span style="color: rgb(255,0,0)"><span style="font-size: 16px"><strong>Pakistan Cardiologist of North America:</strong></span></span><br />
				<span style="color: rgb(230,230,250)">A society of Pakistani cardiologist working in USA</span><a href="http://www.hybriditservices.com/demos/spcna/"><br />
				<span style="color: rgb(169,169,169)">http://www.hybriditservices.com/demos/spcna/</span></a></td>
			<td>
				<a href="http://www.hybriditservices.com/demos/spcna/"><img alt="" src="http://www.hybriditservices.com/images/15(1).jpg" style="width: 220px; height: 100px" /></a></td>
		</tr>
		<tr>
			<td>
				<span style="color: rgb(255,0,0)"><strong><span style="font-size: 16px">Sudanese Club:</span></strong></span><br />
				<span style="color: rgb(230,230,250)">Sudanese club a social community for Sudanese in US.</span><a href="http://www.sudaneseclub.com"><br />
				<span style="color: rgb(169,169,169)">http://www.sudaneseclub.com</span></a></td>
			<td style="text-align: right">
				<a href="http://www.sudaneseclub.com"><img alt="" src="http://www.hybriditservices.com/images/16.jpg" style="width: 220px; height: 100px" /></a></td>
		</tr>
		<tr>
			<td>
				<span style="color: rgb(255,0,0)"><strong><span style="font-size: 16px">Signature Autos:</span></strong></span><br />
				<span style="color: rgb(230,230,250)">A leading Automobile vendor in Arizona</span><a href="http://www.signatureas.com"><br />
				<span style="color: rgb(169,169,169)">http://www.signatureas.com</span></a></td>
			<td style="text-align: right">
				<a href="http://www.signatureas.com"><img alt="" src="http://www.hybriditservices.com/images/13(1).jpg" style="width: 220px; height: 100px" /></a></td>
		</tr>
		<tr>
			<td>
				<span style="color: rgb(255,0,0)"><span style="font-size: 16px"><strong>Indus Village:</strong></span></span><br />
				<span style="color: rgb(230,230,250)">INDUS VILLAGE a south Asian cuisine restaurant based in Arizona.</span><a href="http://www.indusvillage.net"><br />
				<span style="color: rgb(169,169,169)">http://www.indusvillage.net</span></a><br />
				&nbsp;</td>
			<td style="text-align: right">
				<a href="http://www.indusvillage.net"><img alt="" src="http://www.hybriditservices.com/images/6.jpg" style="width: 220px; height: 100px" /></a></td>
		</tr>
		<tr>
			<td>
				<span style="color: rgb(169,169,169)"><span style="color: rgb(255,0,0)"><strong><span style="font-size: 16px">Al Faruk Book Store:</span></strong></span><br />
				<span style="color: rgb(230,230,250)">A large scale book store, one of the old members in selling books</span></span><a href="http://www.alfaruk.com"><br />
				<span style="color: rgb(169,169,169)">http://www.alfaruk.com</span></a></td>
			<td style="text-align: right">
				<a href="http://www.alfaruk.com"><img alt="" src="http://www.hybriditservices.com/images/1.jpg" style="width: 220px; height: 100px" /></a></td>
		</tr>		
	</tbody>
</table>
';

// output the HTML content
$pdf->writeHTML($html, true, false, true, false, '');

// reset pointer to the last page
$pdf->lastPage();

// - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
// Print all HTML colors

// add a page
/*$pdf->AddPage();

require('../htmlcolors.php');

$textcolors = '<h1>HTML Text Colors</h1>';
$bgcolors = '<hr /><h1>HTML Background Colors</h1>';

foreach($webcolor as $k => $v) {
	$textcolors .= '<span color="#'.$v.'">'.$v.'</span> ';
	$bgcolors .= '<span bgcolor="#'.$v.'" color="#333333">'.$v.'</span> ';
}

// output the HTML content
$pdf->writeHTML($textcolors, true, false, true, false, '');
$pdf->writeHTML($bgcolors, true, false, true, false, '');*/

// - - - - - - - - - - - - - - - - - - - - - - - - - - - - -

// Test word-wrap

// create some HTML content
/*$html = '<hr />
<h1>Various tests</h1>
<a href="#2">link to page 2</a><br />
<font face="courier"><b>thisisaverylongword</b></font> <font face="helvetica"><i>thisisanotherverylongword</i></font> <font face="times"><b>thisisaverylongword</b></font> thisisanotherverylongword <font face="times">thisisaverylongword</font> <font face="courier"><b>thisisaverylongword</b></font> <font face="helvetica"><i>thisisanotherverylongword</i></font> <font face="times"><b>thisisaverylongword</b></font> thisisanotherverylongword <font face="times">thisisaverylongword</font> <font face="courier"><b>thisisaverylongword</b></font> <font face="helvetica"><i>thisisanotherverylongword</i></font> <font face="times"><b>thisisaverylongword</b></font> thisisanotherverylongword <font face="times">thisisaverylongword</font> <font face="courier"><b>thisisaverylongword</b></font> <font face="helvetica"><i>thisisanotherverylongword</i></font> <font face="times"><b>thisisaverylongword</b></font> thisisanotherverylongword <font face="times">thisisaverylongword</font> <font face="courier"><b>thisisaverylongword</b></font> <font face="helvetica"><i>thisisanotherverylongword</i></font> <font face="times"><b>thisisaverylongword</b></font> thisisanotherverylongword <font face="times">thisisaverylongword</font>';

// output the HTML content
$pdf->writeHTML($html, true, false, true, false, '');

// Test fonts nesting
$html1 = 'Default <font face="courier">Courier <font face="helvetica">Helvetica <font face="times">Times <font face="dejavusans">dejavusans </font>Times </font>Helvetica </font>Courier </font>Default';
$html2 = '<small>small text</small> normal <small>small text</small> normal <sub>subscript</sub> normal <sup>superscript</sup> normal';
$html3 = '<font size="10" color="#ff7f50">The</font> <font size="10" color="#6495ed">quick</font> <font size="14" color="#dc143c">brown</font> <font size="18" color="#008000">fox</font> <font size="22"><a href="http://www.tcpdf.org">jumps</a></font> <font size="22" color="#a0522d">over</font> <font size="18" color="#da70d6">the</font> <font size="14" color="#9400d3">lazy</font> <font size="10" color="#4169el">dog</font>.';

$html = $html1.'<br />'.$html2.'<br />'.$html3.'<br />'.$html3.'<br />'.$html2;

// output the HTML content
$pdf->writeHTML($html, true, false, true, false, '');

// - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
// test pre tag

// add a page
$pdf->AddPage();

$html = <<<EOF
<div style="background-color:#880000;color:white;">
Hello World!<br />
Hello
</div>
<pre style="background-color:#336699;color:white;">
int main() {
    printf("HelloWorld");
    return 0;
}
</pre>
<tt>Monospace font</tt>, normal font, <tt>monospace font</tt>, normal font.
<br />
<div style="background-color:#880000;color:white;">DIV LEVEL 1<div style="background-color:#008800;color:white;">DIV LEVEL 2</div>DIV LEVEL 1</div>
<br />
<span style="background-color:#880000;color:white;">SPAN LEVEL 1 <span style="background-color:#008800;color:white;">SPAN LEVEL 2</span> SPAN LEVEL 1</span>
EOF;

// output the HTML content
$pdf->writeHTML($html, true, false, true, false, '');

// - - - - - - - - - - - - - - - - - - - - - - - - - - - - -

// test custom bullet points for list

// add a page
$pdf->AddPage();

$html = <<<EOF
<h1>Test custom bullet image for list items</h1>
<ul style="font-size:14pt;list-style-type:img|png|4|4|../images/logo_example.png">
	<li>test custom bullet image</li>
	<li>test custom bullet image</li>
	<li>test custom bullet image</li>
	<li>test custom bullet image</li>
<ul>
EOF;

// output the HTML content
$pdf->writeHTML($html, true, false, true, false, '');

// - - - - - - - - - - - - - - - - - - - - - - - - - - - - -

// reset pointer to the last page
$pdf->lastPage();*/

// ---------------------------------------------------------

//Close and output PDF document
$pdf->Output('testing.pdf', 'I');

//============================================================+
// END OF FILE                                                
//============================================================+
