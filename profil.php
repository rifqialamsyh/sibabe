<?php
session_start();

// Check if user is not logged in, redirect to login page
if (!isset($_SESSION['email'])) {
  header("Location: login.php");
  exit;
}

include 'koneksi.php';

// Fetch data from the users table
$query = "SELECT * FROM users WHERE email = '$_SESSION[email]'";
$result = mysqli_query($koneksi, $query);
$row = mysqli_fetch_assoc($result);
$nama = $row['nama'];
$kontak = $row['nohp'];
$id = $row['id'];
$role = $row['role'];
$foto = $row['foto'];

// Fetch data from the barang table
$query_barang = "SELECT * FROM barang WHERE user_id = $id";
$result_barang = mysqli_query($koneksi, $query_barang);

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>SiBaBe - Dasbor</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
  <link rel="stylesheet" href="assets/css/profil.css" />
  <link rel="stylesheet" href="assets/css/explore.css">
</head>

<body>
  <?php
  if ($role == 'user') {
    include "dasbor-user.php";
  } elseif ($role == 'admin') {
    include "dasbor-admin.php";
  }
  ?>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>