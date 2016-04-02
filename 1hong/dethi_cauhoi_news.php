<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="css/febestyle.css" type="text/css" media="screen" charset="utf-8">

<link type="text/css" href="css/stylenhaplieu.css" rel="stylesheet">
	<script type="text/javascript" src="js/jquery-1.7.2.min.js"></script>
	<script type="text/javascript" src="js/jquery.validate.min.js"></script>
	<script type="text/javascript" src="js/messages_vi.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			$("#contact").validate({
				errorElement: "span", // Định dạng cho thẻ HTML hiện thông báo lỗi
				rules: {
					cpassword: {
						equalTo: "#password" // So sánh trường cpassword với trường có id là password
					},
					min_field: { min: 5 }, //Giá trị tối thiểu
					max_field: { max : 10 }, //Giá trị tối đa
					range_field: { range: [4,10] }, //Giá trị trong khoảng từ 4 - 10
					rangelength_field: { rangelength: [4,10] } //Chiều dài chuỗi trong khoảng từ 4 - 10 ký tự
				}
			});
		});
	</script>
    
    
<title></title>
<style type="text/css">
<!--
.style1 {
	font-size: 18px;
	font-weight: bold;
	color: #000;
}
.style2 { padding:10px 0px 10px 0px; color: #808000}
.ten_field{
padding:10px;
}
.form1 {
	margin:0px 0px 0px 20px;
}
#cauhoi_news{
	margin:20px 50px auto;
	border: 1px solid #C1DAD7;

	
}
.tbltitle
{
	margin:0px 10px;	
	
}
-->
</style>
<!--Kiểm tra select-->
<script language="javascript">
function kiemtradulieu(the_form)
{ 
// var ktdapan = the_form.dapan.value;
 var ktdiem = the_form.diem.value;
 var ktmucdode = the_form.mucdocauhoi.value;
/*	 if (ktdapan==''){
			alert("Vui lòng nhập đáp án!");
			the_form.dapan.focus();
			return false;
		}
*/
	 if (ktdiem==''){
			alert("Vui lòng nhập điểm!");
			the_form.diem.focus();
			return false;
		}
	 if (ktmucdode==''){
			alert("Vui lòng chọn mức độ đề!");
			the_form.mucdocauhoi.focus();
			return false;
		}
}
</script>


</head>
<body> 
<?php include('config.php'); 
$made = $_GET["made"];
			/* Lấy thêm tên đề thi trong xh_dethi chèn vào bảng câu hỏi xh_cauhoi*/
			$sql="select * from xh_dethi where made like '$made'";
			$query=mysql_query($sql);
			$row=mysql_fetch_array($query);
				$gantende=$row["tende"];
				$ganmon=$row["mon"];
				$ganloaide=$row["loaide"];
				$gankhoi=$row["khoi"];

?>

<div class="form1">
<div style="margin:20px 70px 10px; font-size:14px;">
<font size="2" face="Tahoma"><b><a href="?menu=cauhoi_list">CÂU HỎI</a><img src="images/bl3.gif" border="0" /> THÊM CÂU HỎI MỚI<img src="images/bl3.gif" border="0" /><?php echo $gantende; ?></b></font></div>
<hr size="1" color="#cadadd" style="margin:15px auto;" />
<form action="" name="frmthemdethi" id="contact" class="contact-form" onSubmit="return kiemtradulieu(this)" onsubmit="return checkform();" method="post" enctype="multipart/form-data">
<table  width="100%" border="0"  cellpadding="0" cellspacing="0" background="images/body.png" id="dethi_news">
    <tr>
     <td bgcolor="#CCCCCC"  height="38px"colspan="2" align="center" class="style1">THÊM CÂU HỎI MỚI</td>
    </tr>
    <tr>
      <td width="116" align="right">Nội dung:<span style="color:red;font-size:22px">*</span>  </td>
	  <td><textarea name="noidung" id="textarea_full" class="ndungcauhoi" cols="20" rows="2"> </textarea></td>
    </tr>
    <tr>
      <td width="116" align="right">Hướng dẫn nhập đáp án:<span style="color:red;font-size:22px">*</span>  </td>
	  <td><textarea name="huongdan" class="required" cols="20" rows="2"> </textarea></td>
    </tr>
    
     <tr>
		<td align="right" class="tbltitle">Đáp án: <span style="color:red;font-size:22px">*</span> </td>
		<td><textarea class="required" size=30 type="text" name="dapan" value=""autocomplete = "off"/></textarea></td>
  	</tr>
    
    <tr>
    	<td align="right" class="tbltitle">Điểm:<span style="color:red;font-size:22px">*</span> </td>
		<td><input class="required" size=30 type="text" name="diem" value=""autocomplete = "off"/></td>
    </tr>
    
