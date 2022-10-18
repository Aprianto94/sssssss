<?php
    include("koneksi.php");


    $nik = $_REQUEST["nik"];
    $nama_lengkap = $_REQUEST["nama_lengkap"];



    $query = $koneksi->query("select * from akun where nik='$nik' AND nama_lengkap='$nama_lengkap'")->fetchAll();
    
    if ($query){
        $_SESSION["nik"] = $_REQUEST['nik'];
        $_SESSION["nama_lengkap"] = $_REQUEST['nama_lengkap'];
        header("Location:index.php");
    }
    else{
        header("Location:login.php");
    }
?>