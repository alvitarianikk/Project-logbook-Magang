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
    <li><a href="karyawanlogin.php" style="text-decoration:none"><font color="#FFFFFF">Log book peralatan</a></li>
	    <li><a href="logbookcnsa.php" style="text-decoration:none"><font color="#FFFFFF">Log book CNSA</a></li>
         <li><a href="logout.php" style="text-decoration:none"><font color="#FFFFFF">Log out</a></li></font>
     <li><a href="../tryagain/form_simpan.php" style="text-decoration:none"><font color="#FFFFFF">Dokumentasi</a></li>
	</ul></font></font>
	<center>
<form action="tambahkomunikasi.php" method="post">
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
CHECK :<td><font color="#000000"><input type="radio" name="shift" value="PAGI" checked="PAGI">PAGI<input type="radio" name="shift" value="SIANG" checked="SIANG">SIANG <input type="radio" name="shift" value="MALAM" checked="MALAM">MALAM </td>

<tr><td><font color="#000000">1.</td><td  bgcolor="#FFFF00"> Peralatan VHF Main </td></tr>
<tr><td>1.1</td><td> Vhf Ground </td></tr>

<tr><td><font color="#000000">1.1.1</td><td> Primary Freq. 118.9 Mhz :<td><font color="#000000"><input type="radio" name="maingroundprimar" value="NOT OK">NOT OK<input type="radio" name="maingroundprimar" value="OK" checked="OK"> OK</td><td><textarea name="catatan" rows="5"></textarea>
</td></tr>

<tr><td><font color="#000000">1.1.2</td><td> Secondary Freq. 119.15 Mhz:<td><font color="#000000"><input type="radio" name="maingroundsecon" value="NOT OK" >NOT OK<input type="radio" name="maingroundsecon" value="OK" checked="OK"> OK
</td></tr>

<tr><td>1.2</td><td> Vhf ADC </td></tr>

<tr><td><font color="#000000">1.2.1</td><td> Primary Freq. 118.3 Mhz :<td><font color="#000000"><input type="radio" name="mainadcprimar" value="NOT OK">NOT OK<input type="radio" name="mainadcprimar" value="OK" checked="OK"> OK
</td></tr>

<tr><td><font color="#000000">1.2.2</td><td> Secondary Freq. 118.1 Mhz :<td><font color="#000000"><input type="radio" name="mainadcsecond" value="NOT OK">NOT OK<input type="radio" name="mainadcsecond" value="OK" checked="OK"> OK
</td></tr>

<tr><td>1.3</td><td> Vhf APP Director</td></tr>

<tr><td><font color="#000000">1.3.1</td><td> Primary Freq. 123.2 Mhz :<td><font color="#000000"><input type="radio" name="mainappprimar" value="NOT OK">NOT OK<input type="radio" name="mainappprimar" value="OK" checked="OK"> OK
</td></tr>

<tr><td><font color="#000000">1.3.2</td><td> Secondary Freq. 124.5 Mhz:<td><font color="#000000"><input type="radio" name="mainappsecond" value="NOT OK">NOT OK<input type="radio" name="mainappsecond" value="OK" checked="OK"> OK
</td></tr>

<tr><td>1.4</td><td> Vhf APP West</td></tr>

<tr><td><font color="#000000">1.4.1</td><td> Primary Freq. 125.1 Mhz:<td><font color="#000000"><input type="radio" name="appwestprimar" value="NOT OK">NOT OK<input type="radio" name="appwestprimar" value="OK" checked="OK"> OK
</td></tr>

<tr><td><font color="#000000">1.4.2</td><td>Secondary Freq. 123.55 Mhz:<td><font color="#000000"><input type="radio" name="appwestsecond" value="NOT OK">NOT OK<input type="radio" name="appwestsecond" value="OK" checked="OK"> OK
</td></tr>

<tr><td>1.5</td><td> Vhf APP East</td></tr>

<tr><td><font color="#000000">1.5.1</td><td> Primary Freq. 124.0 Mhz:<td><font color="#000000"><input type="radio" name="appeastprimar" value="NOT OK">NOT OK<input type="radio" name="appeastprimar" value="OK" checked="OK"> OK
</td></tr>

<tr><td><font color="#000000">1.5.2</td><td>Secondary Freq. 122.85 Mhz:<td><font color="#000000"><input type="radio" name="appeastsecond" value="NOT OK">NOT OK<input type="radio" name="appeastsecond" value="OK" checked="OK"> OK
</td></tr>

