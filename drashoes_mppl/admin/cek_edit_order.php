<?php
include "../koneksi.php";

// Ambil data dari form
$id_orders = $_POST['id_orders'];
$id_admin = $_POST['id_admin'];
$id_cust = $_POST['id_cust'];
$id_pricelist = $_POST['id_pricelist'];

// Query update data order
$query = mysqli_query($konek, "UPDATE orders SET id_admin='$id_admin', id_cust='$id_cust', id_pricelist='$id_pricelist' WHERE id_orders='$id_orders'")
or die(mysqli_error($konek));

// Redirect atau pesan error
if ($query) {
    header("Location: data_orders.php");
} else {
    echo "Proses update gagal";
}
?>