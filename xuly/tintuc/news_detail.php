
<?php 
	include("./xuly/config/connect.php");
	$idNews = $_GET["id"];
?>

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