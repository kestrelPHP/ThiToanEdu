<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
	<head>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="css/hien_baitap.css"/>
<?php 
include("config/connect.php");
		$sql="SELECT * FROM xh_cauhoi WHERE made='1'";
		$rs=mysql_query($sql);
?>

<?php //Thêm Phân trang ----------------------------------------------------------
	$tbl_name="xh_cauhoi WHERE made='1' ";		//Tên bảng cần phân trang
	$limit = 2; 								//Số dòng trên 1 trang
	$targetpage = "?page=hien_baitap"; 			//đường dẫn chạy file này
	include('1hong/code_phantrang.php');
?>


	</head>
		
	<body>
		<div id="main1">
			<form><!--kiểu radio-->
<?php 
			$i=0;
			while($rows=mysql_fetch_array($phantrang)) 
			{
?>
				<section>
					<input type="radio" name="form2" id="<?php echo "k".$i; ?>" class="input">
					<label for="<?php echo "k".$i; ?>" class="nhan">
						<?php echo $rows['id']; ?>
					</label>
					<div class="contenthd" align="center">
								<?php echo $rows['noidung']; ?>
                    </div>
				</section>
<?php
				$i++;
					}?>

			</form>
		</div><!--end main-->
	</body>
</html>
