<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
<style>
        .mx-auto { width:1000px }
        .card {margin-top: 10px}
    </style>
</head>
<?php //pertama kita membuat untuk melakukan koneksinya
$host = "localhost";
$user = "root";
$pass = ""; //karena kita menggunakan xampp biasanya pass kosong
$db   = "dbtiketkonser";

$koneksi=mysqli_connect('localhost','root','','dbtiketkonser');
if(!$koneksi)
{
        die("Koneksi Gagal").mysqli_connect_error();
}
$nama           ="";
$tgl_pemesanan  ="";
$jenis_tiket    ="";
$jumlah_tiket   ="";
$jam_perform    ="";
$hari_perform   ="";
$sukses         ="";
$error          ="";

if(isset($_GET['op'])){
    $op = $_GET['op'];
}else{
    $op = "";
}
if($op == 'delete'){
    $id = $_GET['id'];
    $sql1 = "delete from tb_pemesanan where id = '$id'";
    $q1 = mysqli_query($koneksi,$sql1);
    if($q1){
        $sukses = "Berhasil menghapus data";
    }else{
        $error = "Gagal menghapus data";
    }

}

if($op == 'edit'){
    $id             = $_GET['id'];
    $sql1           = "select *from tb_pemesanan where id = '$id'";
    $q1             = mysqli_query($koneksi,$sql1);
    $r1             = mysqli_fetch_array($q1);
    $nama           = $r1['nama'];
    $tgl_pemesanan  = $r1['tgl_pemesanan'];
    $jenis_tiket    = $r1['jenis_tiket'];
    $jumlah_tiket   = $r1['jumlah_tiket'];
    $jam_perform    = $r1['jam_perform'];
    $hari_perform    = $r1['hari_perform'];

    if($nama == ''){
        $error = "Data tidak ditemukan";
    }
}

if(isset($_POST['simpan'])){ //untuk create
    $nama           = $_POST['nama'];
    $tgl_pemesanan  = $_POST['tgl_pemesanan'];
    $jenis_tiket    = $_POST['jenis_tiket'];
    $jumlah_tiket   = $_POST['jumlah_tiket'];
    $jam_perform    = $_POST['jam_perform'];
    $jam_perform    = $_POST['jam_perform'];
    $hari_perform   = $_POST['hari_perform'];

    if($nama && $tgl_pemesanan && $jenis_tiket && $jumlah_tiket && $jam_perform && $hari_perform){
        if($op == 'edit'){ //untuk update
            $sql1 = "update tb_pemesanan set nama = '$nama',tgl_pemesanan='$tgl_pemesanan',jenis_tiket='$jenis_tiket',jumlah_tiket='$jumlah_tiket',jam_perform='$jam_perform',hari_perform='$hari_perform'";
            $q1 = mysqli_query($koneksi,$sql1);
            if($q1){
                $sukses = "Data berhasil diupdate";
            }else{
                $error = "Data gagal diupdate";
            }
        }else{ //untuk insert
        $sql1 = "insert into tb_pemesanan (nama,tgl_pemesanan,jenis_tiket,jumlah_tiket,jam_perform,hari_perform) values('$nama','$tgl_pemesanan','$jenis_tiket','$jumlah_tiket','$jam_perform','$hari_perform')";
        $q1 = mysqli_query($koneksi,$sql1);
        if($q1){
            $sukses = "Berhasil memasukkan data baru";
        }else{
           
         $error = "Gagal memasukkan data";
        }
        }
    }else{
        $error="Silahkan input semua data";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pemesanan Tiket Konser</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <style>
      .container {
  width: 80vw; /* lebar 80% dari lebar viewport */
  height: 50vh; /* tinggi 50% dari tinggi viewport */
}

h1 {
  font-size: 3rem; /* ukuran font 3 kali dari ukuran font elemen root */
}

p {
  font-size: 1.2em; /* ukuran font 1.2 kali dari ukuran font elemen saat ini */
}

/* Gaya umum untuk semua ukuran layar */
.container {
  display: flex;
  flex-direction: row;
}

/* Gaya khusus untuk layar dengan lebar maksimal 600px */
@media screen and (max-width: 600px) {
  .container {
    flex-direction: column;
  }
}
        .mx-auto { width:1000px }
        .card {margin-top: 10px}
    </style>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css">
  <style>
    .mx-auto.container {
      width: 1000px;
    }
    .card {
      margin-top: 10px;
    }
  </style>
</head>
<body>
    <br><br><br><br>
    <div class="mx-auto"> <!--kita berikan class yaitu max auto dia akan membuat sebuah div-->
      <?php
        if($error){
            ?>
            <div class="alert alert-danger" role="alert">
  <?php echo $error ?>
</div>
        <?php
            header("refresh:5;url=pemesanan.php"); //5 detik
          }
        ?>
      <?php
        if($sukses){
            ?>
            <div class="alert alert-success" role="alert">
  <?php echo $sukses ?>
</div>
<?php
            header("refresh:5;url=pemesanan.php"); //5 detik
          }
        ?>

<!-- untuk mengeluarkan data -->
<div class="card">
  <div class="card-header text-white bg-black">
    Lihat Data Anda Disini
  </div>
  <div class="card-body">
  <a href="cetak.php" target="_blank"><button type="button" class="btn btn-secondary">Cetak</button></a>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Nama</th>
                <th scope="col">Tanggal Lahir</th>
                <th scope="col">jenis Tiket</th>
                <th scope="col">Jumlah Tiket</th>
                <th scope="col">Jam Perform</th>
                <th scope="col">Hari Perform</th>
                <th scope="col">Aksi</th>
            </tr>
    </thead>
            <tbody>
                <?php
                $sql2   = "select * from tb_pemesanan order by id desc";
                $q2     = mysqli_query($koneksi,$sql2);
                $urut   = 1;
                while($r2 = mysqli_fetch_array($q2)){
                    $id             = $r2['id'];
                    $nama           = $r2['nama'];
                    $tgl_pemesanan  = $r2['tgl_pemesanan'];
                    $jenis_tiket    = $r2['jenis_tiket'];
                    $jumlah_tiket   = $r2['jumlah_tiket'];
                    $jam_perform    = $r2['jam_perform'];
                    $hari_perform   = $r2['hari_perform'];

                    ?>
                    <tr>
                        <th scope="row"><?php echo $urut++ ?></th>
                        <td scope="row"><?php echo $nama ?></td>
                        <td scope="row"><?php echo $tgl_pemesanan ?></td>
                        <td scope="row"><?php echo $jenis_tiket ?></td>
                        <td scope="row"><?php echo $jumlah_tiket ?></td>
                        <td scope="row"><?php echo $jam_perform ?></td>
                        <td scope="row"><?php echo $hari_perform ?></td>
                        <td scope="row">
                        <a href="coba.php?op=edit&id=<?php echo $id?>"><button type="button" class="btn btn-secondary">Edit</button></a>
                        <span>
                        <a href="tampil.php?op=delete&id=<?php echo $id?>" onclick="return confirm('Yakin mau hapus data?')"><button type="button" class="btn btn-danger">Delete</button></a>
                        </span>
                      </td>
                    </tr>
                    <?php

                }
                ?>
            </tbody>
    </table>
  </div>
</div>
    </div>
</div></h2>
<p></p>

</body>
</html>

