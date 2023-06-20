<?php 

session_start();
session_destroy();
echo "<script>alert('Anda Anda Berhasil Logout');document.location='login.php'</script>";

?>