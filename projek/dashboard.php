<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Informasi Line Up</title>
  <!-- Bootstrap -->
  <link rel="stylesheet" href="css/bootstrap.css">
  <!-- CSS -->
  <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary sticky-top bg-dark">
        <div class="container navbar-custom">
        <a class="navbar-brand text-white" href="#">KONSER</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto">
              <li class="nav-item">
                  <a class="nav-link text-white" href="#">Home</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link text-white" href="#jadwal">Jadwal</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link text-white" href="#mediapartner">Media Partner</a>
              </li>
            </ul>
        </div>
        </div>
    </nav>  
    
  <!-- Gambar Slide -->
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2" class="active"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="img/yura1.png" alt="First slide">
    </div>
    <div class="carousel-item active">
      <img class="d-block w-100" src="img/hi1.png" alt="Second slide">
    </div>
    <div class="carousel-item active">
      <img class="d-block w-100" src="img/vir1.png" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<br><br>
<!-- Deskripsi Line Up -->
<center><h1>Line Up</h1></center>
<center><h3>Artis yang sangat kalian tunggu tunggu pada konser kali ini</h3></center>
<div class="container">
    <div class="row">
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
  <link rel="stylesheet"
href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2"
crossorigin="anonymous">
</body>
</html>
