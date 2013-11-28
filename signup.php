<?php
	include("koneksi.php");
	session_start();

	//masukkan ke data base form sign up
	//cek dulu apa ada data yang dikirim
	if(isset($_POST['mail']) && isset($_POST['name']) && isset($_POST['pass']) && isset($_POST['hp']) && isset($_POST['rekening']) && isset($_POST['alamt']) && isset($_POST['pos']) && isset($_POST['kab']) && isset($_POST['prop']) && isset($_POST['corfmpass'])){
	//disini lakukan proses insert ke database
		$mail = ($_POST['mail']);
		$name = ($_POST['name']);
		$pass = ($_POST['pass']);
		$hp = ($_POST['hp']);
		$rekening = ($_POST['rekening']);
		$alamt = ($_POST['alamt']);
		$pos = ($_POST['pos']);
		$kab = ($_POST['kab']);
		$prop = ($_POST['prop']);
		$corfmpass = ($_POST['corfmpass']);

		$query = "INSERT INTO `genesis`.`datauser` (`email`, `username`, `password`, `nomorhp`, `nomorrekening`, `alamat`, `kodepos`, `kabupaten`, `propinsi`) VALUES ('".$mail."', '".$name."', '".$pass."', '".$hp."', '".$rekening."', '".$alamt."', '".$pos."', '".$kab."', '".$prop."')";
		$res=mysql_query($query) or die ("Ini gagal query");
		if ($res==1) 
		{
			echo "Berhasil sign up";
		}
		else echo "Gagal Sign Up";
	}
?>


<!DOCTYPE html>
<html>

	<head>
		<title>Pendaftaran</title>
	
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
					<dt> <a href="#"> Mobil </a> </dt>
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

					<dt> <a href="#"> Motor </a></dt>
						<dd>
							<ul>
								<li><a href="#">Motorcycle</a></li>
								
							</ul>
						</dd>

					<dt> <a href="#">Pesawat</a></dt>
						<dd>
							<ul>
								<li><a href="#">Helicopter</a></li>
								<li><a href="#">Jet</a></li>
			
							</ul>
						</dd>

					<dt> <a href="#">Kapal</a></dt>
						<dd>
							<ul>
								<li><a href="#">Ship</a></li>
								<li><a href="#">Boat</a></li>
								
							</ul>
						</dd>

					<dt> <a href="#">Tank</a></dt>
						<dd>
							<ul>
								<li><a href="#">Leopard</a></li>
								<li><a href="#">Tiger Fighter</a></li>
							</ul>
						</dd>
				</dl>

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


			
		<div id="signup" class="grid_14">
				<center><h1>Pendaftaran</h1></center>
				<form id='signupform' action='signup.php' method='post'>
				 	<table>
						<tr>
				            <td>Nama</td>
				            <td><input type="text" name="name" /></td>
				        </tr>

						<tr>
				            <td>Email</td>
				            <td><input type="email" name="mail" /></td>
				        </tr>

						<tr>
				            <td>Nomor Ponsel</td>
				            <td><input type="text" name="hp" /></td>
				        </tr>

				        <tr>
				            <td>Alamat</td>
				            <td><input type="text" name="alamt" /></td>
				        </tr>

				        <tr>
				            <td>Kode POS</td>
				            <td><input type="text" name="pos"  /></td>
				        </tr>

				        <tr>
				            <td>Kabupaten</td>
				            <td><input type="text" name="kab" /></td>
				        </tr>

				        <tr>
				            <td>Propinsi</td>
				            <td><input type="text" name="prop" /></td>
				        </tr>

				        <tr>
				            <td>Nomor Rekening</td>
				            <td><input type="text" name="rekening" /></td>
				        </tr>

						<tr>
				            <td>Kata Sandi</td>
				            <td><input type="password" name="pass" /></td>
				        </tr>
				        
						<tr>
				            <td>Ketik Ulang Kata Sandi</td>
				            <td><input type="password" name="corfmpass" /></td>
				        </tr>
				        <tr><td></td></tr><tr></tr><tr></tr><tr></tr>
						<tr>
				            <td></td><td></td><td><input type="submit" value="Daftar" /></td>
				        </tr>
					</table>
				</form>
			</div>

			<div id="footer" class="grid_24">
				<div id="footer-detail">
					<center><a href="">&copy; 2013 RC-Shop.com Design by Genesis Progweb</a></center>
				</div>
			</div>

		</div>
	</body>

</html>

