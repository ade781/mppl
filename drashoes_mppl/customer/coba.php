<?php
session_start();
include '../koneksi.php'; // File koneksi database

// Ambil data produk untuk ditampilkan dalam dropdown
$query = "SELECT id_pricelist, nama_pricelist FROM pricelist";
$result = mysqli_query($conn, $query);

// Proses form pemesanan
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id_cust = $_SESSION['id_cust'];
    $id_pricelist = $_POST['id_pricelist'];
    
    $query = "INSERT INTO orders (id_cust, id_pricelist) VALUES (?, ?)";
    $stmt = mysqli_prepare($conn, $query);
    mysqli_stmt_bind_param($stmt, 'ii', $id_customer, $id_product);
    mysqli_stmt_execute($stmt);
    
    if (mysqli_stmt_affected_rows($stmt) > 0) {
        echo "Pesanan berhasil dibuat.";
    } else {
        echo "Gagal membuat pesanan.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Buat Pesanan</title>
</head>
<body>
    <h1>Buat Pesanan</h1>
    <form method="post">
        <label for="id_pricelist">Pilih Barang:</label>
        <select name="id_pricelist" id="id_pricelist" required>
            <?php while ($row = mysqli_fetch_assoc($result)): ?>
                <option value="<?= $row['id_pricelist'] ?>"><?= $row['nama_pricelist'] ?></option>
            <?php endwhile; ?>
        </select>
        <button type="submit">Buat Pesanan</button>
    </form>
</body>
</html>
