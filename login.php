<?php
	include("koneksi.php");
	$location="index.php";
	if(isset($_POST['submit']))
	{
		$email = $_POST['email'];
		$password = $_POST['password'];
		$query = "SELECT * FROM datauser WHERE email = '".$email."' AND password = '".$password."'";
		$hasilquery = mysql_query($query);
		$count = mysql_num_rows($hasilquery);

		if($count == 0)
			header('location: index.php');
		else
		{
			session_start();
			$_SESSION['email'] = $email;
			$_SESSION['logged_in'] = true;
			header('location: admin.php');
		}
	}
?>