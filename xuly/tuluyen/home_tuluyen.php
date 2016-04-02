<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script language="javascript">
function kiemtradulieu(the_form)
{ 
 var ktchonmon = the_form.chonmon.value;
	 if (ktchonmon==''){
			alert("Vui lòng chọn môn tự luyện!");
			the_form.chonmon.focus();
			return false;
		}
}
</script>

<div align = "center">
<a style="font-size: 25px; color: #ffffff;  font-weight: bold;" align="center" class="super button blue" >BẠN ĐANG CHỌN PHẦN TỰ LUYỆN</a></br>
<a style="font-size:15px;" align="center">Vui lòng chọn một môn tự luyện trong danh sách bên dưới:</a></br>
<form action="" method="POST" name="frmdethi" onSubmit="return kiemtradulieu(this)" enctype="multipart/form-data">
		<select name="chonmon" id="" class="tendethi">
			<?php
				echo "<option value = ''> ---Chọn môn tự luyện---</option>";
				include("xuly/config/connect.php");
				$sql = 'select * from xh_monthi';
				$result = mysql_query($sql);
				while($rows = mysql_fetch_assoc($result))
				echo "<option value = '$rows[mamon]'> $rows[monthi] </option>";
			?>
		</select>

	<input type="submit" name="theomon"  class="nut_xanhlacay cssnut" value="Chọn môn tự luyện" style="z-index:9; text-align: center; color: #ff0000; font-weight: bold;" />
</form>
</div>
<?php
session_start();
if(isset($_POST['theomon']))
	{	 
			$_SESSION['mon']=$_POST['chonmon'];
		echo"<script>document.location.href='index.php?page=tl_theomon' </script>";	

	}
?>