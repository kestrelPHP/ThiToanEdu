<link rel="stylesheet" type="text/css" href="css/style.css"/>

<?php
session_start();
				include("xuly/config/connect.php");
$layidhs=$_SESSION['layidhs'];
$laymade=$_SESSION['laymade'];
$idkq=$_SESSION['layidkq'];
$tongdiem=$_SESSION['laytongdiem'];
$solanthi=$_SESSION['dsolanthi'];

$i=0;

echo "Kết quả chi tiết làm bài của ".$_SESSION['hoten']." ở lần thi " .$solanthi." là: "."<br>";

include_once('xuly/tooltip/goi_tooltip.php'); // <!--Gọi tooltip database-->

?>
    <table cellpadding="1" cellspacing="1" id="resultTable">
			<thead>
				<tr>
					<th>câu</th>
                    <th>Nội dung</th>
					<th>Chi tiết</th>

				</tr>
			</thead>
<?php
//Lấy dữ liệu tổng hợp

		$laykqct = mysql_query("SELECT * FROM xh_kqbailam_tl WHERE idhs='$layidhs' and made='$laymade' and lanthi='$solanthi' ");
		while($ct = mysql_fetch_array($laykqct))
{
		$macauhoi=$ct['macau'];
		$kqchon=$ct['kqchon'];
		$diem=$ct['chamdiem'];
		$i++;
//Lấy nội dung câu hỏi tại mã câu
$layndch = mysql_query("SELECT * FROM xh_cauhoi WHERE id='$macauhoi' ");
$ch = mysql_fetch_array($layndch);
		$noidung=str_replace('../', "",$ch['noidung']);
		$dapan=$ch['dapan'];
?>

			<tr class="teacher">
					<td><?php echo $i; ?></td>
                    <td><?php echo $noidung; ?></td>
			<td><a href="#" onmouseover="tooltip.pop(this, '<?php echo '#'.$i; ?>', {position:1, offsetX:-20, effect:'slide', sticky: true})">Xem</a>
				<?php include('xuly/tooltip/xemdapan.php');?>
			</td>

			</tr>
<?php }?>
			<tr>
				<th colspan="5"><div align ="center"> <?php echo "Tổng điểm: ". $tongdiem; ?></div></th>
			</tr>
    </table>

<!-- <div align ="center"><a href="?page=kq_chitiet=<?php echo $row['made'];?>"></div>-->



