<?php
include "koneksi.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user_id = $_POST["user_id"];
    $nama = $_POST["nama"];
    $deskripsi = $_POST["deskripsi"];
    $status = $_POST["status"];
    $photo = $_FILES["photo"]["name"]; // Get the file name

    // Specify the directory where the file will be stored
    $targetDir = "assets/img/babe/";
    $targetFilePath = $targetDir . basename($photo);

    // Move the uploaded file to the specified directory
    if (move_uploaded_file($_FILES["photo"]["tmp_name"], $targetFilePath)) {
        // Update data in barang table
        $query = "UPDATE barang SET nama='$nama', status='$status', deskripsi='$deskripsi', foto='$photo' WHERE user_id='$user_id'";
        $result = mysqli_query($koneksi, $query);

        if ($result) {
            echo "<script>alert('Berhasil Mengupdate Barang Bekasmu!'); window.location.href = 'profil.php';</script>";
        } else {
            echo "Error updating data: " . mysqli_error($koneksi);
        }
    } else {
        echo "Error uploading file";
    }
}
