<?php
include "koneksi.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['user_id'];
    $nama = $_POST["nama"];
    $deskripsi = $_POST["deskripsi"];
    $status = $_POST["status"];
    $photo = $_FILES["photo"]["name"]; // Get the file name

    // Specify the directory where the file will be stored
    $targetDir = "assets/img/babe/";
    $targetFilePath = $targetDir . basename($photo);

    // Check if the photo has changed
    if ($_FILES["photo"]["error"] !== UPLOAD_ERR_NO_FILE) {
        // Move the uploaded file to the specified directory
        if (move_uploaded_file($_FILES["photo"]["tmp_name"], $targetFilePath)) {
            $photoChanged = true;
        } else {
            echo "Error uploading file";
            exit;
        }
    } else {
        $photoChanged = false;
    }

    // Build the update query based on the changed parameters
    $query = "UPDATE barang SET ";
    $updates = [];
    if ($nama !== "") {
        $updates[] = "nama='$nama'";
    }
    if ($deskripsi !== "") {
        $updates[] = "deskripsi='$deskripsi'";
    }
    if ($status !== "") {
        $updates[] = "status='$status'";
    }
    if ($photoChanged) {
        $updates[] = "foto='$photo'";
    }

    if (!empty($updates)) {
        $query .= implode(", ", $updates);
        $query .= " WHERE item_id='$id'";

        // Update data in barang table
        $result = mysqli_query($koneksi, $query);

        if ($result) {
            echo "<script>alert('Berhasil Mengupdate Barang Bekasmu!'); window.location.href = 'profil.php';</script>";
        } else {
            echo "Error updating data: " . mysqli_error($koneksi);
        }
    } else {
        echo "No parameters changed";
    }
}
