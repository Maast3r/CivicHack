<?php
session_start();

// Make sure SSN or RID is entered
if(!isset($_POST['clientSSN']) && !isset($_POST['clientRID'])){
	echo 'A social security number or RID is required to log in.';
	exit();
}

if(isset($_POST['firstname']) || isset($_POST['lastname']) || isset($_POST['ssn'])){
	if(!(isset($_POST['firstname']) && isset($_POST['lastname']) && isset($_POST['ssn']))){
		echo "If you are filling out this form on behalf of someone else, you need to fill in your first name, your last name, and your social security number.";
		exit();
	}
}

// MySQL info
$hostname = 'localhost';
$username = 'root'; // Jeremiah, replace this with your MySQL username
$password = ''; // Jeremiah, replace this with your MySQL password
$db_name = 'fssa mock_data'; // Jeremiah, replace this with the name of the database

// Connect to the database
$con = mysqli_connect($hostname, $username, $password) or exit("Could not connect to MySQL.");
mysqli_select_db($con, $db_name) or die("Could not connect to database.");

if(isset($_POST['clientSSN'])){
	$ssn = filter_var($_POST['clientSSN'], FILTER_SANITIZE_STRING);
	$sql =  "CALL `checkUser`(\"".$ssn."\")";
	$query = mysqli_query($con, $sql) or die(mysqli_error($con));
}elseif(isset($_POST['clientRID'])){
	$ssn = filter_var($_POST['clientRID'], FILTER_SANITIZE_STRING);
	$sql =  "CALL `checkUser`(\"".$rid."\")"; 
	$query = mysqli_query($con, $sql) or die(mysqli_error($con));
}

// Do something upon error
if(!$query){
	echo "We were unable to process your request.  Please try again.  This page will redirect in five seconds.";
	// 5, 4, 3, 2, 1... nothing
	sleep(5);
	header("Location: returningClient.php");
}

echo "You have successfully logged on.  This page will redirect in five seconds.";
$_SESSION['ssn'] = $ssn;

	// 5, 4, 3, 2, 1, action!
sleep(5);
header("Location: dashboard.php");

// Close the connection the the database
mysqli_close($con);

?>