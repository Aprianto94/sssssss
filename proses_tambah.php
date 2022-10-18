<?php

    $nik = $_POST['nik'];
    $nama_lengkap = $_POST['nama_lengkap'];

    $database = new PDO("mysql:host=localhost;dbname=pduli_diri", 'root', '');
    $query = $database->query("INSERT INTO akun values('$nik','$nama_lengkap')");

    if($query){
        header("Location:index.php");
     }