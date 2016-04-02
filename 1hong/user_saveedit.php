<link rel="stylesheet" href="febe/style.css" type="text/css" media="screen" charset="utf-8">
<?php
include('config.php');
if(isset($_POST["edit"]))
{
			$id=$_POST['id'];
			$hoten=$_POST['hoten'];
			$username=$_POST['username'];
			$email=$_POST['email'];
			$gioitinh=$_POST['gioitinh'];
			$ngaysinh=$_POST['ngaysinh'];
			$sodt=$_POST['sodt'];
			$level=$_POST['level'];
			$phancap=$_POST['phancap'];
			$date = date('Y-m-d');


		if(!isset($_FILES["fileanh"]["name"])) //nếu không chọn ảnh upload
		{
			$hinh=$_POST['imgfile'];	
		}
		else
		{
			$hinh=$_FILES["fileanh"]["name"];
			move_uploaded_file($_FILES["fileanh"]["tmp_name"],"../upload/images/user/".$_FILES["fileanh"]["name"]);	
		}

	if ($_POST['password'] <> "") 
	{
		$password = md5( addslashes( $_POST['password'] ) );

		if ($hinh <> "") 
		{
			$sql="UPDATE xh_user SET 
			hoten='".$hoten."',
			user='".$username."',
			pass='".$password."',
			mail='".$email."',
			gioi='".$gioitinh."',
			ns='".$ngaysinh."',
			sodt='".$sodt."',
			level='".$level."',
			phancap='".$phancap."',
			date='".$date."',
			image='".$hinh."'  
			WHERE id = '".$id."' ";
			 mysql_query($sql);	
		}
		else
		{
			$sql="UPDATE xh_user SET 
			hoten='".$hoten."',
			user='".$username."',
			pass='".$password."',
			mail='".$email."',
			gioi='".$gioitinh."',
			ns='".$ngaysinh."',
			sodt='".$sodt."',
			level='".$level."',
			phancap='".$phancap."',
			date='".$date."'
			WHERE id = '".$id."' ";
			 mysql_query($sql);	
		}
	}
	else 
	{
		if ($hinh <> "") 
		{
			$sql="UPDATE xh_user SET 
			hoten='".$hoten."',
			user='".$username."',
			mail='".$email."',
			gioi='".$gioitinh."',
			ns='".$ngaysinh."',
			sodt='".$sodt."',
			level='".$level."',
			phancap='".$phancap."',
			date='".$date."',
			image='".$hinh."'  
			WHERE id = '".$id."' ";
			 mysql_query($sql);	
		}
		else
		{
			$sql="UPDATE xh_user SET 
			hoten='".$hoten."',
			user='".$username."',
			mail='".$email."',
			gioi='".$gioitinh."',
			ns='".$ngaysinh."',
			sodt='".$sodt."',
			level='".$level."',
			phancap='".$phancap."',
			date='".$date."'
			WHERE id = '".$id."' ";
			 mysql_query($sql);	
		}
	}
	echo"<script>document.location.href='?menu=ds_user'</script>";

}
?>







