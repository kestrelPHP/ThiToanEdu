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
			$rscount = mysql_query("SELECT * FROM xh_user");
			while($rowscounts = mysql_fetch_array($rscount))
			{
				$counts++;
			}
?>
<?php //Thêm Phân trang ----------------------------------------------------------
	$tbl_name="xh_user";		//Tên bảng cần phân trang
	$limit = 20; 				//Số dòng trên 1 trang
	$targetpage = "index.php?menu=ds_user"; 	//đường dẫn chạy file này
	include('code_phantrang.php');
?>


</head>
<body>  
<div style="margin:20px 70px 10px; font-size:14px;">
<font size="2" face="Tahoma"><b>Giáo viên<img src="images/bl3.gif" border="0" /> Quản lý giáo viên</b></font></div>
<hr size="1" color="#cadadd" style="margin:15px auto;" />
<div style="margin:20px 0 auto;">
	<a href="?menu=hocsinh_news"><img src="images/add_new.gif" align="absmiddle" border="0" /></a> <a href="?menu=them_user">Thêm học giáo viên mới</a>
</div>
<div class='wrapper'>
  <input id="filter" type="text" value="Tìm kiếm..." onClick="if(this.value=='Tìm kiếm...')this.value='';" onBlur="if(this.value=='')this.value='Tìm kiếm...';" name="filter" /> 
  <form action="?menu=xoa_user" method="post">
    <table cellpadding="1" cellspacing="1" id="resultTable">
			<thead>
				<tr>
					
					<th><input type="checkbox" name="checkid[]" id="checkid" value="<?=$counts?>" onClick="CheckALL(<?=$counts?>);" /></th>
					<th><strong>ID</strong></th>
					<th><strong>Họ tên</strong></th>
					<th><strong>Tên đăng nhập</strong></th>
					<th><strong>Pass</strong></th>
					<th><strong>Giới</strong></th>
					<th><strong>Ngày sinh</strong></th>
					<th><strong>Mail</strong></th>
					<th><strong>Phân cấp</strong></th>
					<th><strong>Level</strong></th>
					<th><strong>Ảnh</strong></th>
					<th><strong>Ngày tạo</strong></th>
					<th><strong></strong></th>
				</tr>
			</thead>
        <tbody>
		<?php
			
//			$results = mysql_query("SELECT * FROM xh_user "); //Nếu không phân trang thì dùng
			while($rows = mysql_fetch_array($phantrang))
			{	
			echo '<tr class="teacher">
				<td>' . '<input type="checkbox" name="selector[]" value="'.$rows['id'].'" />' . '</td>
				<td>'.$rows['id'].'</td>
				<td>'.$rows['hoten'].'</td>
				<td>'.$rows['user'].'</td>
				<td>'.$rows['pass'].'</td>
				<td>'.$rows['gioi'].'</td>
				<td>'.$rows['ns'].'</td>
				<td>'.$rows['mail'].'</td>
				<td>'.$rows['phancap'].'</td>
				<td>'.$rows['level'].'</td>
				<td>'.$rows['image'].'</td>
				<td>'.$rows['date'].'</td>
				<td><a href="?menu=sua_user&id='.$rows['id'].'"><img src="images/go_right.gif" /></a></td>
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