<tr><td>1.6</td><td> Vhf - ER Makasar</td></tr>

<tr><td><font color="#000000">1.6.1</td><td> Primary Freq. 123.9 Mhz :<td><font color="#000000"><input type="radio" name="erprimar" value="NOT OK">NOT OK<input type="radio" name="erprimar" value="OK" checked="OK"> OK
</td></tr>

<tr><td><font color="#000000">1.6.2</td><td>Secondary Freq. 125.9 Mhz	:<td><font color="#000000"><input type="radio" name="ersecond" value="NOT OK">NOT OK<input type="radio" name="ersecond" value="OK" checked="OK"> OK
</td></tr>

<tr><td><font color="#000000">1.7</td><td>Vhf  Atis Freq. 128.2 Mhz:<td><font color="#000000"><input type="radio" name="atis" value="NOT OK">NOT OK<input type="radio" name="atis" value="OK" checked="OK"> OK
</td></tr>

<tr><td><font color="#000000">1.8</td><td>Vhf Emergency  Freq. 121.5 Mhz:<td><font color="#000000"><input type="radio" name="emergency" value="NOT OK">NOT OK<input type="radio" name="emergency" value="OK" checked="OK"> OK
</td></tr>

<tr><td>2</td><td> Peralatan VHF Backup</td></tr>
<tr><td>2.1</td><td>Vhf Ground</td></tr>
<tr><td><font color="#000000">2.1.1</td><td>Primary Freq. 118.9 Mhz:<td><font color="#000000"><input type="radio" name="groundprimar" value="NOT OK">NOT OK<input type="radio" name="groundprimar" value="OK" checked="OK"> OK
</td></tr>

<tr><td><font color="#000000">2.1.2</td><td>Secondary Freq. 119.15 Mhz:<td><font color="#000000"><input type="radio" name="groundsecond" value="NOT OK">NOT OK<input type="radio" name="groundsecond" value="OK" checked="OK"> OK
</td></tr>

<tr><td>2.2</td><td>Vhf ADC</td></tr>
<tr><td><font color="#000000">2.2.1</td><td>Primary Freq. 118.3 Mhz:<td><font color="#000000"><input type="radio" name="adcprimar" value="NOT OK">NOT OK<input type="radio" name="adcprimar" value="OK" checked="OK"> OK
</td></tr>

<tr><td><font color="#000000">2.2.2</td><td>Secondary Freq. 118.1 Mhz:<td><font color="#000000"><input type="radio" name="adcsecond" value="NOT OK">NOT OK<input type="radio" name="adcsecond" value="OK" checked="OK"> OK
</td></tr>

<tr><td>2.3</td><td>Vhf APP Director</td></tr>
<tr><td><font color="#000000">2.3.1</td><td>Primary Freq. 123.2 Mhz:<td><font color="#000000"><input type="radio" name="appdirector" value="NOT OK">NOT OK<input type="radio" name="appdirector" value="OK" checked="OK"> OK
</td></tr>

<tr><td>2.4</td><td>Vhf APP West</td></tr>
<tr><td><font color="#000000">2.4.1</td><td>Primary Freq. 125.1 Mhz:<td><font color="#000000"><input type="radio" name="appwest" value="NOT OK">NOT OK<input type="radio" name="appwest" value="OK" checked="OK"> OK
</td></tr>

<tr><td>2.5</td><td>Vhf APP East</td></tr>
<tr><td><font color="#000000">2.5.1</td><td>Primary Freq. 124.0 Mhz:<td><font color="#000000"><input type="radio" name="appeast" value="NOT OK">NOT OK<input type="radio" name="appeast" value="OK" checked="OK"> OK
</td></tr>


<tr><td>3</td><td>VOICE RECORDING</td></tr>
<tr><td><font color="#000000">3.1</td><td>Server Recorder A:<td><font color="#000000"><input type="radio" name="servera" value="NOT OK">NOT OK<input type="radio" name="servera" value="OK" checked="OK"> OK
</td></tr>
<tr><td><font color="#000000">3.2</td><td>Server Recorder B:<td><font color="#000000"><input type="radio" name="serverb" value="NOT OK">NOT OK<input type="radio" name="serverb" value="OK" checked="OK"> OK
</td></tr>
<tr><td><font color="#000000">3.3</td><td>PC Recorder Playback:<td><font color="#000000"><input type="radio" name="pcrecorder" value="NOT OK">NOT OK<input type="radio" name="pcrecorder" value="OK" checked="OK"> OK
</td></tr>
<tr><td><font color="#000000">3.4</td><td>Ntp Server & Gps:<td><font color="#000000"><input type="radio" name="ntpserver" value="NOT OK">NOT OK<input type="radio" name="ntpserver" value="OK" checked="OK"> OK
</td></tr>

