<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>SiBaBe - Masuk</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet" />
  <link rel="stylesheet" href="assets/css/main.css" />
</head>

<body class="login">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  <!-- login -->

  <div class="container d-flex flex-column justify-content-center loginform" style="min-height: 100vh">
    <!-- <img src="assets/img/hero-bg.jpg" alt="" /> -->
    <h1 class="mb-3" style="font-weight: 700">Masuk</h1>
    <p class="text-muted mb-3">Silahkan masukan email dan password.</p>
    <form action="login-action.php" method="post">
      <input class="mb-3" type="text" name="email" placeholder="Email" required />
      <input class="mb-3" type="password" name="password" placeholder="Password" required />
      <input class="mb-3 submitbutton" type="submit" value="Masuk" />
    </form>
    <p>Belum memiliki akun? Silahkan <a href="register.php" style="font-weight: 700;">klik disini.</a></p>
    <a class="bi bi-arrow-left backBtn" href="index.php"> Kembali</a>

  </div>
</body>

</html>