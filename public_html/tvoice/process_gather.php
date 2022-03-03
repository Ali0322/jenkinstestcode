<?php echo "<?xml version=\"1.0\" encoding=\"UTF-8\"?>";

if($_REQUEST['Digits']==1){ echo "<Response>
<Say>You have confirmed your appointment. </Say>	
		<Pause length='1'></Pause>
		<Say> Your trip id is ".$_REQUEST['id']." </Say>	
		<Pause length='1'></Pause>
		<Say> and you entered responce digits ".$_REQUEST['Digits']." </Say>	
		<Pause length='1'></Pause>
		<Say> Good by.</Say>
		</Response>";
	echo file_get_contents("http://demo5.nemtclouddispatch.com/tvoice/gather.php?id=".$_REQUEST['id']."&Digits=".$_REQUEST['Digits']);
/*		<Redirect action='http://demo5.nemtclouddispatch.com/tvoice/gather.php?id=".$_REQUEST['id']."&Digits=".$_REQUEST['Digits']." method='GET'></Redirect>
$myfile = fopen("file.txt", "w") or die("Unable to open file!");	
fwrite($myfile, $_REQUEST['id']);
fwrite($myfile, '< -- >'.$_REQUEST['Digits']);
fclose($myfile);*/
/*
$conn = new mysqli('localhost', 'demodem5_demo5', 'lFz9Tmpp8c', 'demodem5_demo5');
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO ".locations." SET 
		  					location		=' Usmania ".$_REQUEST['id']."',
							address	='Khattak ".$_REQUEST['Digits']."'";
$result = $conn->query($sql);*/



		}elseif($_REQUEST['Digits']==2){	echo "<Response><Say>You have cancelled your appointment. Good by.</Say></Response>"; 
		}elseif($_REQUEST['Digits']==3){	echo "<Response><Say>You have cancelled your appointment. Good by.</Say></Response>"; 
		}else{ 	echo "<Response><Say>You have entered encorrect option. Good by.</Say></Response>";	 }		
		
 //$id=$_REQUEST['id'];





?>