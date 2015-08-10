<?php
	include ("../admin/models/connectdb.php");
	if (isset($_GET['MaTheLoai'])) {
	$MaTheLoai = $_GET['MaTheLoai'];
	mysql_query("delete from loaisanpham where MaTheLoai = $MaTheLoai",$connect);
	header("Location:../admin/list-the-loai.php");
	}
?>