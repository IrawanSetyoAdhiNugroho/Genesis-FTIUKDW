<!DOCTYPE html>
<html>

	<head>
		<title>Cara Pembelian</title>
	
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

			<div id="howtobuy" class="grid_14">
				<center><h3>Cara Pembelian</h3></center>
				<ol>
					<li>Jika anda belum memiliki akun maka Anda dapat mendaftar terlebih dahulu di web kami dengan mengisikan data- data yang diminta dengan benar.  Tapi jika anda sudah memiliki akun, anda bisa sign in terlebi dahulu. </li>
					<li>Setelah pembuatan akun selesai atau setelah anda sign in, anda dapat melihat- lihat barang- barang yang dijual di web kami. </li>
					<li>Pilih barang yang ingin anda beli dengan menekan tombol buy </li>
					<li>Setelah menekan tombol buy, anda akan diminta mengisikan beberapa pertanyaan mengenai paket kiriman yang anda pilih, cara pembayaran dan alamat barang dikirim.  Setelah selesai klik done.</li>
					<li>Anda dapat segera mentransfer sejumlah yang harus dibayarkan ke rekening kami kurang dari 24 jam. </li>
					<li>Setelah melakukan pembayaran anda dapat membuka profile anda dan mengklik gambar jam pasir di bagian Purchase Product.</li>
					<li>Anda akan diminta memasukkan nomer transaksi. Setelah memasukkan nomor transaksi maka kami akan mengubah status pesanan anda. </li>
					<li>Anda dapat menunggu hingga barang dikirim ke alamat anda.</li>
					<li>Setelah barang diterima silahkan berikan testimony di web kami. </li>
				</ol>
				<center><h4>Terima kasih atas kepercayaan anda terhadap RC-Shop.com </h4></center>
			</div>
			<div id="right" class="grid_5">
				<div id="valid"> 
					<form method="POST" action="index.php">
						<fieldset >
							<legend>Masuk</legend>
							<label for="email">Email</label><input type="text" name="email">
							<label for="password">Sandi</label><input type="password" name="password">
							<input type="submit" value="Masuk" name="submit">
							<br><br>Belum punya akun ?<br><a href="signup.php">Mendaftar</a>
						</fieldset>
					</form>
					<?php
						if(isset($_POST['submit']))
						{
							$email = $_POST['email'];
							$password = $_POST['password'];
							$query = "SELECT * FROM datauser WHERE email = '$email' AND password = '$password'";
							$hasilquery = mysql_query($query);
							$count = mysql_num_rows($hasilquery);

							while ($data = mysql_fetch_assoc($hasilquery)) {
								$admin = $data['admin'];
							}

							if($count == 0)
								echo "email dan password salah";
							else
							{
								session_start();
								$_SESSION['email'] = $email;
								echo "anda login";
							}
						}
					?>
		
				</div>
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


