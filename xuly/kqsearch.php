<script> 
function isok() 
 { 
 return confirm('Bạn chắc chắn những bài viết đã chọn là đúng chứ?'); 
 } 
 </script> 

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php 
	//include("../connect.php");
	if(isset($_POST['txtkey']))
	{
	$txtkey=$_POST['txtkey'];
	
	echo "<center><p class='dam_nghieng'>&nbsp;kết quả tìm kiếm với từ khóa : $txtkey !</p></center>";
	$sql = "SELECT * FROM `tbl_news` WHERE `tieude` like '%".$txtkey."%'";
	$rs=mysql_query($sql);
	// Phân trang
?>
<style type="text/css">
<!--

.dam_nghieng{
	color:#F0F;
	font-weight: bold;
	color: #808000;
}
.style1{
	color:#F0F;
	font-weight: bold;
	color: #808000;
}
.style2{ 
	color: #00F;
	color: #00F;
}
#menu-b
{
	margin:0px 0px 5px 60px;
	width:600px;
}
-->
</style>
<title>Untitled Document</title>
</head>
<body>
<div id="menu-b">
<?php
	// shows ra các tin tức liên quan đến từ khóa tìm kiếm
	if(mysql_num_rows($rs)>0)
	while($row=mysql_fetch_array($rs))
	{
	?>
	<div class="dethi1">
	<a href="index.php?page=news&id=<?php echo $row['id'];?>"><?php echo $row['tieude'];?></a>
	</div>
     <div class="clear"></div>
	<?php
	}
}
?>
</div>
</body>
</html>