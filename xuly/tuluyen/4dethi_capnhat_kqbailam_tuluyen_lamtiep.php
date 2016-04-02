<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>LÊ XUÂN HÔNG</title>
<style type="text/css">
.style1 {
	font-size: 18px;
	font-weight: bold;
	color: #FF0000;
}
</style>
 </head>


<body>
<?php
//Triệu gọi các trang khai báo database
session_start();
				include("xuly/config/connect.php");

/*Tính số câu đúng*/
				/*Cập nhật học sinh đã làm bài*/
				$layidhs=$_SESSION['layidhs'];
				$laymade=$_SESSION['laymade'];
				$solanthi=$_SESSION['demsolanthi'];
				$tongsocauhoi=$_SESSION['socauhoi']; //Lấy tổng số câu hỏi
//				$capnhatdalambai="INSERT INTO xh_ktbailam (made,idhs) VALUES ('$laymade', '$layidhs')";  //Cập nhật vào bảng theo dõi đã thi
//				$dalam=mysql_query($capnhatdalambai);
				/*-------------------------------------------------------------------------------*/
echo "mã đề".$laymade."<br>";
echo "ID học sinh".$layidhs."<br>";
echo "tổng câu hỏi".$tongsocauhoi."<br>";

//Gán số nhập vào cho $dapso
$dapso = $_POST['dapso']; // lay du lieu tu cai checkbox
$laymacau = $_POST['macau']; // lay du lieu tu cai checkbox
$tongdiem=0;
$demcaudung=0;
	//Cập nhật dữ liệu vào kết quả làm bài
	for($i=1;$i<=$tongsocauhoi;$i++)
	{
		$kqchon = strip_tags(str_replace(" ", "",$dapso[$i-1]));  //lấy các ô đáp số và bỏ hết các thẻ html bằng strip_tags
		$macau = $laymacau[$i-1];  //lấy mã câu hỏi


		//Gọi bảng câu hỏi để lấy đáp án, so sánh, chấm điểm
		$xemdapan=mysql_query("select * from xh_cauhoi where id = $macau"); 
		while($xemda=mysql_fetch_array($xemdapan))

			{
			$dapan=$xemda["dapan"];
			$diem=$xemda["diem"];
			}
			if (strcasecmp($kqchon,$dapan)==0) { 
				$chamdiem=$diem;
				$tongdiem=$tongdiem+$chamdiem;
				$demcaudung=$demcaudung+1;
				} else { $chamdiem=0;} 
echo "cau".$i."--"."Mã câu:".$macau."<br>";
echo "Đáp án".$dapan."<br>";
echo "Kết quả chọn".$kqchon."<br>";
			
/*	$ghikq="insert into xh_kqbailam_tl(idhs,made,macau,kqchon,chamdiem,lanthi) values('".$layidhs."','".$laymade."','".$macau."','".$kqchon."','".$chamdiem."','".$solanthi."')";
	$thuchienghikq=mysql_query($ghikq);
*/

	$ghikq="UPDATE  xh_kqbailam_tl SET 
	kqchon ='".$kqchon."',
	chamdiem ='".$chamdiem."'
	where idhs='".$layidhs."' and made='".$laymade."' and macau='".$macau."' and lanthi='".$solanthi."' ";
	$bdghikq=mysql_query($ghikq);

	}

//-----------------------------------------------------------------------------------------


//Cập nhật kết quả vào bảng tổng hợp------------------------------------------
date_default_timezone_set('Asia/Ho_Chi_Minh');
$dinhdang_ngaygio = "Y-m-d H:i:s";	//Định dạng cho ngày giờ
$thoigianbatdau=$_SESSION['ltgbatdau'];
$doi_ngayhientai = time();			//Tính ngày tháng năm hiện bằng ra giây
$tinh_tongtgianlambai = $doi_ngayhientai - $thoigianbatdau; //Tính bằng giây

$doiragio=floor($tinh_tongtgianlambai/3600);	//đổi ra giờ
$doiraphut=floor(($tinh_tongtgianlambai - ($doiragio*3600))/60);	//đổi ra phút
$doiragiay=floor(($tinh_tongtgianlambai-($doiragio*3600)) -($doiraphut*60));	//đổi ra giây

$tinh_tongsophut=floor($tinh_tongtgianlambai/60);	//đổi ra chỉ tính phút
$_SESSION['laysophutlambai']=$tinh_tongsophut;		//Lấy tổng số phút đã làm để so sánh thời gian của đề thi

//$doirangay	= floor($tinh_tongtgianlambai/60/60/24);
//$doiragio	=floor(($tinh_tongtgianlambai-($doirangay*60*60*24))/60/60);	//đổi ra giờ
//$doiraphut	=floor(($tinh_tongtgianlambai - ($doirangay*60*60*24)-($doiragio*60*60))/60);	//đổi ra phút
//$doiragiay	=floor(($tinh_tongtgianlambai-($doirangay*60*60*24)-($doiragio*60*60))-($doiraphut*60));	//đổi ra giây




$tgdasudung=$doiragio. ":" . $doiraphut . ":" . $doiragiay;
$thoigianhientai=date($dinhdang_ngaygio,$doi_ngayhientai);

		//Tính % số câu đúng và đánh giá đạt hay không
			$gantinh=round(($demcaudung/$tongsocauhoi)*100,1);
			if ($gantinh>=90) { $gkqua ="Giỏi";}
			elseif (70<=$gantinh and $gantinh<90) { $gkqua ="Khá";}
			elseif (50<=$gantinh and $gantinh<70) { $gkqua ="Trung bình";}
			else {$gkqua ="Không đạt";}

$idkq=$_SESSION['lidketqua']; 
	$sqltgnb="UPDATE  xh_tonghopkq_tl SET 
	socau ='".$tongsocauhoi."',
	socaudung ='".$demcaudung."',
	tongdiem ='".$tongdiem."',
	thoigian ='".$tgdasudung."',
	tgnopbai ='".$thoigianhientai."',
	kqua ='".$gkqua."',
	tong_tgianlambai='".$tinh_tongtgianlambai."',
	lanthi ='".$solanthi."'
	where id='".$idkq."' ";
	$rstgnb=mysql_query($sqltgnb);

echo "Tổng số câu hỏi".$tongsocauhoi."<br>";
echo "Tổng điểm".$tongdiem."<br>";
echo "Số câu đúng".$demcaudung."<br>";








//Lấy thông tin qua trang xem KQ
$_SESSION['idhs']=$layidhs;
$_SESSION['ganmade']=$laymade;
$_SESSION['idkq']=$idkq;
$_SESSION['dsolanthi']=$solanthi;

echo"<script>document.location.href='?page=tl_xem_kq' </script>";
?>

