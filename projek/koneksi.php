<?php
    $server     = 'localhost';
    $username   = 'root';
    $password   = '';
    $dbtiketkonser   = 'dbtiketkonser';

    $koneksi         = mysqli_connect($server, $username, $password, $dbtiketkonser );

    if ($koneksi) {
        echo "Berhasil Terhubung dengan Database";
    } else {
       die('Gagal Terhubung dengan Database!<br>'. mysqli_connect_error());
    }
    
?>