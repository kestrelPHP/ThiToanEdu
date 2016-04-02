<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Thông báo lỗi</title>
</head>
<body>
<?php
session_start();
	$demslthi=$_SESSION['dem_slthi'];
	$made=$_SESSION['lmade'];			
	$iUser=$_SESSION['id']; //idhs

?>
	<div align="center" style="top:10; background: #ccffff; border:1px solid #93F; padding:5px 100px; text-align:center; margin:10px;">
		<a style="font-size:16px; font-family:Arial, Helvetica, sans-serif; clor: #ff0000" align="center" >Có lỗi xảy ra!</a></br>
		<a style="font-size:18px; font-family:Arial, Helvetica, sans-serif; clor: #ff0000" align="center" >
			Bạn đã thi <?php echo $demslthi; ?> lần.
		</a></br>
		<a style="font-size:15px;" align="center">Bạn chỉ được phép tự luyện 3 lần. Nếu muốn thi tiếp bạn có thể đăng ký tài khoản mới!</a></br></br>
		<a href="#">Hoặc có thể chọn lại bài đã làm trong danh sách bên dưới để sửa hay bổ sung đáp án</a></br></br>
		<a href="./index.php">Hoặc bấm vào đây để về trang chủ nếu không muốn đợi lâu</a>
	</div>
	<div align="center">
	<form action="" method="POST">

			<select name="lanthi">
				<option value = ''> ---Chọn bài đã làm để sửa---</option>
				<option value = '1'> Bài làm lần 1</option>
				<option value = '2'> Bài làm lần 2</option>
				<option value = '3'> Bài làm lần 3</option>
			</select>
			 <input type="submit" name="ok" id="ok" value="Chọn" />

	</form>
	</div>
<?php
	if(isset($_POST['ok']))
	{	
//Cập nhật lại thời gian kết thúc nếu chọn sửa bài:
				$query=mysql_query("SELECT thoigian FROM xh_dethi where made='$made'");
				$row=mysql_fetch_array($query);
					$thoigian=$row["thoigian"];
					$dinhdang_ngaygio = "H:i:s _ d-m-Y";	//Định dạng cho ngày giờ
					$dinhdang_ngaygio2 = "Y-m-d H:i:s";	//Định dạng cho ngày giờ
					$doi_ngayhientai = time();			//Tính ngày tháng năm hiện bằng ra giây
					$doi_ngayketthuc = $doi_ngayhientai + $thoigian*60;
				$sqltgnb="UPDATE  xh_tonghopkq_tl SET 
				tgketthuc ='".$doi_ngayketthuc."',
				luutamgiobatdau ='".$doi_ngayhientai."'
				where idhs='".$iUser."' and made='".$made."' and lanthi='".$demslthi."' ";
				$rstgnb=mysql_query($sqltgnb);
	$lanthi=$_POST['lanthi'];
	echo"<script>document.location.href='?page=tl_dethi_lamlai&made=$made&lanthi=$lanthi' </script>";
	}

?>

</body>
</html>



<script>
setTimeout(function()
{
	location.href='./index.php';
},70000);
</script>