<?php
				$server="localhost";
				$username="root";
				$password="";
				$database="bukutamu";

				mysql_connect($server, $username, $password)or die("Gagalterhubung");
				mysql_select_db($database)or die("Gagalterhubungkedatabase");
				if (!empty($_POST['tambah'])) 
				{
					$nama=$_POST['nama'];
					$nama=$_POST['email'];
					$pesan=$_POST['pesan'];
					$tanggal=date('Y-m-d');
					$waktu=date('H:i:s');
					$query="INSERT into bukutamu (nama,email,pesan,tanggal,waktu) VALUES ('".$nama."','".$email."','".$pesan."','".$tanggal."','".$waktu."')";
					if(mysql_query($query))
						echo "Data berhasil tersimpan!!";
				}
			?>

<!DOCTYPE html>
<html>

	<head>
		<title>Home</title>
	
		<script type="text/javascript" src="jquery-1.10.2.js"></script>
		<link rel="stylesheet" href="css_24_fixed.css" type="text/css"/>

	</head>

	<body>
		<div id="wrap" class="container_24"> 
			<div id="header" class="grid_15">
  <!-- Kode harus berada di dalam class container_12 -->
  				<a href="#"><img src="DESAINPROGWEB.jpg" width="200"/></a>
  				<div id="search" class="grid_5">
			    	<button></button> 
			    	<input type="text" value="search" />
				</div>
  			</div>

  			<div id="navigation" class="grid_24">
				<ul>
					<li><a href="#" class="grid_4"><strong>HOME</strong></a></li>
					<li><a herf="howtobuy.html" class="grid_4"><strong>HOW TO BUY</strong></a></li>
					<li><a href="#" class="grid_4"><strong>ABOUT US</strong></a></li>
					<li><a href="#" class="grid_4"><strong>TESTIMONY</strong></a></li>
					<li><a href="#" class="grid_4"><strong>PERSONAL</strong></a></li>
				</ul>
			</div>

			<div id="allcategory" class="grid_4">
				
				<dl>
					<dt> <a href="#"> Cars </a> </dt>
						<dd>
							<ul>
								<li><a href="Sport.html"> Sport</a></li>
								<li><a href="#"> F1 </a></li>
								<li><a href="#"> SUV</a></li>
								<li><a href="#"> MPV</a></li>
								<li><a href="#"> Truck</a></li>
								<li><a href="#"> Sedan</a></li>
							</ul>
						</dd>

					<dt> <a href="#"> Bike </a></dt>
						<dd>
							<ul>
								<li><a href="#">Motorcycle</a></li>
								
							</ul>
						</dd>

					<dt> <a href="#"> Air Force</a></dt>
						<dd>
							<ul>
								<li><a href="#">Helicopter</a></li>
								<li><a href="#">Jet</a></li>
			
							</ul>
						</dd>

					<dt> <a href="#"> Water Adventure</a></dt>
						<dd>
							<ul>
								<li><a href="#">Ship</a></li>
								<li><a href="#">Boat</a></li>
								
							</ul>
						</dd>

					<dt> <a href="#"> Tank</a></dt>
						<dd>
							<ul>
								<li><a href="#">Leopard</a></li>
								<li><a href="#">Tiger Fighter</a></li>
							</ul>
						</dd>
				</dl>

			</div>

			<!--Batas atas php, sementara masih acak-acakan bingung mysqli-->
			<div id="testimony" class="grid_14">
				<form metod="post" action="tambah_data.php">
					<table>
						<tr>
							<td>Nama</td>
								<td>:</td>
								<td><input type="text" name="nama"></td>
						</tr>

						<tr>
							<td>Email</td>
							<td>:</td>
							<td><input type="text"name="email"></td>
						</tr>

						<tr>
							<td valign="top">Pesan</td>
							<td valign="top">:</td>
							<td><textarea name="pesan" rows=5 cols=45></textarea></td>
						</tr>
					</table>

					<input type="submit" name="tambah" value="OK"/>
				</form>
		
			<!--batas bawah php-->

			<div id="right" class="grid_5">
			    
				<div id="valid">
					<form id='login' action='login.php' method='post' accept-charset='UTF-8' >
						<fieldset >
							<legend>Login</legend>
							<input type='hidden' name='submitted' id='submitted' value='1'/>
							<label for="username">username</label><input type="text" name="username" id='username' username="Charles_H"maxlength="50" >
							<label for="password">password</label><input type="password" name="password" id='password' maxlength="50" password="password">
							<input type="submit" name='Submit' value="Log In">
							<br><br>Doesn't have account? <br><a href="#">Sign Up</a>
						</fieldset>
					</form>
				</div>

				<div id="cart">
					<h3>Shopping Cart</h3>
					<br />
					<img src="chart.jpg">
					<LABEL></LABEL>
				</div>

				<div id="socialmedia">
					<center><strong>Like or Follow us:</strong>
						<br><br>
						<a href=""> <img src="facebook.jpg" width="35"></a><span></span>
						<a href=""> <img src="twitter.jpg"width="35"></a>
					</center>
				</div>
			</div>
