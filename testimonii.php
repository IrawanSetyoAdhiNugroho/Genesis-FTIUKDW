<?php
	include("koneksi.php");
	session_start();
?>

<?php
	if(isset($_POST['masuk']))
	{
		$email = $_POST['email'];
		$password = $_POST['password'];
		$query = "SELECT * FROM datauser WHERE email = '".$email."' AND password = '".$password."'";
		$hasilquery = mysql_query($query);
		$count = mysql_num_rows($hasilquery);
	}
?>

<!DOCTYPE html>
<html>

	<head>
		<title>Testimoni</title>
	
		<script type="text/javascript" src="jquery-1.10.2.js"></script>
		<link rel="stylesheet" href="style.css" type="text/css"/>
		<link rel="stylesheet" type="text/css" href="engine1//style.css" media="screen" />
		<script type="text/javascript" src="jquery.js"></script>
		<script type="text/javascript" >
		$(document).ready( function(){

			$("#aboutus").hide();
			$("#howtobuy").hide();
			$("#SlideShow").fadeIn();
			$("#signup").hide();
			$("#home").click(function(){
				$("#aboutus").hide();
				$("#howtobuy").hide();
				$("#SlideShow").fadeIn();
				$("#signup").hide();
			});	
			$("#tentang").click(function(){
				$("#aboutus").show();
				$("#howtobuy").hide();
				$("#SlideShow").hide();
				$("#signup").hide();
			});	
			$("#carabeli").click(function(){
				$("#aboutus").hide();
				$("#howtobuy").show();
				$("#SlideShow").hide();
				$("#signup").hide();
			});				
			$("#daftar").click(function(){
				$("#aboutus").hide();
				$("#howtobuy").hide();
				$("#SlideShow").hide();
				$("#signup").show();
			});			
		});
		</script>
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
				<a href="index.php"><h1 id="home" class="grid_4">Beranda</h1></a>
				<a href="#howtobuy"><h1 id="carabeli" class="grid_4">Cara Pembelian</h1></a>
				<a href="#aboutus"><h1 id="tentang" class="grid_4">Tentang kami</h1></a>
				<a href="testimonii.php"><h1 id="testimony" class="grid_4">Testimoni</h1></a>
				<?php 
						if(!empty($_SESSION['user']))
						{
					?>		
				<a href="edit.php"><h1 id="personal" class="grid_4">Personal</h1></a>		
					<?php
						}
						else
						{
							
						}
					?>
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

			<div id="SlideShow" class="grid_14">
				<div id="testimoni" class="grid_10" action="testimoni.php">
                        <h3>Testimony</h3>
                        <p>
                        	Komentar dan saran anda sangat kami butuhkan untuk meningkatkan kualitas situs kami. Mohon bantuannya.
                        </p>
                        <div class ="a">
                            <?php
                            mysql_connect("localhost", "root", "");
                            mysql_select_db("genesis");
 
                            $query = "SELECT * FROM testimony ";
                            $data = mysql_query($query);
                            while ($hasil = mysql_fetch_assoc($data)) {
                            echo "username : ".$hasil['username']."<br>";
                            echo "testimoni : ".$hasil['testimony']."<br><br>";
                            }
                            ?>
                        </div>
                        <hr>
                        <?php 
							if (!empty($_SESSION['user']))
							{
						?>
                        <form action="testimoni.php" method="post">
                        		<?php
                        		$query=mysql_query("SELECT * FROM datauser")
                  
                        		?>
                                Nama Anda : <input type="text" name="nama" value=<?php echo $query['username'];?>> <br>       
                                testimoni : <input type="text" name="testimoni" >
                                <input type="submit" value = "submit" name = "submit">
                        </form>
                        <?php
		                	} 
		                ?>
                </div>
            </div>	

            <div id="aboutus" class="grid_14">
				<center><h1>ABOUT US</h1></center>
				<P align="justify">Mainan Remote Control merupakan salah satu kiprah kami dalam dunia bisnis, dengan pengalaman yang cukup lama berkecimpung dalam dunia online dan dunia RC kami siap melayani anda dengan bermodalkan kejujuran, ketekunan sepenuh hati dan ketelitian maksimal guna menggapai kepuasan anda yang merupakan orang-orang kesayangan kami.<br><br>Produk-produk yang kami jual antara lain :
				</P>
				<ol>
					<li>Cars. antara lain Sport, F1, SUV, MPV, Truck, dan sedan remote control. </li>
					<li>Bike. yaitu segala macam motorcycle remote control</li>
					<li>Air Force. antara lain jenis Helikopter dan jet remote control</li>
					<li>Water Adventure. antara lain Ship dan Boat remote control</li>
					<li>Tank. antara lain Leopard dan Tiger-fighter remote control</li>
				</ol>
				<p align="justify">Terima kasih atas kepercayaan anda terhadap RC-Shop.com dan kami akan membawa kepercayaan tersebut sebagai mandat utama misi kami yaitu,  "memberikan yang terbaik untuk anda” 
				</p>
				<h4 align="right">Admin</h4>
			</div>

			<div id="howtobuy" class="grid_14">
				<center><h1>HOW TO BUY AT RC SHOP</h1></center>
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
					
							<?php 
								if(!empty($_SESSION['user']))
								{
							?>		
							<form method="POST" action="logout.php">
						<fieldset >
							<legend>Keluar</legend>
							<p>  <?php echo "Selamat Datang ".$_SESSION['user']; ?></p>
							<a href="logout.php"><input type="submit" value = "Keluar" name = "keluar"></a>
						</fieldset>
							<?php
								}
								else
								{
							?>
							<form method="POST" action="index.php">
						<fieldset >
							<legend>Masuk</legend>
							<label for="email">Email</label><input type="text" name="email">
							<label for="password">Sandi</label><input type="password" name="password">
							<input type="submit" value = "Masuk" name="masuk">
							<br><br>Belum punya akun ?<br><h3 id="daftar">Mendaftar</h3>
						</fieldset>
							<?php
								}
							?>	
					</form>
					<?php
						if(isset($_POST['masuk']))
						{
							$email = $_POST['email'];
							$password = $_POST['password'];
							$query = "SELECT * FROM datauser WHERE email = '".$email."' AND password = '".$password."'";
							$hasilquery = mysql_query($query);
							$count = mysql_num_rows($hasilquery);

							//while ($data = mysql_fetch_assoc($hasilquery)) {
								//$admin = $data['admin'];
							//}


							if($count == 0)
								echo "email dan password salah";
							else
							{
								$_SESSION['user'] = $email;
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
<?php
	mysql_close($connect); 
?>
