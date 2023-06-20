<?php
    $server     = 'localhost';
    $user       = 'root';
    $password   = '';
    $database   = 'dbtiketkonser';

    $db         = mysqli_connect($server, $user, $password, $database );

    if ($db) {
        echo "Berhasil Terhubung dengan Database";
    } else {
       die('Gagal Terhubung dengan Database!<br>'. mysqli_connect_error());
    }
    
?>