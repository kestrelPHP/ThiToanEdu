<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<form name="frmregister"action="" method="post" enctype="multipart/form-data">
<div align="center" id="tieude">
	<label for="name"><strong>ĐĂNG KÝ THÀNH VIÊN</strong></label><br><a href=''>Về trang chủ</a>
</div>

<table class="form" border="0">
<caption class="style1">THÊM GIÁO VIÊN</caption>
		<tr>
			  <td width="200">Họ tên <font color="#ff0033">*</font>:</td>
			  <td><input class="bogoc" name="hoten" type="text" class="txtfield" id="hoten" value='<?php if(isset($_POST['hoten']) && $_POST['hoten'] != NULL){ echo $_POST['hoten']; } ?>' /> </td>
		</tr>
		<tr>
			  <td width="200">Tên đăng nhập<font color="#ff0033">*</font>:</td>
			  <td><input class="bogoc" name="user" type="text" class="txtfield" id="user" value='<?php if(isset($_POST['user']) && $_POST['user'] != NULL){ echo $_POST['user']; } ?>' /> </td>
		</tr>
		<tr>
			  <td width="200">Giới tính:</td>
			  <td><input class="bogoc" name="gioi" type="text" class="txtfield" id="gioi" value='<?php if(isset($_POST['gioi']) && $_POST['gioi'] != NULL){ echo $_POST['gioi']; } ?>' /> </td>
		</tr>
		<tr>
			  <td width="200">Ngày sinh:</td>
			  <td><input class="bogoc" name="ns" type="text" class="txtfield" id="ns" value='<?php if(isset($_POST['ns']) && $_POST['ns'] != NULL){ echo $_POST['ns']; } ?>' /> </td>
		</tr>

		<tr>
			  <td width="200">Số ĐT:</td>
			  <td><input class="bogoc" name="sodt" type="text" class="txtfield" id="sodt" value='<?php if(isset($_POST['sodt']) && $_POST['sodt'] != NULL){ echo $_POST['sodt']; } ?>' /> </td>
		</tr>

		<tr>
			  <td width="200">Email:</td>
			  <td><input class="bogoc" name="mail" type="text" class="txtfield" id="mail" value='<?php if(isset($_POST['mail']) && $_POST['mail'] != NULL){ echo $_POST['mail']; } ?>' /> </td>
		</tr>

		<tr>
			  <td width="200">Password<font color="#ff0033">*</font>:</td>
			  <td><input class="bogoc" name="pass" type="password:" class="txtfield" id="pass" value='<?php if(isset($_POST['pass']) && $_POST['pass'] != NULL){ echo $_POST['pass']; } ?>' /> </td>
		</tr>

		<tr>
			  <td width="200">Level:</td>
			  <td><input class="bogoc" name="level" type="text" class="txtfield" id="level" value='<?php if(isset($_POST['level']) && $_POST['level'] != NULL){ echo $_POST['level']; } ?>' /> </td>
		</tr>

		<tr>
			  <td width="200">Phân quyền:</td>
			  <td><input class="bogoc" name="phancap" type="text" class="txtfield" id="phancap" value='<?php if(isset($_POST['phancap']) && $_POST['phancap'] != NULL){ echo $_POST['phancap']; } ?>' /> </td>
		</tr>

		<tr>
			<td align="center" class="tbltitle"><strong>Hình ảnh:</strong></td>
				<td><input class="tepanh" type="file" name="file_up" />
			</td>	
		</tr>


		</table>
			<div align="center">
				<input  class="submit_do cssnut" type="submit" value="Thêm giáo viên" alt="Submit" title="Submit" name="ok"/>
				<input  class="submit_do cssnut" type="reset" value="Nhập lại" alt="Reset" title="Reset" /></td>
			</div>

	</form>


<?php
if (isset( $_POST['ok'] ))
{
	$hoten=preg_replace('/\s(?=\s)/', '', trim($_POST['hoten']));
	$user=addslashes(str_replace(" ", "",$_POST['user']));
	$pass=md5(addslashes($_POST['pass']));
//str_replace(" ", "", $_POST['lop']) tìm các khoảng trắng và thay bằng không có khoảng trắng
	$gioi=$_POST['gioi'];
	$ns=$_POST['ns'];
	$sodt=$_POST['sodt'];
	$mail=$_POST['mail'];
	$level=$_POST['level'];
	$phancap=$_POST['phancap'];
	$image=$_POST['image'];
	$date = date('Y-m-d');





include("config.php");
	mysql_set_charset('utf8');		

	//kiểm tra xem dữ liệu nhập vào tồn tại hay chưa
		$ktid="select * from xh_hocsinh where username='".$username."'";
		$ganid=mysql_query($ktid);

	if(mysql_num_rows($ganid) != "") 
		{echo "Xin lỗi Tên đăng nhập này đã tồn tại rồi, vui lòng chọn tên đăng nhập khác <br/>. 
			<a href='index.php'>Nhấp vào đây để quay lại</a><br/>.
			<a href='index.php'>Hoặc nhấp vào đây để về trang chủ</a>" ;}
		else
		{

	move_uploaded_file($_FILES["file_up"]["tmp_name"],"../upload/images/user/".$_FILES["file_up"]["name"]);
	$hinhanh=$_FILES["file_up"]["name"];



$sql2="insert into xh_user(hoten,user,gioi,ns,sodt,mail,pass,level,phancap,image,date) values('".$hoten."','".$user."','".$gioi."','".$ns."','".$sodt."','".$mail."','".$pass."','".$level."','".$phancap."','".$hinhanh."','".$date."')";
$query2=mysql_query($sql2);

		echo"<script>document.location.href='?menu=ds_user' </script>";
		}

}
?>
