<?php
include "../koneksi.php";
$id_pricelist =$_GET['id_pricelist'];
$query=mysqli_query($konek,"DELETE FROM pricelist where
id_pricelist=$id_pricelist");
if($query)
{
header("location: data_pricelist.php");
}
else
{
echo "Proses Input gagal";
}
?>
