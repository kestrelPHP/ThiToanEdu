<?php 
	include("config/connect.php");
	//$idNews = $_GET["id"];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="style.css" type="text/css" media="screen" />
<title>Untitled Document</title>
</head>
<body>
<table border="0">
 <?php 
//insert database
$sql="select * from xh_tintuc where linhvuc=1 and trangthai=1 ";
	$query=mysql_query($sql);
	while($row=mysql_fetch_array($query))
	{
	?>
	<div class="dethi">
	<font size="" color="#3300ff"><b><?php echo $row['tieude'];?></b></font>   <img  height=11px width=22px src="images/new.gif" /></h3>
	<p class="dethi1"><?php echo $row['tomtat'];?></p>
    <div class="dethi"><?php echo $row['chitiet'] ;?></div>
	</div>
	<div class="hinhanh"><img  height=120px width=150px src="./upload/images/news/<?php echo $row['hinhanh']; ?>">
    
    </div>
     <div class="clear"></div>
	<?php
	}?>
</table>
</body>
</html>