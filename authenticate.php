<?php
session_start();

// Make sure all information is entered
if(!isset($_POST['clientfirstname'], $_POST['clientlastname'], $_POST['clientSSN'], $_POST['form_token'])){
	$message = "Please enter a valid first name, a valid last name, and a valid social security number.";
}elseif($_POST['form_token'] != $_SESSION['form_token']){
	$message = "Invalid form submission.";
}

// Sanitize each of the input fields, we don't want hackers
$firstname = filter_var($_POST['clientfirstname'], FILTER_SANITIZE_STRING);
$lastname = filter_var($_POST['clientlastname'], FILTER_SANITIZE_STRING);
$ssn = filter_var($_POST['clientSSN'], FILTER_SANITIZE_STRING);

// MySQL info
$hostname = 'localhost';
$username = 'root'; // Jeremiah, replace this with your MySQL username
$password = 'password'; // Jeremiah, replace this with your MySQL password
$db_name = 'database' // Jeremiah, replace this with the name of the database

// Now for the authentication part
try{
	$db_head = new PDO("mysql:host=$hostname;dbname=$db_name", $username, $password);
	$db_head->setAttribute(PDO::ATTR_ERRMOSE, PDO::ERRMODE_)
	$sql = $db_head->prepare("INSERT INTO user_information (first_name, last_name, ssn) VALUES ($firstname, $lastname, $ssn)");
	$sql->execute();
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