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
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet" />

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
    <!-- <div class="searchbox">
      <form action="post">
        <input class="form-control" type="text" id="search" name="search" placeholder="Cari barang yang anda butuhkan">
        <?php

        if (isset($_POST['search'])) {
          $searchValue = $_POST['search'];

          // Fetch the matching barang from the database
          $query = "SELECT * FROM barang WHERE nama LIKE '%$searchValue%'";
          $result = mysqli_query($koneksi, $query);

          if (mysqli_num_rows($result) > 0) {
            foreach ($result as $row) {
              // Display the search results
              echo '<div class="search-result">' . $row['nama'] . '</div>';
            }
          } else {
            // Display a message if no results found
            echo '<div class="search-result">No results found</div>';
          }
        }
        ?>
      </form>
    </div> -->

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