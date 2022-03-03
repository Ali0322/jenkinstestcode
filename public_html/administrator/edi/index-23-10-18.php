<?php
header('Content-Type: text/plain');

$client = new SoapClient('http://192.168.10.142/837/service1.svc?wsdl', array('cashe_wsdl'=>0) );
try{
//$obj->test = 'Salam';
//$retval = $client->Test('jghjh');
//print_r( $client->Test(array('test'=>'Usman')));
$result = $client->Write837(array('test'=>'Usman'));
if($result){ $name = mt_rand(4,100000);
	$myfile = fopen($name.".txt", "w");
	fwrite($myfile, $result->Write837Result);
	fclose($myfile);
fopen($name.".txt", "a");
//file_put_contents($name.".txt", $name.".txt");
	}
echo $result->Write837Result;


    header('Content-Type: application/octet-stream');
    header('Content-Disposition: attachment; filename='.basename($name.".txt"));
    header('Expires: 0');
    header('Cache-Control: must-revalidate');
    header('Pragma: public');
    header('Content-Length: ' . filesize($name.".txt"));
    readfile($name.".txt");
    exit;


}
catch(SoapFault $fault)
	{ 

	print_r($fault);
	}
 //$retval;
//echo "2.5 + 3.5 = " . $retval->Test;
?>

<?php
/*$myfile = fopen("newfile.txt", "w");
$txt = "John Doe\n";
fwrite($myfile, $txt);
$txt = "Jane Doe\n";
fwrite($myfile, $txt);
fclose($myfile);*/
///http://192.168.10.142/837/service1.svc
///
?>