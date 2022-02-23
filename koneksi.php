<?php
    // $serverName = "localhost";
    // $userName = "root";
    // $password = "";
    // $database = "ukl_spp";

    //buat koneksi
    $koneksi = mysqli_connect("localhost", "root", "", "ukl_spp");

   

    //cek koneksi
    if (!$koneksi){ 
        die("Koneksi Gagal".mysqli_connect_error());
    }
    else{
        echo ("Koneksi Berhasil");
    
    }

?>