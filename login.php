<!DOCTYPE html>
<html>

	<head>
		<title>Sign Up</title>
	
		<script type="text/javascript" src="jquery-1.10.2.js"></script>
		<link rel="stylesheet" href="css_24_fixed.css" type="text/css"/>
	</head>

	<body>
		<div id="wrap" class="container_24"> 
			<div id="header" class="grid_24">

  				<a href="#"><img src="images/DESAINPROGWEB.jpg" width="200"/></a>
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

			
			<div id="right" class="grid_5">
			    
				<div id="valid">
					<form id='login' action='login.php' method='post'>
						<fieldset >
							<legend>Login</legend>
							<form method="POST" action="login.php">
								<label for="email">Email</label>
									<input type="text" name="email">
								<label for="password">password</label>
									<input type="password" name="password">
								<input type="submit" value="login" name="submit">
							</form>
							<?php
								include("koneksi.php");
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
									echo "username dan password salah";
									else
									{
										session_start();
										$_SESSION['email'] = $email;
										if($admin == 1)
											header("location:admin.php");
										else if($admin == 0)
											header("location:main.php");
									}
								}
							?>		

							<br><br>Doesn't have account? <br><a href="#">Sign Up</a>
						</fieldset>
					</form>
				</div>

				<div id="cart">
					<h3>Shopping Cart</h3>
					<br />
					<img src="images/chart.jpg">
					<LABEL></LABEL>
				</div>

				<div id="socialmedia">
					<center><strong>Like or Follow us:</strong>
						<br><br>
						<a href=""> <img src="images/facebook.jpg" width="35"></a><span></span>
						<a href=""> <img src="images/twitter.jpg"width="35"></a>
					</center>
				</div>
			</div>

<!--Batas Testimony atas-->
			
		
<!--Batas komentar bawah -->

			<div id="footer" class="grid_24">
				<div id="footer-detail">
					<center><a href="">&copy; 2013 RC-Shop.com Design by Genesis Progweb</a></center>
				</div>
			</div>

		</div>
	</body>

</html>
