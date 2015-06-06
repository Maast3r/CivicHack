<!DOCTYPE html>

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
		<link href="returningClient.css" type="text/css" rel="stylesheet" />
	</head>
	
	<body>	
		<h1>Check in:</h1>
		<form action="authenticate_returning.php" method="post">
			<span class="inputField"><span class="inputFieldName">Client Social Security Number:</span> <input type="password" name="clientSSN" /></span><br/>
			<span class="inputField"><h4>OR</h4></span>
			<span class="inputField"><span class="inputFieldName">Client RID: </span><input type="password" name="clientRID" /></span><br/>
			<h3>Only fill out the following fields if you are here on behalf of someone else</h3><br/>
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