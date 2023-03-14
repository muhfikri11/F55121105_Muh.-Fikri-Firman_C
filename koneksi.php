<?php
    $host = "localhost";
    $user = "root";
    $pass = "";
    $database = "db_mahasiswa";
    $koneksi = mysqli_connect($host, $user, $pass, $database);

    if(mysqli_connect_errno()){
        echo "Koneksi Database Gagal;" .mysqli_connect_error();
    }
?>