<?php
$db_host = "localhost";
$db_username = "dreams19_admin"; 
$db_pass = "july17th2010"; 
$db_name = "dreams19_dreamers";
mysql_connect("$db_host","$db_username","$db_pass") or die (mysql_error());
mysql_select_db("$db_name") or die ("no database");
?>