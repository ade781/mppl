<?php
session_start();

// menghubungkan dengan koneksi
include "koneksi.php"; // Include the database connection file

// menangkap data yang dikirim dari form login
$username_cust = $_POST['username_cust'];
$password_cust = $_POST['password_cust'];

// menyeleksi data customer dengan username dan password yang sesuai
$query = "SELECT * FROM customer WHERE username_cust='$username_cust' AND password_cust='$password_cust'";
$result = $konek->query($query);

// menghitung jumlah data yang ditemukan
$cek = $result->num_rows;

if ($cek > 0) {
    // Ambil data customer dari hasil query
    $custData = $result->fetch_assoc();

    // Set session data
    $_SESSION['username_cust'] = $custData['username_cust'];
    $_SESSION['id_cust'] = $custData['id_cust']; // Menyimpan id_cust ke session

    // Redirect ke halaman customer.php jika login berhasil
    header("location: customer/customer.php");
} else {
    // Jika login gagal, redirect ke halaman index.php dengan pesan gagal
    header("location: index.php?pesan=gagal");
}

// Menutup koneksi database
$konek->close();
?>
