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
			$made = $_GET["made"];
			$counts=0;
			$rscount = mysql_query("SELECT * FROM xh_cauhoi WERE made='$made' ");
			while($rowscounts = mysql_fetch_array($rscount))
			{
				$counts++;
			}
?>

<?php //Thêm Phân trang ----------------------------------------------------------
	$tbl_name="xh_cauhoi WHERE made='$made'";		//Tên bảng cần phân trang
	$limit = 20; 				//Số dòng trên 1 trang
	$targetpage = "index.php?menu=dethi_cauhoilist"; 	//đường dẫn chạy file này
	include('code_phantrang.php');
?>
</head>
<body>  
<div style="margin:20px 70px 10px; font-size:14px;">
<font size="2" face="Tahoma"><b><a href="?menu=dethi_list_them_cauhoi">ĐỀ THI</a><img src="images/bl3.gif" border="0"/> QUẢN LÝ CÂU HỎI CỦA ĐỀ</b></font></div>
<hr size="1" color="#cadadd" style="margin:15px auto;" />
		<?php
					/* Lấy thông tin đề thi trong xh_dethi*/
					$sql="select * from xh_dethi where made like '$made'";
					$query=mysql_query($sql);
					$row=mysql_fetch_array($query);
						$gantende=$row["tende"];
						$ganmon=$row["mon"];
						$ganloaide=$row["loaide"];
						$gankhoi=$row["khoi"];
		?>
		<center><a style="font-size:15px; font-family:Arial, Helvetica, sans-serif; clor: #ff0000" align="center" > <?php echo "Tên đề: ".$gantende."</br>"; ?> 	</a></center>
<div style="margin:5x 0 auto;">
	<a href="?menu=dethi_cauhoi_news"><img src="images/add_new.gif" align="absmiddle" border="0" /></a> <a href="?menu=dethi_cauhoi_news">Thêm câu hỏi mới vào đề thi này</a>
</div>
<div class='wrapper'>
  <input id="filter" type="text" value="Tìm kiếm..." onClick="if(this.value=='Tìm kiếm...')this.value='';" onBlur="if(this.value=='')this.value='Tìm kiếm...';" name="filter" /> 
  <form action="?menu=cauhoi_delete" method="post">
    <table cellpadding="1" cellspacing="1" id="resultTable">
			<thead>
				<tr>
					
					<th><input type="checkbox" name="checkid[]" id="checkid" value="<?=$counts?>" onClick="CheckALL(<?=$counts?>);" /></th>
					<th>ID</th>
                    <th>Mã đề</th>
                    <th>Loại đề</th>
                    <th>Môn</th>
                    <th>Khối</th>
					<th>Nội dung</th>
					<th>Đáp an</th>
					<th>Điểm</th>
					<th>Duyệt đề</th>
					<th>Edit</th>
				</tr>
			</thead>
        <tbody>
		<?php
			
//			$results = mysql_query("SELECT * FROM xh_cauhoi "); //Nếu không phân trang thì dùng
			while($rows = mysql_fetch_array($phantrang))  //Gọi phân trang -> $phantrang
			{
				
			echo '<tr class="teacher">
			<td>' . '<input type="checkbox" name="selector[]" value="'.$rows['id'].'" />' . '</td>
			<td>'.$rows['id'].'</td>
			<td>'.$rows['made'].'</td>
			<td>'.$rows['loaide'].'</td>
			<td>'.$rows['mon'].'</td>
			<td>'.$rows['khoi'].'</td>
			<td>'.$rows['noidung'].'</td>
			<td>'.$rows['dapan'].'</td>
			<td>'.$rows['diem'].'</td>
			<td>'.$rows['duyetde'].'</td>
			<td><a href="?menu=dethi_cauhoi_edit&id='.$rows['id'].'&made='.$made.'"><img src= "images/go_right.gif" /></a></td>
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