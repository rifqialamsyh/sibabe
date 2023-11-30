<?php
include "koneksi.php";

$testimoniId = $_GET['testimoni_id'];

$deleteQuery = "DELETE FROM testimoni WHERE testimoni_id = $testimoniId";
$result = mysqli_query($koneksi, $deleteQuery);

if ($result) {
    echo "<script>alert('Berhasil menghapus testimoni'); window.location.href = 'profil.php';</script>";
    exit();
} else {
    echo "Error deleting testimoni: " . mysqli_error($koneksi);
}
