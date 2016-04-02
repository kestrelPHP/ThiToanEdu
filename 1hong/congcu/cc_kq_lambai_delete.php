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
<font size="2" face="Tahoma"><b>Xóa bài thi<img src="images/bl3.gif" border="0" />Xóa toàn bộ bài thi của học sinh</b></font></div>
<hr size="1" color="#cadadd" style="margin:15px auto;" />
<div class='wrapper'>
  <form action="" method="post" id="myCoolForm">
		<?php
			include('config.php');
			$results = mysql_query("SELECT * FROM xh_kqbailam ");
			$rows=mysql_num_rows($results);
			echo "Tổng số dữ liệu hiện có: " .$rows."</br>";

		?>
	<input type="submit" name="ok" value="Xóa tất cả kết quả làm bài" style="margin:3px 50px auto;" onClick="return confirmSubmit()">
	</form>
</div>
  </body>
</html>

<?php
if(isset($_POST['ok']))
{	 
	while($rows = mysql_fetch_array($results))
	{
			$xoa="delete FROM xh_kqbailam"; 
			mysql_query ($xoa);
	}

	//Kiểm tra xem thành viên đã được xóa hay chưa
	$gan="select * from xh_kqbailam where id='".$id."'";
	$kt=mysql_query($gan);
	if(mysql_num_rows($kt) != "") {echo "Đã xóa thất bại<br />";}
	else
	{
		echo "Đã xóa thành công";
	}

}

?>