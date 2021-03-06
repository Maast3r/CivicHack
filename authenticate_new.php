<?php
session_start();

// Make sure all information is entered
if(!isset($_POST['clientfirstname'], $_POST['clientlastname'], $_POST['clientSSN'])){
	$message = "Please enter a valid first name, a valid last name, and a valid social security number.";
}

// MySQL info
$hostname = 'localhost';
$username = 'root'; // Jeremiah, replace this with your MySQL username
$password = ''; // Jeremiah, replace this with your MySQL password
$db_name = 'fssa mock_data'; // Jeremiah, replace this with the name of the database

// Connect to the MySQL database
$con = mysqli_connect($hostname, $username, $password) or die("Could not log into server.");
mysqli_select_db($con, $db_name) or die("Could not connect to database.");

// Sanitize each of the input fields, we don't want hackers
$first_name = mysqli_real_escape_string($con, $_POST['clientfirstname']);
$last_name = mysqli_real_escape_string($con, $_POST['clientfirstname']);
$address = mysqli_real_escape_string($con, $_POST['address']);
$zip = mysqli_real_escape_string($con, $_POST['zipcode']);
$ssn = mysqli_real_escape_string($con, $_POST['clientSSN']);
$medicaid = mysqli_real_escape_string($con, $_POST['medicaid']);
$reason = mysqli_real_escape_string($con, $_POST['reason']);
$date = date('Y/m/d');

// Query the database to add user info
$sql =  "CALL `ADD_USER`(\"".$address."\", \"".$first_name."\", \"".$last_name."\", \"".$zip."\",\"".$ssn."\",\"".$medicaid."\")";
$query = mysqli_query($con, $sql) or die(mysqli_error($con));

// Success!
echo "New user added.  This page will redirect in five seconds.";
$_SESSION['ssn'] = $ssn;
header("Location: dashboard.php");
mysqli_close($con);

?>