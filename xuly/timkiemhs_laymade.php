<link rel="stylesheet" type="text/css" href="css/style.css"/>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
//session_start();
include("config/connect.php");
$idhs=$_GET['idhs'];
?>
<?php
//Lấy thông tin học sinh
		$laythongtinhs = mysql_query("SELECT * FROM xh_hocsinh WHERE idhs='$idhs' ");
		$laytt = mysql_fetch_array($laythongtinhs);
		$hoten=$laytt['hoten'];
		$lop=$laytt['lop'];
		$truong=$laytt['truong'];

echo "Bạn hãy chọn đề thi đã làm của học sinh có tên là: ".$hoten."- Lớp: ".$lop."- Trường ".$truong."<br>";

?>
<form action="index.php?page=xem_kqthi" method="POST" name="frmdethi" id="frmdethi" enctype="multipart/form-data">
  <input type="hidden" name="gidhs" id="idmade" value="<?php echo $idhs; ?>">              
  <input type="hidden" name="ghoten" id="idmade" value="<?php echo $hoten; ?>">              
  <input type="hidden" name="glop" id="idmade" value="<?php echo $lop; ?>">              
  <input type="hidden" name="gtruong" id="idmade" value="<?php echo $truong; ?>">              
		<select name="laymade" id="laymade" class="tendethi">
			<?php
				$sql = 'select * from xh_dethi';
				$result = mysql_query($sql);
				while($rows = mysql_fetch_assoc($result))
				echo "<option value = '$rows[made]'> $rows[tende] </option>";
			?>
		</select>
<div align = "center"><input type="submit" name="xemketqua" class="chon" value="Xem kết quả thi" style="z-index:999999; position:absolute; text-align:center; size:20; padding:0px 10px; color:#606; font-weight:bold;" /></div>
</form>
<?php
//Lấy thông tin qua trang xem KQ
//$_SESSION['idhs']=$idhs;
//$_SESSION['hoten']=$hoten;
//$_SESSION['lop']=$lop;
//_SESSION['truong']=$truong;


?>

