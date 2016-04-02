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
			$rscount = mysql_query("SELECT * FROM xh_dethi");
			while($rowscounts = mysql_fetch_array($rscount))
			{
				$counts++;
			}
?>
<?php //Thêm Phân trang ----------------------------------------------------------
	$tbl_name="xh_dethi WHERE hinhthuc='1' ";		//Tên bảng cần phân trang
	$limit = 5; 				//Số dòng trên 1 trang
	$targetpage = "index.php?menu=dethi_list_them_cauhoi"; 	//đường dẫn chạy file này
	include('code_phantrang.php');
?>

</head>
<body>  
<div style="margin:20px 70px 10px; font-size:14px;">
<font size="2" face="Tahoma"><b>Đề thi<img src="images/bl3.gif" border="0" /> Quản lý đề thi</b></font></div>
<hr size="1" color="#cadadd" style="margin:15px auto;" />
<div style="margin:20px 0 auto;">
	<a href="?menu=dethi_news"><img src="images/add_new.gif" align="absmiddle" border="0" /></a> <a href="?menu=dethi_news">Thêm đề thi mới</a>
</div>
<div class='wrapper'>
  <input id="filter" type="text" value="Tìm kiếm..." onClick="if(this.value=='Tìm kiếm...')this.value='';" onBlur="if(this.value=='')this.value='Tìm kiếm...';" name="filter" /> 
  <form action="?menu=dethi_delete" method="post">
    <table cellpadding="1" cellspacing="1" id="resultTable">
			<thead>
				<tr>
					
					<th><input type="checkbox" name="checkid[]" id="checkid" value="<?=$counts?>" onClick="CheckALL(<?=$counts?>);" /></th>
                    <th>Mã đề</th>
                    <th>Tên đề</th>
                    <th>Loại đề</th>
                    <th>Cấp</th>
					<th>Nội dung đề thi</th>
					<th>Số câu</th>
                    <th>Thời gian</th>
					<th>Tác giả</th>
					<th>Khối</th>
                    <th>Môn</th>
                    <th>Hình thức</th>
					<th>Edit</th>
					<th>Add</th>
					<th>View</th>

				</tr>
			</thead>
        <tbody>
		<?php
			
//			$results = mysql_query("SELECT * FROM xh_dethi ");  //Nếu không phân trang thì dùng
			while($rows = mysql_fetch_array($phantrang))
			{	
//Lấy thông tin hình thức đề thi
			$sql123 = 'select * from xh_hinhthucdethi WHERE id ="'.$rows['hinhthuc'].'" ';
			$result123 = mysql_query($sql123);
			$rows123 = mysql_fetch_assoc($result123);
				$hinhthuc=$rows123['hinhthuc']; //tên hình thức đề

		?>
			<tr class="teacher">
			<td  align="center"><input type="checkbox" name="selector[]" value="$rows['made']" /></td>
			<td  align="center"><?php echo $rows['made']; ?> </td>
			<td><a href="?menu=dethi_cauhoilist&made=<?php echo  $rows['made']; ?>"> <?php echo  $rows['tende']; ?></a></td>
			<td  align="center"><?php echo $rows['loaide']; ?></td>
			<td  align="center"><?php echo $rows['capthi']; ?></td>
			<td><?php echo $rows['noidung']; ?></td>
			<td  align="center"><?php echo $rows['socau']; ?></td>
			<td  align="center"><?php echo $rows['thoigian']; ?></td>
			<td  align="center"><?php echo $rows['tacgia']; ?></td>
			<td  align="center"><?php echo $rows['khoi']; ?></td>
			<td  align="center"><?php echo $rows['mon']; ?></td>
			<td  align="center"><?php echo $hinhthuc; ?></td>
				<td><a href="?menu=dethi_edit&made=<?php echo  $rows['made']; ?>"><center><img src="images/edit_icon.png" /></center></a></td>
				<td><a href="?menu=dethi_cauhoi_news&made=<?php echo  $rows['made']; ?>"><center><img src="images/add_icon.png" /></center></a></td>
				<td><a href="?menu=dethi_cauhoi_view&made=<?php echo  $rows['made']; ?>"><center><img src="images/View-icon.png" /></center></a></td>

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