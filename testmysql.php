<?php 
$link = mysql_connect('hostname','dbuser','dbpassword'); 
if (!$link) { 
	die('Could not connect to ha: ' . mysql_error()); 
} 
echo 'Connection OK'; mysql_close($link); 
?> 
