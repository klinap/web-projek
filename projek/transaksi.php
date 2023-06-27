<?php
//perhitungan transaksi tiket konser
$nama=$_POST['nama'];
$tgl_pemesanan['tgl_pemesanan'];
$jenis_tiket=$_POST['jenis_tiket'];
$jumlah_tiket=$_POST['jumlah_tiket'];
$jam_perform=$_POST['jam_perform'];
$hari_perform+$_['hari_perform'];

if ($jenis_tiket=="VIP") {
    $harga_tiket=1300000;
    $total_harga=($harga_tiket*$jumlah_tiket);
} else if ($jenis_tiket=="Festival A") {
    $harga_tiket=500000;
    $total_harga=($harga_tiket*$jumlah_tiket);
} else{
    $harga_tiket=350000;
    $total_harga=($harga_tiket*$jumlah_tiket);
}

//menampilkan data transaksi dan pencetakan
echo "<center></b></center>";
                echo "<hr/>";
                echo "<table>
                <tr>
                <td>Nama</td>
                <td>:</td>
                <td>$nama<td>
                </tr>
                <tr>
                <td>Tanggal Pemesanan</td>
                <td>:</td>
                <td>$tgl_pemesanan<td>
                </tr>
                <tr>
                <td>Jenis Tiket</td>
                <td>:</td>
                <td>$jenis_tiket<td>
                </tr>
                <tr>
                <td>Jam Perform</td>
                <td>:</td>
                <td>$jam_perform<td>
                </tr>
                <tr>
                <td><b>Hari Perform</b></td>
                <td><b>:</b></td>
                <td><b>$hari_perform</b><td>
                </tr>
                <tr>
                <td><b>Total Trransaksi Anda </b></td>
                <td><b>:</b></td>
                <td><b>Rp.$total_harga</b><td>
                </tr>
                </table>"

?>