<link rel="stylesheet" href="febe/style.css" type="text/css" media="screen" charset="utf-8">
<?php
include('config.php');
if(isset($_POST["bnm"]))
		{
			$i=0;
			$made = $_POST["selector"];
			$delete = "delete from xh_cauhoi where id in(";
			foreach($made as $key=>$value)
			{
					$delete.="'".$value."',"; 
					//echo $value;
			$i++;	//Đếm số câu đã xóa - chưa sử dụng biến này
			}
			$delete .= "'')";
			 echo $delete;
			if (mysql_query($delete , $con)) {
				header("location:?menu=cauhoi_list");
			}
			else {
				echo "<br>Error inserting database: " . mysql_error();
			}
			mysql_close ($con);  
			 
		}
		else
		{
			echo "<script>alert('Không thể xóa dữ liệu !');window.location='?menu=cauhoi_list'</script>";
		}
?>

