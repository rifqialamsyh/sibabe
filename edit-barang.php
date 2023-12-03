<?php
include "koneksi.php";

// Get the id from the URL or form submission
$id = $_GET['item_id'];

// Query to get the barang based on the id
$query = "SELECT * FROM barang WHERE item_id = $id";
$result = mysqli_query($koneksi, $query);

// Check if the query was successful
if ($result) {
    // Fetch the barang data
    $barang = mysqli_fetch_assoc($result);

    // Assign the values to variables
    $nama = $barang['nama'];
    $deskripsi = $barang['deskripsi'];
    $status = $barang['status'];

    // Free the result set
    mysqli_free_result($result);
} else {
    // Handle the error if the query fails
    echo "Error: " . mysqli_error($koneksi);
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SiBaBe - Edit Barang</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
    <link rel="stylesheet" href="assets/css/profil.css" />
    <link rel="stylesheet" href="assets/css/explore.css">
</head>

<body>
    <div class="d-flex flex-row justify-content-center align-items-center profil-container">
        <h1>UNDER MAINTENANCE</h1>
        <section class="addbabe">
            <form action="edit-barang-action.php" method="post" enctype="multipart/form-data">
                <input type="number" name="user_id" value="<?php echo $id; ?>" style="display: none;" readonly>
                <label for="nama">Nama Barang Bekas</label>
                <input type="text" id="nama" name="nama" value="<?php echo $nama; ?>" required />

                <label for=" deskripsi">Deskripsi</label>
                <textarea id="deskripsi" name="deskripsi" value="<?php echo $deskripsi; ?>" required></textarea>

                <label for=" status">Status</label>
                <select id="status" name="status" required>
                    <option value="Gratis">Gratis</option>
                    <option value="Dijual">Dijual</option>
                </select>

                <label for="photo">Upload Photo</label>
                <input type="file" id="photo" name="photo" accept="image/*" class="up-button" />

                <input type="submit" value="Edit" class="add-button" />
            </form>
        </section>
    </div>
</body>

</html>