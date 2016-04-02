<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

<?php

/*
function sosanh($x, $y)
{
	if ($x == $y)
		return 0;
	else if ($x < $y)
		return -1;
	else 
		return 1;
}
echo sosanh(1,2)."</br>";
*/


include("config.php");

$sql = mysql_query("SELECT * FROM xh_tonghopkq ORDER BY tongdiem DESC, tong_tgianlambai  ASC");
$abc=0;
$rank = 0;
while($data = mysql_fetch_array($sql)) {
	if( $abc!=$data['tong_tgianlambai'] ) {
	$rank++;
		$sql2="UPDATE  xh_tonghopkq SET 
		xephang =  '".$rank."'
		where id='".$data['id']."' ";
		$rs=mysql_query($sql2);
	$abc = $data['tong_tgianlambai'];
	}
	else {$rank=$rank+1;}
}
//echo "xếp hạng: -".$rank."-";

?>

