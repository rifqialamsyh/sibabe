<?php
session_start();

include 'koneksi.php';

$query = "SELECT * FROM barang";
$result = mysqli_query($koneksi, $query);

?>
<div class="container">
    <nav class="navbar bg-light fixed-top">
        <div class="container-fluid">
            <div>
                <img src="assets/img/sibabelogo.png" alt="logo sibabe" class="sibabe-logo" />
                <a class="navbar-brand" style="font-weight: 700" href="profil.php">SiBaBe - Dasbor Admin</a>
            </div>
            <div class="d-flex justify-content-end">
                <a href="index.php" class="btn home-btn">Beranda</a>
                <a class="btn logout-btn" href="logout.php">Keluar</a>
            </div>
        </div>
    </nav>
    <div class="d-flex flex-row justify-content-center align-items-center profil-container">
        <section class="profil">
            <?php
            echo "<img src='assets/img/users/$foto' alt='foto profil' class='foto-profil' />";
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
        <section class="addtestimoni">
            <form action="add-testimoni.php" method="post">
                <label style="text-align: center;" for="add-testimoni">Tambah Testimoni</label>

                <input type="number" name="id" value="<?php echo $id; ?>" style="display: none;" readonly>
                <label for="nama">Nama User</label>
                <input type="text" id="nama" name="nama" required />

                <label for="komentar">Komentar</label>
                <textarea id="komentar" name="komentar" required></textarea>

                <label for="bintang">Jumlah Bintang</label>
                <select id="bintang" name="bintang" required>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                </select>

                <input type="submit" value="Tambahkan" class="add-button" />
            </form>
        </section>
    </div>
</div>
<div class="container">
    <hr>
    <section>
        <h2 style="text-align: center;">Semua Testimoni</h2>
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th>Nama User</th>
                    <th>Testimoni</th>
                    <th>Jumlah Bintang</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $testimoniQuery = "SELECT * FROM testimoni";
                $testimoniResult = mysqli_query($koneksi, $testimoniQuery);

                if (mysqli_num_rows($testimoniResult) == 0) {
                    echo "<tr><td colspan='4' style='text-align:center;'>Belum ada testimoni</td></tr>";
                } else {
                    foreach ($testimoniResult as $testimoniRow) {
                        $testimoniId = $testimoniRow['testimoni_id'];
                        $namaUser = $testimoniRow['nama'];
                        $komentar = $testimoniRow['komentar'];
                        $bintang = $testimoniRow['bintang'];
                        echo "<tr>";
                        echo "<td>$namaUser</td>";
                        echo "<td>$komentar</td>";
                        echo "<td>$bintang</td>";
                        echo "<td><a class='btn-delete' href='hapus-testimoni.php?testimoni_id= $testimoniId'>Hapus</a></td>";
                        echo "</tr>";
                    }
                }
                ?>
            </tbody>
        </table>
    </section>
    <hr>
    <section class="product1" style="margin-top: 32px;">
        <h2 style="text-align: center;">Semua Barang Bekas</h2>
        <div class="pro-container">
            <?php
            if (mysqli_num_rows($result) == 0) {
                echo "<h2>Kamu belum menambahkan barang bekas</h2>";
            } else {
                foreach ($result as $row) {
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
                        <a class="btn-delete" href="hapus-barang.php?item_id=<?php echo $item_id; ?>">Hapus</a>
                    </div>
            <?php
                }
            }
            ?>
        </div>
    </section>
</div>