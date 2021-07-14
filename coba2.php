<!DOCTYPE html>
<html>
<head>
	<title>Coba postest 10</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
	<style type="text/css">
		@import url('https://fonts.googleapis.com/css2?family=Courgette&display=swap');
		*{
			margin: 0;
			padding: 0;
			
		}
		#gambar{
			background:linear-gradient(rgba(0,0,0,0.7),#DDA0DD), url(ls.jpg);
			background-size: cover;
			background-position: center;
			height: 100vh;
		}
		.home{
			font-family: 'Roboto', sans-serif;
		}
		
		.home a{
			text-decoration: none;
			display: inline-block;
			color: white;
			border: .5px solid white;
			border-radius: 10px;
			margin:10px;
			position: relative;
			z-index: 1;
			transition: color 0.5s;
		}
		.home a span{
			width: 0;
			height: 100%;
			position: absolute;
			border-radius: 10px;
			top: 0;
			left: 0;
			background: #DDA0DD;
			z-index: -1;
			transition: 0.5s;

		}
		.home a:hover span{
			width: 100%;
			

		}
		.home a:hover {
			background: #DDA0DD;
			color: #000;


		}
	ul{
     	float: right;
     	list-style-type: none; 
     	margin-top: 25px; 
     }
 
     ul li{
        display: inline-block;
     }
 
     ul li a{
        text-decoration: none
        color:white;
        padding: 5px 20px;
        border: 1px solid white;
     }
		.logo {
			width: 60px;
			position: absolute;
			top: 4%;
			left: 5%;
		}
		.kunjungan{
			position: absolute;
			color: white;
			font-size: 15px;
			top: 15%;
			left: 2%;
			font-family: 'Roboto', sans-serif;
		}
		.judul{
			text-align: center;
			color: #fff;
			padding-top: 200px;

		}
		.judul h1{
			font-size: 70px;
			font-family: 'Courgette', cursive;
		}
		.judul p{
			font-size: 20px;
			font-style: italic;
			font-family: 'Roboto', sans-serif;
		}
		.gambar-btn{
			margin: 70px auto 0;
			font-family: 'Roboto', sans-serif;
		}
		.gambar-btn a{
			text-decoration: none;
			display: inline-block;
			margin:0 20px;
			padding: 10px 20px;
			color: white;
			border: .5px solid white;

			position: relative;
			z-index: 1;
			transition: color 0.5s;
			border-radius: 20px ;
		}
		.gambar-btn a span{
			width: 0;
			height: 100%;
			position: absolute;
			top: 0;
			left: 0;
			background: #DDA0DD;
			z-index: -1;
			transition: 0.5s;
			border-radius: 20px ;

		}
		.gambar-btn a:hover span{
			width: 100%;

		}
		.gambar-btn a:hover {
			color: #000;

		}

		.utama{
			width: 700px;
			height: 600px;
			background-color: white;
			margin: 0 auto;
			padding-top: 50px;

			border-radius: 10px;
			border: 1px solid #eeeeee;
		}
		.img{
			background-image: url(afc.jpg);
			background-color: lavender;
			background-size: cover;
			border-radius: 100px;
			width: 150px;
			height: 150px;
			margin: 0 auto;
			border: 1px solid #eaeaea
		}
		.utama h2{
			text-align: center;
			font-size: 40px;
			margin: 0px;
			color: #008B8B;
			font-family: 'Courgette', cursive;

		}
		.text{
			text-align: center;
			font-size: 15px;
			margin: 0;
			color: #DB7093;
			font-style: italic;
			font-family: 'Roboto', sans-serif;
		}
		.utama p{
			margin: 0 auto;
			padding-top: 20px;
			width: 550px;
			height: auto;
			color: #324e63;
			font-family: 'Lato', sans-serif;
			text-align: center;

		}
		.all{
			background-color: #DDA0DD;
		}
		footer{
			background: #DDA0DD;
			height: auto;
			width: 100vw;
			font-family: "Open Sans";
			padding-top: 40px;
			color: white;
			font-family: 'Roboto', sans-serif;
		}
		.footersatu{
			display: flex;
			align-items: center;
			justify-content: center;
			flex-direction: column;
			text-align: center;
		}
		.footersatu h3{
			color: white;
			font-size: 20px;
			font-weight: 400;
			text-transform: capitalize;
			line-height: 40px;
		}
		
		.sosmed{
			list-style: none;
			display: flex;
			align-items: center;
			justify-content: center;
			margin: 10px;
			
		}
		.sosmed li {
			margin: 0 10px;
		}
		.sosmed a{
			text-decoration: none;
			color: white;
			position: relative;
			
			transition: color 0.5s;
			
		}
		.sosmed a i {
			font-size: 10px;
			transition: color 0.5s;
			

		}
		.sosmed a:hover i{
			color: aqua;
		}
		.sosmed a span{
			
			transition: 0.5s;

		}
		.footerdua{
			background: #DDA0DD;
			width: 100vw;
			padding: 20px 0;
			text-align: center;
		}
		.footerdua p{
			font-size: 14px;
			word-spacing: 2px;
			text-transform: capitalize;

		}
		.footerdua span{
			text-transform: uppercase;
			opacity: .4;
			font-weight: 200;
			z-index: -1;
			transition: 0.5s;
		}



	</style>
