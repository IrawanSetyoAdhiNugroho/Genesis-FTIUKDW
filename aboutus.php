<?php
	include("koneksi.php");
	session_start();
?>
<!DOCTYPE html>
<html>

	<head>
		<title>Tentang Kami</title>
	
		<script type="text/javascript" src="jquery-1.10.2.js"></script>
		<link rel="stylesheet" href="style.css" type="text/css"/>
		<link rel="stylesheet" type="text/css" href="engine1//style.css" media="screen" />
		<script type="text/javascript" src="jquery.js"></script>	</head>

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
					<?php
					if(isset($_SESSION['admin']))
					{
					?>

						<li><a href="admin.php" class="grid_4"><strong>Admin</strong></a></li>	
					<?php
					}
					else 
					{
					?>
					<li><a href="#" class="grid_4"><strong>Personal</strong></a></li>
					<?php
					}
					?>
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

			<div id="aboutus" class="grid_14">
				<center><h3>Tentang Kami</h3></center>
				<P align="justify">Mainan Remote Control merupakan salah satu kiprah kami dalam dunia bisnis, dengan pengalaman yang cukup lama berkecimpung dalam dunia online dan dunia RC kami siap melayani anda dengan bermodalkan kejujuran, ketekunan sepenuh hati dan ketelitian maksimal guna menggapai kepuasan anda yang merupakan orang-orang kesayangan kami.<br><br>Produk-produk yang kami jual antara lain :</P>
				<ol>
					<li>Cars. antara lain Sport, F1, SUV, MPV, Truck, dan sedan remote control. </li>
					<li>Bike. yaitu segala macam motorcycle remote control</li>
					<li>Air Force. antara lain jenis Helikopter dan jet remote control</li>
					<li>Water Adventure. antara lain Ship dan Boat remote control</li>
					<li>Tank. antara lain Leopard dan Tiger-fighter remote control</li>
				</ol>
				<p align="justify">Terima kasih atas kepercayaan anda terhadap RC-Shop.com dan kami akan membawa kepercayaan tersebut sebagai mandat utama misi kami yaitu,  "memberikan yang terbaik untuk anda” </p>
				<h4 align="right">Admin</h4>
			</div>
			<div id="right" class="grid_5">
				<?php
				session_start();
				if(isset($_SESSION['email']))
				{
				?>
					<div id="keluar">
					<?php
						echo "Selamat datang ";
						echo $_SESSION['email'];
					?>
					<a href="logout.php"><Button>Keluar</Button></a>
					</div>
				<?php
				}
				else
				{
				?>
					<div id="valid"> 
					<form method="POST" action="login.php">
						<fieldset >
							<legend>Masuk</legend>
							<label for="email">Email</label><input type="email" name="email">
							<label for="password">Sandi</label><input type="password" name="password">
							<input type="submit" value="Masuk" name="submit">
							<br><br>Belum punya akun ?<br><a href="signup.php">Mendaftar</a>
					</form>	
				</div>
				<?php
				}
				?>

				<div id="cart" >
					<h3>Keranjang Belanja</h3>
					<br />
					<img src="images/chart.jpg" width="35">
					<LABEL></LABEL>
				</div>

				<div id="socialmedia">
					<center><strong>Like dan Follow kami:</strong>
						<br><br>
						<a href="https://www.facebook.com/pages/RC-SHOP/173164616214639?ref=hl"> <img src="images/facebook.jpg" width="35"></a><span></span>
						<a href="https://twitter.com/CosmicRcShop"> <img src="images/twitter.jpg"width="35"></a>
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


