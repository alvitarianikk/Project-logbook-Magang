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
<form action="tambahkomunikasi.php" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
<table>
<?php
$tanggal= date("Y-m-d ");
$waktu= $_POST["waktu"];
$catatan=$_POST["catatan"];
$suhu=$_POST["suhu"];
$nama=$_POST["nama"];
$maingroundprimar= $_POST["maingroundprimar"];
$maingroundsecon= $_POST["maingroundsecon"];
$mainadcprimar= $_POST["mainadcprimar"];
$mainadcsecond= $_POST["mainadcsecond"];
$mainappprimar= $_POST["mainappprimar"];
$mainappsecond= $_POST["mainappsecond"];
$appwestprimar= $_POST["appwestprimar"];
$appwestsecond= $_POST["appwestsecond"];
$appeastprimar= $_POST["appeastprimar"];
$appeastsecond= $_POST["appeastsecond"];
$erprimar= $_POST["erprimar"];
$ersecond= $_POST["ersecond"];
$atis= $_POST["atis"];
$emergency= $_POST["emergency"];
$groundprimar= $_POST["groundprimar"];
$groundsecond= $_POST["groundsecond"];
$adcprimar= $_POST["adcprimar"];
$adcsecond= $_POST["adcsecond"];
$appdirector= $_POST["appdirector"];
$appwest= $_POST["appwest"];
$appeast= $_POST["appeast"];
$servera= $_POST["servera"];
$serverb= $_POST["serverb"];
$pcrecorder= $_POST["pcrecorder"];
$ntpserver= $_POST["ntpserver"];
$atisa= $_POST["atisa"];
$atisb= $_POST["atisb"];
$atisclient= $_POST["atisclient"];
$amsca= $_POST["amsca"];
$amscb= $_POST["amscb"];
$controla= $_POST["controla"];
$controlb= $_POST["controlb"];
$adps= $_POST["adps"];
$bo1warr= $_POST["bo1warr"];
$bo2warr= $_POST["bo2warr"];
$meteo1= $_POST["meteo1"];
$meteo2= $_POST["meteo2"];
$appwarr= $_POST["appwarr"];
$adcwarr= $_POST["adcwarr"];
$infowarr= $_POST["infowarr"];
$mainprocess= $_POST["mainprocess"];
$rcms= $_POST["rcms"];
$vcu1= $_POST["vcu1"];
$vcu2= $_POST["vcu2"];
$vcu3= $_POST["vcu3"];
$vcu4= $_POST["vcu4"];
$vcu5= $_POST["vcu5"];
$vcu6= $_POST["vcu6"];
$vcu7= $_POST["vcu7"];
$vcu8= $_POST["vcu8"];
$vcu9= $_POST["vcu9"];
$vcu10= $_POST["vcu10"];
$vcu11= $_POST["vcu11"];
$vcu12 = $_POST["vcu12"];
$shift = $_POST["shift"];
?>
<?php
$conn=mysql_connect ("localhost","root","")
or die ("koneksi gagal");
mysql_select_db ("logbookcnsa",$conn);
$sqlstr="insert into komunikasi(id,tanggal,waktu,catatan,suhu,nama,shift,maingroundprimar,maingroundsecon,mainadcprimar,mainadcsecond,mainappprimar,mainappsecond,appwestprimar,appwestsecond,appeastprimar,appeastsecond,erprimar,ersecond,atis,emergency,groundprimar,groundsecond,adcprimar,adcsecond,appdirector,appwest,appeast,servera,serverb,pcrecorder,ntpserver,atisa,atisb,atisclient,amsca,amscb,controla,controlb,adps,bo1warr,bo2warr,meteo1,meteo2,appwarr,adcwarr,infowarr,mainprocess,rcms,vcu1,vcu2,vcu3,vcu4,vcu5,vcu6,vcu7,vcu8,vcu9,vcu10,vcu11,vcu12) values ('','$tanggal','$waktu','$catatan','$suhu','$nama','$shift','$maingroundprimar','$maingroundsecon','$mainadcprimar','$mainadcsecond','$mainappprimar','$mainappsecond','$appwestprimar','$appwestsecond','$appeastprimar','$appeastsecond','$erprimar','$ersecond','$atis','$emergency','$groundprimar','$groundsecond','$adcprimar','$adcsecond','$appdirector','$appwest','$appeast','$servera','$serverb','$pcrecorder','$ntpserver','$atisa','$atisb','$atisclient','$amsca','$amscb','$controla','$controlb','$adps','$bo1warr','$bo2warr','$meteo1','$meteo2','$appwarr','$adcwarr','$infowarr','$mainprocess','$rcms','$vcu1','$vcu2','$vcu3','$vcu4','$vcu5','$vcu6','$vcu7','$vcu8','$vcu9','$vcu10','$vcu11','$vcu12')";
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
	<table>
	<tr><th width="10" height="5">tanggal</th><th>waktu</th><th>catatan</th><th>suhu</th><th>nama</th><th> Shift </th><th>Vhf Ground	<br >Primary Freq. 118.9 Mhz</th><th>Secondary Freq. 119.15 Mhz	</th><th>Vhf ADC<br>Primary Freq. 118.3 Mhz	</th><th>Secondary Freq. 118.1 Mhz	
</th><th>Vhf APP Director<br >Primary Freq. 123.2 Mhz	</th><th>
Secondary Freq. 124.5 Mhz	
</th><th>Vhf APP West<br>		
Primary Freq. 125.1 Mhz	</th><th>
Secondary Freq. 123.55 Mhz	</th><th>
Vhf APP East<br >		
Primary Freq. 124.0 Mhz	</th><th>
Secondary Freq. 122.85 Mhz	
</th><th>Vhf - ER Makasar<br>		
Primary Freq. 123.9 Mhz	</th><th>
Secondary Freq. 125.9 Mhz</th><th>
Vhf  Atis Freq. 128.2 Mhz		</th><th>
Vhf Emergency  Freq. 121.5 Mhz		</th>

