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
    <li><a href="dataalat.php" style="text-decoration:none"><font color="#FFFFFF">Suku Cadang</a></li>
    <li><a href="karyawanlogin.php" style="text-decoration:none"><font color="#FFFFFF"> Log book peralatan</a></li>
	<li><a href="logbookcnsa.php" style="text-decoration:none"><font color="#FFFFFF">Log book CNSA</a></li>
         <li><a href="logout.php" style="text-decoration:none"><font color="#FFFFFF">Log out</a></li></font>
     <li><a href="../tryagain/form_simpan.php" style="text-decoration:none"><font color="#FFFFFF">Dokumentasi</a></li>
	</ul></font></font>
	<center>
<form action="tambahautomasi.php" method="post">
<table>
<tr bgcolor="#CCCCCC">
<td><a href="communicationcnsa.php"style="text-decoration:none">Communication</a></td>
<td><a href="logbookcnsa.php" style="text-decoration:none">Navigation</a></td>
<td><a href="surveillancecnsa.php" style="text-decoration:none">Surveillance</a></td>
<td><a href="automationcnsa.php" style="text-decoration:none">Automation</a></td></tr>

<tr><td><font color="#000000"> Date : <td><font color="#000000"><?php $tanggal = date("Y-m-d "); echo $tanggal; ?></td>
<tr><td> Time : <td><input type="text" name="waktu"> </td></tr>
<tr><td><font color="#000000"> </font></td>
<table border="3">
<tr><td>NO</td><td>Peralatan</td><td>status</td><td>catatan</td></tr>
<tr><td><font color="#000000"> </td><td>
SHIFT <td><font color="#000000"><input type="radio" name="shift" value="PAGI" checked="PAGI">PAGI <input type="radio" name="shift" value="SIANG" checked="SIANG">SIANG <font color="#000000"> <input type="radio" name="shift" value="MALAM" checked="MALAM">MALAM </td><td><textarea name="catatan" rows="5"></textarea>

<tr><td><font color="#000000">1.</td><td> ATC SYSTEM </td></tr>
<tr><td>1.1</td><td> Komputer Server </td></tr>

<tr><td><font color="#000000">1.1.1</td><td> Server FDP 1 & 2  <td><font color="#000000"><input type="radio" name="serverfdp" value="NOT OK">NOT OK<input type="radio" name="serverfdp" value="OK" checked="OK"> OK
</td></tr>

<tr><td><font color="#000000">1.1.2</td><td> Server SDP 1 & 2  <td><font color="#000000"><input type="radio" name="serversdp" value="NOT OK" >NOT OK<input type="radio" name="serversdp" value="OK" checked="OK"> OK
</td></tr>


<tr><td><font color="#000000">1.1.3</td><td> Server FDP RBP 1 & 2  <td><font color="#000000"><input type="radio" name="serverfdprb" value="NOT OK">NOT OK<input type="radio" name="serverfdprb" value="OK" checked="OK"> OK
</td></tr>

<tr><td><font color="#000000">1.1.4</td><td> Recording & Playback System  <td><font color="#000000"><input type="radio" name="recorder" value="NOT OK">NOT OK<input type="radio" name="recorder" value="OK" checked="OK"> OK
</td></tr>

<tr><td>1.2</td><td> Komputer Client </td></tr>
<tr><td><font color="#000000">1.2.1</td><td> ASD-1 Director  <td><font color="#000000"><input type="radio" name="asd1" value="NOT OK">NOT OK<input type="radio" name="asd1" value="OK" checked="OK"> OK
</td></tr>


<tr><td><font color="#000000">1.2.2</td><td> ASD-2 West Sector  <td><font color="#000000"><input type="radio" name="asd2" value="NOT OK">NOT OK<input type="radio" name="asd2" value="OK"checked="OK" > OK
</td></tr>

<tr><td><font color="#000000">1.2.3</td><td>ASD-3 East Sector  <td><font color="#000000"><input type="radio" name="asd3" value="NOT OK">NOT OK<input type="radio" name="asd3" value="OK" checked="OK" > OK
</td></tr>

