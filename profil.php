<!DOCTYPE html>
<html>
<head>
	<title>Profil</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
	<style type="text/css">
		body{
			font-family: sans-serif;
			color: #3c3939;
			background:linear-gradient(rgba(0,0,0,0.7),#CD5C5C), url(ls.jpg);
			background-size: cover;
			background-position: center;
			

		}
		.profil{
			width: 400px;
			margin: auto;
			background: #fff;
			box-shadow: 0 4px 10px 0 rgba(0,0,0,0.5);

		}
		.gambar-box{
			position: relative;
		}
		.info {
			color: blue;
			margin-right: 16px;
		}
		.main{
			padding: 20px;

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
			background: #CD5C5C;
			z-index: -1;
			transition: 0.5s;

		}
		.home a:hover span{
			width: 100%;
			

		}
		.home a:hover {
			background: #CD5C5C;
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

	</style>
</head>
<body>
	<div class="home" id="kehome">
		
			<ul>
				<li><a href="index.html"><span></span> Home </a></li>
				<li><a href="bukutamu.php"><span></span> Isi Buku Tamu</a></li>
				<li><a href="tel:+6281328437511"><span></span> Hubungi </a></li>
			</ul>
<section id=gambar>
		<img src="logo.png" class="logo">
</section>
<br><br><br><br><br><br>

	<div class="profil">
		<div class="gambar-box">
			<img src="allisa2.jpg" style="width: 100%">
			<div class="judul">
			<center> <h2> Allisa Fadya Chairani </h2></center>
		</div>
		</div>
		<div class="main">
			<strong><p><i class="fa fa-home info"></i> Muktisari, Kebumen, Jawa Tengah</p></strong>
			<p><i class="fa fa-birthday-cake info"></i> 16 Maret 2001</p>
			<p><i class="fa fa-envelope info"></i>  allisafdy16@gmail.com</p>
			<p><i class="fa fa-university info"></i> Universitas Ahmad Dahlan Yogyakarta</p>
			<p><i class="fa fa-briefcase info"></i> Nim 2000018122</p>
			<p><i class="fa fa-address-card info"></i>  Kelas B</p>
			<hr>
			<p><b>
				<i class="fa fa-atom info"></i>Visi
			</b></p>
			<p>Tetap tersakiti walau tak ada yang menyakiti</p>
			<p><b>
				<i class="fa fa-atom info"></i>Misi
			</b></p>
			<p>Stand day6</p>
		</div>
	</div>
</body>
</html>