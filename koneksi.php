<?php
	$host="localhost";
	$user="root";
	$pass="";
	$database="genesis";
	$koneksi=mysqli_connect($host,$user,$pass, $database) or die ("Gagal konek ke database");

	ini_set( "display_errors", 0);
?>