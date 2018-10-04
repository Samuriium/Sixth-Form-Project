<?php

	$host = "localhost";
	$username = "username";
	$password = "password";
	$dbname = "component3project";

	// Create connection
	$con = mysqli_connect($host, $username, $password, $dbname);
	// Check connection

	if (!$con) {
		die("Connection failed: " . $con->connect_error);
	} 

// Function to check whether each of the fields have been entered. 
function checkIfEmpty (){
	for ($i = 0; $i <= 18; $i++) {
		if ($VarArray[$i] == "") {
			$blank = True;
		}	
		else {
			$blank = False;
		}		
		return $blank;
	}
}
/*

	// Misson Number validation 
  if (empty($_POST["missionNumber"])) {
    $missionNumberErr = "Mission number is required";
  } else {
    $missionNumber = $_POST["missionNumber"];
  }
	
	// Date validation
  if (empty($_POST["date"])) {
    $dateErr = "Date is required";
  } else {
    $date = $_POST["date"];
  }
   
	// Call Sign validation
  if (empty($_POST["callSign"])) {
    $callSignErr = "Call Sign is required";
  } else {
    $callSign = $_POST["callSign"];
  }
  
	// Engine on validation
  if (empty($_POST["engineOn"])) {
    $engineOnErr = "Engine On is required";
  } else {
    $engineOn = $_POST["engineOn"];
  }
  
	// Engine off validation
  if (empty($_POST["engineOff"])) {
    $engineOffErr = "Engine Off is required";
  } else {
    $engineOff = $_POST["engineOff"];
  }

	// Off block validation
  if (empty($_POST["offBlock"])) {
    $offBlockErr = "Off Block is required";
  } else {
    $offBlock = $_POST["offBlock"];
  }
  
	// On block validation
  if (empty($_POST["onBlock"])) {
    $onBlockErr = "On Block is required";
  } else {
    $onBlock = $_POST["onBlock"];
  }

	// Take off validation
  if (empty($_POST["takeOffTime"])) {
    $takeOffTimeErr = "Time of Takeoff is required";
  } else {
    $takeOffTime = $_POST["takeOffTime"];
  }
  
	// Land validation
  if (empty($_POST["landTime"])) {
    $landTimeErr = "Time of Land is required";
  } else {
    $landTime = $_POST["landTime"];
  }

	// ETD validation
  if (empty($_POST["etd"])) {
    $etdErr = "ETD is required";
  } else {
    $etd = $_POST["etd"];
  }
  
  // ETA validation
  if (empty($_POST["eta"])) {
    $etaErr = "ETA is required";
  } else {
    $eta = $_POST["eta"];
  }
  
	// Stream on validation
  if (empty($_POST["streamOn"])) {
    $streamOnErr = "Stream On is required";
  } else {
    $streamOn = $_POST["streamOn"];
  }

	// Stream off validation
  if (empty($_POST["streamOff"])) {
    $streamOffErr = "Stream Off is required";
  } else {
    $streamOff = $_POST["streamOff"];
  }
  
	// Task specialist validation
  if (empty($_POST["taskSpecialist"])) {
    $taskSpecialistErr = "Task Specialist is required";
  } else {
    $taskSpecialist = $_POST["taskSpecialist"];
  }

	// Pilot Name validation
  if (empty($_POST["pilotName"])) {
    $pilotNameErr = "Pliot Name is required";
  } else {
    $pilotName = $_POST["pilotName"];
  }
  
	// Track length validation
  if (empty($_POST["trackLength"])) {
    $trackLengthErr = "Track Length is required";
  } else {
    $trackLength = $_POST["trackLength"];
  }

	// Ops box validation
  if (empty($_POST["opsBox"])) {
    $opsBoxErr = "Ops Box is required";
  } else {
    $opsBox = $_POST["opsBox"];
  }
  
  // Aims ID validation
  if (empty($_POST["aimsID"])) {
    $aimsIDErr = "Aims ID is required";
  } else {
    $aimsID = $_POST["aimsID"];
  }

	// Weather validation
  if (empty($_POST["weather"])) {
    $weatherErr = "Weather is required";
  } else {
    $weather = $_POST["weather"];
  }
}

*/
?>

