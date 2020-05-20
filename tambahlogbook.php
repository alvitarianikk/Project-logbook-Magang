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
<form action="tambahlogbook.php" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
<table>
<?php

$tanggal= date("Y-m-d ");
$waktu= $_POST["waktu"];
$catatan=$_POST["catatan"];
$suhu=$_POST["suhu"];
$nama=$_POST["nama"];
$dvor= $_POST["dvor"];
$dme= $_POST["dme"];
$localizer= $_POST["localizer"];
$glidepath= $_POST["glidepath"];
$outermarker= $_POST["outermarker"];
$middlemarker= $_POST["middlemarker"];
$shift= $_POST["shift"];
?>
<?php

$conn=mysql_connect ("localhost","root","")
or die ("koneksi gagal");
mysql_select_db ("logbookcnsa",$conn);
$sqlstr="insert into navigasi (id,tanggal,waktu,catatan,suhu,nama,shift,dvor,dme,localizer,glidepath,outermarker,middlemarker) values ('','$tanggal','$waktu','$catatan','$suhu','$nama','$shift','$dvor','$dme','$localizer','$glidepath','$outermarker','$middlemarker')";
$hasil = mysql_query($sqlstr,$conn);
echo "Simpan catatan berhasil dilakukan";
?>
 <ul class="navbar">
     <ul class="navbar">
    <li><a href="home.php" style="text-decoration:none"><font color="#CCCCCC">Home</a></li>
    <li><a href="dataalat.php" style="text-decoration:none"><font color="#CCCCCC">Suku Cadang</a></li>
    <li><a href="karyawanlogin.php" style="text-decoration:none"><font color="#CCCCCC">Log book Peralatan</a></li>
         <li><a href="logbookcnsa.php" style="text-decoration:none"><font color="#CCCCCC">Log book CNSA</a></li></font>
     <li><a href="../tryagain/form_simpan.php" style="text-decoration:none"> <font color="#CCCCCC">Upload Dokumentasi</a></li>
	<li><a href="../tryagain/index.php" style="text-decoration:none"><font color="#CCCCCC">Lihat Dokumentasi</a></li>
	<li><a href="logout.php" style="text-decoration:none"><font color="#CCCCCC">Log out</a></li>
    
     
	</ul>
	<tr><th width="10" height="5">tanggal</th><th>waktu</th><th>catatan</th><th>suhu</th><th>nama</th><th>shift</th><th>dvor</th><th> dme</th><th>ILS <br> localizer  </th><th> Glide Path</th><th> Outer Marker </th><th> Middle Marker</th></tr>
	<?php
    include 'koneksilog.php';
    $logbook = mysqli_query($koneksi, "SELECT * from navigasi ORDER BY  id DESC");
    foreach ($logbook as $row){
        echo "<tr>
            <td>".$row['tanggal']."</td>
			            <td>".$row['waktu']."</td>
            <td>".$row['catatan']."</td>
			               <td>".$row['suhu']."</td>        
						       <td>".$row['nama']."</td>
			   <td>".$row['shift']."</td>
			<td>".$row['dvor']."</td>
			<td>".$row['dme']."</td>
            <td>".$row['localizer']."</td>
			  <td>".$row['glidepath']."</td>
              <td>".$row['outermarker']."</td>
			<td>".$row['middlemarker']."</td>
              
	<td> <a href='deletekar.php?id=$row[id]'>Delete</a>	   
              </tr>";   
    }
    ?>

</table></body>
</html>