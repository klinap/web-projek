<?php
    $konek=mysqli_connect('localhost','root','','dbtiketkonser');
    if(!$konek)
    {
        die("Koneksi Gagal").mysqli_connect_error();
    }
?>