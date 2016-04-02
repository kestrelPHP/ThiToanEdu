<link rel="stylesheet" href="febe/style.css" type="text/css" media="screen" charset="utf-8">
<?php
include('config.php');
if(isset($_POST["bnm"]))
		{
					//Xóa file ảnh của học sinh
					$hinhanh = $_POST["hinhanh"];
					unlink("../upload/images/hocsinh/".$hinhanh);
					//end xóa file ảnh
//Xóa học sinh:
			$made = $_POST["selector"];
			$delete = "delete from xh_hocsinh where idhs in(";
			foreach($made as $key=>$value)
			{
					$delete.="'".$value."',"; 
					//echo $value;
			}
			$delete .= "'')";
			 echo $delete;
			
		 
			if (mysql_query($delete , $con)) {
				header("location:?menu=hocsinh_list");
			}
			else {
				echo "<br>Error inserting database: " . mysql_error();
			}
			mysql_close ($con);  
			 
		}
		else
		{
			echo "<script>alert('Không thể xóa dữ liệu !');window.location='?menu=hocsinh_list'</script>";
		}
?>