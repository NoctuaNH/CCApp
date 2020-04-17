<?php
//Connection to Returns database
function db(){
    define("HOST", "returnsdb.ch3riiwjvdch.us-east-1.rds.amazonaws.com");
    define ("DBUSER", "dbadmin");
    define ("PASS", "db_password");
    define ("DB", "returnsdb");
    define ("PORT", "3306");
    $link = mysqli_connect(HOST, DBUSER, PASS, DB, PORT)
    or die("Cannot establish connection to database");
     $database = mysqli_select_db(DB) or die("Cannot establish connection to databse");
    return $link;
    }
?>
