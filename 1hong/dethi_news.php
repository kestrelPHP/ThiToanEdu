<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="css/febestyle.css" type="text/css" media="screen" charset="utf-8">
<title></title>
</style>
<!--Kiểm tra select-->
<script language="javascript">
function kiemtradulieu(the_form)
{ 
 var ktloaide = the_form.loaide.value;
 var ktcapthi = the_form.capthi.value;
 var ktkhoi = the_form.khoi.value;
 var ktmon = the_form.mon.value;
 var kthinhthuc = the_form.hinhthuc.value;

	 if (ktloaide==''){
			alert("Vui lòng chọn loại đề!");
			the_form.loaide.focus();
			return false;
		}

	 if (ktcapthi==''){
			alert("Vui lòng chọn cấp thi!");
			the_form.capthi.focus();
			return false;
		}
	 if (ktkhoi==''){
			alert("Vui lòng chọn khối thi!");
			the_form.khoi.focus();
			return false;
		}
	 if (ktmon==''){
			alert("Vui lòng chọn môn thi!");
			the_form.mon.focus();
			return false;
		}
	 if (kthinhthuc==''){
			alert("Vui lòng chọn hình thức là đề thi hay dạng đề tự luyện!");
			the_form.hinhthuc.focus();
			return false;
		}



}
</script>



</head>

<body>
<div style="margin:20px 70px 10px; font-size:14px;">
<font size="2" face="Tahoma"><b><a href="?menu=dethi_list_them_cauhoi">Đề thi</a><img src="images/bl3.gif" border="0" /> thêm mới đề thi</b></font></div>
<hr size="1" color="#cadadd" style="margin:15px auto;" />
<form action="" name="frmthemdethi" id="contact" class="contact-form" onSubmit="return kiemtradulieu(this)" onsubmit="return checkform();" method="post" enctype="multipart/form-data">
<table width="100%" border="0"  cellpadding="0" cellspacing="0" background="images/body.png" id="dethi_news">
    <tr>
      <td bgcolor="#CCCCCC"  height="38px"colspan="2" align="center" class="style1">THÊM ĐỀ THI MỚI</td>
    </tr>
    <tr>
      <td align="center" class="tbltitle">Tên đề:</td>
	    <td width="85%"> <input class="tendethi" type="text" name="tende" value="" autocomplete = "off"></td>
    </tr>

    <td height="27" align="center" class="tbltitle2">Loại đề</td>
		<td>
          <select name="loaide" id="tenmon">
			<option value = ''> ---Chọn loại đề---</option>
			<?php
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
			<option value = ''> ---Chọn cấp thi---</option>
			<?php
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
        <td><textarea name="noidung" class="tendethi" rows="4"></textarea></td>	
    </tr>

   <tr>
			<td align="center" class="tbltitle">Số câu hỏi:</td>
		<td><input class="ttkhac" type="text" name="socau" value="" autocomplete = "off"/></td>
  </tr>

    <tr>
      <td align="center" class="tbltitle">Thời gian:</td>
	    <td width="85%"> <input class="ttkhac" type="text" name="thoigian" value="" autocomplete = "off"></td>
    </tr>

    <tr>
			<td align="center" class="tbltitle">Tác giả: </td>
		<td><input class="ttkhac" type="text" name="tacgia" value="" autocomplete = "off"/></td>
	</tr>

    <tr>
    <td height="27" align="center" class="tbltitle2">Khối thi</td>
		<td>
          <select name="khoi" id="tenmon">
			<option value = ''> ---Chọn khối thi---</option>
			<?php
			$sql = 'select * from xh_khoihoc';
						$result = mysql_query($sql);
						while($rows = mysql_fetch_assoc($result))
						echo "<option value = '$rows[makhoi]'> $rows[tenkhoi] </option>";
			?>
		</select>
		</td>
    </tr>

    </tr>
		<td height="27" align="center" class="tbltitle2">Môn thi</td>
		<td>
			<select name="mon" id="tenmon">
			<option value = ''> ---Chọn Môn thi---</option>
				<?php
				$sql = 'select * from xh_monthi';
							$result = mysql_query($sql);
							while($rows = mysql_fetch_assoc($result))
							echo "<option value = '$rows[mamon]'> $rows[monthi] </option>";
				?>
			</select>
		</td>
    </tr>

    </tr>
		<td height="27" align="center" class="tbltitle2">Hình thức</td>
		<td>
			<select name="hinhthuc" id="hinhthuc">
				<option value = ''> ---Chọn hình thức---</option>
				<?php
				$sql = 'select * from xh_hinhthucdethi';
							$result = mysql_query($sql);
							while($rows = mysql_fetch_assoc($result))
							echo "<option value = '$rows[id]'> $rows[hinhthuc] </option>";
				?>
			</select>
		</td>
    </tr>


	<tr>
      <td align="center" class="tbltitle">Hình ảnh: </td>
	     <td><input class="tepanh" type="file" name="file_up" />
         </td>	
    </tr>

    <tr>
      <td colspan="2"align="center"  style="padding:10px 0px 10px 0px"><label>
        <input type="submit" name="ok" id="ok" value="Thêm đề thi" />
      </label>
      </td>
    </tr>
  </table>
  </form>
</body>
</html>
<?php




if(isset($_POST['ok']))
	{	 
		move_uploaded_file($_FILES["file_up"]["tmp_name"],"../upload/images/dethi/".$_FILES["file_up"]["name"]);
		$link=$_FILES["file_up"]["name"];
		$day=date("Y-m-d");
		$sql2="INSERT INTO xh_dethi(tende,loaide,capthi,noidung,socau,thoigian,tacgia,khoi,mon,hinhanh,ngay,thi)
		VALUES
		('$_POST[tende]','$_POST[loaide]','$_POST[capthi]','$_POST[noidung]','$_POST[socau]','$_POST[thoigian]','$_POST[tacgia]','$_POST[khoi]','$_POST[mon]','$link','$day','$_POST[thi]')";
		 $query2=mysql_query($sql2,$con);
		echo"<script>document.location.href='?menu=dethi_list_them_cauhoi' </script>";	
	}
?>

