
<h2> Update </h2>
<?php
include 'koneksi1.php';
$id= $_POST['id'];
$tanggal= date('d-m-Y');
$waktuindo= $_POST['waktuindo'];
$waktuus= $_POST['waktuus'];
$nama = $_POST['nama'];
$fasilitas= $_POST['fasilitas'];
$peralatan = $_POST['peralatan'];
$merk= $_POST['merk'];
$bagianalat= $_POST['bagianalat'];
$detailrusak= $_POST['detailrusak'];
$perbaikan= $_POST['perbaikan'];

$query="UPDATE logbook SET waktuindo='$waktuindo',waktuus='$waktuus',nama='$nama',fasilitas='$fasilitas',peralatan='$peralatan',merk='$merk',bagianalat='$bagianalat',detailrusak='$detailrusak',perbaikan='$perbaikan' WHERE id='$id'";
mysqli_query($koneksi, $query);
		header('location: index.php');
?>