<th>2	Peralatan VHF Backup.	<br>		
Vhf Ground		<br >
Primary Freq. 118.9 Mhz	</th><th>
Secondary Freq. 119.15 Mhz	</th><th>
Vhf ADC		<br>
Primary Freq. 118.3 Mhz</th><th>	
Secondary Freq. 118.1 Mhz	</th><th>
Vhf APP Director<br>		
Primary Freq. 123.2 Mhz	</th><th>
Vhf APP West		<br>
Primary Freq. 125.1 Mhz	</th><th>
Vhf APP East		<br>
Primary Freq. 124.0 Mhz	</th>
<th>
3	VOICE RECORDING	<br>		
Server Recorder A		</th><th>
Server Recorder B		</th><th>
PC Recorder Playback		</th><th>
Ntp Server & Gps		</th>
<th>
4	REPRODUCER ATIS<br><th>			
Server Recorder A		</th><th>
Server Recorder B		</th><th>
PC Client Operator		</th><th>

5	AMSC			<br>
Server Amsc A		</th><th>
Server Amsc B		</th><th>
Control & Spv console A		</th><th>
Control & Spv console B		</th><th>
Komputer ADPS		</th><th>
AFTN Teleprinter		</th><th>
BO 1 WARRZPZE	</th><th>
BO 2 WARRYOYX	</th><th>
METEO 1 WARRYMYF	</th><th>
METEO 2 WARRYMYO	</th><th>
APP WARRZAZ	</th><th>
ADC WARRZTZ	</th><th>
INFORMASI WARRYIYX	</th><th>

6	VCCS			<br>
Main Processing Unit	</th>	<th>
RCMS		</th><th>
VCU		<br>
VCU1 Twr	</th><th>
VCU2 Twr Ass	</th><th>
VCU3 Gnd	</th><th>
VCU4 East Ass	</th><th>
VCU5 TMA East	</th><th>
VCU6 West Ass	</th><th>
VCU7 TMA West	</th><th>
VCU8 Dir Ass	</th><th>
VCU9 TMA Dir	</th><th>
VCU10 Spv App	</th><th>
VCU11 Comm	</th><th>
VCU12 Equipmnet Room</th><th>	

	<?php
    include 'koneksilog.php';
    $logbookcnsa = mysqli_query($koneksi, "SELECT * from komunikasi ORDER BY  id DESC");
    foreach ($logbookcnsa as $row){
        echo "<tr>
            <td>".$row['tanggal']."</td>
			<td>".$row['waktu']."</td>
            <td>".$row['catatan']."</td>
			               <td>".$row['suhu']."</td>        
						       <td>".$row['nama']."</td>
			<td>".$row['shift']."</td>
			<td>".$row['maingroundprimar']."</td>
			<td>".$row['maingroundsecon']."</td>
            <td>".$row['mainadcprimar']."</td>
			  <td>".$row['mainadcsecond']."</td>
              <td>".$row['mainappprimar']."</td>
			<td>".$row['mainappsecond']."</td>
			<td>".$row['appwestprimar']."</td>
			<td>".$row['appwestsecond']."</td>
 			<td>".$row['appeastprimar']."</td>
			<td>".$row['appeastsecond']."</td>  
			<td>".$row['erprimar']."</td>
			<td>".$row['ersecond']."</td>
			<td>".$row['atis']."</td>           
           <td>".$row['emergency']."</td>  
		   <td>".$row['groundprimar']."</td>
		   <td>".$row['groundsecond']."</td>
           <td>".$row['adcprimar']."</td>  
		   <td>".$row['adcsecond']."</td>
		   <td>".$row['appdirector']."</td>
		   <td>".$row['appwest']."</td>
		   <td>".$row['appeast']."</td>
		    <td>".$row['servera']."</td>
			 <td>".$row['serverb']."</td>
			  <td>".$row['pcrecorder']."</td>
			   <td>".$row['ntpserver']."</td>
			  <td>".$row['atisa']."</td>
			   <td>".$row['atisb']."</td>
			  <td>".$row['amsca']."</td>
			   <td>".$row['amscb']."</td>
 				<td>".$row['controla']."</td>
			   <td>".$row['controlb']."</td>
			   <td>".$row['adps']."</td>
			   <td>".$row['bo1warr']."</td>
 				<td>".$row['bo2warr']."</td>
			   <td>".$row['meteo1']."</td>
			   <td>".$row['meteo2']."</td>
			   <td>".$row['appwarr']."</td>
			   <td>".$row['adcwarr']."</td>
			   <td>".$row['infowarr']."</td>
			   <td>".$row['mainprocess']."</td>
			  <td>".$row['rcms']."</td>
			   <td>".$row['vcu1']."</td>
<td>".$row['vcu2']."</td>
<td>".$row['vcu3']."</td>
<td>".$row['vcu4']."</td>
<td>".$row['vcu5']."</td>
<td>".$row['vcu6']."</td>
<td>".$row['vcu7']."</td>
<td>".$row['vcu8']."</td>
<td>".$row['vcu9']."</td>
<td>".$row['vcu10']."</td>
<td>".$row['vcu11']."</td>
<td>".$row['vcu12']."</td>
 <td>
              <a href='deletekar.php?id=$row[id]'>Delete</a> </td>  </tr>"; 
		   
    }
    ?>

</table></body>
</html>





