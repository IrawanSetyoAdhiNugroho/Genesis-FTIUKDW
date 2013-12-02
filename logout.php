<?php
	//lakukan proses destroy session sesuai penjelasan
session_start();
session_destroy();
header("location:index.php");
?>