<?php
include ("koneksi.php");
    
if (!empty($_POST['submit'])) {
    # code...
    $username=$_POST['nama'];
    $testimoni=$_POST['testimoni'];

    $query = "INSERT into testimony(username,testimony) VALUES ('$username','$testimoni')";
    if (mysql_query($query))
    {
        header("location: testimonii.php");
    } 
    else
    {
        echo "Gagal";
    }
 

}
   
?>
