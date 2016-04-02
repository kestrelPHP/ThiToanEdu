<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>

<?php
include("../config/connect.php");

if(isSet($_POST['getLastContentId']))
{
$getLastContentId=$_POST['getLastContentId'];
$result=mysql_query("select * from xh_tintuc where id <".$getLastContentId." order by id desc limit 5");
$count=mysql_num_rows($result);
if($count>0){
while($row=mysql_fetch_array($result))
{
$id=$row['id'];
$message=$row['tieude'];
?>
<li>
<a href="?page=news&id=<?php echo $row['id'];?>"><?php echo $message; ?></a>
</li>
<?php
}
?>
<a href="#"><div id="load_tinlienquan_<?php echo $id; ?>" class="tinlienquan_tab">
<div id="<?php echo $id; ?>" class="tinlienquan_button">Xem các tin khác</div></a>
</div>

<?php
} else{
echo "<div class='all_loaded'>Không còn tin</div>";
}
}
?>
