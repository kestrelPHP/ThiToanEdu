<link rel="stylesheet" href="febe/style.css" type="text/css" media="screen" charset="utf-8">
<style type="text/css">
<!--
.style1 {
	font-size: 18px;
	font-weight: bold;
	color: #000;
}
.dethi_edit {
	margin:20px 200px  auto;
}
-->
</style>
<?php
	include('config.php');
	$idhs=$_GET['idhs'];

	$results = mysql_query("SELECT * FROM xh_hocsinh WHERE idhs='$idhs'");
	while($rows = mysql_fetch_array($results))
	{
			$idhs=$rows['idhs'];
			$username=$rows['username'];
			$password=$rows['pass'];
			$hoten=$rows['hoten'];
			$ngaysinh=$rows['ngaysinh'];
			$gioitinh=$rows['gioitinh'];
			$diachi=$rows['diachi'];
			$sodt=$rows['sodt'];
			$email=$rows['email'];
			$khoi=$rows['khoi'];
			$lop=$rows['lop'];
			$truong=$rows['truong'];
			$hoatdong=$rows['hoatdong'];
			$hinhanh=$rows['hinhanh'];
	}
?>
<div style="margin:20px 70px 10px; font-size:14px;">
<font size="2" face="Tahoma"><b><a href="?menu=hocsinh_list">Quản lý học sinh</a><img src="images/bl3.gif" border="0" /> Sửa thông tin học sinh</b></font></div>
<hr size="1" color="#cadadd" style="margin:15px auto;" />
<form action="?menu=hocsinh_saveedit" method="post" class="hocsinh_edit" enctype="multipart/form-data">


<table width="100%" border="0"  cellpadding="0" cellspacing="0" background="images/body.png" id="dethi_news">
    <tr>
		<td bgcolor="#CCCCCC"  height="38px"colspan="2" align="center" class="style1">SỬA THÔNG TIN HỌC SINH</td>
    </tr>

	<tr>
		<td width="20%"  align="center">idhs</td>
		<td width="80%"> <input size=30 type="text" name="idhs" readonly="readonly" class="tendethi" value="<?php echo $idhs; ?>"/></td>
	</tr>
 
    <tr>
      <td align="center" class="tbltitle">username:</td>
	    <td width="85%"> <input class="tendethi" type="text" name="username" value="<?php echo $username ;?>" ></td>
    </tr>

	<tr>
		<td width="20%"  align="center">Password:</td>
		<td width="80%"> <input size=30 type="password" name="password"  class="tendethi" value=""/></td>
	</tr>
 
    <tr>
      <td align="center" class="tbltitle">Họ tên</td>
	    <td width="85%"> <input class="tendethi" type="text" name="hoten" value="<?php echo $hoten ;?>" ></td>
    </tr>

	<tr>
		<td width="20%"  align="center">Ngày sinh:</td>
		<td width="80%"> <input size=30 type="text" name="ngaysinh"  class="tendethi" value="<?php echo $ngaysinh; ?>"/></td>
	</tr>
 
    <tr>
      <td align="center" class="tbltitle">Địa chỉ:</td>
	    <td width="85%"> <input class="tendethi" type="text" name="diachi" value="<?php echo $diachi ;?>" ></td>
    </tr>

	<tr>
		<td width="20%"  align="center">Số ĐT:</td>
		<td width="80%"> <input size=30 type="text" name="sodt"  class="tendethi" value="<?php echo $sodt; ?>"/></td>
	</tr>
 
    <tr>
      <td align="center" class="tbltitle">Email</td>
	    <td width="85%"> <input class="tendethi" type="text" name="email" value="<?php echo $email ;?>" ></td>
    </tr>

	<tr>
		<td width="20%"  align="center">Khối:</td>
		<td width="80%"> <input size=30 type="text" name="khoi"  class="tendethi" value="<?php echo $khoi; ?>"/></td>
	</tr>
 
    <tr>
      <td align="center" class="tbltitle">Lớp:</td>
	    <td width="85%"> <input class="tendethi" type="text" name="lop" value="<?php echo $lop ;?>" ></td>
    </tr>

	<tr>
		<td width="20%"  align="center">Trường:</td>
		<td width="80%"> <input size=30 type="text" name="truong"  class="tendethi" value="<?php echo $truong; ?>"/></td>
	</tr>
 
	<tr>
		<td width="20%"  align="center">Giới tính</td>
		<td width="80%"> <input size=30 type="text" name="gioitinh"  class="tendethi" value="<?php echo $gioitinh; ?>"/></td>
	</tr>

 	<tr>
		<td width="20%"  align="center">Hoạt động:</td>
		<td width="80%"> <input size=30 type="text" name="hoatdong"  class="tendethi" value="<?php echo $hoatdong; ?>"/></td>
	</tr>
 

	<tr>
		<td align="center">Hình ảnh</td>
		<td>
			<input name="fileanh" type="file" />
			<input type="hidden" name="imgfile" value="<?php echo $hinhanh ; ?>" /><img src="../upload/images/hocsinh/<?php echo $hinhanh ; ?>" height="80px" width="90px" alt="Hình ảnh"/>
		</td>
	</tr>

    <tr>
      <td colspan="2" style="padding: 10px 0px 10px 0px" align="center"><label>
        <input type="submit" name="edit" id="edit" value="Cập nhật" />
      </label></td>
    </tr>
</table>
</form>
