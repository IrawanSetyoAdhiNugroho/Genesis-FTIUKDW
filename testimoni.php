<!DOCTYPE html>
<?php
include ("koneksi.php");
?>
<html>

        <head>
                <title>Testimoni</title>
        
                <script type="text/javascript" src="jquery-1.10.2.js"></script>
                <link rel="stylesheet" href="style.css" type="text/css"/>
        </head>

        <body>
                <div id="wrap" class="container_24"> 
                        <div id="header" class="grid_24">

                                  <a href="#"><img src="images/DESAINPROGWEB.jpg" width="200"/></a>
                                  <div id="search" class="grid_5">
                                    <button></button> 
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

                        
                        <div id="right" class="grid_5">
                            
                                <div id="valid">
                                        <fieldset >
                                                <legend>Masuk</legend>
                                                <form id='login' action='SignupFixed.php' method='post'>
                                                        <label for="email">Email</label>
                                                                <input type="text" name="email">
                                                        <label for="password">password</label>
                                                                <input type="password" name="password">
                                                        <input type="submit" value="Masuk" name="submit">
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
                                                <br><br>Belum mendaftar ? <br><a href="SignupFixed.php">Daftar</a>
                                        </fieldset>
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


                        
                <div id="testimony" class="grid_10">
                        <h3>Testimony</h3>
                        <p>Komentar dan saran anda sangat kami butuhkan untuk meningkatkan kualitas situs kami </p>
                        <div class ="a">
                            <?php
                            mysql_connect("localhost", "root", "");
                            mysql_select_db("genesis");
 
                            $query = "SELECT * FROM testimoni ";
                            $data = mysql_query($query);
                            while ($hasil = mysql_fetch_assoc($data)) {
                            echo "username : ".$hasil['username']."<br>";
                            echo "testimoni : ".$hasil['testimoni']."<br>";
                            }
                            ?>
                        </div>
                        <hr>
                        <form action="testimoni.php" method="post">
                        
                                Nama Anda : <input type="text" name="nama" > <br>       
                                testimoni : <input type="text" name="testimoni" >
                                <input type="submit" value = "submit" name = "submit">
                </div>
                </div>
                </div>
<?php

    $username=$_POST['nama'];
    $testimoni=$_POST['testimoni'];
    $query = "INSERT into testimoni(username,testimoni) VALUES ('$username','$testimoni')";
    mysql_query($query) or die("Data Error");
 

   
   //while ( <= 10) {
       # code...
   

?> 
                        <div id="footer" class="grid_24">
                                <div id="footer-detail">
                                        <center><a href="">&copy; 2013 RC-Shop.com Design by Genesis Progweb</a></center>
                                </div>
                        </div>

                </div>
        </body>

</html>
