<?php
include "../koneksi.php";
$id_orders =$_GET['id_orders'];
$query=mysqli_query($konek,"DELETE FROM orders where
id_orders=$id_orders");
if($query)
{
header("location: data_orders.php");
}
else
{
echo "Proses Input gagal";
}
?>
