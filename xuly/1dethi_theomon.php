<?php 

$monthi=$_SESSION['mon'];

?>

<?php //PHÂN TRANG
	include("config/connect.php");
//	$tbl_name="xh_dethi";					//Tên bảng cần phân trang
	$limit = 10; 							//Số dòng trên 1 trang
	$targetpage = "index.php?page=theomon"; 	
//<!--END PHÂN TRANG-->

if(isset($_SESSION['khoihoc'])) 
{
	$tbl_name="xh_dethi WHERE khoi='".$_SESSION['khoihoc']."' and mon='$monthi' and hinhthuc='1' ";		
}
else 
	{
	$tbl_name="xh_dethi WHERE mon='$monthi' and hinhthuc='1'";		
	}
	include('1hong/code_phantrang.php');
//Kiểm tra đề thi tồn tại chưa
	$ktradl=mysql_num_rows($phantrang);
	if ($ktradl==0)		echo"<script>document.location.href='index.php?page=dethichuaco' </script>";	
?>



<?php //session_start();
//	$sql="select * from xh_dethi WHERE khoi='".$_SESSION['khoihoc']."'";
	//echo $sql;
//	$query=mysql_query($sql);
	while($row=mysql_fetch_array($phantrang))
	{
?>
		<div class="dethi">
			<a href="?page=chapnhan&made=<?php echo $row['made'];?>"><?php echo $row['tende'];?></a></h3>
			<p class="dethi1"><?php echo $row['noidung'];?></p>
		</div>

		<div class="images" style="padding: 0px 0 0px 5px;">
			<a href="?page=chapnhan&made=<?php echo $row['made'];?>">
				<img  height=90px width=90px src="./upload/images/dethi/<?php echo $row['hinhanh']; ?>">
			</a>
		</div>

		<div class="clear"></div>
<?php 	} //end while  ?>

<?=$pagination?>   <!--Thanh phân trang-->
