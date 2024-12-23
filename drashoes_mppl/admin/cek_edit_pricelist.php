<?php
include "../koneksi.php";
$id_pricelist=$_POST['id_pricelist'];
$nama_pricelist =$_POST['nama_pricelist'];
$harga =$_POST['harga'];
$linkfoto =$_POST['linkfoto'];
$query=mysqli_query($konek,"UPDATE pricelist SET nama_pricelist='$nama_pricelist',harga='$harga',linkfoto='$linkfoto' where id_pricelist='$id_pricelist'")
or die(mysqli_error($konek));
if($query)
{
header("location: data_pricelist.php");
}
else
{
echo "Proses Input gagal";
}
?>
