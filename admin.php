<?php
	include("koneksi.php")
?>

<!DOCTYPE html>
<html>

	<head>
		<title>ADMIN</title>
		<script type="text/javascript" src="jquery-1.10.2.js"></script>
		<link rel="stylesheet" href="style.css" type="text/css"/>
	</head>

	<body>
		<div id="wrap" class="container_24"> 
			<div id="header" class="grid_24">

  				<a href="#"><img src="images/DESAINPROGWEB.png" width="200"/></a>
  				<div id="search" class="grid_5">
			    	<img src="images/search.png" width="18"> 
			    	<input type="text" value="pencarian" />
				</div>
  			</div>

  			<div id="navigation" class="grid_24">
				<ul>
					<li><a href="index.php" class="grid_4"><strong>Beranda</strong></a></li>
					<li><a href="carapembelian.php" class="grid_4"><strong>Cara Pembelian</strong></a></li>
					<li><a href="aboutus.php" class="grid_4"><strong>Tentang Kami</strong></a></li>
					<li><a href="testimoni.php" class="grid_4"><strong>Testimoni</strong></a></li>
					<li><a href="#" class="grid_4"><strong>Personal</strong></a></li>
				</ul>
			</div>

			<div id="allcategory" class="grid_4">
				
				<dl>
					<dt> <a href="#"> Cars </a> </dt>
						<dd>
							<ul>
								<li><a href="SPORT.php"> Sport</a></li>
								<li><a href="F1.php"> F1 </a></li>
								<li><a href="SUV.php"> SUV</a></li>
								<li><a href="MPV.php"> MPV</a></li>
								<li><a href="TRUCK.php"> Truck</a></li>
								<li><a href="SEDAN.php"> Sedan</a></li>
							</ul>
						</dd>

					<dt> <a href="#"> Bike </a></dt>
						<dd>
							<ul>
								<li><a href="MTR.php">Motorcycle</a></li>
								
							</ul>
						</dd>

					<dt> <a href="#"> Air Force</a></dt>
						<dd>
							<ul>
								<li><a href="HELI.php">Helicopter</a></li>
								<li><a href="JET.php">Jet</a></li>
			
							</ul>
						</dd>

					<dt> <a href="#"> Water Adventure</a></dt>
						<dd>
							<ul>
								<li><a href="SHIP.php">Ship</a></li>
								<li><a href="BOAT.php">Boat</a></li>
								
							</ul>
						</dd>

					<dt> <a href="#"> Tank</a></dt>
						<dd>
							<ul>
								<li><a href="LEO.php">Leopard</a></li>
								<li><a href="TIGER.php">Tiger Fighter</a></li>
							</ul>
						</dd>
				</dl>

			</div>

			<div id="halaman_admin" class="grid_14">
				<?php
					session_start();
					if(isset($_SESSION['email']))
					{
						echo "hei. .admin ";
						echo $_SESSION['email'];
					}
					else
					{
						header('location:index.php');
					}
				?>
				
				<?php
						if(isset($_GET['adds']))echo "Databerhasil ditambahkan";
				?>
				<form method="post" action="tambahbarang.php" enctype="multipart/form-data">
					<table>
						<tr>
							<td><label>Nama Mainan</label></td>
							<td><input type="text" name="namamainan" /></td>
						</tr>
						<tr>
							<td><label>Harga</label></td>
							<td><textarea name="harga"></textarea></td>
						</tr>
						<tr>
							<td><label>Kategori</label></td>
							<td>
								<select name="kategori">
									<option value="sport">Sport</option>
									<option value="f1">F1</option>
									<option value="suv">SUV</option>
									<option value="mpv">MPV</option>
									<option value="truck">Truck</option>
									<option value="sedan">Sedan</option>
									<option value="motorcycle">Motorcycle</option>
									<option value="helicopter">Helicopter</option>
									<option value="jet">Jet</option>
									<option value="ship">Ship</option>
									<option value="boat">Boat</option>
									<option value="leo">Leopard</option>
									<option value="tiger">Tiger</option>
								</select>
							</td>
						</tr>
						<tr>
							<td><label>Deskripsi</label></td>
							<td><textarea name="deskripsi"></textarea></td>
						</tr>
						<tr>
							<td>
						<label>Gambar</label></td>
							<td>
						<input type="file" name="file"/>
						</td>
						</tr>
					</table>
					<input type="submit" value="tambahbarang" />	
				</form>
			</div>
			
			

			<div id="right" class="grid_5">
			    
			<div id="valid"> 
					<form method="POST" action="login.php">
						<fieldset >
							<legend>Masuk</legend>
							<label for="email">Email</label><input type="email" name="email">
							<label for="password">Sandi</label><input type="password" name="password">
							<input type="submit" value="Masuk" name="submit">
							<br><br>Belum punya akun ?<br><a href="signup.php">Mendaftar</a>
						</fieldset>
					</form>
							
				</div>

				<div id="cart">
					<h3>Keranjang Belanja</h3>
					<br />
					<img src="images/chart.jpg">
					<LABEL></LABEL>
				</div>

				<div id="socialmedia">
					<center><strong>Like dan Follow kami:</strong>
						<br><br>
						<a href=""> <img src="images/facebook.jpg" width="35"></a><span></span>
						<a href=""> <img src="images/twitter.jpg"width="35"></a>
					</center>
				</div>
			</div>

			<div id="footer" class="grid_24">
				<div id="footer-detail">
					<center><a href="">&copy; 2013 RC-Shop.com Design by Genesis Progweb</a></center>
				</div>
			</div>

		</div>
	</body>

</html>