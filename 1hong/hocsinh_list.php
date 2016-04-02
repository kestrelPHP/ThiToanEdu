<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="en-US">
<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Thi Toán Online || Thi trắc nghiệm || toán online Thi toán ||</title>
</title>
<!--sa poip up-->
	<link href="src/facebox.css" media="screen" rel="stylesheet" type="text/css" />
	<script src="lib/jquery.js" type="text/javascript"></script>
	  <script src="src/facebox.js" type="text/javascript"></script>
	  <script type="text/javascript">
		jQuery(document).ready(function($) {
		  $('a[rel*=facebox]').facebox({
			loadingImage : 'src/loading.gif',
			closeImage   : 'src/closelabel.png'
		  })
		})
	  </script>
	  <link rel="stylesheet" href="css/febestyle.css" type="text/css" media="screen" charset="utf-8">
	<script src="argiepolicarpio.js" type="text/javascript" charset="utf-8"></script>
	<script src="js/application.js" type="text/javascript" charset="utf-8"></script>
	
	<script type="text/javascript">
        $(document).ready(function() {
        $("#resultTable thead tr th:first input:checkbox").click(function() {
            var checkedStatus = this.checked;
            $("#resultTable tbody tr td:first-child input:checkbox").each(function() {
                this.checked = checkedStatus;
            });
        });

            $("#resultTable").selectAllRows();

            $("#resultTable").selectAllRows({ column: 'last' });

            $("#resultTable").selectAllRows({
                column: '2',
                selectTip: 'Select All Students',
                unselectTip: 'Un-Select All Students'
                })
                .css("border-width", "10px");
        });
    </script>
<?php
			include('config.php');
			$counts=0;
			$rscount = mysql_query("SELECT * FROM xh_hocsinh");
			while($rowscounts = mysql_fetch_array($rscount))
			{
				$counts++;
			}
?>
<?php //Thêm Phân trang ----------------------------------------------------------
	$tbl_name="xh_hocsinh";		//Tên bảng cần phân trang
	$limit = 20; 				//Số dòng trên 1 trang
	$targetpage = "index.php?menu=hocsinh_list"; 	//đường dẫn chạy file này
	include('code_phantrang.php');
?>


</head>
<body>  
<div style="margin:20px 70px 10px; font-size:14px;">
<font size="2" face="Tahoma"><b>Học sinh<img src="images/bl3.gif" border="0" /> Quản lý học sinh</b></font></div>
<hr size="1" color="#cadadd" style="margin:15px auto;" />
<div style="margin:20px 0 auto;">
	<a href="?menu=hocsinh_news"><img src="images/add_new.gif" align="absmiddle" border="0" /></a> <a href="?menu=hocsinh_news">Thêm học sinh mới</a>
</div>
<div class='wrapper'>
  <input id="filter" type="text" value="Tìm kiếm..." onClick="if(this.value=='Tìm kiếm...')this.value='';" onBlur="if(this.value=='')this.value='Tìm kiếm...';" name="filter" /> 
  <form action="?menu=hocsinh_delete" method="post">
    <table cellpadding="1" cellspacing="1" id="resultTable">
			<thead>
				<tr>
					
					<th><input type="checkbox" name="checkid[]" id="checkid" value="<?=$counts?>" onClick="CheckALL(<?=$counts?>);" /></th>
                    <th>idhs</th>
                    <th>Hình</th>

                    <th>Username</th>
                    <th>Họ tên</th>
                    <th>Ngày sinh</th>
					<th>Giới tính</th>
					<th>Địa chỉ</th>
                    <th>Số điện thoại</th>
					<th>Email</th>
					<th>Khối</th>
                    <th>Lớp</th>
					<th>Trường</th>
					<th>Hoạt động</th>
					<th>Edit</th>

				</tr>
			</thead>
        <tbody>
		<?php
			
//			$results = mysql_query("SELECT * FROM xh_hocsinh "); //Nếu không phân trang thì dùng
			while($rows = mysql_fetch_array($phantrang))
			{	
		?>
				<tr class="teacher">
				<td><input type="checkbox" name="selector[]" value=" <?php  echo $rows['idhs']; ?>" /></td>
				<td><?php echo $rows['idhs']; ?></td>
<td><input type="hidden" name="hinhanh" value="<?php echo $rows['hinhanh'] ; ?>" /><img src="../upload/images/hocsinh/<?php echo $rows['hinhanh'] ; ?>" height="50px" width="50px" alt="Hình ảnh"/></td>
				<td><?php echo $rows['username']; ?></td>
				<td><?php echo $rows['hoten']; ?> </td>
				<td><?php echo $rows['ngaysinh']; ?></td>
				<td><?php echo $rows['gioitinh']; ?></td>
				<td><?php echo $rows['diachi']; ?></td>
				<td><?php echo $rows['sodt']; ?></td>
				<td><?php echo $rows['email']; ?></td>
				<td><?php echo $rows['khoi']; ?></td>
				<td><?php echo $rows['lop']; ?></td>
				<td><?php echo $rows['truong']; ?></td>
				<td><?php echo $rows['hoatdong']; ?></td>
				<td><a href="?menu=hocsinh_edit&idhs=<?php  echo $rows['idhs']; ?>"><img src="images/go_right.gif" /></a></td>
			</tr>

		<?php
			}
		?>
        </tbody>
    </table>
	<input type="submit" name="bnm" value="Delete all" style="margin:3px 50px auto;">
	</form>
</div>
  </body>
</html>







<script>
function CheckALL(counts)
{
	for(i=0;i<counts;i++)
	{
		
	if(document.getElementById("checkid").checked!="")
	{
	document.getElementById("checkid").checked	='checked';
	}else{
	document.getElementById("checkid").checked	='';	
	}
	}
}
</script>