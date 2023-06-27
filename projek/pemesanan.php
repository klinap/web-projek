<!DOCTYPE html> <!--pertama tulis tanda seru lalu enter, maka akan keluar tag html-->
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css">\
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  



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

    if($nama && $tgl_pemesanan && $jenis_tiket && $harga_tiket && $jumlah_tiket && $total_harga && $jam_perform && $hari_perform){
        if($op == 'edit'){ //untuk update
            $sql1 = "update tb_pemesanan set nama = '$nama',tgl_pemesanan='$tgl_pemesanan',jenis_tiket='$jenis_tiket',harga_tiket='$harga_tiket',jumlah_tiket='$jumlah_tiket',total_harga='$total_harga',jam_perform='$jam_perform',hari_perform='$hari_perform'";
            $q1 = mysqli_query($koneksi,$sql1);
            if($q1){
                $sukses = "Data berhasil diupdate";
            }else{
                $error = "Data gagal diupdate";
            }
        }else{ //untuk insert
        $sql1 = "insert into tb_pemesanan (nama,tgl_pemesanan,jenis_tiket,harga_tiket,jumlah_tiket,total_harga,jam_perform,hari_perform) values('$nama','$tgl_pemesanan','$jenis_tiket','$harga_tiket','$jumlah_tiket','$total_harga','$jam_perform','$hari_perform')";
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
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pemesanan Tiket Konser</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <style>
        .mx-auto { width:1000px }
        .card {margin-top: 10px}
    </style>
</head>

<body>
    <br><br><br><br>
    <div class="mx-auto"> <!--kita berikan class yaitu max auto dia akan membuat sebuah div-->
    <!--untuk memasukan data-->
    <div class="card">
  <div class="card-header">
    Lakukan Pemesanan Tiket Konser Disini
  </div>
  <div class="card-body">
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
    <form action="" method="POST">
    <div class="mb-3 row">
    <label for="nama" class="col-sm-2 col-form-label">Nama</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="nama" name="nama"value="<?php echo $nama ?>">
    </div>
  </div>
  <div class="mb-3 row">
    <label for="tgl_pemesanan" class="col-sm-2 col-form-label">Tanggal Pemesanan</label>
    <div class="col-sm-10">
      <input type="date" class="form-control" id="tgl_pemesanan" name="tgl_pemesanan"value="<?php echo $tgl_pemesanan ?>">
    </div>
  </div>
  <div class="mb-3 row">
    <label for="jenis_tiket" class="col-sm-2 col-form-label">Jenis Tiket</label>
    <div class="col-sm-10">
      <select class="form-control" name="jenis_tiket" id="jenis_tiket">
          <option value="">- Pilih Jenis Tiket -</option>
          <option value="VIP" <?php if($jenis_tiket == "VIP") echo "selected" ?>>VIP</option>
          <option value="Festival A" <?php if($jenis_tiket == "Festival A") echo "selected" ?>>Festival A</option>
          <option value="Festival B" <?php if($jenis_tiket == "Festival B") echo "selected" ?>>Festival B</option>
      </select>
    </div>
  </div>
  <div class="mb-3 row">
    <label for="jumlah_tiket" class="col-sm-2 col-form-label">Jumlah Tiket</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="jumlah_tiket" name="jumlah_tiket"value="<?php echo $jumlah_tiket ?>">
    </div>
    </div>
  <div class="mb-3 row">
    <label for="jam_perform" class="col-sm-2 col-form-label">Jam Perform</label>
    <div class="col-sm-10">
      <select class="form-control" name="jam_perform" id="jam_perform">
          <option value="">- Pilih Jam Perform -</option>
          <option value="17:00 WIB" <?php if($jenis_tiket == "17:00 WIB") echo "selected" ?>>17:00 WIB</option>
          <option value="20:00 WIB" <?php if($jenis_tiket == "20:00 WIB") echo "selected" ?>>20:00 WIB</option>
          <option value="22:00 WIB" <?php if($jenis_tiket == "22:00 WIB") echo "selected" ?>>22:00 WIB</option>
      </select>
    </div>
    </div>
  <div class="mb-3 row">
    <label for="hari_perform" class="col-sm-2 col-form-label">Hari Perform</label>
    <div class="col-sm-10">
      <select class="form-control" name="hari_perform" id="hari_perform">
          <option value="">- Pilih Hari Perform -</option>
          <option value="Jumat-Vierra" <?php if($jenis_tiket == "Jumat-Vierra") echo "selected" ?>>Jumat-Vierra</option>
          <option value="Sabtu-Yura Yunita" <?php if($jenis_tiket == "Sabtu-Yura Yunita") echo "selected" ?>>Sabtu-Yura Yunita</option>
          <option value="Minggu-Hivi!" <?php if($jenis_tiket == "Minggu-Hivi!") echo "selected" ?>>Minggu-Hivi!</option>
      </select>
    </div>
    
  </div>
  <div class="col-12">
      <input type="submit" name="simpan" value="Simpan Data" class="btn btn-primary"/>
  </div>
  <a href="transaksi.php">Transaksi</a>
  <!-- <a href="pemesanan.php?op=edit&id=<?php echo $id?>"><button type="button" class="btn btn-secondary">Transaksi</button></a> -->
</form>
  </div>
</div>

<!-- untuk mengeluarkan data -->
<div class="card">
  <div class="card-header text-white bg-black">
    Lihat Data Anda Disini
  </div>
  <div class="card-body">
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
                        <a href="pemesanan.php?op=edit&id=<?php echo $id?>"><button type="button" class="btn btn-secondary">Edit</button></a>
                        <span>
                        <a href="pemesanan.php?op=delete&id=<?php echo $id?>" onclick="return confirm('Yakin mau hapus data?')"><button type="button" class="btn btn-danger">Delete</button></a>
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
</body>
</html>
                        
                    