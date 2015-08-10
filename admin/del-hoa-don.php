<?php
	include ("../admin/models/connectdb.php");
	if (isset($_GET['MaHD'])) {
	$MaHD = $_GET['MaHD'];
	mysql_query("delete from hoadon where MaHD = $MaHD",$connect);
	header("Location:../admin/list-hoa-don.php");
	}
?>