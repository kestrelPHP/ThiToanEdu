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
 var ktphanmon = the_form.phanmon.value;
 var kttenmon = the_form.tenmon.value;

	 if (ktphanmon==''){
			alert("Vui lòng nhập phân môn!");
			the_form.phanmon.focus();
			return false;
		}

	 if (kttenmon==''){
			alert("Vui lòng chọn môn!");
			the_form.tenmon.focus();
			return false;
		}
}
</script>



</head>

<body>
<div style="margin:20px 70px 10px; font-size:14px;">
<font size="2" face="Tahoma"><b><a href="?menu=dethi_list_them_cauhoi">Quản lý phân môn</a><img src="images/bl3.gif" border="0" /> Thêm phân môn</b></font></div>
<hr size="1" color="#cadadd" style="margin:15px auto;" />
<form action="" name="frmthemdethi" id="contact" class="contact-form" onSubmit="return kiemtradulieu(this)" onsubmit="return checkform();" method="post" enctype="multipart/form-data">
<table width="100%" border="0"  cellpadding="0" cellspacing="0" background="images/body.png" id="dethi_news">
    <tr>
      <td bgcolor="#CCCCCC"  height="38px"colspan="2" align="center" class="style1">THÊM PHÂN MÔN</td>
    </tr>

    </tr>
		<td height="27" align="center" class="tbltitle2">Chọn Môn</td>
		<td>
			<select name="mon" id="tenmon">
			<option value = ''> ---Chọn Môn---</option>
				<?php
				$sql = 'select * from xh_monthi';
							$result = mysql_query($sql);
							while($rows = mysql_fetch_assoc($result))
							echo "<option value = '$rows[mamon]'> $rows[monthi] </option>";
				?>
			</select>
		</td>
    </tr>


    <tr>
      <td align="center" class="tbltitle">Tạo phân môn:</td>
	    <td width="85%"> <input class="tendethi" type="text" name="phanmon" value="" autocomplete = "off"></td>
    </tr>


    <tr>
      <td align="center" class="tbltitle">Tạo chuyên đề:</td>
	    <td width="85%"> <input class="tendethi" type="text" name="chuyende" value="" autocomplete = "off"></td>
    </tr>

    <tr>
      <td align="center" class="tbltitle">Tạo chuyên đề con:</td>
	    <td width="85%"> <input class="tendethi" type="text" name="chuyendecon" value="" autocomplete = "off"></td>
    </tr>


<!--
	<tr>
      <td align="center" class="tbltitle">Hình ảnh: </td>
	     <td><input class="tepanh" type="file" name="file_up" />
         </td>	
    </tr>
-->
    <tr>
      <td colspan="2"align="center"  style="padding:10px 0px 10px 0px"><label>
        <input type="submit" name="ok" id="ok" value="Thêm phân môn" />
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
/*		
		move_uploaded_file($_FILES["file_up"]["tmp_name"],"../upload/images/dethi/".$_FILES["file_up"]["name"]);
		$link=$_FILES["file_up"]["name"];
		$day=date("Y-m-d");
*/

//Tạo mã phân môn
	$sqlmpm="select Max(id) as max_val from lt_phanmon";
	$getsqlmpm=mysql_query($sqlmpm);
	$rowmpm = mysql_fetch_array($getsqlmpm);
	$maxphanmon=$rowmpm['max_val'] + 1;
	$maphanmon=$maxphanmon.'mpm';
	$machuyende=$maxphanmon.'mcd';
	$machuyendecon=$maxphanmon.'mcdc';

//END Tạo mã phân môn

mysql_query("ALTER TABLE lt_phanmon AUTO_INCREMENT = 1");	//Reset lại AUTO_INCREMENT trong cột ID

//Cập nhật dữ liệu
		$sql2="INSERT INTO lt_phanmon(mamon,maphanmon,phanmon,machuyende,chuyende,machuyendecon,chuyendecon)
		VALUES
		('$_POST[mon]','$maphanmon','$_POST[phanmon]','$machuyende','$_POST[chuyende]','$machuyendecon','$_POST[chuyendecon]')";
		 $query2=mysql_query($sql2);


/*
		echo"<script>document.location.href='?menu=themphanmon_list' </script>";	

*/

	}
?>

