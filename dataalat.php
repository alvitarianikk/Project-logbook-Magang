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
  <table>
<tr><td> <a href="dataalat.php">Komunikasi</a><br></td>
<td><a href="navigasi.php">Navigasi</a></td><br>
<td><a href="surv.php">Surveillance</a></td><br>
<td><a href="oto.php">Automation</a></td><br></tr></table>

</header>
<!-- / HEADER --> 
       <table>
	   <table border="3" class="table1">
    <tr><td align="left">NOMOR</td><td>NAMA PERALATAN</td><td>FASILITAS</td>
	   <tr><td>1 </td><td> Peralatan VHF Main </td><td>Communication</td>
	   <tr><td>1.1 </td><td> VHF GROUND </td><td>Communication</td>
	   <tr><td>1.1.1</td><td> Primary Frequency 118.9 MHz</td><td>Communication</td>
	   <tr><td>1.1.1 </td><td> Secondary Frequency 119.15 MHz </td><td>Communication</td>
	   <tr><td>1.2 </td><td> VHF ADC </td><td>Communication</td>
	   <tr><td>1.2.1</td><td> Primary Frequency 118.3 MHz</td><td>Communication</td>
	   <tr><td>1.2.2 </td><td> Secondary Frequency 118.1 MHz </td><td>Communication</td>
	   <tr><td>1.3 </td><td> VHF APP Director </td><td>Communication</td>
	   <tr><td>1.3.1</td><td> Primary Frequency 123.2 MHz</td><td>Communication</td>
	   <tr><td>1.3.2 </td><td> Secondary Frequency 124.5 MHz </td><td>Communication</td>
	   <tr><td>1.4 </td><td> VHF APP WEST </td><td>Communication</td>
	   <tr><td>1.4.1</td><td> Primary Frequency 125.1 MHz</td><td>Communication</td>
	   <tr><td>1.4.2 </td><td> Secondary Frequency 123.5 MHz </td><td>Communication</td>
	    <tr><td>1.4 </td><td> VHF APP EAST </td><td>Communication</td>
	   <tr><td>1.4.1</td><td> Primary Frequency 124.0 MHz</td><td>Communication</td>
	   <tr><td>1.4.2 </td><td> Secondary Frequency 122.85 MHz </td><td>Communication</td>
	    <tr><td>1.5 </td><td> VHF -ER Makasar </td><td>Communication</td>
	   <tr><td>1.5.1</td><td> Primary Frequency 123.9 MHz</td><td>Communication</td>
	   <tr><td>1.5.2 </td><td> Secondary Frequency 125.9 MHz </td><td>Communication</td>
	    <tr><td>1.6</td><td> VHF Atis Frequency 128.2 MHz </td><td>Communication</td>
	   <tr><td>1.7</td><td> VHF Emergency Frequency 121.5 MHz</td><td>Communication</td><tr><td></td><td></td><td></td>
	</td><tr><td></td><td></td><td></td>   
	   </tr>				
<tr><td>2</td><td> Peralatan VHF Backup</td><td>Communication</td>	
<tr><td>2.1</td><td> VHF GROUND </td><td>Communication</td>
<tr><td>2.1.1</td><td> Primary Frequency 118.9 MHz</td><td>Communication</td>
<tr><td>2.1.2 </td><td> Secondary Frequency 119.15 MHz </td><td>Communication</td>     
<tr><td>2.2</td><td> VHF ADC </td><td>Communication</td>
<tr><td>2.2.1</td><td> Primary Frequency 118.3 MHz</td><td>Communication</td>
<tr><td>2.2.2 </td><td> Secondary Frequency 118.1 MHz </td><td>Communication</td><tr>
<td>2.3</td><td> VHF APP Director </td><td>Communication</td>
<tr><td>2.3.1</td><td> Primary Frequency 123.2 MHz</td><td>Communication</td>
        
