<?php
include "../koneksi.php";
$id_cust =$_GET['id_cust'];
$query=mysqli_query($konek,"DELETE FROM customer where id_cust=$id_cust");
if($query)
{
header("location: data_customer.php");
}
else
{
echo "Proses hapus gagal";
}
?>