</head>
<body>
	
	<div class="home" id="kehome">
		
			<ul>
				<li><a href="#kehome"><span></span>Home</a></li>
				<li><a href="profil.php"><span></span>Profil</a></li>
				<li><a href="tel:+6281328437511"><span></span>Hubungi</a></li>
				<li><a href="bukutamu.php"><span></span>Isi Buku Tamu</a></li>
				<li><a href="/postest/postest11/latihan33.php"><span></span>Upload File</a></li>
				
			</ul>
	</div>

	<section id=gambar>
		<img src="logo.png" class="logo">
		<div class="kunjungan">
			<?php
$filename = 'counter.txt';
 
function counter(){		
	global $filename;	
 
	if(file_exists($filename)){		
		$value = file_get_contents($filename);	
	}else{		
		$value = 0;		
	}
 
	file_put_contents($filename, ++$value);		
}
 
counter();	
 
echo 'Anda pengunjung ke '.file_get_contents($filename);	
?>

		</div>
		<div class="judul">
			<h1>Hai! saya <strong style="color: #DDA0DD">Allisa Fadya Chairani</strong></h1>
			<p>Mahasiswi Teknik Informatika UAD</p>
			<div class="gambar-btn">
				<a href="#tentangsaya"><span></span>Tentang Saya</a>
			</div>
		</div>
	</section>
<div class="all" id="tentangsaya">
	<div class="utama" >
		<div class="img"></div>
		<h2>Allisa Fadya Chairani</h2>
		<div class="text">Mahasiswi TI,UAD <strong>Kebumen, Jawa Tengah</strong></div>
		<p>Halo,Selamat datang di halaman website sederhana hasil tugas postest pweb.Saya <strong>Allisa Fadya Chairani</strong> biasa dipanggil Allisa atau lisa.Sekarang saya sedang menempuh pendidikan di Universitas Ahmad Dahlan Yogyakarta jurusan Teknik Informatika semester dua.Sekarang saya masih tinggal di kota asal saya Kebumen, Jawa Tengah, karena pandemi sehingga sejak mulai perkuliahan saya tidak pernah datang ke kampus.Mengapa saya memilih jurusan Teknik Informatika ? Karena saya sudah mulai tertarik dengan jurusan TI sejak akhir SMA, walaupun tidak punya pengalaman dalam coding tapi saya yakin pasti bisa eh setelah tau codingan seperti ini banyak error dan banyaknya bahasa pemrograman yang harus di pelajari bikin kepala nyud-nyud an :') sulit memang tapi ya berusaha saja dan banyak belajar lagi karena hasil tidak menghianati usaha.</p>
	</div>

</div>
<footer>
	<div class="footersatu">
		<h3><b>Ikuti saya di Sosial media</b></h3>
		
		<ul class="sosmed">
			<li><a href="https://www.facebook.com/allisa.fadya/">Facebook<a class="social-media-icon" href="https://link_social_mendia_anda"><span class="fab fa-facebook"></span></a></li>				
		<li><a href="https://twitter.com/day6official">Twitter<a class="social-media-icon" href="https://link_social_mendia_anda"><span class="fab fa-twitter"></span></a></li>
		<li><a href="https://www.instagram.com/from_allisa/">Instagram<a class="social-media-icon" href="https://link_social_mendia_anda"><span class="fab fa-instagram"></span></a></li>	
		<li><a href="https://www.youtube.com/channel/UCp-pqXsizklX3ZHvLxXyhxw">Youtube<a class="social-media-icon" href="https://link_social_mendia_anda"><span class="fab fa-youtube"></span></a></li>				
		</ul>
	<div class="footerdua">
		<p><b>copyright allisa fadya chairani @2021</b> <span>#yolo #myday </span></p>
	</div>
	</div>
</footer>





</body>
</html>