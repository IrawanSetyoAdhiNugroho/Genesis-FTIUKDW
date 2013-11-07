<!DOCTYPE html>
<html>

	<head>
		<title>Home</title>
	
		<script type="text/javascript" src="jquery-1.10.2.js"></script>
		<link rel="stylesheet" href="css_24_fixed.css" type="text/css"/>
		<link rel="stylesheet" type="text/css" href="engine1//style.css" media="screen" />
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

			<div id="SlideShow" class="grid_14">
				
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
						<a href=""> <img src="facebook.jpg" width="35"></a><span></span>
						<a href=""> <img src="twitter.jpg"width="35"></a>
					</center>
				</div>
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

