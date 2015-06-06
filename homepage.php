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
	
<?php 
session_start();
if(isset($_SESSION['ssn'])){ 
	header("Location: dashboard.php");
}else{ ?>
	
	<body>
		<h1>I am a:</h1>
		<span id="button_block"> 
			<button type="button" id='new_form' onclick="Javascript:window.location.href = 'newClient.php';">New Client</button>
			<h3>OR</h3>
			<button type="button" id='new_form' onclick="Javascript:window.location.href = 'returningClient.php';">Returning Client</button> 
		</span>
	</body>
</html>
<?php } ?>