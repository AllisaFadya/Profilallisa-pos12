<!DOCTYPE html>
<html> 
 <head> 
 <title>My Guest Book</title> 
 <meta http-equiv="Content-Type" content="text/html; charset=iso8859-1"> 
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">

<style type="text/css">
@import url('https://fonts.googleapis.com/css2?family=Courgette&display=swap');

	*{
			margin: 0;
			padding: 0;
			
		}
		body{
		background:linear-gradient(rgba(0,0,0,0.7),#008B8B), url(ls.jpg);
			background-size: cover;
			background-position: center;
			
			font-family: 'Roboto', sans-serif;
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
			background: #008B8B;
			z-index: -1;
			transition: 0.5s;

		}
		.home a:hover span{
			width: 100%;
			

		}
		.home a:hover {
			background: #008B8B;
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
	
        .wrapper{
        	
			max-width: 500px;
			box-sizing: border-box;
			width: 90%;
			background: #fff;
			margin: 20px auto;
			padding: 30px;
			box-shadow: 1px 1px 5px rgba(0,0,0,0.5);
			border-radius: 5px;
		}
		.wrapper .judul{
			font-family: 'Courgette', cursive;
			font-size: 24px;
			font-weight: 700;
			margin-bottom: 25px;
			color: #008B8B;
			text-transform: uppercase;
			text-align: center;
		}
		.wrapper form{
			width: 100%;
		}
		.wrapper form tr td{
			margin-bottom:15px;
			display: flex;
			align-items: center;
		}
		.wrapper form  label{
			width: 400px;
			color: #DDA0DD;
			margin-right: 10px;
			font-size: 14px;
		}
		.wrapper form  input,
		.wrapper form  textarea{
			width: 100%;
			outline: none;
			border: 1px solid #DDA0DD;
			font-size: 15px;
			padding: 8px 10px;
			border-radius: 3px;
			transition: all 0.3s ease;
		}
		.wrapper form  textarea{
			resize: none;
			height: 125px;
		}
			.wrapper form  #status td{
			position: relative;
			width: 400px;
			height: 37px;
		}
		.wrapper form #status select{
			-webkit-appearance :none;
			appearance:none;
			border: 1px solid #DDA0DD;
			width: 400px;
			height: 100%;
			border-radius: 3px;
			outline: none;
		}
		.wrapper form  #status:before{
			content: "";
			position: absolute;
			top: 12px;
			right: 10px;
			border:8px solid;
			border-color: #DDA0DD transparent transparent; 
			pointer-events: none;
		}
		.wrapper form  #status:focus ,
		.wrapper form  textarea:focus{
			border: 1px solid #DDA0DD;

		}
		.wrapper form .btn{
			width: 100%;
			margin: 4px;
			padding: 8px 10px;
			font-size: 15px;
			border: 0;
			background: #008B8B;
			color: #fff;
			cursor: pointer;
			border-radius: 3px;
			outline: none;
		}
		.wrapper form .btn:last-child{
			margin-bottom: 0;
		}
		.wrapper form  .btn:hover{
			background: #DDA0DD;
		}




</style>
</head> 
 <body> 


<div class="home" id="kehome">
		
			<ul>
				<li><a href="coba2.php"><span></span>Home</a></li>
				
				<li><a href="tel:+6281328437511"><span></span>Hubungi</a></li>
				<li><a href="lihat.php"><span></span>Lihat Buku Tamu</a></li>
			</ul>
	</div>

	<section id=gambar>
		<img src="logo.png" class="logo">
</section>
<br><br><br><br><br><br>

 	<div class="wrapper">
<div class="judul" align="center"><strong><font size="6" face="Courier New, 
Courier, mono">BUKU TAMU </font></strong></div> 

	 <form name="form1" method="post" action="lihat.php"> 
	 <table border="0" align="center"> 
 	
		 <tr> 
		 <td><label>Nama Lengkap</label></td> 
		 <td><input name="nama" type="text" id="nama" class="input">
		 </td> 
		 </tr> 
		 <tr> 
		 <td><label>Alamat</label></td> 
		 <td><input name="alamat" type="text" id="alamat"></td> 
		 </tr>
		 <tr> 
		 <td><label>E-Mail</label></td> 
		<td><input name="email" type="text" id="email"></td> </tr> 
		 </tr> 
		 <tr> 
		 <td><label>Pekerjaan</label></td> 
		 <td><select name="status" id="status"> 
		 <option value="" >--Pilih--</option>
		 <option value="Bekerja">Bekerja</option> 
		 <option value="Mahasiswa">Mahasiswa</option> 
		 <option value="Pelajar">Pelajar</option> 
		 <option value="Tidak Ada">Tidak Ada</option> 
		 </select></td> 
		 </tr> 
		 <tr> 
		 <td><label>Komentar</label></td> 
		 <td><textarea name="komentar" id="komentar"></textarea></td> 
		</textarea>
		 </tr> 
		 <tr> 
		 <td>&nbsp;</td> 
		 <td><input type="submit" name="Submit" value="Kirim" class="btn"><input type="reset"  name="Submit2" value="Batal" class="btn"> 
</td> 
</tr> 
 </table> 
 </form> 

 </body> 
 </html>


