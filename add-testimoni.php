<?php
include "koneksi.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST["nama"];
    $bintang = $_POST["bintang"];
    $komentar = $_POST["komentar"];

    // Insert data into barang table
    $query = "INSERT INTO testimoni (nama, bintang, komentar) VALUES ('$nama', '$bintang', '$komentar')";
    $result = mysqli_query($koneksi, $query);

    if ($result) {
        // Query execution successful
        echo "<script>alert('Berhasil Menambahkan Testimoni!'); window.location.href = 'profil.php';</script>";
    } else {
        // Query execution failed
        echo "<script>alert('Gagal Menambahkan Testimoni!'); window.location.href = 'profil.php';</script>";
    }
}
