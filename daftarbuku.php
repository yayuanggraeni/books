<!DOCTYPE html>
<html>
<head>
	<title>Read Books Anggara</title>
	<meta property="og:image" content="assets/image/11.jpg" />
	<meta name="description" content="Sistem Pendukung Keputusan Lensa Kontak berbasis Metode Weight Product">
	<!--Import Google Icon Font-->
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<!--Import materialize.css-->
	<link type="text/css" rel="stylesheet" href="assets/css/materialize.css"  media="screen,projection"/>
	<link rel="stylesheet" href="assets/css/table.css">
	<link rel="stylesheet" href="assets/css/style.css">

	<link rel="apple-touch-icon" sizes="76x76" href="assets/image/apple-icon.png">
	<link rel="icon" type="image/png" sizes="96x96" href="assets/image/favicon.png">

	<!--Let browser know website is optimized for mobile-->
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<!--Import jQuery before materialize.js-->
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script type="text/javascript" src="assets/js/materialize.js"></script>
	
	<!-- Font Awesome -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
	<script>
	$(document).ready(function(){
	  $(".button-collapse").sideNav();
	  $(".dropdown-button").dropdown();
	});
	</script>
</head>
<body>
	<div class="navbar-fixed">
	<nav>
    	<div class="container">
					
		<div class="nav-wrapper">
							
							<img src="assets/image/favicon.png" style="height: 40px; width: auto; margin-top: 12px">
							<a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>

							<ul class="right hide-on-med-and-down">
									<li><a class="active" href="index.php">Home</a></li>
									<li><a href="rekomendasi.php">Rekomendasi</a></li>
									<li><a href="daftarbuku.php">Daftar List Novel</a></li>
									<li><a href="about.php">About</a></li>
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
					<h1 class="header jarak center wvhite-text" style="font-size: 50px">DAFTAR NOVEL<br>ANGGARA BOOKS</h1>
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
                    <center>
                        <h4 class="header" style="margin-left: 24px; margin-bottom: 0px; margin-top: 24px; color: #635c73">LIST NOVEL ANGGARA</h4>
                    </center><br><br><br>
					<div class="row">
								<div class="card">
									<div class="card-content">
										<table class="responsive-table">
										<thead>
    										<tr>
      										<th scope="col"><center>No</center></th>
      										<th scope="col"><center>Judul Buku</center></th>
     										<th scope="col"><center>Karya</center></th>
      										<th scope="col"><center>Jumlah Halaman</center></th>
	  										<th scope="col"><center>Tahun Terbit</center></th>
	  										<th scope="col"><center>Selengkapnya</center></th>
    										</tr>
 										</thead>
										<tbody>
   										<th scope="row"><center>1</center></th>
      									<td><center>Burlian</center></td>
      									<td><center>Tere Liye</center></td>
     									<td><center>200 Halaman</center></td>
										<td><center>2009</center></td>
										<td><center><a class="waves-effect waves-light btn" href="detail.php?detail_id=<?php echo $user['id_buku']?>"><i class="material-icons right">open_in_new</i>Selengkapnya</a>
										</center></td>

										
												<!--count($V)-->
                    <ul>
                        <li>
                                                </form>       
                                            </div>
                                        </div>
                                    </div>                              
                                </div>
                            </div>
                        </li>
                    </ul>	     
                </div>
            </div>
        </div>
		
        <!-- Rekomendasi Laptop End -->

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
        <div class="modal-footer">
          <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">Close</a>
        </div>
    </div>
    <!-- Modal End -->

    <!-- Body End -->

    <script type="text/javascript">
	  $(document).ready(function(){
	      $('.parallax').parallax();
          $('select').material_select();
          $('.modal').modal();
	    });
    </script>
</body>
</html>