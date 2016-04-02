<link rel="stylesheet" href="css/febestyle.css" type="text/css" media="screen" charset="utf-8">
<script type="text/javascript" src="../tiny_mce/tiny_mce.js"></script>
<script type="text/javascript" src="../tiny_mce/int.load.js"></script>
<style type="text/css">
<!--
.style1 {
	font-size: 18px;
	font-weight: bold;
	color: #000;
}
.form1 {
	margin:20px 100px  auto;
}
-->
</style>
<?php
		include("config.php");

	$id=$_GET['id'];
	$results = mysql_query("SELECT * FROM xh_tintuc WHERE id='$id'");
	while($rows = mysql_fetch_array($results))
	{
	  $id=$rows['id'];
	  $tieude=$rows['tieude'];
	  $tomtat=$rows['tomtat'];
	  $chitiet=$rows['chitiet'];
	  $linhvuc=$rows['linhvuc'];

//	  $hinhanh=$rows['hinhanh'];
//Lấy ảnh view trong trang edit:
		$ganhinhanh=$rows['hinhanh'];
		if ( strlen(strstr($ganhinhanh,'://')) > 0 ) {
         $hinhanh=$ganhinhanh;
		} else {$hinhanh='../upload/images/news/'.$ganhinhanh;}

	}


//Lấy thông tin lĩnh vực
	$results1 = mysql_query("SELECT * FROM xh_tintuc_list WHERE id='$linhvuc'");
	$rows1 = mysql_fetch_array($results1);
			$loaitin=$rows1['loaitin'];

?>
<div style="margin:20px 70px 10px; font-size:14px;">
<font size="2" face="Tahoma"><b><a href="?menu=tintuc_list">Tin tức</a><img src="images/bl3.gif" border="0" /> Cập nhật tin tức</b></font></div>
<hr size="1" color="#cadadd" style="margin:15px auto;" />
<form action="?menu=tintuc_saveedit" method="post" class="form1" enctype="multipart/form-data">
  <table width="100%" border="0"  cellpadding="0" cellspacing="0" background="images/body.png">
    <tr>
      <td bgcolor="#CCCCCC"  height="38px"colspan="2" align="center" class="style1">CẬP NHẬT TIN TỨC</td>
    </tr>
   <tr>
	<td width="12%" align="center" class="tbltitle">IDNews</td>
    <td width="88%"> <input size=30 type="text" name="idNews" readonly="readonly" style="background-color:#FFFFCC" value="<?php echo $id ?>"></td>
	</tr>
	<tr>
	<td align="center" class="tbltitle">Tiêu đề</td>
   <td> <input size=35 type="text" name="tieude" value="<?php echo $tieude ?>"></td>
	 
  <tr>
    <td align="center" class="tbltitle">Tóm tắt</td>
    <td><textarea name="tomtat" cols="20" rows="2" value=""><?php echo $tomtat ?></textarea></td>
  </tr>
    <tr>
      <td align="center" class="tbltitle2">Chi tiết</td>
      <td><textarea name="chitiet" id="textarea_full" cols="20" rows="3" value=""><?php echo $chitiet ?></textarea></td>
    </tr>


   <tr>
		<td align="right" class="tbltitle2">Loại tin: </td>
		<td >
		<select name="linhvuc">
				<option value = '<?php echo $linhvuc ;?>'> <?php echo $loaitin ;?> </option>
			<?php
				include("config.php");
				$sql = 'select * from xh_tintuc_list';
				$result = mysql_query($sql);
				while($rows = mysql_fetch_assoc($result))
				echo "<option value = '$rows[id]'> $rows[loaitin] </option>";
			?>
		</select>
		</td>
	<tr/>



    <tr>
		<td align="center">Duyệt:(*)</td>
        <td>
        	<select name='trangthai' id="trangthai">
			<option value='1'>1-Duyet va dang bai</option>
			<option value='2'>2-Khong duyet</option>
		  </select>
        </td>
	<tr>
		<td align="center" class="tbltitle2">Hình ảnh</td>
		<td><input name="fileimg" type="file" />
		<input type="hidden" name="imgfile" value="<?php echo $hinhanh; ?>" /><img src="<?php echo $hinhanh; ?>" height="80px" width="90px" alt="Hình ảnh"/></td>

	</tr>

    <tr>
		<td align="right">Link ảnh:</td>
		<td width=""><input size=80 type="text" name="img_link" value="" autocomplete = "off"/></td>
	</tr>

    <tr>
      <td colspan="2" style="padding: 10px 0px 10px 0px" align="center"><label>
        <input type="submit" name="edit" id="edit" value="Cập nhật" />
      </label></td>
    </tr>
  </table>
</form>