<tr><td>4</td><td>REPRODUCER ATIS</td></tr>
<tr><td><font color="#000000">4.1</td><td>Server Recorder A:<td><font color="#000000"><input type="radio" name="atisa" value="NOT OK">NOT OK<input type="radio" name="atisa" value="OK" checked="OK"> OK
</td></tr>
<tr><td><font color="#000000">4.2</td><td>Server Recorder B:<td><font color="#000000"><input type="radio" name="atisb" value="NOT OK">NOT OK<input type="radio" name="atisb" value="OK" checked="OK"> OK
</td></tr>
<tr><td><font color="#000000">4.3</td><td>PC Client Operator:<td><font color="#000000"><input type="radio" name="atisclient" value="NOT OK">NOT OK<input type="radio" name="atisclient" value="OK" checked="OK"> OK
</td></tr>

<tr><td>5</td><td>AMSC</td></tr>
<tr><td><font color="#000000">5.1</td><td>Server Amsc A:<td><font color="#000000"><input type="radio" name="amsca" value="NOT OK">NOT OK<input type="radio" name="amsca" value="OK" checked="OK"> OK
</td></tr>

<tr><td><font color="#000000">5.2</td><td>Server Amsc B:<td><font color="#000000"><input type="radio" name="amscb" value="NOT OK">NOT OK<input type="radio" name="amscb" value="OK" checked="OK"> OK
</td></tr>

<tr><td><font color="#000000">5.3</td><td>Control & Spv console A:<td><font color="#000000"><input type="radio" name="controla" value="NOT OK">NOT OK<input type="radio" name="controla" value="OK" checked="OK"> OK
</td></tr>
<tr><td><font color="#000000">5.4</td><td>Control & Spv console B:<td><font color="#000000"><input type="radio" name="controlb" value="NOT OK">NOT OK<input type="radio" name="controlb" value="OK" checked="OK"> OK
</td></tr>
<tr><td><font color="#000000">5.5</td><td>Komputer ADPS	:<td><font color="#000000"><input type="radio" name="adps" value="NOT OK">NOT OK<input type="radio" name="adps" value="OK" checked="OK"> OK
</td></tr>
<tr><td>5.6</td><td>AFTN TELEPRINTER</td></tr>
<tr><td><font color="#000000">5.6.1</td><td>BO 1 WARRZPZE:<td><font color="#000000"><input type="radio" name="bo1warr" value="NOT OK">NOT OK<input type="radio" name="bo1warr" value="OK" checked="OK"> OK
</td></tr>
<tr><td><font color="#000000">5.6.2</td><td>BO 2 WARRYOYX:<td><font color="#000000"><input type="radio" name="bo2warr" value="NOT OK">NOT OK<input type="radio" name="bo2warr" value="OK" checked="OK"> OK
</td></tr>
<tr><td><font color="#000000">5.6.3</td><td>METEO 1 WARRYMYF:<td><font color="#000000"><input type="radio" name="meteo1" value="NOT OK">NOT OK<input type="radio" name="meteo1" value="OK" checked="OK"> OK
</td></tr>
<tr><td><font color="#000000">5.6.4</td><td>METEO 2 WARRYMYO:<td><font color="#000000"><input type="radio" name="meteo2" value="NOT OK">NOT OK<input type="radio" name="meteo2" value="OK" checked="OK"> OK
</td></tr>
<tr><td><font color="#000000">5.6.5</td><td>APP WARRZAZ:<td><font color="#000000"><input type="radio" name="appwarr" value="NOT OK">NOT OK<input type="radio" name="appwarr" value="OK" checked="OK"> OK
</td></tr>
<tr><td><font color="#000000">5.6.6</td><td>ADC WARRZTZ	:<td><font color="#000000"><input type="radio" name="adcwarr" value="NOT OK">NOT OK<input type="radio" name="adcwarr" value="OK" checked="OK"> OK
</td></tr>
<tr><td><font color="#000000">5.6.7</td><td>INFORMASI WARRYIYX:<td><font color="#000000"><input type="radio" name="infowarr" value="NOT OK">NOT OK<input type="radio" name="infowarr" value="OK" checked="OK"> OK
</td></tr>

