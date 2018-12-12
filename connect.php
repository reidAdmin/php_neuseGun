<?php
$hostname="sql-shark.cybersharks.net"; //local server name default localhost
$username="neuseGunRange";  //mysql username default is root.
$password="shark#2015!";       //blank if no password is set for mysql.
$database="neusegunrangedb";  //database name 
$con=mysql_connect($hostname,$username,$password);
if(! $con)
{
die('Connection Failed'.mysql_error());
}

mysql_select_db($database,$con);
?>