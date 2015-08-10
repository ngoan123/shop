<?php
	include ("../admin/models/connectdb.php");
	if (isset($_GET['MaKH'])) {
	$MaKH = $_GET['MaKH'];
	mysql_query("delete from khachhang where MaKH = $MaKH",$connect);
	header("Location:../admin/list-khach-hang.php");
	}
?>