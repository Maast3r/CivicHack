<!DOCTYPE html>
<?php
    session_start();
    if(!isset($_SESSION['ssn']))
    {   
        echo 'You are already logged out. You cannot logout if you are not logged in.<br> <a href="homepage.php">Login</a>';
    }
    else
    {
?>
<html>
	<head>
		<title>Logout</title>
		<meta charset="utf-8" />
		
		<link href="http://s3.amazonaws.com/codecademy-content/courses/ltp/css/shift.css" rel="stylesheet">
		<link rel="stylesheet" href="http://s3.amazonaws.com/codecademy-content/courses/ltp/css/bootstrap.css">
		<link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400;300' rel='stylesheet' type='text/css'>
    	<link href="login.css" type="text/css" rel="stylesheet" />
	</head>

	<body>
		<h1>You Are Logged out</h1>
		<?php
            session_unset();
            session_destroy();
        }
		?>
        <a href="homepage.php">Back to Homepage</a>
    <script type="text/javascript">
      window.setTimeout(function(){
        window.location.href = "homepage.php";
      }, 5000});
	</body>
</html>
  d