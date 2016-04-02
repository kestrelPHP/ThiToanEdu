<link rel="stylesheet" href="febe/style.css" type="text/css" media="screen" charset="utf-8">
<?php
include('config.php');
if(isset($_POST["ok"]))
{
		$made=$_POST['lmade'];
		$idcauhoi=$_POST['idcauhoi'];
		$loaide=$_POST['loaide'];
		$mon=$_POST['mon'];
		$khoi=$_POST['khoi'];
		$noidung=$_POST['noidung'];
		$huongdan=$_POST['huongdan'];
		$dapan=strip_tags(str_replace(" ", "",$_POST['dapan']));
		$diem=$_POST['diem'];
		$duyetde=$_POST['duyetde'];
		$mucdo=$_POST['mucdocauhoi'];



	//// la bi sao h han ko update dc do T, van giu nguyen kq do h H thu lai di/ rang han luu a, b rua T he. a b dau H
	 $sql="UPDATE  xh_cauhoi SET 
	made =  '".$made."',
	loaide =  '".$loaide."',
	mon =  '".$mon."',
	khoi =  '".$khoi."',
	noidung ='".$noidung."',
	huongdan ='".$huongdan."',
	dapan ='".$dapan."',
	diem ='".$diem."',
	duyetde ='".$duyetde."',
	mucdo ='".$mucdo."'
	where id='".$idcauhoi."' ";
	
	$rs=mysql_query($sql);
	//echo $sql;
	echo"<script>document.location.href='?menu=dethi_cauhoilist&made=$made' </script>";
}
?>