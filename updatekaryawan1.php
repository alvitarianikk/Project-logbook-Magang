<?php
include 'koneksi1.php';
$id         = $_GET['id'];
$logbook  = mysqli_query($koneksi, "select * from logbook where id='$id'");
$row        = mysqli_fetch_array($logbook);
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Update Data</title>
    </head>
    <body>
	<form method="post" action="updatekaryawan2.php">
	
 <input type="hidden" value="<?php echo $row['id'];?>" name="id">
<table>

<tr><td><font color="#000000">Damage Date</td><td>:</td><td><input type="text" name="tanggal" size="15" maxlength="50" value="<?php echo $row['tanggal'];?>"></td>
<td><select name="bulan" value="<?php echo $row['bulan'];?>">
<option value="January">January</option>
<option value="February">February</option>
<option value="March">March</option>
<option value="April">April</option>
<option value="May">May</option>
<option value="June">June</option>
<option value="July">July</option>
<option value="August">August</option>
<option value="September">September</option>
<option value="October">October</option>
<option value="November">November</option>
<option value="December">December</option></td>
</select>
<td><font color="#000000">Year : <input type="text" name="tahun" size="15" maxlength="50" value="<?php echo $row['tahun'];?>">
</tr>
<tr><td><font color="#000000">Damage Time</td><td>:</td><td><input type="text" name="waktuindo" size="35" maxlength="50" value="<?php echo $row['waktuindo'];?>"></td></tr>

<tr><td><font color="#000000">Normal Date</td><td>:</td><td><input type="text" name="tanggalnormal" size="35" maxlength="50" value="<?php echo $row['tanggalnormal'];?>"></td></tr>
<tr><td><font color="#000000">Normal Time</td><td>:</td><td><input type="text" name="waktuus" size="35" maxlength="50" value="<?php echo $row['waktuus'];?>"></td></tr>
<tr><td><font color="#000000">Name</td><td>:</td><td><input type="text" name="nama" size="35" maxlength="50" value=""<?php echo $row['nama'];?>""></td></tr>
<tr><td><font color="#000000">Facility</td><td>:</td><td><select name="fasilitas" value="<?php echo $row['fasilitas'];?>">
<option value="Communication">Communication</option>
<option value="Navigation">Navigation</option>
<option value="Surveillance">Surveillance</option>
<option value="Automation">Automation</option></tr></td></select>
<tr><td><font color="#000000">Equipment</td><td>:</td><td><input type="text" name="peralatan" size="35" maxlength="50" value="<?php echo $row['peralatan'];?>"></td></tr>
<tr><td><font color="#000000">Merk Type</td><td>:</td><td><input type="text" name="merk" size="35" maxlength="50" value="<?php echo $row['merk'];?>"></td></tr>
<tr><td><font color="#000000">Parts of Equipment</td><td>:</td><td><textarea name="bagianalat" rows="5" cols="30" value="<?php echo $row['bagianalat'];?>"></textarea></tr></td>
<tr><td><font color="#000000">Description</td><td>:</td><td><textarea name="detailrusak" rows="5" cols="30" value="<?php echo $row['detailrusak'];?>"></textarea></tr></td>
<tr><td><font color="#000000">Repair</td><td>:</td><td><textarea name="perbaikan" rows="5" cols="30" value="<?php echo $row['perbaikan'];?>"></textarea></td></tr>

<tr><td><font color="#000000">Status</td><td>:</td><td><input type="hidden" value="<?php echo $row['status'];?>" name="status"></td></tr></p>
                <tr><td colspan="2"><button type="submit" value="simpan">SIMPAN PERUBAHAN</button></td></tr>
                     
            </table>
        </form>
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

	
	
    </body>
</html>
