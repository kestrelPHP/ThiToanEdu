<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="css/nut.css"/>
<style>
.obang{
	background:#66ccff;
	color:#FFF;
	font-weight:bold;
}

.dongbang{
	background:#eaf9ff;
	color:#990000;
	font-weight:bold;
}
</style>
</head>
<body>


<div class="tieudedm"> Tìm Kiếm</div>
<form action="" method="POST" name="form1" id="form1">
	<table id="tb-search"  class='bang' border="0" align="center" cellpadding="4" cellspacing="0">

		<tr>
			<td class="hidden-md hidden-lg" align="left" >Tìm kiếm theo: <span style="color:red;font-size:22px">*</span></td>
		</tr>
		<tr>
			<td class="hidden-xs hidden-sm" align="left" >Tìm kiếm theo: <span style="color:red;font-size:22px">*</span></td>
			<td class="pdb-10">
				<select name='ndtk'>
					<option value="idhs">Mã học sinh</option>
					<option value="username">Tên đăng nhập</option>
					<option value="hoten">Tên học sinh</option>
				</select>
			</td>
		 </tr>
		<tr>
			<td class="hidden-md hidden-lg">Nhập thông tin cần tìm:</td>
		</tr>
		<tr>
			<td class="hidden-xs hidden-sm">Nhập thông tin cần tìm:</td>
			<td class="pdb-10"><input width='200'  class="xanhlacay1 cssnut" name="thongtincantin" type="text" class="txtfield" /> </td>
		</tr>
		<tr>
			<td><input type="submit" class="maudo cssnut" name="ok" id="ok" value="Tìm học sinh" /></td>
		</tr>
	</table>
</form>
<?php
if(isset($_POST['ok']))
{
	$noitim=$_POST['ndtk'];
	$thongtincantim = str_replace(" ", "",$_POST['thongtincantin']); 
	$timtheohoten = preg_replace('/\s(?=\s)/', '',$_POST['thongtincantin']); 
					// preg_replace('/\s(?=\s)/', '', $str); thay thế các khoảng trắng thừa liên tiếp bằng 1 khoảng trắng duy nhất
					//$hoten = preg_replace('/\s(?=\s)/', '', trim($_POST['hoten'])); 
					//str_replace(" ", "",$_POST['thongtincantin']) Xóa hết các khoảng trắng
	if ($noitim =="idhs") {
		$dsach=mysql_query("SELECT * FROM xh_hocsinh WHERE idhs like '%$thongtincantim%' "); 
	} 	elseif ($noitim =="username") {
		$dsach=mysql_query("SELECT * FROM xh_hocsinh WHERE username like '%$thongtincantim%' "); 

	} 	elseif ($noitim =="hoten") {
		$dsach=mysql_query("SELECT * FROM xh_hocsinh WHERE hoten like '%".$timtheohoten."%' "); 
	}
	//Đếm tổng số mẫu tin trong cơ sở dữ liệu
	$sluong=mysql_num_rows($dsach);
	echo "Tổng số học sinh được tìm thấy: " .$sluong. "<br>";
	//Kiểm tra biến $dsach có dữ liệu hay không 
	if(mysql_num_rows($dsach)<>0){
		echo "</p>";
		echo "<table width ='100%' border='1' class='bang'  align='center'>";
		echo "<tr>";
			echo "<td colspan='8' align='center' bordercolor='#FFFF33' bgcolor='#FF3333'><strong>Kết quả tìm kiếm</strong></td>";
		echo " </tr>";
			echo "<tr>";
			echo " <td width ='18%' class='obang' align='center'><strong>Họ và tên</strong></td>";
			echo " <td width ='5%' class='obang' align='center'><strong>Lớp</strong></td>";
			echo " <td width ='10%' class='obang' align='center'><strong>Trường</strong></td>";
			echo " <td width ='8%' class='obang' lign='center'><strong>Ngày sinh</strong></td>";
			echo " <td width ='3%' class='obang' align='center'><strong>Giới tính</strong></td>";
			echo " <td width ='35%' class='obang' align='center'><strong>Địa chỉ</strong></td>";
			echo " <td width ='10%' class='obang' align='center'><strong>Số ĐT</strong></td>";
			echo " <td width ='5%' class='obang' align='center'><strong>Kết quả thi</strong></td>";
		echo " </tr>";
//Tiến hành truy vấn dữ liệu
	while($row=mysql_fetch_array($dsach))
		{
		echo "  <tr>";
			echo "<td class='dongbang'>".$row['hoten']."</td>";
			echo "<td class='dongbang'>".$row['lop']."</td>";
			echo "<td class='dongbang'>".$row['truong']."</td>";
			echo "<td class='dongbang'>".$row['ngaysinh']."</td>";
			echo "<td class='dongbang'>".$row['gioitinh']."</td>";
			echo "<td class='dongbang'>".$row['diachi']."</td>";
			echo "<td class='dongbang'>".$row['sodt']."</td>";
			echo "<td class='dongbang'><a href='?page=xem_kqchitiet&idhs=$idhs'>Xem</a></td>";

		echo " </tr>";
		}
	echo "</table>";
	}
}
?>


</body>
</html>