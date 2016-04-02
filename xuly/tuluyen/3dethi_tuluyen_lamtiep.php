<!-- chạy CountDown: <body onload="setCountDown();"> -->
<?php
session_start();
if(isset($_SESSION['username'])) 
{
				include("xuly/config/connect.php");
			$id=$_GET['made'];		
			$made=$_GET['made'];
			$demslthi=$_GET['lanthi'];
			$iUser=$_SESSION['id'];
			$tgbatdaulambai = date("Y-m-d H:i:s",$_SESSION['tgbatdau']); 

//Lấy dữ liệu bảng tổng hợp kết quả
		$layidkq12345 = mysql_query("SELECT * FROM xh_tonghopkq_tl WHERE idhs='$iUser' and made='$made' and lanthi='$demslthi' ");
		$laykqsd = mysql_fetch_array($layidkq12345);
		$idkq=$laykqsd['id'];
		$tgbatdau=$laykqsd['luutamgiobatdau'];
		$tgketthuc=$laykqsd['tgketthuc'];
		$laymade=$laykqsd['made'];
		$idiUser=$laykqsd['idhs'];
		$tgiandasudung=$laykqsd["tong_tgianlambai"];


		$_SESSION['lidketqua']=$idkq;			//Lấy id của bảng kết quả làm bài đưa sang xem kết quả
		$_SESSION['ltgbatdau']=$tgbatdau;
$_SESSION['laymade']=$made;	//Lấy mã đề cập nhật thông tin HS đã làm bài khi nộp bài
$_SESSION['layidhs']=$iUser; //Lấy ID cập nhật thông tin học sinh đã làm bài khi nộp bài
$_SESSION['demsolanthi']=$demslthi;
			
/*Cập nhật theo dõi học sinh đã làm bài
		$sqlktdlb="SELECT * FROM xh_ktbailam_tl WHERE made=".$made." and idhs=".$iUser." and lanthi=".$demslthi;
		$ktdalamb=mysql_query($sqlktdlb);
		if(mysql_num_rows($ktdalamb)==0)  { //nếu đã chưa cập nhật thì cập nhật còn k thì thôi
			$sql="INSERT INTO xh_ktbailam_tl (made,idhs, tgbatdau,lanthi) VALUES ('$made', '$iUser', '$tgbatdaulambai','$demslthi')";
			$rs=mysql_query($sql);
		}
*/



			$sql="select made, tende, thoigian,socau from xh_dethi where made='$id'";
			$query=mysql_query($sql);
			$row=mysql_fetch_array($query);
				$thoigian=$row["thoigian"];
				$tendethi=$row["tende"];
				$socau=$row["socau"];

//Tính thời gian làm bài đưa vào data
date_default_timezone_set('Asia/Ho_Chi_Minh');
$tglambai=$thoigian;						//Lấy thời gian đề thi

$tongtgian_conlai_giay = $tglambai*60 - $tgiandasudung;						//thời gian làm bài còn lại - giây
$tongtgian_conlai_phut = floor(($tglambai*60 - $tgiandasudung)/60);			//thời gian làm bài còn lại - phút
$tongtgian_conlai_giay_du = $tongtgian_conlai_giay - floor(($tglambai*60 - $tgiandasudung)/60)*60;			//thời gian làm bài còn lại dư


$dinhdang_ngaygio = "Y-m-d H:i:s";		
$dinhdang_ngaygio2 = "H:i:s _ d-m-Y";	

$doi_ngayhientai = time();			//Tính ngày tháng năm hiện bằng ra giây

$tgianbatdau=$tgbatdau;
$tgianketthuc=$tgketthuc - $tgiandasudung;

$doi_giay = $tgianketthuc - $doi_ngayhientai;



$ngay_conlai     = floor($doi_giay/60/60/24);
$gio_conlai    = floor(($doi_giay-($ngay_conlai*60*60*24))/60/60);
$phut_conlai = floor(($doi_giay-($ngay_conlai*60*60*24)-($gio_conlai*60*60))/60);
$giay_conlai = floor(($doi_giay-($ngay_conlai*60*60*24)-($gio_conlai*60*60))-($phut_conlai*60));


$namthangngay_ketthuc = date($dinhdang_ngaygio,$tgianketthuc); 
$namthangngay_hientai = date($dinhdang_ngaygio,$doi_ngayhientai); 
$namthangngay_baudau = date($dinhdang_ngaygio,$tgianbatdau);

$namthangngay_baudau2 = date($dinhdang_ngaygio2,$tgianbatdau); 
$namthangngay_ketthuc2 = date($dinhdang_ngaygio2,$tgianketthuc); 
$namthangngay_hientai2 = date($dinhdang_ngaygio2,$doi_ngayhientai); 


?>
<!---------------------------------Đếm ngược---------------------------------------------------->
<script type="text/javascript" src="..scripts/jquery-1.11.1.min.js"></script>
<script type="text/javascript">
	var days = <?php echo $ngay_conlai; ?>  
	var hours = <?php echo $gio_conlai; ?>  
	var minutes = <?php echo $phut_conlai; ?>  
	var seconds = <?php echo $giay_conlai; ?>  
function setCountDown ()
{
  seconds--;
  if (seconds < 0){
      minutes--;
      seconds = 59
  }
  if (minutes < 0){
      hours--;
      minutes = 59
  }
  if (hours < 0){
      days--;
      hours = 23
  }
//Hiện đếm ngược tại id="hiendemnguoc"
  document.getElementById("hiendemnguoc").innerHTML = days+" ngày, "+hours+" giờ, "+minutes+" phút, "+seconds+" giây";
  if((days < 0) ||(days = 0 && hours == 0 && minutes == 0 && seconds == 0)) {
	if(!alert("Thời gian theo quy định đã hết, Bạn có muốn làm tiếp không?")) {
//			$("#submitForm").submit();	//Thực hiện Submit tại Form có id = "submitForm"
	}
  } else {
	 setTimeout ( "setCountDown()", 1000 );
  }
 
}
</script>


<div style="top:5; background:#FC9; border:1px solid #93F; padding:5px 50px; text-align:center;">
	<td> Tên đề    : <?php echo $row["tende"];?></td><br>
	<td> Thời gian làm bài còn lại: <?php echo "$ngay_conlai ngày, $gio_conlai giờ, $phut_conlai phút, $giay_conlai giây";?></td>
</div>


<div id="demnguoc_than" style="position: fixed; right: 0; top: 40px; z-index: 30;" >
		<div id="tgianconlai">
			<p>Thời gian còn lại: </p>
		   <p id="hiendemnguoc"><?php echo "$ngay_conlai ngày, $gio_conlai giờ, $phut_conlai phút, $giay_conlai giây";?></p>
		</div>
		<div id="ghitgian">
		   <p>Thời gian bắt đầu: <?php echo $namthangngay_baudau2; ?></p>
		   <p >Thời gian kết thúc: <?php echo $namthangngay_ketthuc2; ?></p>
	<!--	   <p >Ngày giờ hiện tại:<?php echo $namthangngay_hientai2; ?></p> -->
		</div>
</div>
<!-----------------------------END Đếm ngược---------------------------------------------------->

<?php

//Cập nhật thời gian hiện tại vào data
	$sqltgnb="UPDATE  xh_tonghopkq_tl SET 
	tgnopbai ='".$namthangngay_hientai."'
	where id='".$idkq."' ";
	$rstgnb=mysql_query($sqltgnb);
?>



<?php
if(!isset($_POST['nopbai']))
{
	if($made)
	{
		//Lấy dữ liệu trong Database
		$query = mysql_query("SELECT made, thoigian FROM xh_dethi WHERE made = '$made'");
		$arr = mysql_fetch_array($query);
	}
?>

<?php if($arr){ ?>
<!----------------------------------------FORM bài làm ------------------------------------------------------------------->
<a style="font-size: 12px; font-style: italic; color: #ff0000; "><center>Lưu ý: Dùng dấu phẩy "," để ngăn cách phần thập phân; Nhập đáp số không được Enter xuống dòng </center></a></br>

<form action="index.php?page=tl_cn_kq_lamtiep" id = "submitForm" method="POST" name="frmdethi" enctype="multipart/form-data">
<!--action="index.php?page=xemkq"   action="xuly/layketquabailam.php"-->
	<table width="100%" border="">
		<thead>
			<tr>
				<th>Câu</th>
				<th>Nội dung</th>
				<th>Đáp số</th>
			</tr>
		</thead>

			<input type="hidden" name="count" value="3">
			<input type="hidden" name="idmade" id="idmade" value="<?php $id ?>">              
			<?php 				
				$i=0;
				$sql="SELECT * FROM xh_cauhoi WHERE made='$id'";
				$rs=mysql_query($sql);
				$count=mysql_num_rows($rs);
					
			$_SESSION['socauhoi']=$count; //Lấy tổng số câu hỏi
			?>
			<input type="hidden" name="count" id="count" value="<?php $count?>">
	<?php 
		$stt=1;
		if(mysql_num_rows($rs) == "")
		{
			echo "<tr><td colspan=5 align=center>Dữ liệu đang được cập nhật</td></tr>";
		}
		 else if($count>0)
		{
			while($rows=mysql_fetch_array($rs))
			{
				if($stt==0)
				{
					echo "<tr bgcolor='#CCCCCC'></tr>";
				}
				else
				{
					"<tr bgcolor='#0000FF'></tr>";	
				}
				$i++;

					$noidung=str_replace('../', "",$rows['noidung']);	
					$made=$rows['made'];
					$macau=$rows['id'];
					$huongdan=$rows['huongdan'];

//Lấy kết quả làm bài trước đó:
$query_dalam = mysql_query("SELECT * FROM xh_kqbailam_tl WHERE idhs = '$iUser' and made = '$made' and lanthi='$demslthi' and macau='$macau' ");
$kqdalam = mysql_fetch_array($query_dalam);
$kqchon=$kqdalam['kqchon'];
	?>


        <tbody>

				<tr style="color:#00F; background:#FCF;">
					<td width="8%"> 
						Câu: <?php echo "$i"; ?>
						<input name="macau[]" type="hidden" readonly="readonly" value="<?php echo $macau; ?>" />
					</td>
					<td  width="60%">
						<?php echo "$noidung"; ?>
						<a href="#" class="icon help">?<span class="tooltip center mustard"><?php echo $huongdan; ?></span></a>
					</td>
					<td> <textarea name="dapso[]" value="" style= "width: auto; height: 30px; scroll: auto;" ><?php echo $kqchon; ?></textarea> 
					</td>
				</tr>
        </tbody>

		<?php
		$stt++;
		} //end while

	}
		?>
	</table>
	<div align = "center"><input type="submit" name="nopbai" class="nut_cam cssnut" value="Nộp bài" style="z-index:99; text-align:center; " /></div>
</form>



<!--Khung đếm thời gian-->
	<div style="position:fixed; left:0; top:0; background: transparent; border: 0px solid #93F; padding:10px 0px; text-align:center;">
		<div style="padding:1px; text-align:center; color: #ff0000; font-weight:bold;">Thời gian:: <?php echo "$thoigian"; ?></td> phút</div>
			<div style="padding:0; color: #ff0000;">
<!--				<input type="text" disabled name="txtTime" id="txtTime" size="5"  style="text-align:center; color: #6600ff; font-weight:bold;"/>-->
			</div>
	</div>
<!--End đếm thời gian-->

	<?php }?>
<?php
}	
?>



<?php
} //end if isset

	else { echo"<script>document.location.href='?page=thong_bao' </script>"; }
?>

