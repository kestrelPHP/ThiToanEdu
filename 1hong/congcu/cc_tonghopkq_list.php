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
			$rscount = mysql_query("SELECT * FROM xh_tonghopkq");
			while($rowscounts = mysql_fetch_array($rscount))
			{
				$counts++;
			}
?>
<?php //Thêm Phân trang ----------------------------------------------------------
	$tbl_name="xh_tonghopkq";		//Tên bảng cần phân trang
	$limit = 20; 				//Số dòng trên 1 trang
	$targetpage = "index.php?menu=thong_ke"; 	//đường dẫn chạy file này
	include('code_phantrang.php');
?>
</head>
<body>  
<div style="margin:20px 70px 10px; font-size:14px;">
<font size="2" face="Tahoma"><b>Học sinh<img src="images/bl3.gif" border="0" /> Thống kê kết quả bài thi của học sinh</b></font></div>
<hr size="1" color="#cadadd" style="margin:15px auto;" />
<div class='wrapper'>
<form action="?menu=xoa_thkq" method="post">

    <table cellpadding="1" cellspacing="1" id="resultTable">
			<thead>
				<tr>
					
					<th><input type="checkbox" name="checkid[]" id="checkid" value="<?=$counts?>" onClick="CheckALL(<?=$counts?>);" /></th>
                    <th>idhs</th>
                    <th>Tên học sinh</th>
                    <th>Lớp</th>
                    <th>Trường</th>
                    <th>Mã đề</th>
					<th>Tên đề</th>
					<th>Số câu</th>
                    <th>Số câu đúng</th>
					<th>Tổng điểm</th>
					<th>Tgian làm bài</th>
					<th>Kết quả</th>
					<th>Xếp hạng</th>
					<th>Chi tiết</th>
				</tr>
			</thead>
        <tbody>
		<?php
//			$results = mysql_query("SELECT * FROM xh_tonghopkq ");  //Nếu không phân trang thì dùng
			while($rows = mysql_fetch_array($phantrang))
			{	
				$idhs=$rows['idhs'];
				$made=$rows['made'];
			$results1 = mysql_query("SELECT * FROM xh_hocsinh WHERE idhs='$idhs' ");
			$rows1 = mysql_fetch_array($results1);
				$hoten=$rows1['hoten'];
				$lop=$rows1['lop'];
				$truong=$rows1['truong'];
			$results2 = mysql_query("SELECT * FROM xh_dethi WHERE made='$made' ");
			$rows2 = mysql_fetch_array($results2);
				$tende=$rows2['tende'];


			echo '<tr class="teacher">
				<td>' . '<input type="checkbox" name="selector[]" value="'.$rows['idhs'].'" />' . '</td>
				<td>'.$rows['idhs'].'</td>
				<td>'.$hoten.'</td>
				<td>'.$lop.'</td>
				<td>'.$truong.'</td>
				<td>'.$rows['made'].'</td>
				<td>'.$tende.'</td>
				<td>'.$rows['socau'].'</td>
				<td>'.$rows['socaudung'].'</td>
				<td>'.$rows['tongdiem'].'</td>
				<td>'.$rows['thoigian'].'</td>
				<td>'.$rows['kqua'].'</td>
				<td>'.$rows['xephang'].'</td>

				<td><a href="?menu=thkq_chitiet&idhs='.$rows['idhs'].'&made='.$rows['made'].'."><img src="images/go_right.gif" /></a></td>
			</tr>';
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