<tr><td>2.3</td><td> VHF APP West </td><td>Communication</td></tr>
<tr><td>2.3.1</td><td> Primary Frequency 125.1 MHz</td><td>Communication</td></tr>
	   
	   
<tr><td>2.3</td><td> VHF APP East </td><td>Communication</td>
<tr><td>2.3.1</td><td> Primary Frequency 124.0 MHz</td><td>Communication</td>
</td><tr><td></td><td></td><td></td>
	</td><tr><td></td><td></td><td></td> 
	<tr><td>3</td><td> VOICE RECORDING </td><td>Communication</td></tr>
		<tr><td>3.1</td><td>Server Recorder A</td><td>Communication</td></tr>
			<tr><td>3.2</td><td> Server Recorder B </td><td>Communication</td></tr>
				<tr><td>3.3</td><td> PC Recorder Playback </td><td>Communication</td></tr>
		<tr><td>3.4</td><td> NTP Server & GPS </td><td>Communication</td></tr>
	</td><tr><td></td><td></td><td></td>
	</td><tr><td></td><td></td><td></td> 
	<tr><td>4</td><td> REPRODUCER ATIS </td><td>Communication</td></tr>
<tr><td>4.1</td><td>Server Recorder A </td><td>Communication</td></tr>
<tr><td>4.2</td><td> Server Recorder B</td><td>Communication</td></tr>
<tr><td>4.3</td><td> PC Client Operator</td><td>Communication</td></tr>
</td><tr><td></td><td></td><td></td>
	</td><tr><td></td><td></td><td></td> 
	<tr><td>5</td><td> AMSC </td><td>Communication</td></tr>
<tr><td>5.1</td><td>Server Amsc A </td><td>Communication</td></tr>
<tr><td>5.2</td><td> Server Amsc B</td><td>Communication</td></tr>
<tr><td>5.3</td><td> Control & Spv console A</td><td>Communication</td></tr>
<tr><td>5.4</td><td> Control & Spv console B</td><td>Communication</td></tr>
<tr><td>5.5</td><td> Komputer ADPS</td><td>Communication</td></tr>
<tr><td>5.6</td><td> AFTN Teleprinter</td><td>Communication</td></tr>
<tr><td>5.6.1</td><td> BO 1 WARRZPZE</td><td>Communication</td></tr>
<tr><td>5.6.2</td><td> BO 2 WARRYOYX</td><td>Communication</td></tr>
<tr><td>5.6.3</td><td> METEO 1 WARRYMYF</td><td>Communication</td></tr>
<tr><td>5.6.4</td><td>METEO 2 WARRYMYO</td><td>Communication</td></tr>
<tr><td>5.6.5</td><td>APP WARRZAZ</td><td>Communication</td></tr>
<tr><td>5.6.6</td><td> ADC WARRZTZ</td><td>Communication</td></tr>
<tr><td>5.6.7</td><td> INFORMASI WARRYIYX</td><td>Communication</td></tr>

<tr><td>6</td><td>VCCS </td><td>Communication</td></tr>
<tr><td>6.1</td><td>Main Processing Unit </td><td>Communication</td></tr>
<tr><td>6.2</td><td>RCMS </td><td>Communication</td></tr>
<tr><td>6.3</td><td>VCU</td><td>Communication</td></tr>
<tr><td>6.3.1</td><td>VCU1 TWR</td><td>Communication</td></tr>
<tr><td>6.3.2</td><td>VCU2 Twr Ass</td><td>Communication</td></tr>
<tr><td>6.3.3</td><td>VCU3 GND</td><td>Communication</td></tr>
<tr><td>6.3.4</td><td>VCU4 East Ass</td><td>Communication</td></tr>
<tr><td>6.3.5</td><td>VCU5 TMA East</td><td>Communication</td></tr>
<tr><td>6.3.6</td><td>VCU6 West Ass</td><td>Communication</td></tr>
<tr><td>6.3.7</td><td>VCU7 TMA West</td><td>Communication</td></tr>
<tr><td>6.3.8</td><td>VCU8 Dir Ass</td><td>Communication</td></tr>
<tr><td>6.3.9</td><td>VCU9 TMA Dir</td><td>Communication</td></tr>
<tr><td>6.3.10</td><td>VCU10 Spv App</td><td>Communication</td></tr>
<tr><td>6.3.11</td><td>VCU11 Spv App</td><td>Communication</td></tr>
<tr><td>6.3.12</td><td>VCU12 Spv App</td><td>Communication</td></tr>

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