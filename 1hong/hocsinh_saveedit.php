<link rel="stylesheet" href="febe/style.css" type="text/css" media="screen" charset="utf-8">
<?php
include('config.php');
if(isset($_POST["edit"]))
{
			$idhs=$_POST['idhs'];
			$username=$_POST['username'];
			$hoten=$_POST['hoten'];
			$ngaysinh=$_POST['ngaysinh'];
			$gioitinh=$_POST['gioitinh'];
			$diachi=$_POST['diachi'];
			$sodt=$_POST['sodt'];
			$email=$_POST['email'];
			$khoi=$_POST['khoi'];
			$lop=$_POST['lop'];
			$truong=$_POST['truong'];
			$hoatdong=$_POST['hoatdong'];

			$fileName = $_FILES["fileanh"]["name"];
			$now = date("Y-m-d_H-i-s");
		if($fileName=="")	//nếu không chọn ảnh upload
		{
			$hinh=$_POST['imgfile'];	
		}
		else //Nếu chọn ảnh để Upload
		{
				$hinh = $now . "-" . $fileName;
			move_uploaded_file($_FILES["fileanh"]["tmp_name"],"../upload/images/hocsinh/".$hinh);	
		}

		if ($_POST['password'] <> "") 
		{
			$password = md5( addslashes( $_POST['password'] ) );

				$sql="UPDATE xh_hocsinh SET 
				username='".$username."',
				pass='".$password."',
				hoten='".$hoten."',
				ngaysinh='".$ngaysinh."',
				gioitinh='".$gioitinh."',
				diachi='".$diachi."',
				sodt='".$sodt."',
				email='".$email."',
				khoi='".$khoi."',
				lop='".$lop."',
				truong='".$truong."',
				hoatdong='".$hoatdong."',
				hinhanh='".$hinh."'  
				WHERE idhs = '".$idhs."' ";
				 mysql_query($sql);	
		}
		else 
		{
				$sql="UPDATE xh_hocsinh SET 
				username='".$username."',
				hoten='".$hoten."',
				ngaysinh='".$ngaysinh."',
				gioitinh='".$gioitinh."',
				diachi='".$diachi."',
				sodt='".$sodt."',
				email='".$email."',
				khoi='".$khoi."',
				lop='".$lop."',
				truong='".$truong."',
				hoatdong='".$hoatdong."',
				hinhanh='".$hinh."'  
				WHERE idhs = '".$idhs."' ";
				 mysql_query($sql);	
		}
	
	echo"<script>document.location.href='?menu=hocsinh_list'</script>";

}
?>







