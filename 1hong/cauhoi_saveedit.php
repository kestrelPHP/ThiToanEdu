<link rel="stylesheet" href="febe/style.css" type="text/css" media="screen" charset="utf-8">
<?php
include('config.php');
if(isset($_POST["ok"]))
{
	$idcauhoi=$_POST['idcauhoi'];

	  $noidung=$_POST['noidung'];
	  $huongdan=$_POST['huongdan'];
	  $dapan=strip_tags(str_replace(" ", "",$_POST['dapan']));
	  $diem=$_POST['diem'];
	  $made=$_POST['made'];
	  $duyetde=$_POST['duyetde'];
	  $mucdoch=$_POST['mucdocauhoi'];



	
	//// la bi sao h han ko update dc do T, van giu nguyen kq do h H thu lai di/ rang han luu a, b rua T he. a b dau H
	 $sql="UPDATE  xh_cauhoi SET 
	made =  '".$made."',
	noidung ='".$noidung."',
	huongdan ='".$huongdan."',
	dapan ='".$dapan."',
	diem ='".$diem."',
	duyetde ='".$duyetde."',
	mucdo ='".$mucdoch."'
	where id='".$idcauhoi."' ";
	
	$rs=mysql_query($sql);
	//echo $sql;
	echo"<script>document.location.href='?menu=cauhoi_list' </script>";
}
?>