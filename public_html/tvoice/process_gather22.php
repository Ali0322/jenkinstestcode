<?php
$id='sdfj ljsl';

$myfile = fopen("file.txt", "w") or die("Unable to open file!");
$txt = 'Respoce Started .... \n'.$id." trip id is given this one \n\n\n And client responce is given below \n";
fwrite($myfile, $txt);
fwrite($myfile, $_REQUEST['Digits']);
$txt = '\n\n Respoce Ended  \n';
fwrite($myfile, $txt);

fclose($myfile);
?>