<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<title>Untitled Document</title>
</head>
<body>
<?php
session_start();
$password = $_POST['password'];
$username = $_POST['username'];
$kon = mysql_connect("localhost","root","") or die ("Account anda belum terdaftar");
mysql_select_db("login",$kon) or die ("db error");
$query="SELECT * FROM login WHERE username='$username' AND password='$password'";
$hasil = mysql_query($query,$kon) or die ("query error");
if (mysql_num_rows($hasil) == 1)
{
header('Location:home.php');
$_SESSION['username']=$username;
$_SESSION['password']=$password;
exit;
}
else
echo "Account tidak terdaftar";
?>
</body>
</html>
