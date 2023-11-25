<?php
include "koneksi.php";

session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $password = $_POST["password"];

    // Validate user credentials
    $query = "SELECT * FROM user WHERE email = '$email' AND password = '$password'";
    $result = mysqli_query($koneksi, $query);

    if ($result && mysqli_num_rows($result) > 0) {
        // Login successful
        session_start();
        $_SESSION['email'] = $email;
        header("Location: index.php");
        exit();
    } else {
        // Login failed
        echo "Invalid email or password";
    }
}
?>