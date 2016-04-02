<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="stylesheet" type="text/css" href="css/style.css"/>

 

<?php
if(isset($_SESSION['username'])) 
{

//CODE CẬP NHẬT THÀNH VIÊN VÀO DATABASE
//Kiểm tra xem có ô nào chưa nhập hay không
	if(isset($_POST['ok']))
	{
		if($_POST['hoten'] == "") {echo "<script>alert('Bạn chưa nhập họ tên!');</script>"; }
		else {$hoten=preg_replace('/\s(?=\s)/', '', trim($_POST['hoten']));}
		if($_POST['lop'] == "") {echo "<script>alert('Bạn chưa nhập lớp của học sinh!');</script>"; }
		else {$lop=str_replace(" ", "", $_POST['lop']);}
		if($_POST['sodt'] == "") {echo "<script>alert('Bạn chưa nhập số điện thoại!');</script>"; }
		else {$sodt=str_replace(" ", "",$_POST['sodt']);}
		if($_POST['truong'] == "") {echo "<script>alert('Bạn chưa nhập tên của học sinh!');</script>"; }
		else {$truong=preg_replace('/\s(?=\s)/', '', trim($_POST['truong']));}
	//str_replace(" ", "", $_POST['lop']) tìm các khoảng trắng và thay bằng không có khoảng trắng
		$noidung=$_POST['noidung'];
		$mail=$_POST['mail'];

		if($hoten & $lop & $sodt & $truong)
		{
		//Kiểm tra Kết nối MySQL
		include("config/connect.php");
			mysql_set_charset('utf8',$connect);		
					$sql2="insert into xh_ykien(hoten,sodt,mail,truong,lop,noidung) values('".$hoten."','".$sodt."','".$mail."','".$truong."','".$lop."','".$noidung."')";
					$query2=mysql_query($sql2);
					echo"<script>document.location.href='?page=camonykien' </script>";	//Gán dangki=xem_kqdk
		}
	}
?>



<form action="" name="frmthemdethi" id="form" class="form-dangkionline" onsubmit="return checkform();" method="post" enctype="multipart/form-data">
	<table class='bang' border="0" align="center" cellpadding="4" cellspacing="0">
	<caption class="style1">GỬI Ý KIẾN ĐÓNG GÓP TỚI BAN QUẢN TRỊ</caption>
		<tr>
			  <td width="200">Họ tên <font color="#ff0033">*</font>:</td>
			  <td><input class="xanh3 cssnut" name="hoten" type="text" class="txtfield" id="hoten" value='<?php if(isset($_POST['hoten']) && $_POST['hoten'] != NULL){ echo $_POST['hoten']; } ?>' /> </td>
		</tr>
		<tr>
			  <td width="200">Số điện thoại<font color="#ff0033">*</font>:</td>
			  <td><input class="xanh3 cssnut" name="sodt" type="text" class="txtfield" id="sodt" value='<?php if(isset($_POST['sodt']) && $_POST['sodt'] != NULL){ echo $_POST['sodt']; } ?>' /> </td>
		</tr>
		<tr>
			  <td width="200">Nhập Email:</td>
			  <td><input class="xanh3 cssnut" name="mail" type="text" class="txtfield" id="mail" value='<?php if(isset($_POST['mail']) && $_POST['mail'] != NULL){ echo $_POST['mail']; } ?>'  /> </td>
		</tr>

		<tr>
			  <td width="200">Trường<font color="#ff0033">*</font>:</td>
			  <td><input class="xanh3 cssnut" name="truong" type="text" class="txtfield" id="truong" value='<?php if(isset($_POST['truong']) && $_POST['truong'] != NULL){ echo $_POST['truong']; } ?>'  /> </td>
		</tr>
		<tr>
			  <td width="200">Lớp<font color="#ff0033">*</font>:</td>
			  <td><input class="xanh3 cssnut" name="lop" type="text" class="txtfield" id="lop" value='<?php if(isset($_POST['lop']) && $_POST['lop'] != NULL){ echo $_POST['lop']; } ?>'  /> </td>
		</tr>

		<tr>
			  <td width="200">Nội dung ý kiến:</td>

			<td><textarea id="noidung" class="xanh3 cssnut" name="noidung" onfocus="this.value=''" style= "width:600px; height:50px;scroll:auto;" ><?php if(isset($_POST['noidung']) && $_POST['noidung'] != NULL){ echo $_POST['noidung']; } ?></textarea></td>
		</tr>
		<tr>
			<td colspan="2"><div align="center">
			<q>Những phần có dấu (<font size="" color="#ff0033">*</font>) là bắt buộc </q>
			</div></td>
		</tr>

	</table>
			<div align="center">
			<br>
					<input type="submit" class="maucam cssnut" name="ok" id="ok" value="Gửi ý kiến" />
			</div>
</form>


<?php
	}
else { echo"<script>document.location.href='?page=thong_bao' </script>"; }




?>