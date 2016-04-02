<div class="tgp_box">
	<h1><span>TIN TỨC KHÁC</span></h1>
	<div class="content">
	<div class="clearfix">
<?php
	$sql="select * from xh_tintuc where linhvuc='4' and trangthai='1' ORDER BY id DESC LIMIT 2 ";
	$query=mysql_query($sql);
	while($row=mysql_fetch_array($query))
	{
		$ganhinhanh=$row['hinhanh'];
		if ( strlen(strstr($ganhinhanh,'://')) > 0 ) {
         $hinhanh=$ganhinhanh;
		} else {$hinhanh='./upload/images/news/'.$ganhinhanh;}
	?>
    
	<div class="dethi">
	<a href="?page=news&id=<?php echo $row['id'];?>"><?php echo $row['tieude'];?></a><img  height=11px width=22px src="images/new.gif" /></h3>
	<p class="dethi1"><?php echo $row['tomtat'];?></p>
	</div>
	<div class="images" style="padding: 0px 0 0px 5px;"><a href="?page=news&id=<?php echo $row['id'];?>"><img  height=120px width=150px src="<?php echo $hinhanh; ?>"></a></div>
    <div class="clear"></div>

	<?php
	}
?>
	</div>
	</div>
</div>
