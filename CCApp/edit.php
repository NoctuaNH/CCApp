<?php
//Connection to datbase
require_once("connect.php");

//Edit return from index page
if(isset($_GET['id'])){
	$id = $_GET['id'];
db();
global $link;
$query = "SELECT date, reason FROM returns WHERE id = '$id'";
$result = mysqli_query($link, $query);
if(mysqli_num_rows($result)==1){
	$row = mysqli_fetch_array($result);
	if($row){
		$date = $row['date'];
		$reason = $row['reason'];
	echo "<h1>Edit Return</h1>
	<form action='edit.php?id=$id' method='post'>
	<h2>Date:</h2><input type='date' name='date' value='$date'>
	<h2>Reason:</h2><input type='text' name='reason' value='$reason'>
	<br>
	<br>
	<input type='submit' name='submit' value='Edit' style='background: white; color:black; font-size: 1.4em'>
	</form>
	<button type='submit' style='background: white; color: #666, font-size: 1.4em'><a href='index.php' a style='text-decoration:none; color:black'>Back</a></button>";
	}
}
else{
	echo "No returns";
}
if(isset($_POST['submit'])){
	$date = $_POST['date'];
	$reason = $_POST['reason'];
db();
global $link;
$query = "UPDATE returns SET date = '$date', reason = '$reason' WHERE id = '$id'";
$insertEdited = mysqli_query($link, $query);
if($insertEdited){
	echo "Return updated";
}
else{
	echo mysqli_error($link);
}
}
}
?>
