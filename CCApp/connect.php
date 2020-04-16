<?php
//Connection to Returns database
function db(){
	global $link;
	$link = mysqli_connect("localhost", "root", "", "returnsdb", "3308")
	or die("Cannot establish connection to database");
	return $link;
	}
?>