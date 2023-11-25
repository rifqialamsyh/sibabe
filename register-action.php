<?php
include "koneksi.php";

session_start();

// Get the form data
$nama = $_POST['nama'];
$nohp = $_POST['nohp'];
$email = $_POST['email'];
$password = $_POST['password'];

// Validate the form data (you can add your own validation logic here)

// Insert the data into the database
$query = "INSERT INTO user (role, nama, email, password, nohp) VALUES ('user', '$nama', '$email', '$password', '$nohp')";
$result = mysqli_query($koneksi, $query);

if ($result) {
    // Registration successful
    echo "<script>alert('Registration successful!'); window.location.href = 'login.php';</script>";
} else {
    // Registration failed
    echo "<script>alert('Registration failed!'); window.location.href = 'register.php';</script>";
}

// Close the database connection
mysqli_close($koneksi);
?>
