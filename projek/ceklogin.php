
<?php
session_start();
include 'koneksi.php';

$username = $_POST['username'];
$password = $_POST['password'];

$data = mysqli_query($koneksi,"SELECT * FROM tblogin WHERE username = '$username' AND password ='$password'");

$result = mysqli_num_rows($data);

if ($result > 0){
    header ("Location: konser.php");
}
else{
    header ("Location:login.php?pesan=gagal");
}

?>