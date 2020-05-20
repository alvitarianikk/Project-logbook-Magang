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
        <li class="active"><a href="home.php">Home <span class="sr-only">(current)</span></a> </li>
        <li><a href="logout.php">Logout</a> </li>
      </ul>
      
      </form>
      <ul class="nav navbar-nav navbar-right">
        <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Data CNSA <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="dataalat.php">Data Peralatan</a> </li>
            <li><a href="karyawanlogin.php">Logbook Peralatan</a> </li>
            <li><a href="logbookcnsa.php">Logbook CNSA</a> </li>
            <li class="divider"></li>
            <li><a href="../tryagain/form_simpan.php">Dokumentasi CNSA</a> </li>
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
  </div>
</header>
<!-- / HEADER --> 

<!--  SECTION-1 -->
<section>
<div class="coba">
  <div class="row">
    <div class="col-lg-12 page-header text-center">
    </div>
  </div>
  <div class="container">
        </div>
        <div class="row">
            <div class="col-sm-6 col-md-4 col-lg-3 text-center ">
                <div class="section"></div><img class="img-circle" alt="90x90" style="width: 90px; height: 90px;" src="img/menara-atc1.jpg" data-holder-rendered="true"><br>
        <a href="comm.php" style="text-decoration:none">Communication<?php $conn=mysql_connect("localhost","root","");
		mysql_select_db("logbook",$conn);
		$hasil = mysql_query("select * from logbook where fasilitas= 'communication' and status='not Resolved'",$conn);
		$jumlah = mysql_num_rows($hasil);
		echo "<br>";
		echo "Found: $jumlah warning";	?></a>
            </div>
      <div class="col-sm-6 col-md-4 col-lg-3 text-center"><img class="img-circle" alt="90x90" style="width: 90px; height: 90px;" src="img/dvor.png" data-holder-rendered="true"><br>
         
		        <div class="section bg-alt"></div>
         
       <a href="navigasi.php" style="text-decoration:none">Navigation<?php $conn=mysql_connect("localhost","root","");
		mysql_select_db("logbook",$conn);
		$hasil = mysql_query("select * from logbook where fasilitas= 'navigation' and status='not Resolved'",$conn);
		$jumlah = mysql_num_rows($hasil);
		echo "<br>";
		echo "Found: $jumlah warning";	?></a>
            </div>
			
			
            <div class="col-sm-6 col-md-4 col-lg-3 text-center">
                <div class="section"></div><img class="img-circle" alt="90x90" style="width: 90px; height: 90px;" src="img/radarpng_29zVU.PNG" data-holder-rendered="true"><br>
<a href="surveillance.php" style="text-decoration:none">Surveillance<?php $conn=mysql_connect("localhost","root","");
		mysql_select_db("logbook",$conn);
		$hasil = mysql_query("select * from logbook where fasilitas= 'surveillance' and status='not Resolved'",$conn);
		$jumlah = mysql_num_rows($hasil);
		echo "<br>";
		echo "Found: $jumlah warning";	?></a>


          </div>
            <div class="col-sm-6 col-md-4 col-lg-3 text-center">
            <div class="section bg-alt"></div><img class="img-circle" alt="90x90" style="width: 90px; height: 90px;" src="img/riga-itwp-a-smgcs-screenshot.jpg" data-holder-rendered="true"><br>
          <a href="auto.php" style="text-decoration:none">Otomation<?php $conn=mysql_connect("localhost","root","");
		mysql_select_db("logbook",$conn);
		$hasil = mysql_query("select * from logbook where fasilitas= 'automation' and status='not Resolved'",$conn);
		$jumlah = mysql_num_rows($hasil);
		echo "<br>";
		echo "Found: $jumlah warning";	?></a>
				
				
				
        </div>       
        <div class="row">
            <div class="col-sm-12">
                <div class="footer"></div>
            </div>
        </div>
    </div>  
  <div class="jumbotron">
    <div class="container">
      <div class="row">
        </div>
        <div class=" text-center col-sm-6 col-lg-3 col-sm-offset-3 col-md-3 col-xs-offset-4 col-xs-5 col-lg-offset-0"> 

      </div>
    </div>
  </div>
  <!-- / CONTAINER--> 
  <section>
</section>
<div class="well"> </div>

<!-- FOOTER -->
<footer class="text-center">
  <div class="container">
    <div class="row">
      <div class="col-xs-12">
        <p>Copyright © CNSA SURABAYA. All rights reserved.</p>
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