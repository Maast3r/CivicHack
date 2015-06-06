<?php
foreach ($_POST['need'] as $request) {
	if($request = "interview"){ ?>
		<h2>Please take a seat and wait for your name to be called.</h2>
	<?php }if($request = "question"){ ?>
		<h2>Please take a seat and wait for your name to be called.</h2>
	<?php }
	if($request = "benefits"){ ?>
		<h2>Please go to the kiosk with the Benefits sign.</h2>
	<?php }
	if($request = "documents"){ ?>
		<h2>Please go to the kiosk with the Documents sign.</h2>
	<?php }
} ?>