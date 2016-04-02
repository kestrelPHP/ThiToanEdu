<?php //Làm sạch nội dung nhập vào input trước khi lưu database
function cleanInput($input) {
   $search = array(
    '@<script[^>]*?>.*?</script>@si',   // Loại bỏ javascript
    '@<[\/\!]*?[^<>]*?>@si',            // Loại bỏ HTML tags
    '@<style[^>]*?>.*?</style>@siU',    // Loại bỏ style tags
    '@<![\s\S]*?--[ \t\n\r]*>@'         // Loại bỏ multi-line comments
  );
    $output = preg_replace($search, '', $input);
    return $output;
  }
?>
<?php
function sanitize($input) {
	$output = array();
    if (is_array($input)) {
        foreach($input as $var=>$val) {
            $output[$var] = sanitize($val);
        }
    }
    else {
        if (get_magic_quotes_gpc()) {
            $input = stripslashes($input);
        }
        $input  = cleanInput($input);
        $output = mysql_real_escape_string($input);
    }
    return $output;
}
?>

<?php
  // làm sạch giá trị nhận từ POST/GET
  $_POST = sanitize($_POST);
  $_GET  = sanitize($_GET);
//END Làm sạch nội dung nhập vào input trước khi lưu database
?>


<script language="javascript">
function check_frmdangnhap(the_form)
{ 
 var the_tendn = the_form.userid.value;
 var the_password=the_form.password.value;
	 if (the_tendn==''){
			alert("Vui lòng nhập user name!");
			the_form.userid.focus();
			return false;
		}
		if (the_password=='')
		{
			alert("Vui lòng nhật mật khẩu!");
			the_form.password.focus();
			return false;
		}
}
</script>
<div class="total">
	<span class="frame-total">
		<div class="totalbq">
			<div class="total-top">ĐĂNG NHẬP</div>
			<div class="total-cent">
			<?php
				if(isset($_SESSION['hoten']))
				{
					echo "<center>Xin chào: <b>".$_SESSION['hoten']."</br>";
					echo "<center>Mã HS của bạn: <b>".$_SESSION['id'];
					echo '<br/><a href="xuly/thoat.php?unset">Thoát</a></center>';
				}
				else{
			?>
				<form action="" name="frmdangnhap" onSubmit="return check_frmdangnhap(this)" method="post" enctype="multipart/form-data">
					<label for="userid" class="username"><img src="images/icon_username.png" width="15" height="15" align="absmiddle" /></label>
					<input type="text" name="username" placeholder="UserName" id="username" value="" size="22" />		  <br />
					
					<label for="password"><img src="images/icon_forget.png" width="15" height="15" align="absmiddle" /></label>
					<input type="password" placeholder="PassWord" name="password" id="password" value="" size="22" />  <br />
					
					<center><input type="submit" class="bottom1" name="dangnhap" id="dangnhap" value="Đăng nhập" /></center>
				</form> 
			<?php	} 	?>	
			</div>
		</div>
	</span>
</div>



<?php

if(isset($_POST['dangnhap']))
{
	include("config/connect.php");
	$username=$_POST['username'];
	$p=md5($_POST['password']); 
	if($username && $p)
	{
			//$sql="select * from xh_hocsinh where username='".$username."' and pass='".$p."'";
			$sql="select * from xh_hocsinh where 1=1";
			$query=mysql_query($sql);
			@$count=mysql_num_rows($query);
		if($count<1)
		{
			echo "<script>alert('Đăng nhập sai!');</script>";
			echo"<script>document.location.href='index.php?page=dangnhap' </script>";
		}
			else
			{ 
			session_start();
			$row=mysql_fetch_array($query);
			$_SESSION['id']=$row['idhs'];
			$_SESSION['username']=$row['username'];
			$_SESSION['hoten']=$row['hoten'];
			$_SESSION['khoihoc']=$row['khoi'];
			$_SESSION['hoatdong']=$row['hoatdong'];
			echo"<script>document.location.href='index.php?page=chonhinhthuc' </script>";
			}
	}
}
?>