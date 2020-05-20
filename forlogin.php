<?php session_start();
if(isset($_SESSION['username'])) {
header('location:home.php'); }
?>
<center>
 
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>login CNSA Surabaya</title>
<link rel="canoncial shortcut icon" href="img/lowongan kerja bumn.png" />
<link href="css/login.css" rel="stylesheet">
</head>
<body>
	
    	<div class="forminput">
<form action="proseslogin.php" method="post">
<link rel="canoncial shortcut icon" href="img/lowongan kerja bumn.png" />
<link href="css/login.css" rel="stylesheet">
</head>
<body>
	<div class="container">
	<img src="img/login-user-icon.png">
	<form>
    	<div class="forminput">
        	<input type="text" name="username" placeholder="    masukan username">
        </div>
        <div class="forminput">
        	<input type="password" name="password" placeholder="    masukan password">
        </div>
 
<tr>
<td colspan="2" align="right"><input type="submit" value="login" /> <input type="reset" value="Batal" /></td>
</tr>

</tr>
</tbody>
</table>
</form>
</center>
        	
</div>
</center>
</body>
</html>
