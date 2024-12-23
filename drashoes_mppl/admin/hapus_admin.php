<?php
include "../koneksi.php";
$id_admin =$_GET['id_admin'];
$query=mysqli_query($konek,"DELETE FROM admin where id_admin=$id_admin");
if($query)
{
header("location: data_admin.php");
}
else
{
echo "Proses hapus gagal";
}
?>
