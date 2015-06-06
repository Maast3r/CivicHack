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
	
	<body>
		<span class="inputField"><span class="inputFieldName">
			<?php if(in_array("interview", $_POST['need'])){ ?>
			<h2>Please take a seat and wait for your name to be called.</h2></span>
		<span class="inputField"><span class="inputFieldName">
			<?php }if(in_array("question", $_POST['need'])){ ?>
			<h2>Please take a seat and wait for your name to be called.</h2></span>
		<span class="inputField"><span class="inputFieldName">
			<?php }if(in_array("benefits", $_POST['need'])){ ?>
			<h2>Please go to the kiosk with the Benefits sign.</h2></span>
		<span class="inputField"><span class="inputFieldName">
			<?php }if(in_array("documents", $_POST['need'])){ ?>
			<h2>Please go to the kiosk with the Documents sign.</h2></span>
		<?php } ?>
	</body>
</html>