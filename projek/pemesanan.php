<!DOCTYPE html> <!--pertama tulis tanda seru lalu enter, maka akan keluar tag html-->
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

<?php //pertama kita membuat untuk melakukan koneksinya
$host = "localhost";
$user = "root";
$pass = ""; //karena kita menggunakan xampp biasanya pass kosong
$db   = "dbpesan";

$koneksi = mysqli_connect($host, $user, $pass, $db); //untuk koneksi kita menggunakan fungsi dari mysql. lalu kita masukan parameter untuk melakukan koneksi ke database
if(!$koneksi){ //cek koneksi
    die("Gagal Koneksi");
}
$nama           ="";
$tanggal_lahir  ="";
$jenis_tiket    ="";
$harga_tiket    ="";
$jumlah_tiket   ="";
$total_harga    ="";
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
    $tanggal_lahir  = $r1['tanggal_lahir'];
    $jenis_tiket    = $r1['jenis_tiket'];
    $harga_tiket    = $r1['harga_tiket'];
    $jumlah_tiket   = $r1['jumlah_tiket'];
    $total_harga    = $r1['total_harga'];
    $jam_perform    = $r1['jam_perform'];
    $hari_perform    = $r1['hari_perform'];

    if($nama == ''){
        $error = "Data tidak ditemukan";
    }


}

if(isset($_POST['simpan'])){ //untuk create
    $nama           = $_POST['nama'];
    $tanggal_lahir  = $_POST['tanggal_lahir'];
    $jenis_tiket    = $_POST['jenis_tiket'];
    $harga_tiket    = $_POST['harga_tiket'];
    $jumlah_tiket   = $_POST['jumlah_tiket'];
    $total_harga    = $_POST['total_harga'];
    $jam_perform    = $_POST['jam_perform'];
    $jam_perform    = $_POST['jam_perform'];
    $hari_perform   = $_POST['hari_perform'];

    if($nama && $tanggal_lahir && $jenis_tiket && $harga_tiket && $jumlah_tiket && $total_harga && $jam_perform && $hari_perform){
        if($op == 'edit'){ //untuk update
            $sql1 = "update tb_pemesanan set nama = '$nama',tanggal_lahir='$tanggal_lahir',jenis_tiket='$jenis_tiket',harga_tiket='$harga_tiket',jumlah_tiket='$jumlah_tiket',total_harga='$total_harga',jam_perform='$jam_perform',hari_perform='$hari_perform'";
            $q1 = mysqli_query($koneksi,$sql1);
            if($q1){
                $sukses = "Data berhasil diupdate";
            }else{
                $error = "Data gagal diupdate";
            }
        }else{ //untuk insert
        $sql1 = "insert into tb_pemesanan (nama,tanggal_lahir,jenis_tiket,harga_tiket,jumlah_tiket,total_harga,jam_perform,hari_perform) values('$nama','$tanggal_lahir','$jenis_tiket','$harga_tiket','$jumlah_tiket','$total_harga','$jam_perform','$hari_perform')";
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
    <label for="tanggal_lahir" class="col-sm-2 col-form-label">Tanggal Lahir</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="tanggal_lahir" name="tanggal_lahir"value="<?php echo $tanggal_lahir ?>">
    </div>
  </div>
  <div class="mb-3 row">
    <label for="jenis_tiket" class="col-sm-2 col-form-label">Jenis Tiket</label>
    <div class="col-sm-10">
      <select class="form-control" name="jenis_tiket" id="jenis_tiket">
          <option value="">- Pilih Jenis Tiket -</option>
          <option value="diamond_tribune" <?php if($jenis_tiket == "diamond_tribune") echo "selected" ?>>Diamond Tribune</option>
          <option value="platinum_tribune" <?php if($jenis_tiket == "platinum_tribune") echo "selected" ?>>Platinum Tribune</option>
          <option value="gold_tribune" <?php if($jenis_tiket == "gold_tribune") echo "selected" ?>>Gold Tribune</option>
          <option value="silver_tribune" <?php if($jenis_tiket == "silver_tribune") echo "selected" ?>>Silver Tribune</option>
      </select>
    </div>
  </div>
  <div class="mb-3 row">
    <label for="harga_tiket" class="col-sm-2 col-form-label">Harga Tiket</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="harga_tiket" name="harga_tiket"value="<?php echo $harga_tiket ?>">
    </div>
  </div>
  <div class="mb-3 row">
    <label for="jumlah_tiket" class="col-sm-2 col-form-label">Jumlah Tiket</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="jumlah_tiket" name="jumlah_tiket"value="<?php echo $jumlah_tiket ?>">
    </div>
  </div>
  <div class="mb-3 row">
    <label for="total_harga" class="col-sm-2 col-form-label">Total Harga</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="total_harga" name="total_harga"value="<?php echo $total_harga ?>">
    </div>
    </div>
  <div class="mb-3 row">
    <label for="jam_perform" class="col-sm-2 col-form-label">Jam Perform</label>
    <div class="col-sm-10">
      <select class="form-control" name="jam_perform" id="jam_perform">
          <option value="">- Pilih Jenis Tiket -</option>
          <option value="jam_17" <?php if($jenis_tiket == "jam_17") echo "selected" ?>>Jam 17.00</option>
          <option value="jam_20" <?php if($jenis_tiket == "jam_20") echo "selected" ?>>Jam 20.00</option>
          <option value="jam_22" <?php if($jenis_tiket == "jam_22") echo "selected" ?>>Jam 22.00</option>
      </select>
    </div>

    </div>
    <div class="mb-3 row">
    <label for="hari_perform" class="col-sm-2 col-form-label">Hari Perform</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="hari_perform" name="hari_perform"value="<?php echo $hari_perform ?>">
    </div>
  </div>
  <div class="col-12">
      <input type="submit" name="simpan" value="Simpan Data" class="btn btn-primary"/>
  </div>
    </form>
  </div>
</div>

<!--untuk mengeluarkan data-->
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
                <th scope="col">Harga Tiket</th>
                <th scope="col">Jumlah Tiket</th>
                <th scope="col">Total Harga</th>
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
                    $tanggal_lahir  = $r2['tanggal_lahir'];
                    $jenis_tiket    = $r2['jenis_tiket'];
                    $harga_tiket    = $r2['harga_tiket'];
                    $jumlah_tiket   = $r2['jumlah_tiket'];
                    $total_harga    = $r2['total_harga'];
                    $jam_perform    = $r2['jam_perform'];
                    $hari_perform   = $r2['hari_perform'];

                    ?>
                    <tr>
                        <th scope="row"><?php echo $urut++ ?></th>
                        <td scope="row"><?php echo $nama ?></td>
                        <td scope="row"><?php echo $tanggal_lahir ?></td>
                        <td scope="row"><?php echo $jenis_tiket ?></td>
                        <td scope="row"><?php echo $harga_tiket ?></td>
                        <td scope="row"><?php echo $jumlah_tiket ?></td>
                        <td scope="row"><?php echo $total_harga ?></td>
                        <td scope="row"><?php echo $jam_perform ?></td>
                        <td scope="row"><?php echo $hari_perform ?></td>
                        <td scope="row">
                        <a href="pemesanan.php?op=edit&id=<?php echo $id?>"><button type="button" class="btn btn-secondary">Edit</button></a>
                            <a href="pemesanan.php?op=delete&id=<?php echo $id?>" onclick="return confirm('Yakin mau hapus data?')"><button type="button" class="btn btn-danger">Delete</button></a>
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