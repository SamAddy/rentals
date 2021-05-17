<?php

//Development connection
//$dbhost = "localhost";
//$dbuser = "root";
//$dbpass = "";
//$dbname = "rentals";

/// Remote database connection 
$dbhost = "remotemysql.com";
$dbuser = "VEjTUKiHZM";
$dbpass = "j4HrzaVV4O";
$dbname = "VEjTUKiHZM";

if(!$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname))
{

	die("failed to connect!");
}

?>