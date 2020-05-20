<?php
include 'koneksi1.php';
// menyimpan data id kedalam variabel
$id   = $_GET['id'];
// query SQL untuk insert data
$query="DELETE from logbook where id='$id'";
mysqli_query($koneksi, $query);
// mengalihkan ke halaman index.php
header("location:karyawanlogin.php");
?>
