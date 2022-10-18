<?php

    $niklama = $_POST['nik'];
    $tanggal = $_POST['tanggal'];
    $waktu = $_POST['waktu'];
    $lokasi = $_POST['lokasi'];
    $suhu_tubuh = $_POST['suhu_tubuh'];

    $database = new PDO("mysql:host=localhost;dbname=pduli_diri", 'root', '');
    $query = $database->query("INSERT INTO isi_data values('$niklama','$tanggal','$waktu','$lokasi','$suhu_tubuh')");

    if($query){
        header("Location:catatan.php");
     }