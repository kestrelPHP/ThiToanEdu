<?php
	$sql_sever = "localhost";
	$sql_user = "root";
	$sql_pass = "";
	$sql_database = "1thitoan";
	$con = mysql_connect($sql_sever,$sql_user,$sql_pass);
	if(!$con)
	{
		echo "Không thể kết nối với MySQL ".mysql_error();
		exit();
	}
	mysql_select_db($sql_database);
//Hiển thị tiếng Việt kể cả trong tìm kiếm
mysql_query("set names 'utf8'");
mysql_query("SET character_set_results=utf8");  
mb_internal_encoding('UTF-8'); //cái này chưa rõ
?>
