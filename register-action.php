<?php
include "koneksi.php";

session_start();

// Get the form data
$nama = $_POST['nama'];
$nohp = $_POST['nohp'];
$email = $_POST['email'];
$password = $_POST['password'];

// Check if the email already exists in the database
$checkQuery = "SELECT * FROM users WHERE email = '$email'";
$checkResult = mysqli_query($koneksi, $checkQuery);

if (mysqli_num_rows($checkResult) > 0) {
    // Email already exists, show error message
    echo "<script>alert('Email already exists!'); window.location.href = 'register.php';</script>";
} else {
    // Insert the data into the database
    $query = "INSERT INTO users (role, nama, email, password, nohp) VALUES ('user', '$nama', '$email', '$password', '$nohp')";
    $result = mysqli_query($koneksi, $query);

    if ($result) {
        // Registration successful
        echo "<script>alert('Kamu Berhasil Mendaftar!'); window.location.href = 'login.php';</script>";
    } else {
        // Registration failed
        echo "<script>alert('Pendaftaran Kamu Gagal!'); window.location.href = 'register.php';</script>";
    }
}

// Close the database connection
mysqli_close($koneksi);
