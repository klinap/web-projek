<?php 
	include 'koneksi.php';
?>
<!DOCTYPE html>
<html>

<head>
    <!-- Site made with Mobirise Website Builder v5.8.14, https://mobirise.com -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="generator" content="Mobirise v5.8.14, mobirise.com">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
    <link rel="shortcut icon" href="assets/images/logo.png" type="image/x-icon">
    <meta name="description" content="">


    <title>Page 2</title>
    <link rel="stylesheet" href="assets/web/assets/mobirise-icons2/mobirise2.css">
    <link rel="stylesheet" href="assets/web/assets/mobirise-icons-bold/mobirise-icons-bold.css">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-reboot.min.css">
    <link rel="stylesheet" href="assets/animatecss/animate.css">
    <link rel="stylesheet" href="assets/theme/css/style.css">
    <link rel="preload"
        href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900,100i,200i,300i,400i,500i,600i,700i,800i,900i&display=swap"
        as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript>
        <link rel="stylesheet"
            href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900,100i,200i,300i,400i,500i,600i,700i,800i,900i&display=swap">
        </noscript>
    <link rel="preload" as="style" href="assets/mobirise/css/mbr-additional.css">
    <link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">

</head>

<body>
    <?php 
    $sql = mysqli_query($koneksi,"SELECT * FROM tb_pemesanan order by id desc limit 1");  
    while($data = mysqli_fetch_array($sql)){
    ?>
    <section data-bs-version="5.1" class="features5 cid-tIEyAMdQt6" id="features6-p">
        <div class="container">
            <div class="row justify-content-center">
                <div class="card col-12 col-lg-6">
                    <div class="card-wrapper mbr-flex">
                        <div class="card-box align-left">

                            <h5 class="card-title mbr-fonts-style align-left mb-3 display-5">
                                <strong><?php echo $data['jenis_tiket']; ?></strong> -
                                <?php echo $data['harga_tiket']; ?> - <?php echo $data['hari_perform']; ?>
                                - <?php echo $data['jam_perform']; ?>

                            </h5>
                            <p class="mbr-text mbr-fonts-style mb-3 display-4">
                                <?php echo $data['nama']; ?>
                            </p>
                            <div class="mbr-section-btn">
                                <a class="btn btn-primary display-4"><?php echo $data['harga_tiket']* $data['jumlah_tiket'];?></a>
                            </div>
                        </div>
                        <div class="img-wrapper img1 align-center">
                            <span class="mbr-iconfont mbrib-credit-card"></span>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </section>
    <?php 
    }
    ?>
    <script src="assets/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/smoothscroll/smooth-scroll.js"></script>
    <script src="assets/ytplayer/index.js"></script>
    <script src="assets/theme/js/script.js"></script>
    <script>
    // (Opsional) Anda dapat menambahkan JavaScript untuk mengubah atau memanipulasi konten sebelum mencetak
    window.onload = function () {
      window.print(); // Mencetak dokumen saat halaman dimuat
    };
  </script>
</body>

</html>