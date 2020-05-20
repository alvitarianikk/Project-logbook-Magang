<head>
<marquee align="right" bgcolor="#000000">WELCOME TO PENGISIAN LOGBOOK </marquee></head></font>
<center><font color="#FFFFFF" size="+1" style="background-color:#000000">
        <?php session_start();
if(!isset($_SESSION['username'])) {
header('location:login.php'); }
else { $username = $_SESSION['username']; }


require_once("koneksi.php");
$query = mysql_query("SELECT * FROM login WHERE username = '$username'");
$hasil = mysql_fetch_array($query);
?>
<link rel="stylesheet" type="text/css" href="style.css">
<!doctype html>
<body>
<body bgcolor="#88C5F7">
<head>
<link rel="stylesheet" type="text/css" href="style.css">
<!doctype html>
<html>
<title>Welcome to AirNav</title>
<head>

<body><!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>CNSA Surabaya</title>
<link rel="canoncial shortcut icon" href="img/lowongan kerja bumn.png" />

<!-- Bootstrap -->
<link rel="stylesheet" href="css/bootstrap.css">
<link href="css/custom.css" rel="stylesheet">
<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
<link rel="stylesheet" type="text/css" href="style.css">
    
</head>
<body>
<nav class="navbar navbar-default">
  <div class="container-fluid"> 
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
      <a class="navbar-brand" >Airnav Surabaya</a> </div>
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="index.html">Home <span class="sr-only">(current)</span></a> </li>
        <li><a href="logout.php">Logout</a> </li>
      </ul>
      </form>
      <ul class="nav navbar-nav navbar-right">
        <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Data CNSA <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="dataalat.php">Data Peralatan</a> </li>
            <li><a href="karyawanlogin.php">Logbook Peralatan</a> </li>
            <li class="divider"></li>
            <li><a href="dokumentasi.php">Dokumentasi CNSA</a> </li>
          </ul>
        </li>
      </ul>
    </div>
    <!-- /.navbar-collapse --> 
  </div>
  <!-- /.container-fluid --> 
</nav>

<!-- HEADER -->
<header>
  <div class="jumbotron">
    <div class="container">
      <div class="row">
        <div class="col-xs-12">
          <p>&nbsp;</p>
        </div>
      </div>
    </div>
  </div><table>
<tr><td> <a href="dataalat.php">Komunikasi</a><br></td>
<td><a href="navigasi.php">Navigasi</a></td><br>
<td><a href="surv.php">Surveillance</a></td><br>
<td><a href="oto.php">Automation</a></td><br></tr></table>
</header>
<!-- / HEADER --> 
       <table>
	   <table border="3" class="table1">

    <tr><td align="left">NOMOR</td><td>NAMA PERALATAN</td><td>FASILITAS</td>
	   <tr><td>1 </td><td> RADAR </td><td>Surveillance</td>
	   <tr><td>1.1 </td><td> PSR</td><td>Surveillance</td>
	   <tr><td>1.2 </td><td> MSSR </td><td>Surveillance</td>
	   <tr><td>1.2.1 </td><td> RMM 1&2 </td><td>Surveillance</td>
	   <tr><td>1.2.2 </td><td> LCMS 1&2 </td><td>Surveillance</td>
	   	   <tr><td>1.2.3 </td><td> SMP 1&2 </td><td>Surveillance</td>
		   	   <tr><td>1.2.4 </td><td> RDP 1&2  </td><td>Surveillance</td>
   <tr><td>2 </td><td> ADSB </td><td>Surveillance</td>
	   </div>
    </div>
  </div>
</footer>
<!-- / FOOTER --> 

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
<script src="js/jquery.js"></script> 
<!-- Include all compiled plugins (below), or include individual files as needed --> 
<script src="js/bootstrap.js"></script>
</section>
</body>
    
</body>
</html>