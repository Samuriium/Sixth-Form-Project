<!DOCTYPE html>
<?php
session_start();
include 'project_sqllogin.php';


$takeOffTime = "";
$landTime = "";
$_SESSION['counter'] = 0;

// Works out the mission duration 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	
	$missionNumber = $_POST['missionNumber'];
	$date = $_POST['date'];
	$callSign = $_POST['callSign'];
	$engineOn = $_POST['engineOn'];
	$engineOff = $_POST['engineOff'];
	$offBlock = $_POST['offBlock'];
	$onBlock = $_POST['onBlock'];
	$takeOffTime = $_POST['takeOffTime'];
	$landTime = $_POST['landTime'];
	$etd = $_POST['etd'];
	$eta = $_POST['eta'];
	$streamOn = $_POST['streamOn'];
	$streamOff = $_POST['streamOff'];
	$msnTime = $landTime - $takeOffTime;
	$taskSpecialist = $_POST["taskSpecialist"];
	$pilotName = $_POST["pilotName"];
	$trackLength = $_POST["trackLength"];
	$opsBox = $_POST["opsBox"];
	$aimsID = $_POST["aimsID"];
	$weather = $_POST["weather"];

	// checkIfEmpty();

	$sql = "INSERT INTO `mission_table` (`missionNumber`, `date`, `callSign`, `engineOn`, 
	`engineOff`, `offBlock`, `onBlock`, `takeOffTime`, `landTime`, `etd`, `eta`, `streamOn`, 
	`streamOff`, `msnTime`, `taskSpecialist`, `pilotName`, `trackLength`, `opsBox`, `aimsID`, `weather`) VALUES
	('".$missionNumber."', '".$date."', '".$callSign."', '".$engineOn."', '".$engineOff."', '".$offBlock."', '".$onBlock."', '".$takeOffTime."', 
	'".$landTime."', '".$etd."', '".$eta."', '".$streamOn."', '".$streamOff."', '".$msnTime."', '".$taskSpecialist."', '".$pilotName."', '".$trackLength."', 
	'".$opsBox."', '".$aimsID."', '".$weather."')";
	
	if(mysqli_query($con, $sql)){
		echo "Mission has been logged";
	}
	else{
		echo "Error";
	}
	
	// Setting SESSION variables so they can be used in different pages.
	$_SESSION['counter']++;
	$_SESSION['missionNumber'] = $missionNumber;
	$_SESSION['date'] = $date;
	$_SESSION['callSign'] = $callSign;
	
	// Redirect user to different page once they have submitted the data.
	if(isset($_POST['submit'])){
		header('location: project_ViewMissionList.php');
	}
	
}


?>

<html lang="en">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Mission Log Tracker - Set Mission Data</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

    <!-- Custom styles for this template -->
    <link href="css/clean-blog.min.css" rel="stylesheet">
	
	<style>
  	.button {	
    background-color: #e7e7e7; color: black;
    border: none;
    color: white;
    padding: 12px 28px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
	}
	</style>


  </head>

  <body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand" href="project_HomePage.php">Mission Log Tracker</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="project_HomePage.php">Back</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Page Header -->
    <header class="masthead" style="background-image: url('img/about-bg.jpg')">
      <div class="overlay"></div>
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-10 mx-auto">
            <div class="page-heading">
              <h1>Set Mission Data</h1>
              <span class="subheading">Please fill out the form.</span>
            </div>
          </div>
        </div>
      </div>
    </header>

    <!-- Main Content -->
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
			<form action="project_SetData.php" target="_self" method="post">
					Mission Number:<br><input type="int" name="missionNumber"><br>
					<label for="date">Date:</label><br><input id="meeting" type="date" name="date"/><br>
					Call Sign:<br><input type="text" name="callSign"><br>
					Engine On:<br><input type="time" name="engineOn"><br>
					Engine Off:<br><input type="time" name="engineOff"><br>
					Off Block:<br><input type="time" name="offBlock"><br>
					On Block:<br><input type="time" name="onBlock"><br>
					Time of Takeoff:<br><input type="time" name="takeOffTime"><br>
					Time of Land:<br><input type="time" name="landTime"><br>					
					ETD:<br><input type="time" name="etd"><br>
					ETA:<br><input type="time" name="eta"><br>
					Stream On:<br><input type="time" name="streamOn"><br>
					Stream Off:<br><input type="time" name="streamOff"><br>					
					Task Specialist:<br><input type="text" name="taskSpecialist"><br>	
					Pilot Name:<br><input type="text" name="pilotName"><br>	
					Track Length:<br><input type="int" name="trackLength"><br>	
					Ops Box:<br><input type="text" name="opsBox"><br>
					Aims ID:<br><input type="text" name="aimsID"><br>	
					Weather:<br><input type="text" name="weather"><br>					
					<br><input type="submit" name="submit" value="Submit"><br>
			</form>
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/clean-blog.min.js"></script>

  </body>

</html>
