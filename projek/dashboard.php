<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard</title>
  <!-- Bootstrap -->
  <link rel="stylesheet" href="css/bootstrap.css">
  <!-- CSS
  <link rel="stylesheet" href="css/style.css"> -->
</head>

<body>
  <!-- Halaman Dashboard -->
  <nav class="navbar navbar-expand-lg bg-body-tertiary sticky-top" data-bs-theme="dark">
  <div class="container-fluid d-flex">
    <a class="navbar-brand" href="#">Dashboard</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#lineup">Line Up</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Jadwal</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Media Partner</a>
        </li>
        <button type="button " class="btn btn-danger">Log out</button>
      </ul>
    </div>
  </div>
</nav>
    
  <!-- Gambar Slide -->
<div id="carouselExampleIndicators" class="carousel slide">
  <div class="carousel-indicators d-flex">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img/hi1.png" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="img/vir1.png" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="img/yura1.png" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

<br><br>
<!-- Deskripsi Line Up -->
<center><h1>Line Up</h1>
        <h3>Artis yang sangat kalian tunggu tunggu pada konser kali ini</h3></center>
<div class="container">
    <div class="row" id="lineup">
      <div class="col-12 my-5 justify-content-center">
        <h1 class="about fw-bold">
        </h1>
      </div>
      <div class="col-4">
        <h4 class="fw-bold text-black">VIERRA</h4>
        <img src="img/vir2.png" alt="profile" width="120px" class="rounded-circle img-profile">
        <p>Vierratale merupakan sebuah grup musik pop rock asal Jakarta, Indonesia yang dibentuk pada tanggal 3 November 2008. Band ini beranggotakan 3 orang yaitu Kevin Aprilio, Widy Soediro Nichlany, dan Raka Cyril Damar. Genre musik Vierra dapat dikategorikan sebagai powerpop dan pop rock.</p>
      </div>
      <div class="col-4">
        <h4 class="fw-bold text-black">YURA YUNITA</h4>
        <img src="img/yura2.png" alt="profile" width="120px" class="rounded-circle img-profile">
        <p>Yunita Rachman atau yang lebih dikenal dengan Yura Yunita adalah seorang penyanyi-penulis lagu Indonesia berdarah Sunda.</p>
      </div>
      <div class="col-4">
          <h4 class="fw-bold text-black">HIVI!</h4>
          <img src="img/hi2.png" alt="profile" width="120px" class="rounded-circle img-profile">
          <p>HIVI! merupakan sebuah grup musik pop Indonesia yang dibentuk di Jakarta pada tahun 2009. Grup musik ini beranggotakan Neida Aleida, Ilham Aditama, Febrian Nindyo Purbowiseso dan Ezra Mandira. Grup musik ini bergenre pop.</p>
        </div>
      </div>
    </div>


<div style="height: 900px;" ></div>

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
