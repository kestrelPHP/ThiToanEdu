<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />




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

include("xuly/config/connect.php");
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
				$hinhanh = $now . "-" . $fileName;
	move_uploaded_file($_FILES["file_up"]["tmp_name"],"upload/images/hocsinh/".$hinhanh);

			// Tiến hành tạo tài khoản
	@$gansql="INSERT INTO xh_hocsinh(username,hoten,pass,ngaysinh,gioitinh,diachi,sodt,email,khoi,lop,truong,hoatdong,hinhanh) 
	VALUES ('$username', '$hoten', '$password', '$ngaysinh', '$gioitinh', '$diachi', '$sodt', '$email', '$khoi', '$lop', '$truong', '$hoatdong','$hinhanh')";
	$query=mysql_query($gansql);

			// Thông báo hoàn tất việc tạo tài khoản
			if ($query)
			{
				print "Tài khoản {$username} đã được tạo. <a href='index.php?page=dktv'>Nhấp vào đây để đăng nhập</a><br/>";
				print "<a href='index.php'>Nhấp vào đây để về trang chủ</a><br/>";
			}
				else {
					print "Có lỗi trong quá trình đăng kí, Vui lòng liên hệ ban quản trị";
				}
		}

}
?>
