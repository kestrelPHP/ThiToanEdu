<?php
// Begin Session if not present
if (!isset($_SESSION)) {
    session_start();
} ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="en-US">
<head profile="http://gmpg.org/xfn/11">
    <link rel="shortcut icon" href="favicon.ico"/>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <?php include("xuly/config/connect.php"); include("rewrite.php"); include("page_lay_link.php"); ?>
</head>
<?php
function current_page ($name) {
    if( isset($_REQUEST['page']) && $_REQUEST['page'] == $name ){
        echo 'active';
    } elseif ( isset($_REQUEST['menu']) && $_REQUEST['menu'] == $name ){
        echo 'active';
    } elseif ( empty($_REQUEST) && $name =="" ){
        echo 'active';
    } else {
        echo "";
    }
}
?>
<body onload="setCountDown();">
<div id="trangchu" class="container">
    <div class="row">
        <div id="banner" class="hidden-xs">
            <div id="logo">
                <a href="index.php" title="Thi Toán online" rel="home">Thi Toán online</a>
            </div>
        </div>
    </div>
    <div id="nav-menu-top" class="row">
        <div class="navbar navbar-inverse navbar-static-top" role="navigation">

            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand hidden-sm hidden-md hidden-lg" rel="home" href="/" title="Thi giải toán Online"><img src="http://host.local/images/logo.png" class="img-50x50 img-responsive"/></a>
            </div>

            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav">
                    <li><a href="index.php" class="<?php current_page("");?>">Trang Chủ</a></li>
                    <li><a href="?page=vaothi" class="<?php  current_page("vaothi");?>">Vào Thi</a></li>
                    <li><a href="?page=tuluyen" class="<?php  current_page("tuluyen");?>">Tự Luyện</a></li>
                    <li><a href="?menu=dethi_list_tuluyen" class="<?php  current_page("dethi_list_tuluyen");?>">Đề thi tự luyện</a></li>
                    <li><a href="?page=hien_baitap" class="<?php  current_page("hien_baitap");?>">Bài tập</a></li>
                    <li><a href="?page=t_kiem" class="<?php  current_page("t_kiem");?>">Tìm kiếm</a></li>
                    <li><a href="?page=hd" class="<?php  current_page("hd");?>">Hướng dẫn</a></li>
                    <li><a href="?page=lienhe" class="<?php  current_page("lienhe");?>">Liên hệ</a></li>
                    <li><a href="?page=gt" class="<?php  current_page("gt");?>">Giới thiệu</a></li>
                </ul>

                <div class="col-sm-3 col-md-3 pull-right">
                    <form class="navbar-form" role="search" id="searchform" action="index.php?page=search" method="post">
                        <div id="timkiem" class="input-group">
<!--                            <input type="text" class="form-control" value="" placeholder="Tìm kiếm" name="srch-term" id="srch-term">-->
                            <input type="text" class="form-control" value="Tìm kiếm..." onClick="if(this.value=='Tìm kiếm...')this.value='';" onBlur="if(this.value=='')this.value='Tìm kiếm...';" name="txtkey" id="txtkey"/>
                            <div class="input-group-btn">
                                <button class="btn btn-default" value="Search" name="ok" type="submit"><i class="glyphicon glyphicon-search"></i></button>
                            </div>
                        </div>
                    </form>
                </div>

            </div>
        </div>
        <!-- Begin Header -->
        <!--
        <div id="head_banner">
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
                        <li><a href="?page=vaothi">Vào thi</a></li>
                        <li><a href="?page=tuluyen">Tự luyện</a></li>
                        <li><a href="?page=t_kiem">Tìm kiếm</a></li>
                        <li><a href="?page=hd">Hướng dẫn</a></li>
                        <li><a href="?page=lienhe">Liên hệ</a></li>
                        <li><a href="?page=hien_baitap">Bài tập</a></li>


                    </ul>
                </div>
                <form role="search" method="post" id="searchform" action="index.php?page=search">
                    <div id="timkiem">
                        <label class="screen-reader-text" for="s">Search for:</label>
                        <input type="text" value="Tìm kiếm..." onClick="if(this.value=='Tìm kiếm...')this.value='';"
                               onBlur="if(this.value=='')this.value='Tìm kiếm...';" name="txtkey" id="txtkey"/>
                        <input type="submit" name="ok" value="Search"/>
                    </div>
                </form>

            </div>
        </div>-->
        <!-- End Header -->

        <div id="wrap"> <!-- Begin Wrap -->
            <div id="right_col" class="col-xs-12 col-md-3 col-md-push-9"> <!-- Right -->
                <div class="row2">
                    <?php if ( empty($_REQUEST) || (isset($_REQUEST['page']) && $_REQUEST['page'] != "dktv") ) {?>
                    <div class="col-xs-12">
                        <div class="row text-center">
                            <a href="index.php?page=dktv" id="signup" class="nut_xanhlacay cssnut">Đăng nhập - Đăng ký</a>
                            <?php include("xuly/login.php"); ?>
                        </div>
                    </div>
                    <?php } ?>
                    <div class="col-xs-12">
                        <div class="row">
                            <?php include("xuly/danhmucdethi/danhmucdethi.php"); ?>
                        </div>
                    </div>
                    <div class="col-xs-12">
                        <div class="row">
                            <?php include("xuly/tintuc/tinmoinhat.php"); ?>
                        </div>
                    </div>
                </div>
            </div>
            <div id="main_page" class="col-xs-12 col-md-9 col-md-pull-3 sept-right {
"> <!-- main_page -->
                <div class="row2">
                    <?php include("page_than.php"); ?>
                </div>
            </div>     <!-- End main_page -->

            <!-- End Right -->
        </div> <!-- End wrap-->

        <div class="clr"></div>
        <div id="footer">
            <?php include("page_footer.php"); ?>
        </div>
    </div>
</div> <!-- End Page -->

<!--Đồng hồ-->
<div
    style="position:fixed; left: 0; top: 30px; background: transparent; border: 0px solid #93F; padding:10px 0px; text-align:center;">
    <?php include("dongho/index.php"); ?>
</div>
<style>
    .opacity09 {
        opacity: 0.9;
    }
    .navbar-nav li a.active{
        color: #ffff00;
        background: #111;
    }
    @media (min-width: 768px) and (max-width: 1000px) {
        #first {
            position :absolute;
            left: 33%;
        }
        .navbar-inverse .navbar-nav>li>a {
            padding: 15px 7px;
            font-size: 10px;
        }
        .navbar-fixed-top .navbar-nav>li>a {
            padding: 15px 7px;
            font-size: 10px;
        }
    }
    @media (min-width: 1000px) {
        #first {
            position :absolute;
            left: 33%;
        }
        .navbar-inverse .navbar-nav>li>a {
            padding: 15px 12px;
            font-size: 12px;
        }
        .navbar-fixed-top .navbar-nav>li>a {
            padding: 15px 12px;
            font-size: 12px;
        }
    }
</style>
<!--End-->

<script type="text/javascript">
    $(document).scroll(function(e){
        var scrollTop = $(document).scrollTop();
        if(scrollTop > 0){
            console.log(scrollTop);
            $('.navbar').removeClass('navbar-static-top').addClass('navbar-fixed-top opacity09');
        } else {
            $('.navbar').removeClass('navbar-fixed-top opacity09').addClass('navbar-static-top');
        }
    });
</script>
</body>
</html>