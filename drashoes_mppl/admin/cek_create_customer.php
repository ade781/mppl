<?php
include "../koneksi.php";
$username_cust =$_POST['username_cust'];
$email_cust =$_POST['email_cust'];
$password_cust=$_POST['password_cust'];
$role_cust=$_POST['role_cust'];

$query=mysqli_query($konek,"INSERT INTO customer VALUES('','$username_cust','$email_cust','$password_cust')") or die(mysqli_error($konek));

if($query)
{
header("location: data_customer.php");
}
else
{
echo "Proses Input gagal";
}
?> 

