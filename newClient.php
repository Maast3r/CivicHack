<!DOCTYPE html>
<!-- moving the above to a comment in authentication.php, that was only necessary for the first tutorial we were looking at
those strings compare to the literal strings 'FIRSTNAME', 'LASTNAME', etc. -->
<html>
	<head>
		<title>Returning Client</title>title>
		<meta charset="utf-8" />
	</head>head>
	
	<body>	
		<h1>Check in:</h1>
		<form action="authenticate_new.php" method="post">
			<h5>Client First name:</h5> <input type="text" name="clientfirstname" />
			<h5>Client Last name:</h5> <input type="text" name="clientlastname" />
			<h5>Client Social Security Number:</h5> <input type="password" name="clientSSN" />
			<h2>Only fill out the following fields if you are applying on behalf of someone else</h2><br/>
			<h5>Your First name (if different from above):</h5> <input type="text" name="firstname" />
			<h5>Your Last name (if different from above):</h5> <input type="text" name="lastname" />
			<h5>Your Social Security Number (if different from above):</h5> <input type="password" name="ssn" />
			<h5>Click to register to vote:</h5> <button type="button" value="Register" onclick="openWin()"></button>
			<input type="submit"/>
		</form>
	</body>

<script type="text/javascript">
       function openWin() {
        	myWindow=window.open('https://indianavoters.in.gov/PublicSite/OVR/Introduction.aspx?Link=Polling', '_blank');
            myWindow.focus();
       }
</script>

<!-- from now, all authentication will take place in authenticate.php, as that's where the form links -->