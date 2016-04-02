<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
<link href="style.css" rel="stylesheet" type="text/css">
<script type="text/javascript" language="javascript" src="validate.js"></script>
<!--Kiểm tra đăng nhập-->
		<script language="javascript">
			function check_frmdangnhap(the_form)
			{ 
			 var the_tendn = the_form.userid.value;
			 var the_password=the_form.password.value;
			 if (the_tendn==''){
					alert("Vui lòng nhập user name!");
					the_form.userid.focus();
					return false;
				}
				if (the_password=='')
				{
					alert("Vui lòng nhật mật khẩu!");
					the_form.password.focus();
					return false;
				}
			}
		</script>
</head>
<body>
<?php
	if(isset($_SESSION['username']))
	{
		echo "<center> Bạn hiện đang là thành viên,  Xin mời ". $_SESSION['hoten'] ."  vào thi! </center>";
	} 
	else
		{
?>


 
<div id="first"> <!--Hiện ẩn forrm-->
	<div class="total">
		<span class="frame-total">
			<div class="totalbq">
			<center><a href='index.php'>Về trang chủ</a></center>
				<div class="total-top">ĐĂNG NHẬP</div>
				<div class="total-cent">
					<form action="index.php?page=dang_nhap" name="frmdangnhap" onSubmit="return check_frmdangnhap(this)" method="post" enctype="multipart/form-data">
						<label for="userid" class="username"><img src="images/icon_username.png" width="15" height="15" align="absmiddle" /></label>
						<input type="text" name="username" placeholder="UserName" id="username" value="" size="22" />		  <br />
						
						<label for="password"><img src="images/icon_forget.png" width="15" height="15" align="absmiddle" /></label>
						<input type="password" placeholder="PassWord" name="password" id="password" value="" size="22" />  <br />
						
						<center><input type="submit" class="bottom1" name="dangnhap" id="dangnhap" value="Đăng nhập" /></center>
					</form> 
				</div>
			</div>
		</span>
	</div>
	<div align="center">
		<p id="one"><a href="#">Quên mật khẩu?</a></p>
		<p id="two">Không có tài khoản? <a href="#" id="signup" class="nut_cam cssnut">Đăng ký ở đây</a></p>
	</div>
</div> <!--Hiện ẩn forrm-->
<!--/////////////////////////////////////////////////////////////////////////////////////////--> 
<div id="second">  <!--Hiện ẩn forrm-->
	<form name="frmregister"action="index.php?page=cntttv" method="post" onSubmit="return validate();"	enctype="multipart/form-data">
	<div align="center" id="tieude">
		<label for="name"><strong>ĐĂNG KÝ THÀNH VIÊN</strong></label><br><a href='index.php'>Về trang chủ</a>
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
				<input  class="submit_do cssnut" type="submit" value="Đăng ký" alt="Submit" title="Submit" name="ok"/>
				<input  class="submit_do cssnut" type="reset" value="Nhập lại" alt="Reset" title="Reset" /></td>
			</div>

			<div align="center">
				<p id="two">Đã có tài khoản? <a href="#" id="signin" class="signin">Đăng nhập</a></p> <!--Hiện ẩn forrm-->
				<a href='index.php'>Về trang chủ</a>
			</div>  
	</form>
</div>  


<?php } ?>
</body>
</html>
