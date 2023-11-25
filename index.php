<?php
session_start();
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
    <link
      href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap"
      rel="stylesheet"
    />

    <!-- Vendor CSS Files -->
    <link
      href="assets/vendor/bootstrap/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <link
      href="assets/vendor/bootstrap-icons/bootstrap-icons.css"
      rel="stylesheet"
    />
    <link
      href="assets/vendor/glightbox/css/glightbox.min.css"
      rel="stylesheet"
    />
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
    <header id="header" class="header fixed-top d-flex align-items-center">
      <div
        class="container-fluid d-flex align-items-center justify-content-between"
      >
        <a
          href="index.php"
          class="logo d-flex align-items-center me-auto me-xl-0"
        >
          <img src="assets/img/sibabelogo.png" alt="" />
          <h1>SiBaBe</h1>
          <!-- <span>.</span> -->
        </a>

        <!-- Nav Menu -->
        <nav id="navmenu" class="navmenu">
          <ul>
            <!-- <li><a href="index.php#hero" class="active">Beranda</a></li> -->
            <li><a href="index.php#portfolio">Lihat BaBe</a></li>
            <li><a href="index.php#testimonials">Testimoni</a></li>
            <li><a href="index.php#about">Tentang Kami</a></li>

            <!-- <li class="dropdown has-dropdown">
              <a href="#"
                ><span>Dropdown</span> <i class="bi bi-chevron-down"></i
              ></a>
              <ul class="dd-box-shadow">
                <li><a href="#">Dropdown 1</a></li>
                <li class="dropdown has-dropdown">
                  <a href="#"
                    ><span>Deep Dropdown</span>
                    <i class="bi bi-chevron-down"></i
                  ></a>
                  <ul class="dd-box-shadow">
                    <li><a href="#">Deep Dropdown 1</a></li>
                    <li><a href="#">Deep Dropdown 2</a></li>
                    <li><a href="#">Deep Dropdown 3</a></li>
                    <li><a href="#">Deep Dropdown 4</a></li>
                    <li><a href="#">Deep Dropdown 5</a></li>
                  </ul>
                </li>
                <li><a href="#">Dropdown 2</a></li>
                <li><a href="#">Dropdown 3</a></li>
                <li><a href="#">Dropdown 4</a></li>
              </ul>
            </li> -->
            <!-- <li><a href="index.php#contact">Contact</a></li> -->
          </ul>

          <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
        </nav>
        <!-- End Nav Menu -->

        <?php
            if (isset($_SESSION['email'])) {
            ?>
            <li class="dropdown has-dropdown">
              <a href="#"
                ><span>Hai, <?php echo "$_SESSION[email]";?> <i class="bi bi-chevron-down"></i
              ></span> </a>
              <ul class="dd-box-shadow">
                <li><a href="#">Profil</a></li>
                <li><a href="logout.php">Keluar</a></li>
              </ul>
            </li>
            <?php
            } else {
            ?>
                <a class="btn-getstarted" href="login.php">Masuk</a>
            <?php
            }
        ?>

        <!-- <a class="btn-getstarted" href="login.php">Masuk</a> -->
      </div>
    </header>
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

      <!-- babe Section - Home Page -->
      <section id="portfolio" class="portfolio">
        <!--  Section Title -->
        <div class="container section-title" data-aos="fade-up">
          <h2>Barang</h2>
        </div>
        <!-- End Section Title -->

        <div class="container">
          <div
            class="isotope-layout"
            data-default-filter="*"
            data-layout="masonry"
            data-sort="original-order"
          >
            <!-- <ul
              class="portfolio-filters isotope-filters"
              data-aos="fade-up"
              data-aos-delay="100"
            >
              <li data-filter="*" class="filter-active">All</li>
              <li data-filter=".filter-app">App</li>
              <li data-filter=".filter-product">Card</li>
              <li data-filter=".filter-branding">Web</li>
            </ul> -->
            <!-- End Portfolio Filters -->

            <div
              class="row gy-4 isotope-container"
              data-aos="fade-up"
              data-aos-delay="200"
            >
              <div
                class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app"
              >
                <img
                  src="assets/img/masonry-portfolio/masonry-portfolio-1.jpg"
                  class="img-fluid"
                  alt=""
                />
                <div class="portfolio-info">
                  <h4>App 1</h4>
                  <p>Lorem ipsum, dolor sit</p>
                  <a
                    href="assets/img/masonry-portfolio/masonry-portfolio-1.jpg"
                    title="App 1"
                    data-gallery="portfolio-gallery-app"
                    class="glightbox preview-link"
                    ><i class="bi bi-zoom-in"></i
                  ></a>
                  <a
                    href="detail-barang.php"
                    title="More Details"
                    class="details-link"
                    ><i class="bi bi-arrow-right"></i
                  ></a>
                </div>
              </div>
              <!-- End babe Item -->

              <div
                class="col-lg-4 col-md-6 portfolio-item isotope-item filter-product"
              >
                <img
                  src="assets/img/masonry-portfolio/masonry-portfolio-2.jpg"
                  class="img-fluid"
                  alt=""
                />
                <div class="portfolio-info">
                  <h4>Product 1</h4>
                  <p>Lorem ipsum, dolor sit</p>
                  <a
                    href="assets/img/masonry-portfolio/masonry-portfolio-2.jpg"
                    title="Product 1"
                    data-gallery="portfolio-gallery-product"
                    class="glightbox preview-link"
                    ><i class="bi bi-zoom-in"></i
                  ></a>
                  <a
                    href="detail-barang.php"
                    title="More Details"
                    class="details-link"
                    ><i class="bi bi-arrow-right"></i
                  ></a>
                </div>
              </div>
              <!-- End Portfolio Item -->

              <div
                class="col-lg-4 col-md-6 portfolio-item isotope-item filter-branding"
              >
                <img
                  src="assets/img/masonry-portfolio/masonry-portfolio-3.jpg"
                  class="img-fluid"
                  alt=""
                />
                <div class="portfolio-info">
                  <h4>Branding 1</h4>
                  <p>Lorem ipsum, dolor sit</p>
                  <a
                    href="assets/img/masonry-portfolio/masonry-portfolio-3.jpg"
                    title="Branding 1"
                    data-gallery="portfolio-gallery-branding"
                    class="glightbox preview-link"
                    ><i class="bi bi-zoom-in"></i
                  ></a>
                  <a
                    href="detail-barang.php"
                    title="More Details"
                    class="details-link"
                    ><i class="bi bi-arrow-right"></i
                  ></a>
                </div>
              </div>
              <!-- End Portfolio Item -->

              <div
                class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app"
              >
                <img
                  src="assets/img/masonry-portfolio/masonry-portfolio-4.jpg"
                  class="img-fluid"
                  alt=""
                />
                <div class="portfolio-info">
                  <h4>App 2</h4>
                  <p>Lorem ipsum, dolor sit</p>
                  <a
                    href="assets/img/masonry-portfolio/masonry-portfolio-4.jpg"
                    title="App 2"
                    data-gallery="portfolio-gallery-app"
                    class="glightbox preview-link"
                    ><i class="bi bi-zoom-in"></i
                  ></a>
                  <a
                    href="detail-barang.php"
                    title="More Details"
                    class="details-link"
                    ><i class="bi bi-arrow-right"></i
                  ></a>
                </div>
              </div>
              <!-- End Portfolio Item -->

              <div
                class="col-lg-4 col-md-6 portfolio-item isotope-item filter-product"
              >
                <img
                  src="assets/img/masonry-portfolio/masonry-portfolio-5.jpg"
                  class="img-fluid"
                  alt=""
                />
                <div class="portfolio-info">
                  <h4>Product 2</h4>
                  <p>Lorem ipsum, dolor sit</p>
                  <a
                    href="assets/img/masonry-portfolio/masonry-portfolio-5.jpg"
                    title="Product 2"
                    data-gallery="portfolio-gallery-product"
                    class="glightbox preview-link"
                    ><i class="bi bi-zoom-in"></i
                  ></a>
                  <a
                    href="detail-barang.php"
                    title="More Details"
                    class="details-link"
                    ><i class="bi bi-arrow-right"></i
                  ></a>
                </div>
              </div>
              <!-- End Portfolio Item -->

              <div
                class="col-lg-4 col-md-6 portfolio-item isotope-item filter-branding"
              >
                <img
                  src="assets/img/masonry-portfolio/masonry-portfolio-6.jpg"
                  class="img-fluid"
                  alt=""
                />
                <div class="portfolio-info">
                  <h4>Branding 2</h4>
                  <p>Lorem ipsum, dolor sit</p>
                  <a
                    href="assets/img/masonry-portfolio/masonry-portfolio-6.jpg"
                    title="Branding 2"
                    data-gallery="portfolio-gallery-branding"
                    class="glightbox preview-link"
                    ><i class="bi bi-zoom-in"></i
                  ></a>
                  <a
                    href="detail-barang.php"
                    title="More Details"
                    class="details-link"
                    ><i class="bi bi-arrow-right"></i
                  ></a>
                </div>
              </div>
              <!-- End Portfolio Item -->

              <div
                class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app"
              >
                <img
                  src="assets/img/masonry-portfolio/masonry-portfolio-7.jpg"
                  class="img-fluid"
                  alt=""
                />
                <div class="portfolio-info">
                  <h4>App 3</h4>
                  <p>Lorem ipsum, dolor sit</p>
                  <a
                    href="assets/img/masonry-portfolio/masonry-portfolio-7.jpg"
                    title="App 3"
                    data-gallery="portfolio-gallery-app"
                    class="glightbox preview-link"
                    ><i class="bi bi-zoom-in"></i
                  ></a>
                  <a
                    href="detail-barang.php"
                    title="More Details"
                    class="details-link"
                    ><i class="bi bi-arrow-right"></i
                  ></a>
                </div>
              </div>
              <!-- End Portfolio Item -->

              <div
                class="col-lg-4 col-md-6 portfolio-item isotope-item filter-product"
              >
                <img
                  src="assets/img/masonry-portfolio/masonry-portfolio-8.jpg"
                  class="img-fluid"
                  alt=""
                />
                <div class="portfolio-info">
                  <h4>Product 3</h4>
                  <p>Lorem ipsum, dolor sit</p>
                  <a
                    href="assets/img/masonry-portfolio/masonry-portfolio-8.jpg"
                    title="Product 3"
                    data-gallery="portfolio-gallery-product"
                    class="glightbox preview-link"
                    ><i class="bi bi-zoom-in"></i
                  ></a>
                  <a
                    href="detail-barang.php"
                    title="More Details"
                    class="details-link"
                    ><i class="bi bi-arrow-right"></i
                  ></a>
                </div>
              </div>
              <!-- End Portfolio Item -->

              <div
                class="col-lg-4 col-md-6 portfolio-item isotope-item filter-branding"
              >
                <img
                  src="assets/img/masonry-portfolio/masonry-portfolio-9.jpg"
                  class="img-fluid"
                  alt=""
                />
                <div class="portfolio-info">
                  <h4>Branding 3</h4>
                  <p>Lorem ipsum, dolor sit</p>
                  <a
                    href="assets/img/masonry-portfolio/masonry-portfolio-9.jpg"
                    title="Branding 2"
                    data-gallery="portfolio-gallery-branding"
                    class="glightbox preview-link"
                    ><i class="bi bi-zoom-in"></i
                  ></a>
                  <a
                    href="detail-barang.php"
                    title="More Details"
                    class="details-link"
                    ><i class="bi bi-arrow-right"></i
                  ></a>
                </div>
              </div>
              <!-- End Portfolio Item -->
            </div>
            <!-- End Portfolio Container -->
          </div>
          <div class="container babeContainer">
            <a href="#" class="moreBabe">Lihat Semua</a>
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
                  <div class="swiper-slide">
                    <div class="testimonial-item">
                      <div class="d-flex">
                        <!-- <img
                          src="assets/img/testimonials/testimonials-1.jpg"
                          class="testimonial-img flex-shrink-0"
                          alt=""
                        /> -->
                        <div>
                          <h3>Saul Goodman</h3>
                          <!-- <h4>Ceo & Founder</h4> -->
                          <div class="stars">
                            <i class="bi bi-star-fill"></i
                            ><i class="bi bi-star-fill"></i
                            ><i class="bi bi-star-fill"></i
                            ><i class="bi bi-star-fill"></i
                            ><i class="bi bi-star-fill"></i>
                          </div>
                        </div>
                      </div>
                      <p>
                        <i class="bi bi-quote quote-icon-left"></i>
                        <span
                          >Proin iaculis purus consequat sem cure digni ssim
                          donec porttitora entum suscipit rhoncus. Accusantium
                          quam, ultricies eget id, aliquam eget nibh et. Maecen
                          aliquam, risus at semper.</span
                        >
                        <i class="bi bi-quote quote-icon-right"></i>
                      </p>
                    </div>
                  </div>
                  <!-- End testimonial item -->

                  <div class="swiper-slide">
                    <div class="testimonial-item">
                      <div class="d-flex">
                        <!-- <img
                          src="assets/img/testimonials/testimonials-2.jpg"
                          class="testimonial-img flex-shrink-0"
                          alt=""
                        /> -->
                        <div>
                          <h3>Sara Wilsson</h3>
                          <!-- <h4>Designer</h4> -->
                          <div class="stars">
                            <i class="bi bi-star-fill"></i
                            ><i class="bi bi-star-fill"></i
                            ><i class="bi bi-star-fill"></i
                            ><i class="bi bi-star-fill"></i
                            ><i class="bi bi-star-fill"></i>
                          </div>
                        </div>
                      </div>
                      <p>
                        <i class="bi bi-quote quote-icon-left"></i>
                        <span
                          >Export tempor illum tamen malis malis eram quae irure
                          esse labore quem cillum quid cillum eram malis quorum
                          velit fore eram velit sunt aliqua noster fugiat irure
                          amet legam anim culpa.</span
                        >
                        <i class="bi bi-quote quote-icon-right"></i>
                      </p>
                    </div>
                  </div>
                  <!-- End testimonial item -->

                  <div class="swiper-slide">
                    <div class="testimonial-item">
                      <div class="d-flex">
                        <!-- <img
                          src="assets/img/testimonials/testimonials-3.jpg"
                          class="testimonial-img flex-shrink-0"
                          alt=""
                        /> -->
                        <div>
                          <h3>Jena Karlis</h3>
                          <!-- <h4>Store Owner</h4> -->
                          <div class="stars">
                            <i class="bi bi-star-fill"></i
                            ><i class="bi bi-star-fill"></i
                            ><i class="bi bi-star-fill"></i
                            ><i class="bi bi-star-fill"></i
                            ><i class="bi bi-star-fill"></i>
                          </div>
                        </div>
                      </div>
                      <p>
                        <i class="bi bi-quote quote-icon-left"></i>
                        <span
                          >Enim nisi quem export duis labore cillum quae magna
                          enim sint quorum nulla quem veniam duis minim tempor
                          labore quem eram duis noster aute amet eram fore quis
                          sint minim.</span
                        >
                        <i class="bi bi-quote quote-icon-right"></i>
                      </p>
                    </div>
                  </div>
                  <!-- End testimonial item -->

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
    <a
      href="#"
      id="scroll-top"
      class="scroll-top d-flex align-items-center justify-content-center"
      ><i class="bi bi-arrow-up-short"></i
    ></a>

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
