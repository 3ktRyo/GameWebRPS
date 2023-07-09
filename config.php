<?php
    $host = "34.101.108.162";
    $username = "root";
    $password = "yuda123";
    $database = "project1";

    // Membuat koneksi ke database
    $koneksi = mysqli_connect($host, $username, $password, $database);

    // Memeriksa koneksi
    if (!$koneksi) {
        die("Koneksi database gagal: " . mysqli_connect_error());
    }
?>
