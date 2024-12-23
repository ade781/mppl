<?php
include "../koneksi.php";
$nama_pricelist =$_POST['nama_pricelist'];
$harga =$_POST['harga'];
$linkfoto=$_POST['linkfoto'];

$query=mysqli_query($konek,"INSERT INTO pricelist VALUES('','$nama_pricelist','$harga','$linkfoto')") or die(mysqli_error($konek));

if($query)
{
header("location: data_pricelist.php");
}
else
{
echo "Proses Input gagal";
}
?> 

