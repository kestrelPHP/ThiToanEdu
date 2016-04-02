<?php
session_start();
if(isset($_SESSION['username'])) 
{
include("config/connect.php");
			$id=$_GET['made'];		
			$made=$_GET['made'];
			$iUser=$_SESSION['id'];

			
			/*Kiem tra bai lam da lam chua ----------------------------------------------------- */
			$sql="SELECT * FROM xh_ktbailam WHERE made=".$made." and idhs=".$iUser;
			$rs=mysql_query($sql);
			if(mysql_num_rows($rs)>0)
				{
				echo "<script>location.href='./index.php?page=error';</script>";
				}
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

$tinh_tongtgianlambai = $doi_ngayketthuc - $doi_ngayhientai; //Tính bằng giây
$ngay_conlai	= floor($tinh_tongtgianlambai/60/60/24);
$gio_conlai	=floor(($tinh_tongtgianlambai-($ngay_conlai*60*60*24))/60/60);	//đổi ra giờ
$phut_conlai	=floor(($tinh_tongtgianlambai - ($ngay_conlai*60*60*24)-($gio_conlai*60*60))/60);	//đổi ra phút
$giay_conlai	=floor(($tinh_tongtgianlambai-($ngay_conlai*60*60*24)-($gio_conlai*60*60))-($phut_conlai*60));	//đổi ra giây
		$ktraidtonghopkq = mysql_query("SELECT * FROM xh_tonghopkq WHERE idhs='$iUser' and made='$made' ");
		$laydltonghopkq = mysql_fetch_array($ktraidtonghopkq);
		$demdulieu=mysql_num_rows($ktraidtonghopkq);
		if ($demdulieu==0) {
						$sql2="INSERT INTO xh_tonghopkq(idhs, made, tgbatdau,tgketthuc,luutamgiobatdau)
						VALUES ('$iUser','$made','$tg_batdaulambai','$doi_ngayketthuc','$doi_ngayhientai')";
						$query2=mysql_query($sql2);
		} else {
//Nếu đã tồn tại thì Cập nhật tiếp tục các số liệu:
		$idkq1=$laydltonghopkq['id'];
				$sqltgnb="UPDATE  xh_tonghopkq SET 
				tgbatdau ='".$tg_batdaulambai."',
				tgketthuc ='".$doi_ngayketthuc."',
				luutamgiobatdau ='".$doi_ngayhientai."'
				where id='".$idkq1."' ";
				$rstgnb=mysql_query($sqltgnb);
		}

//Lấy ID tổng hợp kết quả
		$layidkq12345 = mysql_query("SELECT * FROM xh_tonghopkq WHERE id='".$idkq1."' ");
		$laykqsd = mysql_fetch_array($layidkq12345);
		$idkq=$laykqsd['id'];
		$tgbatdau=$laykqsd['luutamgiobatdau'];
		$tgketthuc=$laykqsd['tgketthuc'];
		$laymade=$laykqsd['made'];
		$idiUser=$laykqsd['idhs'];


//Lấy thời gian tính toán trên đưa vào đếm ngược
?>
<div style="top:5; background:#FC9; border:1px solid #93F; padding:5px 50px; text-align:center;">
	<td> Tên đề    : <?php echo $row["tende"];?></td><br>
	<td> Thời gian : <?php echo $row["thoigian"];?></td> phút
</div>

<div id="demnguoc_content">
	<table class="countTable">
		
	   <tr><td>Ngày giờ bắt đầu làm bài:</td><td><?php echo $namthangngay_hientai; ?></td></tr>
	   <tr><td>Ngày giờ hết thời gian làm bài:</td><td><?php echo $namthangngay_ketthuc; ?></td></tr>
   </table>
</div>


<div align="center" style="padding: 0px 0 0px 5px;">
	<a href="?page=dethi&made=<?php echo $made; ?>">
		<img  height=50px width=180px src="images/submit.png">
	</a>
</div>
<div class="footer2">
	-Lưu ý: Nếu đồng ý làm bài hãy bấm nút "Vào thi" ở trên để bắt đầu; Thời gian làm bài và kết thúc được tính ngay tại thời điểm này, cụ thể theo thông tin ở trên<br>
	-Khi đã chấm nhận "Vào thi" hệ thống sẽ lưu trữ thông tin các em "đã thi đề thi này" và như thế sẽ không được phép thi lại lần 2<br>
	-Nếu các em đã ở lại trang này quá lâu thì như thế sẽ thiệt thòi về thời gian làm bài; để tránh bị thiệt về thời gian, các em hãy nhanh chóng bấm "Vào thi" hoặc trước khi bấm "Vào thi" các em hãy bấm phím "F5" (refresh) để cập nhật lại thời gian tính giờ làm bài. <br>

</div>

<?php
} //end if isset

	else { echo"<script>document.location.href='?page=thong_bao' </script>"; }
?>










