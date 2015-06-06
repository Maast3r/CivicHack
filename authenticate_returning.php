<?php
session_start();

// Make sure SSN or RID is entered
if(!isset($_POST['clientSSN']) && !isset($_POST['clientRID'])){
	echo 'A social security number or RID is required to log in.';
	exit();
}

if(isset($_POST['firstname']) || isset($_POST['lastname']) || isset($_POST['ssn'])){
	if(!(isset($_POST['firstname']) && isset($_POST['lastname']) && isset($_POST['ssn']))){
		echo "If you are filling out this form on behalf of someone else, you need to fill in your first name, your last name, and your social security number."
		exit();
	}
}

// MySQL info
$hostname = 'localhost';
$username = 'root'; // Jeremiah, replace this with your MySQL username
$password = 'password'; // Jeremiah, replace this with your MySQL password
$db_name = 'database' // Jeremiah, replace this with the name of the database

if(isset($_POST['clientSSN'])){
	$ssn = filter_var($_POST['clientSSN'], FILTER_SANITIZE_STRING);
}

// Now for the authentication part
try{
	// I dunno man, just look at the link in FSSA/where_we_get_info.txt
	$db_head = new PDO("mysql:host=$hostname;dbname=$db_name", $username, $password);
	$db_head->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION)
	// SQL statement
	$sql = $db_head->prepare("SELECT ssn FROM user_information WHERE ssn = $ssn");
	$sql->execute();

	echo "You have successfully logged on.  This page will redirect in five seconds.";
	// 5, 4, 3, 2, 1, action!
	sleep(5);
	header("Location: dashboard.php");
}catch(Exception $e){
	$message = "We were unable to process your request.  Please try again.  This page will redirect in five seconds.";
	// 5, 4, 3, 2, 1, action!
	sleep(5);
	header("Location: returningClient.php");
}

?>



<!-- probably not necessary -->
<!--

<?php
/*
session_start();
//don't require 'your' fields (only used if someone else is coming for them)
if($_GET['login']){
	if($_POST['firstname'] == 'FIRSTNAME' && $_POST['lastname'] == 'LASTNAME' && $_POST['ssn'] == 'SSN'  
		&& $_POST['clientfirstname'] == 'CLIENTFIRSTNAME' && $_POST['clientlastname'] == 'CLIENTLASTNAME' && $_POST['clientSSN'] == 'CLIENTSSN' 
		&& $_POST['vote'] == 'VOTE'){
		$_SESSION['loggedin'] = 1;
		header("Location: dashboard.php");
		exit;
	}else{
		echo "Wrong details";
	}
}

?>
-->