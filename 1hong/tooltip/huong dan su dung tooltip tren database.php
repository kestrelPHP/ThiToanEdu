<?php
//Gọi các file sau: tooltip.js và tooltip.css (có thể: include_once('goi_tooltip.php');  ). Nếu muốn thay hiệu ứng tooltip thì thay 2 file này; hiện có 3 hiệu ứng sẵn có trong \themes

//Trong thẻ href cần gọi tooltip bằng cách sử dụng hàm: onmouseover="tooltip.pop(this, '#id_the_div_noidung_tooltip', {position:1, offsetX:-20, effect:'slide', sticky: true})"
//Đầy đủ như sau: <a href="diachigidotuyy" onmouseover="tooltip.pop(this, '#id_the_div_noidung_tooltip', {position:1, offsetX:-20, effect:'slide', sticky: true})">Xem tooltip</a>
//Tuy nhiên để đọc database bằng hàm while thì nên lấy #id_the_div_noidung_tooltip là tên của ID một cột nào đó
//Thực hiện như sau: onmouseover="tooltip.pop(this, '<?php echo '#'.$id; ?>', {position:1, offsetX:-20, effect:'slide', sticky: true})"

//Đầy đủ như sau:
while($rows = mysql_fetch_array($phantrang))  //Gọi phân trang -> $phantrang
{			$id=$rows['id'];
?>			
<tr class="teacher">
	<td><input type="checkbox" name="selector[]" value="'<?php echo $rows['id']; ?>'" /></td>
	<td><?php echo $rows['id']; ?></td>
	<td><?php echo $rows['noidung']; ?></td>
	<td><?php echo $rows['dapan']; ?></td>
	<td><a href="#" onmouseover="tooltip.pop(this, '<?php echo '#'.$id; ?>', {position:1, offsetX:-20, effect:'slide', sticky: true})">Xem</a>
		<?php include('noidungtooltip.php');?>  <!-- phần này là phần nội dung mà tooltip hiển thị -->
	</td>
</tr> 
<?php  } ?>

<?php
//Trong file noidungtooltip.php cần có 2 thẻ DIV quan trọng như sau:
?>
<div style="display:none;">
	<div id="<?php echo $id; ?>"> <!-- trong đó $id ở đây chính là id mà hàm onmouseover đọc tới trong: <?php echo '#'.$id; ?> -->
		<table>
			<!--Nội dung bản cần tooltip -->
		</table>
	</div>
</div>

