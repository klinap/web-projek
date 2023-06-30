<!DOCTYPE html>
<html>
<head>
    <title>Jadwal Konser</title>
    <style>table {
            border-collapse: collapse;
            position: relative;
            margin-left: auto;
            margin-right: auto;
        }
        th, td {
            border: 1px solid black;
            padding: 8px;
        }
    </style>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard</title>
  <!-- Bootstrap -->
  <link rel="stylesheet" href="css/bootstrap.css">
  <!-- CSS-->
  <link rel="stylesheet" href="css/style.css"> 
  <!-- Font Awesome -->
  <link rel="stylesheet" href="fontawesome/css/all.css">
  <link rel="stylesheet" href="css/style.css">
  <!-- AOS -->
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>
<body>
<nav class="navbar navbar-expand-lg bg-body-tertiary sticky-top" data-bs-theme="dark">
  <div class="container-fluid d-flex">
    <a class="navbar-brand" href="#">Dashboard</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
      <ul class="navbar-nav ">
        <li class="nav-item">
          <a class="nav-link" href="dashboard.php#lineup">Line Up</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="dashboard.php#venue">Venue</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="jadwal.php">Jadwal</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="dashboard.php#mediapartner">Media Partner</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="pemesanan.php">Pemesanan</a>
        </li>
        <li class="nav-item">
        <button type="button" class="nav-link btn btn-danger" onclick="logout()"><a href="login.php">Logout</a></button>
        </li>
      </ul>
    </div>
  </div>
</nav>
<!-- Jadwal -->
<center><div class="p-3 mb-2 bg-secondary text-white" id="jadwal"><h1>JADWAL KONSER</h1></div></center>
    <table>
        <thead>
            <tr>
                <th>No.</th>
                <th>Artis</th>
                <th>Tanggal Perform</th>
                <th>Jam Perform</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td rowspan="3">1</td>
                <td rowspan="3">Vierra</td>
                <td rowspan="3">01/12/2023</td>
                <td>17.00 WIB</td>
            </tr>
            <tr>
                <td>20.00 WIB</td>
            </tr>
            <tr>
                <td>22.00 WIB</td>
            </tr>
            <tr>
                <td rowspan="3">2</td>
                <td rowspan="3">Hivi!</td>
                <td rowspan="3">02/12/2023</td>
                <td>17.00 WIB</td>
            </tr>
            <tr>
                <td>20.00 WIB</td>
            </tr>
            <tr>
                <td>22.00 WIB</td>
            </tr>
            <tr>
                <td rowspan="3">3</td>
                <td rowspan="3">Yura Yunita</td>
                <td rowspan="3">03/12/2023</td>
                <td>17.00 WIB</td>
            </tr>
            <tr>
                <td>20.00 WIB</td>
            </tr>
            <tr>
                <td>22.00 WIB</td>
            </tr>
        </tbody>
    </table>
    <br>
    <h2>Untuk Pemesanan Tiket Silahkan ke Menu Pemesanan Tiket atau klik link <a href="pemesanan.php">pesan tiket</a></h2>

     <!-- Javascript Bootstrap -->
  <script src="js/bootstrap.bundle.js"></script>
  <!-- AOS -->
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>
