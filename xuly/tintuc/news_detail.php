
<?php 
	include("./xuly/config/connect.php");
	$idNews = $_GET["id"];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="../style.css" type="text/css" media="screen" />
<title>Untitled Document</title>
</head>
<body>
<table width="100%" border="0">
 <?php
	// shows ra các tin tức liên quan đến nhà trường
	$sql="select * from xh_tintuc where id=".$idNews ;
	$result = mysql_query($sql);
	while($row = mysql_fetch_array($result))
	{
	?>
	<div class="tintuc">
    <p class="tieude"><?php echo $row['tieude'];?></p>
	<p class="tintuc"><?php echo $row['tomtat'];?></p>
    <p class="tintuc"><?php echo $row['chitiet'];?></p>
	</div>
     <div class="clear"></div>
	<?php
	}
?>
</table>
<th><a style="font-size: 14px;" align="left">Tin cùng lĩnh vực</a></th>
<table align="center">
	<tr>
    <div class="clear"></div>
    <td>

<?php include("tinlienquan.php"); ?>

<!--
    	 <?php
	$sql="select * from xh_tintuc where trangthai=1";
	$query=mysql_query($sql);
	while($row=mysql_fetch_array($query))
	{
	?>
	<div class="dethi">
	<a href="?page=news&id=<?php echo $row['id'];?>"><?php echo $row['tieude'];?></a>
    </div>
	<?php
	}
	?>
-->
    </td>
    </tr>
</table>
</body>
</html>