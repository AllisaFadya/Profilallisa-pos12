<!DOCTYPE html>
<html>
<head>
	<title>Terimakasih</title>

	<style type="text/css">
		@import url('https://fonts.googleapis.com/css2?family=Fredoka+One&display=swap');
		*{
				margin: 0;
			padding: 0;
			box-sizing: border-box;
			
		}
		body{
			background: #DDA0DD;
			padding: 0 10px;
		}
		  .wrapper{
			max-width: 550px;
			width: 100%;
			background: #fff;
			margin: 20px auto;
			padding: 30px;
			box-shadow: 1px 1px 5px rgba(0,0,0,0.5);
			border-radius: 5px;
			font-family: 'Fredoka One', cursive;
			color:  #008B8B;
			font-size: 25px;
		}
		.home{
			font-family: 'Roboto', sans-serif;
			text-align: center;
		}
		
		.home a{
			text-decoration: none;
			display: inline-block;
			color: #DDA0DD;
			border: .5px solid #008B8B;
			border-radius: 10px;
			margin:10px;
			position: relative;
			z-index: 1;
			transition: color 0.5s;
		}
		.home a span{
			width:0px;
			height: 100%;
			position: absolute;
			border-radius: 10px;
			top: 0;
			left: 5px;
			background: #008B8B;
			z-index: -1;
			transition: 0.5s;

		}
		.home a:hover span{
			width: 100%;
			

		}
		.home a:hover {
			background: #008B8B;
			color: white;


		}
	ul{
     	
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

	</style>
</head>
<body>
	<div class="wrapper">
<?php 

 $nama		= $_POST['nama'];
 $alamat	= $_POST['alamat'];
 $email		= $_POST['email'];
 $status	= $_POST['status'];
 $komentar	= $_POST['komentar'];
 

echo "<head><title>My Guest Book</head></title>"; 
$fp = fopen("guestbook.txt","a+"); 
fputs($fp,"$nama|$alamat|$email|$status|$komentar\n"); 
fclose($fp); 
 echo "<center>Terima Kasih Telah Mengisi Buku Tamu<br></center>"; 
?>
<div class="home">
<?php

 echo "<ul><li><a href=bukutamu.php> Isi Buku Tamu </a><br></li></ul>"; 
 echo "<ul><li><a href=lihat.php> Lihat Buku Tamu </a><br></li></ul>"; 
 
 ?>
</div>
</div>
</body>
</html>
