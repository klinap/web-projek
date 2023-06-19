<?php
    $server     = 'localhost';
    $user       = 'root';
    $password   = '';
    $dbtiketkonser   = 'dbtiketkonser';

    $koneksi         = mysqli_connect($server, $username, $password, $dbtiketkonser );
    $db         = mysqli_connect($server, $user, $password, $database );

    if ($koneksi) {
        echo "Berhasil Terhubung dengan Database";
    } else {
       die('Gagal Terhubung dengan Database!<br>'. mysqli_connect_error());
    }
    
?>