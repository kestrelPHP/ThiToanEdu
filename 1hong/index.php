<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php include('index_head.php'); ?>
</head>

<body>
<?php
		session_start();
		include('config.php');
		if(!isset($_SESSION['USER']))
		{
            header('Location:login.php');
		} else {
			
		}
?>    
<div id="page-wrap">
        <!-- Header-Logo -->
    	<div id="header" align="center">
        	<h1 id="logo"><a href="index.php">logo</a></h1>
        </div>
        <!-- End Header-Logo -->
        
        <!-- Menu top-->
		<div id="top-bar">
			<ul id="menu-page-menu" class="group">
				<li><a href="index.php">Home</a></li>
				<li><a href="?menu=hocsinh_list">Học sinh</a></li>
				 
				<li><a href="?menu=dethi_list_them_cauhoi">Đề thi</a>
					<ul>
						<li><a href="?menu=dethi_list_thi">Đề thi chính thức</a></li>
						<li><a href="?menu=dethi_list_tuluyen">Đề thi tự luyện</a></li>
						<li><a href="?menu=dethi_list_khongdang">Đề thi chưa đăng</a></li>

					</ul>
				</li>
				<li><a href="?menu=cauhoi_list">Câu hỏi</a></li>
				<li><a href="?menu=tintuc_list">Tin tức</a></li>
				<li><a href="?menu=ds_user">Giáo viên</a></li>
				<li><a href="#">Công cụ thi</a>
					<ul>
						<li><a href="?menu=thong_ke">Tổng hợp kết quả</a></li>
						<li><a href="?menu=ktra_hsdalambai">Kiểm tra HS đã làm bài</a></li>
						<li><a href="?menu=xoa_kqlambai">Xóa kq làm bài</a></li>
						<li><a href="?menu=xephang_thi">Xếp hạng thi</a></li>
						<li><a href="?menu=xephang_tuluyen">Xếp hạng tự luyện</a></li>

					</ul>
				</li>
				<li><a href="#">Công cụ tự luyện</a>
					<ul>
						<li><a href="?menu=thong_ke_tl">Tổng hợp kết quả</a></li>
						<li><a href="?menu=ktra_hsdalambai_tl">Kiểm tra HS đã làm bài</a></li>
						<li><a href="?menu=xoa_kqlambai_tl">Xóa kq làm bài</a></li>
						<li><a href="?menu=xephang_thi_tl">Xếp hạng thi</a></li>
						<li><a href="?menu=xephang_tuluyen_tl">Xếp hạng tự luyện</a></li>

					</ul>
				</li>


				<li><a href="#">Lý thuyết</a>
					<ul>
						<li><a href="?menu=themphanmon">Thêm phân môn</a></li>
					</ul>
				</li>


				<!--chao administrator-->
				<div align="right" style="color:#FF0; font-weight:bold; margin:3px 5px; font-size:14px;">
					<a href='../index.php' style="color: #ff0033;" target="_blank" >Xem website</a>
					Hello: <?php echo $_SESSION['USER'];?>
					<a href='?menu=lout'><span ><img border="0" src="images/logout.png"/></span></a>
				</div>
			</ul>
		</div>
        <!--End Menu top-->

		<div id="rsidebar">
			<?php include('index_than.php'); ?>
		</div>



</div><!-- end page-wrap-->


</body>
</html>