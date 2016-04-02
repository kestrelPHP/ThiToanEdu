<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="css/febestyle.css" type="text/css" media="screen" charset="utf-8">
<style type="text/css">
.style {
	color: #FF0000;
	font-size: 15px;
	font-weight: bold;
}
.style1 {
	font-size: 13px;
	font-weight: bold;
	text-align: right;
	color: #009900;
}
.style2 {
	font-size: 14px;
	font-weight: bold;
	text-align: center;
	color: #ff00cc;
}


</style>
<?php //GET dữ liệu
$idhs=$_GET['idhs'];
$made=$_GET['made'];
include('config.php');

?>
<?php
	$results1 = mysql_query("SELECT * FROM xh_hocsinh WHERE idhs='$idhs' ");
	$rows1 = mysql_fetch_array($results1);

	$results2 = mysql_query("SELECT * FROM xh_dethi WHERE made='$made' ");
	$rows2 = mysql_fetch_array($results2);

	$results3 = mysql_query("SELECT * FROM xh_tonghopkq_tl WHERE idhs='$idhs' and made='$made' ");
	$rows3 = mysql_fetch_array($results3);


?>
<center><a href='?menu=thong_ke_tl' class="style2" >Về trang thống kê kết quả tự luyện</a></center>
<table cellpadding="1" cellspacing="1" id="resultTable1">
		<thead>
			<tr>
				<th colspan="2" class="style"><center><b>THÔNG TIN VỀ HỌC SINH</b></center></td>
			</tr>

			<tr>
				<th width="20%" class="style1">idhs</th>
				<td width="80%"> <?php echo $idhs; ?> </td>
			</tr>
			<tr>
				<th width="20%" class="style1">Tên học sinh</th>
				<td width="80%"> <?php echo $rows1['hoten']; ?> </td>
			</tr>
			<tr>
				<th width="20%" class="style1">Username</th>
				<td width="80%"> <?php echo $rows1['username']; ?> </td>
			</tr>

			<tr>
				<th width="20%" class="style1">Lớp</th>
				<td width="80%"> <?php echo $rows1['lop']; ?> </td>
			</tr>
			<tr>
				<th width="20%" class="style1">Trường</th>
				<td width="80%"> <?php echo $rows1['truong']; ?> </td>
			</tr>
			<tr>
				<th width="20%" class="style1">Ngày sinh</th>
				<td width="80%"> <?php echo $rows1['ngaysinh']; ?> </td>
			</tr>
			<tr>
				<th width="20%" class="style1">Giới tính</th>
				<td width="80%"> <?php echo $rows1['gioitinh']; ?> </td>
			</tr>
			<tr>
				<th width="20%" class="style1">Địa chỉ</th>
				<td width="80%"> <?php echo $rows1['diachi']; ?> </td>
			</tr>

			<tr>
				<th width="20%" class="style1">Số ĐT</th>
				<td width="80%"> <?php echo $rows1['sodt']; ?> </td>
			</tr>
			<tr>
				<th width="20%" class="style1">Email</th>
				<td width="80%"> <?php echo $rows1['email']; ?> </td>
			</tr>
			<tr>
				<th width="20%" class="style1">Hình ảnh</th>
				<td width="80%"> <?php echo $rows1['hinhanh']; ?> </td>
			</tr>

<!-- ---------------------------------------------------------------------------------- -->
			<tr>
				<th colspan="2" class="style"><center><b>THÔNG TIN VỀ ĐỀ TỰ LUYỆN</b></center></th>
			</tr>

			<tr>
				<th width="20%" class="style1">Mã đề</th>
				<td width="80%"> <?php echo $rows2['made']; ?> </td>
			</tr>
			<tr>
				<th width="20%" class="style1">Tên đề</th>
				<td width="80%"> <?php echo $rows2['tende']; ?> </td>
			</tr>
			<tr>
				<th width="20%" class="style1">Loại đề</th>
				<td width="80%"> <?php echo $rows2['loaide']; ?> </td>
			</tr>
			<tr>
				<th width="20%" class="style1">Cấp thi:</th>
				<td width="80%"> <?php echo $rows2['capthi']; ?> </td>
			</tr>
			<tr>
				<th width="20%" class="style1">Nội dung đề:</th>
				<td width="80%"> <?php echo $rows2['noidung']; ?> </td>
			</tr>
			<tr>
				<th width="20%" class="style1">Số câu</th>
				<td width="80%"> <?php echo $rows2['socau']; ?> </td>
			</tr>
			<tr>
				<th width="20%" class="style1">Thời gian:</th>
				<td width="80%"> <?php echo $rows2['thoigian']; ?> </td>
			</tr>
			<tr>
				<th width="20%" class="style1">tác giả</th>
				<td width="80%"> <?php echo $rows2['tacgia']; ?> </td>
			</tr>
			<tr>
				<th width="20%" class="style1">Khối:</th>
				<td width="80%"> <?php echo $rows2['khoi']; ?> </td>
			</tr>
			<tr>
				<th width="20%" class="style1">Môn:</th>
				<td width="80%"> <?php echo $rows2['mon']; ?> </td>
			</tr>
			<tr>
				<th width="20%" class="style1">Ngày soạn:</th>
				<td width="80%"> <?php echo $rows2['ngay']; ?> </td>
			</tr>

<!-- ---------------------------------------------------------------------------------- -->
			<tr>
				<th colspan="2" class="style"><center><b>THÔNG TIN VỀ KẾT QUẢ LÀM BÀI TỰ LUYỆN</b></center></th>
			</tr>

			<tr>
				<th width="20%" class="style1">Số câu đã làm:</th>
				<td width="80%"> <?php echo $rows3['socau']; ?> </td>
			</tr>
			<tr>
				<th width="20%" class="style1">Số câu đúng</th>
				<td width="80%"> <?php echo $rows3['socaudung']; ?> </td>
			</tr>
			<tr>
				<th width="20%" class="style1">Tổng điểm</th>
				<td width="80%"> <?php echo $rows3['tongdiem']; ?> </td>
			</tr>
			<tr>
				<th width="20%" class="style1">Thời gian bắt đầu làm bài:</th>
				<td width="80%"> <?php echo $rows3['tgbatdau']; ?> </td>
			</tr>
			<tr>
				<th width="20%" class="style1">Thời gian nộp bài:</th>
				<td width="80%"> <?php echo $rows3['tgnopbai']; ?> </td>
			</tr>
			<tr>
				<th width="20%" class="style1">Tổng thời gian làm bài:</th>
				<td width="80%"> <?php echo $rows3['thoigian']; ?> </td>
			</tr>
			<tr>
				<th width="20%" class="style1">Kết quả:</th>
				<td width="80%"> <?php echo $rows3['ketqua']; ?> </td>
			</tr>
			<tr>
				<th width="20%" class="style1">Xếp hạng:</th>
				<td width="80%"> <?php echo $rows3['xephang']; ?> </td>
			</tr>
	</thead>
</table>

<center><a href='?menu=thong_ke_tl' class="style2" >Về trang thống kê kết quả tự luyện</a></center>