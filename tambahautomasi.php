<head>
<link rel="stylesheet" type="text/css" href="style.css">
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
    body{padding-left: 8cm; font-family: sans-serif;background:#000000 url("images2.jpg") repeat-x fixed top; color: bisque}
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
<form action="tambahautomasi.php" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
<table>
<?php
$tanggal= date("Y-m-d ");
$waktu= $_POST["waktu"];
$catatan=$_POST["catatan"];
$suhu=$_POST["suhu"];
$nama=$_POST["nama"];
$serverfdp= $_POST["serverfdp"];
$serversdp= $_POST["serversdp"];
$serverfdprb= $_POST["serverfdprb"];
$recorder= $_POST["recorder"];
$asd1= $_POST["asd1"];
$asd2= $_POST["asd2"];
$asd3= $_POST["asd3"];
$asd4= $_POST["asd4"];
$asd5= $_POST["asd5"];
$asd6= $_POST["asd6"];
$asd7= $_POST["asd7"];
$fdd1= $_POST["fdd1"];
$fdd2= $_POST["fdd2"];
$fdd3= $_POST["fdd3"];
$asd4fdo= $_POST["asd4fdo"];
$fdd5= $_POST["fdd5"];
$fdd6= $_POST["fdd6"];
$dataspesial= $_POST["dataspesial"];
$smc= $_POST["smc"];
$playback= $_POST["playback"];
$asmgcs= $_POST["asmgcs"];
$shift= $_POST["shift"];

?>
<?php

$conn=mysql_connect ("localhost","root","")
or die ("koneksi gagal");
mysql_select_db ("logbookcnsa",$conn);
$sqlstr="insert into automasi(id,tanggal,waktu,catatan,suhu,nama,shift,serverfdp,serversdp, serverfdprb,recorder,asd1,asd2,asd3,asd4,asd5,asd6,asd7,fdd1,fdd2,fdd3,asd4fdo,fdd5,fdd6,dataspesial,smc,playback,asmgcs
) values ('','$tanggal','$waktu','$catatan','$suhu','$nama','$shift','$serverfdp','$serversdp', '$serverfdprb','$recorder','$asd1','$asd2','$asd3','$asd4','$asd5','$asd6','$asd7','$fdd1','$fdd2','$fdd3','$asd4fdo','$fdd5','$fdd6','$dataspesial','$smc','$playback','$asmgcs'
)";
$hasil = mysql_query($sqlstr,$conn);
echo "Simpan catatan berhasil dilakukan";
?>
 <ul class="navbar">
     <ul class="navbar">
    <li><a href="home.php" style="text-decoration:none"><font color="#FFFFFF">Home</a></li>
    <li><a href="sejarah.php" style="text-decoration:none"><font color="#FFFFFF">Sejarah peralatan</a></li>
    <li><a href="dataalat.php" style="text-decoration:none"><font color="#FFFFFF">Suku Cadang</a></li>
    <li><a href="karyawanlogin.php" style="text-decoration:none"><font color="#FFFFFF">Log book Peralatan</a></li>
         <li><a href="logbookcnsa.php" style="text-decoration:none"><font color="#FFFFFF">Log book CNSA</a></li></font>
     <li><a href="../tryagain/form_simpan.php" style="text-decoration:none"><font color="#FFFFFF"> Upload Dokumentasi</a></li>
	<li><a href="../tryagain/index.php" style="text-decoration:none"><font color="#FFFFFF">Lihat Dokumentasi</a></li>
	<li><a href="logout.php" style="text-decoration:none"><font color="#FFFFFF">Log out</a></li>
    
     
	</ul>
	<tr><th width="10" height="5">tanggal</th><th>waktu</th><th>catatan</th><th>suhu</th><th>nama</th><th>ATC SYSTEM <br> KomputerServer <br> Server FDP</th><th> Server SDP </th><th>Server FDP RBP</th><th>Recordng & Playback System</th><th>Komputer Client <br> ASD-1 Director</th><th>ASD-2 West Sector</th><th>ASD-2 West Sector</th><th>ASD-3 East Sector</th><th>ASD-4 Supervisor FIR</th><th>ASD-5 Tower</th><th>ASD-6 Supervisor VFR</th><th>ASD-7 MCC</th><th>FDD-1 Director</th><th>FDD-2 West Sector</th><th>FDD-3 East Sector</th><th>ASD-4 FDO	</th><th>FDD-5 Tower</th><th>FDD-6 Briefing Office</th><th>Data Spesialis</th><th>SMC</th><th>Playback System</th><th>ASMGCS</th></tr>
	<?php
    include 'koneksilog.php';
    $logbook = mysqli_query($koneksi, "SELECT * from automasi ORDER BY  id DESC");
    foreach ($logbook as $row){
        echo "<tr>
            <td>".$row['tanggal']."</td>
			<td>".$row['waktu']."</td>
            <td>".$row['catatan']."</td>
			               <td>".$row['suhu']."</td>        
						       <td>".$row['nama']."</td>
			<td>".$row['shift']."</td>
			<td>".$row['serverfdp']."</td>
			<td>".$row['serversdp']."</td>
            <td>".$row['serverfdprb']."</td>
			  <td>".$row['recorder']."</td>
              <td>".$row['asd1']."</td>
			<td>".$row['asd2']."</td>
			<td>".$row['asd3']."</td>
			<td>".$row['asd4']."</td>
 			<td>".$row['asd5']."</td>
			<td>".$row['asd6']."</td>  
			<td>".$row['asd7']."</td>
			<td>".$row['fdd1']."</td>
			<td>".$row['fdd2']."</td>           
           <td>".$row['fdd3']."</td>  
		   <td>".$row['asd4fdo']."</td>
		   <td>".$row['fdd5']."</td>
           <td>".$row['fdd6']."</td>  
		   <td>".$row['dataspesial']."</td>
		   <td>".$row['smc']."</td>
		   <td>".$row['playback']."</td>
		   <td>".$row['asmgcs']."</td>
	<td> <a href='deletekar.php?id=$row[id]'>Delete</a>	    </tr>";   
    }
    ?>
</table></body>
</html>