<?php
//Chuyển trang:
	echo"<script>document.location.href='?menu=dethi_cauhoilist&made=$made' </script>";


//select  -------------------------------------------------------------------------------------------------
?>
		<select name="mucdocauhoi">
			<option value = ''> ---Tiêu đề---</option>
			<?php
				$sql = 'select * from xh_dokhocauhoi';
				$result = mysql_query($sql);
				while($rows = mysql_fetch_assoc($result))
				echo "<option value = '$rows[id]'> $rows[mucdo] </option>";
			?>
		</select>

<?php
//Triệu gọi và lấy data
$gan = mysql_query("SELECT * FROM xh_cauhoi");
while($rows = mysql_fetch_array($gan))
{
	$id=$rows['id'];
}
//-------------------------------------------


//Kiểm tra dữ liệu -------------------------------------------------------------------------------------
?>
<script language="javascript">
function kiemtradulieu(the_form)
{ 
	 var ktloaide = the_form.ten_name.value;
		 if (ktloaide==''){
				alert("Câu thông báo!");
				the_form.ten_name.focus();
				return false;
			}
}
</script>
<!--
-Trong thẻ Form thêm:  onSubmit="return kiemtradulieu(this)"
-ten_name là các thẻ: name="ten_name"
-->
<?php
//--------------------------------------------











?>