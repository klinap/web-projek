<?php 
      $host = "localhost";
      $user = "root";
      $pass = ""; 
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
            $hari_perform   = $r1['hari_perform'];

          if($nama == ''){
                $error = "Data tidak ditemukan";
            }
        }
          if(isset($_POST['simpan'])){ //untuk create
              $nama           = $_POST['nama'];
              $tgl_pemesanan  = $_POST['tgl_pemesanan'];
              $jenistkt    = $_POST['jenis_tiket'];
              $pecah = explode(",", $jenistkt);
              $jenis_tiket = trim($pecah['0']);
              $harga = trim($pecah['1']);
              $hargatkt = intval($harga);
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
                  $sql1 = "insert into tb_pemesanan (nama,tgl_pemesanan,jenis_tiket,harga_tiket,jumlah_tiket,jam_perform,hari_perform) values('$nama','$tgl_pemesanan','$jenis_tiket','$hargatkt','$jumlah_tiket','$jam_perform','$hari_perform')";
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

            if (isset($_POST['nama'])) {
                $nama = $_POST['nama'];
              } else {
                $nama = ""; // Atau berikan nilai default lainnya
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
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  <style>
    .container {
      width: 80vw;
      /* lebar 80% dari lebar viewport */
      height: 50vh;
      /* tinggi 50% dari tinggi viewport */
    }

    h1 {
      font-size: 3rem;
      /* ukuran font 3 kali dari ukuran font elemen root */
    }

    p {
      font-size: 1.2em;
      /* ukuran font 1.2 kali dari ukuran font elemen saat ini */
    }

    .container {
      display: flex;
      flex-direction: row;
    }

    /* Gaya khusus untuk layar dengan lebar maksimal 600px */
    @media screen and (max-width: 100px) {
      .container {
        flex-direction: column;
      }
    }

    .mx-auto {
      width: 80%;
    }

    .card {
      margin-top: 10px
    }
  </style>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css">
</head>

<body>
  <br><br><br><br>
  <div class="mx-auto">
    <!--kita berikan class yaitu max auto dia akan membuat sebuah div-->
    <!--untuk memasukan data-->
    <div class="card">
      <div class="card-header">
        Lakukan Pemesanan Tiket Konser Disini
      </div>
      <?php
                if($error){
              ?>
      <div class="alert alert-danger" role="alert">
        <?php echo $error ?>
      </div>
      <?php
                  header("refresh:50;url=coba.php"); //5 detik
                  }
                ?>
      <?php
                  if($sukses){
                ?>
      <div class="alert alert-success" role="alert">
        <?php echo $sukses ?>
      </div>
      <?php
                    header("refresh:50;url=coba.php"); //5 detik
                  }
                  ?>
      <div class="card-body">
        <form action="" method="POST">
          <div class="mb-3 row">
            <label for="nama" class="col-sm-2 col-form-label">Nama</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="nama" name="nama">
            </div>
          </div>
          <div class="mb-3 row">
            <label for="tgl_pemesanan" class="col-sm-2 col-form-label">Tanggal Pemesanan</label>
            <div class="col-sm-10">
              <input type="date" class="form-control" id="tgl_pemesanan" name="tgl_pemesanan">
            </div>
          </div>
          <div class="mb-3 row">
            <label for="jenis_tiket" class="col-sm-2 col-form-label">Jenis Tiket</label>
            <div class="col-sm-10">
              <select class="form-control" name="jenis_tiket" id="jenis_tiket">
                <option value="">- Pilih Jenis Tiket -</option>
                <option value="VIP, 500000">VIP</option>
                <option value="Reguler, 250000">Reguler</option>
                <option value="Standar, 100000">Standar</option>
              </select>
            </div>
          </div>
          <div class="mb-3 row">
            <label for="jumlah_tiket" class="col-sm-2 col-form-label">Jumlah Tiket</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="jumlah_tiket" name="jumlah_tiket">
            </div>
          </div>
          <div class="mb-3 row">
            <label for="jam_perform" class="col-sm-2 col-form-label">Jam Perform</label>
            <div class="col-sm-10">
              <select class="form-control" name="jam_perform" id="jam_perform">
                <option value="">- Pilih Jam Perform -</option>
                <option value="17:00 WIB">17:00 WIB</option>
                <option value="20:00 WIB">20:00 WIB</option>
                <option value="22:00 WIB">22:00 WIB</option>
              </select>
            </div>
          </div>
          <div class="mb-3 row">
            <label for="hari_perform" class="col-sm-2 col-form-label">Hari Perform</label>
            <div class="col-sm-10">
              <select class="form-control" name="hari_perform" id="hari_perform">
                <option value="">- Pilih Hari Perform -</option>
                <option value="Jumat-Vierra">Jumat-Vierra</option>
                <option value="Sabtu-Yura Yunita">Sabtu-Yura Yunita</option>
                <option value="Minggu-Hivi!">Minggu-Hivi!</option>
              </select>
            </div>
          </div>
          <div class="col-12">
            <input type="submit" name="simpan" value="simpan" class="btn btn-primary" />
            <div class="col-12 d-flex justify-content-end">
            <a href="tampil.php" target="_blank"><button type="button" class="btn btn-secondary">Lihat Data Anda</button></a>
          </div>
          <br />
          <a href="transaksi.php" class="btn btn-primary">Transaksi</a>
        </form>
      </div>
      </form>
    </div>
  </div>
  </tbody>
  </table>
  </div>
  </div>
  </div>
  </div>
  </h2>
  <p></p>
</body>
</html>
