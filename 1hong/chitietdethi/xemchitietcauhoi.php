
<div class="tipContainer" id="tipContainer1">  <!--Div chạy tooltip-->
<?php			$id=$_GET['id'];		
$results = mysql_query("SELECT * FROM xh_cauhoi WHERE id='$id' "); //Nếu không phân trang thì dùng
$rows = mysql_fetch_array($results);
?>



    <table cellpadding="1" cellspacing="1" id="resultTable"> 
				<tr>
					<th>ID</th>
					<th><?php echo  $rows['id'];  ?></th>
				</tr>
				<tr>
                    <th>Mã đề</th>
					<th><?php echo  $rows['made'];  ?></th>
				</tr>
				<tr>
                    <th>Loại đề</th>
					<th><?php echo  $rows['loaide'];  ?></th>
				</tr>
				<tr>
                    <th>Môn</th>
					<th><?php echo  $rows['mon'];  ?></th>
				</tr>
				<tr>
                    <th>Khối</th>
					<th><?php echo  $rows['khoi'];  ?></th>
				</tr>
				<tr>
					<th>Nội dung</th>
					<th><?php echo  $rows['noidung'];  ?></th>
				</tr>
				<tr>
					<th>Đáp an</th>
					<th><?php echo  $rows['dapan'];  ?></th>
				</tr>
				<tr>
					<th>Điểm</th>
					<th><?php echo  $rows['diem'];  ?></th>
				</tr>
				<tr>
					<th>Mức độ</th>
					<th><?php echo  $rows['mucdo'];  ?></th>
				</tr>
				<tr>
					<th>Duyệt đề</th>
					<th><?php echo  $rows['duyetde'];  ?></th>
				</tr>
				<tr>
					<th>Edit</th>
					<th><a href="?menu=cauhoi_edit&id='.$rows['id'].'"><img src= "images/go_right.gif" /></a></th>
				</tr>
    </table>
</div>







