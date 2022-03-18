<?php 
session_start();
include('koneksi.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Sistem Pendukung Keputusan Lensa Kontak</title>
	<!--Import Google Icon Font-->
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<!--Import materialize.css-->
	<link type="text/css" rel="stylesheet" href="assets/css/materialize.css"  media="screen,projection"/>
	<link rel="stylesheet" href="assets/css/table.css">
	<link rel="stylesheet" href="assets/css/style.css">

	<link rel="apple-touch-icon" sizes="76x76" href="assets/image/apple-icon.png"> 	<link rel="icon" type="image/png" sizes="96x96" href="assets/image/favicon.png">

	<!--Let browser know website is optimized for mobile-->
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<!--Import jQuery before materialize.js-->
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script type="text/javascript" src="assets/js/materialize.js"></script>
	
	<!-- Font Awesome -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
</head>
<body>
	<div class="navbar-fixed">
	<nav>
    	<div class="container">
					
						<div class="nav-wrapper">
							<img src="assets/image/favicon.png" style="height: 40px; width: auto; margin-top: 12px">
							<!-- <img src="assets/image/logo.png" style="height: 35px; width: auto; margin-top: 12px"> -->
							<a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>

								<ul class="right hide-on-med-and-down">
									<li><a href="index.php">Home</a></li>
									<li><a class="active" href="rekomendasi.php">Rekomendasi</a></li>
									<li><a href="daftarlaptop.php">Daftar Lensa Kontak</a></li>
									<li><a href="#about">About</a></li>
									<ul class="right hide-on-med-and-down">
										<li><a class="waves-effect waves-light btn" href="login.php">Login</a></li>
								</ul>
								</ul>
						</div>
					
        </div>
		</nav>
		</div>
		<!-- Body Start -->
		

	<!-- Jumbotron Start -->
	<div id="index-banner" class="parallax-container">
			<div class="section no-pad-bot">
				<div class="container">
					<h1 class="header jarak center wvhite-text" style="font-size: 50px">PILIHAN NOVEL<br>ANGGARA BOOKS</h1>
					<div class="row center">
					</div>
				</div>
			</div>
			<div class="parallax"><img src="assets/image/buku.jpg" alt="Laptop"></div>
		</div>
		<!-- Jumbotron End -->

		<!-- Daftar Laptop Start -->
	<div style="background-color: #efefef">
		<div class="container">
		    <div class="section-card" style="padding: 50px 0px">
			  <!--   Icon Section   -->
				<ul>
				    <li>
							<div class="row">
								<div class="card">
									<div class="card-content">
										<table class="responsive-table">
										<thead>
    										<tr>
      										<th scope="col"><center>No</center></th>
      										<th scope="col"><center>Kriteria Buku</center></th>
     										<th scope="col"><center>Kriteria Halaman</center></th>
      										<th scope="col"><center>Kriteria Kertas</center></th>
	  										<th scope="col"><center>Kriteria Warna</center></th>
	  										<th scope="col"><center>Selengkapnya</center></th>
    										</tr>
 										</thead>
										<tbody>
   										<th scope="row"><center>1</center></th>
      									<td><center>Biasa</center></td>
      									<td><center>Sedang</center></td>
     									<td><center>Bagus</center></td>
										<td><center>Gelap</center></td>
										<td><center><a class="waves-effect waves-light btn" href="detail.php?detail_id=<?php echo $user['id_buku']?>"><i class="material-icons right">open_in_new</i>Selengkapnya</a>
										</center></td>
												<!--count($V)-->
											<?php
												$no=1;
												for ($i=0;$i<5;$i++) {
												
											?>
												<?php
													$no++;}
												?>
                                        </tbody>
                                        </table>
									<a class='btn btn-primary btn-sm' href='cetak.php?id_buku=$row[id_buku]'>BACA</a>
										</table>
                                    </div>
								</div>
							</div>
				    </li>
				</ul><br><br>

				<div class="row center" \>
					<a href="rekomendasi.php" id="download-button" class="btn-large waves-effect waves-light teal lighten-1" style="margin-top: 20px">Pilih Rekomendasi Ulang</a>
				</div>

				<div class="row center" \>
					<a href="close.php" id="download-button" class="btn-large waves-effect waves-light teal lighten-1" style="margin-top: 20px">Close</a>
				</div>
	    	</div>
		</div>
	</div>
	<!-- Daftar Laptop End -->
<!-- Modal Start -->
<div id="about" class="modal">
	<div class="modal-content">
          <h4>About</h4>
          <p>Buku Novel ini merupakan salah satu karya dari penulis terkenal yaitu Tere Liye. yang mana memiliki banyak judul buku yang diterbitkan oleh Tere Liye. Jika anda ingin memesannya bisa langsung hubungi<br>
                    <br>
                    <b>Yayu Anggraeni</b><br>
                  
                    <b>Instagram : yayuanggraeni8</b>
                </p>
        </div>
												</div>
</div>
<!-- Modal End -->

    <!-- Body End -->

    <!-- Footer Start -->
	<div class="footer-copyright" style="padding: 30px 0px; background-color: white">
      <div class="container">
      	<center>
					<img src="assets/image/favicon.png" style="height: 40px; width: auto; margin-top: 12px">
      		<!-- <img src="assets/image/logo.png" style="height: 35px; width: auto; margin-top: 12px"> -->
      	</center>
        <p align="center" style="color: #999">&copy; Read Books Anggara</p>
      </div>
    </div>
    <!-- Footer End -->
    <script type="text/javascript">
	  	  $(document).ready(function(){
	      $('.parallax').parallax();
		  $('.modal').modal();
	    });
	</script>
</body>
</html>