<tr><td><font color="#000000">1.2.4</td><td>ASD-4 Supervisor FIR  <td><font color="#000000"><input type="radio" name="asd4" value="NOT OK" >NOT OK<input type="radio" name="asd4" value="OK" checked="OK"> OK
</td></tr>

<tr><td><font color="#000000">1.2.5</td><td>ASD-5 Tower  <td><font color="#000000"><input type="radio" name="asd5" value="NOT OK" >NOT OK<input type="radio" name="asd5" value="OK" checked="OK"> OK
</td></tr>

<tr><td><font color="#000000">1.2.6</td><td>ASD-6 Supervisor VFR  <td><font color="#000000"><input type="radio" name="asd6" value="NOT OK" >NOT OK<input type="radio" name="asd6" value="OK" checked="OK"> OK
</td></tr>

<tr><td><font color="#000000">1.2.7</td><td>ASD-7 MCC<td><font color="#000000"><input type="radio" name="asd7" value="NOT OK">NOT OK<input type="radio" name="asd7" value="OK" checked="OK"> OK</td></tr>


<tr><td><font color="#000000">1.2.8</td><td>FDD-1 Director  <td><font color="#000000"><input type="radio" name="fdd1" value="NOT OK" >NOT OK<input type="radio" name="fdd1" value="OK" checked="OK"> OK
</td></tr>

<tr><td><font color="#000000">1.2.9</td><td>FDD-2 West Sector <td><font color="#000000"><input type="radio" name="fdd2" value="NOT OK" >NOT OK<input type="radio" name="fdd2" value="OK" checked="OK" > OK</td></tr>

<tr><td><font color="#000000">1.2.10</td><td>FDD-3 East Sector<td><font color="#000000"><input type="radio" name="fdd3" value="NOT OK">NOT OK<input type="radio" name="fdd3" value="OK" checked="OK"> OK</td></tr>
<tr><td><font color="#000000">1.2.11</td><td>ASD-4 FDO  <td><font color="#000000"><input type="radio" name="asd4fdo" value="NOT OK">NOT OK<input type="radio" name="asd4fdo" value="OK" checked="OK"> OK</td></tr>

<tr><td><font color="#000000">1.2.12</td><td>FDD-5 Tower <td><font color="#000000"><input type="radio" name="fdd5" value="NOT OK" >NOT OK<input type="radio" name="fdd5" value="OK" checked="OK"> OK</td></tr>

<tr><td><font color="#000000">1.2.13</td><td>FDD-6 Briefing Office  <td><font color="#000000"><input type="radio" name="fdd6" value="NOT OK" >NOT OK<input type="radio" name="fdd6" value="OK" checked="OK"> OK</td></tr>

<tr><td><font color="#000000">1.2.14</td><td> Data Spesialis  <td><font color="#000000"><input type="radio" name="dataspesial" value="NOT OK" >NOT OK<input type="radio" name="dataspesial" value="OK" checked="OK"> OK
</td></tr>

<tr><td><font color="#000000">1.2.15</td><td>SMC <td><font color="#000000"><input type="radio" name="smc" value="NOT OK" ">NOT OK<input type="radio" name="smc" value="OK" checked="OK"> OK</td></tr>

<tr><td><font color="#000000">1.2.16</td><td>Playback System <td><font color="#000000"><input type="radio" name="playback" value="NOT OK ">NOT OK<input type="radio" name="playback" value="OK" checked="OK"> OK</td></tr>

<tr><td><font color="#000000">2</td><td>ASMGCS <td><font color="#000000"><input type="radio" name="asmgcs" value="NOT OK">NOT OK<input type="radio" name="asmgcs" value="OK" checked="OK"> OK</td></tr>

<tr><td><font color="#000000"> Personil on Duty :<textarea name="nama" rows="5"></textarea><td><font color="#000000"> Suhu ruangan :<input type="text" name="suhu" ></textarea>
<tr><td><input type="submit" value="Simpan"><input type="reset" value="Reset"><br></td></tr>
</body>
</html>

<table border="3" bordercolordark="#000000"><table class="table1">
	
</table>