<!--Masih acak-acakan-->
<div id="container">
		<?php
			//buat code untuk upload gambar, pindahkan file yang diupload ke images/
			//  dengan nama avatar.png

			if(isset($_FILES["upload"])){
					
					$directoryPath="images/";

					if($_FILES["upload"]["type"]=="image/png" || $_FILES["upload"]["type"]=="image/jpeg" || $_FILES["upload"]["type"]=="image/jpg" || $_FILES["upload"]["type"]=="image/gif"){
						move_uploaded_file($_FILES["upload"]["tmp_name"], $directoryPath."avatar.png");
					}
				}

			//code untuk remove avatar
			//JANGAN DIHAPUS
			if(isset($_GET["del"])){$dir = "images/";$files = scandir($dir);foreach ($files as $key => $value){if($value == "avatar.png"){$file = $value;break;}}if(isset($file)){$file = NULL;unlink("images/avatar.png");}}

		?>

		<div id="left">
			<img id="avatar" src="images/
				<?php
					$dir = "images/";$files = scandir($dir);foreach ($files as $key => $value){if ($key == 0 || $key == 1)continue;else{if($value == "avatar.png"){$file = $value;break;}}}if(isset($file))echo $file;else echo "default.png";
				?>"
			/>
			<br />
			<form action="Home_960.php" method="post" enctype="multipart/form-data">
				<input class="upload" type="file" name="upload" size="60"></input>
				<br />
				<input class="button" type="submit" value="Upload"></input>
				<a href="index.php?del=ava">
					<input class="button" type="button" value="Remove"></input>
				</a>
			</form>
		</div>


		<div id="right">
			<span id="status">
				<?php

				if(isset($_FILES["status"])){
					echo " ".$_FILES["status"]["text"];
					$directoryPath="status/";
			
				}

					//code untuk menampilkan status
					//jika belum ada status yang dipost, munculkan status "avaible"
					//jika ada status yang dipost oleh user, tampilkan status tersebut dengan:
					//  semua vokal menjadi 'a'
					//  karakter indeks terakhir ditampilkan sebanyak 5x

					/*
					  HINT
					  untuk mengakses karakter dalam string bisa digunakan indexing
					  contoh $nama = "nico"
					  maka nilai
						$nama[0] adalah 'n', 
						$nama[1] adalah 'i', 
						$nama[2] adalah 'c', 
						$nama[3] adalah 'o' 
					  untuk mengetahui panjang suatu string, dapat digunakan fungsi strlen( variabel_string )
					  contohnya: $panjang = strlen($nama), maka nilai $panjang adalah 4
					*/

				?>
			</span>
			
			<form action="#" method="post" enctype="multipart/form-data">
				<input id="post" type="text" name="status" size="30" placeholder="Sar up?"></input>
				<br />
				<br />
				<input class="button" type="submit" value="Post"></input>
			</form>

		</div>
	</div>
	<!--BATAS ATAS!-->
			<div id="footer" class="grid_24">
				<div id="footer-detail">
					<center><a href="">&copy; 2013 RC-Shop.com Design by Genesis Progweb</a></center>
				</div>
			</div>

		</div>
	</body>

</html>

