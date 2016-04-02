<?php
// Begin Session if not present
if(!isset($_SESSION)){
    session_start();
}	?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="en-US">
<link rel="shortcut icon" href="favicon.ico" />
<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php 	include("xuly/config/connect.php"); include("rewrite.php"); include("page_lay_link.php");?>
</head>

<body onload="setCountDown();">
<div id="trangchu">
	<div id="head_banner"> <!-- Begin Header -->
		<div id="banner">
			<div id="logo">
				<a href="index.php" title="Thi Toán online" rel="home">Thi Toán online</a>
			</div>	 
		</div>
		<div id="sticky_navigation">
				<div class="demo_container">
					<ul id="menu-page-menu" class="group">
						<li><a href="index.php">Trang chủ</a>
								<ul>
									<li><a href="?page=gt">Giới thiệu</a></li>
									<li><a href="?menu=dethi_list_tuluyen">Đề thi tự luyện</a></li>
								</ul>
						</li>
<!--						<li><a href="?page=gt">Giới thiệu</a></li>-->
						<li><a href="?page=vaothi">Vào thi</a></li>
						<li><a href="?page=tuluyen">Tự luyện</a></li>
						<li><a href="?page=t_kiem">Tìm kiếm</a></li>
						<li><a href="?page=hd">Hướng dẫn</a></li>
	<!--					<li><a href="?page=dktv">Đăng kí</a></li> -->
						<li><a href="?page=lienhe">Liên hệ</a></li>
						<li><a href="?page=hien_baitap">Bài tập</a></li>


					</ul>
				</div>
				<form role="search" method="post" id="searchform" action="index.php?page=search" >
					<div id="timkiem">
						<label class="screen-reader-text" for="s">Search for:</label>
						<input type="text" value="Tìm kiếm..." onClick="if(this.value=='Tìm kiếm...')this.value='';" onBlur="if(this.value=='')this.value='Tìm kiếm...';" name="txtkey" id="txtkey" /> 
						<input type="submit" name="ok" value="Search" />
					</div>
				</form>    

		</div>
	</div> <!-- End Header -->



	<div id="wrap"> <!-- Begin Wrap -->
			<div id="main_page" > <!-- main_page -->
				<div class="corner" style="padding: 0 10px 10px;">
					<?php include("page_than.php");?>
				</div> 
			</div> 	 <!-- End main_page -->

			<div id="right_col" class="corner"> <!-- Right -->
				<ul>      
					<a href="index.php?page=dktv" id="signup" class="nut_xanhlacay cssnut">Đăng nhập - Đăng ký</a>
					<?php include("xuly/login.php");?>
				</ul> 
				<ul>      
					<?php include("xuly/danhmucdethi/danhmucdethi.php");?>
				</ul> 

				<ul>      
					<?php include("xuly/tintuc/tinmoinhat.php");?>
				</ul> 
				
			</div> 	 <!-- End Right -->
	</div> <!-- End wrap-->



	<div class="clr"></div>
	<div id="footer">
		<?php include("page_footer.php");?>
	</div>


</div> <!-- End Page -->



<!--Đồng hồ-->
	<div style="position:fixed; left: 0; top: 30px; background: transparent; border: 0px solid #93F; padding:10px 0px; text-align:center;">
		<?php include("dongho/index.php");?>
	</div>
<!--End-->
<script>
console.log($.fn.jquery);
</script>
</body>
</html>