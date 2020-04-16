<?php
//Connection to datbase
require_once("connect.php");

//Remove page

if(isset($_GET['id'])){
	$id = $_GET['id'];
db();
global $link;
$query = "DELETE FROM returns WHERE id = '$id'";
$delete = mysqli_query($link, $query);
if($delete){
	echo "<h2>Return deleted</h2>
		<button type='submit' style='background: white; color: #black, font-size: 1.4em'><a href='index.php' a style='text-decoration:none; color:black'>Back</a></button>";
}
}
?>