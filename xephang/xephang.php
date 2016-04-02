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


include("../xuly/config/connect.php");

$sql = mysql_query("SELECT * FROM xephang ORDER BY sl DESC, kq  ASC");
$abc="0";
$rank = 0;
while($data = mysql_fetch_array($sql)) {
if( $abc!=$data['kq'] ) {
$rank++;
	$sql2="UPDATE  xephang SET 
	xh =  '".$rank."'
	where id='".$data['id']."' ";
	$rs=mysql_query($sql2);
$abc = $data['kq'];
}
	else {$rank=$rank+1;}
}
//echo "xếp hạng: -".$rank."-";

?>

