$message = "";
$message = checkIfEmpty($_POST["missionNumber"]);
$message = checkIfEmpty($_POST["date"]);
$message = checkIfEmpty($_POST["callSign"]);
$message = checkIfEmpty($_POST["engineOn"]);
$message = checkIfEmpty($_POST["engineOff"]);
$message = checkIfEmpty($_POST["offBlock"]);
$message = checkIfEmpty($_POST["onBlock"]);
$message = checkIfEmpty($_POST["takeOffTime"]);
$message = checkIfEmpty($_POST["landTime"]);
$message = checkIfEmpty($_POST["etd"]);
$message = checkIfEmpty($_POST["eta"]);
$message = checkIfEmpty($_POST["streamOn"]);
$message = checkIfEmpty($_POST["streamOff"]);
$message = checkIfEmpty($_POST["taskSpecialist"]);
$message = checkIfEmpty($_POST["pilotName"]);
$message = checkIfEmpty($_POST["trackLength"]);
$message = checkIfEmpty($_POST["opsBox"]);
$message = checkIfEmpty($_POST["aimsID"]);
$message = checkIfEmpty($_POST["weather"]);

$missionNumberErr = "";
$dateErr = "";
$callSignErr = "";
$engineOnErr = "";
$engineOffErr = "";
$offBlockErr = "";
$onBlockErr = "";
$takeOffTimeErr = "";
$landTimeErr = "";
$etdErr = "";
$etaErr = "";
$streamOnErr = "";
$streamOffErr = "";
$taskSpecialistErr = "";
$pilotNameErr = "";
$trackLengthErr = "";
$opsBoxErr = "";
$aimsIDErr = "";
$weatherErr = "";

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
	$msnTime = $_POST['msnTime'];
	$taskSpecialist = $_POST["taskSpecialist"];
	$pilotName = $_POST["pilotName"];
	$trackLength = $_POST["trackLength"];
	$opsBox = $_POST["opsBox"];
	$aimsID = $_POST["aimsID"];
	$weather = $_POST["weather"];