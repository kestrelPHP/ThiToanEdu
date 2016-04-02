<?php
	$mysql_hostname = "localhost";
	$mysql_user = "root";
	$mysql_password = "";
	$mysql_database = "1thitoan";
	$con = mysql_connect($mysql_hostname, $mysql_user, $mysql_password) 
		or die("Could not connect database");
	mysql_select_db($mysql_database, $con) 
		or die("Could not select database");
	mysql_query("set names utf8");
?>