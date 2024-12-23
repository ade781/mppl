<?php
session_start(); // Pastikan session dimulai
include "../koneksi.php";

// Ambil data dari form
$id_admin = $_POST['id_admin'];
$id_pricelist = $_POST['id_pricelist'];

// Ambil id_cust dari session
$id_cust = $_SESSION['id_cust'];

// Pastikan semua variabel yang diperlukan ada nilainya
if (!empty($id_admin) && !empty($id_cust) && !empty($id_pricelist)) {
    // Query insert dengan mengisi nilai pada semua kolom sesuai urutan di tabel orders
    $query = mysqli_query($konek, "INSERT INTO orders (id_admin, id_cust, id_pricelist) VALUES ('$id_admin', '$id_cust', '$id_pricelist')")
        or die(mysqli_error($konek));

    // Cek apakah query berhasil
    if ($query) {
        // Redirect ke halaman order.php jika berhasil
        header("location: order.php");
    } else {
        echo "Proses Input gagal";
    }
} else {
    echo "Data tidak lengkap!";
}
?>