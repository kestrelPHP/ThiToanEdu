                <h5 style="margin-top:0px; margin-bottom:5px;"></h5>
	<?php
		if(isset($_GET['menu'])){
			if($_GET['menu']=='hocsinh_list'){
				include "hocsinh_list.php";
			}elseif($_GET['menu']=='hocsinh_edit'){
				include "hocsinh_edit.php";
			}elseif($_GET['menu']=='hocsinh_saveedit'){
				include "hocsinh_saveedit.php";
			}else if($_GET['menu']=='hocsinh_delete'){
				include("hocsinh_delete.php");
			}else if($_GET['menu']=='hocsinh_news'){
				include("hocsinh_news.php");
			}
//Câu hỏi						
			if($_GET['menu']=='cauhoi_list'){
				include "cauhoi_list.php";
			}else if($_GET['menu']=='cauhoi_news'){
				include("cauhoi_news.php");
			}else if($_GET['menu']=='cauhoi_delete'){
				include("cauhoi_delete.php");
			}else if($_GET['menu']=='cauhoi_edit'){
				include("cauhoi_edit.php");
			}else if($_GET['menu']=='cauhoi_saveedit'){
				include("cauhoi_saveedit.php");

			}else if($_GET['menu']=='xem_chitiet_cauhoi'){
				include("chitietdethi/xemchitietcauhoi.php");


//Câu hỏi theo Đề thi
			}else if($_GET['menu']=='dethi_list_them_cauhoi'){
				include("dethi_list_them_cauhoi.php");
			}else if($_GET['menu']=='dethi_list_tuluyen'){
				include("dethi_list_tuluyen.php");
			}else if($_GET['menu']=='dethi_list_thi'){
				include("dethi_list_thi.php");
			}else if($_GET['menu']=='dethi_cauhoi_view'){
				include("dethi_cauhoi_view.php");

			}else if($_GET['menu']=='dethi_cauhoi_news'){
				include("dethi_cauhoi_news.php");
			}else if($_GET['menu']=='dethi_cauhoilist'){
				include("dethi_cauhoi_list.php");
			}else if($_GET['menu']=='dethi_cauhoi_edit'){
				include("dethi_cauhoi_edit.php");
			}else if($_GET['menu']=='dethi_cauhoi_saveedit'){
				include("dethi_cauhoi_saveedit.php");
			}else if($_GET['menu']=='dethi_cauhoi_delete'){
				include("dethi_cauhoi_delete.php");
//Đề thi chưa đăng
			}else if($_GET['menu']=='dethi_list_khongdang'){
				include("dethi_list_khongdang.php");


			}
//Tin tức						
			if($_GET['menu']=='tintuc_list'){
				include "tintuc_list.php";
			}else if($_GET['menu']=='tintuc_news'){
				include("tintuc_news.php");
			}else if($_GET['menu']=='tintuc_delete'){
				include("tintuc_delete.php");
			}else if($_GET['menu']=='tintuc_edit'){
				include("tintuc_edit.php");
			}else if($_GET['menu']=='tintuc_saveedit'){
				include("tintuc_saveedit.php");

			}
//Đề thi						
			if($_GET['menu']=='dethi_list'){
				include "dethi_list.php";
			}elseif($_GET['menu']=='dethi_edit'){
				include "dethi_edit.php";
			}elseif($_GET['menu']=='dethi_saveedit'){
				include "dethi_saveedit.php";
			}else if($_GET['menu']=='dethi_delete'){
				include("dethi_delete.php");
			}else if($_GET['menu']=='dethi_news'){
				include("dethi_news.php");
			}else if($_GET['menu']=='dethi_themcauhoi'){
				include("dethi_news.php");

//Công cụ
			}else if($_GET['menu']=='thong_ke'){
				include("congcu/cc_tonghopkq_list.php");
			}else if($_GET['menu']=='thkq_chitiet'){
				include("congcu/cc_tonghopkq_chitiet.php");
			}else if($_GET['menu']=='xoa_thkq'){
				include("congcu/cc_tonghopkq_delete.php");
			}else if($_GET['menu']=='ktra_hsdalambai'){
				include("congcu/cc_ktra_dalambai_list.php");
			}else if($_GET['menu']=='xoa_ktra_hsdalambai'){
				include("congcu/cc_ktra_dalambai_delete.php");
			}else if($_GET['menu']=='xoa_kqlambai'){
				include("congcu/cc_kq_lambai_delete.php");
//Công cụ tự luyện
			}else if($_GET['menu']=='thong_ke_tl'){
				include("congcu/tl_cc_tonghopkq_list.php");
			}else if($_GET['menu']=='thkq_chitiet_tl'){
				include("congcu/tl_cc_tonghopkq_chitiet.php");
			}else if($_GET['menu']=='xoa_thkq_tl'){
				include("congcu/tl_cc_tonghopkq_delete.php");
			}else if($_GET['menu']=='ktra_hsdalambai_tl'){
				include("congcu/tl_cc_ktra_dalambai_list.php");
			}else if($_GET['menu']=='xoa_ktra_hsdalambai_tl'){
				include("congcu/tl_cc_ktra_dalambai_delete.php");
			}else if($_GET['menu']=='xoa_kqlambai_tl'){
				include("congcu/tl_cc_kq_lambai_delete.php");



			}else if($_GET['menu']=='xephang_thi'){
				include("xephang_thi.php");
			}else if($_GET['menu']=='xephang_tuluyen'){
				include("xephang_tuluyen.php");


			
			}else if($_GET['menu']=='ds_user'){
				include("user_list.php");
			}else if($_GET['menu']=='them_user'){
				include("user_news.php");
			}else if($_GET['menu']=='sua_user'){
				include("user_edit.php");
			}else if($_GET['menu']=='sua_user_save'){
				include("user_saveedit.php");
			}else if($_GET['menu']=='xoa_user'){
				include("user_delete.php");
			}else if($_GET['menu']=='phan-quyen'){
				include("nhanvien-phanquyen.php");
			}else if($_GET['menu']=='lout'){
				include("lout.php");
//Lý thuyết:
			}else if($_GET['menu']=='themphanmon'){
				include("lythuyethsg/phanmon_news.php");



			}else{
			}
		}else
			include "dethi_list_them_cauhoi.php";
	?>
