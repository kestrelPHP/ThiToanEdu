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
			$rscount = mysql_query("SELECT * FROM xh_cauhoi");
			while($rowscounts = mysql_fetch_array($rscount))
			{
				$counts++;
			}
?>

<?php //Thêm Phân trang ----------------------------------------------------------
	$tbl_name="xh_cauhoi";		//Tên bảng cần phân trang
	$limit = 20; 				//Số dòng trên 1 trang
	$targetpage = "index.php?menu=cauhoi_list"; 	//đường dẫn chạy file này
	include('code_phantrang.php');
?>
<?php include_once('tooltip/goi_tooltip.php');?> <!--Gọi tooltip database-->



</head>
<body>  
<div style="margin:20px 70px 10px; font-size:14px;">
<font size="2" face="Tahoma"><b><a href="?menu=cauhoi_list">CÂU HỎI</a><img src="images/bl3.gif" border="0" /> QUẢN LÝ CÂU HỎI</b></font></div>
<hr size="1" color="#cadadd" style="margin:15px auto;" />
<div style="margin:5x 0 auto;">
<a href="?menu=cauhoi_news"><img src="images/add_new.gif" align="absmiddle" border="0" /></a> <a href="?menu=cauhoi_news">Thêm câu hỏi mới</a>
</div>
<div class='wrapper'>
  <input id="filter" type="text" value="Tìm kiếm..." onClick="if(this.value=='Tìm kiếm...')this.value='';" onBlur="if(this.value=='')this.value='Tìm kiếm...';" name="filter" /> 
  <form action="?menu=cauhoi_delete" method="post">
    <table cellpadding="1" cellspacing="1" id="resultTable"> 
								<!-- 
								Cột nào muốn không sort để class="nosort"
								-->
			<thead>
				<tr>
					
					<th><input type="checkbox" name="checkid[]" id="checkid" value="<?=$counts?>" onClick="CheckALL(<?=$counts?>);" /></th>
					<th>ID</th>
					<th>Nội dung</th>
					<th>Đáp an</th>
					<th>xem</th>
					<th>Edit</th>
				</tr>
			</thead>
        <tbody>
		<?php
//			$results = mysql_query("SELECT * FROM xh_cauhoi "); //Nếu không phân trang thì dùng
			while($rows = mysql_fetch_array($phantrang))  //Gọi phân trang -> $phantrang
			{ $id=$rows['id'];
?>			
			<tr class="teacher">
			<td><input type="checkbox" name="selector[]" value="'<?php echo $rows['id']; ?>'" /></td>
			<td><?php echo $rows['id']; ?></td>
			<td><?php echo $rows['noidung']; ?></td>
			<td><?php echo $rows['dapan']; ?></td>
			<td><a href="?menu=xem_chitiet_cauhoi&id=<?php echo $rows['id']; ?>" onmouseover="tooltip.pop(this, '<?php echo '#'.$id; ?>', {position:1, offsetX:-20, effect:'slide', sticky: true})">Xem</a>
				<?php include('tooltip/xemchitietcauhoi.php');?>
			</td>
			<td><a href="?menu=cauhoi_edit&id=<?php echo $rows['id']; ?>"><img src= "images/go_right.gif" /></a></td>
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







