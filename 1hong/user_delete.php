<link rel="stylesheet" href="febe/style.css" type="text/css" media="screen" charset="utf-8">
<?php
include('config.php');
if(isset($_POST["bnm"]))
		{
			$made = $_POST["selector"];
			$delete = "delete from xh_user where id in(";
			foreach($made as $key=>$value)
			{
					$delete.="'".$value."',"; 
					//echo $value;
			}
			$delete .= "'')";
			 echo $delete;
			
		 
			if (mysql_query($delete , $con)) {
				header("location:?menu=ds_user");
			}
			else {
				echo "<br>Error inserting database: " . mysql_error();
			}
			mysql_close ($con);  
			 
		}
		else
		{
			echo "<script>alert('Không thể xóa dữ liệu !');window.location='?menu=ds_user'</script>";
		}
?>