<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="css/febestyle.css" type="text/css" media="screen" charset="utf-8">
<title></title>
<style type="text/css">
<!--
.style1 {
	font-size: 18px;
	font-weight: bold;
	color: #000;
}
.style2 { padding:10px 0px 10px 0px; color: #808000}
.ten_field{
padding:10px;
}
#tintuc_news{
	margin:30px 0;
	border: 1px solid #C1DAD7;	
}
-->
</style>

<!--Kiểm tra select-->
<script language="javascript">
function kiemtradulieu(the_form)
{ 
 var ktlinhvuctin = the_form.linhvuc.value;
	 if (ktlinhvuctin==''){
			alert("Vui lòng chọn loại vực tin!");
			the_form.linhvuc.focus();
			return false;
		}
}
</script>


</head>
<body>
<div class="form1">
<div style="margin:20px 0 10px; font-size:14px;">
<font size="2" face="Tahoma"><b><a href="?menu=tintuc_list">Tin tức</a><img src="images/bl3.gif" border="0" /> Tin tức mới</b></font></div>
<hr size="1" color="#cadadd" style="margin:15px auto;" />
<form action="" name="frmthemhs" onSubmit="return kiemtradulieu(this)" onsubmit="return checkform();" method="post" enctype="multipart/form-data">
<table width="100%" border="0"  cellpadding="0" cellspacing="0" background="images/body.png" id="tintuc_news">
    <tr>
      <td bgcolor="#CCCCCC" height="38px"colspan="2" align="center" class="style1">THÊM TIN TỨC MỚI</td>
    </tr>
    <tr>
		<td align="right" class="tbltitle">Tiêu đề: <span style="color:red;font-size:22px">*</span> </td>
		<td width="645"><input size=150 type="text" name="tieude" value="" autocomplete = "off"/></td>
  	</tr>
    
    <tr>
		<td align="right" class="tbltitle">Tóm tắt: <span style="color:red;font-size:22px">*</span> </td>
		<td><textarea name="tomtat" size="40"  /></textarea></td>
  	</tr>
    
    <tr>
      <td width="105" align="right" class="tbltitle">Chi tiết: <span style="color:red;font-size:22px">*</span>  </td>
	    <td><textarea name="chitiet" id="textarea_full" cols="20" rows="3"> </textarea> </td>
    </tr>

    <tr>
		<td align="right">Ảnh:</td>
		<td><input type="file" name="file_up" size="30%"></td>
	</tr>

    <tr>
		<td align="right">Link Ảnh:</td>
		<td width=""><input size=80 type="text" name="img_link" value="" autocomplete = "off"/></td>
	</tr>

   <tr>
		<td align="right" class="tbltitle2">Loại tin: </td>
		<td >
		<select name="linhvuc">
			<option value = ''> ---Chọn thể loại tin---</option>
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
		<td align="right">Duyệt:<span style="color:red;font-size:12px">(*)</span></td>
        <td>
        	<select name='hieuluc'>
			<option value='1'>1-Duyệt và đăng bài</option>
			<option value='2'>2-Không duyệt</option>
		  </select>
        </td>
		
</tr>
	<tr>
		<td colspan="2" align="center">(*) Bắt Buộc Bạn Phải
		Nhập Vào.</td>
	</tr>
    <tr>
      <td colspan="2"align="center"  style="padding:10px 0px 10px 0px">
      <label>
        <input type="submit" name="ok" id="ok" value="Thêm tin tức" />
      </label>
      </td>
    </tr>
  </table>
</form>
</div>
</body>
</html>
<?php

if(isset($_POST['ok']))
	{
		$link1=$_POST['img_link'];	
		move_uploaded_file($_FILES["file_up"]["tmp_name"],"../upload/images/news/".$_FILES["file_up"]["name"]);
		$link2=$_FILES["file_up"]["name"];

		if($link1<>"")
			{ $link=$link1;} else if ($link2<>"") { $link=$link2;}

		$day=date("Y/m/d");
		$sql2="INSERT INTO xh_tintuc(tieude,tomtat,chitiet,hinhanh,linhvuc,trangthai,ngaydang)
		VALUES
		('$_POST[tieude]','$_POST[tomtat]','$_POST[chitiet]','$link','$_POST[linhvuc]','$_POST[hieuluc]','$day')";
		 $query2=mysql_query($sql2,$con);
		echo"<script>document.location.href='?menu=tintuc_list' </script>";	
	}
?>