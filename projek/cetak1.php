<?php 
	include 'koneksi.php';
?>
<html>

<head>
  <title>Cetak Tiket</title>
  <style>
    @media print {

      /* Styling untuk mode cetak */
      body {
        padding: 20px;
        font-size: 14px;
      }

      th {
        color: #00000;
        font-size: 24px;
        margin-bottom: 20px;
      }

      p {
        color: #666;
        margin-bottom: 10px;
      }

      @page {
        size: auto;
        margin: 0mm;
      }

      @page :first {
        margin-top: 0mm;
      }

    }
  </style>
</head>

<body>
  <center>
    <h1>EUPHORIA CONCERT</h1>
  </center>

  <table border="1" style="width: 100%;">
    <tr>
      <th scope="col">No</th>
      <th scope="col">Nama</th>
      <th scope="col">Tanggal Pemesanan</th>
      <th scope="col">Jenis Tiket</th>
      <th scope="col">Harga Tiket</th>
      <th scope="col">Jumlah Tiket</th>
      <th scope="col">Jam Perform</th>
      <th scope="col">Hari Perform</th>
      <th scope="col">Total Harga</th>
    </tr>
    <?php 
    $no=1;
    $sql = mysqli_query($koneksi,"SELECT * FROM tb_pemesanan order by id desc limit 1");  
    while($data = mysqli_fetch_array($sql)){
    ?>
    <tr>
      <td><?php echo $no++; ?></td>
      <td><?php echo $data['nama']; ?></td>
      <td><?php echo $data['tgl_pemesanan']; ?></td>
      <td><?php echo $data['jenis_tiket']; ?></td>
      <td><?php echo $data['harga_tiket']; ?></td>
      <td><?php echo $data['jumlah_tiket']; ?></td>
      <td><?php echo $data['hari_perform']; ?></td>
      <td><?php echo $data['jam_perform']; ?></td>
      <td><?php echo $data['harga_tiket']* $data['jumlah_tiket'];?></td>
    </tr>
    <?php 
    }
    ?>
  </table>

  <!-- Tambahkan konten tambahan yang diinginkan -->

  <script>
    // (Opsional) Anda dapat menambahkan JavaScript untuk mengubah atau memanipulasi konten sebelum mencetak
    window.onload = function () {
      window.print(); // Mencetak dokumen saat halaman dimuat
    };
  </script>
</body>

</html>