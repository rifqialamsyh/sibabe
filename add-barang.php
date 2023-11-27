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
        // Insert data into barang table
        $query = "INSERT INTO barang (nama, status, deskripsi, foto, user_id) VALUES ('$nama', '$status', '$deskripsi', '$photo', '$user_id')";
        $result = mysqli_query($koneksi, $query);

        if ($result) {
            echo "<script>alert('Berhasil Menambahkan Barang Bekasmu!'); window.location.href = 'profil.php';</script>";
        } else {
            echo "Error inserting data: " . mysqli_error($koneksi);
        }
    } else {
        echo "Error uploading file";
    }
}
