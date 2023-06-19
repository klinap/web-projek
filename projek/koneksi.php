<?php 
$host = "localhost";
$user = "root";
$pass = ""; //karena kita menggunakan xampp biasanya pass kosong
$db   = "projek";

    $koneksi = mysqli_connect($host, $user, $pass, $db); //untuk koneksi kita menggunakan fungsi dari mysql. lalu kita masukan parameter untuk melakukan koneksi ke database
    if(!$koneksi){ //cek koneksi
    die("Gagal Koneksi");
    }
?>