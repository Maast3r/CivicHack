<!DOCTYPE html>

<html>
	<head>
		<title>Directions</title>
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
		<script> 
			var url = window.location.href;
			var checked = url.split("?")[1].split("-");
			var tag = document.createElement("div");
			for (var i = 0; i < checked.length; i++) {
				if (checked[i] == "interview") {
					var p = document.createElement("p");
					p.innerHTML = "For your interview: please proceed to the waiting area until your name is called by the next available associate";
					tag.appendChild(p);
				} else if (checked[i] == "questions") {
					var p = document.createElement("p");
					p.innerHTML = "For your case questions: please proceed to the waiting area until your name is called by the next available associate";
					tag.appendChild(p);
				} else if (checked[i] == "benefits") {
					var p = document.createElement("p");
					p.innerHTML = "To apply for benefits: please proceed to the next available computer termianal to apply for benefits";
					tag.appendChild(p);
				} else {
					var p = document.createElement("p");
					p.innerHTML = "To scan documents: please proceed to the next available computer terminal to scan your documents";
					tag.appendChild(p);
				}
			}
		</script>
	</body>
</html>