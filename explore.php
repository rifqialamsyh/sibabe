<?php
include 'koneksi.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>SiBaBe - Barang Bekas</title>

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon" />
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous" />

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect" />
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin />

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet" />
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet" />
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet" />
  <link href="assets/vendor/aos/aos.css" rel="stylesheet" />
  <link rel="stylesheet" href="assets/fontawesome-free-5.15.4-web/fontawesome-free-5.15.4-web/">

  <!-- Template Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet" />
  <link href="assets/css/explore.css" rel="stylesheet" />
</head>

<body>
  <!-- Navbar -->
  <?php include 'navbar.php'; ?>
  <!-- End Navbar -->

  <!-- Card disini -->
  <section class="product1" style="margin-top: 70px;">
    <div class="pro-container">
      <?php
      // Fetch all barang from the database
      $query = "SELECT * FROM barang";
      $result = mysqli_query($koneksi, $query);

      if (mysqli_num_rows($result) > 0) {
        foreach ($result as $row) {
      ?>
          <div class="pro">
            <img src="assets/img/babe/<?php echo $row['foto']; ?>" alt="foto barang">
            <div class="des">
              <h5><?php echo $row['nama']; ?></h5>
              <h5><span>- <?php echo $row['status']; ?> -</span>
                <h5>
            </div>
            <div class="d-grid gap-2 col-6 m-auto">
              <a href="detail-barang.php?item_id=<?php echo $row['item_id']; ?>" class="btn-getstarted">Detail</a>
            </div>
          </div>
      <?php
        }
      }
      ?>
    </div>
  </section>
  <!-- FOOTER -->
  <?php include 'footer.php'; ?>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <script src="assets/js/main.js"></script>

</body>

</html>