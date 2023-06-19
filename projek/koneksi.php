<?php
    $server     = 'localhost';
    $username   = 'root';
    $password   = '';
    $database   = 'dbtiketkonser';

    $db         = mysqli_connect($server, $username, $password, $database );

    if ($db) {
        echo "Berhasil Terhubung dengan Database";
    } else {
       die('Gagal Terhubung dengan Database!<br>'. mysqli_connect_error());
    }
    
?>