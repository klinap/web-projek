<?php 
include 'koneksi.php'
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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css">
</head>

<body>
    <link rel="stylesheet" href="path/to/bootstrap.min.css">
    <!-- Ganti path/to/ dengan lokasi file bootstrap.min.css -->
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
    <center>
        <h1>Data Pemesanan Tiket konser</h1>
    </center>
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
    <script>
        window.onload = function () {
            window.print(); // Mencetak dokumen saat halaman dimuat
        };
    </script>

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