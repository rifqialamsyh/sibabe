<?php
session_start();
if (!isset($_SESSION['email'])) {
    header("Location: login.php");
    exit;
}

include 'koneksi.php';

?>
<div class="container">
    <nav class="navbar bg-light fixed-top">
        <div class="container-fluid">
            <div>
                <img src="assets/img/sibabelogo.png" alt="logo sibabe" class="sibabe-logo" />
                <a class="navbar-brand" style="font-weight: 700" href="profil.php">SiBaBe - Dasbor User</a>
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
                <input type="number" name="user_id" value="<?php echo $id; ?>" style="display: none;" readonly>
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
    <section class="product1" style="margin-top: 32px;">
        <h2 style="text-align: center;">Barang Bekas Mu</h2>
        <div class="pro-container">
            <?php
            if (mysqli_num_rows($result_barang) == 0) {
                echo "<h2>Kamu belum menambahkan barang bekas</h2>";
            } else {
                foreach ($result_barang as $row) {
                    $item_id = $row['item_id'];
                    $namaBarang = $row['nama'];
                    $status = $row['status'];
                    $foto = $row['foto'];
            ?>
                    <div class="pro">
                        <a href="detail-barang.php?item_id=<?php echo $item_id; ?>">
                            <img src="assets/img/babe/<?php echo $foto; ?>" alt="foto barang">
                        </a>
                        <div class="des">
                            <h5><?php echo $namaBarang; ?></h5>
                            <h5><span>- <?php echo $status; ?> -</span></h5>
                        </div>
                        <a class="btn-edit" href="#">Edit</a>
                        <a class="btn-delete" href="hapus-barang.php?item_id=<?php echo $item_id; ?>">Hapus</a>
                    </div>
            <?php
                }
            }
            ?>
        </div>
    </section>
</div>