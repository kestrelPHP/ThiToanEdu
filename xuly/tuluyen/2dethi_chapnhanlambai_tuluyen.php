<div id="chapnhantl">
<?php
session_start();
if(isset($_SESSION['username'])) 
{
				include("xuly/config/connect.php");
			$id=$_GET['made'];		
			$made=$_GET['made'];
			$iUser=$_SESSION['id']; //idhs
			$_SESSION['lmade']=$made;			

			
	/*Kiem tra bai lam da lam chua, đếm số lần đã thi  */
	$sql="SELECT * FROM xh_ktbailam_tl WHERE made=".$made." and idhs=".$iUser;
	$rs=mysql_query($sql);
	$demslthi=mysql_num_rows($rs);
	$solanthimoi=$demslthi+1;
	$_SESSION['dem_slthi']=$demslthi;
	if ($demslthi>=3) {	echo "<script>location.href='./index.php?page=tb_quasolanthi';</script>";} //chỉ được thi 3 lần
?>
	<div align="center" style="top:10; background:#CCC; border:1px solid #93F; padding:5px 100px; text-align:center; margin:10px;">
		<?php echo "Bạn đã thi: ".$demslthi." lần. "."</br>"; ?>
		<a style="font-size:15px;" align="center">Để tiếp tục thi, bấm nút Vào thi!</a></br>
		<a style="font-size:15px;" align="center">Lưu ý: Bạn chỉ được phép thi tự luyện 3 lần</a></br>

	</div>
<?php


//			elseif { echo "<script>location.href='./index.php?page=error';</script>";

//				else	// Cập nhật thông tin đã làm bài /////////////////////////////////////////
//					{
//						$sql="INSERT INTO xh_ktbailam (made,idhs) VALUES ('$made', '$iUser')";
//						$rs=mysql_query($sql);
//					}

				$query=mysql_query("SELECT made, tende, thoigian,socau FROM xh_dethi where made='$id'");
				$row=mysql_fetch_array($query);
					$thoigian=$row["thoigian"];
					$tendethi=$row["tende"];
					$socau=$row["socau"];
					$thoigian_giay=$thoigian*60;

//Tính thời gian làm bài đưa vào bảng tổng hợp kết quả
date_default_timezone_set('Asia/Ho_Chi_Minh');
$tglambai=$thoigian;						//Nhập thời gian làm bài tính bằng phút
$dinhdang_ngaygio = "H:i:s _ d-m-Y";	//Định dạng cho ngày giờ
$dinhdang_ngaygio2 = "Y-m-d H:i:s";	//Định dạng cho ngày giờ

$doi_ngayhientai = time();			//Tính ngày tháng năm hiện bằng ra giây
$doi_ngayketthuc = $doi_ngayhientai + $tglambai*60;

$tg_batdaulambai = date($dinhdang_ngaygio2,$doi_ngayhientai);		//Ngày hiện tại

$namthangngay_hientai = date($dinhdang_ngaygio,$doi_ngayhientai);		//Ngày hiện tại
$namthangngay_ketthuc = date($dinhdang_ngaygio,$doi_ngayketthuc);			//Ngày mục tiêu

$tinh_tongtgianlambai = $doi_ngayketthuc - $doi_ngayhientai;	//tổng thời gian làm bài 


$ngay_conlai	= floor($tinh_tongtgianlambai/60/60/24);
$gio_conlai	=floor(($tinh_tongtgianlambai-($ngay_conlai*60*60*24))/60/60);	//đổi ra giờ
$phut_conlai	=floor(($tinh_tongtgianlambai - ($ngay_conlai*60*60*24)-($gio_conlai*60*60))/60);	//đổi ra phút
$giay_conlai	=floor(($tinh_tongtgianlambai-($ngay_conlai*60*60*24)-($gio_conlai*60*60))-($phut_conlai*60));	//đổi ra giây
//Cập nhật tạm vào data:
		$ktraidtonghopkq = mysql_query("SELECT * FROM xh_tonghopkq_tl WHERE idhs='$iUser' and made='$made' and lanthi='$solanthimoi' ");
		$laydltonghopkq = mysql_fetch_array($ktraidtonghopkq);
		$demsolanthi=mysql_num_rows($ktraidtonghopkq);
		if ($demsolanthi==0) {
						$sql2="INSERT INTO xh_tonghopkq_tl(idhs, made, tgbatdau,tgketthuc,luutamgiobatdau,lanthi)
						VALUES ('$iUser','$made','$tg_batdaulambai','$doi_ngayketthuc','$doi_ngayhientai','$solanthimoi')";
						$query2=mysql_query($sql2);
		} else {
//Nếu đã tồn tại thì Cập nhật tiếp tục các số liệu:
		$idkq1=$laydltonghopkq['id'];
				$sqltgnb="UPDATE  xh_tonghopkq_tl SET 
				tgbatdau ='".$tg_batdaulambai."',
				tgketthuc ='".$doi_ngayketthuc."',
				luutamgiobatdau ='".$doi_ngayhientai."'
				where id='".$idkq1."' ";
				$rstgnb=mysql_query($sqltgnb);
		}

//Lấy thời gian tính toán trên đưa vào đếm ngược
?>

<div style="top:5; background:#FC9; border:1px solid #93F; padding:5px 50px; text-align:center;">
	<td> Tên đề    : <?php echo $row["tende"];?></td><br>
	<td> Thời gian : <?php echo $row["thoigian"];?></td> phút
</div>

<div id="demnguoc_content">
	Ngày giờ bắt đầu làm bài: <?php echo $namthangngay_hientai; ?> <br>
	Ngày giờ hết thời gian làm bài: <?php echo $namthangngay_ketthuc; ?> <br>
</div>

<div id="submit_tl" >
	<div align="center" style="width:50%; 	float:left;">
		<a href="?page=tl_dethi&made=<?php echo $made; ?>&lanthi=<?php echo $solanthimoi; ?>">
			<img  height=50px width=180px src="images/thimoi.png">
		</a>
	</div>

	<div align="center" style="width:50%; 	float: right;">
		<a href="?page=tl_dethi_capnhattgianlamlai&made=<?php echo $made; ?>&lanthi=<?php echo $demslthi; ?>">
			<img  height=50px width=180px src="images/lamlai.png">
		</a>
	</div>
</div>

<div id="footer_tl">
	-Lưu ý: Nếu muốn thi mới hãy bấm nút "Thi mới" ở trên để bắt đầu; Thời gian làm bài và kết thúc được tính theo thông tin ở trên tuy nhiên thời gian tự luyện được tính để bạn tham khảo<br>
	-Nếu muốn thi tiếp bài thi cũ bấm nút "Làm lại". Bạn chỉ được phép thi tự luyện 3 lần (không tính lần làm lại)<br>
</div>

<?php
} //end if isset

	else { echo"<script>document.location.href='?page=thong_bao' </script>"; }
?>


</div>







