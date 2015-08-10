<?php 
	$connect = mysql_connect("localhost","root","") or die("NOT CONNECT");
	mysql_select_db("quanlybanhang",$connect) or die ("NOT CONNECT");
	mysql_query("SET NAMES 'utf8'");
?>