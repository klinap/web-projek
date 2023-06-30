<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Euphoria Concert</title>
  <!-- Bootstrap -->
  <link rel="stylesheet" href="css/bootstrap.css">
  <!-- CSS-->
  <link rel="stylesheet" href="css/style.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="fontawesome/css/all.css">
  <link rel="stylesheet" href="css/style.css">
  <!-- AOS -->
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <style>
    .kolom{
    margin-top: 50px;
    margin-bottom: 50px;
    }

    .kolom .deskripsi{
    font-size: 20px;
    font-weight: bold;
    font-family: 'comic sans ms';
    color: black;
    }
    section{
    margin: auto;
    display: flex;
    margin-bottom: 50px;
    }
  </style>
  <link rel='shorcut icon' href="img/logo.png">
</head>

<body>
  <!-- Halaman Dashboard -->
  <nav class="navbar navbar-expand-lg bg-body-tertiary sticky-top" data-bs-theme="dark">
    <div class="container-fluid d-flex">
      <a class="navbar-brand" href="#">Euphoria Concert</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
        <ul class="navbar-nav ">
          <li class="nav-item">
            <a class="nav-link" href="#lineup">Line Up</a>
          </li>
          <li class="nav-item">
          <a class="nav-link" href="dashboard.php#venue">Venue</a>
        </li>
          <li class="nav-item">
            <a class="nav-link" href="jadwal.php">Jadwal</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#mediapartner">Media Partner</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="pemesanan.php">Pemesanan</a>
          </li>
          <li class="nav-item">
            <button type="button" class="nav-link btn btn-danger" onclick="logout()"><a
                href="login.php">Logout</a></button>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Gambar Slide -->
  <div id="carouselExampleIndicators" class="carousel slide">
    <div class="carousel-indicators d-flex">
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
        aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
        aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
        aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="img/hi1.png" class="d-block w-75 mx-auto" alt="...">
      </div>
      <div class="carousel-item">
        <img src="img/vir1.png" class="d-block w-75 mx-auto" alt="...">
      </div>
      <div class="carousel-item">
        <img src="img/yura1.png" class="d-block w-75 mx-auto" alt="...">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
      data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
      data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>

  <br>
  <!-- Deskripsi Line Up -->
  <center>
    <div class="p-3 mb-2 bg-secondary text-white"><h2>Line Up</h2></div>
    <h3>Artis yang sangat kalian nantikan pada konser kali ini</h3>
  </center>
  <div class="container">
    <div class="row" id="lineup">
      <div class="col-12 my-5 justify-content-center"></div>
      <div class="col-4">
        <h4 class="fw-bold text-black text-center">VIERRA</h4>
        <img src="img/vir2.png" alt="profile" width="100%" class="rounded-circle img-profile">
        <p>Vierratale merupakan sebuah grup musik pop rock asal Jakarta, Indonesia yang dibentuk pada tanggal 3 November
          2008. Band ini beranggotakan 3 orang yaitu Kevin Aprilio, Widy Soediro Nichlany, dan Raka Cyril Damar. Genre
          musik Vierra dapat dikategorikan sebagai powerpop dan pop rock.</p>
      </div>
      <div class="col-4">
        <h4 class="fw-bold text-black text-center">YURA YUNITA</h4>
        <img src="img/yura2.png" alt="profile" width="100%" class="rounded-circle img-profile">
        <p>Yunita Rachman atau yang lebih dikenal dengan Yura Yunita adalah seorang penyanyi-penulis lagu Indonesia
          berdarah Sunda.</p>
      </div>
      <div class="col-4">
        <h4 class="fw-bold text-black text-center">HIVI!</h4>
        <img src="img/hi2.png" alt="profile" width="100%" class="rounded-circle img-profile">
        <p>HIVI! merupakan sebuah grup musik pop Indonesia yang dibentuk di Jakarta pada tahun 2009. Grup musik ini
          beranggotakan Neida Aleida, Ilham Aditama, Febrian Nindyo Purbowiseso dan Ezra Mandira. Grup musik ini
          bergenre pop.</p>
      </div>
    </div>
  </div>

  <!-- Recap 2022 -->
  <center>
    <h2>RECAP 2022</h2>
  </center>
