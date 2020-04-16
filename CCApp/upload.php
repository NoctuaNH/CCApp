<?php
//Establish connection to database
require_once("connect.php");

//Upload page

if(isset($_POST['submit'])){
	$date = $_POST['date'];
	$reason = $_POST['reason'];
	
// Connection to the returns database and add uploaded return
db();
global $link;
$query = "INSERT INTO returns(date, reason) VALUES ('$date', '$reason')";
$insertReturn = mysqli_query($link, $query);
if($insertReturn){
	echo "Return Uploaded";
}
else{
	echo mysqli_error($link);
}
}?>

<html>
	<head>
	<title>Return Upload</title>
	</head>
	<body>
		<h1> Upload Return here</h1>
			<form method ="post" action="upload.php">
				<h2>Date</h2>
				<input name="date" type="date">
				<h2>Reason</h2>
				<input name="reason" type="text">
				<br>
				<br>
			<input type="submit" name ="submit" value="Upload" style="background: white; color:black; font-size:1.4em">
		</form>
		<br>
		<br>
		<button type="submit" style="background: white; color: black, font-size: 1.4em"><a href="index.php" a style="text-decoration:none; color:black">Back</a></button>
	</body>
</html>
	
