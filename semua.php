<head>
<link rel="stylesheet" type="text/css" href="style.css">
<center>
        <?php session_start();
if(!isset($_SESSION['username'])) {
header('location:login.php'); }
else { $username = $_SESSION['username']; }
require_once("koneksi.php");
$query = mysql_query("SELECT * FROM login WHERE username = '$username'");
$hasil = mysql_fetch_array($query);
?>

<body>
<body bgcolor="#88C5F7">
<head>
<link rel="stylesheet" type="text/css" href="style.css">
<!doctype html>
<html>
<title>Welcome to AirNav</title>
<head>
<style type="text/css">
    body{padding-left: 8cm; font-family: sans-serif;background:#FFFFFF url("images2.jpg") repeat-x fixed top; color: bisque}
    .gaya1{background-color:blue; border:2px dotted red; text-indent:40px}
    .gaya2{background-color: coral; border:2px solid black; padding:20px 15px}
    #gaya3{background-color: black;border:2px dotted violet}
    #gaya4{background-color: coral; border:2px solid black; padding:20px 15px}
    ul.navbar{list-style-type: none; width: 6cm; position: absolute; top : 2cm; left: 10px}
    ul.navbar li {height: 40px; padding: 8px 6px;}
    ul.navbar li {background: blue; margin: 0.5em; padding: 0.3em; border-right: 1 em solid black}
    ul.navbar li:hover{background-color:cyan;}
</style>    
    </head>
<body>
    <ul class="navbar">
    <li><a href="home.php" style="text-decoration:none"><font color="#FFFFFF">Home</a></li>
    <li><a href="dataalat.php" style="text-decoration:none"><font color="#FFFFFF">Suku Cadang</a></li>
    <li><a href="karyawanlogin.php" style="text-decoration:none"><font color="#FFFFFF">Log book Peralatan</a></li>
         <li><a href="logbookcnsa.php" style="text-decoration:none"><font color="#FFFFFF">Log book CNSA</a></li></font>
     <li><a href="../tryagain/form_simpan.php" style="text-decoration:none"><font color="#FFFFFF"> Upload Dokumentasi</a></li>
	<li><a href="../tryagain/index.php" style="text-decoration:none"><font color="#FFFFFF">Lihat Dokumentasi</a></li>
	<li><a href="logout.php" style="text-decoration:none"><font color="#FFFFFF">Log out</a></li>
    
     
	</ul></font>
<BR>
					<BR><table><font color="#000000"> MENAMPILKAN RECENT DATA :<tr>
					<td><a href="karyawanlogin.php" style="text-decoration:none">5</a></td></option>
					<td><a href="sepuluh.php" style="text-decoration:none">10</a></td></option>
					<td><a href="duapuluh.php" style="text-decoration:none">20</a></td></option>
					<td><a href="limapuluh.php" style="text-decoration:none">50</a></td></option>
					<td><a href="semua.php" style="text-decoration:none">>></a></td></option></tr></table>
	 
<table border="3" bordercolordark="#000000"><table class="table1">

    <tr style="background:#FFFF00"><th width="10" height="5">Damage Date</th><th>Damage Time </th><th>Normal Date</th><th>Normal Time</th><th>Name</th><th>Facilities</th><th>Equipments</th><th>Merk</th><th>Parts of Equipment</th><th>............Description........ </th><th>...........Repair.........</th><th>status</th></tr>
</font>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<title>Searching Buku tamu untuk database MySql</title>
</head>
<body>
<form action="hasilsearch.php" method="post">
<select name="kolom">
tanggal,bulan,tahun,waktuindo,tanggalnormal,waktuus,nama,fasilitas,peralatan,merk,bagianalat,detailrusak,perbaikan

<option value="tanggal">Damage Date</option>
<option value="waktuindo">Damage Time</option>
<option value="tanggalnormal">Normal Date</option>
<option value="waktuus">Normal Time</option>

<option value="nama">Name</option>
<option value="fasilitas">Facilities</option>
<option value="peralatan">Equipment</option>
<option value="merk">Merk</option>
<option value="bagianalat">Parts of Equipment</option>
<option value="detailrusak">Description</option>
<option value="perbaikan">Repair</option>
<option value="status">Status</option>
</select>

Masukkan kata yang anda cari

<input type="text" type="text" name="cari">
<input type="submit" value="cari">
</form>

</body>
</html>

<?php
$perbaikanErr = "not Resolved";
$perbaikand = "Resolved";
$merah="#DC143C ";

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

<?php
if ( "not Resolved"){
$indikator = $merah;
}else {
$indikator = $hijau;					
}
					?>
					<?php
    include 'koneksi1.php';
    $logbook = mysqli_query($koneksi, "SELECT * from logbook ORDER BY id DESC, status DESC");
    foreach ($logbook as $row){
        echo "<tr>
            <td>".$row['tanggal']."</td>
            <td>".$row['waktuindo']."</td>
			  <td>".$row['waktuus']."</td>
              <td>".$row['tanggalnormal']."</td>
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
	
	
</table>

</body>
</html>
