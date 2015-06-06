<?php
// Start session
session_start();

// MySQL info
$hostname = 'localhost';
$username = 'root'; // Jeremiah, replace this with your MySQL username
$password = ''; // Jeremiah, replace this with your MySQL password
$db_name = 'fssa mock_data'; // Jeremiah, replace this with the name of the database

// Connect to the MySQL database
$con = mysqli_connect($hostname, $username, $password) or die("Could not log into server.");
mysqli_select_db($con, $db_name) or die("Could not connect to database.");

date_default_timezone_set('America/New_York'); 

$reasons = implode(',', $_POST['need']);
$date = date('Y-m-d');
$time = date('H:i:s');

$medi_sql = "CALL `GET_MEDICAID_NUMBER`(\"".$_SESSION['ssn']."\")";
$medi_query = mysqli_query($con, $medi_sql) or die(mysqli_error($con));
$m;
while($medicaid = mysqli_fetch_array($medi_query)) {
	$m = $medicaid[0];
} 
mysqli_close($con);
$con = mysqli_connect($hostname, $username, $password) or die("Could not log into server.");
mysqli_select_db($con, $db_name) or die("Could not connect to database.");
// Query the database to add date and time of visit
$sql_date =  "CALL `ADD_VISIT`(\"".$_SESSION['ssn']."\", \"".$m."\", \"".$reasons."\", \"".$date."\",\"".$time."\")";
$query_date = mysqli_query($con, $sql_date) or die(mysqli_error($con));

?>

<!DOCTYPE html>

<html>
	<head>
		<title>Homepage</title>
		<meta charset="utf-8" />
		<link
			href="http://s3.amazonaws.com/codecademy-content/courses/ltp/css/shift.css"
			rel="stylesheet">
		<link rel="stylesheet"
			href="http://s3.amazonaws.com/codecademy-content/courses/ltp/css/bootstrap.css">
		<link
			href="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css"
			rel="stylesheet">
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400;300'
			rel='stylesheet' type='text/css'>
		<link href="homepage.css" type="text/css" rel="stylesheet" />
	</head>
	
	<body>
		<span class="inputField"><span class="inputFieldName">
			<?php if(in_array("interview", $_POST['need'])){ ?>
			<h2>Please take a seat and wait for your name to be called.</h2></span>
		<span class="inputField"><span class="inputFieldName">
			<?php }if(in_array("question", $_POST['need'])){ ?>
			<h2>Please take a seat and wait for your name to be called.</h2></span>
		<span class="inputField"><span class="inputFieldName">
			<?php }if(in_array("benefits", $_POST['need'])){ ?>
			<h2>Please go to the kiosk with the Benefits sign.</h2></span>
		<span class="inputField"><span class="inputFieldName">
			<?php }if(in_array("documents", $_POST['need'])){ ?>
			<h2>Please go to the kiosk with the Documents sign.</h2></span>
		<?php } ?>
		<br/>
		<span id="button_block"> 
			<button type="button" id='new_form' onclick="Javascript:window.location.href = 'logout.php';">Logout</button> 
		</span>
	</body>
</html>