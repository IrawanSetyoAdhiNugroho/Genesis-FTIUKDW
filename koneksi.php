<?php
	$host="mysql.idhostinger.com";
	$user="u134230580_admin";
	$pass="genesis777";
	$database="u134230580_genes";
	mysql_connect($host,$user,$pass) or die ("Gagal konek ke database");

	mysql_select_db($database) or die ("Gagal pilih database");
	ini_set( "display_errors", 0);
?>
