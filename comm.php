<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>
<!doctype html>
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
    .gaya1{background-color:coral; border:2px dotted red; text-indent:40px}
    .gaya2{background-color: coral; border:2px solid black; padding:20px 15px}
    #gaya3{background-color: coral;border:2px dotted violet}
    #gaya4{background-color: coral; border:2px solid black; padding:7px 5px position: absolute; top : 2cm; left: 10px;  margin: 0.5em; padding: 0.3em; border-right: 1 em solid black}
    ul.navbar{list-style-type: none; width: 6cm; position: absolute; top : 2cm; left: 10px}
    ul.navbar li {height: 40px; padding: 8px 6px;}
    ul.navbar li {background: blue; margin: 0.5em; padding: 0.3em; border-right: 1 em solid black}
    ul.navbar li:hover{background-color:cyan;}
</style>    
    </head>
<body>
    <ul class="navbar">
    <li><a href="home.php" style="text-decoration:none"><font color="#FFFFFF">Home</a></li>
    <li><a href="sejarah.php" style="text-decoration:none"><font color="#FFFFFF">Sejarah peralatan</a></li>>
    <li><a href="#" style="text-decoration:none"><font color="#FFFFFF">Suku Cadang</a></li>
    <li><a href="karyawanlogin.php" style="text-decoration:none"><font color="#FFFFFF">Isi Log book</a></li>
         <li><a href="logout.php" style="text-decoration:none"><font color="#FFFFFF">Log out</a></li></font>
    </ul>
<body>
<table border="1">
<table border="3" bordercolordark="#000000"><table class="table1">

    <tr style="background:#FFFF00"><th>Damage Date</th><th> Damage Time </th><th>Normal Date</th><th>Normal Time</th><th>Name</th><th>Facilities</th><th>Equipments</th><th>Merk</th><th>Parts of Equipment</th><th>Description</th><th>Repair</th><th>status</th></tr>
</font>
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
		$conn=mysql_connect("localhost","root","");
		mysql_select_db("logbook",$conn);
		$hasil = mysql_query("select * from logbook where fasilitas= 'communication' and status='not Resolved'",$conn);
		$jumlah = mysql_num_rows($hasil);
		echo "<br>";
		echo "$jumlah warning";
		echo "<br>";
		while ($row=mysql_fetch_array($hasil) )
		{
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
					 <td>".$row['status']."</td>
					 <td><a href='updatekaryawan1.php?id=$row[id]'>Edit</a>
                <a href='deletekar.php?id=$row[id]'>Delete</a>
            </td>
              </tr>";   

    }
	?>
	</table>
</body>
</html> 
</body>
</html>
