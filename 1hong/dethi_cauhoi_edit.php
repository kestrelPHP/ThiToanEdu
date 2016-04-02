<link rel="stylesheet" href="css/febestyle.css" type="text/css" media="screen" charset="utf-8">

<?php
	include('config.php');
	$id=$_GET['id'];
	$made = $_GET["made"];

	$results = mysql_query("SELECT * FROM xh_cauhoi WHERE id='$id'");
	$rows = mysql_fetch_array($results);
	  $noidung=$rows['noidung'];
	  $huongdan=$rows['huongdan'];
	  $dapan=$rows['dapan'];
	  $diem=$rows['diem'];
	  $id=$rows['id'];
?>
<?php //Lấy thông tin đề thi
					$sql="select * from xh_dethi where made like '$made'";
					$query=mysql_query($sql);
					$row=mysql_fetch_array($query);
						$gantende=$row["tende"];
						$ganmon=$row["mon"];
						$ganloaide=$row["loaide"];
						$gankhoi=$row["khoi"];
//Lấy thông tin câu hỏi
	$results1 = mysql_query("SELECT * FROM xh_cauhoi WHERE id='$id'");
	$rows1 = mysql_fetch_array($results1);
			$loaide=$rows1['loaide'];
			$mon=$rows1['mon'];
			$khoi=$rows1['khoi'];
			$noidung=$rows1['noidung'];
			$dapan=$rows1['dapan'];
			$diem=$rows1['diem'];
			$id=$rows1['id'];
			$mucdo=$rows1['mucdo'];
//Lấy thông tin độ khó câu hỏi
	$results2 = mysql_query("SELECT * FROM xh_dokhocauhoi WHERE id='$mucdo'");
	$rows2 = mysql_fetch_array($results2);
			$tenmucdo=$rows2['mucdo'];
//Lấy thông tin loại đề
	$results3 = mysql_query("SELECT * FROM xh_loaide WHERE maloai='$loaide'");
	$rows3 = mysql_fetch_array($results3);
			$tenloaide=$rows3['loaide'];
//Lấy thông tin khối thi
	$results4 = mysql_query("SELECT * FROM xh_khoihoc WHERE makhoi='$khoi'");
	$rows4 = mysql_fetch_array($results4);
			$tenkhoithi=$rows4['tenkhoi'];
//Lấy thông tin môn thi
	$results5 = mysql_query("SELECT * FROM xh_monthi WHERE mamon='$mon'");
	$rows5 = mysql_fetch_array($results5);
			$tenmonthi=$rows5['monthi'];


?>
<div style="margin:20px 70px 10px; font-size:14px;">
<font size="2" face="Tahoma"><b><a href="?menu=cauhoi_list">Đề thi</a><img src="images/bl3.gif" border="0" />Sửa câu hỏi của đề<img src="images/bl3.gif" border="0" /><?php echo $gantende; ?></b></font></div>
<hr size="1" color="#cadadd" style="margin:15px auto;" />

<!--<center><a style="font-size:15px; font-family:Arial, Helvetica, sans-serif; clor: #ff0000" align="center" > <?php echo "Tên đề: ".$gantende."</br>"; ?> 	</a></center>-->


<form action="?menu=dethi_cauhoi_saveedit" method="post" class="form1">

<table  width="100%" border="0"  cellpadding="0" cellspacing="0" background="images/body.png" id="dethi_news">
	<input size=30 type="hidden" name="lmade" readonly="readonly" style="background-color:#CCC" value="<?php echo $made ?>">
    <tr>
     <td bgcolor="#CCCCCC"  height="38px"colspan="2" align="center" class="style1">SỬA CÂU HỎI</td>
    </tr>

	<td width="17%"  align="right">Mã câu hỏi</td>
    <td width="83%"> <input size=30 type="text" name="idcauhoi" readonly="readonly" style="background-color:#CCC" value="<?php echo $id ?>"></td>
	</tr>

    <td height="27" align="center" class="tbltitle2">Loại đề</td>
		<td>
          <select name="loaide" id="loaide">
				<option value = '<?php echo $loaide ;?>'> <?php echo $tenloaide ;?> </option>
				<?php
				include("config.php");
				$sql = 'select * from xh_loaide';
							$result = mysql_query($sql);
							while($rows = mysql_fetch_assoc($result))
							echo "<option value = '$rows[maloai]'> $rows[loaide] </option>";
				?>
		</select>
		</td>
    </tr>

	<tr>
	<td height="27" align="center" class="tbltitle2">Môn thi</td>
		<td>
			 <select name="mon" id="tenmon">
					<option value = '<?php echo $mon ;?>'> <?php echo $tenmonthi ;?> </option>
					<?php
					include("config.php");
					$sql = 'select * from xh_monthi';
								$result = mysql_query($sql);
								while($rows = mysql_fetch_assoc($result))
								echo "<option value = '$rows[mamon]'> $rows[monthi] </option>";
					?>
			</select>
		</td>
	</tr>

    <tr>
		<td height="27" align="center" class="tbltitle2">Khối thi</td>
			<td>
			  <select name="khoi" id="tenmon">
					<option value = '<?php echo $khoi ;?>'> <?php echo $tenkhoithi ;?> </option>
					<?php
					include("config.php");
					$sql = 'select * from xh_khoihoc';
								$result = mysql_query($sql);
								while($rows = mysql_fetch_assoc($result))
								echo "<option value = '$rows[makhoi]'> $rows[tenkhoi] </option>";
					?>
			</select>
		</td>
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
		<td><textarea class="required" size=30 type="text" name="dapan"value="<?php echo $dapan ?>"/><?php echo $dapan ?></textarea></td>
  	</tr>
    

    <tr>
    	<td align="right" class="tbltitle" >Điểm:<span style="color:red;font-size:22px">*</span> </td>
		<td><input class="required" size=30 type="text" name="diem"value="<?php echo $diem ?>"/></td>
    </tr>
    
   <tr>
<!--
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
-->
   <tr>
		<td align="right" class="tbltitle2">Độ khó của đề: </td>
		<td >
		<select name="mucdocauhoi">
			<option value = '<?php echo $mucdo; ?>'><?php echo $tenmucdo; ?></option>
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