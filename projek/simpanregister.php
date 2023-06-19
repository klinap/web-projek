<?php
include "koneksi.php"; //panggil nama file koneksi

//ambil data dari form
$namaLengkap=$_POST['namaLengkap'];
$username=$_POST['username'];
$Password=$_POST['Password'];

//insert data ke tbregister
$sql="insert into tbregister values('','$namaLengakap','$username','$Password')";
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