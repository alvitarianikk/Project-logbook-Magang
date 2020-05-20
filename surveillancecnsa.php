<head>
<link rel="stylesheet" type="text/css" href="style.css">
        <?php session_start();
if(!isset($_SESSION['username'])) {
header('location login.php'); }
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
    body{padding-left: 8cm; font-family: sans-serif;background:#FFFFFF url("images2.jpg") repeat-x fixed top;}
    ul.navbar{list-style-type: none; width: 6cm; position: absolute; top : 2cm; left: 1px}
    ul.navbar li {height: 40px; padding: 8px 6px;}
    ul.navbar li {background: blue; margin: 0.5em;}
    ul.navbar li:hover{background-color:cyan;}
</style>    
    </head>
<body>
    <ul class="navbar">
    <li><a href="home.php" style="text-decoration:none"><font color="#FFFFFF">Home</a></li>
    <li><a href="sejarah.php" style="text-decoration:none"><font color="#FFFFFF">Sejarah peralatan</a></li>
    <li><a href="dataalat.php" style="text-decoration:none"><font color="#FFFFFF">Suku Cadang</a></li>
    <li><a href="karyawanlogin.php" style="text-decoration:none"><font color="#FFFFFF">Log book peralatan</a></li>
	<li><a href="logbookcnsa.php" style="text-decoration:none"><font color="#FFFFFF">Log book CNSA</a></li>
         <li><a href="logout.php" style="text-decoration:none"><font color="#FFFFFF">Log out</a></li></font>
     <li><a href="../tryagain/form_simpan.php" style="text-decoration:none"><font color="#FFFFFF">Dokumentasi</a></li>
	</ul></font></font>
	<center>
<form action="tambahsurveillance.php" method="post">
<table>
<tr bgcolor="#CCCCCC">
<td><a href="communicationcnsa.php"style="text-decoration:none">Communication</a></td>
<td><a href="logbookcnsa.php" style="text-decoration:none">Navigation</a></td>
<td><a href="surveillancecnsa.php" style="text-decoration:none">Surveillance</a></td>
<td><a href="automationcnsa.php" style="text-decoration:none">Automation</a></td></tr>

<tr><td><font color="#000000"> Date : <td><font color="#000000"><?php $tanggal = date("Y-m-d "); echo $tanggal; ?></td>
<tr><td> Time : <td><input type="text" name="waktu"> </td></tr>
</table>
	 <table border="3" class="table1">
<tr><td>NO</td><td>Peralatan</td><td>status</td><td>catatan</td></tr>
<tr><td><font color="#000000"> </td><td>
SHIFT <td><font color="#000000"><input type="radio" name="shift" value="PAGI" checked="PAGI">PAGI<font color="#000000"><input type="radio" name="shift" value="SIANG" checked="SIANG">SIANG  <font color="#000000"> <input type="radio" name="shift" value="MALAM" checked="MALAM">  MALAM </td><td><textarea name="catatan" rows="5"></textarea>
<tr><td><font color="#000000">1.</td><td> PSR:</td><td><input type="radio" name="psr" value="OK" checked="OK">OK
<font color="#000000"><input type="radio" name="psr" value="NOT OK">NOT OK</td></tr>
<tr><td>2.</td><td> MSSR</td></tr>

<tr><td><font color="#000000">2.2</td><td> RMM :</td><td><input type="radio" name="msrrm" value="OK" checked="OK"> OK
<font color="#000000"><input type="radio" name="msrrm" value="NOT OK">NOT OK</td></tr>

<tr><td><font color="#000000">2.2</td><td> LCMS :</td><td><input type="radio" name="msrlcm" value="OK" checked="OK" > OK
<font color="#000000"><input type="radio" name="msrlcm" value="NOT OK">NOT OK</td></tr>

<tr><td><font color="#000000">2.3</td><td>SMP :</td><td><input type="radio" name="msrsmp" value="OK" checked="OK"> OK 
<input type="radio" name="msrsmp" value="NOT OK" >NOT OK</td></tr>
<tr><td><font color="#000000">2.4 </td><td>RDP:</td><td> <font color="#000000"> <input type="radio" name="msrrdp" value="OK" checked="OK" > OK 
<font color="#000000"><input type="radio" name="msrrdp" value="NOT OK">NOT OK</td></tr>

<tr><td><font color="#000000">3</td><td> ADSB:</td><td><font color="#000000"> <input type="radio" name="adsb" value="OK" checked="OK"> OK 
<font color="#000000"><input type="radio" name="adsb" value="NOT OK">NOT OK</td></tr>
</tr>
<tr><td><font color="#000000"> Personil on Duty :<textarea name="nama" rows="5"></textarea><td><font color="#000000"> Suhu ruangan :<input type="text" name="suhu" ></textarea>
<tr><td><input type="submit" value="Simpan"><input type="reset" value="Reset"><br></td></tr>
</body>
</html>

<table border="3" bordercolordark="#000000"><table class="table1">
	
</table>