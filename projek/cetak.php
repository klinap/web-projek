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
    <!--untuk memasukan data-->
    <div class="card">
  <div class="card-header">
  <div class="card-header text-white bg-black">
  </div>
  <div class="card-body">
  <?php 
	include 'koneksi.php';
?>
<html>
<head>
  <title>Data Pemesan Tiket</title>
  <style>
    @media print {
      /* Styling untuk mode cetak */
      body {
        padding: 20px;
        font-size: 14px;
      }
      
      h1 {
        color: #333;
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
        margin-top:0mm;
    }

    }
  </style>
</head>
<body>
<link rel="stylesheet" href="path/to/bootstrap.min.css"> <!-- Ganti path/to/ dengan lokasi file bootstrap.min.css -->
  <style>
    /* Tambahkan gaya khusus untuk mode cetak */
    @media print {
      /* Styling untuk mode cetak */
      body {
        padding: 20px;
        font-size: 14px;
      }
      
      h1 {
        color: #333;
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

      /* Bootstrap classes */
      .table {
        width: 100%;
        margin-bottom: 1rem;
        color: #212529;
      }

      .table-bordered {
        border: 1px solid #dee2e6;
      }

      .table-bordered th,
      .table-bordered td {
        border: 1px solid #dee2e6;
        padding: .75rem;
        vertical-align: top;
      }

      .table-bordered thead th,
      .table-bordered thead td {
        border-bottom-width: 2px;
      }
    }
  </style>
</head>
<body>
  
  <center><h1>Data Pemesanan Tiket konser</h1></center>

  <table border="1" style="width: 100%;">
  <tr>
                <th scope="col">No</th>
                <th scope="col">Nama</th>
                <th scope="col">Tanggal Pemesanan</th>
                <th scope="col">jenis Tiket</th>
                <th scope="col">Jumlah Tiket</th>
                <th scope="col">Jam Perform</th>
                <th scope="col">Hari Perform</th>
            </tr>
    <?php 
    $no=1;
    $sql = mysqli_query($koneksi,"SELECT * FROM tb_pemesanan");
    while($data = mysqli_fetch_array($sql)){
    ?>
    <tr>
        <td><?php echo $no++; ?></td>
        <td><?php echo $data['nama']; ?></td>
        <td><?php echo $data['tgl_pemesanan']; ?></td>
        <td><?php echo $data['jenis_tiket']; ?></td>
        <td><?php echo $data['jumlah_tiket']; ?></td>
        <td><?php echo $data['jam_perform']; ?></td>
        <td><?php echo $data['hari_perform']; ?></td>
    </tr>

    </tr>

    </tr>
    <?php 
    }
    ?>
  </table>
  
  <!-- Tambahkan konten tambahan yang diinginkan -->
  
  <script>
    // (Opsional) Anda dapat menambahkan JavaScript untuk mengubah atau memanipulasi konten sebelum mencetak
    window.onload = function() {
      window.print(); // Mencetak dokumen saat halaman dimuat
    };
  </script>

            </tbody>
    </table>
  </div>
</div>
    </div>
</div></h2>
<p></p>

</body>
</html>

