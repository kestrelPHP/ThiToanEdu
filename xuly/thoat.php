<?php
session_start();
if(isset($_GET['unset']))
{
	unset($_SESSION['username']);
	unset($_SESSION['khoihoc']);	
	unset($_SESSION['hoten']);
	unset($_SESSION['id']);	
	unset($_SESSION['user']);	

	//echo "<script>alert('Thoát thành công!!!');
	echo"<script>document.location.href='../index.php' </script>";
}
?>