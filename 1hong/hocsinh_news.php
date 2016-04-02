<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

	<form name="frmregister"action="" method="post" enctype="multipart/form-data">
	<div align="center" id="tieude">
		<label for="name"><strong>ĐĂNG KÝ THÀNH VIÊN</strong></label><br><a href=''>Về trang chủ</a>
	</div>

		<table class="form" border="0">
			<tr>
				<td><label for="name" class="chudangki"><strong>Họ và tên:</strong></label></td>
				<td><input class="inp-text" name="hoten" id="hoten" type="text" size="30" value="<?php if(isset($_POST['hoten']) && $_POST['hoten'] != NULL){ echo $_POST['hoten']; } ?>" placeholder="Họ và tên"/></td>
			</tr>

			<tr>
				<td><label for="name"><strong>Tên đăng nhập:</strong></label></td>
				<td><input class="inp-text" name="username" id="username" type="text" size="30" value="<?php if(isset($_POST['username']) && $_POST['username'] != NULL){ echo $_POST['username']; } ?>" placeholder="Tên đăng nhập" /></td>
			</tr>


			<tr>
				<td><label for="name"><strong>Password:</strong></label></td>
				<td><input class="inp-text" name="password" id="password" type="password" placeholder="password" size="30" /></td>
			</tr>

			<tr>
				<td><label for="name"><strong>Nhập lại password:</strong></label></td>
				<td><input class="inp-text" name="password1" id="password1" type="password" placeholder="Nhập lại password" size="30" /></td>
			</tr>


			<tr>
				<td><label for="name"><strong>Địa chỉ:</strong></label></td>
				<td><input class="inp-text" name="diachi" id="diachi" type="text" size="30" value="<?php if(isset($_POST['diachi']) && $_POST['diachi'] != NULL){ echo $_POST['diachi']; } ?>"  placeholder="Địa chỉ"  /></td>
			</tr>


			<tr>
				<td><label for="name"><strong>Số điện thoại:</strong></label></td>
				<td><input class="inp-text" name="sodt" id="sodt" type="text" size="30" value="<?php if(isset($_POST['sodt']) && $_POST['sodt'] != NULL){ echo $_POST['sodt']; } ?>"  placeholder="Số điện thoại (có thể lấy số điện thoại của bố, mẹ hoặc người đỡ đầu)"  /></td>
			</tr>

			<tr>
				<td><label for="name"><strong>Email:</strong></label></td>
				<td><input class="inp-text" name="email" id="email" type="text" size="30" value="<?php if(isset($_POST['email']) && $_POST['email'] != NULL){ echo $_POST['email']; } ?>"  placeholder="Địa chỉ Email (Nếu chưa có thì có thể nhập tùy ý ví dụ như: abc@gmail.com)"  /></td>
			</tr>

			<tr>
				<td><label for="name"><strong>Lớp:</strong></label></td>
				<td><input class="inp-text" name="lop" id="lop" type="text" size="30" value="<?php if(isset($_POST['lop']) && $_POST['lop'] != NULL){ echo $_POST['lop']; } ?>"  placeholder="Tên lớp học"  /></td>
			</tr>


			<tr>
				<td><label for="name"><strong>Trường:</strong></label></td>
				<td><input class="inp-text" name="truong" id="truong" type="text" size="30" value="<?php if(isset($_POST['truong']) && $_POST['truong'] != NULL){ echo $_POST['truong']; } ?>"  placeholder="Tên trường" /></td>
			</tr>

			<tr>
				<td><label for="name"><strong>Ngày tháng năm sinh:</strong></label></td>
				<td><input class="inp-text" name="ngaysinh" id="ngaysinh" type="text" size="30" value="<?php if(isset($_POST['ngaysinh']) && $_POST['ngaysinh'] != NULL){ echo $_POST['ngaysinh']; } ?>"  placeholder="Ngày tháng năm sinh"  /></td>
			</tr>

			<tr>
				<td colspan="2">
						<label for="name"><strong>Chọn giới tính:</strong></label>
						<select name="gioitinh" id="gioitinh" >
							<option value="" selected>Chọn giới tính</option>
							<option value="Nam">Nam</option>
							<option value="nữ">Nữ</option>
							<option value="Khác">Khác</option>
						</select>
						<label for="name"><strong>Chọn khối lớp:</strong></label>
						<select name="khoi" id="khoi" >
							<option value="" selected>Chọn khối học</option>
							<option value="k6">Khối 6</option>
							<option value="k7">Khối 7</option>
							<option value="k8">Khối 8</option>
							<option value="k9">Khối 9</option>
							<option value="Khác">Khác</option>
						</select>
				</td>
			</tr>
			<tr>
				<td align="center" class="tbltitle"><strong>Hình ảnh:</strong></td>
					<td><input class="tepanh" type="file" name="file_up" />
				</td>	
			</tr>

		</table>
			<div align="center">
				<input  class="submit_do cssnut" type="submit" value="Thêm học sinh" alt="Submit" title="Submit" name="ok"/>
				<input  class="submit_do cssnut" type="reset" value="Nhập lại" alt="Reset" title="Reset" /></td>
			</div>

	</form>


<?php
if (isset( $_POST['ok'] ))
{
$hoten=$_POST['hoten'];
$password=md5($_POST['password']);
$username=$_POST['username'];
$ngaysinh=$_POST['ngaysinh'];
$gioitinh=$_POST['gioitinh'];
$diachi=$_POST['diachi'];
$email=$_POST['email'];
$sodt=$_POST['sodt'];
$khoi=$_POST['khoi'];
$lop=$_POST['lop'];
$truong=$_POST['truong'];
$hoatdong=1;

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

        $fileName = $_FILES["file_up"]["name"];
        $now = date("Y-m-d_H-i-s");
        $newFileName = $now . "-" . $fileName;
	move_uploaded_file($_FILES["file_up"]["tmp_name"],"../upload/images/hocsinh/".$newFileName);
			// Tiến hành tạo tài khoản
	@$gansql="INSERT INTO xh_hocsinh(username,hoten,pass,ngaysinh,gioitinh,diachi,sodt,email,khoi,lop,truong,hoatdong,hinhanh) 
	VALUES ('$username', '$hoten', '$password', '$ngaysinh', '$gioitinh', '$diachi', '$sodt', '$email', '$khoi', '$lop', '$truong', '$hoatdong','$newFileName')";
	$query=mysql_query($gansql);

		echo"<script>document.location.href='?menu=hocsinh_list' </script>";
		}

}
?>
