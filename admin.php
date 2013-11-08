<!DOCTYPE html>
<html>

	<head>
		<title>SPORT</title>
	
		<script type="text/javascript" src="jquery-1.10.2.js"></script>
		<link rel="stylesheet" href="cssblue.css" type="text/css"/>
		<link rel="stylesheet" type="text/css" href="engine1//style.css" media="screen" />
		<script type="text/javascript" src="engine1//jquery.js"></script>	</head>

	<body>
		<div id="wrap" class="container_24"> 
			<div id="header" class="grid_24">
  				<a href="#"><img src="DESAINPROGWEB.jpg" width="200"/></a>
  				<div id="search" class="grid_5">
			    	<button></button> 
			    	<input type="text" value="search" />
				</div>
  			</div>

  			<div id="navigation" class="grid_24">
				<ul>
					<li><a href="homefixed.php" class="grid_4"><strong>HOME</strong></a></li>
					<li><a href="howtobuy.php" class="grid_4"><strong>HOW TO BUY</strong></a></li>
					<li><a href="aboutus.php" class="grid_4"><strong>ABOUT US</strong></a></li>
					<li><a href="testimony.php" class="grid_4"><strong>TESTIMONY</strong></a></li>
					<li><a href="#" class="grid_4"><strong>PERSONAL</strong></a></li>
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
<div id="sport" class="grid_14">
				<form action="upload.php" method="post" enctype="multipart/form-data" name="form1" id="form1">
  <p>Judul Gambar :
    <input name="judul_gambar" type="text" id="judul_gambar" size="30" maxlength="30" />
  </p>
  <p>Daftar Harga :
  	<input name="harga_gambar" type="int" id="harga_gambar" size="30" maxlength="30" />
  </p>
  <p>
    File Gambar
    : 
    <input name="nama_file" type="file" id="nama_file" size="30" />
</p>
<select name="category">
		<option value="sport">Sport</option>
		<option value="motorcycle">Motorcycle</option>
		
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
			echo "<p>Harga : Rp. $harga_gambar</p>";  
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
						<a href="https://www.facebook.com/pages/RC-SHOP/173164616214639?ref=hl"> <img src="facebook.jpg" width="35"></a><span></span>
						<a href="https://twitter.com/CosmicRcShop"> <img src="twitter.jpg"width="35"></a>
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

