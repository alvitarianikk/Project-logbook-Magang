
<h2> Update </h2>
<?php
include 'koneksi1.php';
$id= $_POST['id'];
$waktuindo= $_POST["waktuindo"];
$waktuus= $_POST["waktuus"];
$nama = $_POST["nama"];
$fasilitas= $_POST["fasilitas"];
$peralatan = $_POST["peralatan"];
$merk= $_POST["merk"];
$bagianalat= $_POST["bagianalat"];
$detailrusak= $_POST["detailrusak"];
$perbaikan= $_POST["perbaikan"];
$perbaikanErr = "not Resolved";
$perbaikand = "Resolved";
$merah="#DC143C ";
$tanggalnormal= $_POST["tanggalnormal"];
$hijau="#00FFFF";
?>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
if  (empty($_POST["perbaikan"])) {
$status = $perbaikanErr;
}
else {
$status = $perbaikand;
}}
?>

    <tr style="background:#FFFF00"><th width="10" height="5">Damage Date</th><th>Month</th><th> year</th><th>Damage Time </th><th>Normal Date</th><th>Normal Time</th><th>Name</th><th>Facilities</th><th>Equipments</th><th>Merk</th><th>Parts of Equipment</th><th>Description</th><th>Repair</th><th>status</th></tr>
<?php

if ( $status == $perbaikanErr ){
					$indikator = $merah;
					}else {
					
					$indikator = $hijau;
					}
					?>
					
	<?php
$query="UPDATE logbook SET tanggal='$tanggal',waktuindo='$waktuindo',tanggalnormal='$tanggalnormal',waktuus='$waktuus',nama='$nama',fasilitas='$fasilitas',peralatan='$peralatan',merk='$merk',bagianalat='$bagianalat',detailrusak='$detailrusak',perbaikan='$perbaikan',status='$status',indikator='$indikator' WHERE id='$id'";
mysqli_query($koneksi, $query);
		header('location: karyawanlogin.php');?>
					<?php
    include 'koneksi1.php';
    $logbook = mysqli_query($koneksi, "SELECT * from logbook ORDER BY status ASC");
    foreach ($logbook as $row){
        echo "<tr>
            <td>".$row['tanggal']."</td>
			<td>".$row['waktuindo']."</td>
			<td>".$row['tanggalnormal']."</td>
			  <td>".$row['waktuus']."</td>
			<td>".$row['nama']."</td>
              <td>".$row['fasilitas']."</td>
            <td>".$row['peralatan']."</td>
			  <td>".$row['merk']."</td>
			  <td>".$row['bagianalat']."</td>
				  <td>".$row['detailrusak']."</td>
				    <td>".$row['perbaikan']."</td>
					 <td bgcolor='$indikator?status=$row[status]'>".$row['status']."</td>
					 <td><a href='updatekaryawan1.php?id=$row[id]'>Edit</a>
                <a href='deletekar.php?id=$row[id]'>Delete</a>
            </td>
              </tr>";   
    }
    ?>