<!--   <tr>
		<td align="right" class="tbltitle2">Tên đề: </td>
		<td width="85%">
		<select name="ganmade" class="tendethi">
			<?php
				$sql = 'select * from xh_dethi';
				$result = mysql_query($sql);
				while($rows = mysql_fetch_assoc($result))
				echo "<option value = '$rows[made]'> $rows[tende] </option>";
			?>
		</select>
		</td>
	<tr/>
-->

   <tr>
		<td align="right" class="tbltitle2">Độ khó của đề: </td>
		<td >
		<select name="mucdocauhoi">
			<option value = ''> ---Chọn mức độ---</option>
			<?php
				$sql = 'select * from xh_dokhocauhoi';
				$result = mysql_query($sql);
				while($rows = mysql_fetch_assoc($result))
				echo "<option value = '$rows[id]'> $rows[mucdo] </option>";
			?>
		</select>
		</td>
	<tr/>


   <tr>
       	<td align="right" class="tbltitle2">Trang thái: <span style="color:red;font-size:22px">*</span></td>
		<td>
        	<select name='duyetde'>
			<option value='1'>1-Duyệt</option>
			<option value='0'>2-Không duyệt</option>
		  </select><br />
        </td>
     </tr> 
    <tr>

      <td colspan="2"align="center"  style="padding:10px 0px 10px 0px">
      <label>
       	 <input type="submit" name="ok" id="ok" value="Thêm câu hỏi" />
      </label>
      </td>
    </tr>
  </table>
</form>
</div>

</body>
</html>
<?php

if(isset($_POST['ok']))
{	
//Đếm số lượng câu  hỏi của đề update vào cột số lượng câu trong table đề thi
	$sql_slcauhoi="SELECT * FROM xh_cauhoi WHERE made=".$made." ";
	$slch=mysql_query($sql_slcauhoi);
	$demslcauhoi=mysql_num_rows($slch)+1;
			$sqlslch="UPDATE xh_dethi SET 
			socau = '".$demslcauhoi."'   
			WHERE made = ".$made."";
			mysql_query($sqlslch);	
//end cập nhật SL câu hỏi



?>
	<a style="font-size:25px; font-family:Arial, Helvetica, sans-serif; clor: #ff0000" align="center" >
		THÊM CÂU HỎI VÀO ĐỀ THI 
		<?php 
			echo "Mã đề: ".$made."</br>"; 
			echo "Tên đề: ".$gantende."</br>"; 
			echo "Môn: ".$ganmon."</br>"; 
			echo "loại đề: ".$ganloaide."</br>"; 
			echo "Khối: ".$gankhoi."</br>"; 

		?>
	</a></br>
<?php
			/*end thêm*/
	$dapan=strip_tags(str_replace(" ", "",$_POST["dapan"]));
	//Loại bỏ các kí tự HTML, xóa hết khoảng trắng trước khi thêm
	 $sqla="INSERT INTO xh_cauhoi(made,loaide,mon,khoi,noidung,huongdan,dapan,diem, duyetde,mucdo)  
		VALUES ('$made','$ganloaide','$ganmon','$gankhoi','$_POST[noidung]','$_POST[huongdan]','$dapan','$_POST[diem]','$_POST[duyetde]','$_POST[mucdocauhoi]')";
		

			 $query=mysql_query($sqla);

		
		echo"<script>document.location.href='?menu=dethi_cauhoilist&made=$made' </script>";
}
?>