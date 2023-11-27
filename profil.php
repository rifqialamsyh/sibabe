<?php
session_start();

// Check if user is not logged in, redirect to login page
if (!isset($_SESSION['email'])) {
  header("Location: login.php");
  exit;
}

include 'koneksi.php';

// Fetch data from the users table
$query = "SELECT * FROM users WHERE email = '$_SESSION[email]'";
$result = mysqli_query($koneksi, $query);
$row = mysqli_fetch_assoc($result);
$nama = $row['nama'];
$kontak = $row['nohp'];
$id = $row['id'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>SiBaBe - Dasbor</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
  <link rel="stylesheet" href="assets/css/profil.css" />
  <link rel="stylesheet" href="assets/css/explore.css">
</head>

<body>
  <div class="container">
    <nav class="navbar fixed-top">
      <div class="container-fluid">
        <div>
          <img src="assets/img/sibabelogo.png" alt="logo sibabe" class="sibabe-logo" />
          <a class="navbar-brand" style="font-weight: 700" href="index.php">SiBaBe - Dasbor</a>
        </div>
        <div class="d-flex justify-content-end">
          <a href="index.php" class="btn home-btn">Beranda</a>
          <a class="btn logout-btn" href="logout.php">Keluar</a>
        </div>
      </div>
    </nav>
    <div class="d-flex flex-row justify-content-center align-items-center profil-container">
      <section class="profil">
        <img src="uploads/Screenshot_1.png" alt="foto profil" class="foto-profil" />
        <?php
        echo "<h2>$nama</h2>";
        echo "<h3>$kontak</h3>";
        ?>
      </section>
      <section class="addbabe">
        <form action="add-barang.php" method="post" enctype="multipart/form-data">
          <input type="number" name="user_id" value="<?php echo $id; ?>" readonly>
          <label for="nama">Nama Barang Bekas</label>
          <input type="text" id="nama" name="nama" required />

          <label for="deskripsi">Deskripsi</label>
          <textarea id="deskripsi" name="deskripsi" required></textarea>

          <label for="status">Status</label>
          <select id="status" name="status" required>
            <option value="Gratis">Gratis</option>
            <option value="Dijual">Dijual</option>
          </select>

          <label for="photo">Upload Photo</label>
          <input type="file" id="photo" name="photo" accept="image/*" required class="up-button" />

          <input type="submit" value="Tambahkan" class="add-button" />
        </form>
      </section>
    </div>
  </div>
  <div class="container">
    <hr />
    <section class="product1" style="margin-top: 70px;">
      <h2 style="text-align: center;">Barang Bekas Mu</h2>
      <div class="pro-container">
        <div class="pro">
          <img src="assets/img/features-light-1.jpg" alt="">
          <div class="des">
            <h5>Barang Bekas</h5>
            <h5><span>- Dijual -</span>
              <h5>
          </div>
          <div class="d-grid gap-2 col-6 m-auto">
            <button class="btn-getstarted">Detail</button>
          </div>
          <!-- <a href="#"><i class="fal  fa-shopping-cart cart"></i></a> -->
        </div>

        <div class="pro">
          <img src="assets/img/masonry-portfolio/masonry-portfolio-7.jpg" alt="">
          <div class="des">
            <h5>Barang Bekas</h5>
            <h5><span>- Disewakan -</span></h5>
          </div>
          <div class="d-grid gap-2 col-6 mx-auto">
            <button class="btn-getstarted">Detail</button>
          </div>
          <!-- <a href="#"><i class="fal  fa-shopping-cart cart"></i></a> -->
        </div>
        <div class="pro">
          <img src="assets/img/masonry-portfolio/masonry-portfolio-7.jpg" alt="">
          <div class="des">
            <h5>Barang Bekas</h5>
            <h5><span>- Disewakan -</span></h5>
          </div>
          <div class="d-grid gap-2 col-6 mx-auto">
            <button class="btn-getstarted">Detail</button>
          </div>
          <!-- <a href="#"><i class="fal  fa-shopping-cart cart"></i></a> -->
        </div>

        <div class="pro">
          <img src="assets/img/masonry-portfolio/masonry-portfolio-8.jpg" alt="">
          <div class="des">
            <h5>Barang Bekas</h5>
            <h5><span>- Dijual -</span> </h5>
          </div>
          <div class="d-grid gap-2 col-6 mx-auto">
            <button class="btn-getstarted">Detail</button>
          </div>
          <!-- <a href="#"><i class="fal  fa-shopping-cart cart"></i></a> -->
        </div>

        <!-- Ganti lengkapi photo product -->
        <div class="pro">
          <img src="assets/img/masonry-portfolio/masonry-portfolio-2.jpg" alt="">
          <div class="des">
            <h5>Barang Bekas</h5>
            <h5><span>- Disewakan -</span></h5>
          </div>
          <div class="d-grid gap-2 col-6 mx-auto">
            <button class="btn-getstarted">Detail</button>
          </div>
          <!-- <a href="#"><i class="fal  fa-shopping-cart cart"></i></a> -->
        </div>

        <div class="pro">
          <img src="assets/img/masonry-portfolio/masonry-portfolio-3.jpg" alt="">
          <div class="des">
            <h5>Barang Bekas</h5>
            <h5><span>- Gratis -</span></h5>
          </div>
          <div class="d-grid gap-2 col-6 mx-auto">
            <button class="btn-getstarted">Detail</button>
          </div>
          <!-- <a href="#"><i class="fal  fa-shopping-cart cart"></i></a> -->
        </div>

        <div class="pro">
          <img src="assets/img/masonry-portfolio/masonry-portfolio-4.jpg" alt="">
          <div class="des">
            <h5>Barang Bekas</h5>
            <h5><span>- Dijual -</span></h5>
          </div>
          <div class="d-grid gap-2 col-6 mx-auto">
            <button class="btn-getstarted">Detail</button>
          </div>
          <!-- <a href="#"><i class="fal  fa-shopping-cart cart"></i></a> -->
        </div>

        <div class="pro">
          <img src="assets/img/masonry-portfolio/masonry-portfolio-7.jpg" alt="">
          <div class="des">
            <h5>Barang Bekas</h5>
            <h5><span>- Disewakan -</span></h5>
          </div>
          <div class="d-grid gap-2 col-6 mx-auto">
            <button class="btn-getstarted">Detail</button>
          </div>
          <!-- <a href="#"><i class="fal  fa-shopping-cart cart"></i></a> -->
        </div>
      </div>
    </section>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>