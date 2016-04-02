<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="en-US">
<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Thi Toán Online || Thi trắc nghiệm || toán online Thi toán ||</title>
</title>
<!--sa poip up-->
	<link href="src/facebox.css" media="screen" rel="stylesheet" type="text/css" />

<script LANGUAGE="JavaScript">
<!--
// Nannette Thacker http://www.shiningstar.net
function confirmSubmit()
{
var agree=confirm("Có chắc chắn muốn xóa tất cả bài làm của học sinh không?");
if (agree)
	return true ;
else
	return false ;
}
// -->
</script>







</head>
<body>  
<div style="margin:20px 70px 10px; font-size:14px;">
<font size="2" face="Tahoma"><b>Bài làm tự luyện<img src="images/bl3.gif" border="0" /> Xóa toàn bộ bài làm tự luyện của học sinh</b></font></div>
<hr size="1" color="#cadadd" style="margin:15px auto;" />
<div class='wrapper'>
  <form id="form1" action="" method="post">
		<?php
			include('config.php');
			$results = mysql_query("SELECT * FROM xh_kqbailam_tl ");
			$rows=mysql_num_rows($results);
			echo "Tổng số dữ liệu hiện có: " .$rows."</br>";

		?>
	<input type="submit" id = "inputs" name="ok" value="Xóa tất cả bài làm của học sinh" style="margin:3px 50px auto;" onClick="return confirmSubmit()" >







	</form>
</div>
  </body>
</html>

<?php
if(isset($_POST['ok']))
{	 

			$xoa="delete FROM xh_kqbailam_tl"; 
			mysql_query ($xoa);

	//Kiểm tra xem thành viên đã được xóa hay chưa
	$gan="select * from xh_kqbailam_tl";
	$kt=mysql_query($gan);
	if(mysql_num_rows($kt) != "") {echo "Xóa thất bại<br />";}
	else
	{
		echo "Đã xóa thành công";
	}

}

?>

