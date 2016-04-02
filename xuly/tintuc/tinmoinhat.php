<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
<script type="text/javascript">
	$(function() {

	$('.tinlienquan_button').live("click",function() 
	{
	var getId = $(this).attr("id");
	if(getId)
	{
	$("#load_tinlienquan_"+getId).html('<img src="xuly/danhmucdethi/load_img.gif" style="padding: 10px 0 0 -20px; width=80px;"/>');  
	$.ajax({
	type: "POST",
	url: "xuly/tintuc/tinmoinhat_more.php",
	data: "getLastContentId="+ getId, 
	cache: false,
	success: function(html){
	$("ul#load_tinlienquan_ctnt").append(html);
	$("#load_tinlienquan_"+getId).remove();
	}
	});
	}
	else
	{
	$(".tinlienquan_tab").html('Hết tin mới');
	}
	return false;
	});
	});

</script>
<style>
a{text-decoration:none;}
.main_div{margin: 30px 0 0 0; width: auto }	
ul.load_content{ margin:0; padding:0; list-style-type:none;}
ul.load_content li {
	border-bottom: 1px solid #ddd;
    color: #000000;
    display: block;
    font: 14px Arial,Helvetica,sans-serif;
    padding: 10px 0 0 15px;
    text-decoration: none;
}
.tinlienquan_button {
    background: none repeat scroll 0 0 #FFFFFF;
    border: 1px solid #CCCCCC;
    border-radius: 5px;
    color: #000;
    font-weight: bold;
    height: auto;
    line-height: 32px;
    text-align: center;
    text-transform: none;
}

.tieudedm {
    background: none repeat scroll 0 0 #00ffcc;
    border: 1px solid #CCCCCC;
    border-radius: 5px;
    color: #0000ff;
    font-weight: bold;
    height: auto;
    line-height: 32px;
    text-align: center;
    text-transform: none;

}

.tinlienquan_div{padding:10px;}
.all_loaded{font: bold 15px arial; color:#0D92E1; padding: 20px 0 0 0;     text-align: center;}
</style>
</head>

<body>

<div class='main_div'>
	<ul class="load_content" id="load_tinlienquan_ctnt">
	<div class="tieudedm">TIN MỚI NHẤT</div>

		<?php
			$sql=mysql_query("select * from xh_tintuc ORDER BY id DESC LIMIT 3"); //Số lượng đề 
			while($row=mysql_fetch_array($sql))
			{
				$id=$row['id'];
				$message=$row['tieude'];
		?>
			<li>
				<a href="?page=news&id=<?php echo $row['id'];?>"><?php echo $message; ?></a>
			</li>
		<?php } ?>
	</ul>
		<div class="tinlienquan_div">
			<a href="#">
				<div id="load_tinlienquan_<?php echo $id; ?>" class="tinlienquan_tab">
					<div class="tinlienquan_button" id="<?php echo $id; ?>">Xem các tin khác</div>
			</a>
				</div>
		</div>
</div>
</body>
</html>
