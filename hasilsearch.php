<html>
<head>
<title> Koneksi Database PHP-MySQL </title>
</head>
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
    <li><a href="sejarah.php" style="text-decoration:none"><font color="#FFFFFF">Sejarah peralatan</a></li>
    <li><a href="dataalat.php" style="text-decoration:none"><font color="#FFFFFF">Suku Cadang</a></li>
    <li><a href="karyawanlogin.php" style="text-decoration:none"><font color="#FFFFFF">Isi Log book</a></li>
         <li><a href="logout.php" style="text-decoration:none"><font color="#FFFFFF">Log out</a></li></font>
    </ul>
<table>

<body>
	<center><img src="kaca.png" width="20" height="30"> <font color="#000000">Hasil Pencarian logbook <img src="kaca.png" width="20" height="30">
<table class="table1">
    <tr style="background:#FFFF00"><th width="10" height="5">Damage Date</th><th>Damage Time </th><th>Normal Date</th><th>Normal Time</th><th>Name</th><th>Facilities</th><th>Equipments</th><th>Merk</th><th>Parts of Equipment</th><th>Description</th><th>Repair</th><th>status</th></tr>
</font>

	<?php
		$kolom=$_POST['kolom'];
		$cari=$_POST['cari'];
		$conn=mysql_connect("localhost","root","");
		mysql_select_db("logbook",$conn);
		$hasil = mysql_query("select * from logbook where $kolom like '%$cari%' ORDER BY id DESC, status DESC",$conn);
		$jumlah = mysql_num_rows($hasil);
		echo "<br>";
		echo "Ditemukan: $jumlah";
		echo "<br>";
		while ($row=mysql_fetch_array($hasil))
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