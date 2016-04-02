<link rel="stylesheet" type="text/css" href="css/style.css"/>

<?php
session_start();
				include("xuly/config/connect.php");
$layidhs=$_SESSION['idhs'];
$laymade=$_SESSION['ganmade'];
$idkq=$_SESSION['idkq'];
$solanthi=$_SESSION['dsolanthi'];

echo "id kết quả".$idkq."<br>";

echo "Kết quả làm bài của ".$_SESSION['user']." là: "."<br>";
//Lấy dữ liệu tổng hợp
		$laykqth = mysql_query("SELECT * FROM xh_tonghopkq_tl WHERE id='$idkq' and lanthi='$solanthi' ");
		$tonghopkq = mysql_fetch_array($laykqth);
		$socau=$tonghopkq['socau'];
		$socaudung=$tonghopkq['socaudung'];
		$tongdiem=$tonghopkq['tongdiem'];
		$tgbatdau=$tonghopkq['tgbatdau'];
		$tgnopbai=$tonghopkq['tgnopbai'];
		$tongthoigian=$tonghopkq['thoigian'];
		$kqua=$tonghopkq['kqua'];
		$xephang=$tonghopkq['xephang'];




?>

<table cellpadding="1" cellspacing="1" id="resultTable">
  <tr>
    <td>ID học sinh:</td>
    <td><?php echo  $layidhs; ?></td>
  </tr>
  <tr>
    <td>Mã đề:</td>
    <td><?php echo $laymade; ?></td>
  </tr>
  <tr>
    <td>Số câu đã làm:</td>
    <td><?php echo $socau; ?></td>
  </tr>
  <tr>
    <td>Số câu đúng:</td>
    <td><?php echo $socaudung; ?></td>
  </tr>
  <tr>
    <td>Tổng điểm:</td>
    <td><?php echo $tongdiem; ?></td>
  </tr>
  <tr>
    <td>Thời gian bắt đầu làm bài:</td>
    <td><?php echo $tgbatdau; ?></td>
  </tr>
  <tr>
    <td>Thời gian nộp bài:</td>
    <td><?php echo $tgnopbai; ?></td>
  </tr>
  <tr>
    <td>Tổng thời gian làm bài (giờ:Phút:Giây):</td>
    <td><?php echo $tongthoigian; ?></td>
  </tr>
  <tr>
    <td>Kết quả:</td>
    <td><?php echo $kqua; ?></td>
  </tr>
  <tr>
    <td>Xếp hạng:</td>
    <td><?php echo $xephang; ?></td>
  </tr>
</table>
<div align ="center"><a href="?page=tl_kq_chitiet">Xem chi tiết kết quả làm bài</a></div>


<?php
//Lấy thông tin qua trang xem KQ
$_SESSION['layidhs']=$layidhs;
$_SESSION['laymade']=$laymade;
$_SESSION['layidkq']=$idkq;
$_SESSION['laytongdiem']=$tongdiem;
$_SESSION['dsolanthi']=$solanthi;

?>


