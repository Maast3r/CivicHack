<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<title>Dashboard</title>
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
		<link href="dashboard.css" type="text/css" rel="stylesheet" />
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	</head>

<?php 
session_start();
if(!isset($_SESSION['ssn'])){ 
	echo "You are not logged in.  Please log in to view your dashboard.";
?>
	<br><a href="returningClient.php">Login</a>
<?php }else{ ?>

	<body>
		<h1>Stations</h1>
		<h2>Check each box that meets your needs.</h2>
		<form action="actions.php" method="post">
			<div class="checkbox"><input type="checkbox" name="need[]" id="request" value="interview"> <h5>I am waiting for an interview.</h5></div><br/>
			<div class="checkbox"><input type="checkbox" name="need[]" id="request" value="question"> <h5>I have a specific case question and need to see a case worker.</h5></div><br/>
			<div class="checkbox"><input type="checkbox" name="need[]" id="request" value="benefits"> <h5>I want to apply for benefits.</h5></div><br/>
			<div class="checkbox"><input type="checkbox" name="need[]" id="request" value="documents"> <h5>I want to scan in documents.</h5></div><br/>
			<input type="submit" value="Submit" class="btn btn-default">
		</form>
		<button type="button" id='new_form' onclick="Javascript:window.location.href = 'logout.php';">Logout</button> 
	</body>
</html>
<?php } ?>