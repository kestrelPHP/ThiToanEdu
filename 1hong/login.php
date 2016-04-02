<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" media="screen, projection" href="css/logincss.css" />
<title>Administration Control Panel - Đăng nhập</title>
</head>
<body>
<center>
	<div id="fw_frame" class="clearfix">
		<div id="frame_1">
			<h3>Khu vực dành cho người quản trị</h3>
			<div class="content">
				<center>
				<table width="98%" border="0" cellspacing="0" cellpadding="0">
				  <tr>
					<td align="left"><img src="images/login.png" /></td>
					<td align="left">
						<b>Để website hoạt động tốt :</b>
						<ol>
						  <li>Bật cookies trình duyệt</li>
						  <li>Bật javascript trình duyệt</li>
						  <li>Duyệt tốt trên IE7 và FF2 trở lên</li>
							<li><a href='../index.php'>Trở ra trang chủ</a></li>

				    	</ol>
					</td>
				  </tr>
				</table>
				</center>
			</div>
		</div>
		<div id="frame_2">
			<h3>Đăng nhập</h3>
			<div class="content">
				<center>
				<form action="" method="post" onSubmit="return check_form(this)">
					<table width="90%" border="0" cellspacing="0" cellpadding="5">
					  <tr>
						<td width="35%" align="right">Tên người dùng :</td>
						<td width="65%" align="left"><input class="inputbox" style="width:80%" type="text" autocomplete="off" name="user" id="user" /></td>
					  </tr>
					  <tr>
						<td align="right">Mật khẩu :</td>
						<td align="left"><input class="inputbox" style="width:80%" type="password" name="pass" id="pass" /></td>
					  </tr>
					  <tr>
						<td></td>
						<td align="left"><input name="dangnhap" type="submit" class="button" id="dangnhap" value="Đăng nhập" /></td>
					  </tr>
					  
					</table>
				</form>
				</center>
			</div>
		</div>
	</div>
</center>
</body>
</html>
<?php

if(isset($_POST['dangnhap']))
{
   $id=addslashes($_POST['user']);
   $p=md5(addslashes($_POST['pass']));  
   if($id && $p)
  {
		include("config.php");
		$sql="SELECT id, user, hoten, pass, level, phancap from xh_user where user='".$id."' and pass='".$p."'";
		$query=mysql_query($sql);
		$count=mysql_num_rows($query);
		if($count<1)
		   {
			 echo "<script>alert('Bạn đã gõ sai tên đăng nhập hoặc mật khẩu!');</script>";
			 echo"<script>document.location.href='login.php' </script>";
		   }
		else
		   {

				session_start();
				$row=mysql_fetch_array($query);
				$_SESSION['USER'] = $row['hoten'];
				$_SESSION['LEVEL']= $row['level'];
				$_SESSION['user_id'] = $row['id'];
				$_SESSION['phancap'] = $row['phancap'];
//					if(@$_SESSION['phancap'] == "administrator")
					   header("location:index.php");
//					if(@$_SESSION['phancap'] != "administrator")
//						header("Location: ../index.php");
			}


	}
}
	?>