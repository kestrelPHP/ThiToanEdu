<link rel="stylesheet" href="febe/style.css" type="text/css" media="screen" charset="utf-8">
<style type="text/css">
<!--
.style1 {
	font-size: 18px;
	font-weight: bold;
	color: #000;
}
.dethi_edit {
	margin:20px 200px  auto;
}
-->
</style>
<?php
	include('config.php');
	$made=$_GET['made'];

	$results = mysql_query("SELECT * FROM xh_dethi WHERE made='$made'");
	$rows = mysql_fetch_array($results);
	  $tende=$rows['tende'];
	  $loaide=$rows['loaide'];
	  $capthi=$rows['capthi'];
	  $noidung=$rows['noidung'];
	  $socau=$rows['socau'];
	  $thoigian=$rows['thoigian'];
	  $tacgia=$rows['tacgia'];
	  $khoi=$rows['khoi'];
	  $mon=$rows['mon'];
	  $hinhthuc=$rows['hinhthuc'];
	  $hinhanh=$rows['hinhanh'];
//Lấy thông tin loại đề
	$results1 = mysql_query("SELECT * FROM xh_loaide WHERE maloai='$loaide'");
	$rows1 = mysql_fetch_array($results1);
			$tenloaide=$rows1['loaide'];
//Lấy thông tin cấp thi
	$results2 = mysql_query("SELECT * FROM xh_capthi WHERE macap='$capthi'");
	$rows2 = mysql_fetch_array($results2);
			$tencapthi=$rows2['capthi'];
//Lấy thông tin khối thi
	$results3 = mysql_query("SELECT * FROM xh_khoihoc WHERE makhoi='$khoi'");
	$rows3 = mysql_fetch_array($results3);
			$tenkhoithi=$rows3['tenkhoi'];
//Lấy thông tin môn thi
	$results4 = mysql_query("SELECT * FROM xh_monthi WHERE mamon='$mon'");
	$rows4 = mysql_fetch_array($results4);
			$tenmonthi=$rows4['monthi'];
//Lấy thông tin hình thức đề thi
	$results5 = mysql_query("SELECT * FROM xh_hinhthucdethi WHERE hinhthuc='$hinhthuc'");
	$rows5 = mysql_fetch_array($results5);
			$tenhinhthuc=$rows5['hinhthuc'];

?>
<div style="margin:20px 70px 10px; font-size:14px;">
<font size="2" face="Tahoma"><b><a href="?menu=dethi_list_them_cauhoi">Đề thi</a><img src="images/bl3.gif" border="0" /> Sửa thông tin đề thi</b></font></div>
<hr size="1" color="#cadadd" style="margin:15px auto;" />
<form action="?menu=dethi_saveedit" method="post" class="dethi_edit" enctype="multipart/form-data">


<table width="100%" border="0"  cellpadding="0" cellspacing="0" background="images/body.png" id="dethi_news">
    <tr>
      <td bgcolor="#CCCCCC"  height="38px"colspan="2" align="center" class="style1">SỬA ĐỀ THI</td>
    </tr>

   <tr>
	<td width="20%"  align="right">Mã đề</td>
    <td width="80%"> <input size=30 type="hide" name="idmade" readonly="readonly" style="background-color:#CCC" value="<?php echo $made?>"/></td>
	</tr>
 
    <tr>
		<td align="center" class="tbltitle">Tên đề:</td>
	    <td width="85%"> <input class="tendethi" type="text" name="tende" value="<?php echo $tende ;?>" ></td>
    </tr>

    <td height="27" align="center" class="tbltitle2">Loại đề</td>
		<td>
          <select name="loaide" id="loaide">
				<option value = '<?php echo $loaide ;?>'> <?php echo $tenloaide ;?> </option>
				<?php
				include("config.php");
				$sql = 'select * from xh_loaide';
							$result = mysql_query($sql);
							while($rows = mysql_fetch_assoc($result))
							echo "<option value = '$rows[maloai]'> $rows[loaide] </option>";
				?>
		</select>
		</td>
    </tr>

    <td height="27" align="center" class="tbltitle2">Cấp thi</td>
		<td>
          <select name="capthi" id="tenmon">
				<option value = '<?php echo $capthi ;?>'> <?php echo $tencapthi ;?> </option>
				<?php
				include("config.php");
				$sql = 'select * from xh_capthi';
							$result = mysql_query($sql);
							while($rows = mysql_fetch_assoc($result))
							echo "<option value = '$rows[macap]'> $rows[capthi] </option>";
				?>
		</select>
		</td>
    </tr>

    <tr>
      <td width="96" align="center" class="tbltitle">Nội dung: </td>
        <td><textarea name="noidung" class="tendethi" rows="4" value=""><?php echo $noidung ;?></textarea></td>	
    </tr>

   <tr>
			<td align="center" class="tbltitle">Số câu hỏi:</td>
		<td><input class="ttkhac" type="text" name="socau" value="<?php echo $socau ;?>" /></td>
  </tr>

    <tr>
      <td align="center" class="tbltitle">Thời gian:</td>
	    <td width="85%"> <input class="ttkhac" type="text" name="thoigian" value="<?php echo $thoigian ;?>" ></td>
    </tr>

    <tr>
			<td align="center" class="tbltitle">Tác giả: </td>
		<td><input class="ttkhac" type="text" name="tacgia" value="<?php echo $tacgia ;?>" /></td>
	</tr>

    <tr>
    <td height="27" align="center" class="tbltitle2">Khối thi</td>
		<td>
          <select name="khoi" id="tenmon">
				<option value = '<?php echo $khoi ;?>'> <?php echo $tenkhoithi ;?> </option>
				<?php
				include("config.php");
				$sql = 'select * from xh_khoihoc';
							$result = mysql_query($sql);
							while($rows = mysql_fetch_assoc($result))
							echo "<option value = '$rows[makhoi]'> $rows[tenkhoi] </option>";
				?>
		</select>
		</td>
    </tr>
	<tr>
	<td height="27" align="center" class="tbltitle2">Môn thi</td>
		<td>
		  <select name="mon" id="tenmon">
				<option value = '<?php echo $mon ;?>'> <?php echo $tenmonthi ;?> </option>
				<?php
				include("config.php");
				$sql = 'select * from xh_monthi';
							$result = mysql_query($sql);
							while($rows = mysql_fetch_assoc($result))
							echo "<option value = '$rows[mamon]'> $rows[monthi] </option>";
				?>
		</select>
		</td>
	</tr>


	<tr>
		<td height="27" align="center" class="tbltitle2">Chọn hình thức đề thi</td>
		<td>
			<select name="hinhthuc" id="">
				<option value = '<?php echo $hinhthuc ;?>'>Chọn lại hình thức không?</option>
				<?php
				include("config.php");
				$sql = 'select * from xh_hinhthucdethi';
							$result = mysql_query($sql);
							while($rows = mysql_fetch_assoc($result))
							echo "<option value = '$rows[id]'> $rows[hinhthuc] </option>";
				?>
			</select>
		</td>
    </tr>



	<tr>
		<td align="right">Hình ảnh</td>
		<td>
			<input name="fileanh" type="file" />
			<input type="hidden" name="imgfile" value="<?php echo $hinhanh ; ?>" /><img src="../upload/images/dethi/<?php echo $hinhanh ; ?>" height="80px" width="90px" alt="Hình ảnh"/>
		</td>
	</tr>

    <tr>
      <td colspan="2" style="padding: 10px 0px 10px 0px" align="center"><label>
        <input type="submit" name="edit" id="edit" value="Cập nhật" />
      </label></td>
    </tr>
  </table>
</form>
