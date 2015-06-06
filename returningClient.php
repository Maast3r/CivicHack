<!DOCTYPE html>
<?php
session_start();

if($_GET['login']){
	if($_POST['firstname'] == 'FIRSTNAME' && $_POST['lastname'] == 'LASTNAME' && $_POST['ssn'] == 'SSN'
		&& $_POST['clientfirstname'] == 'CLIENTFIRSTNAME' && $_POST['clientlastname'] == 'CLIENTLASTNAME' && $_POST['clientSSN'] == 'CLIENTSSN' && $_POST['clientRID'] == 'CLIENTRID' 
		&& $_POST['vote'] == 'VOTE'){
		$_SESSION['loggedin'] = 1;
		header("Location: dashboard.php");
		exit;
	}else{
		echo "Wrong details";
	}
}

?>

<html>
	<head>
		<title>Returning Client</title>title>
		<meta charset="utf-8" />
	</head>head>
	
	<body>	
		<h1>Check in:</h1>
		<form action="authenticate_returning.php" method="post">
			<h5>Client Social Security Number:</h5> <input type="password" name="clientSSN" />
			<h3>OR</h3><br/>
			<h5>Client RID:</h5> <input type="password" name="clientRID" />
			<h2>Only fill out the following fields if you are here on behalf of someone else</h2><br/>
			<h5>First name:</h5> <input type="text" name="firstname" />
			<h5>Last name:</h5> <input type="text" name="lastname" />
			<h5>Your Social Security Number:</h5> <input type="password" name="ssn" />
			<h5>Click to register to vote:</h5> <button type="button" id='b01' value="Register" onclick="openWin()"></button> 
			<input type="submit"/>
		</form>
	</body>


<script type="text/javascript">
       function openWin() {
        	myWindow=window.open('https://indianavoters.in.gov/PublicSite/OVR/Introduction.aspx?Link=Polling', '_blank');
            myWindow.focus();
       }
</script>