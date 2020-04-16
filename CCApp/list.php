<?php
//Connection to datbase
require_once("connect.php");

//View single return from index page
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
	echo "<button type='submit' style='background: white; color: #black, font-size: 1.4em'><a href='index.php' a style='text-decoration:none; color:black'>View all returns</a></button>
	<h2>ID: $id</h2>
	<h2>Date: $date</h2>
	<h2>Reason: $reason</h2>"
	;
	}
}
else{
	echo 'No returns';
}
}
?>