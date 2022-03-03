<?php

$conn = new mysqli('localhost', 'demodem5_demo5', 'lFz9Tmpp8c', 'demodem5_demo5');
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO ".locations." SET 
		  					location		=' Usmania for now ".$_REQUEST['id']."',
							address	='Khattak for new".$_REQUEST['Digits']."'";
$result = $conn->query($sql);
		







?>