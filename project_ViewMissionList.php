<!DOCTYPE html>
<?php
include 'project_sqllogin.php';
session_start();
$_POST['counter'] = $_SESSION['counter'];

$missionNumber = "";
$date = "";
$callSign = "";

$missionNumber = $_SESSION['missionNumber'];
$date = $_SESSION['date'];
 $callSign = $_SESSION['callSign'];

?>

<html lang="en">

	<style>
	table, th, td {
		border: 1px solid black;
		border-collapse: collapse;
	}
	</style>
	
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
    <header class="masthead" style="background-image: url('img/contact-bg.jpg')">
      <div class="overlay"></div>
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-10 mx-auto">
            <div class="page-heading">
              <h1>View Missions</h1>
              <span class="subheading">This is where all of your current missions are stored.</span>
            </div>
          </div>
        </div>
      </div>
    </header>
	
	
	
    <!-- Main Content -->
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
		
				<?php
				$link = "project_ViewParticularMission.php";
				$query = "SELECT `missionNumber`, `date`, `callSign` FROM `mission_table`";
				$result = mysqli_query($con, $query);
				//$row = mysqli_fetch_array($result);
				echo "<table width='600' cellpadding='1' cellspacing='1' border'1'>";
				
				echo 
					"<tr><td>Mission Number</td>
					<td>Date</td>
					<td>Call Sign</td>
					<td>Link</td></tr>";
					
				while($row = mysqli_fetch_array($result)){	
					echo "<tr><td>".$row[0]."</td>";
					echo "<td>".$row[1]."</td> ";
					echo "<td>".$row[2]."</td>";	
					echo "<td><a href='".$link."'>View Mission</a></td></tr>";
				}
				echo "</table>";				
				?>
			
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