<tr><td>6</td><td>VCCS</td></tr>
<tr><td><font color="#000000">6.1</td><td>Main Processing Unit	:<td><font color="#000000"><input type="radio" name="mainprocess" value="NOT OK">NOT OK<input type="radio" name="mainprocess" value="OK" checked="OK"> OK
</td></tr>
<tr><td><font color="#000000">6.2</td><td>RCMS:<td><font color="#000000"><input type="radio" name="rcms" value="NOT OK">NOT OK<input type="radio" name="rcms" value="OK" checked="OK"> OK
</td></tr>

<tr><td>6.3</td><td>VCU</td></tr>
<tr><td><font color="#000000">6.3.1</td><td>VCU1 Twr:<td><font color="#000000"><input type="radio" name="vcu1" value="NOT OK">NOT OK<input type="radio" name="vcu1" value="OK" checked="OK"> OK
</td></tr>
<tr><td><font color="#000000">6.3.2</td><td>VCU2 Twr Ass:<td><font color="#000000"><input type="radio" name="vcu2" value="NOT OK">NOT OK<input type="radio" name="vcu2" value="OK" checked="OK"> OK
</td></tr>
<tr><td><font color="#000000">6.3.3</td><td>VCU3 Gnd:<td><font color="#000000"><input type="radio" name="vcu3" value="NOT OK">NOT OK<input type="radio" name="vcu3" value="OK" checked="OK"> OK
</td></tr>

<tr><td><font color="#000000">6.3.4</td><td>VCU4 East Ass:<td><font color="#000000"><input type="radio" name="vcu4" value="NOT OK">NOT OK<input type="radio" name="vcu4" value="OK" checked="OK"> OK
</td></tr>
<tr><td><font color="#000000">6.3.5</td><td>VCU5 TMA East:<td><font color="#000000"><input type="radio" name="vcu5" value="NOT OK">NOT OK<input type="radio" name="vcu5" value="OK" checked="OK"> OK
</td></tr>
<tr><td><font color="#000000">6.3.6</td><td>VCU6 West Ass:<td><font color="#000000"><input type="radio" name="vcu6" value="NOT OK">NOT OK<input type="radio" name="vcu6" value="OK" checked="OK"> OK
</td></tr>
<tr><td><font color="#000000">6.3.7</td><td>VCU7 TMA West:<td><font color="#000000"><input type="radio" name="vcu7" value="NOT OK">NOT OK<input type="radio" name="vcu7" value="OK" checked="OK"> OK
</td></tr>
<tr><td><font color="#000000">6.3.8</td><td>VCU8 Dir Ass:<td><font color="#000000"><input type="radio" name="vcu8" value="NOT OK">NOT OK<input type="radio" name="vcu8" value="OK" checked="OK"> OK
</td></tr>
<tr><td><font color="#000000">6.3.9</td><td>VCU9 TMA Dir:<td><font color="#000000"><input type="radio" name="vcu9" value="NOT OK">NOT OK<input type="radio" name="vcu9" value="OK" checked="OK"> OK
</td></tr>
<tr><td><font color="#000000">6.3.10</td><td>VCU10 Spv App:<td><font color="#000000"><input type="radio" name="vcu10" value="NOT OK">NOT OK<input type="radio" name="vcu10" value="OK" checked="OK"> OK
</td></tr>
<tr><td><font color="#000000">6.3.11</td><td>VCU11 Comm:<td><font color="#000000"><input type="radio" name="vcu11" value="NOT OK">NOT OK<input type="radio" name="vcu11" value="OK" checked="OK"> OK
</td></tr>
<tr><td><font color="#000000">6.3.12</td><td>VCU12 Equipment Room:<td><font color="#000000"><input type="radio" name="vcu12" value="NOT OK">NOT OK<input type="radio" name="vcu12" value="OK" checked="OK"> OK
</td></tr>

<tr><td><font color="#000000"> Personil on Duty :<textarea name="nama" rows="5"></textarea><td><font color="#000000"> Suhu ruangan :<input type="text" name="suhu" ></textarea>
<tr><td><input type="submit" value="Simpan"><input type="reset" value="Reset"><br></td></tr>
</body>
</html>
	<table border="3" bordercolordark="#000000"><table class="table1">
</table>
