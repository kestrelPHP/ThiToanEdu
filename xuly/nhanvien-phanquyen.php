<!--Hiển thị danh sách các user dc cấp quyền truy cập-->
<h2 style="text-align: center; color: rgb(129, 154, 173);">Phân quyền</h2>
<?php
			include('config.php');
			$counts=0;
			$rscount = mysql_query("SELECT * FROM tbl_nhanvien");
			while($rowscounts = mysql_fetch_array($rscount))
			{
				$counts++;
			}
?>
<table class="border" style="border-collapse: collapse" cellpadding="4"  cellspacing="0" width="95%" align="center">
 <tr>
 <td class="tcat"  width="20%" >Tên truy cập</td>
 <td class="tcat">Họ tên</td>
 <td class="tcat">Tên thật</td>
 <td class="tcat">Quyền</td>
  <td class="tcat">Ngày thêm</td>
 </tr>
<?php
			
			$results = mysql_query("SELECT * FROM tbl_nhanvien ");
			while($rows = mysql_fetch_array($results))
			{
			if($rows['level']==1)
			{
				$quyen="Quản trị";
			}
			else
			{
				$quyen="Giáo viên";	
			}
	echo '<tr class="teacher">
			<td>' . '<input type="checkbox" name="selector[]" value="'.$rows['idnv'].'" />' . '</td>
			<td>'.$rows['tendn'].'</td>
			<td>'.$rows['tennv'].'</td>
			<td>'.$quyen.'</td>
			<td>'.$rows['ngaythem'].'</td>
			<td><a href="?menu=phan-quyen&idnv='.$rows['idnv'].'"><img src="images/go_right.gif" /></a></td>
			</tr>';
			}
		?>
</table>
<script> 