<link rel="stylesheet" type="text/css" href="css/style.css"/>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

<?php
include("config/connect.php");
if (isset($_POST['xemketqua']))
{


$idhs=$_POST['gidhs'];
$hoten=$_POST['ghoten'];
$lop=$_POST['glop'];
$truong=$_POST['gtruong'];
$made=$_POST['laymade'];
$i=0;

//Lấy tên đề thi
		$laydethi = mysql_query("SELECT * FROM xh_dethi WHERE made='$made'");
		$dethi = mysql_fetch_array($laydethi);
		$tende=$dethi['tende'];



//Lấy kết quả tổng hợp
		$laykqth = mysql_query("SELECT * FROM xh_tonghopkq WHERE idhs='$idhs' and made='$made'");
		$th = mysql_fetch_array($laykqth);
			$socau=$th['socau'];
			$socaudung=$th['socaudung'];
			$tongdiem=$th['tongdiem'];
			$tgbatdau=$th['tgbatdau'];
			$tgnopbai=$th['tgnopbai'];
			$thoigian=$th['thoigian'];
			$kqua=$th['kqua'];
			$sluong=mysql_num_rows($laykqth);
if ($sluong<>0)
{

//-------------------------------------------------------------------------------------------------


?>
		<table cellpadding="1" cellspacing="1" id="resultTable">
			<thead>
				<tr>
					<td>câu hỏi</td>
                    <td>Nội dung câu hỏi</td>
					<td>Kết quả học sinh chọn</td>
				</tr>
			</thead>
<?php
//Lấy kết quả chi tiết
		$laykqct = mysql_query("SELECT * FROM xh_kqbailam WHERE idhs='$idhs' and made='$made'");
		while($ct = mysql_fetch_array($laykqct))
		{
				$macauhoi=$ct['macau'];
				$kqchon=$ct['kqchon'];
				$diem=$ct['chamdiem'];
				$i++;
		//Lấy nội dung câu hỏi tại mã câu
		$layndch = mysql_query("SELECT * FROM xh_cauhoi WHERE id='$macauhoi' ");
		$ch = mysql_fetch_array($layndch);
				$noidung=$ch['noidung'];
				$dapan=$ch['dapan'];
?>

			<tr class="teacher">
					<td><?php echo $i; ?></td>
                    <td><?php echo $noidung; ?></td>
					<td><?php echo $kqchon; ?></td>
			</tr>
	<?php }?>
    </table>
<!-- <div align ="center"><a href="?page=kq_chitiet=<?php echo $row['made'];?>"></div>-->
<!--Thống kê tổng hợp kết quả làm bài-->
    <table cellpadding="1" cellspacing="1" id="resultTable">
				<tr>
					<th colspan="2"><div align ="center"> <?php echo "TỔNG HỢP KẾT QUẢ CỦA HỌC SINH: ". $hoten; ?></div></td>
				</tr>
				<tr>
					<th colspan="2"><div align ="center"> <?php echo "Nội dung đề: ". $tende; ?></div></td>
				</tr>
				<tr>
					<td>IDHS</td>
                    <td><?php echo $idhs; ?></td>
				</tr>

				<tr>
					<td>Họ tên</td>
                    <td><?php echo $hoten; ?></td>
				</tr>

				<tr>
					<td>Lớp</td>
                    <td><?php echo $lop; ?></td>
				</tr>

				<tr>
					<td>Trường</td>
                    <td><?php echo $truong; ?></td>
				</tr>

				<tr>
					<td>Mã đề đã làm</td>
                    <td><?php echo $made; ?></td>
				</tr>

				<tr>
					<td>Tổng số câu</td>
                    <td><?php echo $socau; ?></td>
				</tr>

				<tr>
					<td>Số câu làm đúng</td>
                    <td><?php echo $socaudung; ?></td>
				</tr>

				<tr>
					<td>Thời gian bắt đầu làm</td>
                    <td><?php echo $tgbatdau; ?></td>
				</tr>

				<tr>
					<td>Thời gian nộp bài</td>
                    <td><?php echo $tgnopbai; ?></td>
				</tr>

				<tr>
					<td>Tổng thời gian làm bài</td>
                    <td><?php echo $thoigian; ?></td>
				</tr>

				<tr>
					<td>Kết quả</td>
                    <td><?php echo $kqua; ?></td>
				</tr>
			</table>




<?php 
}	//end if kiểm tra đã làm
	else { echo"<script>document.location.href='?page=ktimthaybl' </script>"; }
} //end if isset
?> 

