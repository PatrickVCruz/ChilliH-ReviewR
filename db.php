<?php
$hostname="localhost";
$username="group15"; 
$password="powerade"; 
$database="group15";
$con=mysql_connect($hostname,$username,$password);
if(! $con)
{
die('Connection Failed'.mysql_error());
}

mysql_select_db($database,$con);
?>