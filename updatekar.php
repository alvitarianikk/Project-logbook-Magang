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
        <form method="post" action="update.php">
            <input type="hidden" value="<?php echo $row['id'];?>" name="id">
            <table>
			<tr><td>Tanggal :</td><td> <?php $tanggal=date('d-m-Y'); echo $tanggal;
 ?></td></tr>
<tr><td>Waktu indo:</td><td><input type="text" value="<?php echo $row['waktuindo'];?>" name="waktuindo"></td></tr>
<tr><td>Waktu us:</td><td><input type="text" value="<?php echo $row['waktuus'];?>" name="waktuus"></td></tr>
<tr><td>Nama :</td><td><input type="text" value="<?php echo $row['nama'];?>" name="nama"></td></tr>
<tr><td>Fasilitas :</td><td><input type="text" value="<?php echo $row['fasilitas'];?>" name="fasilitas"></td></tr>
<tr><td>Peralatan :</td><td><input type="text" value="<?php echo $row['peralatan'];?>" name="peralatan"></td></tr>
<tr><td>Merk :</td><td><input type="text" value="<?php echo $row['merk'];?>" name="merk"></td></tr>
<tr><td>Bagian Peralatan :</td><td><textarea name="bagianalat" value="<?php echo $row['bagianalat'];?>" name="bagianalat"></textarea>
<tr><td>Detail Kerusakan:</td><td><textarea name="detailrusak" value="<?php echo $row['detailrusak'];?>" name="detailrusak"></textarea>
<tr><td>Perbaikan :</td><td><textarea name="perbaikan" value="<?php echo $row['perbaikan'];?>" name="perbaikan"></textarea>

                <tr><td colspan="2"><button type="submit" value="simpan">SIMPAN PERUBAHAN</button></td></tr>
                     
            </table>
        </form>
    </body>
</html>
