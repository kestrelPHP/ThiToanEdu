<link rel="stylesheet" href="css/febestyle.css" type="text/css" media="screen" charset="utf-8">

<?php
	include('config.php');
	$id=$_GET['id'];
	$results = mysql_query("SELECT * FROM xh_cauhoi WHERE id='$id'");
	while($rows = mysql_fetch_array($results))
	{
	  $noidung=$rows['noidung'];
	  $huongdan=$rows['huongdan'];
	  $dapan=$rows['dapan'];
	  $diem=$rows['diem'];
	  $id=$rows['id'];
	}
?>

<div style="margin:20px 70px 10px; font-size:14px;">
<font size="2" face="Tahoma"><b><a href="?menu=cauhoi_list">Câu hỏi</a><img src="images/bl3.gif" border="0" /> Cập nhật câu hỏi</b></font></div>
<hr size="1" color="#cadadd" style="margin:15px auto;" />
<form action="?menu=cauhoi_saveedit" method="post" class="form1">

<table  width="100%" border="0"  cellpadding="0" cellspacing="0" background="images/body.png" id="dethi_news">
    <tr>
     <td bgcolor="#CCCCCC"  height="38px"colspan="2" align="center" class="style1">SỬA CÂU HỎI</td>
    </tr>

	<td width="17%"  align="right">Mã câu hỏi</td>
    <td width="83%"> <input size=30 type="text" name="idcauhoi" readonly="readonly" style="background-color:#CCC" value="<?php echo $id ?>"></td>
	</tr>

    <tr>
      <td width="116" align="right">Nội dung:<span style="color:red;font-size:22px">*</span>  </td>
	    <td><textarea name="noidung" id="textarea_full" class="ndungcauhoi" cols="20" rows="2" value=""><?php echo $noidung ?></textarea></td>
    </tr>

    <tr>
      <td width="116" align="right">Hướng dẫn nhập đáp án:<span style="color:red;font-size:22px">*</span>  </td>
	    <td><textarea name="huongdan" class="required" cols="20" rows="2" value=""><?php echo $huongdan ?></textarea></td>
    </tr>
    
     <tr>
		<td align="right" class="tbltitle">Đáp án: <span style="color:red;font-size:22px">*</span> </td>
		<td><textarea class="required" size=30 type="text" name="dapan" value="<?php echo $dapan ?>"/><?php echo $dapan ?></textarea></td>
  	</tr>
    
    <tr>
    	<td align="right" class="tbltitle" >Điểm:<span style="color:red;font-size:22px">*</span> </td>
		<td><input class="required" size=30 type="text" name="diem"value="<?php echo $diem ?>"/></td>
    </tr>
    
   <tr>
		<td align="right" class="tbltitle2">Tên đề: </td>
		<td width="85%">
		<select name="made" class="tendethi">
			<?php
				$sql = 'select * from xh_dethi';
				$result = mysql_query($sql);
				while($rows = mysql_fetch_assoc($result))
				echo "<option value = '$rows[made]'> $rows[tende] </option>";
			?>
		</select>
		</td>
	<tr/>

   <tr>
		<td align="right" class="tbltitle2">Độ khó của đề: </td>
		<td width="10%">
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
       	 <input type="submit" name="ok" id="ok" value="Sửa câu hỏi" />
      </label>
      </td>
    </tr>
  </table>

</form>