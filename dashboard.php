<?php 

if(!isset($_SESSION['ssn'])){ 
	echo "You are not logged in.  Please log in to view your dashboard.";
}else{ ?>
	<h1>Stations</h1>
	<h2>Click on each link for directions depending on your needs.</h2>
	<form action="actions.php" method="post">
		<input type="checkbox" name="need[]" id="request" value="interview"> I am waiting for an interview.<br>
		<input type="checkbox" name="need[]" id="request" value="question"> I have a specific case question and need to see a case worker.<br>
		<input type="checkbox" name="need[]" id="request" value="benefits"> I want to apply for benefits.<br>
		<input type="checkbox" name="need[]" id="request" value="documents"> I want to scan in documents.<br>
		<input type="submit" value="Submit">
	</form>
<?php } ?>