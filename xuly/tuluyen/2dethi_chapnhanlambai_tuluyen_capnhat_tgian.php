<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
</head>
<body>
<?php
session_start();
	$made=$_GET['made'];
	$lanthi=$_GET['lanthi'];
	$iUser=$_SESSION['id']; //idhs

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
				where idhs='".$iUser."' and made='".$made."' and lanthi='".$lanthi."' ";
				$rstgnb=mysql_query($sqltgnb);
	echo"<script>document.location.href='?page=tl_dethi_lamlai&made=$made&lanthi=$lanthi' </script>";
?>

</body>
</html>



