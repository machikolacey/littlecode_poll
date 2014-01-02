<?php

$link = mysql_connect('localhost', 'root', 'majesty'); //Password was removed for security reason. Machiko
if (!$link) {
    die('Could not connect: ' . mysql_error());
}else{
//echo 'Connected successfully';
}
	  
	  
//mysql_close($link);
?>