<div class="container-fluid">
    <div class="row">
        <div class="card-group">
            <div class="card">
                <img src="img/241.jpeg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">FOURTWNTY</h5>
                    <p class="card-text">Fourtwnty adalah grup musik indie asal Indonesia yang beranggotakan Ari Lesmana, Nuwi, Roots, Andi Armant, Prandha Ridho, dan Ryan Maulana. Grup musik ini turut dibentuk oleh Roby Satria yang juga merupakan personel Geisha.</p>
                </div>
                <div class="card-footer">
                    <small class="text-muted">Pembaruan terkahir 3 menit lalu </small>
                </div>
            </div>
            <div class="card">
                <img src="img/h1.jpeg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">HINDIA</h5>
                    <p class="card-text">Daniel Baskara Putra adalah penyanyi dan penulis lagu asal Indonesia. Ia adalah vokalis grup musik .Feast namun juga merilis musik solo dengan moniker Hindia.</p>
                </div>
                <div class="card-footer">
                    <small class="text-muted">Pembaruan terakhir 3 menit lalu</small>
                </div>
            </div>
            <div class="card">
                <img src="img/s1.jpeg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">SHEILA ON 7</h5>
                    <p class="card-text">Sheila on 7 adalah grup musik pop rock Indonesia asal Yogyakarta. Didirikan oleh sekelompok pelajar SMA pada 6 Mei 1996, grup musik ini sekarang beranggotakan Akhdiyat Duta Modjo, Eross Candra dan Adam Muhammad Subarkah.</p>
                </div>
                <div class="card-footer">
                    <small class="text-muted">Pembaruan terakhir 3 menit lalu </small>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- baris 2 -->
<div class="container-fluid">
    <div class="row">
        <div class="card-group">
            <div class="card">
                <img src="img/f1.jpeg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">FIERSA BESARI</h5>
                    <p class="card-text">Fiersa Besari adalah Penulis, YouTuber, dan Musisi asal Indonesia. Sebagai penulis, Fiersa telah menghasilkan enam novel. Ia juga terlibat sebagai salah satu pendiri Komunitas Pecandu Buku. Ia pun aktif sebagai YouTuber pendakian. Episode-episode YouTube terkenal miliknya adalah "Sebuah Jurnal".</p>
                </div>
                <div class="card-footer">
                    <small class="text-muted">Pembaruan terkahir 3 menit lalu </small>
                </div>
            </div>
            <div class="card">
                <img src="img/p2.jpeg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">PAMUNGKAS</h5>
                    <p class="card-text">Rizki Rahmahadian Pamungkas, S.Ds., yang lebih dikenal dengan nama panggung Pamungkas, adalah seorang penyanyi, produser rekaman, penulis lagu, dan aktor berkebangsaan Indonesia.</p>
                </div>
                <div class="card-footer">
                    <small class="text-muted">Pembaruan terakhir 3 menit lalu</small>
                </div>
            </div>
            <div class="card">
                <img src="img/t1.jpeg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">TULUS</h5>
                    <p class="card-text">Muhammad Tulus, S.Ars adalah penyanyi-penulis lagu berkebangsaan Indonesia. Tulus memulai karier profesionalnya sejak tahun 2011 melalui label rekaman independen TulusCompany yang didirikannya. Hampir semua karya musik yang dirilisnya adalah hasil karya ciptanya sendiri.</p>
                </div>
                <div class="card-footer">
                    <small class="text-muted">Pembaruan terakhir 3 menit lalu </small>
                </div>
            </div>
        </div>
    </div>
</div>

  <!--untuk venue-->
  <br><br>
  <section id="venue">
  <center>
    <div class="p-3 mb-2 bg-secondary text-white"><h2>VENUE</h2></div>
  </center>
    <img src="img/venue.jpg" width="60%" />
    <div class="kolom">
      <p class="deskripsi">Booking Tiket mu Sekarang!!!</p>
      <p>Syarat dan Ketentuan:</p>
      <p>- Tiket harus ditukarkan H-1 konser akan dilaksanakan.</p>
      <p>- Nanti akan mendapatkan gelang konser untuk masuk ke dalam venue.<p>
          <p>- Apabila H-1 tidak datang untuk menukarkan tiket, maka akan hangus dan tidak bisa untuk masuk ke dalam
            venue pada hari konser dimulai<p>
    </div>
  </section>

    <!-- Media Partner -->
    <center>
      <div class="p-3 mb-2 bg-secondary text-white" id="mediapartner"><h2>Media Partner</h2></div>
      <h3>---Terima kasih kepada beberapa media partner yang telah bekerja sama dengan kami, sehingga acara kami dapat
        berlangsung dengan lancar---</h3>
    </center>
    <br>
    <div class="text-center">
      <img src="https://pbs.twimg.com/media/DHpKZgbUIAEy0Ci.jpg" width="50%" class />
    </div>

    <!-- footer -->
    <div class="countainer py-2 border-footer bg-dark">
      <h7 class="text-center text-white">copyright@2023</h7>
    </div>

    <!-- Javascript Bootstrap -->
    <script src="js/bootstrap.bundle.js"></script>
    <!-- AOS -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
    </script>
</body>
</html>