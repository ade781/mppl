<?php
include "../koneksi.php";
$id_cust=$_POST['id_cust'];
$username_cust =$_POST['username_cust'];
$email_cust =$_POST['email_cust'];
$password_cust =$_POST['password_cust'];
$query=mysqli_query($konek,"UPDATE customer SET username_cust='$username_cust',email_cust='$email_cust',password_cust='$password_cust' where id_cust='$id_cust'")
or die(mysqli_error($konek));
if($query)
{
header("location: data_customer.php");
}
else
{
echo "Proses Input gagal";
}
?>
