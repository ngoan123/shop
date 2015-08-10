<?php
	include ("../admin/models/connectdb.php");
	if (isset($_GET['MaSp'])) {
	$MaSp = $_GET['MaSp'];
	mysql_query("delete from sanpham where MaSp = $MaSp",$connect);
	header("Location:../admin/administrator.php");
	}
?>