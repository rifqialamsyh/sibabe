<?php
session_start();
?>
<header id="header" class="header fixed-top d-flex align-items-center">
  <div class="container-fluid d-flex align-items-center justify-content-between">
    <a href="index.php" class="logo d-flex align-items-center me-auto me-xl-0">
      <img src="assets/img/sibabelogo.png" alt="" />
      <h1>SiBaBe</h1>
      <!-- <span>.</span> -->
    </a>

    <!-- Nav Menu -->
    <nav id="navmenu" class="navmenu">
      <ul>
        <!-- <li><a href="index.php#hero" class="active">Beranda</a></li> -->
        <li><a href="index.php#portfolio">Barang Bekas</a></li>
        <li><a href="index.php#testimonials">Testimoni</a></li>
        <li><a href="index.php#about">Tentang Kami</a></li>
        <li>
          <hr>
        </li>
        <?php
        if (isset($_SESSION['email'])) {
        ?>
          <li class="user-nav-mobile"><a href="index.php#about">Dasbor</a></li>
          <li class="user-nav-mobile"><a href="index.php#about">Keluar</a></li>
        <?php
        } ?>

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
      <li class="dropdown has-dropdown user-nav-desktop">
        <a href="#"><span>Hai, <?php echo "$_SESSION[email]"; ?> <i class="bi bi-chevron-down"></i></span> </a>
        <ul class="dd-box-shadow">
          <li><a href="profil.php">Dasbor</a></li>
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