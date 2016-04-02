<?php
include('config.php');

if(isset($_POST["edit"]))
{
		
	$idNews = $_POST["idNews"];
	$tieude=$_POST['tieude'];
	$tomtat=$_POST['tomtat'];
	$chitiet=$_POST['chitiet'];
	$trangthai=$_POST['trangthai'];
	$linhvuc=$_POST['linhvuc'];

	if(!isset($_FILES["fileimg"]["name"]))
	{
		$hinh1=$_POST['imgfile'];	
	}
	else
	{
		move_uploaded_file($_FILES["fileimg"]["tmp_name"],"../upload/images/news/".$_FILES["fileimg"]["name"]);	
		$hinh1=$_FILES["fileimg"]["name"];
	}

//Kiểm tra ảnh lấy từ đâu
		$link1=$_POST['img_link'];	
		$link2=$hinh1;

		if($link1<>"")
			{ $hinh=$link1;} else { $hinh=$link2;}




	if ($hinh <> "") 
	{
		 $sql="UPDATE xh_tintuc SET 
		 tieude = '".$tieude."' , 
		 tomtat ='".$tomtat."', 
		 chitiet ='".$chitiet."' ,
		 trangthai ='".$trangthai."' , 
		 hinhanh = '".$hinh."', 
		 linhvuc = '".$linhvuc."' 
		 WHERE id = ".$idNews;
		 mysql_query($sql);
	}
	else
	{
		$sql="UPDATE xh_tintuc SET 
		tieude = '".$tieude."' , 
		tomtat ='".$tomtat."', 
		chitiet ='".$chitiet."' ,
		trangthai ='".$trangthai."',
		 linhvuc = '".$linhvuc."' 
		WHERE id = ".$idNews;
		mysql_query($sql);			
	}
	echo"<script>document.location.href='?menu=tintuc_list' </script>";	
}
?>