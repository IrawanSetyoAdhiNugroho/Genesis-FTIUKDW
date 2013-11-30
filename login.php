<?php
	include("koneksi.php");
	if(isset($_POST['submit']))
	{
		$email = $_POST['email'];
		$password = $_POST['password'];
		$query = "SELECT * FROM datauser WHERE email = '".$email."' AND password = '".$password."'";
		$hasilquery = mysql_query($query);
		$count = mysql_num_rows($hasilquery);

		if($count == 0)
		{	
			header('location: salahlogin.php');
		}
		else
		{
			if($email=="irawanecek2@gmail.com")
			{
				$admin=true;
			}

			if($admin==1)
			{
				session_start();
				$_SESSION['admin'] = $admin;
				$_SESSION['email'] = $email;
				$_SESSION['logged_in'] = true; 
				header('location:admin.php');
			}
			else
			{
				session_start();
				$_SESSION['email'] = $email;
				$_SESSION['logged_in'] = true;
				header('location: index.php');
			}
		}
	}
?>