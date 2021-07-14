<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>


<?php

$namaFile = $_FILES['berkas']['name'];
$namaSementara = $_FILES['berkas']['tmp_name'];
$deskripsi = $_POST['deskripsi']; 

// tentukan lokasi file akan dipindahkan
$dirUpload = "terupload/";

// pindahkan file
$terupload = move_uploaded_file($namaSementara, $dirUpload.$namaFile);

if ($terupload) {
    echo "Upload berhasil!<br/>";
    echo "Link: <a href='".$dirUpload.$namaFile."'>".$namaFile."</a>";
    echo "Deskripsi File :<br>$deskripsi"; 
} else {
    echo "Upload Gagal!";
}

?>
</body>
</html>