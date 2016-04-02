<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php

if(isset($_POST['dangnhap']))
{
include("xuly/config/connect.php");
	$username=$_POST['username'];
	$p=md5($_POST['password']); 
	if($username && $p)
	{
			$sql="select * from xh_hocsinh where username='".$username."' and pass='".$p."'";
			$query=mysql_query($sql);
			@$count=mysql_num_rows($query);
		if($count<1)
		{
			echo "<script>alert('Đăng nhập sai!');</script>";
			echo"<script>document.location.href='index.php?page=dangnhap' </script>";
		}
			else
			{ 
			session_start();
			$row=mysql_fetch_array($query);
			$_SESSION['id']=$row['idhs'];
			$_SESSION['username']=$row['username'];
			$_SESSION['user']=$row['hoten'];
			$_SESSION['khoihoc']=$row['khoi'];
			$_SESSION['hoatdong']=$row['hoatdong'];
			echo"<script>document.location.href='index.php?page=vaothi' </script>";
		}
	}
}?>