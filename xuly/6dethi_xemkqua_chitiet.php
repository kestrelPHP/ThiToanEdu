<link rel="stylesheet" type="text/css" href="css/style.css"/>

<?php
session_start();
include("config/connect.php");
$layidhs=$_SESSION['id'];
$laymade=$_SESSION['laymade'];
$idkq=$_SESSION['layidkq'];
$tongdiem=$_SESSION['laytongdiem'];

$i=0;

echo "Kết quả hi tiết làm bài của ".$_SESSION['hoten']." là: "."<br>";

?>
    <table cellpadding="1" cellspacing="1" id="resultTable">
			<thead>
				<tr>
					<th>câu</th>
                    <th>Nội dung</th>
					<th>Đáp án</th>
					<th>Kết quả chọn</th>
				</tr>
			</thead>
<?php
//Lấy dữ liệu tổng hợp

		$laykqct = mysql_query("SELECT * FROM xh_kqbailam");
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
					<td><?php echo $dapan; ?></td>
					<td><?php echo $kqchon; ?></td>
			</tr>
<?php }?>
			<tr>
				<th colspan="5"><div align ="center"> <?php echo "Tổng điểm: ". $tongdiem; ?></div></th>
			</tr>
    </table>

<!-- <div align ="center"><a href="?page=kq_chitiet=<?php echo $row['made'];?>"></div>-->


