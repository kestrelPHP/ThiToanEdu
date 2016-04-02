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
	  <link rel="stylesheet" href="febe/style.css" type="text/css" media="screen" charset="utf-8">
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
			$rscount = mysql_query("SELECT * FROM tbl_dethi");
			while($rowscounts = mysql_fetch_array($rscount))
			{
				$counts++;
			}
?>
</head>
<body>  
<div style="margin:20px 70px 10px; font-size:14px;">
<font size="2" face="Tahoma"><b>Đề thi<img src="images/bl3.gif" border="0" />Xem tất cả câu hỏi của đề thi</b></font></div>
<hr size="1" color="#cadadd" style="margin:15px auto;" />
<div style="margin:20px 70px auto;">
	<a href="?menu=dethi_news"><img src="images/add_new.gif" align="absmiddle" border="0" /></a> <a href="?menu=dethi_news">Đê thi mới</a>
</div>
<div class='wrapper'>
  <input id="filter" type="text" value="Tìm kiếm..." onClick="if(this.value=='Tìm kiếm...')this.value='';" onBlur="if(this.value=='')this.value='Tìm kiếm...';" name="filter" /> 



  <form action="" method="post">
   <table cellpadding="1" cellspacing="1" id="resultTable">
		<td>
		<?php $sql="select * from tbl_dethi"; $query=mysql_query($sql); ?>

		<select name="gantende" >
			<?php while ($row = mysql_fetch_array($query)) {?>
				<option value="<?php echo $row["tende"];?>"> <?php echo $row['tende']; ?></option>
			<?php } ?>
		</select>
		</td>
    </table>






       	 <input type="submit" name="ok" id="ok" value="Xem đề thi" />
	</form>


<?php

if(isset($_POST['ok']))
{	

$i = $_POST['gantende']; // lay du lieu tu cai checkbox
$timselect=mysql_query("SELECT * FROM tbl_cauhoi where tende like '%$i%' ");


//Tạo bảng:
			echo '<table border ="1" align = "center">';
			echo '<tr>';
			echo '<th width ="40"align = "center"height ="30"> Câu</th>';
			echo '<th width = "200"align = "center"> Nội dung </th>';
			echo '<th width = "300"align = "center"> Đáp án</th>';
			echo '<th width = "300"align = "center"> Mã đề</th>';
			
			echo '</tr>';
while($row=mysql_fetch_array($timselect))
{
//Ghi kết quả truy vấn ra bảng:
			echo '<tr>';

			echo '<td align = "center">'; echo $row["ma_ch"]; 
			echo '</td>';

			echo '<td align = "center">';echo $row["noidung"] ;
			echo '</td>';
			echo '<td align = "center">';  echo $row["dapan"];
			echo '</td>';
			echo '<td align = "center">';  echo $row["made"];
			echo '</td>';


}			echo '</tr>';



}
?>
</div>
  </body>
</html>
