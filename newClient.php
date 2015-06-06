<!DOCTYPE html>
<!-- moving the above to a comment in authentication.php, that was only necessary for the first tutorial we were looking at
those strings compare to the literal strings 'FIRSTNAME', 'LASTNAME', etc. -->
<html>
	<head>
		<title>Returning Client</title>
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
		<link href="newClient.css" type="text/css" rel="stylesheet" />
	</head>
	
	<body>	
		<h1>Check in:</h1>
		<form action="authenticate_new.php" method="post">
			<span class="inputField"><span class="inputFieldName">Client First name:</span> <input type="text" name="clientfirstname" /></span><br/><br/>
			<span class="inputField"><span class="inputFieldName">Client Last name:</span> <input type="text" name="clientlastname" /></span><br/><br/>
			<span class="inputField"><span class="inputFieldName">Client Social Security Number:</span> <input type="password" name="clientSSN" /></span><br/><br/>
			<span class="inputField"><span class="inputFieldName">Client Street Address:</span> <input type="text" name="address" /></span><br/><br/>
			<span class="inputField"><span class="inputFieldName">Client Zip Code:</span> <input type="text" name="zipcode" /></span><br/><br/>
			<span class="inputField"><span class="inputFieldName">Client Medicaid Number:</span> <input type="password" name="medicaid" /></span><br/>
			<span class="inputField"><h3>Only fill out the following fields if you are applying on behalf of someone else</h3><br/></span>
			<span class="inputField"><span class="inputFieldName">Your First name (if different from above):</span> <input type="text" name="firstname" /></span><br/><br/>
			<span class="inputField"><span class="inputFieldName">Your Last name(if different from above):</span><input type="text" name="lastname" /></span><br/><br/>
			<span class="inputField"><span class="inputFieldName">Your Social Security Number (if different from above):</span> <input type="password" name="ssn" /></span><br/>
			<br/>
			<span id="button_block"> 
				<span>Click to register to vote:</span>
				<button type="button" class="btn btn-primary" onclick="openWin()">Register</button> 
			</span>
			<br/>
			<br />
			<input class="btn btn-success" type="submit"/>
		</form>
	</body>

	<script type="text/javascript">
       function openWin() {
        	myWindow=window.open('https://indianavoters.in.gov/PublicSite/OVR/Introduction.aspx?Link=Polling', '_blank');
            myWindow.focus();
       }
	</script>
</html>
<!-- from now, all authentication will take place in authenticate.php, as that's where the form links -->