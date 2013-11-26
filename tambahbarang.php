<?php
include("koneksi.php");

//MASUKAN CONTENT FORM KE DATABASE

$namamainan = $_POST['namamainan'];
$harga = $_POST['harga'];
$kategori = $_POST['kategori'];
$deskripsi = $_POST['deskripsi'];
$gambar = $_FILES["file"]["name"];



$query = "INSERT INTO `genesis`.`databarang` (`namamainan` ,`harga` ,`kategori` ,`deskripsi` ,`gambar`) VALUES ('".$namamainan."', '".$harga."', '".$kategori."', '".$deskripsi."', '".$gambar."')";
//UPLOAD FILE KE FOLDER IMAGES ( ATAU FOLDER LAIN SESUAI KEINGINAN ANDA
$hasil = mysql_query($query) or die("gagal upload");

header("location:admin.php?adds=1");
move_uploaded_file($_FILES["file"]["tmp_name"], $_FILES["file"]["name"])


?>