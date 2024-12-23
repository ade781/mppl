<?php
include "../koneksi.php";
$username_admin =$_POST['username_admin'];
$email_admin =$_POST['email_admin'];
$password_admin=$_POST['password_admin'];
$role_admin=$_POST['role_admin'];

$query=mysqli_query($konek,"INSERT INTO admin VALUES('','$username_admin','$email_admin','$password_admin','$role_admin')") or die(mysqli_error($konek));

if($query)
{
header("location: data_admin.php");
}
else
{
echo "Proses Input gagal";
}
?> 

