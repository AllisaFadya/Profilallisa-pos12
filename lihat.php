<!DOCTYPE html>
<html>
<head>
	<title>Lihat Buku Tamu</title>
	<style type="text/css">
        @import url('https://fonts.googleapis.com/css2?family=Courgette&display=swap');
		*{
				margin: 0;
			padding: 0;
			box-sizing: border-box;
			
		}
		body{
			background-color: #9ACD32;
            font-family: 'Roboto', sans-serif;
		}
        .data{
            color: white;
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
            background: #2E8B57;
            z-index: -1;
            transition: 0.5s;

        }
        .home a:hover span{
            width: 100%;
            

        }
        .home a:hover {
            background: #2E8B57;
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
                <li><a href="index.html"><span></span>Home</a></li>
                <li><a href="profil.php"><span></span>Profil</a></li>
                <li><a href="tel:+6281328437511"><span></span>Hubungi</a></li>
                <li><a href="bukutamu.php"><span></span>Isi Buku Tamu</a></li>
                
            </ul>
    </div>
    <section id=gambar>
        <img src="logo.png" class="logo">
</section><br><br><br><br><br><br>
<h1 class="data"><center>Data Pengisi Buku Tamu</center></h1><hr>
<?php
if(isset($_POST['nama']) || isset($_POST['alamat'])|| isset($_POST['email'])|| isset($_POST['status'])|| isset($_POST['komentar'])) {

   
$name      	 = $_POST['nama'];  
$alamat    	 = $_POST['alamat'];  
$email    	 = $_POST['email'];
$status      = $_POST['status'];
$komentar    = $_POST['komentar'];


    $myfile = fopen("guestbook.txt", "a") or die("Make sure that comments.html is created in the same directory of this file");
    echo "<br>";
    

    $writeInFile    = "<pre><b>Nama     = &nbsp;</b>" . $_POST['nama']. "</pre><br>";

    $writeInFile2   = "<pre><b>Alamat   = &nbsp;</b>" . $_POST['alamat']. "</pre><br>";

    $writeInFile3   = "<pre><b>E-mail   = &nbsp;</b>" . $_POST['email']. "</pre><br>";

    $writeInFile4   = "<pre><b>Status   = &nbsp;</b>" . $_POST['status']. "</pre><br>";

    $writeInFile5   = "<pre><b>Komentar = &nbsp;</b>" . $_POST['komentar']. "</pre><br><hr>";


    fwrite($myfile, $writeInFile);
    fwrite($myfile, $writeInFile2);
    fwrite($myfile, $writeInFile3);
    fwrite($myfile, $writeInFile4);
    fwrite($myfile, $writeInFile5);
    fclose($myfile);

    include ("guestbook.txt");
}
else {
    include ("guestbook.txt");
}
?>
 </body>
</html>