				<?php $page="";
				if(isset($_GET["page"])){$page=$_GET["page"]; }
				switch($page)
					{
					case "chon_dapan": include("xuly/chon_dapan.php"); break;
					case "chonhinhthuc": include("chonhinhthuc.php"); break;

//Đề thi
					case "vaothi": include("xuly/home.php"); break;
					case "theomon": include("xuly/1dethi_theomon.php"); break;
					case "chapnhan": include("xuly/2dethi_chapnhanlambai.php"); break;
					case "dethi": include("xuly/3dethi.php"); break;
					case "cn_kq": include("xuly/4dethi_capnhat_kqbailam.php"); break;
					case "xem_kq": include("xuly/5dethi_xemkqsaukhinopbai.php"); break;
					case "kq_chitiet": include("xuly/6dethi_xemkqua_chitiet.php"); break;
//Tự luyện
					case "tuluyen": include("xuly/tuluyen/home_tuluyen.php"); break;
					case "tl_theomon": include("xuly/tuluyen/1dethi_theomon_tuluyen.php"); break;
					case "tl_chapnhan": include("xuly/tuluyen/2dethi_chapnhanlambai_tuluyen.php"); break;
					case "tl_dethi_capnhattgianlamlai": include("xuly/tuluyen/2dethi_chapnhanlambai_tuluyen_capnhat_tgian.php"); break;
					case "tl_dethi": include("xuly/tuluyen/3dethi_tuluyen.php"); break;
					case "tl_dethi_lamlai": include("xuly/tuluyen/3dethi_tuluyen_lamtiep.php"); break;
					case "tl_cn_kq": include("xuly/tuluyen/4dethi_capnhat_kqbailam_tuluyen.php"); break;
					case "tl_cn_kq_lamtiep": include("xuly/tuluyen/4dethi_capnhat_kqbailam_tuluyen_lamtiep.php"); break;
					case "tl_xem_kq": include("xuly/tuluyen/5dethi_xemkqsaukhinopbai_tuluyen.php"); break;
					case "tl_kq_chitiet": include("xuly/tuluyen/6dethi_xemkqua_chitiet_tuluyen.php"); break;


					case "thongtin": include("xuly/thongtindethi.php"); break;
					case "hd": include("xuly/huongdan.php"); break;
					case "gt": include("xuly/gioithieu.php"); break;
					case "lienhe": include("xuly/guiykien.php"); break;
					case "editmeber": include("xuly/editmeber.php"); break;
					case "news": include("xuly/tintuc/news_detail.php"); break;
					case "search": include("xuly/kqsearch.php"); break;
					case "error": include("error.php"); break;
					case "t_kiem": include("xuly/timkiemhs.php"); break;
					case "dangki": include("xuly/dangkitv/xhdktv.php"); break;
//					case "dsdethi": include("admin/quanlydatabase/ds_dethitrangchu.php"); break;
					case "xem_kqchitiet": include("xuly/timkiemhs_laymade.php"); break;
					case "xem_kqthi": include("xuly/timkiemhs_xemchitietkq.php"); break;
					case "dktv": include("dangki_tv/dangki_tv.php"); break;
					case "cntttv": include("dangki_tv/capnhatthanhvien.php"); break;
					case "dang_nhap": include("dangki_tv/login.php"); break;
					case "login_ok": include("xuly/login_ok.php"); break;

//Các thông báo					
					case "thong_bao": include("xuly/tb_chuadangnhap.php"); break;
					case "ktimthaybl": include("xuly/tb_ktimthaybailam.php"); break;
					case "camonykien": include("xuly/tb_camon_guiykien.php"); break;
					case "dethichuaco": include("xuly/tb_dethichuaco.php"); break;
					case "tb_quasolanthi": include("xuly/tuluyen/tb_thiqua3lan.php"); break;
					case "tb_solanthi": include("xuly/tuluyen/tb_solanthi.php"); break;

//Đề thi
					case "hien_baitap": include("xuly/hien_baitap.php"); break;



					default: include("xuly/tintuc/news.php"); break;
					}
				?>
