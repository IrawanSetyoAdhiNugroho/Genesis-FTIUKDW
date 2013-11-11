<?php
	$host="localhost";
	$user="root";
	$pass="";
	$database="genesis";
	mysql_connect($host,$user,$pass) or die ("Gagal konek ke database");

	mysql_select_db($database) or die ("Gagal pilih database");
	ini_set( "display_errors", 0);
?>