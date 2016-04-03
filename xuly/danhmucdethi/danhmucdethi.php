<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.0/jquery.min.js"></script>
<script type="text/javascript">
	$(function() {

	$('.more_button').live("click",function() 
	{
	var getId = $(this).attr("id");
	if(getId)
	{
	$("#load_more_"+getId).html('<img src="xuly/danhmucdethi/load_img.gif" style="padding:10px 0 0 0;"/>');  
	$.ajax({
	type: "POST",
	url: "xuly/danhmucdethi/danhmucdethi_more.php",
	data: "getLastContentId="+ getId, 
	cache: false,
	success: function(html){
	$("ul#load_more_ctnt").append(html);
	$("#load_more_"+getId).remove();
	}
	});
	}
	else
	{
	$(".more_tab").html('The End');
	}
	return false;
	});
	});

</script>
<style>
ul.load_content{ margin:0; padding:0; list-style-type:none;}
/*ul.load_content li {
    color: #000000;
    display: block;
    font: 14px Arial,Helvetica,sans-serif;
    padding: 10px 0 0 15px;
    text-decoration: none;
}
ul.load_content li:not(:last-child) {
	border-bottom: 1px solid #ddd;
}*/
.more_button {
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

.more_div{padding:10px;}
.all_loaded{font: bold 15px arial; color:#0D92E1; padding: 20px 0 0 0;     text-align: center;}
</style>

<div class='main_div'>
	<ul class="load_content" id="load_more_ctnt">
	<div class="tieudedm">DANH SÁCH ĐỀ THI</div>

		<?php
			$sql=mysql_query("select * from xh_dethi ORDER BY made DESC LIMIT 5"); //Số lượng đề 
			while($row=mysql_fetch_array($sql))
			{
				$id=$row['made'];
				$message=$row['tende'];
		?>
			<li>
				<a href="?page=chapnhan&made=<?php echo $row['made'];?>"><?php echo $message; ?></a>
			</li>
		<?php } ?>
	</ul>
		<div class="more_div">
			<a href="#">
				<div id="load_more_<?php echo $id; ?>" class="more_tab">
					<div class="more_button" id="<?php echo $id; ?>">Xem các đề khác</div>
			</a>
				</div>
		</div>
</div>

