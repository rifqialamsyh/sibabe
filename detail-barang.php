<?php
session_start();
include "koneksi.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>SiBaBe - BaBe Detail</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Append
  * Updated: Sep 18 2023 with Bootstrap v5.3.2
  * Template URL: https://bootstrapmade.com/append-bootstrap-website-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body class="portfolio-details-page" data-bs-spy="scroll" data-bs-target="#navmenu">

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">
    <?php include "navbar.php";
    ?>
  </header>
  <!-- End Header -->

  <main id="main" style="margin-top: 24px;">

    <!-- Portfolio Details Page Title & Breadcrumbs -->
    <div data-aos="fade" class="page-title">
      <div class="heading">
        <div class="container">
          <div class="row d-flex justify-content-center text-center">
            <div class="col-lg-8">
              <h1>Detail Barang Bekas</h1>
              <p class="mb-0"></p>
            </div>
          </div>
        </div>
      </div>
      <nav class="breadcrumbs">
        <div class="container">
          <ol>
            <li><a href="index.php">Beranda</a></li>
            <li class="current">Detail</li>
          </ol>
        </div>
      </nav>
    </div><!-- End Page Title -->

    <!-- Portfolio-details Section - Portfolio Details Page -->
    <section id="portfolio-details" class="portfolio-details">

      <?php
      $item_id = $_GET['item_id'];

      $query = "SELECT * FROM barang WHERE item_id = $item_id";
      $result = mysqli_query($koneksi, $query);

      // Check if the query was successful
      if ($result && mysqli_num_rows($result) > 0) {
        $barang = mysqli_fetch_assoc($result);

        $nama = $barang['nama'];
        $deskripsi = $barang['deskripsi'];
        $status = $barang['status'];
        $foto = $barang['foto'];
        $user_id = $barang['user_id'];
      }
      ?>

      <div class="container" data-aos="fade-up">

        <div class="portfolio-details-slider swiper">
          <!-- <template class="swiper-config">
            {
            "loop": true,
            "speed" : 600,
            "autoplay": {
            "delay": 5000
            },
            "slidesPerView": "auto",
            "navigation": {
            "nextEl": ".swiper-button-next",
            "prevEl": ".swiper-button-prev"
            }
            }
          </template> -->
          <div class="swiper-wrapper align-items-center">

            <div class="swiper-slide">
              <img src="assets/img/babe/<?php echo $foto; ?>" alt="">
            </div>
          </div>
          <!-- <div class="swiper-button-prev"></div>
          <div class="swiper-button-next"></div> -->
        </div>

        <div class="row justify-content-between gy-4 mt-4">

          <div class="col-lg-8" data-aos="fade-up">
            <div class="portfolio-description">
              <h2><?php echo $nama; ?></h2>
              <p>
                <?php echo $deskripsi; ?>
              </p>
            </div>
          </div>

          <div class="col-lg-3" data-aos="fade-up" data-aos-delay="100">
            <div class="portfolio-info">
              <h3>Informasi</h3>
              <ul>
                <?php
                $query_user = "SELECT * FROM users WHERE id = $user_id";
                $result_user = mysqli_query($koneksi, $query_user);
                $user = mysqli_fetch_assoc($result_user);
                ?>
                <li><strong>Nama Pemilik</strong> <?php echo $user['nama']; ?></li>
                <li><strong>Status</strong> <?php echo $status; ?></li>
                <li><a href="http://wa.me/+62<?php echo $user['nohp']; ?>" class="btn-visit align-self-start">Hubungi</a></li>
              </ul>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Portfolio-details Section -->

  </main>

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    <div class="container footer-top">
      <!-- <div class="row gy-4">
          <div class="col-lg-5 col-md-12 footer-about">
            <a href="index.php" class="logo d-flex align-items-center">
              <span>Append</span>
            </a>
            <p>
              Cras fermentum odio eu feugiat lide par naso tierra. Justo eget
              nada terra videa magna derita valies darta donna mare fermentum
              iaculis eu non diam phasellus.
            </p>
            <div class="social-links d-flex mt-4">
              <a href=""><i class="bi bi-twitter"></i></a>
              <a href=""><i class="bi bi-facebook"></i></a>
              <a href=""><i class="bi bi-instagram"></i></a>
              <a href=""><i class="bi bi-linkedin"></i></a>
            </div>
          </div>

          <div class="col-lg-2 col-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><a href="#">Home</a></li>
              <li><a href="#">About us</a></li>
              <li><a href="#">Services</a></li>
              <li><a href="#">Terms of service</a></li>
              <li><a href="#">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-2 col-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><a href="#">Web Design</a></li>
              <li><a href="#">Web Development</a></li>
              <li><a href="#">Product Management</a></li>
              <li><a href="#">Marketing</a></li>
              <li><a href="#">Graphic Design</a></li>
            </ul>
          </div>

          <div
            class="col-lg-3 col-md-12 footer-contact text-center text-md-start"
          >
            <h4>Contact Us</h4>
            <p>A108 Adam Street</p>
            <p>New York, NY 535022</p>
            <p>United States</p>
            <p class="mt-4">
              <strong>Phone:</strong> <span>+1 5589 55488 55</span>
            </p>
            <p><strong>Email:</strong> <span>info@example.com</span></p>
          </div>
        </div> -->
    </div>

    <div class="container copyright text-center mt-4">
      <p>
        &copy; <span>Copyright</span> <strong class="px-1">SiBaBe</strong>
        <span>All Rights Reserved</span>
      </p>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you've purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: [buy-url] -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>
  </footer>
  <!-- End Footer -->

  <!-- Scroll Top Button -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader">
    <div></div>
    <div></div>
    <div></div>
    <div></div>
  </div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>