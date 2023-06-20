<?php
    $koneksi=mysqli_connect('localhost','root','','dbtiketkonser');
    if(!$koneksi)
    {
        die("Koneksi Gagal").mysqli_connect_error();
    }
?>