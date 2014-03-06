<?php
$hostname_con = "72.3.165.39"; // "72.3.165.39"; //"mysql50-06.wc1.dfw1.stabletransit.com";
$database_con = "380317_espnstar";  
$username_con = "380317_espnstar";	   
$password_con = "3spnstar";			
$con = mysql_connect($hostname_con, $username_con, $password_con) or trigger_error(mysql_error(),E_USER_ERROR); 
?>
