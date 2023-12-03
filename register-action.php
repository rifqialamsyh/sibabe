<?php
include "koneksi.php";

session_start();

// Get the form data
$nama = $_POST['nama'];
$nohp = $_POST['nohp'];
$email = $_POST['email'];
$password = $_POST['password'];
$photo = $_FILES["photo"]["name"]; // Get the file name

// Check if the email already exists in the database
$checkQuery = "SELECT * FROM users WHERE email = '$email'";
$checkResult = mysqli_query($koneksi, $checkQuery);

$targetDir = "assets/img/users/";
$targetFilePath = $targetDir . basename($photo);

if (mysqli_num_rows($checkResult) > 0) {
    // Email already exists, show error message
    echo "<script>alert('Email already exists!'); window.location.href = 'register.php';</script>";
} else {
    if (move_uploaded_file($_FILES["photo"]["tmp_name"], $targetFilePath)) {
        // Insert data into barang table
        $query = "INSERT INTO users (role, nama, email, password, nohp, foto) VALUES ('user', '$nama', '$email', '$password', '$nohp', '$photo')";
        $result = mysqli_query($koneksi, $query);

        if ($result) {
            // Registration successful
            echo "<script>alert('Kamu Berhasil Mendaftar!'); window.location.href = 'login.php';</script>";
        } else {
            // Registration failed
            echo "<script>alert('Pendaftaran Kamu Gagal!'); window.location.href = 'register.php';</script>";
        }
    } else {
        echo "Error uploading file";
    }
}

// Close the database connection
mysqli_close($koneksi);
