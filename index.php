<?php
include 'koneksi.php';
?>
<!DOCTYPE php>
<php lang="en">

  <head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />

    <title>SiBaBe - Informasi Barang Bekas</title>
    <meta content="" name="description" />
    <meta content="" name="keywords" />

    <!-- Favicons -->
    <link href="assets/img/favicon.ico" rel="icon" />
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon" />

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect" />
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin />

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet" />
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet" />
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet" />
    <link href="assets/vendor/aos/aos.css" rel="stylesheet" />

    <!-- Template Main CSS File -->
    <link href="assets/css/main.css" rel="stylesheet" />

    <!-- =======================================================
  * Template Name: Append
  * Updated: Sep 18 2023 with Bootstrap v5.3.2
  * Template URL: https://bootstrapmade.com/append-bootstrap-website-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
  </head>

  <body class="index-page" data-bs-spy="scroll" data-bs-target="#navmenu">
    <!-- ======= Header ======= -->
    <?php include 'navbar.php'; ?>
    <!-- End Header -->

    <main id="main">
      <!-- Hero Section - Home Page -->
      <section id="hero" class="hero">
        <img src="assets/img/hero-bg.jpg" alt="" data-aos="fade-in" />

        <div class="container">
          <div class="row">
            <div class="col-lg-10">
              <h2 data-aos="fade-up" data-aos-delay="100">
                Temukan barang bekas <br />
                yang anda butuhkan.
              </h2>
              <p data-aos="fade-up" data-aos-delay="200">
                Menyediakan informasi seputar barang bekas milik orang lain.
              </p>
            </div>
          </div>
        </div>
      </section>
      <!-- End Hero Section -->

      <!-- start of pentingnya section -->

      <section id="importance" class="importance container">'
        <div class="sharing">
          <img src="assets/img/sharing.png" alt="foto sharing" data-aos="fade-up">
          <div class="text" data-aos="fade-up">
            <p>Dengan berpartisipasi, anda <span> membantu</span> masyarakat yang membutuhkan.</p>
          </div>
        </div>
        <div class="green">
          <img src="assets/img/hijau.png" alt="foto hijau" data-aos="fade-up">
          <div class="text" data-aos="fade-up">
            <p>Sumbangan barang bekas dapat digunakan untuk membantu <span> mengurangi jumlah limbah</span> yang masuk ke tempat pembuangan sampah</p>
          </div>
        </div>
      </section>

      <!-- babe Section - Home Page -->
      <section id="portfolio" class="portfolio">
        <!--  Section Title -->
        <div class="container section-title" data-aos="fade-up">
          <h2>Barang</h2>
        </div>
        <!-- End Section Title -->

        <div class="container">
          <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">
            <div class="row gy-4 isotope-container" data-aos="fade-up" data-aos-delay="200">
              <?php
              // Fetch all barang from the database
              $query = "SELECT * FROM barang";
              $result = mysqli_query($koneksi, $query);

              if (mysqli_num_rows($result) > 0) {
                foreach ($result as $row) {
              ?>
                  <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
                    <img src="assets/img/babe/<?php echo $row['foto']; ?>" class="img-fluid" alt="" />
                    <div class="portfolio-info">
                      <h4><?php echo $row['nama']; ?></h4>
                      <a href="assets/img/babe/<?php echo $row['foto']; ?>" title="<?php echo $row['nama']; ?>" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                      <a href="detail-barang.php?item_id=<?php echo $row['item_id']; ?>" title="More Details" class="details-link"><i class="bi bi-arrow-right"></i></a>
                    </div>
                  </div>
              <?php
                }
              }
              ?>
              <!-- End babe Item -->
              <!-- End Portfolio Item -->
            </div>
            <!-- End Portfolio Container -->
          </div>
          <div class="container babeContainer">
            <a href="explore.php" class="moreBabe">Lihat Semua</a>
          </div>
        </div>
      </section>
      <!-- End Portfolio Section -->

      <!-- Testimonials Section - Home Page -->
      <section id="testimonials" class="testimonials">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-lg-5 info" data-aos="fade-up" data-aos-delay="100">
              <h3>Testimoni</h3>
              <p>Apa kata pengguna SiBaBe tentang layanan kami?</p>
            </div>

            <div class="col-lg-7" data-aos="fade-up" data-aos-delay="200">
              <div class="swiper">
                <template class="swiper-config">
                  { "loop": true, "speed" : 600, "autoplay": { "delay": 5000 },
                  "slidesPerView": "auto", "pagination": { "el":
                  ".swiper-pagination", "type": "bullets", "clickable": true } }
                </template>
                <div class="swiper-wrapper">
                  <?php
                  // Fetch all barang from the database
                  $query = "SELECT * FROM testimoni";
                  $testimoniresult = mysqli_query($koneksi, $query);

                  if (mysqli_num_rows($testimoniresult) > 0) {
                    foreach ($testimoniresult as $rowtestimoni) {
                  ?>
                      <div class="swiper-slide">
                        <div class="testimonial-item">
                          <div class="d-flex">
                            <div>
                              <h3><?php echo $rowtestimoni['nama']; ?></h3>
                              <!-- <h4>Ceo & Founder</h4> -->
                              <div class="stars">
                                <?php
                                $starCount = $rowtestimoni['bintang']; // Set the number of stars here

                                for ($i = 0; $i < $starCount; $i++) {
                                  echo '<i class="bi bi-star-fill"></i>';
                                }
                                ?>
                              </div>
                            </div>
                          </div>
                          <p>
                            <i class="bi bi-quote quote-icon-left"></i>
                            <span><?php echo $rowtestimoni['komentar']; ?></span>
                            <i class="bi bi-quote quote-icon-right"></i>
                          </p>
                        </div>
                      </div>
                  <?php
                    }
                  }
                  ?>

                  <!-- End testimonial item -->
                </div>
                <div class="swiper-pagination"></div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- End Testimonials Section -->
    </main>

    <!-- ======= Footer ======= -->
    <?php include 'footer.php'; ?>
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
</php>