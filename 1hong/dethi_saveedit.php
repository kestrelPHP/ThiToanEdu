<link rel="stylesheet" href="febe/style.css" type="text/css" media="screen" charset="utf-8">
<?php
include('config.php');
if(isset($_POST["edit"]))
	{
		$idmade = $_POST["idmade"];
		$tende =$_POST['tende'];
		$loaide = $_POST['loaide'];
		$capthi = $_POST['capthi'];
		$noidung = $_POST['noidung'];
		$socau = $_POST['socau'];
		$thoigian = $_POST['thoigian'];
		$tacgia = $_POST['tacgia'];
		$khoi = $_POST['khoi'];
		$mon = $_POST['mon'];
		$chonthi = $_POST['hinhthuc'];		
		if(!isset($_FILES["fileanh"]["name"])) //nếu không chọn ảnh upload
		{
		$hinh=$_POST['imgfile'];	
		}
		else
		{
			$hinh=$_FILES["fileanh"]["name"];
			move_uploaded_file($_FILES["fileanh"]["tmp_name"],"../upload/images/dethi/".$_FILES["fileanh"]["name"]);	
		}
		if ($hinh <> "") 
		{
			$sql="UPDATE xh_dethi SET 
			tende = '".$tende."', 
			loaide = '".$loaide."', 
			capthi = '".$capthi."', 
			noidung = '".$noidung."',
			socau= '".$socau."', 
			thoigian ='".$thoigian."', 
			tacgia = '".$tacgia."', 
			khoi = '".$khoi."', 
			mon = '".$mon."', 
			hinhanh='".$hinh."',  
			hinhthuc = '".$chonthi."'   
			WHERE made = ".$idmade."";


			 mysql_query($sql);	
		}
		else
		{
			$sql="UPDATE xh_dethi SET 
			tende = '".$tende."', 
			loaide = '".$loaide."', 
			capthi = '".$capthi."', 
			noidung = '".$noidung."',
			socau= '".$socau."', 
			thoigian ='".$thoigian."', 
			tacgia = '".$tacgia."',
			khoi = '".$khoi."', 
			mon = '".$mon."',   
			hinhthuc = '".$chonthi."'   
			WHERE made = ".$idmade."";
			 mysql_query($sql);	
		}

		echo"<script>document.location.href='?menu=dethi_list_them_cauhoi' </script>";

	}
?>



