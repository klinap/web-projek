<?php 
    include 'koneksi.php';
    error_reporting(0);

    //menangkap inputan user dari form daftar akun
    $namaLengkap = $_POST['namaLengkap'];
    $username = $_POST['username'];
    $password = $_POST['password'];

    //menambah data ke database tbdaftarakun dan tblogin
    mysqli_query($koneksi, "INSERT INTO tblogin VALUES('','$namaLengkap' ,'$username' , '$password')");
    header("Location: register.php?pesan=Terdaftar")
?>