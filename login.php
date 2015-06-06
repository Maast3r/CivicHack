<?php
//first_name,last_name,SSN,register to vote?
session_start();

if($_GET['login']){
	if($_POST['firstname'] == 'FIRSTNAME' && $_POST['lastname'] == 'LASTNAME' && $_POST['ssn/rid'] == 'SSN/RID' && $_POST['vote'] == 'VOTE'){
		$_SESSION['loggedin'] = 1;
		header("Location: dashboard.php");
		exit;
	}else{
		echo "Wrong details";
	}
}

?>

Log in:
<form action="?login=1" method="post">
First name: <input type="text" name="firstname" />
Last name: <input type="text" name="lastname" />
Social Security Number: <input type="password" name="ssn/rid" />
Click to register to vote: <button type="button">Register<button />
<input type="submit"/>
</form>