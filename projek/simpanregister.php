<?php
include "koneksi.php"; //panggil nama file koneksi

//ambil data dari form
$namaLengkap=$_POST['namaLengkap'];
$username=$_POST['username'];
$password=$_POST['password'];

//insert data ke tbregister
$sql="insert into tbregister values('','$namaLengkap','$username','$password')";
$query=mysqli_query($konek,$sql);
if ($query)
{
    echo "Data sudah disimpan";
}
else
{
    echo "Data gagal disimpan";
}
?>