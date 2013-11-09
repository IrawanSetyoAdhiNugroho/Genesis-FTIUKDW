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
					<li><a href="#" class="grid_4"><strong>Beranda</strong></a></li>
					<li><a herf="howtobuy.html" class="grid_4"><strong>Cara Pembelian</strong></a></li>
					<li><a href="#" class="grid_4"><strong>Tentang Kami</strong></a></li>
					<li><a href="#" class="grid_4"><strong>Testimoni</strong></a></li>
					<li><a href="#" class="grid_4"><strong>Personal</strong></a></li>
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

<div id="sport" class="grid_14">
				<form action="admin.php" method="post" enctype="multipart/form-data" name="form1" id="form1">
  <p>Judul Gambar :<br>
    <input name="judul_gambar" type="text" id="judul_gambar" size="30" maxlength="30" />
  </p>
  <p>Harga :<br>
  	<input name="harga" type="int" id="harga_gambar" size="30" maxlength="30" />
  </p>
  <p>
    File Gambar
    : 
    <input name="nama_file" type="file" id="nama_file" size="30" />
</p>
<select name="category">
		<option value="sport">Sport</option>
		<option value="f1">F1</option>
		<option value="suv">Sport Utilities Vehicle</option>
		<option value="mpv">Multi Propose Vihicle</option>
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

  <p>
    <input type="submit" name="btnSimpan" id="btnSimpan" value="Simpan" />
  </p>
</form>

<?php
$namafolder="gambar/"; //tempat menyimpan file
$con=mysql_connect("localhost","root","") or die("Gagal");
mysql_select_db("genesis")  or die("Gagal");
if (!empty($_FILES["nama_file"]["tmp_name"]))
{
	$jenis_gambar=$_FILES['nama_file']['type'];
	$judul_gambar=$_POST['judul_gambar'];
	$category_gambar = $_POST['category'];
	$harga_gambar = $_POST['harga'];
	if($jenis_gambar=="image/jpeg" || $jenis_gambar=="image/jpg" || $jenis_gambar=="image/gif" || $jenis_gambar=="image/x-png")
	{			
		$gambar = $namafolder . basename($_FILES['nama_file']['name']);		
		if (move_uploaded_file($_FILES['nama_file']['tmp_name'], $gambar)) 
		{
			$sql="insert into tb_gambar(judul_gambar,nama_file,category,harga) values ('$judul_gambar','$gambar','$category_gambar','$harga_gambar')";
			$res=mysql_query($sql) or die (mysql_error());
			echo "Gambar berhasil dikirim ".$gambar;		   
			echo "<p><img src=\"$gambar\" width=\"200\"/></p>";
			echo "<p>Judul Gambar : $judul_gambar</p>";
			echo "<p>Category : $category_gambar</p>";
			echo "<p>Harga : $harga_gambar</p>";  
		} else {
		   echo "<p>Gambar gagal dikirim</p>";
		}
   } else {
		echo "Jenis gambar yang anda kirim salah. Harus .jpg .gif .png";
   }
} else {
	echo "Anda belum memilih gambar";
}
?>
            </div>
			

			<div id="right" class="grid_5">
			    
				<div id="valid"> 
					<form method="POST" action="signup.php">
						<fieldset >
							<legend>Masuk</legend>
							<label for="username">Email</label><input type="text" name="username">
							<label for="password">Sandi</label><input type="password" name="password">
							<input type="submit" value="Masuk" name="submit">
							<br><br>Belum punya akun ?<br><a href="#">Mendaftar</a>
						</fieldset>
					</form>
					<?php
						if(isset($_POST['submit']))
						{
							$username = $_POST['username'];
							$password = $_POST['password'];
							$query = "SELECT * FROM user WHERE username = '$username' AND password = '$password'";
							$hasilquery = mysql_query($query);
							$count = mysql_num_rows($hasilquery);

							while ($data = mysql_fetch_assoc($hasilquery)) {
								$admin = $data['admin'];
							}

							if($count == 0)
								echo "username dan password salah";
							else
							{
								session_start();
								$_SESSION['user'] = $username;
								if($admin == 1)
								header("location:admin.php");
								else if($admin == 0)
								header("location:main.php");
							}
						}
					?>
		
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
