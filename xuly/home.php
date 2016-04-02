<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script language="javascript">
function kiemtradulieu(the_form)
{ 
 var ktchonmon = the_form.chonmon.value;
	 if (ktchonmon==''){
			alert("Vui lòng chọn môn để thi!");
			the_form.chonmon.focus();
			return false;
		}
}
</script>

<div align = "center">
<h1 style="font-size: 35px; font-weight: bold;  color: #ffffff" align="center" class="super button pink">TRANG THI CHÍNH THỨC</h1></br>
<a style="font-size:15px;" align="center"><i>(Cần đọc kỹ hướng dẫn trước khi thi)</i></a></br>
<a style="font-size:15px;" align="center">Vui lòng chọn một môn để thi trong danh sách bên dưới:</a></br>
<form action="" method="POST" name="frmdethi" onSubmit="return kiemtradulieu(this)" enctype="multipart/form-data">
		<select name="chonmon" id="" class="tendethi">
			<?php
				echo "<option value = ''> ---Chọn môn để thi---</option>";
				include("config/connect.php");
				$sql = 'select * from xh_monthi';
				$result = mysql_query($sql);
				while($rows = mysql_fetch_assoc($result))
				echo "<option value = '$rows[mamon]'> $rows[monthi] </option>";
			?>
		</select>

	<input type="submit" name="theomon"  class="nut_xanhlacay cssnut" value="Chọn môn thi" style="z-index:9; text-align: center; color: #ff0000; font-weight: bold;" />
</form>
</div>

<?php
session_start();
if(isset($_POST['theomon']))
	{	 
			$_SESSION['mon']=$_POST['chonmon'];
		echo"<script>document.location.href='index.php?page=theomon' </script>";	

	}
?>