<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pencetakan Tiket Konser</title>
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

        .mx-auto {
            width: 1000px
        }

        .card {
            margin-top: 10px
        }
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
    <div class="mx-auto">
        <!--kita berikan class yaitu max auto dia akan membuat sebuah div-->
        <!--untuk memasukan data-->
        <div class="card">
        </div>
        <div class="card-body">
            <div class="card">
                <div class="card-header text-white bg-black">
                </div>
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                            </tr>
                            <!-- </thead>
                  <tbody> -->
                            <?php
                        $koneksi = mysqli_connect('localhost', 'root', '', 'dbtiketkonser');
                        if (!$koneksi) {
                        die("Koneksi Gagal").mysqli_connect_error();
                          }
                        $sql = "SELECT * FROM tb_pemesanan order by id asc";
                        $result = mysqli_query($koneksi, $sql);
                      ?>
                            <!DOCTYPE html>
                            <html lang="en">

                            <head>
                                <meta charset="UTF-8">
                                <meta http-equiv="X-UA-Compatible" content="IE=edge">
                                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                                <title>Cetak Transaksi</title>
                            </head>

                            <body>
                                <h1>Transaksi Tiket Konser "EUPHORIA CONCERT"</h1>
                                <table>
                                    <thead>
                                        <?php while ($row = mysqli_fetch_assoc($result)): ?>
                                        <?php
              $nama = $row['nama'];
              $tgl_pemesanan = $row['tgl_pemesanan'];
              $jenistkt = $row['jenis_tiket'];
              $hargatkt = $row['harga_tiket'];
              $simpanharga = intval($hargatkt);
              $jumlah_tiket = $row['jumlah_tiket'];
              $jam_perform = $row['jam_perform'];
              $hari_perform = $row['hari_perform'];
              $total= $simpanharga*$jumlah_tiket;
              
              
              
            ?>
                                        <?php endwhile; ?>
                                        <table>
                                            <tr>
                                                <th>Nama</th>
                                                <td>:</td>
                                                <td><?php echo $nama; ?></td>
                                            </tr>
                                            <tr>
                                                <th>Tanggal Pemesanan</th>
                                                <td>:</td>
                                                <td><?php echo $tgl_pemesanan; ?></td>
                                            </tr>
                                            <tr>
                                                <th>Jenis Tiket</th>
                                                <td>:</td>
                                                <td><?php echo $jenistkt; ?></td>
                                            </tr>
                                            <tr>
                                                <th>Harga Tiket</th>
                                                <td>:</td>
                                                <td><?php echo $hargatkt ?></td>
                                            </tr>
                                            <tr>
                                                <th>Jumlah Tiket</th>
                                                <td>:</td>
                                                <td><?php echo $jumlah_tiket; ?></td>
                                            </tr>
                                            <tr>
                                                <th>Jam Perform</th>
                                                <td>:</td>
                                                <td><?php echo $jam_perform; ?></td>
                                            </tr>
                                            <tr>
                                                <th>Hari Perform</th>
                                                <td>:</td>
                                                <td><?php echo $hari_perform; ?></td>
                                            </tr>
                                        
                                            <tr>
                                                <th>Total Harga</th>
                                                <td>:</td>
                                                <td><?php echo "Rp ".$total; ?></td>
                                            </tr>
                                        </table>
                                        <br>
                                    </thead>
                                    <tbody>
                                    </tbody>
                                </table>
                            </body>

                            </html>

                            </tbody>
                    </table>
                    <a href="cetak2.php?op=edit&id=<?php echo $id?>"><button type="button"
                            class="btn btn-secondary">Cetak</button></a>
                </div>
            </div>
        </div>
    </div>
    </h2>
    <p></p>

</body>

</html>