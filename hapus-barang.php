<?php
include "koneksi.php";

$item_id = $_GET['item_id'];

// Retrieve the image filename from the database
$query = "SELECT foto FROM barang WHERE item_id = $item_id";
$result = mysqli_query($koneksi, $query);
$row = mysqli_fetch_assoc($result);
$imageFilename = $row['foto'];

// Delete the data from the database
$query = "DELETE FROM barang WHERE item_id = $item_id";
if (mysqli_query($koneksi, $query)) {
    $imagePath = 'assets/img/babe/' . $imageFilename;
    if (file_exists($imagePath)) {
        unlink($imagePath);
    }
    echo "<script>alert('Berhasil menghapus barang'); window.location.href = 'profil.php';</script>";
    exit();
} else {
    echo "<script>alert('Gagal menghapus barang'); window.location.href = 'profil.php';</script>";
    exit();
}
